<?php

use yii\bootstrap4\LinkPager;


/*
 * @var $pagination Pagination
 */

$name = 'name_' . Yii::$app->language;
$this->title = $model->profession->$name
?>

<section class="site-section">
    <div class="container">
        <div class="row align-items-center mb-5">
            <div class="col-lg-8 mb-4 mb-lg-0">
                <div class="d-flex align-items-center">
                    <div class="border p-2 d-inline-block mr-3 rounded">
                        <script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script><script data-pagespeed-no-defer="">//<![CDATA[
                            (function(){for(var g="function"==typeof Object.defineProperties?Object.defineProperty:function(b,c,a){if(a.get||a.set)throw new TypeError("ES3 does not support getters and setters.");b!=Array.prototype&&b!=Object.prototype&&(b[c]=a.value)},h="undefined"!=typeof window&&window===this?this:"undefined"!=typeof global&&null!=global?global:this,k=["String","prototype","repeat"],l=0;l<k.length-1;l++){var m=k[l];m in h||(h[m]={});h=h[m]}
                                var n=k[k.length-1],p=h[n],q=p?p:function(b){var c;if(null==this)throw new TypeError("The 'this' value for String.prototype.repeat must not be null or undefined");c=this+"";if(0>b||1342177279<b)throw new RangeError("Invalid count value");b|=0;for(var a="";b;)if(b&1&&(a+=c),b>>>=1)c+=c;return a};q!=p&&null!=q&&g(h,n,{configurable:!0,writable:!0,value:q});var t=this;
                                function u(b,c){var a=b.split("."),d=t;a[0]in d||!d.execScript||d.execScript("var "+a[0]);for(var e;a.length&&(e=a.shift());)a.length||void 0===c?d[e]?d=d[e]:d=d[e]={}:d[e]=c};function v(b){var c=b.length;if(0<c){for(var a=Array(c),d=0;d<c;d++)a[d]=b[d];return a}return[]};function w(b){var c=window;if(c.addEventListener)c.addEventListener("load",b,!1);else if(c.attachEvent)c.attachEvent("onload",b);else{var a=c.onload;c.onload=function(){b.call(this);a&&a.call(this)}}};var x;function y(b,c,a,d,e){this.h=b;this.j=c;this.l=a;this.f=e;this.g={height:window.innerHeight||document.documentElement.clientHeight||document.body.clientHeight,width:window.innerWidth||document.documentElement.clientWidth||document.body.clientWidth};this.i=d;this.b={};this.a=[];this.c={}}
                                function z(b,c){var a,d,e=c.getAttribute("data-pagespeed-url-hash");if(a=e&&!(e in b.c))if(0>=c.offsetWidth&&0>=c.offsetHeight)a=!1;else{d=c.getBoundingClientRect();var f=document.body;a=d.top+("pageYOffset"in window?window.pageYOffset:(document.documentElement||f.parentNode||f).scrollTop);d=d.left+("pageXOffset"in window?window.pageXOffset:(document.documentElement||f.parentNode||f).scrollLeft);f=a.toString()+","+d;b.b.hasOwnProperty(f)?a=!1:(b.b[f]=!0,a=a<=b.g.height&&d<=b.g.width)}a&&(b.a.push(e),
                                    b.c[e]=!0)}y.prototype.checkImageForCriticality=function(b){b.getBoundingClientRect&&z(this,b)};u("pagespeed.CriticalImages.checkImageForCriticality",function(b){x.checkImageForCriticality(b)});u("pagespeed.CriticalImages.checkCriticalImages",function(){A(x)});
                                function A(b){b.b={};for(var c=["IMG","INPUT"],a=[],d=0;d<c.length;++d)a=a.concat(v(document.getElementsByTagName(c[d])));if(a.length&&a[0].getBoundingClientRect){for(d=0;c=a[d];++d)z(b,c);a="oh="+b.l;b.f&&(a+="&n="+b.f);if(c=!!b.a.length)for(a+="&ci="+encodeURIComponent(b.a[0]),d=1;d<b.a.length;++d){var e=","+encodeURIComponent(b.a[d]);131072>=a.length+e.length&&(a+=e)}b.i&&(e="&rd="+encodeURIComponent(JSON.stringify(B())),131072>=a.length+e.length&&(a+=e),c=!0);C=a;if(c){d=b.h;b=b.j;var f;if(window.XMLHttpRequest)f=
                                    new XMLHttpRequest;else if(window.ActiveXObject)try{f=new ActiveXObject("Msxml2.XMLHTTP")}catch(r){try{f=new ActiveXObject("Microsoft.XMLHTTP")}catch(D){}}f&&(f.open("POST",d+(-1==d.indexOf("?")?"?":"&")+"url="+encodeURIComponent(b)),f.setRequestHeader("Content-Type","application/x-www-form-urlencoded"),f.send(a))}}}
                                function B(){var b={},c;c=document.getElementsByTagName("IMG");if(!c.length)return{};var a=c[0];if(!("naturalWidth"in a&&"naturalHeight"in a))return{};for(var d=0;a=c[d];++d){var e=a.getAttribute("data-pagespeed-url-hash");e&&(!(e in b)&&0<a.width&&0<a.height&&0<a.naturalWidth&&0<a.naturalHeight||e in b&&a.width>=b[e].o&&a.height>=b[e].m)&&(b[e]={rw:a.width,rh:a.height,ow:a.naturalWidth,oh:a.naturalHeight})}return b}var C="";u("pagespeed.CriticalImages.getBeaconData",function(){return C});
                                u("pagespeed.CriticalImages.Run",function(b,c,a,d,e,f){var r=new y(b,c,a,e,f);x=r;d&&w(function(){window.setTimeout(function(){A(r)},0)})});})();

                            pagespeed.CriticalImages.Run('/mod_pagespeed_beacon','https://preview.colorlib.com/theme/jobboard/job-single.html','-ilGEe-FWC',true,false,'fJ-LD_zUk98');
                            //]]></script>
                        <img src="<?= '/' . $model->company->logo ?>" width="200" alt="Image" data-pagespeed-url-hash="2859068494" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                    </div>
                    <div>
                        <h2><?= $model->profession->$name ?></h2>
                        <div>
                            <span class="ml-0 mr-2 mb-2"><span class="icon-briefcase mr-2"></span><?= $model->company->name ?></span>
                            <span class="m-2"><span class="icon-room mr-2"></span><?= $model->address ?></span>
                            <span class="m-2"><span class="icon-clock-o mr-2"></span><span class="text-primary"><?= $model->jobType->$name ?></span></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="row">
                    <div class="col-6">
                        <a href="#" class="btn btn-block btn-light btn-md"><span class="icon-heart-o mr-2 text-danger"></span>Save Job</a>
                    </div>
                    <div class="col-6">
                        <?php if($order): ?>
                            <button  class="btn btn-block btn-primary btn-md" disabled>Sended</button>
                        <?php else: ?>
                            <a href="/vacancy/single?id=<?= $model->id ?>&add=true" class="btn btn-block btn-primary btn-md">Apply Now</a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8">
                <div class="mb-5">
                    <figure class="mb-5"><img src="<?= '/'. $model->image ?>" alt="Image" class="img-fluid rounded" data-pagespeed-url-hash="3581067019" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></figure>
                    <h3 class="h5 d-flex align-items-center mb-4 text-primary"><span class="icon-align-left mr-3"></span>Job Description</h3>

                </div>
                <div class="mb-5">
                    <?php
                        $desc_name = 'description_' . Yii::$app->language;
                        echo $model->$desc_name;
                    ?>
                </div>

                <div class="row mb-5">
                    <div class="col-6">
                        <a href="#" class="btn btn-block btn-light btn-md"><span class="icon-heart-o mr-2 text-danger"></span>Save Job</a>
                    </div>
                    <div class="col-6">
                        <?php if($order): ?>
                            <button  class="btn btn-block btn-primary btn-md" disabled>Sended</button>
                        <?php else: ?>
                            <a href="/vacancy/single?id=<?= $model->id ?>&add=true" class="btn btn-block btn-primary btn-md">Apply Now</a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="bg-light p-3 border rounded mb-4">
                    <h3 class="text-primary  mt-3 h5 pl-3 mb-3 ">Job Summary</h3>
                    <ul class="list-unstyled pl-3 mb-0">
                        <li class="mb-2"><strong class="text-black">Published on:</strong> <?= $model->created_at ?></li>
                        <li class="mb-2"><strong class="text-black">Vacancy:</strong> <?= $model->count_vacancy ?></li>
                        <li class="mb-2"><strong class="text-black">Employment Status:</strong> <?= $model->jobType->$name ?></li>
                        <li class="mb-2"><strong class="text-black">Experience:</strong> <?= $model->experience?></li>
                        <li class="mb-2"><strong class="text-black">Job Location:</strong> <?= $model->address?></li>
                        <li class="mb-2"><strong class="text-black">Salary:</strong> <?= $model->salary?></li>
                        <li class="mb-2"><strong class="text-black">Gender:</strong> <?= $model->gender ? $model->gender = 1 ? 'Erkak' : 'Ayol' : 'Ayol, Erkak'?></li>
                        <li class="mb-2"><strong class="text-black">Application Deadline:</strong> <?= $model->deadline?></li>
                    </ul>
                </div>
                <div class="bg-light p-3 border rounded">
                    <h3 class="text-primary  mt-3 h5 pl-3 mb-3 ">Share</h3>
                    <div class="px-3">
                        <a href="#" class="pt-3 pb-3 pr-3 pl-0"><span class="icon-facebook"></span></a>
                        <a href="<?= $model->telegram ?>" class="pt-3 pb-3 pr-3 pl-0"><span class="icon-telegram"></span></a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="site-section" id="next">
    <div class="container">
        <div class="row mb-5 justify-content-center">
            <div class="col-md-7 text-center">
                <h2 class="section-title mb-2"><?= $count ?> Related Jobs</h2>
            </div>
        </div>
        <ul class="job-listings mb-5">
            <?php foreach ($vacancyes as $item): ?>
                <li class="job-listing d-block d-sm-flex pb-3 pb-sm-0 align-items-center">
                    <a href="/vacancy/single?id=<?= $item->id?>"></a>
                    <div class="job-listing-logo">
                        <img src="<?= '/' . $item->image ?>" alt="Image" class="img-fluid" >
                    </div>
                    <div class="job-listing-about d-sm-flex custom-width w-100 justify-content-between mx-4">
                        <div class="job-listing-position custom-width w-50 mb-3 mb-sm-0">
                            <h2><?= $item->profession ? $item->profession->$name : 'Untitled'?></h2>
                            <strong><?= $item->company ? $item->company->name : 'Nomlanmagan'?></strong>
                        </div>
                        <div class="job-listing-location mb-3 mb-sm-0 custom-width w-25">
                            <span class="icon-room"></span> <?= $item->address?>
                        </div>
                        <div class="job-listing-meta">
                            <span class="badge badge-danger"><?= $item->jobType ? $item->jobType->$name : 'Nomlanmagan'?></span>
                        </div>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>
        <div class="row pagination-wrap">
            <div class="col-md-6 text-center text-md-left mb-4 mb-md-0">
                <span>Showing 1-7 Of <?= $count ?> Jobs</span>
            </div>
            <div class="col-md-6 text-center text-md-right">
                <?= LinkPager::widget([
                    'pagination' => $pagination,
                    'options' => ['class' => 'custom-pagination ml-auto d-flex align-items-center justify-content-end nav'],
                    'pageCssClass' => 'mr-2',
                    'prevPageLabel' => Yii::t('app', 'Prev'),
                    'nextPageLabel' => Yii::t('app', 'Next'),
                    'prevPageCssClass' => 'prev ',
                    'nextPageCssClass' => 'next ',
                    'linkOptions' => ['class' => 'prev']
                ]) ?>
            </div>
        </div>
    </div>
</section>