<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavbarController extends Controller
{
    public function about()
    {
        return view("Navbar.about");
    }

    public function services()
    {
        return view("Navbar.services");
    }

    public function contact()
    {
        return view("Navbar.contact");
    }
}
