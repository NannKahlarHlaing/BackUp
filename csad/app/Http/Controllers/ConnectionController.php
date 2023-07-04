<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Connection;
use App\Task;
error_reporting (E_ALL ^ E_NOTICE); 
class ConnectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $connections = Connection::all();
        $tasks = Task::all();
            return view('connection_data',compact('connections', 'tasks'));       

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('connection');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $api_type = 'cs-cart';
        $status = 0;
        Connection::create([
            'api_type' => $api_type,
            'api_url_prefix' => request('cscart_api_url'),
            'username' => request('cscart_username') ,
            'api_key' => request('cscart_api_key'),
            'status' => $status
        ]);
        $api_type1 = 'adams';
         Connection::create([
            'api_type' => $api_type1,
            'api_url_prefix' => request('admas_api_url'),
            'username' => request('adams_username') ,
            'api_key' => request('adams_api_key'),
            'status' => $status
        ]);
         $connections = Connection::all();
        // return view('hi');
              return View('connection_data', compact('connections'));

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
    public function edit(Connection $connection)
    {
        return view('editconnection', compact('connection'));
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
        $connection_id = request('id');
        
        $connection = Connection::find($connection_id);
        $status = 1;
        $api_url_prefix = request('cscart_api_url');
        $username = request('cscart_username');
        $api_key =request('cscart_api_key');

        $connection->api_url_prefix = $api_url_prefix;
        $connection->username = $username;
        $connection->api_key = $api_key;
        $connection->status = $status;
        $connection->save();

        return redirect('/connection');
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
