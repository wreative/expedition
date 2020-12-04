<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'price';
    public $remember_token = false;
    public $timestamps = false;

    protected $fillable = [
        'b_k',
        'b_po',
        'b_pa',
        'b_l',
        't_b',
        'vol_dl',
        'vol_u',
        'weight',
        'amount'
    ];

    public function relation()
    {
        return $this->hasOne('App\Models\Resi', 'price', 'id');
    }
}
