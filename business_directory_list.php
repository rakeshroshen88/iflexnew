<?php include('header.php') ?>
<body>
    <div class="business-search">
        <div class="container">
            <div class="formsechform">
                <form action="business_directory_search.php" method="post">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="searchtype">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Business Name.." name="bname" required />
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Location..."  name="blocation" />
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                                                       <select name="category" id="category" class="form-control" required >
  <option value="">Select</option>
  <?php 
		
		$sql="SELECT * FROM com_category WHERE menuname='company'";
		$db->query($sql)or die($db->error());
		while($row1=$db->fetchArray()){	?>
  <option value="<?=$row1['catname']?>" <?php if($row['catid']===$row1['catname']){ echo "selected"; } ?>><?=$row1['catname']?></option>
		<?php } ?>
   
  
</select> 
                      
                                        </div>
                                    </div>

                                    <div class="col-md-1">
                                        <div class="form-group">
                                            <button type="submit" class="form-sub-new fa-input" name=""><i class="la la-search"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
         <div class="col-md-8 offset-md-2">
                <section class="business_cat slider">
                   <?php  $sql1="SELECT id, logoimage FROM business_hub";
		$db->query($sql1)or die($db->error());
		while($row1=$db->fetchArray()){ 
		if(!empty($row1['logoimage'])){
		?><a href="business_directory_profile.php?bid=<?=base64_encode($row1['id'])?>">
        <div class="slide"><img src="upload/<?=$row1['logoimage']?>" /></div></a>
		<?php }else{?>
			<a href="business_directory_profile.php?bid=<?=base64_encode($row1['id'])?>"><div class="slide"><img src="img/noimg.jpg" /></div></a>
		<?php }?>
		<?php }?>
                </section>
            </div>
		
		</div>

        <section class="productlisting">
        		<div class="container">
        			<div class="row">
					<?php  $sql="SELECT * FROM business_hub limit 8";
		$db->query($sql)or die($db->error());
		while($row=$db->fetchArray()){ ?>
        				<div class="col-md-3">
        					<div class="one-list-home">
							    <div class="boxhead-list">
							        <i aria-hidden="true" class="fa fa-address-book-o"></i>
							        <h5 tabindex="0" ng-reflect-router-link="/,business-directory,business-"><a href="business_directory_profile.php?bid=<?=base64_encode($row['id'])?>"><?=$row['title']?></a></h5>
							        <h6 class="catnames"><?=$row['catid']?></h6>
							    </div>
							    <div class="classi-box-body">
							        <ul>
							            <li>
							                <i aria-hidden="true" class="fa fa-map-marker"></i>
							                <h4><span> <?=$row['address']?></span><span>, <?=$row['city']?></span><span>, <?=$row['state']?></span><span>, <?=$row['zip_code']?></span><span>, <?=$row['country']?></span></h4>
							            </li>
							            <li><i aria-hidden="true" class="fa fa-phone"></i><a href=""><?=$row['phone_no']?> </a></li>
							            <li><i aria-hidden="true" class="fa fa-envelope-o"></i><a href="mailto:<?=$row['email_id']?>"><?=$row['email_id']?></a></li>
							            <li><i aria-hidden="true" class="fa fa-globe"></i><a href="<?=$row['website']?>" target="_blank"><?=$row['website']?> </a></li>
							            <li class="socallisthome-direct">
							                <a href="<?=$row['tumblr']?>" target="_blank"><i aria-hidden="true" class="fa fa-tumblr"></i></a> <a href="<?=$row['twitter']?>" target="_blank"><i aria-hidden="true" class="fa fa-twitter"></i></a> <a href="<?=$row['linkedin']?>" target="_blank"><i aria-hidden="true" class="fa fa-linkedin"></i></a>
							                <a href="<?=$row['facebook']?>"><i aria-hidden="true" class="fa fa-facebook" target="_blank"></i></a>


							                <div class="startlink pull-right">
											
											<?php if($row['stars']==1){ ?>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star-o" aria-hidden="true"></i>
							<i class="fa fa-star-o" aria-hidden="true"></i>
							<i class="fa fa-star-o" aria-hidden="true"></i>
							<i class="fa fa-star-o" aria-hidden="true"></i>
							<?php } ?>
							<?php if($row['stars']==2){ ?>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star-o" aria-hidden="true"></i>
							<i class="fa fa-star-o" aria-hidden="true"></i>
							<i class="fa fa-star-o" aria-hidden="true"></i>
							<?php } ?>
							<?php if($row['stars']==3){ ?>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star-o" aria-hidden="true"></i>
							<i class="fa fa-star-o" aria-hidden="true"></i>
							<?php } ?>
							<?php if($row['stars']==4){ ?>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star-o" aria-hidden="true"></i>
							<?php } ?>
							<?php if($row['stars']==5){ ?>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<?php } ?>
							                	
							                </div>
							            </li>
							        </ul>
							    </div>
							</div>


        				</div>


		<?php } ?>
 



        			</div>


        			<div class="row">
        				<div class="col-md-3">
        					<div class="addv">
        						<?php $db1=new DB();
								 $sql1="SELECT * FROM slider_add where img_type='hub' and section='businesshub' order by rand() limit 0,1";
								 $db1->query($sql1)or die($db1->error());
								 while($row1=$db1->fetchArray()){?>
                                   <a href="<?=$row1['addlink']?>" target="_blank">
                                <img src="slider/<?=$row1['picture']?>"  alt="...">
                                     </a>    
                                   
								 <?php } ?>
        					</div>


        				</div> 

        				<div class="col-md-9">
        					<div class="row">
<?php  $sql="SELECT * FROM business_hub limit 6";
		$db->query($sql)or die($db->error());
		while($row=$db->fetchArray()){ ?>
        						<div class="col-md-4">
		        					<div class="one-list-home">
									    <div class="boxhead-list">
									        <i aria-hidden="true" class="fa fa-address-book-o"></i>
									        <h5 tabindex="0" ng-reflect-router-link="/,business-directory,business-"><a href="business_directory_profile.php?bid=<?=base64_encode($row['id'])?>"><?=$row['title']?></a></h5>
									        <h6 class="catnames"><?=$row['catid']?></h6>
									    </div>
									    <div class="classi-box-body">
									        <ul>
									            <li>
									                <i aria-hidden="true" class="fa fa-map-marker"></i>
									                <h4><span> <?=$row['address']?></span><span>, <?=$row['city']?></span><span>, <?=$row['state']?></span><span>, <?=$row['zip_code']?></span><span>, <?=$row['country']?></span></h4>
									            </li>
									            <li><i aria-hidden="true" class="fa fa-phone"></i><a href=""><?=$row['phone_no']?> </a></li>
									            <li><i aria-hidden="true" class="fa fa-envelope-o"></i><a href="mailto:<?=$row['email_id']?>"><?=$row['email_id']?></a></li>
									            <li><i aria-hidden="true" class="fa fa-globe"></i><a href="<?=$row['website']?>" target="_blank"><?=$row['website']?>  </a></li>
									            <li class="socallisthome-direct">
									                 <a href="<?=$row['tumblr']?>" target="_blank"><i aria-hidden="true" class="fa fa-tumblr"></i></a> <a href="<?=$row['twitter']?>" target="_blank"><i aria-hidden="true" class="fa fa-twitter"></i></a> <a href="<?=$row['linkedin']?>" target="_blank"><i aria-hidden="true" class="fa fa-linkedin"></i></a>
							                <a href="<?=$row['facebook']?>"><i aria-hidden="true" class="fa fa-facebook" target="_blank"></i></a>



									                <div class="startlink pull-right">
													<?php if($row['stars']==1){ ?>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star-o" aria-hidden="true"></i>
							<i class="fa fa-star-o" aria-hidden="true"></i>
							<i class="fa fa-star-o" aria-hidden="true"></i>
							<i class="fa fa-star-o" aria-hidden="true"></i>
							<?php } ?>
							<?php if($row['stars']==2){ ?>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star-o" aria-hidden="true"></i>
							<i class="fa fa-star-o" aria-hidden="true"></i>
							<i class="fa fa-star-o" aria-hidden="true"></i>
							<?php } ?>
							<?php if($row['stars']==3){ ?>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star-o" aria-hidden="true"></i>
							<i class="fa fa-star-o" aria-hidden="true"></i>
							<?php } ?>
							<?php if($row['stars']==4){ ?>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star-o" aria-hidden="true"></i>
							<?php } ?>
							<?php if($row['stars']==5){ ?>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<?php } ?>
									                </div>
									            </li>
									        </ul>
									    </div>
									</div>


		        				</div>


		<?php } ?>
							
							</div>


        				</div>




        			</div>


        			<div class="row">
        				 

        				<div class="col-md-9">
        					<div class="row">
<?php  $sql="SELECT * FROM business_hub limit 6";
		$db->query($sql)or die($db->error());
		while($row=$db->fetchArray()){ ?>
        						<div class="col-md-4">
		        					<div class="one-list-home">
									    <div class="boxhead-list">
									        <i aria-hidden="true" class="fa fa-address-book-o"></i>
									        <h5 tabindex="0" ng-reflect-router-link="/,business-directory,business-"><a href="business_directory_profile.php?bid=<?=base64_encode($row['id'])?>"><?=$row['title']?></a></h5>
									        <h6 class="catnames"><?=$row['catid']?></h6>
									    </div>
									    <div class="classi-box-body">
									        <ul>
									            <li>
									                <i aria-hidden="true" class="fa fa-map-marker"></i>
									                 <h4><span> <?=$row['address']?></span><span>, <?=$row['city']?></span><span>, <?=$row['state']?></span><span>, <?=$row['zip_code']?></span><span>, <?=$row['country']?></span></h4>
									            </li>
									            <li><i aria-hidden="true" class="fa fa-phone"></i><a href=""><?=$row['phone_no']?> </a></li>
									            <li><i aria-hidden="true" class="fa fa-envelope-o"></i><a href="mailto:<?=$row['email_id']?>"><?=$row['email_id']?></a></li>
									            <li><i aria-hidden="true" class="fa fa-globe"></i><a href="<?=$row['website']?>" target="_blank"><?=$row['website']?> </a></li>
									            <li class="socallisthome-direct">
 <a href="<?=$row['tumblr']?>" target="_blank"><i aria-hidden="true" class="fa fa-tumblr"></i></a> <a href="<?=$row['twitter']?>" target="_blank"><i aria-hidden="true" class="fa fa-twitter"></i></a> <a href="<?=$row['linkedin']?>" target="_blank"><i aria-hidden="true" class="fa fa-linkedin"></i></a>
							                <a href="<?=$row['facebook']?>"><i aria-hidden="true" class="fa fa-facebook" target="_blank"></i></a>



									                <div class="startlink pull-right">
									                	<?php if($row['stars']==1){ ?>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star-o" aria-hidden="true"></i>
							<i class="fa fa-star-o" aria-hidden="true"></i>
							<i class="fa fa-star-o" aria-hidden="true"></i>
							<i class="fa fa-star-o" aria-hidden="true"></i>
							<?php } ?>
							<?php if($row['stars']==2){ ?>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star-o" aria-hidden="true"></i>
							<i class="fa fa-star-o" aria-hidden="true"></i>
							<i class="fa fa-star-o" aria-hidden="true"></i>
							<?php } ?>
							<?php if($row['stars']==3){ ?>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star-o" aria-hidden="true"></i>
							<i class="fa fa-star-o" aria-hidden="true"></i>
							<?php } ?>
							<?php if($row['stars']==4){ ?>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star-o" aria-hidden="true"></i>
							<?php } ?>
							<?php if($row['stars']==5){ ?>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<?php } ?>

									                </div>
									            </li>
									        </ul>
									    </div>
									</div>


		        				</div>



		<?php } ?>		
							
							</div>


        				</div>

        				<div class="col-md-3">
        					<div class="addv">
							<?php $db1=new DB();
								 $sql1="SELECT * FROM slider_add where img_type='hub' and section='businesshub' limit 0,1";
								 $db1->query($sql1)or die($db1->error());
								 while($row1=$db1->fetchArray()){?>
                                   <a href="<?=$row1['addlink']?>" target="_blank">
                                <img src="slider/<?=$row1['picture']?>"  alt="...">
                                     </a>    
                                   
								 <?php } ?>
									
									</div>


        				</div>

 



        			</div>



        		</div>
	        	
        </section>
    </div>

    <?php include('footer.php') ?>
</body>
