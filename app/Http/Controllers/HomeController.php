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

    public function coreValue()
    {
        return view('website.pages.about.core-value');
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
        return view('website.pages.about.management-message');
    }

    public function executiveIndex()
    {
        return view('website.pages.about.executive.index');
    }

    public function executives($company)
    {
        $executives = [];

        if ($company == 'aii') {
            $subtitle = 'PT Aisin Indonesia';
            $executives = [
                (object) [
                    'members' => [
                        (object) [
                            'name' => 'Mr. PB Ariawan Purwonugroho',
                            'position' => 'President Director',
                            'picture' => asset('website/img/home/executives/presdir.png')
                        ],
                    ]
                ],
                (object) [
                    'members' => [
                        (object) [
                            'name' => 'Mr. Aristoni Ardhi',
                            'position' => 'Vice President Director',
                            'picture' => asset('website/img/home/executives/presdir.png')
                        ],
                    ]
                ],
                (object) [
                    'members' => [
                        (object) [
                            'name' => 'Mr. Hisatomo Kato',
                            'position' => 'Plant Director',
                            'picture' => asset('website/img/home/executives/presdir.png')
                        ],
                        (object) [
                            'name' => 'Mr. Michael Loandouw',
                            'position' => 'MKT & HC Director',
                            'picture' => asset('website/img/home/executives/presdir.png'),
                        ],
                        (object) [
                            'name' => 'Mrs. Herlina',
                            'position' => 'FACC & Purc. Director',
                            'picture' => asset('website/img/home/executives/presdir.png'),
                        ],
                    ]
                ],
            ];
        } else {
            $subtitle = 'PT Aisin Indonesia Automotive';
            $executives = [
                (object) [
                    'members' => [
                        (object) [
                            'name' => 'Mr. PB Ariawan Purwonugroho',
                            'position' => 'President Director',
                            'picture' => asset('website/img/home/executives/presdir.png')
                        ],
                    ]
                ],
                (object) [
                    'members' => [
                        (object) [
                            'name' => 'Mr. Aristoni Ardhi',
                            'position' => 'Vice President Director',
                            'picture' => asset('website/img/home/executives/presdir.png')
                        ],
                    ]
                ],
                (object) [
                    'members' => [
                        (object) [
                            'name' => 'Mr. Dedi Irwanto',
                            'position' => 'Plant Director',
                            'picture' => asset('website/img/home/executives/presdir.png')
                        ],
                        (object) [
                            'name' => 'Mr. Michael Loandouw',
                            'position' => 'MKT & HC Director',
                            'picture' => asset('website/img/home/executives/presdir.png'),
                        ],
                        (object) [
                            'name' => 'Mr. Hisatomo Kato',
                            'position' => 'FACC & Purc. Director',
                            'picture' => asset('website/img/home/executives/presdir.png'),
                        ],
                    ]
                ],
            ];
        }

        $banner = asset('website/img/about/banner-about.png');
        $breadcrumbs = [
            (object)[
                'name' => 'Executives Management',
                'url' => route('executives'),
                'active' => false,
            ],
            (object)[
                'name' => $subtitle,
                'url' => route('executive-list', $company),
                'active' => true,
            ],
        ];

        return view('website.pages.about.executive.executive', compact('banner', 'subtitle', 'executives', 'breadcrumbs'));
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
                'title' => 'Birth of PT Aisin Indonesia',
                'description' => 'After ten years of cooperation between PT Dharma Sarana 
                    Perdana and Aisin Seiki Co., Ltd. – in the form of technical assistance. 
                    They formed a joint venture that became PT Aisin Indonesia in 1996. 
                    The Company had definitely set a solid foundation and foothold in 
                    the automotive component manufacturing industry in Indonesia.',
                'picture' => asset('website/img/home/history/1996.jpg'),
            ],
            (object) [
                'year' => '1998',
                'title' => "New Culture and Economic Crisis",
                'description' => 'Beyond the business attitude and technical & economic aspects, 
                    the corporate cultures of both companies must merge and adapted into a new, distinct, 
                    and specific one. This merging led to new practices adapted with local culture, 
                    which are the Kaizen, Aisatsu (Greeting), 3S, Anzen & San Gen Shugi.',
                'picture' => asset('website/img/home/history/2013.jpg'),
            ],
            (object) [
                'year' => '2006',
                'title' => 'From Local to Global',
                'description' => 'PT Aisin Indonesia weathered the economic crisis of ’98 
                    and even became more resilient. The company achieved many certifications, 
                    expanded its Cikarang Plant, improved internally, and reached its 
                    10th Anniversary. In February 2006, the shareholder structure of 
                    the company went through some changes. Aisin Seiki Co., Ltd. & 
                    PT. Senantiasa Makmur dominated shareholder structure.',
                'picture' => asset('website/img/home/history/2006.jpg'),
            ],
            (object) [
                'year' => '2013',
                'title' => "PT Aisin Indonesia's Subsidiaries",
                'description' => 'As PT Aisin Indonesia grows, competition and demand 
                    also intensify, thus the Company must expand in terms of organization and 
                    actual space. Therefore in 2013, PT Aisin Indonesia founded its 
                    subsidiaries: PT Aisin Indonesia Automotive & PT Advics Manufacturing 
                    Indonesia.',
                'picture' => asset('website/img/home/history/2013.jpg'),
            ],
            (object) [
                'year' => '2016',
                'title' => "Growing Up Together for The Best Future",
                'description' => 'PT Aisin Indonesia then aims to go “From Local to Global” by applying 
                    good production system that allows for the development of new technologies and products, 
                    which are: Door Lock, Intake Manifold, Cover Head Cylinder, Door Frame, 
                    Clutch Cover & Clutch Disc.',
                'picture' => asset('website/img/home/history/2013.jpg'),
            ],
            (object) [
                'year' => '2024',
                'title' => "Aisin Collaboration (Satu Aisin)",
                'description' => 'To strengthen and build harmonization of mindsets, participation of all members, 
                    synergy and collaboration between functions from PT Aisin Indonesia and PT Aisin Indonesia Automotive 
                    in the form of “Satu Aisin”.',
                'picture' => asset('website/img/home/history/2013.jpg'),
            ],
        ];

        $banner = asset('website/img/about/banner-about.png');
        $subtitle  = 'Company History';

        return view('website.pages.about.company-history', compact('banner', 'subtitle', 'profile', 'history'));
    }

    public function brand()
    {
        return view('website.pages.brand');
    }

    public function awardIndex()
    {
        return view('website.pages.about.award.index');
    }

    public function awards($company)
    {
        $banner = asset('website/img/about/banner-about.png');
        $subtitle  = '';

        $awards = [];

        if ($company == 'aii') {
            $subtitle = 'PT Aisin Indonesia';
            $awards = [
                'Environment Awards' => [
                    (object)[
                        'name' => 'Green Proper KLHK RI',
                        'picture' => asset('website/img/home/awards/environment.png'),
                    ],
                    (object)[
                        'name' => 'AOP Astra Green Company & Astra Friendly Company Award',
                        'picture' => asset('website/img/home/awards/environment.png'),
                    ],
                    (object)[
                        'name' => 'INALUM Best Complients Award',
                        'picture' => asset('website/img/home/awards/environment.png'),
                    ],
                ],
                'TQM Awards' => [
                    (object)[
                        'name' => 'TMC 3rd Winner Inspection Shop 2023',
                        'picture' => asset('website/img/home/awards/environment.png'),
                    ],
                    (object)[
                        'name' => 'TMC Gold Level QCC Improvement',
                        'picture' => asset('website/img/home/awards/environment.png'),
                    ],
                    (object)[
                        'name' => 'AOP 4th Place QCC Non Technic Improvement',
                        'picture' => asset('website/img/home/awards/environment.png'),
                    ],
                ],
                'Occupational Health & Safety Awards' => [
                    (object)[
                        'name' => 'ADM Best Supplier in Fire Management System 2023',
                        'picture' => asset('website/img/home/awards/environment.png'),
                    ],
                    (object)[
                        'name' => 'GOLD PROPER 2021 KLHK RI',
                        'picture' => asset('website/img/home/awards/environment.png'),
                    ],
                ],
                'Customer Awards & Other' => [
                    (object)[
                        'name' => 'MMKI After Sales Performance Award 2020',
                        'picture' => asset('website/img/home/awards/environment.png'),
                    ],
                    (object)[
                        'name' => 'MMKI Best Delivery & Quality 2023',
                        'picture' => asset('website/img/home/awards/environment.png'),
                    ],
                    (object)[
                        'name' => 'MMKI Excellent Performance for Support After Sales 2022',
                        'picture' => asset('website/img/home/awards/environment.png'),
                    ],
                    (object)[
                        'name' => 'TMMIN Quality Target Achievement',
                        'picture' => asset('website/img/home/awards/environment.png'),
                    ],
                    (object)[
                        'name' => 'INDI 4.0 Award 2021',
                        'picture' => asset('website/img/home/awards/environment.png'),
                    ],
                    (object)[
                        'name' => 'Lighthouse Industry 4.0 2022',
                        'picture' => asset('website/img/home/awards/environment.png'),
                    ],
                ],
            ];
        } else {
            $subtitle = 'PT Aisin Indonesia Automotive';
            $awards = [
                'Environment Awards' => [
                    (object)[
                        'name' => 'Green Proper KLHK RI',
                        'picture' => asset('website/img/home/awards/environment.png'),
                    ],
                ],
                'TQM Awards' => [
                    (object)[
                        'name' => 'AOP 29th CONVENTION',
                        'picture' => asset('website/img/home/awards/environment.png'),
                    ],
                    (object)[
                        'name' => 'INNOVASTRA 33',
                        'picture' => asset('website/img/home/awards/environment.png'),
                    ],
                    (object)[
                        'name' => 'AOP 28th CONVENTION',
                        'picture' => asset('website/img/home/awards/environment.png'),
                    ],
                ],
                'Occupational Health & Safety Awards' => [
                    (object)[
                        'name' => 'GOLD SMK3 KEMENAKER RI',
                        'picture' => asset('website/img/home/awards/environment.png'),
                    ],
                    (object)[
                        'name' => 'AGC AWARD 2017',
                        'picture' => asset('website/img/home/awards/environment.png'),
                    ],
                ],
                'Customer Awards & Other' => [
                    (object)[
                        'name' => 'AFT TOURNAMENT',
                        'picture' => asset('website/img/home/awards/environment.png'),
                    ],
                    (object)[
                        'name' => 'TMMIN TOP 10 QUALITY ACHIEVEMENT',
                        'picture' => asset('website/img/home/awards/environment.png'),
                    ],
                    (object)[
                        'name' => 'IAMI - EHS',
                        'picture' => asset('website/img/home/awards/environment.png'),
                    ],
                    (object)[
                        'name' => 'OTHERS - QUALITY',
                        'picture' => asset('website/img/home/awards/environment.png'),
                    ],
                ],
            ];
        }

        $banner = asset('website/img/about/banner-about.png');
        $breadcrumbs = [
            (object)[
                'name' => 'Awards',
                'url' => route('awards'),
                'active' => false,
            ],
            (object)[
                'name' => $subtitle,
                'url' => route('award-list', $company),
                'active' => true,
            ],
        ];

        return view('website.pages.about.award.awards', compact('awards', 'banner', 'subtitle', 'breadcrumbs'));
    }

    public function productIndex()
    {
        return view('website.pages.product.index');
    }

    public function products($product)
    {
        $banner = asset('website/img/about/banner-about.png');
        $title  = 'Products';
        $subtitle = '';
        $products = [];

        switch ($product) {
            case 'body-part':
                $subtitle = 'Body Part';
                $products = [
                    (object) [
                        'name' => 'Door Lock',
                        'picture' => asset('website/img/home/products/bodypart-doorlock.jpg'),
                        'description' => 'The door lock is a mechanical device that is used to secure the doors of a vehicle. It is typically located on the door panel and is operated by a key or a remote control. The door lock is designed to prevent unauthorized access to the vehicle and to prevent the doors from being opened while the vehicle is in motion.',
                        'manufacturer' => 'PT Aisin Indonesia',
                    ],
                    (object) [
                        'name' => 'Striker',
                        'picture' => asset('website/img/home/products/bodypart-striker.jpg'),
                        'description' => 'The door lock is a mechanical device that is used to secure the doors of a vehicle. It is typically located on the door panel and is operated by a key or a remote control. The door lock is designed to prevent unauthorized access to the vehicle and to prevent the doors from being opened while the vehicle is in motion.',
                        'manufacturer' => 'PT Aisin Indonesia',
                    ],
                    (object) [
                        'name' => 'Door Hinge',
                        'picture' => asset('website/img/home/products/bodypart-doorhinge.jpg'),
                        'description' => 'The door lock is a mechanical device that is used to secure the doors of a vehicle. It is typically located on the door panel and is operated by a key or a remote control. The door lock is designed to prevent unauthorized access to the vehicle and to prevent the doors from being opened while the vehicle is in motion.',
                        'manufacturer' => 'PT Aisin Indonesia',
                    ],
                    (object) [
                        'name' => 'Door Check',
                        'picture' => asset('website/img/home/products/bodypart-doorcheck.jpg'),
                        'description' => 'The door lock is a mechanical device that is used to secure the doors of a vehicle. It is typically located on the door panel and is operated by a key or a remote control. The door lock is designed to prevent unauthorized access to the vehicle and to prevent the doors from being opened while the vehicle is in motion.',
                        'manufacturer' => 'PT Aisin Indonesia',
                    ],
                    (object) [
                        'name' => 'Door Frame',
                        'picture' => asset('website/img/home/products/bodypart-doorframe.jpg'),
                        'description' => 'The door lock is a mechanical device that is used to secure the doors of a vehicle. It is typically located on the door panel and is operated by a key or a remote control. The door lock is designed to prevent unauthorized access to the vehicle and to prevent the doors from being opened while the vehicle is in motion.',
                        'manufacturer' => 'PT Aisin Indonesia',
                    ],
                    (object) [
                        'name' => 'Outside Handle',
                        'picture' => asset('website/img/home/products/bodypart-outsidehandle.png'),
                        'description' => 'The door lock is a mechanical device that is used to secure the doors of a vehicle. It is typically located on the door panel and is operated by a key or a remote control. The door lock is designed to prevent unauthorized access to the vehicle and to prevent the doors from being opened while the vehicle is in motion.',
                        'manufacturer' => 'PT Aisin Indonesia Automotive',
                    ],
                    (object) [
                        'name' => 'Power Sliding Door (PSD) System',
                        'picture' => asset('website/img/home/products/bodypart-psd.png'),
                        'description' => 'The door lock is a mechanical device that is used to secure the doors of a vehicle. It is typically located on the door panel and is operated by a key or a remote control. The door lock is designed to prevent unauthorized access to the vehicle and to prevent the doors from being opened while the vehicle is in motion.',
                        'manufacturer' => 'PT Aisin Indonesia Automotive',
                    ],
                    (object) [
                        'name' => 'Center Pillar Garnish',
                        'picture' => asset('website/img/home/products/bodypart-centerpillar.png'),
                        'description' => 'The door lock is a mechanical device that is used to secure the doors of a vehicle. It is typically located on the door panel and is operated by a key or a remote control. The door lock is designed to prevent unauthorized access to the vehicle and to prevent the doors from being opened while the vehicle is in motion.',
                        'manufacturer' => 'PT Aisin Indonesia Automotive',
                    ],
                    (object) [
                        'name' => 'Power Seat Motor Assembly',
                        'picture' => asset('website/img/home/products/bodypart-powerseatmotor.png'),
                        'description' => 'The door lock is a mechanical device that is used to secure the doors of a vehicle. It is typically located on the door panel and is operated by a key or a remote control. The door lock is designed to prevent unauthorized access to the vehicle and to prevent the doors from being opened while the vehicle is in motion.',
                        'manufacturer' => 'PT Aisin Indonesia Automotive',
                    ],
                ];
                break;
            case 'drive-train':
                $subtitle = 'Drive Train';
                $products = [
                    (object) [
                        'name' => 'HV Dumper',
                        'picture' => asset('website/img/home/products/drivetrain-hvdumper.png'),
                        'description' => 'The door lock is a mechanical device that is used to secure the doors of a vehicle. It is typically located on the door panel and is operated by a key or a remote control. The door lock is designed to prevent unauthorized access to the vehicle and to prevent the doors from being opened while the vehicle is in motion.',
                        'manufacturer' => 'PT Aisin Indonesia Autoomotive',
                    ],
                    (object) [
                        'name' => 'Clutch Disc',
                        'picture' => asset('website/img/home/products/drivetrain-clutchdisc.jpg'),
                        'description' => 'The door lock is a mechanical device that is used to secure the doors of a vehicle. It is typically located on the door panel and is operated by a key or a remote control. The door lock is designed to prevent unauthorized access to the vehicle and to prevent the doors from being opened while the vehicle is in motion.',
                        'manufacturer' => 'PT Aisin Indonesia',
                    ],
                    (object) [
                        'name' => 'Clutch Cover',
                        'picture' => asset('website/img/home/products/drivetrain-clutchcover.jpg'),
                        'description' => 'The door lock is a mechanical device that is used to secure the doors of a vehicle. It is typically located on the door panel and is operated by a key or a remote control. The door lock is designed to prevent unauthorized access to the vehicle and to prevent the doors from being opened while the vehicle is in motion.',
                        'manufacturer' => 'PT Aisin Indonesia',
                    ],
                ];

                break;
            case 'engine-part':
                $subtitle = 'Engine Part';
                $products = [
                    (object) [
                        'name' => 'Intake Manifold',
                        'picture' => asset('website/img/home/products/enginepart-intakemanifold.jpg'),
                        'description' => 'The door lock is a mechanical device that is used to secure the doors of a vehicle. It is typically located on the door panel and is operated by a key or a remote control. The door lock is designed to prevent unauthorized access to the vehicle and to prevent the doors from being opened while the vehicle is in motion.',
                        'manufacturer' => 'PT Aisin Indonesia',
                    ],
                    (object) [
                        'name' => 'Cylinder Head Cover',
                        'picture' => asset('website/img/home/products/engineparts-cylinderheadcover.jpg'),
                        'description' => 'The door lock is a mechanical device that is used to secure the doors of a vehicle. It is typically located on the door panel and is operated by a key or a remote control. The door lock is designed to prevent unauthorized access to the vehicle and to prevent the doors from being opened while the vehicle is in motion.',
                        'manufacturer' => 'PT Aisin Indonesia',
                    ],
                    (object) [
                        'name' => 'Engine Front Module',
                        'picture' => asset('website/img/home/products/enginepart-enginefrontmodule.jpg'),
                        'description' => 'The door lock is a mechanical device that is used to secure the doors of a vehicle. It is typically located on the door panel and is operated by a key or a remote control. The door lock is designed to prevent unauthorized access to the vehicle and to prevent the doors from being opened while the vehicle is in motion.',
                        'manufacturer' => 'PT Aisin Indonesia Automotive',
                    ],
                    (object) [
                        'name' => 'Camshaft Housing',
                        'picture' => asset('website/img/home/products/enginepart-camshafthousing.jpg'),
                        'description' => 'The door lock is a mechanical device that is used to secure the doors of a vehicle. It is typically located on the door panel and is operated by a key or a remote control. The door lock is designed to prevent unauthorized access to the vehicle and to prevent the doors from being opened while the vehicle is in motion.',
                        'manufacturer' => 'PT Aisin Indonesia Automotive',
                    ],
                    (object) [
                        'name' => 'Water Pump',
                        'picture' => asset('website/img/home/products/enginepart-waterpump.png'),
                        'description' => 'The door lock is a mechanical device that is used to secure the doors of a vehicle. It is typically located on the door panel and is operated by a key or a remote control. The door lock is designed to prevent unauthorized access to the vehicle and to prevent the doors from being opened while the vehicle is in motion.',
                        'manufacturer' => 'PT Aisin Indonesia Automotive',
                    ],
                    (object) [
                        'name' => 'Oil Pump',
                        'picture' => asset('website/img/home/products/enginepart-oilpump.png'),
                        'description' => 'The door lock is a mechanical device that is used to secure the doors of a vehicle. It is typically located on the door panel and is operated by a key or a remote control. The door lock is designed to prevent unauthorized access to the vehicle and to prevent the doors from being opened while the vehicle is in motion.',
                        'manufacturer' => 'PT Aisin Indonesia Automotive',
                    ],
                    (object) [
                        'name' => 'Oil Pan',
                        'picture' => asset('website/img/home/products/enginepart-oilpan.png'),
                        'description' => 'The door lock is a mechanical device that is used to secure the doors of a vehicle. It is typically located on the door panel and is operated by a key or a remote control. The door lock is designed to prevent unauthorized access to the vehicle and to prevent the doors from being opened while the vehicle is in motion.',
                        'manufacturer' => 'PT Aisin Indonesia Automotive',
                    ],
                ];

                break;
            case 'electrical-part':
                $subtitle = 'Electrical Part';
                $products = [
                    (object) [
                        'name' => 'Electronic Control Unit (ECU) W/P',
                        'picture' => asset('website/img/home/products/electricalpart-ecu.jpg'),
                        'description' => 'The door lock is a mechanical device that is used to secure the doors of a vehicle. It is typically located on the door panel and is operated by a key or a remote control. The door lock is designed to prevent unauthorized access to the vehicle and to prevent the doors from being opened while the vehicle is in motion.',
                        'manufacturer' => 'PT Aisin Indonesia Automotive',
                    ],
                    (object) [
                        'name' => '4WD Electronic Control Unit (ECU) CASE ASSEMBLY ',
                        'picture' => asset('website/img/home/products/electricalpart-ecu.jpg'),
                        'description' => 'The door lock is a mechanical device that is used to secure the doors of a vehicle. It is typically located on the door panel and is operated by a key or a remote control. The door lock is designed to prevent unauthorized access to the vehicle and to prevent the doors from being opened while the vehicle is in motion.',
                        'manufacturer' => 'PT Aisin Indonesia Automotive',
                    ],
                ];
                break;

            default:
                $products = [];
                break;
        }

        $breadcrumbs = [
            (object)[
                'name' => 'Products',
                'url' => route('products'),
                'active' => false,
            ],
            (object)[
                'name' => $subtitle,
                'url' => route('product-list', $product),
                'active' => true,
            ],
        ];

        return view('website.pages.product.products', compact(
            'banner',
            'title',
            'subtitle',
            'product',
            'products',
            'breadcrumbs'
        ));
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
