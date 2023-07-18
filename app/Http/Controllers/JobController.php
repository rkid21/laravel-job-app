<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Job;

class JobController extends Controller
{
    public function index(){
        $jobs = Job::all();
        return view('jobs.index', ['jobs' => $jobs]);
      
    }

    public function create(){
        return view('jobs.create');
    }

    public function edit(Job $job){
        return view('jobs.edit', ['job'=> $job]);
    }


    public function update(Job $job, Request $request){
        $data = $request->validate([
            'title' => 'required',
            'details' => 'required',
            'jobreq' => 'required',
           ]);

           $job->update($data);
           return redirect(route('job.index'))->with('success', 'Job Updated');
    }

    public function delete(Job $job){
       $job->delete();
       $jobID = $job->id;
       return redirect(route('job.index'))->with('success', `$jobID Job Deleted`);
    }



    public function store(Request $request){
       $data = $request->validate([
        'title' => 'required',
        'details' => 'required',
        'jobreq' => 'required',
       ]);

       $newJob = Job::create($data);

       return redirect(route('job.index'));
    }
}
