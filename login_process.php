<?php
session_start();
?>
<html>
    <body>

<?php
                $connect=mysqli_connect('localhost','root','','findstay');
                if(mysqli_connect_errno($connect))
                {
                        echo 'Failed to connect';
                }
                $name=$_POST['name'];
                $email=$_POST['email'];

                $sql = "SELECT Email,Name FROM user_details where Email='$email' and Name='$name'";
                $result = mysqli_query($connect, $sql);

                if (mysqli_num_rows($result) > 0) 
                {
                    // output data of each row
                    echo "login successfully"; 
                    // Start the session
                    $_SESSION["name"] = $name;
                    header('Location: search.php');
                    exit;  
                } 
                else 
                {
                    echo "invalid username or email";
                    
                }
            ?>
        </body>
    </html>