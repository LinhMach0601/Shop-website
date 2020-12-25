<?php
// Define PostgreSQL database server connect parameters.
define('PG_HOST', 'ec2-50-19-247-157.compute-1.amazonaws.com');
define('PG_PORT', 5432);
define('PG_DATABASE', 'd20ki18ge9ipr4');
define('PG_USER', 'cohrprzbqktzwq');
define('PG_PASSWORD', '95d8c2a55d408a6d11a8cb81fb8e5ba27aa115781e861bdffe06c0ac8b02d92a');
define('ERROR_ON_CONNECT_FAILED', 'Connection failed!');

// Merge connect string and connect db server with default parameters.
function getDB() {
    return pg_pconnect (' host=' . PG_HOST .
                        ' port=' . PG_PORT .
                        ' dbname=' . PG_DATABASE .
                        ' user=' . PG_USER .
                        ' password=' . PG_PASSWORD
                       ) or die (ERROR_ON_CONNECT_FAILED);
}
?>