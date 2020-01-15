<?php

use Illuminate\Database\Seeder;
use App\User;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dados = [
            'name'=>"Breno Dias Leles de Araujo",
            'email'=>'breno.leles@outlook.com',
            'password'=>bcrypt("masteracesso")
        ];
        if(User::where('email','=',$dados['email'])->count()){
            $usuario = User::where('email','=',$dados['email'])->first();
            $usuario->update($dados);
            echo 'Usuario atualizado!';
        }else{
            User::create($dados);
            echo 'Usuario criado.';
        }
    }
}
