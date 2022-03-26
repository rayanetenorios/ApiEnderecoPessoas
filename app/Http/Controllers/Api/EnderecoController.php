<?php

namespace App\Http\Controllers\Api;

use App\Api\ApiMessages;
use App\Models\Endereco;
use App\Http\Controllers\Controller;
use App\Http\Resources\EnderecoCollection;
use App\Repository\EnderecoRepository;
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

    public function index(Request $request)
    {        
        $enderecos = $this->endereco;
        $enderecoRepository = new EnderecoRepository($enderecos);

        if($request->has('conditions')) {
            $enderecoRepository->selectConditions($request->get('conditions'));
        }

        if($request->has('fields')) {
            $enderecoRepository->selectFilter($request->get('fields'));
        }

        return new EnderecoCollection($enderecoRepository->getResult()->paginate(10));
    }

    public function show($id)
    {
        try
        {
            $endereco = $this->endereco->findOrFail($id);

            return response()->json(
                [
                    'data' => $endereco
                ], 200
            );
        }         
        catch (\Exception $e) 
        {
            $message = new ApiMessages($e->getMessage());
            return response()->json($message->getMessage(), 401);
        }
    }

    public function store(Request $request) 
    {
        $data = $request->all();

        try 
        {
            $endereco = $this->endereco->create($data);

            // if(isset($data['estado_id'])) 
            // {
            //     $endereco->estados()->sync($data['estado_id']);
            // }

            return response()->json([
                'data' => ['msg' => 'Endereço cadastrado com sucesso!']
            ], 200);
        } catch (\Exception $e) {
            $message = new ApiMessages($e->getMessage());
            return response()->json($message->getMessage(), 401);
        }
    }

    public function update(Request $request)
    {
        $data = $request->all();

        try 
        {
            $endereco = $this->endereco->findOrFail($data['id']);
            $endereco->update($data);

            if(isset($data['estado_id']) && count($data['estado_id'])) 
            {
                $endereco->estados()->sync($data['estado_id']);
            }

            return response()->json([
                'data' => ['msg' => 'Endereço atualizado com sucesso!']
            ], 200);

        } 
        catch (\Exception $e) 
        {
            $message = new ApiMessages($e->getMessage());
            return response()->json($message->getMessage(), 401);
        }
    }

    public function destroy($id)
    {
        try
        {
            $endereco = $this->endereco->findOrFail($id);
            $endereco->delete();

            return response()->json(
                ['data' =>
                    [
                        'msg' => 'Endereço removido com sucesso!'
                    ]
                ], 200
            );
        }
        catch (\Exception $e) 
        {
            $message = new ApiMessages($e->getMessage());
            return response()->json($message->getMessage(), 401);
        }
    }
}
