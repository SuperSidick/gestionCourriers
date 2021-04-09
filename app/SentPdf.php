<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SentPdf extends Model
{
    protected $fillable = ['nom', 'sent_id'];

    // public function sent() {
    //     return $this->BelongsTo(Sent::class);
    // }
}
