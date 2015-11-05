<?php

/*
|--------------------------------------------------------------------------
| Notice
|--------------------------------------------------------------------------
|
| This file is unique in that anything in the all or admin section should
| be changed.  Unlike others, change the question as well so it all
| gets translated.  Just leave 'all' and 'admin' as is.
|
*/
return [
    'titles' => [
        'admin'     => 'Admin',
        'header'    => 'FAQ',
        'subHeader' => 'You have questions, we have answers.',
        'submit'    => 'Don\'t see your question?  <a href="https://gitreports.com/issue/HatScrubs/GameAccess" target="_blank">Ask here!</a>',
    ],
    'all'    => [
        'What is the home page showing?'      => 'The home page is currently showing a timeline for Hat Films.  On the
            left you will see the last 3 days of tweets from ' . \Thujohn\Twitter\Facades\Twitter::linkify('@hat_films') . '
            and on the right is the last and next streams.
            <br /><br />
            The stream box will show one of a few different things.  By default it will show a generic placeholder if the
             site has no details about the stream yet.  If the guys are not going to be on that day, you may see an offline
             notice.  If they will be on and have scheduled something in the site you will see the details of that session.
             Lastly, if there is a poll that is scheduled to end on the same day as a stream, you will see it\'s details.',

        'How do I join Hat Films for games?'  => 'This is a 2 part process.  First you must be subscribed to them on
            twitch.  If you haven\'t subscribed yet, you can do so by
            <a href="http://www.twitch.tv/hatfilms/subscribe?ref=scrubscribers.com" target="_blank">clicking here</a>.  Once you are a
            subscriber either go to ' . link_to_route('link.index', 'linked accounts') . ' and refresh twitch or simply
            logout and back in.  This will "re-check" your subscriber access and give you access to the site.
            <br /><br />
            Now that the site knows you\'re a subscriber, all you have to do is wait for a game to start.  Trott starts these.
            When he does, you will see the ' . link_to_route('home', 'home page') . '  and ' . link_to_route('stream.index', 'stream page') . '
            come to life alerting you that things will kick off soon.  When they do, if you own the game, can play in the game
            at that time and want to, click ready up.  If you are selected (randomly + a bonus everytime you are not selected) you will
            see the password displayed to you.  If not, you will get a message alerting you to wait for the next attempt.',

        'How do I change the timezone?' => 'The timezone for the site, by default, is on GMT.  You can change this once you are
            logged in by clicking your name in the upper right and selecting "Profile".  From there, just select the timezone
            you want from the drop down and click "Save Profile".',

        'Where can I submit ideas or issues?' => 'You can click on the "Let us know!" link at the bottom of almost every page or
            click <a href="https://gitreports.com/issue/HatScrubs/GameAccess" target="_blank">here</a>.  We want to hear all your ideas.
            We may not be able to do them all, but each one will be discussed and looked into.
            <br /><br />
            For ideas specifically you can go to our
            <a href="http://ideas.theideawall.com/Scrubscribers/Forum/Details/8e6ea778-2792-4ebf-aa61-31be66ab6351" target="_blank">IdeaWall</a>
            and let us know.  This site will allow you to vote on the submitted ideas so we know what is most wanted.'
    ],
    'admin'  => [
        'How do I schedule streams?' => 'You have 3 options here.  A subscriber stream, a Hat Only stream or offline.  All
            three start at ' . link_to_route('session.index', 'the session area') . '.  At the top you will see
            ' . link_to_route('offline.create', 'Schedule Offline') . ' and ' . link_to_route('session.create', 'Schedule a new session') . '.
            These two links allow you to create details for a stream.
            <br /><br />
            The offline one is used just to let everyone know there will be no stream on that day.  Give as much or as
            little information as you like.
            <br /><br />
            Creating a session lets them know there will be a stream and you can even specify what the stream will be in.
            If the game you want isn\'t listed, just type the one you want and you will be taken to a page to update it\'s
            image.  If the game will allow subscribers to join, set the Community Games drop down to yes, otherwise leave it at no.',
        'How do I get passwords?'    => 'Smith and Ross can go to ' . link_to_route('session.index', 'the sessions area') . ' and
            click "Watch" on any session.  This will take them to a page that updates just like the manage page but only shows
            the passwords.',
    ]
];
