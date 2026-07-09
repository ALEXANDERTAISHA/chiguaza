<x-guest-layout>
    <div class="login-page-wrapper">
        <div class="login-page-grid">
            <div class="login-hero-panel">
                <div class="login-hero-overlay">
                    <span class="login-hero-pill">Portal de transparencia</span>
                    <h1>2025</h1>
                    <p>Acceda a la información institucional y documentos públicos organizados por categorías.</p>
                </div>
            </div>

            <div class="login-card-panel">
                <div class="login-card">
                    <div class="login-card-brand">
                        <img src="{{ asset('assets/images/resources/logo-1.png') }}" alt="logo" class="login-card-logo">
                    </div>
                    <h3>Ingresar</h3>
                    <p class="login-card-subtitle">Introduce tus credenciales para acceder al panel</p>

                    <x-auth-session-status class="mb-4" :status="session('status')" />

                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="login-field">
                            <x-input-label for="email" :value="__('Correo electrónico')" />
                            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>
                        <div class="login-field">
                            <x-input-label for="password" :value="__('Contraseña')" />
                            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>
                        <div class="login-actions">
                            <label class="login-remember">
                                <input id="remember_me" type="checkbox" name="remember">
                                <span>Recordarme</span>
                            </label>
                            @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}" class="login-forgot">¿Olvidaste tu contraseña?</a>
                            @endif
                        </div>
                        <div class="login-submit">
                            <x-primary-button class="w-full py-3 font-semibold">{{ __('Iniciar sesión') }}</x-primary-button>
                        </div>
                    </form>
                    <p class="login-register">¿No tienes cuenta? <a href="{{ route('register') }}">Regístrate</a></p>
                </div>
            </div>
        </div>
    </div>

    <style>
        .login-page-wrapper{max-width:1100px;margin:48px auto;padding:0 16px;}
        .login-page-grid{display:flex;gap:30px;align-items:stretch;justify-content:center;flex-wrap:wrap;}
        .login-hero-panel{flex:1 1 540px;min-height:520px;border-radius:18px;position:relative;overflow:hidden;box-shadow:0 16px 40px rgba(15,23,42,0.08);background-image:url('{{ asset('assets/images/resources/feature-three-img-1.jpg') }}');background-size:cover;background-position:center;}
        .login-hero-panel::after{content:'';position:absolute;inset:0;background:linear-gradient(180deg,rgba(15,23,42,0.3),rgba(15,23,42,0.65));}
        .login-hero-overlay{position:absolute;left:32px;top:32px;right:32px;color:#fff;z-index:1;max-width:560px;}
        .login-hero-pill{display:inline-flex;padding:8px 18px;border-radius:999px;background:rgba(255,255,255,0.15);backdrop-filter:blur(10px);font-size:13px;font-weight:700;letter-spacing:0.04em;text-transform:uppercase;color:#fff;}
        .login-hero-overlay h1{margin:18px 0 14px;color:#fff;font-size:72px;line-height:0.88;text-shadow:0 18px 40px rgba(0,0,0,0.4);}
        .login-hero-overlay p{max-width:500px;font-size:16px;line-height:1.8;color:rgba(255,255,255,0.92);}
        .login-card-panel{flex:0 0 420px;width:100%;max-width:420px;}
        .login-card{background:#fff;border-radius:18px;padding:32px 28px;box-shadow:0 16px 40px rgba(15,23,42,0.08);}
        .login-card-brand{text-align:center;margin-bottom:22px;}
        .login-card-logo{max-height:64px;max-width:160px;object-fit:contain;}
        .login-card h3{font-size:28px;color:#111827;margin-bottom:8px;}
        .login-card-subtitle{font-size:14px;color:#4b5563;margin-bottom:26px;}
        .login-field{margin-bottom:18px;}
        .login-actions{display:flex;align-items:center;justify-content:space-between;gap:14px;margin-bottom:22px;flex-wrap:wrap;}
        .login-remember{display:inline-flex;align-items:center;gap:8px;font-size:14px;color:#4b5563;}
        .login-remember input{width:16px;height:16px;border:1px solid #d1d5db;border-radius:4px;}
        .login-forgot{font-size:14px;color:#2563eb;}
        .login-submit{margin-bottom:18px;}
        .login-register{text-align:center;font-size:14px;color:#6b7280;}
        .login-register a{color:#2563eb;font-weight:600;}
        @media(max-width:992px){.login-page-grid{flex-direction:column;}.login-hero-panel{min-height:420px;}.login-hero-overlay h1{font-size:54px;}} 
        @media(max-width:640px){.login-hero-panel{min-height:320px;}.login-hero-overlay{left:20px;right:20px;top:24px;}.login-hero-overlay h1{font-size:42px;}.login-card{padding:24px;}}
    </style>
</x-guest-layout>
