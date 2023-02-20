{{-- เข้าสู่ระบบเเอดมิน --}}

@extends('layouts.bootstrap')


<style>
    body {
        background-image: -webkit-gradient(linear, left top, right top, from(#22a3df), to(#1a488e)) !important;
        background-image: linear-gradient(to right, #60aff5 0%, #446ee9 100%) !important;
        margin-top: 20px;
    }
</style>

<style>
    body {
        background-color: #DCDCDC;
        margin-top: 20px;
    }

    .card {
        margin-bottom: 1.5rem;
        box-shadow: 0 1px 15px 1px rgba(52, 40, 104, .08);
    }

    .card {
        position: relative;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-direction: column;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: border-box;
        border: 1px solid #e5e9f2;
        border-radius: .2rem;
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


        <div class="container mt-3">
            <div class="container h-100">
                <div class="row h-50">
                    <div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-50">
                        <div class="d-table-cell align-middle">

                            <div class="card">
                                <div class="card-body">
                                    <div class="m-sm-4">
                                        
                                        <div class="text-center mt-4">
                                            <h5><b>เข้าสู่ระบบเจ้าหน้าที่</b></h5>
                                        </div>

                                        <form>
                                            <div class="form-group">
                                                <label>อีเมล :</label>
                                                <input class="form-control form-control-lg rounded-pill" type="email"
                                                    name="email" placeholder="อีเมล">
                                            </div>
                                            <div class="form-group">
                                                <label>รหัสผ่าน :</label>
                                                <input class="form-control form-control-lg rounded-pill" type="password"
                                                    name="password" placeholder="รหัสผ่าน">
                                                <small>
                                                    <a href="pages-reset-password.html">ลืมรหัสผ่าน</a>
                                                </small>
                                            </div>
                                            <div>
                                                <div class="custom-control custom-checkbox align-items-center">
                                                    <input type="checkbox" class="custom-control-input"
                                                        value="remember-me" name="remember-me" checked="">
                                                    <label class="custom-control-label text-small">จดจำรหัสผ่าน</label>
                                                </div>
                                            </div>
                                            <div class="text-center mt-3">
                                                <a href="index.html" class="btn btn-lg btn-primary">เข้าสู่ระบบ</a>
                                                <!-- <button type="submit" class="btn btn-lg btn-primary">Sign in</button> -->
                                            </div>
                                        </form>

                                        
                                    </div>
                                </div>
                            </div>
                            <footer class=" text-center text-lg-start">
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
                    </div>
                </div>
            </div>
        </div>

    </div>


</div>

{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('อีเมล')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('รหัสผ่าน')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ml-2 text-sm text-gray-600">{{ __('จดจำรหัสผ่าน') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('ลืมรหัสผ่าน?') }}
                </a>
            @endif

            <x-primary-button class="ml-3">
                {{ __('เข้าสู่ระบบ') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}
