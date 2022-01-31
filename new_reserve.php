<?php  
	session_start();

	
	$link = mysqli_connect("localhost","root","","register")
            or die("無法開啟MySQL資料庫連接!<br/>");

    $day = $_POST["day"]; 
    $time = $_POST["time"];
    $court = $_POST["court"];
    $s_no = $_SESSION["username"];
    $name = $_SESSION["name"];
    $email = $_SESSION["email"];
    if($link){
    mysqli_query($link,'SET NAMES utf8');
	    // echo "正確連接資料庫";
	}
	else {
	    echo "不正確連接資料庫</br>" . mysqli_connect_error();
	}

	$sql = "INSERT INTO `admin` (`S_no`, `name`,`email`,`situation`,`date`,`time`,`court`) VALUES
('$s_no' , '$name', '$email', '待審核','$day' ,'$time', '$court')";
	// $result = mysqli_query($link,$sql1);
	// $row = mysqli_fetch_array($result,MYSQLI_NUM); //將陣列以欄位名索引

	$sql1 = "SELECT * FROM `admin` WHERE S_no = '$s_no' ";
	$result = mysqli_query($link ,$sql1);
	$total_records = mysqli_num_rows($result);//取得資料筆數

	

	if ($total_records > 0 ){
		echo '<script language="JavaScript">;alert("已預約過，一人僅限預約一場地，請等待管理員審核謝謝!!");location.href="courtlist.php";</script>;';
	}
	elseif($link->query($sql) == TRUE) {
	  echo '<script language="JavaScript">;alert("預約成功，請等待管理員審核謝謝！");location.href="courtlist.php";</script>;';
	  // header("Location: login.html");
	} 
	else {
	  echo "Error: " . $sql . "<br>" . $link->error;
	}

	// if ($row[0] == '已預約') {
	// 	echo $day;
	// 	echo $time;
	// 	echo $row[0];
	// 	echo '<script language="JavaScript">;alert("該時段已被預約，請重新選擇時段");location.href="http://127.0.0.1/courtlist.php";</script>;';
	//   // echo '<a href="http://127.0.0.1/courtlist.php" >場地頁面</a>';
	//   //header("Location: login.html");
	// } else {
	// 	echo $row[0];
	// 	$sql = "UPDATE courtlist SET $day = '已預約' WHERE `Time` = '$time' ";
	// 	$result1 = mysqli_query($link,$sql);
	// 	echo '<script language="JavaScript">;alert("預約成功！請等待管理員審核通過！");location.href="http://127.0.0.1/courtlist.php";</script>;';
	  
	// }



	$link->close();

?>