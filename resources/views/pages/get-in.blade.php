@extends('pages.layout.app')
@section('content')
    <style>
        input[type=text], select {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type=submit] {
            width: 100%;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }

        div {
            border-radius: 5px;
            /*background-color: #f2f2f2;*/
            padding: 20px;
        }
    </style>

    <div class="section shorthero vid full wf-section">
        <div data-poster-url="https://uploads-ssl.webflow.com/6181b0b1a9ba753863f1b595/6217868fa1686570ac9e66e0_Success is learnt - splash sreen video LOW RES SIZE-poster-00001.jpg" data-video-urls="https://uploads-ssl.webflow.com/6181b0b1a9ba753863f1b595/6217868fa1686570ac9e66e0_Success is learnt - splash sreen video LOW RES SIZE-transcode.mp4,https://uploads-ssl.webflow.com/6181b0b1a9ba753863f1b595/6217868fa1686570ac9e66e0_Success is learnt - splash sreen video LOW RES SIZE-transcode.webm" data-autoplay="true" data-loop="true" data-wf-ignore="true" data-beta-bgvideo-upgrade="false" class="background-video w-background-video w-background-video-atom"><video id="61c0797d-fa50-4e15-0462-cc705253e578-video" autoplay="" loop="" style="background-image:url(_https_/uploads-ssl.webflow.com/6181b0b1a9ba753863f1b595/6217868fa1686570ac9e66e0_Success%20is%20learnt%20-%20splash%20sreen%20video%20LOW%20RES%20SIZE-poster-00001.html)" muted="" playsinline="" data-wf-ignore="true" data-object-fit="cover">
                <source src="https://uploads-ssl.webflow.com/6181b0b1a9ba753863f1b595/6217868fa1686570ac9e66e0_Success is learnt - splash sreen video LOW RES SIZE-transcode.mp4" data-wf-ignore="true">
                <source src="https://uploads-ssl.webflow.com/6181b0b1a9ba753863f1b595/6217868fa1686570ac9e66e0_Success is learnt - splash sreen video LOW RES SIZE-transcode.webm" data-wf-ignore="true">
            </video>
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
                    <a href="https://thewarroom.ag/" class="button-large bg-primary-3 margin-top w-button">I will teach you</a>
                </div>
            </div><noscript>
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

    <section id="newsletter" class="section-6 no-margin wf-section">
        <div class="newsletter-container">
            <div class="center-content content-width-large">
                <div class="display-heading-5 space-bottom-large">
                    <strong class="bold-text-2">Get Started
                    </strong></div>
                <div style="width: 100%;">
                    <form method="post" action="" class="listmonk-form nl-form" style="text-align: center;">
                        <div>

                            <label>
                                <input type="checkbox" name="remember"> No sharing of vital information from the community to the public
                            </label>
                            <br>
                            <label>
                                <input type="checkbox" name="remember"> Use of All Info I Get in the Clan for personal use and not for commercial use.
                            </label>
                            <br>
                            <label>
                                <input type="checkbox" name="remember"> Show Respect to others while I Interact and learn
                            </label>

                        </div>


                    </form>


                </div>
            </div>
        </div>
    </section>



@endsection
