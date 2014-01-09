<?php namespace Fussball;

use LaravelBook\Ardent\Ardent;
use Fussball\Score;

class Match extends Ardent {

    protected $fillable = array('name','status');

    /**
     * Ardent validation rules
     */
    public static $rules = array(
        'name'                  => 'required|between:1,16',
        'status'                => 'required|in:open,playing,finished,closed'
    );

    public function scores()
    {
        return $this->hasMany('Fussball\Score');
    }
}