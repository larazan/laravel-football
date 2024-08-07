<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;

class Category extends Model
{
    use HasFactory, LogsActivity;

    protected $table = 'categories';

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
        ->logUnguarded()
        ->setDescriptionForEvent(fn(string $eventName) => "This model has been {$eventName} by: ". Auth::user() ? Auth::user()->first_name .' '. Auth::user()->last_name : 'admin');
        // Chain fluent methods for configuration options
    }

    protected $fillable = ['name', 'slug', 'parent_id'];

    public function childs() {
        return $this->hasMany(Category::class, 'parent_id');
    }

    public function parent() {
        return $this->belongsTo(Category::class, 'parent_id');
    }

    public function product()
    {
        return $this->hasMany(Product::class);
    }

    public function scopeParentCategories($query)
    {
        return $query->where('parent_id', 0);
    }

    public static function childIds($parentId = 0)
	{
		$categories = Category::select('id','name','parent_id')->where('parent_id', $parentId)->get()->toArray();

		$childIds = [];
		if(!empty($categories)){
			foreach($categories as $category){
				$childIds[] = $category['id'];
				$childIds = array_merge($childIds, Category::childIds($category['id']));
			}
		}

		return $childIds;
	}
}
