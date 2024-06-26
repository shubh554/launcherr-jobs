<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\JobPosting;

class JobsController extends Controller
{
    public function index()
    {
        $list = JobPosting::all();
        return view('jobs',['list'=>$list]);
    }

    public function add(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'duration' => 'required',
            
        ]);

        $job = new JobPosting;
        $job->title = $request->title;
        $job->description = $request->description;
        $job->duration = $request->duration;
        $job->save();

        return redirect()->back()->with('success', 'Operation successful.');  
    }

    public function edit(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'duration' => 'required',
            
        ]);
        
        $job = JobPosting::findOrFail($request->id);
        $job->update($request->all());

        return redirect()->back()->with('success', 'Operation successful.'); 
     }

    public function toggleActive($id,$active)
    {
        JobPosting::where('id', $id)->update(['active' => $active]);
    }
}
