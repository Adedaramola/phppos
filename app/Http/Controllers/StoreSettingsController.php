<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class StoreSettingsController extends Controller
{
    public function index(): View
    {
        return view('app.settings');
    }
}