<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'transaction';
    public $remember_token = false;

    protected $fillable = [
        'code',
        'status',
        'track'
    ];

    public function relation()
    {
        return $this->hasOne('App\Models\Resi', 'transaction', 'id');
    }

    public function relationStatus()
    {
        return $this->belongsTo('App\Models\Status', 'id', 'status');
    }

    public function relationTracking()
    {
        return $this->belongsTo('App\Models\Tracking', 'id', 'track');
    }
}
