<?php

namespace App\Http\Controllers;

use App\Mail\ContactUsMail;
use Carbon\Carbon;
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
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'contact_me_by_fax_only' => 'max:0',
            'my_name' => 'max:0',
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
            'submitted_at' => 'required|integer',
            'g-recaptcha-response' => 'required', // Add this line to ensure the reCAPTCHA response is present
        ]);

        $submittedAt = $request->input('submitted_at');
        if (Carbon::createFromTimestamp($submittedAt)->diffInSeconds(now()) < 5) {
            return redirect('/')->with(['message' => 'Form submitted too quickly.']);
        }

        $recaptchaResponse = $request->input('g-recaptcha-response');
        $client = new \GuzzleHttp\Client();
        $response = $client->post('https://recaptchaenterprise.googleapis.com/v1/projects/' . env('RECAPTCHA_PROJECT_ID') . '/assessments?key=' . env('RECAPTCHA_API_KEY'), [
            'json' => [
                'event' => [
                    'token' => $recaptchaResponse,
                    'siteKey' => env('RECAPTCHA_SITEKEY'),
                    'userIpAddress' => $request->ip(),
                    'expectedAction' => 'LOGIN'
                ]
            ],
        ]);

        $body = json_decode((string) $response->getBody(), true);
        if (!isset($body['tokenProperties']['valid']) || !$body['tokenProperties']['valid']) {
            return redirect('/')->with(['message' => 'reCAPTCHA validation failed. Please try again.']);
        }

        Mail::to('customdenlie@gmail.com')->send(new ContactUsMail($data));
//    Mail::to('breakinggrounddance@hotmail.com')->send(new ContactUsMail($data));

        return redirect('/')->with('message', 'Success! Thanks for your message. We\'ll be in touch.');
    }


}
