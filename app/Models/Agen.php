<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agen extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'agen';
    public $remember_token = false;
    public $timestamps = false;

    protected $fillable = [
        'name',
        'address',
        'code',
        'tlp'
    ];

    public function relation()
    {
        return $this->hasMany('App\Models\User', 'agen', 'id');
    }
}
