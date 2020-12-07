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
        return $this->belongsTo('App\Models\Transaction', 'transaction', 'id');
    }

    public function relationDetailed()
    {
        return $this->belongsTo('App\Models\Detailed', 'detailed', 'id');
    }

    public function relationPrice()
    {
        return $this->belongsTo('App\Models\Price', 'price', 'id');
    }

    public function relationPayment()
    {
        return $this->belongsTo('App\Models\Payment', 'payment', 'id');
    }

    public function relationService()
    {
        return $this->belongsTo('App\Models\Service', 'service', 'id');
    }

    public function relationType()
    {
        return $this->belongsTo('App\Models\Type', 'jb', 'id');
    }

    public function relationWilayah()
    {
        return $this->belongsTo('App\Models\Wilayah', 'destination', 'id');
    }
}
