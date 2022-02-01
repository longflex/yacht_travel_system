<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    //protected $table = 'events';
    /**
     * Fillable fields
     *
     * @var array
     */
    //'number_of_guests',
    protected $fillable = [
        'name',
        /*'boarding_location',
        'event_date',
        'start_time',
        'end_time',
        'yacht_id',
        'owner_id',
        'number_of_guests',
        'event_type',
        'description',
        'general_instructions'*/
        'event_type',
        'slug_str',
        'boarding_location',
        'event_date',
        'start_time',
        'end_time',
        'yacht_id',
        'number_of_guests',
        'owner_id',
        'description',
        'created_at',
        'updated_at',
        'general_instructions',
        'crm_id'
    ];

    public function location(){
        return $this->belongsTo(Location::class);
    }

    public function yacht(){
        return $this->belongsTo(Product::class);
    }

    public function host(){
        return $this->belongsTo(User::class, 'owner_id', 'id');
    }
}
