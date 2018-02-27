<?php

namespace App\Http\Controllers;

use App\Http\Requests\UsuarioRequest;

use App\Usuario;

class UsuariosController extends Controller
{
    private $usuarios;
    
    public function __construct(Usuario $usuarios) {
        
        $this->usuarios= $usuarios;
    }
    
    public function index()
    {        
        $usuarios = $this->usuarios->get();

        return view('usuarios.index', ['usuarios' => $usuarios]);
        
    }
    
    public function create()
    {
        
        return view('usuarios.create');        
        
    }
    
    public function store(UsuarioRequest $request){
                        
        $name               = $request->name;
        $email              = $request->email;
        $cpf                = $request->cpf;
        $data_nascimento    = dataPTbrToDb($request->data_nascimento);
        $ativo              = $request->ativo;
        $password           = bcrypt($request->password);
                   
        $this->usuarios->create([
            'name'              => $name,
            'email'             => $email,
            'cpf'               => $cpf,
            'data_nascimento'   => $data_nascimento,
            'ativo'             => $ativo,
            'password'          => $password
            
        ]);        
        
        return redirect()->route('usuarios.index')->withSuccess('Usuários cadastrado com sucesso');
        
    }
        
    public function edit($id){
        
        $usuarios = $this->usuarios->find($id);
                                
        return view('usuarios.edit', ['usuarios' => $usuarios]);
        
    }  
        
    public function update($id, UsuarioRequest $request){
        
        $name               = $request->name;
        $email              = $request->email;
        $cpf                = $request->cpf;
        $data_nascimento    = dataPTbrToDb($request->data_nascimento);
        $ativo              = $request->ativo;
        $password           = bcrypt($request->password);
                
        $this->usuarios->find($id)->update([
            'name'              => $name,
            'email'             => $email,
            'cpf'               => $cpf,
            'data_nascimento'   => $data_nascimento,
            'ativo'             => $ativo,
            'password'          => $password
        ]);
        return redirect()->route('usuarios.index')->withSuccess('Usuário editado com sucesso');
        
    }
    
    public function destroy($id){
        
        $this->usuarios->find($id)->delete();
        return redirect()->route('usuarios.index')->withSuccess('Usuário excluído com sucesso');
        
    }
    
    public function show(){
        
        return view('usuarios.show');
        
    }
}
