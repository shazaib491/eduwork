<?php                                
//connections
include('./connection.php');

print_r($_POST);exit;

//register

if (isset($_POST['register'])) {
    $fname=$_POST['inputFirstName'];
    $lname=$_POST['inputLastName'];
    $email=$_POST['inputEmailAddress'];
    $password=$_POST['inputPassword'];
    $cpassword=$_POST['inputPassword'];
    if ($password!=$cpassword) {
        session_start();
        $_SESSION['error']="Password not Matching";
        header("Location:../register.php");
    }else{
        $sql="INSERT INTO admin(fname,lname,email,pass) VALUES('$fname','$lname','$email','$password')";
        $query=$con->query($sql);
        session_start();
        $_SESSION['success']="your Account Register Successfully";
        header("Location:../login.php");
    }
}
?>