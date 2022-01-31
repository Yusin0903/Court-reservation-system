<?php
	
	session_start();

	$username = $_SESSION["username"];

	$link = mysqli_connect("localhost","root","","register")
            or die("無法開啟MySQL資料庫連接!<br/>");


    if($link){
    mysqli_query($link,'SET NAMES utf8');
        // echo "正確連接資料庫";
    }
    else {
        echo "不正確連接資料庫</br>" . mysqli_connect_error();
    }


    $sql_2 = "SELECT * FROM admin WHERE S_no = '$username' ";

    $result_2 = mysqli_query($link, $sql_2);
    $order = mysqli_num_rows($result_2);
    $reserve = mysqli_fetch_array($result_2, MYSQLI_NUM);

	if($order >0){
     	$_SESSION["order_login_session"] = true;
        $_SESSION["order_username"] = $reserve[0];
        $_SESSION["order_name"] = $reserve[1];
        $_SESSION["order_email"] = $reserve[2];
        $_SESSION["order_situation"] = $reserve[3];
        $_SESSION["order_date"] = $reserve[4];
        $_SESSION["order_time"] = $reserve[5];
        $_SESSION["order_court_eng"] = $reserve[6];
        if ($reserve[6] == 'baseball'){
        	$_SESSION["order_court"] = '棒球場';
        }
        elseif ($reserve[6] =='basketball') {
       		$_SESSION["order_court"] = '籃球場';
        }
        else{
        	$_SESSION['order_court'] = '排球場';
        }
        header("Location: myorder_2.php");
     }
    else{
     	echo "<center><font color='red'>";
        echo "目前無預約!<br/>";
        echo "</font>";
        echo "<a href = 'http://localhost/預約場地系統_v2/courtlist.php'>返回上一頁<a>";
        $_SESSION["login_session"] = false;
     }

     
?>






