<?php

namespace App\Http\Controllers\Api\Mattermost;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SentryController extends Controller
{
    public function sync($id, Request $request)
    {
        dd($id, $request->all());
    }
}
