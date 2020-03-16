<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departments extends Model
{
    //Table name
    protected $table = 'departments';

    //primary key
    public $primaryKey = 'id';

    //Timestamps
    public $timestamps = true;

    //Form Relation -- a single department belongs to a user
    public function user(){
        return $this->belongsTo('App\User', 'user_id');

}
}
