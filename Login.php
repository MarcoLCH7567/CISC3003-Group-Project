<?php
if ( ( $_POST['PhoneNumber'] != null ) && ( $_POST['Password'] != null ) ) {
    $PhoneNumber = $_POST['PhoneNumber'];
    $Password = $_POST['Password'];
    $conn = mysqli_connect('localhost','root','');
    mysqli_select_db($conn,'1_db');
    
    $sql = "select * from user where PhoneNumber = '$PhoneNumber' ";
    $res = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($res);
    if ($row['Password'] == ($Password)) {               //($row['Password'] == md5($Password))
        //setcookie('PhoneNumber',$PhoneNumber,time()+10);
        //setcookie('Password',$Password,time()+10);
        echo("hello");
        header('Location:user01.php'."?PhoneNumber=$PhoneNumber?");
    }
    else{
        header("Location:logo.html");
        //back to login page
    } 
}
else{
    header("Location:logo.html");
    //back to login page
}

?>