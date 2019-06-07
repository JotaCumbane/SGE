<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateInscricaoRequest;
use App\Http\Requests\UpdateInscricaoRequest;
use App\Repositories\InscricaoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class InscricaoController extends AppBaseController
{
    /** @var  InscricaoRepository */
    private $inscricaoRepository;

    public function __construct(InscricaoRepository $inscricaoRepo)
    {
        $this->inscricaoRepository = $inscricaoRepo;
    }

    /**
     * Display a listing of the Inscricao.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $inscricaos = $this->inscricaoRepository->all();

        return view('inscricaos.index')
            ->with('inscricaos', $inscricaos);
    }

    /**
     * Show the form for creating a new Inscricao.
     *
     * @return Response
     */
    public function create()
    {
        return view('inscricaos.create');
    }

    /**
     * Store a newly created Inscricao in storage.
     *
     * @param CreateInscricaoRequest $request
     *
     * @return Response
     */
    public function store(CreateInscricaoRequest $request)
    {
        $input = $request->all();

        $inscricao = $this->inscricaoRepository->create($input);

        Flash::success('Inscricao saved successfully.');

        return redirect(route('inscricaos.index'));
    }

    /**
     * Display the specified Inscricao.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $inscricao = $this->inscricaoRepository->find($id);

        if (empty($inscricao)) {
            Flash::error('Inscricao not found');

            return redirect(route('inscricaos.index'));
        }

        return view('inscricaos.show')->with('inscricao', $inscricao);
    }

    /**
     * Show the form for editing the specified Inscricao.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $inscricao = $this->inscricaoRepository->find($id);

        if (empty($inscricao)) {
            Flash::error('Inscricao not found');

            return redirect(route('inscricaos.index'));
        }

        return view('inscricaos.edit')->with('inscricao', $inscricao);
    }

    /**
     * Update the specified Inscricao in storage.
     *
     * @param int $id
     * @param UpdateInscricaoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateInscricaoRequest $request)
    {
        $inscricao = $this->inscricaoRepository->find($id);

        if (empty($inscricao)) {
            Flash::error('Inscricao not found');

            return redirect(route('inscricaos.index'));
        }

        $inscricao = $this->inscricaoRepository->update($request->all(), $id);

        Flash::success('Inscricao updated successfully.');

        return redirect(route('inscricaos.index'));
    }

    /**
     * Remove the specified Inscricao from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $inscricao = $this->inscricaoRepository->find($id);

        if (empty($inscricao)) {
            Flash::error('Inscricao not found');

            return redirect(route('inscricaos.index'));
        }

        $this->inscricaoRepository->delete($id);

        Flash::success('Inscricao deleted successfully.');

        return redirect(route('inscricaos.index'));
    }
}
