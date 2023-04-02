<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use Notifiable;
    use HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'divisi_id',
        'kwsb_id',
        'image',
        'angkatan',
        'jurusan',
        'nim',
        'no_hp',
        'alamat',
        'tempat_lahir',
        'tanggal_lahir',
        'jenis_kelamin',
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

    public function divisi()
    {
        return $this->belongsTo(Divisi::class);
    }

    public function kwsb()
    {
        return $this->belongsTo(KWSB::class);
    }

    public function Avatar()
    {
        return $this->image ? asset('storage/' . $this->image) : asset('storage/avatars/default.png');
    }
}
