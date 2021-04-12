<?php
	
class WeatherDetail{
	
	
	
	public function get_weather($cityName){
		$key= API_KEY;
		$query_url= "https://api.openweathermap.org/data/2.5/weather?q=$cityName&appid=$key&units=metric";
		$json_weather = file_get_contents($query_url);
		$php_object= json_decode($json_weather);
		$weather_array =(array) $php_object;
		
		$weather['description']= (array) $weather_array['weather'][0];
		$weather['temperature']= (array) $weather_array['main'];
		
		return $weather;
	}
}
?>