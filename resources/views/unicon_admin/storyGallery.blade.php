

				@if(isset($gallery_data))
				<div class="row">
					<div class="col-xs-12">
						<div class="widget-box">
							<div class="widget-title">
								<span class="icon"> <i class="fa fa-picture-o"></i>
								</span>
								<h5>Uploaded Stories</h5>
							</div>
							<div class="widget-content">
								<div class="gallery-masonry">
									@foreach($gallery_data as $element)
									<div class="item">
										
										 <img height="100" width="150" src="{{ URL::asset($element['path']) }}" />

										<div>
											<p>{{ $element['name'] }}</p>
										</div>
										
										<!-- <div class="actions">
											<div class="actions-inner">
												<a title="Edit" href="#" class="tip-top"><i
													class="fa fa-pencil"></i></a> <a title="Remove" href="#"
													class="tip-top"><i class="fa fa-trash-o"></i></a>
											</div>
										</div> -->
									</div>
									@endforeach
									
									
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
				