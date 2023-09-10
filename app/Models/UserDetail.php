<?php

// app/Models/UserDetail.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'city',
        'state',
        'address',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
