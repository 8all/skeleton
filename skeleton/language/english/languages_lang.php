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
 * @since 		Version 1.0.0
 */
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Language Module - Admin Language (English)
 *
 * @package 	CodeIgniter
 * @subpackage 	Skeleton
 * @category 	Modules\Language
 * @author 		Kader Bouyakoub <bkader@mail.com>
 * @link 		https://goo.gl/wGXHO9
 * @copyright	Copyright (c) 2018, Kader Bouyakoub (https://goo.gl/wGXHO9)
 * @since 		Version 1.0.0
 * @version 	1.3.2
 */

// Dashboard page title and tip.
$lang['sln_manage_languages']     = 'Manage Languages';
$lang['sln_manage_languages_tip'] = 'Enabled, disable, install and set site\'s default language. Enabled languages are available to site visitors.';

// Language details.
$lang['sln_folder']       = 'Folder';
$lang['sln_abbreviation'] = 'Abbreviation';
$lang['sln_is_default']   = 'Is Default';
$lang['sln_enabled']      = 'Enabled';

// Language actions.
$lang['sln_make_default'] = 'Make Default';

// Success messages.
$lang['sln_language_enable_success']  = 'Language successfully enabled.';
$lang['sln_language_disable_success'] = 'Language successfully disabled.';
$lang['sln_language_default_success'] = 'Default language successfully changed.';

// Error messages.
$lang['sln_english_required']       = 'Required and untouchable.';
$lang['sln_language_enable_error']  = 'Unable to enable language.';
$lang['sln_language_disable_error'] = 'Unable to disable language.';
$lang['sln_language_default_error'] = 'Unable to change default language.';

// Missing language errors.
$lang['sln_language_missing_folder']  = 'The language folder is missing. Lines may not be translated.';
$lang['sln_language_missing_line']    = 'The requested language line could not be found.';
$lang['sln_language_enable_missing']  = 'The language you are trying to enable is not available.';
$lang['sln_language_disable_missing'] = 'The language you are trying to disable is not available.';
$lang['sln_language_default_missing'] = 'The language you are trying to make as default is not available.';

// Already enabled/disable/default message.
$lang['sln_language_enable_already']  = 'This language is already enabled.';
$lang['sln_language_disable_already'] = 'This language is already disabled.';
$lang['sln_language_default_already'] = 'This language is already the default one.';
