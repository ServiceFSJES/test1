<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

/**
 * @property string name
 * @property string description
 */
class Role extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'description',
    ];
    public function users(){

        return $this->belongsToMany('App\User','user_role','role_id','user_id');
    }
}
