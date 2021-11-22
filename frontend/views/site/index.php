<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
$name = 'name_' . Yii::$app->language;
?>

<section class="home-section section-hero overlay bg-image" style="background-image:url(/jobboard/images/hero_1.jpg)" id="home-section">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-12">
                <div class="mb-5 text-center">
                    <h1 class="text-white font-weight-bold">The Easiest Way To Get Your Dream Job</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate est, consequuntur perferendis.</p>
                </div>
                <form method="post" class="search-jobs-form">
                    <div class="row mb-5">
                        <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                            <input type="text" class="form-control form-control-lg" placeholder="Job title, Company...">
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                            <div class="dropdown bootstrap-select" style="width: 100%;">
                                <select class="selectpicker" data-style="btn-white btn-lg" data-width="100%" data-live-search="true" title="Select Region" tabindex="-98"><option class="bs-title-option" value=""></option>
                                    <option>Anywhere</option>
                                    <option>San Francisco</option>
                                    <option>Palo Alto</option>
                                    <option>New York</option>
                                    <option>Manhattan</option>
                                    <option>Ontario</option>
                                    <option>Toronto</option>
                                    <option>Kansas</option>
                                    <option>Mountain View</option>
                                </select>
                                
                                <div class="dropdown-menu " role="combobox">
                                    <div class="bs-searchbox">
                                        <input type="text" class="form-control" autocomplete="off" role="textbox" aria-label="Search">
                                    </div>
                                    <div class="inner show" role="listbox" aria-expanded="false" tabindex="-1">
                                        <ul class="dropdown-menu inner show"></ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                            <div class="dropdown bootstrap-select" style="width: 100%;"><select class="selectpicker" data-style="btn-white btn-lg" data-width="100%" data-live-search="true" title="Select Job Type" tabindex="-98"><option class="bs-title-option" value=""></option>
                                    <option>Part Time</option>
                                    <option>Full Time</option>
                                </select>
                                

                                <div class="dropdown-menu " role="combobox"><div class="bs-searchbox"><input type="text" class="form-control" autocomplete="off" role="textbox" aria-label="Search"></div><div class="inner show" role="listbox" aria-expanded="false" tabindex="-1"><ul class="dropdown-menu inner show"></ul></div></div></div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                            <button type="submit" class="btn btn-primary btn-lg btn-block text-white btn-search"><span class="icon-search icon mr-2"></span>Search Job</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 popular-keywords">
                            <h3>Trending Keywords:</h3>
                            <ul class="keywords list-unstyled m-0 p-0">
                                <li><a href="#" class="">UI Designer</a></li>
                                <li><a href="#" class="">Python</a></li>
                                <li><a href="#" class="">Developer</a></li>
                            </ul>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <a href="#next" class="scroll-button smoothscroll">
        <span class=" icon-keyboard_arrow_down"></span>
    </a>
</section>

<section class="site-section py-4">
    <div class="container">

        <div class="row align-items-center">
            <div class="col-12 text-center mt-4 mb-5">
                <div class="row justify-content-center">
                    <div class="col-md-7">
                        <h2 class="section-title mb-2">Company We've Helped</h2>
                        <p class="lead">Porro error reiciendis commodi beatae omnis similique voluptate rerum ipsam fugit mollitia ipsum facilis expedita tempora suscipit iste</p>
                    </div>
                </div>

            </div>
            <?php foreach ($partners as $item): ?>

                <div class="col-6 col-lg-3 col-md-6 text-center">
                    <img src="<?= $item->logo ?>" alt="Image" class="img-fluid" style="max-width: <?= $item->maxwidth ?>px">
                </div>

            <?php endforeach ?>
        </div>
    </div>
</section>


<!-- STATISTICS -->
<section class="py-5 bg-image overlay-primary fixed overlay" id="next" style="background-image:url(images/xhero_1.jpg.pagespeed.ic.V0QtS-940g.webp)">
    <div class="container">
        <div class="row mb-5 justify-content-center">
            <div class="col-md-7 text-center">
                <h2 class="section-title mb-2 text-white">JobBoard Site Stats</h2>
                <p class="lead text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita unde officiis recusandae sequi excepturi corrupti.</p>
            </div>
        </div>
        <div class="row pb-0 block__19738 section-counter">
            <div class="col-6 col-md-6 col-lg-3 mb-5 mb-lg-0">
                <div class="d-flex align-items-center justify-content-center mb-2">
                    <strong class="number" data-number="<?= $statistics ? $statistics->vacancyes : 'Null' ?>"><?= $statistics ? $statistics->vacancyes : 'Null' ?></strong>
                </div>
                <span class="caption">Vacancyes</span>
            </div>
            <div class="col-6 col-md-6 col-lg-3 mb-5 mb-lg-0">
                <div class="d-flex align-items-center justify-content-center mb-2">
                    <strong class="number" data-number="<?= $statistics ? $statistics->users : 'Null' ?>"><?= $statistics ? $statistics->users : 'Null' ?></strong>
                </div>
                <span class="caption">Users</span>
            </div>
            <div class="col-6 col-md-6 col-lg-3 mb-5 mb-lg-0">
                <div class="d-flex align-items-center justify-content-center mb-2">
                    <strong class="number" data-number="<?= $statistics ? $statistics->workers : 'Null' ?>"><?= $statistics ? $statistics->workers : 'Null' ?></strong>
                </div>
                <span class="caption">Workers</span>
            </div>
            <div class="col-6 col-md-6 col-lg-3 mb-5 mb-lg-0">
                <div class="d-flex align-items-center justify-content-center mb-2">
                    <strong class="number" data-number="<?= $statistics ? $statistics->companyes : 'Null' ?>"><?= $statistics ? $statistics->companyes : 'Null' ?></strong>
                </div>
                <span class="caption">Companies</span>
            </div>
        </div>
    </div>
</section>

<section class="site-section" id="next">
    <div class="container">

        <div class="row mb-5 justify-content-center">
            <div class="col-md-7 text-center">
                <h2 class="section-title mb-2"><?= $pagination->totalCount ?> Related Jobs</h2>
            </div>
        </div>

        <ul class="job-listings mb-5">

            <?php foreach ($vacancys as $item): ?>
                <?php $sheet[] = $item ?>

                <li class="job-listing d-block d-sm-flex pb-3 pb-sm-0 align-items-center">
                    <a href="/vacancy/single?id=<?= $item->id ?>"></a>
                    <div class="job-listing-logo">
                        <img src="<?= $item->image ? '/'.$item->image : 'data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22200%22%20height%3D%22200%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20200%20200%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_17cb871a4aa%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A10pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_17cb871a4aa%22%3E%3Crect%20width%3D%22200%22%20height%3D%22200%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2274.390625%22%20y%3D%22104.5%22%3E200x200%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E' ?>" alt="Image" class="img-fluid">
                    </div>

                    <div class="job-listing-about d-sm-flex custom-width w-100 justify-content-between mx-4">
                        <div class="job-listing-position custom-width w-50 mb-3 mb-sm-0">
                            <h2><?= $item->profession ? $item->profession->$name : 'Kiritilmagan' ?></h2>
                            <strong><?= $item->company ? $item->company->name : 'Kiritilmagan' ?></strong>
                        </div>
                        <div class="job-listing-location mb-3 mb-sm-0 custom-width w-25">
                            <span class="icon-room"></span> <?= $item->address ? $item->address : 'Kiritilmagan' ?>
                        </div>
                        <div class="job-listing-meta">
                            <span class="badge badge-danger"><?= $item->jobType ? $item->jobType->$name : 'Kiritilmagan' ?></span>
                        </div>
                    </div>

                </li>

            <?php endforeach ?>
        </ul>
        
        <p class="text-center"><a href="/vacancy/list" class="btn btn-success text-white">Show more</a></p>
    </div>
</section>

<section>
    <script src="https://code.highcharts.com/maps/highmaps.js"></script>
    <script src="https://code.highcharts.com/maps/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/mapdata/countries/uz/uz-all.js"></script>

    <div id="statistic-map"></div>

    <script>
        var data = [{
            "hc-key": "uz-qr",
            "value": 800,
            "resume_value": 528,
            "company_value": 2993,
            "vacancy_value": "1451"
        }, {
            "hc-key": "uz-bu",
            "value": 900,
            "resume_value": 418,
            "company_value": 3562,
            "vacancy_value": "4383"
        }, {
            "hc-key": "uz-sa",
            "value": 1000,
            "resume_value": 536,
            "company_value": 4211,
            "vacancy_value": "1767"
        }, {
            "hc-key": "uz-nw",
            "value": 1100,
            "resume_value": 329,
            "company_value": 2212,
            "vacancy_value": "634"
        }, {
            "hc-key": "uz-an",
            "value": 1200,
            "resume_value": 401,
            "company_value": 3866,
            "vacancy_value": "3162"
        }, {
            "hc-key": "uz-fa",
            "value": 1300,
            "resume_value": 438,
            "company_value": 4493,
            "vacancy_value": "3003"
        }, {
            "hc-key": "uz-su",
            "value": 1400,
            "resume_value": 292,
            "company_value": 4041,
            "vacancy_value": "3442"
        }, {
            "hc-key": "uz-si",
            "value": 1500,
            "resume_value": 230,
            "company_value": 1799,
            "vacancy_value": "1607"
        }, {
            "hc-key": "uz-kh",
            "value": 1600,
            "resume_value": 452,
            "company_value": 2769,
            "vacancy_value": "891"
        }, {
            "hc-key": "uz-ta",
            "value": 1700,
            "resume_value": 516,
            "company_value": 4947,
            "vacancy_value": "3208"
        }, {
            "hc-key": "uz-qa",
            "value": 1800,
            "resume_value": 720,
            "company_value": 4311,
            "vacancy_value": "3737"
        }, {
            "hc-key": "uz-ji",
            "value": 1900,
            "resume_value": 251,
            "company_value": 3944,
            "vacancy_value": "2157"
        }, {
            "hc-key": "uz-ng",
            "value": 2100,
            "resume_value": 451,
            "company_value": 3353,
            "vacancy_value": "1989"
        }, {
            "hc-key": "uz-tk",
            "value": 2200,
            "resume_value": 1323,
            "company_value": 10354,
            "vacancy_value": "11047"
        }];

        // Create the chart
        Highcharts.mapChart('statistic-map', {
            chart: {
                map: 'countries/uz/uz-all'
            },

            title: {
                text: ''
            },

            subtitle: {
                text: 'Source map: <a href="http://code.highcharts.com/mapdata/countries/uz/uz-all.js">Uzbekistan</a>'
            },

            mapNavigation: {
                enabled: false,
                buttonOptions: {
                    verticalAlign: 'bottom'
                }
            },

            colorAxis: {
                min: 0
            },

            series: [{
                data: data,
                mapData: Highcharts.maps['countries/uz/uz-all'],
                joinBy: 'hc-key',
                name: 'Uzbekistan Respublikasi',
                states: {
                    hover: {
                        color: '#BADA55'
                    }
                },
                dataLabels: {
                    enabled: true,
                    format: '{point.name}'
                },
                tooltip: {
                    headerFormat: '',
                    backgroundColor: null,
                    borderWidth: 0,
                    shadow: false,
                    useHTML: true,
                    pointFormat: '<p><strong>{point.name}</strong></p><br><p>Иш берувчилар / Работодателей: <span>{point.company_value}</span></p><br><p>Бўш иш ўринлари / Вакансии: <span>{point.vacancy_value}</span></p><br><p>Квоталанган иш ўринлари / Квотируемые рабочие места: <span>{point.quota_value}</span></p><br><p>Резюмелар / Резюме: <span>{point.resume_value}</span></p>'
                }
            }]
        });

    </script>
</section>