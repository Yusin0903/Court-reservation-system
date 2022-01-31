<?php  
	session_start();

	
	$link = mysqli_connect("localhost","root","","register")
            or die("無法開啟MySQL資料庫連接!<br/>");

    if($link){
    mysqli_query($link,'SET NAMES uff8');
	    // echo "正確連接資料庫";
	}
	else {
	    echo "不正確連接資料庫</br>" . mysqli_connect_error();
	}

	$sql = "SELECT * FROM volleyball WHERE date = '06-21'";
	$result = mysqli_query($link,$sql);

	$row = mysqli_fetch_array($result,MYSQLI_NUM); //將陣列以欄位名索引

	$total_fields=mysqli_num_fields($result); // 取得欄位數
 
    $total_records=mysqli_num_rows($result);  // 取得記錄數
	
	$sql1 = "SELECT * FROM volleyball WHERE date = '06-22'";
	$result1 = mysqli_query($link,$sql1);

	$row1 = mysqli_fetch_array($result1,MYSQLI_NUM); //將陣列以欄位名索引



	$sql2 = "SELECT * FROM volleyball WHERE date = '06-23'";
	$result2 = mysqli_query($link,$sql2);

	$row2 = mysqli_fetch_array($result2,MYSQLI_NUM); //將陣列以欄位名索引


	$sql3 = "SELECT * FROM volleyball WHERE date = '06-24'";
	$result3 = mysqli_query($link,$sql3);

	$row3 = mysqli_fetch_array($result3,MYSQLI_NUM); //將陣列以欄位名索引



	$sql4 = "SELECT * FROM volleyball WHERE date = '06-25'";
	$result4 = mysqli_query($link,$sql4);

	$row4 = mysqli_fetch_array($result4,MYSQLI_NUM); //將陣列以欄位名索引

	$sql5 = "SELECT * FROM volleyball WHERE date = '06-26'";
	$result5 = mysqli_query($link,$sql5);

	$row5 = mysqli_fetch_array($result5,MYSQLI_NUM); //將陣列以欄位名索引

	$sql6 = "SELECT * FROM volleyball WHERE date = '06-27'";
	$result6 = mysqli_query($link,$sql6);

	$row6 = mysqli_fetch_array($result6,MYSQLI_NUM); //將陣列以欄位名索引

	// $sql7 = "SELECT Monday,Tuesday,Wednesday,Thursday,Friday,Saturday,Sunday FROM courtlist WHERE Time = '17:10-18:00'";
	// $result7 = mysqli_query($link,$sql7);

	// $row7 = mysqli_fetch_array($result7,MYSQLI_NUM); //將陣列以欄位名索引


	$link->close();

?>

<!DOCTYPE html >

<head>
  <meta charset="utf-8">
  <title>場地管理表</title>
  <style type="text/css">
  	
		h2{
  			padding-top: 10px;
  			text-align:center;
 			font-family:Didot;
  			font-size:50px;
  			text-decoration: none;
		}

		table {
  			border: 0;
  			border-collapse: collapse;
  			border-radius: 30px;
  			width: 70%;
		}
		th{
  			border: solid 1px #2e3a4d;
  			padding: 16px 8px;
  			background-color: white;
  			color:black;
  			font-weight: normal;
  			letter-spacing: 3px;
		}		
		td {
			border: solid 1px black;
  			text-align: center;
  			padding: 8px;
  			color:black;
			font-weight: bold;
		}

		tr{
			border-radius:30px;
			color:black;
			font-style: bold;
			background-color: white;
		}

		td input {
  			width: 50px;
 			height: 25px;
  			border: 1px;
  			border-radius: 25px;
  			border-style:solid;
  			background-color: #FFD306;
		}

		body{
			background-color: #F0F0F0;
		}

		h1{
			text-align:center;
  			font-family:Microsoft JhengHei;
  			font-size:27px;
  			letter-spacing: 5px;
		}

  </style>
</head>


<body>
	<table BORDER="2" align=center >
			<h2>Volleyball Reservation</h2>
			<tr>
				<td>日期/時間</td>
				<td>9:10-10:00</td>
				<td>10:10-11:00</td>
				<td>11:10-12:00</td>
				<td>13:10-14:00</td>
				<td>14:10-15:00</td>
				<td>15:10-16:00</td>
				<td>16:10-17:00</td>
			</tr>
			<h1 align="center" >6月21日</h1>
			<tr>

				<th>狀態</th>
				<form action="new_reserve.php" method="post">	
					<td bgcolor= "<?php echo $row[1]; ?>">
						<input type="submit"  value="預約">
						<input type = "hidden" name = 'day' value = "06-21">
						<input type = "hidden" name = 'time' value = "9:10-10:00">
						<input type = "hidden" name = 'court' value = "volleyball">
					</td>
				</form >
				<form action="new_reserve.php" method="post">		
					<td bgcolor= "<?php echo $row[2]; ?>">
						<input type="submit"  value="預約" >
						<input type = "hidden" name = 'day' value = "06-21">
						<input type = "hidden" name = 'time' value = "10:10-11:00">
						<input type = "hidden" name = 'court' value = "volleyball">
				</form>	
				
				<form action="new_reserve.php" method="post">	
					<td bgcolor= "<?php echo $row[3]; ?>">
						<input type="submit"  value="預約">
						<input type = "hidden" name = 'day' value = "06-21">
						<input type = "hidden" name = 'time' value = "11:10-12:00">
						<input type = "hidden" name = 'court' value = "volleyball">
					</td>
				</form >
				<form action="new_reserve.php" method="post">	
					<td bgcolor= "<?php echo $row[4]; ?>">
						<input type="submit"  value="預約">
						<input type = "hidden" name = 'day' value = "06-21">
						<input type = "hidden" name = 'time' value = "13:10-14:00">
						<input type = "hidden" name = 'court' value = "volleyball">
					</td>
				</form >
				<form action="new_reserve.php" method="post">
					<td bgcolor= "<?php echo $row[5]; ?>">
						<input type="submit"  value="預約">
						<input type = "hidden" name = 'day' value = "06-21">
						<input type = "hidden" name = 'time' value = "14:10-15:00">
						<input type = "hidden" name = 'court' value = "volleyball">
					</td>
				</form>
				<form action="new_reserve.php" method="post">	
					<td bgcolor= "<?php echo $row[6]; ?>">
						<input type="submit"  value="預約">
						<input type = "hidden" name = 'day' value = "06-21">
						<input type = "hidden" name = 'time' value = "15:10-16:00">
						<input type = "hidden" name = 'court' value = "volleyball">
					</td>
				</form>
				<form action="new_reserve.php" method="post">	
					<td bgcolor= "<?php echo $row[7]; ?>">
						<input type="submit"  value="預約">
						<input type = "hidden" name = 'day' value = "06-21">
						<input type = "hidden" name = 'time' value = "16:10-17:00">
						<input type = "hidden" name = 'court' value = "volleyball">
					</td>
				</form>
			</tr>
		</table><br>
		<table BORDER="2" align=center>
			<tr>
				<td>日期/時間</td>
				<td>9:10-10:00</td>
				<td>10:10-11:00</td>
				<td>11:10-12:00</td>
				<td>13:10-14:00</td>
				<td>14:10-15:00</td>
				<td>15:10-16:00</td>
				<td>16:00-17:00</td>
			</tr>
			<h1 align="center" >6月22日</h1>

			<tr>
				<th>狀態</th>
				<form action="new_reserve.php" method="post">	
					<td bgcolor= "<?php echo $row1[1]; ?>">
						<input type = "hidden" name = 'court' value = "volleyball">
						<input type = "hidden" name = 'day' value = "06-22">
						<input type = "hidden" name = 'time' value = "10:10-11:00">
						<input type="submit"  value="預約">
					</td>
				</form >
				<form action="new_reserve.php" method="post">		
					<td bgcolor= "<?php echo $row1[2]; ?>">
						<input type="submit"  value="預約" >
						<input type = "hidden" name = 'day' value = "06-22">
						<input type = "hidden" name = 'time' value = "10:10-11:00">
						<input type = "hidden" name = 'court' value = "volleyball">
					</td>
				</form>	
				<form action="new_reserve.php" method="post">		
					<td bgcolor= "<?php echo $row1[3]; ?>">
						<input type="submit"  value="預約" >
						<input type = "hidden" name = 'day' value = "06-22">
						<input type = "hidden" name = 'time' value = "10:10-11:00">
						<input type = "hidden" name = 'court' value = "volleyball">
					</td>
				</form>	
				<form action="new_reserve.php" method="post">	
					<td bgcolor= "<?php echo $row1[4]; ?>">
						<input type="submit"  value="預約">
						<input type = "hidden" name = 'day' value = "06-22">
						<input type = "hidden" name = 'time' value = "10:10-11:00">
						<input type = "hidden" name = 'court' value = "volleyball">
					</td>
				</form>
				<form action="new_reserve.php" method="post">
					<td bgcolor= "<?php echo $row1[5]; ?>">
						<input type="submit"  value="預約">
						<input type = "hidden" name = 'day' value = "06-22">
						<input type = "hidden" name = 'time' value = "10:10-11:00">
						<input type = "hidden" name = 'court' value = "volleyball">
					</td>
				</form>
				<form action="new_reserve.php" method="post">	
					<td bgcolor= "<?php echo $row1[6]; ?>">
						<input type="submit"  value="預約">
						<input type = "hidden" name = 'day' value = "06-22">
						<input type = "hidden" name = 'time' value = "10:10-11:00">
						<input type = "hidden" name = 'court' value = "volleyball">
					</td>
				</form>
				<form action="new_reserve.php" method="post">	
					<td bgcolor= "<?php echo $row1[7]; ?>">
						<input type="submit"  value="預約">
						<input type = "hidden" name = 'day' value = "06-22">
						<input type = "hidden" name = 'time' value = "10:10-11:00">
						<input type = "hidden" name = 'court' value = "volleyball">
					</td>
				</form>
			</tr>

		</table><br>
			
		<table BORDER="2" align=center>
			<tr>
				<td>日期/時間</td>
				<td>9:10-10:00</td>
				<td>10:10-11:00</td>
				<td>11:10-12:00</td>
				<td>13:10-14:00</td>
				<td>14:10-15:00</td>
				<td>15:10-16:00</td>
				<td>16:00-17:00</td>
			</tr>
			<h1 align="center" >6月23日</h1>
			<tr>
				<th>狀態</th>
				<form action="new_reserve.php" method="post">	
					<td bgcolor= "<?php echo $row2[1]; ?>">
						<input type = "hidden" name = 'day' value = "06-23">
						<input type = "hidden" name = 'time' value = "13:10-14:00">
						<input type = "hidden" name = 'court' value = "volleyball">
						<input type="submit"  value="預約">
					</td>
				</form >
				<form action="new_reserve.php" method="post">		
					<td bgcolor= "<?php echo $row2[2]; ?>">
						<input type="submit"  value="預約" >
						<input type = "hidden" name = 'day' value = "06-23">
						<input type = "hidden" name = 'time' value = "13:10-14:00">
						<input type = "hidden" name = 'court' value = "volleyball">
					</td>
				</form>	
				<form action="new_reserve.php" method="post">		
					<td bgcolor= "<?php echo $row2[3]; ?>">
						<input type="submit"  value="預約" >
						<input type = "hidden" name = 'day' value = "06-23">
						<input type = "hidden" name = 'time' value = "13:10-14:00">
						<input type = "hidden" name = 'court' value = "volleyball">
					</td>
				</form>
				<form action="new_reserve.php" method="post">	
					<td bgcolor= "<?php echo $row2[4]; ?>">
						<input type="submit"  value="預約">
						<input type = "hidden" name = 'day' value = "06-23">
						<input type = "hidden" name = 'time' value = "13:10-14:00">
						<input type = "hidden" name = 'court' value = "volleyball">
					</td>
				</form>
				<form action="new_reserve.php" method="post">
					<td bgcolor= "<?php echo $row2[5]; ?>">
						<input type="submit"  value="預約">
						<input type = "hidden" name = 'day' value = "06-23">
						<input type = "hidden" name = 'time' value = "13:10-14:00">
						<input type = "hidden" name = 'court' value = "volleyball">
					</td>
				</form>
				<form action="new_reserve.php" method="post">	
					<td bgcolor= "<?php echo $row2[6]; ?>">
						<input type="submit"  value="預約">
						<input type = "hidden" name = 'day' value = "06-23">
						<input type = "hidden" name = 'time' value = "13:10-14:00">
						<input type = "hidden" name = 'court' value = "volleyball">
					</td>
				</form>
				<form action="new_reserve.php" method="post">	
					<td bgcolor= "<?php echo $row2[7]; ?>">
						<input type="submit"  value="預約">
						<input type = "hidden" name = 'day' value = "06-23">
						<input type = "hidden" name = 'time' value = "13:10-14:00">
						<input type = "hidden" name = 'court' value = "volleyball">
					</td>
				</form>
			</tr>
		</table><br>
		<table BORDER="2" align=center>
			<tr>
				<td>日期/時間</td>
				<td>9:10-10:00</td>
				<td>10:10-11:00</td>
				<td>11:10-12:00</td>
				<td>13:10-14:00</td>
				<td>14:10-15:00</td>
				<td>15:10-16:00</td>
				<td>16:00-17:00</td>
			</tr>
			<h1 align="center" >6月24日</h1>
			<tr>
				<th>狀態</th>
				<form action="new_reserve.php" method="post">	
					<td bgcolor= "<?php echo $row3[1]; ?>">
						<input type = "hidden" name = 'day' value = "06-24">
						<input type = "hidden" name = 'time' value = "14:10-15:00">
						<input type = "hidden" name = 'court' value = "volleyballl">
						<input type="submit"  value="預約">
					</td>
				</form >
				<form action="new_reserve.php" method="post">		
					<td bgcolor= "<?php echo $row3[2]; ?>">
						<input type="submit"  value="預約" >
						<input type = "hidden" name = 'day' value = "06-24">
						<input type = "hidden" name = 'time' value = "14:10-15:00">
						<input type = "hidden" name = 'court' value = "volleyball">
					</td>
				</form>	
				<form action="new_reserve.php" method="post">		
					<td bgcolor= "<?php echo $row3[3]; ?>">
						<input type="submit"  value="預約" >
						<input type = "hidden" name = 'day' value = "06-24">
						<input type = "hidden" name = 'time' value = "14:10-15:00">
						<input type = "hidden" name = 'court' value = "volleyball">
					</td>
				</form>
				<form action="new_reserve.php" method="post">	
					<td bgcolor= "<?php echo $row3[4]; ?>">
						<input type="submit"  value="預約">
						<input type = "hidden" name = 'day' value = "06-24">
						<input type = "hidden" name = 'time' value = "14:10-15:00">
						<input type = "hidden" name = 'court' value = "volleyball">
					</td>
				</form>
				<form action="new_reserve.php" method="post">
					<td bgcolor= "<?php echo $row3[5]; ?>">
						<input type="submit"  value="預約">
						<input type = "hidden" name = 'day' value = "06-24">
						<input type = "hidden" name = 'time' value = "14:10-15:00">
						<input type = "hidden" name = 'court' value = "volleyball">
					</td>
				</form>
				<form action="new_reserve.php" method="post">	
					<td bgcolor= "<?php echo $row3[6]; ?>">
						<input type="submit"  value="預約">
						<input type = "hidden" name = 'day' value = "06-24">
						<input type = "hidden" name = 'time' value = "14:10-15:00">
						<input type = "hidden" name = 'court' value = "volleyball">
					</td>
				</form>
				<form action="new_reserve.php" method="post">	
					<td bgcolor= "<?php echo $row3[7]; ?>">
						<input type="submit"  value="預約">
						<input type = "hidden" name = 'day' value = "06-24">
						<input type = "hidden" name = 'time' value = "14:10-15:00">
						<input type = "hidden" name = 'court' value = "volleyball">
					</td>
				</form>
			</tr>
		</table><br>
		<table BORDER="2" align=center>
			<tr>
				<td>日期/時間</td>
				<td>9:10-10:00</td>
				<td>10:10-11:00</td>
				<td>11:10-12:00</td>
				<td>13:10-14:00</td>
				<td>14:10-15:00</td>
				<td>15:10-16:00</td>
				<td>16:00-17:00</td>
			</tr>
			<h1 align="center" >6月25日</h1>
			<tr>
				<th>狀態</th>
				<form action="new_reserve.php" method="post">	
					<td bgcolor= "<?php echo $row4[1]; ?>">
						<input type = "hidden" name = 'day' value = "06-25">
						<input type = "hidden" name = 'time' value = "15:10-16:00">
						<input type = "hidden" name = 'court' value = "volleyball">
						<input type="submit"  value="預約">
					</td>
				</form >
				<form action="new_reserve.php" method="post">		
					<td bgcolor= "<?php echo $row4[2]; ?>">
						<input type="submit"  value="預約" >
						<input type = "hidden" name = 'day' value = "06-25">
						<input type = "hidden" name = 'time' value = "15:10-16:00">
						<input type = "hidden" name = 'court' value = "volleyball">
					</td>
				</form>	
				<form action="new_reserve.php" method="post">		
					<td bgcolor= "<?php echo $row4[3]; ?>">
						<input type="submit"  value="預約" >
						<input type = "hidden" name = 'day' value = "06-25">
						<input type = "hidden" name = 'time' value = "15:10-16:00">
						<input type = "hidden" name = 'court' value = "volleyball">
					</td>
				</form>
				<form action="new_reserve.php" method="post">	
					<td bgcolor= "<?php echo $row4[4]; ?>">
						<input type="submit"  value="預約">
						<input type = "hidden" name = 'day' value = "06-25">
						<input type = "hidden" name = 'time' value = "15:10-16:00">
						<input type = "hidden" name = 'court' value = "volleyball">
					</td>
				</form>
				<form action="new_reserve.php" method="post">
					<td bgcolor= "<?php echo $row4[5]; ?>">
						<input type="submit"  value="預約">
						<input type = "hidden" name = 'day' value = "06-25">
						<input type = "hidden" name = 'time' value = "15:10-16:00">
						<input type = "hidden" name = 'court' value = "volleyball">
					</td>
				</form>
				<form action="new_reserve.php" method="post">	
					<td bgcolor= "<?php echo $row4[6]; ?>">
						<input type="submit"  value="預約">
						<input type = "hidden" name = 'day' value = "06-25">
						<input type = "hidden" name = 'time' value = "15:10-16:00">
						<input type = "hidden" name = 'court' value = "volleyball">
					</td>
				</form>
				<form action="new_reserve.php" method="post">	
					<td bgcolor= "<?php echo $row4[7]; ?>">
						<input type="submit"  value="預約">
						<input type = "hidden" name = 'day' value = "06-25">
						<input type = "hidden" name = 'time' value = "15:10-16:00">
						<input type = "hidden" name = 'court' value = "volleyball">
					</td>
				</form>
			</tr>
		</table><br>
		<table BORDER="2" align=center>
			<tr>
				<td>日期/時間</td>
				<td>9:10-10:00</td>
				<td>10:10-11:00</td>
				<td>11:10-12:00</td>
				<td>13:10-14:00</td>
				<td>14:10-15:00</td>
				<td>15:10-16:00</td>
				<td>16:00-17:00</td>
			</tr>
			<h1 align="center" >6月26日</h1>
			<tr>
				<th>狀態</th>
				<form action="new_reserve.php" method="post">	
					<td bgcolor= "<?php echo $row5[1]; ?>">
						<input type = "hidden" name = 'day' value = "06-26">
						<input type = "hidden" name = 'time' value = "16:10-17:00">
						<input type = "hidden" name = 'court' value = "volleyball">
						<input type="submit"  value="預約">
					</td>
				</form >
				<form action="new_reserve.php" method="post">		
					<td bgcolor= "<?php echo $row5[2]; ?>">
						<input type="submit"  value="預約" >
						<input type = "hidden" name = 'day' value = "06-26">
						<input type = "hidden" name = 'time' value = "16:10-17:00">
						<input type = "hidden" name = 'court' value = "volleyball">
					</td>
				</form>	
				<form action="new_reserve.php" method="post">		
					<td bgcolor= "<?php echo $row5[3]; ?>">
						<input type="submit"  value="預約" >
						<input type = "hidden" name = 'day' value = "06-26">
						<input type = "hidden" name = 'time' value = "16:10-17:00">
						<input type = "hidden" name = 'court' value = "volleyball">
					</td>
				</form>
				<form action="new_reserve.php" method="post">	
					<td bgcolor= "<?php echo $row5[4]; ?>">
						<input type="submit"  value="預約">
						<input type = "hidden" name = 'day' value = "06-26">
						<input type = "hidden" name = 'time' value = "16:10-17:00">
						<input type = "hidden" name = 'court' value = "volleyball">
					</td>
				</form>
				<form action="new_reserve.php" method="post">
					<td bgcolor= "<?php echo $row5[5]; ?>">
						<input type="submit"  value="預約">
						<input type = "hidden" name = 'day' value = "06-26">
						<input type = "hidden" name = 'time' value = "16:10-17:00">
						<input type = "hidden" name = 'court' value = "volleyball">
					</td>
				</form>
				<form action="new_reserve.php" method="post">	
					<td bgcolor= "<?php echo $row5[6]; ?>">
						<input type="submit"  value="預約">
						<input type = "hidden" name = 'day' value = "06-26">
						<input type = "hidden" name = 'time' value = "16:10-17:00">
						<input type = "hidden" name = 'court' value = "volleyball">
					</td>
				</form>
				<form action="new_reserve.php" method="post">	
					<td bgcolor= "<?php echo $row5[7]; ?>">
						<input type="submit"  value="預約">
						<input type = "hidden" name = 'day' value = "06-26">
						<input type = "hidden" name = 'time' value = "16:10-17:00">
						<input type = "hidden" name = 'court' value = "volleyball">
					</td>
				</form>
			</tr>
		</table><br>
		<table BORDER="2" align=center>
			<tr>
				<td>日期/時間</td>
				<td>9:10-10:00</td>
				<td>10:10-11:00</td>
				<td>11:10-12:00</td>
				<td>13:10-14:00</td>
				<td>14:10-15:00</td>
				<td>15:10-16:00</td>
				<td>16:00-17:00</td>
			</tr>
			<h1 align="center" >6月27日</h1>
			<tr>
				<th>狀態</th>
				<form action="new_reserve.php" method="post">	
					<td bgcolor= "<?php echo $row6[1]; ?>">
						<input type = "hidden" name = 'day' value = "06-27">
						<input type = "hidden" name = 'time' value = "17:10-18:00">
						<input type = "hidden" name = 'court' value = "volleyball">
						<input type="submit"  value="預約">
					</td>
				</form >
				<form action="new_reserve.php" method="post">		
					<td bgcolor= "<?php echo $row6[2]; ?>">
						<input type="submit"  value="預約" >
						<input type = "hidden" name = 'day' value = "06-27">
						<input type = "hidden" name = 'time' value = "17:10-18:00">
						<input type = "hidden" name = 'court' value = "volleyball">
					</td>
				</form>	
				<form action="new_reserve.php" method="post">		
					<td bgcolor= "<?php echo $row6[3]; ?>">
						<input type="submit"  value="預約" >
						<input type = "hidden" name = 'day' value = "06-27">
						<input type = "hidden" name = 'time' value = "17:10-18:00">
						<input type = "hidden" name = 'court' value = "volleyball">
					</td>
				</form>
				<form action="new_reserve.php" method="post">	
					<td bgcolor= "<?php echo $row6[4]; ?>">
						<input type="submit"  value="預約">
						<input type = "hidden" name = 'day' value = "06-27">
						<input type = "hidden" name = 'time' value = "17:10-18:00">
						<input type = "hidden" name = 'court' value = "volleyball">
					</td>
				</form>
				<form action="new_reserve.php" method="post">
					<td bgcolor= "<?php echo $row6[5]; ?>">
						<input type="submit"  value="預約">
						<input type = "hidden" name = 'day' value = "06-27">
						<input type = "hidden" name = 'time' value = "17:10-18:00">
						<input type = "hidden" name = 'court' value = "volleyball">
					</td>
				</form>
				<form action="new_reserve.php" method="post">	
					<td bgcolor= "<?php echo $row6[6]; ?>">
						<input type="submit"  value="預約">
						<input type = "hidden" name = 'day' value = "06-27">
						<input type = "hidden" name = 'time' value = "17:10-18:00">
						<input type = "hidden" name = 'court' value = "volleyball">
					</td>
				</form>
				<form action="new_reserve.php" method="post">	
					<td bgcolor= "<?php echo $row6[7]; ?>">
						<input type="submit"  value="預約">
						<input type = "hidden" name = 'day' value = "06-27">
						<input type = "hidden" name = 'time' value = "17:10-18:00">
						<input type = "hidden" name = 'court' value = "volleyball">
					</td>
				</form>
			</tr>
	

</body>
  
  
</html>
