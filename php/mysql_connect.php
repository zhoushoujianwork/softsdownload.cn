<?php
function shortenNumber($n, $precision = 1)
{
    if ($n < 1e+3) {
        $out = number_format($n);
    } else if ($n < 1e+6) {
        $out = number_format($n / 1e+3, $precision) . 'k';
    } else if ($n < 1e+9) {
        $out = number_format($n / 1e+6, $precision) . 'm';
    } else if ($n < 1e+12) {
        $out = number_format($n / 1e+9, $precision) . 'b';
    }

    return $out;
}
//将数据写入数据库中；
$db_host = '47.101.179.8';
$db_user = 'softsdown';
$db_passwd = 'softsdown';
$db_name = 'softsdown';

$db = new mysqli( $db_host, $db_user, $db_passwd, $db_name );
if ( $db->connect_errno <> 0 ){
	echo "连接失败！<br>";
	echo "错误日志：<br>";
	echo $db->connect_error;
}
// echo "连接成功";
//解决数据传输的编码
$db->query("SET NAMES UTF8");

?>