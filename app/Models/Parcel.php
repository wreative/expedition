<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parcel extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'parcel';
    public $remember_token = false;

    protected $fillable = [
        'tipe',
        'harga',
        'wilayah_id'
    ];

    public function relation()
    {
        return $this->hasOne('App\Models\Wilayah', 'par_id', 'id');
    }
}
