<?php session_start();
   if ($_POST['username'] == 'tisa' &&
      $_POST['password'] == 'pass') {
      $_SESSION['valid'] = true;
      $_SESSION['username'] = 'user';

      // header('location:welcome.php');
      date_default_timezone_set('Asia/Jakarta');
         $time = date("H");
         // echo $time;
         // $timezone = date("e");
         if ($time < "12") {
             echo "Selamat Pagi Admin";
         } else
         if ($time >= "12" && $time < "17") {
             echo "Selamat Siang Admin";
         } else
         if ($time >= "17" && $time < "19") {
             echo "Selamat Sore Admin";
         } else
         if ($time >= "19") {
             echo "Selamat Malam Admin";
         }
   }else {
     header('location:index.php');
   }
?>
