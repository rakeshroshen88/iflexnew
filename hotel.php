 
<?php


header('Access-Control-Allow-Origin: ' . $_SERVER['HTTP_ORIGIN']);
header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
header('Access-Control-Max-Age: 1000');
header('Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With');
header("Content-Type: application/json; charset=UTF-8");


require 'config.php';
require 'Slim/Slim.php';

\Slim\Slim::registerAutoloader();
$app = new \Slim\Slim();
$app->post('/all_hotels','all_hotels');
$app->post('/popular_hotels','popular_hotels');
$app->post('/hoteldetails','hoteldetails');
$app->post('/gettingAmenties','gettingAmenties');
$app->post('/gettingfacility','gettingfacility');
$app->post('/hotelOrder','hotelOrder');
$app->post('/Hotel_Order_email','Hotel_Order_email');    
$app->post('/MyAllOders','MyAllOders');    
$app->post('/orderDetails','orderDetails');    
$app->post('/search_availlibility','search_availlibility'); 
$app->post('/most_popular_city','most_popular_city'); 

 
$app->run(); 



/* ### details ### */ 
function all_hotels() {   
    $request = \Slim\Slim::getInstance()->request();
    $data = json_decode($request->getBody());
    //print_r($data);s
    $token=$data->token;
    $user_id=$data->user_id;
    $lastCreated=$data->lastCreated;
    $mycity=$data->mycity;
    $systemToken=apiToken($user_id);
 
    
   
    try {
         
        if($systemToken == $token){
            $allHotels = '';
            $db = getDB();
            
            if($mycity){
            		//echo $mycity;
                    $sql5 = "SELECT state_id FROM cities WHERE name='".$mycity."'"; 
                    $stmt5 = $db->prepare($sql5);
                    $stmt5->execute();
                    $result1 = $stmt5->fetch(PDO::FETCH_OBJ);                    
                    


                     $sql6 = "SELECT country_id FROM state WHERE id='".$result1->state_id."'"; 
                    $stmt6 = $db->prepare($sql6);
                    $stmt6->execute();
                    $result2 = $stmt6->fetch(PDO::FETCH_OBJ); 

                    $sql = "SELECT * FROM hotel WHERE  Status='1' AND country='".$result2->country_id."' ORDER BY id DESC";
		            $stmt = $db->prepare($sql);
		             
		                 
		            $stmt->execute();
		            $allHotels = $stmt->fetchAll(PDO::FETCH_OBJ);



                }




            
            
            $db = null;
             
            if($allHotels){
                echo '{"allHotels": '. json_encode($allHotels) .'}';
            }
             
            else{
                echo '{"allHotels": ""}';
            }
            
        } else{
            echo '{"error":{"text":"No access"}}';
        }
       
    } catch(PDOException $e) {
        echo '{"error":{"text":'. $e->getMessage() .'}}';
    }


}



/* ### details ### */ 
function popular_hotels() {   
    $request = \Slim\Slim::getInstance()->request();
    $data = json_decode($request->getBody());
    //print_r($data);s
    $token=$data->token;
    $user_id=$data->user_id; 
    $mycity=$data->mycity;
    $systemToken=apiToken($user_id);
  
    
   
    try {
         
        if($systemToken == $token){
            $allHotels = '';
            $db = getDB();
            
            if($mycity){
            		//echo $mycity;
                    $sql5 = "SELECT state_id FROM cities WHERE name='".$mycity."'"; 
                    $stmt5 = $db->prepare($sql5);
                    $stmt5->execute();
                    $result1 = $stmt5->fetch(PDO::FETCH_OBJ);                    



                     $sql6 = "SELECT country_id FROM state WHERE id='".$result1->state_id."'"; 
                    $stmt6 = $db->prepare($sql6);
                    $stmt6->execute();
                    $result2 = $stmt6->fetch(PDO::FETCH_OBJ); 


                    $sql = "SELECT * FROM hotel WHERE starrating='5' AND (Status='1' AND country='".$result2->country_id."') ORDER BY id DESC LIMIT 10";
		            $stmt = $db->prepare($sql);
		             
		                 
		            $stmt->execute();
		            $allHotels = $stmt->fetchAll(PDO::FETCH_OBJ);  


                }


            
           
            $db = null;
             
            if($allHotels){
                echo '{"allHotels": '. json_encode($allHotels) .'}';
            }
             
            else{
                echo '{"allHotels": ""}';
            }
            
        } else{
            echo '{"error":{"text":"No access"}}';
        }
       
    } catch(PDOException $e) {
        echo '{"error":{"text":'. $e->getMessage() .'}}';
    }
 
}


/* ### details ### */ 
function hoteldetails() {   
    $request = \Slim\Slim::getInstance()->request();
    $data = json_decode($request->getBody());
    //print_r($data);s
    $token=$data->token;
    $user_id=$data->user_id;
    $hotel_id=$data->hotel_id;
    $systemToken=apiToken($user_id);
  
    
   
    try {
         
        if($systemToken == $token){
            $hotelDetails = '';
            $db = getDB();
             

            $sql = "SELECT * FROM hotel WHERE id='".$hotel_id."' ORDER BY id DESC LIMIT 1";
            $stmt = $db->prepare($sql);
             
                 
            $stmt->execute();
            $hotelDetails = $stmt->fetch(PDO::FETCH_OBJ);
           
            $db = null;
             
            if($hotelDetails){
                echo '{"hotelDetails": '. json_encode($hotelDetails) .'}';
            }
             
            else{
                echo '{"hotelDetails": ""}';
            }
            
        } else{
            echo '{"error":{"text":"No access"}}';
        }
       
    } catch(PDOException $e) {
        echo '{"error":{"text":'. $e->getMessage() .'}}';
    }


}



/* ### gettingAmenties ### */ 
function gettingAmenties() {   
    $request = \Slim\Slim::getInstance()->request();
    $data = json_decode($request->getBody());
    //print_r($data);s
    $token=$data->token;
    $user_id=$data->user_id;
    $Amenities_ID=$data->Amenities_ID;
    $systemToken=apiToken($user_id);
  
    
   
    try {
         
        if($systemToken == $token){
            $Amenities_details = '';
            $db = getDB();
             

            $sql = "SELECT * FROM amenities WHERE id='".$Amenities_ID."' ORDER BY id DESC LIMIT 1";
            $stmt = $db->prepare($sql);
             
                 
            $stmt->execute();
            $Amenities_details = $stmt->fetch(PDO::FETCH_OBJ);
           
            $db = null;
             
            if($Amenities_details){
                echo '{"Amenities_details": '. json_encode($Amenities_details) .'}';
            }
             
            else{
                echo '{"Amenities_details": ""}';
            }
            
        } else{
            echo '{"error":{"text":"No access"}}';
        }
       
    } catch(PDOException $e) {
        echo '{"error":{"text":'. $e->getMessage() .'}}';
    }


}

/* ### gettingAmenties ### */ 
function gettingfacility() {   
    $request = \Slim\Slim::getInstance()->request();
    $data = json_decode($request->getBody());
    //print_r($data);s
    $token=$data->token;
    $user_id=$data->user_id;
    $facility_ID=$data->facility_ID;
    $systemToken=apiToken($user_id);
  
    
   
    try {
         
        if($systemToken == $token){
            $gettingfacility = '';
            $db = getDB();
             

            $sql = "SELECT * FROM facility WHERE id='".$facility_ID."' ORDER BY id DESC LIMIT 1";
            $stmt = $db->prepare($sql);
             
                 
            $stmt->execute();
            $gettingfacility = $stmt->fetch(PDO::FETCH_OBJ);
           
            $db = null;
             
            if($gettingfacility){
                echo '{"gettingfacility": '. json_encode($gettingfacility) .'}';
            }
             
            else{
                echo '{"gettingfacility": ""}';
            }
            
        } else{
            echo '{"error":{"text":"No access"}}';
        }
       
    } catch(PDOException $e) {
        echo '{"error":{"text":'. $e->getMessage() .'}}';
    }


}


/* ### userdetails ### */
function hotelOrder() {
    $request = \Slim\Slim::getInstance()->request();
    $data = json_decode($request->getBody());
	//print_r($data);
    $token=$data->token;
	$user_id=$data->user_id; 
	$billid=$data->billid; 
	$hotel_name=$data->hotel_name;
	$first_name=$data->full_name;
	$hotel_ID=$data->hotel_id;
	$hotel_address=$data->hotel_address;
	$from_date=$data->from_date;
	$to_date=$data->to_date;
	$price=$data->price;
	$guest=$data->guest;
	$total_days=$data->total_days;
	$phoneno=$data->mobile;
	$address=$data->address;
	$emailid=$data->emailid;
	$orderid=$data->orderid;
	$totalamount=$data->totalamount;
	$gross_amount=$data->gross_amount;
	$tax_amt=$data->TaxAmt;
	$Discount=$data->Discount;
	$payment_status=$data->payment_status;
	$transaction_id=$data->transaction_id;
	$trxref=$data->trxref;
	$dob=$data->dob;
	$book_date=date("Y-m-d");    
	$systemToken=apiToken($user_id);

	
   
    try {
         
        if($systemToken == $token){
            $hotelOrder = '';
            $db = getDB();
            	$sql="INSERT INTO hotel_order(user_id,billid,hotel_name, first_name, hotel_ID, hotel_address, from_date, to_date, price, guest, total_days, phoneno, address, emailid, orderid, gross_amount, totalamount, tax_amt, Discount, payment_status, transaction_id, book_date , trxref , dob)VALUES('".$user_id."','".$billid."','".$hotel_name."', '".$first_name."', '".$hotel_ID."', '".$hotel_address."', '".$from_date."', '".$to_date."','".$price."', '".$guest."', '".$total_days."', '".$phoneno."', '".$address."', '".$emailid."', '".$orderid."', '".$gross_amount."', '".$totalamount."', '".$tax_amt."', '".$Discount."', '".$payment_status."', '".$transaction_id."', '".$book_date."', '".$trxref."', '".$dob."')";
            	$stmt = $db->prepare($sql); 
              
                $stmt->execute();    
                
                $sql2 = "SELECT  * from  hotel_order WHERE user_id='".$user_id."' ORDER BY id DESC LIMIT 1";
		        $stmt1 = $db->prepare($sql2);
		        $stmt1->execute();

           		$hotelOrder = $stmt1->fetch(PDO::FETCH_OBJ); 
           
            $db = null;
			 
            if($hotelOrder){
				echo '{"hotelOrder": '. json_encode($hotelOrder) .'}';

				// sending invoice email 
				Hotel_Order_email( 
					$user_id,
					$billid,
					$hotel_name,
					$first_name,
					$hotel_ID,
					$hotel_address,
					$from_date,
					$to_date,
					$price,
					$guest,
					$total_days,
					$phoneno,
					$address,
					$emailid,
					$orderid,
					$gross_amount,
					$totalamount,
					$tax_amt,
					$Discount,
					$payment_status,
					$transaction_id,
					$trxref 
				);
			}
			 
			else{
				echo '{"hotelOrder": ""}';
			}
            
        } else{
            echo '{"error":{"text":"No access"}}';
        }
       
    } catch(PDOException $e) {
        echo '{"error":{"text":'. $e->getMessage() .'}}';
    }


}





  
/* ### details ### */ 
function Hotel_Order_email(
$user_id,
					$billid,
					$hotel_name,
					$first_name,
					$hotel_ID,
					$hotel_address,
					$from_date,
					$to_date,
					$price,
					$guest,
					$total_days,
					$phoneno,
					$address,
					$emailid,
					$orderid,
					$gross_amount,
					$totalamount,
					$tax_amt,
					$Discount,
					$payment_status,
					$transaction_id,
					$trxref ) {   
    $request = \Slim\Slim::getInstance()->request();
    $data = json_decode($request->getBody());
    //print_r($data);s
    $token=$data->token;
    $user_id=$data->user_id;
    $lastCreated=$data->lastCreated;
    $systemToken=apiToken($user_id);  
    
   
    try {
            $evtstr=''; 
    
    // Compose a simple HTML email message 
$message = '<html><body>';
$message .= '<div style="margin-right:auto;margin-left:auto;text-align:center;;font-family:Open Sans, sans-serif;background-color:#e2e2e2;display:block; padding: 20px" ><table align="center" border="0" cellpadding="0" cellspacing="0" style="padding-top:0;padding-bottom:0;padding-right:30px;padding-left:30px;background-color:#f8f9fa;-webkit-box-shadow:0px 0px 14px -4px rgba(0, 0, 0, 0.2705882353);box-shadow:0px 0px 14px -4px rgba(0, 0, 0, 0.2705882353);width:650px;" ><tbody><tr><td><table align="left" border="0" cellpadding="0" cellspacing="0" width="100%" style="text-align:left;margin-top:30px;" ><tr><td style="text-align:center;" > <img src="http://themes.pixelstrap.com/bigdeal/assets/images/email-temp/delivery-2.png" alt="" style="margin-bottom:30px;" ></td></tr><tr><td><p style="font-size:14px;margin-top:15px;margin-bottom:15px;margin-right:0;margin-left:0;" ><b>Hi ';
$message .= $first_name;
$message .= ',</b></p><p style="font-size:14px;margin-top:15px;margin-bottom:15px;margin-right:0;margin-left:0;" >Order Is Successfully Processsed ,</p><p style="font-size:14px;margin-top:15px;margin-bottom:15px;margin-right:0;margin-left:0;" >Transaction ID : ';
$message .= $transaction_id;
$message .= ',</p></td></tr></table><table cellpadding="0" cellspacing="0" border="0" align="left" style="width:100%;margin-top:10px;margin-bottom:10px;" ><tbody><tr><td style="background-color:#fafafa;border-width:1px;border-style:solid;border-color:#ddd;padding-top:15px;padding-bottom:15px;padding-right:15px;padding-left:15px;letter-spacing:0.3px;width:50%;     vertical-align: top;" ><h5 style="font-size:16px;font-weight:600;color:#000;line-height:16px;padding-bottom:13px;border-bottom-width:1px;border-bottom-style:solid;border-bottom-color:#e6e8eb;letter-spacing:-0.65px;margin-top:0;margin-bottom:13px;text-align:left; vertical-align: top;" >Hotel Address</h5><p style="text-align:left;font-weight:normal;font-size:14px;color:#000000;line-height:21px;margin-top:0;margin-bottom:15px;margin-right:0;margin-left:0;" >';
$message .= '<h3>';
$message .= $hotel_name;
$message .= '</h3>';
$message .= $hotel_address;
$message .= '</p></td><td></td><td style="background-color:#fafafa;border-width:1px;border-style:solid;border-color:#ddd;padding-top:15px;padding-bottom:15px;padding-right:15px;padding-left:15px;letter-spacing:0.3px;width:50%;" ><h5 style="font-size:16px;font-weight:600;color:#000;line-height:16px;padding-bottom:13px;border-bottom-width:1px;border-bottom-style:solid;border-bottom-color:#e6e8eb;letter-spacing:-0.65px;margin-top:0;margin-bottom:13px;text-align:left; vertical-align: top;" >Your Billing Address:</h5><p style="text-align:left;font-weight:normal;font-size:14px;color:#000000;line-height:21px;margin-top:0;margin-bottom:15px;margin-right:0;margin-left:0;" >'; 
$message .= '<p class="text-align:left;">Full Name: ';
$message .= $first_name;
$message .= '<br>';
$message .= 'Mobile: ';
$message .= $phoneno;
$message .= '<br>';
$message .= ' Email: '; 
$message .=  $emailid ;
$message .= '<br>';
$message .= $address;
$message .= '</p></td></tr></tbody></table><table class="order-detail" border="0" cellpadding="0" cellspacing="0" align="left" style="width:100%;margin-bottom:50px;margin-top:30px;border-width:1px;border-style:solid;border-color:#ddd;border-collapse:collapse;" ><tr align="left"><th style="padding-left:15px;font-size:16px;padding-top:15px;padding-bottom:15px;padding-right:15px;text-align:left;background-color:#fafafa;background-image:none;background-repeat:repeat;background-position:top left;background-attachment:scroll;" >DESCRIPTION</th><th style="font-size:16px;padding-top:15px;padding-bottom:15px;padding-right:15px;padding-left:15px;text-align:center;background-color:#fafafa;background-image:none;background-repeat:repeat;background-position:top left;background-attachment:scroll;" >QUANTITY</th><th style="font-size:16px;padding-top:15px;padding-bottom:15px;padding-right:15px;padding-left:15px;text-align:right;background-color:#fafafa;background-image:none;background-repeat:repeat;background-position:top left;background-attachment:scroll;" >PRICE</th></tr>
<tr><td valign="top" style="padding-left:15px;text-align:left" ><h5 style="margin-top:15px;margin-bottom:0px; color:#444;text-align:left;font-weight:400; font-size: 14px;" ><b>'; $message .= 'Hotel Name: '; $message .= $hotel_name;
$message .= '</b> (';
$message .= $hotel_ID;	
$message .= ' )';
$message .= '<p>';
$message .= 'Booking From Date: ';
$message .= $from_date;
$message .= '</br>'; 
$message .= '<br> To Date: ';
$message .= $to_date;
$message .= '</p>';
$message .= '</td><td valign="top" style="padding-left:15px; padding-right:15px;" ><h5 style="font-size:14px;color:#444;margin-top:15px;margin-bottom:0px;text-align:left;font-weight:400;" ># of Days : <span> ';
$message .= $total_days;
$message .= ' </span></h5><h5 style="font-size:14px;color:#444;margin-top:10px;text-align:left;font-weight:400;" ># of Guest : <span>';$message .= $guest; $message .= '</span></h5></td><td valign="top" style="padding-left:15px;" ><h5 style="font-size:14px;color:#444;margin-top:15px;text-align:right;font-weight:400;" ><b> ₦ ';$message .= $price;
$message .= '</b></h5></td></tr><tr class="pad-left-right-space " style="border-top: 1px solid #ddd;" ><td class="m-t-5" colspan="2" align="left" style="padding-top:5px;padding-bottom:5px;padding-right:15px;padding-left:15px;" ><p style="font-size:14px;margin-top:0;margin-bottom:0;margin-right:0;margin-left:0;" >Subtotal :</p></td><td class="m-t-5"   align="right" style="padding-top:5px;padding-bottom:5px;padding-right:15px;padding-left:15px;" > <b style style="font-size:15px;font-family:Roboto, sans-serif;" >₦ '; $message .= $gross_amount; 
$message .= '</b></td><tr class="pad-left-right-space" style="border-color:unset !important;" ><td colspan="2" align="left" style="padding-top:5px;padding-bottom:5px;padding-right:15px;padding-left:15px;" ><p style="font-size:14px;margin-top:0;margin-bottom:0;margin-right:0;margin-left:0;" >TAX :</p></td><td colspan="1" align="right" style="padding-top:5px;padding-bottom:5px;padding-right:15px;padding-left:15px;" > <b style="font-size:15px;font-family:Roboto, sans-serif;" > ₦ ';
$message .= $tax_amt; 
$message .= '</b></td></tr><tr class="pad-left-right-space" style="border-color:unset !important;" ><td colspan="2" align="left" style="padding-top:5px;padding-bottom:5px;padding-right:15px;padding-left:15px;" ><p style="font-size:14px;margin-top:0;margin-bottom:0;margin-right:0;margin-left:0;" >Discount :</p></td><td colspan="1" align="right" style="padding-top:5px;padding-bottom:5px;padding-right:15px;padding-left:15px;" > <b style="font-size:15px;font-family:Roboto, sans-serif;" >₦ ';
$message .= $Discount;
$message .= '</b></td></tr><tr class="pad-left-right-space " style="border-top: 1px solid #ddd;" ><td class="m-b-5" colspan="2" align="left" style="padding-top:5px;padding-bottom:5px;padding-right:15px;padding-left:15px;" ><p style="font-size:14px;margin-top:0;margin-bottom:0;margin-right:0;margin-left:0;" >Total :</p></td><td class="m-b-5" colspan="1" align="right" style="padding-top:5px;padding-bottom:5px;padding-right:15px;padding-left:15px;" > <b style="font-size:15px;font-family:Roboto, sans-serif;" >₦ ';
$message .= $totalamount;
$message .= '</b></td></tr></table></td></tr></tbody></table></div>'; 
$message .= '</body></html>';

             //$to = "rakesh.roshen88@gmail.com";
             $to = $emailid;
             $subject = "Thank your for Order with Us. # : " . $billid;
            
             //$message=$evtstr.$msg.$evtstr1;
             $header = "From:admin@orangestate.ng \r\n";
             $header .= "Cc:admin@orangestate.ng \r\n";
             $header .= "MIME-Version: 1.0\r\n";
             $header .= "Content-type: text/html\r\n";
             
             $retval = mail ($to,$subject,$message,$header);
             
            /* if( $retval == true ) {
                echo "Message sent successfully...12";
             }else {
                echo "Message could not be sent...";
             }*/
             
             
            
            
       
       
    } catch(PDOException $e) {
        echo '{"error":{"text":'. $e->getMessage() .'}}'; 
    }


}


/* ### details ### */ 
function MyAllOders() {   
    $request = \Slim\Slim::getInstance()->request();
    $data = json_decode($request->getBody());
    //print_r($data);s
    $token=$data->token;
    $user_id=$data->user_id;
    $order_id=$data->order_id;
    $systemToken=apiToken($user_id);
  
    
   
    try {
         
        if($systemToken == $token){
            $Order_details = '';
            $db = getDB();
             

            $sql = "SELECT * FROM hotel_order WHERE user_id=".$user_id;
            $stmt = $db->prepare($sql);
             
                 
            $stmt->execute();
            $Order_details = $stmt->fetchAll(PDO::FETCH_OBJ);
           
            $db = null;
             
            if($Order_details){
                echo '{"allOrder": '. json_encode($Order_details) .'}';
            }
             
            else{
                echo '{"allOrder": ""}';
            }
            
        } else{
            echo '{"error":{"text":"No access"}}';
        }
       
    } catch(PDOException $e) {
        echo '{"error":{"text":'. $e->getMessage() .'}}';
    }


}


/* ### details ### */ 
function orderDetails() {   
    $request = \Slim\Slim::getInstance()->request();
    $data = json_decode($request->getBody());
    //print_r($data);s
    $token=$data->token;
    $user_id=$data->user_id;
    $order_id=$data->order_id;
    $systemToken=apiToken($user_id);
  
    
   
    try {
         
        if($systemToken == $token){
            $Order_details = '';
            $db = getDB();
             

            $sql = "SELECT * FROM hotel_order WHERE id='".$order_id."' ORDER BY id DESC LIMIT 1";
            $stmt = $db->prepare($sql);
             
                 
            $stmt->execute();
            $Order_details = $stmt->fetch(PDO::FETCH_OBJ);
           
            $db = null;
             
            if($Order_details){
                echo '{"Order_details": '. json_encode($Order_details) .'}';
            }
             
            else{
                echo '{"Order_details": ""}';
            }
            
        } else{
            echo '{"error":{"text":"No access"}}';
        }
       
    } catch(PDOException $e) {
        echo '{"error":{"text":'. $e->getMessage() .'}}';
    }


}



/* ### search ### */
function search_availlibility() {
    $request = \Slim\Slim::getInstance()->request();
    $data = json_decode($request->getBody());
    //print_r($data); 
    $SearchItem=$data->SearchItem; 
    $city_id=$data->city_id;
    $systemToken=apiToken($user_id);

    
   
    try {
         
        //if($systemToken == $token){
            $newhomepro = '';
            $db = getDB();			
			  $sqlnew = "SELECT id FROM facility where (UPPER(title) like UPPER('%wifi%')) or (UPPER(title) like UPPER('%pick%')) or  (UPPER(title) like UPPER('%swiming%'))"; 
			 $stmt1 = $db->prepare($sqlnew); 
             $stmt1->execute();
             $hotelfacility = $stmt1->fetchAll(PDO::FETCH_OBJ);			
			// print_r($hotelfacility);
			 //$facilityid=array();
			 foreach($hotelfacility as $row){
				 $facilityid[]=$row->id;
			 }
			 $facilityidnew=implode(",",$facilityid);
			/* $hotel=$hotelfacility->id;
			
			print_r($hotel); */
			
			
			
			
			
			
             if(!empty($SearchItem)){
         echo  $sql = "SELECT * FROM hotel where (UPPER(title) like UPPER('%$SearchItem%')) or (UPPER(detail) like UPPER('%$SearchItem%')) AND cityid='".$city_id."'";
			 }else{
				 echo $sql = "SELECT * FROM hotel where cityid='".$city_id."'";
			 }
            //$sql = "SELECT * FROM hotel where  cityid='".$city_id."'";
            $stmt = $db->prepare($sql); 
            $stmt->execute();
            $newhomepro = $stmt->fetchAll(PDO::FETCH_OBJ);
			 foreach($newhomepro as $hotelrow){
				 echo $hotelfacilityid=$hotelrow->facilityid;
			 }
            
            $db = null;
             
            if($newhomepro){
                echo '{"newhomepro": '. json_encode($newhomepro) .'}';
            }
             
            else{
                echo '{"newhomepro": ""}';
            }
            
       /* } else{
            echo '{"error":{"text":"No access"}}';
        }*/
       
    } catch(PDOException $e) {
        echo '{"error":{"text":'. $e->getMessage() .'}}';
    }


}




/* ### search ### */
function most_popular_city() {
    $request = \Slim\Slim::getInstance()->request();
    $data = json_decode($request->getBody());
    //print_r($data);  
    $user_id=$data->user_id;
    $token=$data->token;
    $mycity=$data->mycity;
    $systemToken=apiToken($user_id);

    
   
    try {
         
        if($systemToken == $token){
            $newhomepro = '';
            $db = getDB();

            if($mycity){
                    //echo $mycity;
                    $sql5 = "SELECT state_id FROM cities WHERE name='".$mycity."'"; 
                    $stmt5 = $db->prepare($sql5);
                    $stmt5->execute();
                    $result1 = $stmt5->fetch(PDO::FETCH_OBJ);   

                     
                    //$sql = "SELECT * FROM hotel WHERE  Status='1' AND country='".$result2->country_id."' ORDER BY id DESC";
                    echo $sql = "SELECT cityid, COUNT('cityid') AS 'value_occurrence' FROM hotel WHERE  stateid='".$result1->state_id."' GROUP BY 'cityid'  ORDER BY 'value_occurrence' DESC  LIMIT   6";
                    $stmt = $db->prepare($sql); 
                    $stmt->execute();
                    echo $citilist = $stmt->fetchAll(PDO::FETCH_OBJ); 


                    $feedData = array(); 

                    foreach($citilist as $city){

                       echo $sql7 = "SELECT * FROM cities WHERE name='".$city->cityid."'"; 
                        $stmt7 = $db->prepare($sql7);
                        $stmt7->execute();
                        $result7 = $stmt7->fetch(PDO::FETCH_OBJ);   

                        array_push($feedData,$result7);

                    }
                }



            $db = null;
             
            if($feedData){
                echo '{"citilist": '. json_encode($feedData) .'}';
            }
             
            else{
                echo '{"citilist": ""}';
            }
            
        } else{
            echo '{"error":{"text":"No access"}}';
        } 
       
    } catch(PDOException $e) {
        echo '{"error":{"text":'. $e->getMessage() .'}}';
    }


}


 
?>



