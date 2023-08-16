
<br>
Instructions
<br>
<br>
Run the DLL.sql sql in mysql to create the database,
<br>
<br>
Enter PDO settings in api.php, then navagite to the file to populate the database.
<br>
<br>
Run Composer install in project testPorject root.
<br>
<br>
Enter database config in config/app_local.php
<br>
<br>
eg.
<pre>
'Datasources' => [
        'default' => [
            'host' => '127.0.0.1',
            /*
             * CakePHP will use the default DB port based on the driver selected
             * MySQL on MAMP uses port 8889, MAMP users will want to uncomment
             * the following line and set the port accordingly
             */

            'port' => '8889',

            'username' => 'root',
            'password' => 'root',

            'database' => 'testProject',
            /*
             * If not using the default 'public' schema with the PostgreSQL driver
             * set it here.
             */
            //'schema' => 'myapp',

            /*
             * You can use a DSN string to set the entire configuration
             */
            'url' => env('DATABASE_URL', null),
        ],
</pre>
