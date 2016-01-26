@extends('parent_master')


@section('title')

@endsection



@section('content')

	<div class="banner carousel slide" id="recommended-item-carousel" data-ride="carousel">
			<div class="slides carousel-inner">
				<div class="item active">
					<img src="{{URL::asset('assets/parent/photos/1.jpg')}}" alt="" />
					<div class="banner_caption">
						<div class="container">
							<div class="row">
								<div class="col-xs-12">
									<div class="caption_inner">
										<h1>Welcome To Intellikid</h1>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean consectetur ante volutpat sem aliquam lobortis. Mauris porta fermentum volutpat. Praesent est sapien, tincidunt vel arcu vitae, mattis sollicitudin lectus.</p>
										<a href="about.html">Learn More</a>
									</div><!--end caption_inner-->
								</div>
							</div><!--end row-->
						</div><!--end container-->
					</div><!--end banner_caption-->
				</div>
				<div class="item">
					<img src="{{URL::asset('assets/parent/photos/2.jpg')}}" alt="" />
					<div class="banner_caption">
						<div class="container">
							<div class="row">
								<div class="col-xs-12">
									<div class="caption_inner">
										<h1>IntelliKid going on</h1>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean consectetur ante volutpat sem aliquam lobortis. Mauris porta fermentum volutpat. Praesent est sapien, tincidunt vel arcu vitae, mattis sollicitudin lectus.</p>
										<a href="apply_now.html">Apply Now</a>
									</div><!--end caption_inner-->
								</div>
							</div><!--end row-->
						</div><!--end container-->
					</div><!--end banner_caption-->
				</div>
				<div class="item">
					<img src="{{URL::asset('assets/parent/photos/3.jpg')}}" alt="" />
					<div class="banner_caption">
						<div class="container">
							<div class="row">
								<div class="col-xs-12">
									<div class="caption_inner">
										<h1>Arrange a tour to our page</h1>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean consectetur ante volutpat sem aliquam lobortis. Mauris porta fermentum volutpat. Praesent est sapien, tincidunt vel arcu vitae, mattis sollicitudin lectus.</p>
										<a href="contact_us.html">Contact Us</a>
									</div><!--end caption_inner-->
								</div>
							</div><!--end row-->
						</div><!--end container-->
					</div><!--end banner_caption-->
				</div>
				<div class="item">
					<img src="{{URL::asset('assets/parent/photos/5.jpg')}}" alt="" />
					<div class="banner_caption">
						<div class="container">
							<div class="row">
								<div class="col-xs-12">
									<div class="caption_inner">
										<h1>Find your way</h1>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean consectetur ante volutpat sem aliquam lobortis. Mauris porta fermentum volutpat. Praesent est sapien, tincidunt vel arcu vitae, mattis sollicitudin lectus.</p>
										<a href="courses.html">Find Course</a>
									</div><!--end caption_inner-->
								</div>
							</div><!--end row-->
						</div><!--end container-->
					</div><!--end banner_caption-->
				</div>
			</div>
			
			<a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
				<img src="{{URL::asset('assets/parent/img/home/slider/prev.png')}}">
			  </a>
			  <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
				<img src="{{URL::asset('assets/parent/img/home/slider/next.png')}}">
			  </a>		
					
		</div><!--end banner-->
		
		
		
		<div class="aboutArea">
		  <div class="container">
			<div class="row clearfix">
			  <div class="col-xs-12">
				<div class="aboutTitle">
				  <h2>Learn About Royal College</h2>
				</div><!-- aboutTitle -->
			  </div><!-- col-sm-3 col-xs-12 -->
			</div><!-- row clearfix -->
			<div class="row clearfix">
			  <div class="col-xs-12">
				<div class="about_inner">
					<ul>
						<li>
							<div class="aboutImage">
							  <img src="" alt="" class="img-responsive" />
							  <a href="international_students.html" class="captionLink">International Students <span></span></a>
							</div><!-- aboutImage -->
						</li>
						<li>
							<div class="aboutImage">
							  <img src="img/home/learn/learn_2.jpg" alt="" class="img-responsive" />
							  <a href="stuff.html" class="captionLink">The Stuffs <span></span></a>
							</div><!-- aboutImage -->
						</li>
						<li>
							<div class="aboutImage">
							  <img src="img/home/learn/learn_3.jpg" alt="" class="img-responsive" />
							  <a href="photo_gallery.html" class="captionLink">Photo Gallery <span></span></a>
							</div><!-- aboutImage -->
						</li>
						<li>
							<div class="aboutImage">
							  <img src="img/home/learn/learn_4.jpg" alt="" class="img-responsive" />
							  <a href="apply_now.html" class="captionLink">Apply Now <span></span></a>
							</div>
						</li>
					</ul>
				</div>
			  </div><!-- col-sm-3 col-xs-12 -->
			  
			</div><!-- row clearfix -->
		  </div><!-- container -->
		</div><!-- aboutArea -->
		<div class="mainContent">
		  <div class="container">
			<div class="row clearfix">
			  <div class="col-sm-9 col-xs-12 videoNine">
				<div class="videoArea clearfix">
				  <h3>Welcome To Royal College</h3>
				  <div class="videoLeft clearfix">
					<img src="img/home/video_image.jpg" data-video="https://www.youtube.com/embed/oOMcZoeEK0A?autoplay=1">
				  </div><!-- videoLeft -->
				  <div class="videoRight">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean consectetur ante volutpat sem aliquam lobortis. Mauris porta fermentum volutpat. Praesent est sapien, tincidunt vel arcu vitae, mattis sollicitudin lectus. Mauris porta fermentum volutpat. Praesent est sapien, tincidunt vel arcu vitae, mattis sollicitudin lectus.</p>
					<a href="about.html" class="btn btn-block learnBtn">Learn More</a>
				  </div><!-- videoRight -->
				</div><!-- videoArea -->
				<div class="resultPart clearfix">
				  <ul class="list-inline">
					<li>
					  <h4>Why Chose Us?</h4>
					  <div class="aboutImage">
						<img src="img/home/latest/latest_1.jpg" alt="" class="img-responsive" />
						<a href="contact_us.html" class="captionLink">View Now <span></span></a>
					  </div><!-- aboutImage -->
					</li>
					<li>
					  <h4>Student Accommodation</h4>
					  <div class="aboutImage">
						<img src="img/home/latest/latest_2.jpg" alt="" class="img-responsive" />
						<a href="accommodation.html" class="captionLink">Read more <span></span></a>
					  </div><!-- aboutImage -->
					</li>
					<li>
					  <h4>Plan a Tour</h4>
					  <div class="aboutImage">
						<img src="img/home/latest/latest_3.jpg" alt="" class="img-responsive" />
						<a href="contact_us.html" class="captionLink">Contact Us <span></span></a>
					  </div><!-- aboutImage -->
					</li>
				  </ul>
				</div>
			  </div><!-- col-sm-9 col-xs-12 -->
			  <div class="col-sm-3 col-xs-12 findThree findBorder">
				<div class="find_three_inner">
					<div class="formArea clearfix">
						  <div class="formTitle">
							<h3>Find a Course</h3>
							<p>Offered in small class sizes with great emphasis on the demands of the specification and exam technique.</p>
						  </div><!-- formTitle -->
						  <form action="#" method="post">
						
							<div class="form-group">
							  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Course Name">
							</div>
							<button type="submit" class="btn btn-default btn-block commonBtn">Search</button>
						  </form>
						</div><!-- formArea -->
					<div class="getArea clearfix">
					  <div class="formTitle">
						<h3 class="extraPadding">"Getting into..." University Guides</h3>
						<p class="reduceMargin">Offered in small class sizes with great emphasis on the demands of the specification and exam technique.</p>
						
						<button type="submit" class="btn btn-default btn-block commonBtn">Get It Now</button>
					  </div><!-- formTitle -->
					</div><!-- getArea -->	
				</div>					
			  </div><!-- col-sm-3 col-xs-12 -->
			</div><!-- row clearfix -->
		  </div><!-- container -->
		</div><!-- mainContent -->
		
		
		<div class="menuFooter">
		  <div class="container">
			<div class="row clearfix">
			  <div class="col-sm-3 col-xs-12">
				
			  </div><!-- col-sm-3 col-xs-12 -->
			  <div class="col-sm-3 col-xs-12 borderLeft clearfix">
			
			  </div><!-- col-sm-3 col-xs-12 -->
			  <div class="col-sm-3 col-xs-12 borderLeft clearfix">
				<div class="socialArea clearfix">
				  <h5>Find us on:</h5>
				  <ul class="list-inline ">
					<li><a href="#"><i class="fa fa-twitter"></i></a></li>
					<li><a href="#"><i class="fa fa-facebook"></i></a></li>
					<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
					<li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
					<li><a href="#"><i class="fa fa-flickr"></i></a></li>
					<li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
				  </ul>
				</div><!-- social -->

@endsection