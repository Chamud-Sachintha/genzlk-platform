<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SocialMedia;

class SocialMediaController extends Controller
{
    function addNewScocialMediaLinks(Request $socialMediaDetails) {
        $socialMediaTable = new SocialMedia();

        $socialMediaTable->facebook = ($socialMediaDetails->fb == null ? "N" : $socialMediaDetails->fb);
        $socialMediaTable->twitter = ($socialMediaDetails->tw == null ? "N" : $socialMediaDetails->tw);
        $socialMediaTable->linkedin = ($socialMediaDetails->li == null ? "N" : $socialMediaDetails->li);
        $socialMediaTable->tiktok = ($socialMediaDetails->tk == null ? "N" : $socialMediaDetails->tk);

        $socialMediaTable->save();
        return redirect('/app/users/add');
    } 
}
