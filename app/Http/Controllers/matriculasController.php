<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatematriculasRequest;
use App\Http\Requests\UpdatematriculasRequest;
use App\Repositories\matriculasRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class matriculasController extends AppBaseController
{
    /** @var  matriculasRepository */
    private $matriculasRepository;

    public function __construct(matriculasRepository $matriculasRepo)
    {
        $this->matriculasRepository = $matriculasRepo;
    }

    /**
     * Display a listing of the matriculas.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $matriculas = $this->matriculasRepository->paginate(10);

        return view('matriculas.index')
            ->with('matriculas', $matriculas);
    }

    /**
     * Show the form for creating a new matriculas.
     *
     * @return Response
     */
    public function create()
    {
        return view('matriculas.create');
    }

    /**
     * Store a newly created matriculas in storage.
     *
     * @param CreatematriculasRequest $request
     *
     * @return Response
     */
    public function store(CreatematriculasRequest $request)
    {
        $input = $request->all();

        $matriculas = $this->matriculasRepository->create($input);

        Flash::success('Matriculas saved successfully.');

        return redirect(route('matriculas.index'));
    }

    /**
     * Display the specified matriculas.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $matriculas = $this->matriculasRepository->find($id);

        if (empty($matriculas)) {
            Flash::error('Matriculas not found');

            return redirect(route('matriculas.index'));
        }

        return view('matriculas.show')->with('matriculas', $matriculas);
    }

    /**
     * Show the form for editing the specified matriculas.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $matriculas = $this->matriculasRepository->find($id);

        if (empty($matriculas)) {
            Flash::error('Matriculas not found');

            return redirect(route('matriculas.index'));
        }

        return view('matriculas.edit')->with('matriculas', $matriculas);
    }

    /**
     * Update the specified matriculas in storage.
     *
     * @param int $id
     * @param UpdatematriculasRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatematriculasRequest $request)
    {
        $matriculas = $this->matriculasRepository->find($id);

        if (empty($matriculas)) {
            Flash::error('Matriculas not found');

            return redirect(route('matriculas.index'));
        }

        $matriculas = $this->matriculasRepository->update($request->all(), $id);

        Flash::success('Matriculas updated successfully.');

        return redirect(route('matriculas.index'));
    }

    /**
     * Remove the specified matriculas from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $matriculas = $this->matriculasRepository->find($id);

        if (empty($matriculas)) {
            Flash::error('Matriculas not found');

            return redirect(route('matriculas.index'));
        }

        $this->matriculasRepository->delete($id);

        Flash::success('Matriculas deleted successfully.');

        return redirect(route('matriculas.index'));
    }
}
