<?php include('header.php');
include('chksession.php');
?>

<!-- Custom styles for this template -->
<link rel="stylesheet" href="css/property-style.css" >
<link rel="stylesheet" href="css/font-awesome.min.css" >




<section class="bannerbg">
    <div class="container">
		
			<div class="tophead">
				<label for="cities">Choose a city:</label>
					<select name="city" id="city">
					<option value="Lagos">Lagos</option>
					<option value="Bombuflat">Bombuflat</option>
					<option value="Garacharma">Garacharma</option>
					<option value="Port Blair">Port Blair</option>
					<option value="Rangat">Rangat</option>
					</select>
		
			</div>
			
            <div class="row">                   
				<div class="banner-w3lstexts text-white text-center">
					<h1>iflex</h1>
					<h4 class="text-uppercase mt-md-3 mt-2 mb-md-4 mb-3">PROPERTIES</h4>
					<p class="text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam. Sed commodo nibh ante facilisis bibendum dolor feugiat at.</p>
					<a href="property-listing.php" class="banner-button btn mt-md-5 mt-4">Know More</a>
				</div>			
            </div>			
	</div>
</section>

<section class="search-property">
<div class="serach-w3agile py-5">
		<div class="container py-xl-4 py-lg-3">
			<h3 class="title-w3ls mb-md-5 mb-4 font-weight-bold text-center">Find Your Property</h3>
			<div class="place-grids">
				<form action="#" method="post">
					<div class="row">
						<div class="col-sm-3 col-6 place-grid">
							<h5>Select City</h5>
							<select class="sel" required="">
								<option value="">City 1</option>
								<option value="">City 2</option>
								<option value="">City 3</option>
								<option value="">City 4</option>
								<option value="">City 5</option>
								<option value="">City 6</option>
							</select>
						</div>
						<div class="col-sm-3 col-6 place-grid">
							<h5>Property type</h5>
							<select class="sel" required="">
								<option value="">Select</option>
								<option value="">Builder Flat</option>
								<option value="">Plot</option>
								<option value="">House/Villa</option>
								<option value="">Office Space</option>
								<option value="">Terrace</option>
								<option value="">Duplex</option>
							</select>
						</div>
						<div class="col-sm-3 col-6 place-grid mt-sm-0 mt-3">
							<h5>Type</h5>
							<select class="sel" required="">
								<option value="">BHK</option>
								<option value="">1BHK</option>
								<option value="">2BHK</option>
								<option value="">3BHK</option>
								<option value="">4BHK</option>
								<option value="">5BHK</option>
							</select>
						</div>
						<div class="col-sm-3 col-6 place-grid">
							<input type="submit" value="Search">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>

<section class="house-scene">
<div class="middle-w3l">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-6 col-md-4 button">

				</div>
				<div class="col-lg-6 col-md-8 left-build-wthree py-5 px-sm-5 px-4">
					<div class="py-xl-5 py-lg-3 px-xl-4">
						<h4>A Beautiful Beach House</h4>
						<h6 class="mt-3 mb-xl-5 mb-4">Excepteur sint occaecat</h6>
						<p>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
							ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
						<ul class="list-beach mt-lg-5 mt-4">
							<li>
								<div class="row">
									<div class="col-1 text-center">
										<i class="fas fa-hand-point-right"></i>
									</div>
									<div class="col-10">
										<p>Totam rem aperiamet quasi architecto beatae vitae dicta sunt explicabo beatae vitae dicta.</p>
									</div>
								</div>
							</li>
							<li class="my-3">
								<div class="row">
									<div class="col-1 text-center">
										<i class="fas fa-hand-point-right"></i>
									</div>
									<div class="col-10">
										<p>A rchitecto beatae Totam rem aperiamet quasi architecto beatae vitae dicta sunt explicabo.</p>
									</div>
								</div>
							</li>
							<li>
								<div class="row">
									<div class="col-1 text-center">
										<i class="fas fa-hand-point-right"></i>
									</div>
									<div class="col-10">
										<p>Dicta sunt explicabo Totam rem aperiamet quasi architecto beatae vitae dicta sunt explicabo.</p>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="property-type">
<div class="site-section site-section-sm">
<div class="container">
<div class="col-lg-12 left-build-wthree aboutright-agilewthree mt-0">
<div class="row mb-5">
<div class="col-12">
<div class="site-section-title">
<h2>Type of Properties for You</h2>
</div>
</div>
</div>
<div class="row mb-5">
<div class="col-md-6 col-lg-4 mb-4">
<a href="property-detail.php" class="prop-entry d-block">
<figure>
<img src="images/img_1.jpg" alt="Image" class="img-fluid">
</figure>
<div class="prop-text">
<div class="inner">
<span class="price rounded">$1,930,000</span>
<h3 class="title">853 S Lucerne Blvd</h3>
<p class="location">Los Angeles, CA 90005</p>
</div>
<!-- <div class="prop-more-info"> -->
<!-- <div class="inner d-flex"> -->
<!-- <div class="col"> -->
<!-- <span>Area:</span> -->
<!-- <strong>240m<sup>2</sup></strong> -->
<!-- </div> -->
<!-- <div class="col"> -->
<!-- <span>Beds:</span> -->
<!-- <strong>2</strong> -->
<!-- </div> -->
<!-- <div class="col"> -->
<!-- <span>Baths:</span> -->
<!-- <strong>2</strong> -->
<!-- </div> -->
<!-- <div class="col"> -->
<!-- <span>Garages:</span> -->
<!-- <strong>1</strong> -->
<!-- </div> -->
<!-- </div> -->
<!-- </div> -->
</div>
</a>
</div>
<div class="col-md-6 col-lg-4 mb-4">
<a href="#" class="prop-entry d-block">
<figure>
<img src="images/img_2.jpg" alt="Image" class="img-fluid">
</figure>
<div class="prop-text">
<div class="inner">
<span class="price rounded">$2,438,000</span>
<h3 class="title">853 S Lucerne Blvd</h3>
<p class="location">Los Angeles, CA 90005</p>
</div>
<!-- <div class="prop-more-info">-->
<!-- <div class="inner d-flex">-->
<!-- <div class="col"> -->
<!-- <span>Area:</span> -->
<!-- <strong>240m<sup>2</sup></strong> -->
<!-- </div> -->
<!-- <div class="col"> -->
<!-- <span>Beds:</span> -->
<!-- <strong>2</strong> -->
<!-- </div> -->
<!-- <div class="col"> -->
<!-- <span>Baths:</span> -->
<!-- <strong>2</strong> -->
<!-- </div> -->
<!-- <div class="col"> -->
<!-- <span>Garages:</span> -->
<!-- <strong>1</strong> -->
<!-- </div> -->
<!-- </div>-->
<!-- </div>-->
 </div>
</a>
</div>
<div class="col-md-6 col-lg-4 mb-4">
<a href="property-details.html" class="prop-entry d-block">
<figure>
<img src="images/img_3.jpg" alt="Image" class="img-fluid">
</figure>
<div class="prop-text">
<div class="inner">
<span class="price rounded">$5,320,000</span>
<h3 class="title">853 S Lucerne Blvd</h3>
<p class="location">Los Angeles, CA 90005</p>
</div>
<!-- <div class="prop-more-info"> -->
<!-- <div class="inner d-flex"> -->
<!-- <div class="col"> -->
<!-- <span>Area:</span> -->
<!-- <strong>240m<sup>2</sup></strong> -->
<!-- </div> -->
<!-- <div class="col"> -->
<!-- <span>Beds:</span> -->
<!-- <strong>2</strong> -->
<!-- </div> -->
<!-- <div class="col"> -->
<!-- <span>Baths:</span> -->
<!-- <strong>2</strong> -->
<!-- </div> -->
<!-- <div class="col"> -->
<!-- <span>Garages:</span> -->
<!-- <strong>1</strong> -->
<!-- </div> -->
<!-- </div> -->
<!-- </div> -->
</div>
</a>
</div>
<div class="col-md-6 col-lg-4 mb-4">
<a href="property-details.html" class="prop-entry d-block">
<figure>
<img src="images/img_4.jpg" alt="Image" class="img-fluid">
</figure>
<div class="prop-text">
<div class="inner">
<span class="price rounded">$2,350,000</span>
<h3 class="title">853 S Lucerne Blvd</h3>
<p class="location">Los Angeles, CA 90005</p>
</div>
<!-- <div class="prop-more-info"> -->
<!-- <div class="inner d-flex"> -->
<!-- <div class="col"> -->
<!-- <span>Area:</span> -->
<!-- <strong>240m<sup>2</sup></strong> -->
<!-- </div> -->
<!-- <div class="col"> -->
<!-- <span>Beds:</span> -->
<!-- <strong>2</strong> -->
<!-- </div> -->
<!-- <div class="col"> -->
<!-- <span>Baths:</span> -->
<!-- <strong>2</strong> -->
<!-- </div> -->
<!-- <div class="col"> -->
<!-- <span>Garages:</span> -->
<!-- <strong>1</strong> -->
<!-- </div> -->
<!-- </div> -->
<!-- </div> -->
</div>
</a>
</div>
<div class="col-md-6 col-lg-4 mb-4">
<a href="property-details.html" class="prop-entry d-block">
<figure>
<img src="images/img_5.jpg" alt="Image" class="img-fluid">
</figure>
<div class="prop-text">
<div class="inner">
<span class="price rounded">$1,550,000</span>
<h3 class="title">853 S Lucerne Blvd</h3>
<p class="location">Los Angeles, CA 90005</p>
</div>
<!-- <div class="prop-more-info"> -->
<!-- <div class="inner d-flex"> -->
<!-- <div class="col"> -->
<!-- <span>Area:</span> -->
<!-- <strong>240m<sup>2</sup></strong> -->
<!-- </div> -->
<!-- <div class="col"> -->
<!-- <span>Beds:</span> -->
<!-- <strong>2</strong> -->
<!-- </div> -->
<!-- <div class="col"> -->
<!-- <span>Baths:</span> -->
<!-- <strong>2</strong> -->
<!-- </div> -->
<!-- <div class="col"> -->
<!-- <span>Garages:</span> -->
<!-- <strong>1</strong> -->
<!-- </div> -->
<!-- </div> -->
<!-- </div> -->
</div>
</a>
</div>
<div class="col-md-6 col-lg-4 mb-4">
<a href="property-details.html" class="prop-entry d-block">
<figure>
<img src="images/img_6.jpg" alt="Image" class="img-fluid">
</figure>
<div class="prop-text">
<div class="inner">
<span class="price rounded">$4,291,000</span>
<h3 class="title">853 S Lucerne Blvd</h3>
<p class="location">Los Angeles, CA 90005</p>
</div>
<!-- <div class="prop-more-info"> -->
<!-- <div class="inner d-flex"> -->
<!-- <div class="col"> -->
<!-- <span>Area:</span> -->
<!-- <strong>240m<sup>2</sup></strong> -->
<!-- </div> -->
<!-- <div class="col"> -->
<!-- <span>Beds:</span> -->
<!-- <strong>2</strong> -->
<!-- </div> -->
<!-- <div class="col"> -->
<!-- <span>Baths:</span> -->
<!-- <strong>2</strong> -->
<!-- </div> -->
<!-- <div class="col"> -->
<!-- <span>Garages:</span> -->
<!-- <strong>1</strong> -->
<!-- </div> -->
<!-- </div> -->
<!-- </div> -->
</div>
</a>
</div>
</div>
</div>
</div>
</div>
</section>







<?php include('footer.php') ?>
