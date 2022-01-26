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
        input[type="email"] {
  padding: 6px 20px;
  border: solid 1px #dcdcdc;
  transition: box-shadow 0.3s, border 0.3s;
}
 input[type="email"]:focus,
input[type="email"].focus {
  border: solid 1px #707070;
  box-shadow: 0 0 5px 1px #969696;
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
<head>
<script>

function validateForm() {
   
	var mobno = document.forms["myForm1"]["mob"].value;
	var p = document.forms["myForm"]["pass"].value;
	var rp = document.forms["myForm"]["repass"].value;
	var acno = document.forms["myForm1"]["acc"].value;
	var bkname = document.forms["myForm1"]["bank"].value;
	if(p == "" || p.length<6 || p.length>12){
		alert("Password length must be between 6 and 12");
        return false;
	}
	else if(p != rp){
		alert("Password does'nt match");
        return false;
	}	
	else if( mob!=null || isNaN(mob) || mob<7000000000 || mob>9999999999){
		alert("Enter a valid mob no");
        return false;
	}
	
	
	else if(acno!=null ||acno<9 || acno>18 || isNaN(adno)){
		alert("Enter a valid account no");
        return false;
	}
	else if(bkname == ""){
		alert("Enter valid bank name");
		return false;
	}
	}
}
</head>
</script>

<body style="background-color:lightblue">
<center>
<form name="myForm1" onsubmit="return validateForm()" action="updateciv.php" method="POST">
<?php
session_start();
$unm=$_SESSION['uname'];
    if(isset($_SESSION['uname']))
    {
        header("location=login.php");
    }

 try{
		$dbhandler = new PDO('mysql:host=127.0.0.1;dbname=project','root','root');
		$dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		$sql="select * from civilian where uname='$unm'";
		$query=$dbhandler->query($sql);
		
		while($r=$query->fetch()){
			echo "<p style='font-size:200%;'><b>Password</b>  :  <input type='password' value='".$r['pass']."' name='pass'</p><br>";
			echo "<p style='font-size:200%;'><b>Re-enter Password</b>  :  <input type='password' value='".$r['pass']."' name='repass'</p><br>";
			echo "<p style='font-size:200%;'><b>Email</b>  :  <input type='email' value='".$r['email']."' name='email'</p><br>";
			echo "<p style='font-size:200%;'><b>Mob No</b>  :  <input type='number' value='".$r['mob']."' name='mob'</p><br>";
			echo "<p style='font-size:200%;'><b>Bank Account No</b>  :  <input type='number' value='".$r['acc']."' name='acc'</p><br>";
			echo "<p style='font-size:200%;'><b>Bank Name</b>  :  <input type='text' value='".$r['bank']."' name='bank'</p><br>";

			}	
			
	}
	catch(PDOException $e){
		echo $e->getMessage();
		die();
	}

?>
<br>
<input type="submit" value="update" class="button"/>
<a class="button" href="profileciv.php">Back</a>
</form>
    </center>
</body>
</html>