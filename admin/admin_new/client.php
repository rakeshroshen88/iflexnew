<?php include("header.php");
$mod=$_REQUEST['mod'];
$firstname=$_REQUEST['firstname'];
$id=$_REQUEST['id'];
$act=$_REQUEST['act'];
$stat=$_REQUEST['stat'];
$rec=$_REQUEST['rec'];
$qryStr="firstname=$firstname&mod=$mod&rec=$rec";
if($act=='dac')
	{
		if($stat=='0')
			$stat='1';
		else
			$stat='0';
		$sql="UPDATE admin SET adminstatus= '$stat' WHERE id='$id'";
		$db->query($sql);
		$errMsg='<br><b>Update Successfully!</b><br>';
	}

if($act=='del')
	{
		
		 $sql="DELETE FROM admin WHERE id='$id'";
		$db->query($sql);
		$errMsg='<br><b>Deleted Successfully!</b><br>';
	}

?>
<script>
function deladmin(id)
{
	if(confirm("Are you sure to delete?"))
	{
		location.href="https://orangestate.ng/admin/admin_new/client.php?act=del&id="+id;
	}
}
</script>
    <div class="app-heading-container app-heading-bordered bottom">
        <ul class="breadcrumb">
            <li><a href="#">Dashboard</a></li>
            
            <li class="active">Advert</li>
        </ul>
    </div>

    <!-- START PAGE CONTAINER -->
    <div class="page_container">
        <div class="container">

            <div class="row">
                  <div class="col-md-12">
                      <div class="block block-condensed">
                            <!-- START HEADING -->
                            <div class="app-heading app-heading-small">
                                <div class="title">
                                    <h5>Manage Advert</h5>
                                    <p>List of all Advert</p>
                                </div>

                                <div class="heading-elements">
                                    <div class="btn-group">
                                        <button class="btn btn-primary btn-icon-fixed dropdown-toggle" data-toggle="dropdown"><span class="fa fa-bars"></span> Export</button>
                                        <ul class="dropdown-menu dropdown-left">
                                             
                                            <li><a href="#" onClick ="$('#sortable-data').tableExport({type:'excel',escape:'false'});"><img src='img/icons/xls.png' width="24"> XLS</a></li>
                                             
                                        </ul>
                                    </div> 
                                </div>


                            </div>
                            <!-- END HEADING -->

                            <div class="block-content">

                                <table class="table table-striped table-bordered datatable-extended" id="sortable-data">
                                    <thead>
                                        <tr>										<th>Sl No #</th>
                                            <th>Name</th>
											<th>Email</th>
                                            <th>Date</th>
                                            
                                          
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
<?php
$ct=1;
 $sql="SELECT * from admin where usertype='restaurant' order by id desc";
	$db->query($sql);
	$total_records=$db->numRows();
	$page=new Page;
	$page->show_disabled_links=true;
	$page->set_page_data($_PAGE,$total_records,50,10,true,true,true);
	$page->set_qry_string($qryStr);
	$db->query($page->get_limit_query($sql));
	
	if($db->numRows()>0)
		{
	while($row=$db->fetchArray()){
	/* $num=$db1->getSingleResult('select count(*) from '.$_TBL_USER." where id=".$row['userid']); */
	
$date=explode('-',$row['admindate']);
$st=mktime(0,0,0,$date[1],$date[2],$date[0]);	
	
		
?>             <tr>
						<td><?=$ct?></td>
                        <td> <a href="//orangestate.ng/admin/admin_new/add_all_user.php?act=edit&id=<?=$row['id']?>"><?=$row['adminname']?></a></td>
							
                        <td> <?=$row['adminemail']?></td>
						<td> <?php echo date('d M,Y',$st);?></td>
                    <td> <a href='//orangestate.ng/admin/admin_new/client.php?act=dac&id=<?=$row['id']?>&stat=<?=$row['adminstatus']?>'><?=$row['adminstatus']==0?'Deactive':'Active'?></a> </td>
                           
                        <td > <a href="//orangestate.ng/admin/admin_new/restaurants_list.php?act=edit&uid=<?=$row['id']?>"> <span class="glyphicon glyphicon-edit" title="Edit"></span> &nbsp;<a href='javascript:deladmin("<?=$row['id']?>")'> <span class="glyphicon glyphicon-trash" title="Delete"></span>						</a>
						</td>
                     </tr>

								
                                      
	<?php $ct=$ct+1; } } ?>  
                                    </tbody>
                                </table>

                            </div>

                            </div>
                  


                  </div>  
 
            </div>

        </div> 
        <!-- END PAGE CONTAINER -->
    </div>
    <!-- END page_container -->

    <?php include("footer.php") ?>