<?php
    $username = $_POST["username"];
    $password = $_POST["password"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $status= $_POST["status"];

	session_start();  // 啟用交談期
    $link = mysqli_connect("localhost","root","","register")
            or die("無法開啟MySQL資料庫連接!<br/>");

   	//送出UTF8編碼的MySQL指令
    mysqli_query($link, 'SET NAMES utf8'); 

	$sql = "UPDATE `register` SET `password`='$password',`name` ='$name', `email` = '$email'  WHERE `S_no` = '$username'";

	if ($link->query($sql) == TRUE) {
	  echo '<script language="JavaScript">;alert("修改成功!!");location.href="courtlist.php";</script>;';
	  //header("Location: login.html");
	} else {
	  echo "Error: " . $sql . "<br>" . $link->error;
	}

	$link->close();







