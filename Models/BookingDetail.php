<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class BookingDetail extends Model
{
    use HasFactory;
    public function index(){
        $BookingDetail =DB::table('booking_details')

            ->get();
        return$BookingDetail;
    }
}
