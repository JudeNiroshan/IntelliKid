
<link href=" {{URL::asset('assets/parent/fullcalendar.css')}}" rel='stylesheet' />
<link href="{{URL::asset('assets/parent/fullcalendar.print.css')}}" rel='stylesheet' media='print' />
<script src="{{URL::asset('assets/parent/lib/moment.min.js')}}"></script>
<script src="{{URL::asset('assets/parent/lib/jquery.min.js')}}"></script>
<script src="{{URL::asset('assets/parent/fullcalendar.min.js')}}"></script>


   <link rel="shortcut icon" href="{{URL::asset('assets/parent/images/logo1.png') }}" type="image/png" sizes="48x48"/>


        <link rel="stylesheet" href="{{ URL::asset('assets/css/bootstrap.min.css')}}">







<script>

	$(document).ready(function() {


	var today = new Date();
var dd = today.getDate();
var mm = today.getMonth()+1; //January is 0!
var yyyy = today.getFullYear();

if(dd<10) {
    dd='0'+dd
} 

if(mm<10) {
    mm='0'+mm
} 

today = yyyy+'-'+mm+'-'+dd;

		$('#calendar').fullCalendar({
		
			defaultDate: today,
			editable: true,
			eventLimit: true, // allow "more" link when too many events
			
		});



	$.ajax({
			url: 'calander_process',
	        type: 'get', // Send post data
	        data: 'type=fetch',
	        async: false,
	        success: function(s){
	        	freshevents = s;

	        }
		});
	
		$('#calendar').fullCalendar('addEventSource', JSON.parse(freshevents));

	});
	
</script>
<style>

	body {
		margin: 40px 10px;
		padding: 0;
		font-family: "Lucida Grande",Helvetica,Arial,Verdana,sans-serif;
		font-size: 14px;

	}

	#calendar {
		max-width: 900px;
		margin: 0 auto;
	}


.page {
  margin: 20px 0
}

.wrapper {
  max-width: 1160px;
  margin: 0 auto;
  position: relative;
  padding: 0 20px;
  min-height: 600px;
}

.content-wrapper {
  float: left;
  width: 100%;
}

.content {
  margin-right: 300px;
  clear: both;
  overflow: auto;
  background: white;
  background: white;
  min-height: 600px;
}

.sidebar {
  position: relative;
  width: 290px;
  margin-left: -320px;
  float: right;
  overflow: hidden;
  background: #2c3e50;
  background: rgba(44,62,80, 0.4);
  color: #eee;
  min-height: 610px;
  margin-top:5.5%; 
}

a{
  display: block;
  text-align:center;
  margin: 10px auto;
  width: 100%;
  color: #2c3e50;
}

@media only screen and (max-width: 768px) {
  .sidebar {
    display: none;
  }
  .content {
    margin-right: 0;
  }





}

</style>

<a href="home" class="btn btn-info" role="button" style="width:10%">HOME</a>


        <p> <div id='calendar'></div></p>
     
<br><br><br><br><br>





