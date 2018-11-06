<?php

namespace App\Http\Controllers;

use App\Position;
use App\User;
use Illuminate\Http\Request;
use DB;
use App\Quotation;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = \DB::table('users')
            ->leftJoin('positions', 'positions.id', '=', 'users.position_id')
            ->leftJoin('department', 'department.id', '=', 'users.department_id')
            ->leftJoin('divisions', 'divisions.id', '=', 'users.division_id')
            ->leftJoin('teams', 'teams.id', '=', 'users.team_id')
            ->leftJoin('offices', 'offices.id', '=', 'users.office_id')
            ->get();
        return view('list', ['users' => $users]);
    }
    public function profile($id)
    {
        $users = \DB::table('users')->find($id);
        $position = \DB::table('positions')->where('id', $users->position_id)->first();
        $department = \DB::table('department')->where('id', $users->department_id)->first();
        $division = \DB::table('divisions')->where('id', $users->division_id)->first();
        $team = \DB::table('teams')->where('id', $users->team_id)->first();
        $office = \DB::table('offices')->where('id', $users->office_id)->first();
        return view('profile', ['users' => $users, 'positions' => $position, 'department' => $department, 'division' => $division, 'team' => $team, 'office' => $office]);
    }
}
