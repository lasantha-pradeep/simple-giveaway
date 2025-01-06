<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    protected $fillable = [
        'fname',
        'lname',
        'address1',
        'address2',
        'city',
        'state',
        'postalcode',
        'phone',
        'email',
        'country'
    ];

    protected function casts(): array
    {
        return [
            'fname' => 'encrypted',
            'lname' => 'encrypted',
            'address1' => 'encrypted',
            'address2' => 'encrypted',
            'city' => 'encrypted',
            'state' => 'encrypted',
            'postalcode' => 'encrypted',
            'phone' => 'encrypted',
            'email' => 'encrypted',
            'country' => 'encrypted',
        ];
    }
}
