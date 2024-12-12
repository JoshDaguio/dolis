<?php
   //$conn = mysqli_connect('localhost','root','','dolis_db') or die('connection failed');
?>

<?php
   $conn = mysqli_connect('localhost', 'u749805223_vicky', 'Dolisbyvicky@12345678', 'u749805223_dolis');


   if (!$conn) {
      die('Connection failed: ' . mysqli_connect_error());
   } else {
      //echo 'Connection successful!';
   }
?>