<?php

namespace App\Http\Controllers;

use App\Http\Requests\UnidadesRequest;
use App\Models\Models\ModelEmpreendimento;
use App\Models\Models\ModelUnidades;
use Illuminate\Http\Request;

class UnidadesController extends Controller
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
        $unidade=$this->objUnidades->paginate(5);
        return view('index',compact('unidade'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $empreendimentos=$this->objEmpreendimentos->all();
        return view('create',compact('empreendimentos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UnidadesRequest $request)
    {
        $cad=$this->objUnidades->create([
            'nomeApto'=>$request->nomeApto,
            'metragem'=>$request->metragem,
            'nomeTorre'=>$request->nomeTorre,

            'andar'=>$request->andar,
            'id_empreendimentos'=>$request->id_empreendimentos
        ]);
        if ($cad){
            return redirect('unidades');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_unidades)
    {
        $unidades=$this->objUnidades->find($id_unidades);
        return view('show',compact('unidades'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $unidades=$this->objUnidades->find($id);
        $empreendimentos=$this->objEmpreendimentos->all();
        return view('create', compact('unidades','empreendimentos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UnidadesRequest $request, $id)
    {
        $this->objUnidades->where(['id_unidades'=>$id])->update([
            'nomeApto'=>$request->nomeApto,
            'metragem'=>$request->metragem,
            'nomeTorre'=>$request->nomeTorre,

            'andar'=>$request->andar,
            'id_empreendimentos'=>$request->id_empreendimentos
        ]);

        return redirect('unidades');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del=$this->objUnidades->destroy($id);
        return($del)?"sim":"não";
    }
}
