<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Course
 *
 * @property int $id
 * @property int $teacher_id
 * @property int $category_id
 * @property int $level_id
 * @property string $nombre
 * @property string $descripcion
 * @property string $slug
 * @property string $picture
 * @property string $status
 * @property int $previous_approved
 * @property int $previous_rejected
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Course whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Course whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Course whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Course whereDescripcion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Course whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Course whereLevelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Course whereNombre($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Course wherePicture($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Course wherePreviousApproved($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Course wherePreviousRejected($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Course whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Course whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Course whereTeacherId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Course whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property string $name
 * @property-read \App\Category $category
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Goal[] $goals
 * @property-read \App\Level $level
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Requirement[] $requirements
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Review[] $reviews
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Student[] $students
 * @property-read \App\Teacher $teachers
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Course whereName($value)
 */
class Course extends Model
{
    const PUBLISHED=1;
    const PENDING=2;
    const REJECTED=3;

    public function category()
    {
        return $this->belongsTo(Category::class)->select('id','name');
    }

    public function goals()
    {
        return $this->hasMany(Goal::class)->select('id','course_id','goal');
    }

    public function level()
    {
        return $this->belongsTo(Level::class)->select('id','name');
    }

    public function reviews()
    {
        return $this->hasMany(Review::class)->select('id','user_id','course_id','rating','comment','created_at');
    }

    public function requirements()
    {
        return $this->hasMany(Requirement::class)->select('id','course_id','requirement');
    }

    public function students()
    {
        return $this->belongsToMany(Student::class);
    }

    public function teachers()
    {
        return $this->belongsTo(Teacher::class);
    }

}
