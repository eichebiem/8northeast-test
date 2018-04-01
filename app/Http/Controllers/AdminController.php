<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Workshop;
use App\Stat;

class AdminController extends Controller
{

    //middleware


    public function login()
    {
        return view('admin.login');
    }

    public function dashboard()
    {
        $unread_workshop = Workshop::where('unread', 1)->count();

        $unread_stat = Stat::where('unread', 1)->count();

        return view('admin.dashboard', compact('unread_workshop', 'unread_stat'));
    }

    public function workshops()
    {
        $workshops = Workshop::latest()->paginate(10);

        return view('admin.training_workshops', compact('workshops'));
    }

    public function workshop_details(Workshop $data)
    {
        // dd($id);
        return view('admin.workshops_details', compact('data'));
    }

    public function workshop_details_delete($id)
    {
        Workshop::destroy($id);
        return redirect('/admin/training_workshops');
    }


    public function stats()
    {
        $stats = Stat::latest()->paginate(10);
        
        return view('admin.statistical_analysis', compact('stats'));
    }

    public function stats_details(Stat $data)
    {
        return view('admin.stats_details', compact('data'));
    }

    public function stats_details_delete($id)
    {
        Stat::destroy($id);
        return redirect('/admin/statistical_analysis');
    }


}
