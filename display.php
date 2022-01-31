<?php  
	session_start();  // 啟用交談期

    $link = mysqli_connect("localhost","root","","register")

            or die("無法開啟MySQL資料庫連接!<br/>");



    $username = $_SESSION["username"]; 

   	//送出UTF8編碼的MySQL指令

    mysqli_query($link, 'SET NAMES utf8'); 



    $sql = "SELECT * FROM `register` WHERE S_no = '$username'";



    $result = mysqli_query($link, $sql);

    $arr = mysqli_fetch_array($result, MYSQLI_NUM);
?>

<!DOCTYPE html>
<html>
<head>

<style type="text/css">

/*帳密字體設定*/
h1{
  text-align:center;
  font-family:Microsoft JhengHei;
  font-size:15px;
}

/*頁面標題設定*/
h2{
  padding-top: 100px;
  text-align:center;
  font-family:Didot;
  font-size:50px;
}

/*設定背景圖片*/
body
{
background:url("back3.png");
background-size:1280px 800px;
background-repeat:no-repeat;
}

input {
  width: 200px;
  height: 25px;
  border: 1px;
  border-radius: 5px;
  background-color:#E0E0E0;
}

input:focus{
  outline-color: #FFD306;
  border-style: solid;
}

select {
  height: 25px;
  width: 130px;
  border-radius: 5px;
}


input[type="submit"]{
  width: 70px;
  height: 30px;
  background-color: #FFD306;
  border-radius: 30px;
  text-decoration: none;
}

input[type="button"]{
  width: 90px;
  height: 30px;
  background-color: black;
  color: white;
  border-radius: 30px;
  border-color: none;
  text-decoration: none;
}

</style>

	<meta charset="UTF-8">
	<title>display.php</title>
</head>
<body>

	<h2>Edit</h2>
	 
	<form  action="update.php" method="post">
	<table align="center">
	    <tr>
	        <td><h1>使用者名稱:</h1></td>
	        <td><input type="text" name="username" value = '<?php echo $arr[0] ?>' size="15" maxlength="10"/ readonly="readonly"></td>
	    </tr>
	    <tr>
	        <td><h1>使用者密碼:</h1></td>
	        <td><input type="password" name="password" value = "<?php echo $arr[1] ?>" size="15" maxlength="10"/ ></td>
	    </tr>
	    <tr>
	        <td><h1>姓名:</h1></td>
	       <td><input type="text" name="name" size="15" value = "<?php echo $arr[2] ?>"  maxlength="10"/></td>
	    </tr>
	    <tr>
	        <td><h1>email:</h1></td>
	        <td><input type="text" name="email" size="15" value = "<?php echo $arr[3] ?>"  maxlength="10"/></td>
	    <tr>
	        <td><h1>status:</h1></td>
	        <td><input type="text" name="status" value = "<?php echo $arr[4] ?>" size="15" maxlength="10"/ readonly="readonly"></td>
	    </tr>
	   
	    <tr>
	    	<td><input type="submit" value="修改" ></td>
	    	<td><input type="button" value="登出" onclick="location.href='http://localhost/預約場地系統_v2/login.html'"></td>


	    </tr>

	</table>
    
</body>
</html>