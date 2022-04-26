<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Thesis;
use App\Models\User;
use App\Models\Visit;
use Carbon\Carbon;
use Illuminate\Http\Request;
use DateTime;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        // identify time now
        $dt = new DateTime();
        $hour = $dt->format('H');
        // $dayTerm = ($hour > 17) ? "Evening" : (($hour > 12) ? "Afternoon" : "Morning");

        if ($hour > 6 && $hour <= 11) {
            $dayTerm = "Good Morning";
        } else if ($hour > 11 && $hour <= 17) {
            $dayTerm = "Good Afternoon";
        } else if ($hour > 17 && $hour <= 23) {
            $dayTerm = "Good Evening";
        } else {
            $dayTerm = "Why aren't you asleep?  Are you programming?";
        }

        $users = User::count();

        $new_users = User::whereMonth('created_at', '=', Carbon::now()->month)
            ->count();

        $total_thesis = Thesis::count();

        $active_thesis = Thesis::where('thesis_status', 'Active')
            ->count();


        $popular_items = Thesis::take(6)->where('thesis_status', 'Active')->orderBy('viewers', 'DESC')->get();


        $page_visits = Visit::select([
            // This aggregates the data and makes available a 'count' attribute
            DB::raw('count(visit_id) as `count`'),
            // This throws away the timestamp portion of the date
            DB::raw('DATE(visit_date) as day')
            // Group these records according to that day
        ])->groupBy('day')
            // And restrict these results to only those created in the last week
            ->where('visit_date', '>=', Carbon::now()->subWeeks(1))
            ->get();

        return view('pages.admin.dashboard', [
            'dayTerm' => $dayTerm,
            'users' => $users,
            'new_users' => $new_users,
            'total_thesis' => $total_thesis,
            'active_thesis' => $active_thesis,
            'page_visits' => $page_visits,
            'popular_items' => $popular_items,
        ]);
    }
}
