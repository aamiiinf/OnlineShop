<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateWorkAPIRequest;
use App\Http\Requests\API\UpdateWorkAPIRequest;
use App\Models\Work;
use App\Repositories\WorkRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class WorkController
 * @package App\Http\Controllers\API
 */

class WorkAPIController extends AppBaseController
{
    /** @var  WorkRepository */
    private $workRepository;

    public function __construct(WorkRepository $workRepo)
    {
        $this->workRepository = $workRepo;
    }

    /**
     * Display a listing of the Work.
     * GET|HEAD /works
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $works = $this->workRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($works->toArray(), 'Works retrieved successfully');
    }

    /**
     * Store a newly created Work in storage.
     * POST /works
     *
     * @param CreateWorkAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateWorkAPIRequest $request)
    {
        $input = $request->all();

        $work = $this->workRepository->create($input);

        return $this->sendResponse($work->toArray(), 'Work saved successfully');
    }

    /**
     * Display the specified Work.
     * GET|HEAD /works/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Work $work */
        $work = $this->workRepository->find($id);

        if (empty($work)) {
            return $this->sendError('Work not found');
        }

        return $this->sendResponse($work->toArray(), 'Work retrieved successfully');
    }

    /**
     * Update the specified Work in storage.
     * PUT/PATCH /works/{id}
     *
     * @param int $id
     * @param UpdateWorkAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateWorkAPIRequest $request)
    {
        $input = $request->all();

        /** @var Work $work */
        $work = $this->workRepository->find($id);

        if (empty($work)) {
            return $this->sendError('Work not found');
        }

        $work = $this->workRepository->update($input, $id);

        return $this->sendResponse($work->toArray(), 'Work updated successfully');
    }

    /**
     * Remove the specified Work from storage.
     * DELETE /works/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Work $work */
        $work = $this->workRepository->find($id);

        if (empty($work)) {
            return $this->sendError('Work not found');
        }

        $work->delete();

        return $this->sendSuccess('Work deleted successfully');
    }
}
