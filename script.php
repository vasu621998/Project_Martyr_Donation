<html>
<head>
<script>
while(true){
	password=prompt("Enter admin password");
	if(password == "prashit"){
		window.alert("Welcome Administrator...Press OK to continue");
		window.location.href = "soldier.php";
		break;
	}
	else{
		window.alert("Incorrect Password");
		break;
	}
}

</script>
</head>
</html>