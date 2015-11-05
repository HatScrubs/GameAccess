<?php

return [
    'index'        => [
        'table'    => [
            'game'     => 'Game',
            'name'     => 'Name',
            'date'     => 'Date',
            'planned'  => 'Planned',
            'actual'   => 'Actual',
            'schedule' => 'Schedule a new session',
            'offline'  => 'Schedule Offline',
        ],
        'buttons'  => [
            'watch'  => 'Watch',
            'start'  => 'Manage',
            'edit'   => 'Edit',
            'delete' => 'Delete',
        ],
        'sessions' => 'games',
        'players'  => 'players',
    ],
    'offline'      => [
        'title'        => 'Schedule a day there will not be a stream',
        'name'         => 'Title',
        'name_help'    => 'This will be displayed as the title for that stream day.',
        'details'      => 'Details',
        'details_help' => 'Any notes you would like to include as to why it will be offline.',
        'date'         => 'Date',
        'submit'       => 'Save Offline',
    ],
    'watch'        => [
        'no_game'       => 'No game has started yet.',
        'game_finished' => 'Game ended.<br />New password may be coming soon.',
        'password'      => 'The password is',
    ],
    'show'         => [
        'details' => [
            'title'    => 'Session Details',
            'game'     => 'Game',
            'expected' => 'Expected Games/Players',
            'count'    => 'Games so far',
            'buttons'  => [
                'finish' => 'Finish Session',
            ],
        ],
        'active'  => [
            'title'    => 'Active Game',
            'players'  => 'Players',
            'password' => 'Password',
            'help'     => [
                'start'    => 'This button will begin the session causing the home page to come to life for everyone.  This is required to start setting up games.',
                'generate' => 'Once you click this, a password will be generated for the upcoming game.<br />Any users on the site (and subscribed to HatFilms) will be asked to ready up.  This will make sure they are available and ready to play.',
                'send'     => 'Once you click this, {{ session.playerSlots }} players will be selected and have the password shown to them.  All others will be alerted that they are not getting in this game.',
                'new'      => 'Clicking this button will end this game and start up a new one to repeat the cycle.',
            ],
            'buttons'  => [
                'start'    => 'Start Session',
                'generate' => 'Generate Password',
                'send'     => 'Send password to players',
                'new'      => 'Start the next game',
            ],
        ],
    ],
    'title'        => [
        'create' => 'Schedule a new session',
        'edit'   => 'Update session',
    ],
    'form'         => [
        'name'           => 'Session Name',
        'name_help'      => 'This is an optional name to help you identify the session later.',
        'game'           => 'Game',
        'game_help'      => 'The game being played.  This list will auto populate steam games, just start typing.',
        'players'        => 'Player slots',
        'players_help'   => 'How many players can join in per game?',
        'games'          => 'Expected Games',
        'games_help'     => 'How many games are planned?  This does not restrict you from creating more or less on game day.',
        'community'      => 'Community Games',
        'community_help' => 'This determines if the subscribers can join the session or not.',
        'password'       => 'Password Locked',
        'password_help'  => 'This will say whether a password should be generated and displayed to the users.',
        'date'           => 'Date Active',
        'submit'         => 'Save game session!',
    ],
    'playerSteps'  => [
        'ready'    => 'Readied',
        'selected' => 'Selected',
    ],
    'displaySteps' => [
        'inactive' => 'Not started yet.',
        'active'   => 'Active now!',
        'finished' => 'This session has finished.',
    ],
    'messages'     => [
        'offline_title'        => 'Offline',
        'running'              => '(Currently running...)',
        'created'              => 'Session created!',
        'updated'              => 'Session updated!',
        'deleted'              => 'Session deleted!',
        'created_update_steam' => 'Session created.  Please make sure the new game details are correct.',
        'offline'              => [
            'created' => 'Offline scheduled!',
            'updated' => 'Offline updated!',
            'deleted' => 'Offline deleted!',
        ],
    ],
];
