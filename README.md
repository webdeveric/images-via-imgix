![imgix logo](https://assets.imgix.net/imgix-logo-web-2014.pdf?page=2&fm=png&w=200&h=200)

imgix-wordpress
===============

A community powered WordPress plugin to automatically load all your existing (and future) WordPress images via the [imgix](https://www.imgix.com/) service for smaller, faster, and better looking images.

* [Features](#features)
* [Getting Started](#getting-started)
* [History](#history)
* [Testing](#testing)

<a name="features"></a>
Features
--------

* Your images behind a CDN.
* Automatically smaller and faster images with the [Auto Format](http://blog.imgix.com/post/90838796454/webp-jpeg-xr-progressive-jpg-support-w-auto) option.
* Automatically better looking images with the [Auto Enhance](http://blog.imgix.com/post/85095931364/autoenhance) option.
* Use arbitrary [imgix API params](http://www.imgix.com/docs/reference) when editing `<img>` tags in "Text mode" and they will pass through.
* No lock in! Disable the plugin and your images will serve as they did before installation.

<a name="getting-started"></a>
Getting Started
---------------

If you don't already have an imgix account then sign up at [imgix.com](http://www.imgix.com).

1. Create a `Web Folder` imgix source with the `Base URL` set to your WordPress root URL (__without__ the `wp-content` part). For example, if your WordPress instance is at [http://students.miguelcardona.com](http://students.miguelcardona.com) and an example image is `http://students.miguelcardona.com/wp-content/uploads/2013/01/beat.jpg` then your source's `Base URL` would be just `http://students.miguelcardona.com/`.

2. [Download](https://github.com/wladston/imgix-wordpress/releases) the imgix WordPress plugin `imgix_plugin.zip` and install on your WordPress instance. In the WordPress admin, click "Plugins" on the right and then "Add New". This will take you to a page to upload the `imgix_plugin.zip` file. Alternatively, you can extract the contents of `imgix_plugin.zip` into the `wp-content/plugins` directory of your WordPress instance.

3. Return to the "Plugins" page and ensure the "imgix plugin" is activated. Once activated, click the "settings" link and populate the "imgix Host" field (e.g., `http://yourcompany.imgix.net`). This is the full host of the imgix source you created in step #1. Optionally, you can also turn on [Auto Format](http://blog.imgix.com/post/90838796454/webp-jpeg-xr-progressive-jpg-support-w-auto) or [Auto Enhance](http://blog.imgix.com/post/85095931364/autoenhance). Finally, click "Save Options" when you're done.

4. Go to a post on your WordPress blog and ensure your images are now serving through imgix.

<a name="history"></a>
History
--------

Originally this plugin was hosted as part of the official [imgix](https://github.com/imgix) organisation. It was depreciated as they focused their efforts on the [PHP library](https://github.com/imgix/imgix-php).

This plugin is maintained and managed by the community. Imgix have kindly permitted the use of their name here but it should be noted that there is no official support available for this plugin. If you've got any problems [submit an issue on this repo](https://github.com/imgix-wordpress/imgix-wordpress/issues/new).

<a name="testing"></a>
Testing
-------

This plugin uses phpunit to run its tests. You will need to set up a local test database to run these tests. You can do that using the bootstrap scrip:

```
$ bin/install-wp-tests.sh imgix_wordpress_tests <YOUR MYSQL USERNAME> <YOUR MYSQL PASSWORD>
```

Then running the tests is as simple as:

```
$ phpunit
```
