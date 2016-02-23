@extends('Layouts.kids_master_page')
@section('body')
	<div id="wrapper" class="gallery">
		<div class="wrapper-holder">
			<header id="header">
				<div class="left-part"></div>
				<a id="logo" href="kids_index">Kid' school</a>
				<div class="bar-holder">
					<a class="menu_trigger" href="#">menu</a>
					<nav id="nav">
						<ul>
							<li><a class="active" href="kids_about">About us</a></li>
							<li><a href="kids_events">Events</a></li>
							<li><a href="kids_gallery">Gallery</a></li>
							<li><a href="kids_index">Contact</a></li>
						</ul>
					</nav>
				</div>
			</header>
			<div class="dvdr"></div>
			<div class="container">
				<section id="main">
					<h1>Browse our photo gallery. You can find here our kids and photos from events, parties and meetings</h1>
					<div class="tabs">
						<ul class="filter-controls">
							<li><a href="#" data-filter="*" data-currently-viewing="all" class="selected">Show All</a></li>
							<li><a href="#" data-filter=".kids">Kids</a></li>
							<li><a href="#" data-filter=".meeting">Meetings</a></li>
							<li><a href="#" data-filter=".parties">Parties</a></li>
							<li><a href="#" data-filter=".print">Print</a></li>
						</ul>
					</div>
					
					<ul class="slider sortable-grid">
						<li>
							<ul>
							<li class="grid-item parties">
								<a href="#"><img src="images/img-person01.jpg" alt="" />
								<div class="mask"></div></a>
							<li class="grid-item kids">
								<a href="#"><img src="images/img-kids01.jpg" alt="" />
								<div class="mask"></div></a>
							<li class="grid-item kids">
								<a href="#"><img src="images/img-kids02.jpg" alt="" />
								<div class="mask"></div></a>
							<li class="grid-item parties">
								<a href="#"><img src="images/img-parties02.jpg" alt="" />
								<div class="mask"></div></a>
							<li class="grid-item kids">
								<a href="#"><img src="images/img-kids03.jpg" alt="" />
								<div class="mask"></div></a>
							<li class="grid-item kids">
								<a href="#"><img src="images/img-kids04.jpg" alt="" />
								<div class="mask"></div></a>
							<li class="grid-item meeting">
								<a href="#"><img src="images/img-meeting01.jpg" alt="" />
								<div class="mask"></div></a>
							<li class="grid-item kids">
								<a href="#"><img src="images/img-kids05.jpg" alt="" />
								<div class="mask"></div></a>
							<li class="grid-item meeting">
								<a href="#"><img src="images/img-meeting02.jpg" alt="" />
								<div class="mask"></div></a>
							<li class="grid-item parties print">
								<a href="#"><img src="images/img-parties03.jpg" alt="" />
								<div class="mask"></div></a>
							<li class="grid-item meeting">
								<a href="#"><img src="images/img-meeting03.jpg" alt="" />
								<div class="mask"></div></a>
							<li class="grid-item meeting">
								<a href="#"><img src="images/img-meeting04.jpg" alt="" />
								<div class="mask"></div></a>
							<li class="grid-item kids">
								<a href="#"><img src="images/img-kids05.jpg" alt="" />
								<div class="mask"></div></a>
							<li class="grid-item meeting">
								<a href="#"><img src="images/img-meeting02.jpg" alt="" />
								<div class="mask"></div></a>
							<li class="grid-item parties">
								<a href="#"><img src="images/img-parties03.jpg" alt="" />
								<div class="mask"></div></a>
							<li class="grid-item parties">
								<a href="#"><img src="images/img-parties02.jpg" alt="" />
								<div class="mask"></div></a>
							<li class="grid-item meeting">
								<a href="#"><img src="images/img-meeting01.jpg" alt="" />
								<div class="mask"></div></a>
							<li class="grid-item meeting print">
								<a href="#"><img src="images/img-meeting03.jpg" alt="" />
								<div class="mask"></div></a>
							<li class="grid-item kids">
								<a href="#"><img src="images/img-kids03.jpg" alt="" />
								<div class="mask"></div></a>
							<li class="grid-item kids">
								<a href="#"><img src="images/img-kids04.jpg" alt="" />
								<div class="mask"></div></a>
							<li class="grid-item meeting print">
								<a href="#"><img src="images/img-meeting04.jpg" alt="" />
								<div class="mask"></div></a>
							<li class="grid-item parties print">
								<a href="#"><img src="images/img-person01.jpg" alt="" />
								<div class="mask"></div></a>
							<li class="grid-item kids">
								<a href="#"><img src="images/img-kids01.jpg" alt="" />
								<div class="mask"></div></a>
							<li class="grid-item kids print">
								<a href="#"><img src="images/img-kids02.jpg" alt="" />
								<div class="mask"></div></a>
						</li>
					</ul>
				</section>
			</div>
		</div>
		<div class="top-blue-border"></div>
		<footer id="footer">
			<div class="footer-holder">
				<div class="footer-frame">
					<div class="footer-content">
						<div class="col-holder">
							<div class="col_wrap">
								<div class="col">
									<h3>Our address</h3>
									<address class="map">1186 Madison Ave, NY 10173</address>
									<address class="mail"><a href="mailto:contact@kidschool.com">contact@kidschool.com</a></address>
									<address class="phone">(580) 845 982 431</address>
								</div>
							</div>
							<div class="col_wrap">
								<div class="col">
									<h3>Latest posts</h3>
									<ul class="posts">
										<li><a href="#">Dignissimos ducimus blanditiis</a></li>
										<li><a href="#">Praesentium voluptatum deleniti</a></li>
										<li><a href="#">Atque corrupti quos dolores</a></li>
										<li><a href="#">Molestias excepturi sint occaecati</a></li>
										<li><a href="#">Cupiditate provident similique</a></li>
									</ul>
								</div>
							</div>
							<div class="col_wrap">
								<div class="col">
									<h3>Follow us</h3>
									<p class="social">Accusamus iusto odio dignissimos ducimus qui blanditiis praesentium</p>
									<ul class="social">
										<li><a class="facebook" href="#">Facebook</a></li>
										<li><a class="google" href="#">Google+</a></li>
										<li><a class="twitter" href="#">Twitter</a></li>
										<li><a class="pinterest" href="#">Pinterest</a></li>
									</ul>
								</div>
							</div>
							<div class="col_wrap">
								<div class="col">
									<h3>Newsletter</h3>
									<p class="form-newsletter">Voluptas sit aspernatur consequuntur.</p>
									<form action="#" class="form-newsletter">
										<fieldset>
											<input type="email" placeholder="Your email..." />
											<input class="btn white" type="submit" value="Subscribe" />
										</fieldset>
									</form>
								</div>
							</div>
						</div>
					</div>
					<div class="footer-bottom">
						<div class="holder">
							<p>Copyright 2014 Kid’ school. All rights reserved.</p>
						</div>
					</div>
				</div>
			</div>
		</footer>	
	</div>
	
	@stop