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
 * Activities Module - Ajax Controller.
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
	 * Class constructor.
	 * @access 	public
	 * @param 	none
	 * @return 	void
	 */
	public function __construct()
	{
		parent::__construct();

		// Add our safe admin AJAX method.
		array_push($this->safe_admin_methods, 'delete');
	}

	// ------------------------------------------------------------------------
	// Administration methods.
	// ------------------------------------------------------------------------

	/**
	 * Delete the selected activity.
	 * @access 	public
	 * @param 	int 	$id 	The activity's ID.
	 * @return 	void
	 */
	public function delete($id = 0)
	{
		// Did we provide an invalid id?
		if ( ! is_numeric($id) OR $id < 0)
		{
			$this->response->header  = self::HTTP_NOT_ACCEPTABLE;
			$this->response->message = lang('CSK_ERROR_NONCE_URL');
			return;
		}

		// Successfully deleted?
		if (false !== $this->kbcore->activities->delete($id))
		{
			$this->response->header  = self::HTTP_OK;
			$this->response->message = lang('sac_activity_delete_success');
			return;
		}

		// Otherwise, the activity could not be deleted.
		$this->response->message = lang('sac_activity_delete_error');
	}

}
