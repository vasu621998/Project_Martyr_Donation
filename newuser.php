<?php
session_start();
if(isset($_SESSION['uname']))
{
	//echo"<html><head><script>window.alert('Illegal Access');</script></head></html>";
	header("location:signout.php?msg=Invalid Access");
	die();
}
?>



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
		h1
		{
			font-size:50px;
			color:darkslateblue;
		}
</style>
<body>
<h1><center>Register For<center></h1>

<center>
<a class="button" href="registration.php">Civilian</a>
<a class="button" href="script.php">Soldier</a>
</center><br><br>
<center>
<a class="button" href="login.php">Back</a>
</center>

</body>
</html>