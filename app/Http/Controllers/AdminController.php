<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    function index()
    {
       echo "Hallo, Selamat datang"; 
       echo "<h1>" . Auth::user()->name . "</h1>";
       echo "<a href='logout'>Logout >></a>";
    }
    function admin_govermnet()
    {
       echo "Hallo, Selamat datang di halaman ADMIN E-GOVERMENT"; 
       echo "<h1>" . Auth::user()->name . "</h1>";
       echo "<a href='logout'>Logout >></a>";
    }
    function admin_budaya()
    {
       echo "Hallo, Selamat datang di halaman ADMIN BUDAYA"; 
       echo "<h1>" . Auth::user()->name . "</h1>";
       echo "<a href='logout'>Logout >></a>";
    }
    function admin_ekonomi()
    {
       echo "Hallo, Selamat datang di halaman ADMIN EKONOMI"; 
       echo "<h1>" . Auth::user()->name . "</h1>";
       echo "<a href='logout'>Logout >></a>";
    }
    function admin_pendidikan()
    {
       echo "Hallo, Selamat datang di halaman ADMIN PENDIDIKAN"; 
       echo "<h1>" . Auth::user()->name . "</h1>";
       echo "<a href='logout'>Logout >></a>";
    }
}
