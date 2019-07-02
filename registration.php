<?php
if(isset($_POST['Done'])){
    $name = $_POST['customer_name'];
    $email = $_POST['customer_email'];
    $phone = $_POST['phone_number'];
    $date=$_POST['book_date'];
    $time=$_POST['book_time'];
    $services=$_POST['services'];
    $stylish=$_POST['stylish'];
    
    if(!empty($name) && !empty($email)){
        
        $conn = mysqli_connect("localhost","root","","mydb");
        
         if($conn -> connect_error){
            die("connection failed");
        }
        
        $sql = "INSERT INTO appointment(customer_name,customer_email,phone_number,book_date,book_time,services,stylish) VALUES ('$name','$email','$phone','$date','$time','$services','$stylish')";
        $query = mysqli_query($conn,$sql);
//        echo mysqli_num_rows($conn,$sql);
        
        if($query){
            echo "<script>alert (record inserted);</script>";
            header('location: index.php');
        }else{
            echo "<script>alert (record not inserted);</script>";
            header('location: registration.php');
        }
    }
}
?>