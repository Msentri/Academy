 <?php



if (isset($_POST["sendMessage"])){

	$name = $_POST["name"];
	$email = $_POST["email"];


	$message = $_POST["message"] ;

	addUser($name,$email,$message);

}

 /**
  * @param $name
  * @param $email
  * @param $message
  * addUser function add information from contact us form to database
  */
function addUser($name, $email,$message){

	$conn = databaseConnect();

	$sql = "INSERT INTO users (name, email, message)
		VALUES ('$name', '$email', '$message')";

	$checkSentUser = checkSentUser($email);
	$send_email = sendEmail($email,$message);

	if($checkSentUser){
		if ($conn->query($sql) === TRUE) {
			if($send_email){
				echo 'message sent';
			}else{
				echo 'message not sent';
			}
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}else{
		echo "You have contacted us before, Thank you!";
	}


	$conn->close();
}

 /**
  * @return mysqli
  * connects and check database
  */
function databaseConnect(){

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "contact";

	//Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	//Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}

	return $conn;

}

function checkSentUser($email){
	$conn = databaseConnect();

	$sql = "SELECT email FROM users ";

	$results = $conn->query($sql);

	$data_base_email = mysqli_fetch_assoc($results);

	if($data_base_email['email'] == $email)
		return false;
	else
		return true;
}

 function sendEmail($email,$message){

	 $to = $email;
	 $subject = "Information";
	 $txt = $message;
	 $headers = "From: info@msc.com";

	 if(mail($to,$subject,$txt,$headers)){
		 return true;
	 }else{
		 return false;
	 }
 }



?> 


