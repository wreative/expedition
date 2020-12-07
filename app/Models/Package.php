<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'paket';
    public $remember_token = false;

    protected $fillable = [
        'tipe',
        'berat_pertama',
        'berat_berikut',
        'wilayah_id'
    ];

    public function relation()
    {
        return $this->hasMany('App\Models\Wilayah', 'pak_id', 'id');
    }
}
