<?php

	if(isset($_POST['SEND_MESSAGE'])){
    	$name = $_POST['customer_name'];
    	$email = $_POST['customer_email'];
    	$message = $_POST['customer_message'];
    
    if(!empty($name) && !empty($email)){
        
        $conn = mysqli_connect("localhost","root","","mydb");
        
        if($conn -> connect_error){
            die("connection failed die");
        }
        $sql = "INSERT INTO feedback (customer_name,customer_email,customer_message) VALUES ('$name','$email','$message')";
        $query = mysqli_query($conn,$sql);
//        echo mysqli_num_rows($conn,$sql);
        
        if($query){
            echo "<script>alert (record inserted);</script>";
            header('location: index.php');
        }else{
            echo "<script>alert (record not inserted);</script>";
            header('location: index.php');
        }
    }
}


?>