<?php
    return [
        [
            'label'=>'Dashboard',
            'route'=>'admin.dashboard',
            'icon'=>'fa-home'
        ],
        [
            'label'=>'Category Manager',
            'route'=>'category.index',
            'icon'=>'fa-shopping-cart',
            'items' => [
                [
                    'label' => 'All Category',
                    'route' => 'category.index'
                ],
                [
                    'label' => 'Add Category',
                    'route' => 'category.create'
                ]
            ]
        ],
        [
            'label'=>'Product Manager',
            'route'=>'product.index',
            'icon'=>'fa-shopping-cart',
            'items' => [
                [
                    'label' => 'All Product',
                    'route' => 'product.index'
                ],
                [
                    'label' => 'Add Product',
                    'route' => 'product.create'
                ]
            ]
        ],
        [
            'label'=>'Order Manager',
            'route'=>'order.index',
            'icon'=>'fa-shopping-cart',
            'items' => [
                [
                    'label' => 'All Order',
                    'route' => 'order.index'
                ],
                [
                    'label' => 'Statistic',
                    'route' => 'product.index'
                ]
            ]
        ],
        [
            'label'=>'Blog Manager',
            'route'=>'blog.index',
            'icon'=>'fa-blog',
            'items' => [
                [
                    'label' => 'All Blog',
                    'route' => 'blog.index'
                ],
                [
                    'label' => 'Add Blog',
                    'route' => 'blog.create'
                ]
            ]
        ],
        [
            'label'=>'Banner Manager',
            'route'=>'banner.index',
            'icon'=>'fa-image',
            'items' => [
                [
                    'label' => 'All Banner',
                    'route' => 'banner.index'
                ],
                [
                    'label' => 'Add Banner',
                    'route' => 'banner.create'
                ]
            ]
        ]
        ,
        [
            'label'=>'User Manager',
            'route'=>'user.index',
            'icon'=>'fa-user',
            'items' => [
                [
                    'label' => 'All Account',
                    'route' => 'user.index'
                ],
                [
                    'label' => 'Add Account',
                    'route' => 'user.create'
                ]
            ]
        ]
        ,
        [
            'label'=>'File Manager',
            'route'=>'admin.file',
            'icon'=>'fa-file',
        ]
    ]
?>