<?php

namespace App\Http\Controllers\Api;

use App\Api\ApiMessages;
use App\Models\Pessoa;
use App\Http\Controllers\Controller;
use App\Http\Resources\PessoaCollection;
use App\Repository\PessoaRepository;
use App\Requests\PessoaRequest;
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

    public function index(Request $request)
    {
        $pessoas = $this->pessoa;
        $pessoaRepository = new PessoaRepository($pessoas);

        if($request->has('conditions')) {
            $pessoaRepository->selectConditions($request->get('conditions'));
        }

        if($request->has('fields')) {
            $pessoaRepository->selectFilter($request->get('fields'));
        }

        return new PessoaCollection($pessoaRepository->getResult()->paginate(5));
    }
  
    public function show($id)
    {
        try
        {
            $pessoa = $this->pessoa->findOrFail($id);

            return response()->json(
                [
                    'data' => $pessoa
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
            $pessoa = $this->pessoa->create($data);

            if(isset($data['estado_id']) && count($data['estado_id'])) 
            {
                $pessoa->estados()->sync($data['estado_id']);
            }

            return response()->json([
                'data' => ['msg' => 'Pessoa cadastrada com sucesso!']
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
            $pessoa = $this->pessoa->findOrFail($data['id']);
            $pessoa->update($data);

            return response()->json([
                'data' => ['msg' => 'Pessoa atualizado com sucesso!']
            ], 200);

        } 
        catch (\Exception $e) 
        {
            $message = new ApiMessages($e->getMessage());
            return response()->json($message->getMessage(), 401);
        }
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
                ], 200
        );
    }

}
