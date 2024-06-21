<?php
    echo view('base_template');
?>
    <title>Promotions</title>
        <!-- Bootstrap CSS -->
        <style>
            .promo-section {
                margin-bottom: 20px;
            }
            .promo-image {
                background-color: #f0f0f0;
                height: 200px;
            }
            .promo-content {
                padding: 20px;
            }
            .cta-button {
                background-color: #d9534f;
                color: #fff;
                border: none;
                padding: 10px 20px;
            }
        </style>
    <body>
        <div class="container">
            <h1 class="my-4">PROMOTIONS</h1>
            <?php
            $promotions = [
                [
                    'title' => 'PROMO #1',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                    'cta' => 'CTA #1'
                ],
                [
                    'title' => 'PROMO #2',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                    'cta' => 'CTA #2'
                ],
                [
                    'title' => 'PROMO #3',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                    'cta' => 'CTA #3'
                ]
            ];

            foreach ($promotions as $promo) {
                echo '<div class="row promo-section">';
                echo '    <div class="col-md-8 promo-image"></div>';
                echo '    <div class="col-md-4 promo-content">';
                echo '        <h2>' . $promo['title'] . '</h2>';
                echo '        <p>' . $promo['description'] . '</p>';
                echo '        <a href="#" class="btn cta-button">' . $promo['cta'] . '</a>';
                echo '    </div>';
                echo '</div>';
            }
            ?>
        </div>
        
    </body>
</head>