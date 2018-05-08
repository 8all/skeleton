<?php
/**
 * CodeIgniter Skeleton
 *
 * A ready-to-use CodeIgniter skeleton  with tons of new features
 * and a whole new concept of hooks (actions and filters) as well
 * as a ready-to-use and application-free theme and plugins system.
 *
 * This content is released under the MIT License (MIT)
 *
 * Copyright (c) 2018, Kader Bouyakoub <bkader@mail.com>
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @package 	CodeIgniter
 * @author 		Kader Bouyakoub <bkader@mail.com>
 * @copyright	Copyright (c) 2018, Kader Bouyakoub <bkader@mail.com>
 * @license 	http://opensource.org/licenses/MIT	MIT License
 * @link 		https://goo.gl/wGXHO9
 * @since 		1.3.3
 */
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Language Module - Ajax Controller.
 *
 * @package 	CodeIgniter
 * @subpackage 	Skeleton
 * @category 	Modules\Controllers
 * @author 		Kader Bouyakoub <bkader@mail.com>
 * @link 		https://goo.gl/wGXHO9
 * @copyright 	Copyright (c) 2018, Kader Bouyakoub (https://goo.gl/wGXHO9)
 * @since 		1.3.3
 * @version 	1.3.3
 */
class Ajax extends AJAX_Controller
{
	/**
	 * Class constructor
	 * @access 	public
	 * @param 	none
	 * @return 	void
	 */
	public function __construct()
	{
		parent::__construct();

		// We add our safe admin AJAX methods.
		array_push(
			$this->safe_admin_methods,
			'enabled',
			'disable',
			'make_default'
		);

		// We load module language file.
		$this->load->language('language/language');
	}

	// ------------------------------------------------------------------------
	// Administration methods.
	// ------------------------------------------------------------------------

	/**
	 * enable
	 *
	 * Method for enabling the selected language.
	 *
	 * @author 	Kader Bouyakoub
	 * @link 	https://goo.gl/wGXHO9
	 * @since 	1.3.3
	 *
	 * @access 	public
	 * @param 	string 	$name 	The language folder name.
	 * @return 	AJAX_Controller::response.
	 */
	public function enable($name = null)
	{
		// No valid language provided?
		if (empty($name) OR ! array_key_exists($name, $this->lang->languages()))
		{
			$this->response->header  = self::HTTP_NOT_ACCEPTABLE;
			$this->response->message = lang('sln_language_enable_missing');
			return;
		}

		// Get language stored in database.
		$db_langs = $this->config->item('languages') ?: array();

		// The language already enabled?
		if (in_array($name, $db_langs))
		{
			$this->response->header  = self::HTTP_NOT_MODIFIED;
			$this->response->message = lang('sln_language_enable_already');
			return;
		}

		// We add the language to database languages.
		$db_langs[] = $name;
		asort($db_langs);

		// We update languages in database.
		if ($this->kbcore->options->set_item('languages', $db_langs))
		{
			$this->response->header  = self::HTTP_OK;
			$this->response->message = lang('sln_language_enable_success');

			// We log the activity.
			log_activity($this->c_user->id, 'lang:act_language_enable::'.$name);

			return;
		}

		// Default message is that we are unable to enable the language.
		$this->response->message = lang('sln_language_enable_error');
	}

	// ------------------------------------------------------------------------

	/**
	 * disable
	 *
	 * Method for disabling the selected language.
	 *
	 * @author 	Kader Bouyakoub
	 * @link 	https://goo.gl/wGXHO9
	 * @since 	1.3.3
	 *
	 * @access 	public
	 * @param 	string 	$name 	The language folder name.
	 * @return 	AJAX_Controller::response().
	 */
	public function disable($name = null)
	{
		// No valid language provided?
		if (empty($name) OR ! array_key_exists($name, $this->lang->languages()))
		{
			$this->response->header  = self::HTTP_NOT_ACCEPTABLE;
			$this->response->message = lang('sln_language_disable_missing');
			return;
		}

		// Get language from database.
		$db_langs = $this->config->item('languages') ?: array();

		// The language is already disabled?
		if ( ! in_array($name, $db_langs))
		{
			$this->response->header  = self::HTTP_NOT_MODIFIED;
			$this->response->message = lang('sln_language_disable_already');
			return;
		}

		// We remove the language from database languages array.
		foreach ($db_langs as $key => $lang)
		{
			if ($lang === $name)
			{
				unset($db_langs[$key]);
			}
		}
		asort($db_langs);

		// We proceed to update.
		if ($this->kbcore->options->set_item('languages', $db_langs))
		{
			/**
			 * If the language folder is the default selected 
			 * language, we make sure to fallback to english.
			 */
			if ($name === $this->kbcore->options->item('language'))
			{
				$this->kbcore->options->set_item('language', 'english');
			}

			$this->response->header  = self::HTTP_OK;
			$this->response->message = lang('sln_language_disable_success');

			// Log the activity.
			log_activity($this->c_user->id, 'lang:act_language_disable::'.$name);
			return;
		}

		// Default message is that we are unable to disable the language.
		$this->response->message = lang('sln_language_enable_error');
	}

	// ------------------------------------------------------------------------

	/**
	 * make_default
	 *
	 * Method for making the selected language the default site's language.
	 *
	 * @author 	Kader Bouyakoub
	 * @link 	https://goo.gl/wGXHO9
	 * @since 	1.3.3
	 *
	 * @access 	public
	 * @param 	string 	$name 	The language folder name.
	 * @return 	AJAX_Controller::response().
	 */
	public function make_default($name = null)
	{
		// Default header status code.
		$this->response->header = 409;

		// No valid language provided?
		if (empty($name) OR ! array_key_exists($name, $this->lang->languages()))
		{
			$this->response->header  = 409;
			$this->response->message = lang('sln_language_default_missing');
			return;
		}

		// Retrieve languages from database.
		$db_langs = $this->config->item('languages') ?: array();

		// If the language is not available, we add it.
		if ( ! in_array($name, $db_langs))
		{
			$db_langs[] = $name;
			asort($db_langs);

			// We had issues with adding the language?
			if ( ! $this->kbcore->options->set_item('languages', $db_langs))
			{
				$this->response->message = lang('sln_language_default_error');
				return;
			}
		}

		// We update the site's default language.
		if ($this->kbcore->options->set_item('language', $name))
		{
			$this->response->header  = 200;
			$this->response->message = lang('sln_language_default_success');

			// Log the activity.
			log_activity($this->c_user->id, 'lang:act_language_default::'.$name);
			return;
		}

		// Otherwise, we could not set default language.
		$this->response->message = lang('sln_language_default_error');
	}

}
