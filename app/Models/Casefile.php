<?php

namespace App\Models;

use App\Livewire\Pages\Client\ContractAgreement;
use App\Models\CaseFileDocuments;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasOneOrMany;

class Casefile extends Model
{
    //
    protected $guarded = ['id'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function casefiledocuments(): HasMany
    {
        return $this->hasMany(CaseFileDocuments::class);
    }
    public function contractagreement(): HasOne
    {
        return $this->hasOne(ContractAgreement::class);
    }
}
