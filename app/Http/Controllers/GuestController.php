<?php

    namespace App\Http\Controllers;

    class GuestController extends Controller
    {

        public function getIndex()
        {
            return view('pages/index');
        }

        public function getContact()
        {
            return view('pages/contact');
        }

    }

?>