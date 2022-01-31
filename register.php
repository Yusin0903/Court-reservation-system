<?php
	$username = $_POST["Username"];
    $password = $_POST["Password"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $status= $_POST["status"];

	session_start();  // 啟用交談期
    $link = mysqli_connect("localhost","root","","register")
            or die("無法開啟MySQL資料庫連接!<br/>");

   	//送出UTF8編碼的MySQL指令
    mysqli_query($link, 'SET NAMES utf8'); 

	$sql = "INSERT INTO register (S_no, password, name, email, status)
	VALUES ('$username', '$password', '$name', '$email', '$status')";

	if ($link->query($sql) === TRUE) {
	  echo "New record created successfully，點擊跳轉回登入頁面";
	  header("Location: login.html");
	} else {
	  echo "Error: " . $sql . "<br>" . $link->error;
	}

	$link->close();

 ?>