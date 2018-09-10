<?php
  class Lessons extends CI_Controller{
    public function submenu_alphabets(){
      $data['title'] = 'ALPHABETS';

      $this->load->view('templates/temp_lessons');
      $this->load->view('lessons/submenu_alphabets', $data);
    }

    public function submenu_actionwords(){
      $this->load->view('templates/temp_lessons');
      $this->load->view('lessons/submenu_actionwords');
    }
    public function category_menu(){
      $this->load->view('category_menu');
    }

    public function submenu_colors(){
      $this->load->view('templates/temp_lessons');
      $this->load->view('lessons/submenu_colors');
    }

    public function submenu_expressions(){
      $this->load->view('templates/temp_lessons');
      $this->load->view('lessons/submenu_expressions');
    }

    public function submenu_numbers(){
      $this->load->view('templates/temp_lessons');
      $this->load->view('lessons/submenu_numbers');
    }


    public function submenu_shapes(){
      $this->load->view('templates/temp_lessons');
      $this->load->view('lessons/submenu_shapes');
    }




    // lesson routes
        public function lesson_alphabets(){
          $this->load->view('templates/temp_alphabets');
          $this->load->view('lessons/lesson_alphabets');
        }
              // individual letters
              public function lesson_letters(){
                $this->load->view('templates/temp_alphabets');
                $this->load->view('lessons/lesson_letters');
              }
              public function letter_B(){
                $this->load->view('templates/temp_alphabets');
                $this->load->view('lessons/letter_B');
              }
              public function letter_C(){
                $this->load->view('templates/temp_alphabets');
                $this->load->view('lessons/letter_C');
              }
              public function letter_D(){
                $this->load->view('templates/temp_alphabets');
                $this->load->view('lessons/letter_D');
              }
              public function letter_E(){
                $this->load->view('templates/temp_alphabets');
                $this->load->view('lessons/letter_E');
              }
              public function letter_F(){
                $this->load->view('templates/temp_alphabets');
                $this->load->view('lessons/letter_F');
              }
              public function letter_G(){
                $this->load->view('templates/temp_alphabets');
                $this->load->view('lessons/letter_G');
              }
              public function letter_H(){
                $this->load->view('templates/temp_alphabets');
                $this->load->view('lessons/letter_H');
              }
              public function letter_I(){
                $this->load->view('templates/temp_alphabets');
                $this->load->view('lessons/letter_I');
              }
              public function letter_J(){
                $this->load->view('templates/temp_alphabets');
                $this->load->view('lessons/letter_J');
              }
              public function letter_K(){
                $this->load->view('templates/temp_alphabets');
                $this->load->view('lessons/letter_K');
              }
              public function letter_L(){
                $this->load->view('templates/temp_alphabets');
                $this->load->view('lessons/letter_L');
              }
              public function letter_M(){
                $this->load->view('templates/temp_alphabets');
                $this->load->view('lessons/letter_M');
              }
              public function letter_N(){
                $this->load->view('templates/temp_alphabets');
                $this->load->view('lessons/letter_N');
              }
              public function letter_O(){
                $this->load->view('templates/temp_alphabets');
                $this->load->view('lessons/letter_O');
              }
              public function letter_P(){
                $this->load->view('templates/temp_alphabets');
                $this->load->view('lessons/letter_P');
              }
              public function letter_Q(){
                $this->load->view('templates/temp_alphabets');
                $this->load->view('lessons/letter_Q');
              }
              public function letter_R(){
                $this->load->view('templates/temp_alphabets');
                $this->load->view('lessons/letter_R');
              }
              public function letter_S(){
                $this->load->view('templates/temp_alphabets');
                $this->load->view('lessons/letter_S');
              }
              public function letter_T(){
                $this->load->view('templates/temp_alphabets');
                $this->load->view('lessons/letter_T');
              }

              public function letter_U(){
                $this->load->view('templates/temp_alphabets');
                $this->load->view('lessons/letter_U');
              }
              public function letter_V(){
                $this->load->view('templates/temp_alphabets');
                $this->load->view('lessons/letter_V');
              }
              public function letter_W(){
                $this->load->view('templates/temp_alphabets');
                $this->load->view('lessons/letter_W');
              }
              public function letter_X(){
                $this->load->view('templates/temp_alphabets');
                $this->load->view('lessons/letter_X');
              }
              public function letter_Y(){
                $this->load->view('templates/temp_alphabets');
                $this->load->view('lessons/letter_Y');
              }
              public function letter_Z(){
                $this->load->view('templates/temp_alphabets');
                $this->load->view('lessons/letter_Z');
              }





        public function lesson_vowels(){

          $this->load->view('lessons/lesson_vowels');
        }

        public function lesson_actionwords(){
          $this->load->view('lessons/lesson_actionwords');
        }
                  public function action_words(){
                    $this->load->view('templates/temp_alphabets');
                    $this->load->view('lessons/action_words');
                  }

        public function lesson_colors(){
          $this->load->view('lessons/lesson_colors');
        }
              public function color_black(){
                $this->load->view('templates/temp_alphabets');
                $this->load->view('lessons/color_black');
              }
              public function color_blue(){
                $this->load->view('templates/temp_alphabets');
                $this->load->view('lessons/color_blue');
              }
              public function color_brown(){
                $this->load->view('templates/temp_alphabets');
                $this->load->view('lessons/color_brown');
              }
              public function color_green(){
                $this->load->view('templates/temp_alphabets');
                $this->load->view('lessons/color_green');
              }
              public function color_orange(){
                $this->load->view('templates/temp_alphabets');
                $this->load->view('lessons/color_orange');
              }
              public function color_pink(){
                $this->load->view('templates/temp_alphabets');
                $this->load->view('lessons/color_pink');
              }

        public function lesson_expressions(){
          $this->load->view('lessons/lesson_expressions');
        }
              public function expression_happy(){ $this->load->view('templates/temp_alphabets'); $this->load->view('lessons/expression_happy'); }


        public function lesson_numbers(){
          $this->load->view('lessons/lesson_numbers');
        }
              public function number_0(){ $this->load->view('templates/temp_alphabets'); $this->load->view('lessons/number_0'); }
              public function number_1(){ $this->load->view('templates/temp_alphabets'); $this->load->view('lessons/number_1'); }
              public function number_2(){ $this->load->view('templates/temp_alphabets'); $this->load->view('lessons/number_2'); }
              public function number_3(){ $this->load->view('templates/temp_alphabets'); $this->load->view('lessons/number_3'); }
              public function number_4(){ $this->load->view('templates/temp_alphabets'); $this->load->view('lessons/number_4'); }
              public function number_5(){ $this->load->view('templates/temp_alphabets'); $this->load->view('lessons/number_5'); }
              public function number_6(){ $this->load->view('templates/temp_alphabets'); $this->load->view('lessons/number_6'); }
              public function number_7(){ $this->load->view('templates/temp_alphabets'); $this->load->view('lessons/number_7'); }
              public function number_8(){ $this->load->view('templates/temp_alphabets'); $this->load->view('lessons/number_8'); }
              public function number_9(){ $this->load->view('templates/temp_alphabets'); $this->load->view('lessons/number_9'); }
              public function number_10(){ $this->load->view('templates/temp_alphabets'); $this->load->view('lessons/number_10'); }



        public function lesson_shapes(){
          $this->load->view('lessons/lesson_shapes');
        }





// quiz routes
    public function quiz_alphabets(){
      $this->load->view('lessons/quiz_alphabets');
    }

    public function quiz_actionwords(){
      $this->load->view('lessons/quiz_actionwords');
    }

    public function quiz_colors(){
      $this->load->view('lessons/quiz_colors');
    }

    public function quiz_expressions(){
      $this->load->view('lessons/quiz_expressions');
    }

    public function quiz_numbers(){
      $this->load->view('lessons/quiz_numbers');
    }

    public function quiz_shapes(){
      $this->load->view('lessons/quiz_shapes');
    }



  }
