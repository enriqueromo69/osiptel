<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePddetalleRequest;
use App\Http\Requests\UpdatePddetalleRequest;
use App\Repositories\PddetalleRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class PddetalleController extends AppBaseController
{
    /** @var  PddetalleRepository */
    private $pddetalleRepository;

    public function __construct(PddetalleRepository $pddetalleRepo)
    {
        $this->pddetalleRepository = $pddetalleRepo;
    }

    /**
     * Display a listing of the Pddetalle.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $pddetalles = $this->pddetalleRepository->all();

        return view('pddetalles.index')
            ->with('pddetalles', $pddetalles);
    }

    /**
     * Show the form for creating a new Pddetalle.
     *
     * @return Response
     */
    public function create()
    {
        return view('pddetalles.create');
    }

    /**
     * Store a newly created Pddetalle in storage.
     *
     * @param CreatePddetalleRequest $request
     *
     * @return Response
     */
    public function store(CreatePddetalleRequest $request)
    {
        $input = $request->all();

        $pddetalle = $this->pddetalleRepository->create($input);

        Flash::success('Pddetalle saved successfully.');

        return redirect(route('pddetalles.index'));
    }

    /**
     * Display the specified Pddetalle.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $pddetalle = $this->pddetalleRepository->find($id);

        if (empty($pddetalle)) {
            Flash::error('Pddetalle not found');

            return redirect(route('pddetalles.index'));
        }

        return view('pddetalles.show')->with('pddetalle', $pddetalle);
    }

    /**
     * Show the form for editing the specified Pddetalle.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $pddetalle = $this->pddetalleRepository->find($id);

        if (empty($pddetalle)) {
            Flash::error('Pddetalle not found');

            return redirect(route('pddetalles.index'));
        }

        return view('pddetalles.edit')->with('pddetalle', $pddetalle);
    }

    /**
     * Update the specified Pddetalle in storage.
     *
     * @param int $id
     * @param UpdatePddetalleRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePddetalleRequest $request)
    {
        $pddetalle = $this->pddetalleRepository->find($id);

        if (empty($pddetalle)) {
            Flash::error('Pddetalle not found');

            return redirect(route('pddetalles.index'));
        }

        $pddetalle = $this->pddetalleRepository->update($request->all(), $id);

        Flash::success('Pddetalle updated successfully.');

        return redirect(route('pddetalles.index'));
    }

    /**
     * Remove the specified Pddetalle from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $pddetalle = $this->pddetalleRepository->find($id);

        if (empty($pddetalle)) {
            Flash::error('Pddetalle not found');

            return redirect(route('pddetalles.index'));
        }

        $this->pddetalleRepository->delete($id);

        Flash::success('Pddetalle deleted successfully.');

        return redirect(route('pddetalles.index'));
    }
}
