<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddStuffRequest;
use App\Http\Requests\Auth\RegisterRequest;
use App\Http\Requests\Auth\SignInRequest;
use App\Http\Requests\UpdateStuffRequest;
use App\Models\Employment;
use App\Models\Specialization;
use App\Models\Stuff;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;


class UserController extends Controller
{
    public function showRegisterForm(): View
    {
        return view('register');
    }

    public function register(RegisterRequest $request): RedirectResponse
    {
        $user = User::create([
            'name' => $request->input('name'),
            'phone' => $request->input('phone'),
            'surname' => $request->input('surname'),
            'patronymic' => $request->input('patronymic'),
            'password' => Hash::make($request->input('password')),
        ]);

        Auth::login($user, true);

        return redirect()->route('profile');
    }

    public function showSignInForm(): View
    {
        return view('sign-in');
    }

    public function signIn(SignInRequest $request): RedirectResponse
    {
        if (Auth::attempt($request->only(['phone', 'password']))) {
            if (Auth::user()->is_admin) {
                return redirect()->route('admin');
            }

            return redirect()->route('profile');
        }

        return redirect()->back()->with('error', 'Неправильный логин или пароль')->withInput();
    }

    public function logout(): RedirectResponse
    {
        Auth::logout();

        return redirect()->route('sign-in');
    }

    public function profile(): View
    {
        $employments = Employment::where('user_id', Auth::user()->id)->get();

        return view('profile', [
            'employments' => $employments,
        ]);
    }

    public function admin()
    {
        $newOrders = Order::where('status_id', 1)->get();
        $oldOrders = Order::where('status_id', "!=", 1)->get();
        $data = ['new_orders' => $newOrders,
            'old_orders' => $oldOrders];
        return view('admin', $data);
    }

    public function admin_stuff(): View
    {
        $stuffs = User::where('role_id', 2)->get();

        return view('admin.index', [
            'stuffs' => $stuffs,
        ]);
    }

    public function addStuffForm(): View
    {
        return view('admin.add-stuff', [
            'specializations' => Specialization::all(),
        ]);
    }

    public function addStuff(AddStuffRequest $request): RedirectResponse
    {
        $user = User::create([
            'name' => $request->input('name'),
            'phone' => $request->input('phone'),
            'surname' => $request->input('surname'),
            'patronymic' => $request->input('patronymic'),
            'experience' => $request->input('experience'),
            'password' => Hash::make($request->input('password')),
            'role_id' => 2,
        ]);

        $user->specializations()->attach($request->input('specializations'));

        return redirect()->route('admin');
    }

    public function editStuffForm(User $user): View
    {
        return view('admin.edit-stuff', [
            'user' => $user,
            'specializations' => Specialization::all(),
        ]);
    }

    public function editStuff(UpdateStuffRequest $request, User $user): RedirectResponse
    {
        $user->update([
            'name' => $request->input('name'),
            'phone' => $request->input('phone'),
            'surname' => $request->input('surname'),
            'patronymic' => $request->input('patronymic'),
            'experience' => $request->input('experience'),
        ]);

        $user->specializations()->sync($request->input('specializations'));

        return redirect()->route('admin');
    }

    public function deleteStuff(User $user): RedirectResponse
    {
        $user->delete();

        return redirect()->route('admin');
    }
}
