<?php

class Coupon extends Controller {

      public function index() {
 		$course = $this->model('Coupons');
 		$couponslist = $course->get_all_coupons();
 	    $this->view('coupon/index', ['couponslist' => $couponslist]);
 		die;
     }
	
	public function addCoupons(){
		$course = $this->model('Coupons');
 		$userlist = $course->get_all_users();
 	    $this->view('coupon/addCoupons', ['userlist' => $userlist]);
 		die;
	}

}
