<?php
require_once 'google/Google_Client.php';
require_once 'google/Google_CalendarService.php';

const CLIENT_ID = '182609602603-dqs9n7scj1hpp2ai0l1a6acd3fiic4nv.apps.googleusercontent.com';
const SERVICE_ACCOUNT_NAME = '182609602603-dqs9n7scj1hpp2ai0l1a6acd3fiic4nv@developer.gserviceaccount.com';
define("KEY_FILE", dirname(__FILE__) . '/credentials/googke_api_key.p12');

function todays_category(){
	$client = new Google_Client();
	$client->setClientId(CLIENT_ID);
	$client->setAssertionCredentials(new Google_AssertionCredentials(
	  SERVICE_ACCOUNT_NAME,
	  array('https://www.googleapis.com/auth/calendar'),
	  file_get_contents(KEY_FILE)
	));

	$service = new Google_CalendarService($client);
	$optParams = array(
		'timeMin' => date('c'),
		'timeMax' => date('c', strtotime('+1 day'))
	);
	$events = $service->events->listEvents('miraishokudo@gmail.com', $optParams);
	$tmp = str_replace('が読めます' ,'', $events['items'][0]["summary"]);
	$tmp = str_replace('【' ,'', $tmp);
	return str_replace('】' ,'', $tmp);
}
