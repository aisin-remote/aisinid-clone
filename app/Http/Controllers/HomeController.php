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

    public function companySummary(?string $company = null)
    {
        if ($company == 'aii') {
            $pageTitle = 'PT Aisin Indonesia';
            $title = 'PT AISIN INDONESIA (AII)';
            $subtitle = 'Company Summary AII';
            $banner = asset('website/img/about/banner-about.png');
            $description = 'PT AISIN Indonesia is a renowned automotive manufacturer that 
                specializes in producing various essential components such as Clutch Cover, 
                Clutch Disc, Door Lock, Door Frame, Door Hinge, Door Handle, Hood Lock, 
                Hybrid Damper, Intake Manifold, and Cover Head Cylinder. Our company is dedicated 
                to delivering high-quality products that contribute to the comfort and safety of 
                drivers. We take pride in supporting car makers by providing them with valuable 
                solutions for an enhanced driving experience.';
            $image = asset('website/img/aii.png');
            $profile = [
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
            $breadcrumbs = [
                (object)[
                    'name' => 'Company Summary',
                    'url' => route('company-summary'),
                    'active' => false,
                ],
                (object)[
                    'name' => 'PT Aisin Indonesia',
                    'url' => route('company-summary', 'aii'),
                    'active' => true,
                ],
            ];
        } else if ($company == 'aiia') {
            $pageTitle = 'PT Aisin Indonesia Automotive';
            $banner = asset('website/img/about/banner-about.png');
            $title = 'PT AISIN INDONESIA AUTOMOTIVE (AIIA)';
            $subtitle = 'Company Summary AIIA';
            $description = 'PT AISIN Indonesia Automotive is a joint venture between PT AISIN 
                Indonesia (AII) - part of the Astra Otoparts Group, and AISIN Corporation, 
                a member of the Toyota Group. Founded on March 14, 2014, the company specializes 
                in the production of automotive components for the industry.';
            $image = asset('website/img/aiia.png');
            $profile = [
                (object)[
                    'title' => 'Company Name',
                    'content' => 'PT Aisin Indonesia Automotive',
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
            $breadcrumbs = [
                (object)[
                    'name' => 'Company Summary',
                    'url' => route('company-summary'),
                    'active' => false,
                ],
                (object)[
                    'name' => 'PT Aisin Indonesia Automotive',
                    'url' => route('company-summary', 'aiia'),
                    'active' => true,
                ],
            ];
        } else {
            return view('website.pages.about.summary.index');
        }

        return view('website.pages.about.summary.summary', compact(
            'pageTitle',
            'banner',
            'title',
            'subtitle',
            'description',
            'image',
            'profile',
            'breadcrumbs'
        ));
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

        return view('website.pages.about.company-history', compact('profile', 'history'));
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
        $banner = asset('website/img/home/contact--.png');
        $subtitle =  'Contact Us';
        $contacts = [
            (object) [
                'title' => 'Aisin Indonesia',
                'address' => 'East Jakarta Industrial Park (EJIP) Plot 5J South Cikarang, Indonesia 17550',
                'phone' => '(021) 8970909',
                'map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.5115919900622!2d107
                    .10894440093854!3d-6.327687956420059!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13
                    .1!3m3!1m2!1s0x2e699a8658dfc3b3%3A0xb2c5ecd250972b22!2sAisin%20Indonesia%20
                    Pt.%2C%20Sukaresmi%2C%20Cikarang%20Sel.%2C%20Kabupaten%20Bekasi%2C%20Jawa%2
                    0Barat!5e0!3m2!1sen!2sid!4v1730442972059!5m2!1sen!2sid',
            ],
            (object) [
                'title' => 'Aisin Indonesia Automotive',
                'address' => 'Kawasan Industri KIIC Lot LL No. 9 - 10, Jl. Harapan 8, 
                    Kel. Parung Mulia, Kec. Ciampel, 
                    Parungmulya, Kec. Ciampel, Karawang, Jawa Barat 41361',
                'phone' => '	(0267) 8643131',
                'map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965
                    .0397103475207!2d107.29623911177569!3d-6.388877493574868!2m3!1f0!2f0!3f0!3m2!
                    1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69758dcd24635b%3A0x595bd54f4c69da48!2sPT%20
                    Aisin%20Indonesia%20Automotive!5e0!3m2!1sen!2sid!4v1730444199231!5m2!1sen!2sid',
            ],
        ];

        return view('website.pages.contact', compact('banner', 'subtitle', 'contacts'));
    }
}
