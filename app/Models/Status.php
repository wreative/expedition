<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'status';
    public $remember_token = false;

    protected $fillable = [
        'name'
    ];

    public function relation()
    {
        return $this->hasMany('App\Models\Transaction', 'status', 'id');
    }
}
