<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Paciente;

class Nutricionista extends Model
{
    use HasFactory;
    protected $fillable=[
        'tel'
    ];

    public function user()
    {
        return $this->hasOne(User::class);
    }

    public function patients()
    {
        return $this->hasMany(Paciente::class);
    }
}
