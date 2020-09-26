<?php include('header.php');
include('chksession.php');
?>


<!-- Custom styles for this template -->
<link rel="stylesheet" href="css/food-style.css" >
<script type="text/javascript" src="js/jquery-2.1.0.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script><script src="jQuery.loadScroll.js"></script>



<body>


	<section class="food-head">
		<div class="container">
			<!--<div class="tophead">
				<label for="cities">Choose a city:</label>
					<select name="city" id="city">
					<option value="Lagos">Lagos</option>
					<option value="Bombuflat">Bombuflat</option>
					<option value="Garacharma">Garacharma</option>
					<option value="Port Blair">Port Blair</option>
					<option value="Rangat">Rangat</option>
					</select>		
			</div>-->
			<div class="row">
				<div class="main_pitch">
                    <h1 class="page_title">Order Online Your Food</h1>
                    <h3 class="cntct">Discover the Food according to Your Mood!
					<span class="call_desk">
					<!--Call Us<a href="tel:+01234567890" id="typewriter_num">01 234 567 890</a>-->
					</span></h3>
                </div>				
			</div>
			<div class="main-search fancy bg-holder container container1170">
				<form name="foodbakery-restaurant-form" id="frm_restaurant_arg675647" action="action_pg.php">				
					 <div class="row">
						<div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">
						<div class="field-holder">
						  <select name="city" id="city" >
							<option value="Lagos">Lagos</option>
							<option value="Bombuflat">Bombuflat</option>
							<option value="Garacharma">Garacharma</option>
							<option value="Port Blair">Port Blair</option>
							<option value="Rangat">Rangat</option>
						  </select>		
						</div>
						</div>
						
						<div class="col-lg-6 col-md-6 col-sm-5 col-xs-12">
							 <div class="field-holder">
								<input type="text" name="search_title" value="" placeholder="Search for Resturant, Cuisine or Dish">
							 </div>
						</div>
						
						<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
						  <div class="field-holder">
							<input type="submit" value="Search">
						  </div>
						</div>
					</div>
				
				</form>
			</div>
		</div>
	</section>

	<!--<section class="hwork">
            <div class="container container1170">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="main_hwork">
                            <ul>
                                <li class="order">
                                    <div class="img-icon">
									<img src="/iflex/images/food/food-symbol.jpg" alt="Order Your Food"></div>
									<h4>Order Your Food</h4>
                                </li>
                                <li class="deliver-loc">
                                    <div class="img-icon">
									<img src="/iflex/images/food/loc-symbol.jpg" alt="Delivery location"></div>
									<h4>Delivery location</h4>
                                </li>
                                <li class="deliver_pick">
                                    <div class="img-icon"> 
									<img src="/iflex/images/food/delivery-symbol.jpg" alt="Delivery or Pick up "> </div>
									<h4>Delivery or Pick up</h4>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
	</section>-->


	<section>
	<div class="food-category padding-tb">
		<div class="container container1170">
			<div class="food-box">
				<div class="food-cate-header">
				  <h3>Browse Food Category </h3>
				  <p>Select food by their category  </p>
				</div>
				<div class="food-wrapper">
				  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner">
					
						<div class="carousel-item active">
							<div class="row">
							  <div class="col-md-2">
								 <div class="item tg-food img-category">
                                  <figure>
								    <a href="restaurent-detail.php">
								    <img src="/iflex/images/food/cate-pizza.jpg" alt="image destinations"></a>
                                  </figure>
                                   <div class="tg-foodcontent">
                                       <div class="tg-foodtitle">
                                         <h3><a href="restaurent-detail.php"> Pizza</a></h3>
                                       </div>        
                                   </div>
                                </div>
							  </div>
							  <div class="col-md-2">
								 <div class="item tg-food img-category">
                                  <figure>
								    <a href="restaurent-detail.php">
								    <img src="/iflex/images/food/cate-burger.jpg" alt="image destinations"></a>
                                  </figure>
                                   <div class="tg-foodcontent">
                                       <div class="tg-foodtitle">
                                         <h3><a href="restaurent-detail.php">Burger </a></h3>
                                       </div>        
                                   </div>
                                </div>
							  </div>
							  <div class="col-md-2">
								 <div class="item tg-food img-category">
                                  <figure>
								    <a href="restaurent-detail.php">
								    <img src="/iflex/images/food/cate-cake.jpg" alt="image destinations"></a>
                                  </figure>
                                   <div class="tg-foodcontent">
                                       <div class="tg-foodtitle">
                                         <h3><a href="restaurent-detail.php"> Cake </a></h3>
                                       </div>        
                                   </div>
                                </div>
							  </div>
							  <div class="col-md-2">
								 <div class="item tg-food img-category">
                                  <figure>
								    <a href="restaurent-detail.php">
								    <img src="/iflex/images/food/cate-noodles.jpg" alt="image destinations"></a>
                                  </figure>
                                   <div class="tg-foodcontent">
                                       <div class="tg-foodtitle">
                                         <h3><a href="restaurent-detail.php"> Noodles</a></h3>
                                       </div>        
                                   </div>
                                </div>
							  </div>
							  <div class="col-md-2">
								 <div class="item tg-food img-category">
                                  <figure>
								    <a href="restaurent-detail.php">
								    <img src="/iflex/images/food/cate-juice.jpg" alt="image destinations"></a>
                                  </figure>
                                   <div class="tg-foodcontent">
                                       <div class="tg-foodtitle">
                                         <h3><a href="restaurent-detail.php">Juice </a></h3>
                                       </div>        
                                   </div>
                                </div>
							  </div>
							   <div class="col-md-2">
								 <div class="item tg-food img-category">
                                  <figure>
								    <a href="restaurent-detail.php">
								    <img src="/iflex/images/food/cate-chicken.jpg" alt="image destinations"></a>
                                  </figure>
                                   <div class="tg-foodcontent">
                                       <div class="tg-foodtitle">
                                         <h3><a href="restaurent-detail.php"> Chicken</a></h3>
                                       </div>        
                                   </div>
                                </div>
							  </div>
							  
							</div>
						</div>
						
						<div class="carousel-item">
							<div class="row">
							  <div class="col-md-2">
								 <div class="item tg-food img-category">
                                  <figure>
								    <a href="restaurent-detail.php">
								    <img src="/iflex/images/food/cate-momos.jpg" alt="image destinations"></a>
                                  </figure>
                                   <div class="tg-foodcontent">
                                       <div class="tg-foodtitle">
                                         <h3><a href="restaurent-detail.php">Momos </a></h3>
                                       </div>        
                                   </div>
                                </div>
							  </div>
							  <div class="col-md-2">
								 <div class="item tg-food img-category">
                                  <figure>
								    <a href="restaurent-detail.php">
								    <img src="/iflex/images/food/cate-biryani.jpg" alt="image destinations"></a>
                                  </figure>
                                   <div class="tg-foodcontent">
                                       <div class="tg-foodtitle">
                                         <h3><a href="restaurent-detail.php">Biryani </a></h3>
                                       </div>        
                                   </div>
                                </div>
							  </div>
							  <div class="col-md-2">
								 <div class="item tg-food img-category">
                                  <figure>
								    <a href="restaurent-detail.php">
								    <img src="/iflex/images/food/cate-pastry.jpg" alt="image destinations"></a>
                                  </figure>
                                   <div class="tg-foodcontent">
                                       <div class="tg-foodtitle">
                                         <h3><a href="restaurent-detail.php">Pastry</a></h3>
                                       </div>        
                                   </div>
                                </div>
							  </div>
							  <div class="col-md-2">
								 <div class="item tg-food img-category">
                                  <figure>
								    <a href="restaurent-detail.php">
								    <img src="/iflex/images/food/cate-mutton.jpg" alt="image destinations"></a>
                                  </figure>
                                   <div class="tg-foodcontent">
                                       <div class="tg-foodtitle">
                                         <h3><a href="restaurent-detail.php"> Mutton </a></h3>
                                       </div>        
                                   </div>
                                </div>
							  </div>
							  <div class="col-md-2">
								 <div class="item tg-food img-category">
                                  <figure>
								    <a href="restaurent-detail.php">
								    <img src="/iflex/images/food/cate-paneer.jpg" alt="image destinations"></a>
                                  </figure>
                                   <div class="tg-foodcontent">
                                       <div class="tg-foodtitle">
                                         <h3><a href="restaurent-detail.php">Paneer Masala </a></h3>
                                       </div>        
                                   </div>
                                </div>
							  </div>
							  <div class="col-md-2">
								 <div class="item tg-food img-category">
                                  <figure>
								    <a href="restaurent-detail.php">
								    <img src="/iflex/images/food/cate-sandwitch.jpg" alt="image destinations"></a>
                                  </figure>
                                   <div class="tg-foodcontent">
                                       <div class="tg-foodtitle">
                                         <h3><a href="restaurent-detail.php">Sandwitch </a></h3>
                                       </div>        
                                   </div>
                                </div>
							  </div>
							</div>
						</div>
						
					</div>
						<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
					
				  </div>
				</div>
			</div>
		</div>
	</div>
	</section>
	

	
	<section>
	<div class="page-section  top-restaurents  nopadding cs-nomargin">
		<div class="container"> 
		
		
		
            <div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="element-title align-left">
                        <h2>Top Restaurants</h2>
                         <p>Explore restaurants, bars, and cafes by locality</p>
                    </div>				
				</div>
			</div>
			<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="near-restaurant">
						<div class=" item">
						 <div class="item-inner">
						   <div class="item-img">
							<div class="item-img-info">
								<a href="restaurent-detail.php" title="Sabores European Bistro" class="product-image">
								<img src="/iflex/images/food/rest1.jpg" alt="sample dish"></a>
							</div>
							<div class="add_cart">
							 <button class="button btn-cart" type="button"><span>Order Now</span></button>
							</div>
							
							
							
							<!--<div class="wishlist-block"> <i class="fas fa-heart"></i>
								<div class="rating">
									<div class="ratings">
									  <div class="rating-box">
                                        <div class="rating" ></div>
									  </div>
									<p class="rating-links"><a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
									</div>
								</div>
							</div>-->
							</div>
							<div class="item-info">
								<div class="info-inner">
									<div class="item-title"><a href="product-detail.html" title="Sabores European Bistro">Sabores European Bistro</a> </div>
									<div class="item-content">
									  <div class="dishes"> <span><a href="#">burgers</a>, <a href="#">american</a>, <a href="#">sandwiches</a>, <a href="#">breakfast</a>, <a href="#">pizza</a></span> </div>
									</div>
								</div>
							</div>
							<div class="timimng">
								<p> Sunday - Monday <br>
								10AM - 8PM</p>
							</div>
							<div class="restuarent"><i class="fas fa-map-marker-alt"></i> 789 Main rd,
								Anytown, CA 12345 USA
							</div>
							
						 </div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="near-restaurant">
						<div class=" item">
						 <div class="item-inner">
						   <div class="item-img">
							<div class="item-img-info">
								<a href="restaurent-detail.php" title="Sabores European Bistro" class="product-image">
								<img src="/iflex/images/food/rest2.jpg" alt="sample dish"></a>
							</div>
							<div class="add_cart">
							 <button class="button btn-cart" type="button"><span>Order Now</span></button>
							</div>
							<!--<div class="wishlist-block"> <i class="fas fa-heart"></i>
								<div class="rating">
									<div class="ratings">
									  <div class="rating-box">
                                        <div class="rating" ></div>
									  </div>
									<p class="rating-links"><a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
									</div>
								</div>
							</div>-->
							</div>
							<div class="item-info">
								<div class="info-inner">
									<div class="item-title"><a href="restaurent-detail.php" title="Sabores European Bistro">Sabores European Bistro</a> </div>
									<div class="item-content">
									  <div class="dishes"> <span><a href="#">burgers</a>, <a href="#">american</a>, <a href="#">sandwiches</a>, <a href="#">breakfast</a>, <a href="#">pizza</a></span> </div>
									</div>
								</div>
							</div>
							<div class="timimng">
								<p> <span>Saturday & Sunday</span> <br>
								7AM - 7PM</p>
							</div>
							<div class="restuarent"><i class="fas fa-map-marker-alt"></i> 789 Main rd,
								Anytown, CA 12345 USA
							</div>
							
						 </div>
						</div>
					</div>		
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
						<div class="near-restaurant">
						<div class=" item">
						 <div class="item-inner">
						   <div class="item-img">
							<div class="item-img-info">
								<a href="restaurent-detail.php" title="Sabores European Bistro" class="product-image">
								<img src="/iflex/images/food/rest3.jpg" alt="sample dish"></a>
							</div>
							<div class="add_cart">
							 <button class="button btn-cart" type="button"><span>Order Now</span></button>
							</div>
							<!--<div class="wishlist-block"> <i class="fas fa-heart"></i>
								<div class="rating">
									<div class="ratings">
									  <div class="rating-box">
                                        <div class="rating" ></div>
									  </div>
									<p class="rating-links"><a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
									</div>
								</div>
							</div>-->
							</div>
							<div class="item-info">
								<div class="info-inner">
									<div class="item-title"><a href="restaurent-detail.php" title="Sabores European Bistro">Sabores European Bistro</a> </div>
									<div class="item-content">
									  <div class="dishes"> <span><a href="#">burgers</a>, <a href="#">american</a>, <a href="#">sandwiches</a>, <a href="#">breakfast</a>, <a href="#">pizza</a></span> </div>
									</div>
								</div>
							</div>
							<div class="timimng">
								<p> Sunday - Monday<br>
								24/7</p>
							</div>
							<div class="restuarent"><i class="fas fa-map-marker-alt"></i> 789 Main rd,
								Anytown, CA 12345 USA
							</div>
							
						 </div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
						<div class="near-restaurant">
						<div class=" item">
						 <div class="item-inner">
						   <div class="item-img">
							<div class="item-img-info">
								<a href="restaurent-detail.php" title="Sabores European Bistro" class="product-image">
								<img src="/iflex/images/food/rest4.jpg" alt="sample dish"></a>
							</div>
							<div class="add_cart">
							 <button class="button btn-cart" type="button"><span>Order Now</span></button>
							</div>
							<!--<div class="wishlist-block"> <i class="fas fa-heart"></i>
								<div class="rating">
									<div class="ratings">
									  <div class="rating-box">
                                        <div class="rating" ></div>
									  </div>
									<p class="rating-links"><a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
									</div>
								</div>
							</div>-->
							</div>
							<div class="item-info">
								<div class="info-inner">
									<div class="item-title"><a href="restaurent-detail.php" title="Sabores European Bistro">Sabores European Bistro</a> </div>
									<div class="item-content">
									  <div class="dishes"> <span><a href="#">burgers</a>, <a href="#">american</a>, <a href="#">sandwiches</a>, <a href="#">breakfast</a>, <a href="#">pizza</a></span> </div>
									</div>
								</div>
							</div>
							<div class="timimng">
								<p> Tuesday - Saturday <br>
								6PM - 11PM</p>
							</div>
							<div class="restuarent"><i class="fas fa-map-marker-alt"></i> 789 Main rd,
								Anytown, CA 12345 USA
							</div>
							
						 </div>
						</div>
					</div>
			
				</div>
			</div>

							
			</div>
		</div>
	
	</section>


	<section>
		<div  class="popular">
            <div class="container  container1170">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="main_popular">	
							<h2 class="title">Popular Our Food</h2>
							<p class="desc">Choose from over 30 craveable toppings to make your perfect Food.
                                    <br> Don’t love what you ordered? Let us know. We’re all about second chances.</p>
							<div class="p_card">	
							  <div class="row">	
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								  <ul>
                                    <li>
                                        <div class="card">
                                             <div class="C_img"> <img src="/iflex/images/food/popular-img1.jpg" class="absoImg" alt=""> </div>
                                               <div class="C_desc">
                                                 <h3 class="title">Mexican Pizza</h3>
                                                 <p class="desc">Our standard “Mexican” is loaded</p>
                                                   <div class="price_block">
                                                    <div class="price">$ 10.00</div>
                                                     <a href="#" class="card_btn">Add to cart</a>
                                                   </div>
                                               </div>
                                        </div>
                                    </li>
                                  </ul>								
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								  <ul>
                                    <li>
                                        <div class="card">
                                             <div class="C_img"> <img src="/iflex/images/food/popular_img2.jpg" class="absoImg" alt=""> </div>
                                               <div class="C_desc">
                                                 <h3 class="title">Broadway</h3>
                                                 <p class="desc">Double Bacon Cheese Burger, Lettuce. </p>
                                                   <div class="price_block">
                                                    <div class="price">$ 9.89</div>
                                                     <a href="#" class="card_btn">Add to cart</a>
                                                   </div>
                                               </div>
                                        </div>
                                    </li>
                                  </ul>								
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								  <ul>
                                    <li>
                                        <div class="card">
                                             <div class="C_img"> <img src="/iflex/images/food/popular_img3.jpg" class="absoImg" alt=""> </div>
                                               <div class="C_desc">
                                                 <h3 class="title">Garbage Salad</h3>
                                                 <p class="desc">Everything includes, tuscan spring mix </p>
                                                   <div class="price_block">
                                                    <div class="price">$ 4.10</div>
                                                     <a href="#" class="card_btn">Add to cart</a>
                                                   </div>
                                               </div>
                                        </div>
                                    </li>
                                  </ul>								
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								  <ul>
                                    <li>
                                        <div class="card">
                                             <div class="C_img"> <img src="/iflex/images/food/popular_img4.jpg" class="absoImg" alt=""> </div>
                                               <div class="C_desc">
                                                 <h3 class="title">Cheese Fries</h3>
                                                 <p class="desc">Our fries are prepared in batches</p>
                                                   <div class="price_block">
                                                    <div class="price">$ 10.00</div>
                                                     <a href="#" class="card_btn">Add to cart</a>
                                                   </div>
                                               </div>
                                        </div>
                                    </li>
                                  </ul>								
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								  <ul>
                                    <li>
                                        <div class="card">
                                             <div class="C_img"> <img src="/iflex/images/food/popular_img5.jpg" class="absoImg" alt=""> </div>
                                              <div class="C_desc">
                                                 <h3 class="title">Coca-Cola</h3>
                                                 <p class="desc">Coca-Cola is the most popular drink</p>
                                                   <div class="price_block">
                                                    <div class="price">$ 10.00</div>
                                                     <a href="#" class="card_btn">Add to cart</a>
                                                   </div>
                                               </div>
                                        </div>
                                    </li>
                                  </ul>								
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								  <ul>
                                    <li>
                                        <div class="card">
                                             <div class="C_img"> <img src="/iflex/images/food/popular_img6.jpg" class="absoImg" alt=""> </div>
                                               <div class="C_desc">
                                                 <h3 class="title">Garlic Bread</h3>
                                                 <p class="desc">Butter, olive oil, garlic, crusty bread</p>
                                                   <div class="price_block">
                                                    <div class="price">$ 5.00</div>
                                                     <a href="#" class="card_btn">Add to cart</a>
                                                   </div>
                                               </div>
                                        </div>
                                    </li>
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

	<section class="order-online section-padding">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6">
					<div class="order-now">
						<h2 class="wow slideInDown" >Order Now</h2>
						<h6>Opening Hours</h6>
						<p>Sunday-Tuesday 10.00 - 23.00</p>
						<p>Friday-Saturday 09.00 - 24.00</p>
						<a href="#contact" class="boxed-btn">Order Online</a>
					</div>
				</div>
				<div class="col-lg-6 col-md-6">
					<div class="order-now-right">
						<h2>...and find out why we are named the Best!</h2>
					</div>
				</div>
			</div>
		</div>
	
	</section>



<script>
window.addEventListener('scroll', function() {
  document.getElementById('showScroll').innerHTML = window.pageYOffset + 'px';
});

</script>


</body>




<?php include('footer.php') ?>