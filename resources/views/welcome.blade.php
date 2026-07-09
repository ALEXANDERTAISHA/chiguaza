@extends('layouts.cliente')

@section('content')

{{-- slider --}}
@include('sections.slider',['sliders'=>$sliders])


{{-- departamento --}}
@include('sections.departament')


{{-- autoridad --}}
@include('sections.autoridad',['autoridad'=>$autoridad])



<!--Services One Start-->
<section class="services-one" style="background: linear-gradient(135deg, #0f3c70 0%, #071827 100%); padding: 90px 0 60px; position: relative; color: #f8fafc;">
    <div style="position:absolute; inset:0; background-image: radial-gradient(circle at 12% 20%, rgba(255,255,255,0.1), transparent 16%), radial-gradient(circle at 88% 8%, rgba(16,185,129,0.14), transparent 20%); pointer-events:none;"></div>
    <div class="container" style="position:relative; z-index:1;">
        <div style="display:grid; grid-template-columns: 1.1fr 1fr; gap:2rem; align-items:center;">
            <div style="position:relative;">
                <div style="border-radius:36px; overflow:hidden; background: rgba(255,255,255,0.05); border:1px solid rgba(255,255,255,0.12); box-shadow: 0 30px 70px rgba(0,0,0,0.24);">
                    <img src="{{ asset('assets/images/resources/services-one-img-1.png') }}" alt="consulta trámites" style="width:100%; display:block; object-fit:cover; min-height:560px;">
                </div>
                <div style="position:absolute; left:2rem; bottom:2rem; background: rgba(2,42,82,0.9); border:1px solid rgba(255,255,255,0.12); border-radius:28px; padding:1.4rem 1.6rem; width:calc(100% - 4rem); backdrop-filter: blur(14px);">
                    <h2 style="margin:0 0 0.6rem; font-size:2rem; color:#ffffff; font-weight:800;">Consulta trámites</h2>
                    <p style="margin:0; color:#b8c7e0; line-height:1.8;">Por un gobierno transparente, moderno y fácil de usar desde cualquier dispositivo.</p>
                </div>
            </div>
            <div style="padding:2rem 2.4rem; border-radius:36px; background: rgba(255,255,255,0.95); box-shadow: 0 30px 70px rgba(0,0,0,0.12);">
                <div style="display:flex; align-items:flex-start; gap:1rem; margin-bottom:1.8rem;">
                    <div style="width:64px; height:64px; border-radius:20px; background: linear-gradient(135deg, #10b981 0%, #0ea5e9 100%); display:flex; align-items:center; justify-content:center; color:#ffffff; font-size:1.45rem;">
                        <span class="fa fa-file-alt"></span>
                    </div>
                    <div>
                        <p style="margin:0 0 0.9rem; color:#0f172a; text-transform:uppercase; letter-spacing:0.2em; font-size:0.85rem; font-weight:700;">Trámites y recursos</p>
                        <h3 style="margin:0; font-size:2.25rem; line-height:1.05; color:#0f172a; font-weight:800;">Balcón de servicios en línea ordenado y profesional</h3>
                    </div>
                </div>
                <p style="margin:0 0 1.8rem; color:#475569; font-size:1.02rem; line-height:1.85;">Accede a los documentos oficiales, plantillas y reportes con una experiencia limpia, segura y diseñada para encontrar lo que necesitas rápidamente.</p>
                <div style="display:flex; flex-wrap:wrap; gap:1rem; align-items:center; margin-bottom:2rem;">
                    <a href="#" style="padding:1rem 1.6rem; border-radius:999px; background: linear-gradient(90deg, #22c55e 0%, #0ea5e9 100%); color:#08111a; font-weight:800; text-decoration:none; box-shadow: 0 22px 42px rgba(34,197,94,0.24);">Ver trámites</a>
                    <span style="display:inline-flex; align-items:center; gap:0.55rem; color:#64748b; font-size:0.95rem;"><span style="width:10px; height:10px; border-radius:999px; background:#10b981;"></span>Actualizado recientemente</span>
                </div>
                <div style="display:grid; grid-template-columns: repeat(3, minmax(0, 1fr)); gap:1rem;">
                    @foreach ($archivos as $ar)
                    <a target="_blank" href="{{ Storage::url($ar->url) }}" style="display:flex; align-items:center; gap:0.95rem; padding:1.1rem 1.25rem; border-radius:22px; background:#f8fafc; border:1px solid rgba(15,23,42,0.08); text-decoration:none; color:#0f172a; transition: transform .18s ease, box-shadow .18s ease;">
                        <span style="flex-shrink:0; width:44px; height:44px; display:flex; align-items:center; justify-content:center; border-radius:16px; background:rgba(16,185,129,0.14); color:#047857; font-size:1rem;"><i class="fas fa-file-pdf"></i></span>
                        <span style="display:block; font-size:0.95rem; font-weight:700; line-height:1.35; overflow:hidden; text-overflow:ellipsis; white-space:nowrap;">{{ Str::limit($ar->nombre, 58, '...') }}</span>
                    </a>
                    @endforeach
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