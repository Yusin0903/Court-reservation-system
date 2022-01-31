<?php
	session_start();
	

	$userName = $_GET["user_id"];
    $time = $_GET["time"];
    $court = $_GET["court"];
    $date = $_GET["date"];

    $link = mysqli_connect("localhost","root","","register")
            or die("無法開啟MySQL資料庫連接!<br/>");


    if($link){
    mysqli_query($link,'SET NAMES utf8');
        // echo "正確連接資料庫";
    }
    else {
        echo "不正確連接資料庫</br>" . mysqli_connect_error();
    }

    $sql = "UPDATE `admin` SET `situation` = '審核通過' WHERE `S_no` = $userName ";
	
	$sql1 = "UPDATE `$court` SET `$time` = '#5B5B5B'  WHERE `date` = '$date'  ";
	
	
    if($link->query($sql) == true){
    	echo '<script language="JavaScript">;alert("審核通過！！");location.href="http://localhost/預約場地系統_v2/admin.php";</script>;';
    	mysqli_query($link, $sql1);
	}
    else{
    	echo "Error: " . $sql . "<br>" . $link->error;
    }

    // echo $userName;
    // echo $time;


?>



