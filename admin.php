<!DOCTYPE html>
<html>
<head>

	<style type="text/css">
		
		h2{
  			padding-top: 100px;
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
		th {
  			border: solid 1px #2e3a4d;
  			padding: 16px 8px;
  			background-color: #FFD306;
		}		
		td {
			border: solid 1px #2e3a4d;
  			text-align: center;
  			padding: 8px;
  			color: #4F4F4F;
		}

		tr{
			border-radius:30px;
			background-color: white;
		}

		td a{
  			text-align: center;
  			color: #4F4F4F;
		}

	</style>

	<title>審核預約</title>
	<meta charset="UTF-8">
</head>
<body>
	<h2>Review</h2>
				<table align="center">
                    <tr>
                        <th>帳號(學號)</th>
                        <th>姓名</th>
                        <th>電子信箱</th>
                        <th>預約狀態</th>
                        <th>日期</th>
                        <th>時間</th>
                        <th>場地</th>
                        <th colspan="2">審核</th>
                    </tr>
                    <?php  
						session_start();
						$link = mysqli_connect("localhost","root","","register")
					            or die("無法開啟MySQL資料庫連接!<br/>");
					    mysqli_query( $link, "set names 'utf8'" );

					    $sql = "SELECT * FROM admin";
					    $res = mysqli_query( $link, $sql );
					   	while ( $arr = mysqli_fetch_array( $res ) ) {
					   		if ($arr['court'] == 'baseball'){
					        	$court = '棒球場';
					        }
					        elseif ($arr["court"] =='basketball') {
					       		$court = '籃球場';
					        }
					        else{
					        	$court = '排球場';
        }
					   		echo "<tr>";
					        echo "<td>" . $arr[ 'S_no' ] . "</td>";
					        echo "<td>" . $arr[ 'name' ] . "</td>";
					        echo "<td>" . $arr[ 'email' ] . "</td>";
					        echo "<td>" . $arr[ 'situation' ] . "</td>";
					        echo "<td>" .$arr['date']."</td>";
					        echo "<td>" . $arr[ 'time' ] . "</td>";
					        echo "<td>" . $court . "</td>";
					        echo "<td><a href='check.php?user_id=" . $arr[ 'S_no' ] . "&time=" . $arr[ 'time' ] ."&court=". $arr[ 'court' ]."&date=".$arr['date']."'>審核</a>";
					        echo "<td><a href='reject.php?user_id=" . $arr[ 'S_no' ] . "&time=" . $arr[ 'time' ] ."&court=". $arr[ 'court' ]."&date=".$arr['date']."'>拒絕</a>";
					        echo "</tr>";
					     }              
	 
                    
                                               
	
					?>
				</table>


</body>
</html>