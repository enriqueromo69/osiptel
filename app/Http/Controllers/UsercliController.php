<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUsercliRequest;
use App\Http\Requests\UpdateUsercliRequest;
use App\Repositories\UsercliRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class UsercliController extends AppBaseController
{
    /** @var  UsercliRepository */
    private $usercliRepository;

    public function __construct(UsercliRepository $usercliRepo)
    {
        $this->usercliRepository = $usercliRepo;
    }

    /**
     * Display a listing of the Usercli.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $userclis = $this->usercliRepository->all();

        return view('userclis.index')
            ->with('userclis', $userclis);
    }

    /**
     * Show the form for creating a new Usercli.
     *
     * @return Response
     */
    public function create()
    {
        return view('userclis.create');
    }

    /**
     * Store a newly created Usercli in storage.
     *
     * @param CreateUsercliRequest $request
     *
     * @return Response
     */
    public function store(CreateUsercliRequest $request)
    {
        $input = $request->all();

        $usercli = $this->usercliRepository->create($input);

        Flash::success('Usercli saved successfully.');

        return redirect(route('userclis.index'));
    }

    /**
     * Display the specified Usercli.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $usercli = $this->usercliRepository->find($id);

        if (empty($usercli)) {
            Flash::error('Usercli not found');

            return redirect(route('userclis.index'));
        }

        return view('userclis.show')->with('usercli', $usercli);
    }

    /**
     * Show the form for editing the specified Usercli.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $usercli = $this->usercliRepository->find($id);

        if (empty($usercli)) {
            Flash::error('Usercli not found');

            return redirect(route('userclis.index'));
        }

        return view('userclis.edit')->with('usercli', $usercli);
    }

    /**
     * Update the specified Usercli in storage.
     *
     * @param int $id
     * @param UpdateUsercliRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateUsercliRequest $request)
    {
        $usercli = $this->usercliRepository->find($id);

        if (empty($usercli)) {
            Flash::error('Usercli not found');

            return redirect(route('userclis.index'));
        }

        $usercli = $this->usercliRepository->update($request->all(), $id);

        Flash::success('Usercli updated successfully.');

        return redirect(route('userclis.index'));
    }

    /**
     * Remove the specified Usercli from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $usercli = $this->usercliRepository->find($id);

        if (empty($usercli)) {
            Flash::error('Usercli not found');

            return redirect(route('userclis.index'));
        }

        $this->usercliRepository->delete($id);

        Flash::success('Usercli deleted successfully.');

        return redirect(route('userclis.index'));
    }
}
