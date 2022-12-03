<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;


class MemberCourse extends Model
{
    use HasFactory;
    use LogsActivity;

    protected $fillable = [
        'member_id',
        'course_id',
        'is_approved',
        'started_at',
        'finished_at',
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
            ->useLogName("MemberCourse");
    }

    public function member()
    {
        return $this->belongsTo(Members::class, 'member_id', 'id');
    }

    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id', 'id');
    }
}
