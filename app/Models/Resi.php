<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resi extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'resi';
    public $remember_token = false;
    public $timestamps = false;

    protected $fillable = [
        'nomor',
        'detailed',
        'jb',
        'service',
        'payment',
        'destination',
        'price',
        'agen',
        'transaction'
    ];

    public function relationTransaction()
    {
        return $this->hasOne('App\Models\Transaction', 'id', 'transaction');
    }

    public function relationDetailed()
    {
        return $this->hasOne('App\Models\Detailed', 'id', 'price');
    }

    public function relationPrice()
    {
        return $this->hasOne('App\Models\Transaction', 'id', 'price');
    }

    public function wilayah()
    {
        return $this->belongsTo('App\Models\Wilayah', 'id', 'destination');
    }
}
