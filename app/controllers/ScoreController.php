<?php

use Illuminate\Support\Facades\Response;

class ScoreController extends \BaseController {

    /**
     * Display a listing of the resource.
     *
     * @param $match_id
     * @return Response
     */
	public function index($match_id)
	{
        return "Showing all scores for match $match_id";
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
        return "Showing score $score_id for match $match_id";
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