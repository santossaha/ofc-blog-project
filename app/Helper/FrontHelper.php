<?php

use Illuminate\Support\Facades\DB;
use App\Models\Blog;
use Illuminate\Support\Str;

function makeSlug($slug){
    return Str::slug($slug, '-');
}

function whereSlug($slug){
    return array(
        'status' => 1,
        'slug' => $slug
    );
}

function getTestimonial() {
    return DB::table('testimonials')->where('status', 1)->where('deleted_at', '=' , null)->get();
}

function getBlog($limit = 3) {
    return   Blog::where('status', 1)->orderBy('id', 'desc')->limit($limit)->get();
}


function getService() {
    return DB::table('services')->where('status',1)->get();
}

function getIndustri() {
    return DB::table('industris')->where('status',1)->get();
}

function frontHeader() {
    return [
                [
                    'name' => 'Service',
                    'routeName'=> '#',
                    'class' => 'item-products st-has-dropdown nav-link',
                    'data-dropdown' => 'Services',
                    'submenu' => 'getService()',
                ],
                [
                    'name' => 'We Serve',
                    'routeName'=> '#', //Industri
                    'class'=> 'item-products st-has-dropdown nav-link',
                    'data-dropdown' => 'IndystriesWeServe',
                    'submenu' => 'getIndystri()',
                ],
                [
                    'name' => 'Portfolio',
                    'routeName'=> 'portfolio',
                    'class'=>'nav-link',
                ],
                [
                    'name' => 'Blog',
                    'routeName'=> 'blogs',
                    'class'=>'nav-link',
                ],
                [
                    'name' => 'Company',
                    'routeName'=> '#',
                    'class'=> 'item-blog st-has-dropdown nav-link',
                    'data-dropdown' => 'components',
                ]
            ];
}

function frontHeaderSub() {

    $arrServices = DB::table('services')->select(['home_description as manu_name', 'slug'])->where('status',1)->get();
    $arrIndustris = DB::table('industris')->select(['title as manu_name', 'slug'])->where('status',1)->get();
    return [
                [
                    'data-dropdown' => 'Services',
                    'sub-menu-list' => $arrServices,
                    'routeName' => 'service.detail',
                    'div-section' => 2,
                ],
                [
                    'data-dropdown' => 'IndystriesWeServe',
                    'sub-menu-list' => $arrIndustris,
                    'routeName' => 'industry.detail',
                    'div-section' => 4
                ],
                [
                    'data-dropdown' => 'components',
                    'sub-menu-list' => [
                            [
                                'name' => 'About',
                                'routeName' => 'about-us',
                                'icon-class' => 'fas fa-palette',
                            ],
                            // [
                            //     'name' => 'Clients Testimonials',
                            //     'slug'=> 'clients-testimonials',
                            //     'routeName' => 'about',
                            //     'icon-class' => 'fab fa-wpforms',
                            // ],
                            [
                                'name' => 'Disclaimer',
                                'routeName' => 'disclaimer',
                            ],
                            [
                                'name' => 'Privacy Policy',
                                'routeName' => 'privacy-policy',
                            ],
                            [
                                'name' => 'Data Security',
                                'routeName' => 'data-security',
                            ],
                        ],
                ],
            ];
}

function getSocialMedia() {
    return [
                [
                    'name' => 'Facebook',
                    'url'=> 'https://www.facebook.com/New-York-Mobile-Tech-106900948767235',
                    'class' => 'fa-facebook',
                ],
                [
                    'name' => 'Twitter',
                    'url'=> 'https://twitter.com/nymobiletech', 
                    'class'=> 'fa-twitter',
                ],
                [
                    'name' => 'Instagram',
                    'url'=> 'https://www.instagram.com/newyorkmobiletech/',
                    'class'=>'fa-instagram',
                ],
                [
                    'name' => 'Pinterest',
                    'url'=> 'https://www.pinterest.com/newyorkmobiletech/',
                    'class'=>'fa-pinterest',
                ],
            ];
}

function getClintImageList($c=null) {
    
    return [
                [
                    'image_path' => '/logos/classic-design-studio.png',
                    'image_alt' =>'classic design studio',
                ],
                [
                    'image_path' => '/logos/hello-sunshine.png',
                    'image_alt' => 'hello sunshine',
                ],
                [
                    'image_path' => '/logos/pure-james-handmade.png',
                    'image_alt' => 'pure james handmade',
                ],
                [
                    'image_path' => '/logos/hand-crafted.png',
                    'image_alt' => 'hand crafted',
                ],
                [
                    'image_path' => '/logos/art-studio.png',
                    'image_alt' => 'art studio',
                ],
                [
                    'image_path' => '/logos/handmade-with-love.png',
                    'image_alt' => 'handmade with love',
                ],
            ];
}

function getHomeService() {

    return [
                [
                    'icon' => 'box',
                    'title' => 'Mobile App Development',
                    'home_description' => "Framing lucrative app designs through modern technologies and frameworks.",
                ],
                [
                    'icon' => 'settings',
                    'title' => 'Web Development & CMS',
                    'home_description' => "Creating eye-catching web apps with custom designs and unique contents.",
                ],
                [
                    'icon' => 'award', 
                    'title' => 'UI/UX Design',
                    'home_description' => "Offering dedicated and professional UI UX design services in New York.",
                ],
                [
                    'icon' => 'anchor',
                    'title' => 'Enterprise App Development',
                    'home_description' => "Highly productive and market-ready enterprise app development solutions.",
                ],
            ];
}

function customerSuccessNumberRecoardList(){
    return [
        [
            'name' => 'Year In Business',
            'number' => '1',
            'sign' => '+',
            'icon' => '/success-number/year-in-business.svg',
            'alt' => 'year in business',
        ],
        [
            'name' => 'Team Strength',
            'number' => '30',
            'sign' => '+',
            'icon' => '/success-number/team-strength.svg',
            'alt' => 'team strength',
        ],
        [
            'name' => 'Repeat Business', 
            'number' => '80',
            'sign' => '+',
            'icon' => '/success-number/repeat-business.svg',
            'alt' => 'repeat business',
        ],
        [
            'name' => 'Mobile Apps Delivered',
            'number' => '20',
            'sign' => '+',
            'icon' => '/success-number/mobile-apps-delivered.svg',
            'alt' => 'mobile apps delivered',
        ],
        [
            'name' => 'Happy Clients',
            'number' => '25',
            'sign' => '+',
            'icon' => '/success-number/happy-clients.svg',
            'alt' => 'happy clients',
        ],
        [
            'name' => 'Ontime Delivery',
            'number' => '100',
            'sign' => '%',
            'icon' => '/success-number/ontime-delivery.svg',
            'alt' => 'ontime delivery',
        ],
    ];
}

function hireDeveloper() {
    return [
        [
            'year' => '1-3 Years',
            'description' => 'Includes simple but powerful functionality for individuals and small teams. You can upgrade on the way',
            'future_list' => [
                [
                    'name' => 'Cras justo odio',
                    'visible'  => false,
                ],
                [
                    'name' => 'Dapibus ac facilisis in',
                    'visible'  => false,
                ],
                [
                    'name' => 'Morbi leo risus',
                    'visible'  => false,
                ],
                [
                    'name' => 'Porta ac consectetur ac',
                    'visible'  => true,
                ],
                [
                    'name' => 'Vestibulum at eros',
                    'visible'  => true,
                ],
            ],
        ],
        [
            'year' => '3-5 Years',
            'description' => 'For settle companies looking to stay competitive in the market and growing with the technology',
            'future_list' => [
                [
                    'name' => 'Cras justo odio',
                    'visible'  => false,
                ],
                [
                    'name' => 'Dapibus ac facilisis in',
                    'visible'  => false,
                ],
                [
                    'name' => 'Morbi leo risus',
                    'visible'  => true,
                ],
                [
                    'name' => 'Porta ac consectetur ac',
                    'visible'  => true,
                ],
                [
                    'name' => 'Vestibulum at eros',
                    'visible'  => true,
                ],
            ],
        ],
        [
            'year' => '5+ Year',
            'description' => 'Everything you can get from a professional solution to keep your business on its way to success',
            'future_list' => [
                [
                    'name' => 'Cras justo odio',
                    'visible'  => true,
                ],
                [
                    'name' => 'Dapibus ac facilisis in',
                    'visible'  => true,
                ],
                [
                    'name' => 'Morbi leo risus',
                    'visible'  => true,
                ],
                [
                    'name' => 'Porta ac consectetur ac',
                    'visible'  => true,
                ],
                [
                    'name' => 'Vestibulum at eros',
                    'visible'  => true,
                ],
            ],
        ],
    ];
}

// function getAboutCaseStudyList() {

//     return [
//                 [
//                     'icon' => 'box',
//                     'title' => 'Full Code',
//                     'short_description' => "Doorwaycomes with fully documented HTML, SASS, JS, PHP code, all in a well organized and structured way.",
//                 ],
//                 [
//                     'icon' => 'settings',
//                     'title' => 'Free Updates',
//                     'short_description' => "You'll get lifetime free updates as we improve or add new features.",
//                 ],
//                 [
//                     'icon' => 'award', //anchor 
//                     'title' => 'Premium Support',
//                     'short_description' => "In case you need it, We got you covered, with our premium quality fast support service.",
//                 ],
//             ];
// }

function getCounterBox() {

    return [
                [
                    'image' => 'box',
                    'number' => '123',
                    'title' => 'Project',
                ],
                [
                    'image' => 'download-cloud',
                    'number' => '456',
                    'title' => 'Happy Clients',
                ],
                [
                    'image' => 'settings', //anchor 
                    'number' => '789',
                    'title' => 'Business years',
                ],
                [
                    'image' => 'user', //award
                    'number' => '1011',
                    'title' => 'Team',
                ],
            ];
}

function getAboutFeaturesBox() {

    return [
                [
                    'image' => 'phone',
                    'title' => 'Responsive',
                ],
                [
                    'image' => 'settings',
                    'title' => 'Customizable',
                ],
                [
                    'image' => 'award',
                    'title' => 'Clean Code',
                ],
                [
                    'image' => 'star',
                    'title' => 'Creative',
                ],
                [
                    'image' => 'send',
                    'title' => 'Ready-Content',
                ],
                [
                    'image' => 'headphones',
                    'title' => 'Supported',
                ],
                [
                    'image' => 'hard-drive',
                    'title' => 'Documented',
                ],
                [
                    'image' => 'box',
                    'title' => 'Components',
                ],
            ];
}

function getAboutTeamList() {

    return [
                [
                    'name' => 'Rafael Freeman',
                    'designation' => 'Founder &amp; CEO',
                    'image' => '1.jpg',
                    'description' => 'Long time ago, this guy started it all.',
                ],
                [
                    'name' => 'settings',
                    'designation' => 'settings',
                    'image' => '2.jpg',
                    'description' => 'Customizable',
                ],
                [
                    'name' => 'award',
                    'designation' => 'award',
                    'image' => '3.jpg',
                    'description' => 'Clean Code',
                ],
                [
                    'name' => 'star',
                    'designation' => 'star',
                    'image' => '4.jpg',
                    'description' => 'Creative',
                ],
            ];
}

function reviewes()
{
    return array(
        [
            'image' => '1.svg',
            'name' => 'Social Integration',
            'description' => 'Consequuntur ea sapiente ut',
            'like'=>'1.5k',
            'sub'=>'New subscribers'
        ],
        [
            'image' => '2.svg',
            'name' => 'Design Strategy',
            'description' => 'Alias eum expedita illo rem!',
            'like'=>'1.5k',
            'sub'=>'New subscribers'
        ],
        [
            'image' => '3.svg',
            'name' => 'Save Money',
            'description' => 'Consectetur adipisicing elit',
            'like'=>'1.5k',
            'sub'=>'New subscribers'
        ],
        [
            'image' => '4.svg',
            'name' => 'Business Brain',
            'description' => 'Rem repellendus rerum, vel!',
            'like'=>'1.5k',
            'sub'=>'New subscribers'
        ],
        [
            'image' => '5.svg',
            'name' => 'Worldwide Support',
            'description' => 'Consectetur adipisicing elit',
            'like'=>'1.5k',
            'sub'=>'New subscribers'
        ],
        [
            'image' => '6.svg',
            'name' => 'Social Settings',
            'description' => 'Facilis numquam odio sit amet.',
            'like'=>'1.5k',
            'sub'=>'New subscribers'
        ],
        [
            'image' => '7.svg',
            'name' => 'Insightful Statistics',
            'description' => 'facere quasi rem suscipit!',
            'like'=>'1.5k',
            'sub'=>'New subscribers'
        ]
    );
}