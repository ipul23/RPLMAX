<?php
    include 'db_connect.php';   
    $json_input_data = json_decode(file_get_contents('php://input'), true);
    $id = $json_input_data['id'];
    $query = mysqli_query($connect,"SELECT * FROM listcucian WHERE id='$id'");
    if (mysqli_num_rows($query))  {
        $row = mysqli_fetch_assoc($query);
        $NamaToko = $row["NamaToko"];  
        $JumlahCucian = $row["JumlahCucian"];
        $HargaPerKilo = $row["HargaPerKilo"];
        $sql = "INSERT INTO inprogress (NamaToko,TanggalTransaksi,KodeTransaksi,JumlahCucian,HargaPerKilo) VALUES ('$NamaToko','NOW()','','$JumlahCucian','$HargaPerKilo')";
        if ($connect->query($sql) === true) {
            echo '{"status":"berhasil"}';
        } else {
            echo "Error1 " . $sql . ' ' . $connect->connect_error;
        }
    } else {
        echo "Error2 " . $sql . ' ' . $connect->connect_error;
    }    
    $connect->close();
?>