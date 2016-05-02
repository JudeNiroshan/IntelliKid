
@extends('parent_master')


@section('title')

@endsection


@section('content')
  <style type="text/css">

div.scroll {
   
    width: 370px;
    height: 600px;
    overflow: scroll;
   
    margin-right: 15%;
   margin-left: 70%;
    margin-top: -33.5%;
    border-style: solid;
    border-color: gray;

}

div.container{
    width: 58%;
    margin-left: 3.5%;
     margin-top: -4%;
 

}
div.container1{
    width: 58%;
    margin-left: 3.5%;
     margin-top: 1%;
 

}
div.container2{
    width: 58%;
    margin-left: 3.5%;
     margin-top: 2%;
 

}
.form-group input[type="checkbox"] {
    display: none;
}

.form-group input[type="checkbox"] + .btn-group > label span {
    width: 20px;
}

.form-group input[type="checkbox"] + .btn-group > label span:first-child {
    display: none;
}
.form-group input[type="checkbox"] + .btn-group > label span:last-child {
    display: inline-block;   
}

.form-group input[type="checkbox"]:checked + .btn-group > label span:first-child {
    display: inline-block;
}
.form-group input[type="checkbox"]:checked + .btn-group > label span:last-child {
    display: none;   
}

  </style>  



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



<!--start-->


<!--start section-->
<section id="nicdark_parallax_title" class="nicdark_section nicdark_imgparallax nicdark_parallaxx_img-excursions">

    <div class="nicdark_filter greydark">

        <!--start nicdark_container-->
        <div class="nicdark_container nicdark_clearfix">

            <div class="grid grid_12">
                <div class="nicdark_space100"></div>
                <div class="nicdark_space100"></div>
                <h1 class="white subtitle">QUESTIONS</h1>
                <div class="nicdark_space10"></div>
                <h3 class="subtitle white">FULL TIME</h3>
                <div class="nicdark_space20"></div>
                <div class="nicdark_divider left big"><span class="nicdark_bg_white nicdark_radius"></span></div>
                <div class="nicdark_space40"></div>
                <div class="nicdark_space50"></div>
            </div>

        </div>
        <!--end nicdark_container-->

    </div>
     
</section>
<!--end section-->





<input type="text" value="{{$id}}"  id="Qid" hidden>


<!--start section-->
<section class="nicdark_section">

    <!--start nicdark_container-->
    <div class="nicdark_container nicdark_clearfix">

        <div class="nicdark_space50"></div>

        <div class="grid grid_12">
            <h1 class="subtitle greydark">Q&A</h1>
            <div class="nicdark_space20"></div>
            <h3 class="subtitle grey">SELECTED BUNDLE QUESTIONS</h3>
            <div class="nicdark_space20"></div>
            <div class="nicdark_divider left big"><span class="nicdark_bg_blue nicdark_radius"></span></div> 
        </div>


    </div>
    <!--end nicdark_container-->
            
</section>
<!--end section-->

<?php 

  
 // var_dump($_SESSION['quiz_que']);
?>


<!--start section-->
<section class="nicdark_section">

    <!--start nicdark_container-->
    <div class="nicdark_container nicdark_clearfix">

        <div class="nicdark_space10"></div>

        <div class="grid grid_6">



@foreach($data as $data)



            <!--start nicdark_toogle-->
            <div class="nicdark_toogle">
                <h5 class="nicdark_toogle_header grey nicdark_textevidence nicdark_bg_grey big nicdark_radius nicdark_shadow">
                    {{$data->question}}
                    <i class="icon-info-outline nicdark_iconbg right medium grey"></i>
                </h5>
                <div class="nicdark_toogle_content nicdark_bg_grey nicdark_radius_bottom nicdark_shadow">
               
               @if(!empty($data->image))

                 <img src="{{$data->image}}" style="width:50% ;height: 30%">
                 @endif

                <br>


      <?php  
      $id = $data->id;

     $ans = DB::select("select * from answer where questionid = '$id'");
  $k=1;


        ?>

        @if(!empty($ans))
        <p> Answers</p>
        @foreach($ans as $r)

        @if(($r->iscorrect)==1)
                    <p>{{$k++}} {{$r->answer}}   <a href="#" class="nicdark_btn_icon nicdark_bg_green small nicdark_radius_circle white"><i class="icon-ok-outline"></i></a></p>
        @else</p>
                     <p>{{$k++}} {{$r->answer}}</p>
        @endif

                  
          @endforeach  
          @else
           <p> Answers not given</p>
          @endif        
                </div>
            </div>
            <!--end toogle-->
            <div class="nicdark_space20"></div>

            
 @endforeach       
          
        </div>


        <div class="grid grid_6"> 

  @if($msg == "has")
   <div class="[ form-group ]" style="padding-left: 30%">
            <input type="checkbox" name="fancy-checkbox-danger-custom-icons" id="fancy-checkbox-danger-custom-icons" autocomplete="off" id="add" name="add" onclick="add_to_collector2()"  checked="" />
            <div class="[ btn-group ]">
                <label for="fancy-checkbox-danger-custom-icons" class="[ btn btn-danger ]">
                    <span class="[ glyphicon glyphicon-ok ]"></span>
                    <span> </span>
                </label>
                <label for="fancy-checkbox-danger-custom-icons" class="[ btn btn-default active ]"  >
                   REMOVE FROM SHEDULE COLLECTOR   
                </label>
<div id="load"><p></p></div>
            </div>    
        </div>
        @else
         <div class="[ form-group ]" style="padding-left: 30%">
            <input type="checkbox" name="fancy-checkbox-primary-custom-icons" id="fancy-checkbox-primary-custom-icons" autocomplete="off" id="add" name="add" onclick="add_to_collector()"  />
            <div class="[ btn-group ]">
                <label for="fancy-checkbox-primary-custom-icons" class="[ btn btn-primary ]">
                    <span class="[ glyphicon glyphicon-ok ]"></span>
                    <span> </span>
                </label>
                <label for="fancy-checkbox-primary-custom-icons" class="[ btn btn-default active ]"  >
                   ADD TO SHEDULE QUEUE   
                </label>
<div id="load"><p></p></div>
            </div>    
        </div>

        @endif


         
              
        </div>

        <div class="nicdark_space40"></div>

    </div>
    <!--end nicdark_container-->
            
</section>
<!--end section-->






<!--end-->


<!--end section-->



<script type="text/javascript">
    
    function add_to_collector2(){
    
        
         var id = document.getElementById("Qid").value;
         
document.getElementById("load").innerHTML = '<div class="block"> <div class="loading"><span class="ball1"></span><span class="ball2"></span> Loading....</div></div>';

 swal({   title: "Are you sure?",   text: "Your are going to remove this from collector!",   type: "warning",   showCancelButton: true,   confirmButtonColor: "#DD6B55",   confirmButtonText: "Yes, remove it!",   cancelButtonText: "No, cancel plx!",   closeOnConfirm: false,   closeOnCancel: false }, function(isConfirm){   
    if (isConfirm) {   


        $.ajax({
                type: "get",
                url: "delete_from_collector_quiz",
                data:{
                    id:id,
                    type:"story"
                },
           
                success: function (data) {
                 if(data== 1){
                
                       
                        swal("successfully!", "Qestion bundle Removed!", "success");
                          setTimeout(function(){
                       document.getElementById("load").innerHTML = "";
                       location.reload();
                       
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





      } 
    else { 

     document.getElementById("load").innerHTML = ""; 
     swal({   title: "Canceled!",   text: "",   timer: 800,   showConfirmButton: false });
    

       } });




    }







function add_to_collector(){
    
var id = document.getElementById("Qid").value;

         
document.getElementById("load").innerHTML = '<div class="block"> <div class="loading"><span class="ball1"></span><span class="ball2"></span> Loading....</div></div>';
      




 
        $.ajax({
                type: "get",
                url: "add_to_collector_quiz",
                data:{
                    id:id
                  
                },
           
                success: function (data) {
                 if(data== 1){
                swal("successfully!", "Qestion bundle!", "success");
                        setTimeout(function(){
                        
                       document.getElementById("load").innerHTML = "";
                       location.reload();
                       
                      

                        },2000);
                        
                 return true;
             }
              if(data== 0){
                swal( 'Warning',   'This is already in the Collector' );
                        setTimeout(function(){

                        
                       document.getElementById("load").innerHTML = "";
                      location.reload();
                       
                       //window.location.href = "veca";
                      

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


    }



</script>

























<!--custom js-->
<script type="text/javascript">
    jQuery(document).ready(function() {

        //START PARALLAX SECTIONS
        $('#nicdark_parallax_title').parallax("50%", 0.3);
        $('#nicdark_parallax_counter').parallax("50%", 0.3);
        //END PARALLAX SECTIONS

    });
</script>
<!--custom js-->

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','../../../../../www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-49425562-7', 'auto');
  ga('send', 'pageview');

</script>

@endsection