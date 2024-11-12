<?php

namespace App\Models;

use Faker\Provider\ar_EG\Payment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Reservation extends Model
{
    protected $table = 'reservations';
    protected $fillable = ['checkin_date', 'checkout_date', 'adults_number', 'children_number', 'price', 'cancellation_fine', 'discount', 'status', 'payment_method_id', 'employee_id', 'client_id', 'room_id'];
    //has one payment_method
    public function payment_method():BelongsTo
    {
        return $this->belongsTo(PaymentMethod::class);
    }
    //has one employee
    public function employee():BelongsTo
    {
        return $this->belongsTo(Employee::class);
    }
    //has one client
    public function client():BelongsTo
    {
        return $this->belongsTo(Client::class);
    }
    //has one room
    public function room():BelongsTo
    {
        return $this->belongsTo(Room::class);
    }
    //has many services
    public function services()
    {
        return $this->belongsToMany(Service::class, 'reservation_services', 'reservation_id', 'service_id');
    }
}
