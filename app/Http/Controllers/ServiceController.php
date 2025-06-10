<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Service;
use App\Models\ServiceType;
use App\Models\Specialization;
use App\Models\User;
use Illuminate\View\View;

class ServiceController extends Controller
{
    public function index(): View
    {
        return view('services', [
            'services' => Service::all(),
            'categories' => Category::all(),
        ]);
    }

    public function createbyserviceNoparam()
    {
        $servicetypes = ServiceType::get();
        $data = ["servicetypes" => $servicetypes];
        return view('createorder.choose-serv', $data);

    }

    public function createbyserviceWithparam(Specialization $stuff_id)
    {
        $specs = User::where(
            ['role', '1'],
            ['id', $stuff_id],
        )->get();

        dd($stuff_id);
        return view('createorder.choose-serv', $data);
    }

    public function createorder(Service $service, User $stuff)
    {
        $stuffs = Stuff::get();
        $services = Service::get();
        // if ($service==0) {
        //     $services = Service::where();

        // }
        $data = ["services" => $services, 'stuffs' => $stuffs];
        return view('createorder.create-order', $data);
    }
}
