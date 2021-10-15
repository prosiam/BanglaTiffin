@extends('frontend.layouts.app')

@section('main-content')
			
			
			<!-- ============================ Page Title Start================================== -->
			<div class="image-cover page-title" style="background:url(frontend/assets/img/banner-1.jpg) no-repeat;" data-overlay="6">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12">
							
							<h2 class="ipt-title">List Layout with Sidebar</h2>
							<span class="ipn-subtitle text-light">List Layout With Sidebar</span>
							
						</div>
					</div>
				</div>
			</div>
			<!-- ============================ Page Title End ================================== -->

			<!-- =================== Sidebar Search ==================== -->
			<section class="gray">
				<div class="container">
					<div class="row">
						<div class="order-2 col-lg-4 col-md-12 order-lg-1 order-md-2">
						
							<!-- property Sidebar -->
							<div class="exlip-page-sidebar">
								
								<!-- Find New Property -->
								<div class="sidebar-widgets">
									
									<div class="form-group">
										<div class="input-with-icon">
											<input type="text" class="form-control" placeholder="Destination">
											<i class="ti-location-pin"></i>
										</div>
									</div>
									
									<div class="form-group">
										<div class="input-with-icon">
											<input type="text" class="form-control check-in-out" name="dates" value="01/01/2018 - 01/15/2018" />
											<i class="ti-calendar"></i>
										</div>
									</div>
									
									<div class="form-group">
										<div class="input-with-icon">
											<select id="tour-category" class="form-control">
												<option value="">&nbsp;</option>
												<option value="1">City trips</option>
												<option value="2">Ecotourism</option>
												<option value="3">Escorted Tour</option>
												<option value="4">Group Tour</option>
												<option value="5">Hosted tours</option>
												<option value="6">Ligula</option>
											</select>
											<i class="ti-briefcase"></i>
										</div>
									</div>
									
									<div class="range-slider">
										<label>Radius</label>
										<div class="distance-title">around selected destination <span class="theme-cl"></span> km</div>
										<input class="distance-radius rangeslider--horizontal" type="range" min="1" max="100" step="1" value="1" data-title="Radius around selected destination">
									</div>

									<div class="ameneties-features">
										<label>Advance Features</label>
										<ul class="no-ul-list">
											<li>
												<input id="a-1" class="checkbox-custom" name="a-1" type="checkbox">
												<label for="a-1" class="checkbox-custom-label">Air Condition</label>
											</li>
											<li>
												<input id="a-2" class="checkbox-custom" name="a-2" type="checkbox">
												<label for="a-2" class="checkbox-custom-label">Bedding</label>
											</li>
											<li>
												<input id="a-3" class="checkbox-custom" name="a-3" type="checkbox">
												<label for="a-3" class="checkbox-custom-label">Heating</label>
											</li>
											<li>
												<input id="a-4" class="checkbox-custom" name="a-4" type="checkbox">
												<label for="a-4" class="checkbox-custom-label">Internet</label>
											</li>
											<li>
												<input id="a-5" class="checkbox-custom" name="a-5" type="checkbox">
												<label for="a-5" class="checkbox-custom-label">Microwave</label>
											</li>
											<li>
												<input id="a-6" class="checkbox-custom" name="a-6" type="checkbox">
												<label for="a-6" class="checkbox-custom-label">Smoking Allow</label>
											</li>
											<li>
												<input id="a-7" class="checkbox-custom" name="a-7" type="checkbox">
												<label for="a-7" class="checkbox-custom-label">Terrace</label>
											</li>
											<li>
												<input id="a-8" class="checkbox-custom" name="a-8" type="checkbox">
												<label for="a-8" class="checkbox-custom-label">Balcony</label>
											</li>
											<li>
												<input id="a-9" class="checkbox-custom" name="a-9" type="checkbox">
												<label for="a-9" class="checkbox-custom-label">Icon</label>
											</li>
										</ul>
									
									</div>
									
									<div class="ameneties-features mt-3">
										<label>Review Score</label>
										<ul class="no-ul-list">
											<li>
												<input id="mo-1" class="checkbox-custom" name="mo-1" type="checkbox">
												<label for="mo-1" class="checkbox-custom-label search-review">
													<span><i class="fa fa-star filled"></i></span>
													<span><i class="fa fa-star filled"></i></span>
													<span><i class="fa fa-star filled"></i></span>
													<span><i class="fa fa-star filled"></i></span>
													<span><i class="fa fa-star filled"></i></span>
												</label>
											</li>
											<li>
												<input id="mo-2" class="checkbox-custom" name="mo-2" type="checkbox">
												<label for="mo-2" class="checkbox-custom-label search-review">
													<span><i class="fa fa-star filled"></i></span>
													<span><i class="fa fa-star filled"></i></span>
													<span><i class="fa fa-star filled"></i></span>
													<span><i class="fa fa-star filled"></i></span>
													<span><i class="fa fa-star"></i></span>
												</label>
											</li>
											<li>
												<input id="mo-3" class="checkbox-custom" name="mo-3" type="checkbox">
												<label for="mo-3" class="checkbox-custom-label search-review">
													<span><i class="fa fa-star filled"></i></span>
													<span><i class="fa fa-star filled"></i></span>
													<span><i class="fa fa-star filled"></i></span>
													<span><i class="fa fa-star"></i></span>
													<span><i class="fa fa-star"></i></span>
												</label>
											</li>
											<li>
												<input id="mo-4" class="checkbox-custom" name="mo-4" type="checkbox">
												<label for="mo-4" class="checkbox-custom-label search-review">
													<span><i class="fa fa-star filled"></i></span>
													<span><i class="fa fa-star filled"></i></span>
													<span><i class="fa fa-star"></i></span>
													<span><i class="fa fa-star"></i></span>
													<span><i class="fa fa-star"></i></span>
												</label>
											</li>
											<li>
												<input id="mo-5" class="checkbox-custom" name="mo-5" type="checkbox">
												<label for="mo-5" class="checkbox-custom-label search-review">
													<span><i class="fa fa-star filled"></i></span>
													<span><i class="fa fa-star"></i></span>
													<span><i class="fa fa-star"></i></span>
													<span><i class="fa fa-star"></i></span>
													<span><i class="fa fa-star"></i></span>
												</label>
											</li>
											
										</ul>
									
									</div>
									
									<div class="ameneties-features mt-3">
										<label>Lanhuages</label>
										<ul class="no-ul-list">
											<li>
												<input id="ml-1" class="checkbox-custom" name="ml-1" type="checkbox">
												<label for="ml-1" class="checkbox-custom-label">English</label>
											</li>
											<li>
												<input id="ml-2" class="checkbox-custom" name="ml-2" type="checkbox">
												<label for="ml-2" class="checkbox-custom-label">Fench</label>
											</li>
											<li>
												<input id="ml-3" class="checkbox-custom" name="ml-3" type="checkbox">
												<label for="ml-3" class="checkbox-custom-label">Spanish</label>
											</li>
											
										</ul>
									
									</div>
							
								</div>
							</div>
						</div>
						<!-- Sidebar End -->
							
						<div class="order-1 content-area col-lg-8 col-md-12 order-md-1 order-lg-2">
							<div class="row">
							
								<div class="col-lg-12 col-md-12 col-sm-12">
									<div class="shorting-wrap">
										<h5 class="shorting-title">507 Results</h5>
										<div class="shorting-right">
											<label>Short By:</label>
											<div class="dropdown show">
												<a class="btn btn-filter dropdown-toggle" href="tour-list-sidebar.html#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
													<span class="selection">Most Rated</span>
												</a>
												<div class="drp-select dropdown-menu">
													<a class="dropdown-item" href="JavaScript:Void(0);">Most Rated</a>
													<a class="dropdown-item" href="JavaScript:Void(0);">Most Viewd</a>
													<a class="dropdown-item" href="JavaScript:Void(0);">News Listings</a>
													<a class="dropdown-item" href="JavaScript:Void(0);">High Rated</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								
							</div>
							
							<div class="row m-0">
							
								<!-- Single List -->
								<div class="book_list_box popular_item">
									<div class="row no-gutters">
										
										<div class="col-lg-4 col-md-4">
											<figure>
												<a href="tour-detail.html"><img src="frontend/assets/img/destination/des-2.jpg" class="img-responsive" alt="" /></a>
											</figure>
										</div>
										
										<div class="col-lg-6 col-md-6 pl-5 side-br">
											<div class="book_list_header">
												<div class="view-ratting">
													<i class="fa fa-star filler"></i>
													<i class="fa fa-star filler"></i>
													<i class="fa fa-star filler"></i>
													<i class="fa fa-star filler"></i>
													<i class="fa fa-star filler"></i>
												</div>
												<h4 class="book_list_title"><a href="tour-detail.html">California To Newyork</a></h4>
												<span class="location"><i class="ti-calendar"></i>6 days package</span>
											</div>
											<div class="book_list_description">
												<P>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum.</P>
											</div>
											<div class="book_list_rate">
												<h5 class="over_all_rate high"><span class="rating_status">4.8</span>Very Good<small>(16 Reviews)</small></h5>
											</div>
											<div class="book_list_offers">
												<ul>
													<li><i class="ti-location-pin"></i>Free WiFi</li>
													<li><i class="ti-car"></i>Parking</li>
													<li><i class="ti-cup"></i>Breakfast</li>
												</ul>
											</div>
										</div>
										
										<div class="col-lg-2 col-md-2 padd-l-0">
											<div class="book_list_foot">
												<span class="off-status theme-cl">Up To 10% Off</span>
												<h4 class="book_list_price">$180</h4>
												<span class="booking-time">per mem</span>
												<a href="tour-list-sidebar.html#" class="book_list_btn btn-theme">Select</a>
											</div>
										</div>
										
									</div>
								</div>
								
								<!-- Single List -->
								<div class="book_list_box popular_item">
									<div class="row no-gutters">
										
										<div class="col-lg-4 col-md-4">
											<figure>
												<a href="tour-detail.html"><img src="frontend/assets/img/destination/des-6.jpg" class="img-responsive" alt="" /></a>
											</figure>
										</div>
										
										<div class="col-lg-6 col-md-6 pl-5 side-br">
											<div class="book_list_header">
												<div class="view-ratting">
													<i class="fa fa-star filler"></i>
													<i class="fa fa-star filler"></i>
													<i class="fa fa-star filler"></i>
													<i class="fa fa-star filler"></i>
													<i class="fa fa-star filler"></i>
												</div>
												<h4 class="book_list_title"><a href="tour-detail.html">Mumbai To Indore</a></h4>
												<span class="location"><i class="ti-calendar"></i>5 days package</span>
											</div>
											<div class="book_list_description">
												<P>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum.</P>
											</div>
											<div class="book_list_rate">
												<h5 class="over_all_rate high"><span class="rating_status">4.6</span>Very Good<small>(16 Reviews)</small></h5>
											</div>
											<div class="book_list_offers">
												<ul>
													<li><i class="ti-location-pin"></i>Free WiFi</li>
													<li><i class="ti-car"></i>Parking</li>
													<li><i class="ti-cup"></i>Breakfast</li>
												</ul>
											</div>
										</div>
										
										<div class="col-lg-2 col-md-2 padd-l-0">
											<div class="book_list_foot">
												<span class="off-status theme-cl">Up To 18% Off</span>
												<h4 class="book_list_price">$340</h4>
												<span class="booking-time">per mem</span>
												<a href="{{route('details')}}" class="book_list_btn btn-theme">Select</a>
											</div>
										</div>
										
									</div>
								</div>
								
								<!-- Single List -->
								<div class="book_list_box popular_item">
									<div class="row no-gutters">
										
										<div class="col-lg-4 col-md-4">
											<figure>
												<a href="tour-detail.html"><img src="frontend/assets/img/destination/des-5.jpg" class="img-responsive" alt="" /></a>
											</figure>
										</div>
										
										<div class="col-lg-6 col-md-6 pl-5 side-br">
											<div class="book_list_header">
												<div class="view-ratting">
													<i class="fa fa-star filler"></i>
													<i class="fa fa-star filler"></i>
													<i class="fa fa-star filler"></i>
													<i class="fa fa-star filler"></i>
													<i class="fa fa-star filler"></i>
												</div>
												<h4 class="book_list_title"><a href="tour-detail.html">London To France</a></h4>
												<span class="location"><i class="ti-calendar"></i>7 days package</span>
											</div>
											<div class="book_list_description">
												<P>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum.</P>
											</div>
											<div class="book_list_rate">
												<h5 class="over_all_rate high"><span class="rating_status">4.9</span>Very Good<small>(16 Reviews)</small></h5>
											</div>
											<div class="book_list_offers">
												<ul>
													<li><i class="ti-location-pin"></i>Free WiFi</li>
													<li><i class="ti-car"></i>Parking</li>
													<li><i class="ti-cup"></i>Breakfast</li>
												</ul>
											</div>
										</div>
										
										<div class="col-lg-2 col-md-2 padd-l-0">
											<div class="book_list_foot">
												<span class="off-status theme-cl">Up To 20% Off</span>
												<h4 class="book_list_price">$222</h4>
												<span class="booking-time">per mem</span>
												<a href="tour-list-sidebar.html#" class="book_list_btn btn-theme">Select</a>
											</div>
										</div>
										
									</div>
								</div>
								
								<!-- Single List -->
								<div class="book_list_box popular_item">
									<div class="row no-gutters">
										
										<div class="col-lg-4 col-md-4">
											<figure>
												<a href="tour-detail.html"><img src="frontend/assets/img/destination/des-7.jpg" class="img-responsive" alt="" /></a>
											</figure>
										</div>
										
										<div class="col-lg-6 col-md-6 pl-5 side-br">
											<div class="book_list_header">
												<div class="view-ratting">
													<i class="fa fa-star filler"></i>
													<i class="fa fa-star filler"></i>
													<i class="fa fa-star filler"></i>
													<i class="fa fa-star filler"></i>
													<i class="fa fa-star filler"></i>
												</div>
												<h4 class="book_list_title"><a href="tour-detail.html">Austrailia TO Paris</a></h4>
												<span class="location"><i class="ti-calendar"></i>4 days package</span>
											</div>
											<div class="book_list_description">
												<P>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum.</P>
											</div>
											<div class="book_list_rate">
												<h5 class="over_all_rate high"><span class="rating_status">4.8</span>Very Good<small>(16 Reviews)</small></h5>
											</div>
											<div class="book_list_offers">
												<ul>
													<li><i class="ti-location-pin"></i>Free WiFi</li>
													<li><i class="ti-car"></i>Parking</li>
													<li><i class="ti-cup"></i>Breakfast</li>
												</ul>
											</div>
										</div>
										
										<div class="col-lg-2 col-md-2 padd-l-0">
											<div class="book_list_foot">
												<span class="off-status theme-cl">Up To 30% Off</span>
												<h4 class="book_list_price">$158</h4>
												<span class="booking-time">per mem</span>
												<a href="tour-list-sidebar.html#" class="book_list_btn btn-theme">Select</a>
											</div>
										</div>
										
									</div>
								</div>
								
								<div class="col-md-12 col-sm-12 mt-3">
									<div class="text-center">
										
										<div class="spinner-grow text-danger" role="status">
										  <span class="sr-only">Loading...</span>
										</div>
										<div class="spinner-grow text-warning" role="status">
										  <span class="sr-only">Loading...</span>
										</div>
										<div class="spinner-grow text-success" role="status">
										  <span class="sr-only">Loading...</span>
										</div>
										
									</div>
								</div>
								
							</div>
							
						</div>
					</div>
				</div>
			</section>
			<!-- =================== Sidebar Search ==================== -->

@endsection