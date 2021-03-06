<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSeekerRequest;
use App\Http\Requests\UpdateSeekerRequest;
use App\Repositories\SeekerRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class SeekerController extends AppBaseController
{
    /** @var  SeekerRepository */
    private $seekerRepository;

    public function __construct(SeekerRepository $seekerRepo)
    {
        $this->seekerRepository = $seekerRepo;
    }

    /**
     * Display a listing of the Seeker.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $seekers = $this->seekerRepository->all();

        return view('seekers.index')
            ->with('seekers', $seekers);
    }

    /**
     * Show the form for creating a new Seeker.
     *
     * @return Response
     */
    public function create()
    {
        return view('seekers.create');
    }

    /**
     * Store a newly created Seeker in storage.
     *
     * @param CreateSeekerRequest $request
     *
     * @return Response
     */
    public function store(CreateSeekerRequest $request)
    {
        $input = $request->all();

        $seeker = $this->seekerRepository->create($input);

        Flash::success('Seeker saved successfully.');

        return redirect(route('seekers.index'));
    }

    /**
     * Display the specified Seeker.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $seeker = $this->seekerRepository->find($id);

        if (empty($seeker)) {
            Flash::error('Seeker not found');

            return redirect(route('seekers.index'));
        }

        return view('seekers.show')->with('seeker', $seeker);
    }

    /**
     * Show the form for editing the specified Seeker.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $seeker = $this->seekerRepository->find($id);

        if (empty($seeker)) {
            Flash::error('Seeker not found');

            return redirect(route('seekers.index'));
        }

        return view('seekers.edit')->with('seeker', $seeker);
    }

    /**
     * Update the specified Seeker in storage.
     *
     * @param int $id
     * @param UpdateSeekerRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSeekerRequest $request)
    {
        $seeker = $this->seekerRepository->find($id);

        if (empty($seeker)) {
            Flash::error('Seeker not found');

            return redirect(route('seekers.index'));
        }

        $seeker = $this->seekerRepository->update($request->all(), $id);

        Flash::success('Seeker updated successfully.');

        return redirect(route('seekers.index'));
    }

    /**
     * Remove the specified Seeker from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $seeker = $this->seekerRepository->find($id);

        if (empty($seeker)) {
            Flash::error('Seeker not found');

            return redirect(route('seekers.index'));
        }

        $this->seekerRepository->delete($id);

        Flash::success('Seeker deleted successfully.');

        return redirect(route('seekers.index'));
    }
}
