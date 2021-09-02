<?php
 	class Coupons {
		
	public function __construct($param=false){}
	
	public function get_all_coupons() {
 			$db = db_connect();
 			$statement = $db->prepare("SELECT C.CouponId as Id, C.CouponCode as CouponCode, U.Name as User, C.CompanyName as Company, C.DiscountPercentage as Discount, C.ValidDate as ValidDate, C.IsScratched as Scratched FROM `Coupon` as C join `UserMaster` as U WHERE C.UserId = U.UserId");
 			$statement->execute();
 			$rows = $statement->fetchAll(PDO::FETCH_ASSOC);
 			return $rows;
 		}
		
		
		public function get_all_users() {
 			$db = db_connect();
 			$statement = $db->prepare("SELECT UserId, Email FROM `UserMaster` WHERE IsActive=1 and IsDelete=0");
 			$statement->execute();
 			$rows = $statement->fetchAll(PDO::FETCH_ASSOC);
 			return $rows;
 		}
	}
?>