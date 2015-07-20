<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    public function index()
    {
        $about = array(
            'title' => 'Sobre o Blog',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus rutrum malesuada nibh id tristique. Mauris diam augue, convallis non mattis ut, posuere eget mauris. Nullam tincidunt sem nisi, et congue orci feugiat et. Cras mollis quis nulla nec aliquet. In blandit tincidunt sem sed porta. Nunc vitae ipsum in sem tincidunt pharetra in volutpat odio. Suspendisse fringilla eros augue, at dictum dolor commodo a. Sed vitae venenatis enim, a elementum dui.
            Curabitur aliquet, dolor a consectetur consequat, mauris sapien commodo sapien, eget mattis diam urna ac est. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aliquam sagittis nisl id consequat finibus. Pellentesque eget erat a libero tincidunt tempus. Nulla tincidunt tellus felis, vitae lacinia sapien faucibus ut.'
        );

        return view('about', ['content' => $about]);
    }
}
