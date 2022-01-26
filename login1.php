<?php
				try{
					$dbhandler = new PDO('mysql:host=127.0.0.1;dbname=project','root','');
					$dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
				

				if(isset($_POST["pass"], $_POST["uname"], $_POST["utype"])) 
				{     

					$name = $_POST["uname"]; 
					$password = $_POST["pass"]; 
					$ut = $_POST["utype"];
					
					
					if($ut == "Civilian")
					{
						
						try{
						
						$q=$dbhandler->prepare("select uname,pass from civilian where uname=? and pass=?");
						$q->execute(array($name,$password));
						 

					if($q->rowcount()==1){
							
							session_start();
							$_SESSION['uname']=$name;
							header("location:home.php");
							
						}
						
						else
						{
							echo'The username or password are incorrect!';
						}
						}
							catch(PDOException $e){
								echo $e->getMessage();
								die();
						}
						
					}
					else if($ut == "Martyr")
					{
						$q=$dbhandler->prepare("select uname,pass from soldier where uname=? and pass=?");
						$q->execute(array($name,$password));
						 

					if($q->rowcount()==1){
							
							session_start();
							$_SESSION['uname']=$name;

							header("location:profile.php");
							
						}
						else
						{
							echo'The username or password are incorrect!';		
							die();
						}
					}
				}
				}
				catch(PDOException $e){
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
			color:dodgerblue;
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
            margin-left:600px;
        }
        
	</style>
    
	<body  class="right">
        
        <a class="button" name="jetpack_subscriptions_widget" align="right" href="contactus.php" >Contact us</a>
        
		<form action="login1.php" method="post">
			<center>
				<h1>Welcome</h1>	
                    <img class="img" src="amar2.jpg">
                <table>
					<tr>
						<td class="tdcolor">Username : </td><td class="tdcolor"><input type="text" name="uname" required/>
						</td>
					</tr><br>
					<tr>
						<td class="tdcolor"> Password : </td>
						<td class="tdcolor"><input type="password" name="pass" required/></td>
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
                            <a class="button" href="newuser.php">Sign In</a>
						</center>
						</td>
					</tr>
				</table>
				
			</center>
		</form>
	</body>
</html>

