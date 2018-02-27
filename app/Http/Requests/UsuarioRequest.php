<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

use Illuminate\Http\Request; 

use App\Usuario;

class UsuarioRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $user = Usuario::find($this->id);
        
        switch ($this->method()):
            case 'GET':
            case 'DELETE':
            {
                return [];
            }
            case 'POST':
            {
                return [
                    'name'                  => 'required',
                    'email'                 => 'required|unique:users,email',
                    'cpf'                   => 'required|unique:users,cpf',
                    'ativo'                 => 'required',
                    'password'              => 'required|min:6',
                    'password_confirmation' => 'required|same:password',
                ];
            }
            case 'PUT':
            case 'PATCH':
            {
                return [
                    'name'                  => 'required',
                    'email'                 => 'required|unique:users,email,'.$user->id,
                    'cpf'                   => 'required|unique:users,cpf,'.$user->id,
                    'ativo'                 => 'required',
                    'password'              => 'required|min:6',
                    'password_confirmation' => 'required|same:password',
                ];
            }
        endswitch;               
        
    }
    public function messages()
    {
               
        return [            
            'name.required'                     => 'O campo NOME é obrigatório',
            'email.required'                    => 'O campo E-MAIL é obrigatório',
            'email.unique'                      => 'E-MAIL já cadastrado',
            'cpf.required'                      => 'O campo CPF é obrigatório',
            'cpf.unique'                        => 'CPF já cadastrado',
            'ativo.required'                    => 'O campo ATIVO é obrigatório',
            'password.required'                 => 'O campo SENHA é obrigatório',
            'password.min'                      => 'O campo SENHA deve ter pelo menos 06 caracteres',
            'password_confirmation.required'    => 'O campo CONFIRMAR SENHA é obrigatório',
            'password_confirmation.same'        => 'O campo CONFIRMAR SENHA deve ser igual ao campo SENHA'
        ];
    }
}
