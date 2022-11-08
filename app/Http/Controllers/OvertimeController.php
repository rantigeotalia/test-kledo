<?php

namespace App\Http\Controllers;
use App\Models\Overtime;
use Illuminate\Http\Request;
use Carbon\Carbon;

class OvertimeController extends Controller
{
    public function store(StoreOvertime $request)
    {
        $overtime = Overtime::create($request->all());
        return [
            "status" => 1,
            "data" => $overtime
        ];
    }

    public function update(StoreOvertime $request, Overtime $overtime)
    {

        $overtime->update($request->all());
        return [
            "status" => 1,
            "data" => $overtime,
            "msg" => "Overtime updated successfully"
        ];
    }

    public function getOverTime(StoreOvertime $request)
    {
        $time_cals = Overtime::whereMonth('date', '=', $request->date->format('M'))->get();
        foreach($time_cals as $data){
            $res[] = [
                $start = Carbon::parse($data->time_started);
                $end = Carbon::parse($data->time_ended);
                $hours = $end->diffInHours($start);
                $minutes = $end->diffInMinutes($start);
                if($minutes >= 45){
                    $hours+1;
                }

            ]
        
        }

    }



}
