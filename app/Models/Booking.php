<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_name',
        'room_id',
        'order_date',
        'check_in_date',
        'check_out_date',
        'special_request'
    ];
    
    public function room() {
        return $this->belongsTo(Room::class);
    }
}
