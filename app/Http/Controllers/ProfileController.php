<?php

namespace App\Http\Controllers;

use Redirect;
use Illuminate\Http\Request;
use App\Http\Repositories\Album\AlbumContract;
use App\Http\Repositories\Profile\ProfileContract;
use App\Http\Repositories\AlbumProfile\AlbumProfileContract;

class ProfileController extends Controller
{

    private $albumModel;
    private $profileModel;
    private $albumProfileModel;

    public function __construct(AlbumContract $albumContract, AlbumProfileContract $albumProfileContract,
    ProfileContract $profileContract){
        $this->albumProfileModel = $albumProfileContract;
        $this->albumModel = $albumContract;
        $this->profileModel = $profileContract;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function my_gallary($profile_id)
    {
        return view('gallary');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $profile = $this->profileModel->getProfileByID($id);
        return view('profile')->with('profile', $profile);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
