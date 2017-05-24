<?php
    include 'db_connect.php';
      $postdata = file_get_contents("php://input");
      $username="";
      $password="";
      $name="";
      $tanggallahir="";
      $email="";
      if (isset($postdata)) {
          $request = json_decode($postdata);
          $username = $request->username;
          $password = $request->password;
          $name= $request->name;
          $email=$request->email;
          $tanggallahir=$request->tanggallahir;
      }
      $encrypt_password = md5($password);
      $sql = mysqli_query($connect,"INSERT INTO users ( username, password, email, name, tanggallahir)
      VALUES ('$username','$encrypt_password', '$email','$name','$tanggallahir')");
  if($sql){
      $data =array(
          'message' => "Data have been recorded",
          'data' => $request,
          'status' => "200"
      );}
 else {
    echo "Error" .$sql.' '.$connect->connect_error;
    $data =array(
        'message' => "ERROR",
        'status' => "404"
    );
  }
  echo json_encode($data);
?>