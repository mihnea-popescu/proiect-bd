<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comanda extends Model
{
    use HasFactory;
    protected $table = "Comenzi";

    public function angajat()
    {
        return $this->hasOne(Angajat::class);
    }

    public function curier()
    {
        return $this->hasOne(Curier::class);
    }
}
