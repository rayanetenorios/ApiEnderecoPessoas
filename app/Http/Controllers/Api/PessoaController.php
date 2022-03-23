<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Pessoa;
use Illuminate\Http\Request;

class PessoaController extends Controller
{
    /**
     * @var Pessoa
     */
    private $pessoa;

    public function __construct(Pessoa $pessoa)
    {
        $this->pessoa = $pessoa;
    }

    public function index()
    {
        $pessoas = $this->pessoa->paginate(5);
        return response()->json($pessoas);
    }

    public function show($id)
    {
        $pessoa = $this->pessoa->find($id);
        return response()->json($pessoa);
    }

    public function save(Request $request)
    {
        $data = $request->all();
        $pessoa = $this->pessoa->create($data);
        return response()->json($pessoa);
    }

    public function update(Request $request)
    {
        $data = $request->all();

        $pessoa = $this->pessoa->find($data['id']);
        $pessoa->update($data);

        return response()->json($pessoa);
    }

    public function delete($id)
    {
        $pessoa = $this->pessoa->find($id);
        $pessoa->delete();

        return response()->json(
            ['data' =>
                [
                    'msg' => 'Perfil removido com sucesso!'
                ]
            ]
        );
    }

}
