<?php

namespace App\Http\Controllers;

use App\Events\UserContacted;
use App\Http\Requests\MailRequest;

class ContactController extends Controller
{
    function index () {
        return view('contact');
    }

    /**
     * send email
     */
    function store(MailRequest $request) {
        UserContacted::dispatch($request);
        return redirect(route('contact.index'))->with('status', __('mail.send.success'));
    }
}
