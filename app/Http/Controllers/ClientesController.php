<?php

namespace App\Http\Controllers;

use App\Cliente;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        if (request()->filled('query'))
        {
          return Cliente::where('name', 'like', "%". request('query') ."%")->get();
        }

        $clientes = Cliente::all();
        return view('clientes.index',compact('clientes'));
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
          // $this->validate($request, ['name' => 'required|min:3']);
          $this->validate($request, [
            'name' => 'required|min:3'
          ]);

          // $cliente = Cliente::create($request->only('name'));
          $cliente = Cliente::create($request->all());
          // $cliente = Cliente::create([
          // 'name' => $request->get('name'),
          // 'domicilio' => $request->get('domicilio'),
          // 'colonia' => $request->get('colonia'),
          // 'telcasa' => $request->get('telcasa'),
          // 'telcel' => $request->get('telcel')
          // ]);
          notify()->flash('Tu cliente ha sido creado.', 'success',['timer' => 2000,]);
          return redirect()->route('clientes.index');
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
    public function edit(Cliente $cliente)
    {
      // $cliente = Cliente::findOrFail($id);
      return view('clientes.edit', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cliente $cliente)
    {
      $this->validate($request, [
        'name' => 'required|min:3'
        // 'ncientifico' => 'required',
      ]);
      $cliente->name = $request->get('name');
      $cliente->domicilio = $request->get('domicilio');
      $cliente->colonia = $request->get('colonia');
      $cliente->telcasa = $request->get('telcasa');
      $cliente->telcel = $request->get('telcel');
      $cliente->save();
      notify()->flash('Tu cliente ha sido actualizado','success',['timer' => 2000,]
    );
      return redirect()->route('clientes.edit', $cliente);
// return redirect()->route('admin.posts.index', $post)->with('info','La publicación ha sido eliminada');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cliente $cliente)
    {

        $cliente->delete();
        notify()->flash('Tu cliente ha sido eliminado','success');
        return redirect()->route('clientes.index', $cliente);
    }
}
