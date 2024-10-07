<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class condominio extends Model
{
    use HasFactory;
    protected $primaryKey = 'idMorador';
       protected $fillable = [
       
        'nomeMorador',
        'cpfMorador',
        'rgMorador',
        'aptoMorador',
        'telefoneMorador',
        'emailMorador',
    ];
}
