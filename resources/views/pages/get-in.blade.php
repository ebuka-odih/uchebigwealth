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


    <section id="newsletter" class="section-6 no-margin wf-section">
        <div class="newsletter-container">
            <div class="center-content content-width-large">
                <div class="display-heading-5 space-bottom-large">
                    <strong class="bold-text-2">Get Started
                    </strong>
                </div>
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
    <hr>

    <section id="newsletter" class="section-6 no-margin wf-section">
        <div class="newsletter-container">
            <div class="center-content content-width-large">
                <div style="padding-top: 1px" class="display-heading-5 space-bottom-large">
                    <strong class="bold-text-3">Pass The Barrier to Entry
                    </strong>
                </div>
                <p>
                    The Barrier to Entry is the fence to prevents low quality people from getting access
                </p>

            </div>
        </div>
    </section>




@endsection
