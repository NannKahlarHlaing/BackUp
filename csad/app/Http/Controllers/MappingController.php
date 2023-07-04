<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mapping;
use App\Template;
use Illuminate\Support\Facades\Redirect;

// error_reporting (E_ALL ^ E_NOTICE);
class MappingController extends Controller
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
        $templates = Template::all();

        return view('mapping', compact('templates'));
    }

    public function setdefault(Template $template)
    {
        $template_fields = Template::select('*')
        ->where([
            ['active_status', '=', 1],
        ])->get();
        
        foreach ($template_fields as $template_field) {
            $id = $template_field->id;
            
        }
        $templates = Template::all();
        if(isset($id)){
        
        $field1s = Mapping::select('*')
        ->where([
            ['row_id', '=', 1 ],
            ['template_id', '=', $id],
        ])->get();
        $field2s = Mapping::select('*')
        ->where([
            ['row_id', '=', 2 ],
            ['template_id', '=', $id ],
        ])->get();
        $field3s = Mapping::select('*')
        ->where([
            ['row_id', '=', 3 ],
            ['template_id', '=', $id ],
        ])->get();
        $field4s = Mapping::select('*')
        ->where([
            ['row_id', '=', 4 ],
            ['template_id', '=', $id ],
        ])->get();
        $field5s = Mapping::select('*')
        ->where([
            ['row_id', '=', 5 ],
            ['template_id', '=', $id ],
        ])->get();
        $field6s = Mapping::select('*')
        ->where([
            ['row_id', '=', 6 ],
            ['template_id', '=', $id ],
        ])->get();
        $field7s = Mapping::select('*')
        ->where([
            ['row_id', '=', 7 ],
            ['template_id', '=', $id ],
        ])->get();
        $field8s = Mapping::select('*')
        ->where([
            ['row_id', '=', 8 ],
            ['template_id', '=', $id ],
        ])->get();
        $field9s = Mapping::select('*')
        ->where([
            ['row_id', '=', 9 ],
            ['template_id', '=', $id ],
        ])->get();
        $field10s = Mapping::select('*')
        ->where([
            ['row_id', '=', 10 ],
            ['template_id', '=', $id ],
        ])->get();
        $field11s = Mapping::select('*')
        ->where([
            ['row_id', '=', 11 ],
            ['template_id', '=', $id ],
        ])->get();
        $field12s = Mapping::select('*')
        ->where([
            ['row_id', '=', 12 ],
            ['template_id', '=', $id ],
        ])->get();
        $field13s = Mapping::select('*')
        ->where([
            ['row_id', '=', 13 ],
            ['template_id', '=', $id ],
        ])->get();
        $field14s = Mapping::select('*')
        ->where([
            ['row_id', '=', 14 ],
            ['template_id', '=', $id ],
        ])->get();
        $field15s = Mapping::select('*')
        ->where([
            ['row_id', '=', 15 ],
            ['template_id', '=', $id ],
        ])->get();
        $field16s = Mapping::select('*')
        ->where([
            ['row_id', '=', 16 ],
            ['template_id', '=', $id ],
        ])->get();
        $field17s = Mapping::select('*')
        ->where([
            ['row_id', '=', 17 ],
            ['template_id', '=', $id ],
        ])->get();
        $field18s = Mapping::select('*')
        ->where([
            ['row_id', '=', 18 ],
            ['template_id', '=', $id ],
        ])->get();
        // $field19s = Mapping::select('*')
        // ->where([
        //     ['row_id', '=', 19 ],
        //     ['template_id', '=', $id ],
        // ])->get();
        $field20s = Mapping::select('*')
        ->where([
            ['row_id', '=', 20 ],
            ['template_id', '=', $id ],
        ])->get();
        $field21s = Mapping::select('*')
        ->where([
            ['row_id', '=', 21 ],
            ['template_id', '=', $id ],
        ])->get();
        $field22s = Mapping::select('*')
        ->where([
            ['row_id', '=', 22 ],
            ['template_id', '=', $id ],
        ])->get();
        $field23s = Mapping::select('*')
        ->where([
            ['row_id', '=', 23 ],
            ['template_id', '=', $id ],
        ])->get();
        $field24s = Mapping::select('*')
        ->where([
            ['row_id', '=', 24 ],
            ['template_id', '=', $id ],
        ])->get();
        $field25s = Mapping::select('*')
        ->where([
            ['row_id', '=', 25 ],
            ['template_id', '=', $id ],
        ])->get();
        $field26s = Mapping::select('*')
        ->where([
            ['row_id', '=', 26 ],
            ['template_id', '=', $id ],
        ])->get();
        $field27s = Mapping::select('*')
        ->where([
            ['row_id', '=', 27 ],
            ['template_id', '=', $id ],
        ])->get();
        $field28s = Mapping::select('*')
        ->where([
            ['row_id', '=', 28 ],
            ['template_id', '=', $id ],
        ])->get();
        $field29s = Mapping::select('*')
        ->where([
            ['row_id', '=', 29 ],
            ['template_id', '=', $id ],
        ])->get();
        $field30s = Mapping::select('*')
        ->where([
            ['row_id', '=', 30 ],
            ['template_id', '=', $id ],
        ])->get();
        $field31s = Mapping::select('*')
        ->where([
            ['row_id', '=', 31 ],
            ['template_id', '=', $id ],
        ])->get();
        $field32s = Mapping::select('*')
        ->where([
            ['row_id', '=', 32 ],
            ['template_id', '=', $id ],
        ])->get();
        $field33s = Mapping::select('*')
        ->where([
            ['row_id', '=', 33 ],
            ['template_id', '=', $id ],
        ])->get();
        $field34s = Mapping::select('*')
        ->where([
            ['row_id', '=', 34 ],
            ['template_id', '=', $id ],
        ])->get();
        $field35s = Mapping::select('*')
        ->where([
            ['row_id', '=', 35 ],
            ['template_id', '=', $id ],
        ])->get();
        $field36s = Mapping::select('*')
        ->where([
            ['row_id', '=', 36 ],
            ['template_id', '=', $id ],
        ])->get();
        return view('mapping_data', compact('field1s', 'field2s', 'field3s', 'field4s', 'field5s', 'field6s', 'field7s', 'field8s', 'field9s', 'field10s', 'field11s', 'field12s', 'field13s', 'field14s', 'field15s', 'field16s', 'field17s', 'field18s', 'field20s', 'field21s', 'field22s', 'field23s', 'field24s', 'field25s', 'field26s', 'field27s', 'field28s', 'field29s', 'field30s', 'field31s', 'field32s', 'field33s', 'field34s', 'field35s', 'field36s', 'templates', 'template_fields'));
    }else{
        return view('mapping', compact('templates'));
    }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $template_name = request('template_name');
        Template::create([
            'template_name' =>request('template_name'),
            'active_status' => 0,
        ]);


        $templates = Template::select('*')
        ->where([
            ['template_name', '=', $template_name ],
        ])->get();
        foreach ($templates as $template) {
            $temp_id = $template->id;
        }

        $template_field = Template::find($temp_id);

        $csfield1  = request('csfield1');
        $csfield2  = request('csfield2');
        $csfield3  = request('csfield3');
        $csfield4  = request('csfield4');
        $csfield5  = request('csfield5');
        $csfield6  = request('csfield6');
        $csfield7  = request('csfield7');
        $csfield8  = request('csfield8');
        $csfield9  = request('csfield9');
        $csfield10  = request('csfield10');
        $csfield11  = request('csfield11');
        $csfield12  = request('csfield12');
        $csfield13  = request('csfield13');
        $csfield14  = request('csfield14');
        $csfield15  = request('csfield15');
        $csfield16  = request('csfield16');
        $csfield17  = request('csfield17');
        $csfield18  = request('csfield18');
        // $csfield19  = request('csfield19');
        $csfield20  = request('csfield20');
        $csfield21  = request('csfield21');
        $csfield22  = request('csfield22');
        $csfield23  = request('csfield23');
        $csfield24  = request('csfield24');
        $csfield25  = request('csfield25');
        $csfield26  = request('csfield26');
        $csfield27  = request('csfield27');
        $csfield28  = request('csfield28');
        $csfield29  = request('csfield29');
        $csfield30  = request('csfield30');
        $csfield31  = request('csfield31');
        $csfield32  = request('csfield32');
        $csfield33  = request('csfield33');
        $csfield34  = request('csfield34');
        $csfield35  = request('csfield35');
        $csfield36  = request('csfield36');        

        $adamsfield1  = request('adamsfield1');
        $adamsfield2  = request('adamsfield2');
        $adamsfield3  = request('adamsfield3');
        $adamsfield4  = request('adamsfield4');
        $adamsfield5  = request('adamsfield5');
        $adamsfield6  = request('adamsfield6');
        $adamsfield7  = request('adamsfield7');
        $adamsfield8  = request('adamsfield8');
        $adamsfield9  = request('adamsfield9');
        $adamsfield10  = request('adamsfield10');
        $adamsfield11  = request('adamsfield11');
        $adamsfield12  = request('adamsfield12');
        $adamsfield13  = request('adamsfield13');
        $adamsfield14  = request('adamsfield14');
        $adamsfield15  = request('adamsfield15');
        $adamsfield16  = request('adamsfield16');
        $adamsfield17  = request('adamsfield17');
        $adamsfield18  = request('adamsfield18');
        // $adamsfield19  = request('adamsfield19');
        $adamsfield20  = request('adamsfield20');
        $adamsfield21  = request('adamsfield21');
        $adamsfield22  = request('adamsfield22');
        $adamsfield23  = request('adamsfield23');
        $adamsfield24  = request('adamsfield24');
        $adamsfield25  = request('adamsfield25');
        $adamsfield26  = request('adamsfield26');
        $adamsfield27  = request('adamsfield27');
        $adamsfield28  = request('adamsfield28');
        $adamsfield29  = request('adamsfield29');
        $adamsfield30  = request('adamsfield30');
        $adamsfield31  = request('adamsfield31');
        $adamsfield32  = request('adamsfield32');
        $adamsfield33  = request('adamsfield33');
        $adamsfield34  = request('adamsfield34');
        $adamsfield35  = request('adamsfield35');
        $adamsfield36  = request('adamsfield36');

        $default1 = request('default1');
        $default2 = request('default2');
        $default3 = request('default3');
        $default4 = request('default4');
        $default5 = request('default5');
        $default6 = request('default6');
        $default7 = request('default7');
        $default8 = request('default8');
        $default9 = request('default9');
        $default10 = request('default10');
        $default11 = request('default11');
        $default12 = request('default12');
        $default13 = request('default13');
        $default14 = request('default14');
        $default15 = request('default15');
        $default15 = request('default15');
        $default16 = request('default16');
        $default17 = request('default17');
        $default18 = request('default18');
        // $default19 = request('default19');
        $default20 = request('default20');
        $default21 = request('default21');
        $default22 = request('default22');
        $default23 = request('default23');
        $default24 = request('default24');
        $default25 = request('default25');
        $default26 = request('default26');
        $default27 = request('default27');
        $default28 = request('default28');
        $default29 = request('default29');
        $default30 = request('default30');
        $default31 = request('default31');
        $default32 = request('default32');
        $default33 = request('default33');
        $default34 = request('default34');
        $default35 = request('default35');
        $default36 = request('default36');
        
        Mapping::create([
            'row_id' => 1,
            'template_id' => $temp_id,
            'cscart_fields' => $csfield1,
            'adams_fields' => $adamsfield1,
            'default' => $default1
        ]);

        Mapping::create([
            'row_id' => 2,
            'template_id' => $temp_id,
            'cscart_fields' => $csfield2,
            'adams_fields' => $adamsfield2,
            'default' => $default2
        ]);

        Mapping::create([
            'row_id' => 3,
            'template_id' => $temp_id,
            'cscart_fields' => $csfield3,
            'adams_fields' => $adamsfield3,
            'default' => $default3
        ]);
        Mapping::create([
            'row_id' => 4,
            'template_id' => $temp_id,
            'cscart_fields' => $csfield4,
            'adams_fields' => $adamsfield4,
            'default' => $default4
        ]);
        Mapping::create([
            'row_id' => 5,
            'template_id' => $temp_id,
            'cscart_fields' => $csfield5,
            'adams_fields' => $adamsfield5,
            'default' => $default5
        ]);
        Mapping::create([
            'row_id' => 6,
            'template_id' => $temp_id,
            'cscart_fields' => $csfield6,
            'adams_fields' => $adamsfield6,
            'default' => $default6
        ]);
        Mapping::create([
            'row_id' => 7,
            'template_id' => $temp_id,
            'cscart_fields' => $csfield7,
            'adams_fields' => $adamsfield7,
            'default' => $default7
        ]);
        Mapping::create([
            'row_id' => 8,
            'template_id' => $temp_id,
            'cscart_fields' => $csfield8,
            'adams_fields' => $adamsfield8,
            'default' => $default8
        ]);
        Mapping::create([
            'row_id' => 9,
            'template_id' => $temp_id,
            'cscart_fields' => $csfield9,
            'adams_fields' => $adamsfield9,
            'default' => $default9
        ]);
        Mapping::create([
            'row_id' => 10,
            'template_id' => $temp_id,
            'cscart_fields' => $csfield10,
            'adams_fields' => $adamsfield10,
            'default' => $default10
        ]);
        Mapping::create([
            'row_id' => 11,
            'template_id' => $temp_id,
            'cscart_fields' => $csfield11,
            'adams_fields' => $adamsfield11,
            'default' => $default11
        ]);
        Mapping::create([
            'row_id' => 12,
            'template_id' => $temp_id,
            'cscart_fields' => $csfield12,
            'adams_fields' => $adamsfield12,
            'default' => $default12
        ]);
        Mapping::create([
            'row_id' => 13,
            'template_id' => $temp_id,
            'cscart_fields' => $csfield13,
            'adams_fields' => $adamsfield13,
            'default' => $default13
        ]);
        Mapping::create([
            'row_id' => 14,
            'template_id' => $temp_id,
            'cscart_fields' => $csfield14,
            'adams_fields' => $adamsfield14,
            'default' => $default14
        ]);
        Mapping::create([
            'row_id' => 15,
            'template_id' => $temp_id,
            'cscart_fields' => $csfield15,
            'adams_fields' => $adamsfield15,
            'default' => $default15
        ]);
        Mapping::create([
            'row_id' => 16,
            'template_id' => $temp_id,
            'cscart_fields' => $csfield16,
            'adams_fields' => $adamsfield16,
            'default' => $default16
        ]);
        Mapping::create([
            'row_id' => 17,
            'template_id' => $temp_id,
            'cscart_fields' => $csfield17,
            'adams_fields' => $adamsfield17,
            'default' => $default17
        ]);
        Mapping::create([
            'row_id' => 18,
            'template_id' => $temp_id,
            'cscart_fields' => $csfield18,
            'adams_fields' => $adamsfield18,
            'default' => $default18
        ]);
        // Mapping::create([
        //     'row_id' => 19,
        //     'template_id' => $temp_id,
        //     'cscart_fields' => $csfield19,
        //     'adams_fields' => $adamsfield19,
        //     'default' => $default19
        // ]);
        Mapping::create([
            'row_id' => 20,
            'template_id' => $temp_id,
            'cscart_fields' => $csfield20,
            'adams_fields' => $adamsfield20,
            'default' => $default20
        ]);
        Mapping::create([
            'row_id' => 21,
            'template_id' => $temp_id,
            'cscart_fields' => $csfield21,
            'adams_fields' => $adamsfield21,
            'default' => $default21
        ]);
        Mapping::create([
            'row_id' => 22,
            'template_id' => $temp_id,
            'cscart_fields' => $csfield22,
            'adams_fields' => $adamsfield22,
            'default' => $default22
        ]);
        Mapping::create([
            'row_id' => 23,
            'template_id' => $temp_id,
            'cscart_fields' => $csfield23,
            'adams_fields' => $adamsfield23,
            'default' => $default23
        ]);
        Mapping::create([
            'row_id' => 24,
            'template_id' => $temp_id,
            'cscart_fields' => $csfield24,
            'adams_fields' => $adamsfield24,
            'default' => $default24
        ]);
        Mapping::create([
            'row_id' => 25,
            'template_id' => $temp_id,
            'cscart_fields' => $csfield25,
            'adams_fields' => $adamsfield25,
            'default' => $default25
        ]);
        Mapping::create([
            'row_id' => 26,
            'template_id' => $temp_id,
            'cscart_fields' => $csfield26,
            'adams_fields' => $adamsfield26,
            'default' => $default26
        ]);
        Mapping::create([
            'row_id' => 27,
            'template_id' => $temp_id,
            'cscart_fields' => $csfield27,
            'adams_fields' => $adamsfield27,
            'default' => $default27
        ]);
        Mapping::create([
            'row_id' => 28,
            'template_id' => $temp_id,
            'cscart_fields' => $csfield28,
            'adams_fields' => $adamsfield28,
            'default' => $default28
        ]);
        Mapping::create([
            'row_id' => 29,
            'template_id' => $temp_id,
            'cscart_fields' => $csfield29,
            'adams_fields' => $adamsfield29,
            'default' => $default29
        ]);
        Mapping::create([
            'row_id' => 30,
            'template_id' => $temp_id,
            'cscart_fields' => $csfield30,
            'adams_fields' => $adamsfield30,
            'default' => $default30
        ]);
        Mapping::create([
            'row_id' => 31,
            'template_id' => $temp_id,
            'cscart_fields' => $csfield31,
            'adams_fields' => $adamsfield31,
            'default' => $default31
        ]);
        Mapping::create([
            'row_id' => 32,
            'template_id' => $temp_id,
            'cscart_fields' => $csfield32,
            'adams_fields' => $adamsfield32,
            'default' => $default32
        ]);
        
        Mapping::create([
            'row_id' => 33,
            'template_id' => $temp_id,
            'cscart_fields' => $csfield33,
            'adams_fields' => $adamsfield33,
            'default' => $default33
        ]);
        Mapping::create([
            'row_id' => 34,
            'template_id' => $temp_id,
            'cscart_fields' => $csfield34,
            'adams_fields' => $adamsfield34,
            'default' => $default34
        ]);
        Mapping::create([
            'row_id' => 35,
            'template_id' => $temp_id,
            'cscart_fields' => $csfield35,
            'adams_fields' => $adamsfield35,
            'default' => $default35
        ]);
        Mapping::create([
            'row_id' => 36,
            'template_id' => $temp_id,
            'cscart_fields' => $csfield36,
            'adams_fields' => $adamsfield36,
            'default' => $default36
        ]);
        return redirect('/mapping');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Template $template)
    {

        $id = $template->id;
        // $template = Template::find($id);

        $field1s = Mapping::select('*')
        ->where([
            ['row_id', '=', 1 ],
            ['template_id', '=', $id],
        ])->get();
        $field2s = Mapping::select('*')
        ->where([
            ['row_id', '=', 2 ],
            ['template_id', '=', $id ],
        ])->get();
        $field3s = Mapping::select('*')
        ->where([
            ['row_id', '=', 3 ],
            ['template_id', '=', $id ],
        ])->get();
       
        $field4s = Mapping::select('*')
        ->where([
            ['row_id', '=', 4 ],
            ['template_id', '=', $id ],
        ])->get();
        $field5s = Mapping::select('*')
        ->where([
            ['row_id', '=', 5 ],
            ['template_id', '=', $id ],
        ])->get();
        $field6s = Mapping::select('*')
        ->where([
            ['row_id', '=', 6 ],
            ['template_id', '=', $id ],
        ])->get();
        $field7s = Mapping::select('*')
        ->where([
            ['row_id', '=', 7 ],
            ['template_id', '=', $id ],
        ])->get();
        $field8s = Mapping::select('*')
        ->where([
            ['row_id', '=', 8 ],
            ['template_id', '=', $id ],
        ])->get();
        $field9s = Mapping::select('*')
        ->where([
            ['row_id', '=', 9 ],
            ['template_id', '=', $id ],
        ])->get();
        $field10s = Mapping::select('*')
        ->where([
            ['row_id', '=', 10 ],
            ['template_id', '=', $id ],
        ])->get();
        $field11s = Mapping::select('*')
        ->where([
            ['row_id', '=', 11 ],
            ['template_id', '=', $id ],
        ])->get();
        $field12s = Mapping::select('*')
        ->where([
            ['row_id', '=', 12 ],
            ['template_id', '=', $id ],
        ])->get();
        $field13s = Mapping::select('*')
        ->where([
            ['row_id', '=', 13 ],
            ['template_id', '=', $id ],
        ])->get();
        $field14s = Mapping::select('*')
        ->where([
            ['row_id', '=', 14 ],
            ['template_id', '=', $id ],
        ])->get();
        $field15s = Mapping::select('*')
        ->where([
            ['row_id', '=', 15 ],
            ['template_id', '=', $id ],
        ])->get();
        $field16s = Mapping::select('*')
        ->where([
            ['row_id', '=', 16 ],
            ['template_id', '=', $id ],
        ])->get();
        $field17s = Mapping::select('*')
        ->where([
            ['row_id', '=', 17 ],
            ['template_id', '=', $id ],
        ])->get();
        $field18s = Mapping::select('*')
        ->where([
            ['row_id', '=', 18 ],
            ['template_id', '=', $id ],
        ])->get();
        // $field19s = Mapping::select('*')
        // ->where([
        //     ['row_id', '=', 19 ],
        //     ['template_id', '=', $id ],
        // ])->get();
        $field20s = Mapping::select('*')
        ->where([
            ['row_id', '=', 20 ],
            ['template_id', '=', $id ],
        ])->get();
        $field21s = Mapping::select('*')
        ->where([
            ['row_id', '=', 21 ],
            ['template_id', '=', $id ],
        ])->get();
        $field22s = Mapping::select('*')
        ->where([
            ['row_id', '=', 22 ],
            ['template_id', '=', $id ],
        ])->get();
        $field23s = Mapping::select('*')
        ->where([
            ['row_id', '=', 23 ],
            ['template_id', '=', $id ],
        ])->get();
        $field24s = Mapping::select('*')
        ->where([
            ['row_id', '=', 24 ],
            ['template_id', '=', $id ],
        ])->get();
        $field25s = Mapping::select('*')
        ->where([
            ['row_id', '=', 25 ],
            ['template_id', '=', $id ],
        ])->get();
        $field26s = Mapping::select('*')
        ->where([
            ['row_id', '=', 26 ],
            ['template_id', '=', $id ],
        ])->get();
        $field27s = Mapping::select('*')
        ->where([
            ['row_id', '=', 27 ],
            ['template_id', '=', $id ],
        ])->get();
        $field28s = Mapping::select('*')
        ->where([
            ['row_id', '=', 28 ],
            ['template_id', '=', $id ],
        ])->get();
        $field29s = Mapping::select('*')
        ->where([
            ['row_id', '=', 29 ],
            ['template_id', '=', $id ],
        ])->get();
        $field30s = Mapping::select('*')
        ->where([
            ['row_id', '=', 30 ],
            ['template_id', '=', $id ],
        ])->get();
        $field31s = Mapping::select('*')
        ->where([
            ['row_id', '=', 31 ],
            ['template_id', '=', $id ],
        ])->get();
        $field32s = Mapping::select('*')
        ->where([
            ['row_id', '=', 32 ],
            ['template_id', '=', $id ],
        ])->get();
        $field33s = Mapping::select('*')
        ->where([
            ['row_id', '=', 33 ],
            ['template_id', '=', $id ],
        ])->get();
        $field34s = Mapping::select('*')
        ->where([
            ['row_id', '=', 34 ],
            ['template_id', '=', $id ],
        ])->get();
        $field35s = Mapping::select('*')
        ->where([
            ['row_id', '=', 35 ],
            ['template_id', '=', $id ],
        ])->get();
        $field36s = Mapping::select('*')
        ->where([
            ['row_id', '=', 36 ],
            ['template_id', '=', $id ],
        ])->get();
        
        return view('editmapping', compact('field1s', 'field2s', 'field3s', 'field4s', 'field5s', 'field6s', 'field7s', 'field8s', 'field9s', 'field10s', 'field11s', 'field12s', 'field13s', 'field14s', 'field15s', 'field16s', 'field17s', 'field18s',  'field20s', 'field21s', 'field22s', 'field23s', 'field24s', 'field25s', 'field26s', 'field27s', 'field28s', 'field29s', 'field30s', 'field31s', 'field32s', 'field33s', 'field34s', 'field35s', 'field36s', 'template'));
        
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
        // $template_name = request('template_name');
        
        // $templates = Template::select('*')
        // ->where([

        //     ['template_name', '=', $template_name],
        // ])->get();
        // foreach ($templates as $template) {
        //     $id = $template->id;
        // }

        $field1s = Mapping::select('*')
        ->where([
            ['row_id', '=', 1 ],
            ['template_id', '=', $id ],
        ])->get();
        $field2s = Mapping::select('*')
        ->where([
            ['row_id', '=', 2 ],
            ['template_id', '=', $id ],
        ])->get();
        $field3s = Mapping::select('*')
        ->where([
            ['row_id', '=', 3 ],
            ['template_id', '=', $id ],
        ])->get();
        $field4s = Mapping::select('*')
        ->where([
            ['row_id', '=', 4 ],
            ['template_id', '=', $id ],
        ])->get();
        $field5s = Mapping::select('*')
        ->where([
            ['row_id', '=', 5 ],
            ['template_id', '=', $id ],
        ])->get();
        $field6s = Mapping::select('*')
        ->where([
            ['row_id', '=', 6 ],
            ['template_id', '=', $id ],
        ])->get();
        $field7s = Mapping::select('*')
        ->where([
            ['row_id', '=', 7 ],
            ['template_id', '=', $id ],
        ])->get();
        $field8s = Mapping::select('*')
        ->where([
            ['row_id', '=', 8 ],
            ['template_id', '=', $id ],
        ])->get();
        $field9s = Mapping::select('*')
        ->where([
            ['row_id', '=', 9 ],
            ['template_id', '=', $id ],
        ])->get();
        $field10s = Mapping::select('*')
        ->where([
            ['row_id', '=', 10 ],
            ['template_id', '=', $id ],
        ])->get();
        $field11s = Mapping::select('*')
        ->where([
            ['row_id', '=', 11 ],
            ['template_id', '=', $id ],
        ])->get();
        $field12s = Mapping::select('*')
        ->where([
            ['row_id', '=', 12 ],
            ['template_id', '=', $id ],
        ])->get();
        $field13s = Mapping::select('*')
        ->where([
            ['row_id', '=', 13 ],
            ['template_id', '=', $id ],
        ])->get();
        $field14s = Mapping::select('*')
        ->where([
            ['row_id', '=', 14 ],
            ['template_id', '=', $id ],
        ])->get();
        $field15s = Mapping::select('*')
        ->where([
            ['row_id', '=', 15 ],
            ['template_id', '=', $id ],
        ])->get();
        $field16s = Mapping::select('*')
        ->where([
            ['row_id', '=', 16 ],
            ['template_id', '=', $id ],
        ])->get();
        $field17s = Mapping::select('*')
        ->where([
            ['row_id', '=', 17 ],
            ['template_id', '=', $id ],
        ])->get();
        $field18s = Mapping::select('*')
        ->where([
            ['row_id', '=', 18 ],
            ['template_id', '=', $id ],
        ])->get();
        // $field19s = Mapping::select('*')
        // ->where([
        //     ['row_id', '=', 19 ],
        //     ['template_id', '=', $id ],
        // ])->get();
        $field20s = Mapping::select('*')
        ->where([
            ['row_id', '=', 20 ],
            ['template_id', '=', $id ],
        ])->get();
        $field21s = Mapping::select('*')
        ->where([
            ['row_id', '=', 21 ],
            ['template_id', '=', $id ],
        ])->get();
        $field22s = Mapping::select('*')
        ->where([
            ['row_id', '=', 22 ],
            ['template_id', '=', $id ],
        ])->get();
        $field23s = Mapping::select('*')
        ->where([
            ['row_id', '=', 23 ],
            ['template_id', '=', $id ],
        ])->get();
        $field24s = Mapping::select('*')
        ->where([
            ['row_id', '=', 24 ],
            ['template_id', '=', $id ],
        ])->get();
        $field25s = Mapping::select('*')
        ->where([
            ['row_id', '=', 25 ],
            ['template_id', '=', $id ],
        ])->get();
        $field26s = Mapping::select('*')
        ->where([
            ['row_id', '=', 26 ],
            ['template_id', '=', $id ],
        ])->get();
        $field27s = Mapping::select('*')
        ->where([
            ['row_id', '=', 27 ],
            ['template_id', '=', $id ],
        ])->get();
        $field28s = Mapping::select('*')
        ->where([
            ['row_id', '=', 28 ],
            ['template_id', '=', $id ],
        ])->get();
        $field29s = Mapping::select('*')
        ->where([
            ['row_id', '=', 29 ],
            ['template_id', '=', $id ],
        ])->get();
        $field30s = Mapping::select('*')
        ->where([
            ['row_id', '=', 30 ],
            ['template_id', '=', $id ],
        ])->get();
        $field31s = Mapping::select('*')
        ->where([
            ['row_id', '=', 31 ],
            ['template_id', '=', $id ],
        ])->get();
        $field32s = Mapping::select('*')
        ->where([
            ['row_id', '=', 32 ],
            ['template_id', '=', $id ],
        ])->get();
        $field33s = Mapping::select('*')
        ->where([
            ['row_id', '=', 33 ],
            ['template_id', '=', $id ],
        ])->get();
        $field34s = Mapping::select('*')
        ->where([
            ['row_id', '=', 34 ],
            ['template_id', '=', $id ],
        ])->get();
        $field35s = Mapping::select('*')
        ->where([
            ['row_id', '=', 35 ],
            ['template_id', '=', $id ],
        ])->get();
        $field36s = Mapping::select('*')
        ->where([
            ['row_id', '=', 36 ],
            ['template_id', '=', $id ],
        ])->get();

        // echo request('adamsfield1');
        // die();
        foreach ($field1s as $field1) {
                $field1->cscart_fields = request('csfield1');
                $field1->adams_fields = request('adamsfield1');
                $field1->default = request('default1');
                $field1->save();
          }

            foreach ($field2s as $field2){
                $field2->cscart_fields = request('csfield2');
                $field2->adams_fields = request('adamsfield2');
                $field2->default = request('default2');
                $field2->save();
            }
            foreach ($field3s as $field3){
                $field3->cscart_fields = request('csfield3');
                $field3->adams_fields = request('adamsfield3');
                $field3->default = request('default3');
                $field3->save();
            }
            foreach ($field4s as $field4){
                $field4->cscart_fields = request('csfield4');
                $field4->adams_fields = request('adamsfield4');
                $field4->default = request('default4');
                $field4->save();
            }
            foreach ($field5s as $field5){
                $field5->cscart_fields = request('csfield5');
                $field5->adams_fields = request('adamsfield5');
                $field5->default = request('default5');
                $field5->save();
            }
            foreach ($field6s as $field6){
                $field6->cscart_fields = request('csfield6');
                $field6->adams_fields = request('adamsfield6');
                $field6->default = request('default6');
                $field6->save();
            }
            foreach ($field7s as $field7){
                $field7->cscart_fields = request('csfield7');
                $field7->adams_fields = request('adamsfield7');
                $field7->default = request('default7');
                $field7->save();
            }
            
            foreach ($field8s as $field8){
                $field8->cscart_fields = request('csfield8');
                $field8->adams_fields = request('adamsfield8');
                $field8->default = request('default8');
                $field8->save();
            }
            foreach ($field9s as $field9){
                $field9->cscart_fields = request('csfield9');
                $field9->adams_fields = request('adamsfield9');
                $field9->default = request('default9');
                $field9->save();
            }
            foreach ($field10s as $field10){
                $field10->cscart_fields = request('csfield10');
                $field10->adams_fields = request('adamsfield10');
                $field10->default = request('default10');
                $field10->save();
            }

            foreach ($field11s as $field11){
                $field11->cscart_fields = request('csfield11');
                $field11->adams_fields = request('adamsfield11');
                $field11->default = request('default11');
                $field11->save();
            }
            foreach ($field12s as $field12){
                $field12->cscart_fields = request('csfield12');
                $field12->adams_fields = request('adamsfield12');
                $field12->default = request('default12');
                $field12->save();
            }
            foreach ($field13s as $field13){
                $field13->cscart_fields = request('csfield13');
                $field13->adams_fields = request('adamsfield13');
                $field13->default = request('default13');
                $field13->save();
            }
            foreach ($field14s as $field14){
                $field14->cscart_fields = request('csfield14');
                $field14->adams_fields = request('adamsfield14');
                $field14->default = request('default14');
                $field14->save();
            }
            foreach ($field15s as $field15){
                $field15->cscart_fields = request('csfield15');
                $field15->adams_fields = request('adamsfield15');
                $field15->default = request('default15');
                $field15->save();
            }
            foreach ($field16s as $field16){
                $field16->cscart_fields = request('csfield16');
                $field16->adams_fields = request('adamsfield16');
                $field16->default = request('default16');
                $field16->save();
            }
            foreach ($field17s as $field17){
                $field17->cscart_fields = request('csfield17');
                $field17->adams_fields = request('adamsfield17');
                $field17->default = request('default17');
                $field17->save();
            }
            foreach ($field18s as $field18){
                $field18->cscart_fields = request('csfield18');
                $field18->adams_fields = request('adamsfield18');
                $field18->default = request('default18');
                $field18->save();
            }
            // foreach ($field19s as $field19){
            //     $field19->cscart_fields = request('csfield19');
            //     $field19->adams_fields = request('adamsfield19');
            //     $field19->default = request('default19');
            //     $field19->save();
            // }
            foreach ($field20s as $field20){
                $field20->cscart_fields = request('csfield20');
                $field20->adams_fields = request('adamsfield20');
                $field20->default = request('default20');
                $field20->save();
            }
            foreach ($field21s as $field21){
                $field21->cscart_fields = request('csfield21');
                $field21->adams_fields = request('adamsfield21');
                $field21->default = request('default21');
                $field21->save();
            }
            foreach ($field22s as $field22){
                $field22->cscart_fields = request('csfield22');
                $field22->adams_fields = request('adamsfield22');
                $field22->default = request('default22');
                $field22->save();
            }
            foreach ($field23s as $field23){
                $field23->cscart_fields = request('csfield23');
                $field23->adams_fields = request('adamsfield23');
                $field23->default = request('default23');
                $field23->save();
            }
            foreach ($field24s as $field24){
                $field24->cscart_fields = request('csfield24');
                $field24->adams_fields = request('adamsfield24');
                $field24->default = request('default24');
                $field24->save();
            }
            foreach ($field25s as $field25){
                $field25->cscart_fields = request('csfield25');
                $field25->adams_fields = request('adamsfield25');
                $field25->default = request('default25');
                $field25->save();
            }
            foreach ($field26s as $field26){
                $field26->cscart_fields = request('csfield26');
                $field26->adams_fields = request('adamsfield26');
                $field26->default = request('default26');
                $field26->save();
            }
            foreach ($field27s as $field27){
                $field27->cscart_fields = request('csfield27');
                $field27->adams_fields = request('adamsfield27');
                $field27->default = request('default27');
                $field27->save();
            }
            foreach ($field28s as $field28){
                $field28->cscart_fields = request('csfield28');
                $field28->adams_fields = request('adamsfield28');
                $field28->default = request('default28');
                $field28->save();
            }
            foreach ($field29s as $field29){
                $field29->cscart_fields = request('csfield29');
                $field29->adams_fields = request('adamsfield29');
                $field29->default = request('default29');
                $field29->save();
            }
            foreach ($field30s as $field30){
                $field30->cscart_fields = request('csfield30');
                $field30->adams_fields = request('adamsfield30');
                $field30->default = request('default30');
                $field30->save();
            }
            foreach ($field31s as $field31){
                $field31->cscart_fields = request('csfield31');
                $field31->adams_fields = request('adamsfield31');
                $field31->default = request('default31');
                $field31->save();
            }
            foreach ($field32s as $field32){
                $field32->cscart_fields = request('csfield32');
                $field32->adams_fields = request('adamsfield32');
                $field32->default = request('default32');
                $field32->save();
            }
            foreach ($field33s as $field33){
                $field33->cscart_fields = request('csfield33');
                $field33->adams_fields = request('adamsfield33');
                $field33->default = request('default33');
                $field33->save();
            }
            foreach ($field34s as $field34){
                $field34->cscart_fields = request('csfield34');
                $field34->adams_fields = request('adamsfield34');
                $field34->default = request('default34');
                $field34->save();
            }
            foreach ($field35s as $field35){
                $field35->cscart_fields = request('csfield35');
                $field35->adams_fields = request('adamsfield35');
                $field35->default = request('default35');
                $field35->save();
            }
            foreach ($field36s as $field36){
                $field36->cscart_fields = request('csfield36');
                $field36->adams_fields = request('adamsfield36');
                $field36->default = request('default36');
                $field36->save();
            }
        return redirect('/mapping');
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
