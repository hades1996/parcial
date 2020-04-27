<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreatemarcasAPIRequest;
use App\Http\Requests\API\UpdatemarcasAPIRequest;
use App\Models\marcas;
use App\Repositories\marcasRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class marcasController
 * @package App\Http\Controllers\API
 */

class marcasAPIController extends AppBaseController
{
    /** @var  marcasRepository */
    private $marcasRepository;

    public function __construct(marcasRepository $marcasRepo)
    {
        $this->marcasRepository = $marcasRepo;
    }

    /**
     * Display a listing of the marcas.
     * GET|HEAD /marcas
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $marcas = $this->marcasRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($marcas->toArray(), 'Marcas retrieved successfully');
    }

    /**
     * Store a newly created marcas in storage.
     * POST /marcas
     *
     * @param CreatemarcasAPIRequest $request
     *
     * @return Response
     */
    public function store(CreatemarcasAPIRequest $request)
    {
        $input = $request->all();

        $marcas = $this->marcasRepository->create($input);

        return $this->sendResponse($marcas->toArray(), 'Marcas saved successfully');
    }

    /**
     * Display the specified marcas.
     * GET|HEAD /marcas/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var marcas $marcas */
        $marcas = $this->marcasRepository->find($id);

        if (empty($marcas)) {
            return $this->sendError('Marcas not found');
        }

        return $this->sendResponse($marcas->toArray(), 'Marcas retrieved successfully');
    }

    /**
     * Update the specified marcas in storage.
     * PUT/PATCH /marcas/{id}
     *
     * @param int $id
     * @param UpdatemarcasAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatemarcasAPIRequest $request)
    {
        $input = $request->all();

        /** @var marcas $marcas */
        $marcas = $this->marcasRepository->find($id);

        if (empty($marcas)) {
            return $this->sendError('Marcas not found');
        }

        $marcas = $this->marcasRepository->update($input, $id);

        return $this->sendResponse($marcas->toArray(), 'marcas updated successfully');
    }

    /**
     * Remove the specified marcas from storage.
     * DELETE /marcas/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var marcas $marcas */
        $marcas = $this->marcasRepository->find($id);

        if (empty($marcas)) {
            return $this->sendError('Marcas not found');
        }

        $marcas->delete();

        return $this->sendSuccess('Marcas deleted successfully');
    }
}
