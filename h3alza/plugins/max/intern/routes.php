<?php

use Max\Intern\Models\Intern;

Route::get("/interns", function(){
    return Intern::all();
});