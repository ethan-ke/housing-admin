<?php

namespace App\Models;

use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;

class Merchant extends Authenticatable
{
    use HasApiTokens, HasFactory;

    protected $fillable = ['nickname', 'password'];
    protected $hidden = ['password'];

    /**
     * @return HasMany
     */
    public function house(): HasMany
    {
        return $this->hasMany(House::class);
    }

    /**
     * 通过给定的username获取用户实例
     *
     * @param string $username
     * @return Merchant
     */
    public function findForPassport(string $username): Merchant
    {
        return $this->where('username', $username)->first();
    }

    /**
     * Prepare a date for array / JSON serialization.
     *
     * @param  \DateTimeInterface  $date
     * @return string
     */
    protected function serializeDate(DateTimeInterface $date): string
    {
        return $date->format('Y-m-d H:i:s');
    }
}
