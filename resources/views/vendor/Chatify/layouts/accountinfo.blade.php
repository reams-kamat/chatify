{{-- user info and avatar --}}
<div class="avatar av-l upload-avatar-preview" style="background-image: url('{{ asset('/storage/'.config('chatify.user_avatar.folder').'/'.Auth::user()->avatar) }}');"></div>
<!-- <p class="info-name">{{ config('chatify.name') }}</p> -->
<p class="info-name">{{ Auth::user()->name }}</p>
<div>
	<x-jet-dropdown-link href="{{ route('profile.show') }}" style="color: #aeaeb7 !important">
		{{ __('Profile') }}
	</x-jet-dropdown-link>
	<form method="POST" action="{{ route('logout') }}">
		@csrf

		<x-jet-dropdown-link href="{{ route('logout') }}"
		onclick="event.preventDefault();
		this.closest('form').submit();" style="color: red !important">
			{{ __('Log Out') }}
		</x-jet-dropdown-link>
	</form>
</div>


