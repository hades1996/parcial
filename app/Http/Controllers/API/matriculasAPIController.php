<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreatematriculasAPIRequest;
use App\Http\Requests\API\UpdatematriculasAPIRequest;
use App\Models\matriculas;
use App\Repositories\matriculasRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class matriculasController
 * @package App\Http\Controllers\API
 */

class matriculasAPIController extends AppBaseController
{
    /** @var  matriculasRepository */
    private $matriculasRepository;

    public function __construct(matriculasRepository $matriculasRepo)
    {
        $this->matriculasRepository = $matriculasRepo;
    }

    /**
     * Display a listing of the matriculas.
     * GET|HEAD /matriculas
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $matriculas = $this->matriculasRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($matriculas->toArray(), 'Matriculas retrieved successfully');
    }

    /**
     * Store a newly created matriculas in storage.
     * POST /matriculas
     *
     * @param CreatematriculasAPIRequest $request
     *
     * @return Response
     */
    public function store(CreatematriculasAPIRequest $request)
    {
        $input = $request->all();

        $matriculas = $this->matriculasRepository->create($input);

        return $this->sendResponse($matriculas->toArray(), 'Matriculas saved successfully');
    }

    /**
     * Display the specified matriculas.
     * GET|HEAD /matriculas/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var matriculas $matriculas */
        $matriculas = $this->matriculasRepository->find($id);

        if (empty($matriculas)) {
            return $this->sendError('Matriculas not found');
        }

        return $this->sendResponse($matriculas->toArray(), 'Matriculas retrieved successfully');
    }

    /**
     * Update the specified matriculas in storage.
     * PUT/PATCH /matriculas/{id}
     *
     * @param int $id
     * @param UpdatematriculasAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatematriculasAPIRequest $request)
    {
        $input = $request->all();

        /** @var matriculas $matriculas */
        $matriculas = $this->matriculasRepository->find($id);

        if (empty($matriculas)) {
            return $this->sendError('Matriculas not found');
        }

        $matriculas = $this->matriculasRepository->update($input, $id);

        return $this->sendResponse($matriculas->toArray(), 'matriculas updated successfully');
    }

    /**
     * Remove the specified matriculas from storage.
     * DELETE /matriculas/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var matriculas $matriculas */
        $matriculas = $this->matriculasRepository->find($id);

        if (empty($matriculas)) {
            return $this->sendError('Matriculas not found');
        }

        $matriculas->delete();

        return $this->sendSuccess('Matriculas deleted successfully');
    }
}
