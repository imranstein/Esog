<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;


class Course extends Model
{
    use HasFactory;
    use LogsActivity;

    protected $fillable = [
        'title',
        'tags',
        'description',
        'author',
        'document',
        'video',
        'is_paid',
        'length',
        'thumbnail',
        'credit_hour',
        'video_length'
    ];

    protected static $logAttributes = ['*'];

    protected static $logOnlyDirty = true;

    public function getDescriptionForEvent(string $eventName): string
    {
        //$user = Auth::user()->name;
        //return "{$user} has {$eventName} user {$this->name}";

        return "user has {$eventName} user {$this->name}";
    }
    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->logOnly(['*'])
            ->useLogName("Course");
    }

    public function memberCourse()
    {
        return $this->hasMany(MemberCourse::class, 'course_id', 'id');
    }
}
