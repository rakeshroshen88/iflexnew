<?php include('config.inc.php');
include('chksession.php');
$output = '';  
if(isset($_POST['formData'])){
						$FormData = array();
						$AllFormData = parse_str($_POST['formData'], $FormData);	
				}

//print_r($FormData);
$link = mysqli_connect("localhost", "orangestate_uorange", "MN9Ydvr,Hg!!", "orangestate_orange");
//print_r($FormData);
$feeling=$FormData['feeling'];
$post_details=$FormData['postid'];
$imgid=$FormData['imgid'];
$tagfriends=$FormData['tagfriends'];
$fsubcatname=$FormData['fsubcatname'];
$livelocationinput=$FormData['livelocationinput'];
if(!empty($FormData['pageid'])){
$pageid=$FormData['pageid'];
}else{
$pageid=0;	
}
$post_title=$FormData['selectfeel'];

$fname=$db->getSingleResult('select catname from '.$_TBL_FEELINGC." where id=".$post_title);
$prod_detail1 = mysqli_real_escape_string($link, $post_details);
if(!empty($prod_detail1)){
		$arr=array(
							"user_id"=>$_SESSION['sess_webid'],
							"allpath"=>  $imgid,
							"post_title"=>$fname,
							"feelingimgid"=>  $fsubcatname,
							"post_details"=>$prod_detail1,
							"postemos"=>$feeling,
							"tagfriends"=>$tagfriends,
							"post_status"=>1,	
							"pageid"=>$pageid,	
							"livelocation"=>$livelocationinput,								
							"post_date"=>date('Y-m-d H:i:s')
			    );
				//print_r($arr);
     $insid=insertData($arr, 'user_post');
	 //echo $regmsg="Post Added Successfully !";
$sql="SELECT * from user_post where post_id=".$insid;
$db->query($sql);
if($db->numRows()>0)
{
$row=$db->fetchArray();
}
$dbc=new DB();
$dbr=new DB();
$db1=new DB();
$dbu=new DB();
$db2=new DB();
$db22=new DB();

$dblike=new DB();

$dbp=new DB();
$sqluser="SELECT * from user_profile where user_id=".$_SESSION['sess_webid'];
$dbu->query($sqluser);
if($dbu->numRows()>0)
{
$userrow=$dbu->fetchArray();
}	 

$usernamepost=$db1->getSingleResult('select first_name from '.$_TBL_USER." where user_id=".$row['user_id']);
$lcount=$db1->getSingleResult('select count(like_id) from post_like where post_id='.$insid);
$ccount=$db1->getSingleResult('select count(c_id) from comment where post_id='.$insid);?>

<div class="app-timeline-item">
	        <div class="user">
	        	<?php if(empty($userrow['image_id'])){?>
					<img src="images/resources/user.png" alt="" height="40" width="40"  /> 
					<?php }else{?>
					<img src="upload/<?=$userrow['image_id']?>" alt="" height="40" width="40" /> 
					<?php }?> 

	        </div>
	        <div class="content">
	            <div class="title">
	            		<?=$userrow['first_name']?> 
															
															<?php if(!empty($row['tagfriends'])){
																?>
																<span class="withfrnd">- with </span> 
														<?php 	//$a=array();
																	 $tagf=$row['tagfriends'];
																	$sql2='select first_name,user_id from all_user where user_id IN ('.$tagf.')';
																	$db2->query($sql2)or die($db12->error());
																while($row1=$db2->fetchArray()){
																 $a=$row1['first_name'].' ';?>
																 
																<a href="view-profile.php?uid=<?=base64_encode($row1['user_id'])?>" class="tagsrfnds11"><?=$row1['first_name']?></a>
																<?php }
																}
															
																?>

																<?php if(!empty($userrow['current_company']) or !empty($row['livelocation']) or !empty($userrow['current_city'])){?> 

																	<span class="headlocation">
																	at 
																	<span class="lcoaionname">
																	<?php if(!empty($userrow['current_company'])){?>
																		 <?=$userrow['current_company']?> 
																				<?php } if(!empty($row['livelocation'])){?>
																		<?=$row['livelocation']?>
																				<?php }elseif(!empty($userrow['current_city'])){?>
																		<?=$userrow['current_city']?>	
																			<?php }else{ ?><li></li>
																		<?php }?>
																		</span>


																		</span>


																<?php } ?>

							<div class="ed-opts">
								<a  href="javascript:void(0);" title="" class="ed-opts-open"><i class="la la-ellipsis-v"></i></a>
									<ul class="ed-options">
													<?php if($_SESSION['sess_webid']==$row['user_id']){?>
														<li><a href="javascript:void(0);" title="" data-toggle="modal" data-target="#myModal<?=$row['post_id']?>" id="editpost" editpostid="<?=$row['post_id']?>">Edit Post</a></li>
													<?php } ?>
														<li><a href="javascript:void(0);"  id="posthide" title="" hidepost="<?=$row['post_id']?>" >Hide</a></li>
													<?php if($_SESSION['sess_webid']==$row['user_id']){?>
														<li><a href="javascript:void(0);" class="deletepost" id="deletepost" title="" delpost="<?=$row['post_id']?>" >Delete</a></li>
														<?php } ?>
									</ul>
							</div>

						 </div>

	            <?php /////////////
		
				$feelingimgid=$row['feelingimgid'];
				$feelingimgidpath=$db22->getSingleResult('select imgid from '.$_TBL_FEELINGS." where subcatname='".$feelingimgid."'");
				?>

				<div class="job_descp">
				
				<?php if (!empty($row['post_title']) or !empty($feelingimgid))
					{ ?><h3 class="font-weight-500"><?php }  if (!empty($row['post_title']))
					{
					    echo $row['post_title'];
					}
					if (!empty($feelingimgid))
					{ ?>: <img src="allimg/<?=$feelingimgidpath ?>"width="20"> <?=$feelingimgid ?> <span class="bold"> <?=$row['postemos'] ?> </span> <?php
					} ?>
					<?php if (!empty($row['post_title']) or !empty($feelingimgid))
					{?>
					</h3><?php } ?> <p><?=$row['post_details'] ?> </p> <?php $ext = pathinfo($row['allpath'], PATHINFO_EXTENSION);
					if ($ext == 'mp4' or $ext == 'webm')
					{ ?><video class="video-js"controls data-setup="{}"id="my-video<?=$row['post_id'] ?>"poster="images/oceans.png"preload="auto"><source src="<?=$row['allpath'] ?>"type="video/mp4"width="100%"><source src="<?=$row['allpath'] ?>"type="video/webm"width="100%"><p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="https://videojs.com/html5-video-support/"target="_blank">supports HTML5 video</a></p></video><?php
					}
					else
					{
					    $url = '';
					    $path = '';
					    if (!empty($row['allpath']))
					    {
					        $path = explode(',', $row['allpath']);
					        $count = count($path);
					        for ($i = 0;$i <= $count;$i++)
					        { ?><img src="<?=$path[$i] ?>"width="100%"><?php
					        }
					    }
					} ?></div>


 
	            <p class="sharelinks">

	            	
	            	<?php 
														
											$lucount=$db1->getSingleResult('select count(like_id) from post_like where do_like = 1 and post_id='.$row['post_id'].' and user_id='.$_SESSION['sess_webid'] );
											if($lucount>0){
												?>
														<a href="javascript:void(0)" class="like2 text-muted  i_liked" id="like<?=$row['post_id']?>" like1="<?=$row['post_id']?>"><i class="fas fa-heart"></i> Liked</a>
														<span id="lcount<?=$row['post_id']?>" class="margin-right-10 i_liked"><?=$lcount?></span>
											<?php }else{?>	
											<a href="javascript:void(0)" class="like2 text-muted " id="like<?=$row['post_id']?>" like1="<?=$row['post_id']?>"><i class="fas fa-heart"></i> Like</a>
											<span id="lcount<?=$row['post_id']?>" class="margin-right-10"><?=$lcount?></span>
											
											<?php }?>
											 
					
	                <a href="javascript:void(0)" class="text-muted margin-right-10 showcmtBtn"><span class="fa fa-comment"></span> Comments <?=$ccount?></a>
	                <a href="#" class="text-muted margin-right-10"><span class="fa fa-share-alt"></span> Share</a>
	                <a href="#" class="text-muted"><span class="fa fa-bullhorn"></span> Report</a>

	                <span class="pull-right text-muted"> <i class="fa fa-clock-o"></i> <?php echo timeago($row['post_date']);?></span>
	            </p>

	            <div class="comments mainCommentList"  style="display: none;">
	                <div class="total"><?=$ccount?> Comments for this post</div>

	                <?php 
						 $sqlc="SELECT * from comment where post_id=".$row['post_id'];
						$dbc->query($sqlc);
						if($dbc->numRows()>0)
						{
						while($rowc=$dbc->fetchArray()){
						$username=$db1->getSingleResult('select first_name from '.$_TBL_USER." where user_id=".$rowc['user_id']);
						 'select image_id from user_profile where user_id='.$rowc['user_id'];
						$pimage=$db1->getSingleResult('select image_id from user_profile where user_id='.$rowc['user_id']);	

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


				                    <?php 


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

						           <?php }} ?>


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
													<label class="cemeraicon" for="rimageupload"><i class="fa fa-camera" aria-hidden="true"></i></label>
													<input type="file" id="rimageupload" name="rimageupload" >
													<p class="lead emoji-picker-container">
													<input type="text"  rid="<?=$rowc['c_id']?>"  placeholder="Reply on comment" name="rpostcomment" class="rp" id="rpostcomment<?=$rowc['c_id']?>" data-emojiable="true">
													</p>
													<button type="button" name="replyid" id="replyid<?=$rowc['c_id']?>" class="replyid" rid="<?=$rowc['c_id']?>">Send</button>
														</form>
													</div>
												</div>
									</div>

				                    

					                 



				                </div>
				       <?php } } ?>


					<div class="form newpostcomments">
	                    <div class="form-group">
	                       
	                        	<form id="" method="post">
													<input type="hidden" name="pid" id="pid<?=$row['post_id']?>" value="<?=$row['post_id']?>">
													<input type="hidden" name="uid" id="uid<?=$row['post_id']?>" value="<?=$_SESSION['sess_webid']?>" >
													
													<input type="hidden" name="cimage" id="cimage<?=$row['post_id']?>" value="" >
													<label class="cemeraicon"	 for="cimageupload"><i class="fa fa-camera" aria-hidden="true"></i></label>
													<input type="file" id="cimageupload" name="cimageupload" >

													<a href="javascript:void(0);" name="send_chatemoji1"  class="send_chatemoji1" id="comment1<?=$row['post_id']?>" uid="<?=$row['post_id']?>" cid="<?=$row['post_id']?>"><i class="emoji-picker-icon emoji-picker fa fa-smile-o"></i> </a>

													<div class="input-group">

														<p class="lead emoji-picker-container">
														<input type="text" cid="<?=$row['post_id']?>" placeholder="Your comment..." class="cp form-control" id="postcomment<?=$row['post_id']?>" name="postcomment<?=$row['post_id']?>" data-emojiable="true"></p>
														

													<div class="input-group-btn">
														<button type="button" id="commentid<?=$row['post_id']?>" class="commentid btn btn-default" cid="<?=$row['post_id']?>">Post Comment</button>
													</div>
													</div>

														</form> 

	                            
	                        
	                    </div>
	                </div>

	            </div>
	        </div>
	    </div>
	

<?php } ?>