<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Donatiom extends Model
{
    protected $fillable = [
        'campaign_id',
        'donor_name',
        'amount',
        'message',
    ];

    //Donasi ini dikirim untuk (belongsTo) Campaign apa?
    public function campaign()
    {
        return $this->belongsTo(Campaign::class);
     }
}
