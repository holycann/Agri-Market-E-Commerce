<?php
return <<<PHP
<?php

require_once __DIR__ . '/../migration.php';

function migrate_{{className}}_up(Migration \$migration)
{
    \$sql = <<<SQL
    CREATE TABLE IF NOT EXISTS {{className}} (
        id INT AUTO_INCREMENT PRIMARY KEY
    ) ENGINE=INNODB;
    SQL;

    \$migration->up("{{className}}", \$sql);
}

function migrate_{{className}}_down(Migration \$migration)
{
    \$migration->down("{{className}}");
}
PHP;
