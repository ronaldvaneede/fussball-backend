<?php

use Fussball\Storage\Match\MatchRepositoryInterface;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Response;

class MatchController extends \BaseController {

    /** @var \Fussball\Storage\Match\MatchRepositoryInterface */
    protected $match;

    public function __construct(MatchRepositoryInterface $match) {
        $this->match = $match;
    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        return $this->match->all();
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
        return $this->match->create(Input::get());
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        /** @var $match \Fussball\Match */
        $match = $this->match->find($id);
        if(Input::get('scores') === 'true') {
            $match->load('scores');
        }
        return $match;
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
        //return $this->match->create(Input::get());
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}