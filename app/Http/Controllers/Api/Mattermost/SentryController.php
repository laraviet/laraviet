<?php

namespace App\Http\Controllers\Api\Mattermost;

use App\MattermostSentry;
use Illuminate\Http\Request;
use App\Hooks\Mattermost\Sentry;
use App\Http\Controllers\Controller;

class SentryController extends Controller
{
    public function sync($id, Request $request)
    {
        $url = MattermostSentry::find($id)->mattermost_url;
        $client = new Sentry($url, $request->all());
        dd($client->sync());
    }
}
