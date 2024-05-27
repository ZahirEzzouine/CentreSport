<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
class NavbarController extends Controller
{
    public function about()
    {
        return view("Navbar.about");
    }

    public function services()
    {
        $services=Service::all();
        return view("Navbar.services",compact("services"));
    }

    public function contact()
    {
        return view("Navbar.contact");
    }
}
