
<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{ env("APP_NAME") }}">

    <!-- ========== Page Title ========== -->
    <title>{{ env("APP_NAME") }}</title>

    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="{{ asset("/assets/img/logo.png") }}" type="image/x-icon">

    @include("web::includes.styles.styles")

    @yield("styles")

</head>
