<?php
require_once 'google/Google_Client.php';
require_once 'google/Google_CalendarService.php';

const CLIENT_ID = '182609602603-dqs9n7scj1hpp2ai0l1a6acd3fiic4nv.apps.googleusercontent.com';
const SERVICE_ACCOUNT_NAME = '182609602603-dqs9n7scj1hpp2ai0l1a6acd3fiic4nv@developer.gserviceaccount.com';
define("KEY_FILE", dirname(__FILE__) . '/credentials/google_api_key.p12');

function todays_categories(){
	$client = new Google_Client();
	$client->setClientId(CLIENT_ID);
	$client->setAssertionCredentials(new Google_AssertionCredentials(
	  SERVICE_ACCOUNT_NAME,
	  array('https://www.googleapis.com/auth/calendar'),
	  file_get_contents(KEY_FILE)
	));

	$service = new Google_CalendarService($client);
	$optParams = array(
		'timeMin' => date('c', strtotime('today +10 hour')),
		'timeMax' => date('c', strtotime('noon'))
	);
	$events = $service->events->listEvents('miraishokudo@gmail.com', $optParams);
	preg_match( '/【(.*?)】【(.*?)】【(.*?)】が読めます/', $events['items'][0]["summary"], $matches );
	return array($matches[1], $matches[2], $matches[3]);
}
