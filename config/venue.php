<?php

return [
    'name' => 'Oriental Heritage Hall',
    'tagline' => 'Luxury banquet hall · Wedding & events venue',
    'phone' => env('VENUE_PHONE', ''),
    'whatsapp' => env('VENUE_WHATSAPP', ''),
    'email' => env('VENUE_EMAIL', 'enquiries@orientalheritagehall.co.uk'),
    'address' => env('VENUE_ADDRESS', 'London, United Kingdom'),
    'google_business_url' => env('GOOGLE_BUSINESS_URL', ''),
    'virtual_tour_url' => env('VIRTUAL_TOUR_URL', ''),
    'logo' => '/orientalheritagehall.jpeg',
    'hero_video' => null,
    'hero_poster' => '/orientalheritagehall.jpeg',
    'capacity' => [
        ['value' => '50–2,000', 'label' => 'Guests'],
        ['value' => 'Multiple', 'label' => 'Stage options'],
        ['value' => 'Flexible', 'label' => 'Catering options'],
        ['value' => 'Tailored', 'label' => 'Décor packages'],
    ],
    'spaces' => [
        ['name' => 'The Grand Hall', 'label' => 'A generous canvas', 'description' => 'A versatile, beautifully proportioned setting for ceremonies, receptions and large-scale celebrations.', 'class' => 'media-grand'],
        ['name' => 'The Heritage Suite', 'label' => 'Intimate occasions', 'description' => 'A considered room for private dinners, family gatherings and smaller celebrations.', 'class' => 'media-suite'],
        ['name' => 'The Arrival Gallery', 'label' => 'First impressions', 'description' => 'A memorable entrance sequence for welcome drinks, photographs and a graceful guest arrival.', 'class' => 'media-arrival'],
    ],
    'packages' => [
        ['name' => 'Silver', 'intro' => 'A considered foundation for an elegant celebration.', 'items' => ['Venue hire', 'Flexible guest capacity', 'Catering consultation', 'Essential stage provision', 'Event coordination']],
        ['name' => 'Gold', 'intro' => 'A beautifully balanced experience with room to personalise.', 'recommended' => true, 'items' => ['Venue hire', 'Enhanced catering selection', 'Food station options', 'Stage and lighting design', 'Décor consultation', 'Bridal suite', 'Event coordination']],
        ['name' => 'Platinum', 'intro' => 'A fully tailored celebration, shaped around your vision.', 'items' => ['Venue hire', 'Bespoke menu consultation', 'Curated food stations', 'Signature stage and décor', 'Lighting design', 'Bridal suite', 'Dedicated event coordination', 'Parking assistance']],
    ],
    'gallery' => [
        ['title' => 'A considered beginning', 'category' => 'Venue Details', 'class' => 'media-gallery-1'],
        ['title' => 'Room to make it yours', 'category' => 'Weddings', 'class' => 'media-gallery-2'],
        ['title' => 'The details guests remember', 'category' => 'Décor and Stages', 'class' => 'media-gallery-3'],
        ['title' => 'An evening in the making', 'category' => 'Private Parties', 'class' => 'media-gallery-4'],
        ['title' => 'Gather around the table', 'category' => 'Food and Catering', 'class' => 'media-gallery-5'],
        ['title' => 'A room for every occasion', 'category' => 'Corporate', 'class' => 'media-gallery-6'],
    ],
    'faqs' => [
        ['q' => 'How far in advance should we enquire?', 'a' => 'We recommend beginning the conversation as soon as you have a date in mind. Our team can talk through options even while plans are still taking shape.'],
        ['q' => 'Can the hall be styled around our celebration?', 'a' => 'Yes. Stage, lighting, table styling and entrance details can be shaped around your occasion and cultural traditions.'],
        ['q' => 'Do you offer menu tastings?', 'a' => 'Menu tastings and bespoke menu consultations can be arranged as part of your planning journey. Please share your requirements with the team.'],
        ['q' => 'Is a virtual tour available?', 'a' => 'A virtual-tour integration is ready for the venue’s confirmed 360° link. Until that link is supplied, you can enquire for a personal viewing.'],
    ],
    'reviews' => [],
];
