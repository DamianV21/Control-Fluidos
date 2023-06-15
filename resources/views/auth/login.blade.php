<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                 <x-jet-label class="text-left" for="email" value="{{ __('Correo electrónico') }}" />
                <x-jet-input id="email" placeholder="ejemplo@correo.com" class="block mt-1 w-full " type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label class="text-left" for="password" value="{{ __('Contraseña') }}" />
                <x-jet-input id="password" placeholder="***********" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 login-forgot">{{ __('Recordarme') }}</span>
                </label>
            </div>

            <div class="flex" >
                <!--<x-jet-button class="form-btn" >
                    {{ __('Iniciar Sesión') }}
                </x-jet-button>-->
                <button class="form-btn">
                    {{ __('Iniciar Sesión') }}
                </button>
            </div>
            <div class="flex">
                @if (Route::has('password.request'))
                    <a class="login-forgot" href="{{ route('password.request') }}">
                        {{ __('Olvidaste tu contraseña?') }}
                    </a>
                @endif
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>


<style>
    .form-btn {
        padding: 13px 20px 12px;
    background-color: #000;
    border-radius: 4px;
    font-size: 17px;
    font-weight: bold;
    line-height: 20px;
    color: #fff;
    margin-bottom: 24px;
    width: 100%;
 }
 .form-btn:hover{
    border: 1px solid #000;
      background-color: transparent;
      color: #000;
 }

 .login-forgot{
    font-size: 14px;
    color: #919aa3;
 }
</style>
