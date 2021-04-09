<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Receved extends Model
{
    protected $fillable = ['objet', 'expeditaire', 'destinataire', 'livreur', 'user_id'];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function recevedPdf() {
        return $this->hasOne(RecevedPdf::class);
    }
}
