<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		
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
  width: 100px;
  height: 30px;
  background-color: #FFD306;
  border-radius: 30px;
  text-decoration: none;
}

	</style>
	<title>我的訂單</title>
	<meta charset="UTF-8">
</head>
<body>

	<h2>My reserve</h2>
	<form  action="delete.php" method="post">
	<table align="center">
	  	<tr>
	        <td><h1>帳號(學號):</h1></td>
	        <td><?php echo $_SESSION["order_username"] ?></td>
	    </tr>
	    <tr>
	        <td><h1>姓名:</h1></td>
	        <td><?php echo $_SESSION["order_name"] ?></td>
	    </tr>
	    <tr>
	        <td><h1>email:</h1></td>
	        <td><?php echo $_SESSION["order_email"] ?></td>
	    </tr>
	    <tr>
	        <td><h1>預約狀態：</h1></td>
	        <td><?php echo $_SESSION["order_situation"] ?></td>
	    </tr>
	    <tr>
	        <td><h1>日期:</h1></td>
	        <td><?php echo $_SESSION["order_date"] ?></td>
	    </tr>
	   	<tr>
	        <td><h1>時間:</h1></td>
	        <td><?php echo $_SESSION["order_time"] ?></td>
	    </tr>
	 	 <tr>
	        <td><h1>場地:</h1></td>
	        <td><?php echo $_SESSION["order_court"] ?></td>
	    </tr>
	   
	    <tr>
	    	<td><input type="submit" value="刪除預約" ></td>
	    </tr>

	</table>


</body>
</html>