<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatemarcasRequest;
use App\Http\Requests\UpdatemarcasRequest;
use App\Repositories\marcasRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class marcasController extends AppBaseController
{
    /** @var  marcasRepository */
    private $marcasRepository;

    public function __construct(marcasRepository $marcasRepo)
    {
        $this->marcasRepository = $marcasRepo;
    }

    /**
     * Display a listing of the marcas.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $marcas = $this->marcasRepository->paginate(10);

        return view('marcas.index')
            ->with('marcas', $marcas);
    }

    /**
     * Show the form for creating a new marcas.
     *
     * @return Response
     */
    public function create()
    {
        return view('marcas.create');
    }

    /**
     * Store a newly created marcas in storage.
     *
     * @param CreatemarcasRequest $request
     *
     * @return Response
     */
    public function store(CreatemarcasRequest $request)
    {
        $input = $request->all();

        $marcas = $this->marcasRepository->create($input);

        Flash::success('Marcas saved successfully.');

        return redirect(route('marcas.index'));
    }

    /**
     * Display the specified marcas.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $marcas = $this->marcasRepository->find($id);

        if (empty($marcas)) {
            Flash::error('Marcas not found');

            return redirect(route('marcas.index'));
        }

        return view('marcas.show')->with('marcas', $marcas);
    }

    /**
     * Show the form for editing the specified marcas.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $marcas = $this->marcasRepository->find($id);

        if (empty($marcas)) {
            Flash::error('Marcas not found');

            return redirect(route('marcas.index'));
        }

        return view('marcas.edit')->with('marcas', $marcas);
    }

    /**
     * Update the specified marcas in storage.
     *
     * @param int $id
     * @param UpdatemarcasRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatemarcasRequest $request)
    {
        $marcas = $this->marcasRepository->find($id);

        if (empty($marcas)) {
            Flash::error('Marcas not found');

            return redirect(route('marcas.index'));
        }

        $marcas = $this->marcasRepository->update($request->all(), $id);

        Flash::success('Marcas updated successfully.');

        return redirect(route('marcas.index'));
    }

    /**
     * Remove the specified marcas from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $marcas = $this->marcasRepository->find($id);

        if (empty($marcas)) {
            Flash::error('Marcas not found');

            return redirect(route('marcas.index'));
        }

        $this->marcasRepository->delete($id);

        Flash::success('Marcas deleted successfully.');

        return redirect(route('marcas.index'));
    }
}
