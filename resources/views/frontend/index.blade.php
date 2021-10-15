@extends('frontend.layouts.app')

@section('main-content')
			
			<!-- ======================= Start Banner ===================== -->
			<div class="main-banner" style="background-image:url(frontend/assets/img/banner-3.jpg);" data-overlay="5">
				<div class="container">
					<div class="col-md-12 col-sm-12">
					
						<div class="caption cl-white hace-desti">
							<div class="hace-desti-sub">
							<span class="stylish">Make your meal awesome</span>
							<h2>Are you Hungry?<br>We are surving delicios food</h2>
							</div>
						</div>

					</div>
				</div>
			</div>
			<!-- ======================= End Banner ===================== -->
		
			<!-- ======================= Search Form ===================== -->
			<section class="banner-form-search radius-0">
				<div class="container-fluid">
					<div class="row m-0">
						<div class="col-lg-10 col-md-10 p-0">
							<form class="st-search-form-tour icon-frm withlbl">
								<div class="g-field-search">
									<div class="row">
										<div class="col-lg-4 col-md-4 border-right mxnbr">
											<div class="form-group">
												<i class="ti-location-pin field-icon"></i>
												<label>Type of packages</label>
												<input type="text" class="form-control" placeholder="Lite or Heavy">
											</div>
										</div>
										
										<div class="col-lg-3 col-md-4 border-right mxnbr">
											<div class="form-group">
												<i class="ti-calendar field-icon"></i>
												<label>From - To</label>
												<input type="text" class="form-control check-in-out" name="dates" value="01/01/2018 - 01/15/2018" />
											</div>
										</div>
										
										<div class="col-lg-3 col-md-4 border-right dropdown form-select-guests">
											<div class="form-group">
												<i class="ti-user field-icon"></i>
												<div class="form-content dropdown-toggle" data-toggle="dropdown">
													<div class="wrapper-more">
														<label>Guests</label>
														<div class="render">
															<span class="adults"><span class="one ">1 Adult</span> <span class=" d-none  multi" data-html=":count Adults">1 Adults</span></span>-
															<span class="children">
																<span class="one " data-html=":count Child">0 Child</span>
																<span class="multi  d-none" data-html=":count Children">0 Children</span>
															</span>
														</div>
													</div>
												</div>
												<div class="dropdown-menu select-guests-dropdown">
													<input type="hidden" name="adults" value="1" min="1" max="20">
													<input type="hidden" name="children" value="0" min="0" max="20">
													<div class="dropdown-item-row">
														<div class="label">Adults</div>
														<div class="val">
															<span class="btn-minus" data-input="adults"><i class="ti-minus"></i></span>
															<span class="count-display">1</span>
															<span class="btn-add" data-input="adults"><i class="ti-plus"></i></span>
														</div>
													</div>
													<div class="dropdown-item-row">
														<div class="label">Children</div>
														<div class="val">
															<span class="btn-minus" data-input="children"><i class="ti-minus"></i></span>
															<span class="count-display">0</span>
															<span class="btn-add" data-input="children"><i class="ti-plus"></i></span>
														</div>
													</div>
												</div>
											</div>
										</div>
									
										<div class="col-lg-2 col-md-12 p-0">
											<div class="form-group  search">
												<button class="btn btn-theme btn-search" type="submit">Search</button>
											</div>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</section>
			<!-- ======================= Search Form ===================== -->
			
			<!-- ================= Travel start ========================= -->
			<section class="min">
				<div class="container">
				
					<div class="row">
						<div class="col-lg-12 col-md-12">
							<div class="sec-heading center">
								<p>Popular Meal Packages</p>
								<h2>Featured Meal Packages</h2>
							</div>
						</div>
					</div>
					
					<div class="row">
						
						<!-- Single Tour Place -->
						<div class="col-lg-4 col-md-6 col-sm-12">
							<div class="tour-simple-wrap style-2">
								<span class="onsale-section"><span class="onsale">Save 15%</span></span>
								<div class="tour-simple-thumb">
									<a href="{{route('details')}}"><img src="frontend/assets/img/destination/des-2.jpg" class="img-fluid img-responsive" alt="" /></a>
								</div>
								<div class="tour-simple-caption">
									<div class="ts-caption-left">
										<h4 class="ts-title"><a href="tour-detail.html">Taipei, Taiwan</a></h4>
										<span>7 Days Tours</span>
									</div>
									<div class="ts-caption-right">
										<div class="ts-caption-rating">
											<i class="ti-star filled"></i>
											<i class="ti-star filled"></i>
											<i class="ti-star filled"></i>
											<i class="ti-star filled"></i>
											<i class="ti-star filled"></i>
										</div>
										<h5 class="ts-price">$980.00</h5>
									</div>
								</div>
							</div>
						</div>
						
						<!-- Single Tour Place -->
						<div class="col-lg-4 col-md-6 col-sm-12">
							<div class="tour-simple-wrap style-2">
								<span class="onsale-section"><span class="onsale">Save 17%</span></span>
								<div class="tour-simple-thumb">
									<a href="tour-detail.html"><img src="frontend/assets/img/destination/des-3.jpg" class="img-fluid img-responsive" alt="" /></a>
								</div>
								<div class="tour-simple-caption">
									<div class="ts-caption-left">
										<h4 class="ts-title"><a href="tour-detail.html">Sydney, Australia</a></h4>
										<span>9 Days Tours</span>
									</div>
									<div class="ts-caption-right">
										<div class="ts-caption-rating">
											<i class="ti-star filled"></i>
											<i class="ti-star filled"></i>
											<i class="ti-star filled"></i>
											<i class="ti-star filled"></i>
											<i class="ti-star"></i>
										</div>
										<h5 class="ts-price">$999.00</h5>
									</div>
								</div>
							</div>
						</div>
						
						<!-- Single Tour Place -->
						<div class="col-lg-4 col-md-6 col-sm-12">
							<div class="tour-simple-wrap style-2">
								<span class="onsale-section"><span class="onsale">Save 18%</span></span>
								<div class="tour-simple-thumb">
									<a href="tour-detail.html"><img src="frontend/assets/img/destination/des-4.jpg" class="img-fluid img-responsive" alt="" /></a>
								</div>
								<div class="tour-simple-caption">
									<div class="ts-caption-left">
										<h4 class="ts-title"><a href="tour-detail.html">Merida, Mexico</a></h4>
										<span>7 Days Tours</span>
									</div>
									<div class="ts-caption-right">
										<div class="ts-caption-rating">
											<i class="ti-star filled"></i>
											<i class="ti-star filled"></i>
											<i class="ti-star filled"></i>
											<i class="ti-star filled"></i>
											<i class="ti-star filled"></i>
										</div>
										<h5 class="ts-price">$958.00</h5>
									</div>
								</div>
							</div>
						</div>
						
						<!-- Single Tour Place -->
						<div class="col-lg-4 col-md-6 col-sm-12">
							<div class="tour-simple-wrap style-2">
								<span class="onsale-section"><span class="onsale">Save 22%</span></span>
								<div class="tour-simple-thumb">
									<a href="tour-detail.html"><img src="frontend/assets/img/destination/des-5.jpg" class="img-fluid img-responsive" alt="" /></a>
								</div>
								<div class="tour-simple-caption">
									<div class="ts-caption-left">
										<h4 class="ts-title"><a href="tour-detail.html">Dresden, Germany</a></h4>
										<span>10 Days Tours</span>
									</div>
									<div class="ts-caption-right">
										<div class="ts-caption-rating">
											<i class="ti-star filled"></i>
											<i class="ti-star filled"></i>
											<i class="ti-star filled"></i>
											<i class="ti-star filled"></i>
											<i class="ti-star filled"></i>
										</div>
										<h5 class="ts-price">$1199.00</h5>
									</div>
								</div>
							</div>
						</div>
						
						<!-- Single Tour Place -->
						<div class="col-lg-4 col-md-6 col-sm-12">
							<div class="tour-simple-wrap style-2">
								<span class="onsale-section"><span class="onsale">Save 30%</span></span>
								<div class="tour-simple-thumb">
									<a href="tour-detail.html"><img src="frontend/assets/img/destination/des-6.jpg" class="img-fluid img-responsive" alt="" /></a>
								</div>
								<div class="tour-simple-caption">
									<div class="ts-caption-left">
										<h4 class="ts-title"><a href="tour-detail.html">Salzburg, Austria</a></h4>
										<span>3 Days Tours</span>
									</div>
									<div class="ts-caption-right">
										<div class="ts-caption-rating">
											<i class="ti-star filled"></i>
											<i class="ti-star filled"></i>
											<i class="ti-star filled"></i>
											<i class="ti-star filled"></i>
											<i class="ti-star"></i>
										</div>
										<h5 class="ts-price">$589.00</h5>
									</div>
								</div>
							</div>
						</div>
						
						<!-- Single Tour Place -->
						<div class="col-lg-4 col-md-6 col-sm-12">
							<div class="tour-simple-wrap style-2">
								<span class="onsale-section"><span class="onsale">Save 50%</span></span>
								<div class="tour-simple-thumb">
									<a href="tour-detail.html"><img src="frontend/assets/img/destination/des-7.jpg" class="img-fluid img-responsive" alt="" /></a>
								</div>
								<div class="tour-simple-caption">
									<div class="ts-caption-left">
										<h4 class="ts-title"><a href="tour-detail.html">Puerto Vallarta, Mexico</a></h4>
										<span>5 Days Tours</span>
									</div>
									<div class="ts-caption-right">
										<div class="ts-caption-rating">
											<i class="ti-star filled"></i>
											<i class="ti-star filled"></i>
											<i class="ti-star filled"></i>
											<i class="ti-star filled"></i>
											<i class="ti-star filled"></i>
										</div>
										<h5 class="ts-price">$699.00</h5>
									</div>
								</div>
							</div>
						</div>
						
					</div>
				
				</div>
			</section>
			<!-- ========================= End Travel Section ============================ -->
			
			<!-- ================= true Facts start ========================= -->
			<section class="theme-bg">
				<div class="container">
					<div class="row">
						
						<div class="col-lg-3 col-md-3 col-sm-6">
							<div class="facts-wrap light">
								<div class="facts-icon">
									<i class="ti-location-pin"></i>
								</div>
								<div class="facts-detail">
									<h2>584</h2>
									<p>Top Local Guides</p>
								</div>
							</div>
						</div>
						
						<div class="col-lg-3 col-md-3 col-sm-6">
							<div class="facts-wrap light">
								<div class="facts-icon">
									<i class="ti-shine"></i>
								</div>
								<div class="facts-detail">
									<h2>7410</h2>
									<p>Winter Destinations</p>
								</div>
							</div>
						</div>
						
						<div class="col-lg-3 col-md-3 col-sm-6">
							<div class="facts-wrap light">
								<div class="facts-icon">
									<i class="ti-face-smile"></i>
								</div>
								<div class="facts-detail">
									<h2>670</h2>
									<p>New Tours</p>
								</div>
							</div>
						</div>
						
						<div class="col-lg-3 col-md-3 col-sm-6">
							<div class="facts-wrap light">
								<div class="facts-icon">
									<i class="ti-face-smile"></i>
								</div>
								<div class="facts-detail">
									<h2>2540</h2>
									<p>Happy Travelers</p>
								</div>
							</div>
						</div>
						
					</div>
				</div>
			</section>
			<!-- ================= End true Facts ========================= -->
			
			<!-- ================= Activities start ========================= -->
			<section class="gray">
				<div class="container">
					
					<div class="row">
						<div class="col-lg-12 col-md-12">
							<div class="sec-heading center">
								<p>Top Discount Activities</p>
								<h2>Discount of The Month</h2>
							</div>
						</div>
					</div>
					
					<div class="row">
						<div class="col-lg-12 col-md-12">
							<div class="owl-carousel owl-theme" id="lists-slide">
								
								<div class="single-item">
									<div class="destination-discount">
										<div class="destination-discount-thumb">
											<a href="tour-detail.html"><img src="frontend/assets/img/destination/des-2.jpg" class="img-responsive" alt="" /></a>
										</div>
										<div class="destination-discount-caption">
											<div class="discount-box">
												<h4 class="discount-title"><sup class="current-title">$</sup>5</h4>
												<span>Discount</span>
											</div>
											<h4 class="destination-title"><a href="home-5.html#">Mumbai TO Manali</a></h4>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod.</p>
											<h5 class="destination-price theme-cl"><span>From</span>$721</h5>
											<a href="tour-detail.html" class="check-btn">Check<i class="ti-arrow-right"></i></a>
										</div>
									</div>
								</div>
								
								<div class="single-item">
									<div class="destination-discount">
										<div class="destination-discount-thumb">
											<a href="tour-detail.html"><img src="frontend/assets/img/destination/des-3.jpg" class="img-responsive" alt="" /></a>
										</div>
										<div class="destination-discount-caption">
											<div class="discount-box">
												<h4 class="discount-title"><sup class="current-title">$</sup>70</h4>
												<span>Discount</span>
											</div>
											<h4 class="destination-title"><a href="home-5.html#">Mumbai TO Chandigarh</a></h4>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod.</p>
											<h5 class="destination-price theme-cl"><span>From</span>$950</h5>
											<a href="tour-detail.html" class="check-btn">Check<i class="ti-arrow-right"></i></a>
										</div>
									</div>
								</div>
								
								<div class="single-item">
									<div class="destination-discount">
										<div class="destination-discount-thumb">
											<a href="tour-detail.html"><img src="frontend/assets/img/destination/des-4.jpg" class="img-responsive" alt="" /></a>
										</div>
										<div class="destination-discount-caption">
											<div class="discount-box">
												<h4 class="discount-title"><sup class="current-title">$</sup>20</h4>
												<span>Discount</span>
											</div>
											<h4 class="destination-title"><a href="home-5.html#">Goa To London</a></h4>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod.</p>
											<h5 class="destination-price theme-cl"><span>From</span>$999</h5>
											<a href="tour-detail.html" class="check-btn">Check<i class="ti-arrow-right"></i></a>
										</div>
									</div>
								</div>
								
								<div class="single-item">
									<div class="destination-discount">
										<div class="destination-discount-thumb">
											<a href="tour-detail.html"><img src="frontend/assets/img/destination/des-5.jpg" class="img-responsive" alt="" /></a>
										</div>
										<div class="destination-discount-caption">
											<div class="discount-box">
												<h4 class="discount-title"><sup class="current-title">$</sup>40</h4>
												<span>Discount</span>
											</div>
											<h4 class="destination-title"><a href="home-5.html#">Mumbai TO Shimla</a></h4>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod.</p>
											<h5 class="destination-price theme-cl"><span>From</span>$1050</h5>
											<a href="tour-detail.html" class="check-btn">Check<i class="ti-arrow-right"></i></a>
										</div>
									</div>
								</div>
								
								<div class="single-item">
									<div class="destination-discount">
										<div class="destination-discount-thumb">
											<a href="tour-detail.html"><img src="frontend/assets/img/destination/des-6.jpg" class="img-responsive" alt="" /></a>
										</div>
										<div class="destination-discount-caption">
											<div class="discount-box">
												<h4 class="discount-title"><sup class="current-title">$</sup>50</h4>
												<span>Discount</span>
											</div>
											<h4 class="destination-title"><a href="home-5.html#">Manali To Goa</a></h4>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod.</p>
											<h5 class="destination-price theme-cl"><span>From</span>$850</h5>
											<a href="tour-detail.html" class="check-btn">Check<i class="ti-arrow-right"></i></a>
										</div>
									</div>
								</div>
							
							</div>
						</div>
					</div>
					
				</div>
			</section>
			<!-- ========================= End Activities Section ============================ -->
			
			<!-- ================= testimonial start ========================= -->
			<section class="min">
				<div class="container">
				
					<div class="row">
						<div class="col-lg-12 col-md-12">
							<div class="sec-heading center">
								<h2>What Our Clients Saying</h2>
							</div>
						</div>
					</div>
					
					<div class="row">
						
						<div class="col-lg-4 col-md-4">
							<div class="testimonial-wrap">
								<div class="testimonial-icon">
									<img src="frontend/assets/img/user-2.jpg" class="img-fluid" alt="" />
									<h5>Adam Wardilia</h5>
									<div class="testi-rate">
										<i class="fa fa-star filled"></i>
										<i class="fa fa-star filled"></i>
										<i class="fa fa-star filled"></i>
										<i class="fa fa-star filled"></i>
										<i class="fa fa-star filled"></i>
									</div>
								</div>
								<div class="facts-detail">
									<p>Faucibus tristique felis potenti ultrices ornare rhoncus semper hac facilisi Rutrum tellus lorem sem velit nisi non pharetra in dui.</p>
								</div>
							</div>
						</div>
						
						<div class="col-lg-4 col-md-4">
							<div class="testimonial-wrap">
								<div class="testimonial-icon">
									<img src="frontend/assets/img/user-3.jpg" class="img-fluid" alt="" />
									<h5>Lily Warliags</h5>
									<div class="testi-rate">
										<i class="fa fa-star filled"></i>
										<i class="fa fa-star filled"></i>
										<i class="fa fa-star filled"></i>
										<i class="fa fa-star filled"></i>
										<i class="fa fa-star"></i>
									</div>
								</div>
								<div class="facts-detail">
									<p>Faucibus tristique felis potenti ultrices ornare rhoncus semper hac facilisi Rutrum tellus lorem sem velit nisi non pharetra in dui.</p>
								</div>
							</div>
						</div>
						
						<div class="col-lg-4 col-md-4">
							<div class="testimonial-wrap">
								<div class="testimonial-icon">
									<img src="frontend/assets/img/user-4.jpg" class="img-fluid" alt="" />
									<h5>Swan Dikarlia</h5>
									<div class="testi-rate">
										<i class="fa fa-star filled"></i>
										<i class="fa fa-star filled"></i>
										<i class="fa fa-star filled"></i>
										<i class="fa fa-star filled"></i>
										<i class="fa fa-star filled"></i>
									</div>
								</div>
								<div class="facts-detail">
									<p>Faucibus tristique felis potenti ultrices ornare rhoncus semper hac facilisi Rutrum tellus lorem sem velit nisi non pharetra in dui.</p>
								</div>
							</div>
						</div>
						
					</div>
				</div>
			</section>
			<!-- ================= End testimonial ========================= -->
			
			<!-- ============================ Newsletter Start ================================== -->
			{{-- <section class="alert-wrap pt-5 pb-5" style="background:#ff5722 url(frontend/assets/img/bg-new.png);">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-md-6">
							<div class="jobalert-sec">
								<h3 class="mb-1 text-light">Get New Jobs Notification!</h3>
								<p class="text-light">Subscribe & get all related jobs notification.</p>
							</div>
						</div>
						
						<div class="col-lg-6 col-md-6">
							<div class="input-group">
							  <input type="text" class="form-control" placeholder="Enter Your Email">
							  <div class="input-group-append">
								<button type="button" class="btn btn-black black">Subscribe</button>
							  </div>
							</div>
						</div>
					</div>
				</div>
			</section> --}}
			<!-- ============================ Newsletter end ================================== -->			
@endsection