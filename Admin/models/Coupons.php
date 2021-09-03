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
 			$statement = $db->prepare("SELECT UserId, Email FROM `UserMaster` WHERE IsActive=1 and IsDelete=0 and RoleId=1");
 			$statement->execute();
 			$rows = $statement->fetchAll(PDO::FETCH_ASSOC);
 			return $rows;
 		}
		
		public function add_coupon($UserId,$CouponCode,$CompanyName,$ValidDate,$Discount) {
 			$db = db_connect();
			  
			  // $query2 = 'INSERT INTO Coupon (CouponId, UserId, CouponCode, IsScratched,CompanyName, DiscountPercentage) VALUES (NULL, :UserId, :CouponCode, 0,:CompanyName,:DiscountPercentage);';
			
// 			$query2 = 'INSERT INTO Coupon (CouponId, UserId, CouponCode,CompanyName IsScratched, DiscountPercentage) VALUES (NULL, :UserId, :CouponCode,:CompanyName, 0, 7);';
			  
			  $query2 = 'INSERT INTO Coupon (CouponId, UserId, CouponCode, IsScratched, DiscountPercentage) VALUES (NULL, :UserId,:CouponCode, 0, 5);';
			  
		
			$stmt2 = $db->prepare($query2);
			  $stmt2->bindParam(':UserId', $UserId,PDO::PARAM_INT);
			  $stmt2->bindParam(':CouponCode', $CouponCode);

  $stmt2->execute();
			"<pre>uid ";print_r($UserId); "</pre></br>";
			"<pre>cc";print_r($CouponCode); "</pre></br>";
				"<pre>cn";print_r($CompanyName); "</pre></br>";
					"<pre>date";print_r($ValidDate); "</pre></br>";
						"<pre>discount";print_r($Discount); "</pre></br>";
						"<pre>all";print_r($All); "</pre>";
		//	;exit;
			
 			 echo 'done';
 		}
	}
?>