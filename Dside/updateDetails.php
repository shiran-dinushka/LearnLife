<?php
include('connection.php');
session_start();
$name=$_SESSION['Name'];
$Fname=$_POST['fname'];
$Lname=$_POST['lname'];
$Email=$_POST['email'];
$Cpass=$_POST['cpass'];
$Npass=$_POST['npass'];
$RNpass=$_POST['rnpass'];
$bday=$_POST['birthday'];



if(!empty($Fname)){
    $sqlS="SELECT `Fname`, `Lname`, `Email`, `Pword` FROM `login` WHERE `Fname`='$name'";
    $query=mysqli_query($con,$sqlS);
    if(mysqli_num_rows($query)>0){
        $arr=mysqli_fetch_assoc($query);
        if(!empty($Cpass)){
            if(password_verify($Cpass,$arr['Pword'])){
                if((!empty($Npass)) && $Npass == $RNpass){
                    $pass=password_hash($Npass,PASSWORD_DEFAULT);
                    $sqlU="UPDATE `login` SET `Fname`='$Fname',`Lname`='$Lname',`Email`='$Email',`Pword`='$pass',`BirthDay`='$bday' WHERE `Fname`='$name' ";
                    $query=mysqli_query($con,$sqlU);
                    if($query){
                        header("location: ../Uside/setting.php?1l3=7o8");
                    
                    }else{
                        header("location: ../Uside/setting.php?1l3=i2n");
                    }

                }else{
                    header("location: ../Uside/setting.php?1l3=nj34");
                }
            }else{
                header("location: ../Uside/setting.php?1l3=h23j");
            }
        }else{
            $sqlU="UPDATE `login` SET `Fname`='$Fname',`Lname`='$Lname',`Email`='$Email',`BirthDay`='$bday' WHERE `Fname`='$name' ";
            $query=mysqli_query($con,$sqlU);
            if($query){
                header("location: ../Uside/setting.php?1l3=7o8");
            }else{
                header("location: ../Uside/setting.php?1l3=i2n");
            }

        }
    }else{
        header("location: ../Uside/setting.php?1l3=ert232");
    }
   
}else{
    header("location: ../Uside/setting.php?1l3=7ght5");
}
?>