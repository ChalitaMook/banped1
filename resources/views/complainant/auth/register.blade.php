@extends('layouts.bootstrap')

<style>
    body {
        background-image: -webkit-gradient(linear, left top, right top, from(#0f725b), to(#5ee0c6)) !important;
        background-image: linear-gradient(to right, #0da48e 0%, #49cba0 100%) !important;
        margin-top: 20px;
    }
</style>

<style>
    body {
        background: #eee
    }

    .login-screen {
        position: relative;
        box-shadow: 0px 30px 50px #c4d2e2;
        background: #ffffff;
        margin: 60px auto;
        -webkit-border-radius: 8px;
        -moz-border-radius: 8px;
        border-radius: 8px;
    }

    .login-screen .login-logo {
        margin: 20px 0 30px 0;
        display: block;
    }

    .login-screen .login-logo>img {
        margin: 0;
        max-height: 36px;
    }

    .login-screen .login-box {
        padding: 30px 30px;
    }

    .login-screen .login-box h5 {
        margin: 0 0 20px 0;
        color: #5a99ee;
        text-align: center;
    }

    .login-screen .actions {
        display: block;
        margin-bottom: 20px;
        text-align: center;
    }

    .login-screen .actions a {
        color: #5a99ee;
        text-decoration: none;
        margin-top: 12px;
        display: block;
        font-size: .8rem;
    }

    .login-screen .actions a:hover {
        text-decoration: underline;
    }

    .login-screen .actions .btn {
        padding: 8px 25px;
        text-transform: uppercase;
    }

    .login-screen a.additional-link {
        text-decoration: none;
        margin: 30px auto 0 auto;
        text-align: center;
        display: block;
    }

    .login-screen a.additional-link span {
        text-decoration: underline;
        color: #5a99ee;
    }

    .login-screen p.info {
        padding: 0;
        margin: 0 0 20px 0;
        line-height: 150%;
        color: #8796af;
        text-align: center;
    }

    /*************** 13 B. OR | Line between two blocks ***************/
    .or {
        position: relative;
        text-align: center;
        margin-bottom: 20px;
    }

    .or::before {
        content: '';
        position: absolute;
        top: 50%;
        left: 15%;
        width: 70%;
        height: 1px;
        background-color: #e6ecf3;
    }

    .or span {
        position: relative;
        background-color: #ffffff;
        padding: 0 10px;
        z-index: 10;
    }

    /*************** 17 C. Buttons ***************/
    .btn {
        -webkit-border-radius: 2px;
        -moz-border-radius: 2px;
        border-radius: 2px;
        border: 0;
        padding: .375rem 1rem;
    }

    .btn .icon {
        font-size: 1.4rem;
        vertical-align: middle;
        margin-top: -4px;
        display: inline-block;
    }

    .btn.focus,
    .btn:focus {
        color: #ffffff;
    }

    .btn-sm {
        padding: .25rem .75rem;
    }

    .btn-sm .icon {
        font-size: 1rem;
        vertical-align: middle;
        margin-top: -2px;
        display: inline-block;
    }

    .btn-rounded {
        -webkit-border-radius: 50px;
        -moz-border-radius: 50px;
        border-radius: 50px;
    }

    .btn-primary {
        background: #5a99ee;
        color: #ffffff;
    }

    .btn-primary:hover {
        background: #438bec;
        color: #ffffff;
    }

    .btn-primary:focus {
        box-shadow: 0 0 0 3px #fcfdff;
    }

    .btn-primary:not(:disabled):not(.disabled).active,
    .btn-primary:not(:disabled):not(.disabled):active,
    .show>.btn-primary.dropdown-toggle {
        background: #5a99ee;
    }

    .btn-primary.disabled,
    .btn-primary:disabled {
        background: #5a99ee;
    }

    .btn-secondary {
        background: #647996;
        color: #ffffff;
    }

    .btn-secondary:hover {
        background: #5a6d87;
        color: #ffffff;
    }

    .btn-secondary:focus {
        box-shadow: 0 0 0 3px #a3b0c2;
    }

    .btn-secondary:not(:disabled):not(.disabled).active,
    .btn-secondary:not(:disabled):not(.disabled):active,
    .show>.btn-secondary.dropdown-toggle {
        background: #647996;
    }

    .btn-secondary.disabled,
    .btn-secondary:disabled {
        background: #647996;
    }

    .btn-success {
        background: #3ecfac;
    }

    .btn-success:hover {
        background: #30c3a0;
    }

    .btn-success:focus {
        box-shadow: 0 0 0 3px #c5f1e6;
    }

    .btn-success:not(:disabled):not(.disabled).active,
    .btn-success:not(:disabled):not(.disabled):active,
    .show>.btn-success.dropdown-toggle {
        background: #3ecfac;
    }

    .btn-success.disabled,
    .btn-success:disabled {
        background: #3ecfac;
    }

    .btn-danger {
        background: #fc6d4c;
    }

    .btn-danger:hover {
        background: #fc5933;
    }

    .btn-danger:focus {
        box-shadow: 0 0 0 3px #fec7ba;
    }

    .btn-danger:not(:disabled):not(.disabled).active,
    .btn-danger:not(:disabled):not(.disabled):active,
    .show>.btn-danger.dropdown-toggle {
        background: #fc6d4c;
    }

    .btn-danger.disabled,
    .btn-danger:disabled {
        background: #fc6d4c;
    }

    .btn-warning {
        background: #ffc139;
        color: #000000;
    }

    .btn-warning:hover {
        background: #ffb920;
        color: #000000;
    }

    .btn-warning:focus {
        box-shadow: 0 0 0 3px #fff1d2;
        color: #000000;
    }

    .btn-warning:not(:disabled):not(.disabled).active,
    .btn-warning:not(:disabled):not(.disabled):active,
    .show>.btn-warning.dropdown-toggle {
        background: #ffc139;
    }

    .btn-warning.disabled,
    .btn-warning:disabled {
        background: #ffc139;
    }

    .btn-info {
        background: #5a99ee;
    }

    .btn-info:hover {
        background: #438bec;
    }

    .btn-info:focus {
        box-shadow: 0 0 0 3px #fcfdff;
    }

    .btn-info:not(:disabled):not(.disabled).active,
    .btn-info:not(:disabled):not(.disabled):active,
    .show>.btn-info.dropdown-toggle {
        background: #5a99ee;
    }

    .btn-info.disabled,
    .btn-info:disabled {
        background: #5a99ee;
    }

    .btn-white {
        background: #ffffff;
        color: #000000;
        border: 1px solid #e1e5f1;
    }

    .btn-white:hover {
        background: #f2f2f2;
        color: #1a1a1a;
    }

    .btn-white:focus {
        box-shadow: 0 0 0 3px #f2f2f2;
        color: #1a1a1a;
    }

    .btn-white:not(:disabled):not(.disabled).active,
    .btn-white:not(:disabled):not(.disabled):active,
    .show>.btn-light.dropdown-toggle {
        background: #ffffff;
    }

    .btn-white.disabled,
    .btn-white:disabled {
        background: #ffffff;
    }

    .btn-light {
        background: #e4ebf2;
    }

    .btn-light:hover {
        background: #d3deea;
    }

    .btn-light:focus {
        box-shadow: 0 0 0 3px #f5f8fa;
    }

    .btn-light:not(:disabled):not(.disabled).active,
    .btn-light:not(:disabled):not(.disabled):active,
    .show>.btn-light.dropdown-toggle {
        background: #e4ebf2;
    }

    .btn-light.disabled,
    .btn-light:disabled {
        background: #e4ebf2;
    }

    .btn-dark {
        background: #28394d;
        color: #ffffff;
    }

    .btn-dark:hover {
        background: #31455e;
        color: #ffffff;
    }

    .btn-dark:focus {
        box-shadow: 0 0 0 3px #39526f;
    }

    .btn-dark:not(:disabled):not(.disabled).active,
    .btn-dark:not(:disabled):not(.disabled):active,
    .show>.btn-dark.dropdown-toggle {
        background: #6184ad;
    }

    .btn-dark.disabled,
    .btn-dark:disabled {
        background: #28394d;
    }

    .btn-lighter {
        background: #e6ecf3;
        color: #000000;
        border: 1px solid #e1e5f1;
    }

    .btn-lighter:hover {
        color: #1a1a1a;
        background: #dce4ee;
    }

    .btn-lighter:focus {
        box-shadow: 0 0 0 3px white;
        color: #1a1a1a;
    }

    .btn-lighter:not(:disabled):not(.disabled).active,
    .btn-lighter:not(:disabled):not(.disabled):active,
    .show>.btn-light.dropdown-toggle {
        background: #e6ecf3;
    }

    .btn-lighter.disabled,
    .btn-lighter:disabled {
        background: #e6ecf3;
    }

    .btn-fb {
        background: #3B5998;
        color: #ffffff;
    }

    .btn-fb:hover {
        background: #344e86;
        color: #ffffff;
    }

    .btn-fb:focus {
        box-shadow: 0 0 0 3px #4c70ba;
    }

    .btn-fb:not(:disabled):not(.disabled).active,
    .btn-fb:not(:disabled):not(.disabled):active,
    .show>.btn-fb.dropdown-toggle {
        background: #3B5998;
    }

    .btn-facebook.disabled,
    .btn-facebook:disabled {
        background: #3B5998;
    }

    .btn-tw {
        background: #55ACEE;
        color: #ffffff;
    }

    .btn-tw:hover {
        background: #3ea1ec;
        color: #ffffff;
    }

    .btn-tw:focus {
        box-shadow: 0 0 0 3px #2795e9;
    }

    .btn-tw:not(:disabled):not(.disabled).active,
    .btn-tw:not(:disabled):not(.disabled):active,
    .show>.btn-tw.dropdown-toggle {
        background: #55ACEE;
    }

    .btn-twitter.disabled,
    .btn-twitter:disabled {
        background: #55ACEE;
    }

    .btn-orange {
        background: #ff5000;
        color: #ffffff;
    }

    .btn-orange:hover {
        background: #e64800;
        color: #ffffff;
    }

    .btn-orange:focus {
        box-shadow: 0 0 0 3px #ffb999;
        color: #ffffff;
    }

    .btn-orange:not(:disabled):not(.disabled).active,
    .btn-orange:not(:disabled):not(.disabled):active,
    .show>.btn-orange.dropdown-toggle {
        background: #ff5000;
    }

    .btn-orange.disabled,
    .btn-orange:disabled {
        background: #ff5000;
    }

    .btn-link {
        color: #5a99ee;
    }

    .btn-link:hover {
        text-decoration: none;
    }

    /*************** 17 D. Outline Buttons ***************/
    .btn-outline-primary {
        border: 1px solid #5a99ee;
    }

    .btn-outline-primary:hover {
        background: #5a99ee;
    }

    .btn-outline-secondary {
        border: 1px solid #647996;
    }

    .btn-outline-secondary:hover {
        background: #647996;
    }

    .btn-outline-success {
        border: 1px solid #3ecfac;
    }

    .btn-outline-success:hover {
        background: #3ecfac;
    }

    .btn-outline-danger {
        border: 1px solid #fc6d4c;
    }

    .btn-outline-danger:hover {
        background: #fc6d4c;
    }

    .btn-outline-warning {
        border: 1px solid #ffc139;
    }

    .btn-outline-warning:hover {
        background: #ffc139;
    }

    .btn-outline-info {
        border: 1px solid #5a99ee;
        color: #5a99ee;
    }

    .btn-outline-info:hover {
        background: #5a99ee;
    }

    .btn-outline-light {
        border: 1px solid #e4ebf2;
        color: #8796af;
    }

    .btn-outline-light:hover {
        background: #e4ebf2;
        border: 1px solid #ccd9e6;
    }

    .btn-outline-dark {
        border: 1px solid #28394d;
    }

    .btn-outline-dark:hover {
        background-color: #1f2d3c;
        /* Fallback Color */
        background-image: -webkit-gradient(linear, left top, left bottom, from(#28394d), to(#1f2d3c));
        /* Saf4+, Chrome */
        background-image: -webkit-linear-gradient(top, #28394d, #1f2d3c);
        /* Chrome 10+, Saf5.1+, iOS 5+ */
        background-image: -moz-linear-gradient(top, #28394d, #1f2d3c);
        /* FF3.6 */
        background-image: -ms-linear-gradient(top, #28394d, #1f2d3c);
        /* IE10 */
        background-image: -o-linear-gradient(top, #28394d, #1f2d3c);
        /* Opera 11.10+ */
        background-image: linear-gradient(top, #28394d, #1f2d3c);
    }

    .btn-outline-orange {
        border: 1px solid #ff5000;
        color: #ff5000;
    }

    .btn-outline-orange:hover {
        background-color: #e64800;
        /* Fallback Color */
        background-image: -webkit-gradient(linear, left top, left bottom, from(#ff5000), to(#e64800));
        /* Saf4+, Chrome */
        background-image: -webkit-linear-gradient(top, #ff5000, #e64800);
        /* Chrome 10+, Saf5.1+, iOS 5+ */
        background-image: -moz-linear-gradient(top, #ff5000, #e64800);
        /* FF3.6 */
        background-image: -ms-linear-gradient(top, #ff5000, #e64800);
        /* IE10 */
        background-image: -o-linear-gradient(top, #ff5000, #e64800);
        /* Opera 11.10+ */
        background-image: linear-gradient(top, #ff5000, #e64800);
        color: #ffffff;
    }

    .btn-bdr-white {
        border: 2px solid #ffffff;
        background: transparent;
        color: #ffffff;
        padding: .5rem 1.5rem;
    }

    .btn-bdr-white:hover {
        opacity: 0.9;
        color: #ffffff;
    }

    .btn-bdr-white:focus {
        box-shadow: 0 0 0 3px white;
    }

    .btn.disabled,
    .btn:disabled {
        pointer-events: none;
    }
</style>



<div class="container mt-6">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css"
        integrity="sha256-3sPp8BkKUE7QyPSl6VfBByBroQbKxKG7tsusY2mhbVY=" crossorigin="anonymous" />

    <div class="container">

        <div class="contaiber d-flex justify-content-center mt-3">
            <img src="https://www.banped.go.th/uploaded/banner/14/4dabbed400110084229b5cb8b548840f.png" alt="">
        </div>


        <div class="container">
            <form action="#">
                <div class="row justify-content-md-center">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="login-screen">
                            <div class="login-box">
                                <div>
                                    <h5> <b>สมัครสมาชิก</b></h5>
                                </div>

                                <div class="d-flex justify-content-center mt-4">
                                    <img src="https://cdn3.iconfinder.com/data/icons/message-and-communication-sets/50/Icon_People_Message-256.png"
                                        width="120" alt="">
                                </div>

                                <div class="row gutters mt-3">
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="ชื่อ นามสกุล">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="อีเมล">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="รหัสผ่าน">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="รหัสผ่านอีกครั้ง">
                                        </div>
                                    </div>
                                </div>
                                <div class="actions clearfix">
                                    <button type="submit" class="btn btn-success btn-block">สมัครสมาชิก</button>
                                </div>

                                <a class="underline d-flex justify-content-center text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                    href="{{ route('complainant.login') }}">
                                    {{ __('มีบัญชีเรียบร้อย?') }}
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <footer class=" text-center text-lg-start mt-1">
        <!-- Copyright -->
        <div class="text-center text-light p-3">
            <b>
                เทศบาลตำบลบ้านเป็ด
                555 ม.2 ถ.เลี่ยงเมือง ต.บ้านเป็ด อ.เมือง จ.ขอนแก่น 40000
                โทร. 0-4342-3869-70 แฟกซ์. 0-4342-3032
            </b>

        </div>
        <!-- Copyright -->
    </footer>

</div>

<x-complainant-guest-layout>
    <form method="POST" action="{{ route('complainant.register') }}">
        @csrf
        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('ชื่อ นามสกุล')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"
                required autofocus />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>
        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('อีเมล')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                required />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>
        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('รหัสผ่าน')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('รหัสผ่านอีกครั้ง')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                name="password_confirmation" required />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                href="{{ route('complainant.login') }}">
                {{ __('มีบัญชีเรียบร้อย?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('สมัคร') }}
            </x-primary-button>
        </div>
    </form>
</x-complainant-guest-layout>
