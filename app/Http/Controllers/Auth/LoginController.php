<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use App\User;
//use curl_init;

use Maknz;

use anlutro;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

        /*$curl = new anlutro\cURL\cURL;

        $response = $curl->get('http://www.google.com');

        print_r($response);exit();

        // easily build an url with a query string
        $url = $curl->buildUrl('http://www.google.com', ['s' => 'curl']);
        $response = $curl->get($url);

        // the post, put and patch methods takes an array of POST data
        $response = $curl->post($url, ['api_key' => 'my_key', 'post' => 'data']);

        // add "json" to the start of the method to convert the data to a JSON string
        // and send the header "Content-Type: application/json"
        $response = $curl->jsonPost($url, ['post' => 'data']);

// if you don't want any conversion to be done to the provided   data, for example
        // if you want to post an XML string, add "raw" to the start of the method
        $response = $curl->rawPost($url, '<?xml version...');

// raw request are also the easiest way to upload files
        $file = curl_file_create('/path/to/file');
        $response = $curl->rawPost($url, ['file' => $file]);

// a response object is returned
        var_dump($response->statusCode); // response status code integer (for example, 200)
        var_dump($response->statusText); // full response status (for example, '200 OK')
        echo $response->body;
        var_dump($response->headers); // array of headers
        var_dump($response->info); // array of curl info*/


        $vimala = 'https://hooks.slack.com/services/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';
        $vicky = 'https://hooks.slack.com/services/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';

        $client = new Maknz\Slack\Client($vicky);
//        $client->send('Sorry Wrong window!');
        $users = array('vignesh.m', 'senthilkumar', 'lenin' ,'saravanan', 'vignesh', 'tamilselvan ', 'baskar'
        ,'vignesh.m', 'senthilkumar', 'lenin' ,'saravanan', 'vignesh', 'tamilselvan ', 'baskar'
        ,'vignesh.m', 'senthilkumar', 'lenin' ,'saravanan', 'vignesh', 'tamilselvan ', 'baskar'
        ,'vignesh.m', 'senthilkumar', 'lenin' ,'saravanan', 'vignesh', 'tamilselvan ', 'baskar');
        for($i=0; $i <= count($users) ; $i++) {

            $settings = [
                'username' => $users[$i],
                'channel' => '#parkfind',
                'link_names' => true
            ];
            $client = new Maknz\Slack\Client($vicky, $settings);
//            $client->to('@priya')->send('Happy holidays  Priya');
//            $client->to('@lenin')->send('Congratulation lenin');
//            $client->to('@vigneshk')->send('Congratulation Vignesh Kuthalingam');
//            $client->to('@vignesh.m')->send('Congratulation Vignesh Kuthalingam');
        }

        echo "<pre>";print_r($client);echo "</pre>";exit();

        $this->middleware('guest', ['except' => 'logout']);
    }
}
