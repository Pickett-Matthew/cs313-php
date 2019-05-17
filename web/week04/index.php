<?php

  phpinfo();

    function getData(){

        $db = getenv('Database_URL');
        $dbOpts = parse_url($db);

        $dbHost = $dbOpts['host'];
        $dbPort = $dbOpts['port'];
        $dbUser = $dbOpts['user'];
        $dbPassword = $dbOpts['pass'];
        $dbName = ltrim($dbOpts['path'], '/' );


        $db = new DBO("pgsql:host=$dbHost;port=$dbPort;dbName=$dbName", $dbUser, $dbPassword);

        return $db;
    }
?>