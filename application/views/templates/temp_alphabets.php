
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <!-- CSRF Token -->
      <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>SPEDEMY.com</title>
    <link rel="stylesheet" href="https://bootswatch.com/4/flatly/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/app.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/animate.css">


    <script src="http://cdn.ckeditor.com/4.5.11/standard/ckeditor.js"></script>
    <!-- Fonts -->
      <link rel="dns-prefetch" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">


      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


      <style>

                   .btn{
                      width: 15%;
                      margin-top: 0px;
                      padding:10px;
                      border: 0;
                      background: transparent;
                  }

                   body {
                       font-family: "Lato", sans-serif;
                       background-repeat: repeat;
                       font-weight: 100;
                       height: 100vh;
                       margin: 0;
                   }

                   /* newly added */
                   .Alphabet_bg{ background-image: url("<?php echo site_url(); ?>assets/images/SPEDEMY/sub_menu/background.jpg"); }
                   .letter_A{   background-image: url("<?php echo site_url(); ?>assets/images/SPEDEMY/Lesson/Alphabets/_Lessons/A/background1.jpg"); }
                   .letter_B{   background-image: url("<?php echo site_url(); ?>assets/images/SPEDEMY/Lesson/Alphabets/_Lessons/B/background1.jpg"); }
                   .letter_C{   background-image: url("<?php echo site_url(); ?>assets/images/SPEDEMY/Lesson/Alphabets/_Lessons/C/background1.jpg"); }
                   .letter_D{   background-image: url("<?php echo site_url(); ?>assets/images/SPEDEMY/Lesson/Alphabets/_Lessons/D/background1.jpg"); }
                   .letter_E{   background-image: url("<?php echo site_url(); ?>assets/images/SPEDEMY/Lesson/Alphabets/_Lessons/E/background1.jpg"); }
                   .letter_F{   background-image: url("<?php echo site_url(); ?>assets/images/SPEDEMY/Lesson/Alphabets/_Lessons/F/background1.jpg"); }
                   .letter_G{   background-image: url("<?php echo site_url(); ?>assets/images/SPEDEMY/Lesson/Alphabets/_Lessons/G/background1.jpg"); }
                   .letter_H{   background-image: url("<?php echo site_url(); ?>assets/images/SPEDEMY/Lesson/Alphabets/_Lessons/H/background1.jpg"); }
                   .letter_I{   background-image: url("<?php echo site_url(); ?>assets/images/SPEDEMY/Lesson/Alphabets/_Lessons/I/background1.jpg"); }
                   .letter_J{   background-image: url("<?php echo site_url(); ?>assets/images/SPEDEMY/Lesson/Alphabets/_Lessons/J/background1.jpg"); }
                   .letter_K{   background-image: url("<?php echo site_url(); ?>assets/images/SPEDEMY/Lesson/Alphabets/_Lessons/K/background1.jpg"); }
                   .letter_L{   background-image: url("<?php echo site_url(); ?>assets/images/SPEDEMY/Lesson/Alphabets/_Lessons/L/background1.jpg"); }
                   .letter_M{   background-image: url("<?php echo site_url(); ?>assets/images/SPEDEMY/Lesson/Alphabets/_Lessons/M/background1.jpg"); }
                   .letter_N{   background-image: url("<?php echo site_url(); ?>assets/images/SPEDEMY/Lesson/Alphabets/_Lessons/N/background1.jpg"); }
                   .letter_O{   background-image: url("<?php echo site_url(); ?>assets/images/SPEDEMY/Lesson/Alphabets/_Lessons/O/background1.jpg"); }
                   .letter_P{   background-image: url("<?php echo site_url(); ?>assets/images/SPEDEMY/Lesson/Alphabets/_Lessons/P/background1.jpg"); }
                   .letter_Q{   background-image: url("<?php echo site_url(); ?>assets/images/SPEDEMY/Lesson/Alphabets/_Lessons/Q/background1.jpg"); }
                   .letter_R{   background-image: url("<?php echo site_url(); ?>assets/images/SPEDEMY/Lesson/Alphabets/_Lessons/R/background1.jpg"); }
                   .letter_S{   background-image: url("<?php echo site_url(); ?>assets/images/SPEDEMY/Lesson/Alphabets/_Lessons/S/background1.jpg"); }
                   .letter_T{   background-image: url("<?php echo site_url(); ?>assets/images/SPEDEMY/Lesson/Alphabets/_Lessons/T/background1.jpg"); }
                   .letter_U{   background-image: url("<?php echo site_url(); ?>assets/images/SPEDEMY/Lesson/Alphabets/_Lessons/U/background1.jpg"); }
                   .letter_V{   background-image: url("<?php echo site_url(); ?>assets/images/SPEDEMY/Lesson/Alphabets/_Lessons/V/background1.jpg"); }
                   .letter_W{   background-image: url("<?php echo site_url(); ?>assets/images/SPEDEMY/Lesson/Alphabets/_Lessons/W/background1.jpg"); }
                   .letter_X{   background-image: url("<?php echo site_url(); ?>assets/images/SPEDEMY/Lesson/Alphabets/_Lessons/X/background1.jpg"); }
                   .letter_Y{   background-image: url("<?php echo site_url(); ?>assets/images/SPEDEMY/Lesson/Alphabets/_Lessons/Y/background1.jpg"); }
                   .letter_Z{   background-image: url("<?php echo site_url(); ?>assets/images/SPEDEMY/Lesson/Alphabets/_Lessons/Z/background1.jpg"); }


                  .color_black{   background-image: url("<?php echo site_url(); ?>assets/images/SPEDEMY/Lesson/Colors/_Lessons/background_white_and_black.jpg"); }
                  .color_red{   background-image: url("<?php echo site_url(); ?>assets/images/SPEDEMY/Lesson/Colors/_Lessons/background_red.jpg"); }
                  .color_green{   background-image: url("<?php echo site_url(); ?>assets/images/SPEDEMY/Lesson/Colors/_Lessons/background_green.jpg"); }
                  .color_pink{   background-image: url("<?php echo site_url(); ?>assets/images/SPEDEMY/Lesson/Colors/_Lessons/background_pink.jpg"); }
                  .color_blue{   background-image: url("<?php echo site_url(); ?>assets/images/SPEDEMY/Lesson/Colors/_Lessons/background_blue_and_brown.jpg"); }
                  .color_brown{   background-image: url("<?php echo site_url(); ?>assets/images/SPEDEMY/Lesson/Colors/_Lessons/background_blue_and_brown.jpg"); }
                  .color_yellow{   background-image: url("<?php echo site_url(); ?>assets/images/SPEDEMY/Lesson/Colors/_Lessons/background_yellow.jpg"); }
                  .color_violet{   background-image: url("<?php echo site_url(); ?>assets/images/SPEDEMY/Lesson/Colors/_Lessons/background_violet.jpg"); }
                  .color_orange{   background-image: url("<?php echo site_url(); ?>assets/images/SPEDEMY/Lesson/Colors/_Lessons/background_orange.jpg"); }
                  .color_white{   background-image: url("<?php echo site_url(); ?>assets/images/SPEDEMY/Lesson/Colors/_Lessons/background_white_and_black.jpg"); }

                  .number_bg{   background-image: url("<?php echo site_url(); ?>assets/images/SPEDEMY/Lesson/Numbers/__Lesson/background.jpg"); }
                  .expression_bg{background-image: url("<?php echo site_url(); ?>assets/images/SPEDEMY/Lesson/Facial Expression/__Lesson/background.jpg"); }

                  .expression_happy{width: 40%;  }

                   /* end new */




                   .letter{ width:13%; padding-right: 0%;  }



                      .lettersmall{ width:12%;   padding-right: 0%; }

                      .color{ width: 13%;  }
                      .number{width: 12%; }
                      .number1margin{margin-left: 25%}
                      .number2margin{margin-left: 45%}

                      .shape0margin{margin-left: 25%}
                      .shape1margin{margin-left: 20%}
                      .shape2margin{margin-left: 10%}

                      .letterA{width: 30%;  }







                 .back{
                  width: 15%;
                  padding: 10px;
                  margin-top: 0px;
                  margin-bottom: 10px;
                  border: 0;
                  background: transparent;
                  }
                  .marg0{ margin-top:2%; margin-left:12%; }
                  .marg1{ margin-left: 20%; }
                  .margine2{ margin-left: 15%; }
                  .marg3{  margin-left: 9%; }
                  .marg4{ margin-left: 0.5%; }

                  /* hover */
                  .zoom:hover {
                      -ms-transform: scale(1.3); /* IE 9 */
                      -webkit-transform: scale(1.3); /* Safari 3-8 */
                      transform: scale(1.3);
                  }
                   @media screen and (max-width: 576px) {

                      .btn{ width: 20%; }
                      .letter,.lettersmall{  width: 30%; }
                      .margine2{  margin-left:0%;  }
                      .marg0,.marg1,.marg3,.marg4{ margin-left:0%;  }

                      .back{
                      margin-top: 0%;
                      width:50%;
                      }
                      .zoom:hover {
                      -ms-transform: scale(1.1); /* IE 9 */
                      -webkit-transform: scale(1.1); /* Safari 3-8 */
                      transform: scale(1.1);
                      }

                      .color2margin{  margin-left:50%; }
                      .number{width: 27%; }
                      .number1margin{margin-left: 0%}
                      .number2margin{margin-left: 0%}


                  }

                   @media screen and (min-height: 1200px) {
                      .btn{
                          width: 20%;
                      }
                      .letter,.lettersmall{
                          width: 30%;
                      }
                      .margine2{
                          margin-left:0%;
                      }
                      .marg0,.marg1,.marg3,.marg4{
                          margin-left:0%;
                      }

                      .back{
                      margin-top: 0%;
                      width:50%;
                      }
                      .zoom:hover {
                      -ms-transform: scale(1.1); /* IE 9 */
                      -webkit-transform: scale(1.1); /* Safari 3-8 */
                      transform: scale(1.1);
                      }
                      .color{
                          width: 30%;
                      }

                      .color2margin{
                          margin-left:20%;
                      }
                      .number{width: 27%; }
                      .number1margin{margin-left: 0%}
                      .number2margin{margin-left: 0%}
                  }
                  .carousel-inner > .item > img,
                  .carousel-inner > .item > a > img {
                      width: 30%;
                      margin: auto;
                  }
                  .container{
                      position: relative;
                      text-align: center;
                      color: black;

                  }

                  .centered {
                      /* sa box na naa sa tunga */
                      position: absolute;
                      top: 50%;
                      left: 50%;

                  }

                  .top-left {
                      position: absolute;
                      top: 10px;
                      left: 16px;
                  }




       </style>

 </head>
