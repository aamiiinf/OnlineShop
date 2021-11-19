<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Repositories\CategoryRepository;
use App\Http\Controllers\AppBaseController;
use App\Models\Lang;
use App\Models\Setting;
use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use Flash;
use Response;

class CategoryController extends AppBaseController
{
    /** @var  CategoryRepository */
    private $categoryRepository;

    public function __construct(CategoryRepository $categoryRepo)
    {
        $this->categoryRepository = $categoryRepo;
    }

    /**
     * Display a listing of the Category.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $categories = $this->categoryRepository->paginate(10);
        $locale = Lang::find(1);
        $setting = Setting::find(1);
        App::setLocale($locale->lang);

        return view('categories.index', compact('categories', 'setting'));
    }

    /**
     * Show the form for creating a new Category.
     *
     * @return Response
     */
    public function create()
    {
        $locale = Lang::find(1);
        $setting = Setting::find(1);
        App::setLocale($locale->lang);

        return view('categories.create', compact('setting'));
    }

    /**
     * Store a newly created Category in storage.
     *
     * @param CreateCategoryRequest $request
     *
     * @return Response
     */
    public function store(CreateCategoryRequest $request)
    {
        $locale = Lang::find(1);
        $input = $request->validate([
            'slug' => ['required', 'unique:categories'],
        ]);

        $input = $request->all();


        $category = $this->categoryRepository->create($input);

        if ($locale->lang == 'fa') {
          Flash::success('دسته با موفقیت ذخیره شد.');
        }

        if ($locale->lang == 'en') {
          Flash::success('Category saved successfully.');
        }

        return redirect(route('categories.index'));
    }

    /**
     * Display the specified Category.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $category = $this->categoryRepository->find($id);
        $locale = Lang::find(1);
        $setting = Setting::find(1);
        App::setLocale($locale->lang);

        if (empty($category)) {
            Flash::error('Category not found');

            return redirect(route('categories.index'));
        }

        return view('categories.show', compact('setting', 'category'));
    }

    /**
     * Show the form for editing the specified Category.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $category = $this->categoryRepository->find($id);
        $locale = Lang::find(1);
        $setting = Setting::find(1);
        App::setLocale($locale->lang);

        if (empty($category)) {
            Flash::error('Category not found');

            return redirect(route('categories.index'));
        }

        return view('categories.edit', compact('setting', 'category'));
    }

    /**
     * Update the specified Category in storage.
     *
     * @param int $id
     * @param UpdateCategoryRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCategoryRequest $request)
    {
        $locale = Lang::find(1);
        $category = $this->categoryRepository->find($id);

        if (empty($category)) {
            Flash::error('Category not found');

            return redirect(route('categories.index'));
        }

        $category = $this->categoryRepository->update($request->all(), $id);

        if ($locale->lang == 'fa') {
          Flash::success('دسته با موفقیت به روز شد.');
        }

        if ($locale->lang == 'en') {
          Flash::success('Category updated successfully.');
        }

        return redirect(route('categories.index'));
    }

    /**
     * Remove the specified Category from storage.
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
        $category = $this->categoryRepository->find($id);

        if (empty($category)) {
            Flash::error('Category not found');

            return redirect(route('categories.index'));
        }

        $this->categoryRepository->delete($id);

        if ($locale->lang == 'fa') {
          Flash::success('دسته با موفقیت حذف شد.');
        }

        if ($locale->lang == 'en') {
          Flash::success('Category deleted successfully.');
        }

        return redirect(route('categories.index'));
    }
}
