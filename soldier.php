<html>
<head>
    <link href="themes/1/js-image-slider.css" rel="stylesheet" type="text/css" />
    <script src="themes/1/js-image-slider.js" type="text/javascript"></script>
    <link href="generic.css" rel="stylesheet" type="text/css" />
</head>
<body>
    
    <div id="sliderFrame">
        <div id="slider">
           <img src="re1.jpg"  width="1300" height="350"/>
            <img src="re2.jpg" width="1300" height="350" />
            <img src="re4.jpg" width="1300" height="350"/>
            <img src="re5.jpg" width="1300" height="350"/>
            <img src="re6.jpg" width="1300" height="350"/>
            
        </div>
        
    </div>

    
</body>
    </html>

<html>

    <!DOCTYPE html>

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
        background-color: lightblue;
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
<title>Register Here</title>

<script>

function validateForm() {
    var unm = document.forms["myForm"]["uname"].value;
	var p = document.forms["myForm"]["pass"].value;
	var rp = document.forms["myForm"]["repass"].value;
	var mobno = document.forms["myForm"]["mob"].value;
	var adno = document.forms["myForm"]["adhaar"].value;
	var acno = document.forms["myForm"]["acc"].value;
	var ifsccode = document.forms["myForm"]["ifsc"].value;
	var idno = document.forms["myForm"]["id"].value;
	var sold_name = document.forms["myForm"]["sname"].value;
var bkname = document.forms["myForm1"]["bank"].value;
    if (unm == "") {
        alert("Name must be filled out");
        return false;
    }
	else if(unm.length>11){
		alert("Name must less than 11 letters filled out");
        return false;
	}
	else if(p == "" || p.length<6 || p.length>12){
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
	else if(adno!=null || adno !=12 || isNaN(adno)){
		alert("Enter a valid adhaar card no");
        return false;
	}
	else if(idno!=null || isNaN(idno)){
		alert("Enter a valid id card no");
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
	else if(ifsccode != "" || ifsccode.length != 11){
		alert("Enter a valid ifsc code");
        return false;
	}
}
</script>

</head>
<body>
<form name="myForm" action="soldierentry.php" onsubmit="return validateForm()" method="post">
<br>
<center>
<p style="text-align:left;color:red">All are must Required Fields</p>
<table border="0" style="width:80%">
<caption><u><b><p style="font-size:300%;">Pesonal Details</p></b></u></caption>

    <tr><td style="width:50%"><center><p style="font-size:200%;"><b>Username</b></p></center></td>
<td><input type="text" name="uname" size="40" class="focus"></td></tr>

    <tr><td style="width:50%"><center><p style="font-size:200%;"><b>Password</b></p></center></td>
<td><input type="password" name="pass" size="40"  class="focus"></td></tr>

    <tr><td style="width:50%"><center><p style="font-size:200%;"><b>Re-enter Password</b></p></center></td>
<td><input type="password" name="repass" size="40" class="focus"></td></tr>

    <tr><td style="width:50%"><center><p style="font-size:200%;"><b>Email</b></p></center></td>
<td><input type="email" name="email" size="40" class="focus"></td></tr>

    <tr><td style="width:50%"><center><p style="font-size:200%;"><b>Mob-num</b></p></center></td>
<td><input type="number" name="mob" size="40" class="focus"></td></tr>


</table>

<table border="0" style="width:80%">

<caption><u><b><p style="font-size:300%;">Identification Details</p></b></u></caption>

    <tr><td style="width:50%"><center><p style="font-size:200%;"><b>Adhaar-Card no</b></p></center></td>
<td><input type="number" name="adhaar" size="40" class="focus"></td></tr>
</table>

<table border="0" style="width:80%">

<caption><u><b><p style="font-size:300%;">Soldier Details</p></b></u></caption>
    <tr><td style="width:50%"><center><p style="font-size:200%;"><b>Soldier name</b></p></center></td>
<td><input type="text" name="sname" size="40" class="focus"></td></tr>


    <tr><td style="width:50%"><center><p style="font-size:200%;"><b>Id-Card no<b/></b></center></td>
<td><input type="number" name="id" size="40" class="focus"></td></tr>
</table>

<table border="0" style="width:80%">
<caption><u><b><p style="font-size:300%;">Bank Details</p></b></u></caption>

    <tr><td style="width:50%"><center><p style="font-size:200%;"><b>Beneficiary name</b></p></center></td>
<td><input type="text" name="bname" size="40" class="focus"></td></tr>

    <tr><td style="width:50%"><center><p style="font-size:200%;"><b>Account no</b></p></center></td>
<td><input type="number" name="acc" size="40" class="focus"></td></tr>

    <tr><td style="width:50%"><center><p style="font-size:200%;"><b>Bank Name</b></p></center></td>
<td><input type="text" name="bank" size="40" class="focus"></td></tr>

    <tr><td style="width:50%"><center><p style="font-size:200%;"><b>IFSC code</b></p></center></td>
<td><input type="text" name="ifsc" size="40" class="focus"></td></tr>

</table>

<input class="button" type="submit" value="submit">
<a class="button" href="newuser.php">Back</a>

</center>
</form>
</body>
</html>

