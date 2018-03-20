<?php return [
    'plugin' => [
        'name' => 'Bootstrap Collapse',
        'description' => 'Plugin for Bootstrap Collapse on frontend'
    ],
    'collapses' => [
        'backend_name'=>'Collapse',
        'title' => 'Title',
        'description' => 'Description',
        'is_active' => 'Active',
        'updated_at' => 'Changed At',
    ],
    'component' => [
        'title' => 'Bootstrap Collapse',
        'description' => 'Add Bootstrap collapse to your page with this component.',
    ],
    'properties' => [
        'add_bootstrap' =>
            [
                'title' => 'Add Bootstrap',
                'note' => 'Select this if you haven\'t added Bootstrap Css. And if already added select version of bootstrap as per your layout.',
            ],
        'sortBy' =>
            [
                'title' => 'Sort By',
                'note' => 'In which manner all records will display.',
            ],
        'pagination' =>
            [
                'title' => 'Pagination',
                'note' => 'Check this if pagination is required.',
            ],
        'collapsesPerPage' =>
            [
                'title' => 'Per Page',
                'note' => 'No of Items per page, Work only when pagination is selected.',
            ],
    ],
];