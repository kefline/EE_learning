<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ChartController extends Controller
{
    public function getUserActivity(Request $request)
    {
        $type = $request->input('type'); // 'students' or 'teachers'
        $timePeriod = $request->input('timePeriod'); // 'thisMonth', 'lastMonth', 'thisYear'

        // Default to current month
        $startDate = now()->startOfMonth();
        $endDate = now();

        // Adjust the date range based on the timePeriod selected
        switch ($timePeriod) {
            case 'lastMonth':
                $startDate = now()->subMonth()->startOfMonth();
                $endDate = now()->subMonth()->endOfMonth();
                break;
            case 'thisYear':
                $startDate = now()->startOfYear();
                break;
        }

        // Fetch data based on type
        if ($type == 'students') {
            $data = User::where('role_id', '1')->whereBetween('created_at', [$startDate, $endDate])->count();
        } elseif ($type == 'teachers') {
            $data = User::where('role_id', '2')->whereBetween('created_at', [$startDate, $endDate])->count();
        }

        return response()->json([
            'labels' => ['Count'], // Adjust the labels as needed
            'values' => [$data],    // The count to be displayed in the chart
        ]);
    }
}
