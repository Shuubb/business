<?php

    namespace App\Http\Controllers;

    class UserPagesController extends Controller
    {

        public function __construct()
        {
            $this->middleware('auth');
        }

    }

?>