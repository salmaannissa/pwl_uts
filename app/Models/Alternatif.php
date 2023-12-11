<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Alternatif extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function criterias(): BelongsToMany
    {
        return $this->belongsToMany(Criteria::class, 'cpi_evaluations')->withPivot('value');
    }
}
