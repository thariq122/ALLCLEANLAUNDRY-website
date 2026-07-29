<!DOCTYPE html>

<html class="scroll-smooth" lang="id">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>All Clean Laundry - Express &amp; Professional Laundry Service</title>
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&amp;family=Fredoka:wght@400;500;600;700&amp;family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "primary-fixed-dim": "#62d6ed",
                        "secondary-fixed-dim": "#3de273",
                        "on-background": "#171c1e",
                        "text-secondary": "#5A7A80",
                        "on-secondary-container": "#007232",
                        "tertiary-fixed-dim": "#d0bcff",
                        "secondary-fixed": "#66ff8e",
                        "surface": "#FFFFFF",
                        "surface-container-lowest": "#ffffff",
                        "surface-container-low": "#f0f4f6",
                        "inverse-primary": "#62d6ed",
                        "outline-variant": "#bcc9cc",
                        "surface-dim": "#d6dbdc",
                        "on-tertiary-container": "#370087",
                        "primary": "#006877",
                        "secondary-container": "#5dfd8a",
                        "surface-container": "#eaeff0",
                        "on-tertiary-fixed": "#23005c",
                        "inverse-surface": "#2c3133",
                        "on-secondary": "#ffffff",
                        "on-tertiary-fixed-variant": "#5516be",
                        "background": "#F2FBFB",
                        "error": "#ba1a1a",
                        "surface-container-high": "#e4e9ea",
                        "surface-variant": "#dee3e5",
                        "primary-fixed": "#a4eeff",
                        "tertiary-fixed": "#e9ddff",
                        "on-surface-variant": "#3d494c",
                        "on-secondary-fixed-variant": "#005322",
                        "on-error": "#ffffff",
                        "on-secondary-fixed": "#002109",
                        "on-error-container": "#93000a",
                        "primary-container": "#17a2b8",
                        "on-primary-fixed": "#001f25",
                        "inverse-on-surface": "#edf1f3",
                        "primary-hover": "#138496",
                        "tertiary": "#6d3bd7",
                        "surface-bright": "#f5fafc",
                        "on-primary-container": "#00323a",
                        "outline": "#6d797c",
                        "on-primary": "#ffffff",
                        "tertiary-container": "#a27cff",
                        "text-primary": "#11525D",
                        "on-surface": "#171c1e",
                        "surface-tint": "#006877",
                        "on-primary-fixed-variant": "#004e5a",
                        "secondary": "#006d2f",
                        "error-container": "#ffdad6",
                        "surface-container-highest": "#dee3e5",
                        "on-tertiary": "#ffffff",
                        "border": "#E0F2F1"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "1.5rem",
                        "full": "9999px"
                    },
                    "spacing": {
                        "3xl": "96px",
                        "xl": "32px",
                        "md": "16px",
                        "2xl": "64px",
                        "lg": "24px",
                        "xs": "4px",
                        "margin-mobile": "16px",
                        "gutter": "24px",
                        "sm": "8px",
                        "margin-desktop": "48px"
                    },
                    "fontFamily": {
                        "label-accent": ["'Plus Jakarta Sans', sans-serif"],
                        "body-md": ["'Plus Jakarta Sans', 'Inter', sans-serif"],
                        "h2": ["'Fredoka', 'Poppins', sans-serif"],
                        "body-sm": ["'Plus Jakarta Sans'"],
                        "headline-xl-mobile": ["'Plus Jakarta Sans'"],
                        "headline-lg": ["'Plus Jakarta Sans'"],
                        "headline-xl": ["'Plus Jakarta Sans'"],
                        "h1": ["'Fredoka', 'Poppins', sans-serif"]
                    },
                    "fontSize": {
                        "label-accent": ["0.75rem", { "lineHeight": "1.0", "letterSpacing": "0.05em", "fontWeight": "600" }],
                        "body-md": ["0.938rem", { "lineHeight": "1.6", "fontWeight": "400" }],
                        "h2": ["2.0rem", { "lineHeight": "1.2", "fontWeight": "700" }],
                        "body-sm": ["0.875rem", { "lineHeight": "1.5", "fontWeight": "400" }],
                        "headline-xl-mobile": ["2.25rem", { "lineHeight": "1.2", "fontWeight": "700" }],
                        "headline-lg": ["2.0rem", { "lineHeight": "1.2", "fontWeight": "700" }],
                        "headline-xl": ["2.75rem", { "lineHeight": "1.15", "fontWeight": "700" }],
                        "h1": ["2.75rem", { "lineHeight": "1.15", "fontWeight": "700" }]
                    }
                },
            },
        }
    </script>
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }

        .glass-card {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border: 1px solid rgba(224, 242, 241, 0.5);
        }

        .bg-pattern {
            background-image: radial-gradient(#17a2b822 1px, transparent 1px);
            background-size: 32px 32px;
        }

        @keyframes float {
            0% {
                transform: translateY(0px) rotate(0deg);
            }

            50% {
                transform: translateY(-15px) rotate(2deg);
            }

            100% {
                transform: translateY(0px) rotate(0deg);
            }
        }

        .animate-float {
            animation: float 6s ease-in-out infinite;
        }

        .korean-label {
            background: #E0F2F1;
            color: #006877;
            padding: 4px 12px;
            border-radius: 99px;
            font-size: 0.7rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.1em;
        }

        /* Scroll reveal styles */
        .reveal {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.8s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .reveal.active {
            opacity: 1;
            transform: translateY(0);
        }

        /* Shimmer effect */
        .shimmer {
            position: relative;
            overflow: hidden;
        }

        .shimmer::after {
            content: "";
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            transform: translateX(-100%);
            background-image: linear-gradient(90deg,
                    rgba(255, 255, 255, 0) 0,
                    rgba(255, 255, 255, 0.2) 20%,
                    rgba(255, 255, 255, 0.5) 60%,
                    rgba(255, 255, 255, 0));
            animation: shimmer 3s infinite;
        }

        @keyframes shimmer {
            100% {
                transform: translateX(100%);
            }
        }

        /* Button hover enhancement */
        .btn-hover-effect {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .btn-hover-effect:hover {
            transform: scale(1.05);
            box-shadow: 0 0 20px rgba(23, 162, 184, 0.4);
        }

        .nav-link {
            position: relative;
            padding-bottom: 6px;
        }

        .nav-link::after {
            content: "";
            position: absolute;
            left: 0;
            bottom: 0;
            width: 100%;
            height: 2px;
            background: #006877;
            transform: scaleX(0);
            transform-origin: left;
            transition: transform 0.25s ease;
        }

        .nav-link:hover::after,
        .nav-link.active::after {
            transform: scaleX(1);
        }

        /* Subtle pulse for floating order button */
        @keyframes subtle-pulse {
            0% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.05);
            }

            100% {
                transform: scale(1);
            }
        }

        .animate-subtle-pulse {
            animation: subtle-pulse 3s infinite ease-in-out;
        }
    </style>
</head>

<body class="bg-background text-on-background font-body-md selection:bg-primary-container selection:text-white">
    <nav
        class="fixed top-0 w-full z-50 bg-surface/80 dark:bg-surface-dim/80 backdrop-blur-md border-b border-border shadow-sm">
        <div class="flex justify-between items-center px-margin-mobile md:px-margin-desktop h-20 max-w-7xl mx-auto">
            <div class="flex items-center gap-md">
                <img class="h-12 w-12 rounded-xl object-contain shadow-sm" src="{{ asset('images/logo.png') }}"
                    alt="All Clean Laundry Logo" />
                <div class="flex flex-col">
                    <span class="font-h2 text-h2 text-primary leading-tight">ALL CLEAN LAUNDRY</span>
                    <span class="text-primary-container italic text-sm font-medium">Laundry Express</span>
                </div>
            </div>
            <div class="hidden md:flex items-center gap-lg">
                <a class="nav-link active text-primary font-bold font-body-md" href="#home"
                    data-nav-link="home">Beranda</a>
                <a class="nav-link text-on-surface-variant hover:text-primary transition-colors font-body-md"
                    href="#about" data-nav-link="about">Tentang Kami</a>
                <a class="nav-link text-on-surface-variant hover:text-primary transition-colors font-body-md"
                    href="#services" data-nav-link="services">Layanan &amp; Harga</a>
                <a class="nav-link text-on-surface-variant hover:text-primary transition-colors font-body-md"
                    href="#tnc" data-nav-link="tnc">Syarat &amp; Ketentuan</a>
                <a class="nav-link text-on-surface-variant hover:text-primary transition-colors font-body-md"
                    href="#location" data-nav-link="location">Lokasi</a>
                <a class="ml-4 px-lg py-md bg-primary-container text-white rounded-full font-bold hover:bg-primary-hover transition-all scale-95 active:scale-90 btn-hover-effect"
                    href="{{ url('/login') }}">
                    Area Kasir
                </a>
            </div>
            <button class="md:hidden text-primary">
                <span class="material-symbols-outlined text-3xl">menu</span>
            </button>
        </div>
    </nav>

    <section
        class="relative overflow-hidden min-h-[921px] flex items-center px-margin-mobile md:px-margin-desktop bg-pattern"
        id="home">
        <div class="absolute top-20 right-10 w-64 h-64 bg-primary-fixed/20 rounded-full blur-3xl animate-pulse"></div>
        <div
            class="absolute bottom-10 left-10 w-96 h-96 bg-secondary-fixed/10 rounded-full blur-3xl animate-pulse delay-1000">
        </div>

        <div class="max-w-7xl mx-auto w-full grid grid-cols-1 lg:grid-cols-2 gap-2xl items-center relative z-10">
            <div class="space-y-lg reveal">
                <span class="korean-label">SELAMAT DATANG DI ALL CLEAN LAUNDRY</span>

                <h1 class="font-h1 text-headline-xl-mobile md:text-headline-xl text-text-primary leading-[1.1]">
                    Cek Status Cucian Anda <br />
                    <span class="text-primary-container">Secara Real-Time</span>
                </h1>

                <p class="text-text-secondary text-lg max-w-lg">
                    Gak perlu repot bolak-balik ke outlet. Masukkan nomor nota Anda dan pantau proses laundry mulai dari
                    pencucian hingga siap diantar.
                </p>

                <div class="glass-card p-lg rounded-xl shadow-xl shadow-primary/5 max-w-md shimmer">
                    <form class="flex flex-col md:flex-row gap-md" action="{{ route('status.pelanggan') }}"
                        method="GET">

                        <div class="relative flex-1">
                            <span
                                class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-outline">receipt_long</span>
                            <input
                                class="w-full pl-12 pr-4 py-md rounded-xl border-border focus:ring-primary focus:border-primary transition-all"
                                name="nota" placeholder="Input nomor nota..." type="text"
                                value="{{ request('nota') }}" />
                        </div>

                        <button
                            class="bg-primary text-white px-lg py-md rounded-xl font-bold hover:bg-primary-hover transition-all flex items-center justify-center gap-sm btn-hover-effect"
                            type="submit">
                            Periksa Status
                        </button>
                    </form>
                </div>

                <div class="flex items-center gap-lg pt-md">
                    <div class="flex -space-x-3">
                        <img class="w-10 h-10 rounded-full border-2 border-white object-cover"
                            src="{{ asset('images/foto1.jpg') }}" alt="Pelanggan Setia 1" />
                        <img class="w-10 h-10 rounded-full border-2 border-white object-cover"
                            src="{{ asset('images/foto2.jpg') }}" alt="Pelanggan Setia 2" />
                        <img class="w-10 h-10 rounded-full border-2 border-white object-cover"
                            src="{{ asset('images/foto3.jpg') }}" alt="Pelanggan Setia 3" />
                    </div>
                    <p class="text-body-sm text-text-secondary">Dipercaya oleh <strong>2.500+</strong> Pelanggan Setia</p>
                </div>
            </div>

            <div class="relative hidden lg:block h-[600px] reveal">
                <div
                    class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-full h-full flex items-center justify-center">
                    <img class="absolute inset-0 m-auto w-[78%] h-auto object-contain animate-float"
                        data-alt="A professional high-quality photo of a modern, minimal laundry room"
                        src="{{ asset('images/background 1 - nobg.png') }}" alt="Laundry Room" />

                    <div
                        class="absolute top-10 right-0 glass-card p-md rounded-xl shadow-lg flex items-center gap-sm animate-float [animation-delay:1s]">
                        <span class="material-symbols-outlined text-primary"
                            style="font-variation-settings: 'FILL' 1;">check_circle</span>
                        <span class="font-bold text-primary">Selesai 6 Jam</span>
                    </div>

                    <div
                        class="absolute bottom-20 left-0 glass-card p-md rounded-xl shadow-lg flex items-center gap-sm animate-float [animation-delay:2s]">
                        <span class="material-symbols-outlined text-secondary"
                            style="font-variation-settings: 'FILL' 1;">eco</span>
                        <span class="font-bold text-secondary">Eco-Detergent</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-3xl px-margin-mobile md:px-margin-desktop bg-surface overflow-hidden" id="about">
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-2xl items-center">
                <div class="relative reveal">
                    <img class="rounded-xl shadow-2xl aspect-[4/3] object-cover animate-float"
                        data-alt="A modern laundry shop storefront with a clean and professional facade"
                        src="{{ asset('images/ruko-laundry3.png') }}" alt="Ruko laundry All Clean" />
                    <div
                        class="absolute -bottom-10 -right-10 bg-primary text-white p-xl rounded-xl shadow-2xl text-center min-w-[200px] animate-float [animation-delay:0.5s]">
                        <span class="block text-4xl font-bold">2+</span>
                        <span class="text-sm opacity-90">Tahun Pengalaman</span>
                    </div>
                </div>
                <div class="space-y-lg reveal">
                    <span class="korean-label">TENTANG KAMI</span>
                    <h2 class="font-h2 text-headline-lg text-text-primary">Solusi Cuci Bersih <br />Tanpa Ribet</h2>
                    <p class="text-text-secondary text-lg">
                        Kami mengutamakan kualitas dengan menggunakan deterjen ramah lingkungan yang aman untuk kulit
                        sensitif dan menjaga serat kain tetap awet. Proses pencucian dipisahkan antar pelanggan (1 mesin
                        1 pelanggan) untuk menjamin higienitas maksimal.
                    </p>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-lg pt-md">
                        <div
                            class="flex items-center gap-md p-md rounded-xl bg-background border border-border transition-transform hover:scale-105">
                            <div class="bg-primary/10 p-md rounded-full text-primary">
                                <span class="material-symbols-outlined text-3xl">verified</span>
                            </div>
                            <div>
                                <h4 class="font-bold text-text-primary">100% Garansi</h4>
                                <p class="text-sm text-text-secondary">Kepuasan Pelanggan</p>
                            </div>
                        </div>
                        <div
                            class="flex items-center gap-md p-md rounded-xl bg-background border border-border transition-transform hover:scale-105">
                            <div class="bg-secondary/10 p-md rounded-full text-secondary">
                                <span class="material-symbols-outlined text-3xl">bolt</span>
                            </div>
                            <div>
                                <h4 class="font-bold text-text-primary">6 Jam Selesai</h4>
                                <p class="text-sm text-text-secondary">Layanan Tercepat</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-3xl px-margin-mobile md:px-margin-desktop bg-background" id="services">
        <div class="max-w-7xl mx-auto text-center mb-2xl reveal">
            <span class="korean-label">LAYANAN & HARGA</span>
            <h2 class="font-h2 text-headline-lg text-text-primary mt-md">Tarif Laundry Terjangkau</h2>
        </div>
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-lg">
            @forelse(collect($daftarLayanan ?? []) as $layanan)
                @php
                    $icons = ['local_laundry_service', 'rocket_launch', 'timer', 'king_bed'];
                    $icon = $icons[$loop->index] ?? 'local_laundry_service';
                @endphp
                <div
                    class="glass-card p-xl rounded-xl border border-border flex flex-col items-center text-center group hover:shadow-2xl transition-all hover:-translate-y-2 reveal shimmer">
                    <div
                        class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center text-primary mb-lg group-hover:bg-primary group-hover:text-white transition-all">
                        <span class="material-symbols-outlined text-3xl">{{ $icon }}</span>
                    </div>
                    <h3 class="font-h2 text-xl mb-sm">{{ $layanan->nama_layanan }}</h3>
                    <p class="text-text-secondary text-sm mb-lg">
                        {{ $layanan->deskripsi ?? 'Layanan laundry profesional dengan proses cepat dan rapi.' }}</p>
                    <div class="mt-auto">
                        <p class="text-primary font-bold text-2xl">Rp
                            {{ number_format((float) $layanan->harga, 0, ',', '.') }}<span
                                class="text-sm font-normal text-text-secondary">/{{ $layanan->jenis_satuan ?? 'Kg' }}</span>
                        </p>
                        @if(($layanan->kategori ?? '') === 'Reguler' || $loop->first)
                            <span class="text-xs text-secondary font-bold">⭐ Terpopuler</span>
                        @elseif(($layanan->kategori ?? '') === 'Khusus' || $loop->last)
                            <span class="text-xs text-text-secondary italic">Mulai dari</span>
                        @endif
                    </div>
                </div>
            @empty
                <div
                    class="glass-card p-xl rounded-xl border border-border flex flex-col items-center text-center group hover:shadow-2xl transition-all hover:-translate-y-2 reveal shimmer">
                    <div
                        class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center text-primary mb-lg group-hover:bg-primary group-hover:text-white transition-all">
                        <span class="material-symbols-outlined text-3xl">local_laundry_service</span>
                    </div>
                    <h3 class="font-h2 text-xl mb-sm">Reguler</h3>
                    <p class="text-text-secondary text-sm mb-lg">Cuci kering setrika rapi dalam 2-3 hari pengerjaan.</p>
                    <div class="mt-auto">
                        <p class="text-primary font-bold text-2xl">Rp 8.000<span
                                class="text-sm font-normal text-text-secondary">/Kg</span></p>
                        <span class="text-xs text-secondary font-bold">⭐ Terpopuler</span>
                    </div>
                </div>
            @endforelse
        </div>
    </section>

    <section class="py-3xl px-margin-mobile md:px-margin-desktop bg-primary relative overflow-hidden" id="booking">
        <div class="absolute inset-0 bg-cover bg-center bg-no-repeat"
            style="background-image: url('{{ asset('images/bg-laundry.jpg') }}');"></div>
        <div class="absolute inset-0 bg-primary/80"></div>
        <div class="absolute inset-0 opacity-10 bg-pattern"></div>
        <div class="max-w-5xl mx-auto relative z-10 reveal">
            <div class="text-center mb-2xl">
                <span
                    class="bg-white/20 text-white px-md py-xs rounded-full text-xs font-bold uppercase tracking-widest">BOOKING
                    PICKUP</span>
                <h2 class="font-h2 text-headline-lg text-white mt-md">Cucian Di Rumah Sudah Numpuk?</h2>
                <p class="text-white/80 mt-md">Booking kurir kami sekarang untuk jemput cucian Anda di rumah.</p>
            </div>

            @if(session('success'))
                <div
                    class="mb-lg rounded-xl border border-white/20 bg-white/15 px-lg py-md text-white shadow-lg backdrop-blur-sm">
                    {{ session('success') }}
                </div>
            @endif

            <div class="bg-white p-2xl rounded-xl shadow-2xl">
                <form class="grid grid-cols-1 md:grid-cols-2 gap-lg" action="{{ url('/pickup') }}" method="POST">
                    @csrf
                    <div class="space-y-sm">
                        <label class="text-sm font-bold text-text-primary">Nama Lengkap</label>
                        <input class="w-full rounded-xl border-border focus:ring-primary focus:border-primary"
                            name="nama_pelanggan" placeholder="Masukkan nama Anda" type="text"
                            value="{{ old('nama_pelanggan') }}" />
                        @error('nama_pelanggan')
                            <p class="text-sm font-medium text-error">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="space-y-sm">
                        <label class="text-sm font-bold text-text-primary">WhatsApp</label>
                        <input class="w-full rounded-xl border-border focus:ring-primary focus:border-primary"
                            name="nomor_hp" placeholder="0812xxxx" type="tel" value="{{ old('nomor_hp') }}" />
                        @error('nomor_hp')
                            <p class="text-sm font-medium text-error">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="md:col-span-2 space-y-sm">
                        <label class="text-sm font-bold text-text-primary">Alamat Pickup</label>
                        <textarea class="w-full rounded-xl border-border focus:ring-primary focus:border-primary"
                            name="alamat_pickup" placeholder="Tulis alamat lengkap penjemputan"
                            rows="2">{{ old('alamat_pickup') }}</textarea>
                        @error('alamat_pickup')
                            <p class="text-sm font-medium text-error">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="space-y-sm">
                        <label class="text-sm font-bold text-text-primary">Layanan</label>
                        <select class="w-full rounded-xl border-border focus:ring-primary focus:border-primary"
                            name="layanan_id">
                            <option value="">-- Pilih Layanan --</option>
                            @forelse(collect($daftarLayanan ?? []) as $layanan)
                                <option value="{{ $layanan->id }}" @selected(old('layanan_id') == $layanan->id)>
                                    {{ $layanan->nama_layanan }} - Rp
                                    {{ number_format((float) $layanan->harga, 0, ',', '.') }}/{{ $layanan->jenis_satuan ?? 'Kg' }}
                                </option>
                            @empty
                                <option value="1" @selected(old('layanan_id') == 1)>Reguler (2-3 Hari)</option>
                                <option value="2" @selected(old('layanan_id') == 2)>Express (24 Jam)</option>
                                <option value="3" @selected(old('layanan_id') == 3)>Kilat (4 Jam)</option>
                            @endforelse
                        </select>
                        @error('layanan_id')
                            <p class="text-sm font-medium text-error">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="grid grid-cols-2 gap-md">
                        <div class="space-y-sm">
                            <label class="text-sm font-bold text-text-primary">Tanggal</label>
                            <input class="w-full rounded-xl border-border focus:ring-primary focus:border-primary"
                                name="tanggal_pickup" type="date" value="{{ old('tanggal_pickup') }}" />
                            @error('tanggal_pickup')
                                <p class="text-sm font-medium text-error">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="space-y-sm">
                            <label class="text-sm font-bold text-text-primary">Jam</label>
                            <input class="w-full rounded-xl border-border focus:ring-primary focus:border-primary"
                                name="jam_pickup" type="time" value="{{ old('jam_pickup') }}" />
                            @error('jam_pickup')
                                <p class="text-sm font-medium text-error">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="space-y-sm">
                        <label class="text-sm font-bold text-text-primary">Berat Cucian (Kg)</label>
                        <input class="w-full rounded-xl border-border focus:ring-primary focus:border-primary"
                            name="jumlah" placeholder="Contoh: 3.5" step="0.1" type="number"
                            value="{{ old('jumlah') }}" />
                        @error('jumlah')
                            <p class="text-sm font-medium text-error">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="md:col-span-2 space-y-sm">
                        <label class="text-sm font-bold text-text-primary">Catatan Tambahan</label>
                        <input class="w-full rounded-xl border-border focus:ring-primary focus:border-primary"
                            name="catatan_tambahan" placeholder="Contoh: Titip di satpam jika saya tidak ada"
                            type="text" value="{{ old('catatan_tambahan') }}" />
                        @error('catatan_tambahan')
                            <p class="text-sm font-medium text-error">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="md:col-span-2 pt-md">
                        <button
                            class="w-full bg-secondary text-white py-md rounded-full font-bold text-lg hover:brightness-110 transition-all flex items-center justify-center gap-md btn-hover-effect"
                            type="submit">
                            <span class="material-symbols-outlined">directions_bike</span>
                            Pickup Now
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <section class="py-3xl px-margin-mobile md:px-margin-desktop bg-surface" id="tnc">
        <div class="max-w-4xl mx-auto reveal">
            <div class="text-center mb-xl">
                <span class="korean-label">Syarat & Ketentuan</span>
                <h2 class="font-h2 text-headline-lg text-text-primary mt-md">Syarat &amp; Ketentuan</h2>
            </div>
            <div class="bg-background rounded-xl p-md">
                <div class="flex gap-md mb-lg">
                    <button
                        class="flex-1 py-md rounded-xl font-bold transition-all bg-primary text-white shadow-lg btn-hover-effect"
                        id="tab-btn-order" onclick="toggleTab('order')">Tab Order</button>
                    <button class="flex-1 py-md rounded-xl font-bold transition-all text-text-primary hover:bg-white"
                        id="tab-btn-kiloan" onclick="toggleTab('kiloan')">Tab Kiloan</button>
                </div>
                <div class="space-y-md p-lg" id="tab-content-order">
                    <div class="flex gap-md">
                        <span class="material-symbols-outlined text-secondary"
                            style="font-variation-settings: 'FILL' 1;">check_circle</span>
                        <p class="text-text-secondary">Pemesanan melalui WhatsApp atau website akan segera diproses tim
                            kurir.</p>
                    </div>
                    <div class="flex gap-md">
                        <span class="material-symbols-outlined text-secondary"
                            style="font-variation-settings: 'FILL' 1;">check_circle</span>
                        <p class="text-text-secondary">Pembayaran dapat dilakukan melalui transfer bank atau tunai saat
                            pengembalian.</p>
                    </div>
                    <div class="flex gap-md">
                        <span class="material-symbols-outlined text-secondary"
                            style="font-variation-settings: 'FILL' 1;">check_circle</span>
                        <p class="text-text-secondary">Waktu pengerjaan dihitung sejak pakaian diterima oleh petugas
                            outlet kami.</p>
                    </div>
                </div>
                <div class="hidden space-y-md p-lg" id="tab-content-kiloan">
                    <div class="flex gap-md">
                        <span class="material-symbols-outlined text-secondary"
                            style="font-variation-settings: 'FILL' 1;">check_circle</span>
                        <p class="text-text-secondary">Minimal laundry kiloan adalah 3Kg per nota.</p>
                    </div>
                    <div class="flex gap-md">
                        <span class="material-symbols-outlined text-secondary"
                            style="font-variation-settings: 'FILL' 1;">check_circle</span>
                        <p class="text-text-secondary">Pakaian luntur harus dipisahkan, kerusakan akibat luntur diluar
                            tanggung jawab kami.</p>
                    </div>
                    <div class="flex gap-md">
                        <span class="material-symbols-outlined text-secondary"
                            style="font-variation-settings: 'FILL' 1;">check_circle</span>
                        <p class="text-text-secondary">Barang berharga di saku harus dikeluarkan sendiri oleh pelanggan.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-3xl px-margin-mobile md:px-margin-desktop bg-background">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-2xl reveal">
                <span class="korean-label">ULASAN</span>
                <h2 class="font-h2 text-headline-lg text-text-primary mt-md">Apa Kata Mereka?</h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-lg">
                <div class="glass-card p-xl rounded-xl shadow-lg reveal shimmer transition-transform hover:scale-105">
                    <div class="flex text-amber-400 mb-md">
                        <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">star</span>
                        <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">star</span>
                        <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">star</span>
                        <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">star</span>
                        <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">star</span>
                    </div>
                    <p class="text-text-primary italic mb-lg">"Layanannya juara! Pernah coba kilat 4 jam beneran kelar
                        dan wanginya awet banget."</p>
                    <div class="flex items-center gap-md">
                        <div class="w-12 h-12 rounded-full bg-primary-fixed"></div>
                        <div>
                            <h4 class="font-bold text-text-primary">Rian Hidayat</h4>
                            <p class="text-xs text-text-secondary">Pelanggan Setia</p>
                        </div>
                    </div>
                </div>
                <div
                    class="glass-card p-xl rounded-xl shadow-lg md:translate-y-4 reveal shimmer transition-transform hover:scale-105">
                    <div class="flex text-amber-400 mb-md">
                        <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">star</span>
                        <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">star</span>
                        <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">star</span>
                        <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">star</span>
                        <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">star</span>
                    </div>
                    <p class="text-text-primary italic mb-lg">"Fitur cek status via website bantu banget, jadi ga perlu
                        tanya-tanya terus lewat WA."</p>
                    <div class="flex items-center gap-md">
                        <div class="w-12 h-12 rounded-full bg-secondary-fixed"></div>
                        <div>
                            <h4 class="font-bold text-text-primary">Amalia Putri</h4>
                            <p class="text-xs text-text-secondary">Wiraswasta</p>
                        </div>
                    </div>
                </div>
                <div class="glass-card p-xl rounded-xl shadow-lg reveal shimmer transition-transform hover:scale-105">
                    <div class="flex text-amber-400 mb-md">
                        <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">star</span>
                        <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">star</span>
                        <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">star</span>
                        <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">star</span>
                        <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">star</span>
                    </div>
                    <p class="text-text-primary italic mb-lg">"Kurir pickup ramah dan tepat waktu. Sangat membantu buat
                        saya yang sibuk kerja."</p>
                    <div class="flex items-center gap-md">
                        <div class="w-12 h-12 rounded-full bg-tertiary-fixed"></div>
                        <div>
                            <h4 class="font-bold text-text-primary">Bagas Adi</h4>
                            <p class="text-xs text-text-secondary">Karyawan Swasta</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-3xl px-margin-mobile md:px-margin-desktop bg-surface" id="location">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-2xl reveal">
                <span class="korean-label">LOKASI KAMI</span>
                <h2 class="font-h2 text-headline-lg text-text-primary mt-md">Kunjungi Toko Fisik Kami</h2>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-lg min-h-[500px]">
                <div class="lg:col-span-1 space-y-lg flex flex-col justify-center reveal">
                    <div class="p-lg bg-background rounded-xl border border-border shadow-sm shimmer">
                        <h4 class="font-bold text-xl text-primary mb-sm">Outlet Cibiru</h4>
                        <p class="text-text-secondary mb-md">Jl. Raya Panyileukan Jl. Bangkit 2 No.7 Blk H3, Cipadung
                            Kidul, Kec. Panyileukan, Kota Bandung, Jawa Barat</p>
                        <div class="flex items-center gap-sm text-sm text-text-primary mb-xs">
                            <span class="material-symbols-outlined text-primary">schedule</span>
                            <span>Buka: 07:00 - 21:00 WIB</span>
                        </div>
                        <div class="flex items-center gap-sm text-sm text-text-primary">
                            <span class="material-symbols-outlined text-primary">call</span>
                            <span>+62 0811-2008-1012</span>
                        </div>
                    </div>
                    <a class="inline-flex items-center justify-center bg-primary-container text-white py-md px-lg rounded-full font-bold hover:brightness-110 transition-all btn-hover-effect"
                        href="https://maps.app.goo.gl/Z6ovJ6Li4qrNbk6G7" target="_blank" rel="noopener noreferrer">
                        Buka di Google Maps
                    </a>
                </div>
                <div class="lg:col-span-2 rounded-xl overflow-hidden shadow-2xl relative reveal">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d294.3717545887723!2d107.72599999381467!3d-6.940877394108454!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68c37c038b4b27%3A0xf073bde96bf57dcd!2sALL%20CLEAN%20LAUNDRY!5e0!3m2!1sen!2sid!4v1779526148920!5m2!1sen!2sid"
                        width="100%" height="100%" style="border:0; min-height: 500px;" allowfullscreen=""
                        loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                        class="absolute inset-0 w-full h-full"></iframe>
                </div>
            </div>
        </div>
    </section>
    </main>

    <footer
        class="bg-surface-container-low dark:bg-inverse-surface border-t border-border w-full py-xl px-margin-mobile md:px-margin-desktop">
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-4 gap-gutter">
            <div class="md:col-span-1">
                <h2 class="font-h2 text-h2 text-primary mb-2">ALL CLEAN LAUNDRY</h2>
                <p class="text-on-surface-variant text-sm mb-lg">Ahli laundry express profesional dengan standar
                    higienitas tinggi untuk keluarga Anda.</p>
                <div class="flex gap-md">
                    <a class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center text-primary hover:bg-primary hover:text-white transition-all btn-hover-effect"
                        href="#">
                        <span class="material-symbols-outlined">public</span>
                    </a>
                    <a class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center text-primary hover:bg-primary hover:text-white transition-all btn-hover-effect"
                        href="#">
                        <span class="material-symbols-outlined">photo_camera</span>
                    </a>
                    <a class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center text-primary hover:bg-primary hover:text-white transition-all btn-hover-effect"
                        href="#">
                        <span class="material-symbols-outlined">alternate_email</span>
                    </a>
                </div>
            </div>
            <div>
                <h4 class="font-bold text-text-primary mb-lg">Menu Utama</h4>
                <ul class="space-y-sm">
                    <li><a class="text-on-surface-variant hover:text-primary transition-colors text-sm"
                            href="#home">Beranda</a></li>
                    <li><a class="text-on-surface-variant hover:text-primary transition-colors text-sm"
                            href="#about">Tentang Kami</a></li>
                    <li><a class="text-on-surface-variant hover:text-primary transition-colors text-sm"
                            href="#services">Layanan &amp; Harga</a></li>
                    <li><a class="text-on-surface-variant hover:text-primary transition-colors text-sm"
                            href="#tnc">Syarat &amp; Ketentuan</a></li>
                    <li><a class="text-on-surface-variant hover:text-primary transition-colors text-sm"
                            href="#location">Lokasi</a></li>
                </ul>
            </div>
            <div>
                <h4 class="font-bold text-text-primary mb-lg">Hubungi Kami</h4>
                <ul class="space-y-sm">
                    <li class="flex items-center gap-sm text-sm text-on-surface-variant">
                        <span class="material-symbols-outlined text-lg">call</span>
                        +62 0811-2008-1012
                    </li>
                    <li class="flex items-center gap-sm text-sm text-on-surface-variant">
                        <span class="material-symbols-outlined text-lg">mail</span>
                        hello@allcleanlaundry.com
                    </li>
                    <li class="flex items-center gap-sm text-sm text-on-surface-variant">
                        <span class="material-symbols-outlined text-lg">location_on</span>
                        Kab. Bandung, Jawa Barat
                    </li>
                </ul>
            </div>
            <div>
                <h4 class="font-bold text-text-primary mb-lg">Jam Operasional</h4>
                <p class="text-sm text-on-surface-variant">Setiap Hari: 07:00 - 21:00 WIB</p>
                <p class="text-sm text-on-surface-variant mt-sm">Penjemputan terakhir pukul 19:00 WIB.</p>
                <div class="mt-lg p-md bg-secondary/10 rounded-xl shimmer">
                    <p class="text-xs font-bold text-secondary text-center uppercase tracking-widest">Laundry
                        Profesional Bandung</p>
                </div>
            </div>
        </div>
        <div
            class="max-w-7xl mx-auto mt-2xl pt-lg border-t border-border flex flex-col md:flex-row justify-between items-center gap-md">
            <p class="text-on-surface-variant text-sm">© 2024 ALL CLEAN LAUNDRY. All rights reserved.</p>
            <p class="text-on-surface-variant text-xs">Made by TEKKOM.</p>
        </div>
    </footer>

    <a class="fixed bottom-8 right-8 z-50 flex items-center gap-sm bg-secondary text-on-secondary rounded-full px-lg py-md shadow-xl shadow-secondary/20 hover:scale-110 hover:brightness-110 transition-all animate-subtle-pulse"
        href="https://wa.me/62081120081012" target="_blank">
        <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">chat</span>
        <span class="font-label-accent text-label-accent uppercase">Order sekarang</span>
    </a>
    <script>
        // Tab switching logic
        function toggleTab(tab) {
            const orderBtn = document.getElementById('tab-btn-order');
            const kiloanBtn = document.getElementById('tab-btn-kiloan');
            const orderContent = document.getElementById('tab-content-order');
            const kiloanContent = document.getElementById('tab-content-kiloan');

            if (tab === 'order') {
                orderBtn.classList.add('bg-primary', 'text-white', 'shadow-lg');
                orderBtn.classList.remove('text-text-primary', 'hover:bg-white');
                kiloanBtn.classList.remove('bg-primary', 'text-white', 'shadow-lg');
                kiloanBtn.classList.add('text-text-primary', 'hover:bg-white');
                orderContent.classList.remove('hidden');
                kiloanContent.classList.add('hidden');
            } else {
                kiloanBtn.classList.add('bg-primary', 'text-white', 'shadow-lg');
                kiloanBtn.classList.remove('text-text-primary', 'hover:bg-white');
                orderBtn.classList.remove('bg-primary', 'text-white', 'shadow-lg');
                orderBtn.classList.add('text-text-primary', 'hover:bg-white');
                kiloanContent.classList.remove('hidden');
                orderContent.classList.add('hidden');
            }
        }

        // Scroll reveal observer
        document.addEventListener('DOMContentLoaded', () => {
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };

            const revealObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('active');
                        // Once animated, we don't need to observe it anymore
                        revealObserver.unobserve(entry.target);
                    }
                });
            }, observerOptions);

            document.querySelectorAll('.reveal').forEach(el => {
                revealObserver.observe(el);
            });

            const navLinks = Array.from(document.querySelectorAll('[data-nav-link]'));
            const sections = ['home', 'about', 'services', 'tnc', 'location']
                .map((id) => document.getElementById(id))
                .filter(Boolean);

            const setActiveNavLink = (id) => {
                navLinks.forEach((link) => {
                    link.classList.toggle('active', link.getAttribute('data-nav-link') === id);
                    link.classList.toggle('text-primary', link.getAttribute('data-nav-link') === id);
                    link.classList.toggle('font-bold', link.getAttribute('data-nav-link') === id);
                    link.classList.toggle('text-on-surface-variant', link.getAttribute('data-nav-link') !== id);
                });
            };

            const updateActiveNavLink = () => {
                const activeOffset = window.scrollY + 140;
                let activeSectionId = sections[0]?.id ?? 'home';

                sections.forEach((section) => {
                    if (section.offsetTop <= activeOffset) {
                        activeSectionId = section.id;
                    }
                });

                setActiveNavLink(activeSectionId);
            };

            updateActiveNavLink();
            window.addEventListener('scroll', updateActiveNavLink, { passive: true });
            window.addEventListener('resize', updateActiveNavLink);

        });
    </script>
</body>

</html>