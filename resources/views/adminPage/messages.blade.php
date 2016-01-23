@extends('Layouts.admin_master_page')
@section('container')

		<div id="content">
			<div id="content-header">
				<h1>Messages</h1>
				<div class="btn-group colored">
					<a class="btn btn-inverse" data-toggle="modal" href="#new-mail"><i class="fa fa-envelope"></i> Compose New</a>
				</div>
				<div class="modal fade mail-new-message" id="new-mail" role="modal">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								<h4 class="modal-title">New message</h4>
							</div>
							<div class="modal-body nopadding">
								<form action="#">
									<div class="new-message-to">
										To: <input type="text" name="message-to"/>
									</div>
									<div class="new-message-subject">
										Subject: <input type="text" name="message-subject"/>
									</div>
									<div class="new-message-content">
										<textarea name="message-content"></textarea>
									</div>
								</form>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-danger" data-dismiss="modal">Discard</button>
								<button type="button" class="btn btn-success" data-dismiss="modal">Save as draft</button> &nbsp; &nbsp;
								<button type="button" class="btn btn-primary" data-dismiss="modal">Send</button>
							</div>
						</div> 
					</div> 
				</div>
			</div>
			<div id="breadcrumb">
				<a href="#" title="Go to Home" class="tip-bottom"><i class="fa fa-home"></i> Home</a>
				<a href="#">Sample Pages</a>
				<a href="#" class="current">Messages</a>
			</div>
			<div class="row">
				<div class="col-xs-12">
					<div class="widget-box widget-messages">
						<div class="widget-title">
							<span class="icon">
								<i class="fa fa-envelope-alt"></i>
							</span>
							<h5>Messages</h5>
							<div class="buttons">
								<a class="btn go-full-screen"><i class="fa fa-resize-full"></i></a>
							</div>
							<ul class="nav nav-tabs pull-right">
								<li class="active"><a href="#inbox-tab" data-toggle="tab"><i class="fa fa-inbox"></i><span class="text"> Inbox</span></a></li>
								<li><a href="#sent-tab" data-toggle="tab"><i class="fa fa-location-arrow"></i><span class="text"> Sent</span></a></li>
								<li><a href="#messages" data-toggle="tab"><i class="fa fa-pencil"></i><span class="text"> Draft</span></a></li>
								<li><a href="#settings" data-toggle="tab"><i class="fa fa-trash-o"></i><span class="text"> Trash</span></a></li>
							</ul>
						</div>
						<div class="widget-content nopadding">
							<div class="tab-content">
								<div id="inbox-tab" class="tab-pane active checklist">
									<ul class="messages-list">
										<li class="messages-item">
											<span class="messages-item-star" title="Mark as starred"><i class="fa fa-star"></i></span>
											<img class="messages-item-avatar" src="{{asset('assets/adminPage_assets/img/demo/av1.jpg')}}"/>
											<span class="messages-item-from">John Doe</span>
											<div class="messages-item-time"><span class="text">10:23 PM</span>
												<div class="messages-item-actions">
													<a href="#" title="Reply" data-toggle="dropdown"><i class="fa fa-mail-reply"></i></a>
													<div class="dropdown">
														<a href="#" title="Move to folder" data-toggle="dropdown"><i class="fa fa-folder-open"></i></a>
														<ul class="dropdown-menu pull-right">
															<li><a href="#">Work</a></li>
															<li><a href="#">Partners</a></li>
															<li><a href="#">Family</a></li>
														</ul>
													</div>
													<div class="dropdown">
														<a href="#" title="Attach to tag" data-toggle="dropdown"><i class="fa fa-tag"></i></a>
														<ul class="dropdown-menu pull-right">
															<li><a href="#"><i class="tag-icon" style="background-color: green;"></i>Friends</a></li>
															<li><a href="#"><i class="tag-icon" style="background-color: red;"></i>Important</a></li>
															<li><a href="#"><i class="tag-icon" style="background-color: blue;"></i>Socials</a></li>
														</ul>
													</div>
												</div>
											</div>
											<span class="messages-item-subject">Astra anea en bumanso ...</span>
											<span class="messages-item-preview">Lorem ipsum dolor sit amet, consec tetur adipisicing elit, sed do antera ...</span>
										</li>
										<li class="messages-item active starred">
											<span class="messages-item-star" title="Remove star"><i class="fa fa-star"></i></span>
											<img class="messages-item-avatar" src="{{asset('assets/adminPage_assets/img/demo/av2.jpg')}}"/>
											<span class="messages-item-from">John Doe</span>
											<div class="messages-item-time"><span class="text">08:46 PM</span>
												<div class="messages-item-actions">
													<a href="#" title="Reply" data-toggle="dropdown"><i class="fa fa-mail-reply"></i></a>
													<div class="dropdown">
														<a href="#" title="Move to folder" data-toggle="dropdown"><i class="fa fa-folder-open"></i></a>
														<ul class="dropdown-menu pull-right">
															<li><a href="#">Work</a></li>
															<li><a href="#">Partners</a></li>
															<li><a href="#">Family</a></li>
														</ul>
													</div>
													<div class="dropdown">
														<a href="#" title="Attach to tag" data-toggle="dropdown"><i class="fa fa-tag"></i></a>
														<ul class="dropdown-menu pull-right">
															<li><a href="#"><i class="tag-icon" style="background-color: green;"></i>Friends</a></li>
															<li><a href="#"><i class="tag-icon" style="background-color: red;"></i>Important</a></li>
															<li><a href="#"><i class="tag-icon" style="background-color: blue;"></i>Socials</a></li>
														</ul>
													</div>
												</div>
											</div>
											<span class="messages-item-subject">Astra anea en bumanso ...</span>
											<span class="messages-item-preview">Lorem ipsum dolor sit amet, consec tetur adipisicing elit, sed do antera ...</span>
										</li>
										<li class="messages-item">
											<span class="messages-item-star" title="Mark as starred"><i class="fa fa-star"></i></span>
											<span class="messages-item-attachment"><i class="fa fa-paperclip"></i></span>
											<img class="messages-item-avatar" src="{{asset('assets/adminPage_assets/img/demo/av3.jpg')}}"/>
											<span class="messages-item-from">John Doe</span>
											<div class="messages-item-time"><span class="text">04:03 PM</span>
												<div class="messages-item-actions">
													<a href="#" title="Reply" data-toggle="dropdown"><i class="fa fa-mail-reply"></i></a>
													<div class="dropdown">
														<a href="#" title="Move to folder" data-toggle="dropdown"><i class="fa fa-folder-open"></i></a>
														<ul class="dropdown-menu pull-right">
															<li><a href="#">Work</a></li>
															<li><a href="#">Partners</a></li>
															<li><a href="#">Family</a></li>
														</ul>
													</div>
													<div class="dropdown">
														<a href="#" title="Attach to tag" data-toggle="dropdown"><i class="fa fa-tag"></i></a>
														<ul class="dropdown-menu pull-right">
															<li><a href="#"><i class="tag-icon" style="background-color: green;"></i>Friends</a></li>
															<li><a href="#"><i class="tag-icon" style="background-color: red;"></i>Important</a></li>
															<li><a href="#"><i class="tag-icon" style="background-color: blue;"></i>Socials</a></li>
														</ul>
													</div>
												</div>
											</div>
											<span class="messages-item-subject">Astra anea en bumanso ...</span>
											<span class="messages-item-preview">Lorem ipsum dolor sit amet, consec tetur adipisicing elit, sed do antera ...</span>
										</li>
										<li class="messages-item">
											<span class="messages-item-star" title="Mark as starred"><i class="fa fa-star"></i></span>
											<img class="messages-item-avatar" src="{{asset('assets/adminPage_assets/img/demo/av1_1.jpg')}}"/>
											<span class="messages-item-from">John Doe</span>
											<div class="messages-item-time"><span class="text">11:16 AM</span>
												<div class="messages-item-actions">
													<a href="#" title="Reply" data-toggle="dropdown"><i class="fa fa-mail-reply"></i></a>
													<div class="dropdown">
														<a href="#" title="Move to folder" data-toggle="dropdown"><i class="fa fa-folder-open"></i></a>
														<ul class="dropdown-menu pull-right">
															<li><a href="#">Work</a></li>
															<li><a href="#">Partners</a></li>
															<li><a href="#">Family</a></li>
														</ul>
													</div>
													<div class="dropdown">
														<a href="#" title="Attach to tag" data-toggle="dropdown"><i class="fa fa-tag"></i></a>
														<ul class="dropdown-menu pull-right">
															<li><a href="#"><i class="tag-icon" style="background-color: green;"></i>Friends</a></li>
															<li><a href="#"><i class="tag-icon" style="background-color: red;"></i>Important</a></li>
															<li><a href="#"><i class="tag-icon" style="background-color: blue;"></i>Socials</a></li>
														</ul>
													</div>
												</div>
											</div>
											<span class="messages-item-subject">Astra anea en bumanso ...</span>
											<span class="messages-item-preview">Lorem ipsum dolor sit amet, consec tetur adipisicing elit, sed do antera ...</span> </a>
										</li>
									</ul>
									<div class="messages-content">
										<div class="message-header">
											<div class="message-from">John Doe &lt;<a class="__cf_email__" href="http://demo.bootstrap-hunter.com/cdn-cgi/l/email-protection" data-cfemail="1973767177347d767c597d7674787077377a7674">[email&#160;protected]</a><script data-cfhash='f9e31' type="text/javascript">
												/* <![CDATA[ */!function(){try{var t="currentScript"in document?document.currentScript:function(){for(var t=document.getElementsByTagName("script"),e=t.length;e--;)if(t[e].getAttribute("data-cfhash"))return t[e]}();if(t&&t.previousSibling){var e,r,n,i,c=t.previousSibling,a=c.getAttribute("data-cfemail");if(a){for(e="",r=parseInt(a.substr(0,2),16),n=2;a.length-n;n+=2)i=parseInt(a.substr(n,2),16)^r,e+=String.fromCharCode(i);e=document.createTextNode(e),c.parentNode.replaceChild(e,c)}t.parentNode.removeChild(t);}}catch(u){}}()/* ]]> */</script>&gt;</div>
												<div class="message-to">To: George Coockeny</div>
												<div class="message-subject">Bootstrap 3.0 is finally here!</div>
												<div class="message-time">8 Sep 2013, 08:46 PM</div>
												<div class="message-actions">
													<a href="#" title="Move to trash"><i class="fa fa-trash-o"></i></a>
													<a href="#" title="Reply"><i class="fa fa-reply"></i></a>
													<a href="#" title="Reply to all"><i class="fa fa-reply-all"></i></a>
													<a href="#" title="Forward"><i class="fa fa-long-arrow-right"></i></a>
												</div>
											</div>
											<div class="message-content">
												<p>
													Hi George!
												</p>
												<p>
													Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ut blandit ligula. In accumsan mauris at augue feugiat consequat. Aenean consequat sem sed velit sagittis dignissim. Phasellus quis convallis est. Praesent porttitor mauris nec lectus mollis, eget sodales libero venenatis. Cras eget vestibulum turpis. In hac habitasse platea dictumst. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nam turpis velit, tempor vitae libero ac, fermentum laoreet dolor.
												</p>
												<p>
													Phasellus sodales metus at pulvinar facilisis. Aliquam et orci condimentum, ultrices erat in, ornare mi. Etiam vel nulla eu enim sagittis imperdiet. Donec justo arcu, iaculis eu ante ac, consequat vulputate nisl. Aenean sed consectetur tortor. Quisque tempus enim id velit ultricies, ac egestas leo vestibulum. Donec pulvinar viverra venenatis. Mauris eu dui enim. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vivamus malesuada commodo odio, in hendrerit mi tincidunt nec.
												</p>
												<p>
													Cras sed leo in neque iaculis iaculis vel vel sem. Praesent sed urna viverra odio molestie consectetur. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Duis quis consectetur arcu, quis tempus ipsum. Fusce eleifend arcu nunc, non porta ipsum imperdiet faucibus. Vivamus dictum, massa tincidunt blandit faucibus, tortor libero rhoncus nunc, id faucibus est leo non odio. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Quisque at elit sed quam pretium bibendum vel eget sem. Fusce sed ante nec eros placerat vulputate sed eget nulla. Sed in dictum justo, ut ullamcorper est. Proin semper tellus orci, eu accumsan neque ultrices at. Fusce a vulputate risus. Maecenas id hendrerit metus, ornare sodales dolor. Pellentesque tempus, justo quis faucibus commodo, magna mauris tempus velit, vitae egestas leo orci in sapien. Maecenas egestas erat augue, sit amet convallis lacus tristique eu. Donec gravida dui dictum libero eleifend dapibus.
												</p>
												<p>
													Regards,<br/>
													John Doe
												</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<script type="text/javascript">
				$(function(){
					$('.new-message-content textarea').wysihtml5();

					$('.messages-item-star').on('click',function(){
						par = $(this).parents('li');
						if(par.hasClass('starred')) {
							par.removeClass('starred');
							$(this).attr('title','Mark as starred');
						} else {
							par.addClass('starred');
							$(this).attr('title','Remove star');
						}
					});
				});
			</script>
		@stop