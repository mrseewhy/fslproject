<?php

namespace App\Models;

use App\Models\Casefile;
use Illuminate\Database\Eloquent\Model;

class CaseFileDocuments extends Model
{
   
    protected $guarded = ['id'];

    public function casefile()
    {
        return $this->belongsTo(Casefile::class);
    }
}
