<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BanquestHall extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'location',
        'max_no_of_guest',
        'reservation_date'
    ];

    public function menu()
    {
        return $this->belongsToMany(Menu::class);
    }
}
