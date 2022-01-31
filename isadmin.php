<?php
session_start();

$status = $_SESSION["status"];
$link=mysqli_connect("localhost","root","","register")
        or die("無法開啟MySQL資料庫連接!<br/>");

if ($status == '教師-管理員'){
	header("Location: admin.php");

}
else{
	echo '<script language="JavaScript">;alert("非管理員無法進入！！");location.href="http://localhost/預約場地系統_v2/courtlist.php";</script>;';
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>審核預約</title>
</head>
<body>
	<h1 align="center">審核預約</h1>

</body>
</html>