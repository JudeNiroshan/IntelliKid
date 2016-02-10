@extends('Layouts.admin_master_page')
@section('container')

<div id="content">
	<div id="content-header">
		<h1>Gallery</h1>
		<div class="btn-group">
			<a class="btn" title="Manage Files"><i class="fa fa-file"></i></a>
			<a class="btn" title="Manage Users"><i class="fa fa-user"></i></a>
			<a class="btn" title="Manage Comments"><i class="fa fa-comment"></i><span class="label label-danger">5</span></a>
			<a class="btn" title="Manage Orders"><i class="fa fa-shopping-cart"></i></a>
		</div>
	</div>
	<div id="breadcrumb">
		<a href="#" title="Go to Home" class="tip-bottom"><i class="fa fa-home"></i> Home</a>
		<a href="#">Sample pages</a>
		<a href="#" class="current">Gallery</a>
	</div>
	<div class="row">
		<div class="col-xs-12">
			<div class="widget-box">
				<div class="widget-title">
					<span class="icon">
						<i class="fa fa-picture-o"></i>
					</span>
					<h5>Gallery</h5>
				</div>
				<div class="widget-content">
					
					<div class="gallery-masonry">
						<div class="item">
							<a href="#" class="thumbnail">
								<img src="{{asset('assets/adminPage_assets/img/demo/img1.jpg')}}" alt="">
							</a>
							<div class="actions">
								<div class="actions-inner">
									<a title="Edit" href="#" class="tip-top"><i class="fa fa-pencil"></i></a>
									<a title="Remove" href="#" class="tip-top"><i class="fa fa-trash-o"></i></a>
								</div>
							</div>
						</div>
						<div class="item">
							<a href="#" class="thumbnail">
								<imgsrc="{{asset('assets/adminPage_assets/img/demo/img12.jpg')}}" alt="">
							</a>
							<div class="actions">
								<div class="actions-inner">
									<a title="Edit" href="#" class="tip-top"><i class="fa fa-pencil"></i></a>
									<a title="Remove" href="#" class="tip-top"><i class="fa fa-trash-o"></i></a>
								</div>
							</div>
						</div>
						<div class="item">
							<a href="#" class="thumbnail">
								<img src="{{asset('assets/adminPage_assets/img/demo/img3.jpg')}}" alt="">
							</a>
							<div class="actions">
								<div class="actions-inner">
									<a title="Edit" href="#" class="tip-top"><i class="fa fa-pencil"></i></a>
									<a title="Remove" href="#" class="tip-top"><i class="fa fa-trash-o"></i></a>
								</div>
							</div>
						</div>
						<div class="item">
							<a href="#" class="thumbnail">
								<img src="{{asset('assets/adminPage_assets/img/demo/img4.jpg')}}" alt="">
							</a>
							<div class="actions">
								<div class="actions-inner">
									<a title="Edit" href="#" class="tip-top"><i class="fa fa-pencil"></i></a>
									<a title="Remove" href="#" class="tip-top"><i class="fa fa-trash-o"></i></a>
								</div>
							</div>
						</div>
						<div class="item">
							<a href="#" class="thumbnail">
								<img src="{{asset('assets/adminPage_assets/img/demo/img5.jpg')}}" alt="">
							</a>
							<div class="actions">
								<div class="actions-inner">
									<a title="Edit" href="#" class="tip-top"><i class="fa fa-pencil"></i></a>
									<a title="Remove" href="#" class="tip-top"><i class="fa fa-trash-o"></i></a>
								</div>
							</div>
						</div>
						<div class="item">
							<a href="#" class="thumbnail">
								<img src="{{asset('assets/adminPage_assets/img/demo/img6.jpg')}}" alt="">
							</a>
							<div class="actions">
								<div class="actions-inner">
									<a title="Edit" href="#" class="tip-top"><i class="fa fa-pencil"></i></a>
									<a title="Remove" href="#" class="tip-top"><i class="fa fa-trash-o"></i></a>
								</div>
							</div>
						</div>
						<div class="item">
							<a href="#" class="thumbnail">
								<img src="{{asset('assets/adminPage_assets/img/demo/img7.jpg')}}" alt="">
							</a>
							<div class="actions">
								<div class="actions-inner">
									<a title="Edit" href="#" class="tip-top"><i class="fa fa-pencil"></i></a>
									<a title="Remove" href="#" class="tip-top"><i class="fa fa-trash-o"></i></a>
								</div>
							</div>
						</div>
						<div class="item">
							<a href="#" class="thumbnail">
								<img src="{{asset('assets/adminPage_assets/img/demo/img8.jpg')}}" alt="">
							</a>
							<div class="actions">
								<div class="actions-inner">
									<a title="Edit" href="#" class="tip-top"><i class="fa fa-pencil"></i></a>
									<a title="Remove" href="#" class="tip-top"><i class="fa fa-trash-o"></i></a>
								</div>
							</div>
						</div>
						<div class="item">
							<a href="#" class="thumbnail">
								<img src="{{asset('assets/adminPage_assets/img/demo/img9.jpg')}}" alt="">
							</a>
							<div class="actions">
								<div class="actions-inner">
									<a title="Edit" href="#" class="tip-top"><i class="fa fa-pencil"></i></a>
									<a title="Remove" href="#" class="tip-top"><i class="fa fa-trash-o"></i></a>
								</div>
							</div>
						</div>
						<div class="item">
							<a href="#" class="thumbnail">
								<img src="{{asset('assets/adminPage_assets/img/demo/img10.jpg')}}" alt="">
							</a>
							<div class="actions">
								<div class="actions-inner">
									<a title="Edit" href="#" class="tip-top"><i class="fa fa-pencil"></i></a>
									<a title="Remove" href="#" class="tip-top"><i class="fa fa-trash-o"></i></a>
								</div>
							</div>
						</div>
						<div class="item">
							<a href="#" class="thumbnail">
								<img src="{{asset('assets/adminPage_assets/img/demo/img11.jpg')}}" alt="">
							</a>
							<div class="actions">
								<div class="actions-inner">
									<a title="Edit" href="#" class="tip-top"><i class="fa fa-pencil"></i></a>
									<a title="Remove" href="#" class="tip-top"><i class="fa fa-trash-o"></i></a>
								</div>
							</div>
						</div>
						<div class="item">
							<a href="#" class="thumbnail">
								<img src="{{asset('assets/adminPage_assets/img/demo/img12.jpg')}}" alt="">
							</a>
							<div class="actions">
								<div class="actions-inner">
									<a title="Edit" href="#" class="tip-top"><i class="fa fa-pencil"></i></a>
									<a title="Remove" href="#" class="tip-top"><i class="fa fa-trash-o"></i></a>
								</div>
							</div>
						</div>
						<div class="item">
							<a href="#" class="thumbnail">
								<img src="{{asset('assets/adminPage_assets/img/demo/img13.jpg')}}" alt="">
							</a>
							<div class="actions">
								<div class="actions-inner">
									<a title="Edit" href="#" class="tip-top"><i class="fa fa-pencil"></i></a>
									<a title="Remove" href="#" class="tip-top"><i class="fa fa-trash-o"></i></a>
								</div>
							</div>
						</div>
						<div class="item">
							<a href="#" class="thumbnail">
								<img src="{{asset('assets/adminPage_assets/img/demo/img14.jpg')}}" alt="">
							</a>
							<div class="actions">
								<div class="actions-inner">
									<a title="Edit" href="#" class="tip-top"><i class="fa fa-pencil"></i></a>
									<a title="Remove" href="#" class="tip-top"><i class="fa fa-trash-o"></i></a>
								</div>
							</div>
						</div>
						<div class="item">
							<a href="#" class="thumbnail">
								<img src="{{asset('assets/adminPage_assets/img/demo/img15.jpg')}}" alt="">
							</a>
							<div class="actions">
								<div class="actions-inner">
									<a title="Edit" href="#" class="tip-top"><i class="fa fa-pencil"></i></a>
									<a title="Remove" href="#" class="tip-top"><i class="fa fa-trash-o"></i></a>
								</div>
							</div>
						</div>
						<div class="item">
							<a href="#" class="thumbnail">
								<img src="{{asset('assets/adminPage_assets/img/demo/img16.jpg')}}" alt="">
							</a>
							<div class="actions">
								<div class="actions-inner">
									<a title="Edit" href="#" class="tip-top"><i class="fa fa-pencil"></i></a>
									<a title="Remove" href="#" class="tip-top"><i class="fa fa-trash-o"></i></a>
								</div>
							</div>
						</div>
						<div class="item">
							<a href="#" class="thumbnail">
								<img src="{{asset('assets/adminPage_assets/img/demo/img17.jpg')}}" alt="">
							</a>
							<div class="actions">
								<div class="actions-inner">
									<a title="Edit" href="#" class="tip-top"><i class="fa fa-pencil"></i></a>
									<a title="Remove" href="#" class="tip-top"><i class="fa fa-trash-o"></i></a>
								</div>
							</div>
						</div>
						<div class="item">
							<a href="#" class="thumbnail">
								<img src="{{asset('assets/adminPage_assets/img/demo/img18.jpg')}}" alt="">
							</a>
							<div class="actions">
								<div class="actions-inner">
									<a title="Edit" href="#" class="tip-top"><i class="fa fa-pencil"></i></a>
									<a title="Remove" href="#" class="tip-top"><i class="fa fa-trash-o"></i></a>
								</div>
							</div>
						</div>
					</div>

					<span style="font-size: 10px; color: #888888;">All Images licensed under <a href="http://creativecommons.org/licenses/by-nd/2.0/deed.en">Creative Commons BY-ND 2.0</a>, <a href="http://www.flickr.com/photos/sbl83/">stilettobootlover_83's</a></span>
				</div>
			</div>
		</div>
	</div>

</div>

<script>
	$(function(){
		$('.gallery-masonry').masonry({
			itemSelector: '.item',
			isAnimated: true,
			isFitWidth: true
		});                    
	});
</script>

@stop
