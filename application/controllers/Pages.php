  <?php
  	class Pages extends CI_Controller{
  		public function view($page = 'home'){
        // check if the view exists
  			if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
          // show errors function in CI
          show_404();
  			}
        // variable data is the variable to be passed to the views
  			$data['title'] = ucfirst($page);
        // load the views
  			$this->load->view('templates/header');
        $this->load->view('templates/nav');

        // the content of the page
  			$this->load->view('pages/'.$page, $data);
  			$this->load->view('templates/footer');
  		}


  	}
