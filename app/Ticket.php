<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $guarded = [];
    public function user(){
        return $this->belongsTo(Users::class);
    }
    public function evet(){
        return $this->belongsTo(Events::class);
    }
}
