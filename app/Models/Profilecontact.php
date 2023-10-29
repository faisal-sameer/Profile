<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profilecontact extends Model
{
    protected $table = 'profilecontacts';

    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'password',
    ];
    public function User()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
