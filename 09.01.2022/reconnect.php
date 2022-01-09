<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $email = $_POST['email'];
        $password = $_POST['password'];
        }
        $conn = new mysqli('localhost','root','','flora');
        $query = mysqli_query($conn, "SELECT * FROM `registration` WHERE email='".$_POST["email"] . "' AND password= '" . $_POST["password"] ."'");
        if($conn->connect_error){
            die('Connection Failed : '.$conn->connect_error);
        }
        else if(mysqli_num_rows($query) ==1){
            header("Location: Acasa.php");
        } else {
            
            //$message = "Incorrect Email adress / Password";
            //header("Location: Login.php");
            //echo "<script type='text/javascript'>alert('$message');</script>";
            
            echo "<script>
            alert('Incorrect Email adress / Password');
            window.location.href='Login.php';
            </script>";
        }
    
?>
