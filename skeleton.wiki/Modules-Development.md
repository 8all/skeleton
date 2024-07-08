Modules are what make your CodeIgniter Skeleton application function. If you are not familiar with this term or how it works, please make sure to google it. I highly recommend googling how to create modules for CodeIgniter v3.x and only read the rest of this page if you are ready, because this is how to create modules for CodeIgniter Skeleton.

## Creating Modules

Modules have two localtions: `application\modules` or `content\modules`. The location only matters if you want your modules to include assets, such as CSS files, JS files, images or other, in this case it is better to put them in the `content\modules` folder.

Modules can have their own config files, controllers, models, libraries or drivers, views and assets (_if public_).

Modules must come with `manifest.json` (_or at least the distribution file `manifest.json.dist`_) in which you provide infos about the module that's only used to be displayed on the admin panel. If manifest files are missing, modules aren't even considered nor loaded.

Here is an example of the `manifest.json` file of a module called **DinaPress**, which turns your CodeIgniter Skeleton application into a fully functional **Content Management System**:

```json
{
    "name": "DinaPress",
    "description": "Turns your CodeIgniter Skeleton into a Content Management System",
    "version": "1.0.0",
    "license": "MIT",
    "license_uri": "http://opensource.org/licenses/MIT",
    "author": "Kader Bouyakoub",
    "author_uri": "https://github.com/bkader",
    "author_email": "bkader@mail.com",
    "admin_menu": "DinaPress",
    "menu_order": 0,
    "enabled": true,

    "routes": {
        "(post|category|archive|author)/(.*)": "dinapress/$1/$2"
    },

    "submenu": {
        "categories": "categories",
        "posts": "Posts",
        "comments": "Comments",
        "settings": "lang:settings"
    },

    "translations": {
        "categories": {
            "french": "Catégories",
            "arabic": "التصنيفات"
        },
        "posts": {
            "french": "Articles",
            "arabic": "المقالات"
        },
        "comments": {
            "french": "Commentaires",
            "arabic": "التعليقات"
        }
    }
}
```

Allow me to explain some main keys here since the rest is pretty straightforward:

- **enabled**: if this is provided and set to `true` your module will be automatically enabled upon its **first** installation only, otherwise, it will be normally enabled/disabled like other components.
- **routes**: you have two options to provide routing. The first one is what you see on the `manifest.json` file and the second option is the regular way, which is using the `config\routes.php` file inside your module's folder.

> More about modules will be added here soon!