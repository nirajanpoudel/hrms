<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Holiday;
use Carbon\Carbon;
class HolidayController extends Controller
{
    protected $holiday;


    public function __construct(Holiday $holiday){
        $this->holiday = $holiday;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(Request $request)
    {   
        $month = $this->getMonth($request);
       $holidays = $this->holiday->month($month)->get();
     

       return  $holidays;
       return view('holiday.index',compact('holidays'));
    }

    protected function getMonth(Request $request,$month=null){
        $month = 0;
        if($request->has('month')){
                $month = $request->get('month');            
           }  

        if($month>12 || $month<1){
               $month = 1;
           }
           return $month;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
