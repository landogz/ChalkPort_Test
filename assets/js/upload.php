<?php 
date_default_timezone_set('UTC');

$art = array();
  $random = substr(md5(mt_rand()), 0, 10);

    $target_dir = "../../assets/images/";
    $uploading= basename($_FILES["profile_pic"]["name"]);

     $imageFileType = pathinfo($uploading,PATHINFO_EXTENSION);

      $names=$random.$_SESSION['empID'].".".$imageFileType;
      $target_file = $target_dir .$names ;
  
        // if everything is ok, try to upload file
        if (move_uploaded_file($_FILES["profile_pic"]["tmp_name"], $target_file)) {
           $art[]= "Files has been Save!";
        } 
        else {
          $art[]= "Sorry, there was an error uploading your files.";
        }

print_r( json_encode($art));
?>
