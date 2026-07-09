<x-guest-layout>
    <div class="container" style="max-width:1100px;margin:48px auto;">
        <div style="display:flex;gap:30px;align-items:stretch;">
            <div style="flex:1;background-image:url('{{ asset('assets/images/resources/login-hero.jpg') }}');background-size:cover;background-position:center;border-radius:12px;min-height:520px;position:relative;box-shadow:0 12px 30px rgba(2,24,58,0.08);">
                <div style="position:absolute;left:40px;top:40px;color:#fff;">
                    <div style="background:rgba(255,255,255,0.08);padding:8px 14px;border-radius:30px;display:inline-block;font-weight:600">Portal de transparencia</div>
                    <h1 style="font-size:72px;margin:18px 0 8px 0;color:#fff;line-height:0.9;text-shadow:0 8px 24px rgba(0,0,0,0.6)">2025</h1>
                    <p style="max-width:420px;color:rgba(255,255,255,0.9);font-size:16px">Acceda a la información institucional y documentos públicos organizados por categorías.</p>
                </div>
            </div>

            <div style="width:420px;flex:0 0 420px;">
                <div style="background:#fff;border-radius:12px;padding:28px;box-shadow:0 12px 30px rgba(2,24,58,0.08);">
                    <div style="text-align:center;margin-bottom:12px;"><img src="{{ asset('assets/images/logo.png') }}" alt="logo" style="height:56px;"></div>
                    <h3 style="margin-bottom:6px;color:#06203a">Ingresar</h3>
                    <p style="margin-bottom:18px;color:#6b7280;font-size:14px">Introduce tus credenciales para acceder al panel</p>

                    <!-- Session Status -->
                    <x-auth-session-status class="mb-4" :status="session('status')" />

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div style="margin-bottom:12px;">
                            <x-input-label for="email" :value="__('Correo electrónico')" />
                            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        <div style="margin-bottom:12px;">
                            <x-input-label for="password" :value="__('Contraseña')" />
                            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>

                        <div style="display:flex;align-items:center;justify-content:space-between;margin-bottom:18px;">
                            <label style="display:inline-flex;align-items:center;font-size:14px;color:#374151;">
                                <input id="remember_me" type="checkbox" name="remember" style="margin-right:8px;"> Recordarme
                            </label>
                            @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}" style="font-size:13px;color:#2563eb;">¿Olvidaste tu contraseña?</a>
                            @endif
                        </div>

                        <div>
                            <x-primary-button style="width:100%;padding:12px 16px;font-weight:600">{{ __('Iniciar sesión') }}</x-primary-button>
                        </div>
                    </form>

                    <div style="text-align:center;margin-top:14px;font-size:13px;color:#6b7280">¿No tienes cuenta? <a href="{{ route('register') }}" style="color:#2563eb;">Regístrate</a></div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
