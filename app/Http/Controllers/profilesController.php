<?php

namespace App\Http\Controllers;
use App\User;
use App\profile;
use Auth;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class profilesController extends Controller
{
    public function __construct(){
        return $this->middleware('auth');
    }

    public function index(User $user)
    {
        // $user = User::where('id', $id)->with('profile')->first();
        $follows = (auth()->user()) ? auth()->user()->following->contains($user->id) : false;
        
        // return $user;
        return view('profiles.index',compact('user', 'follows'));


    }

    public function edit(User $user)
    {
         // $this->authorize('update', $user->profile);

    	return view ('profiles.edit', compact('user'));
    }


   public function update(Request $request, User $user)
   {
     $data = request()->validate([
     'title'            => 'required',
     'description'      => 'required',
     'url'              => 'url',
     'image'            => '',
     ]);
     
    

     if (request('image')) {
         $imagePath=request('image')->store('profile','public');
         
         $image = Image::make(public_path("storage/{$imagePath}"))->fit(1000, 1000);
         $image->save();
     }

    //   auth()->user->profile->update(array_merge($data,
    //     ['image' => $imagePath]
    // ));

        $userProfile = Profile::where("user_id", Auth::user()->id)->first();
        if ($userProfile == null) {
            return redirect()->back()->with("error","you are trying to edit an invaild account");
        }

        
        $userProfile->title = $request->title;
        $userProfile->description = $request->description;
        $userProfile->url = $request->url;
        $userProfile->image = $imagePath;

     $userProfile->update();

     return redirect("/profile/{$user->id}");
   }
}
