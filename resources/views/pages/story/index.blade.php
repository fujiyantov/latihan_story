<!doctype html>
<html>

<head>
    <base href="/" />
    <title>Wonderful Culture and Village Around Borobudur</title>
    <link rel="canonical" href="#" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <script>
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-51286809-14', 'auto');
    </script>
    <link type="text/css" rel="stylesheet" href="//fast.fonts.net/cssapi/fc217058-e84c-4e07-8541-9de8b64d53a1.css" />
    <link rel="stylesheet" href="{{ asset('/assets/css/main.css') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('/assets/favicons/favicon.ico') }}" />
    <style>
        /* body {
            background: url("{{ asset('assets/background-1.jpg') }}") center no-repeat !important;
            bottom: 0;
            content: '';
            display: block;
            left: 0;
            margin: -20px;
            position: fixed;
            right: 0;
            top: 0;
            z-index: -1;
        } */

        .takeaction .takeaction-formintro p {
            width: 100% !important;
        }

        .takeaction .takeaction--form iframe {
            min-height: 300px !important;
            position: relative;
            width: 60%;
            z-index: 1;
        }
    </style>
</head>

<body ng-class="{'is-mobile-chrome': isMobileChrome}">
    <header class="is-enabled is-visible" ng-class="{'is-visible': headerVisible, 'is-enabled': headerEnabled}"
        ng-controller="headerController">
        <div class="header--left" ng-class="{'is-hidden': experienceActive}">
            <a class="logo" href="https://culture.borobudurside.com" title="Brand">
                <img src="{{ asset('/assets/images/icons/logo-white.png') }}" style="height: 53px !important"
                    alt="knkm">
            </a>
            <a class="logo" href="https://culture.borobudurside.com" title="Brand">
                <img src="{{ asset('/assets/images/icons/logo-kementrian.svg') }}" alt="knkm">
            </a>
            <a class="logo" href="https://culture.borobudurside.com" title="Brand">
                <img src="{{ asset('/assets/images/icons/logo-kbkm.png') }}" alt="kbkm">
            </a>
        </div>
    </header>

    <div class="container">
        {{-- <section class="intro" ng-controller="introController"
            ng-class="{'is-active': active, 'is-controls-visible': (controlActive && showControls || (currentState == 'paused'))}">
            <div class="intro-info" ng-class="{'is-active': (showLoading || showMeta), 'is-done': introEnded}">
                <div class="intro-loading" ng-class="{'is-active' : showLoading}">
                    <!-- <img class="loading-logo" src="./assets/icons/logo-kbkm.png.png" alt="kbkm"> -->
                    <div class="loading-bear"></div>
                </div>
                <div class="intro-meta" ng-class="{'is-active': (showMeta && !showDoomsday)}">
                    <div class="meta-icons">
                        <div class="meta-sound"></div>
                        <div class="meta-vr"></div>
                    </div>
                    <!-- <p class="meta-note">Bears Ears is a multimedia experience that has been optimized for sound and VR</p> -->
                    <div class="meta-buttons">
                        <a class="meta-experience" ng-click="goTo($event, 'experience')">Experience VR</a>
                        <a class="meta-skip" ng-click="goTo($event, 'home')"
                            ng-class="{'is-active': showMeta, 'is-visible': (showControls || (currentState == 'paused'))}">Skip</a>
                    </div>
                </div>
            </div>

            <div class="intro-video intro-video--preview" style="pointer-events: auto !important"
                ng-class="{'is-active': (showVideo && showPreview), 'is-done': introEnded}">
                <div id="intro-preview"></div>
            </div>

            <div class="intro-video"
                ng-class="{'is-active': (showVideo && !showPreview), 'is-blurred': blur, 'is-done': introEnded}"
                ng-click="playPause()">
                <div id="intro-video"></div>
            </div>

            <div class="intro-preview" ng-class="{'is-active': (showPreview && showMeta), 'is-done': introEnded}">
                <div class="title" ng-class="{'is-active': showPreviewTitle}">
                    <div><span>Borobudur</span></div>
                    <div class="t-smallcaps t-strikethrough">National Monument</div>
                </div>

                <div class="intro-play" ng-click="playPause()" ng-class="{'is-active': showPlayButton}">
                    <div class="controls-playPauseToggle is-play-btn"></div>
                    <div class="t-smallcaps">Play</div>
                </div>
            </div>

            <div class="intro-doomsday overlay has-background" ng-class="{'is-active': doomsday && showDoomsday}">
                <div class="overlay-container">
                    <h1>The President Stole Bears Ears National Monument</h1>
                    <p>In an illegal move, the president just reduced the size of Bears Ears and Grand
                        Staircase-Escalante National Monuments. This is the largest elimination of protected land in
                        American history.</p>
                    <a class="doomsday-button" ng-click="goTo($event, 'take-action')">Defend the land you have
                        left.</a>
                </div>

                <a class="doomsday-skip" ng-click="skipDoomsday()">Continue to the site</a>
            </div>

            <div class="intro-titles" ng-class="{'is-active': !showPreviewTitle, 'is-done': introEnded}">
                <div class="title title--by" ng-class="{'is-active': activeTitle == 0 || activeTitle == 1}">
                    <img src="./assets/icons/logo-kbkm.png" width="500" alt="kbkm">Presents
                </div>
                <div class="title title--final" ng-class="{'is-active': activeTitle == 2}">Borobudur <span
                        class="t-strikethrough">National Monument</span></div>
            </div>

            <div class="controls"
                ng-class="{'is-active': controlActive, 'is-forced-open': (currentState == 'paused'), 'is-visible': showControls}">
                <div class="controls-playPauseToggle" ng-class="{'is-play-btn': (currentState !== 'playing')}"
                    ng-click="playPause()"></div>

                <div class="controls-scrubber" be-mousedown="pauseScrubber($event)"
                    be-mousemove="updateScrubber($event)" be-mouseup="seekTo(timeCurrent)">
                    <div class="controls-scrubberTrack">
                        <div class="controls-scrubberProgress" ng-style="{'width': scrubberWidth + '%'}"></div>
                    </div>
                </div>

                <div class="controls-time">
                    <span class="controls-timeCurrent" ng-bind="(timeCurrent | minutesFilter)"></span>
                    <span class="controls-timeTotal" ng-bind="(timeTotal | minutesFilter)"></span>
                </div>

                <div class="controls-muteToggle" ng-class="{'is-unmute-btn': isMuted}" ng-click="toggleMute()"></div>
            </div>
        </section> --}}

        <section class="takeaction ng-scope is-active">
            <div class="takeaction--gradient" ng-class="{'is-visible': (showGradient && active)}"></div>
            <div class="takeaction--callout is-active" ng-class="{'is-active': active}">
                <div class="takeaction-bg"
                    style="background: url(' {{ villageImageUrl($item->image) }} ') center center no-repeat"></div>
                <h1>Story<br />{{ $item->name }}</h1>
                {{-- <p><strong>Public lands have never been more threatened than right now.</strong></p> --}}
                <p>&nbsp;</p>
                <p>{{ $item->description }}</p>
                <p class="footnote"><strong>Posted by KBKM</a></strong></p>
            </div>

            <div class="takeaction--form is-active" ng-class="{'is-active': active}">
                <div class="takeaction-formintro">
                    <h2>{{ $item->name }}</h2>
                    {!! $item->content !!}
                </div>
                <div class="advocacy-actionwidget" data-domain="p2a.co" data-shorturl="3lXjOXB" data-responsive="true">
                </div>
            </div>
        </section>

        <div id="stage"></div>
    </div>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
    <script src="{{ asset('/assets/js/vendor/videojs/video.min.js') }}"></script>
    <script src="{{ asset('/assets/js/vendor/threejs/three.min.js') }}"></script>
    <script src="{{ asset('/assets/js/vendor/videojs/videojs-panorama.v5.min.js') }}"></script>
    <script src="{{ asset('/assets/js/vendor/kmlmap/KmlMapParser.js') }}"></script>
    <script src="{{ asset('/assets/js/app.js?cache=1511322399') }}"></script>
</body>

</html>
