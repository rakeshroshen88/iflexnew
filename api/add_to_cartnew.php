 
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
$app->post('/addtocart','addtocart');  
$app->post('/viewcart','viewcart');  
$app->post('/deletecart','deletecart'); 
$app->post('/user_order','user_order'); 
$app->post('/viewinvoice','viewinvoice');
$app->post('/user_shiping','user_shiping'); 

$app->run();

function addtocart() {
    $request = \Slim\Slim::getInstance()->request();
    $data = json_decode($request->getBody());
    //print_r($data);
    $token=$data->token;
    $prod_id=$data->prod_id; 
    $user_id=$data->user_id;
    $qty=$data->qty;
    $prod_size=$data->prodsize;
    $prod_color=$data->prodcolor;
    //$lastCreated=$data->lastCreated;
    $systemToken=apiToken($user_id);

    
   
    try {
         
        if($systemToken == $token){
            $newprodadded = '';
            $newprodadded1 = '';
            $db = getDB();          
            if($prod_id){
                
                $sql="select * from product where id=".$prod_id;
                $stmt = $db->prepare($sql);
                }
            $stmt->execute();
            
            $newprodadded = $stmt->fetchAll(PDO::FETCH_OBJ);
            $proprice1=0;
            
            foreach($newprodadded as $row){
                $proprice1=$row->prod_sprice;
                $proprice1=str_replace(",","",$proprice1);
                    
                $total=$proprice1*$qty; 
                $prod_name=$row->prod_name;
                $prod_image=$row->prod_large_image;             
                $mrp=$row->prod_price;
                $mrp=str_replace(",","",$mrp);
                $persen=$mrp-$proprice1;
                //$discount=($persen*100)/$mrp;
                $orgprice=$proprice1;
                //$finalprice=$row->prod_sprice;
            } 
             $link = mysqli_connect("localhost", "orangestate_uorange", "MN9Ydvr,Hg!!", "orangestate_orange");
            $product_name = mysqli_real_escape_string($link, $prod_name);
            $session_id=session_id();
            $dates=date('Y-m-d h:i:s');
             $sql1="INSERT INTO temp(product_name, user_id, sessionid, prodid, cost, discount, finalprice, prod_sprice, prod_total, quantity, mrp, buyitdate,prod_image,prodsize,prodcolor)VALUES('".$product_name."', '".$user_id."', '".$session_id."', '".$prod_id."', '".$orgprice."', '".$persen."', '".$orgprice."', '".$orgprice."', '".$total."', '".$qty."', '".$mrp."', '".$dates."','".$prod_image."','".$prod_size."','".$prod_color."')";
            $stmt1 = $db->prepare($sql1);
            $stmt1->execute();
            /////////////
            //$sqlnew = "SELECT id FROM temp WHERE session_id='".$session_id."'";
            $sqlnew = "SELECT id FROM temp WHERE user_id='".$user_id."'";
            $stmtnew = $db->prepare($sqlnew);            
            $stmtnew->execute();
            $newprodadded1 = $stmtnew->fetch(PDO::FETCH_OBJ);           
            
            /////////////
            $db = null;
             
             
            if($newprodadded1){
                echo '{"success": '. json_encode($newprodadded1) .'}';
            }
             
            else{
                echo '{"failed": ""}';
            }
            
        } else{
            echo '{"error":{"text":"No access"}}';
        }
       
    } catch(PDOException $e) {
        echo '{"error":{"text":'. $e->getMessage() .'}}';
    } 
} 
   

/* ### userdetails ### */
function viewcart() {
    $request = \Slim\Slim::getInstance()->request();
    $data = json_decode($request->getBody());
    //print_r($data);
    $token=$data->token; 
    $user_id=$data->user_id; 
    //$lastCreated=$data->lastCreated;
    $systemToken=apiToken($user_id);

    
   
    try {
         
        if($systemToken == $token){
            $newhomepro = '';
            $db = getDB();          
            
            //$sqlnew = "SELECT id FROM temp WHERE session_id='".$session_id."'";
            $sqlnew = "SELECT id,product_name,prodid,discount,prod_sprice,quantity,prod_total,mrp,prodsize,prodcolor,prod_image FROM temp WHERE user_id='".$user_id."'";
            $stmtnew = $db->prepare($sqlnew);            
            $stmtnew->execute();
            $tempData = $stmtnew->fetchAll(PDO::FETCH_OBJ);
            $grandtoal=0;
            $subtoal=0;
            $discaunt=0;
            foreach($tempData as $temprow){
			$sql="select shippingcharge from product where id=".$temprow->prodid;
            $stmt = $db->prepare($sql);            
            $stmt->execute();            
            $shippingcharge = $stmt->fetch(PDO::FETCH_OBJ);
			//echo $shippingcharge->shippingcharge;
            $totalshippingcharge+=$shippingcharge->shippingcharge;	
            $grandtoal=$grandtoal + $temprow->prod_total;
            $subtoal=$subtoal + ($temprow->mrp*$temprow->quantity);
            $discaunt = $discaunt + ($temprow->discount*$temprow->quantity);
            }
            
            /////////////
            $db = null;
            ////////
            $array_record = array();                    
            $data_prod['user_id']=$user_id;
            $data_prod['discount']=$discaunt; 
			$data_prod['totalshippingcharge']=$totalshippingcharge; 			
            $data_prod['selling_price']=($grandtoal+$totalshippingcharge);         
            $data_prod['mrp']=$subtoal;
            $data_prod['temp_val']=$tempData;   
            
            array_push($array_record,$data_prod);
             
            if($array_record){
                echo '{"viewcart": '. json_encode($array_record) .'}';
            }
             
            else{
                echo '{"viewcart": ""}';
            }
            
        } else{
            echo '{"error":{"text":"No access"}}';
        }
       
    } catch(PDOException $e) {
        echo '{"error":{"text":'. $e->getMessage() .'}}';
    } 
} 
 
/* ### userdetails ### */
function deletecart() {
    $request = \Slim\Slim::getInstance()->request();
    $data = json_decode($request->getBody());
    //print_r($data);
    $token=$data->token; 
    $user_id=$data->user_id;
    $temp_id=$data->temp_id;
    //$lastCreated=$data->lastCreated;
    $systemToken=apiToken($user_id);

    
   
    try {
         
        if($systemToken == $token){            
            $db = getDB();          
            
            //$sqlnew = "SELECT id FROM temp WHERE session_id='".$session_id."'";
            $sqlnew = "DELETE  FROM temp WHERE user_id='".$user_id."' and id=".$temp_id;
            $stmtnew = $db->prepare($sqlnew);            
            $stmtnew->execute();
            
            /////////////
            $db = null;
             
            echo '{"Success": "Item has been Deleted"}';
             
            
        } else{
            echo '{"error":{"text":"No access"}}';
        }
       
    } catch(PDOException $e) {
        echo '{"error":{"text":'. $e->getMessage() .'}}';
    } 
} 
 


/* ### userdetails ### */
function user_order() {
    $request = \Slim\Slim::getInstance()->request();
    $data = json_decode($request->getBody());
    //print_r($data);
    $token=$data->token; 
    $user_id=$data->user_id;
	$shipping_id=$data->shipping_id; 
	$order_id=$data->order_id; 
	$approvel=$data->approvel;
	$transaction_id=$data->transaction_id;	
	$totalprice=$data->totalprice;
	$trxref=$data->trxref;
    //$lastCreated=$data->lastCreated;
    $systemToken=apiToken($user_id);
	$link = mysqli_connect("localhost", "orangestate_uorange", "MN9Ydvr,Hg!!", "orangestate_orange");
    
   
    try {
         
        if($systemToken == $token){
            $newhomepro = '';
            $db = getDB();          
            
            //$sqlnew = "SELECT id FROM temp WHERE session_id='".$session_id."'";
            $sqlnew = "SELECT id,product_name,prodid,discount,prod_sprice,quantity,prod_total,mrp,prodsize,prodcolor,prod_image FROM temp WHERE user_id='".$user_id."'";
            $stmtnew = $db->prepare($sqlnew);            
            $stmtnew->execute();
            $tempData = $stmtnew->fetchAll(PDO::FETCH_OBJ);
			//print_r($tempData);
            $grandtoal=0;
            $subtoal=0;
            $discaunt=0;
			$buydate=date('Y-m-d H:i:s');
            foreach($tempData as $temprow){
			$pname=$temprow->product_name;
			$discount=$temprow->discount;
			$product_name = mysqli_real_escape_string($link, $pname);
            $prodname.=$product_name.',';
			$prodid.=$temprow->prodid.',';
			$cost.=$temprow->prod_sprice.',';
			$total.=$temprow->prod_total.',';
			$quantity.=$temprow->quantity.',';
			$prodcolor.=$temprow->prodcolor.',';
			$prodsize.=$temprow->prodsize.',';
			$sql="select shippingcharge,total from product where id=".$temprow->prodid;
            $stmt = $db->prepare($sql);            
            $stmt->execute();            
            $shippingcharge = $stmt->fetchAll(PDO::FETCH_OBJ);			
            $totalshippingcharge+=$shippingcharge->shippingcharge;
			$total1=($shippingcharge->total - $temprow->quantity);
			
			///////////////////////////////
			$sql1 ="UPDATE product SET total='".$total1."' WHERE id=".$temprow->prodid;
            $stmt1 = $db->prepare($sql1); 
            $stmt1->execute();
			/////////////////////
			}
			$sql1="INSERT INTO user_order(orderid, userid, prodid, billid, product_name, price, quantity, subtotal, approvel, totalprice, prodsize, color, buydate,discount,transaction_id,trxref)VALUES('".$order_id."', '".$user_id."', '".$prodid."', '".$shipping_id."', '".$prodname."', '".$cost."', '".$quantity."', '".$total."', '".$approvel."', '".$totalprice."', '".$prodsize."', '".$prodcolor."','".$buydate."','".$discount."','".$transaction_id."','".$trxref."')";
            $stmt1 = $db->prepare($sql1);
            $stmt1->execute();
			////////////////////
            
            
            /////////////
            $db = null;
            ////////
            
            echo '{"Success": "Order has been placed"}';
            
        } else{
            echo '{"error":{"text":"No access"}}';
        }
       
    } catch(PDOException $e) {
        echo '{"error":{"text":'. $e->getMessage() .'}}';
    } 
} 
 

/* ### userdetails ### */
function user_shiping() {
    $request = \Slim\Slim::getInstance()->request();
    $data = json_decode($request->getBody());
    //print_r($data);
    $token=$data->token; 
    $user_id=$data->user_id;
	$billing_firstname=$data->billing_firstname;
	$billing_lastname=$data->billing_lastname;
	$billing_email=$data->email_id;
	
	$billing_phone=$data->mobileno;
	$billing_adress=$data->billing_adress;
	$billing_adress1=$data->billing_adress1;
	$billing_state=$data->billing_state;
	$billing_city=$data->current_city;
	$billing_zip=$data->billing_zip;
	$discount=0;//$data->discount;
	$billdate=date('Y-m-d');
    //$lastCreated=$data->lastCreated;
    $systemToken=apiToken($user_id);
	$link = mysqli_connect("localhost", "orangestate_uorange", "MN9Ydvr,Hg!!", "orangestate_orange");
    
   
    try {
         
        if($systemToken == $token){
            $newhomepro = '';
            $db = getDB(); 
			/////////
			/* $sqlnew = "SELECT id FROM billing_address WHERE billing_email='".$billing_email."'";
            $stmtnew = $db->prepare($sqlnew);            
            $stmtnew->execute();
            $newprodadded2 = $stmtnew->fetch(PDO::FETCH_OBJ); */ 
			//if(empty($newprodadded2)){
			/////////////
            $sql1="INSERT INTO billing_address(userid, billing_firstname, billing_lastname, billing_email, billing_phone, billing_adress, billing_adress1, billing_state, billing_city, billing_zip, discount, billdate)VALUES('".$user_id."', '".$billing_firstname."', '".$billing_lastname."', '".$billing_email."', '".$billing_phone."', '".$billing_adress."', '".$billing_adress1."', '".$billing_state."', '".$billing_city."', '".$billing_zip."', '".$discount."','".$billdate."')";
            $stmt1 = $db->prepare($sql1);
            $stmt1->execute();
			////////////////////
            $sqlnew = "SELECT id FROM billing_address WHERE billing_email='".$billing_email."'";
            $stmtnew = $db->prepare($sqlnew);            
            $stmtnew->execute();
            $newprodadded1 = $stmtnew->fetch(PDO::FETCH_OBJ); 
            /* }else{
				
			} */
            /////////////
            $db = null;
            ////////
            
             
            if($newprodadded1){
                echo '{"shipingid": '. json_encode($newprodadded1) .'}';
            }
             
            else{
                echo '{"shipingid": ""}';
            }
            
        } else{
            echo '{"error":{"text":"No access"}}';
        }
       
    } catch(PDOException $e) {
        echo '{"error":{"text":'. $e->getMessage() .'}}';
    } 
} 
 
/* ### viewinvoice ### */
function viewinvoice() {
    $request = \Slim\Slim::getInstance()->request();
    $data = json_decode($request->getBody());
    //print_r($data);
    $token=$data->token; 
    $user_id=$data->user_id; 
	//$shipping_id=$data->shipping_id; 
	$order_id=$data->order_id;
    //$lastCreated=$data->lastCreated;
    $systemToken=apiToken($user_id);

    
   
    try {
         
        if($systemToken == $token){
            $newhomepro = '';
            $db = getDB();          
            
            //$sqlnew = "SELECT id FROM temp WHERE session_id='".$session_id."'";
            $sqlnew = "SELECT * FROM user_order WHERE orderid='".$order_id."'";
            $stmtnew = $db->prepare($sqlnew);            
            $stmtnew->execute();
            $tempData = $stmtnew->fetchAll(PDO::FETCH_OBJ);			
            $grandtoal=0;
            $subtoal=0;
           
			///////////////
			
			//////////////
            foreach($tempData as $orderrow){
			$shipsql="select * from billing_address where id=".$orderrow->billid;
			$stmtship = $db->prepare($shipsql);            
            $stmtship->execute();
			$billrow=$stmtship->fetchAll(PDO::FETCH_OBJ);
			
			/*  $sql="select shippingcharge from product where id=".$orderrow->prodid;
            $stmt = $db->prepare($sql);            
            $stmt->execute();            
            $shippingcharge = $stmt->fetch(PDO::FETCH_OBJ); 
			 $shippingcharge->shippingcharge; */
			$prodidarr=explode(',',$orderrow->prodid);
			//print_r($prodidarr);
			$prodarray=explode(',',$orderrow->product_name);
			$qtyarr=explode(',',$orderrow->quantity);
			$pricearr=explode(',',$orderrow->price);	
			$subtotalarr=explode(',',$orderrow->subtotal);
			$cn=count($prodarray)-1;
			$Order_date=$orderrow->buydate;
			$transaction_id=$orderrow->transaction_id;
			$trxref=$orderrow->trxref;
			$Order_num=$orderrow->orderid;
			$approval=$orderrow->approval;
			$bdate=explode(' ',$orderrow->buydate);
			$newbdate=explode(' ',$bdate[0]);
			$date= $newbdate[0].'/'.$newbdate[0].'/'.$newbdate[0];
			$discount=$orderrow->discount;
			  for($i=0;$i<$cn;$i++)
				{
					$sql1="select shippingchargefrom product where id=".$prodidarr[$i];
					$stmt1 = $db->prepare($sql1);            
					$stmt1->execute();
					$shippingcharge= $stmt1->fetchAll(PDO::FETCH_OBJ);
					$prodname.=$prodarray[$i];
					$qtyarr.=$qtyarr[$i];
					$pricearr.=$pricearr[$i];
					
					
					
					//$shippingcharge = $stmt1->fetch(PDO::FETCH_OBJ); 
					$totalshippingcharge+=$shippingcharge->shippingcharge;
					
					$subtotal+=$subtotalarr[$i];
					$grand_total+=$subtotalarr[$i];
					
					
					
					//print_r($ab);
					
					
					
				}
            
            }
            
			$sqlnew = "SELECT id,product_name,prodid,discount,prod_sprice,quantity,prod_total,mrp,prodsize,prodcolor,prod_image FROM temp WHERE user_id='".$user_id."'";
            $stmtnew = $db->prepare($sqlnew);            
            $stmtnew->execute();
            $tempData = $stmtnew->fetchAll(PDO::FETCH_OBJ);
			///////////////Delete Temp///////
			$sqlnew = "DELETE  FROM temp WHERE user_id='".$user_id."'";
            $stmtnew = $db->prepare($sqlnew);            
            $stmtnew->execute(); 
            /////////////
            $db = null;
            ////////
            $array_record = array();  
			 /* $data_prod['prod_name']=$prodarray;
			$data_prod['prod_qty']=$qtyarr;
			$data_prod['prod_sprice']=$pricearr; 
			$Order_num=$orderrow->orderid;
			$approval=$orderrow->approval; */
			
			
			
            $data_prod['user_id']=$user_id;
			$data_prod['Order_num']=$Order_num;
			$data_prod['Payment_status']=$approval;
			
			$data_prod['Order_date']=$Order_date;
			$data_prod['transaction_id']=$transaction_id;
			$data_prod['trxref']=$trxref;
			
            $data_prod['discount']=$discount; 
			$data_prod['totalshippingcharge']=$totalshippingcharge; 			
            $data_prod['selling_price']=($grand_total+$totalshippingcharge);         
            $data_prod['mrp']=$subtotal+$discount;
			$data_prod['shipping_details']=$billrow;
			$data_prod['Ordered_product']=$shippingcharge;
			 
            array_push($array_record,$data_prod);
             
            if($array_record){
                echo '{"vieworder": '. json_encode($array_record) .'}';
            }
             
            else{
                echo '{"viewcart": ""}';
            }
            
        } else{
            echo '{"error":{"text":"No access"}}';
        }
       
    } catch(PDOException $e) {
        echo '{"error":{"text":'. $e->getMessage() .'}}';
    } 
} 
 

?>
