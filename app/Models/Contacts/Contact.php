<?php

namespace App\Models\Contacts;

use App\Enums\ContactStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contact extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'email',
        'subject',
        'message',
        'status',
    ];

    protected function casts(): array
    {
        return [
            'status' => ContactStatus::class,
        ];
    }
}