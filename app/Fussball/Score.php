<?php namespace Fussball;

use LaravelBook\Ardent\Ardent;

class Score extends Ardent {

    protected $fillable = array('team');

    /**
     * Ardent validation rules
     */
    public static $rules = array(
        'team'                => 'required|in:red,blue'
    );

    public function match()
    {
        return $this->belongsTo('Match');
    }
}