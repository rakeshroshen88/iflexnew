<?php include('header.php');
include('chksession.php');
?>


<!-- Custom styles for this template -->
<link rel="stylesheet" href="css/food-style.css" >


<body>

<section>
	<div class="container container1170">
	<div class="shadow p-3 bg-white rounded mt-4 mb-4">
	  
	  <div class="row">
		<div class="col-md-12 col-xs-12  bill-slip">	  
			<h2 class="mb-1"><span> Thank you so much for your order </span><i class="fa fa-check" aria-hidden="true"></i></h2>
			<h6 class="text-black-50">We really appreciate it!</h6>
			<p class="text-dark"> Enjoy 20% off on your next order with cou[pon code IFLEX20. Enjoy!</p>
			<div class="delivery-img"><img src="/iflex/images/food/delivery-boy.jpg" alt=""></div>
		</div>
	  </div>
	 
	  
	  <div class="row ordr-summ">
		<div class="col-md-6">
			<div class="bg-white card addresses-item mb-4">
				<div class="gold-members p-4">
					<div class="media">
						<div class="media-body">
							<h6 class="mb-3 text-secondary"> Order Summary </h6>
							<ul class="order-placed order-item-total">
								<li class="left-side-total">Order Date :</li>
								<li class="right-side-total">Sept 16,2020</li>
								<li class="left-side-total">Order # :</li>
								<li class="right-side-total">680</li>
								<li class="left-side-total">Order Total :</li>
								<li class="right-side-total">$30.43</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="col-md-6">
			<div class="bg-white card addresses-item mb-4">
				<div class="gold-members p-4">
					<div class="media">
							<div class="media-body">
							<h6 class="mb-3 text-secondary"> Delivery Address </h6>
							<p class="add">  789 Main Road, <br>Anytown, <br>CA 12345 USA</p>
							</div>
					</div>
				</div>
			</div>
		</div>		
	  </div>		
	
	  <div class="bg-white card mb-4">	
			<div class="row item-summry">
				<div class="col-md-8 col-xs-12">
					<p>Items Ordered</p>
				</div>		
				<div class="col-md-2 col-xs-12">
					<p>QTY</p>				</div>
				<div class="col-md-2 col-xs-12">
					<p class="text-center">Price</p>
				</div>
			</div>
			<hr>
			<div class="row">
				<div class="col-md-8 col-xs-12">
					<div class="item-ordr pull-left">Green Salad Green Salad Green Salad</div>
				</div>
				<div class="col-md-2 col-xs-12">
					<div class="item-ordr"> 1</div>
				</div>
				<div class="col-md-2 col-xs-12">
					<div class="item-ordr text-center text-spl-color">$2.99</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-md-8 col-xs-12">
					<div class="item-ordr pull-left">Cheese and Tomato</div>
				</div>
				<div class="col-md-2 col-xs-12">
					<div class="item-ordr">2</div>
				</div>
				<div class="col-md-2 col-xs-12">
					<div class="item-ordr text-center text-spl-color">$8.45</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-md-8 col-xs-12">
					<div class="item-ordr pull-left">Cheesy Nachos</div>
				</div>
				<div class="col-md-2 col-xs-12">
					<div class="item-ordr"> 1</div>
				</div>
				<div class="col-md-2 col-xs-12">
					<div class="item-ordr text-center text-spl-color">$7.99</div>
				</div>
			</div>
			
				<hr>
			<div class="row">
				<div class="col-md-9 col-xs-12">
					<div class="item-ordr pull-right amt-det">Sub Total :</div>
				</div>
				<div class="col-md-3 col-xs-12">
					<div class="item-ordr pull-right text-dark">$19.43</div>					
				</div>
			</div>
			<div class="row">
				<div class="col-md-9 col-xs-12">
					<div class="item-ordr pull-right amt-det">Restaurent Charges :</div>
				</div>
				<div class="col-md-3 col-xs-12">
					<div class="item-ordr pull-right text-dark">$06.00</div>					
				</div>
			</div>
			<div class="row">
				<div class="col-md-9 col-xs-12">
					<div class="item-ordr pull-right amt-det">Delivery Charges :</div>
				</div>
				<div class="col-md-3 col-xs-12">
					<div class="item-ordr pull-right text-dark">$05.00</div>					
				</div>
			</div>
						<div class="row">
				<div class="col-md-9 col-xs-12">
					<div class="item-ordr pull-right amt-det">Net Amount Payble :</div>
				</div>
				<div class="col-md-3 col-xs-12">
					<div class="item-ordr pull-right text-dark">$30.43</div>					
				</div>
			</div>
	  </div>
		
		
	  <div class="row">
		<div class="col-md-12">
			<div class="bg-white card addresses-item mb-4">
				<div class="gold-members p-4">
					<div class="media">
						<div class="media-body">
							<h6 class="mb-3 text-secondary"> Payment Mode </h6>
							<ul class="order-placed order-item-total">
								<li class="left-side-total">Payment Mode :</li>
								<li class="right-side-total">COD</li>	
								<li class="left-side-total">Payment Status :</li>
								<li class="right-side-total">Pending</li>	
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		
	  </div>
				
	
	</div>	
	</div>
	
</section>


</body>



<?php include('footer.php') ?>