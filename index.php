
<script src="serviceWorker.min.js"></script>
<script src="push.js"></script>
<?php
$ftp_server = '94.153.236.82';
$port = '21';
$ftp_user_name = 'AVTO';
$ftp_user_pass= '#avto-2021';
$connectFtp = ftp_connect($ftp_server, $port) or die("Не удалось установить соединение с ftp_server");
echo "OK";
?>

<script type="text/javascript">
Push.create('Hello World!')
</script>
