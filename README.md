# Composer template for Drupal projects with CiviCRM

This project template provides a starter kit for managing your Drupal 8 and
CiviCRM site with [Composer](https://getcomposer.org/).

It's based on
[drupal/recommended-project](https://www.drupal.org/docs/develop/using-composer/using-composer-to-install-drupal-and-manage-dependencies),
so please see that documentation for general information on managing Drupal via
composer.

The documentation here is going to be focused on CiviCRM!

## Usage

You need a couple of dependencies first:

- [Composer](https://getcomposer.org/doc/00-intro.md#installation-linux-unix-osx) (at a relatively recent version)
- [Git](https://git-scm.com/book/en/v2/Getting-Started-Installing-Git)

*Make sure that you have a recent version of Composer! A couple of people have
tried to use this project with older versions and have experienced issues.*

After that you can create your new project via:

```
composer create-project roundearth/drupal-civicrm-project:8.x-dev some-dir --no-interaction
```

Drupal will be installed under the `web` directory, with the `vendor` directory
outside of the webroot. This follows current best practices, but it means two
additional things:

- You'll need to point your webserver at the `web` directory, not the top-level
  directory like you might be used to with Drupal 7, or non-composer Drupal 8
  sites.
- The CiviCRM web assets are synced to the `web/libraries/civicrm` directory,
  so you'll need to configure CiviCRM's "Resource URL" to point to the URL that
  will reach that directory.

## Installing CiviCRM

After getting the code using the command-line above, and doing the normal
Drupal 8 installation, perform the following steps to install CiviCRM:

1. Ensure the `web/sites/default` directory is writeable. On the command-line:

    ```
    chmod +w web/sites/default
    ```

2. Enable the CiviCRM module. On the command-line:

    ```
    drush en -y civicrm
    ```

3. If you were already logged into the Drupal site, then logout and log back in
   again. This is to work around bug
   [CRM-19878](https://issues.civicrm.org/jira/browse/crm-19878).

## How does it work?

It's basically 'drupal/recommended-project' with a special Composer plugin
added, which does all the additional steps for CiviCRM. So, if you want to
understand its behavior or contribute, see the Composer plugin:

[https://lab.civicrm.org/dev/civicrm-asset-plugin](https://lab.civicrm.org/dev/civicrm-asset-plugin)

## References

- [https://www.mydropwizard.com/blog/better-way-install-civicrm-drupal-8](https://www.mydropwizard.com/blog/better-way-install-civicrm-drupal-8)

# kama
