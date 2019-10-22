<?php

namespace DShpachenko\Activitylog\Test\Models;

use DShpachenko\Activitylog\Models\Activity;

class CustomDatabaseConnectionOnActivityModel extends Activity
{
    protected $connection = 'custom_connection_name';
}
