<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Loan;
use App\Models\Deposit;
use App\Models\Transaction;
use App\Models\Transfer;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'city',
        'date_of_birth',
        'address_one',
        'address_two',
        'phone_number',
        'vat_number',
        'occupation',
        'currency',
        'account_type',
        'account_number',
        'state',
        'zip_code',
        'passport',
        'email',
        'id_type',
        'kyc_status',
        'back_id',
        'last_login_at',
        'last_login_ip',
        'last_login_user_agent',
        'front_id',
        'country',
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
        'password' => 'hashed',
    ];





    public function loan()
    {
        return $this->hasOne(Loan::class, 'user_id'); // Assuming 'user_id' is the foreign key in the 'kycs' table
    }


    public function deposit()
    {
        return $this->hasOne(Deposit::class, 'user_id'); // Assuming 'user_id' is the foreign key in the 'kycs' table
    }


    public function transfer()
    {
        return $this->hasOne(Transfer::class, 'user_id'); // Assuming 'user_id' is the foreign key in the 'kycs' table
    }

    public function transaction()
    {
        return $this->hasOne(Transaction::class, 'user_id'); // Assuming 'user_id' is the foreign key in the 'kycs' table
    }
}
