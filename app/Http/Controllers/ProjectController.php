<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Project;
use App\Models\Category;
use App\Http\Requests\SaveProjectRequest;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{

    public function __construct(){
        $this->middleware('auth')->except('index' , 'show');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        return view('/projects.index' , [
            'projects' => Project::paginate()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('projects.create' , [
            'project' => new Project,
            'categories' => Category::pluck('title' , 'id'),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SaveProjectRequest $request)
    {
        //

        $project = new Project($request->validated());


        $project->image = $request->file('image')->store('ProjectImages');
 
        $project->save();

        return redirect()->route('project.index')->with('created', 'El proyecto se ha creado exitosamente');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        

        return view('projects.show' , [
            'project' => Project::findOrFail($id),
        ]);
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
        return view('projects.edit' , [
            'project' => Project::findOrFail($id),
            'categories' => Category::pluck('title' , 'id')
        ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Project $project, SaveProjectRequest $request)
    {
        //
        if($request->hasFile('image')){
            Storage::delete($project->image);

            $project->fill($request->validated());

            $project->image = $request->file('image')->store('ProjectImages');

            $project->save();
        }else{
            $project->update(array_filter($request->validated()));
        }

        
        

        return redirect()->route('project.show' ,$project )->with('updated', 'El proyecto se ha actualizado exitosamente');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        //
        Storage::delete($project->image);
        $project->delete();

        return redirect()->route('project.index')->with('destroyed', 'El proyecto se ha elimindao exitosamente');
    }
}
