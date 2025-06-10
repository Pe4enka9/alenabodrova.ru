<?php

namespace App\Http\Controllers;

use App\Http\Requests\StuffStoreRequest;
use App\Models\Employment;
use App\Models\Service;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class StuffController extends Controller
{
    public function index(): View
    {
        $stuffs = User::where('role_id', 2)->get();

        return view('stuff', [
            'stuffs' => $stuffs,
        ]);
    }

    public function create(User $user): View
    {
        return view('appointment', [
            'user' => $user,
            'services' => Service::all(),
        ]);
    }

    public function store(StuffStoreRequest $request, User $user): RedirectResponse
    {
        Employment::create([
            'user_id' => $request->user()->id,
            'stuff_specialization_id' => $user->specializations()->first()->id,
            'service_id' => $request->input('service_id'),
            'date' => $request->input('date'),
        ]);

        return redirect('/stuff');
    }
}
