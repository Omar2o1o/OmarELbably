Skip to content
Pull requests
Issues
Marketplace
Explore
@Omar2o1o
galal-husseny /
b17
Public

Code
Issues
Pull requests
Actions
Projects
Wiki
Security

Insights

b17/3rd/task2/table.php /
@galal-husseny
galal-husseny day 3 php
Latest commit 12be4be 13 hours ago
History
1 contributor
54 lines (51 sloc) 1.08 KB
<?php
// dynamic table
// dynamic rows
// dynamic columns
// check if gender of user == m ==> male
// check if gender of user == f ==> female

$users = [
    (object)[
        'id' => 1,
        'name' => 'ahmed',
        "gender" => (object)[
            'gender' => 'm'
        ],
        'hobbies' => [
            'football', 'swimming', 'running'
        ],
        'activities' => [
            "school" => 'drawing',
            'home' => 'painting'
        ],

    ],
    (object)[
        'id' => 2,
        'name' => 'mohamed',
        "gender" => (object)[
            'gender' => 'm'
        ],
        'hobbies' => [
            'swimming', 'running',
        ],
        'activities' => [
            "school" => 'painting',
            'home' => 'drawing'
        ],
    ],
    (object)[
        'id' => 3,
        'name' => 'menna',
        "gender" => (object)[
            'gender' => 'f'
        ],
        'hobbies' => [
            'running',
        ],
        'activities' => [
            "school" => 'painting',
            'home' => 'drawing'
        ],
    ],
];

?>

© 2022 GitHub, Inc.

Terms
Privacy
Security
Status
Docs
Contact GitHub
Pricing
API
Training
Blog
About

Loading complete