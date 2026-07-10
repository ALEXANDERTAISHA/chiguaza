@extends('layouts.app')

@section('content')
<style>
.dashboard-premium { color: #fff; }
.dashboard-premium .hero-card { border-radius: 28px; background: linear-gradient(135deg, rgba(10, 85, 107, 0.95), rgba(16, 185, 129, 0.95)); box-shadow: 0 32px 80px rgba(0, 0, 0, 0.18); padding: 2.5rem; overflow: hidden; position: relative; }
.dashboard-premium .hero-card::before { content: ''; position: absolute; inset: 0; background: radial-gradient(circle at 20% 20%, rgba(255, 255, 255, 0.18), transparent 28%), radial-gradient(circle at 80% 0%, rgba(255, 255, 255, 0.12), transparent 18%); pointer-events: none; }
.dashboard-premium .hero-card h1 { font-size: 2.8rem; line-height: 1.05; font-weight: 800; color: #ffffff; }
.dashboard-premium .hero-card p { color: rgba(255,255,255,0.88); font-size: 1.05rem; margin-bottom: 1.6rem; }
.dashboard-premium .hero-card .hero-actions a { display: inline-flex; align-items: center; justify-content: center; min-width: 170px; padding: 0.95rem 1.4rem; border-radius: 999px; font-weight: 700; text-decoration: none; color: #08111a; background: #ffffff; margin-right: 1rem; transition: transform .2s ease, box-shadow .2s ease; }
.dashboard-premium .hero-card .hero-actions a:hover { transform: translateY(-2px); box-shadow: 0 18px 40px rgba(0,0,0,0.16); }
.dashboard-premium .stats-grid { display: grid; grid-template-columns: repeat(auto-fit,minmax(220px,1fr)); gap: 1.25rem; margin-top: 2rem; }
.dashboard-premium .stat-card { border-radius: 24px; background: #ffffff; color: #0f172a; padding: 1.6rem; box-shadow: 0 20px 40px rgba(15,23,42,0.08); border: 1px solid rgba(15,23,42,0.05); }
.dashboard-premium .stat-card h3 { margin: 0 0 0.5rem; font-size: 1.15rem; font-weight: 700; }
.dashboard-premium .stat-card p { margin: 0; color: #475569; font-size: 0.95rem; line-height: 1.7; }
.dashboard-premium .stat-card .num { font-size: 2rem; font-weight: 800; margin-top: 1rem; color: #0f172a; }
.dashboard-premium .quick-links { display: grid; grid-template-columns: repeat(auto-fit,minmax(180px,1fr)); gap: 1rem; margin-top: 2rem; }
.dashboard-premium .quick-links a { display: block; padding: 1rem 1.25rem; border-radius: 18px; background: rgba(255,255,255,0.16); color: #ffffff; text-decoration: none; font-weight: 700; border: 1px solid rgba(255,255,255,0.2); transition: transform .2s ease, background .2s ease; }
.dashboard-premium .quick-links a:hover { transform: translateY(-2px); background: rgba(255,255,255,0.24); }
</style>

<div class="dashboard-premium">
    <div class="container-fluid py-4">
        <div class="hero-card">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <span class="badge bg-white text-dark mb-3" style="font-weight:700; letter-spacing:0.12em; text-transform:uppercase;">Panel Administrativo</span>
                    <h1>Bienvenido al panel premium de administración</h1>
                    <p>Monitorea los contenidos, gestiona noticias, carpetas y sugerencias con un diseño más claro, rápido y elegante.</p>
                    <div class="hero-actions">
                        <a href="{{ route('noticias-admin.index') }}">Gestionar Noticias</a>
                        <a href="{{ route('carpetas.index') }}">Ver Carpetas</a>
                    </div>
                </div>
                <div class="col-lg-5 text-center">
                    <div style="border-radius: 30px; overflow:hidden; box-shadow: 0 30px 70px rgba(0,0,0,0.16);">
                        <img src="{{ asset('assets/images/portada.jpg') }}" alt="Panel premium" style="width:100%; height:auto; display:block;">
                    </div>
                </div>
            </div>
        </div>

        <div class="stats-grid mt-4">
            <div class="stat-card">
                <h3>Noticias publicadas</h3>
                <p>Accede rápidamente a todas las noticias y edita contenido importante para el ciudadano.</p>
                <div class="num">{{ \App\Models\Noticia::count() ?? 0 }}</div>
            </div>
            <div class="stat-card">
                <h3>Carpetas disponibles</h3>
                <p>Control total sobre los documentos públicos y accesos directos a las principales carpetas.</p>
                <div class="num">{{ \App\Models\Carpeta::count() ?? 0 }}</div>
            </div>
            <div class="stat-card">
                <h3>Registros de quejas</h3>
                <p>Mantén seguimiento de solicitudes y comentarios con un flujo de atención más eficiente.</p>
                <div class="num">{{ \App\Models\QuejaSugerencia::count() ?? 0 }}</div>
            </div>
            <div class="stat-card">
                <h3>Autorizaciones</h3>
                <p>Visualiza la autoridad actual y actualiza los datos institucionales desde el panel.</p>
                <div class="num">1</div>
            </div>
        </div>

        <div class="quick-links">
            <a href="{{ route('empresa.index') }}">Empresa</a>
            <a href="{{ route('autoridad.index') }}">Autoridad</a>
            <a href="{{ route('slider.index') }}">Slider</a>
            <a href="{{ route('admin.quejasSugerencias') }}">Quejas y Sugerencias</a>
        </div>
    </div>
</div>
@endsection
