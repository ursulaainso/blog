@extends('partials.layout')
@section('title', __('Register'))
@section('content')
    <div class="w-2/3 mx-auto card my-20>
        <div class="card-body">
            <div class="w-2/3 mx-auto card bg-base-300">
                <div class="card-body items-center text-center">
                    <div class="mb-4">
                        {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
                    </div>
                  <div class="card-actions">
                    <button class="btn btn-primary"><span>{{__('RESEND VERIFICATION EMAIL')}}</span></button>
                    <button class="btn btn-ghost">Deny</button>
                  </div>
                </div>
              </div>

        </div>
    </div>
@endsection
