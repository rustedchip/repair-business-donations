<?php

Route::group(['namespace' => 'RepairBusinessDonations\Controllers'], function()
{
    Route::get('donation', ['uses' => 'DonationController@index']);
});