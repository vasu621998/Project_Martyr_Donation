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
     body
    {
        background-image:url(flag2.jpg);
        background-size: cover;
    } 
</style>
<body style="background-color:lightblue">
<center>

<?php
session_start();
$unm=$_SESSION['uname'];
echo "<h1><center>Welcome ".$unm."</center></h1>" ;

 try{
		$dbhandler = new PDO('mysql:host=127.0.0.1;dbname=project','root','root');
		$dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		$sql="select * from civilian where uname='$unm'";
		$query=$dbhandler->query($sql);
		
		while($r=$query->fetch()){
			echo "<p style='font-size:200%;'><b>Username</b>  :  ".$r['uname']."</p>";
			echo "<p style='font-size:200%;'><b>Email</b>  :  ".$r['email']."</p>";
			echo "<p style='font-size:200%;'><b>Mob No</b>  :  ".$r['mob']."</p>";
			echo "<p style='font-size:200%;'><b>Country</b>  :  ".$r['country']."</p>";
			echo "<p style='font-size:200%;'><b>Bank Account No</b>  :  ".$r['acc']."</p>";
			echo "<p style='font-size:200%;'><b>Bank Name</b>  :  ".$r['bank']."</p>";

			}
	}
	catch(PDOException $e){
		echo $e->getMessage();
		die();
	}

?>
<br>
<a class="button" href="editciv.php">Edit Profile</a>
<a class="button" href="home.php">Back</a>
<a class="button" href="signout.php?msg1=Logged Out">Sign Out</a>
</center>
</body>
</html>
