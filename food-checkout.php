<?php include('header.php');
include('chksession.php');
?>


<!-- Custom styles for this template -->
<link rel="stylesheet" href="css/food-style.css" >



<body>

<section>
	  <div class="order-online-now">
		<div class="container container1170">
			<div class="row">
				<div class="col-md-9 col-xs-12">
					<div class="bg-white rounded shadow-sm p-4 mb-4 add-block">
						<h4 class="mb-1">Choose a delivery address</h4>
						<h6 class="mb-3 text-black-50">Multiple addresses in this location</h6>
						<div class="row">
							<div class="col-md-6">
								<div class="bg-white card addresses-item mb-4 border border-success">
									<div class="gold-members p-4">
									  <div class="media">
										<div class="mr-3"><i class="fa fa-home icon-size" aria-hidden="true"></i></div>
											<div class="media-body">
											<h6 class="mb-1 text-black">Home</h6>
											<p class="text-black">291/d/1, 291, Jawaddi Kalan, Ludhiana, Punjab 141002, India</p>
											<p class="mb-0 text-black font-weight-bold add-btn"><a class="btn btn-sm btn-success mr-2" href="#"> DELIVER HERE</a>
											<span>30MIN</span></p>
										</div>
									  </div>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="bg-white card addresses-item mb-4">
									<div class="gold-members p-4">
										<div class="media">
											<div class="mr-3"><i class="fa fa-briefcase icon-size" aria-hidden="true"></i></div>
												<div class="media-body">
												<h6 class="mb-1 text-secondary">Work</h6>
												<p>NCC, Model Town Rd Town, Ludhiana, Punjab 141002, India</p>
												<p class="mb-0 text-black font-weight-bold add-btn"><a class="btn btn-sm btn-secondary mr-2" href="#"> DELIVER HERE</a>
												<span>40MIN</span></p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-6">
								<div class="bg-white card addresses-item">
									<div class="gold-members p-4">
										<div class="media">
										<div class="mr-3"><i class="fas fa-map-marker-alt icon-size"></i></div>
										  <div class="media-body">
											<h6 class="mb-1 text-secondary">Other</h6>
											<p>Delhi Bypass Rd, Jawaddi Taksal, Ludhiana, Punjab 141002, India</p>
											<p class="mb-0 text-black font-weight-bold add-btn"><a class="btn btn-sm btn-secondary mr-2" href="#"> DELIVER HERE</a>
											<span>45MIN</span></p>
										  </div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="bg-white card addresses-item">
									<div class="gold-members p-4">
										<div class="media">
										  <div class="mr-3"><i class="fas fa-map-marker-alt icon-size"></i></div>
											<div class="media-body">
											<h6 class="mb-1 text-secondary">Other</h6>
											<p>Pritm Nagar, Model Town, Ludhiana, Punjab 141002, India</p>
											<p class="mb-0 text-black font-weight-bold add-btn"><a data-toggle="modal" data-target="#add-address-modal" class="btn btn-secondary btn-sm btn-primary mr-2" href="#"> ADD NEW ADDRESS</a></p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				
					<div class="pt-2"></div>
					
					<div class="bg-white rounded shadow-sm p-4 osahan-payment add-block">
<h4 class="mb-1">Choose payment method</h4>
<h6 class="mb-3 text-black-50">Credit/Debit Cards</h6>
<div class="row">
<div class="col-sm-4 pr-0">
<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
<a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true"><i class="fa fa-credit-card" aria-hidden="true"></i>Credit/Debit Cards</a>
<a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false"><i class="fa fa-credit-card-alt" aria-hidden="true"></i> Food Cards</a>
<a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false"><i class="fa fa-id-card" aria-hidden="true"></i> Credit</a>
<a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false"><i class="fa fa-bank"></i> Netbanking</a>
<a class="nav-link" id="v-pills-cash-tab" data-toggle="pill" href="#v-pills-cash" role="tab" aria-controls="v-pills-cash" aria-selected="false"><i class="fas fa-coins"></i> Pay on Delivery</a>
</div>
</div>
<div class="col-sm-8 pl-0">
<div class="tab-content h-100" id="v-pills-tabContent">
<div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
<h6 class="mb-3 mt-0 mb-3 ordr-payment-mthd">Add new card</h6>
<p>WE ACCEPT <span class="osahan-card">
<i class="fa fa-cc-paypal" ></i> <i class="fa fa-cc-mastercard"></i> <i class="fa fa-cc-visa"></i> <i class="fa fa-cc-discover"></i> <i class="fa fa-cc-amex"></i> <i class="fa fa-cc-jcb"></i> <i class="fa fa-cc-diners-club"></i>
</span>
</p>
<form>
<div class="form-row">
<div class="form-group col-md-12">
<label for="inputPassword4">Card number</label>
<div class="input-group">
<input type="number" class="form-control" placeholder="Card number">
<div class="input-group-append">
<button class="btn btn-outline-secondary" type="button" id="button-addon2"><i class="fas fa-money-check" aria-hidden="true"></i></button>
</div>
</div>
</div>
<div class="form-group col-md-8">
<label>Valid through(MM/YY)
</label>
<input type="number" class="form-control" placeholder="Enter Valid through(MM/YY)">
</div>
<div class="form-group col-md-4">
<label>CVV
</label>
<input type="number" class="form-control" placeholder="Enter CVV Number">
</div>
<div class="form-group col-md-12">
<label>Name on card
</label>
<input type="text" class="form-control" placeholder="Enter Card number">
</div>
<div class="form-group col-md-12">
<div class="custom-control custom-checkbox">
<input type="checkbox" class="custom-control-input" id="customCheck1">
<label class="custom-control-label" for="customCheck1">Securely save this card for a faster checkout next time.</label>
</div>
</div>
<div class="form-group col-md-12 mb-0">
<a href="thanks.html" class="btn btn-success btn-block btn-lg checkout-btn">PAY $1329
<i class="fa fa-arrow-right" aria-hidden="true"></i></a>
</div>
</div>
</form>
</div>
<div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
<h6 class="mb-3 mt-0 mb-3 ordr-payment-mthd">Add new food card</h6>
<p>WE ACCEPT <span class="osahan-card">
<i class="fa fa-cc-stripe"></i>  <i class="fa fa-google-wallet"></i> <i class="fa fa-paypal"></i> 
</span>
</p>
<form>
<div class="form-row">
<div class="form-group col-md-12">
<label for="inputPassword4">Card number</label>
<div class="input-group">
<input type="number" class="form-control" placeholder="Card number">
<div class="input-group-append">
<button class="btn btn-outline-secondary" type="button" id="button-addon2"><i class="fas fa-money-check" aria-hidden="true"></i></button>
</div>
</div>
</div>
<div class="form-group col-md-8">
<label>Valid through(MM/YY)
</label>
<input type="number" class="form-control" placeholder="Enter Valid through(MM/YY)">
</div>
<div class="form-group col-md-4">
<label>CVV
</label>
<input type="number" class="form-control" placeholder="Enter CVV Number">
</div>
<div class="form-group col-md-12">
<label>Name on card
</label>
<input type="text" class="form-control" placeholder="Enter Card number">
</div>
<div class="form-group col-md-12">
<div class="custom-control custom-checkbox">
<input type="checkbox" class="custom-control-input" id="customCheck1">
<label class="custom-control-label" for="customCheck1">Securely save this card for a faster checkout next time.</label>
</div>
</div>
<div class="form-group col-md-12 mb-0">
<a href="thanks.html" class="btn btn-success btn-block btn-lg checkout-btn">PAY $1329
<i class="fa fa-arrow-right" aria-hidden="true"></i></a>
</div>
</div>
</form>
</div>
<div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
<div class="border shadow-sm-sm p-4 d-flex align-items-center bg-white mb-3">
<i class="fab fa-apple-pay credit"></i>
 <div class="d-flex flex-column">
<h5 class="card-title">Apple Pay</h5>
<p class="card-text">Apple Pay lets you order now &amp; pay later at no extra cost.</p>
<a href="#" class="card-link font-weight-bold link-clr">LINK ACCOUNT <i class="icofont-link-alt"></i></a>
</div>
</div>
<div class="border shadow-sm-sm p-4 d-flex bg-white align-items-center mb-3">
<i class="fa fa-cc-paypal credit"></i> 
<div class="d-flex flex-column">
<h5 class="card-title">Paypal</h5>
<p class="card-text">Paypal lets you order now &amp; pay later at no extra cost.</p>
<a href="#" class="card-link font-weight-bold link-clr">LINK ACCOUNT <i class="icofont-link-alt"></i></a>
</div>
</div>
<div class="border shadow-sm-sm p-4 d-flex bg-white align-items-center">
<i class="fa fa-cc-diners-club credit"></i>
<div class="d-flex flex-column">
<h5 class="card-title">Diners Club</h5>
<p class="card-text">Diners Club lets you order now &amp; pay later at no extra cost.</p>
<a href="#" class="card-link font-weight-bold link-clr">LINK ACCOUNT <i class="icofont-link-alt"></i></a>
</div>
</div>
</div>
<div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
<h6 class="mb-3 mt-0 mb-3 ordr-payment-mthd">Netbanking</h6>
<form>
<div class="btn-group btn-group-toggle" data-toggle="buttons">
<label class="btn btn-outline-primary active">
<input type="radio" name="options" id="option1" autocomplete="off" checked=""> HDFC <i class="icofont-check-circled"></i>
</label>
<label class="btn btn-outline-primary">
<input type="radio" name="options" id="option2" autocomplete="off"> ICICI <i class="icofont-check-circled"></i>
</label>
<label class="btn btn-outline-primary">
<input type="radio" name="options" id="option3" autocomplete="off"> AXIS <i class="icofont-check-circled"></i>
</label>
</div>
<hr>
<div class="form-row">
<div class="form-group col-md-12">
<label>Select Bank
</label>
<br>
<select class="custom-select form-control select2-hidden-accessible" data-select2-id="1" tabindex="-1" aria-hidden="true">
<option selected="" data-select2-id="3">Bank</option>
<option value="1">One</option>
<option value="2">Two</option>
<option value="3">Three</option>
</select>
</div>
 <div class="form-group col-md-12 mb-0">
<a href="thanks.html" class="btn btn-success btn-block btn-lg checkout-btn">PAY $1329
<i class="fa fa-arrow-right" aria-hidden="true"></i></a>
</div>
</div>
</form>
</div>
<div class="tab-pane fade" id="v-pills-cash" role="tabpanel" aria-labelledby="v-pills-cash-tab">
<h6 class="mb-3 mt-0 mb-3 ordr-payment-mthd">Cash</h6>
<p>Please keep exact change handy to help us serve you better</p>
<hr>
<form>
<a href="thanks.html" class="btn btn-success btn-block btn-lg checkout-btn">PAY $1329
<i class="fa fa-arrow-right" aria-hidden="true"></i></a>
</form></div>

</div>
</div>
</div>
</div>
					
				</div>
				
				
			<!--  right-sidebar starts-->
			
				<div class="col-md-3 col-xs-12">
					<div class="spacer-1 medium hidden-lg hidden-md"></div>
						<p class="summary">Summary </p>

					<div class="side-block-order border-radius-4 ordr-head">
						<p>ORDER FROM</p>
 						<h5 class="rest-name"> Food Panda Restaurent<br>
						<span> <i class="fas fa-map-marker-alt"></i>  789 Main rd,Anytown, CA 12345 USA</span></h5>
						<div class="side-block-order-content">
							<ul class="list-unstyled order-item-list">
								<li class="clearfix">
									<div class="pull-left">
									  <div class="update-product">
										<a title="Add a product" href="#"><i class="fa fa-plus-circle"></i></a>
										<a title="Minus a product" href="#"><i class="fa fa-minus-circle"></i></a>
									  </div>
									</div>
									<div class="cart-product-name pull-left">Green Salad Green Salad Green Salad</div>
										<div class="cart-product-price pull-right text-spl-color">$2.99</div>
										<div class="cart-product-remove"><a title="Remove a product" href="#"><i class="fa fa-trash"></i></a>
									</div>
								</li>
								<li class="clearfix">
									<div class="pull-left">
									  <div class="update-product">
										<a title="Add a product" href="#"><i class="fa fa-plus-circle"></i></a>
										<a title="Minus a product" href="#"><i class="fa fa-minus-circle"></i></a>
									  </div>
									</div>
									<div class="cart-product-name pull-left">Cheese and Tomato</div>
									<div class="cart-product-price pull-right text-spl-color">$8.45</div>
									<div class="cart-product-remove"><a title="Remove a product" href="#"><i class="fa fa-trash"></i></a>
									</div>
								</li>
								<li class="clearfix">
									<div class="pull-left">
									  <div class="update-product">
										<a title="Add a product" href="#"><i class="fa fa-plus-circle"></i></a>
										<a title="Minus a product" href="#"><i class="fa fa-minus-circle"></i></a>
									  </div>
									</div>
									<div class="cart-product-name pull-left">Cheesy Nachos</div>
									<div class="cart-product-price pull-right text-spl-color">$7.99</div>
									<div class="cart-product-remove"><a title="Remove a product" href="#"><i class="fa fa-trash"></i></a>
									</div>
								</li>
							</ul>
										<!-- Order Item List Ends -->
										<!-- Order Item Total Starts -->
										
									</div>
					</div>
					
					<div class="side-block-order mb-2 rounded p-2 clearfix">
						<div class="input-group input-group-sm mb-2">
							<input type="text" class="form-control" placeholder="Enter promo code">
							<div class="input-group-append">
								<button class="btn btn-primary apply-clr" type="button" id="button-addon2"><!--<i class="fal fa-badge-percent"></i>-->APPLY</button>
							</div>
						</div>
						
					</div>
					
					<div class="side-block-order mb-2 rounded p-2 clearfix">
					<ul class="order-placed order-item-total total-amt">
										<li class="left-side-total">Item Total :</li>
										<li class="right-side-total">$19.43</li>
											<li class="left-side-total">Restaurent Charges :</li>
											<li class="right-side-total">$6.00</li>
											<li class="left-side-total">Delivery Charges :</li>
											<li class="right-side-total">$5.00</li>
											<hr>
											<li class="left-side-total">To Pay :</li>
											<li class="right-side-total">$30.43</li>
										</ul>
										<!-- Order Item Total Ends -->
										<div class="cfo-checkoutarea">
											<a href="food_order_billslip.php" class="btn btn-primary btn-block checkout-btn"> Place Order </a>
										</div>
					</div>
					
				</div>
			
			
			</div>
		</div>
	  </div>

</body>


<div class="col-md-6">
			<div class="bg-white card addresses-item mb-4">
				<div class="gold-members p-4">
					<div class="media">
						<div class="mr-3"><i class="fa fa-briefcase icon-size" aria-hidden="true"></i></div>
							<div class="media-body">
							<h6 class="mb-1 text-secondary">Work</h6>
							<p>NCC, Model Town Rd Town, Ludhiana, Punjab 141002, India</p>
							<p class="mb-0 text-black font-weight-bold add-btn"><a class="btn btn-sm btn-secondary mr-2" href="#"> DELIVER HERE</a>
							<span>40MIN</span></p>
							</div>
					</div>
				</div>
			</div>
		</div>


<?php include('footer.php') ?>