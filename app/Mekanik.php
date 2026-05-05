<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Servis;

class Mekanik extends Model
{
    protected $table = 'mekanik';
    protected $primaryKey = 'mekanik_id';
    protected $fillable = [
        'nama',
        'no_hp'
    ];

    public function servis()
    {
        return $this->hasMany(Servis::class);
    }
}
