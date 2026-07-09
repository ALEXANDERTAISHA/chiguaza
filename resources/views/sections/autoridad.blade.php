<section class="about-one" style="background: linear-gradient(135deg, #07101d 0%, #0f1b2d 45%, #0b1722 100%); padding: 90px 0; position: relative; overflow: hidden;">
    <div style="position:absolute; inset:0; background-image: radial-gradient(circle at 20% 20%, rgba(59,130,246,0.14), transparent 18%), radial-gradient(circle at 80% 10%, rgba(16,185,129,0.1), transparent 20%), radial-gradient(circle at 50% 80%, rgba(15,23,42,0.8), transparent 35%); pointer-events:none;"></div>
    <div class="container" style="position:relative; z-index:1;">
        <div class="row gx-5 align-items-center">
            <div class="col-xl-6">
                <div style="background: rgba(255,255,255,0.06); border: 1px solid rgba(255,255,255,0.08); box-shadow: 0 30px 80px rgba(0,0,0,0.25); border-radius: 36px; overflow:hidden; padding: 2rem; position:relative; backdrop-filter: blur(16px);">
                    <div style="display:flex; justify-content:space-between; align-items:center; gap:1rem; margin-bottom:1.5rem;">
                        <div>
                            <span style="display:inline-block; font-size:0.85rem; letter-spacing:0.24em; text-transform:uppercase; color:#7dd3fc;">Gobierno Parroquial Chiguaza</span>
                            <h2 style="margin:0.6rem 0 0; font-size:3rem; color:#ffffff; line-height:1.02; font-weight:800;">{{ $autoridad->frase }}</h2>
                        </div>
                        <div style="width:68px; height:68px; border-radius:22px; background: rgba(37,99,235,0.20); display:flex; align-items:center; justify-content:center;">
                            <span class="fa fa-star" style="color:#60a5fa; font-size:1.45rem;"></span>
                        </div>
                    </div>

                    <div style="display:grid; gap:1rem;">
                        <div style="position:relative; border-radius:32px; overflow:hidden; height:420px;">
                            <img src="{{ Storage::url($autoridad->foto) }}" alt="{{ $autoridad->nombres_completos }}" style="width:100%; height:100%; object-fit:cover; display:block;" />
                            <div style="position:absolute; inset:0; background: linear-gradient(180deg, rgba(15,23,42,0.15), rgba(2,12,27,0.75));"></div>
                            <div style="position:absolute; left:1.5rem; bottom:1.5rem; right:1.5rem; display:flex; justify-content:space-between; align-items:flex-end; gap:1rem;">
                                <div style="background: rgba(15,23,42,0.85); padding:1rem 1.2rem; border-radius:24px; border:1px solid rgba(255,255,255,0.12); backdrop-filter: blur(10px);">
                                    <p style="margin:0; font-size:0.78rem; color:#94a3b8; letter-spacing:0.14em; text-transform:uppercase;">Experiencia</p>
                                    <strong style="display:block; margin-top:0.35rem; font-size:1.55rem; color:#ffffff;">{{ $autoridad->anio_experiencia }} años</strong>
                                </div>
                                <a href="{{ $autoridad->url_video }}" class="video-popup" style="display:inline-flex; align-items:center; gap:0.85rem; padding:0.95rem 1.3rem; border-radius:999px; background: linear-gradient(90deg, #22c55e 0%, #0ea5e9 100%); color:#08111a; font-weight:800; text-decoration:none; box-shadow: 0 20px 40px rgba(34,197,94,0.28);">
                                    <span class="fa fa-play" style="font-size:1rem;"></span>
                                    Ver video
                                </a>
                            </div>
                        </div>

                        <div style="display:grid; grid-template-columns:repeat(2, minmax(0, 1fr)); gap:1rem;">
                            <div style="padding:1.15rem 1rem; border-radius:26px; background: rgba(255,255,255,0.05); border:1px solid rgba(255,255,255,0.08);">
                                <p style="margin:0 0 0.5rem; color:#94a3b8; font-size:0.78rem; text-transform:uppercase; letter-spacing:0.14em;">Presidente</p>
                                <h4 style="margin:0; color:#ffffff; font-size:1.05rem;">{{ $autoridad->nombres_completos }}</h4>
                            </div>
                            <div style="padding:1.15rem 1rem; border-radius:26px; background: rgba(255,255,255,0.05); border:1px solid rgba(255,255,255,0.08);">
                                <p style="margin:0 0 0.5rem; color:#94a3b8; font-size:0.78rem; text-transform:uppercase; letter-spacing:0.14em;">Rol</p>
                                <h4 style="margin:0; color:#ffffff; font-size:1.05rem;">{{ $autoridad->rol }}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div style="position:relative; z-index:1;">
                    <div style="display:flex; align-items:center; justify-content:space-between; gap:1rem; margin-bottom:1.4rem;">
                        <div>
                            <span style="display:inline-block; font-size:0.85rem; letter-spacing:0.24em; text-transform:uppercase; color:#38bdf8;">Bienvenido a {{ config('app.name') }}</span>
                            <h2 style="margin:0.75rem 0 0; color:#ffffff; font-size:2.25rem; line-height:1.1; font-weight:800;">Gobernamos con obras, servicio y transparencia.</h2>
                        </div>
                        <div style="width:56px; height:56px; border-radius:18px; background: rgba(37,99,235,0.18); display:flex; align-items:center; justify-content:center;">
                            <span class="fa fa-arrow-up-right" style="color:#60a5fa; font-size:1.25rem;"></span>
                        </div>
                    </div>
                    <p style="margin:0 0 2rem; color:#cbd5e1; font-size:1rem; line-height:1.85; max-width:660px;">Un gobierno que avanza con fuerza, transparencia y servicios pensados para el desarrollo de toda la comunidad.</p>

                    <div style="background: rgba(10,19,34,0.94); border:1px solid rgba(96,165,250,0.16); border-radius:34px; padding:1.8rem; margin-bottom:1.85rem;">
                        <div style="display:flex; justify-content:space-between; align-items:center; gap:1rem; margin-bottom:1.4rem;">
                            <div>
                                <span style="font-size:0.80rem; color:#94a3b8; text-transform:uppercase; letter-spacing:0.18em;">Gestión</span>
                                <h3 style="margin:0.45rem 0 0; color:#ffffff; font-size:2rem;">{{ $autoridad->anio_experiencia }} años</h3>
                            </div>
                            <span style="background: linear-gradient(90deg, #22c55e 0%, #3b82f6 100%); color:#ffffff; border-radius:999px; padding:0.8rem 1rem; font-weight:700;">100% impacto</span>
                        </div>
                        <div style="height:16px; border-radius:999px; background: rgba(255,255,255,0.1); overflow:hidden;">
                            <div style="width:100%; height:100%; background: linear-gradient(90deg, #22c55e 0%, #60a5fa 100%);"></div>
                        </div>
                    </div>

                    <div style="display:grid; gap:1rem;">
                        @foreach (['logro_1','logro_2','logro_3','logro_4'] as $logro)
                            @if ($autoridad->{$logro})
                                <div style="display:flex; gap:1rem; align-items:flex-start; padding:1rem 1.15rem; border-radius:24px; background: rgba(255,255,255,0.04); border:1px solid rgba(255,255,255,0.08);">
                                    <div style="width:46px; height:46px; border-radius:16px; background: rgba(59,130,246,0.16); color:#60a5fa; display:flex; align-items:center; justify-content:center; font-size:1.1rem;"><span class="fa fa-check"></span></div>
                                    <p style="margin:0; color:#e2e8f0; line-height:1.7;">{{ $autoridad->{$logro} }}</p>
                                </div>
                            @endif
                        @endforeach
                    </div>

                    <div style="display:flex; align-items:center; justify-content:space-between; gap:1rem; margin-top:2rem; padding:1.35rem 1.5rem; background: rgba(255,255,255,0.05); border-radius:30px; border:1px solid rgba(255,255,255,0.08);">
                        <div>
                            <span style="display:block; color:#94a3b8; font-size:0.78rem; letter-spacing:0.18em; text-transform:uppercase;">Liderazgo</span>
                            <h4 style="margin:0.55rem 0 0; color:#ffffff; font-size:1.15rem;">{{ $autoridad->nombres_completos }}</h4>
                            <p style="margin:0.35rem 0 0; color:#94a3b8;">{{ $autoridad->rol }}</p>
                        </div>
                        <div style="width:60px; height:60px; border-radius:22px; background: linear-gradient(135deg, rgba(59,130,246,0.22), rgba(16,185,129,0.18)); display:flex; align-items:center; justify-content:center;">
                            <span class="fa fa-arrow-up" style="color:#d9f99d; font-size:1.35rem;"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>