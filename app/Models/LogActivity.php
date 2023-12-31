<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LogActivity extends Model
{
    use HasFactory;
    protected $table = 'log_activities';
    public $timestamps = true;

    protected $fillable = [
        'subject', 'url','method', 'ip', 'user_id', 'status'
    ];
}
