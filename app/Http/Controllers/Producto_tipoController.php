<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProducto_tipoRequest;
use App\Http\Requests\UpdateProducto_tipoRequest;
use App\Repositories\Producto_tipoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class Producto_tipoController extends AppBaseController
{
    /** @var  Producto_tipoRepository */
    private $productoTipoRepository;

    public function __construct(Producto_tipoRepository $productoTipoRepo)
    {
        $this->productoTipoRepository = $productoTipoRepo;
    }

    /**
     * Display a listing of the Producto_tipo.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $productoTipos = $this->productoTipoRepository->all();

        return view('producto_tipos.index')
            ->with('productoTipos', $productoTipos);
    }

    /**
     * Show the form for creating a new Producto_tipo.
     *
     * @return Response
     */
    public function create()
    {
        return view('producto_tipos.create');
    }

    /**
     * Store a newly created Producto_tipo in storage.
     *
     * @param CreateProducto_tipoRequest $request
     *
     * @return Response
     */
    public function store(CreateProducto_tipoRequest $request)
    {
        $input = $request->all();

        $productoTipo = $this->productoTipoRepository->create($input);

        Flash::success('Producto Tipo saved successfully.');

        return redirect(route('productoTipos.index'));
    }

    /**
     * Display the specified Producto_tipo.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $productoTipo = $this->productoTipoRepository->find($id);

        if (empty($productoTipo)) {
            Flash::error('Producto Tipo not found');

            return redirect(route('productoTipos.index'));
        }

        return view('producto_tipos.show')->with('productoTipo', $productoTipo);
    }

    /**
     * Show the form for editing the specified Producto_tipo.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $productoTipo = $this->productoTipoRepository->find($id);

        if (empty($productoTipo)) {
            Flash::error('Producto Tipo not found');

            return redirect(route('productoTipos.index'));
        }

        return view('producto_tipos.edit')->with('productoTipo', $productoTipo);
    }

    /**
     * Update the specified Producto_tipo in storage.
     *
     * @param int $id
     * @param UpdateProducto_tipoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateProducto_tipoRequest $request)
    {
        $productoTipo = $this->productoTipoRepository->find($id);

        if (empty($productoTipo)) {
            Flash::error('Producto Tipo not found');

            return redirect(route('productoTipos.index'));
        }

        $productoTipo = $this->productoTipoRepository->update($request->all(), $id);

        Flash::success('Producto Tipo updated successfully.');

        return redirect(route('productoTipos.index'));
    }

    /**
     * Remove the specified Producto_tipo from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $productoTipo = $this->productoTipoRepository->find($id);

        if (empty($productoTipo)) {
            Flash::error('Producto Tipo not found');

            return redirect(route('productoTipos.index'));
        }

        $this->productoTipoRepository->delete($id);

        Flash::success('Producto Tipo deleted successfully.');

        return redirect(route('productoTipos.index'));
    }
}
