<?php
    include 'db_connect.php';   
    $json_input_data = json_decode(file_get_contents('php://input'), true);
    $id = $json_input_data['id'];
    $name = $json_input_data['name'];
    $username = $json_input_data['username']; 
    $email = $json_input_data['email']; 
    $tanggallahir = $json_input_data['tanggallahir'];
    $sql = mysqli_query($connect,"UPDATE users SET username='$username',email='$email',name='$name',tanggallahir='$tanggallahir' WHERE id='$id'");
    if ($sql) {
            echo '{"status":"berhasil"}';
        } else {
            echo "Error1 " . $sql . ' ' . $connect->connect_error;
        }
    $connect->close();
?>