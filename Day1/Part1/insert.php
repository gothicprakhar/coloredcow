
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDBone";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
    $flag=false;
	$firstname=$_POST["fname"];
	$lastname=$_POST["lname"];
	$emailid=$_POST["email"];
	$password=$_POST["psswd"];
    
    if($firstname !=''||$email !=''){
        //Insert Query of SQL
        $sql = "INSERT INTO mydata (firstname, lastname, email, password)
        VALUES ('$firstname', '$lastname', '$emailid', '$password')";
    }
    
    if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
}

$conn->close();
?>
