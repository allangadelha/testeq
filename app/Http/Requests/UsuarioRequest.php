<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

use Illuminate\Http\Request; 

use App\Usuario;

use Validator;

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
        
        Validator::extend('validar_cpf', function($attribute, $value, $parameters) {
            $cpf = str_pad ( preg_replace ( '/[^0-9]/', '', $value ), 11, '0', STR_PAD_LEFT );
            // Verifica se nenhuma das sequências abaixo foi digitada, caso seja, retorna falso
            if (strlen ( $cpf ) != 11 || $cpf == '00000000000' || $cpf == '11111111111' || $cpf == '22222222222' || 
                    $cpf == '33333333333' || $cpf == '44444444444' || $cpf == '55555555555' || $cpf == '66666666666' || 
                    $cpf == '77777777777' || $cpf == '88888888888' || $cpf == '99999999999') {
                return FALSE;
            } else { // Calcula os números para verificar se o CPF é verdadeiro
                for($t = 9; $t < 11; $t ++) {
                    for($d = 0, $c = 0; $c < $t; $c ++) {
                        $d += $cpf {$c} * (($t + 1) - $c);
                    }
                    $d = ((10 * $d) % 11) % 10;
                    if ($cpf {$c} != $d) {
                        return FALSE;
                    }
                }
                return TRUE;
            }
        });
        
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
                    'cpf'                   => 'required|validar_cpf|unique:users,cpf',
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
                    'cpf'                   => 'required|validar_cpf|unique:users,cpf,'.$user->id,
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
            'cpf.validar_cpf'                   => 'CPF inválido.',
            'ativo.required'                    => 'O campo ATIVO é obrigatório',
            'password.required'                 => 'O campo SENHA é obrigatório',
            'password.min'                      => 'O campo SENHA deve ter pelo menos 06 caracteres',
            'password_confirmation.required'    => 'O campo CONFIRMAR SENHA é obrigatório',
            'password_confirmation.same'        => 'O campo CONFIRMAR SENHA deve ser igual ao campo SENHA'
        ];
    }
}
