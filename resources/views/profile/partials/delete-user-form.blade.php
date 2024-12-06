<div class="flex w-full flex-col">

    <h2 class="card-title">{{ __('Delete account') }}</h2>
    <p class="mt-1 text-SM">
        {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
    </p>
    <form action="{{ route('password.update') }}" method="POST">
        @csrf
        <div class="text-left my-4">
            {{-- <a class="btn btn-link" href="{{ route('login') }}">{{ __('Already registered?') }}</a> --}}
            <input type="submit" class="btn btn-error" value="{{ __('Delete your account') }}">
        </div>
    </form>
</div>
