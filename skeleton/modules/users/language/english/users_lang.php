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
 * @since 		1.0.0
 */
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Users Module - Users Language (English)
 *
 * @package 	CodeIgniter
 * @subpackage 	Skeleton
 * @category 	Modules\Language
 * @author 		Kader Bouyakoub <bkader@mail.com>
 * @link 		https://goo.gl/wGXHO9
 * @copyright	Copyright (c) 2018, Kader Bouyakoub (https://goo.gl/wGXHO9)
 * @since 		1.0.0
 * @version 	1.3.3
 */

// ------------------------------------------------------------------------
// Users Buttons.
// ------------------------------------------------------------------------
$lang['login']           = 'Sign In';
$lang['logout']          = 'Sign Out';
$lang['register']        = 'Register';
$lang['create_account']  = 'Create Account';
$lang['forgot_password'] = 'Forgot password?';
$lang['lost_password']   = 'Lost password';
$lang['send_link']       = 'Send link';
$lang['resend_link']     = 'Resend link';
$lang['restore_account'] = 'Restore account';

$lang['profile']      = 'Profile';
$lang['view_profile'] = 'View Profile';
$lang['edit_profile'] = 'Edit Profile';

// ------------------------------------------------------------------------
// General Inputs and Label.
// ------------------------------------------------------------------------
$lang['username']          = 'Username';
$lang['identity']          = 'Username or email address';

$lang['email_address']     = 'Email address';
$lang['new_email_address'] = 'New email address';

$lang['password']          = 'Password';
$lang['new_password']      = 'New password';
$lang['confirm_password']  = 'Confirm password';
$lang['current_password']  = 'Current password';

$lang['first_name']        = 'First name';
$lang['last_name']         = 'Last name';
$lang['full_name']         = 'Full name';

$lang['gender']            = 'Gender';
$lang['male']              = 'Male';
$lang['female']            = 'Female';

$lang['company']  = 'Company';
$lang['phone']    = 'Phone';
$lang['address']  = 'Address';
$lang['location'] = 'Location';
$lang['avatar']   = 'Avatar';

// ------------------------------------------------------------------------
// Registration page.
// ------------------------------------------------------------------------
$lang['us_register_title']   = 'Register';
$lang['us_register_heading'] = 'Create Account';

$lang['us_register_success']     = 'Account successfully created. You may now login.';
$lang['us_register_info']        = 'Account successfully created. The activation link was sent to you.';
$lang['us_register_info_manual'] = 'All accounts require approval by a site admin before being active. You will receive an email once approved.';
$lang['us_register_error']       = 'Unable to create account.';

// ------------------------------------------------------------------------
// Account activation.
// ------------------------------------------------------------------------
$lang['us_activate_invalid_key'] = 'This account activation link is no longer valid.';
$lang['us_activate_error']       = 'Unable to activate account.';
$lang['us_activate_success']     = 'Account successfully activated. You may now login.';

// ------------------------------------------------------------------------
// Resend activation link.
// ------------------------------------------------------------------------
$lang['us_resend_title']   = 'Resend Activation Link';
$lang['us_resend_heading'] = 'Resend Link';

$lang['us_resend_notice']  = 'Enter your username or email address and we will send you a link to activate your account.';
$lang['us_resend_error']   = 'Unable to resend account activation link.';
$lang['us_resend_enabled'] = 'This account is already enabled.';
$lang['us_resend_success'] = 'Account activation link successfully resent. Check your inbox or spam.';

// ------------------------------------------------------------------------
// Login page.
// ------------------------------------------------------------------------
$lang['us_login_title']   = 'Sign In';
$lang['us_login_heading'] = 'Member Login';
$lang['remember_me']      = 'Remember me';

$lang['us_wrong_credentials'] = 'Invalid username/email address and/or password.';
$lang['us_account_missing']  = 'This user does not exist.';
$lang['us_account_disabled']  = 'You account is not yet active. Use the link that was sent to you or %s to receive a new one.';
$lang['us_account_banned']    = 'This user is banned from the site.';
$lang['us_account_deleted']   = 'Your account has been deleted but not yet removed from database. %s if you wish to restore it.';
$lang['us_account_deleted_admin']   = 'Your account has been deleted by an administrator thus you cannot restore it. Feel free to contact us for more details.';

// ------------------------------------------------------------------------
// Lost password page.
// ------------------------------------------------------------------------
$lang['us_recover_title']   = 'Lost Password';
$lang['us_recover_heading'] = 'Lost Password';

$lang['us_recover_notice']  = 'Enter your username or email address and we will send you a link to reset your password.';
$lang['us_recover_success'] = 'Password reset link successfully sent.';
$lang['us_recover_error']   = 'Unable to send password reset link.';

// ------------------------------------------------------------------------
// Reset password page.
// ------------------------------------------------------------------------
$lang['us_reset_title']   = 'Reset Password';
$lang['us_reset_heading'] = 'Reset Password';

$lang['us_reset_invalid_key'] = 'This password reset link is no longer valid.';
$lang['us_reset_error']       = 'Unable to reset password.';
$lang['us_reset_success']     = 'Password successfully reset.';

// ------------------------------------------------------------------------
// Restore account page.
// ------------------------------------------------------------------------
$lang['us_restore_title']   = 'Restore Account';
$lang['us_restore_heading'] = 'Restore Account';

$lang['us_restore_notice']  = 'Enter your username/email address and password to restore your account.';
$lang['us_restore_deleted'] = 'Only deleted accounts can be restored.';
$lang['us_restore_error']   = 'Unable to restore account.';
$lang['us_restore_success'] = 'Account successfully restored. Welcome back!';

// ========================================================================
// Dashboard lines.
// ========================================================================

$lang['users'] = 'Users';
$lang['user']  = 'User';

// Main dashboard heading.
$lang['us_manage_users'] = 'Manage Users';

// Users actions.
$lang['add_user']        = 'Add User';
$lang['edit_user']       = 'Edit User';
$lang['activate_user']   = 'Activate User';
$lang['deactivate_user'] = 'Deactivate User';
$lang['delete_user']     = 'Delete User';
$lang['restore_user']    = 'Restore User';
$lang['remove_user']     = 'Remove User';

// Users roles.
$lang['role']  = 'Role';
$lang['roles'] = 'Roles';

$lang['regular']       = 'Regular';
$lang['premium']       = 'Premium';
$lang['author']        = 'Author';
$lang['editor']        = 'Editor';
$lang['admin']         = 'Admin';
$lang['administrator'] = 'Administrator';

// Users statuses.
$lang['active']   = 'Active';
$lang['inactive'] = 'Inactive';

// Confirmation messages.
$lang['us_admin_activate_confirm']   = 'Are you sure you want to activate this user?';
$lang['us_admin_deactivate_confirm'] = 'Are you sure you want to deactivate this user?';
$lang['us_admin_delete_confirm']     = 'Are you sure you want to delete this user?';
$lang['us_admin_restore_confirm']    = 'Are you sure you want to restore this user?';
$lang['us_admin_remove_confirm']     = 'Are you sure you want to remove this user and all related data?';

// Success messages.
$lang['us_admin_add_success']        = 'User successfully created.';
$lang['us_admin_edit_success']       = 'User successfully updated.';
$lang['us_admin_activate_success']   = 'User successfully activated.';
$lang['us_admin_deactivate_success'] = 'User successfully deactivated.';
$lang['us_admin_delete_success']     = 'User successfully deleted.';
$lang['us_admin_restore_success']    = 'User successfully restored.';
$lang['us_admin_remove_success']     = 'User and related data successfully removed.';

// Error messages.
$lang['us_admin_add_error']        = 'Unable to create user.';
$lang['us_admin_edit_error']       = 'Unable to update user.';
$lang['us_admin_activate_error']   = 'Unable to activate user.';
$lang['us_admin_deactivate_error'] = 'Unable to deactivate user.';
$lang['us_admin_delete_error']     = 'Unable to delete user.';
$lang['us_admin_restore_error']    = 'Unable to restore user.';
$lang['us_admin_remove_error']     = 'Unable to remove user and all related data.';

// Messages on own account.
$lang['us_admin_activate_error_own']   = 'You cannot activate your own account.';
$lang['us_admin_deactivate_error_own'] = 'You cannot deactivate your own account.';
$lang['us_admin_delete_error_own']     = 'You cannot delete your own account.';
$lang['us_admin_restore_error_own']    = 'You cannot restore your own account.';
$lang['us_admin_remove_error_own']     = 'You cannot remove your own account.';

// ========================================================================
// Users settings lines.
// ========================================================================

// Pages titles.
$lang['set_profile_title']  = 'Update Profile';
$lang['set_avatar_title']   = 'Update Avatar';
$lang['set_password_title'] = 'Change Password';
$lang['set_email_title']    = 'Change Email';

// Pages headings.
$lang['set_profile_heading']  = $lang['set_profile_title'];
$lang['set_avatar_heading']   = $lang['set_avatar_title'];
$lang['set_password_heading'] = $lang['set_password_title'];
$lang['set_email_heading']    = $lang['set_email_title'];

// Success messages.
$lang['set_profile_success']  = 'Profile successfully updated.';
$lang['set_avatar_success']   = 'Avatar successfully updated.';
$lang['set_password_success'] = 'Password successfully changed.';
$lang['set_email_success']    = 'Email address successfully changed.';

// Error messages.
$lang['set_profile_error']     = 'Unable to update profile.';
$lang['set_avatar_error']      = 'Unable to update avatar.';
$lang['set_password_error']    = 'Unable to change password.';
$lang['set_email_error']       = 'Unable to change email address.';
$lang['set_email_invalid_key'] = 'This new email link is no longer valid.';

// Info messages.
$lang['set_email_info'] = 'A link to change your email address has been sent to your new address.';

// Avatar extra lines.
$lang['update_avatar']       = 'Update Avatar';
$lang['add_image']           = 'Add Image';
$lang['use_gravatar']        = 'Use Gravatar';
$lang['use_gravatar_notice'] = 'If you check this option, your uploaded profile picture will be deleted and your <a href="%s" target="_blank">Gravatar</a> image will be used instead.';
