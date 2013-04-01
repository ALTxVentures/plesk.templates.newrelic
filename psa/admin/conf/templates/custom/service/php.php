<IfModule <?php echo $VAR->server->webserver->apache->php4ModuleName ?>>
<?php
if ($OPT['enabled']) {
    echo "php_admin_flag engine on\n";

    if (isset($OPT['settings'])) {
        echo $OPT['settings'];
    }

} else {
    echo "php_admin_flag engine off\n";
}
?>
</IfModule>

<IfModule mod_php5.c>
<?php
if (array_key_exists('enabled', $OPT) && $OPT['enabled']) {
    echo "php_admin_flag engine on\n";

    if (isset($OPT['settings'])) {
        echo $OPT['settings'];
    }

} else {
    echo "php_admin_flag engine off\n";
}
?>
<?php
if (isset($VAR->domain))
{
	echo 'php_value newrelic.appname "'.$VAR->domain->idnName.'"';
}
?> 
</IfModule>
