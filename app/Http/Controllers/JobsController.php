<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\JobPosting;
use Illuminate\Support\Facades\Auth;
use App\Models\City;

class JobsController extends Controller
{
    public function index()
    {
        $city = City::distinct()->pluck('city');
        $list = JobPosting::with('user')
        ->where('user_id', Auth::id())
        ->get();
        
        return view('jobs',['list'=>$list,'cities'=>$city]);
    }

    public function add(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'short_description' => 'required',
            'duration' => 'required',
            'location' => 'required'
            
        ]);

        $userId = Auth::id();
        
        $job = new JobPosting;
        $job->user_id = $userId;
        $job->title = $request->title;
        $job->description = $request->description;
        $job->short_description = $request->short_description;
        $job->duration = $request->duration;
        $job->location = $request->location;
        $job->save();

        return redirect()->back()->with('success', 'Operation successful.');  
    }

    public function edit(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required|max:500',
            'short_description' => 'required|max:250',
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
