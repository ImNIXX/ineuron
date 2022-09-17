<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    use HasFactory;

    protected $table = TOPIC;

    public function Subject()
    {
        return $this->belongsTo(Subject::class, 'subject_id');
    }
}
