<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;

class Faq extends Model
{
    use HasFactory, LogsActivity;

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
        ->logUnguarded()
        ->setDescriptionForEvent(fn(string $eventName) => "This model has been {$eventName} by: ". "admin");
        // Chain fluent methods for configuration options
    }

    protected $fillable = [
        'category_faq_id',
        'question',
        'answer',
        'status',
        'order_position'
    ];

    public function category()
    {
        return $this->hasOne(CategoryFaq::class, 'id', 'category_faq_id');
    }
}
