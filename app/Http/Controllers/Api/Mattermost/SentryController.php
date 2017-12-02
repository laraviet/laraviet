<?php

namespace App\Http\Controllers\Api\Mattermost;

use App\Mattermost;
use Illuminate\Http\Request;
use App\Hooks\Mattermost\Sentry;
use App\Http\Controllers\Controller;

class SentryController extends Controller
{
    public function sync($channel, Request $request)
    {
        $url = Mattermost::where('mattermost_channel', $channel)->first()->mattermost_url;
        $client = new Sentry($url, $request->all());
        dd($client->sync());
    }
}
