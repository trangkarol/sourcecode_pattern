<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
   /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        //
    ];
    //
    public function users()
    {
        
        // return $this->belongsToMany('App\Model\DetailRoles');
        $this->belongsToMany('App\Model\Users');
    }
}
