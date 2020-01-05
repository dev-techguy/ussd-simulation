<?php

namespace App\Http\Controllers;

use App\Http\Requests\USSDRequest;
use Illuminate\Http\RedirectResponse;

class USSDController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }


    /**
     * start ussd simulation
     * @param USSDRequest $request
     * @return RedirectResponse
     */
    public function ussd(USSDRequest $request)
    {
        // check if the phone number is available
        toast('The demo is being prepared keep checking.', 'info');
        return redirect()->back();
    }
}
