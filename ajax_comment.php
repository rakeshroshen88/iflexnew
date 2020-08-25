<?php 
include_once("config.inc.php");
include('chksession.php');
if(isset($_POST['formData'])){
						$FormData = array();
						$AllFormData = parse_str($_POST['formData'], $FormData);	
				}
		$post_id=$_POST['pid'];
		$uid=$_POST['uid'];
		$comment=$_POST['postcomment'];
		$cimage=$_POST['cimage'];
		/* if(!empty($comment)){ */
		$arr=array(
							"user_id"=>$uid,
							"post_id"=>$post_id,
							"comment"=>$comment,
							"cimage"=>$cimage,
							"comment_status"=>1,							
							"cdate"=>date('Y-m-d H:i:s')
			    );
				
				////////////////Notification///////////////////
	 $user_id=$db->getSingleResult("select user_id from user_post where  post_id='$post_id'");	

 $notarr=array(
							"user_id"=>$_SESSION['sess_webid'],
							"f_userid"=>$user_id,
							"post_id"=>$post_id,							
							"notification_type"=>'comment',
							"status"=>'1',							
							"date"=>date('Y-m-d H:i:s')
			    );
				
     $not=insertData($notarr, 'notification'); 
	 //////////////////////////////////
				//print_r($arr);
     $insid=insertData($arr, 'comment');
	 $dbc=new DB();
	 $dbr=new DB();
	 //echo $regmsg="comment Added Successfully !";	
	  $sqlc="SELECT * from comment where post_id=".$post_id.' and c_id='.$insid;
		$dbc->query($sqlc);
		if($dbc->numRows()>0)
		{
		$rowc=$dbc->fetchArray();
		}
		$username=$dbc->getSingleResult('select first_name from '.$_TBL_USER." where user_id=".$rowc['user_id']);

		$pimage=$dbc->getSingleResult('select image_id from user_profile where user_id='.$rowc['user_id']);	
		



?>

  <div class="comment">
				                    <div class="contact contact-rounded contact-lg">
				                    	<div class="comnetimg">
				                    		<?php if(!empty($pimage)){ ?>
				                    			<a href="view-profile.php?uid=<?php echo base64_encode($rowc['user_id']);?>">
				                    				<img src="upload/<?=$pimage?>" alt="" >
				                    				</a>
				                    			<?php }else{ ?>
												<a href="view-profile.php?uid=<?php echo base64_encode($rowc['user_id']);?>"><img src="images/resources/user.png" alt=""></a>
												<?php }?>


					                    </div>
				                        <div class="contact-container">
				                            <a href="view-profile.php?uid=<?php echo base64_encode($rowc['user_id']);?>"><?=$username?></a>
				                            <span class="coment-time"><?php echo timeago($rowc['cdate']);?> </span> 
				                            <div class="replybody-mg">
					                            <?php if(!empty($rowc['mp3'])){ ?>
														<img src="emoji/<?=$rowc['cimage']?>" height="50" width="50"/><?php }elseif(!empty($rowc['cimage'])){ ?>
														<img src="upload/<?=$rowc['cimage']?>" height="50" width="50"/>
														<?php }?>
					                            <span><?=$rowc['comment']?></span>
					                        </div>
				                            <div class="replycommnetbt">
								           		<a  href="javascript:void(0)" id="replyiddiv" cid="<?=$rowc['c_id']?>" >Reply</a>
								           	</div>
				                        </div>
				                    </div>


				                    <?php ///////Show Reply////////


											 $sqlr="SELECT * from reply where c_id=".$rowc['c_id'];
											$dbr->query($sqlr);
											if($dbr->numRows()>0)
											{
											while($rowr=$dbr->fetchArray()){
											$date=explode('-',$rowr['rdate']);


											$st=mktime(0,0,0,$date[1],$date[2],$date[0]);	
											$username1=$db1->getSingleResult('select first_name from '.$_TBL_USER." where user_id=".$rowr['user_id']);
											$rpimage=$db1->getSingleResult('select image_id from user_profile where user_id='.$rowr['user_id']);		
												?>

				                    <div class="comment">
						                    <div class="contact contact-rounded contact-lg">
						                    	<div class="comnetimg">
						                    		<?php if(!empty($rpimage)){ ?>
																	<a href="view-profile.php?uid=<?php echo base64_encode($rowr['user_id']);?>"><img src="upload/<?=$rpimage?>" alt=""></a> 
																	<?php }else{?>
																	<a href="view-profile.php?uid=<?php echo base64_encode($rowr['user_id']);?>"><img src="images/resources/user.png" alt=""  ></a>
																	<?php }?>


						                    	</div>
						                        <div class="contact-container">
						                            <a href="#"> <?=$username1?></a>
						                            <span class="coment-time"><?php echo timeago($rowr['rdate']);?> </span> 
						                            <?php if(!empty($rowr['rimage'])){ ?>
																	<img src="upload/<?=$rowr['rimage']?>" height="50" width="50"/><?php }?>
																	<span class="commword"><?=$rowr['r_comment']?> 

						                        </div>
						                    </div>
						                </div>

						           <?php }} ///////////////?>

<span id="replydisplay1<?=$rowc['c_id']?>"></span>
						         <div id="replydisplay<?=$rowc['c_id']?>" style="display:none;">
													<div class="post-comment">
													<div class="cm_img">
														<?php if(!empty($mainuserimage)){ ?>
														<img src="upload/<?=$mainuserimage?>"/>
														<?php }else{?>
														<img src="images/resources/user.png" alt="" height="40" width="40">
														<?php } ?>
													</div>
													<div class="comment_box">
													<form id="replyForm" method="post">
													<input type="hidden" name="pid" id="pid<?=$rowc['c_id']?>" value="<?=$rowc['post_id']?>">
													<input type="hidden" name="uid" id="uid<?=$rowc['c_id']?>" value="<?=$rowc['user_id']?>" >
													<input type="hidden" name="cid" id="cid<?=$rowc['c_id']?>" value="<?=$rowc['c_id']?>" >
													<input type="hidden" name="rimage" id="rimage<?=$rowc['c_id']?>" value="" >
													<label class="cemeraicon" for="rimageupload<?=$rowc['c_id']?>"><i class="fa fa-camera" aria-hidden="true"></i></label>
													<input type="file" id="rimageupload<?=$rowc['c_id']?>" name="rimageupload" class="rimageupload" cid="<?=$rowc['c_id']?>" >
													<p class="lead emoji-picker-container">
													<input type="text"  rid="<?=$rowc['c_id']?>"  placeholder="Reply on comment" name="rpostcomment" class="rp" id="rpostcomment<?=$rowc['c_id']?>" data-emojiable="true">
													</p>
													<button type="button" name="replyid" id="replyid<?=$rowc['c_id']?>" class="replyid" rid="<?=$rowc['c_id']?>">Send</button>
														</form>
													</div>
												</div>
									</div>

				                    
				                  



				                </div>
<!--				    
<script src="lib/js/config.js"></script>
    <script src="lib/js/util.js"></script>
    <script src="lib/js/jquery.emojiarea.js"></script>
    <script src="lib/js/emoji-picker.js"></script>-->
	<script>
	
	$( 'input[type=button]' ).on('click', function(){
            var cursorPos = $('#text').prop('selectionStart');
            var v = $('#text').val();
            var textBefore = v.substring(0,  cursorPos );
            var textAfter  = v.substring( cursorPos, v.length );
            $('#text').val( textBefore+ $(this).val() +textAfter );
        });
		
      $(function() {
        // Initializes and creates emoji set from sprite sheet
        window.emojiPicker = new EmojiPicker({
          emojiable_selector: '[data-emojiable=true]',
          assetsPath: 'lib/img/',
          popupButtonClasses: 'fa fa-smile-o'
        });
        // Finds all elements with `emojiable_selector` and converts them to rich emoji input fields
        // You may want to delay this step if you have dynamically created input fields that appear later in the loading process
        // It can be called as many times as necessary; previously converted input fields will not be converted again
        window.emojiPicker.discover();
      });
	  </script>
	  <link href="lib/css/emoji.css" rel="stylesheet">

