<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Deposit;
use App\Models\Transfer;
use App\Models\PaymentMethod;

class User extends Authenticatable
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
        'account_number',
        'account_balance',
        'admin',
        'total_deposits',
        'total_transfers',
        'total_withdrawals',
        'total_loans',



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

    /**
     * Get all of the cards for the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */


    public function deposits()
    {
        return $this->hasMany(Deposit::class);
    }

    public function transfers()
    {
        return $this->hasMany(Transfer::class);
    }

   // a user has many payment methods
    public function paymentMethods()
    {
        return $this->hasMany(PaymentMethod::class);
    }

    // get all the payments methods for the user where the paymentable_type is App\Models\Card
    public function cards()
    {
        return $this->paymentMethods()->where('paymentable_type', 'App\Models\Card');
    }

    // create a method that checks if the user has a card
    public function hasCard()
    {
        return $this->cards()->exists();
    }

    // create an accesosor for the created_at attribute
    public function getCreatedAtAttribute($value)
    {
        return \Carbon\Carbon::parse($value)->diffForHumans();
    }

    // create an accesosor for the account_balance attribute
    // public function getAccountBalanceAttribute($value)
    // {
    //     return '$' .number_format($value, 2);
    // }

    // create an accesosor for the total_deposits attribute
    public function getTotalDepositsAttribute($value)
    {
        return '$' .number_format($value, 2);
    }

    // create an accesosor for the total_transfers attribute
    public function getTotalTransfersAttribute($value)
    {
        return '$' .number_format($value, 2);
    }

    // create an accesosor for the total_withdrawals attribute
    public function getTotalWithdrawalsAttribute($value)
    {
        return '$' .number_format($value, 2);
    }

    // create an accesosor for the total_loans attribute
    public function getTotalLoansAttribute($value)
    {
        return '$' .number_format($value, 2);
    }



}
