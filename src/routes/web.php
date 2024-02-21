<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Rustedchip\RepairBusinessDonations\Http\Controllers\DonationController;

Route::get('/donations', [DonationController::class, 'index_donation'])->name('index_donation')->middleware('admin')->middleware('verified')->middleware('notification')->middleware('web');