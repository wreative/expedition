<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detailed extends Model
{
    use HasFactory;
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'detailed';
    public $remember_token = false;
    public $timestamps = false;

    protected $fillable = [
        'sender_name',
        'sender_tlp',
        'sender_addr',
        'receiver_name',
        'receiver_tlp',
        'receiver_addr',
        'note',
        'office_tlp',
        'office_addr',
        'office_pst',
    ];

    public function relation()
    {
        return $this->hasOne('App\Models\Resi', 'detailed', 'id');
    }
}
