<?php

namespace App\Http\Controllers;

use Redirect;
use Input;
use Illuminate\Http\Request;
use App\Http\Repositories\Album\AlbumContract;
use App\Http\Repositories\Profile\ProfileContract;
use App\Http\Repositories\AlbumProfile\AlbumProfileContract;
use App\Active_Album_Profile;



class AlbumController extends Controller
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
    public function index()
    {
        $albums = $this->albumModel->getAlbums();
        return view('view_albums')->with('albums', $albums);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create_album');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $album = $this->albumModel->createAlbum($request);
        return view('add_member')->with('album_data', ['id'=>$album->id, 'name'=>$album->name] );
    }

    /**
     * Assign members to an Album.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function post_add_member(Request $request)
    {
        $email = $request->email;
        $album_name = $request->album_name;
        $album_id = $request->album_id;
        $profile_id = $request->profile_id;

       if($email != $request->confirm_email){
         return view('add_member')->with('album_data', ['id'=>$album_id , 'name'=>$album_name])->with('error', 'Emails do not match');
       }

       if($this->profileModel->doesProfileExistByEmail($email)){
        $profile = $this->profileModel->getProfileByEmail($email);
        $profile_id = $profile->id;
       }else{
        return view('add_member')->with('album_data', ['id'=>$album_id , 'name'=>$album_name])->with('error', 'Email Not Attached To Any Profile');
       }

       if($this->albumProfileModel->IsUserPermitted($album_id , $profile_id)){
        return view('add_member')->with('album_data', ['id'=>$album_id , 'name'=>$album_name])->with('error', 'Member Already Exist');
       }

       $this->albumProfileModel->addProfileTOAlbum($album_id , $profile_id);
       return view('add_member')->with('album_data', ['id'=>$album_id , 'name'=>$album_name])->with('success', 'Member Added Successfully');
    }


    /**
     * Display members to an Album.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function album_members($album_id)
    {
        $album = $this->albumModel->getAlbum($album_id);
        $profiles = $this->profileModel->getAllProfiles($album_id);
        return view('view_members')->with('profiles', $profiles)->with('album', $album);
    }
    
    /**
     * Display members to an Album in a grid.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function album_members_grid($album_id)
    {
        $album = $this->albumModel->getAlbum($album_id);
        return view('members_grid')->with('album', $album);
    }

    /**
     * Display profiles of Album members in slides.
     *
     * @param  int  $albumid
     * @return \Illuminate\Http\Response
     */
    public function Profiles_from_album_init($album_id)
    {
        $profiles = $this->profileModel->getAllProfiles($album_id);
        foreach($profiles as $profile){
            Active_Album_Profile::create(['album_id' => $album_id, 'profile_id' => $profile['id']]);
        }
        $profile_id = Active_Album_Profile::find(1)->profile_id;
        $profile = $this->profileModel->getProfileByID($profile_id);
        if($this->profileModel->isUserExist($profile_id + 1)){
            $profile['hasNext'] = true;
        }else{
            $profile['hasNext'] = false;
        }
        $profile['album_id'] = $album_id;
        return view('profile_slide')->with('profile', $profile);
    }

    public function Profiles_from_album_next()
    {
        $album_id = Input::get('album_id');
        $profile_id = Input::get('profile');
        $profile = $this->profileModel->getProfileByID($profile_id);
        if($this->profileModel->isUserExist($profile_id + 1)){
            $profile['hasNext'] = true;
        }else{
            $profile['hasNext'] = false;
        }
        $profile['hasPrev'] = true;
        
        $profile['album_id'] = $album_id;
        return view('profile_slide')->with('profile', $profile);
    }

    public function Profiles_from_album_prev()
    {
        $album_id = Input::get('album_id');
        $profile_id = Input::get('profile');
        $profile_id -= 1;

        $profile = $this->profileModel->getProfileByID($profile_id);
        if($this->profileModel->isUserExist($profile_id - 1)){
            $profile['hasPrev'] = true;
        }else{
            $profile['hasPrev'] = false;
        }
        $profile['hasNext'] = true;
        $profile['album_id'] = $album_id;
        return view('profile_slide')->with('profile', $profile);
    }

    public function Profile_from_album($profile_id)
    {
        $profile = $this->profileModel->getProfileByID($profile_id);
        $albums = $this->albumProfileModel->getAllAlbums($profile_id);
        $profile['album'] = $albums;
        return view('profile')->with('profile', $profile);
    }
    /**
     * Search for albums.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function album_search(Request $request){
        return $this->albumModel->searchAlbum($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function speech($id){
        $album = $this->albumModel->getAlbum($id);
        return view('speech')->with('album', $album);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function cover_page($id){
        $album = $this->albumModel->getAlbum($id);
        return view('cover_page')->with('album', $album);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        return $this->profileModel->getProfileAlbums($this->albumProfileModel, 1);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update()
    {
        dd($this->profileModel->getRandomPictureFromEachProfile(1));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        dd($this->profileModel->getAllProfiles(1));
    }

    public function deleteAlbumFromProfile(){
        dd($this->albumProfileModel->removeProfileFromAlbum(1, 1));
    }

    public function createAlbum(Request $request){
        return $this->albumModel->createAlbum($request);
    }

    public function updateAlbum(Request $request){
        return $this->albumModel->updateAlbum($request, 2);
    }


    public function deleteAlbum(){
        return $this->albumModel->permanentDeleteAlbum(4);
    }

    public function getAlbum(){
        return $this->albumModel->getAlbum(1);
    }

    public function createProfile(Request $request){
        return $this->profileModel->createProfile($request, 1);
    }
}
