<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Series;

class SeriesController extends Controller
{
    //
    public function index($id)
    {
        $series = Series::where('id', $id)->first();
        $courses = $series->courses()->paginate(3);

        // return $series;

        return view ('series.single',[
            'series' => $series,
            'courses' => $courses
        ]);
    }
}
