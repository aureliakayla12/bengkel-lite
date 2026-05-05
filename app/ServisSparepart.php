<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Servis;
use App\Sparepart;

class ServisSparepart extends Model
{
    protected $table = 'servis_sparepart';
    protected $primaryKey = 'servis_sparepart_id';
    protected $fillable = [
        'servis_id',
        'sparepart_id',
        'qty',
        'harga'
    ];

    public function servis()
    {
        return $this->belongsTo(Servis::class);
    }

    public function sparepart()
    {
        return $this->belongsTo(Sparepart::class);
    }
}
