<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use OpenApi\Attributes\Property;
use OpenApi\Attributes\Schema;
use Spatie\Permission\Traits\HasRoles;

#[Schema]
class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Get the unique identifier for the user.
     *
     * @return mixed
     */
    public function getAuthIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Get the password for the user.
     *
     * @return string
     */
    public function getAuthPassword()
    {
        return $this->password;
    }

    #[Property(type: "int")]
    private $id    = null;
    #[Property(type: "string")]
    private $login    = null;
    #[Property(type: "string")]
    private $password = null;
    #[Property(type: "string")]
    private $email = null;
    #[Property(type: "string")]
    private $full_name = null;
    #[Property(type: "string")]
    private $phone_number = null;
    #[Property(type: "string")]
    private $birth_date = null;
    #[Property(type: "string")]
    private $lang = null;
    #[Property(type: "string")]
    private $timezone = null;

}
