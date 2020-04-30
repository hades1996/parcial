<?php

namespace App\Http\Controllers;

use App\Http\Requests\Creatematri_serviRequest;
use App\Http\Requests\Updatematri_serviRequest;
use App\Repositories\matri_serviRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
     * Show the form for creating a new matri_servi.
     *
     * @return Response
     */
    public function create($id)
    {
        $matriServicios=DB::table('matri_servi')
        ->join('servicios','matri_servi.servicio','=','servicios.id')
        ->where('matricula','=', $id)
        ->select('matri_servi.servicio','matri_servi.matricula','servicios.tipo_servicio as servicios')
        ->get();

        $servicios = DB::table('servicios')->where('id','<>',1)->pluck('tipo_servicio','id');
        return view('matri_servis.create')

        ->with('id',$id)
        ->with('matri_servi',$matriServicios)
        ->with('servicios',$servicios);
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

        return redirect(route('matriculas.index'));
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
