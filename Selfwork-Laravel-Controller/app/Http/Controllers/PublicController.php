<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function welcome()
    {
        $welcomeImg = '/media/Gemini_Generated_Image_3ekr1w3ekr1w3ekr.jpg';
        return view('welcome', compact('welcomeImg'));
    }
    public function home()
    {
        $destinations = [
            ['id' => 1, 'title' => 'Greece', 'img' => '/media/pexels-brokenadmiral_-493491871-32670846.jpg'],
            ['id' => 2, 'title' => 'Japan', 'img' => '/media/pexels-daniele-ursino-2150650320-31252768.jpg'],
            ['id' => 3, 'title' => 'USA', 'img' => '/media/pexels-kenneth-mayeden-1761442928-28133996.jpg'],
            ['id' => 4, 'title' => 'Holand', 'img' => '/media/pexels-mattia-sacco-306415812-17080606.jpg'],
            ['id' => 5, 'title' => 'France', 'img' => '/media/pexels-michael-james-beach-737731076-29857931.jpg'],
            ['id' => 6, 'title' => 'Switzerland', 'img' => '/media/pexels-suissounet-16458279.jpg'],
        ];

        $services = [
            ['id' => 1, 'title' => 'Rental', 'img' => '/media/Gemini_Generated_Image_azs43mazs43mazs4.jpg'],
            ['id' => 2, 'title' => 'Flights', 'img' => '/media/Gemini_Generated_Image_vne7z4vne7z4vne7.jpg'],
            ['id' => 3, 'title' => 'Hotels', 'img' => '/media/Gemini_Generated_Image_vzn0mjvzn0mjvzn0.jpg'],
            ['id' => 4, 'title' => 'Packages', 'img' => '/media/Gemini_Generated_Image_3ekr1w3ekr1w3ekr.jpg'],
        ];
        return view('home', compact('destinations', 'services'));
    }
    public function about()
    {
        return view('about');
    }
    public function detail($id)
    {
        $details = [
            ['id' => 1, 'title' => 'Greece', 'img' => '/media/pexels-brokenadmiral_-493491871-32670846.jpg', 'description' => 'Discover the anciant world'],
            ['id' => 2, 'title' => 'Japan', 'img' => '/media/pexels-daniele-ursino-2150650320-31252768.jpg', 'description' => 'Experience the far east'],
            ['id' => 3, 'title' => 'USA', 'img' => '/media/pexels-gabriel-tovar-2156003919-35227796.jpg', 'description' => 'Get to know the center of the world entretainement'],
            ['id' => 4, 'title' => 'Holand', 'img' => '/media/pexels-mattia-sacco-306415812-17080606.jpg', 'description' => 'Live the exotic and experience new things'],
            ['id' => 5, 'title' => 'France', 'img' => '/media/pexels-michael-james-beach-737731076-29857931.jpg', 'description' => 'Wake up to a sofisticated style of life'],
            ['id' => 6, 'title' => 'Switzerland', 'img' => '/media/pexels-suissounet-16458279.jpg', 'description' => 'The best of nature and discover the peacefulness of life'],
        ];

        foreach ($details as $detail) {
            if ($detail['id'] == $id) {

                return view('detail', ['detail' => $detail]);
            }
        }
    }
    public function service()
    {
        $destinations = [
            ['id' => 1, 'title' => 'Greece', 'img' => '/media/pexels-brokenadmiral_-493491871-32670846.jpg'],
            ['id' => 2, 'title' => 'Japan', 'img' => '/media/pexels-daniele-ursino-2150650320-31252768.jpg'],
            ['id' => 3, 'title' => 'USA', 'img' => '/media/pexels-kenneth-mayeden-1761442928-28133996.jpg'],
            ['id' => 4, 'title' => 'Holand', 'img' => '/media/pexels-mattia-sacco-306415812-17080606.jpg'],
            ['id' => 5, 'title' => 'France', 'img' => '/media/pexels-michael-james-beach-737731076-29857931.jpg'],
            ['id' => 6, 'title' => 'Switzerland', 'img' => '/media/pexels-suissounet-16458279.jpg'],
        ];
        return view('service', ['destinations' => $destinations]);
    }
}
