<?php

namespace App\Http\Controllers\Users\Vendor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BranchController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:branch');
    }

    public function index()
    {
        return view('branch');
    }
}
