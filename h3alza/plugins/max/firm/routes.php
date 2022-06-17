<?php 

use Max\Firm\Models\Firm;

Route::get("/firms", function(){
    return Firm::all();
});