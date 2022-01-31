<?php
       
    session_start();  // 啟用交談期
   
    $username = $_POST["username"];
    $password = $_POST["password"];

   

      $link=mysqli_connect("localhost","root","","register")
        or die("無法開啟MySQL資料庫連接!<br/>");

      mysqli_query($link, 'SET NAMES utf8');

    $sql = "SELECT * FROM register WHERE password='";
    $sql.= $password."' AND S_no='".$username."'";

      // 執行SQL查詢
    $result = mysqli_query($link, $sql);
    $total_records = mysqli_num_rows($result);//取得資料筆數
    $acc = mysqli_fetch_array($result, MYSQLI_NUM);

       // 是否有查詢到使用者記錄
    if ( $total_records > 0 ) {
          // 成功登入, 指定Session變數
        $_SESSION["login_session"] = true;
        $_SESSION["username"] = $acc[0];
        $_SESSION["password"] = $acc[1];
        $_SESSION["name"] = $acc[2];
        $_SESSION["email"] = $acc[3];
        $_SESSION["status"] = $acc[4];
        header("Location: courtlist.php");
        //header("refresh:0;url=index.html");
        
       } 
  else {  // 登入失敗
        echo "<center><font color='red'>";
        echo "使用者名稱或密碼錯誤!<br/>";
        echo "</font>";
        $_SESSION["login_session"] = false;
       }       

       mysqli_close($link);  // 關閉資料庫連接 


    


?>