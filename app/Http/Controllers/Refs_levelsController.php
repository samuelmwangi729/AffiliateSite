<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateRefs_levelsRequest;
use App\Http\Requests\UpdateRefs_levelsRequest;
use App\Repositories\Refs_levelsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class Refs_levelsController extends AppBaseController
{
    /** @var  Refs_levelsRepository */
    private $refsLevelsRepository;

    public function __construct(Refs_levelsRepository $refsLevelsRepo)
    {
        $this->refsLevelsRepository = $refsLevelsRepo;
        $this->middleware('auth');
    }

    /**
     * Display a listing of the Refs_levels.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $refsLevels = $this->refsLevelsRepository->all();

        return view('refs_levels.index')
            ->with('refsLevels', $refsLevels);
    }

    /**
     * Show the form for creating a new Refs_levels.
     *
     * @return Response
     */
    public function create()
    {
        return view('refs_levels.create');
    }

    /**
     * Store a newly created Refs_levels in storage.
     *
     * @param CreateRefs_levelsRequest $request
     *
     * @return Response
     */
    public function store(CreateRefs_levelsRequest $request)
    {
        $input = $request->all();

        $refsLevels = $this->refsLevelsRepository->create($input);

        Flash::success('Refs Levels saved successfully.');

        return redirect(route('refsLevels.index'));
    }

    /**
     * Display the specified Refs_levels.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $refsLevels = $this->refsLevelsRepository->find($id);

        if (empty($refsLevels)) {
            Flash::error('Refs Levels not found');

            return redirect(route('refsLevels.index'));
        }

        return view('refs_levels.show')->with('refsLevels', $refsLevels);
    }

    /**
     * Show the form for editing the specified Refs_levels.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $refsLevels = $this->refsLevelsRepository->find($id);

        if (empty($refsLevels)) {
            Flash::error('Refs Levels not found');

            return redirect(route('refsLevels.index'));
        }

        return view('refs_levels.edit')->with('refsLevels', $refsLevels);
    }

    /**
     * Update the specified Refs_levels in storage.
     *
     * @param int $id
     * @param UpdateRefs_levelsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateRefs_levelsRequest $request)
    {
        $refsLevels = $this->refsLevelsRepository->find($id);

        if (empty($refsLevels)) {
            Flash::error('Refs Levels not found');

            return redirect(route('refsLevels.index'));
        }

        $refsLevels = $this->refsLevelsRepository->update($request->all(), $id);

        Flash::success('Refs Levels updated successfully.');

        return redirect(route('refsLevels.index'));
    }

    /**
     * Remove the specified Refs_levels from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $refsLevels = $this->refsLevelsRepository->find($id);

        if (empty($refsLevels)) {
            Flash::error('Refs Levels not found');

            return redirect(route('refsLevels.index'));
        }

        $this->refsLevelsRepository->delete($id);

        Flash::success('Refs Levels deleted successfully.');

        return redirect(route('refsLevels.index'));
    }
}
