<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                    hello admin
                    {{ Auth::user()->name }}
                    <br>
                    <a href="{{url('/user')}}">ข้อมูลพนักงาน</a><br>
                    <a href="{{url('/problem_type')}}">ข้อมูลประเภทข้อร้องเรียน</a><br>
                    <a href="{{url('/agency')}}">ข้อมูลหน่วยงาน</a><br>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>



