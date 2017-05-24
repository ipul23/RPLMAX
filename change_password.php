<?php
    include 'db_connect.php';   
    $json_input_data = json_decode(file_get_contents('php://input'), true);
    $id= $json_input_data['id'];
    $passw = $json_input_data['passwordLama'];
    $encryptPasswordLama=hash('sha256',$passw);
    $passw = $json_input_data['passwordBaru'];
    $encryptPasswordBaru=hash('sha256',$passw);
    $passw = $json_input_data['passwordBaru_Konfirmasi'];
    $encryptPasswordBaru_Konfirmasi=hash('sha256',$passw);
    $sql=mysqli_query($connect,"SELECT * FROM users WHERE id='$id'");
    if ($sql) {
            $row=mysqli_fetch_assoc($sql);
            if (!strcmp($encryptPasswordBaru,$encryptPasswordBaru_Konfirmasi) && !strcmp($row['password'],$encryptPasswordLama)){
                if ($encryptPasswordBaru == $encryptPasswordLama){
                    echo "Password Sama";
                }
                else{
                    $query = mysqli_query($connect,"UPDATE users SET password='$encryptPasswordBaru' WHERE id='$id'");
                    if ($query){
                        echo '{"status":"berhasil"}';
                    }
                    else{
                        echo "Error1 " . $sql . ' ' . $connect->connect_error;
                    }
                }
            }
        } else {
            echo "Error1 " . $sql . ' ' . $connect->connect_error;
        }
    $connect->close();
?>