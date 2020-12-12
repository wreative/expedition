<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wilayah extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'wilayah';
    public $remember_token = false;
    public $timestamps = false;

    protected $fillable = [
        'name',
        'code',
        // 'dok_id',
        // 'pak_id',
        // 'par_id'
        // 'price'
    ];

    public function relation()
    {
        return $this->hasMany('App\Models\Resi', 'destination', 'id');
    }

    public function relationDocument()
    {
        return $this->belongsTo('App\Models\Document', 'dok_id', 'id');
    }

    public function relationPackage()
    {
        return $this->belongsTo('App\Models\Package', 'pak_id', 'id');
    }

    public function relationParcel()
    {
        return $this->belongsTo('App\Models\Parcel', 'par_id', 'id');
    }
}
