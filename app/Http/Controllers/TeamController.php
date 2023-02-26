<?php

namespace App\Http\Controllers;

// use App\Team;
use App\Models\team;
use App\Http\Requests\StoreTeamRequest;
use App\Http\Requests\UpdateTeamRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
class TeamController extends BaseController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         # code...
        $teams = team::all();
        return $this->sendResponse($teams->toArray(), 'teams read succesfully');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $newTeam = new Team();
        $newTeam->name = $request->name;
        $newTeam->job = $request->job;
        $newTeam->save();
        return $this->sendResponse($newTeam->toArray(), 'team  created succesfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(  $id)
    {
        $team = team::find($id);
        if ( is_null($team)   ) {
            # code...
            return $this->sendError('team not found ! ');
        }
        return $this->sendResponse($team->toArray(), 'team read succesfully');
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Team $team): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request , team $team)
{
    // $input = $request->all();
    // $validator =    Validator::make($input, [
    // 'name'=> 'required',
    // 'details'=> 'required' 
    // ] );

    // if ($validator -> fails()) {
    //     # code...
    //     return $this->sendError('error validation', $validator->errors());
    // }
    $team->name =  $input['name'];
    $team->job =  $input['job'];
    $team->save();
    return $this->sendResponse($team->toArray(), 'team  updated succesfully');
    
}

    /**
     * Remove the specified resource from storage.
     */
public function destroy(team $team)
{
 
    $team->delete();
    return $this->sendResponse($team->toArray(), 'team  deleted succesfully');
    
}
}
