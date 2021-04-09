<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class RecevedPdf extends Model
{
    protected $fillable = ['nom', 'receved_id'];

    // public function receved() {
    //     return $this->BelongsTo(Receved::class);
    // }
}
