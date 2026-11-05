<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Static Portfolio
|--------------------------------------------------------------------------
|
| The entire site is hardcoded here as plain PHP arrays and rendered by
| Blade templates. No database, no models, no migrations.
|
*/

$nav = [
    ['label' => 'Home', 'href' => '#home', 'icon' => 'fas fa-house'],
    ['label' => 'About', 'href' => '#about', 'icon' => 'fas fa-user'],
    ['label' => 'Education', 'href' => '#education', 'icon' => 'fas fa-graduation-cap'],
    ['label' => 'Certificates', 'href' => '#certificates', 'icon' => 'fas fa-award'],
    ['label' => 'Projects', 'href' => '#projects', 'icon' => 'fas fa-diagram-project'],
    ['label' => 'Contact', 'href' => '#contact', 'icon' => 'fas fa-envelope'],
];

$profile = [
    'name' => 'Shainah Mae B. Blaza',
    'short_name' => 'Shainah',
    'role' => 'Information Technology Student',
    'tagline' => 'A BSIT student willing to learn and gain more knowledge about the IT industry.',
    'bio' => 'I\'m Shainah, a BSIT student at Data Center College of the Philippines. I\'m eager to learn and grow in the IT industry — exploring software development, web technologies and more, one project at a time. I believe every new skill, class and challenge is a step closer to becoming a confident IT professional.',
    'image' => asset('images/shai_profile.jpg'),
    'location' => 'Baddec Palao, Bangued, Abra',
    'resume_url' => 'mailto:Shainahblaza.26@gmail.com',
];

$education = [
    [
        'institution' => 'Data Center College of the Philippines',
        'degree' => 'Secondary Education',
        'period' => '2022 — 2023',
        'detail' => '',
    ],
    [
        'institution' => 'Data Center College of the Philippines',
        'degree' => 'BSIT — Bachelor of Science in Information Technology',
        'period' => '2026 — Present',
        'detail' => '',
    ],
];

$certificates = [
    [
        'title' => 'Online Safety Through Netiquette',
        'issuer' => 'DICT',
        'year' => 'July 23, 2026',
        'image' => asset('images/shai_cert.jpg'),
    ],
    [
        'title' => 'DOST Certificate',
        'issuer' => 'DOST',
        'year' => '2026',
        'description' => 'Certificate from the Department of Science and Technology, recognizing completion of a specialized training program.',
        'image' => asset('images/cert/DOST.jpe'),
    ],
    [
        'title' => 'Cisco Certification',
        'issuer' => 'Cisco',
        'year' => '2026',
        'description' => 'Cisco certification validating networking skills and knowledge in IT infrastructure.',
        'image' => asset('images/cert/cisco.jpe'),
    ],
];

$projects = [
    [
        'title' => 'Permanent Records',
        'description' => 'This is my first project, a simple VB.Net application that allows users to manage and store permanent records. It features a user-friendly interface, data validation, and basic CRUD operations.',
        'tech' => ['VB. Net'],
        'repo' => 'https://github.com/shainahblaza26-maker/shainahblaza-portfolio.git',
        'image' => asset('images/proj_1.jpg'),
    ],
    [
        'title' => 'Grade Computation System',
        'description' => 'A system designed to automate the process of computing student grades, providing an efficient way to manage and calculate academic performance.',
        'tech' => ['VB. Net'],
        'repo' => 'https://github.com/shainahblaza26-maker',
        'image' => asset('images/proj_2.jpg'),
    ],
    [
        'title' => 'Capstone Project',
        'description' => 'The Patient Record Management System is designed to help the Rural Health Unit of Peñarrubia manage patient information and healthcare services efficiently. It provides organized digital records, easier patient monitoring, faster consultation documentation, and improved management of health-related data.',
        'tech' => ['PHP', 'Laravel', 'MySQL'],
        'repo' => 'https://github.com/shainahblaza26-maker',
        'image' => asset('images/capstone/capstone.jpe'),
    ],
    [
        'title' => 'Flutter Mobile App',
        'description' => 'A cross-platform mobile application built with Flutter, delivering a smooth and responsive user experience on both Android and iOS devices.',
        'tech' => ['Flutter', 'Dart'],
        'repo' => 'https://github.com/shainahblaza26-maker',
        'image' => asset('images/flutter/flutter.jpe'),
    ],
    [
        'title' => 'Integration System',
        'description' => 'This page serves as the main page of the Barangay Document Request and Processing Information System (BDRPIS) for Barangay Linasin, Zone 1. It allows residents to request official barangay documents online without needing to visit the Barangay Hall immediately. Users can view the available documents, submit their requests, and track the status of their applications. Each request is reviewed by the Barangay Secretary before the document is released at the Barangay Hall.',
        'tech' => ['PHP', 'JavaScript', 'API'],
        'repo' => 'https://github.com/shainahblaza26-maker',
        'image' => asset('images/integ/integ.jpe'),
    ],
];

$socials = [
    ['label' => 'GitHub', 'icon' => 'github', 'url' => 'https://github.com/shainahblaza26-maker'],
    ['label' => 'Telegram', 'icon' => 'telegram', 'url' => 'https://t.me/+639297967264'],
    ['label' => 'TikTok', 'icon' => 'tiktok', 'url' => 'https://www.tiktok.com/@nahshaiblaza'],
    ['label' => 'Threads', 'icon' => 'threads', 'url' => 'https://www.threads.net/@shaiinaxxss'],
    ['label' => 'Instagram', 'icon' => 'instagram', 'url' => 'https://www.instagram.com/shaiinaxxss'],
    ['label' => 'Facebook', 'icon' => 'facebook', 'url' => 'https://www.facebook.com/shainahmae.blaza'],
];

$contact = [
    'email' => 'Shainahblaza.26@gmail.com',
    'phone' => '+63 929 796 7264',
    'location' => 'Baddec Palao, Bangued, Abra',
    'email_url' => 'mailto:Shainahblaza.26@gmail.com',
    'phone_url' => 'tel:+639297967264',
    'github' => 'https://github.com/shainahblaza26-maker',
];

Route::get('/', function () use (
    $nav,
    $profile,
    $education,
    $certificates,
    $projects,
    $socials,
    $contact
) {
    return view('home', compact(
        'nav',
        'profile',
        'education',
        'certificates',
        'projects',
        'socials',
        'contact'
    ));
})->name('home');
