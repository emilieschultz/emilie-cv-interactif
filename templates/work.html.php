<?php
$imagesIllustrations = [
    [

        'title' => 'Marie',
        'smallURL' => 'images/illustrations/marinevhs.jpg',
        'largeURL' => 'images/illustrations/marinevhs.jpg'
    ],
    [

        'title' => 'Céléna',
        'smallURL' => 'images/illustrations/celena.jpg',
        'largeURL' => 'images/illustrations/celena.jpg'
    ],
    [

        'title' => 'Carolina',
        'smallURL' => 'images/illustrations/carolinaabreu.jpg',
        'largeURL' => 'images/illustrations/carolinaabreu.jpg'
    ],
    [

        'title' => 'Alexia',
        'smallURL' => 'images/illustrations/ananas.jpg',
        'largeURL' => 'images/illustrations/ananas.jpg'
    ],
    [

        'title' => 'Laure',
        'smallURL' => 'images/illustrations/blow-flower.jpg',
        'largeURL' => 'images/illustrations/blow-flower.jpg'
    ],
    [

        'title' => 'Hector',
        'smallURL' => 'images/illustrations/ghost-buster.jpg',
        'largeURL' => 'images/illustrations/ghost-buster.jpg'
    ],
    [

        'title' => 'Elmer',
        'smallURL' => 'images/illustrations/elephant.jpg',
        'largeURL' => 'images/illustrations/elephant.jpg'
    ],
    [

        'title' => 'Sawako',
        'smallURL' => 'images/illustrations/japan-mask.jpg',
        'largeURL' => 'images/illustrations/japan-mask.jpg'
    ],
    [

        'title' => 'Hellboy',
        'smallURL' => 'images/illustrations/hellboy.jpg',
        'largeURL' => 'images/illustrations/hellboy.jpg'
    ],
];

$imagesLogotypes = [
    [

        'title' => 'GeoSnoot',
        'smallURL' => 'images/logotypes/logo_geosnoot.png',
        'largeURL' => 'images/logotypes/logo_geosnoot.png'
    ],
    [

        'title' => 'Puzl Solutions',
        'smallURL' => 'images/logotypes/sirius.png',
        'largeURL' => 'images/logotypes/sirius.png'
    ],
    [

        'title' => 'Ludette',
        'smallURL' => 'images/logotypes/ludette.png',
        'largeURL' => 'images/logotypes/ludette.png'
    ],
];


$imagesSites = [
    [

        'title' => 'GeoSnoot',
        'smallURL' => 'images/sites/geosnoot_min.jpg',
        'siteURL' => 'images/sites/geosnoot_min.jpg'
    ],
    [

        'title' => 'leamuller.com',
        'smallURL' => 'images/sites/leaMuller.jpg',
        'siteURL' => 'images/sites/leaMuller.jpg'
    ],
    [

        'title' => 'Harry Potter',
        'smallURL' => 'images/sites/harry_potter.jpg',
        'siteURL' => 'images/sites/harry_potter.jpg'
    ],
];


$imagesWebdesign = [
    [

        'title' => "Pain d'Antan",
        'smallURL' => 'images/webdesign/painAntanSmall.jpg',
        'largeURL' => 'images/webdesign/pain_antan.jpg'
    ],
    [

        'title' => 'Ludette',
        'smallURL' => 'images/webdesign/ludetteSmall.jpg',
        'largeURL' => 'images/webdesign/ludette.jpg'
    ],
    [

        'title' => 'MMI',
        'smallURL' => 'images/webdesign/mmiSmall.jpg',
        'largeURL' => 'images/webdesign/site_mmi.jpg'
    ],
    [

        'title' => 'GeoSnoot',
        'smallURL' => 'images/webdesign/geosnootSmall.jpg',
        'largeURL' => 'images/webdesign/geosnoot.jpg'
    ],
    [

        'title' => 'Léa Muller',
        'smallURL' => 'images/webdesign/leamullerSmall.jpg',
        'largeURL' => 'images/webdesign/leamuller.jpg'
    ],
];

?>

<div id="work" class="container">
    <div class="pt-5 text-center">
        <img src="images/icones/crayon.svg" alt="" class="icon-img crayon">
        <h3>Réalisations</h3>
    </div>
    <div class="row">
        <div class="col-8 offset-2">
            <ul class="justify-content-center nav" role="tablist">
                <li class="nav-item">
                    <a href="#illustrations" role="tab" data-toggle="tab" id="left-tabs-example-tab-0"
                       aria-controls="illustrations" aria-selected="true"
                       class="nav-link active">Illustrations</a>
                </li>
                <li class="nav-item">
                    <a href="#logotypes" role="tab" data-toggle="tab" id="left-tabs-example-tab-1"
                       aria-controls="logotypes" tabindex="-1" aria-selected="false"
                       class="nav-link">Logotypes</a>
                </li>
                <li class="nav-item">
                    <a href="#sites" role="tab" data-toggle="tab" id="left-tabs-example-tab-2"
                       aria-controls="sites" tabindex="-1" aria-selected="false"
                       class="nav-link">Sites en lignes</a>
                </li>
                <li class="nav-item">
                    <a href="#webdesign" role="tab" data-toggle="tab" id="left-tabs-example-tab-3"
                       aria-controls="webdesign" tabindex="-1" aria-selected="false"
                       class="nav-link">Webdesign</a>
                </li>
            </ul>

            <div class="mt-6 tab-content" id="tab-work">
                <div id="illustrations" aria-labelledby="left-tabs-example-tab-0" role="tabpanel"
                     aria-hidden="false" class="fade tab-pane active show">
                    <div class="row">
                        <?php foreach ($imagesIllustrations as $image) : ?>
                            <div class="col-4 mb-4">
                                <a href="<?php echo $image['largeURL']; ?>" class="popup">
                                    <img src="<?php echo $image['smallURL']; ?>" alt="" class="w-100"/>
                                </a>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <div id="logotypes" aria-labelledby="left-tabs-example-tab-1" role="tabpanel"
                     aria-hidden="true" class="fade tab-pane">
                    <div class="row">
                        <?php foreach ($imagesLogotypes as $image) : ?>
                            <div class="col-4 mb-4">
                                <a href="<?php echo $image['largeURL']; ?>" class="popup">
                                    <img src="<?php echo $image['smallURL']; ?>" alt="" class="w-100"/>
                                </a>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <div id="sites" aria-labelledby="left-tabs-example-tab-2" role="tabpanel"
                     aria-hidden="true" class="fade tab-pane">
                    <div class="row">
                        <?php foreach ($imagesSites as $image) : ?>
                            <div class="col-4 mb-4">
                                <a href="<?php echo $image['siteURL']; ?>" target="_blank">
                                    <img src="<?php echo $image['smallURL']; ?>" alt="" class="w-100"/>
                                </a>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <div id="webdesign" aria-labelledby="left-tabs-example-tab-3" role="tabpanel"
                     aria-hidden="true" class="fade tab-pane">
                    <div class="row">
                        <?php foreach ($imagesWebdesign as $image) : ?>
                            <div class="col-4 mb-4">
                                <a href="<?php echo $image['largeURL']; ?>" class="popup">

                                    <img src="<?php echo $image['smallURL']; ?>" alt="" class="w-100"/>
                                </a>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>