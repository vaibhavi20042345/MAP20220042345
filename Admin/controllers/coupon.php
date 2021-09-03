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
	
	public function saveCoupon()
	{
		$UserId = $_REQUEST['UserId'];
		$CouponCode = $_REQUEST['CouponCode'];
		$CompanyName = $_REQUEST['CompanyName'];
		$ValidDate = $_REQUEST['ValidDate'];
		$Discount= $_REQUEST['Discount'];
		$All= $_REQUEST['All'];
		$course = $this->model('Coupons');
		// "<pre>uid ";print_r($UserId); "</pre></br>";
		// 	"<pre>cc";print_r($CouponCode); "</pre></br>";
		// 		"<pre>cn";print_r($CompanyName); "</pre></br>";
		// 			"<pre>date";print_r($ValidDate); "</pre></br>";
		// 				"<pre>discount";print_r($Discount); "</pre></br>";
		// 				"<pre>all";print_r($All); "</pre>";
		//	;exit;
		
 	
		 $course->add_coupon($UserId,$CouponCode,$CompanyName,$ValidDate,$Discount);
		$course = $this->model('Coupons');
 		$couponslist = $course->get_all_coupons();
 	    $this->view('coupon/index', ['couponslist' => $couponslist]);
 		die;
	}

}
