<?php
require_once("../../config.inc.php");
    
		$image_name=$db->getSingleResult('select image from hotel_room_image where id='.$_POST["imageid"]);
		$check=$db->query("delete from hotel_room_image where id='".$_POST["imageid"]."'");
		
		if($check)
		{
			// remove from folder too
			@unlink("../../upload/".$image_name);
			@unlink("../../upload/thumb/".$image_name);
			@unlink("../../upload/medium/".$image_name);
			echo "ok";
		}
		else
		{
			echo "Oops, there is some problem";
		}
		

?>