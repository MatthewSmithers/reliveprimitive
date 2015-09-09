<?php

namespace App\Http\Controllers;

use Mail;
use Illuminate\Http\Request;
use App\Http\Requests\ContactFormRequest;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Redirect;

class PagesController extends Controller
{


     /**
     * Display the welcome page.
     *
     * @return Response
     */
    public function welcome()
    {
        $title = "Primitive School | Christian.";
        return view('pages.welcome', compact('title'));
    }



    /**
     * Display the about page.
     *
     * @return Response
     */
    public function about()
    {
        $title = "Survival | Etc.";
        return view('pages.about', compact('title'));
    }



    /**
     * Display a contact form page.
     *
     * @return Response
     */
    public function create()
    {
        $title = "Contact Us";
        return view('pages.contact', compact('title'));
    }


    /**
     * Display an enrollment form page.
     *
     * @return Response
     */
    public function enroll()
    {
        $title = "Enrollment Form";
        return view('pages.enroll', compact('title'));
    }

    /**
     * Display a registration page that goes to PayPal.
     *
     * @return Response
     */
    public function register()
    {
        $title = "Registration Here";
        return view('pages.register', compact('title'));
    }


   /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(ContactFormRequest $request)
    {
        \Mail::send('emails.contact',
            array(
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'user_message' => $request->get('user_message')
            ), function($message)
            {
                $message->from('admin@reliveprimitive.com');
                $message->to('matthewsmithers@yahoo.com', 'Admin')->subject('survival classes');
            });
        return \Redirect::route('contact')->with('message', 'Thanks for contacting us!');
    }
}
