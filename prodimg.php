<?php 
include_once("config.inc.php");
/* Getting file name */
if(!empty($_FILES['file']['name'])){
$filename = $_FILES['file']['name'];
$random=rand(10,10000);
/* Location */
$location = "product/".$random.$filename;
$uploadOk = 1;
$imageFileType = pathinfo($location,PATHINFO_EXTENSION);
/* Valid Extensions */
$valid_extensions = array("jpg","jpeg","png","PNG","JPG","JPEG");
/* Check file extension */
if( !in_array(strtolower($imageFileType),$valid_extensions) ) {
   $uploadOk = 0;
}

if($uploadOk == 0){
   echo 0;
}else{
   /* Upload file */
   if(move_uploaded_file($_FILES['file']['tmp_name'],$location)){
     
	  echo $imageid=$random.$filename;
	  
   }else{
      echo 0;
   }
}
}
?>