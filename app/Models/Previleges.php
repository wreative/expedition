<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Previleges extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'previleges';
    public $remember_token = false;
    public $timestamps = false;

    protected $fillable = [
        'name'
    ];

    public function relation()
    {
        return $this->hasMany('App\Models\User', 'previleges', 'id');
    }
}
