<?php
if (isset ($_POST["limit"], $_POST["start"]))
{
	$connect = mysqli_connect("localhost", "root", "", "testing);
	$query = SELECT * FROM tbl_posts ORDER BY post_id DESC LIMIT ".$_POST["start"].", ".$_POST["limit"]."";
	$result = mysqli_query($connect, $query);
	while($row = mysqli_fetch_array($result))
	{
		echo'
		<h3> '.$row["post_title"].'</h3>
		<p>'.$row["post_description"].'</p>
		<p class="text-muted" align="right">By - '.$row["post_author"].' </p>
		<hr/>
		';
		
	}

}

?>


$(document).ready(function(){
	var limit = 7;
	var start = 0;
	var action = 'inactive'
	function load_more_data(limit,start)
	{
		$.ajax({
			url: "fetch.php"
			method : "POST",
			data: {limit:limit, start:start},
			cache: false,
			success: function(data)
			{
				$('#load_data').append(data);
				if (data == '')
				{
					$('#load_data_msg').html("<button type='button' class='btn btn-info'> No Data Found </button>);
					action = 'active';
				}
				else
				{
					$('#load_data_msg').html("<button type='button' class='btn btn-info'> Please Wait... </button>);
					action = 'inactive';
				}
			}
		});
	}
	if (action = 'inactive')
	{
		action = "active";
		load_more_data(limit,start);
	}
});
