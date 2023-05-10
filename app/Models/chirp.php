<?php

namespace App\Models;
use App\Events\ChirpCreated;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class chirp extends Model
{
    use HasFactory;


    protected $fillable = [
        'message',
    ];

    protected $dispatchesEvents = [
        'created' => ChirpCreated::class,
    ];

    // inverse of many to many
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
