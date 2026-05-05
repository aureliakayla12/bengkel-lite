<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Servis;

class Sparepart extends Model
{
    protected $table = 'sparepart';
    protected $primaryKey = 'sparepart_id';
    protected $fillable = [
        'nama',
        'harga',
        'stok'
    ];

     public function servis()
    {
        return $this->belongsToMany(Servis::class, 'servis_sparepart')
                    ->withPivot('qty', 'harga')
                    ->withTimestamps();
    }
}
