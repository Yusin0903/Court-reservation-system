<?php  

	session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<style type="text/css">

	.box {
	width: 200px;
	height:200px;
	background-image: linear-gradient(135deg, #FFD306, #FFE982);
	text-decoration: none;
	text-align: center;
	border-radius: 50px;
	border-style:hidden;
	font-family:Microsoft JhengHei;
	font-size:20px;
	float:left;
	margin:30px;
	}

	input[type="submit"]{
	width: 200px;
	height:200px;
	background-image: url(edit.png),
					  linear-gradient(135deg, #FFD306, #FFE982);

	background-repeat: no-repeat,
					   no-repeat;
	
	background-position: 50% 20%,
						 right;

	text-decoration: none;
	text-align: center;
	border-radius: 50px;
	border-style:hidden;
	font-family:Microsoft JhengHei;
	font-size:20px;
	float:left;
	margin:30px;
	}

	select {
  	height: 25px;
  	width: 130px;
  	border-radius: 5px;
	}

	h2{
  	padding-top: 100px;
  	text-align:center;
  	font-family:Didot;
  	font-size:50px;
	}

	body{
	background:url("menu.png");
	background-size:1280px 800px;
	background-repeat:no-repeat;
	}

	</style>

	<meta charset="utf-8">
	<title>box</title>
</head>


<body>

	<h2>Main menu</h2>

	<form action = "display.php">
		<input type="submit"  value="我的資料">
	</form>

	<form action = "myorder.php">
		<input type="submit"  value="我的預約">
	</form>

	<form action = "isadmin.php">
		<input type="submit"  value="管理員登入">
	</form>

	<div class="box">
	<form action>
		場地租借
		<select align="center" name="sports" onChange="location = this.options[this.selectedIndex].value;" >
			<option value="#" selected>請選擇場地</option>
			<option value="http://localhost/預約場地系統_v2/baseball.php" name = "棒球場">棒球場</option>
			<option value="http://localhost/預約場地系統_v2/basketball.php" >籃球場</option>
			<option value="http://localhost/預約場地系統_v2/volleyball.php">排球場</option>
		</select>
	</form>
						
		</form>


</body>


</html>