<?php
namespace XavieR\Events\Models;

use Model;

class Club extends Model {


    /**
     * @var string The database table used by the model.
     */
    public $table = 'xavier_events_clubs';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = ['title', 'description', 'confirmed'];

    /**
     * @var array Validation rules
     */
    public $rules = [
        'title' => 'required'
    ];
    public $belongsTo = [
        'country' => ['XavieR\Events\Models\City']
    ];

    /**
     * @var bool Indicates if the model should be timestamped.
     */
    public $timestamps = false;

}