<?php

class Coupon extends Controller {

      public function index() {
		 
		 
 		$course = $this->model('Coupons');
 		$couponslist = $course->get_all_coupons();
 	    $this->view('coupon/index', ['couponslist' => $couponslist]);
 		die;
     }

}