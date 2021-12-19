<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTestteoRequest;
use App\Http\Requests\UpdateTestteoRequest;
use App\Repositories\TestteoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class TestteoController extends AppBaseController
{
    /** @var  TestteoRepository */
    private $testteoRepository;

    public function __construct(TestteoRepository $testteoRepo)
    {
        $this->testteoRepository = $testteoRepo;
    }

    /**
     * Display a listing of the Testteo.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $testteos = $this->testteoRepository->all();

        return view('testteos.index')
            ->with('testteos', $testteos);
    }

    /**
     * Show the form for creating a new Testteo.
     *
     * @return Response
     */
    public function create()
    {
        return view('testteos.create');
    }

    /**
     * Store a newly created Testteo in storage.
     *
     * @param CreateTestteoRequest $request
     *
     * @return Response
     */
    public function store(CreateTestteoRequest $request)
    {
        $input = $request->all();

        $testteo = $this->testteoRepository->create($input);

        Flash::success('Testteo saved successfully.');

        return redirect(route('testteos.index'));
    }

    /**
     * Display the specified Testteo.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $testteo = $this->testteoRepository->find($id);

        if (empty($testteo)) {
            Flash::error('Testteo not found');

            return redirect(route('testteos.index'));
        }

        return view('testteos.show')->with('testteo', $testteo);
    }

    /**
     * Show the form for editing the specified Testteo.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $testteo = $this->testteoRepository->find($id);

        if (empty($testteo)) {
            Flash::error('Testteo not found');

            return redirect(route('testteos.index'));
        }

        return view('testteos.edit')->with('testteo', $testteo);
    }

    /**
     * Update the specified Testteo in storage.
     *
     * @param int $id
     * @param UpdateTestteoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTestteoRequest $request)
    {
        $testteo = $this->testteoRepository->find($id);

        if (empty($testteo)) {
            Flash::error('Testteo not found');

            return redirect(route('testteos.index'));
        }

        $testteo = $this->testteoRepository->update($request->all(), $id);

        Flash::success('Testteo updated successfully.');

        return redirect(route('testteos.index'));
    }

    /**
     * Remove the specified Testteo from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $testteo = $this->testteoRepository->find($id);

        if (empty($testteo)) {
            Flash::error('Testteo not found');

            return redirect(route('testteos.index'));
        }

        $this->testteoRepository->delete($id);

        Flash::success('Testteo deleted successfully.');

        return redirect(route('testteos.index'));
    }
}
