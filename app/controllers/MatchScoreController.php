<?php

use Fussball\Storage\Match\MatchRepositoryInterface;
use Illuminate\Support\Facades\Response;

class MatchScoreController extends \BaseController {

    /** @var \Fussball\Storage\Match\MatchRepositoryInterface */
    protected $match;

    public function __construct(MatchRepositoryInterface $match) {
        $this->match = $match;
    }

    /**
     * Display a listing of the resource.
     *
     * @param $match_id
     * @return Response
     */
	public function index($match_id)
	{
        return $this->match->find($match_id)['scores'];
	}

    /**
     * Show the form for creating a new resource.
     *
     * @param $match_id
     * @return Response
     */
	public function create($match_id)
	{
		//
	}

    /**
     * Store a newly created resource in storage.
     *
     * @param $match_id
     * @return Response
     */
	public function store($match_id)
	{
		//
	}

    /**
     * Display the specified resource.
     *
     * @param $match_id
     * @param $score_id
     * @internal param int $id
     * @return Response
     */
	public function show($match_id, $score_id)
	{
        foreach ($this->match->find($match_id)->load('scores')['scores'] as $score) {
            /** @var $score \Fussball\Score */
            if($score['id'] === $score_id) {
                return $score;
            }
        }
	}

    /**
     * Show the form for editing the specified resource.
     *
     * @param $match_id
     * @param $score_id
     * @internal param int $id
     * @return Response
     */
	public function edit($match_id, $score_id)
	{
		//
	}

    /**
     * Update the specified resource in storage.
     *
     * @param $match_id
     * @param $score_id
     * @internal param int $id
     * @return Response
     */
	public function update($match_id, $score_id)
	{
		//
	}

    /**
     * Remove the specified resource from storage.
     *
     * @param $match_id
     * @param $score_id
     * @internal param int $id
     * @return Response
     */
	public function destroy($match_id, $score_id)
	{
		//
	}

}