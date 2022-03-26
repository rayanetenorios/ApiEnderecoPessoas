<?php

namespace App\Http\Controllers\Api;

use App\Api\ApiMessages;
use App\Http\Controllers\Controller;
use Illuminate\Container\Container;
use Illuminate\Http\Request;

class FiltrosBuscaController extends Controller
{
        /**
     * @var Container
     */
    private $container;

    public function __construct(Container $container)
    {
        $this->container = $container;
    }

    public function buscarEnderecoPessoa(Request $request) 
    {
        // try
        // {
        //     $pessoa = $this->pessoa->findOrFail($id);

        //     return response()->json(
        //         [
        //             'data' => $pessoa
        //         ], 200
        //     );
        // }         
        // catch (\Exception $e) 
        // {
        //     $message = new ApiMessages($e->getMessage());
        //     return response()->json($message->getMessage(), 401);
        // }
    }
}
