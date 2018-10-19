<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Level
 *
 * @property int $id
 * @property string $nombre
 * @property string $descripcion
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Level whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Level whereDescripcion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Level whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Level whereNombre($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Level whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property string $name
 * @property string $description
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Level whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Level whereName($value)
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Course[] $course
 */
class Level extends Model
{
    //
    public function course()
    {
       return $this->hasOne(Course::class);
    }
}
