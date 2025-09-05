
<?php

    include('dbcon.php');

    if(isset($_POST['signup'])){
        $fullname = mysqli_real_escape_string($dbcon, $_POST['fullname']); 
        $email = mysqli_real_escape_string($dbcon, $_POST['email']);
        $password = mysqli_real_escape_string($dbcon, $_POST['password']); 
        $cpassword = mysqli_real_escape_string($dbcon, $_POST['cpassword']);

        if($password==$cpassword){

            //Check Mail Address
            $check_mail = "SELECT ad_email from admin WHERE ad_email='$email'";
            $check_mail_ex = mysqli_query($dbcon, $check_mail);

            if ($check_mail_ex === false) {
                die("Query failed: " . mysqli_error($dbcon));
            } else {
                $result = mysqli_num_rows($check_mail_ex);
            }


            if($result<1){
                
                $admin_insert = "INSERT INTO admin (ad_name, ad_email, ad_pass) VALUES('$fullname', '$email', '$password')";
                $admin_insert_ex = mysqli_query($dbcon, $admin_insert);

                if($admin_insert_ex){
                    echo "<script>alert('Admin Account Created Successfully.');</script>";
                    header("Location: ../login.php");
                    exit(0);
                }else{
                    echo "<script>alert('Something went Wrong');</script>";
                    header("Location: ../registration.php");
                    exit(0);
                }
            }else{
                header("Location: ../create-post.php");
                exit(0);
            }

        }else{
            $_SESSION['message'] = "Confirm Password not matched";
            header("Location: ../registration.php");
            exit(0);
        }


    }else{
        header("Location: ../registration.php");
        exit(0);
    }

?>

