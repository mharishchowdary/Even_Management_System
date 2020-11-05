<?php
	$name = $_POST['name'];
	$lname = $_POST['lname'];
	//$gender = $_POST['gender'];
	$email = $_POST['email'];
	$events = $_POST['events'];
	$institute = $_POST['institute'];

	$address = $_POST['address'];
	//$password = $_POST['password'];
	$number = $_POST['number'];

	// Database connection
	$conn = new mysqli('localhost','root','','test2');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
        $stmt = $conn->prepare("insert into form(name, lname, email, events, institute, address, number) values(?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("ssssssi", $name, $lname, $email, $events, $institute, $address, $number);
		$execval = $stmt->execute();
		//echo $execval;
		echo "Thank You! We will contact you shortly…";
		$stmt->close();
		$conn->close();
	}
?>
<?php
/*
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$gender = $_POST['gender'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$number = $_POST['number'];

	// Database connection
	$conn = new mysqli('localhost','root','','test');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(firstName, lastName, gender, email, password, number) values(?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("sssssi", $firstName, $lastName, $gender, $email, $password, $number);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
    }
*/
?> 