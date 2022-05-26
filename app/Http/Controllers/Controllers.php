<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Score;

class Controllers extends Controller
{
    public function userLogin() {
        return view('userlogin');
    }

    public function login(Request $req) {
        return view('userdesktop');
    }

    public function userDesktop() {
        return view('userdesktop');
    }

    public function homePage() {
        return view('homepage');
    }

    public function exercises() {
        return view('exercises');
    }

    public function quiz() {
        return view('quiz');
    }

    public function results() {
        $score = Score::orderBy('id', 'desc')->first();
        return view('results', compact('score'));
    }

    public function recordScore(Request $req) {
        $s = new Score;
        $s->score = $req->score;
        $s->save();
        return $this->results();
    }
}
