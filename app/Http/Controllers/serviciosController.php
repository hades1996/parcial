<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateserviciosRequest;
use App\Http\Requests\UpdateserviciosRequest;
use App\Repositories\serviciosRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class serviciosController extends AppBaseController
{
    /** @var  serviciosRepository */
    private $serviciosRepository;

    public function __construct(serviciosRepository $serviciosRepo)
    {
        $this->serviciosRepository = $serviciosRepo;
    }

    /**
     * Display a listing of the servicios.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $servicios = $this->serviciosRepository->paginate(10);

        return view('servicios.index')
            ->with('servicios', $servicios);
    }

    /**
     * Show the form for creating a new servicios.
     *
     * @return Response
     */
    public function create()
    {
        return view('servicios.create');
    }

    /**
     * Store a newly created servicios in storage.
     *
     * @param CreateserviciosRequest $request
     *
     * @return Response
     */
    public function store(CreateserviciosRequest $request)
    {
        $input = $request->all();

        $servicios = $this->serviciosRepository->create($input);

        Flash::success('Servicios saved successfully.');

        return redirect(route('servicios.index'));
    }

    /**
     * Display the specified servicios.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $servicios = $this->serviciosRepository->find($id);

        if (empty($servicios)) {
            Flash::error('Servicios not found');

            return redirect(route('servicios.index'));
        }

        return view('servicios.show')->with('servicios', $servicios);
    }

    /**
     * Show the form for editing the specified servicios.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $servicios = $this->serviciosRepository->find($id);

        if (empty($servicios)) {
            Flash::error('Servicios not found');

            return redirect(route('servicios.index'));
        }

        return view('servicios.edit')->with('servicios', $servicios);
    }

    /**
     * Update the specified servicios in storage.
     *
     * @param int $id
     * @param UpdateserviciosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateserviciosRequest $request)
    {
        $servicios = $this->serviciosRepository->find($id);

        if (empty($servicios)) {
            Flash::error('Servicios not found');

            return redirect(route('servicios.index'));
        }

        $servicios = $this->serviciosRepository->update($request->all(), $id);

        Flash::success('Servicios updated successfully.');

        return redirect(route('servicios.index'));
    }

    /**
     * Remove the specified servicios from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $servicios = $this->serviciosRepository->find($id);

        if (empty($servicios)) {
            Flash::error('Servicios not found');

            return redirect(route('servicios.index'));
        }

        $this->serviciosRepository->delete($id);

        Flash::success('Servicios deleted successfully.');

        return redirect(route('servicios.index'));
    }
}
