@extends('frontend.layouts.app')

@section('main-content')
			
			<!-- ============================ Page Title Start================================== -->
			<div class="image-cover page-title" style="background:url(frontend/assets/img/banner-5.jpg) no-repeat;" data-overlay="6">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12">
							
							<h2 class="ipt-title">Our Articles</h2>
							<span class="ipn-subtitle text-light">Blog News & Articles</span>
							
						</div>
					</div>
				</div>
			</div>
			<!-- ============================ Page Title End ================================== -->
			
			<!-- ================= Articles start ========================= -->
			<section>
				<div class="container">
					
					<div class="row">
						<div class="col-lg-12 col-md-12">
							<div class="sec-heading center">
								<p>Recent Articles</p>
								<h2>Featured Blog & News</h2>
							</div>
						</div>
					</div>
					
					<div class="row">
					
						<!-- Single Blog -->
						<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
							<article class="post-grid-layout">
								<a href="{{route('blog-detail')}}">
									<div class="post-article-header">
										<img src="frontend/assets/img/c-1.jpg" class="img-fluid mx-auto" alt="">
										<span class="post-article-cat">Sport & Football</span>
									</div>
								</a>
								<div class="post-article box-inner">
									<div class="post-grid-caption-header">
										<h4 class="entry-title"><a href="{{route('blog-detail')}}">Whay Work with Bookly</a></h4>
										<div class="post-short-des">
											simply dummy text of the printing and typesetting industry.
										</div>
									</div>
								</div>
								<div class="post-article-footer">
									<div class="post-author">
										
										By <img src="frontend/assets/img/user-2.jpg" class="img-fluid" alt="">
										<a href="{{route('blog-detail')}}">
											Admam Kushar
										</a>
									</div>
									<span><i class="ti-eye"></i>320</span>
								</div>
							</article>
						</div>
						
						<!-- Single Blog -->
						<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
							<article class="post-grid-layout">
								<a href="blog-detail.html">
									<div class="post-article-header">
										<img src="frontend/assets/img/c-3.jpg" class="img-fluid mx-auto" alt="">
										<span class="post-article-cat">Sport & Football</span>
									</div>
								</a>
								<div class="post-article box-inner">
									<div class="post-grid-caption-header">
										<h4 class="entry-title"><a href="blog-detail.html">Benifits of Bookly Template</a></h4>
										<div class="post-short-des">
											simply dummy text of the printing and typesetting industry.
										</div>
									</div>
								</div>
								<div class="post-article-footer">
									<div class="post-author">
										
										By <img src="frontend/assets/img/user-3.jpg" class="img-fluid" alt="">
										<a href="blog.html#">
											Admam Kushar
										</a>
									</div>
									<span><i class="ti-eye"></i>320</span>
								</div>
							</article>
						</div>
						
						<!-- Single Blog -->
						<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
							<article class="post-grid-layout">
								<a href="blog-detail.html">
									<div class="post-article-header">
										<img src="frontend/assets/img/c-4.jpg" class="img-fluid mx-auto" alt="">
										<span class="post-article-cat">Sport & Football</span>
									</div>
								</a>
								<div class="post-article box-inner">
									<div class="post-grid-caption-header">
										<h4 class="entry-title"><a href="blog-detail.html">Whay Purchage Bookly Template</a></h4>
										<div class="post-short-des">
											simply dummy text of the printing and typesetting industry.
										</div>
									</div>
								</div>
								<div class="post-article-footer">
									<div class="post-author">
										
										By <img src="frontend/assets/img/user-4.jpg" class="img-fluid" alt="">
										<a href="blog.html#">
											Admam Kushar
										</a>
									</div>
									<span><i class="ti-eye"></i>320</span>
								</div>
							</article>
						</div>
						
						<!-- Single Blog -->
						<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
							<article class="post-grid-layout">
								<a href="blog-detail.html">
									<div class="post-article-header">
										<img src="frontend/assets/img/c-1.jpg" class="img-fluid mx-auto" alt="">
										<span class="post-article-cat">Sport & Football</span>
									</div>
								</a>
								<div class="post-article box-inner">
									<div class="post-grid-caption-header">
										<h4 class="entry-title"><a href="blog-detail.html">Whay Work with Bookly</a></h4>
										<div class="post-short-des">
											simply dummy text of the printing and typesetting industry.
										</div>
									</div>
								</div>
								<div class="post-article-footer">
									<div class="post-author">
										
										By <img src="frontend/assets/img/user-2.jpg" class="img-fluid" alt="">
										<a href="blog.html#">
											Admam Kushar
										</a>
									</div>
									<span><i class="ti-eye"></i>320</span>
								</div>
							</article>
						</div>
						
						<!-- Single Blog -->
						<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
							<article class="post-grid-layout">
								<a href="blog-detail.html">
									<div class="post-article-header">
										<img src="frontend/assets/img/c-3.jpg" class="img-fluid mx-auto" alt="">
										<span class="post-article-cat">Sport & Football</span>
									</div>
								</a>
								<div class="post-article box-inner">
									<div class="post-grid-caption-header">
										<h4 class="entry-title"><a href="blog-detail.html">Benifits of Bookly Template</a></h4>
										<div class="post-short-des">
											simply dummy text of the printing and typesetting industry.
										</div>
									</div>
								</div>
								<div class="post-article-footer">
									<div class="post-author">
										
										By <img src="frontend/assets/img/user-3.jpg" class="img-fluid" alt="">
										<a href="blog.html#">
											Admam Kushar
										</a>
									</div>
									<span><i class="ti-eye"></i>320</span>
								</div>
							</article>
						</div>
						
						<!-- Single Blog -->
						<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
							<article class="post-grid-layout">
								<a href="blog-detail.html">
									<div class="post-article-header">
										<img src="frontend/assets/img/c-4.jpg" class="img-fluid mx-auto" alt="">
										<span class="post-article-cat">Sport & Football</span>
									</div>
								</a>
								<div class="post-article box-inner">
									<div class="post-grid-caption-header">
										<h4 class="entry-title"><a href="blog-detail.html">Whay Purchage Bookly Template</a></h4>
										<div class="post-short-des">
											simply dummy text of the printing and typesetting industry.
										</div>
									</div>
								</div>
								<div class="post-article-footer">
									<div class="post-author">
										
										By <img src="frontend/assets/img/user-4.jpg" class="img-fluid" alt="">
										<a href="blog.html#">
											Admam Kushar
										</a>
									</div>
									<span><i class="ti-eye"></i>320</span>
								</div>
							</article>
						</div>
						
					</div>
					
				</div>
			</section>
			<!-- ========================= End Articles Section ============================ -->
			
			
@endsection