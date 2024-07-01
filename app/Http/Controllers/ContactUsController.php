<?php

namespace App\Http\Controllers;

use App\Mail\ContactUsMail;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Anhskohbo\NoCaptcha\NoCaptcha;

class ContactUsController extends Controller
{

    public function create()
    {
        return view('contact.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = request()->validate([
            'contact_me_by_fax_only' => 'max:0',
            'my_name' => 'max:0',
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
            'g-recaptcha-response' => 'required|captcha',
        ]);

        $recaptchaResponse = $request->input('g-recaptcha-response');
        $client = new Client();
        $response = $client->post('https://www.google.com/recaptcha/api/siteverify', [
            'form_params' => [
                'secret' => env('RECAPTCHA_SECRET'),
                'response' => $recaptchaResponse,
                'remoteip' => $request->ip(),
            ],
        ]);

        $body = json_decode((string) $response->getBody());
        if (!$body->success) {
            return back()->withErrors(['g-recaptcha-response' => 'ReCAPTCHA validation failed. Please try again.']);
        }

        Mail::to('customdenlie@gmail.com')->send(new ContactUsMail($data));
//        Mail::to('breakinggrounddance@hotmail.com')->send(new ContactUsMail($data));

        return redirect('/')->with('message', 'Thanks for your message. We\'ll be in touch.');

    }


}
