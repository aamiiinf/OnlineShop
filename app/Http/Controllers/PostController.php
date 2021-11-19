<?php

namespace App\Http\Controllers;

use Intervention\Image\Facades\Image;
use App\Http\Requests\CreatePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Repositories\PostRepository;
use App\Http\Controllers\AppBaseController;
use App\Models\Lang;
use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;
use App\Models\Setting;
use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Flash;
use Response;

class PostController extends AppBaseController
{
    /** @var  PostRepository */
    private $postRepository;

    public function __construct(PostRepository $postRepo)
    {
        $this->postRepository = $postRepo;
    }

    /**
     * Display a listing of the Post.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $posts = $this->postRepository->paginate(10);
        $user = Auth::user();
        $locale = Lang::find(1);
        $setting = Setting::find(1);
        App::setLocale($locale->lang);

        return view('posts.index', compact('posts', 'user', 'setting'));
    }

    /**
     * Show the form for creating a new Post.
     *
     * @return Response
     */
    public function create(Post $post)
    {
        $tags = Tag::all()->pluck('name', 'id');
        $categories = Category::all()->pluck('name', 'id');
        $locale = Lang::find(1);
        $setting = Setting::find(1);
        App::setLocale($locale->lang);

        return view('posts.create', compact('categories', 'post', 'tags', 'setting'));
    }

    /**
     * Store a newly created Post in storage.
     *
     * @param CreatePostRequest $request
     *
     * @return Response
     */
    public function store(CreatePostRequest $request)
    {
        $locale = Lang::find(1);
        $request->validate([
            'slug' => ['required', 'unique:posts'],
        ]);

        $post = new Post();
        $post = $this->postRepository->createPost($request);
        $post->categories()->attach($request->categories);
        $post->tags()->attach($request->tags);

        if ($locale->lang == 'fa') {
          Flash::success('پست با موفقیت ذخیره شد.');
        }

        if ($locale->lang == 'en') {
          Flash::success('Post saved successfully.');
        }

        return redirect(route('posts.index'));
    }

    /**
     * Display the specified Post.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $post = $this->postRepository->find($id);
        $locale = Lang::find(1);
        $setting = Setting::find(1);
        App::setLocale($locale->lang);

        if (empty($post)) {
            Flash::error('Post not found');

            return redirect(route('posts.index'));
        }

        return view('posts.show', compact('post', 'setting'));
    }

    /**
     * Show the form for editing the specified Post.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $post = $this->postRepository->find($id);
        $categories = Category::all()->pluck('name', 'id');
        $tags = Tag::all()->pluck('name', 'id');
        $setting = Setting::find(1);
        $locale = Lang::find(1);
        App::setLocale($locale->lang);

        if (empty($post)) {
            Flash::error('Post not found');

            return redirect(route('posts.index'));
        }

        return view('posts.edit', compact('post', 'categories', 'tags', 'setting'));
    }

    /**
     * Update the specified Post in storage.
     *
     * @param int $id
     * @param UpdatePostRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePostRequest $request)
    {
        $locale = Lang::find(1);
        $file = $request->file('image');
        $originalName = $file->getClientOriginalName();
        $exception = $file->getClientOriginalExtension();

        $path = 'upload/'.uniqid().'.'.$exception;
        $img = Image::make($file);
        $img->save(public_path($path));

        $input = $request->all();
        $input['image'] = $path;

        $post = $this->postRepository->find($id);
        $post->update($input);
        $post->categories()->sync($request->categories);
        $post->tags()->sync($request->tags);

        if (empty($post)) {
            Flash::error('Post not found');

            return redirect(route('posts.index'));
        }

        $post = $this->postRepository->update($input, $id);

        if ($locale->lang == 'fa') {
          Flash::success('پست با موفقیت به روز شد.');
        }

        if ($locale->lang == 'en') {
          Flash::success('Post updated successfully.');
        }

        return redirect(route('posts.index'));
    }

    /**
     * Remove the specified Post from storage.
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
        $post = $this->postRepository->find($id);

        if (empty($post)) {
            Flash::error('Post not found');

            return redirect(route('posts.index'));
        }

        $this->postRepository->delete($id);

        if ($locale->lang == 'fa') {
          Flash::success('پست با موفقیت حذف شد.');
        }

        if ($locale->lang == 'en') {
          Flash::success('Post deleted successfully.');
        }

        return redirect(route('posts.index'));
    }
}
