<?php

namespace Rustedchip\RepairBusinessDonations\Http\Controllers;

use App\Http\Controllers\Controller;

class DonationController extends Controller
{
   

    public function index_donation()
    {
        return view('repair-business-donations::index-donation');
    }


}