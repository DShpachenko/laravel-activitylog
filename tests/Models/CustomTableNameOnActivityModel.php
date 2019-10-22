<?php

namespace DShpachenko\Activitylog\Test\Models;

use DShpachenko\Activitylog\Models\Activity;

class CustomTableNameOnActivityModel extends Activity
{
    protected $table = 'custom_table_name';
}
