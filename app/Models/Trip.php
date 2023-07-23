<?php

namespace App\Models;

use Attribute;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Trip extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'start_time' => 'datetime',
        'end_time'   => 'datetime',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function packs(): BelongsToMany
    {
        return $this->BelongsToMany(Pack::class);
    }

    public function getStartAttribute($value): Carbon
    {
        return Carbon::parse($value);
    }

    public function getEndAttribute($value): Carbon
    {
        return Carbon::parse($value);
    }
}
