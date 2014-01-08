<?php namespace Fussball\Storage\Score;

use Fussball\Score;


class EloquentScoreRepository implements  ScoreRepositoryInterface {

    public function all()
    {
        Score::all();
    }

    public function find($id)
    {
        Score::find($id);
    }

    public function create($input)
    {
        Score::create($input);
    }
}