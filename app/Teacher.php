<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Teacher
 *
 * @property int $id
 * @property int $user_id
 * @property string $title
 * @property string $biography
 * @property string $website_url
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Teacher whereBiography($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Teacher whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Teacher whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Teacher whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Teacher whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Teacher whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Teacher whereWebsiteUrl($value)
 * @mixin \Eloquent
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Course[] $courses
 * @property-read \App\User $user
 */
class Teacher extends Model
{
    //
    public function courses()
    {
        return $this->hasMany(Course::class);
    }
    public function user()
    {
        return $this->belongsTo(User::Class);
    }
}
