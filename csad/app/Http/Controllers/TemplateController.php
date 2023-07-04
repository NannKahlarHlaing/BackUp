<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Template;
use App\Mapping;
use Illuminate\Support\Facades\Redirect;
class TemplateController extends Controller
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
    public function setdefault(Template $template)
    {
        $id = request('template_id');
        // $template_field = Template::find($id);
        // $template_field->active_status = 1 ;
        $templates = Template::all();
        foreach ($templates as $template) {
            if($template->id == $id){
                $template->active_status = 1 ;
            }else{
                $template->active_status = 0 ;
            }
            $template->save();
        }
        // $template_field->save();
        return Redirect::back();
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
    public function edit(Template $template)
    {
        
        return view('edittemplate', compact('template'));
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
        $id = request('template_id');
        $template_name = request('template_name');
        
        $template = Template::find($id);
        
            $template->template_name = $template_name;
            $template->save();
        
        
        return redirect('/mapping');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Template $template)
    {
        $id = $template->id;
        $fields = Mapping::select('*')
                ->where([
            ['template_id', '=', $id],
                    ])->delete();
        // $fields->destroy();
        $template= Template::find($id)->delete();
        $templates = Template::select('*')
                ->where([
            ['id', '=', $id ],
                    ])->get();
        // return view('mapping', compact('templates'));
        return redirect('/mapping');
    }
}
