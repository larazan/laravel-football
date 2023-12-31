<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;

class Attribute extends Model
{
    use HasFactory, LogsActivity;

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
        ->logUnguarded()
        ->setDescriptionForEvent(fn(string $eventName) => "This model has been {$eventName} by: ". Auth::user() ? Auth::user()->first_name .' '. Auth::user()->last_name : 'admin');
        // Chain fluent methods for configuration options
    }

    protected $fillable = [
        'code',
        'name',
        'type',
        'validation',
        'is_required',
        'is_unique',
        'is_filterable',
        'is_configurable',
    ];

    public static function types()
    {
        return [
            'text' => 'Text',
            'textarea' => 'Textarea',
            'price' => 'Price',
            'boolean' => 'Boolean',
            'select' => 'Select',
            'datetime' => 'Datetime',
            'date' => 'Date',
        ];
    }

    public static function booleanOptions()
    {
        return [
            1 => 'Yes',
            0 => 'No',
        ];
    }
    
    public static function validations()
    {
        return [
            'number' => 'Number',
            'decimal' => 'Decimal',
            'email' => 'Email',
            'url' => 'URL',
        ];
    }

    public function attributeOptions()
    {
        return $this->hasMany(AttributeOption::class);
    }
}
