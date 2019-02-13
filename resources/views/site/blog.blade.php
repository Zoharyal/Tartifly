@extends('layouts.layout')
@section('content')
		
	<div class="colorlib-loader"></div>

	<div id="page">
		<nav class="colorlib-nav" role="navigation">
			<div class="top-menu">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-2">
							<div id="colorlib-logo"><a href="index.html">Tour</a></div>
						</div>
						<div class="col-xs-10 text-right menu-1">
							<ul>
								<li><a href="index.html">Home</a></li>
								<li class="has-dropdown">
									<a href="tours.html">Tours</a>
									<ul class="dropdown">
										<li><a href="#">Destination</a></li>
										<li><a href="#">Cruises</a></li>
										<li><a href="#">Hotels</a></li>
										<li><a href="#">Booking</a></li>
									</ul>
								</li>
								<li><a href="hotels.html">Hotels</a></li>
								<li><a href="services.html">Services</a></li>
								<li class="active"><a href="blog.html">Blog</a></li>
								<li><a href="about.html">About</a></li>
								<li>@auth
									<a>Mon compte</a>
									@else
									<a href="{{ url('login')}}">Se connecter</a>
									@endif
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>
		<aside id="colorlib-hero">
			<div class="flexslider">
				<ul class="slides">
			   	<li style="background-image: url(images/cover-img-2.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h2>by colorlib.com</h2>
				   					<h1>Blog</h1>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			  	</ul>
		  	</div>
		</aside>

		<div id="colorlib-blog">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<div class="wrap-division">
							<article class="animate-box">
								<div class="blog-img" style="background-image: url(images/blog-1.jpg);"></div>
								<div class="desc">
									<div class="meta">
										<p>
											<span>Feb 24, 2018 </span>
											<span>admin </span>
											<span><a href="#">2 Comments</a></span>
										</p>
									</div>
									<h2><a href="#">A Definitive Guide to the Best Dining</a></h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt, qui quod ipsum harum id, minima nesciunt! Saepe soluta, vitae quas expedita voluptatem voluptates placeat numquam provident quis, atque nisi iure?</p>
								</div>
							</article>
							<article class="animate-box">
								<div class="blog-img" style="background-image: url(images/blog-2.jpg);"></div>
								<div class="desc">
									<div class="meta">
										<p>
											<span>Feb 24, 2018 </span>
											<span>admin </span>
											<span><a href="#">1 Comments</a></span>
										</p>
									</div>
									<h2><a href="#">How These 5 People Found The Path to Their Dream Trip</a></h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt, qui quod ipsum harum id, minima nesciunt! Saepe soluta, vitae quas expedita voluptatem voluptates placeat numquam provident quis, atque nisi iure?</p>
								</div>
							</article>
							<article class="animate-box">
								<div class="blog-img" style="background-image: url(images/blog-3.jpg);"></div>
								<div class="desc">
									<div class="meta">
										<p>
											<span>Feb 24, 2018 </span>
											<span>admin </span>
											<span><a href="#">0 Comments</a></span>
										</p>
									</div>
									<h2><a href="#">Our Secret Island Boat Tour Is just for You</a></h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt, qui quod ipsum harum id, minima nesciunt! Saepe soluta, vitae quas expedita voluptatem voluptates placeat numquam provident quis, atque nisi iure?</p>
								</div>
							</article>
						</div>
						<div class="row">
							<div class="col-md-12">
								<ul class="pagination">
									<li class="disabled"><a href="#">&laquo;</a></li>
									<li class="active"><a href="#">1</a></li>
									<li><a href="#">2</a></li>
									<li><a href="#">3</a></li>
									<li><a href="#">4</a></li>
									<li><a href="#">&raquo;</a></li>
								</ul>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="sidebar-wrap">
							<div class="side animate-box">
								<h3 class="sidebar-heading">Recent Post</h3>
								<div class="blog-entry-side">
									<a href="blog.html" class="blog-post">
										<span class="img" style="background-image: url(images/blog-3.jpg);"></span>
										<div class="desc">
											<span class="date">Feb 24, 2018</span>
											<h3>Our Secret Island Boat Tour Is just for You</h3>
											<span class="cat">Tour</span>
										</div>
									</a>
								</div>
								<div class="blog-entry-side">
									<a href="blog.html" class="blog-post">
										<span class="img" style="background-image: url(images/blog-2.jpg);"></span>
										<div class="desc">
											<span class="date">Feb 24, 2018</span>
											<h3>How These 5 People Found The Path to Their Dream Trip</h3>
											<span class="cat">Hotel</span>
										</div>
									</a>
								</div>
								<div class="blog-entry-side">
									<a href="blog.html" class="blog-post">
										<span class="img" style="background-image: url(images/blog-3.jpg);"></span>
										<div class="desc">
											<span class="date">Feb 24, 2018</span>
											<h3>Our Secret Island Boat Tour Is just for You</h3>
											<span class="cat">Cruises</span>
										</div>
									</a>
								</div>
							</div>
							<div class="side animate-box">
								<div class="sidebar-heading">Categories</div>
								<ul class="category">
									<li><a href="#"><i class="icon-check"></i> Car rental<span>(2)</span></a></li>
									<li><a href="#"><i class="icon-check"></i> Flight<span>(2)</span></a></li>
									<li><a href="#"><i class="icon-check"></i> Activities<span>(3)</span></a></li>
									<li><a href="#"><i class="icon-check"></i> Hotel<span>(5)</span></a></li>
									<li><a href="#"><i class="icon-check"></i> Tour<span>(2)</span></a></li>
									<li><a href="#"><i class="icon-check"></i> Travel<span>(3)</span></a></li>
									<li><a href="#"><i class="icon-check"></i> Night<span>(2)</span></a></li>
									<li><a href="#"><i class="icon-check"></i> Cruises<span>(2)</span></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	
		<div id="colorlib-subscribe" style="background-image: url(images/img_bg_2.jpg);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
						<h2>Sign Up for a Newsletter</h2>
						<p>Sign up for our mailing list to get latest updates and offers.</p>
						<form class="form-inline qbstp-header-subscribe">
							<div class="row">
								<div class="col-md-12 col-md-offset-0">
									<div class="form-group">
										<input type="text" class="form-control" id="email" placeholder="Enter your email">
										<button type="submit" class="btn btn-primary">Subscribe</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

@endsection