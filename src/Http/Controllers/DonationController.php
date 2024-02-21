<?php

namespace Rustedchip\RepairBusinessDonations\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class DonationController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

   

    public function index_donation()
    {
        return view('repair-business-donations::index-donation');
    }


}