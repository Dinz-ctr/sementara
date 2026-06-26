<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
    if (auth()->check()){     
        $user = auth()->user();
        
        if ($user->role == 'admin') {
            return view('admin.dashboard');
        }elseif ($user->role =='guru'){
            return view('guru.dashboard');
        }
    }
        //buat siswa loginnya ke arah dasboard pada umumnya
        return view('dashboard.index', [
        'totalArtikel' => 0,
        'totalQuestion' => 0,
        'totalQuiz' => 0,
        'totalForum' => 0,
        ]);
    }
}