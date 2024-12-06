
<div class="flex w-full flex-col">

    <h2 class="card-title">{{ __('Update password') }}</h2>
    <p class="text-sm font-light">{{ __("Ensure your account is using a long, random password to stay secure") }}</p>
    <form action="{{ route('password.update') }}" method="POST">
        @csrf
        <label class="w-full form-control">
            <div class="label">
                <span class="label-text">{{__('Current password')}}</span>
            </div>
            <input name="current password" type="password" placeholder="Current password" value="{{ old('password') }}" class="w-full input input-bordered @error('password') input-error @enderror"  required autofocus autocomplete="name"/>
            <div class="label">
                @error('name')
                    <span class="label-text-alt text-error">{{ $message }}</span>
                @enderror
            </div>
        </label>
        <label class="w-full form-control">
            <div class="label">
                <span class="label-text">{{__('New password')}}</span>
            </div>
            <input name="new password" type="password" placeholder="New password" class="w-full input input-bordered @error('new password') input-error @enderror" required autocomplete="password"/>
            <div class="label">
                @error('email')
                    <span class="label-text-alt text-error">{{ $message }}</span>
                @enderror
            </div>
        </label>
        <label class="w-full form-control">
            <div class="label">
                <span class="label-text">{{__('Confirm Password')}}</span>
            </div>
            <input name="Confirm password" type="password" placeholder="Confirm password" class="w-full input input-bordered @error('confirm password') input-error @enderror" required autocomplete="new-password"/>
            <div class="label">
                @error('password')
                    <span class="label-text-alt text-error">{{ $message }}</span>
                @enderror
            </div>
        </label>
        <div class="text-left">
            {{-- <a class="btn btn-link" href="{{ route('login') }}">{{ __('Already registered?') }}</a> --}}
            <input type="submit" class="btn btn-primary" value="{{ __('Save') }}">
        </div>
    </form>
</div>
