<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;



// Time Formate
function changeDateFormate($date, $date_format)
{
    return \Carbon\Carbon::createFromFormat('Y-m-d', $date)->format($date_format);
}

// Year Month Formated
function yearMonth()
{
}

function productImagePath($image_name)
{
    return public_path('images/products/' . $image_name);
}

function set_active($route)
{
    if (is_array($route)) {
        return in_array(Request::path(), $route) ? 'active' : '';
    }
    return Request::path() == $route ? 'active' : '';
}

function active($route)
{
    return Route::is($route) ? 'active' : '';
}
