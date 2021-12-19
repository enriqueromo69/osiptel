<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTipo_docRequest;
use App\Http\Requests\UpdateTipo_docRequest;
use App\Repositories\Tipo_docRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class Tipo_docController extends AppBaseController
{
    /** @var  Tipo_docRepository */
    private $tipoDocRepository;

    public function __construct(Tipo_docRepository $tipoDocRepo)
    {
        $this->tipoDocRepository = $tipoDocRepo;
    }

    /**
     * Display a listing of the Tipo_doc.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $tipoDocs = $this->tipoDocRepository->all();

        return view('tipo_docs.index')
            ->with('tipoDocs', $tipoDocs);
    }

    /**
     * Show the form for creating a new Tipo_doc.
     *
     * @return Response
     */
    public function create()
    {
        return view('tipo_docs.create');
    }

    /**
     * Store a newly created Tipo_doc in storage.
     *
     * @param CreateTipo_docRequest $request
     *
     * @return Response
     */
    public function store(CreateTipo_docRequest $request)
    {
        $input = $request->all();

        $tipoDoc = $this->tipoDocRepository->create($input);

        Flash::success('Tipo Doc saved successfully.');

        return redirect(route('tipoDocs.index'));
    }

    /**
     * Display the specified Tipo_doc.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tipoDoc = $this->tipoDocRepository->find($id);

        if (empty($tipoDoc)) {
            Flash::error('Tipo Doc not found');

            return redirect(route('tipoDocs.index'));
        }

        return view('tipo_docs.show')->with('tipoDoc', $tipoDoc);
    }

    /**
     * Show the form for editing the specified Tipo_doc.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tipoDoc = $this->tipoDocRepository->find($id);

        if (empty($tipoDoc)) {
            Flash::error('Tipo Doc not found');

            return redirect(route('tipoDocs.index'));
        }

        return view('tipo_docs.edit')->with('tipoDoc', $tipoDoc);
    }

    /**
     * Update the specified Tipo_doc in storage.
     *
     * @param int $id
     * @param UpdateTipo_docRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTipo_docRequest $request)
    {
        $tipoDoc = $this->tipoDocRepository->find($id);

        if (empty($tipoDoc)) {
            Flash::error('Tipo Doc not found');

            return redirect(route('tipoDocs.index'));
        }

        $tipoDoc = $this->tipoDocRepository->update($request->all(), $id);

        Flash::success('Tipo Doc updated successfully.');

        return redirect(route('tipoDocs.index'));
    }

    /**
     * Remove the specified Tipo_doc from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tipoDoc = $this->tipoDocRepository->find($id);

        if (empty($tipoDoc)) {
            Flash::error('Tipo Doc not found');

            return redirect(route('tipoDocs.index'));
        }

        $this->tipoDocRepository->delete($id);

        Flash::success('Tipo Doc deleted successfully.');

        return redirect(route('tipoDocs.index'));
    }
}
