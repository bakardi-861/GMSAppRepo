<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    //Table name
    protected $table = 'applications';

    //primary key
    public $primaryKey = 'id';

    //Timestamps
    public $timestamps = true;

    //Form Relation -- a single application belongs to a user
    public function user(){
            return $this->belongsTo('App\User', 'user_id');

    }
}
