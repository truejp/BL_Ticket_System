<?php

return [
    'api_token'       => env('API_TOKEN', 'akc345cwk3swwFdW'),
    'leads'           => env('HANDESK_LEADS_ENABLED', false),
    'roadmap'         => env('HANDESK_ROADMAP_ENABLED', false),
    'sendRatingEmail' => env('HANDESK_RATING_EMAIL_ENABLED', true),
];
