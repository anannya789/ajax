<?php  
require 'dbconnect.php';
$userList = "";

$successfullmessage = $errormessage = "";
$username = empty($_GET['username']) ? "": $_GET['username'];


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>userlist</title>
	<script src="validation.js"></script>

</head>
<body>
	<h1 id="demo">user list</h1>
	<button onclick="test()"> Click here </button>

	<br>
	<form action="indexAction.php" name="mFrom" method="POST" onsubmit="submitForm(this); return false;">
		<label for="name">User Name:</label>
		<input type="text" name="name" id="name">
		<span id="errormessage" style="color: red;"></span>
		<input type="submit" name="submit" value="submit">
	</form>

	<?php  
	if (count($userlist) > 0) {
		echo "<table>";
		echo "<tr>";
		echo "<th>Id</th>";
		echo "<th>username</th>";
		echo "<th>Action</th>";
		echo "</tr>";
		for ($i=0; $i < count($userList); $i++) { 
			echo "<tr>";
			echo "<td>" . $userList[$i]["id"] . "</td>";
			echo "<td>" . $userList[$i]["username"] . "</td>";
			echo "</tr>";
		}
		echo "</table>";

	}
	else{
		echo "<h3>no of records found.</h3>";
	}

	?>

	<br>
	<br>
	<span style="color: green;"><?php echo $successfulMessage; ?></span>
	<span style="color: red;"><?php echo $errorMessage; ?></span>

	<h2 id="demo"></h2>
	<script>
		function check(val){
			var name = val.name.value;
			document.getElementById("errormessage").innerHTML = "";
			if (name==="") {
				document.getElementById("errormessage").innerHTML = "please fill up the fields";
				return false;

			}
			return ture;
		}

		function submitFrom(pFrom){

			var isValid = check(pFrom);
			if (isValid) {
				var xhttp = new XMLHttpRequest();
				xhttp.onload = function(){
					if (this.status === 200) {
						document.getElementById("demo").innerHTML = this.responseText;
					}
				}

				xhttp.open("POST","indexAction.php");
				xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
				xhttp.send("name=" +pFrom.name.value);

			}


		}
	</script>


</body>
</html>