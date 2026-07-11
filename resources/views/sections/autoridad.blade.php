<section class="authority-premium-section">
    <style>
        .authority-premium-section {
            position: relative;
            padding: 90px 0;
            background: linear-gradient(180deg, #f7f9fc 0%, #ffffff 100%);
            overflow: hidden;
        }

        .authority-premium-section::before,
        .authority-premium-section::after {
            content: "";
            position: absolute;
            border-radius: 999px;
            pointer-events: none;
            z-index: 0;
        }

        .authority-premium-section::before {
            width: 380px;
            height: 380px;
            background: radial-gradient(circle, rgba(59, 130, 246, .15) 0%, rgba(59, 130, 246, 0) 70%);
            top: -120px;
            left: -80px;
        }

        .authority-premium-section::after {
            width: 340px;
            height: 340px;
            background: radial-gradient(circle, rgba(16, 185, 129, .14) 0%, rgba(16, 185, 129, 0) 70%);
            right: -120px;
            bottom: -100px;
        }

        .authority-premium-grid {
            position: relative;
            z-index: 1;
            display: grid;
            grid-template-columns: minmax(320px, 0.95fr) minmax(360px, 1.05fr);
            gap: 2.4rem;
            align-items: center;
        }

        .authority-premium-media {
            position: relative;
            border-radius: 24px;
            background: #ffffff;
            border: 1px solid rgba(15, 23, 42, .08);
            box-shadow: 0 30px 70px rgba(15, 23, 42, .12);
            padding: 16px;
        }

        .authority-premium-main-photo {
            border-radius: 18px;
            overflow: hidden;
            min-height: 520px;
            background: #eef2ff;
        }

        .authority-premium-main-photo img {
            width: 100%;
            height: 100%;
            min-height: 520px;
            object-fit: cover;
            display: block;
        }

        .authority-premium-secondary {
            position: absolute;
            right: 12px;
            top: 26px;
            width: 38%;
            border-radius: 16px;
            overflow: hidden;
            border: 4px solid #ffffff;
            box-shadow: 0 16px 32px rgba(15, 23, 42, .18);
            background: #e5e7eb;
        }

        .authority-premium-secondary img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
            min-height: 170px;
        }

        .authority-premium-video {
            position: absolute;
            right: 26px;
            bottom: 122px;
        }

        .authority-premium-video a {
            width: 66px;
            height: 66px;
            border-radius: 999px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #2563eb 0%, #10b981 100%);
            color: #ffffff;
            box-shadow: 0 18px 36px rgba(37, 99, 235, .38);
            text-decoration: none;
            font-size: 1.05rem;
        }

        .authority-premium-id {
            position: absolute;
            left: 34px;
            bottom: 26px;
            width: calc(100% - 68px);
            border-radius: 18px;
            padding: 1rem 1.1rem;
            background: rgba(15, 23, 42, .88);
            color: #f8fafc;
            border: 1px solid rgba(255, 255, 255, .12);
            backdrop-filter: blur(10px);
            display: flex;
            gap: .8rem;
            align-items: center;
        }

        .authority-premium-id-icon {
            width: 44px;
            height: 44px;
            border-radius: 12px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background: rgba(16, 185, 129, .18);
            color: #34d399;
            font-size: 1.1rem;
            flex-shrink: 0;
        }

        .authority-premium-id-role {
            margin: 0;
            font-size: .78rem;
            letter-spacing: .12em;
            text-transform: uppercase;
            color: #cbd5e1;
        }

        .authority-premium-id-name {
            margin: .2rem 0 0;
            font-size: 1.15rem;
            font-weight: 700;
            color: #ffffff;
            line-height: 1.2;
        }

        .authority-premium-content {
            padding: .5rem .3rem;
        }

        .authority-premium-kicker {
            display: inline-flex;
            align-items: center;
            gap: .55rem;
            margin-bottom: .9rem;
            color: #2563eb;
            font-size: .82rem;
            font-weight: 700;
            letter-spacing: .14em;
            text-transform: uppercase;
        }

        .authority-premium-kicker .dot {
            width: 8px;
            height: 8px;
            border-radius: 999px;
            background: #10b981;
        }

        .authority-premium-title {
            margin: 0 0 1.35rem;
            font-size: clamp(2rem, 4.1vw, 3.2rem);
            line-height: 1.12;
            letter-spacing: -0.02em;
            color: #111827;
            font-weight: 800;
        }

        .authority-premium-experience {
            margin-bottom: 1.4rem;
        }

        .authority-premium-exp-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 1rem;
            margin-bottom: .55rem;
            font-weight: 700;
            color: #0f172a;
        }

        .authority-premium-progress {
            height: 14px;
            border-radius: 999px;
            background: #dbeafe;
            overflow: hidden;
        }

        .authority-premium-progress > span {
            display: block;
            height: 100%;
            width: 100%;
            background: linear-gradient(90deg, #22c55e 0%, #10b981 100%);
        }

        .authority-premium-points {
            list-style: none;
            margin: 0;
            padding: 0;
            border-top: 1px solid #e5e7eb;
            border-bottom: 1px solid #e5e7eb;
        }

        .authority-premium-points li {
            display: flex;
            gap: .7rem;
            align-items: flex-start;
            padding: .85rem 0;
            color: #1f2937;
            font-size: 1.05rem;
            font-weight: 600;
            line-height: 1.4;
        }

        .authority-premium-points li + li {
            border-top: 1px dashed #e5e7eb;
        }

        .authority-premium-points i {
            color: #16a34a;
            margin-top: .18rem;
            flex-shrink: 0;
        }

        .authority-premium-footer {
            margin-top: 1.2rem;
        }

        .authority-premium-footer h3 {
            margin: 0;
            font-size: 2rem;
            color: #111827;
            font-weight: 800;
        }

        .authority-premium-footer p {
            margin: .35rem 0 0;
            color: #6b7280;
            font-size: 1.1rem;
        }

        @media (max-width: 1199.98px) {
            .authority-premium-grid {
                grid-template-columns: 1fr;
                gap: 1.8rem;
            }

            .authority-premium-main-photo,
            .authority-premium-main-photo img {
                min-height: 430px;
            }
        }

        @media (max-width: 767.98px) {
            .authority-premium-section {
                padding: 64px 0;
            }

            .authority-premium-main-photo,
            .authority-premium-main-photo img {
                min-height: 350px;
            }

            .authority-premium-secondary {
                width: 42%;
                top: 16px;
                right: 8px;
            }

            .authority-premium-video {
                right: 18px;
                bottom: 104px;
            }

            .authority-premium-id {
                left: 20px;
                width: calc(100% - 40px);
                bottom: 20px;
            }

            .authority-premium-footer h3 {
                font-size: 1.7rem;
            }
        }
    </style>

    <div class="container">
        <div class="authority-premium-grid">
            <div class="authority-premium-media">
                <div class="authority-premium-main-photo">
                    <a href="{{ Storage::url($autoridad->foto) }}" class="img-popup" data-group="101" aria-label="Ver imagen de {{ $autoridad->nombres_completos }}">
                        <img src="{{ Storage::url($autoridad->foto) }}" alt="{{ $autoridad->nombres_completos }}">
                    </a>
                </div>

                @if (!empty($autoridad->foto2))
                    <div class="authority-premium-secondary">
                        <a href="{{ Storage::url($autoridad->foto2) }}" class="img-popup" data-group="101" aria-label="Ver imagen secundaria de {{ $autoridad->nombres_completos }}">
                            <img src="{{ Storage::url($autoridad->foto2) }}" alt="{{ $autoridad->nombres_completos }}">
                        </a>
                    </div>
                @endif

                @if (!empty($autoridad->url_video))
                    <div class="authority-premium-video">
                        <a href="{{ $autoridad->url_video }}" class="video-popup" aria-label="Ver video institucional">
                            <i class="fa fa-play"></i>
                        </a>
                    </div>
                @endif

                <div class="authority-premium-id">
                    <span class="authority-premium-id-icon"><i class="icon-government-1"></i></span>
                    <div>
                        <p class="authority-premium-id-role">{{ $autoridad->rol }}</p>
                        <p class="authority-premium-id-name">{{ $autoridad->nombres_completos }}</p>
                    </div>
                </div>
            </div>

            <div class="authority-premium-content">
                <span class="authority-premium-kicker"><span class="dot"></span>Bienvenido a {{ config('app.name') }}</span>
                <h2 class="authority-premium-title">{{ $autoridad->frase }}</h2>

                <div class="authority-premium-experience">
                    <div class="authority-premium-exp-header">
                        <span>{{ $autoridad->anio_experiencia }} años de experiencia</span>
                        <span>{{ $autoridad->anio_experiencia }}</span>
                    </div>
                    <div class="authority-premium-progress">
                        <span></span>
                    </div>
                </div>

                <ul class="authority-premium-points">
                    @if ($autoridad->logro_1)
                        <li><i class="fa fa-arrow-circle-right"></i><span>{{ $autoridad->logro_1 }}</span></li>
                    @endif
                    @if ($autoridad->logro_2)
                        <li><i class="fa fa-arrow-circle-right"></i><span>{{ $autoridad->logro_2 }}</span></li>
                    @endif
                    @if ($autoridad->logro_3)
                        <li><i class="fa fa-arrow-circle-right"></i><span>{{ $autoridad->logro_3 }}</span></li>
                    @endif
                    @if ($autoridad->logro_4)
                        <li><i class="fa fa-arrow-circle-right"></i><span>{{ $autoridad->logro_4 }}</span></li>
                    @endif
                </ul>

                <div class="authority-premium-footer">
                    <h3>{{ $autoridad->nombres_completos }}</h3>
                    <p>{{ $autoridad->rol }}</p>
                </div>
            </div>
        </div>
    </div>
</section>