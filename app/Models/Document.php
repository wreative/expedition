<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'dokumen';
    public $remember_token = false;

    protected $fillable = [
        'retail',
        'kuantitas',
        'wilayah_id'
    ];

    public function relation()
    {
        return $this->hasMany('App\Models\Wilayah', 'dok_id', 'id');
    }
}
