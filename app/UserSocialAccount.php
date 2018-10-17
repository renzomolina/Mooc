<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\UserSocialAccount
 *
 * @property int $id
 * @property int $user_id
 * @property string $provider
 * @property string $provider_uid
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UserSocialAccount whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UserSocialAccount whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UserSocialAccount whereProvider($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UserSocialAccount whereProviderUid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UserSocialAccount whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UserSocialAccount whereUserId($value)
 * @mixin \Eloquent
 */
class UserSocialAccount extends Model
{
    //
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
