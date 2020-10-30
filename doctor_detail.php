<?php  $e_id= $_GET['d_id'];
      $form_id=8;
      $form = RGFormsModel::get_form_meta($form_id);
 	  $entry1 = GFAPI::get_entries( $form_id );
	 
global $wpdb;
$data1 = $wpdb->get_results("SELECT distinct entry_id FROM {$wpdb->prefix}gf_entry_meta WHERE form_id=8 order by entry_id desc");
$distinct_id1=array();
foreach($data1 as $fx1){
	$distinct_id1[]=$fx1->entry_id;
}

 $key1 = array_search($e_id, $distinct_id1); 
  
 $resultsnew = $wpdb->get_results("SELECT * from {$wpdb->prefix}gf_entry_meta where entry_id='$e_id' and meta_key in (1,2,3,5,6,7,10,12,14,17,36)");
 $i1=1;

  
 ///display data////////////
//echo $h_img=$entry[34][34];
 $img_val = $wpdb->get_row("SELECT * from {$wpdb->prefix}gf_entry_meta where entry_id='$e_id' and meta_key=34 ");
 $h_img=  $img_val->meta_value;

if($h_img==''){
	$h_img=site_url('wp-content/uploads/gravity_forms/8-ae186dfcdce3d9f54a28db283d49c098/2019/04/user.jpg');
}

echo'<div class="container">
  <div class="row">
    <div class="col-md-6 img"><div class="hover01 "><figure>  
      <img src="'.$h_img.'"  alt="" class="img-rounded" style="height:350px;" ></figure></div>
    </div>
    <div class="col-md-6 details">
      <blockquote>';
	   foreach($resultsnew as $row){
		    $meta_key=$row->meta_key;
			if($meta_key==1){
			    $title=$row->meta_value;
		   }
		   if($meta_key==2){
			    $namenew=$row->meta_value;
		   }
		   if($meta_key==3){
			    $namenew1=$row->meta_value;
		   }
		   
		   if($meta_key==17){
			   $v17=$row->meta_value;
		   }
		   if($meta_key==14){
			   $v14=$row->meta_value;
		   }
		   if($meta_key==7){
			   $v7=$row->meta_value;
		   }
		   if($meta_key==36){
			   if(!empty($row->meta_value)){$v36=$row->meta_value;}else{$v36="N/A";}
			   
		   }
		    if($meta_key==5){
			   $v5=$row->meta_value;
		   }
		    if($meta_key==6){
			   $v6=$row->meta_value;
		   }
		   if($meta_key==10){
			   $v10=$row->meta_value;
		   }
		   if($meta_key==12){
			   $v12=$row->meta_value;
		   }
			
		
       
	   $i=$i+1;
	}
	 echo '<h5>'.$title.' '.$namenew.' '.$namenew1.'</h5>
        <small><cite title="Source Title">'.$v17.','.$v14.' <i class="icon-map-marker"></i></cite></small>
      </blockquote>
      <p>
         <b>'.$form['fields'][7]->label.'</b> : '. str_replace(
     array('[',']','"'), array('',''),$v7).' <br>
		 <b>Mobile No</b> : '.$v36.' <br>
       <b>'.$form['fields'][5]->label.'</b> : '.$v5.' <br>
	   <b>'.$form['fields'][10]->label.'</b> : '.$v12.' <br>
	   <b>'.$form['fields'][6]->label.'</b> : '.$v6.' <br>';
	    echo'<p><button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal" id="">
    Book Appointment
  </button></p>
	   
       
      </p>
    </div>
  </div>
</div>';?>

  <!-- The Modal -->
  <div class="modal fade " id="myModal">
    <div class="modal-dialog modal-dialog-centered ">
      <div class="modal-content modalApperance">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h5 class="modal-title">Patients Personal Details</h5>
		  <p>Fill the form below ndicaticating the appoitment type you need. We will get back soon to you for more updates.</p>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
		 <form id="appoitment_request" name="appoitment_request" method="post">
		  <input type="hidden" name="dname" value="<?php echo $title.' '.$namenew.' '.$namenew1;?>"/>
		 <input type="hidden" name="demail" value="<?=$v5?>"/>
		  <input type="hidden" name="dmobile" value="<?=$v36?>"/>
		    <div class="form-group">
    <label for="name">Full Name:</label>
    <input type="text" class="form-control" id="uname" name="uname" required>
  </div>
   
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" id="email" name="email" required>
  </div>
  <div class="form-group">
    <label for="pwd">Phone Number</label>
    <input type="number" class="form-control" id="phone" name="phone" required>
  </div>
  
   <div class="form-group">
    <label for="pwd">Appointment Date</label>
    <input type="date" class="form-control" id="date" name="date">
  </div>
  
   <div class="form-group">
    <label for="pwd">Appointment Time</label>
    <input type="time" class="form-control" id="time" name="time">
  </div>
  
  
  <!--<div class="form-group form-check">
    <label class="form-check-label">
      <input class="form-check-input" type="checkbox" name="rem"> Remember me
    </label>
  </div>-->
  <button type="submit" class="btn btn-success" id="bookappoint_sub">Submit</button>
</form>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>

<style>
.img-rounded{
	height: 354px !important;
    width: 345px !important;
    margin-left: -6px !important;
}
.hover01 {
	
}
.container{
    padding:5%;
}
.container .img{
    text-align:center;
}
.container1 .details1{
    border-left:3px solid #ded4da;
}
.container .details p{
    font-size:15px;
    font-weight:bold;
}
</style>
<style>
.btn {    
    border-radius: 0px !important;     
}
.btn-secondary{    outline-style: outset !important;
    outline-width: 6px !important;
    outline-color: #99969F !important;}
body {
	color: #333;
	font-family: 'Open Sans', sans-serif;
	font-weight: 300;
}
h1,
h1+p {
	margin: 30px 15px 0;
	font-weight: 300;
}
h1+p a {
	color: #333;
}
h1+p a:hover {
	text-decoration: none;
}
h2 {
	margin: 60px 15px 0;
	padding: 0;
	font-weight: 300;
}
h2 span {
	margin-left: 1em;
	color: #aaa;
	font-size: 85%;
}
.column {
	margin: 15px 15px 0;
	padding: 0;
}
.column:last-child {
	padding-bottom: 60px;
}
.column::after {
	content: '';
	clear: both;
	display: block;
}
.column div {
	position: relative;
	float: left;
	width: 300px;
	height: 200px;
	margin: 0 0 0 25px;
	padding: 0;
}
.column div:first-child {
	margin-left: 0;
}
.column div span {
	position: absolute;
	bottom: -20px;
	left: 0;
	z-index: -1;
	display: block;
	width: 300px;
	margin: 0;
	padding: 0;
	color: #444;
	font-size: 18px;
	text-decoration: none;
	text-align: center;
	-webkit-transition: .3s ease-in-out;
	transition: .3s ease-in-out;
	opacity: 0;
}
figure {
	width: 350px;
	height: 350px;
	margin: 0;
	padding: 0;
	background: #fff;
	overflow: hidden;
}
figure:hover+span {
	bottom: -36px;
	opacity: 1;
}



/* Zoom In #1 */
.hover01 figure img {
	-webkit-transform: scale(1);
	transform: scale(1);
	-webkit-transition: .3s ease-in-out;
	transition: .3s ease-in-out;
}
.hover01 figure:hover img {
	-webkit-transform: scale(1.3);
	transform: scale(1.3);
}
.btn-primary{ background-color: #07c91d;}
</style>



