<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('website.pages.home');
    }

    public function eventIndex()
    {
        $events = [
            (object)[
                'name' => 'Argoforestry',
                'picture' => 'website/img/home/events/argoforestry.jpg',
            ],
            (object)[
                'name' => 'Donor',
                'picture' => 'website/img/home/events/donor.jpg',
            ],
            (object)[
                'name' => 'Event Bola',
                'picture' => 'website/img/home/events/event_bola.jpg',
            ],
            (object)[
                'name' => 'Event Company Award',
                'picture' => 'website/img/home/events/event_companyaward.jpg',
            ],
            (object)[
                'name' => 'Event Family Day',
                'picture' => 'website/img/home/events/event_familiyday.jpg',
            ],
            (object)[
                'name' => 'Famday',
                'picture' => 'website/img/home/events/Famday.jpg',
            ],
            (object)[
                'name' => 'Gorong Gorong',
                'picture' => 'website/img/home/events/gorong_gorong.jpg',
            ],
            (object)[
                'name' => 'Penanaman Pohon',
                'picture' => 'website/img/home/events/Penanaman_Pohon.jpg',
            ],
        ];

        return view('website.pages.events')->with('events', $events);
    }

    public function companySummary()
    {
        $data = [
            (object)[
                'title' => 'Company Name',
                'content' => 'PT Aisin Indonesia',
            ],
            (object)[
                'title' => 'Capital',
                'content' => 'IDR.146,497,000,000 (Indonesian Rupiah)',
            ],
            (object)[
                'title' => 'Head Office',
                'content' => 'East Jakarta Industrial Park Plot 5J, Cikarang Selatan, Bekasi West Java, Indonesia',
            ],
            (object)[
                'title' => 'Representative',
                'content' => 'Mr. PB Ariawan Purwonugroho, President',
            ],
            (object)[
                'title' => 'Employees',
                'content' => '1,159 people by April 2024',
            ],
            (object)[
                'title' => 'Businesses',
                'content' => 'Manufacture of automotive parts (clutch covers, clutch disks, door latches, door checks, door hinges, door frames, window regulators, hood latches, inside/outside handles, intake manifolds, etc.)',
            ],

        ];

        return view('website.pages.about.company_summary')->with('data', $data);
    }

    public function managementMessage()
    {
        return view('website.pages.about.management_message');
    }

    public function executives()
    {
        $data = [
            (object) [
                'category' => 'Board of Directors',
                'members' => [
                    (object) [
                        'name' => 'Moritaka Yoshida',
                        'position' => 'President',
                        'picture' => 'website/img/home/executives/President.png'
                    ],
                    (object) [
                        'name' => 'Shintaro Ito',
                        'position' => 'Directors',
                        'picture' => 'website/img/home/executives/Director-ShintaroIto.png',
                    ],
                    (object) [
                        'name' => 'Yoshihisa Yamamoto',
                        'position' => 'Directors',
                        'picture' => 'website/img/home/executives/Director-Yoshihisa.png',
                    ],
                    (object) [
                        'name' => 'Masahiro Nishikawa',
                        'position' => 'Directors',
                        'picture' => 'website/img/home/executives/Director-Masahiro.png',
                    ],
                    (object) [
                        'name' => 'Michiyo Hamada',
                        'position' => 'Directors',
                        'picture' => 'website/img/home/executives/Director-Michiyo.png',
                    ],
                    (object) [
                        'name' => 'Seiichi Shin',
                        'position' => 'Directors',
                        'picture' => 'website/img/home/executives/Director-Seiichi.png',
                    ],
                    (object) [
                        'name' => 'Koji Kobayashi',
                        'position' => 'Directors',
                        'picture' => 'website/img/home/executives/Director-Koji.png',
                    ],
                    (object) [
                        'name' => 'Tsuguhiko Hoshino',
                        'position' => 'Directors',
                        'picture' => 'website/img/home/executives/Director-Tsuguhiko.png',
                    ],
                ]
            ]
        ];

        return view('website.pages.about.executives')->with('data', $data);
    }

    public function companyHistory()
    {
        $profile = (object) [
            'title' => 'WHAT IS PT AISIN INDONESIA?',
            'content' => 'PT AISIN Indonesia is a renowned automotive manufacturer that 
                specializes in producing various essential components such as 
                Clutch Cover, Clutch Disc, Door Lock, Door Frame, Door Hinge, 
                Door Handle, Hood Lock, Hybrid Damper, Intake Manifold, 
                and Cover Head Cylinder. Our company is dedicated to delivering 
                high-quality products that contribute to the comfort and 
                safety of drivers. We take pride in supporting car makers by 
                providing them with valuable solutions for an enhanced driving experience.',
        ];

        $history = [
            (object) [
                'year' => '1996',
                'title' => 'BIRTH OF PT AISIN INDONESIA',
                'description' => 'After ten years of cooperation between PT Dharma Sarana 
                    Perdana and Aisin Seiki Co., Ltd. – in the form of technical assistance. 
                    They formed a joint venture that became PT Aisin Indonesia in 1996. 
                    The Company had definitely set a solid foundation and foothold in 
                    the automotive component manufacturing industry in Indonesia.',
                'picture' => 'website/img/home/history/1996.jpg',
            ],
            (object) [
                'year' => '2006',
                'title' => 'FROM LOCAL TO GLOBAL',
                'description' => 'PT Aisin Indonesia weathered the economic crisis of ’98 
                    and even became more resilient. The company achieved many certifications, 
                    expanded its Cikarang Plant, improved internally, and reached its 
                    10th Anniversary. In February 2006, the shareholder structure of 
                    the company went through some changes. Aisin Seiki Co., Ltd. & 
                    PT. Senantiasa Makmur dominated shareholder structure.',
                'picture' => 'websitPe/img/home/history/2006.jpg',
            ],
            (object) [
                'year' => '2013',
                'title' => "PT AISIN INDONESIA'S SUBSIDIARIES",
                'description' => 'As PT Aisin Indonesia grows, competition and demand 
                    also intensify, thus the Company must expand in terms of organization and 
                    actual space. Therefore in 2013, PT Aisin Indonesia founded its 
                    subsidiaries: PT Aisin Indonesia Automotive & PT Advics Manufacturing 
                    Indonesia.',
                'picture' => 'website/img/home/history/2013.jpg',
            ],
        ];

        return view('website.pages.about.company_history', compact('profile', 'history'));
    }

    public function brand()
    {
        return view('website.pages.brand');
    }

    public function awards()
    {
        return view('website.pages.about.awards');
    }

    public function bodyPart()
    {
        return view('website.pages.product.body_part');
    }

    public function enginePart()
    {
        return view('website.pages.product.engine_part');
    }

    public function driveTrain()
    {
        return view('website.pages.product.drive_train');
    }

    public function jobInfo()
    {
        return view('website.pages.job_info');
    }

    public function jobOpportunities()
    {
        $data = [
            (object) [
                'title' => 'QA Engineer (Games) Intern',
                'description' => [
                    'Review requirements, specifications, and technical design documents to provide timely and meaningful feedback.',
                    'Assist in creating detailed, comprehensive, and well-structured test plans and test cases.',
                    'Support in estimating, prioritizing, planning, and executing manual testing activities (including smoke, functional, integration, and regression testing) and provide concise test reports.',
                    'Learn to perform API interface testing and assist in API automation testing.',
                    'Gain exposure to non-functional testing (such as load testing, stress testing) and contribute to detailed and comprehensive reports.',
                    'Assist in creating clear bug tickets and reports (RCA) and help identify, communicate, and track issues in production.',
                ],
                'requirements' => [
                    'Currently pursuing a Bachelor\'s or higher degree in Computer Science or a related discipline.',
                    'Interest in software testing / software development life cycle.',
                    'Basic understanding of HTML, CSS, JavaScript, and web development concepts (would be plus have visibility on JavaScript / Java / Python)',
                    'Exposure to QA automation tools such as Karate Frameworks, Webdriver.io, or Appium (experience with any one tool is a plus).',
                    'Eagerness to learn and work in an Agile/Scrum/Kanban environment with cross-functional teams.',
                    'Basic understanding of testing tools such as Postman, and familiarity with Database SQL & NoSQL.',
                    'Familiarity with Git version management tools is a plus.',
                    'Demonstrates good logical and structural thinking skills.',
                    'Good verbal and written communication skills.',
                    'Willingness to gain hands-on experience in testing Android, iOS, Web, and REST APIs.',
                    'Exhibits a strong sense of responsibility, result-oriented mindset, and a passion for delivering quality work.',
                ],
            ],
        ];

        return view('website.pages.job_opportunities')->with('data', $data);
    }

    public function contact()
    {
        return view('website.pages.contact');
    }
}
