<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Mattermost;

class SentryToMattermost extends Model
{

    public function mattermost() {
        return $this->belongsTo(Mattermost::class);
    }
    
}
