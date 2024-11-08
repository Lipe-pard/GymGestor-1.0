<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'cpf',
        'phone',
        'neighborhood',
        'street',
        'number',
        'zip_code',
        'birth_date',
        'due_day',
    ];

    public function subscriptions(){
        return $this->hasMany(Subscription::class);
    }
}
