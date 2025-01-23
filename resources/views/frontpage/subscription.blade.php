@extends('layout.Front-header')
    <!--style -->
    <style>
        h1 {
            font-family: "Merriweather", serif;
            font-weight: 400;
            font-style: normal;
        }

        .price-circle {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            font-weight: bold;
            color: white;
            margin: 20px auto;
            text-decoration: underline;
        }

        .price-circle.basic {
            background-color: #4dafff;
        }

        .price-circle.premium {
            background-color: #ff7043;
        }

        .price-circle.annual {
            background-color: #ffca28;
        }

        .details {
            font-size: 16px;
            text-align: center;
            font-weight: bold;

        }

        .plan button {
            margin-top: 20px;
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            border-radius: 20px;
            color: white;
            cursor: pointer;
            font-weight: bold;
        }

        .plan button.basic {
            background-color: #2b9cf8;
            font-family: "Merriweather", serif;
            font-weight: 400;
            font-style: normal;
        }

        .plan button.premium {
            background-color: #fd6030;
            font-family: "Merriweather", serif;
            font-weight: 400;
            font-style: normal;
        }

        .plan button.annual {
            background-color: #fed65d;
            font-family: "Merriweather", serif;
            font-weight: 400;
            font-style: normal;
        }

        .plan button:hover {
            opacity: 0.8;
        }

        .plan {
            border: 2px solid #ddd;
            padding: 20px;
            border-radius: 10px;
            background-color: #f9f9f9;
        }
    </style>

<!-- Navigation -->
@section('content')

<body style="margin-top:100px;">
    <div class="container text-center my-5">
        <h1 style="">Subscription Plan</h1>
        <div class="row mt-4">
            <div class="col-md-4 mb-4">
                <div class="plan">
                    <div class="price-circle basic">
                        $4.99
                    </div>
                    <div class="details">
                        <p>Free for 30 days</p>
                        <p>5 book Download/Month</p>
                        <p>$4.99/month</p>
                        <p>Billed monthly</p>
                        <p>cancel anytime</p>
                    </div>
                    <button class="basic">Basic</button>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="plan">
                    <div class="price-circle premium">
                        $9.99
                    </div>
                    <div class="details">
                        <p>Free for 30 days</p>
                        <p>Unlimited book Download</p>
                        <p>$9.99/month</p>
                        <p>Billed monthly</p>
                        <p>cancel anytime</p>
                    </div>
                    <button class="premium">Premium</button>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="plan">
                    <div class="price-circle annual">
                        $82.99
                    </div>
                    <div class="details">
                        <p>Free for 30 days</p>
                        <p>Unlimited book Download</p>
                        <p>$82.99/year</p>
                        <p>Billed yearly</p>
                        <p>cancel anytime</p>
                    </div>
                    <button class="annual">Premium annual</button>
                </div>
            </div>
        </div>
    </div>

    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" ></script> --}}


@endsection
<!-- Footer -->
