<?php

namespace App\Http\Controllers;

use App\Horse;
use Illuminate\Http\Request;
use DB;

class HorsesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $horses = Horse::all()
        ->where('archive_horses', '=', 0)
        ->sortBy('name_horses');
        return view('horses/listHorses', ['horses' => $horses]);
    }

    public function indexArchive()
    {
        $horses = Horse::all()
        ->where('archive_horses', '=', 1)
        ->sortBy('name_horses');
        return view('horses/listHorsesArchive', ['horses' => $horses]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $nameHorse = request('name_horses');
        $birthdayHorse = request('birthday_horses');
        $dateStartHorse = request('date_start_horses');
        $breedHorse = request('breed_horses');
        $colorHorse = request('color_horses');
        $dateEndHorse = NULL;
        $archiveHorse = 0;

        // $horses = DB::table('horses')->get();
        // foreach($horses as $horse)
        // {
        //     if( $horse->name_horses === $nameHorse && $horse->birthday_horses === $birthdayHorse )
        //     {
        //         echo 'Equidé déjà enregistré';
        //         header('refresh: 2; url = /newHorse');
        //         die;
        //     }
        // }
        
        DB::table('horses')->insert(
           array('name_horses' => $nameHorse,
               'birthday_horses' => $birthdayHorse,
                'date_start_horses' => $dateStartHorse,
                'breed_horses'=> $breedHorse,
                'color_horses' => $colorHorse,
                'date_end_horses' => $dateEndHorse,
                'archive_horses' => $archiveHorse)
                   
            );

        return 

        header('refresh: 1; url = listHorses');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Horse  $horse
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $horses = DB::table('horses')->where('id', '=', $id)->get();
        return view('horses/horse', ['id' => $id [0], 'horses' => $horses]);
    }

    public function showArchive($id)
    {
        $horses = DB::table('horses')->where('id', '=', $id)->get();
        return view('horses/horseArchive', ['id' => $id [0], 'horses' => $horses]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Horse  $horse
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $horses = DB::table('horses')->where('id', '=', $id)->get();
        return view('horses/modifyHorse', ['id' => $id [0], 'horses' => $horses]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Horse  $horse
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $nameHorse = request('name_horses');
        $birthdayHorse = request('birthday_horses');
        $dateStartHorse = request('date_start_horses');
        $breedHorse = request('breed_horses');
        $colorHorse = request('color_horses');
        $archiveHorse = request('archive_horses');
        $dateEndHorse = request('date_end_horses');

        if ($archiveHorse === "on") {
            $archiveHorse = 1 ;
        } else {
            $archiveHorse = 0 ;
        }

        DB::table('horses')->where('id', '=', $id)->update(
            array('name_horses' => $nameHorse,
                'birthday_horses' => $birthdayHorse,
                 'date_start_horses' => $dateStartHorse,
                 'breed_horses'=> $breedHorse,
                 'color_horses' => $colorHorse,
                 'archive_horses' => $archiveHorse,
                 'date_end_horses' => $dateEndHorse)
             );

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Horse  $horse
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
        $horses = DB::table('horses')->where('id', '=', $id)->first();
        DB::table('horses')->where('id', $id)->delete();

        return redirect()->route('listHorses')->with('add', 'Cet équidé a bien été supprimé.');
    }
}
