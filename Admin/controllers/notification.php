<?php

class Notification extends Controller {

      public function index() {
 		$course = $this->model('Notifications');
 		$notificationlist = $course->get_all_notifications();
 	    $this->view('notification/index', ['notificationlist' => $notificationlist]);
 		die;
     }

}
