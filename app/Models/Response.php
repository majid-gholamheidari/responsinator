<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Ramsey\Uuid\UuidInterface;

class Response extends Model
{
    protected $fillable = [
        'user_id',
        'title',
        'description',
        'type',
        'body',
        'header',
        'code',
        'delay',
        'expire_time',
        'requests',
        'uuid',
    ];

    /**
     * @return UuidInterface
     */
    public static function generateUuid(): \Ramsey\Uuid\UuidInterface
    {
        $uuid = Str::uuid();
        if (Response::where('uuid', $uuid)->exists())
            return self::generateUuid();
        return $uuid;
    }

    /**
     * @return void
     */
    protected static function boot(): void
    {
        parent::boot();

        static::creating(function ($response) {
            $response->uuid = self::generateUuid();
            $response->user_id = auth()->id();
            $response->expire_time = now()->addHours(24);
        });
    }

//    protected $keyType = 'string';
//    public $incrementing = false;

}
