<?php

namespace App\Http\Controllers;

use App\Http\Requests\StuffStoreRequest;
use App\Models\Category;
use App\Models\Employment;
use App\Models\Length;
use App\Models\Service;
use App\Models\Specialization;
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
        $specializations = Specialization::whereIn('id', $user->specializations->pluck('id'))->get();
        $lengths = Length::all();

        return view('appointment', [
            'user' => $user,
            'categories' => Category::all(),
            'specializations' => $specializations,
            'lengths' => $lengths,
        ]);
    }

    public function store(StuffStoreRequest $request, User $user): RedirectResponse
    {
        $service = Service::where('specialization_id', $request->input('specialist'))
            ->where('subcategory_id', $request->input('subcategory'))
            ->where('length_id', $request->input('length'))
            ->first();

        Employment::create([
            'user_id' => $request->user()->id,
            'stuff_specialization_id' => $user->specializations()->first()->id,
            'service_id' => $service->id,
            'date' => $request->input('date'),
        ]);

        return redirect('/stuff');
    }
}
