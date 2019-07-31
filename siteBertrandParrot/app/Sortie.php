<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sortie extends Model
{
    //
    protected $fillable = [
        'nom', 'date', 'description','lieu','auteur'
    ];
    public function users()
    {
        return $this->belongsToMany(User::class,'sortie_user');
    }
}
