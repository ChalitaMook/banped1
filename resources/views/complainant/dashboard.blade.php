<x-complainant-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }} {{ Auth::guard('complainant')->user()->name }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                    <br>
                <a href="{{url('/profile1')}}">โปรไฟล์</a>
                    <br>
                <a href="{{url('/complaint_form')}}">ร้องเรียนปัญหา</a>
                    <br>
                <a href="{{url('/complaint_table')}}">ดูรายการร้องเรียน</a>
                <br>
                <a href="{{url('/rate_table')}}">ประเมิน</a>
                </div>
            </div>
        </div>
    </div>
</x-complainant-layout>
