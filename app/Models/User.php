<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class User extends \TCG\Voyager\Models\User
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

    public function scopeActive($query)
    {
        return $query->where('role_id', 4);
    }

    public function scopeAutor($query)
    {
        if (auth()->user()->hasRole('IVA Admin')) {
            return $query->where('id', auth()->id());
        }
        if (auth()->user()->hasRole('Supervisor')) {
            return $query->where('id', auth()->id());
        } else {
            return $query->where('role_id', 4);
        }
    }

    public function scopeContacto($query)
    {
        if (auth()->user()->hasRole('IVA Admin')) {
            return $query->where('id', auth()->id());
        }
    }

    public function scopeTecnico($query)
    {

        return $query->where('role_id', 2);
    }

    public function scopeSupervisor($query)
    {

        return $query->where('role_id', 5);
    }

    public function scopeIVAAsigned($query)
    {
        return $query->where('id', auth()->id());
    }


}
