<?php

namespace Rustedchip\RepairBusinessDonations\Http\Controllers;

use Illuminate\Routing\Controller;

class DonationController extends Controller
{
    public function index_donation()
    {
        return view('repairbusinessdonations::donations');
    }


}