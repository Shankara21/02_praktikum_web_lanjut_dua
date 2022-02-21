<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        echo 'Selamat Datang';
    }
    public function about()
    {
        echo 'Muhammad Lazuardi Timur (2041720114)';
    }
    public function articles($id)
    {
        echo 'Artikel ke-' . $id;
    }
}
