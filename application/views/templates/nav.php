<div class="navbar-fixed-top">

         <nav class="navbar navbar-expand-md  navbar-laravel navbar-dark  " style=" background-color: #78569a;
         left: 0;
         top: 0;
         width: 100%;

         " >
          <div class="container" >

                <a class="navbar-brand" href="<?php echo base_url(); ?>" style="padding: 4px;margin:auto">

                    <img src="<?php echo site_url(); ?>assets/images/SPEDEMY/logo.png" style="height: 35px; padding: 0 auto;">SPEDEMY.com
                </a>

              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                  <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <!-- Left Side Of Navbar -->
                  <ul class="navbar-nav mr-auto">

                  </ul>



                  <!-- Right Side Of Navbar -->
                  <ul class="navbar-nav ml-auto">
                      <!-- Authentication Links -->
                      <!-- if not logged in this will show the login/register -->
                      <?php if(!$this->session->userdata('logged_in')) : ?>
                      <li class="nav-item" ><a class="nav-link " href="<?php echo base_url(); ?>users/login">Login</a></li>
                      <li class="nav-item"><a class="nav-link " href="<?php echo base_url(); ?>users/register">Register</a></li>
                    <?php endif; ?>
                    <!--if logged in, this menus nav bar will show  -->
                    <?php if($this->session->userdata('logged_in')) : ?>

                      <ul class="nav-item dropdown">


                        <a  id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>USER</a>


                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                          <li><a href="<?php echo base_url(); ?>category_menu"  class="dropdown-item">Main Menu</a></li>

                          <li><a href="<?php echo base_url(); ?>posts/create"  class="dropdown-item">Create Post</a></li>
                          <li><a href="<?php echo base_url(); ?>categories/create"  class="dropdown-item">Create Category</a></li>
                          <li><a href="<?php echo base_url(); ?>users/logout"  class="dropdown-item">Logout</a></li>


                        </div>
                      </ul>

                    <?php endif; ?>
                  </ul>
              </div>
          </div>
      </nav>
    </div>
