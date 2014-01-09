<?php namespace Fussball\Storage\Match;

use Fussball\Match;

class EloquentMatchRepository implements MatchRepositoryInterface {

    public function all()
    {
        return Match::all();
    }

    public function find($id)
    {
        return Match::find($id);
    }

    public function create($input)
    {
        return Match::create($input);
    }
}