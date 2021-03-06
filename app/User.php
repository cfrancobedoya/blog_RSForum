<?php
// Developed by Cristian Franco Bedoya
namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function post() {
        return $this->hasMany(Post::class);
    }
    
    public function comment() {
        return $this->hasMany(Comment::class);
    }

    // ID
    public function getId() {
        return $this->attributes['id'];
    }
    public function setId($id) {
        $this->attributes['id'] = $id;
    }
    
    // Name
    public function getName() {
        return $this->attributes['name'];
    }
    public function setName($name) {
        $this->attributes['name'] = $name;
    }

    // Email
    public function getEmail() {
        return $this->attributes['email'];
    }
    public function setEmail($email) {
        $this->attributes['email'] = $email;
    }

    // Password
    public function getPassword() {
        return $this->attributes['password'];
    }
    public function setPassword($password) {
        $this->attributes['password'] = $password;
    }
}
