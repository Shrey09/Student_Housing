<?php
        $connect=mysqli_connect('localhost','root','','findstay');
        if(mysqli_connect_errno($connect))
        {
                echo 'Failed to connect';
        }
        // create a variable
        $name=$_POST['name'];
        $Email=$_POST['email'];
        $contact=$_POST['contact'];
        $Address=$_POST['address'];
        //Execute the query
        mysqli_query($connect,"INSERT INTO user_details(Name,Email,Address,Contact)
						VALUES('$name','$Email','$Address','$contact')");
        header('Location: login.php');
        exit;
?>