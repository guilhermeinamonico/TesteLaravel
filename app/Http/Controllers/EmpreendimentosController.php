<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Models\ModelEmpreendimento;
use App\Models\Models\ModelUnidades;


class EmpreendimentosController extends Controller
{

    private $objEmpreendimentos;
    private $objUnidades;

    public function __construct(){
        $this->objEmpreendimentos=new ModelEmpreendimento();
        $this->objUnidades=new ModelUnidades();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empreendimento=$this->objEmpreendimentos->paginate(5);
        return view('empreendimento',compact('empreendimento'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $empreendimentos=$this->objEmpreendimentos->all();
        return view('createEmpreendimento',compact('empreendimentos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cad=$this->objEmpreendimentos->create([
            'nome'=>$request->nome,
            'cidade'=>$request->cidade,
            'valorMquadrado'=>$request->valorMquadrado,

            'dataEntrega'=>$request->dataEntrega,

        ]);
        if ($cad){
            return redirect('empreendimentos');
        }
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
    public function edit($id)
    {
        $empreendimentos=$this->objEmpreendimentos->find($id);

        return view('create', compact('empreendimentos'));
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
        $this->objEmpreendimentos->where(['id_empreendimentos'=>$id])->update([
            'nome'=>$request->nome,
            'cidade'=>$request->cidade,
            'valorMquadrado'=>$request->valorMquadrado,

            'dataEntrega'=>$request->dataEntrega,
        ]);

        return redirect('empreendimentos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del=$this->objEmpreendimentos->destroy($id);
        return($del)?"sim":"não";
    }
}
