<?php

use Illuminate\Support\Facades\Route;

use Rustedchip\RepairBusinessDonations\Http\Controllers\DonationController;

Route::get('/donations', [DonationController::class, 'index_donation'])->name('index_donation')->middleware('admin')->middleware('verified')->middleware('notification');