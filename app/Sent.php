<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sent extends Model
{
    protected $fillable = ['objet', 'expeditaire', 'destinataire', 'livreur', 'user_id'];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function sentPdf() {
        return $this->hasOne(SentPdf::class);
    }
}
