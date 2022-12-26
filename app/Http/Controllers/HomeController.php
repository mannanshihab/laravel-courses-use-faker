<?php

namespace App\Http\Controllers;
use App\Models\Series;
use App\Models\Course;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function index(){
        $series = Series::take(4)->get();
        $courses = Course::take(12)->get();
        return view('welcome', [
            'series' => $series,
            'courses' => $courses,
        ]);
    }

    public function dashboard(){
        if(Auth::user()->type === 1){
            return view('dashboard');
        }else{
            return redirect()->route('home');
        }
    }
}
