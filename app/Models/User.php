<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'section',
        'course',
        'year',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function scopeNameFilter($q)
    {
        if (!empty(request()->search)) {
            $q->Where('name', 'LIKE', '%' .  request()->search  .  '%')
                ->OrWhere('email', 'LIKE', '%' .  request()->search  .  '%');
        }

        return $q;
    }

    public function scopeRoleFilter($q)
    {
        if (request()->search_col != null) {
            $q->Where('is_admin', 'LIKE', '%' .  request()->search_col  .  '%');
        }
        return $q;
    }
}
