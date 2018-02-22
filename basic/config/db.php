<?php

return [
    'class' => 'yii\db\Connection',
    'dsn' => 'pgsql:host=localhost; port=4545; dbname=test',
    'username' => 'test',
    'password' => '123456789',
    'charset' => 'utf8',

    // Schema cache options (for production environment)
    //'enableSchemaCache' => true,
    //'schemaCacheDuration' => 60,
    //'schemaCache' => 'cache',
];
