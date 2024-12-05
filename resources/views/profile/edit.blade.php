@extends('partials.layout')
@section('title', __('Profile'))
@section('content')

    
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        {{ __('Profile') }}
    </h2>


    <div class="py-20">
        <div class="w-2/3 mx-auto card bg-base-300">
            <div class="p-4 sm:p-8 bg-base-300 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>
 
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
  

            <div class="p-4 sm:p-8 bg-base-300 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>
        </div>    


    </div>
    @endsection

