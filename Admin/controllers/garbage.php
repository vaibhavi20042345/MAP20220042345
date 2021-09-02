<?php

class Garbage extends Controller {

      public function index() {
 		$course = $this->model('Garbages');
 		$list = $course->get_all_list();
 	    $this->view('garbage/index', ['list' => $list]);
 		die;
     }
	
	 public function garbageImage($Id) {
		$course = $this->model('Garbages');
 		$list = $course->get_images($Id);
 	    $this->view('garbage/garbageImage', ['list' => $list]);
 		die;
     }

}
