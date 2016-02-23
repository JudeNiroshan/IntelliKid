@extends('Layouts.admin_master_page')
@section('container')

		<div id="content">
			<div id="content-header">
				<h1>Calendar</h1>
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
				<a href="#" class="current">Calendar</a>
			</div>
			<br/>
			<div class="row">
				<div class="col-xs-12">
					<div class="alert alert-info">
						This page demonstrates a jQuery calendar plugin. Try to add a new event!
						<a href="#" class="close" data-dismiss="alert">×</a>
					</div>
					<div class="widget-box widget-calendar">
						<div class="widget-title">
							<span class="icon"><i class="fa fa-calendar"></i></span>
							<h5>Calendar</h5>
							<div class="buttons">
								<a id="add-event" data-toggle="modal" href="#modal-add-event" class="btn"><i class="fa fa-plus"></i> <span class="text">Add new event</span></a>
							</div>
						</div>
						<div class="widget-content nopadding">
							<div class="panel-left">
								<div id="fullcalendar"></div>
							</div>
							<div id="external-events" class="panel-right">
								<div class="panel-title"><h5>Events</h5></div>
								<div class="panel-content">
									<div class="external-event ui-draggable label label-inverse">Meet the customers</div>
									<div class="external-event ui-draggable label label-danger">Check servers condition</div>
									<div class="external-event ui-draggable label label-success">Company party!</div>
									<div class="external-event ui-draggable label label-purple">Vacation</div>
									<div class="external-event ui-draggable label label-warning">Special: Meeting with president</div>
									<div class="external-event ui-draggable label label-info">Make a coffee</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="modal fade" id="modal-add-event">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">×</button>
							<h3>Add a new event</h3>
						</div>
						<div class="modal-body">
							<p>Enter event name:</p>
							<p><input class="form-control" id="event-name" type="text"/></p>
						</div>
						<div class="modal-footer">
							<a href="#" class="btn btn-default btn-small" data-dismiss="modal">Cancel</a>
							<a href="#" id="add-event-submit" class="btn btn-primary btn-small">Add event</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		@stop
