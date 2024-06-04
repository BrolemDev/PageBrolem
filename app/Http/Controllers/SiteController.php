<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\MailOutput;
use App\Mail\MailTeam;

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

    public function beans()
    {
        $data = [
            'title' => 'BEANS'
        ];
        return view('beans', $data);
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

    public function send_mail(Request $request)
    {
        try {
            $details = [
                'date' => date('m-d-Y'), // Fecha actual
                'name' => $request->input('name'),
                'company' => $request->input('company'),
                'email' => $request->input('email'),
                'phone' => $request->input('phone'),
                'message' => $request->input('message')
            ];

            Mail::to($request->input('email'))->send(new MailOutput());

            Mail::to('test@brolem.pe')->send(new MailTeam($details));

            // Si el envío del correo es exitoso, retornamos un mensaje de éxito
            return response()->json(['message' => 'Correo enviado con éxito']);
        } catch (\Exception $e) {
            // Si hay un error, retornamos el mensaje de error capturado
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
