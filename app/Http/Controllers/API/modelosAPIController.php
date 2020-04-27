<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreatemodelosAPIRequest;
use App\Http\Requests\API\UpdatemodelosAPIRequest;
use App\Models\modelos;
use App\Repositories\modelosRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class modelosController
 * @package App\Http\Controllers\API
 */

class modelosAPIController extends AppBaseController
{
    /** @var  modelosRepository */
    private $modelosRepository;

    public function __construct(modelosRepository $modelosRepo)
    {
        $this->modelosRepository = $modelosRepo;
    }

    /**
     * Display a listing of the modelos.
     * GET|HEAD /modelos
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $modelos = $this->modelosRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($modelos->toArray(), 'Modelos retrieved successfully');
    }

    /**
     * Store a newly created modelos in storage.
     * POST /modelos
     *
     * @param CreatemodelosAPIRequest $request
     *
     * @return Response
     */
    public function store(CreatemodelosAPIRequest $request)
    {
        $input = $request->all();

        $modelos = $this->modelosRepository->create($input);

        return $this->sendResponse($modelos->toArray(), 'Modelos saved successfully');
    }

    /**
     * Display the specified modelos.
     * GET|HEAD /modelos/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var modelos $modelos */
        $modelos = $this->modelosRepository->find($id);

        if (empty($modelos)) {
            return $this->sendError('Modelos not found');
        }

        return $this->sendResponse($modelos->toArray(), 'Modelos retrieved successfully');
    }

    /**
     * Update the specified modelos in storage.
     * PUT/PATCH /modelos/{id}
     *
     * @param int $id
     * @param UpdatemodelosAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatemodelosAPIRequest $request)
    {
        $input = $request->all();

        /** @var modelos $modelos */
        $modelos = $this->modelosRepository->find($id);

        if (empty($modelos)) {
            return $this->sendError('Modelos not found');
        }

        $modelos = $this->modelosRepository->update($input, $id);

        return $this->sendResponse($modelos->toArray(), 'modelos updated successfully');
    }

    /**
     * Remove the specified modelos from storage.
     * DELETE /modelos/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var modelos $modelos */
        $modelos = $this->modelosRepository->find($id);

        if (empty($modelos)) {
            return $this->sendError('Modelos not found');
        }

        $modelos->delete();

        return $this->sendSuccess('Modelos deleted successfully');
    }
}
