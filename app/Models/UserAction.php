<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAction extends Model
{
    use HasFactory;

    protected $table = "user_actions";
    public $timestamps = false;
    protected $primaryKey = "id";

    protected $fillable = [
        'action',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(Users::class);
    }
}
