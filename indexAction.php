<?php  
if ($_SERVER['REQUEST_METHOD'] === "POST") {
		$name = $_POST['name'];

		if (empty($name)) {
			echo "Please fill up the fields";
		}

		else{
			echo "successfully saved";
		}
}
?>