<?php include('header.php');
include('chksession.php');
?>

<!-- Custom styles for this template -->
<link rel="stylesheet" href="css/property-style.css" >
<link rel="stylesheet" href="css/bootstrap.css" >
<link rel="stylesheet" href="css/bootstrap.min.css" >
<link rel="stylesheet" href="css/font-awesome.min.css" >
<link rel="stylesheet" href="js/jquery.min.js" >
<link rel="stylesheet" href="js/bootstrap.min.js" >


<section class="prop-list-head">
        <div class="container ">
          <div class="row">
            <div class="col-sm-12">
                <h1>Properties Listing</h1>
            </div>
          </div>
        </div>
 </section>   

<section class="prop-list-body">
<div class="properties-section-body content-area">
	<div class="container container1170">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-xs-12">
			<!-- Option bar start -->
			<div class="option-bar">
                    <div class="row">
                        <div class="col-lg-6 col-md-5 col-sm-5 col-xs-2">
                            <h4>
                                <span class="heading-icon">
                                    <i class="fa fa-th-list"></i>
                                </span>
                                <span class="hidden-xs">Properties List</span>
                            </h4>
                        </div>
                        <div class="col-lg-6 col-md-7 col-sm-7 col-xs-10 cod-pad">
                            <div class="sorting-options">
                                <select class="sorting">
                                    <option>New To Old</option>
                                    <option>Old To New</option>
                                    <option>Properties (High To Low)</option>
                                    <option>Properties (Low To High)</option>
                                </select>
                                <a href="property-listing.php" class="change-view-btn active-view-btn"><i class="fa fa-th-list"></i></a>
                                <a href="property-listing.php" class="change-view-btn"><i class="fa fa-th-large"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
				<!-- Option bar end -->
				<div class="clearfix"></div>
				<!-- Property start 1 -->
				<div class="property clearfix wow fadeInUp delay-03s">
                    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 col-pad">
                        <!-- Property img -->
                        <div class="property-img">
                            <div class="property-tag button alt featured">Featured</div>
                            <div class="property-tag button sale">For Sale</div>
                            <div class="property-price">$150,000</div>
                            <img src="/iflex/images/properties/properties-list-1.jpg" alt="fp-list" class="img-responsive hp-1">
                            
                         </div>
                        </div>
						
                    <div class="property-content col-lg-7 col-md-7 col-sm-7 col-xs-12">
                        <!-- title -->
                        <h1 class="title">
                            <a href="property-detail.php">Beautiful Single Home</a>
                        </h1>
                        <!-- Property address -->
                        <h3 class="property-address">
                            <a href="property-detail.php">
                                <i class="fa fa-map-marker"></i>123 Kathal St. Tampa City,
                            </a>
                        </h3>
                        <!-- Facilities List -->
                        <ul class="facilities-list clearfix">
                            <li>
                                <i class="flaticon-square-layouting-with-black-square-in-east-area"></i>
                                <span>4800 sq ft</span>
                            </li>
                            <li>
                                <i class="flaticon-bed"></i>
                                <span>3 Beds</span>
                            </li>
                            <li>
                                <i class="flaticon-monitor"></i>
                                <span>TV </span>
                            </li>
                            <li>
                                <i class="flaticon-holidays"></i>
                                <span> 2 Baths</span>
                            </li>
                            <li>
                                <i class="flaticon-vehicle"></i>
                                <span>1 Garage</span>
                            </li>
                            <li>
                                <i class="flaticon-building"></i>
                                <span> 3 Balcony</span>
                            </li>
                        </ul>
                        <!-- Property footer -->
                        <div class="property-footer">
                            <span class="left">
                                <a href="#"><i class="fa fa-user"></i>Jhon Doe</a>
                            </span>
                            <span class="right">
                                <i class="fa fa-calendar"></i>5 Days ago
                            </span>
                        </div>
                    </div>
                </div>	<!-- end-of-Property 1-->
				
				<!-- Property start 2 -->
				<div class="property clearfix wow fadeInUp delay-03s">
                    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 col-pad">
                        <!-- Property img -->
                        <div class="property-img">
                            <div class="property-tag button alt featured">Featured</div>
                            <div class="property-tag button sale">For Sale</div>
                            <div class="property-price">$150,000</div>
                            <img src="/iflex/images/properties/properties-list-2.jpg" alt="fp-list" class="img-responsive hp-1">
                            
                         </div>
                        </div>
						
                    <div class="property-content col-lg-7 col-md-7 col-sm-7 col-xs-12">
                        <!-- title -->
                        <h1 class="title">
                            <a href="property-detail.php">Modern Family Home</a>
                        </h1>
                        <!-- Property address -->
                        <h3 class="property-address">
                            <a href="property-detail.php">
                                <i class="fa fa-map-marker"></i>123 Kathal St. Tampa City,
                            </a>
                        </h3>
                        <!-- Facilities List -->
                        <ul class="facilities-list clearfix">
                            <li>
                                <i class="flaticon-square-layouting-with-black-square-in-east-area"></i>
                                <span>4800 sq ft</span>
                            </li>
                            <li>
                                <i class="flaticon-bed"></i>
                                <span>3 Beds</span>
                            </li>
                            <li>
                                <i class="flaticon-monitor"></i>
                                <span>TV </span>
                            </li>
                            <li>
                                <i class="flaticon-holidays"></i>
                                <span> 2 Baths</span>
                            </li>
                            <li>
                                <i class="flaticon-vehicle"></i>
                                <span>1 Garage</span>
                            </li>
                            <li>
                                <i class="flaticon-building"></i>
                                <span> 3 Balcony</span>
                            </li>
                        </ul>
                        <!-- Property footer -->
                        <div class="property-footer">
                            <span class="left">
                                <a href="#"><i class="fa fa-user"></i>Jhon Doe</a>
                            </span>
                            <span class="right">
                                <i class="fa fa-calendar"></i>5 Days ago
                            </span>
                        </div>
                    </div>
                </div>	<!-- end-of-Property 2-->
				
				<!-- Property start 3 -->
				<div class="property clearfix wow fadeInUp delay-03s">
                    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 col-pad">
                        <!-- Property img -->
                        <div class="property-img">
                            <div class="property-tag button alt featured">Featured</div>
                            <div class="property-tag button sale">For Sale</div>
                            <div class="property-price">$150,000</div>
                            <img src="/iflex/images/properties/properties-list-3.jpg" alt="fp-list" class="img-responsive hp-1">
                            
                         </div>
                        </div>
						
                    <div class="property-content col-lg-7 col-md-7 col-sm-7 col-xs-12">
                        <!-- title -->
                        <h1 class="title">
                            <a href="property-detail.php">Sweet Family Home</a>
                        </h1>
                        <!-- Property address -->
                        <h3 class="property-address">
                            <a href="property-detail.php">
                                <i class="fa fa-map-marker"></i>123 Kathal St. Tampa City,
                            </a>
                        </h3>
                        <!-- Facilities List -->
                        <ul class="facilities-list clearfix">
                            <li>
                                <i class="flaticon-square-layouting-with-black-square-in-east-area"></i>
                                <span>4800 sq ft</span>
                            </li>
                            <li>
                                <i class="flaticon-bed"></i>
                                <span>3 Beds</span>
                            </li>
                            <li>
                                <i class="flaticon-monitor"></i>
                                <span>TV </span>
                            </li>
                            <li>
                                <i class="flaticon-holidays"></i>
                                <span> 2 Baths</span>
                            </li>
                            <li>
                                <i class="flaticon-vehicle"></i>
                                <span>1 Garage</span>
                            </li>
                            <li>
                                <i class="flaticon-building"></i>
                                <span> 3 Balcony</span>
                            </li>
                        </ul>
                        <!-- Property footer -->
                        <div class="property-footer">
                            <span class="left">
                                <a href="#"><i class="fa fa-user"></i>Jhon Doe</a>
                            </span>
                            <span class="right">
                                <i class="fa fa-calendar"></i>5 Days ago
                            </span>
                        </div>
                    </div>
                </div>	<!-- end-of-Property 3-->
				
				<!-- Property start 4 -->
				<div class="property clearfix wow fadeInUp delay-03s">
                    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 col-pad">
                        <!-- Property img -->
                        <div class="property-img">
                            <div class="property-tag button alt featured">Featured</div>
                            <div class="property-tag button sale">For Sale</div>
                            <div class="property-price">$150,000</div>
                            <img src="/iflex/images/properties/properties-list-2.jpg" alt="fp-list" class="img-responsive hp-1">
                            
                         </div>
                        </div>
						
                    <div class="property-content col-lg-7 col-md-7 col-sm-7 col-xs-12">
                        <!-- title -->
                        <h1 class="title">
                            <a href="property-detail.php">Beautiful Single Home</a>
                        </h1>
                        <!-- Property address -->
                        <h3 class="property-address">
                            <a href="property-detail.php">
                                <i class="fa fa-map-marker"></i>123 Kathal St. Tampa City,
                            </a>
                        </h3>
                        <!-- Facilities List -->
                        <ul class="facilities-list clearfix">
                            <li>
                                <i class="flaticon-square-layouting-with-black-square-in-east-area"></i>
                                <span>4800 sq ft</span>
                            </li>
                            <li>
                                <i class="flaticon-bed"></i>
                                <span>3 Beds</span>
                            </li>
                            <li>
                                <i class="flaticon-monitor"></i>
                                <span>TV </span>
                            </li>
                            <li>
                                <i class="flaticon-holidays"></i>
                                <span> 2 Baths</span>
                            </li>
                            <li>
                                <i class="flaticon-vehicle"></i>
                                <span>1 Garage</span>
                            </li>
                            <li>
                                <i class="flaticon-building"></i>
                                <span> 3 Balcony</span>
                            </li>
                        </ul>
                        <!-- Property footer -->
                        <div class="property-footer">
                            <span class="left">
                                <a href="#"><i class="fa fa-user"></i>Jhon Doe</a>
                            </span>
                            <span class="right">
                                <i class="fa fa-calendar"></i>5 Days ago
                            </span>
                        </div>
                    </div>
                </div>	<!-- end-of-Property 4-->
				
				<!-- Property start 5 -->
				<div class="property clearfix wow fadeInUp delay-03s">
                    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 col-pad">
                        <!-- Property img -->
                        <div class="property-img">
                            <div class="property-tag button alt featured">Featured</div>
                            <div class="property-tag button sale">For Sale</div>
                            <div class="property-price">$150,000</div>
                            <img src="/iflex/images/properties/properties-list-1.jpg" alt="fp-list" class="img-responsive hp-1">
                            
                         </div>
                        </div>
						
                    <div class="property-content col-lg-7 col-md-7 col-sm-7 col-xs-12">
                        <!-- title -->
                        <h1 class="title">
                            <a href="property-detail.php">Beautiful Single Home</a>
                        </h1>
                        <!-- Property address -->
                        <h3 class="property-address">
                            <a href="property-detail.php">
                                <i class="fa fa-map-marker"></i>123 Kathal St. Tampa City,
                            </a>
                        </h3>
                        <!-- Facilities List -->
                        <ul class="facilities-list clearfix">
                            <li>
                                <i class="flaticon-square-layouting-with-black-square-in-east-area"></i>
                                <span>4800 sq ft</span>
                            </li>
                            <li>
                                <i class="flaticon-bed"></i>
                                <span>3 Beds</span>
                            </li>
                            <li>
                                <i class="flaticon-monitor"></i>
                                <span>TV </span>
                            </li>
                            <li>
                                <i class="flaticon-holidays"></i>
                                <span> 2 Baths</span>
                            </li>
                            <li>
                                <i class="flaticon-vehicle"></i>
                                <span>1 Garage</span>
                            </li>
                            <li>
                                <i class="flaticon-building"></i>
                                <span> 3 Balcony</span>
                            </li>
                        </ul>
                        <!-- Property footer -->
                        <div class="property-footer">
                            <span class="left">
                                <a href="#"><i class="fa fa-user"></i>Jhon Doe</a>
                            </span>
                            <span class="right">
                                <i class="fa fa-calendar"></i>5 Days ago
                            </span>
                        </div>
                    </div>
                </div>	<!-- end-of-Property 5-->
				

			<div class="prev-next">
			<nav aria-label="Page navigation">
                    <ul class="pagination">
                        <li>
                            <a href="properties-list-leftside.html" aria-label="Previous">
                                <span aria-hidden="true">«</span>
                            </a>
                        </li>
                        <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                        <li><a href="properties-list-leftside.html">2</a></li>
                        <li><a href="properties-list-fullwidth.html">3</a></li>
                        <li>
                            <a href="properties-list-fullwidth.html" aria-label="Next">
                                <span aria-hidden="true">»</span>
                            </a>
                        </li>
                    </ul>
            </nav> 
			</div>
				
			</div><!-- end-of-right-side -->
			
			
			<div class="col-lg-4 col-md-4col-xs-12">
				<!-- Search contents sidebar start -->
				 <div class="sidebar-widget">
                    <div class="main-title-2">
                        <h1><span>Advanced</span> Search</h1>
                    </div>
					<form method="GET">
						<div class="form-group">
                            <div class="btn-group bootstrap-select search-fields">
							<button type="button" class="btn dropdown-toggle btn-default" data-toggle="dropdown" role="button" title="Property Status">
							<span class="filter-option pull-left">Property Status</span>&nbsp;
							</button>
							<div class="dropdown-menu open" role="combobox">
							<div class="bs-searchbox">
							<input type="text" class="form-control" autocomplete="off" placeholder="Search value" role="textbox" aria-label="Search"></div>
							<ul class="dropdown-menu inner" role="listbox" aria-expanded="false">
							 <li data-original-index="0" class="selected"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="true"><span class="text">Property Status</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li>
							 <li data-original-index="1"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">For Sale</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li>
							 <li data-original-index="2"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">For Rent</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li>
							 </ul></div>
							 <select class="selectpicker search-fields" name="property-status" data-live-search="true" data-live-search-placeholder="Search value" tabindex="-98">
                                <option>Property Status</option>
                                <option>For Sale</option>
                                <option>For Rent</option>
                            </select></div>
                        </div>
				<div class="form-group">
                            <div class="btn-group bootstrap-select search-fields">
							<button type="button" class="btn dropdown-toggle btn-default" data-toggle="dropdown" role="button" title="Property Status">
							<span class="filter-option pull-left">Location</span>&nbsp;
							</span></button>
							<div class="dropdown-menu open" role="combobox">
							<div class="bs-searchbox">
							<input type="text" class="form-control" autocomplete="off" placeholder="Search value" role="textbox" aria-label="Search"></div>
							<ul class="dropdown-menu inner" role="listbox" aria-expanded="false">
							 <li data-original-index="0" class="selected"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="true"><span class="text">Location</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li>
							 <li data-original-index="1"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">United States</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li>
							 <li data-original-index="2"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">United Kingdom</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li>
							 <li data-original-index="3"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">American Samoa</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li>
							 <li data-original-index="4"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Belgium</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li>
							 <li data-original-index="5"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Cameroon</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li>
							 <li data-original-index="6"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Canada</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li>
							 
							 </ul></div>
							 <select class="selectpicker search-fields" name="location" data-live-search="true" data-live-search-placeholder="Search value" tabindex="-98">
                                <option>Location</option>
                                <option>United States</option>
                                <option>United Kingdom</option>
                                <option>American Samoa</option>
                                <option>Belgium</option>
                                <option>Cameroon</option>
                                <option>Canada</option>
                            </select>
							 </div>
                        </div>
 						<div class="form-group">
                            <div class="btn-group bootstrap-select search-fields"><button type="button" class="btn dropdown-toggle btn-default" data-toggle="dropdown" role="button" title="Area From"><span class="filter-option pull-left">Area From</span>&nbsp;<span class="bs-caret"><span class="caret"></span></span></button><div class="dropdown-menu open" role="combobox"><div class="bs-searchbox"><input type="text" class="form-control" autocomplete="off" placeholder="Search value" role="textbox" aria-label="Search"></div><ul class="dropdown-menu inner" role="listbox" aria-expanded="false"><li data-original-index="0" class="selected"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="true"><span class="text">Area From</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="1"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">1000</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="2"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">800</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="3"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">600</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="4"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">400</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="5"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">200</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="6"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">100</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li></ul></div><select class="selectpicker search-fields" name="area-from" data-live-search="true" data-live-search-placeholder="Search value" tabindex="-98">
                                <option>Area From</option>
                                <option>1000</option>
                                <option>800</option>
                                <option>600</option>
                                <option>400</option>
                                <option>200</option>
                                <option>100</option>
                            </select></div>
                        </div>
						
						
						<div class="form-group">
                            <div class="btn-group bootstrap-select search-fields"><button type="button" class="btn dropdown-toggle btn-default" data-toggle="dropdown" role="button" title="Property Types"><span class="filter-option pull-left">Property Types</span>&nbsp;<span class="bs-caret"><span class="caret"></span></span></button><div class="dropdown-menu open" role="combobox"><div class="bs-searchbox"><input type="text" class="form-control" autocomplete="off" placeholder="Search value" role="textbox" aria-label="Search"></div><ul class="dropdown-menu inner" role="listbox" aria-expanded="false"><li data-original-index="0" class="selected"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="true"><span class="text">Property Types</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="1"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Residential</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="2"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Commercial</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="3"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Land</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li></ul></div><select class="selectpicker search-fields" name="property-types" data-live-search="true" data-live-search-placeholder="Search value" tabindex="-98">
                                <option>Property Types</option>
                                <option>Residential</option>
                                <option>Commercial</option>
                                <option>Land</option>
                            </select></div>
                        </div>
						
						
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="form-group">
                                    <div class="btn-group bootstrap-select search-fields dropup"><button type="button" class="btn dropdown-toggle btn-default" data-toggle="dropdown" role="button" title="Bedrooms" aria-expanded="false"><span class="filter-option pull-left">Bedrooms</span>&nbsp;<span class="bs-caret"><span class="caret"></span></span></button><div class="dropdown-menu open" role="combobox" style="max-height: 214.4px; overflow: hidden; min-height: 113px;"><ul class="dropdown-menu inner" role="listbox" aria-expanded="false" style="max-height: 212.4px; overflow-y: auto; min-height: 111px;"><li data-original-index="0" class="selected"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="true"><span class="text">Bedrooms</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="1"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">1</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="2"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">2</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="3"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">3</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="4"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">4</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="5"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">5</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li></ul></div><select class="selectpicker search-fields" name="bedrooms" tabindex="-98">
                                        <option>Bedrooms</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select></div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="form-group">
                                    <div class="btn-group bootstrap-select search-fields"><button type="button" class="btn dropdown-toggle btn-default" data-toggle="dropdown" role="button" title="Bathroom"><span class="filter-option pull-left">Bathroom</span>&nbsp;<span class="bs-caret"><span class="caret"></span></span></button><div class="dropdown-menu open" role="combobox"><ul class="dropdown-menu inner" role="listbox" aria-expanded="false"><li data-original-index="0" class="selected"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="true"><span class="text">Bathroom</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="1"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">1</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="2"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">2</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="3"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">3</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="4"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">4</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="5"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">5</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li></ul></div><select class="selectpicker search-fields" name="bathroom" tabindex="-98">
                                        <option>Bathroom</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select></div>
                                </div>
                            </div>
                        </div>

						<div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="form-group">
                                    <div class="btn-group bootstrap-select search-fields"><button type="button" class="btn dropdown-toggle btn-default" data-toggle="dropdown" role="button" title="Balcony"><span class="filter-option pull-left">Balcony</span>&nbsp;<span class="bs-caret"><span class="caret"></span></span></button><div class="dropdown-menu open" role="combobox"><ul class="dropdown-menu inner" role="listbox" aria-expanded="false"><li data-original-index="0" class="selected"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="true"><span class="text">Balcony</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="1"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">1</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="2"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">2</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="3"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">3</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="4"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">4</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="5"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">5</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li></ul></div><select class="selectpicker search-fields" name="balcony" tabindex="-98">
                                        <option>Balcony</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select></div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="form-group">
                                    <div class="btn-group bootstrap-select search-fields"><button type="button" class="btn dropdown-toggle btn-default" data-toggle="dropdown" role="button" title="Garage"><span class="filter-option pull-left">Garage</span>&nbsp;<span class="bs-caret"><span class="caret"></span></span></button><div class="dropdown-menu open" role="combobox"><div class="bs-searchbox"><input type="text" class="form-control" autocomplete="off" role="textbox" aria-label="Search"></div><ul class="dropdown-menu inner" role="listbox" aria-expanded="false"><li data-original-index="0" class="selected"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="true"><span class="text">Garage</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="1"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">1</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="2"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">2</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="3"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">3</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="4"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">4</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="5"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">5</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li></ul></div><select class="selectpicker search-fields" data-live-search="true" name="garage" tabindex="-98">
                                        <option>Garage</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select></div>
                                </div>
                            </div>
                        </div>
						
					

                        <div class="range-slider">
                            <label>Area</label>
                            <div data-min="0" data-max="10000" data-unit="Sq ft" data-min-name="min_area" data-max-name="max_area" class="range-slider-ui ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" aria-disabled="false"><span class="min-value">0 Sq ft</span> <span class="max-value">10000 Sq ft</span><input class="current-min" type="hidden" name="min_area" value="0"><input class="current-max" type="hidden" name="max_area" value="10000"><div class="ui-slider-range ui-widget-header ui-corner-all" style="left: 0%; width: 100%;"></div><a class="ui-slider-handle ui-state-default ui-corner-all" href="#" style="left: 0%;"></a><a class="ui-slider-handle ui-state-default ui-corner-all" href="#" style="left: 100%;"></a></div>
                            <div class="clearfix"></div>
                        </div>

                        <div class="range-slider">
                            <label>Price</label>
                            <div data-min="0" data-max="150000" data-unit="USD" data-min-name="min_price" data-max-name="max_price" class="range-slider-ui ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" aria-disabled="false"><span class="min-value">0 USD</span> <span class="max-value">150000 USD</span><input class="current-min" type="hidden" name="min_price" value="0"><input class="current-max" type="hidden" name="max_price" value="150000"><div class="ui-slider-range ui-widget-header ui-corner-all" style="left: 0%; width: 100%;"></div><a class="ui-slider-handle ui-state-default ui-corner-all" href="#" style="left: 0%;"></a><a class="ui-slider-handle ui-state-default ui-corner-all" href="#" style="left: 100%;"></a></div>
                            <div class="clearfix"></div>
                        </div>

                        <a class="show-more-options collapsed" data-toggle="collapse" data-target="#options-content">
                            <i class="fa fa-plus-circle"></i> Show More Options
                        </a>
                        <div id="options-content" class="collapse">
                            <label class="margin-t-10">Features</label>
                            <div class="checkbox checkbox-theme checkbox-circle">
                                <input id="checkbox1" type="checkbox">
                                <label for="checkbox1">
                                    Free Parking
                                </label>
                            </div>
                            <div class="checkbox checkbox-theme checkbox-circle">
                                <input id="checkbox2" type="checkbox">
                                <label for="checkbox2">
                                    Air Condition
                                </label>
                            </div>
                            <div class="checkbox checkbox-theme checkbox-circle">
                                <input id="checkbox3" type="checkbox">
                                <label for="checkbox3">
                                    Places to seat
                                </label>
                            </div>
                            <div class="checkbox checkbox-theme checkbox-circle">
                                <input id="checkbox4" type="checkbox">
                                <label for="checkbox4">
                                    Swimming Pool
                                </label>
                            </div>
                            <div class="checkbox checkbox-theme checkbox-circle">
                                <input id="checkbox5" type="checkbox">
                                <label for="checkbox5">
                                    Laundry Room
                                </label>
                            </div>
                            <div class="checkbox checkbox-theme checkbox-circle">
                                <input id="checkbox6" type="checkbox">
                                <label for="checkbox6">
                                    Window Covering
                                </label>
                            </div>
                            <div class="checkbox checkbox-theme checkbox-circle">
                                <input id="checkbox7" type="checkbox">
                                <label for="checkbox7">
                                    Central Heating
                                </label>
                            </div>
                            <div class="checkbox checkbox-theme checkbox-circle">
                                <input id="checkbox8" type="checkbox">
                                <label for="checkbox8">
                                    Alarm
                                </label>
                            </div>
                        </div>

                        <div class="form-group mb-0">
                            <button class="search-button">Search</button>
                        </div>
                    </form> 
					</div><!-- Sidebar Block 1 End -->
					
					<div class="sidebar-widget category-posts">
                    <div class="main-title-2">
                        <h1><span>popular</span> Category</h1>
                    </div>
                    <ul class="list-unstyled list-cat">
                        <li><a href="#">Single Family </a> <span>(45)  </span></li>
                        <li><a href="#">Apartment  </a> <span>(21)  </span></li>
                        <li><a href="#">Condo </a> <span>(23)  </span></li>
                        <li><a href="#">Multi Family </a> <span>(19)  </span></li>
                        <li><a href="#">Villa </a> <span>(19)  </span></li>
                        <li><a href="#">Other  </a> <span>(22)  </span></li>
                    </ul>
                </div><!--Sidebar Block 2 End -->
				
				<div class="sidebar-widget helping-box clearfix">
                    <div class="main-title-2">
                        <h1><span>Helping</span> Center</h1>
                    </div>
                    <div class="helping-center">
                        <div class="icon"><i class="fa fa-map-marker"></i></div>
                        <h4>Address</h4>
                        <p>123 Kathal St. Tampa City,</p>
                    </div>
                    <div class="helping-center">
                        <div class="icon"><i class="fa fa-phone"></i></div>
                        <h4>Phone</h4>
                        <p><a href="tel:+55-417-634-7071">+55 417 634 7071</a> </p>
                    </div>
                </div><!--Sidebar Block 3 End -->
					
                </div> 	<!-- End of Search contents sidebar start -->
				
			</div><!-- end-of-left-side -->
			
		</div><!-- end-of-row -->
	</div><!-- end-of-container-->
</div><!-- properties-section-body -->
</section><!-- end-of-prop-list-body -->


<?php include('footer.php') ?>