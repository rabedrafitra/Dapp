<?php
	if (isset($_POST["signup"])) {
		$name = $_POST["name"];
		$username = $_POST["username"];                   
		$password = $_POST["password"];
		$email = $_POST["email"];
		$phone = $_POST["phone"];
		$address = $_POST["address"];
		if ($name == "" | $username =="" | $password =="" | $email == "" | $phone == "" | $address == "") {
			$error_m= "<b>Error !</b> <span>Un(des) champ(s) obligatoir(s) n'est(ne sont) pas rempli(s)</span>";
		}
		$photo = "upload/avatar.jpg";
		$utype = "teacher";
	
        
        
		$sql2_u= mysqli_query($link,"select * from user where username= '$username'");
        $sql2_e= mysqli_query($link,"select * from user where email= '$email'");
        $sql2_p= mysqli_query($link,"select * from user where phone= '$phone'");
		
        if(mysqli_num_rows($sql2_u) > 0){
			$error_uname = "Username already exist";
		}elseif(mysqli_num_rows($sql2_e) > 0){
            $error_email = "Email already exist";
        }elseif(mysqli_num_rows($sql2_p) > 0){
            $error_phone = "Phone already registered";
        }elseif(strlen($username) < 6){
            $error_ua ="Username too short";
        }elseif(strlen($username) > 16 ){
            $error_ua ="<b>Username too big !</b> <span>Your username must be 6-16 character</span>";
        }
		 elseif(strlen($password) < 6 ){
            $error_pw ="<b>Password too short !</b> <span>Your password must be 6-16 character</span>";
        }
		elseif(strlen($password) > 16 ){
            $error_pw ="<b>Password too big !</b> <span>Your password must be 6-16 character</span>";
        }elseif (filter_var($email, FILTER_VALIDATE_EMAIL)== false) {
			$e_msg = "<strong>Error ! </strong> <span>Email Address Not Valid</span>";
				
        }else{
            $vkey = md5(time().$username);
            $password= sha1($password);
            $date= date('d m Y h:i:s');
            $insert = mysqli_query($link, "insert into user values('','$name','$username','$password','$email','$phone','$address','$utype','$photo','pending','$vkey', NOW())");
            if($insert){

                
                    echo "<script>alert(\"UTILISATEUR AJOUTE\")</script>";
                    
                // $to = "$email";
                // $subject = "Email Verification";
                // $message = "<a href='http://localhost/lms/Source/librarian/user/teacher/verify.php?vkey=$vkey'>Verify Email</a>";
                // $headers = "From: parttimemail18@gmail.com \r\n";
                // $headers.= "MIME-Version: 1.0". "\r\n";
                // $headers.= "Content-type: text/html; charset-UTF-8". "\r\n";
                // mail($to, $subject, $message,$headers);
                // header('location: thankyou.php');
            }else
                {
                    echo "<script>alert(\"UTILISATEUR NON AJOUTE\")</script>";
                    
                echo $mysqli->error;}
                ?>
                
                <?php
            
		}
	}
?>