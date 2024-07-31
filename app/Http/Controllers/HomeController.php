<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return view('website.pages.home');
    }

    public function eventIndex() {
        $events = [
            [
                'name' => 'Argoforestry',
                'picture' => 'img/home/events/argoforestry.jpg',
            ],
            [
                'name' => 'Donor',
                'picture' => 'img/home/events/donor.jpg',
            ],
            [
                'name' => 'Event Bola',
                'picture' => 'img/home/events/event_bola.jpg',
            ],
            [
                'name' => 'Event Company Award',
                'picture' => 'img/home/events/event_companyaward.jpg',
            ],
            [
                'name' => 'Event Family Day',
                'picture' => 'img/home/events/event_familyday.jpg',
            ],
            [
                'name' => 'Famday',
                'picture' => 'img/home/events/Famday.jpg',
            ],
            [
                'name' => 'Gorong Gorong',
                'picture' => 'img/home/events/gorong_gorong.jpg',
            ],
            [
                'name' => 'Penanaman Pohon',
                'picture' => 'img/home/events/Penanaman_Pohon.jpg',
            ],
        ];

        return view('website.pages.events')->with('events', $events);
    }
}
