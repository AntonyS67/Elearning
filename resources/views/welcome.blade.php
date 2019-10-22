@include('header')
<div id="page">
		
	<header class="header menu_2">
		<div id="preloader"><div data-loader="circle-side"></div></div><!-- /Preload -->
		<div id="logo">
			<a href="index.html"><img src="{{asset('img/logo.png')}}" width="149" height="42" data-retina="true" alt=""></a>
		</div>
		<ul id="top_menu">
			<li><a href="#0" class="search-overlay-menu-btn">Search</a></li>
			<li class="hidden_tablet"><a href="login.html" class="btn_1 rounded">Login</a></li>
		</ul>
		<!-- /top_menu -->
		<a href="#menu" class="btn_mobile">
			<div class="hamburger hamburger--spin" id="hamburger">
				<div class="hamburger-box">
					<div class="hamburger-inner"></div>
				</div>
			</div>
		</a>
		<nav id="menu" class="main-menu">
			<ul>
				<li><span><a href="index.html">Home</a></span>
				</li>
				<li><span><a href="cursos.html">Courses</a></span>
				</li>
				
			</ul>
		</nav>
		<!-- Search Menu -->
		<div class="search-overlay-menu">
			<span class="search-overlay-close"><span class="closebt"><i class="ti-close"></i></span></span>
			<form role="search" id="searchform" method="get">
				<input value="" name="q" type="search" placeholder="Search..." />
				<button type="submit"><i class="icon_search"></i>
				</button>
			</form>
		</div><!-- End Search Menu -->
	</header>
	<!-- /header -->
	
	<main>
		<section class="hero_single version_2">
			<div class="wrapper">
				<div class="container">
					<h3>Que quieres Aprender?</h3>
					<p>Aumenta tu experiencia en tecnología, negocios y desarrollo personal</p>
					<form>
						<div id="custom-search-input">
							<div class="input-group">
								<input type="text" class=" search-query" placeholder="Aprende a tu ritmo">
								<input type="submit" class="btn_search" value="Search">
							</div>
						</div>
					</form>
				</div>
			</div>
		</section>
		<!-- /hero_single -->

		<div class="features clearfix">
			<div class="container">
				<ul>
					<li><i class="pe-7s-study"></i>
						<h4>+200 courses</h4><span>Explore a variety of fresh topics</span>
					</li>
					<li><i class="pe-7s-cup"></i>
						<h4>Expert teachers</h4><span>Find the right instructor for you</span>
					</li>
					<li><i class="pe-7s-target"></i>
						<h4>Focus on target</h4><span>Increase your personal expertise</span>
					</li>
				</ul>
			</div>
		</div>
		<!-- /features -->

		<div class="container-fluid margin_120_0">
			<div class="main_title_2">
				<span><em></em></span>
				<h2>Udema Popular Courses</h2>
				<p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p>
			</div>
			<div id="reccomended" class="owl-carousel owl-theme">
				<div class="item">
					<div class="box_grid">
						<figure>
							<a href="#0" class="wish_bt"></a>
							<a href="curso_detalle.html">
								<div class="preview"><span>Preview course</span></div><img src="{{asset('img/course__list_1.jpg')}}" class="img-fluid" alt=""></a>
							<div class="price">$39</div>

						</figure>
						<div class="wrapper">
							<small>Category</small>
							<h3>Persius delenit has cu</h3>
							<p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cu.</p>
							<div class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i> <small>(145)</small></div>
						</div>
						<ul>
							<li><i class="icon_clock_alt"></i> 1h 30min</li>
							<li><i class="icon_like"></i> 890</li>
							<li><a href="curso_detalle.html">Enroll now</a></li>
						</ul>
					</div>
				</div>
				<!-- /item -->
				<div class="item">
					<div class="box_grid">
						<figure>
							<a href="#0" class="wish_bt"></a>
							<a href="curso_detalle.html"><img src="{{asset('img/course__list_2.jpg')}}" class="img-fluid" alt=""></a>
							<div class="price">$45</div>
							<div class="preview"><span>Preview course</span></div>
						</figure>
						<div class="wrapper">
							<small>Category</small>
							<h3>Persius delenit has cu</h3>
							<p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cu.</p>
							<div class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i> <small>(145)</small></div>
						</div>
						<ul>
							<li><i class="icon_clock_alt"></i> 1h 30min</li>
							<li><i class="icon_like"></i> 890</li>
							<li><a href="curso_detalle.html">Enroll now</a></li>
						</ul>
					</div>
				</div>
				<!-- /item -->
				<div class="item">
					<div class="box_grid">
						<figure>
							<a href="#0" class="wish_bt"></a>
							<a href="curso_detalle.html"><img src="{{asset('img/course__list_3.jpg')}}" class="img-fluid" alt=""></a>
							<div class="price">$54</div>
							<div class="preview"><span>Preview course</span></div>
						</figure>
						<div class="wrapper">
							<small>Category</small>
							<h3>Persius delenit has cu</h3>
							<p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cu.</p>
							<div class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i> <small>(145)</small></div>
						</div>
						<ul>
							<li><i class="icon_clock_alt"></i> 1h 30min</li>
							<li><i class="icon_like"></i> 890</li>
							<li><a href="curso_detalle.html">Enroll now</a></li>
						</ul>
					</div>
				</div>
				<!-- /item -->
				<div class="item">
					<div class="box_grid">
						<figure>
							<a href="#0" class="wish_bt"></a>
							<a href="curso_detalle.html"><img src="{{asset('img/course__list_4.jpg')}}" class="img-fluid" alt=""></a>
							<div class="price">$27</div>
							<div class="preview"><span>Preview course</span></div>
						</figure>
						<div class="wrapper">
							<small>Category</small>
							<h3>Persius delenit has cu</h3>
							<p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cu.</p>
							<div class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i> <small>(145)</small></div>
						</div>
						<ul>
							<li><i class="icon_clock_alt"></i> 1h 30min</li>
							<li><i class="icon_like"></i> 890</li>
							<li><a href="curso_detalle.html">Enroll now</a></li>
						</ul>
					</div>
				</div>
				<!-- /item -->
				<div class="item">
					<div class="box_grid">
						<figure>
							<a href="#0" class="wish_bt"></a>
							<a href="curso_detalle.html"><img src="{{asset('img/course__list_5.jpg')}}" class="img-fluid" alt=""></a>
							<div class="price">$35</div>
							<div class="preview"><span>Preview course</span></div>
						</figure>
						<div class="wrapper">
							<small>Category</small>
							<h3>Persius delenit has cu</h3>
							<p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cu.</p>
							<div class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i> <small>(145)</small></div>
						</div>
						<ul>
							<li><i class="icon_clock_alt"></i> 1h 30min</li>
							<li><i class="icon_like"></i> 890</li>
							<li><a href="curso_detalle.html">Enroll now</a></li>
						</ul>
					</div>
				</div>
				<!-- /item -->
				<div class="item">
					<div class="box_grid">
						<figure>
							<a href="#0" class="wish_bt"></a>
							<a href="curso_detalle.html"><img src="{{asset('img/course__list_6.jpg')}}" class="img-fluid" alt=""></a>
							<div class="price">$54</div>
							<div class="preview"><span>Preview course</span></div>
						</figure>
						<div class="wrapper">
							<small>Category</small>
							<h3>Persius delenit has cu</h3>
							<p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cu.</p>
							<div class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i> <small>(145)</small></div>
						</div>
						<ul>
							<li><i class="icon_clock_alt"></i> 1h 30min</li>
							<li><i class="icon_like"></i> 890</li>
							<li><a href="curso_detalle.html">Enroll now</a></li>
						</ul>
					</div>
				</div>
				<!-- /item -->
			</div>
			<!-- /carousel -->
			<div class="container">
				<p class="btn_home_align"><a href="cursos.html" class="btn_1 rounded">View all courses</a></p>
			</div>
			<!-- /container -->
			<hr>
		</div>
		<!-- /container -->

		<div class="container margin_30_95">
			<div class="main_title_2">
				<span><em></em></span>
				<h2>Udema Categories Courses</h2>
				<p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-6 wow" data-wow-offset="150">
					<a href="#0" class="grid_item">
						<figure class="block-reveal">
							<div class="block-horizzontal"></div>
							<img src="{{asset('img/course_1.jpg')}}" class="img-fluid" alt="">
							<div class="info">
								<small><i class="ti-layers"></i>15 Programmes</small>
								<h3>Arts and Humanities</h3>
							</div>
						</figure>
					</a>
				</div>
				<!-- /grid_item -->
				<div class="col-lg-4 col-md-6 wow" data-wow-offset="150">
					<a href="#0" class="grid_item">
						<figure class="block-reveal">
							<div class="block-horizzontal"></div>
							<img src="{{asset('img/course_2.jpg')}}" class="img-fluid" alt="">
							<div class="info">
								<small><i class="ti-layers"></i>23 Programmes</small>
								<h3>Engineering</h3>
							</div>
						</figure>
					</a>
				</div>
				<!-- /grid_item -->
				<div class="col-lg-4 col-md-6 wow" data-wow-offset="150">
					<a href="#0" class="grid_item">
						<figure class="block-reveal">
							<div class="block-horizzontal"></div>
							<img src="{{asset('img/course_3.jpg')}}" class="img-fluid" alt="">
							<div class="info">
								<small><i class="ti-layers"></i>23 Programmes</small>
								<h3>Architecture</h3>
							</div>
						</figure>
					</a>
				</div>
				<!-- /grid_item -->
				<div class="col-lg-4 col-md-6 wow" data-wow-offset="150">
					<a href="#0" class="grid_item">
						<figure class="block-reveal">
							<div class="block-horizzontal"></div>
							<img src="{{asset('img/course_4.jpg')}}" class="img-fluid" alt="">
							<div class="info">
								<small><i class="ti-layers"></i>23 Programmes</small>
								<h3>Science and Biology</h3>
							</div>
						</figure>
					</a>
				</div>
				<!-- /grid_item -->
				<div class="col-lg-4 col-md-6 wow" data-wow-offset="150">
					<a href="#0" class="grid_item">
						<figure class="block-reveal">
							<div class="block-horizzontal"></div>
							<img src="{{asset('img/course_5.jpg')}}" class="img-fluid" alt="">
							<div class="info">
								<small><i class="ti-layers"></i>23 Programmes</small>
								<h3>Law and Criminology</h3>
							</div>
						</figure>
					</a>
				</div>
				<!-- /grid_item -->
				<div class="col-lg-4 col-md-6 wow" data-wow-offset="150">
					<a href="#0" class="grid_item">
						<figure class="block-reveal">
							<div class="block-horizzontal"></div>
							<img src="{{asset('img/course_6.jpg')}}" class="img-fluid" alt="">
							<div class="info">
								<small><i class="ti-layers"></i>23 Programmes</small>
								<h3>Medical</h3>
							</div>
						</figure>
					</a>
				</div>
				<!-- /grid_item -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->

	</main>
    <!-- /main -->
@include('footer')