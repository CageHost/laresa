<?php

namespace App\Http\Controllers\Lapi;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Team;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = Team::orderBy('id', 'desc')
            ->where('active', 1)
            ->take(100)
            ->with('games')
            ->with('events')
            ->get();
        return response()->json($teams);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data['name'] = $request->input('name');
        // TODO: rename to slug:
        $data['alias'] = str_slug($data['name'], '-');
        // $data['avatar'] = $request->logo;
        // Storage::disk('local')->put($data['avatar'], ?);
        // $path = $request->file('logo')->store('public/logos');
        // $fullPath =  Storage::url($path);

        $team = Team::create([
            'name' => $data['name'],
            'alias' => $data['alias'],
            // 'background' => $fullPath,
        ]);

        return $team;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($alias)
    {
        $team = Team::where('alias', '=', $alias)
        ->with('events')->with('games')
        ->firstOrFail();
        return response()->json($team);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
