@extends('layouts.cliente')

@section('content')

{{-- slider --}}
@include('sections.slider',['sliders'=>$sliders])


{{-- departamento --}}
@include('sections.departament')


{{-- autoridad --}}
@include('sections.autoridad',['autoridad'=>$autoridad])



<!--Services One Start-->
<section class="services-one" style="background: linear-gradient(135deg, #0c374f 0%, #0f4f72 100%); padding: 90px 0; position: relative; overflow: hidden; color: #f8fafc;">
    <div style="position:absolute; inset:0; background-image: radial-gradient(circle at 15% 20%, rgba(255,255,255,0.16), transparent 18%), radial-gradient(circle at 80% 5%, rgba(59,130,246,0.12), transparent 22%); pointer-events:none;"></div>
    <div class="container" style="position:relative; z-index:1;">
        <div class="row gx-5 align-items-center">
            <div class="col-xl-5">
                <div style="background: rgba(255,255,255,0.08); border:1px solid rgba(255,255,255,0.12); border-radius:36px; padding:2rem; box-shadow: 0 28px 68px rgba(0,0,0,0.22); backdrop-filter: blur(14px); overflow:hidden; position:relative;">
                    <div style="position:absolute; inset:0; background: linear-gradient(180deg, rgba(255,255,255,0.04), transparent 60%); pointer-events:none;"></div>
                    <div style="position:relative; z-index:1; display:flex; flex-direction:column; gap:1.5rem;">
                        <div style="display:flex; align-items:center; gap:0.9rem;">
                            <div style="width:56px; height:56px; border-radius:18px; background: rgba(59,130,246,0.18); display:flex; align-items:center; justify-content:center; color:#a5f3fc; font-size:1.3rem;">
                                <span class="fa fa-file-alt"></span>
                            </div>
                            <div>
                                <p style="margin:0; color:#bae6fd; text-transform:uppercase; letter-spacing:0.18em; font-size:0.82rem;">Trámites en línea</p>
                                <h2 style="margin:0.5rem 0 0; font-size:2.25rem; line-height:1.05; color:#ffffff;">Consulta trámites y recursos</h2>
                            </div>
                        </div>
                        <p style="margin:0; color:#dbeafe; font-size:1rem; line-height:1.8;">Accede a documentos oficiales, formularios y rendiciones con un solo clic. Todo el servicio digital pensado para tu comodidad.</p>
                        <div style="display:flex; gap:1rem; flex-wrap:wrap;">
                            <a href="#" style="padding:0.95rem 1.5rem; border-radius:999px; background: #22c55e; color:#08111a; font-weight:700; text-decoration:none; box-shadow: 0 18px 36px rgba(34,197,94,0.24);">Ver trámites</a>
                            <span style="display:inline-flex; align-items:center; gap:0.5rem; color:#dbeafe; font-size:0.95rem;"><span style="width:10px; height:10px; border-radius:999px; background:#22c55e;"></span>Actualizado recientemente</span>
                        </div>
                        <div style="display:grid; grid-template-columns:1fr 1fr; gap:1rem;">
                            <div style="padding:1.1rem 1.2rem; border-radius:24px; background: rgba(255,255,255,0.06); border:1px solid rgba(255,255,255,0.12);">
                                <p style="margin:0 0 0.6rem; color:#a5b4fc; font-size:0.78rem; text-transform:uppercase; letter-spacing:0.14em;">Atención</p>
                                <h3 style="margin:0; color:#ffffff; font-size:1.2rem;">100% digital</h3>
                            </div>
                            <div style="padding:1.1rem 1.2rem; border-radius:24px; background: rgba(255,255,255,0.06); border:1px solid rgba(255,255,255,0.12);">
                                <p style="margin:0 0 0.6rem; color:#a5b4fc; font-size:0.78rem; text-transform:uppercase; letter-spacing:0.14em;">Trámites</p>
                                <h3 style="margin:0; color:#ffffff; font-size:1.2rem;">Fácil y seguro</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-7">
                <div style="background:#ffffff; border-radius:36px; padding:2rem; box-shadow: 0 28px 68px rgba(2,12,27,0.12);">
                    <div style="display:flex; align-items:center; justify-content:space-between; gap:1rem; margin-bottom:1.8rem;">
                        <div>
                            <p style="margin:0; color:#0f172a; text-transform:uppercase; letter-spacing:0.18em; font-size:0.82rem;">Trámites</p>
                            <h3 style="margin:0.55rem 0 0; font-size:1.85rem; color:#0f172a; line-height:1.05;">Balcón de servicios y recursos</h3>
                        </div>
                        <span style="display:inline-flex; align-items:center; gap:0.55rem; color:#10b981; font-weight:700;">
                            <span style="width:10px; height:10px; border-radius:999px; background:#10b981;"></span>
                            En línea ahora
                        </span>
                    </div>
                    <div style="max-height:560px; overflow:auto; padding-right:0.5rem;">
                        <ul style="list-style:none; margin:0; padding:0; display:grid; gap:0.9rem;">
                            @foreach ($archivos as $ar)
                            <li style="display:flex; align-items:center; justify-content:space-between; gap:1rem; padding:1rem 1.2rem; border-radius:20px; background:#f8fafc; border:1px solid rgba(15,23,42,0.06); box-shadow: inset 0 1px 1px rgba(15,23,42,0.03);">
                                <div style="display:flex; align-items:center; gap:0.9rem;">
                                    <span style="width:38px; height:38px; display:flex; align-items:center; justify-content:center; border-radius:14px; background: rgba(16,185,129,0.12); color:#059669; font-size:1rem;"><i class="fas fa-file-pdf"></i></span>
                                    <span style="font-size:0.95rem; color:#0f172a; font-weight:600;">{{ Str::limit($ar->nombre, 42, '...') }}</span>
                                </div>
                                <a target="_blank" href="{{ Storage::url($ar->url) }}" style="display:inline-flex; align-items:center; gap:0.4rem; color:#0f172a; font-weight:700; text-decoration:none;">
                                    Abrir <i class="fas fa-external-link-alt" style="font-size:0.75rem;"></i>
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Services One End-->

<!--quejas sugerencias-->
@include('sections.quejassugerencias',['autoridad'=>$autoridad])
<!--quejas sugerencias End-->



<!--News One Start-->
<section class="news-one">
    <div class="container">
        <div class="section-title text-center">
            <div class="section-title__icon">
                <span class="fa fa-star"></span>
            </div>
            <span class="section-title__tagline">ÚLTIMAS NOTICIAS</span>
            <h2 class="section-title__title">Últimas noticias
                <br> de la semana</h2>
        </div>
        <style>
            /* Equal height and image ratio for news cards */
            .news-one__single{ display:flex; flex-direction:column; height:100%; border-radius:12px; overflow:hidden; background:#fff; transition: transform .18s ease, box-shadow .18s ease; }
            .news-one__single:hover{ transform: translateY(-8px); box-shadow: 0 20px 40px rgba(2,24,58,0.08); }
            .news-one__img img{ width:100%; height:260px; object-fit:cover; display:block; }
            .news-one .row > [class*="col-"]{ display:flex; }
            .news-one__content{ display:flex; flex-direction:column; padding:20px; }
            .news-one__btn{ margin-top:auto; }
        </style>

        <div class="row">
            @foreach ($noticias as $no)
            <div class="col-xl-4 col-lg-4">
                <div class="news-one__single">
                    <div class="news-one__img-box">
                        <div class="news-one__img">
                            <a href="{{ Storage::url($no->foto) }}" class="news-lightbox">
                                <img src="{{ Storage::url($no->foto) }}" alt="">
                            </a>
                        </div>
                        <div class="news-one__date">
                            <p>{{ $no->created_at->format('Y-m-d') }}</p>
                        </div>
                    </div>
                    <div class="news-one__content">
                        <div class="news-one__user-and-meta">
                            <div class="news-one__user">
                                <div class="news-one__user-img">
                                    
                                </div>
                                <div class="news-one__user-text">
                                    <p>Publicado por</p>
                                </div>
                            </div>
                            <div class="news-one__meta">
                                <div class="icon">
                                    <span class="fas fa-user"></span>
                                </div>
                                <div class="text">
                                    <p>{{ $no->user->name }}</p>
                                </div>
                            </div>
                        </div>
                        <h3 class="news-one__title"><a href="{{ route('noticiasDetalle',$no->id) }}">
                            {{ Str::limit($no->titulo, 45, '...') }}
                        </a>
                        </h3>
                        <div class="news-one__btn">
                            <a href="{{ route('noticiasDetalle',$no->id) }}">Leer más<i class="icon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>
            </div>    
            @endforeach
            
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            if (window.jQuery && jQuery.magnificPopup) {
                jQuery('.news-lightbox').magnificPopup({ type: 'image', gallery: { enabled: true } });
            }
        });
    </script>
    </div>
</section>
<!--News One End-->
@endsection