<?php

include('connection.php');

$firstName=$_POST['fname'];
$lastName=$_POST['lname'];
$email=$_POST['Email'];
$password=$_POST['Pass'];
$passwordConf=$_POST['confPass'];
$bday=$_POST['birthday'];


if(isset($_POST['submit'])){
    if(empty($firstName) || empty($lastName) || empty($email) || empty($password) || empty($passwordConf) ||empty($bday))
    {

        header("location: ../Uside/register.php?1l3=n3f7l4");
        
    }else{

        $sqlS="SELECT * FROM `login` WHERE `Email`='$email'";
        $query=mysqli_query($con,$sqlS);
        if(mysqli_num_rows($query)==0){
    
            if($password== $passwordConf){      
                    $pass= password_hash($password,PASSWORD_DEFAULT);
                    $sqlI="INSERT INTO `login`(`Fname`, `Lname`, `Email`, `Role`,`BirthDay` ,`Pword`) VALUES ('$firstName','$lastName','$email','student','$bday','$pass')";

                    $query=mysqli_query($con,$sqlI);
            
                    if($query){
                        header("location: ../Uside/register.php?1l3=7o8");
                        
                    }else{
                        header("location: ../Uside/register.php?1l3=ro178l");
                        
                    }
            }else{
                header("location: ../Uside/register.php?1l3=p78swrdoeQ45h");
                
            }
        }else{
            header("location: ../Uside/register.php?1l3=l7d");
           
        }
        
        
    }
}




    mysqli_close($con);
?>