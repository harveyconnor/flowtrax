<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TrackSubmission extends Model
{
    protected $fillable = ['first_name','last_name','email','artist','soundcloud','track_title','track_link','social_links'];

}
