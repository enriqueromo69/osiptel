<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateOperadorRequest;
use App\Http\Requests\UpdateOperadorRequest;
use App\Repositories\OperadorRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class OperadorController extends AppBaseController
{
    /** @var  OperadorRepository */
    private $operadorRepository;

    public function __construct(OperadorRepository $operadorRepo)
    {
        $this->operadorRepository = $operadorRepo;
    }

    /**
     * Display a listing of the Operador.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $operadors = $this->operadorRepository->all();

        return view('operadors.index')
            ->with('operadors', $operadors);
    }

    /**
     * Show the form for creating a new Operador.
     *
     * @return Response
     */
    public function create()
    {
        return view('operadors.create');
    }

    /**
     * Store a newly created Operador in storage.
     *
     * @param CreateOperadorRequest $request
     *
     * @return Response
     */
    public function store(CreateOperadorRequest $request)
    {
        $input = $request->all();

        $operador = $this->operadorRepository->create($input);

        Flash::success('Operador saved successfully.');

        return redirect(route('operadors.index'));
    }

    /**
     * Display the specified Operador.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $operador = $this->operadorRepository->find($id);

        if (empty($operador)) {
            Flash::error('Operador not found');

            return redirect(route('operadors.index'));
        }

        return view('operadors.show')->with('operador', $operador);
    }

    /**
     * Show the form for editing the specified Operador.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $operador = $this->operadorRepository->find($id);

        if (empty($operador)) {
            Flash::error('Operador not found');

            return redirect(route('operadors.index'));
        }

        return view('operadors.edit')->with('operador', $operador);
    }

    /**
     * Update the specified Operador in storage.
     *
     * @param int $id
     * @param UpdateOperadorRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateOperadorRequest $request)
    {
        $operador = $this->operadorRepository->find($id);

        if (empty($operador)) {
            Flash::error('Operador not found');

            return redirect(route('operadors.index'));
        }

        $operador = $this->operadorRepository->update($request->all(), $id);

        Flash::success('Operador updated successfully.');

        return redirect(route('operadors.index'));
    }

    /**
     * Remove the specified Operador from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $operador = $this->operadorRepository->find($id);

        if (empty($operador)) {
            Flash::error('Operador not found');

            return redirect(route('operadors.index'));
        }

        $this->operadorRepository->delete($id);

        Flash::success('Operador deleted successfully.');

        return redirect(route('operadors.index'));
    }
}
