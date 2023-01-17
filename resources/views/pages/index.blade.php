@extends('pages.layout.app')
@section('content')
    <div class="section shorthero vid full wf-section">
        <div data-poster-url="https://uploads-ssl.webflow.com/6181b0b1a9ba753863f1b595/6217868fa1686570ac9e66e0_Success is learnt - splash sreen video LOW RES SIZE-poster-00001.jpg" data-video-urls="https://uploads-ssl.webflow.com/6181b0b1a9ba753863f1b595/6217868fa1686570ac9e66e0_Success is learnt - splash sreen video LOW RES SIZE-transcode.mp4,https://uploads-ssl.webflow.com/6181b0b1a9ba753863f1b595/6217868fa1686570ac9e66e0_Success is learnt - splash sreen video LOW RES SIZE-transcode.webm" data-autoplay="true" data-loop="true" data-wf-ignore="true" data-beta-bgvideo-upgrade="false" class="background-video w-background-video w-background-video-atom">
            <video id="61c0797d-fa50-4e15-0462-cc705253e578-video" autoplay="" loop="" style="background-image:url(_https_/uploads-ssl.webflow.com/6181b0b1a9ba753863f1b595/6217868fa1686570ac9e66e0_Success%20is%20learnt%20-%20splash%20sreen%20video%20LOW%20RES%20SIZE-poster-00001.html)" muted="" playsinline="" data-wf-ignore="true" data-object-fit="cover">
                <source src="upload/uche.mp4" data-wf-ignore="true">
                <source src="upload/uche.MOV" data-wf-ignore="true">

            </video>
{{--            <video autoplay="" loop="" data-autoplay="true" data-loop="true" data-wf-ignore="true" data-beta-bgvideo-upgrade="false" width="320"  height="240" controls>--}}
{{--                <source src="uche.mp4" data-wf-ignore="true">--}}
{{--                <source src="uche.mov" data-wf-ignore="true">--}}

{{--                Your browser does not support the video tag.--}}
{{--            </video>--}}
            <div class="w-embed">
                <style>
                    .w-webflow-badge {
                        display: none !important;
                    }
                </style>
            </div>
            <div class="div-block-19">
                <div class="div-block">
                    <h1 class="heading"><strong>Get Direct Tutoring</strong>,<strong> Learn How we do it</strong></h1>
                    <p class="paragraph padding shad">
                        Learn and Follow The Exact Same Techniques and Updates the Group uses to Make Min. $10k Monthly
                        <br></p>
                    <a  class="button-large bg-primary-3 margin-top w-button">I will teach you</a>
                </div>
            </div>
            <noscript>
                <style>
                    [data-wf-bgvideo-fallback-img] {
                        display: none;
                    }

                    @media (prefers-reduced-motion: reduce) {
                        [data-wf-bgvideo-fallback-img] {
                            position: absolute;
                            z-index: -100;
                            display: inline-block;
                            height: 100%;
                            width: 100%;
                            object-fit: cover;
                        }
                    }
                </style><img data-wf-bgvideo-fallback-img="true"
                             src="documents/Success-is-learnt---splash-sreen-video-LOW-RES-SIZE.html" alt="">
            </noscript>
            <div aria-live="polite"><button type="button" data-w-bg-video-control="true" aria-controls="61c0797d-fa50-4e15-0462-cc705253e578-video" class="w-backgroundvideo-backgroundvideoplaypausebutton w-background-video--control"><span><img src="https://uploads-ssl.webflow.com/6022af993a6b2191db3ed10c/628299f8aa233b83918e24fd_Pause.svg" alt="Pause video"></span><span hidden=""><img src="https://uploads-ssl.webflow.com/6022af993a6b2191db3ed10c/628298b20ae0236682d4b87f_Play-24.svg" alt="Play video"></span></button></div>
        </div>
    </div>
    <div class="section-2 rem wf-section">
        <div class="container grid-container">
            <div class="section-title">
                <h1 class="display-heading-4"><strong>Join The Bigwealth Clan, The Fastest Growing Community of Millionaires with The Sharpest Updates</strong></h1>
            </div>
            <div data-duration-in="300" data-duration-out="100" data-current="Tab 2" data-easing="ease" class="tabs-vertical w-tabs">
                <div class="tabs-vertical-menu w-tab-menu">
                </div>
                <div data-w-id="8973a118-08ec-ef12-e235-b7cb386b0771" class="w-tab-content">
                    <div data-w-tab="Tab 2" class="w-tab-pane w--tab-active">
                        <div class="w-layout-grid grid-halves">
                            <div class="panel-2">
                                <div class="panel-body center">
                                    <div class="space-bottom-large">
                                        <div>
                                            <div class="card-heading display-inline text-gray-4">CONNECT WITH ZEALOUS TEACHERS AND SMART PEOPLE<br></div>
                                        </div>
                                        <p class="paragraph left center">Your <strong>net worth</strong> is your <strong>network</strong>.
                                            You need to surround yourself with successful men, men you can learn from.<br>‍<br>If you were in
                                            a group of 100 ice cream experts and ALL you spoke about was making ice-cream, you’d learn A LOT
                                            about how to make ice-cream.<br>‍<br><strong>IT IS THE SAME WITH MONEY.</strong></p>
                                        <div class="div-block-3 shown-pic-tab"><img sizes="(max-width: 479px) 99vw, 100vw" srcset="images/photo4956401880766982404-p-1080.jpeg 1080w, images/photo4956401880766982404.jpg 1280w" src="images/photo4956401880766982404.jpg" alt="War room event" class="rounded-image-2 grid-image"></div>
                                    </div>
                                    <a href="{{ route('get.started') }}" class="button-large bg-primary-3 w-button">GET IN</a>
                                </div>
                            </div>
                            <div class="div-block-3"><img sizes="(max-width: 479px) 100vw, (max-width: 991px) 657.34375px, 53vw" srcset="images/photo4956401880766982404-p-1080.jpeg 1080w, images/photo4956401880766982404.jpg 1280w" src="images/photo4956401880766982404.jpg" alt="War room event" class="rounded-image-2 grid-image hidden-pic-mobile"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
