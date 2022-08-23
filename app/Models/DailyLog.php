<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DailyLog extends Model
{
    use HasFactory;
    protected $fillable = ['mentor_id', 'date', 'activity', 'description', 'hour'];

    public function mentor()
    {
        return $this->belongsTo(Mentor::class);
    }
}
