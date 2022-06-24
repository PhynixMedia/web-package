<!-- extend from root master view -->
@extends('master')

<!DOCTYPE html>
<html lang="en">

{{-- Add script and styles here   --}}

    @include("web::includes.header")

    <body style="background: black">

        @yield("pages")

        @include("web::includes.footer")

    </body>

</html>

