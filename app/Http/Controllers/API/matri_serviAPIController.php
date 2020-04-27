<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\Creatematri_serviAPIRequest;
use App\Http\Requests\API\Updatematri_serviAPIRequest;
use App\Models\matri_servi;
use App\Repositories\matri_serviRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class matri_serviController
 * @package App\Http\Controllers\API
 */

class matri_serviAPIController extends AppBaseController
{
    /** @var  matri_serviRepository */
    private $matriServiRepository;

    public function __construct(matri_serviRepository $matriServiRepo)
    {
        $this->matriServiRepository = $matriServiRepo;
    }

    /**
     * Display a listing of the matri_servi.
     * GET|HEAD /matriServis
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $matriServis = $this->matriServiRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($matriServis->toArray(), 'Matri Servis retrieved successfully');
    }

    /**
     * Store a newly created matri_servi in storage.
     * POST /matriServis
     *
     * @param Creatematri_serviAPIRequest $request
     *
     * @return Response
     */
    public function store(Creatematri_serviAPIRequest $request)
    {
        $input = $request->all();

        $matriServi = $this->matriServiRepository->create($input);

        return $this->sendResponse($matriServi->toArray(), 'Matri Servi saved successfully');
    }

    /**
     * Display the specified matri_servi.
     * GET|HEAD /matriServis/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var matri_servi $matriServi */
        $matriServi = $this->matriServiRepository->find($id);

        if (empty($matriServi)) {
            return $this->sendError('Matri Servi not found');
        }

        return $this->sendResponse($matriServi->toArray(), 'Matri Servi retrieved successfully');
    }

    /**
     * Update the specified matri_servi in storage.
     * PUT/PATCH /matriServis/{id}
     *
     * @param int $id
     * @param Updatematri_serviAPIRequest $request
     *
     * @return Response
     */
    public function update($id, Updatematri_serviAPIRequest $request)
    {
        $input = $request->all();

        /** @var matri_servi $matriServi */
        $matriServi = $this->matriServiRepository->find($id);

        if (empty($matriServi)) {
            return $this->sendError('Matri Servi not found');
        }

        $matriServi = $this->matriServiRepository->update($input, $id);

        return $this->sendResponse($matriServi->toArray(), 'matri_servi updated successfully');
    }

    /**
     * Remove the specified matri_servi from storage.
     * DELETE /matriServis/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var matri_servi $matriServi */
        $matriServi = $this->matriServiRepository->find($id);

        if (empty($matriServi)) {
            return $this->sendError('Matri Servi not found');
        }

        $matriServi->delete();

        return $this->sendSuccess('Matri Servi deleted successfully');
    }
}
