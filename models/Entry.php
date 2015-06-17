<?php namespace Mja\Forms\Models;

use Model;

/**
 * Entry Model
 */
class Entry extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'mja_forms_entries';

    /**
     * @var array The rules to be applied to the data.
     */
    public $rules = [
        'title'  => 'required|min:3|max:255',
        'slogan' => 'max:255',
        'body'   => 'required|min:5',
    ];


    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = ['title', 'slogan', 'body'];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];

}
