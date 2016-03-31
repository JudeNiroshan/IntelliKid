

				@if(isset($gallery_data))


				<link rel="stylesheet" href="{{ URL::asset('assets/adminPage_assets/index_videolb/videolightbox.css') }}" type="text/css" />
				<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/adminPage_assets/index_videolb/overlay-minimal.css') }}"/>
				<script src="{{ URL::asset('assets/adminPage_assets/js/upload.video.js') }}"></script>
				<script src="{{ URL::asset('assets/adminPage_assets/index_videolb/jquery.js') }}" type="text/javascript"></script>
				<script src="{{ URL::asset('assets/adminPage_assets/index_videolb/swfobject.js') }}" type="text/javascript"></script>
				<script src="{{ URL::asset('assets/adminPage_assets/index_videolb/jquery.tools.min.js') }}" type="text/javascript"></script>
				<script src="{{ URL::asset('assets/adminPage_assets/index_videolb/videolightbox.js') }}" type="text/javascript"></script>
				<script type="text/javascript">

				function removeOfVideo(clickedId){
					bootbox.confirm("Do you want to remove this Video?",
						function(result){
							var msg='';
							if(result==true){

								$.ajax({

									type: "get",
									url: "upload_remove_video",

									data: {V_ID:clickedId}, 
									success: function(resultData){
										
										$('#video_tile_'+clickedId).hide(500);
									}});


								
							}
						});
				}
				</script>


				<div class="row">
					<div class="col-lg-12">
						<div class="widget-box">
							<div class="widget-title">
								<span class="icon"> <i class="fa fa-picture-o"></i>
								</span>
								<h5>Uploaded Videos</h5>
							</div>
							<div class="widget-content">

								<div class="videogallery row">
									<?php $path = asset(''); ?>
									@foreach($gallery_data as $element)
										<div id="video_tile_<?php echo $element['id']; ?>" class="col-lg-2 item">
											<div><a class="voverlay" href=<?php echo '"'.$path.'assets/adminPage_assets/index_videolb/vdbplayer.swf?volume=100&url=../../'.strstr($element['path'], 'uploads').' "' ;?> title="{{ $element['name'] }}"><img height="100" width="150" src=<?php echo '"'.$path.''.$element['img_path'].' "' ;?> alt="{{ $element['name'] }}" />{{ $element['name'] }}<span></span></a></div>
											
												<a href="#" width="50" onclick="javascript:editModelPopup(<?php echo $element['id']; ?>);" class="btn btn-dark-blue"><i class="icon icon-pencil"></i> Edit</a>
												<a href="#" width="50" onclick="javascript:removeOfVideo(<?php echo $element['id']; ?>);" class="btn btn-dark-red"><i class="icon icon-remove"></i> Remove</a>
											
										</div>
									@endforeach
								</div>

							</div>
						</div>
					</div>
				</div>
				        <script src="{{ URL::asset('assets/adminPage_assets/js/jquery.min.js') }}"></script>
				<script>
                $(function(){
                    $('.gallery-masonry').masonry({
                      itemSelector: '.item',
                      isAnimated: true,
                      isFitWidth: true
                    });                    
                });
            </script>
				@endif
				