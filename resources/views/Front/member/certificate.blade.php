<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $name }} -Certificate</title>
    <link href="{{  asset('Front/css/bootstrap.min.css') }}" rel="stylesheet">
    @php
    // Load images and convert to Base64
    // $logoPath = public_path('Front/img/logo.png');
    // $logoData = base64_encode(file_get_contents($logoPath));
    // $logoSrc = 'data:image/png;base64,'.$logoData;

    // $signaturePath = public_path('Front/img/signature.png');
    // $signatureData = base64_encode(file_get_contents($signaturePath));
    // $signatureSrc = 'data:image/png;base64,'.$signatureData;

    // $stampPath = public_path('Front/img/stamp.png');
    // $stampData = base64_encode(file_get_contents($stampPath));
    // $stampSrc = 'data:image/png;base64,'.$stampData;
    // background
    $backgroundPath = public_path('Front/assets/img/certificate.png');
    $backgroundData = base64_encode(file_get_contents($backgroundPath));
    $backgroundSrc = 'data:image/png;base64,'.$backgroundData;

    @endphp
    <style>
        @page {
            size: landscape;
        }

        .certificate {
            background: url("{{  $backgroundSrc }}") no-repeat center center fixed;
            background-size: cover;
            height: 660px;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            font-family: 'Segoe UI', sans-serif;
            text-align: center;
            /* padding: 20px; */
        }

        .certificate__logo {
            width: 150px;
            margin-bottom: 10px;
        }

        .date {
            font-size: 20px font-weight: 700;
            margin-bottom: 10px;
            color: #000000;
            text-transform: uppercase;
            font-family: 'Abeezee', sans-serif;
            text-align: right;
        }

        .certificate__title {
            font-size: 50px;
            margin-bottom: 20px;
            margin-top: 25%;
            color: #000000;
            /* text-transform: uppercase; */
            font-family: 'Abeezee', sans-serif;
        }

        .certificate__info {
            font-size: 24px;
            /* margin-bottom: 20px; */
            color: #000000;
            width: 80%;
            padding-left: 10%;
            padding-right: 10%;
            text-align: center;
            /* text-transform: uppercase; */
        }

        .certificate__signature {
            width: 150px;
            margin-top: 30px;
            float: left;
            display: block;
        }

        .certificate__stamp {
            width: 100px;
            margin-top: 20px;
            margin-left: 20px;
            float: left;
            display: block;
        }

    </style>
</head>
<body>
    <div class="certificate">
        {{-- <img class="certificate__logo" src="{{  $logoSrc }}" alt="Logo"> --}}
        <p class="date">
            Acc No: 02EMwA-CPDP1420
        </p>
        <p class="date">
            {{-- format date with M d, Y --}}
            Issued Date: {{ $date  }}
        </p>
        <h5 class="certificate__title">{{ $name }}</h5>
        <p class="certificate__info">has viewed {{ $count }} courses on our digital CME management platform and
            been awarded {{ $creditHours }} CEUs.</p>
        {{-- <p class="certificate__info">{{ $courseName }}</p>

        <p class="certificate__info">from {{ $startDate }} to {{ $endDate }}</p>
        <p class="certificate__info"> --}}
            {{-- <img class="certificate__signature" src="{{  $signatureSrc }}" alt="Signature"> --}}
            {{-- <img class="certificate__stamp" src="{{  $stampSrc }}" alt="Stamp"></p> --}}
    </div>
</body>
</html>
