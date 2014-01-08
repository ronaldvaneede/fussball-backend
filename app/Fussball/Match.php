<?php namespace Fussball;

use LaravelBook\Ardent\Ardent;

class Match extends Ardent {

    /**
     * Ardent validation rules
     */
    public static $rules = array(
        'name'                  => 'required|between:1,16',
        'status'                => 'required|in:open,playing,finished,closed'
    );
}