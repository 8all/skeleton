This module adds a whole new Access Control Level to your CodeIgniter Skeleton application.

## Installation

The link to this module will be provided soon. Once the package downloaded:

1. Head to modules installation on the dashboard and upload the archive.
2. Unzip package files into your `application/modules` OR `content/modules` folders.

## Functions

There are several functions you may use but, please **NEVER** use available classes (`Ianhub_Acl_Role` and Ianhub_Acl_Roles).  
Some functions save settings into `options` table, so it might be better to run this on themes/plugins activation.

#### `acl_instance`

This function may be used to instantiate the `Ianhub_Acl_Roles` class then have direct access to its methods.

```php
$acl = acl_instance();
$acl->add_role($slug, $name, $capabilities);
```

#### `add_role`

This function is used to add new roles to your application. It takes three (3) arguments:  

* `$slug` (_string_) : a unique slug (username) used to stored your new role.
* `$name`(_string_) : the name your new role will have.
* `$capabilities` (_array_) : An array of capibitilies and their status (`TRUE`or `FALSE`)

```php
add_role('admin', 'administrator', array(
    'manage_themes' => true,
    'manage_modules' => true,
    'manage_plugins' => true,
    'manage_users' => true,
    'add_users' => true,
    // ...
));
// Returns a `Ianhub_Acl_Role` object on success,
// null if that role already exists.
```

#### `remove_role`

This function is used to remove a previously stored role.

```php
// We remove "admin" we added obove.
remove_role('admin'); // That's all.
// Returns true if the role was removed, else false.
```

#### `get_role`

Retrieves a role object if found.

```php
// get_role($role_slug);
$admin = get_role('admin');
// The result wil be an object:
array(
    'name' => 'Administrator',
    'capabilities'=> array(
        'manage_themes' => true,
        // ...
    ),
);
```

#### `is_role`

Checks whether the given role slug is available.

```php
// is_role($slug);
is_role('manager');
// Returns: true if the role is found, else false.
```

#### `get_roles`

Returns the list of previously all registered roles objects.

#### `get_default_role`

Returns default users role (string).

```php
$role = get_default_role();
echo $role; // Default: "regular".
```

#### `set_default_role`

Returns default users role upon registration.

```php
// acl_set_defaul_role($role_slug);
set_default_role('regular');
```

#### `roles_names`

Retrieve list of all registered roles ad their names.

```php
$names = roles_names();
// array(
//      'admininstrator' => 'Administrator',
//      'manager' => 'Manager',
//      'regular' => 'Regular',
// );
```

#### `add_permission`

Adds capability to the given role.

```php
// add_permission($role, $cap, $status);
add_permission('moderator', 'manage_users', true);
add_permission('moderator', 'manage_options', false);
```

#### `remove_permission`

Removes capability from role.

```php
// remove_permission($role, $cap);
remove_permission('moderator', 'manage_options');
```

## Actions on roles

You can execute some actions on retrieved roles:

```php
$admin = get_role('admin');         // Returns the role object.
$admin->add_perm($cap, $status);    // To add capability.
$admin->remove_perm($cap);          // To remove capability.
$admin->has_perm($cap);             // To check if the role has the capability.
```

## Users function.

#### `acl_users_instance`

Simply returns an instance of `Ianhub_Acl_Users` class.

#### `acl_user_caps`

Returns an array of all user's compabilities. If the user has none, it returns user's role capabilities. IF, for some reason, nothing was found, it returns an empty array.

```php
// $user may be user's ID/username or KB_User instance.
$caps = acl_user_caps($user); // Returns an array;
```

#### `has_permission`

Checks whether the selected user has the given capability.  The capability must exist and **MUST** be set to `TRUE`.

```php
// $user may be user's ID/username or KB_User instance.
$status = has_permission($user, 'manage_options'); // Boolean
```

#### `promote_user`

Promotes the selected user to the given role. The role must exit to proceed. Otherwise, it will return false.

```php
// $user may be user's ID/username or KB_User instance.
$status = promote_user($user, 'manager');
```

#### `demote_user`

Demotes the user back to default users role (_default: regular_).

```php
// $user may be user's ID/username or KB_User instance.
$status = demote_user($user);
```

#### `add_user_permission`

Adds the selected permission to the selected user.

```php
// add_user_permission($user, $perm, $status);
add_user_permission($user, 'manage_users', true);
```

#### `remove_user_permission`

Removes a previously added capability from user capabilities list.

```php
// $user may be user's ID/username or KB_User instance.
remove_user_permission($user, 'manage_themes');
```

## Initialize ACL module.

Once the module is activated, it will call the `acl_initialized` function that will automatically add the `administrator` role with all of Skeleton actions reserved for administrators.  
Once the role is added, it will automatically guess the permission depending on the dashboard area (`uri_string`), if the user does not have the permission, it will simply display the permission error.

When developing your own modules, make sure to add permissions or roles to it, only upon activation, and make sure to remove them in case of module deactivation. Here is an example:  

```php
// Upon module's activation.
add_action('module_activate_your-module', function() {
    // If the role exists, nothing to do.
    if (is_role('your-role'))
    {
        return;
    }

    // Otherwise, add your role:
    add_role('your-role', 'Role Name', array(
        // List of your permissions.
        'manage_xx' => true,    // 'manage_' is added to index method.
        'activate_' => true,    // 'your-module/whatever?action=activate'
        // ....
    ));
});

// Upon module deactivation:
add_action('module_deactivate_your-module', function() {
    remove_role('your-role');
    // That's all.
});
```
