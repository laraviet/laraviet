<?php

namespace App\Hooks\Mattermost;

class Sentry
{
    protected $url;
    protected $payload;

    public function __construct($url, $payload)
    {
        $this->url = $url;
        $this->payload = $payload;
    }

    public function sync()
    {
        $client = new \GuzzleHttp\Client();
        $text = $this->payload["project_name"] . " | " . $this->payload["message"] . " \n " . $this->payload["url"];
        $myBody['payload'] = '{"username": "sentry", "text": "' . $text . '", "icon_url": "https://seeklogo.com/images/S/sentry-logo-32188C6881-seeklogo.com.png"}';

        return $client->request('POST' ,$this->url,  ['form_params'=>$myBody]);
    }
}