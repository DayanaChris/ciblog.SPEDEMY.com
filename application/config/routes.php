<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['posts/index'] = 'posts/index';
$route['posts/create'] = 'posts/create';
$route['posts/update'] = 'posts/update';
$route['posts/(:any)'] = 'posts/view/$1';
$route['posts'] = 'posts/index';


                          // controller, lesson
$route['category_menu'] = 'lessons/category_menu';

$route['lessons/submenu_alphabets'] = 'lessons/submenu_alphabets';
$route['lessons/submenu_numbers'] = 'lessons/submenu_numbers';
$route['lessons/submenu_colors'] = 'lessons/submenu_colors';
$route['lessons/submenu_actionwords'] = 'lessons/submenu_actionwords';
$route['lessons/submenu_shapes'] = 'lessons/submenu_shapes';
$route['lessons/submenu_expressions'] = 'lessons/submenu_expressions';


$route['lessons/lesson_alphabets'] = 'lessons/lesson_alphabets';
      $route['lessons/lesson_letters'] = 'lessons/lesson_letters';
      $route['lessons/letter_B'] = 'lessons/letter_B';
      $route['lessons/letter_C'] = 'lessons/letter_C';
      $route['lessons/letter_D'] = 'lessons/letter_D';
      $route['lessons/letter_E'] = 'lessons/letter_E';
      $route['lessons/letter_F'] = 'lessons/letter_F';
      $route['lessons/letter_G'] = 'lessons/letter_G';
      $route['lessons/letter_H'] = 'lessons/letter_H';
      $route['lessons/letter_I'] = 'lessons/letter_I';
      $route['lessons/letter_J'] = 'lessons/letter_J';
      $route['lessons/letter_K'] = 'lessons/letter_K';
      $route['lessons/letter_L'] = 'lessons/letter_L';
      $route['lessons/letter_M'] = 'lessons/letter_M';
      $route['lessons/letter_N'] = 'lessons/letter_N';
      $route['lessons/letter_O'] = 'lessons/letter_O';
      $route['lessons/letter_P'] = 'lessons/letter_P';
      $route['lessons/letter_Q'] = 'lessons/letter_Q';
      $route['lessons/letter_R'] = 'lessons/letter_R';
      $route['lessons/letter_S'] = 'lessons/letter_S';
      $route['lessons/letter_T'] = 'lessons/letter_T';
      $route['lessons/letter_U'] = 'lessons/letter_U';
      $route['lessons/letter_V'] = 'lessons/letter_V';
      $route['lessons/letter_W'] = 'lessons/letter_W';
      $route['lessons/letter_X'] = 'lessons/letter_X';
      $route['lessons/letter_Y'] = 'lessons/letter_Y';
      $route['lessons/letter_B'] = 'lessons/letter_Z';


$route['lessons/lesson_numbers'] = 'lessons/lesson_numbers';
      $route['lessons/number_0'] = 'lessons/number_0';
      $route['lessons/number_1'] = 'lessons/number_1';
      $route['lessons/number_2'] = 'lessons/number_2';
      $route['lessons/number_3'] = 'lessons/number_3';
      $route['lessons/number_4'] = 'lessons/number_4';
      $route['lessons/number_5'] = 'lessons/number_5';
      $route['lessons/number_6'] = 'lessons/number_6';
      $route['lessons/number_7'] = 'lessons/number_7';
      $route['lessons/number_8'] = 'lessons/number_8';
      $route['lessons/number_9'] = 'lessons/number_9';
      $route['lessons/number_10'] = 'lessons/number_10';

$route['lessons/lesson_colors'] = 'lessons/lesson_colors';
      $route['lessons/color_black'] = 'lessons/color_black';
      $route['lessons/color_blue'] = 'lessons/color_blue';
      $route['lessons/color_brown'] = 'lessons/color_brown';
      $route['lessons/color_orange'] = 'lessons/color_orange';
      $route['lessons/color_pink'] = 'lessons/color_pink';
      $route['lessons/color_green'] = 'lessons/color_green';
      $route['lessons/color_orange'] = 'lessons/color_orange';
      $route['lessons/color_violet'] = 'lessons/color_violet';
      $route['lessons/color_white'] = 'lessons/color_white';
      $route['lessons/color_yellow'] = 'lessons/color_yellow';




$route['lessons/lesson_actionwords'] = 'lessons/lesson_actionwords';
      $route['lessons/action_words'] = 'lessons/action_words';



$route['lessons/lesson_shapes'] = 'lessons/lesson_shapes';
$route['lessons/lesson_expressions'] = 'lessons/lesson_expressions';
      $route['lessons/expression_happy'] = 'lessons/expression_happy';







$route['lessons/lesson_vowels'] = 'lessons/lesson_vowels';




$route['lessons/quiz_alphabets'] = 'lessons/quiz_alphabets';
$route['lessons/quiz_numbers'] = 'lessons/quiz_numbers';
$route['lessons/quiz_colors'] = 'lessons/quiz_colors';
$route['lessons/quiz_actionwords'] = 'lessons/quiz_actionwords';
$route['lessons/quiz_shapes'] = 'lessons/quiz_shapes';
$route['lessons/quiz_expressions'] = 'lessons/quiz_expressions';



$route['default_controller'] = 'pages/view';


$route['categories'] = 'categories/index';
$route['categories/create'] = 'categories/create';

$route['categories/posts/(:any)'] = 'categories/posts/$1';

$route['(:any)'] = 'pages/main_menu/$1';

$route['(:any)'] = 'pages/view/$1';








$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
