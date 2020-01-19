<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use DB;
use App\Project;
use App\Http\Requests\SaveProjectRequest;
class ProjectController extends Controller
{

    public function __construct(){
        $this->middleware('auth')->except('index','show');
    
    }




    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*$portfolio = [
            ['title' => 'Proyecto #1'],
            ['title' => 'Proyecto #2'],
            ['title' => 'Proyecto #3'],
            ['title' => 'Proyecto #4'],
        ];
        //$portfolio = DB::table('projects')->get();
        $projects = Project::orderBy('created_at','DESC')->paginate(2);
        return view('portfolio',compact('projects'));*/
        return view('projects.index', [
            'projects' => Project::orderBy('created_at','DESC')->paginate(2)
        ]);
    }


    public function create()
    {
        return view('projects.create',[ 'project'=> new Project ]);
    }


    public function store(SaveProjectRequest $request)
    { 
        Project::create($request->validated());
        return redirect()->route('project.index')->with('status','El proyecto fue creado con éxito');
    }


    public function show(Project $project)
    {
        return view('projects.show', [
            //'project' => Project::findOrFail($id)
            'project' => $project
        ]);
    }





    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        return view('projects.edit',['project' => $project]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Project $project,SaveProjectRequest $request)
    {
        $project->update($request->validated());
        //view('projects.update',$project);
        return redirect()->route('project.show',$project)->with('status','El proyecto fue actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('project.index')->with('status','El proyecto fue eliminado con exito');
    }
}
