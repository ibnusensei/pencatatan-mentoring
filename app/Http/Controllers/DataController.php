<?php

namespace App\Http\Controllers;

use App\Models\Mentor;
use App\Models\Program;
use App\Models\User;
use Illuminate\Http\Request;

class DataController extends Controller
{
    public function index()
    {
        // all user
        $users = User::with('mentors')->get();

        // mentor with user detail
        $mentors = Mentor::with(['user', 'position', 'program', 'daily_logs'])->get();

        // program has many mentor
        $programs = Program::with('mentors.daily_logs')->get();

        return response()->json($programs);
    }
}
