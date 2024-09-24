<?php
    $schools = [
        [
            'name' => 'kularathna college',
            'author' => 'xyz',
            'age' => 30,
            'website' => 'http://example.com'
        ],

        [
            'name' => 'darmashoka college',
            'author' => 'zyx',
            'age' => 170,
            'website' => 'http://example.com'
        ],

        [
            'name' => 'dewananda college',
            'author' => 'tag',
            'age' => 200,
            'website' => 'http://example.com'
        ],
    ];

    $filteredSchools = array_filter($schools, function ($school) {
        return $school['author'] === 'xyz';
    });

require'index.view.php';
