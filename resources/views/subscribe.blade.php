<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FEMTO15</title>

    <link rel="stylesheet" href="{{asset('css/stripe.css')}}">
    <link rel="stylesheet" href="{{asset('css/stripe-base.css')}}">


    <script src="https://js.stripe.com/v3/"></script>
    <script src="{{asset('js/stripe-base.js')}}"></script>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>

        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        main {
            position: inherit;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .links > a {
            color: #30398E;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
            z-index: 2;
        }

    </style>

</head>
<body>

    <nav class="top-right links">

        @auth

            <a href="javascript:void(0)" onclick="document.getElementById('logout-form').submit();">Logout
                <form id="logout-form" action="/logout" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </a>

        @endauth
    </nav>

    <div class="globalContent">

        <!-- Main -->
        <main>

            <!-- Section -->
            <section class="container-lg">


                <div id="subscribe-logo">

                    <a href="/">{!! config('adminlte.logo', '<b>FEMT</b>O15 ') !!}</a>
                    <h1>Select your subscription plan MOFO to complete your registeration</h1>

                </div>

                <!-- Example 3 -->
                <div class="cell example example3" id="example-3">
                    <form action="/subscribe" method="POST" id="subscription-form">

                        @csrf

                        <div class="fieldset">

                            <input  id="example3-name"
                                    data-tid="elements_examples.form.name_label"
                                    class="field"
                                    type="text"
                                    placeholder="Name"
                                    required=""
                                    autocomplete="name">

                            <select name="subscription_plan"
                                    id="subscription-plan"
                                    class="field">

                                <option class="optionList" value="monthly">Monthly</option>
                                <option class="optionList" value="yearly">Yearly</option>

                            </select>

                        </div>

                        <div class="fieldset">

                            <div id="example3-card-number" class="field empty"></div>
                            <div id="example3-card-expiry" class="field empty third-width"></div>
                            <div id="example3-card-cvc" class="field empty third-width"></div>
                            <input id="example3-zip" data-tid="elements_examples.form.postal_code_placeholder" class="field empty third-width" placeholder="94107">

                        </div>

                        <button type="submit"
                                id="card-button"
                                data-secret="{{ $intent->client_secret }}"
                                data-tid="elements_examples.form.pay_button">
                                Subscribe
                        </button>

                        <div class="error" role="alert">

                            <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17">
                                <path class="base" fill="#000" d="M8.5,17 C3.80557963,17 0,13.1944204 0,8.5 C0,3.80557963 3.80557963,0 8.5,0 C13.1944204,0 17,3.80557963 17,8.5 C17,13.1944204 13.1944204,17 8.5,17 Z"></path>
                                <path class="glyph" fill="#FFF" d="M8.5,7.29791847 L6.12604076,4.92395924 C5.79409512,4.59201359 5.25590488,4.59201359 4.92395924,4.92395924 C4.59201359,5.25590488 4.59201359,5.79409512 4.92395924,6.12604076 L7.29791847,8.5 L4.92395924,10.8739592 C4.59201359,11.2059049 4.59201359,11.7440951 4.92395924,12.0760408 C5.25590488,12.4079864 5.79409512,12.4079864 6.12604076,12.0760408 L8.5,9.70208153 L10.8739592,12.0760408 C11.2059049,12.4079864 11.7440951,12.4079864 12.0760408,12.0760408 C12.4079864,11.7440951 12.4079864,11.2059049 12.0760408,10.8739592 L9.70208153,8.5 L12.0760408,6.12604076 C12.4079864,5.79409512 12.4079864,5.25590488 12.0760408,4.92395924 C11.7440951,4.59201359 11.2059049,4.59201359 10.8739592,4.92395924 L8.5,7.29791847 L8.5,7.29791847 Z"></path>
                            </svg>
                            <span class="message"></span>

                        </div>

                    </form>

                    <div class="success">

                        <div class="icon">
                            <svg width="84px" height="84px" viewBox="0 0 84 84" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <circle class="border" cx="42" cy="42" r="40" stroke-linecap="round" stroke-width="4" stroke="#000" fill="none"></circle>
                            <path class="checkmark" stroke-linecap="round" stroke-linejoin="round" d="M23.375 42.5488281 36.8840688 56.0578969 64.891932 28.0500338" stroke-width="4" stroke="#000" fill="none"></path>
                            </svg>
                        </div>

                        <h3 class="title" data-tid="elements_examples.success.title">Payment successful</h3>

                    </div>

                </div>
                <!-- End Example 3 -->

            </section>
            <!-- End Section -->

        </main>
        <!-- End Main -->

    </div>

    <script src="{{asset('js/stripe.js')}}"></script>

</body>
</html>

