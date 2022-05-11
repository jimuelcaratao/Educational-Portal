<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Thesis extends Model
{
    use HasFactory;

    protected $table = 'thesis';
    protected $primaryKey = 'thesis_id';

    protected $fillable = [
        'user_id',
        'title',
        'slug',
        'body',
        'editor',
        'thesis_status',
        'default_photo',
        'pdf',
        'viewers',
        'section',
        'course',
        'year',
        'published_date',
        'author_name',
    ];

    protected $casts = [
        'viewers' => 'float',
    ];

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    // filtering product
    public function scopeThesisFilter($q)
    {
        if (!empty(request()->search)) {

            $q->Where('title', 'LIKE', '%' . request()->search .  '%');
        }
        return $q;
    }
}
