@extends('parent_master')


@section('title')

@endsection



@section('content')



  <link rel="stylesheet" href="{{ URL::asset('assets/parent/vendor/bootstrap-datepicker/bootstrap-datepicker.css')}}">


        <link rel="stylesheet" href="{{ URL::asset('assets/css/bootstrap.min.css')}}">
 <script src="{{ URL::asset('assets/parent/profile/js/jquery.min.js') }}"></script>

  <script src="{{ URL::asset('assets/parent/vendor/bootstrap-datepicker/bootstrap-datepicker.js') }}"></script>

 <style type="text/css">
.block {
      width: 25%;
      height: 3%;
      margin: 5% auto;
      text-align: center;
    }
    .loading span {
      display: inline-block;
      padding: 8px;
      -webkit-border-radius: 50%;
      -moz-border-radius: 50%;
      -ms-border-radius: 50%;
      -o-border-radius: 50%;
      border-radius: 50%;
    }
    .ball1 {
      background: #5FC169;
      -webkit-animation: move-left 800ms ease-in-out infinite alternate;
      -moz-animation: move-left 800ms ease-in-out infinite alternate;
      -ms-animation: move-left 800ms ease-in-out infinite alternate;
      -animation: move-left 800ms ease-in-out infinite alternate;
    }
    .ball2 {
      background: #5CC3E6;
      -webkit-animation: move-right 800ms ease-in-out infinite alternate;
      -moz-animation: move-right 800ms ease-in-out infinite alternate;
      -ms-animation: move-right 800ms ease-in-out infinite alternate;
      animation: move-right 800ms ease-in-out infinite alternate;
    }
    @-webkit-keyframes move-left {
      to {
        -webkit-transform: translate(20px, 0);
        -ms-transform: translate(20px, 0);
        -moz-transform: translate(20px, 0);
        transform: translate(20px, 0);
        background: #5CC3E6;
      }
    }
    @-moz-keyframes move-left {
      to {
        -webkit-transform: translate(20px, 0);
        -ms-transform: translate(20px, 0);
        -moz-transform: translate(20px, 0);
        transform: translate(20px, 0);
        background: #5CC3E6;
      }
    }
    @-ms-keyframes move-left {
      to {
        -webkit-transform: translate(20px, 0);
        -ms-transform: translate(20px, 0);
        -moz-transform: translate(20px, 0);
        transform: translate(20px, 0);
        background: #5CC3E6;
      }
    }
    @-o-keyframes move-left {
      to {
        -webkit-transform: translate(20px, 0);
        -ms-transform: translate(20px, 0);
        -moz-transform: translate(20px, 0);
        transform: translate(20px, 0);
        background: #5CC3E6;
      }
    }
    @keyframes move-left {
      to {
        -webkit-transform: translate(20px, 0);
        -ms-transform: translate(20px, 0);
        -moz-transform: translate(20px, 0);
        transform: translate(20px, 0);
        background: #5CC3E6;
      }
    }
    @-webkit-keyframes move-right {
      to {
        -webkit-transform: translate(-20px, 0);
        -ms-transform: translate(-20px, 0);
        -moz-transform: translate(-20px, 0);
        transform: translate(-20px, 0);
        background: #5FC169;
      }
    }
    @-moz-keyframes move-right {
      to {
        -webkit-transform: translate(-20px, 0);
        -ms-transform: translate(-20px, 0);
        -moz-transform: translate(-20px, 0);
        transform: translate(-20px, 0);
        background: #5FC169;
      }
    }
    @-ms-keyframes move-right {
      to {
        -webkit-transform: translate(-20px, 0);
        -ms-transform: translate(-20px, 0);
        -moz-transform: translate(-20px, 0);
        transform: translate(-20px, 0);
        background: #0063dc;
      }
    }
    @-o-keyframes move-right {
      to {
        -webkit-transform: translate(-20px, 0);
        -ms-transform: translate(-20px, 0);
        -moz-transform: translate(-20px, 0);
        transform: translate(-20px, 0);
        background: #5FC169;
      }
    }
    @keyframes move-right {
      to {
        -webkit-transform: translate(-20px, 0);
        -ms-transform: translate(-20px, 0);
        -moz-transform: translate(-20px, 0);
        transform: translate(-20px, 0);
        background: #5FC169;
      }
    }



</style>
<style>


.src-image {
  display: none;
}

.card {
  overflow: hidden;
  position: relative;
  border: 1px solid #CCC;
  border-radius: 8px;
  text-align: center;
  padding: 0;
  background-color: white;
  color: rgb(136, 172, 217);
}

.card .header-bg {
  /* This stretches the canvas across the entire hero unit */
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 70px;
  border-bottom: 1px #FFF solid;
  /* This positions the canvas under the text */
  z-index: 1;
}
.card .avatar {
  position: relative;
  margin-top: 15px;
  z-index: 100;
}

.card .avatar img {
  width: 100px;
  height: 100px;
  -webkit-border-radius: 50%;
  -moz-border-radius: 50%;
  border-radius: 50%;
  border: 5px solid rgba(0,0,30,0.8);
}

/*custom font*/
h1 { color: #7c795d; font-family: 'Trocchi', serif; font-size: 45px; font-weight: normal; line-height: 48px; margin: 0; }


h2 { color: #7c795d; font-family: 'Source Sans Pro', sans-serif; font-size: 28px; font-weight: 400; line-height: 32px; margin: 0 0 24px; }



/*form styles*/
#msform {
width: 650px;
margin-right: 50px auto;
text-align: center;
position: relative;
}
#msform fieldset {
background: white;
border: 0 none;
border-radius: 3px;
box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.4);
padding: 20px 30px;
box-sizing: border-box;
width: 180%;
margin: 0 10%;
/*stacking fieldsets above each other*/
position: absolute;
}
/*Hide all except first fieldset*/
#msform fieldset:not(:first-of-type) {
display: none;
}
/*inputs*/
#msform input, #msform textarea {
padding: 15px;
border: 1px solid #ccc;
border-radius: 3px;
margin-bottom: 10px;
width: 100%;
box-sizing: border-box;
font-family: montserrat;
color: #2C3E50;
font-size: 13px;
}
/*buttons*/
#msform .action-button {
width: 100px;
background: #27AE60;
font-weight: bold;
color: white;
border: 0 none;
border-radius: 1px;
cursor: pointer;
padding: 10px 5px;
margin: 10px 5px;
}
#msform .action-button:hover, #msform .action-button:focus {
box-shadow: 0 0 0 2px white, 0 0 0 3px #27AE60;
}
/*headings*/
.fs-title {
font-size: 15px;
text-transform: uppercase;
color: #2C3E50;
margin-bottom: 10px;
}
.fs-subtitle {
font-weight: normal;
font-size: 13px;
color: #666;
margin-bottom: 20px;
}
/*progressbar*/
#progressbar {
margin-bottom: 30px;
overflow: hidden;
/*CSS counters to number the steps*/
counter-reset: step;
}
#progressbar li {
list-style-type: none;
color: white;
text-transform: uppercase;
font-size: 9px;
width: 33.33%;
float: left;
position: relative;
}
#progressbar li:before {
content: counter(step);
counter-increment: step;
width: 20px;
line-height: 20px;
display: block;
font-size: 10px;
color: #333;
background: white;
border-radius: 3px;
margin: 0 auto 5px auto;
}
/*progressbar connectors*/
#progressbar li:after {
content: '';
width: 100%;
height: 2px;
background: white;
position: absolute;
left: -50%;
top: 9px;
z-index: -1; /*put it behind the numbers*/
}
#progressbar li:first-child:after {
/*connector not needed before the first step*/
content: none;
}
/*marking active/completed steps green*/
/*The number of the step and the connector before it = green*/
#progressbar li.active:before, #progressbar li.active:after {
background: #27AE60;
color: white;

}
.text-shadow: 4px 3px 0px #fff, 9px 8px 0px rgba(0,0,0,0.15);
</style>


 

<div id="jquery-script-menu">
<div class="jquery-script-center">

<div class="jquery-script-ads">

</div>
<div class="jquery-script-clear"></div>
</div>

<h1 style="margin-top:150px;margin-left:9%;margin-bottom:3%" >

                       <div id="text-shadow" name="text-shadow" class="text-shadow"> Shecdule Process</div>
           


</h1>
<!-- multistep form -->
<div>
<form id="msform" >
<!-- progressbar -->
<ul id="progressbar">
<li class="active"> </li>
<li></li>
<li></li>
</ul>
<!-- fieldsets -->
<fieldset  >
<h2 class="fs-title">Select child accounts</h2>

<div class="container">
 
    <div class="row">

    @foreach($kids as $k)
        <div class="col-sm-2">
            <div class="card">
                <canvas class="header-bg" width="250" height="70" id="header-blur"></canvas>
                <div class="avatar">
                    <img src="{{$k->img_path}}" alt="" />
                </div>
                <div class="content">
                    <p>Name: {{$k->f_name}} {{$k->l_name}}<br>
                       Age: {{$k->age}}</p>
                       <input type="text" value="{{$k->f_name}} {{$k->l_name}}" id="{{$k->c_id}}" hidden>
                        <input type="text" value="{{$k->age}}" id="{{$k->c_id}}age" hidden>
                    <p><input type="checkbox"  name="check[]" value="{{$k->c_id}}"/>
  <label for="box1"> Select</label></p>
                </div>
            </div>

        </div>
<img class="src-image"  src="{{$k->img_path}}" />
    @endforeach
        
       </div>


</div>





<label class="col-md-12 control-label  " id="acc_er" style="color:red;">  
                        

                      </label>
<input type="button" name="next" class="next action-button" value="Next" />

</fieldset>


<fieldset>

<h2 class="fs-title">Set dates</h2>
 <label class="col-md-12 control-label text-uppercase font-weight-400" style="color:black;">  
                          Selected Accouns Name:<p id="names"> </p>
                           </label>



<div class="row">
  <div class="col-md-10">
  <p  class="col-md-12 text-uppercase font-weight-400" style="color:black;"><b>Dates</b></p>
        <div class="form-group row" style="padding-right:20%" >
                     <label class="col-md-6 control-label text-uppercase font-weight-400" style="color:black;">  
                          

                      </label>
                <div class="input-daterange" name="dateR"  id="dateR" data-plugin="datepicker">
              
                    <div class="input-group">

                         <span class="input-group-addon">
                             <i class="icon wb-calendar" aria-hidden="true"></i>
                        </span>
                        <input type="text" class="form-control" id="start"  name="start" required placeholder="DATE" readonly="readonly">

                        <label class="col-md-12 control-label  " id="date_er" style="color:red;">  
                        

                      </label>
                    </div>                    
                </div>
             </div>
</div>
</div>


<input type="button" name="previous" class="previous action-button" value="Previous" />
<input type="button" name="next" class="next2 action-button" value="Next" />
</fieldset>


<fieldset>
<h2 class="fs-title">Set Schedule</h2>


<div class="alert alert-warning v_warning" style="display: none">
  <strong>Warning!</strong> These videos don't match with your child age category,but you can set this to your schedule
  <p  id="v_warning" name="v_warning"></p>
</div>

<div class="alert alert-warning s_warning" style=" display: none">
  <strong>Warning!</strong> These stories don't match with your child age category,but you can set this to your schedule
  <p  id="s_warning" name="s_warning"></p>
</div>
<div class="alert alert-warning a_warning" style=" display: none">
  <strong>Warning!</strong> These audios don't match with your child age category,but you can set this to your schedule
  <p  id="a_warning" name="a_warning"></p>
</div>
<div class="alert alert-success success " id="success" style=" display: none">
  <strong>Success!</strong> Setup completed.Please submit!!
</div>
<div class="alert alert-danger danger empty" id="empty" style=" display: none">
  <strong>Fail!</strong> You don't have any items to create a schedule!!
</div>
<div id="load"><p></p></div>

<input type="button" name="previous" class="previous action-button" value="Previous" />
<input type="submit" name="submit" class="submit action-button" value="Submit" />
</fieldset>


</form>


        <script>


$(document).ready(function() {
//alert(bdates);


    
    
    
    
});
 </script>



<script type="text/javascript">
    //jQuery time
var current_fs, next_fs, previous_fs; //fieldsets
var left, opacity, scale; //fieldset properties which we will animate
var animating; //flag to prevent quick multi-click glitches

$(".next2").click(function(){

var date = document.getElementById("start").value;

if(date == "" || date==null){
   document.getElementById("date_er").innerHTML = "Need date/(s)";
return false;
}
   document.getElementById("date_er").innerHTML ="";


var  vals = [];
$('input:checkbox[name="check[]"]').each(function() {
    if (this.checked) {
        vals.push(this.value);
    }
});

var name = [];
var age = [];
for(var i=0;i<vals.length;i++){
   var t = document.getElementById(vals[i]).value;
   var a = document.getElementById(vals[i]+"age").value;
  name.push(t);
  age.push(a);

}

$(".s_warning").hide();
$(".v_warning").hide();
$(".a_warning").hide();
$(".success").hide();


document.getElementById("load").innerHTML =  '<div class="block"> <div class="loading"><span class="ball1"></span><span class="ball2"></span> Loading....</div></div>';
 $.ajax({
                type: "get",
                url: "set_schedule",
                data:{
                    id:vals,
                    date:date,
                    age:age
                },
           
                success: function (data) {
                  
                    
                     
                    
                      
                  console.log(data);
                if(data.s_warning.length != 0 && data.v_warning.length != 0 && data.a_warning.length != 0 ){
             
                        setTimeout(function(){



                          $(".v_warning").fadeIn(1000);
                          document.getElementById("v_warning").innerHTML = data.v_warning;
                          


                        
                          $(".s_warning").fadeIn(1000);
                          document.getElementById("s_warning").innerHTML = data.s_warning;

                          $(".a_warning").fadeIn(1000);
                          document.getElementById("a_warning").innerHTML = data.a_warning;

                          document.getElementById("load").innerHTML="";
                     
                        
                        },2000);
                      }

                       if(data.a_warning.length != 0){

                     
               
                        setTimeout(function(){
                         

                          $(".a_warning").fadeIn(1000);
                         document.getElementById("a_warning").innerHTML = data.a_warning;
                         document.getElementById("load").innerHTML="";
                      

                        },2000);
                      }


                  if(data.s_warning.length != 0){
             
                        setTimeout(function(){
                          
                          $(".s_warning").fadeIn(1000);
                         document.getElementById("s_warning").innerHTML = data.s_warning;
                         document.getElementById("load").innerHTML="";
                     
                         
                        },2000);
                      }

                 if(data.v_warning.length != 0){

                         
               
                        setTimeout(function(){
                         

                          $(".v_warning").fadeIn(1000);
                         document.getElementById("v_warning").innerHTML = data.v_warning;
                         document.getElementById("load").innerHTML="";
                    
                    

                        },2000);
                      }

               
                else{

                         setTimeout(function(){
                        document.getElementById("load").innerHTML="";
                       // $(".success").slideToggle();
                         $(".success").fadeIn(1400);

                        },2000);

                      }

                        
                 return true;
             
             
         }
                ,
                error: function (xhr, ajaxOptions, thrownError) {
                     document.getElementById("load").innerHTML = "";
                  sweetAlert("Sorry!", "Something went wrong!", "error");
                  return false;
                }
            });










    if(animating) return false;
    animating = true;
    
    current_fs = $(this).parent();
    next_fs = $(this).parent().next();
    
    //activate next step on progressbar using the index of next_fs
    $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
    
    //show the next fieldset
    next_fs.show(); 
    //hide the current fieldset with style
    current_fs.animate({opacity: 0}, {
        step: function(now, mx) {
            //as the opacity of current_fs reduces to 0 - stored in "now"
            //1. scale current_fs down to 80%
            scale = 1 - (1 - now) * 0.2;
            //2. bring next_fs from the right(50%)
            left = (now * 50)+"%";
            //3. increase opacity of next_fs to 1 as it moves in
            opacity = 1 - now;
            current_fs.css({'transform': 'scale('+scale+')'});
            next_fs.css({'left': left, 'opacity': opacity});
        }, 
        duration: 800, 
        complete: function(){
            current_fs.hide();
            animating = false;
        }, 
        //this comes from the custom easing plugin
        easing: 'easeInOutBack'
    });
});


$(".next").click(function(){

 

var  vals = [];
var msg = "false";
$('input:checkbox[name="check[]"]').each(function() {
    if (this.checked) {
        vals.push(this.value);
        msg="true";
    }
});

if( msg=="false"){
  document.getElementById("acc_er").innerHTML = "Select account/(s)";
  return false;
}
  document.getElementById("acc_er").innerHTML ="";



var name = [];
var str = "";
for(var i=0;i<vals.length;i++){

  var t = document.getElementById(vals[i]).value;
  name.push(t);

  if(i==vals.length-1){
  str = str+t;
  }else{
  str = str+t+",";
  }
}



var  s = '<p>'+str+'</p>';
document.getElementById("names").innerHTML=s;










 var bdates = new Array();
    <?php foreach($dates as $key => $val){ ?>
        bdates.push('<?php echo $val; ?>');

    <?php } ?>


var forbidden = bdates;




  $.ajax({
                type: "get",
                url: "get_date",
                async: false,
                data:{
                    cids:vals
                },
           
                success: function (data) {

             
                 //
                 // forbidden = data;
                
                  //$('#dateR').load(document.URL +  ' #dateR');

                },
                error: function (xhr, ajaxOptions, thrownError) {
                   
                  sweetAlert("Sorry!", "Something went wrong!", "error");
                  return false;
                }
            });


//alert(forbidden);





 var nowDate = new Date();
var today = new Date(nowDate.getFullYear(), nowDate.getMonth(), nowDate.getDate(), 0, 0, 0, 0);
$('#dateR').datepicker({
     clearBtn : true, 
     startDate: today,
     constrainInput: true,
    beforeShowDay:function(Date){
        //

        var curr_day = Date.getDate();
        var curr_month = Date.getMonth()+1;
        var curr_year = Date.getFullYear();        
        var curr_date='0'+curr_month+'/'+curr_day+'/'+curr_year; 
         var curr_date1='03'+'/'+'0'+curr_day+'/'+curr_year;
          var curr_date2='03'+'/'+curr_day+'/'+curr_year;
         var curr_date3='04'+'/'+curr_day+'/'+curr_year;
         var curr_date4='04'+'/'+'0'+curr_day+'/'+curr_year;   

//console.log(forbidden);

        if (forbidden.indexOf(curr_date)>-1 || forbidden.indexOf(curr_date1)>-1 || forbidden.indexOf(curr_date2)>-1   || forbidden.indexOf(curr_date3)>-1  || forbidden.indexOf(curr_date4)>-1 ) return false;        
    },
    onSelect: function (dateText) {
            jQuery(this).change();
        }
});










    if(animating) return false;
    animating = true;
    
    current_fs = $(this).parent();
    next_fs = $(this).parent().next();
    
    //activate next step on progressbar using the index of next_fs
    $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
    
    //show the next fieldset
    next_fs.show(); 
    //hide the current fieldset with style
    current_fs.animate({opacity: 0}, {
        step: function(now, mx) {
            //as the opacity of current_fs reduces to 0 - stored in "now"
            //1. scale current_fs down to 80%
            scale = 1 - (1 - now) * 0.2;
            //2. bring next_fs from the right(50%)
            left = (now * 50)+"%";
            //3. increase opacity of next_fs to 1 as it moves in
            opacity = 1 - now;
            current_fs.css({'transform': 'scale('+scale+')'});
            next_fs.css({'left': left, 'opacity': opacity});
        }, 
        duration: 800, 
        complete: function(){
            current_fs.hide();
            animating = false;
        }, 
        //this comes from the custom easing plugin
        easing: 'easeInOutBack'
    });
});

$(".previous").click(function(){
    if(animating) return false;
    animating = true;
    
    current_fs = $(this).parent();
    previous_fs = $(this).parent().prev();
    
    //de-activate current step on progressbar
    $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
    
    //show the previous fieldset
    previous_fs.show(); 
    //hide the current fieldset with style
    current_fs.animate({opacity: 0}, {
        step: function(now, mx) {
            //as the opacity of current_fs reduces to 0 - stored in "now"
            //1. scale previous_fs from 80% to 100%
            scale = 0.8 + (1 - now) * 0.2;
            //2. take current_fs to the right(50%) - from 0%
            left = ((1-now) * 50)+"%";
            //3. increase opacity of previous_fs to 1 as it moves in
            opacity = 1 - now;
            current_fs.css({'left': left});
            previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
        }, 
        duration: 800, 
        complete: function(){
            current_fs.hide();
            animating = false;
        }, 
        //this comes from the custom easing plugin
        easing: 'easeInOutBack'
    });
});





$(".submit").click(function(){
var date = document.getElementById("start").value;
var  vals = [];
$('input:checkbox[name="check[]"]').each(function() {
    if (this.checked) {
        vals.push(this.value);
    }
});


document.getElementById("load").innerHTML =  '<div class="block"> <div class="loading"><span class="ball1"></span><span class="ball2"></span> Loading....</div></div>';

   $.ajax({
                type: "get",
                url: "submit_shedule",
                data:{
                    id:vals,
                    date:date
                },
           
                success: function (data) {
               
                  
                 if(data== 1){
                
                       
                      swal("successfully!", "Schedule completed!", "success");
                      setTimeout(function(){
                          
                       document.getElementById("load").innerHTML = "";
                       location.reload();
                       
                       },2000);
                        }

                          if(data== 0){
                
                       
                        
                          setTimeout(function(){
                        

                       document.getElementById("load").innerHTML = "";
                       
                         $(".empty").fadeIn(1000);
                       return false;
                       
                       },2000);


                        
                 return true;
             }

          
                },
                error: function (xhr, ajaxOptions, thrownError) {
                     document.getElementById("load").innerHTML = "";
                  sweetAlert("Sorry!", "Something went wrong!", "error");
                  return false;
                }
            });



    return false;
})
</script>
<br><br><br><br><br>
<br><br><br><br><br>
<br><br><br><br><br>
<br><br><br><br><br>
<br><br><br><br><br>

 @endsection




