<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Endereco;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class EnderecoController extends Controller
{
    /**
     * @var Endereco
     */
    private $endereco;

    public function __construct(Endereco $endereco)
    {
        $this->endereco = $endereco;
    }

    public function index()
    {
        $enderecos = $this->endereco->all();
        return response()->json($enderecos);
    }

    public function show($id)
    {
        $endereco = $this->endereco->find($id);
        return response()->json($endereco);
    }

    public function save(Request $request)
    {
        $data = $request->all();
        $endereco = $this->endereco->create($data);
        return response()->json($endereco);
    }

    public function update(Request $request)
    {
        $data = $request->all();

        $endereco = $this->endereco->find($data['id']);
        $endereco->update($data);

        return response()->json($endereco);
    }

    public function delete($id)
    {
        $endereco = $this->endereco->find($id);
        $endereco->delete();

        return response()->json(
            ['data' =>
                [
                    'msg' => 'Perfil removido com sucesso!'
                ]
            ]
        );
    }
}
