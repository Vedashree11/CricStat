<?php 
$con = mysqli_connect("localhost", "root", "root", "cric");
require_once('aji.php'); 
$query="select * from pakistan1"; 
$result= mysqli_query($con,$query);
$query1="select * from india1"; 
$result1= mysqli_query($con,$query1);
$query2="select * from india2";
$result2= mysqli_query($con,$query2);
$query3="select * from pakistan2";
$result3= mysqli_query($con,$query3);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Scorecard</title>
	<link rel="stylesheet" href="style.css">
	<style>
		#df{
		margin:20px auto;
		font-family: Arial, Helvetica, sans-serif;
		font-weight: bold;
		list-style: 25px; 
		text-align: center;
		}
		#fg{
		font-family: Arial, Helvetica, sans-serif;
		font-size: 14px;
		text-align: center;
		}
		.kl{
		font-family: Arial, Helvetica, sans-serif;
		font-size: 14px;
		text-align: center;
		margin-left: 12%;
		}
		.body{
		/* width:100%;
		height:100vh; */
		/* background-image: linear-gradient(rgba(0,0,0,0.75),rgba(0,0,0,0.75)),url(Kohli.webp); */
		/* background-size: cover; */
		/* background-position: center; */
		background-image: linear-gradient(rgba(0,0,0,0.75),rgba(0,0,0,0.75)),url(Kohli.webp);
		background-repeat: no-repeat;
		background-attachment: fixed;
		background-size: 100% 100%;
		height: 1300px;
    	}
	</style>
  </head>
  <body>
		<nav class="navbar background">
			<ul class="nav-list">
				<li><img src="logo.jpg" alt="image"></li>
				<li><a href="index.html">Home</a></li>
				<li><a class="active" href="scorecard.php">Scorecard</a></li>
				<li><a href="stats.html">Statistics</a></li>
				<li style="float:right"><a href="#about">About</a></li>
			</ul>   
    	</nav>
	<h3 id="df">India vs Pakistan, 16th Match, Super 12 Group 2 </h3>
	<p id="fg"><b>Series:</b> ICC Mens T20 World Cup 2022 <b>Venue:</b> Melbourne Cricket Ground, Melbourne <b>Date & Time:</b> Oct 23, 07:00 PM LOCAL</p>
	<h4 id="df" style="color:blue; font-weight: normal;">India won by 4 wkts </h4>
	<h4 style="color:grey; margin-left: 15%; font-family: Arial, Helvetica, sans-serif; font-weight: normal;">PLAYER OF THE MATCH</h4>
	<h4 style="margin-left: 15%; font-family: Arial, Helvetica, sans-serif;">Virat Kohli</h4>
	<table align="center" border="1px" style="width:70%; line-height:100%;"> 
	<tr> 
		<th colspan="7"><h3>Pakistan Innings</h3></th> 
		</tr> 
			  <th> Batter</th> 
			  <th> </th> 
			  <th> Runs </th> 
              <th> Balls </th>
			  <th> Fours </th> 
			  <th> Sixes </th>
			  <th> Strike Rate </th>  
		</tr> 
		
		<?php while($rows=mysqli_fetch_assoc($result)) 
		{
		?> 
		<tr> <td><?php echo $rows['pname']; ?></td> 
		<td><?php echo $rows['status']; ?></td> 
		<td><?php echo $rows['runs']; ?></td> 
		<td><?php echo $rows['balls']; ?></td> 
		<td><?php echo $rows['fours']; ?></td> 
        <td><?php echo $rows['sixes']; ?></td>
		<td><?php echo $rows['strate']; ?></td>
		</tr> 
		<?php 
        } 
        ?> 
	</table>
	<h4 class="kl">Extras 12 (b 2, lb 4, w 6, nb 0, p 0)</h4>
	<h4 class="kl">Total 159 / 8 (20)</h4>
	<table align="center" border="1px" style="width:70%; line-height:100%;"> 
	<tr> 
		<th colspan="8"><h3></h3></th> 
		</tr> 
			  <th> Bowler</th> 
			  <th>O</th> 
			  <th> M </th> 
              <th> R </th>
			  <th> W </th> 
			  <th> NB </th>
			  <th> WB </th>
			  <th> Eco. </th>
		</tr> 
		
		<?php while($rows1=mysqli_fetch_assoc($result1)) 
		{
		?> 
		<tr> <td><?php echo $rows1['pname']; ?></td> 
		<td><?php echo $rows1['overs']; ?></td> 
		<td><?php echo $rows1['maiden']; ?></td> 
		<td><?php echo $rows1['runs']; ?></td> 
		<td><?php echo $rows1['wickets']; ?></td> 
        <td><?php echo $rows1['nb']; ?></td>
		<td><?php echo $rows1['wides']; ?></td>
		<td><?php echo $rows1['economy']; ?></td>
		</tr> 
		<?php 
        } 
        ?> 
	</table> 
	<br>
	<table align="center" border="1px" style="width:70%; line-height:100%;"> 
	<tr> 
		<th colspan="7"><h3>India Innings</h3></th> 
		</tr> 
			  <th> Batter</th> 
			  <th> </th> 
			  <th> Runs </th> 
              <th> Balls </th>
			  <th> Fours </th> 
			  <th> Sixes </th>
			  <th> Strike Rate </th>  
		</tr> 
		
		<?php while($rows2=mysqli_fetch_assoc($result2)) 
		{
		?> 
		<tr> <td><?php echo $rows2['pname']; ?></td> 
		<td><?php echo $rows2['status']; ?></td> 
		<td><?php echo $rows2['runs']; ?></td> 
		<td><?php echo $rows2['balls']; ?></td> 
		<td><?php echo $rows2['fours']; ?></td> 
        <td><?php echo $rows2['sixes']; ?></td>
		<td><?php echo $rows2['strate']; ?></td>
		</tr> 
		<?php 
        } 
        ?>
	</table> 
	<h4 class="kl">Extras 11 (b 3, lb 1, w 6, nb 1, p 0)</h4>
	<h4 class="kl">Total 160 (6 wkts, 20 Ov)</h4>
	<table align="center" border="1px" style="width:70%; line-height:100%;"> 
	<tr> 
		<th colspan="8"><h3></h3></th> 
		</tr> 
			  <th> Bowler</th> 
			  <th>O</th> 
			  <th> M </th> 
              <th> R </th>
			  <th> W </th> 
			  <th> NB </th>
			  <th> WB </th>
			  <th> Eco.</th>
		</tr> 
		
		<?php while($rows3=mysqli_fetch_assoc($result3)) 
		{
		?> 
		<tr> <td><?php echo $rows3['pname']; ?></td> 
		<td><?php echo $rows3['overs']; ?></td> 
		<td><?php echo $rows3['maiden']; ?></td> 
		<td><?php echo $rows3['runs']; ?></td> 
		<td><?php echo $rows3['wickets']; ?></td> 
        <td><?php echo $rows3['nb']; ?></td>
		<td><?php echo $rows3['wides']; ?></td>
		<td><?php echo $rows3['economy']; ?></td>
		</tr> 
		<?php 
        } 
        ?> 
	</table> 
  </body>
</html>
