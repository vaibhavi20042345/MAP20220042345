<?php

class Weather extends Controller {

    public function index() {	
		$cityName ='Sault Ste. Marie';
	  	$model = $this->model('WeatherDetail');
		
		$result = $model->get_weather($cityName);
		
		echo "It is ". round($result['temperature']['temp']). " degrees ";
		echo "with ". $result['description']['description'];
    }

}
