<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $name }} - {{ $courseName }} Certificate</title>
    <link href="{{  asset('Front/css/bootstrap.min.css') }}" rel="stylesheet">
    @php
    // Load images and convert to Base64
    $logoPath = public_path('Front/img/logo.png');
    $logoData = base64_encode(file_get_contents($logoPath));
    $logoSrc = 'data:image/png;base64,'.$logoData;

    $signaturePath = public_path('Front/img/signature.png');
    $signatureData = base64_encode(file_get_contents($signaturePath));
    $signatureSrc = 'data:image/png;base64,'.$signatureData;

    $stampPath = public_path('Front/img/stamp.png');
    $stampData = base64_encode(file_get_contents($stampPath));
    $stampSrc = 'data:image/png;base64,'.$stampData;
    // background
    $backgroundPath = public_path('Front/img/ribbon.png');
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
            border: 1px solid #d9d9d9;
            height: 600px;
            width: 942px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            font-family: 'Segoe UI', sans-serif;
            text-align: center;
            padding: 50px;
        }

        .certificate__logo {
            width: 150px;
            margin-bottom: 20px;
        }

        .certificate__title {
            font-size: 4rem;
            font-weight: 700;
            margin-bottom: 30px;
            color: #78bcff;
            text-transform: uppercase;
        }

        .certificate__info {
            font-size: 2rem;
            font-weight: 700;
            /* margin-bottom: 20px; */
            color: #000000;
            text-transform: uppercase;
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
        <img class="certificate__logo" src="{{  $logoSrc }}" alt="Logo">
        <h1 class="certificate__title">{{ $name }}</h1>
        <p class="certificate__info">has successfully completed the course</p>
        <p class="certificate__info">{{ $courseName }}</p>

        <p class="certificate__info">from {{ $startDate }} to {{ $endDate }}</p>
        <p class="certificate__info">
            {{-- <img class="certificate__signature" src="{{  $signatureSrc }}" alt="Signature"> --}}
            <img class="certificate__stamp" src="{{  $stampSrc }}" alt="Stamp"></p>
    </div>
</body>
</html>
