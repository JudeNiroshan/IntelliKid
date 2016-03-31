

				@if(isset($gallery_data))
				<div class="row">
					<script src="{{ URL::asset('assets/adminPage_assets/js/tinymce/tinymce.min.js') }}"></script>

				<script src="{{ URL::asset('assets/adminPage_assets/js/upload.story.js') }}"></script>

					<script type="text/javascript">

				function removeOfStory(clickedId){
					bootbox.confirm("Do you want to remove this Video?",
						function(result){
							var msg='';
							if(result==true){

								$.ajax({

									type: "get",
									url: "upload_remove_story",

									data: {Story_ID:clickedId}, 
									success: function(resultData){
										
										$('#story_tile_'+clickedId).hide(500);
										var elem = document.getElementById('story_tile_'+clickedId);
										elem.parentNode.removeChild(elem);
										window.location="http://localhost/IntelliKid/public/upload_story";

									}});
							}

						});
				}
				</script>

					<div class="col-xs-12">
						<div class="widget-box">
							<div class="widget-title">
								<span class="icon"> <i class="fa fa-picture-o"></i>
								</span>
								<h5>Uploaded Stories</h5>
							</div>
							<div class="widget-content">
								<div class="gallery-masonry">

									<div class="row">

											@foreach($gallery_data as $element)
											<div id="story_tile_<?php echo $element['id']; ?>" style="padding: 5px;border: 0.2px solid;margin: 5px;" class="col-lg-2 item">
												
												<div class="col-lg-12">
												 <img height="100" width="100%" src="{{ URL::asset($element['path']) }}" />
												</div>
												<div class="col-lg-12">
													<center><p>{{ $element['name'] }}</p></center>
												</div>

												<div class="col-lg-12">
													<a href="#" onclick="javascript:editModelPopup(<?php echo $element['id']; ?>);" class="btn btn-dark-blue"><i class="icon icon-pencil"></i> Edit</a>
													<a href="#" onclick="javascript:removeOfStory(<?php echo $element['id']; ?>);" class="btn btn-dark-red"><i class="icon icon-remove"></i> Remove</a>
												</div>
												
												
												
											</div>
											@endforeach
										</div>

									
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
				