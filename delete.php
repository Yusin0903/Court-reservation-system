<?php
	session_start();

	$court =$_SESSION["order_court_eng"];
	$time = $_SESSION["order_time"];
	$date = $_SESSION["order_date"];

	$link=mysqli_connect("localhost","root","","register")
        or die("無法開啟MySQL資料庫連接!<br/>");


	$username = $_SESSION["order_username"];

	$sql = "DELETE FROM admin WHERE S_no = '$username' ";

	$sql1 = "UPDATE `$court` SET `$time` = '#84C1FF'  WHERE `date` = '$date'  ";

	if ($link->query($sql) == TRUE) {
	  echo '<script language="JavaScript">;alert("成功刪除預約!!");location.href="myorder.php";</script>;';
	  mysqli_query($link, $sql1);
	  // echo "成功刪除預約,即將跳轉回登入畫面";
	  // header("Location: login.html");
	} 
	else {
	  echo "Error: " . $sql . "<br>" . $link->error;
	}


?>