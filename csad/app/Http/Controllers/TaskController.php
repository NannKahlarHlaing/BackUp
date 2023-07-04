<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use App\ActivityLogs;
class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
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
    public function update(Request $request)
    {
        $uri = $request->path();
          if($uri == 'schedule'){
            $activity = 'Click Set Time Button';
          }
          $client_ip = $_SERVER['REMOTE_ADDR'];

          
          ActivityLogs::create([
            'activities' => $activity,
            'client_ip' => $client_ip,
          ]); 

        $option = request('custom_time');
        $tasks = Task::all();
        foreach ($tasks as $task) {
            if($option == $task->frequency){
                $task->status = 1;
            }else{
                $task->status = 0;
            }
            $task->save();
        }
        
         return redirect()->back()->with('message', 'You set Task Schedule Time to '. $option . '!');
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
