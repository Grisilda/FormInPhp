<?php
  $ussername=filter_input(INPUT_POST, 'username');
  $password=filter_input(INPUT_POST, 'password');

  $connect=mysqli_connect('localhost','root','','userdb');
  $query="Select role from user where ussername = "." '$ussername'"." and password = "." '$password'";
  $data=mysqli_query($connect,$query);
  $row=mysqli_fetch_array($data);
  if($row[0]==0){
  	header('Location: worker.html');
  }
  else{
  	header('Location: admin.html');
  }
?>