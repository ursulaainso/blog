
@section('title', __('Update profile information form'))


    <div>
        <h2 class="card-title">{{ __('Profile information') }}</h2>
        <p class="text-sm font-light">{{ __("Update your account's profile information and email address.") }}</p>
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <label class="w-full form-control">
                <div class="label">
                    <span class="label-text">{{__('Name')}}</span>
                </div>
                <input name="name" type="text" placeholder="Name" value="{{ old('name') }}" class="w-full input input-bordered @error('name') input-error @enderror" required autofocus autocomplete="name"/>
                <div class="label">
                    @error('email')
                        <span class="label-text-alt text-error">{{ $message }}</span>
                    @enderror
                </div>
            </label>
            <label class="w-full form-control">
                <div class="label">
                    <span class="label-text">{{__('Email')}}</span>
                </div>
                <input name="email" type="email" placeholder="Email" value="{{ old('email') }}" class="w-full input input-bordered @error('email') input-error @enderror" required autofocus autocomplete="username"/>
                <div class="label">
                    @error('email')
                        <span class="label-text-alt text-error">{{ $message }}</span>
                    @enderror
                </div>
            </label>
            <div class="text left">
                <input type="submit" class="btn btn-primary" value="{{ __('Save') }}">
            </div>
        </form>
    </div>
