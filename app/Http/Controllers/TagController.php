<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTagRequest;
use App\Http\Requests\UpdateTagRequest;
use App\Repositories\TagRepository;
use App\Http\Controllers\AppBaseController;
use App\Models\Lang;
use App\Models\Setting;
use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use Flash;
use Response;

class TagController extends AppBaseController
{
    /** @var  TagRepository */
    private $tagRepository;

    public function __construct(TagRepository $tagRepo)
    {
        $this->tagRepository = $tagRepo;
    }

    /**
     * Display a listing of the Tag.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $tags = $this->tagRepository->paginate(10);
        $setting = Setting::find(1);
        $locale = Lang::find(1);
        App::setLocale($locale->lang);

        return view('tags.index', compact('tags', 'setting'));
    }

    /**
     * Show the form for creating a new Tag.
     *
     * @return Response
     */
    public function create()
    {
        $setting = Setting::find(1);
        $locale = Lang::find(1);
        App::setLocale($locale->lang);

        return view('tags.create', compact('setting'));
    }

    /**
     * Store a newly created Tag in storage.
     *
     * @param CreateTagRequest $request
     *
     * @return Response
     */
    public function store(CreateTagRequest $request)
    {
        $locale = Lang::find(1);
        $input = $request->all();

        $tag = $this->tagRepository->create($input);

        if ($locale->lang == 'fa') {
          Flash::success('برچسب با موفقیت ذخیره شد.');
        }

        if ($locale->lang == 'en') {
          Flash::success('Tag saved successfully.');
        }

        return redirect(route('tags.index'));
    }

    /**
     * Display the specified Tag.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tag = $this->tagRepository->find($id);
        $setting = Setting::find(1);
        $locale = Lang::find(1);
        App::setLocale($locale->lang);

        if (empty($tag)) {
            Flash::error('Tag not found');

            return redirect(route('tags.index'));
        }

        return view('tags.show', compact('tag', 'setting'));
    }

    /**
     * Show the form for editing the specified Tag.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tag = $this->tagRepository->find($id);
        $setting = Setting::find(1);
        $locale = Lang::find(1);
        App::setLocale($locale->lang);

        if (empty($tag)) {
            Flash::error('Tag not found');

            return redirect(route('tags.index'));
        }

        return view('tags.edit', compact('tag', 'setting'));
    }

    /**
     * Update the specified Tag in storage.
     *
     * @param int $id
     * @param UpdateTagRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTagRequest $request)
    {
        $locale = Lang::find(1);
        $tag = $this->tagRepository->find($id);

        if (empty($tag)) {
            Flash::error('Tag not found');

            return redirect(route('tags.index'));
        }

        $tag = $this->tagRepository->update($request->all(), $id);

        if ($locale->lang == 'fa') {
          Flash::success('برچسب با موفقیت به روز شد.');
        }

        if ($locale->lang == 'en') {
          Flash::success('Tag updated successfully.');
        }

        return redirect(route('tags.index'));
    }

    /**
     * Remove the specified Tag from storage.
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
        $tag = $this->tagRepository->find($id);

        if (empty($tag)) {
            Flash::error('Tag not found');

            return redirect(route('tags.index'));
        }

        $this->tagRepository->delete($id);

        if ($locale->lang == 'fa') {
          Flash::success('برچسب با موفقیت حذف شد.');
        }

        if ($locale->lang == 'en') {
          Flash::success('Tag deleted successfully.');
        }

        return redirect(route('tags.index'));
    }
}
