---
title: Installation and Setup
weight: 4
---

The package can be installed via composer:

``` bash
composer require spatie/laravel-activitylog
```

The package will automatically register the service provider.

You can publish the migration with:
```bash
php artisan vendor:publish --provider="DShpachenko\Activitylog\ActivitylogServiceProvider" --tag="migrations"
```

After the migration has been published you can create the `activity_log` table by running the migrations:

```bash
php artisan migrate
```

You can optionally publish the config file with:
```bash
php artisan vendor:publish --provider="DShpachenko\Activitylog\ActivitylogServiceProvider" --tag="config"
```

This is the contents of the published config file:

```php
return [

    /*
     * If set to false, no activities will be saved to the database.
     */
    'enabled' => env('ACTIVITY_LOGGER_ENABLED', true),

    /*
     * When the clean-command is executed, all recording activities older than
     * the number of days specified here will be deleted.
     */
    'delete_records_older_than_days' => 365,

    /*
     * If no log name is passed to the activity() helper
     * we use this default log name.
     */
    'default_log_name' => 'default',

    /*
     * You can specify an auth driver here that gets user models.
     * If this is null we'll use the default Laravel auth driver.
     */
    'default_auth_driver' => null,

    /*
     * If set to true, the subject returns soft deleted models.
     */
    'subject_returns_soft_deleted_models' => false,

    /*
     * This model will be used to log activity.
     * It should be implements the DShpachenko\Activitylog\Contracts\Activity interface
     * and extend Illuminate\Database\Eloquent\Model.
     */
    'activity_model' => \DShpachenko\Activitylog\Models\Activity::class,

    /*
     * This is the name of the table that will be created by the migration and
     * used by the Activity model shipped with this package.
     */
    'table_name' => 'activity_log',
];
```
