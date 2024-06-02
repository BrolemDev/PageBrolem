<?php

namespace App\Http\Controllers;

use App\Mail\MailOutput;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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

    public function send_mail()
    {
        try {
            $details = [
                'title' => 'Correo de Prueba',
                'body' => 'Este es un correo de prueba desde Laravel.'
            ];

            Mail::to('valenestradam1@gmail.com')->send(new MailOutput($details));

            // Si el envío del correo es exitoso, retornamos un mensaje de éxito
            return response()->json(['message' => 'Correo enviado con éxito']);
        } catch (\Exception $e) {
            // Si hay un error, retornamos el mensaje de error capturado
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
