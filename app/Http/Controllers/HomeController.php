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
            $pageTitle = 'PT AISIN Indonesia';
            $title = 'PT AISIN INDONESIA (AII)';
            $subtitle = 'Company Summary AII';
            $banner = asset('website/img/about/summary-aii.jpg');
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
                    'title' => 'Establishment',
                    'content' => 'July 13, 1995',
                ],
                (object)[
                    'title' => 'Capital',
                    'content' => 'IDR.146,497,000,000 (Indonesian Rupiah)',
                ],
                (object)[
                    'title' => 'Business',
                    'content' => 'Manufacture of automotive parts (clutch covers, clutch disks, door latches, door checks, door hinges, door frames, window regulators, hood latches, inside/outside handles, intake manifolds, etc.)',
                ],
                (object)[
                    'title' => 'Representative',
                    'content' => 'Mr. PB Ariawan Purwonugroho',
                ],
                (object)[
                    'title' => 'Employees',
                    'content' => '1,159 people by April 2024',
                ],
                (object)[
                    'title' => 'Address',
                    'content' => 'East Jakarta Industrial Park Plot 5J, Cikarang Selatan, Bekasi West Java, Indonesia',
                ],
            ];

            $breadcrumbs = [
                (object)[
                    'name' => 'Company Summary',
                    'url' => route('company-summary'),
                    'active' => true,
                ],
                (object)[
                    'name' => 'PT AISIN Indonesia',
                    'url' => route('company-summary', 'aii'),
                    'active' => true,
                ],
            ];
        } else if ($company == 'aiia') {
            $pageTitle = 'PT AISIN Indonesia Automotive';
            $banner = asset('website/img/about/summary-aiia.jpg');
            $title = 'PT AISIN INDONESIA AUTOMOTIVE (AIIA)';
            $subtitle = 'Company Summary AIIA';
            $description = 'PT AISIN Indonesia Automotive is a joint venture between PT AISIN 
                Indonesia (AII) - part of the Astra Otoparts Group, and AISIN Corporation, 
                a member of the Toyota Group. Founded on March 14, 2014, the company specializes 
                in the production of automotive components for the industry.';
            $image = asset('website/img/aiia.png');
            $profile = [
                (object)[
                    'title' => 'Establishment',
                    'content' => 'March 14, 2014',
                ],
                (object)[
                    'title' => 'Capital',
                    'content' => 'IDR.1,160,000,000,000 (Indonesian Rupiah)',
                ],
                (object)[
                    'title' => 'Business',
                    'content' => 'Manufacture and sales of automotive parts (power sliding doors, door handles, engine front modules and other die-cast parts, oil pumps, etc.)',
                ],
                (object)[
                    'title' => 'Representative',
                    'content' => 'Mr. PB Ariawan Purwonugroho',
                ],
                (object)[
                    'title' => 'Employees',
                    'content' => '579 people by April 2024',
                ],
                (object)[
                    'title' => 'Address',
                    'content' => 'Jl. Harapan VIII Lot LL No. 9-10, Kawasan Industri KIIC, Karawang, 41361 West Java, Indonesia',
                ],
            ];

            $breadcrumbs = [
                (object)[
                    'name' => 'Company Summary',
                    'url' => route('company-summary'),
                    'active' => true,
                ],
                (object)[
                    'name' => 'PT AISIN Indonesia Automotive',
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
            $subtitle = 'PT AISIN Indonesia';
            $banner = asset('website/img/about/bod-aii.jpg');
            $executives = [
                (object) [
                    'members' => [
                        (object) [
                            'name' => 'Mr. PB Ariawan Purwonugroho',
                            'position' => 'President Director',
                            'picture' => asset('website/img/home/executives/Mr_Ariawan_2.png')
                        ],
                    ]
                ],
                (object) [
                    'members' => [
                        (object) [
                            'name' => 'Mr. Aristoni Ardhi',
                            'position' => 'Vice President Director',
                            'picture' => asset('website/img/home/executives/Mr_Aristoni.png')
                        ],
                    ]
                ],
                (object) [
                    'members' => [
                        (object) [
                            'name' => 'Mr. Hisatomo Kato',
                            'position' => 'Plant Director',
                            'picture' => asset('website/img/home/executives/Mr_Kato_2.png')
                        ],
                        (object) [
                            'name' => 'Mr. Michael Loandouw',
                            'position' => 'MKT & HC Director',
                            'picture' => asset('website/img/home/executives/Mr_Michael.png'),
                        ],
                        (object) [
                            'name' => 'Mrs. Herlina',
                            'position' => 'FACC & Purc. Director',
                            'picture' => asset('website/img/home/executives/Mrs_Herlina_2.png'),
                        ],
                    ]
                ],
            ];
        } else {
            $subtitle = 'PT AISIN Indonesia Automotive';
            $banner = asset('website/img/about/bod-aiia.jpg');
            $executives = [
                (object) [
                    'members' => [
                        (object) [
                            'name' => 'Mr. PB Ariawan Purwonugroho',
                            'position' => 'President Director',
                            'picture' => asset('website/img/home/executives/Mr_Ariawan_2.png')
                        ],
                    ]
                ],
                (object) [
                    'members' => [
                        (object) [
                            'name' => 'Mr. Aristoni Ardhi',
                            'position' => 'Vice President Director',
                            'picture' => asset('website/img/home/executives/Mr_Aristoni.png')
                        ],
                    ]
                ],
                (object) [
                    'members' => [
                        (object) [
                            'name' => 'Mr. Dedi Irwanto',
                            'position' => 'Plant Director',
                            'picture' => asset('website/img/home/executives/Mr_Dedi_2.png')
                        ],
                        (object) [
                            'name' => 'Mr. Michael Loandouw',
                            'position' => 'MKT & HC Director',
                            'picture' => asset('website/img/home/executives/Mr_Michael.png'),
                        ],
                        (object) [
                            'name' => 'Mr. Hisatomo Kato',
                            'position' => 'FACC & Purc. Director',
                            'picture' => asset('website/img/home/executives/Mr_Kato_2.png'),
                        ],
                    ]
                ],
            ];
        }

        $breadcrumbs = [
            (object)[
                'name' => 'Executives Management',
                'url' => route('executives'),
                'active' => true,
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
                'year' => '1995',
                'title' => 'Birth of PT AISIN Indonesia',
                'description' => 'After ten years of collaboration between PT Dharma Sarana Perdana and Aisin Seiki Co., Ltd., in the 
                    form of technical assistance, a joint venture was established, which became PT AISIN Indonesia in 1995. This marked 
                    a solid foundation and strong foothold for the company in the automotive component manufacturing industry in Indonesia.',
                'picture' => asset('website/img/home/history/1996.jpg'),
            ],
            (object) [
                'year' => '1998',
                'title' => "New Culture and Economic Crisis",
                'description' => 'Beyond the business attitude and technical and economic aspects, 
                    the corporate cultures of both companies had to merge and adapt into a new, 
                    distinct, and specific one. This merger led to the adoption of new practices 
                    aligned with the local culture, including Kaizen, Aisatsu (Greeting), 3S, Anzen, 
                    and San Gen Shugi.',
                'picture' => asset('website/img/home/history/1998.jpg'),
            ],
            (object) [
                'year' => '2006',
                'title' => 'From Local to Global',
                'description' => "PT AISIN Indonesia weathered the economic crisis of '98 and became 
                    even more resilient. The company achieved numerous certifications, expanded its 
                    Cikarang plant, improved internally, and celebrated its 10th anniversary. 
                    In February 2006, the company’s shareholder structure underwent some changes, 
                    with Aisin Seiki Co., Ltd. & PT. Senantiasa Makmur becoming the dominant 
                    shareholders.",
                'picture' => asset('website/img/home/history/2006.jpg'),
            ],
            (object) [
                'year' => '2013',
                'title' => "PT AISIN Indonesia's Subsidiaries",
                'description' => "As PT Aisin Indonesia grows, competition and demand also intensify, 
                    and thus the company must expand both in terms of organization and physical space. 
                    Therefore, in 2013, PT Aisin Indonesia established its subsidiaries: PT Aisin 
                    Indonesia Automotive & PT Advics Manufacturing Indonesia.",
                'picture' => asset('website/img/home/history/2013.jpg'),
            ],
            (object) [
                'year' => '2016',
                'title' => "Growing Up Together for The Best Future",
                'description' => 'PT Aisin Indonesia aims to go "From Local to Global" by implementing a strong 
                    production system that enables the development of new technologies and products, 
                    including: Door Lock, Intake Manifold, Cylinder Head Cover, Door Frame, Clutch Cover, 
                    and Clutch Disc.',
                'picture' => asset('website/img/home/history/2016.jpg'),
            ],
            (object) [
                'year' => '2024',
                'title' => "AISIN Collaboration (Satu AISIN)",
                'description' => 'To strengthen and build the harmonization of mindsets, the participation of 
                    all members, and the synergy and collaboration between functions from PT AISIN Indonesia 
                    and PT AISIN Indonesia Automotive in the form of “Satu Aisin”.',
                'picture' => asset('website/img/home/history/2024.jpg'),
            ],
        ];

        $banner = asset('website/img/home/history/1996.jpg');
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
        $subtitle  = '';
        $foreword = 'AISIN is dedicated to delivering exceptional quality and innovation, backed by internationally recognized certifications 
        such as ISO and IATF. These achievements underscore our commitment to upholding global standards 
        while continuously enhancing our products, processes, and services to meet the needs of our customers.';

        $awards = [];

        if ($company == 'aii') {
            $banner = asset('website/img/home/awards/rak.jpg');
            $subtitle = 'PT AISIN Indonesia';
            $awards = [
                'Environment Awards' => [
                    (object)[
                        'name' => 'Gold Proper KLHK RI',
                        'picture' => asset('website/img/home/awards/environment.png'),
                        'description' => 'The First Automotive Component Manufacturing Company to Achieve the GOLD PROPER Rating (Corporate Performance Rating Program in Environmental Management) from the Ministry of Environment and Forestry (KLHK RI) in 2021'
                    ],
                    (object)[
                        'name' => 'GREEN PROPER KLHK RI',
                        'picture' => asset('website/img/home/awards/environment.png'),
                        'description' => 'Achieved the GREEN PROPER Rating (Corporate Performance Rating Program in Environmental Management) from the Ministry of Environment and Forestry (KLHK RI) seven times in 2015, 2016, 2017, 2018, 2019, 2020, and 2023.'
                    ],
                    (object)[
                        'name' => 'Astra Green Company (AGC) and Astra Friendly Company (AFC)',
                        'picture' => asset('website/img/home/awards/environment.png'),
                        'description' => 'Green (AGC) and Five-Star (AFC) Ratings in the Manufacturing Category for the Implementation of the Astra Green Company and Astra Friendly Company Management Systems for the 2018-2019 Period'
                    ],
                    (object)[
                        'name' => 'Winner of the Astra Green Company Awards',
                        'picture' => asset('website/img/home/awards/environment.png'),
                        'description' => '
                            <ul>
                                <li> Winner of the Pollution Prevention and Cleaner Production Program category in 2015
                                <li> Winner of the Best Ergonomic Factory with Karakuri category in 2017
                                <ul>'
                    ],
                    (object)[
                        'name' => 'Winner of the Astra Green Energy Awards',
                        'picture' => asset('website/img/home/awards/environment.png'),
                        'description' => '
                                <ul>
                                <li> 1st Place in the Green Energy Project at the New and Renewable Energy Awards in 2017
                                <li> 1st Place in the Best Medium-Scale Industry Project category in 2016
                                <ul>'
                    ],
                    (object)[
                        'name' => 'Astra Green Innovation',
                        'picture' => asset('website/img/home/awards/environment.png'),
                        'description' => '2nd Place Astra Green Innovation'
                    ],
                ],
                'Corporate Social Responsibility Awards' => [
                    (object)[
                        'name' => 'West Java Development Partner',
                        'picture' => asset('website/img/home/awards/environment.png'),
                        'description' => "West Java Development Partner through the Company's CSR/PKBL Program in 2019"
                    ],
                    (object)[
                        'name' => 'Active Participation in CSR Activities in Bekasi Regency',
                        'picture' => asset('website/img/home/awards/environment.png'),
                        'description' => 'Active Participation in CSR Activities in Bekasi Regency, Organized by the Bekasi Regency Government in 2019'
                    ],
                    (object)[
                        'name' => 'A Program for the Construction of 3 Temporary Housing Units in Collaboration with PT Cikarang Listrindo Tbk and PT Aisin Indonesia',
                        'picture' => asset('website/img/home/awards/environment.png'),
                        'description' => 'A Program for the Construction of 3 Temporary Housing Units in Collaboration between PT Cikarang Listrindo Tbk and PT Aisin Indonesia in Gumantar Village, East Lombok, in 2019'
                    ],
                ],
                'Customer Awards' => [
                    (object)[
                        'name' => 'Zero Defect Quality Achievement held by PT Toyota Motor Manufacturing Indonesia',
                        'picture' => asset('website/img/home/awards/environment.png'),
                        'description' => 'Recognized Twice for Zero Defect Quality Achievement Over the Last 5 Years in 2021 and 2024, held by PT Toyota Motor Manufacturing Indonesia.'
                    ],
                    (object)[
                        'name' => 'Quality Target Achievement held by PT Toyota Motor Manufacturing Indonesia',
                        'picture' => asset('website/img/home/awards/environment.png'),
                        'description' => 'Recognized Twice for Quality Target Achievement Over the Last 5 Years in 2019 and 2024, held by PT Toyota Motor Manufacturing Indonesia.'
                    ],
                    (object)[
                        'name' => 'Best Quality Award held by PT Hino Motor Manufacturing',
                        'picture' => asset('website/img/home/awards/environment.png'),
                        'description' => 'Best Quality Award in Recognition of Outstanding Performance and Support in 2021, held by PT Hino Motor Manufacturing Indonesia.'
                    ],
                    (object)[
                        'name' => 'Quality Award held by PT Toyota Motor Manufacturing Indonesia',
                        'picture' => asset('website/img/home/awards/environment.png'),
                        'description' => 'Quality Award in 2020 Presented to PT Aisin Indonesia, held by PT Toyota Motor Manufacturing Indonesia.'
                    ],
                    //
                    (object)[
                        'name' => 'Appreciation for VA Contribution held by PT Toyota Motor Manufacturing Indonesia',
                        'picture' => asset('website/img/home/awards/environment.png'),
                        'description' => 'Twice awarded for VA Contribution over the last 5 years, in 2020 and 2022, held by PT Toyota Motor Manufacturing Indonesia.'
                    ],
                    (object)[
                        'name' => 'Superior Cost Award in ADM Suppliers Awarding',
                        'picture' => asset('website/img/home/awards/environment.png'),
                        'description' => 'Superior Cost Award for the period 2021-2022 in ADM Suppliers Awarding.'
                    ],
                    //
                    (object)[
                        'name' => 'Good Delivery Performance to ADM Assembly Plant Held by PT Astra Daihatsu Motor',
                        'picture' => asset('website/img/home/awards/environment.png'),
                        'description' => 'In recognition of Good Delivery Performance to ADM Assembly Plant for the period January - December 2023, held by PT Astra Daihatsu Motor'
                    ],
                    (object)[
                        'name' => 'Supplier Award for Excellence in Delivery Held by PT Honda Prospect Motor',
                        'picture' => asset('website/img/home/awards/environment.png'),
                        'description' => 'Supplier Award for Excellence in Delivery in recognition of outstanding performance in supporting mass production parts in 2023, held by PT Honda Prospect Motor.'
                    ],
                    (object)[
                        'name' => 'Excellent OEM Delivery Performance held by PT Isuzu Astra Motor Indonesia',
                        'picture' => asset('website/img/home/awards/environment.png'),
                        'description' => 'For Excellent OEM Delivery Performance in 2023, held by PT Isuzu Astra Motor Indonesia.'
                    ],
                    (object)[
                        'name' => 'Excellent OES Delivery Performance held by PT Isuzu Astra Motor Indonesia',
                        'picture' => asset('website/img/home/awards/environment.png'),
                        'description' => 'For Excellent OES Delivery Performance in 2023, held by PT Isuzu Astra Motor Indonesia.'
                    ],
                    (object)[
                        'name' => 'Appreciation of Delivery Performance held by PT Hino Motors Manufacturing Indonesia',
                        'picture' => asset('website/img/home/awards/environment.png'),
                        'description' => 'Twice awarded for Appreciation of Delivery Performance over the last 5 years, in 2019 and 2023, in recognition of outstanding performance and support to PT Hino Motors Manufacturing Indonesia.'
                    ],
                    (object)[
                        'name' => 'Delivery Target Achievement held by PT Toyota Motor Manufacturing Indonesia',
                        'picture' => asset('website/img/home/awards/environment.png'),
                        'description' => 'Twice recognized for Delivery Target Achievement over the last 5 years, in 2019 and 2021, held by PT Toyota Motor Manufacturing Indonesia.'
                    ],
                    //
                    (object)[
                        'name' => 'Appreciation of Safety Performance held by PT Hino Motors Manufacturing Indonesia',
                        'picture' => asset('website/img/home/awards/environment.png'),
                        'description' => 'Appreciation of Safety Performance in Recognition of Outstanding Performance and Support in 2023, held by PT Hino Motors Manufacturing Indonesia.'
                    ],
                    (object)[
                        'name' => 'Safety Awards held by PT Toyota Motor Manufacturing Indonesia',
                        'picture' => asset('website/img/home/awards/environment.png'),
                        'description' => 'Safety Award in 2020, held by PT Toyota Motor Manufacturing Indonesia.'
                    ],
                    //
                    (object)[
                        'name' => 'Appreciation of Kaizen Contribution',
                        'picture' => asset('website/img/home/awards/environment.png'),
                        'description' => 'Appreciation of Kaizen Contribution in Recognition of Outstanding Performance and Support in 2023, held by PT Hino Motors Manufacturing Indonesia.'
                    ],
                    (object)[
                        'name' => 'Thematic Appreciation Structural Reform Monozukuri Evolution held by PT Toyota Motor Manufacturing Indonesia',
                        'picture' => asset('website/img/home/awards/environment.png'),
                        'description' => 'Thematic Appreciation for Structural Reform and Monozukuri Evolution in 2023, held by PT Toyota Motor Manufacturing Indonesia.'
                    ],
                    (object)[
                        'name' => 'Excellent Commitment and Effort on TPS Jishuken Activity',
                        'picture' => asset('website/img/home/awards/environment.png'),
                        'description' => 'Excellent Commitment and Effort on TPS Jishuken Activity, presented during The 15th Annual TPS Jishuken Happyoukai Genba Host 2023 held by PT Toyota Motor Manufacturing Indonesia.'
                    ],
                    (object)[
                        'name' => 'Breakthrough Innovation',
                        'picture' => asset('website/img/home/awards/environment.png'),
                        'description' => 'In Recognition of Breakthrough Innovation in 2024, held by PT Toyota Motor Manufacturing Indonesia.'
                    ],
                    //
                    (object)[
                        'name' => 'Special Appreciation for Domestic Service Parts Performance',
                        'picture' => asset('website/img/home/awards/environment.png'),
                        'description' => 'Special Appreciation for Domestics Service Parts Performance in 2019, held by PT Toyota Motor Manufacturing Indonesia.'
                    ],
                    (object)[
                        'name' => '5 Million Units Production Achievement',
                        'picture' => asset('website/img/home/awards/environment.png'),
                        'description' => 'Appreciation for 5 Millions Units Production Achivement, held by PT Astra Daihatsu Motor.'
                    ],
                    (object)[
                        'name' => '2nd Winner Packaging Appreciation',
                        'picture' => asset('website/img/home/awards/environment.png'),
                        'description' => '2nd Winner Packaging Appreciation, held by PT Toyota Astra Motor.'
                    ],
                    //
                    (object)[
                        'name' => 'Outstanding Environment Health & Safety Performance',
                        'picture' => asset('website/img/home/awards/environment.png'),
                        'description' => 'Twice recognized for Outstanding Environment Health & Safety Performance over the last 5 years in 2019 and 2021, held by PT Isuzu Astra Motor Indonesia.'
                    ],
                    //
                ],
                'TQM Awards' => [
                    (object)[
                        'name' => '1st Winner QCC',
                        'picture' => asset('website/img/home/awards/environment.png'),
                        'description' => '1st Winner at the 31st Innovation Convention of Astra Otoparts Group, held in July - August 2020, with the theme "Enhancing Excellence Through Digitalization".'
                    ],
                    (object)[
                        'name' => '1st Winner Suggestion System',
                        'picture' => asset('website/img/home/awards/environment.png'),
                        'description' => '1st Winner at the 29th Quality Convention of Astra Otoparts.'
                    ],
                    (object)[
                        'name' => '1st Winner QCP',
                        'picture' => asset('website/img/home/awards/environment.png'),
                        'description' => '1st Winner at the 31st Innovation Convention of Astra Otoparts Group, held in July - August 2020, with the theme "Enhancing Excellence Through Digitalization".'
                    ],
                    (object)[
                        'name' => 'Diamond Ranking QCP',
                        'picture' => asset('website/img/home/awards/environment.png'),
                        'description' => 'Diamond Ranking QCP CD Room at the 17th National Quality and Productivity Convention and International Quality & Productivity Convention in 2013.'
                    ],
                    (object)[
                        'name' => '1st Winner Suggestion System',
                        'picture' => asset('website/img/home/awards/environment.png'),
                        'description' => '1st Winner in the Suggestion System Category at Innovastra 35.'
                    ],
                ],
                'Other Certificates and Awards' => [
                    (object)[
                        'name' => 'Best on Export Contribution & Growth',
                        'picture' => asset('website/img/home/awards/environment.png'),
                        'description' => 'Twice recognized for Achivement in Best on Export Contribution & Growth over the last 5 years, in 2020 and 2024, held by PT Astra Otoparts Tbk'
                    ],
                    (object)[
                        'name' => 'Stategic x-EV Ecosystem Supply Pioneering Award',
                        'picture' => asset('website/img/home/awards/environment.png'),
                        'description' => 'Achievement in Strategic x-EV Ecosystem Supply Pioneering Award in 2024, held by PT Astra Otoparts Tbk.'
                    ],
                    (object)[
                        'name' => 'Best Implementation of Digitalization & Industry 4.0',
                        'picture' => asset('website/img/home/awards/environment.png'),
                        'description' => 'Achievement in Best Implementation of Digitalization & Industry 4.0 in 2023, held by PT Astra Otoparts.'
                    ],
                    (object)[
                        'name' => 'AGC & AFC Award',
                        'picture' => asset('website/img/home/awards/environment.png'),
                        'description' => 'Achievement of 5 AGC & AFC Awards, in 2019, 2020, 2022, 2023, and 2024, held by PT Astra Otoparts '
                    ],
                ]
            ];
        } else {
            $banner = asset('website/img/about/banner-awards.jpg');
            $subtitle = 'PT AISIN Indonesia Automotive';
            $awards = [
                'Environment Awards' => [
                    (object)[
                        'name' => 'Astra Green Company (AGC) and Astra Friendly Company (AFC)',
                        'picture' => asset('website/img/home/awards/environment.png'),
                        'description' => 'Achieve GOLD for Astra Green Company (AGC) and 4-Star for Astra Friendly Company (AFC) 
                        in the Manufacturing Category for implementing their Environmental Management Systems in 2024'
                    ],
                    (object)[
                        'name' => 'BLUE PROPER KLHK RI',
                        'picture' => asset('website/img/home/awards/environment.png'),
                        'description' => 'Achieved the BLUE PROPER Rating (Corporate Performance Rating Program in Environmental Management) 
                        from the Ministry of Environment and Forestry (KLHK RI)  in 2022, 2023, 2024'
                    ],
                    (object)[
                        'name' => 'Kaizen Festival 36th by TMC',
                        'picture' => asset('website/img/home/awards/environment.png'),
                        'description' => 'Achieve the Gold Category at QCC Kaizen Festival 36th carrying 
                        the theme of Environmental Sustainability Initiatives'
                    ],
                ],
                'Corporate Social Responsibility Awards' => [
                    (object)[
                        'name' => 'West Java Development Partner',
                        'picture' => asset('website/img/home/awards/environment.png'),
                        'description' => "West Java Development Partner through the Company's CSR/PKBL Program in 2017."
                    ],
                ],
                'Customer Awards' => [
                    (object)[
                        'name' => 'Appreciation for Quality Target Achivement held by PT Toyota Boshoku Indonesia',
                        'picture' => asset('website/img/home/awards/environment.png'),
                        'description' => 'Appreciation for Quality Target Achivement In Recognition of The Outstanding Contribution in 2016, held by PT Toyota Boshoku Indonesia'
                    ],
                    (object)[
                        'name' => 'Excellent Performance for Support After Sales Business held by PT Mitsubishi Motors Krama Yudha Indonesia',
                        'picture' => asset('website/img/home/awards/environment.png'),
                        'description' => 'In Recognition for Excellent Performance for Support After Sales Business of MMKI in 2022 Period, held by PT Mitsubishi Motors Krama Yudha Indonesia.'
                    ],
                    (object)[
                        'name' => 'After Sales Performance Award held by PT Mitsubishi Motors Krama Yudha Indonesia',
                        'picture' => asset('website/img/home/awards/environment.png'),
                        'description' => 'After Sales Performance Award in Recognition of The Excellent Performance to Support MMKI After Sales Business in 2020, held by PT Mitsubishi Motors Krama Yudha Indonesia.'
                    ],
                    (object)[
                        'name' => 'Appreciation of Support After Sales of Best Delivery and Quality held by PT Mitsubishi Motors Krama Yudha Indonesia',
                        'picture' => asset('website/img/home/awards/environment.png'),
                        'description' => 'Appreciation of Support After Sales of Best Delivery and Quality Fiscal Year 2023, held by PT Mitsubishi Motors Krama Yudha Indonesia.'
                    ],
                    (object)[
                        'name' => 'Lighthouse Industry 4.0 by the Ministry of Industry',
                        'picture' => asset('website/img/home/awards/environment.png'),
                        'description' => 'Lighthouse Industry 4.0 by the Ministry of Industry in 2022.'
                    ],
                    (object)[
                        'name' => 'INDI 4.0 Award in the Supply Chain Management Category by the Ministry of Industry',
                        'picture' => asset('website/img/home/awards/environment.png'),
                        'description' => 'INDI 4.0 Award in the Supply Chain Management Category by the Ministry of Industry in 2022.'
                    ],
                    (object)[
                        'name' => 'Best Compliments Inalum Award held by PT Indonesia Asahan Aluminium',
                        'picture' => asset('website/img/home/awards/environment.png'),
                        'description' => 'Best Compliments Inalum Award, held by PT Indonesia Asahan Aluminium.'
                    ],
                    (object)[
                        'name' => 'Special Appreciation R-NR Project Contributionheld by PT Toyota Motor Manufacturing Indonesia',
                        'picture' => asset('website/img/home/awards/environment.png'),
                        'description' => 'Special Appreciation R-NR Project Contribution in 2015, held by PT Toyota Motor Manufacturing Indonesia'
                    ],
                ],
                'TQM Awards' => [
                    (object)[
                        'name' => '3rd Winner Inspection Shop Team Member',
                        'picture' => asset('website/img/home/awards/environment.png'),
                        'description' => '3rd Winner Inspection Shop Team Member in 2023 Manufacturing Skill Interchange Festival'
                    ],
                ],
            ];
        }

        $breadcrumbs = [
            (object)[
                'name' => 'Awards',
                'url' => route('awards'),
                'active' => true,
            ],
            (object)[
                'name' => $subtitle,
                'url' => route('award-list', $company),
                'active' => true,
            ],
        ];

        return view('website.pages.about.award.awards', compact('foreword', 'awards', 'banner', 'subtitle', 'breadcrumbs'));
    }

    public function productIndex()
    {
        return view('website.pages.product.index');
    }

    public function products($product)
    {
        $title  = 'Products';
        $subtitle = '';
        $products = [];

        switch ($product) {
            case 'body-part':
                $subtitle = 'Body Part';
                $banner = asset('website/img/home/products/bodypart-doorlock.jpg');
                $products = [
                    (object) [
                        'name' => 'Door Lock',
                        'picture' => asset('website/img/home/products/bodypart-doorlock.jpg'),
                        'description' => 'This locking-unlocking key is an important safety feature that functions firmly to hold the door onto the body while locking. AISIN Indonesia manufactures door locks using the laser welding technology.',
                        'manufacturer' => 'PT AISIN Indonesia',
                    ],
                    (object) [
                        'name' => 'Striker',
                        'picture' => asset('website/img/home/products/bodypart-striker.jpg'),
                        'description' => 'A mechanical counterpart to the door lock that hooks and locks door to body',
                        'manufacturer' => 'PT AISIN Indonesia',
                    ],
                    (object) [
                        'name' => 'Door Hinge',
                        'picture' => asset('website/img/home/products/bodypart-doorhinge.jpg'),
                        'description' => 'A mechanical part tahat connects side door with body, allowing only the ideal opening angle.',
                        'manufacturer' => 'PT AISIN Indonesia',
                    ],
                    (object) [
                        'name' => 'Door Check',
                        'picture' => asset('website/img/home/products/bodypart-doorcheck.jpg'),
                        'description' => 'A device which controls the closing of a door and prevents it from slamming.',
                        'manufacturer' => 'PT AISIN Indonesia',
                    ],
                    (object) [
                        'name' => 'Door Frame',
                        'picture' => asset('website/img/home/products/bodypart-doorframe.jpg'),
                        'description' => 'The main frame from car door. Frame product made from 0.8-0.9 mm coil plate through profile roll forming process to ensure strong but light structure. AISIN  Indonesia manufactures the door frame parts for 80% of all cars using DF in Indonesia.',
                        'manufacturer' => 'PT AISIN Indonesia',
                    ],
                    (object) [
                        'name' => 'Outside Handle',
                        'picture' => asset('website/img/home/products/bodypart-outsidehandle.png'),
                        'description' => "The Outside Handle is a device that allows for easy opening of a vehicle's door. It provides convenient access for entering the vehicle. Additionally, certain models may include a feature that can be operated using a key or smart button.",
                        'manufacturer' => 'PT AISIN Indonesia Automotive',
                    ],
                    (object) [
                        'name' => 'Power Sliding Door (PSD) System',
                        'picture' => asset('website/img/home/products/bodypart-psd.png'),
                        'description' => "The Power Sliding Door (PSD) is a feature found in vehicles, particularly vans and minivans, that allows for automatic opening and closing of sliding doors. Its primary function is to enhance passenger convenience by providing easier access to the vehicle's interior, especially for passengers seated in the rear. The PSD system is typically operated by electric motors and controlled by sensors, enabling hands-free or remote operation for added convenience. This feature improves accessibility, particularly in situations where passengers have their hands full or limited mobility, and it often includes safety features such as obstacle detection to prevent accidents during door operation.",
                        'manufacturer' => 'PT AISIN Indonesia Automotive',
                    ],
                    (object) [
                        'name' => 'Center Pillar Garnish',
                        'picture' => asset('website/img/home/products/bodypart-centerpillar.png'),
                        'description' => "The Center Pillar Garnishment is located on the center pillar of a vehicle's body. It serves to enhance the visual appearance of the vehicle's interior and exterior and provides additional protection of cover certain structural elements within the center pillar.",
                        'manufacturer' => 'PT AISIN Indonesia Automotive',
                    ],
                    (object) [
                        'name' => 'Power Seat Motor Assembly',
                        'picture' => asset('website/img/home/products/bodypart-powerseatmotor.png'),
                        'description' => 'The Power Seat Motor is a component of power-adjustable seats in vehicles, responsible for moving the seat forward, backward, up, and down, as well as adjusting the seatback angle. Its main function is to provide convenient and customizable seating positions for the driver and passengers, enhancing comfort and ergonomics. Powered by electricity, the motor translates input from seat adjustment controls into mechanical movement, allowing occupants to achieve their desired seating position with ease.',
                        'manufacturer' => 'PT AISIN Indonesia Automotive',
                    ],
                ];
                break;
            case 'drive-train':
                $subtitle = 'Drive Train';
                $banner = asset('website/img/home/products/drivetrain-clutchcover.jpg');
                $products = [
                    (object) [
                        'name' => 'HV Dumper',
                        'picture' => asset('website/img/home/products/drivetrain-hvdumper.png'),
                        'description' => 'A mechanical device which transfer the rotational power from the engine to the wheels and generator motor. AISIN Indonesia is the first manufacturer of Hybrid Damper Indonesia.',
                        'manufacturer' => 'PT AISIN Indonesia',
                    ],
                    (object) [
                        'name' => 'Clutch Disc',
                        'picture' => asset('website/img/home/products/drivetrain-clutchdisc.jpg'),
                        'description' => 'A device for connecting and disconnectiong between the transmission and engine when starting the vehicle or changing gears.',
                        'manufacturer' => 'PT AISIN Indonesia',
                    ],
                    (object) [
                        'name' => 'Clutch Cover',
                        'picture' => asset('website/img/home/products/drivetrain-clutchcover.jpg'),
                        'description' => 'The component in the clutch system that functions to clamp the clutch disc is the pressure plate.',
                        'manufacturer' => 'PT AISIN Indonesia',
                    ],
                ];

                break;
            case 'engine-part':
                $subtitle = 'Engine Part';
                $banner = asset('website/img/home/products/engineparts-cylinderheadcover.jpg');
                $products = [
                    (object) [
                        'name' => 'Intake Manifold',
                        'picture' => asset('website/img/home/products/enginepart-intakemanifold.jpg'),
                        'description' => 'Part of engine that supplies the fuel/airmixture to the cylinders. AISIN Indonesia manufactures 800,000 Intake Manifolds/year for Toyota, Daihatsu, and Suzuki.',
                        'manufacturer' => 'PT AISIN Indonesia',
                    ],
                    (object) [
                        'name' => 'Cylinder Head Cover',
                        'picture' => asset('website/img/home/products/engineparts-cylinderheadcover.jpg'),
                        'description' => 'Part which covers the camshaft of an engine, functions as lubrication chamber to grease cam shaft of car engine.',
                        'manufacturer' => 'PT AISIN Indonesia',
                    ],
                    (object) [
                        'name' => 'Engine Front Module',
                        'picture' => asset('website/img/home/products/enginepart-enginefrontmodule.jpg'),
                        'description' => 'The Engine Front Module or Timing Chain Cover (TCC) is positioned at the front of the engine block and houses crucial components like the timing chain or belt, tensioners, guides, and sometimes the water pump. Its primary function is to protect and enclose these components, ensuring proper engine timing by synchronizing valve operation with piston movement.',
                        'manufacturer' => 'PT AISIN Indonesia Automotive',
                    ],
                    (object) [
                        'name' => 'Camshaft Housing',
                        'picture' => asset('website/img/home/products/enginepart-camshafthousing.jpg'),
                        'description' => "The Camshaft Housing is a component of the engine that encloses and supports the camshaft, which is responsible for controlling the opening and closing of the engine's valves. Its main function is to provide a secure housing for the camshaft, ensuring proper alignment and operation of the valves for optimal engine performance.",
                        'manufacturer' => 'PT AISIN Indonesia Automotive',
                    ],
                    (object) [
                        'name' => 'Water Pump',
                        'picture' => asset('website/img/home/products/enginepart-waterpump.png'),
                        'description' => 'The Water Pump is responsible for circulating coolant throughout the engine to regulate its temperature. Its main function is to pump coolant from the radiator through the engine block and cylinder head, where it absorbs heat, and then returns it to the radiator to dissipate that heat.',
                        'manufacturer' => 'PT AISIN Indonesia Automotive',
                    ],
                    (object) [
                        'name' => 'Oil Pump',
                        'picture' => asset('website/img/home/products/enginepart-oilpump.png'),
                        'description' => 'The Oil Pump is responsible for drawing up the oil from the oil pan and delivering it to lubricate the various parts of the engine. Its main function is to provide lubrication to the friction surfaces, reducing wear and ensuring smooth operation.',
                        'manufacturer' => 'PT AISIN Indonesia Automotive',
                    ],
                    (object) [
                        'name' => 'Oil Pan',
                        'picture' => asset('website/img/home/products/enginepart-oilpan.png'),
                        'description' => 'An oil pan or oil tank is a container that functions to temporarily store oil. The installation location for this component is at the bottom of the engine block. When changing the oil, this component must be emptied and cleaned.',
                        'manufacturer' => 'PT AISIN Indonesia Automotive',
                    ],
                ];

                break;
            case 'electrical-part':
                $subtitle = 'Electrical Part';
                $banner = asset('website/img/home/products/electricalpart-ecu.jpg');
                $products = [
                    (object) [
                        'name' => 'Electronic Control Unit (ECU) W/P',
                        'picture' => asset('website/img/home/products/electricalpart-ecu.jpg'),
                        'description' => "The ECU Water Pump is an electronically controlled water pump in vehicles managed by the Electronic Control Unit (ECU). Its function is to regulate coolant circulation within the engine and cooling system, maintaining optimal engine temperature by adjusting the pump's speed and flow rate based on engine parameters monitored by the ECU, such as coolant temperature, engine load, and driving conditions. This ensures effective cooling while minimizing energy consumption, improving fuel efficiency, and reducing emissions.",
                        'manufacturer' => 'PT AISIN Indonesia Automotive',
                    ],
                    (object) [
                        'name' => '4WD Electronic Control Unit (ECU) CASE ASSEMBLY ',
                        'picture' => asset('website/img/home/products/electricalpart-ecu.jpg'),
                        'description' => 'The door lock is a mechanical device that is used to secure the doors of a vehicle. It is typically located on the door panel and is operated by a key or a remote control. The door lock is designed to prevent unauthorized access to the vehicle and to prevent the doors from being opened while the vehicle is in motion.',
                        'manufacturer' => 'PT AISIN Indonesia Automotive',
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
                'active' => true,
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
                'title' => 'AISIN Indonesia',
                'address' => 'East Jakarta Industrial Park (EJIP) Plot 5J South Cikarang, Indonesia 17550',
                'phone' => '(+62 21) 8970909',
                'map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.5115919900622!2d107
                    .10894440093854!3d-6.327687956420059!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13
                    .1!3m3!1m2!1s0x2e699a8658dfc3b3%3A0xb2c5ecd250972b22!2sAISIN%20Indonesia%20
                    Pt.%2C%20Sukaresmi%2C%20Cikarang%20Sel.%2C%20Kabupaten%20Bekasi%2C%20Jawa%2
                    0Barat!5e0!3m2!1sen!2sid!4v1730442972059!5m2!1sen!2sid',
            ],
            (object) [
                'title' => 'AISIN Indonesia Automotive',
                'address' => 'Kawasan Industri KIIC Lot LL No. 9 - 10, Jl. Harapan 8, 
                    Kel. Parung Mulia, Kec. Ciampel, 
                    Parungmulya, Kec. Ciampel, Karawang, Jawa Barat 41361',
                'phone' => '	(+62 267) 8643131',
                'map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965
                    .0397103475207!2d107.29623911177569!3d-6.388877493574868!2m3!1f0!2f0!3f0!3m2!
                    1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69758dcd24635b%3A0x595bd54f4c69da48!2sPT%20
                    AISIN%20Indonesia%20Automotive!5e0!3m2!1sen!2sid!4v1730444199231!5m2!1sen!2sid',
            ],
        ];

        return view('website.pages.contact', compact('banner', 'subtitle', 'contacts'));
    }
}
