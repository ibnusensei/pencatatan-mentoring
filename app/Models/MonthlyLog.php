<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MonthlyLog extends Model
{
    use HasFactory;
    protected $fillable = ['mentor_id', 'month', 'activity', 'description', 'hour'];

    public function mentor()
    {
        return $this->belongsTo(Mentor::class);
    }

    public function getGetMonthAttribute()
    {
        return date('F', strtotime($this->month));
    }
}
