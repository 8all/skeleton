
# Installing CodeIgniter Skeleton


The stable branch will always be the **master** branch. So you may want to download it because any other branches will simply be there for development purposes.

## Downloading Skeleton

* [CodeIgniter Skeleton v2.1.0](https://github.com/bkader/skeleton/archive/2.1.0.zip)
* [CodeIgniter Skeleton v2.0.0](https://github.com/bkader/skeleton/archive/2.0.0.zip)
* [CodeIgniter Skeleton v1.5.0](https://github.com/bkader/skeleton/archive/1.5.0.zip)
* [CodeIgniter Skeleton v1.4.0](https://github.com/bkader/skeleton/archive/1.4.0.zip)
* [CodeIgniter Skeleton v1.3.0](https://github.com/bkader/skeleton/archive/1.3.0.zip)
* [CodeIgniter Skeleton v1.2.0](https://github.com/bkader/skeleton/archive/1.2.0.zip)
* [CodeIgniter Skeleton v1.1.0](https://github.com/bkader/skeleton/archive/1.1.0.zip)
* [CodeIgniter Skeleton v1.0.0](https://github.com/bkader/skeleton/archive/1.0.0.zip)

Public Git access is available at [GitHub](https://github.com/bkader/skeleton). Please note that while every effort is made to keep this code base functional, we cannot guarantee the functionality of code taken from the develop branch.

Stable versions are also available via [GitHub Releases](https://github.com/bkader/skeleton/releases).

## Installation

Once downloaded, unzip the package where you want to install the **Skeleton**.
Note that there are multipe folders and the structure does not have to be respected as long as you set paths to required folders.

### v2
* **application**: This is where your application files goes. It's in fact CodeIgniter application folder.
* **content**: This folder contains all publicly accessible folders and files: `captcha`,  `common`, `language` (in case using PHP-Gettext), `modules`, `plugins`, `themes` and `uploads`.
* **license**: This folder contains all licenses files to almost all used external libraries.
* **skeleton**: this the main folder that contains skeleton `core` files as well ad CodeIgniter `system` folder. Its files must not be touched unless you know what you're doing. Keep it the way it is so that future updates will never break your code.

### v1

* **src**: This folder is better kept private. It contains all core files: application, system and skeleton folders. It also contains a dump of the SQL file that we will talk about later.
* **docs**: This folder contains -obviously- the documentation. They are all markdown files, so you may want to manage to preview these files, but you can still preview them on the Github, Gitlab or Bitbucket.
* **license**: This folder contains all licenses files to almost all used external libraries.
* **public**: This is the web root folder. The public folder contains all publicly accessible files (Don't worry, themes files are protected from direct access, except for assets).
* **tests**: This folder was created for tests purposes. To be honest, I never tried **phpunit** or any other testing tools, I created this folder to respect standard projects strcutre.

Put folders wherever you want as long as -as I said- you set correct paths to them.

## Importing Database

If you check inside the `sql_dump (v2)` or `src/mysql_dump (v1)` folder, you will see a file called **full.sql** or **skeleton.sql**, as you can tell, this is the dump for this tool database. All you have to do is to create a database and import this file. That's all.  
As of v2, you will see individual tables dumps inside `sql_dump/tables`.

## Configuration

As you may probably know, Codeigniter allow separte configuration files by environement, this is why you will find three folders: `development`, `testing` and `production`. Inside each folder, you may put configuration files and they will be loaded depending on the environement you set on the `public/index.php` file at line **58**.  
As of **v2**, both `development` and `testing` folder were removed. Only the `production` folder is kept.

For your first installation, the environement will be set to **development** by default, so you may want to edit files inside this folder: **application/config/development/** (v1 only).

Make sure to first, add your base URL. Let's suppose you installed on your local machine, inside a folder called **skeleton**:
```php
// v1: src/application/config/development/config.php
$config['base_url'] = 'http://localhost/skeleton/public/';

// v2: src/application/config/config.php
$config['base_url'] = 'http://localhost/skeleton/'; // no 'public'.
```
Note that the **public/** is required for **v1** only,  unless you changed folders structure.

Once that done, you may proceed to database configuration. Go to the environement (**development** here for **v1**) configuration folder and open the **database.php** file and set needed settings:
```php
'hostname'     => 'DB_HOST',	// You database server.
'username'     => 'DB_USER',	// Database username.
'password'     => 'DB_PASS',	// User password.
'database'     => 'DB_NAME',	// Database name.
```

## First Time Use

Once the configuration and database importation are done, you may head to your login page and login using the default created user: username `admin` with password `admin123`. Think of changing credentials in case you are in production mode.
