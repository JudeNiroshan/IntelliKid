
@extends('Layouts.kids_master_page')
@section('body')

<div class="container">
      <div class="row">
        <div class="span12">
          <div class="navbar navbar_">
            <div class="navbar-inner navbar-inner_">
              <a class="btn btn-navbar btn-navbar_" data-toggle="collapse" data-target=".nav-collapse_">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </a>
              <div class="nav-collapse nav-collapse_ collapse">
                <ul class="nav sf-menu clearfix">
                  <li>
                    <a href="#">Home</a>
                  </li>
                  <li>
                    <a href="#">My Profile</a>
                  <li class="active">
                    <a href="#">Events</a>
                  </li>
                  <li>
                    <a href="#">Achievments</a>
                  </li>
                  <li>
                    <a href="#">To Do List</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="span12">
          <div class="hl1">
            <img src="{{asset('assets/kids_assets/images/hl1.png')}}" alt="">
            
          </div>
        </div>
      </div>
    </div>
    <div id="slider_wrapper">
      <div class="clearfix" id="slider">
        <div class="container">
              
            <!DOCTYPE html>
          <html>
          <head>
            <title>Dynamic Quiz Project</title>
            <link type='text/css' rel='stylesheet' href='stylesheet.css'/>
            <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open Sans"/>
          </head>
          <body>
            <div id='container'>
              <div class="row">
                <div class="span2"></div>
                <div class="span8 ">
                  <div id='title'>
                    <h1>Maths quiz</h1>
                  </div>
                    <br/>
                    <div id='quiz'></div>
                    <div class='text-right button' id='next'><a class="button2" href='#'>Next</a></div>
                    <div class='text-right button' id='prev'><a class="button2" href='#'>Prev</a></div>
                    <div class='text-right button' id='start'> <a class="button2" href='#'>Start Over</a></div>
                    <div class='text-right button' id='done'> <a class="button2" href='kids_certificate'>Finish</a></div>
                    <span id="errorMsg"></span>
                    <!-- <button class='' id='next'>Next</a></button>
                    <button class='' id='prev'>Prev</a></button>
                    <button class='' id='start'> Start Over</a></button> -->
                  </div>
                </div>
                <div class="span2"></div> 
              </div>

            <script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js'></script>
            <script type="text/javascript" src='questions.json'></script>
            <script type='text/javascript' src='jsquiz.js'></script>
          </body>
          </html>
            <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

                <script type="text/javascript">
                    (function() {
                    var questions = [
                    <?php 
                      $r=-1; 
                      for($i=0;$i<$noOfQuestion-1;$i++){ 
                      $r++; ?>
                      {
                        question: <?php echo '"'.$quizAndAns[$i]->question.'"'?>,
                        choices: [<?php echo '"'.$quizAndAns[$i]->option1.'"'?>, 
                                  <?php echo '"'.$quizAndAns[$i]->option2.'"'?>, 
                                  <?php echo '"'.$quizAndAns[$i]->option3.'"'?>,
                                  <?php echo '"'.$quizAndAns[$i]->option4.'"'?>,
                                  <?php echo '"'.$quizAndAns[$i]->option5.'"'?>],
                        correctAnswer: <?=$quizAndAns[$i]->answer?>
                      },
                    <?php } ?>

                     {
                      question: <?php echo '"'.$quizAndAns[$r+1]->question.'"'?>,
                      choices: [<?php echo '"'.$quizAndAns[$r+1]->option1.'"'?>, 
                                <?php echo '"'.$quizAndAns[$r+1]->option2.'"'?>, 
                                <?php echo '"'.$quizAndAns[$r+1]->option3.'"'?>,
                                <?php echo '"'.$quizAndAns[$r+1]->option4.'"'?>,
                                <?php echo '"'.$quizAndAns[$r+1]->option5.'"'?>], 
                      correctAnswer: <?=$quizAndAns[$r+1]->answer?>
                    }];

                                        
                    var questionCounter = 0; //Tracks question number
                    var selections = []; //Array containing user choices
                    var quiz = $('#quiz'); //Quiz div object
                    
                    // Display initial question
                    displayNext();
                    
                    // Click handler for the 'next' button
                    $('#next').on('click', function (e) {
                      e.preventDefault();
                      
                      // Suspend click listener during fade animation
                      if(quiz.is(':animated')) {        
                        return false;
                      }
                      choose();
                      
                      // If no user selection, progress is stopped
                      if (isNaN(selections[questionCounter])) {
                        alert('Please make a selection!');
                        
                      } else {
                        questionCounter++;
                        displayNext();
                      }
                    });
                    
                    // Click handler for the 'prev' button
                    $('#prev').on('click', function (e) {
                      e.preventDefault();
                      
                      if(quiz.is(':animated')) {
                        return false;
                      }
                      choose();
                      questionCounter--;
                      displayNext();
                    });
                    
                    // Click handler for the 'Start Over' button
                    $('#start').on('click', function (e) {
                      e.preventDefault();
                      
                      if(quiz.is(':animated')) {
                        return false;
                      }
                      questionCounter = 0;
                      selections = [];
                      displayNext();
                      $('#start').hide();
                    });
                    
                    // Animates buttons on hover
                    $('.button').on('mouseenter', function () {
                      $(this).addClass('active');
                    });
                    $('.button').on('mouseleave', function () {
                      $(this).removeClass('active');
                    });
                    
                    // Creates and returns the div that contains the questions and 
                    // the answer selections
                    function createQuestionElement(index) {
                      var qElement = $('<div>', {
                        id: 'question'
                      });
                      
                      var header = $('<h2>Question ' + (index + 1) + ':</h2>');
                      qElement.append(header);
                      
                      var question = $('<p>').append(questions[index].question);
                      qElement.append(question);
                      
                      var radioButtons = createRadios(index);
                      qElement.append(radioButtons);
                      
                      return qElement;
                    }
                    
                    // Creates a list of the answer choices as radio inputs
                    function createRadios(index) {
                      var radioList = $('<ul>');
                      var item;
                      var input = '';
                      for (var i = 0; i < questions[index].choices.length; i++) {
                        item = $('<li>');
                        input = '<input type="radio" name="answer" value=' + i + ' />';
                        input += questions[index].choices[i];
                        item.append(input);
                        radioList.append(item);
                      }
                      return radioList;
                    }
                    
                    // Reads the user selection and pushes the value to an array
                    function choose() {
                      selections[questionCounter] = +$('input[name="answer"]:checked').val();
                    }
                    
                    // Displays next requested element
                    function displayNext() {
                      quiz.fadeOut(function() {
                        $('#question').remove();
                        
                        if(questionCounter < questions.length){
                          var nextQuestion = createQuestionElement(questionCounter);
                          quiz.append(nextQuestion).fadeIn();
                          if (!(isNaN(selections[questionCounter]))) {
                            $('input[value='+selections[questionCounter]+']').prop('checked', true);
                          }
                          
                          // Controls display of 'prev' button
                          if(questionCounter === 1){
                            $('#prev').show();
                          } else if(questionCounter === 0){
                            
                            $('#prev').hide();
                            $('#next').show();
                            $('#done').hide();
                          }
                        }else {
                          var scoreElem = displayScore();
                          quiz.append(scoreElem).fadeIn();
                          $('#next').hide();
                          $('#prev').hide();
                          $('#start').hide();
                          $('#done').show();
                        }
                      });
                    }
                    
                    // Computes score and returns a paragraph element to be displayed
                    function displayScore() {
                      //var score = $('<p>',{id: 'question'});
                      
                      var numCorrect = 0;
                      for (var i = 0; i < selections.length; i++) {
                        if (selections[i] === questions[i].correctAnswer) {
                          numCorrect++;
                        }
                      }
                      
                      myAnswers(numCorrect,questions.length);
                     // score.append('You got ' + numCorrect + ' questions out of ' +
                                 //  questions.length + ' right!!!');
                      //return score;
                    }
                  })();
                </script>

             
      </div>
     </div>    

          <div id="content"></div>

          <script type="text/javascript">
              function myAnswers(numCorrect,numQuestions){
                alert(numCorrect);
                alert(numQuestions);
                $.ajax({
                type: "get",
                url: "answer",
                data: { 
                    numCorrect:numCorrect,
                    numQuestions:numQuestions  
                },
                success: function (data)
                {
                  
                  
                    

                },
                error: function (xhr, ajaxOptions, thrownError) 
                {

                   
                
                }
            });
    
          
      
      
      return false;
      
              }
          </script>
          
@stop