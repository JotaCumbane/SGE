<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEstudanteRequest;
use App\Http\Requests\UpdateEstudanteRequest;
use App\Repositories\EstudanteRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class EstudanteController extends AppBaseController
{
    /** @var  EstudanteRepository */
    private $estudanteRepository;

    public function __construct(EstudanteRepository $estudanteRepo)
    {
        $this->estudanteRepository = $estudanteRepo;
    }

    /**
     * Display a listing of the Estudante.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $estudantes = $this->estudanteRepository->all();

        return view('estudantes.index')
            ->with('estudantes', $estudantes);
    }

    /**
     * Show the form for creating a new Estudante.
     *
     * @return Response
     */
    public function create()
    {
        return view('estudantes.create');
    }

    /**
     * Store a newly created Estudante in storage.
     *
     * @param CreateEstudanteRequest $request
     *
     * @return Response
     */
    public function store(CreateEstudanteRequest $request)
    {
        $input = $request->all();

        $estudante = $this->estudanteRepository->create($input);

        Flash::success('Estudante saved successfully.');

        return redirect(route('estudantes.index'));
    }

    /**
     * Display the specified Estudante.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $estudante = $this->estudanteRepository->find($id);

        if (empty($estudante)) {
            Flash::error('Estudante not found');

            return redirect(route('estudantes.index'));
        }

        return view('estudantes.show')->with('estudante', $estudante);
    }

    /**
     * Show the form for editing the specified Estudante.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $estudante = $this->estudanteRepository->find($id);

        if (empty($estudante)) {
            Flash::error('Estudante not found');

            return redirect(route('estudantes.index'));
        }

        return view('estudantes.edit')->with('estudante', $estudante);
    }

    /**
     * Update the specified Estudante in storage.
     *
     * @param int $id
     * @param UpdateEstudanteRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEstudanteRequest $request)
    {
        $estudante = $this->estudanteRepository->find($id);

        if (empty($estudante)) {
            Flash::error('Estudante not found');

            return redirect(route('estudantes.index'));
        }

        $estudante = $this->estudanteRepository->update($request->all(), $id);

        Flash::success('Estudante updated successfully.');

        return redirect(route('estudantes.index'));
    }

    /**
     * Remove the specified Estudante from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $estudante = $this->estudanteRepository->find($id);

        if (empty($estudante)) {
            Flash::error('Estudante not found');

            return redirect(route('estudantes.index'));
        }

        $this->estudanteRepository->delete($id);

        Flash::success('Estudante deleted successfully.');

        return redirect(route('estudantes.index'));
    }
}
