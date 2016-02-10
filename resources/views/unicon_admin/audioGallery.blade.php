

				@if(isset($gallery_data))

				   


				<div class="row">			
					<div class="col-xs-12">
						<div class="widget-box">
							<div class="widget-title">
								<span class="icon"> <i class="fa fa-picture-o"></i>
								</span>
								<h5>Uploaded Songs</h5>
							</div>
							<div class="widget-content">
								<?php $path = asset(''); ?>
								@foreach($gallery_data as $element)
								<div id="amazingaudioplayer-1" style="display:block;position:relative;width:300px;height:164px;margin:0px auto 0px;">
									<ul class="amazingaudioplayer-audios" style="display:none;">
										<li data-artist="Cash Cash" data-title=<?php echo '"'.$element['name'].' "' ;?> data-album="Billboard Debut Single Top100 1st February 2014 [Bubanee]" data-info="" data-image=<?php echo '"'.$path.''.$element['img_path'].' "' ;?> data-duration="205">
											<div class="amazingaudioplayer-source" data-src=<?php echo '"'.$path.''.strstr($element['path'], 'assets').' "' ;?> data-type="audio/mpeg" />
										</li>
									</ul>
									<div class="amazingaudioplayer-engine"><a href="http://amazingaudioplayer.com" title="jquery audio player">html5 audio player</a></div>
								</div>
								<div id="amazingaudioplayer-2" style="display:block;position:relative;width:300px;height:164px;margin:0px auto 0px;">
									<ul class="amazingaudioplayer-audios" style="display:none;">
										<li data-artist="Cash Cash" data-title=<?php echo '"'.$element['name'].' "' ;?> data-album="Billboard Debut Single Top100 1st February 2014 [Bubanee]" data-info="" data-image=<?php echo '"'.$path.''.$element['img_path'].' "' ;?> data-duration="205">
											<div class="amazingaudioplayer-source" data-src=<?php echo '"'.$path.''.strstr($element['path'], 'assets').' "' ;?> data-type="audio/mpeg" />
										</li>
									</ul>
									<div class="amazingaudioplayer-engine"><a href="http://amazingaudioplayer.com" title="jquery audio player">html5 audio player</a></div>
								</div>
								@endforeach

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
				