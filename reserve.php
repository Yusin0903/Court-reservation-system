<?php  
	session_start();

	
             or die("無法開啟MySQL資料庫連接!<br/>");

    $day = $_POST["day"]; 
    $time = $_POST["time"];
    

    if($link){
    mysqli_query($link,'SET NAMES uff8');
	    // echo "正確連接資料庫";
	}
	else {
	    echo "不正確連接資料庫</br>" . mysqli_connect_error();
	}

	$sql1 = "SELECT $day FROM courtlist WHERE `Time` = '$time' ";
	$result = mysqli_query($link,$sql1);
	$row = mysqli_fetch_array($result,MYSQLI_NUM); //將陣列以欄位名索引

	if ($row[0] == '已預約') {
		echo $day;
		echo $time;
		echo $row[0];
		echo '<script language="JavaScript">;alert("該時段已被預約，請重新選擇時段");location.href="http://127.0.0.1/courtlist.php";</script>;';
	  // echo '<a href="http://127.0.0.1/courtlist.php" >場地頁面</a>';
	  //header("Location: login.html");
	} else {
		echo $row[0];
		$sql = "UPDATE courtlist SET $day = '已預約' WHERE `Time` = '$time' ";
		$result1 = mysqli_query($link,$sql);
		echo '<script language="JavaScript">;alert("預約成功！請等待管理員審核通過！");location.href="http://127.0.0.1/courtlist.php";</script>;';
	  
	}



	$link->close();

?>