<?php

namespace App\Http\Controllers;

use Intervention\Image\Facades\Image;
use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Repositories\UserRepository;
use App\Http\Controllers\AppBaseController;
use App\Models\Lang;
use App\Models\Setting;
use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use Flash;
use Response;
use Hash;

class UserController extends AppBaseController
{
    /** @var $userRepository UserRepository */
    private $userRepository;

    public function __construct(UserRepository $userRepo)
    {
        $this->userRepository = $userRepo;
    }

    /**
     * Display a listing of the User.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $users = $this->userRepository->paginate(10);
        $setting = Setting::find(1);
        $locale = Lang::find(1);
        App::setLocale($locale->lang);

        return view('users.index', compact('users', 'setting'));
    }

    /**
     * Show the form for creating a new User.
     *
     * @return Response
     */
    public function create()
    {
        $setting = Setting::find(1);
        $locale = Lang::find(1);
        App::setLocale($locale->lang);

        return view('users.create', compact('setting'));
    }

    /**
     * Store a newly created User in storage.
     *
     * @param CreateUserRequest $request
     *
     * @return Response
     */
    public function store(CreateUserRequest $request)
    {
        $locale = Lang::find(1);
        $user = $this->userRepository->createUser($request);

        if ($locale->lang == 'fa') {
          Flash::success('کاربر با موفقیت ذخیره شد.');
        }

        if ($locale->lang == 'en') {
          Flash::success('User saved successfully.');
        }

        return redirect(route('users.index'));
    }

    /**
     * Display the specified User.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $user = $this->userRepository->find($id);
        $setting = Setting::find(1);
        $locale = Lang::find(1);
        App::setLocale($locale->lang);

        if (empty($user)) {
            Flash::error('User not found');

            return redirect(route('users.index'));
        }

        return view('users.show', compact('user', 'setting'));
    }

    /**
     * Show the form for editing the specified User.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $user = $this->userRepository->find($id);
        $setting = Setting::find(1);
        $locale = Lang::find(1);
        App::setLocale($locale->lang);

        if (empty($user)) {
            Flash::error('User not found');

            return redirect(route('users.index'));
        }

        return view('users.edit', compact('user', 'setting'));
    }

    /**
     * Update the specified User in storage.
     *
     * @param int $id
     * @param UpdateUserRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateUserRequest $request)
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



        $user = $this->userRepository->find($id);

        if (empty($user)) {
            Flash::error('User not found');

            return redirect(route('users.index'));
        }
        if (!empty($input['password'])) {
            $input['password'] = Hash::make($input['password']);
        } else {
            unset($input['password']);
        }
        $user = $this->userRepository->update($input, $id);

        if ($locale->lang == 'fa') {
          Flash::success('کاربر با موفقیت به روز شد.');
        }

        if ($locale->lang == 'en') {
          Flash::success('User updated successfully.');
        }

        return redirect(route('users.index'));
    }

    /**
     * Remove the specified User from storage.
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
        $user = $this->userRepository->find($id);

        if (empty($user)) {
            Flash::error('User not found');

            return redirect(route('users.index'));
        }

        $this->userRepository->delete($id);

        if ($locale->lang == 'fa') {
          Flash::success('کاربر با موفقیت حذف شد.');
        }

        if ($locale->lang == 'en') {
          Flash::success('User deleted successfully.');
        }

        return redirect(route('users.index'));
    }
}
