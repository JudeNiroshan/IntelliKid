

				@if(isset($gallery_data))


				<link rel="stylesheet" href="{{ URL::asset('assets/adminPage_assets/index_videolb/videolightbox.css') }}" type="text/css" />
				<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/adminPage_assets/index_videolb/overlay-minimal.css') }}"/>
				<script src="{{ URL::asset('assets/adminPage_assets/index_videolb/jquery.js') }}" type="text/javascript"></script>
				<script src="{{ URL::asset('assets/adminPage_assets/index_videolb/swfobject.js') }}" type="text/javascript"></script>
				<script src="{{ URL::asset('assets/adminPage_assets/index_videolb/jquery.tools.min.js') }}" type="text/javascript"></script>
				<script src="{{ URL::asset('assets/adminPage_assets/index_videolb/videolightbox.js') }}" type="text/javascript"></script>



				<div class="row">
					<div class="col-xs-12">
						<div class="widget-box">
							<div class="widget-title">
								<span class="icon"> <i class="fa fa-picture-o"></i>
								</span>
								<h5>Uploaded Videos</h5>
							</div>
							<div class="widget-content">

								<div class="videogallery">
									<?php $path = asset(''); ?>
									@foreach($gallery_data as $element)
										<a class="voverlay" href=<?php echo '"'.$path.'assets/adminPage_assets/index_videolb/vdbplayer.swf?volume=100&url=../../'.strstr($element['path'], 'uploads').' "' ;?> title="{{ $element['name'] }}"><img height="100" width="150" src=<?php echo '"'.$path.''.$element['img_path'].' "' ;?> alt="{{ $element['name'] }}" />{{ $element['name'] }}<span></span></a>
									@endforeach
								</div>

	
								</div>
								<span style="font-size: 10px; color: #888888;">All Images
									licensed under <a
									href="http://creativecommons.org/licenses/by-nd/2.0/deed.en">Creative
										Commons BY-ND 2.0</a>, <a
									href="http://www.flickr.com/photos/sbl83/">stilettobootlover_83's</a>
								</span>
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
				