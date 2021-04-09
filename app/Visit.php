<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visit extends Model
{
    protected $fillable = ['objet', 'nom_visiteur', 'personne_visite', 'rdv', 'user_id'];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
