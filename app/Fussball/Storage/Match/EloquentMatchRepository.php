<?php namespace Fussball\Storage\Match;

use Fussball\Match;

class EloquentMatchRepository implements MatchRepositoryInterface {

    public function all()
    {
        Match::all();
    }

    public function find($id)
    {
        Match::find($id);
    }

    public function create($input)
    {
        Match::create($input);
    }
}