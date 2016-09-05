<?php namespace ShawnSandy\PageKit\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Mail;

class PageKitController extends Controller
{


    /**
     * Profile name.
     *
     * @return Response
     */
    public function contactUs(Request $request)
    {
        Mail::send('page::emails.contact-info', ['data' => $request->all()], function ($m) use ($request) {
            $m->from($request->email, ': Contact request');
            $m->to('shawnasndy04@gmail.com', 'shawn sandy')->subject('Your Reminder!');
        });

        return back();
    }
}
