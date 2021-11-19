<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateWorkRequest;
use App\Http\Requests\UpdateWorkRequest;
use App\Repositories\WorkRepository;
use App\Http\Controllers\AppBaseController;
use App\Models\Lang;
use App\Models\Setting;
use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use Flash;
use Response;

class WorkController extends AppBaseController
{
    /** @var  WorkRepository */
    private $workRepository;

    public function __construct(WorkRepository $workRepo)
    {
        $this->workRepository = $workRepo;
    }

    /**
     * Display a listing of the Work.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $works = $this->workRepository->all();
        $setting = Setting::find(1);
        $locale = Lang::find(1);
        App::setLocale($locale->lang);

        return view('works.index', compact('works', 'setting'));
    }

    /**
     * Show the form for creating a new Work.
     *
     * @return Response
     */
    public function create()
    {
        $setting = Setting::find(1);
        $locale = Lang::find(1);
        App::setLocale($locale->lang);

        return view('works.create', compact('setting'));
    }

    /**
     * Store a newly created Work in storage.
     *
     * @param CreateWorkRequest $request
     *
     * @return Response
     */
    public function store(CreateWorkRequest $request)
    {
        $locale = Lang::find(1);
        $input = $request->all();

        $work = $this->workRepository->create($input);

        if ($locale->lang == 'fa') {
          Flash::success('کار با موفقیت ذخیره شد.');
        }

        if ($locale->lang == 'en') {
          Flash::success('Work saved successfully.');
        }

        return redirect(route('home'));
    }

    /**
     * Display the specified Work.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $work = $this->workRepository->find($id);
        $setting = Setting::find(1);
        $locale = Lang::find(1);
        App::setLocale($locale->lang);

        if (empty($work)) {
            Flash::error('Work not found');

            return redirect(route('works.index'));
        }

        return view('works.show', compact('work', 'setting'));
    }

    /**
     * Show the form for editing the specified Work.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $work = $this->workRepository->find($id);
        $setting = Setting::find(1);
        $locale = Lang::find(1);
        App::setLocale($locale->lang);

        if (empty($work)) {
            Flash::error('Work not found');

            return redirect(route('works.index'));
        }

        return view('works.edit', compact('work', 'setting'));
    }

    /**
     * Update the specified Work in storage.
     *
     * @param int $id
     * @param UpdateWorkRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateWorkRequest $request)
    {
        $locale = Lang::find(1);
        $work = $this->workRepository->find($id);

        if (empty($work)) {
            Flash::error('Work not found');

            return redirect(route('works.index'));
        }

        $work = $this->workRepository->update($request->all(), $id);

        if ($locale->lang == 'fa') {
          Flash::success('کار با موفقیت به روز شد.');
        }

        if ($locale->lang == 'en') {
          Flash::success('Work updated successfully.');
        }

        return redirect(route('home'));
    }

    /**
     * Remove the specified Work from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $locale = Lang::find(1);
        $work = $this->workRepository->find($id);

        if (empty($work)) {
            Flash::error('Work not found');

            return redirect(route('works.index'));
        }

        $this->workRepository->delete($id);

        if ($locale->lang == 'fa') {
          Flash::success('کار با موفقیت حذف شد.');
        }

        if ($locale->lang == 'en') {
          Flash::success('Work deleted successfully.');
        }

        return redirect(route('works.index'));
    }
}
