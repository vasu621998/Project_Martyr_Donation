<html>
<style>
.button 
        {
            background-color:white;
            border: none;
            border: 2px solid darkslateblue;
            color: darkblue;
            border-radius: 5px;
            padding: 7px 10px;
            text-align: center;
            text-decoration: none;  
            display: inline-block;
            font-size: 15px;
            -webkit-transition-duration: 0.4s; /* Safari */
            transition-duration: 0.4s;
            
            margin: 2px;
        }
		
        .button:hover 
        {
            background-color:darkslateblue;
            color: white;
            box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
        }
    input[type="number"] {
  padding: 6px 20px;
  border: solid 1px #dcdcdc;
  transition: box-shadow 0.3s, border 0.3s;
}
 input[type="number"]:focus,
input[type="number"].focus {
  border: solid 1px #707070;
  box-shadow: 0 0 5px 1px #969696;
}
</style>
<body style="background-color:lightblue">

<?php
session_start();
$unm=$_SESSION['uname'];
    echo "<h1><center>Welcome  ".$unm."</center></h1>" ;?><center>
<form action="Donate.php" method="POST">
<center>
<table  style="width:80%">
<tr>
<th>Username</th>
<th>Soldier Name</th>
<th>Amount</th>
<th>Donate</th>
</tr>

<?php
    
 try{
		$dbhandler = new PDO('mysql:host=127.0.0.1;dbname=project','root','root');
		$dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		$sql="select uname,sold_name,amount from soldier where amount<1000000";
		$query=$dbhandler->query($sql);
		
		while($r=$query->fetch()){
			echo "<tr><td><center>" . $r['uname'] . "</center></td>";
			echo "<td><center>" . $r['sold_name'] . "</center></td>";
			echo "<td align='center'>" . $r['amount'] . "</td>";
			echo "<td align='center'> <input type='checkbox' name='check[]' value=".$r['uname']."></td></tr>";
		}
	}
	catch(PDOException $e){
		echo $e->getMessage();
		die();
	}

?>
</table>
<br>
Enter Amount To Donate &nbsp;<input type="number" name="amount" class="focus" required/> &nbsp; &nbsp;
  <input class="button" type="submit" name="donate" value="Donate" /><br><br>

<input class="button" type="reset" value="reset"><br>

<br>
<a class="button" href="profileciv.php">Profile</a>
<a class="button" href="signout.php?msg1=Logged Out">Sign Out</a>

</center>
</form>
</body>
</html>
