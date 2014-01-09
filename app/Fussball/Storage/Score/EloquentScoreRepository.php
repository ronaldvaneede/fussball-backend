<?php namespace Fussball\Storage\Score;

use Fussball\Score;

class EloquentScoreRepository implements  ScoreRepositoryInterface {

    public function all()
    {
        return Score::all();
    }

    public function find($id)
    {
        return Score::find($id);
    }

    public function create($input)
    {
        return Score::create($input);
    }
}