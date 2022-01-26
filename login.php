<?php
	try
	{
		$dbhandler = new PDO('mysql:host=127.0.0.1;dbname=project','root','root');
	//	echo "<p style='color: red;'>Connection is established...</p>";
		$dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
				

		if(isset($_POST["pass"]) && isset($_POST["uname"])) 
		{     
			$name = $_POST["uname"]; 
			$password = $_POST["pass"]; 
			
			if(isset($_POST["utype"])){
			$ut = $_POST["utype"];
					
			if($ut == "Civilian")
			{			
				$q=$dbhandler->prepare("select uname,pass from civilian where uname=? and pass=?");
				$q->execute(array($name,$password));
				if($q->rowcount()==1)
				{			
				session_start();
				$_SESSION['uname']=$name;
				header("location:home.php");				
				}
				else
				{
				$error="<p style='color: red;'>Incorrect Username or Password!</p>";
				}
			}
			else if($ut == "Martyr")
			{
				$q=$dbhandler->prepare("select uname,pass from soldier where uname=? and pass=?");
				$q->execute(array($name,$password));
				if($q->rowcount()==1)
				{				
				session_start();
				$_SESSION['uname']=$name;
				header("location:profile.php");				
				}
				else
				{
				$error="<p style='color: red;'>Incorrect Username or Password!</p>";
				}
			}
			}
			else
			{
				$error="<p style='color: red;'>Select account type!</p>";
			}
		}
		
	}
	catch(PDOException $e)
	{
		echo $e->getMessage();
		die();
	}				
				?>
<html>
	<head>
		<title>Login</title>
	</head>
	
	<style>
        
        .img 
        {
                border-radius: 20px;
                padding: 1px;
                width: 400px;
                opacity: 0.95;
                filter: alpha(opacity=90);
        }	
		
        body
		{
			background-image: url(indian.jpg);
			background-size: 1550px 850px ;	
            color:darkslateblue;
		}
		
        .right 
		{
			margin-top: 20px;
			margin-bottom: 100px;
			margin-right: 10px;
			margin-left: 800px;
		}
		
        .tdcolor
		{
			color:darkslateblue;
		}
		
        h1
		{
			font-size:50px;
			color:orange;
		}
		
        input
		{
			color:Darkblue;	
		}
        
		a
		{
			color:Darkblue;
		}
        
		h3
		{
			color:Darkblue;
		}
        
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
        
        a[name="jetpack_subscriptions_widget"]
        {
            margin-left:430px;
        }
        input[type="text"] {
  padding: 6px 20px;
  border: solid 1px #dcdcdc;
  transition: box-shadow 0.3s, border 0.3s;
}
 input[type="text"]:focus,
input[type="text"].focus {
  border: solid 1px #707070;
  box-shadow: 0 0 5px 1px #969696;
}
        input[type="password"] {
  padding: 6px 20px;
  border: solid 1px #dcdcdc;
  transition: box-shadow 0.3s, border 0.3s;
}
 input[type="password"]:focus,
input[type="password"].focus {
  border: solid 1px #707070;
  box-shadow: 0 0 5px 1px #969696;
}
	</style>
    
	<body  class="right">
        
        <a class="button" name="jetpack_subscriptions_widget" align="right" href="contactus.php" >Contact us</a>
        
		<form action="login.php" method="post">
			<center>
				<h1>India's Bravehearts</h1>	
                    <img class="img" src="amar2.jpg">
                <table>
                    <?php if(isset($error)){
						Print "<tr><td colspan='2'> $error </td></tr>";
					} ?>
					<tr>
						<td class="tdcolor">Username : </td><td class="tdcolor"><input type="text" name="uname" class="focus" required/>
						</td>
					</tr><br>
					<tr>
						<td class="tdcolor"> Password : </td>
						<td class="tdcolor"><input type="password" name="pass" class="focus" required/></td>
					</tr><br>
					<tr>
						<td colspan=2>
						<center>
							<input type="radio" name="utype" value="Civilian"/>Civilian
							<input type="radio" name="utype" value="Martyr"/>Martyr
						</center>
						</td>
					</tr>
					<tr>
						<td colspan=2 class="tdcolor">
						<center>
                           
                            <input class="button" type="submit" value="Log In">
							<input type="reset" class="button" value="Reset">
						</center>
						</td>
					</tr> 
					<tr>
						<td colspan=2 class="tdcolor">
						<center>
                            <a class="button" href="newuser.php">Sign Up</a>
						</center>
						</td>
					</tr>
				</table>
				
			</center>
		</form>
	</body>
</html>

