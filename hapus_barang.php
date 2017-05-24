<?php
    include 'db_connect.php';   
    $json_input_data = json_decode(file_get_contents('php://input'), true);
    $id = $json_input_data['KodeTransaksi'];
    $query = mysqli_query($connect,"SELECT * FROM inprogress WHERE KodeTransaksi='$id'");
    if (mysqli_num_rows($query))  {
        $row = mysqli_fetch_assoc($query);
        $NamaToko = $row["NamaToko"];  
        $JumlahCucian = $row["JumlahCucian"];
        $HargaPerKilo = $row["HargaPerKilo"];
        $sql = mysqli_query($connect,"INSERT INTO completed (NamaToko,TanggalTransaksi,KodeTransaksi,JumlahCucian,HargaPerKilo) VALUES ('$NamaToko','NOW()','$id','$JumlahCucian','$HargaPerKilo')");
        if ($sql) {
            $query = mysqli_query($connect,"DELETE FROM inprogress WHERE KodeTransaksi='$id'");
            if ($query){
                 echo '{"status":"berhasil"}';
            }
            else {
                echo "Error " . $sql . ' ' . $connect->connect_error;
            }
        } else {
            echo "Error1 " . $sql . ' ' . $connect->connect_error;
        }
    } else {
        echo "Error2 " . $sql . ' ' . $connect->connect_error;
    }    
    $connect->close();
?>