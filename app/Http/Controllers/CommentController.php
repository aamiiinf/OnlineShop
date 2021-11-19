<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCommentRequest;
use App\Http\Requests\UpdateCommentRequest;
use App\Repositories\CommentRepository;
use App\Http\Controllers\AppBaseController;
use App\Models\Lang;
use App\Models\Setting;
use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use Flash;
use Response;

class CommentController extends AppBaseController
{
    /** @var  CommentRepository */
    private $commentRepository;

    public function __construct(CommentRepository $commentRepo)
    {
        $this->commentRepository = $commentRepo;
    }

    /**
     * Display a listing of the Comment.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $comments = $this->commentRepository->paginate(10);
        $locale = Lang::find(1);
        $setting = Setting::find(1);
        App::setLocale($locale->lang);

        return view('comments.index', compact('comments', 'setting'));
    }

    /**
     * Show the form for creating a new Comment.
     *
     * @return Response
     */
    public function create()
    {
        $locale = Lang::find(1);
        $setting = Setting::find(1);
        App::setLocale($locale->lang);

        return view('comments.create', compact('setting'));
    }

    /**
     * Store a newly created Comment in storage.
     *
     * @param CreateCommentRequest $request
     *
     * @return Response
     */
    public function store(CreateCommentRequest $request)
    {
        $locale = Lang::find(1);
        $input = $request->all();

        $comment = $this->commentRepository->create($input);

        if ($locale->lang == 'fa') {
          Flash::success('دیدگاه شما با موفقیت ثبت شد و پس از تایید ناظر منتشر خواهد شد');
        }

        if ($locale->lang == 'en') {
          Flash::success('Your comment has been successfully submitted and will be published after the approval of the moderator.');
        }

        return redirect()->back();
    }

    /**
     * Display the specified Comment.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $comment = $this->commentRepository->find($id);
        $locale = Lang::find(1);
        $setting = Setting::find(1);
        App::setLocale($locale->lang);

        if (empty($comment)) {
            Flash::error('Comment not found');

            return redirect(route('comments.index'));
        }

        return view('comments.show', compact('comment', 'setting'));
    }

    /**
     * Show the form for editing the specified Comment.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $comment = $this->commentRepository->find($id);
        $locale = Lang::find(1);
        $setting = Setting::find(1);
        App::setLocale($locale->lang);

        if (empty($comment)) {
            Flash::error('Comment not found');

            return redirect(route('comments.index'));
        }

        return view('comments.edit', compact('comment', 'setting'));
    }

    /**
     * Update the specified Comment in storage.
     *
     * @param int $id
     * @param UpdateCommentRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCommentRequest $request)
    {
        $locale = Lang::find(1);
        $comment = $this->commentRepository->find($id);

        if (empty($comment)) {
            Flash::error('Comment not found');

            return redirect(route('comments.index'));
        }

        $comment = $this->commentRepository->update($request->all(), $id);

        if ($locale->lang == 'fa') {
          Flash::success('نظر با موفقیت به روز شد.');
        }

        if ($locale->lang == 'en') {
          Flash::success('Comment updated successfully.');
        }

        return redirect(route('comments.index'));
    }

    /**
     * Remove the specified Comment from storage.
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
        $comment = $this->commentRepository->find($id);

        if (empty($comment)) {
            Flash::error('Comment not found');

            return redirect(route('comments.index'));
        }

        $this->commentRepository->delete($id);

        if ($locale->lang == 'fa') {
          Flash::success('نظر با موفقیت حذف شد.');
        }

        if ($locale->lang == 'en') {
          Flash::success('Comment deleted successfully.');
        }

        return redirect(route('comments.index'));
    }
}
