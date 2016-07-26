<?php

/**
 * Created by PhpStorm.
 * User: sandile
 * Date: 2016/07/26
 * Time: 1:01 PM
 */
class Academy
{
    public $name;
    public $email;
    public $message;

    /**
     * Academy constructor.
     * @param $name
     * @param $email
     * @param $message
     */
    public function __construct($name, $email, $message)
    {
        $this->name = $name;
        $this->email = $email;
        $this->message = $message;
    }


    function sendEmail(){

        $to = $this->email;


        $subject = "Information";
        $txt = $this->message;
        $headers = "From: info@msc.com";

        if(mail($to,$subject,$txt,$headers)){
            return true;
        }else{
            return false;
        }
    }
    function checkSentUser(){
        $conn = $this->databaseConnect();

        $sql = "SELECT email FROM users ";

        $results = $conn->query($sql);

        $data_base_email = mysqli_fetch_assoc($results);

        if($data_base_email['email'] == $this->email)
            return false;
        else
            return true;
    }
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
    function addUser(){

        $conn = $this->databaseConnect();

        $name = $this->name;
        $email = $this->email;
        $message = $this->message;

        $sql = "INSERT INTO users (name, email, message)
		VALUES ('$name', '$email', '$message')";

        $checkSentUser = $this->checkSentUser($this->email);
        $send_email = $this->sendEmail($email,$message);

        if($checkSentUser){
            if ($conn->query($sql) === TRUE) {
                if($send_email){
                    return 'Message Sent';
                }else{
                    return 'message not sent';
                }
            } else {
                return "Error: " . $sql . "<br>" . $conn->error;
            }
        }else{
            return "You have contacted us before, Thank you!";
        }


        $conn->close();
    }



}