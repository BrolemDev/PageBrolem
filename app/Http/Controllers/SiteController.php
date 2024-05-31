<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Home'
        ];
        return view('home', $data);
    }
    public function about_us()
    {
        $data = [
            'title' => 'About'
        ];
        return view('about', $data);
    }

    public function grains()
    {
        $data = [
            'title' => 'ANDEAN GRAINS'
        ];
        return view('grains', $data);
    }

    public function pulses()
    {
        $data = [
            'title' => 'PULSES'
        ];
        return view('pulses', $data);
    }

    public function our_process()
    {
        $data = [
            'title' => 'OUR PROCESS'
        ];
        return view('process', $data);
    }

    public function contact_us()
    {
        $data = [
            'title' => 'CONTACT US'
        ];
        return view('contact');
    }
}
