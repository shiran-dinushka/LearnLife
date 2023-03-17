<?php
session_start();
include('connection.php');

if(!empty($_POST['username']) && !empty($_POST['password'])){
    $username =$_POST['username'];
    $password =$_POST['password'];


    $sqlS="SELECT  `L_Id`,`Fname`,`Role`,`Pword` FROM `login` WHERE `Email`='$username'  ";

    $query= mysqli_query($con,$sqlS); 

    if(mysqli_num_rows($query)>0){

   
        //$pass= password_hash($password,PASSWORD_DEFAULT);
        $array=mysqli_fetch_assoc($query);
        $_SESSION['id']=$array['L_Id'];
        $_SESSION['Role']=$array['Role'];
        $_SESSION['Name']=$array['Fname'];
            if(password_verify($password,$array['Pword'])){
                if($array['Role']=='student'){
                    header('Location: ../Uside/course.php');
                }else if($array['Role']=='admin'){
                    header('Location: ../Uside/course.php');
                }
                }else{

                    header("Location: ../Uside/login.php?L23=pa");
                    exit();
                }

    }else{

        header("Location: ../Uside/login.php?L23=un");
        exit();
    }
}else{
    echo "session is not set";
    header("Location: ../Uside/login.php?L23=uap");
    exit();
}
?>