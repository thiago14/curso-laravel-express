<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
       $posts = array(
            0 => array(
                'title' => 'Titulo do Post 1',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus rutrum malesuada nibh id tristique. Mauris diam augue, convallis non mattis ut, posuere eget mauris. Nullam tincidunt sem nisi, et congue orci feugiat et. Cras mollis quis nulla nec aliquet. In blandit tincidunt sem sed porta. Nunc vitae ipsum in sem tincidunt pharetra in volutpat odio. Suspendisse fringilla eros augue, at dictum dolor commodo a. Sed vitae venenatis enim, a elementum dui.'
            ),
            1 => array(
                'title' => 'Titulo do Post 2',
                'content' => 'Curabitur aliquet, dolor a consectetur consequat, mauris sapien commodo sapien, eget mattis diam urna ac est. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aliquam sagittis nisl id consequat finibus. Pellentesque eget erat a libero tincidunt tempus. Nulla tincidunt tellus felis, vitae lacinia sapien faucibus ut.'
            ),
            2 => array(
                'title' => 'Titulo do Post 3',
                'content' => 'Praesent venenatis mauris odio, vel efficitur ligula viverra et. Morbi a rutrum urna. Duis dictum, tortor et maximus commodo, felis felis pharetra lorem, sed accumsan lacus orci sit amet nisi. Pellentesque vel laoreet metus. Praesent tempus metus nec enim sodales, id hendrerit mauris pellentesque.'
            ),
            3 => array(
                'title' => 'Titulo do Post 4',
                'content' => 'Praesent venenatis mauris odio, vel efficitur ligula viverra et. Morbi a rutrum urna. Duis dictum, tortor et maximus commodo, felis felis pharetra lorem, sed accumsan lacus orci sit amet nisi. Pellentesque vel laoreet metus. Praesent tempus metus nec enim sodales, id hendrerit mauris pellentesque. Vestibulum id ornare diam, a dapibus mauris. Duis vitae suscipit velit, ut pharetra sapien.'
            ),
        );

        return view('home',array('posts'=> $posts));
    }
}
