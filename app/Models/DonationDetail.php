<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DonationDetail extends Model
{
    use HasFactory;
    protected $table = 'donationdetails';

   
    protected $fillable = [
        'last_donation_amount',
        'name',
        'phone',
        'email',
        'pan_number',
        'image',
        'allow_photo',
        'message'
    ];
}
