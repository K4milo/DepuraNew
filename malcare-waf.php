<?php
// Please validate auto_prepend_file setting before removing this file

if (file_exists('/var/www/clients/client5/web11/web/wp-content/plugins/malcare-security/protect/prepend/ignitor.php')) {
	define("MCDATAPATH", '/var/www/clients/client5/web11/web/wp-content/mc_data/');
	define("MCCONFKEY", 'a771bfd78fb8434d2e41d9c989fc5ca4');
	include_once('/var/www/clients/client5/web11/web/wp-content/plugins/malcare-security/protect/prepend/ignitor.php');
}
?>
