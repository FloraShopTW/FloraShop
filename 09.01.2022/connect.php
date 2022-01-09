<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    }
    $conn = new mysqli('localhost','root','','flora');
    $query = mysqli_query($conn, "SELECT * FROM `registration` WHERE email='".$email."'");
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }
    else if(mysqli_num_rows($query) > 0){
        echo "<script>
            alert('User already exists');
            window.location.href='Login.php';
            </script>";
    }
    
    else{
        $stmt = $conn->prepare("insert into registration(username, email, password) values(?,?,?)");
        $stmt->bind_param("sss",$username, $email, $password);
        $stmt->execute();
        $redirect_location = "Acasa.php";
        header("Location:".$redirect_location); 
        $stmt->close();
        $conn->close();
    }
?>