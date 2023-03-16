<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;


class Members extends Model
{
    use HasFactory;
    use LogsActivity;
    use Notifiable;

    protected $fillable = [
        'user_id',
        'name',
        'email',
        'phone',
        'department',
        'designation',
        'workplace',
        'photo',
        'is_active',
        'is_paid',
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
            ->useLogName("Members");
    }

    public function memberCourse()
    {
        return $this->hasMany(MemberCourse::class, 'member_id', 'id');
    }

    //relation with user

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
