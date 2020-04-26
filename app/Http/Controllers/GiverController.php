<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateGiverRequest;
use App\Http\Requests\UpdateGiverRequest;
use App\Repositories\GiverRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class GiverController extends AppBaseController
{
    /** @var  GiverRepository */
    private $giverRepository;

    public function __construct(GiverRepository $giverRepo)
    {
        $this->giverRepository = $giverRepo;
    }

    /**
     * Display a listing of the Giver.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $givers = $this->giverRepository->all();

        return view('givers.index')
            ->with('givers', $givers);
    }

    /**
     * Show the form for creating a new Giver.
     *
     * @return Response
     */
    public function create()
    {
        return view('givers.create');
    }

    /**
     * Store a newly created Giver in storage.
     *
     * @param CreateGiverRequest $request
     *
     * @return Response
     */
    public function store(CreateGiverRequest $request)
    {
        $input = $request->all();

        $giver = $this->giverRepository->create($input);

        Flash::success('Giver saved successfully.');

        return redirect(route('givers.index'));
    }

    /**
     * Display the specified Giver.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $giver = $this->giverRepository->find($id);

        if (empty($giver)) {
            Flash::error('Giver not found');

            return redirect(route('givers.index'));
        }

        return view('givers.show')->with('giver', $giver);
    }

    /**
     * Show the form for editing the specified Giver.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $giver = $this->giverRepository->find($id);

        if (empty($giver)) {
            Flash::error('Giver not found');

            return redirect(route('givers.index'));
        }

        return view('givers.edit')->with('giver', $giver);
    }

    /**
     * Update the specified Giver in storage.
     *
     * @param int $id
     * @param UpdateGiverRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateGiverRequest $request)
    {
        $giver = $this->giverRepository->find($id);

        if (empty($giver)) {
            Flash::error('Giver not found');

            return redirect(route('givers.index'));
        }

        $giver = $this->giverRepository->update($request->all(), $id);

        Flash::success('Giver updated successfully.');

        return redirect(route('givers.index'));
    }

    /**
     * Remove the specified Giver from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $giver = $this->giverRepository->find($id);

        if (empty($giver)) {
            Flash::error('Giver not found');

            return redirect(route('givers.index'));
        }

        $this->giverRepository->delete($id);

        Flash::success('Giver deleted successfully.');

        return redirect(route('givers.index'));
    }
}
