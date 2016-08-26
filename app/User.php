<?php

namespace App;

use Illuminate\Notifications\Notifiable;
//use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
//Authenticatable
class User extends Model 
{
    //use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function tweets(){
        return $this->hasMany('App\Tweet');
    }

    /**
     * Get return values
     * @return array
     */
    public function _out(){
        return array(
            'id' => $this->id,
            'name' => $this->name
        );
    }
}
