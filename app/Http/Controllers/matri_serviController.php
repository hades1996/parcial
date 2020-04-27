<?php

namespace App\Http\Controllers;

use App\Http\Requests\Creatematri_serviRequest;
use App\Http\Requests\Updatematri_serviRequest;
use App\Repositories\matri_serviRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class matri_serviController extends AppBaseController
{
    /** @var  matri_serviRepository */
    private $matriServiRepository;

    public function __construct(matri_serviRepository $matriServiRepo)
    {
        $this->matriServiRepository = $matriServiRepo;
    }

    /**
     * Display a listing of the matri_servi.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $matriServis = $this->matriServiRepository->paginate(10);

        return view('matri_servis.index')
            ->with('matriServis', $matriServis);
    }

    /**
     * Show the form for creating a new matri_servi.
     *
     * @return Response
     */
    public function create()
    {
        return view('matri_servis.create');
    }

    /**
     * Store a newly created matri_servi in storage.
     *
     * @param Creatematri_serviRequest $request
     *
     * @return Response
     */
    public function store(Creatematri_serviRequest $request)
    {
        $input = $request->all();

        $matriServi = $this->matriServiRepository->create($input);

        Flash::success('Matri Servi saved successfully.');

        return redirect(route('matriServis.index'));
    }

    /**
     * Display the specified matri_servi.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $matriServi = $this->matriServiRepository->find($id);

        if (empty($matriServi)) {
            Flash::error('Matri Servi not found');

            return redirect(route('matriServis.index'));
        }

        return view('matri_servis.show')->with('matriServi', $matriServi);
    }

    /**
     * Show the form for editing the specified matri_servi.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $matriServi = $this->matriServiRepository->find($id);

        if (empty($matriServi)) {
            Flash::error('Matri Servi not found');

            return redirect(route('matriServis.index'));
        }

        return view('matri_servis.edit')->with('matriServi', $matriServi);
    }

    /**
     * Update the specified matri_servi in storage.
     *
     * @param int $id
     * @param Updatematri_serviRequest $request
     *
     * @return Response
     */
    public function update($id, Updatematri_serviRequest $request)
    {
        $matriServi = $this->matriServiRepository->find($id);

        if (empty($matriServi)) {
            Flash::error('Matri Servi not found');

            return redirect(route('matriServis.index'));
        }

        $matriServi = $this->matriServiRepository->update($request->all(), $id);

        Flash::success('Matri Servi updated successfully.');

        return redirect(route('matriServis.index'));
    }

    /**
     * Remove the specified matri_servi from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $matriServi = $this->matriServiRepository->find($id);

        if (empty($matriServi)) {
            Flash::error('Matri Servi not found');

            return redirect(route('matriServis.index'));
        }

        $this->matriServiRepository->delete($id);

        Flash::success('Matri Servi deleted successfully.');

        return redirect(route('matriServis.index'));
    }
}
