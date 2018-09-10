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


  </head>


   <style>

               body {
                   /* background-image: url("https://images.pexels.com/photos/35807/rose-red-rose-romantic-rose-bloom.jpg?auto=compress&cs=tinysrgb&h=350"); */
                   font-family: "Lato", sans-serif;
                   background-repeat: no-repeat;
                   /* background-color: ; */
                   color: #fff;
                   font-family: 'Raleway', sans-serif;
                   font-weight: 100;
                   height: 100vh;
                   margin: 0;
               }
               h2 {
            text-shadow: 2px 2px #757474;
                  }
              .containers{
                  width: 95%;
                  overflow:hidden;
                  /* background: skyblue; */
                  margin: 20px auto;
                  margin-bottom: 100px;
                  padding: 20px 0px;
                  padding-bottom: 60px;
                  padding-left: 5px;

              }
              .containers ul{
                  /* margin: 0px ; */
                  padding: 0px;
              }

              .containers ul li{
                  list-style: none;
                  float: left;
                  width: 27%; /* width sa box sa lesson */
                  height: 180px;
                  margin: 2px 20px 30px 50px ;
                  box-sizing:border-box;
                  /* border:2px solid white; */
              }
              .containers ul li hover{
                 opacity: 0.9;

              }

              @media screen and (max-width:1250px){
                  .containers{
                      /* margin-bottom: 200px; */

                  }
                  .containers ul li{
                      list-style: none;
                  float: left;
                  width: 40%; /* width sa box sa lesson */
                  height: 180px;
                  margin: 2px 20px 30px 50px ;
                  box-sizing:border-box;
                  /* border:2px solid white; */

                  }
                  h2{
                      text-align: center;
                  }
              }
               .wrapper {
                   position: relative;
                   overflow: hidden;
                   }

                   .wrapper:after {
                   content: '';
                   display: block;
                   padding-top: 100%;
                   }

                   .wrapper img {
                   width: auto;
                   height: 100%;
                   max-width: none;
                   position: absolute;
                   left: 50%;
                   top: 0;
                   transform: translateX(-50%);
                   }

                   #shad {
                  opacity: 90;
                  box-shadow: 0 5px 15px rgba(0,0,0,0.3);
              /* transition: opacity 0.3s ease-in-out; */
              }

              /* Scale up the box */
              .box:hover {
              transform: scale(1.2, 1.2);
              display:block;
              }

              /* Fade in the pseudo-element with the bigger shadow */
              .box:hover:after {
              opacity: 1;
              }


              @media screen and (max-width:992px){
                  .containers ul li{

                      text-align: center;
                      width: 50%;
                      /* margin: 20px;  */
                  /* margin: 0px 20px 0px 20px ; */
                  margin: 2px 0px 30px 0px ;
  }
                    /* Scale up the box */
                    .box:hover {
                  transform: scale(1.03, 1.03);
                  display:block;
                  }

                  /* Fade in the pseudo-element with the bigger shadow */
                  .box:hover:after {
                  opacity: 1;
                  }
                  h2{
                      text-align: center;
                  }



              }
              @media screen and (max-width: 600px) {
                  .containers ul li{
                      width: 90%;
                  }
                  h2{
                      text-align: center;
                  }
              }


   </style>
  <body>













      <!-- Flash messages -->

          <!-- if user is  registered then it will flash an alert success -->
           <?php if($this->session->flashdata('user_registered')): ?>
             <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_registered').'</p>'; ?>
           <?php endif; ?>

           <?php if($this->session->flashdata('post_created')): ?>
             <?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_created').'</p>'; ?>
           <?php endif; ?>

           <?php if($this->session->flashdata('post_updated')): ?>
             <?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_updated').'</p>'; ?>
           <?php endif; ?>

           <?php if($this->session->flashdata('category_created')): ?>
             <?php echo '<p class="alert alert-success">'.$this->session->flashdata('category_created').'</p>'; ?>
           <?php endif; ?>

           <?php if($this->session->flashdata('post_deleted')): ?>
             <?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_deleted').'</p>'; ?>
           <?php endif; ?>

           <?php if($this->session->flashdata('login_failed')): ?>
             <?php echo '<p class="alert alert-danger">'.$this->session->flashdata('login_failed').'</p>'; ?>
           <?php endif; ?>

           <?php if($this->session->flashdata('user_loggedin')): ?>
             <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedin').'</p>'; ?>
           <?php endif; ?>

            <?php if($this->session->flashdata('user_loggedout')): ?>
             <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedout').'</p>'; ?>
           <?php endif; ?>

           <?php if($this->session->flashdata('category_deleted')): ?>
             <?php echo '<p class="alert alert-success">'.$this->session->flashdata('category_deleted').'</p>'; ?>
           <?php endif; ?>
