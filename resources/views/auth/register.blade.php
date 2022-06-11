{{--<x-guest-layout>--}}
{{--    <x-auth-card>--}}
{{--        <x-slot name="logo">--}}
{{--            <a href="/">--}}
{{--                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />--}}
{{--            </a>--}}
{{--        </x-slot>--}}

{{--        <!-- Validation Errors -->--}}
{{--        <x-auth-validation-errors class="mb-4" :errors="$errors" />--}}

{{--        <form method="POST" action="{{ route('register') }}">--}}
{{--            @csrf--}}

{{--            <!-- Name -->--}}
{{--            <div>--}}
{{--                <x-label for="name" :value="__('Name')" />--}}

{{--                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />--}}
{{--            </div>--}}

{{--            <!-- Email Address -->--}}
{{--            <div class="mt-4">--}}
{{--                <x-label for="email" :value="__('Email')" />--}}

{{--                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />--}}
{{--            </div>--}}

{{--            <!-- Password -->--}}
{{--            <div class="mt-4">--}}
{{--                <x-label for="password" :value="__('Password')" />--}}

{{--                <x-input id="password" class="block mt-1 w-full"--}}
{{--                                type="password"--}}
{{--                                name="password"--}}
{{--                                required autocomplete="new-password" />--}}
{{--            </div>--}}

{{--            <!-- Confirm Password -->--}}
{{--            <div class="mt-4">--}}
{{--                <x-label for="password_confirmation" :value="__('Confirm Password')" />--}}

{{--                <x-input id="password_confirmation" class="block mt-1 w-full"--}}
{{--                                type="password"--}}
{{--                                name="password_confirmation" required />--}}
{{--            </div>--}}



<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="admin, dashboard">
    <meta name="author" content="DexignZone">
    <meta name="robots" content="index, follow">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Dompet : Payment Admin Template">
    <meta property="og:title" content="Dompet : Payment Admin Template">
    <meta property="og:description" content="Dompet : Payment Admin Template">
    <meta property="og:image" content="https://dompet.dexignlab.com/xhtml/social-image.png">
    <meta name="format-detection" content="telephone=no">

    <!-- PAGE TITLE HERE -->
    <title>Dompet : Payment Admin Template</title>

    <!-- FAVICONS ICON -->
    <link rel="shortcut icon" type="image/png" href="images/favicon.png">
    <link href="css/style.css" rel="stylesheet">

</head>

<body class="vh-100">
<div class="authincation h-100">
    <div class="container h-100">
        <div class="row justify-content-center h-100 align-items-center">
            <div class="col-md-6">
                <div class="authincation-content">
                    <div class="row no-gutters">
                        <div class="col-xl-12">
                            <div class="auth-form">
                                <div class="text-center mb-3">
                                    <a href="{{ url('/') }}"><img src="images/logo-full.png" alt=""></a>
                                </div>
                                <h4 class="text-center mb-4">Sign up your account</h4>
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <div class="row">
                                        <div class="mb-1 col-md-6">
                                            <label for="first_name" class="mb-1"><strong>First Name</strong></label>
                                            <input type="name" id="first_name" name="first_name" class="form-control" value="{{ old("first_name") }}">
                                            <div>
                                                @if($errors->first('first_name'))
                                                    <span style="color: #9d0621">{{ $errors->first('first_name') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label for="last_name" class="mb-1"><strong>Last Name</strong></label>
                                            <input type="text" id="last_name" name="last_name" class="form-control" value="{{ old("last_name") }}">
                                            <div>
                                                @if($errors->first('last_name'))
                                                    <span style="color: #9d0621">{{ $errors->first('last_name') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label for="username" class="mb-1"><strong>Username</strong></label>
                                            <input type="text" id="username" class="form-control" value="{{ old('username') }}" name="username">
                                            <div>
                                                @if($errors->first('username'))
                                                    <span style="color: #9d0621">{{ $errors->first('username') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="mb-3 col-md-6">
                                                <label for="email" class="mb-1"><strong>Email</strong></label>
                                                <input type="email" id="email" name="email" class="form-control" value="{{ old("email") }}">
                                                <div>
                                                    @if($errors->first('email'))
                                                        <span style="color: #9d0621">{{ $errors->first('email') }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                        <div class="mb-3 col-md-6">
                                            <label for="password" class="mb-1"><strong>Password</strong></label>
                                            <input type="password" autocomplete="true" id="password" name="password" class="form-control" value="{{ old('password') }}">
                                            <div>
                                                @if($errors->first('password'))
                                                    <span style="color: #9d0621">{{ $errors->first('password') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label for="password_confirmation" class="mb-1"><strong>Password Confirmation</strong></label>
                                            <input id="password_confirmation" autocomplete="off" type="password" class="form-control" value="{{ old('password_confirmation') }}" name="password_confirmation">
                                            <div>
                                                @if($errors->first('password_confirmation'))
                                                    <span style="color: #9d0621">{{ $errors->first('password_confirmation') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center mt-4">
                                        <button type="submit" class="btn btn-primary btn-block">Sign me up</button>
                                    </div>
                                </form>
                                <div class="new-account mt-3">
                                    <p>Already have an account? <a class="text-primary" href="{{ route("login") }}">Sign in</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--**********************************
	Scripts
***********************************-->
<!-- Required vendors -->
<script src="vendor/global/global.min.js"></script>
<script src="js/custom.min.js"></script>
<script src="js/dlabnav-init.js"></script>
<script src="js/styleSwitcher.js"></script>
</body>
</html>
