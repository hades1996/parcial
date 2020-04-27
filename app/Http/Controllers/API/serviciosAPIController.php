<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateserviciosAPIRequest;
use App\Http\Requests\API\UpdateserviciosAPIRequest;
use App\Models\servicios;
use App\Repositories\serviciosRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class serviciosController
 * @package App\Http\Controllers\API
 */

class serviciosAPIController extends AppBaseController
{
    /** @var  serviciosRepository */
    private $serviciosRepository;

    public function __construct(serviciosRepository $serviciosRepo)
    {
        $this->serviciosRepository = $serviciosRepo;
    }

    /**
     * Display a listing of the servicios.
     * GET|HEAD /servicios
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $servicios = $this->serviciosRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($servicios->toArray(), 'Servicios retrieved successfully');
    }

    /**
     * Store a newly created servicios in storage.
     * POST /servicios
     *
     * @param CreateserviciosAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateserviciosAPIRequest $request)
    {
        $input = $request->all();

        $servicios = $this->serviciosRepository->create($input);

        return $this->sendResponse($servicios->toArray(), 'Servicios saved successfully');
    }

    /**
     * Display the specified servicios.
     * GET|HEAD /servicios/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var servicios $servicios */
        $servicios = $this->serviciosRepository->find($id);

        if (empty($servicios)) {
            return $this->sendError('Servicios not found');
        }

        return $this->sendResponse($servicios->toArray(), 'Servicios retrieved successfully');
    }

    /**
     * Update the specified servicios in storage.
     * PUT/PATCH /servicios/{id}
     *
     * @param int $id
     * @param UpdateserviciosAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateserviciosAPIRequest $request)
    {
        $input = $request->all();

        /** @var servicios $servicios */
        $servicios = $this->serviciosRepository->find($id);

        if (empty($servicios)) {
            return $this->sendError('Servicios not found');
        }

        $servicios = $this->serviciosRepository->update($input, $id);

        return $this->sendResponse($servicios->toArray(), 'servicios updated successfully');
    }

    /**
     * Remove the specified servicios from storage.
     * DELETE /servicios/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var servicios $servicios */
        $servicios = $this->serviciosRepository->find($id);

        if (empty($servicios)) {
            return $this->sendError('Servicios not found');
        }

        $servicios->delete();

        return $this->sendSuccess('Servicios deleted successfully');
    }
}
