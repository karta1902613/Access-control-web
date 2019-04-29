<?php
/**
 * Date: 2019/4/11
 * Time: 上午 10:43
 */
include("mysql_connect.inc.php");
echo '<script>';
echo '$(document).ready(function(){';
echo '$(\'#Change\').click(function(){';
echo 'change();';
echo '});';
echo '});';
echo 'function change() {';
$change_type = $_POST['change_type'];
$id = $_POST['ID'];
mysqli_query($link,"UPDATE Member SET Type='$change_type' WHERE ID='$id'");
echo '}';
echo '</script>';
?>
<h1>修改中...</h1>
<meta http-equiv=REFRESH CONTENT=1;url=tables.php>