<?php

return [
    'active'   => [
        'title'    => 'Active Polls',
        'no_polls' => 'No active polls at this time.',
        'votes'    => 'vote(s)',
        'ends'     => 'Poll ends on :time',
        'buttons'  => [
            'vote' => 'Vote!',
            'view' => 'View Results'
        ],
    ],
    'vote'     => [
        'title'  => 'Submit your vote!',
        'submit' => 'Submit your vote!',
    ],
    'messages' => [
        'vote_once'  => 'You have already voted.',
        'no_vote'    => 'You must submit a vote to view the results.',
        'voted'      => 'Vote submitted!',
        'no_answers' => 'No options were submitted.',
        'created'    => 'Poll created!',
        'updated'    => 'Poll updated!',
        'deleted'    => 'Poll deleted!',
    ],
    'title'    => [
        'create' => 'Create a new poll',
        'edit'   => 'Update poll',
    ],
    'form'     => [
        'title'        => 'Poll title',
        'answers'      => 'Option',
        'answers_help' => 'Put as many or as few as you like.  It will hunt for steam games to help you but you do not have to use them.  Type whatever you want for an option.',
        'answers_add'  => 'Add Option',
        'ends'         => 'Poll Ending Time',
        'ends_help'    => 'This is the time that will be used to determine the point the poll closes.',
        'submit'       => 'Save poll!',
    ],
    'index'    => [
        'table'   => [
            'title' => 'Title',
            'votes' => 'Votes',
            'ends'  => 'Ends At',
        ],
        'buttons' => [
            'view'   => 'Results',
            'edit'   => 'Edit',
            'delete' => 'Delete',
            'create' => 'Create a new poll',
        ],
    ],
];
