<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return $this->dashboard();
    }

    public function dashboard()
    {
        return view('pages.admin.dashboard');
    }

    public function login()
    {
        return view('pages.admin.login', ['auth' => true]);
    }

    public function fullcalender()
    {
        return view('pages.admin.fullcalender');
    }

    public function modals()
    {
        return view('pages.admin.modals');
    }

    public function formElements()
    {
        return view('pages.admin.form-elements');
    }

    public function datatable()
    {
        return view('pages.admin.datatable');
    }
}
