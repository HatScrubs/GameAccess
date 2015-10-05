<?php

return [
    'authed' => [
        'terminology' => [
            'title'    => 'Terminology',
            'intro'    => 'To start, I want to discuss the terminology you will see across this site.  If any of these
                terms are confusing or you would rather something else, just let us know.',
            'session'  => 'Session  &ndash; A <strong>session</strong> is a particular game being played.  So if you were to stream
                and have a set of Rocket League games and a set of GTAV games, that would be two
                <strong>sessions</strong>.  One for each game.',
            'game'     => 'Game  &ndash; A <strong>game</strong> is a particular game played.  In the example, a <strong>game</strong>
                would be a match of Rocket League or an event in GTAV.  A <strong>session</strong> can
                have as many <strong>games</strong> as you want.',
            'ready'    => 'Ready  &ndash; When we mention a user being <strong>ready</strong>, that means they have clicked "Ready up!"
                on the home page.  It means they were active as of you starting the most recent game.',
            'selected' => 'Selected  &ndash; A <strong>selected</strong> user is a user selected from the pool of <strong>ready</strong>
                users to play a game.  These are the users that are given the details to connect to the game.',
            'roll'     => 'Roll  &ndash; When we mention <strong>rolling</strong>, we are referering to picking players to join
                the game.  When we do this, we <strong>roll</strong> a random number between 0 and 100.  This determines
                their base <strong>roll</strong>.  This is expanded further when a user is not chosen for a game, they get
                their "handicap" incremented.  This "handicap" is added to their future <strong>rolls</strong>.  This will
                make people have a better chance to get selected the longer they go without being chosen.  Once a player
                is chosen to play, their "handicap" is reset to zero.',
        ],
        'sessions'    => [
            'title'  => 'Sessions',
            'intro'  => 'Now to go into how to manage sessions.  This will cover everything from creating to managing the
                sessions.  A quick note, only users granted permission can access anything in this area of the site.',
            'crud'   => [
                'title'      => 'CRUD pages',
                'scheduling' => [
                    'title' => 'Scheduling',
                    'body'  => 'To begin, let\'s test out scheduling.  Go to ' . link_to_route('session.create', 'Schedule') . '
                        (also accessed from clicking ' . trans('menu.session') . ' then ' . trans('sessions.index.table.schedule') . ').
                        Here you will see a very basic form.  It contains simple details that you can use to organize and
                        track your sessions.<br /><br />The session name is just a label to better remember what the session
                        is for.  The game is the game being played.  This will automatically search an index of all Steam
                        games.  It will try to match what you type and even account for typo\'s.  I also added ranking
                        based on how many times a game is chosen.  In short, if you play a game more, it will show as the
                        top result more often in the autocomplete.  The player slots is how many people can join each game.
                        This is the number we use to figure out how many users to select and send the password to - do not
                        include yourselves in this number.  Expected games is a nicety.  It is used just to let users on
                        the home screen know about how many games to expect. It isn\'t required to play this many.  Do
                        more, do less, do what you want.  It\'s just an estimation.  The date active field is to say
                        when this session will take place.  This is used on the home page to show upcoming sessions.
                        This is also how sessions are sorted on the ' . trans('menu.session') . ' page.',
                ],
                'list'       => [
                    'title' => 'Listing',
                    'body'  => 'The main ' . trans('menu.session') . ' page will list all scheduled sessions.  It is
                        sorted by the active date.<br />:color_image<br />You may notice the rows being different colors on
                        occasion.  Yellow means that the session is currently running.  Blue means that it is scheduled for
                        today.  Grey means it is a session that was before today.',
                ],
                'editing'    => [
                    'title' => 'Editing',
                    'body'  => 'Editing is basically the same as scheduling except that it has the existing data filled
                        in already.  Modify as needed and save.',
                ],
                'deleting'   => [
                    'title' => 'Deleting',
                    'body'  => ':delete_image<br />The delete button will show a popup asking you to confirm the deletetion.
                        If you select no, nothing happens.  If you select yes, it will be deleted forever. And by forever,
                        we mean forever.',
                ],
            ],
            'manage' => [
                'title'      => 'Managing sessions',
                'start_stop' => [
                    'title' => 'Starting and stopping',
                    'body'  => ':full_image<br />This is the main session page.  It is gotten to by clicking manage on
                        any session in the list view.  When you get here you will see 3 boxes, 2 of which have details in
                        them.  The box on the far left is the details box.  This box shows the overall details of the
                        session, updated in real time.  The only actions it can take is to start and stop the session.
                        Clicking start session will cause the main page of the site to come to life for the users.  Once
                        this button is clicked they will see a page saying to prepare, games will be starting soon.',
                ],
                'create'     => [
                    'title' => 'Create a game',
                    'body'  => 'To create a game, we will move to the middle box. This box is the main thing you will be
                        interacting with.  To begin, all you have to do is click "Generate password".',
                ],
                'generate'   => [
                    'title' => 'Send the password',
                    'body'  => ':generated<br />Now you will see this page.  This shows you the password so that you can
                        set up the game as needed.<br />:readied<br />Players will now see a page asking them to click
                        "Ready up".  When they do, you will see the count of "Players readied" increase.  You will also
                        see the names of the readied players on the right.  I did this in case you happen to be waiting
                        for a specific user to join (AKA Our Lord and Saviour, Cheesus).',
                ],
                'finish'     => [
                    'title' => 'Finish the game',
                    'body'  => ':sent<br />To finish off, click the "Send password to players" button.  This will roll
                        to see who gets access and show the password to those that are chose.  You don\'t need to do
                        anything else.  When you are ready to, click "Start a new game".  This will reset your page and
                        alert everyone that the current game is closed and to wait for the next one.  Something to note,
                        when you click this, all passwords will disappear from users, so it may be best to click it when
                        you are starting the new game.',
                ],
            ],
        ],
        'users'       => [
            'title'   => 'What users see',
            'access'  => '',
            'playing' => '',
        ],
    ],
    'user'   => [
        'introduction' => [
            'title' => 'Introduction',
            'intro' => 'Welcome to the scrubscribers site! This site was designed so that every scrubscriber could enjoy
                a game with Hat Films. We\'ll tell you how to do that below!',
        ],
        'login'        => [
            'title' => 'Login',
            'intro' => 'Firstly, ' . link_to_route('login', 'Login with Twitch') . ' if you haven\'t done so already. During
                the login, we\'ll check with Twitch to see if you\'re subscribed to Hat Films!',
        ],
        'session'      => [
            'title'       => 'Sessions',
            'terminology' => [
                'title'    => 'Terminology',
                'session'  => '<strong>Session</strong> &ndash; A session is a game being played. There could be more
                    than one game being played in a stream, with a session for each game. E.g. a session for Rocket League.',
                'game'     => '<strong>Game</strong> &ndash; A game is a match within a session. E.g. a single match in
                    Rocket League.',
                'pool'     => '<strong>Pool</strong> &ndash; The pool is where users are selected to play in the game.
                    Think of it like numbers in a hat. Usernames are chosen at random.',
                'handicap' => '<strong>Handicaps</strong> &ndash; Each time you don\'t get selected to play, your
                    handicap will increase by 1. The higher your handicap, the more likely you\'ll get into a game. Once
                    you do get into a game, your handicap will reset to zero.',
            ],
            'placement'   => [
                'title' => 'Where everything is',
                'body'  => 'On the left hand side of the ' . link_to_route('home', 'home page') . ' you can see the active
                    session (if one is currently active). On the right hand side, you can see future upcoming sessions up
                    to one week away.',
            ],
            'joining'     => [
                'title' => 'Joining the games',
                'body'  => 'When a new session is created, it will show up on the site in real time.  There is never a
                    need to refresh the home page since it will update on it\'s own.  When a new game is created in that
                    session, it will also show up, letting you know things are starting off. You will be asked to
                    "Ready up" to be put in the pool if you want a chance to play with them.  Players are selected at
                    random from the pool of users who readied up (also taking handicaps into account). Those that are
                    chosen will have the password displayed on the page.  Thos that do not get in get a message saying as
                     much so they know the selection has finished.  This process then repeats for each game.',
            ],
        ],
    ],
];
