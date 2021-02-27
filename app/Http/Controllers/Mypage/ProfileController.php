<?php

namespace App\Http\Controllers\Mypage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Mypage\Profile\EditRequest;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function showEditProfileForm()
    {
        $user = Auth::user();

        return view('mypage.edit_profile_form')->with('user',$user);
    }

    public function editProfile(EditRequest $request)
    {
        $user = Auth::user();
        $user->name = $request->name;

        if ($request->has('avatar')) {
            $file_name = Storage::putFile('public/avatars', $request->file('avatar'));
            $user->avatar_file_name = basename($file_name);
        }
        $user->save();

        return redirect()->back()
            ->with('status', 'プロフィールを変更しました');
    }
}
