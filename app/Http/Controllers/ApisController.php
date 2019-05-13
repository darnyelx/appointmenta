<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApisController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public $client;
    public $apiKey = "AIzaSyDz45dPojJCLeQZtPizla8CX2s4rOvoky0";
    public $applicationName = "Appointmenter";


    public function index()
    {
        return view('home');
    }

    public function init(){

        $this->client = new \Google_Client();
        $this->client->setApplicationName($this->applicationName);
        $this->client->setDeveloperKey($this->apiKey);
    }

    public function getEvents($calendarId,$nextToken = null){


        $service = new \Google_Service_Calendar($this->client);

        $startDate = date("c", strtotime('2019-01-01'));
        $endDate   = date("c", strtotime('2019-12-31'));

        $optParams = array('pageToken'  => $nextToken,
                            'timeMax'   => $endDate,
                            'timeMin'   => $startDate
                            );

        $events  = $service->events->listEvents($calendarId,$optParams);
        $nextToken = $events->getNextPageToken();

        return array(   'result'    => $events,
                        'nextToken' => $nextToken
                    );    
    }

    public function getSingleEvent($calendarId,$eventId){
        $service = new \Google_Service_Calendar($this->client);
        $events  = $service->events->get($calendarId,$eventId);

        return $events;

    }
}
