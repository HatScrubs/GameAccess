<?php

return [
    'index'   => [
        'headers'       => [
            'active'  => 'Active sessions',
            'today'   => 'Today\'s game sessions!',
            'week'    => 'This week\'s sessions',
            'welcome' => 'Thanks for scrubscribing! If you\'re confused on how to use this site, check out the ' . link_to_route('help.user', 'help page') . '!',
        ],
        'active_empty'  => 'No sessions are currently running.  Once a session starts, this section will update to show you.',
        'media'         => ':gameCount games planned with :playerSlots players per game!',
        'buttons'       => [
            'ready'     => 'Ready up!',
            'subscribe' => 'Subscribe to Hat Films on Twitch!',
            'login'     => 'Connect with Twitch',
        ],
        'authorization' => 'Only those that are subscribed to Hat Films on Twitch and logged in can join matches.',
    ],
    'today'   => 'Today',
    'contact' => 'Hat Films Links',
];
