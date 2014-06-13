<?php
namespace XavieR\Events\Models;

use Model;

class City extends Model {


    /**
     * @var string The database table used by the model.
     */
    public $table = 'xavier_events_cities';

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
    public $hasMany = [
        'clubs' => ['XavieR\Events\Models\Club']
    ];
    public $timestamps = false;
}