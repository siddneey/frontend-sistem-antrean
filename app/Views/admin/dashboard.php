<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dashboard Admin - MPP Kota Tangerang</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        :root {
            --navy: #10233f;
            --navy-dark: #0b1a30;
            --navy-light: #193456;

            --yellow: #f5c542;
            --yellow-soft: #fff8dc;

            --bg: #f4f6f9;
            --white: #ffffff;

            --text: #1d2939;
            --muted: #7b8798;

            --border: #e4e8ee;

            --green: #198754;
            --red: #d9534f;

            --sidebar-width: 260px;
            --sidebar-collapsed: 78px;

            --transition-sidebar:
                width 0.35s cubic-bezier(0.4, 0, 0.2, 1),
                margin-left 0.35s cubic-bezier(0.4, 0, 0.2, 1),
                padding 0.35s cubic-bezier(0.4, 0, 0.2, 1);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html,
        body {
            min-height: 100%;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background: var(--bg);
            color: var(--text);
            overflow-x: hidden;
        }


        /* =====================================================
           SIDEBAR
        ===================================================== */

        .sidebar {
            position: fixed;
            top: 0;
            left: 0;

            width: var(--sidebar-width);
            height: 100vh;

            background: var(--navy);
            color: white;

            z-index: 1000;

            display: flex;
            flex-direction: column;

            overflow: hidden;

            transition: width 0.35s cubic-bezier(0.4, 0, 0.2, 1);
        }


        /* =========================
           SIDEBAR HEADER
        ========================= */

        .sidebar-header {
            height: 76px;
            min-height: 76px;

            padding: 0 17px;

            display: flex;
            align-items: center;

            border-bottom: 1px solid rgba(255,255,255,0.08);

            position: relative;

            transition: padding 0.35s cubic-bezier(0.4, 0, 0.2, 1);
        }


        .brand {
            display: flex;
            align-items: center;

            gap: 10px;

            min-width: 0;

            transition:
                opacity 0.25s ease,
                transform 0.35s cubic-bezier(0.4, 0, 0.2, 1);
        }


        .brand-logo {
            width: 40px;
            height: 40px;
            min-width: 40px;

            border-radius: 10px;

            display: flex;
            align-items: center;
            justify-content: center;

            overflow: hidden;
        }

        .brand-logo img {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }


        .brand-text {
            font-size: 16px;
            font-weight: 700;

            white-space: nowrap;

            overflow: hidden;

            transition:
                opacity 0.25s ease,
                width 0.35s ease;
        }


        /* =========================
           HAMBURGER
        ========================= */

        .sidebar-toggle {
            width: 38px;
            height: 38px;

            min-width: 38px;

            border: none;

            background: transparent;

            color: white;

            border-radius: 8px;

            display: flex;
            align-items: center;
            justify-content: center;

            font-size: 23px;

            cursor: pointer;

            margin-left: auto;

            transition:
                background 0.2s ease,
                transform 0.25s ease;
        }


        .sidebar-toggle:hover {
            background: rgba(255,255,255,0.09);
        }


        .sidebar-toggle:active {
            transform: scale(0.90);
        }


        /* =========================
           WELCOME
        ========================= */

        .welcome {
            padding: 21px 20px 17px;

            min-height: 82px;

            overflow: hidden;

            transition:
                padding 0.35s cubic-bezier(0.4, 0, 0.2, 1),
                min-height 0.35s ease;
        }


        .welcome small {
            display: block;

            color: rgba(255,255,255,0.48);

            font-size: 11px;

            margin-bottom: 4px;

            white-space: nowrap;

            transition:
                opacity 0.22s ease,
                transform 0.3s ease;
        }


        .welcome strong {
            display: block;

            color: white;

            font-size: 14px;

            white-space: nowrap;

            overflow: hidden;

            text-overflow: ellipsis;

            transition:
                opacity 0.22s ease,
                transform 0.3s ease;
        }


        /* =====================================================
           SIDEBAR MENU
        ===================================================== */

        .sidebar-menu {
            padding: 4px 11px 20px;

            overflow-y: auto;
            overflow-x: hidden;

            scrollbar-width: thin;

            transition:
                padding 0.35s cubic-bezier(0.4, 0, 0.2, 1);
        }


        .menu-title {
            color: rgba(255,255,255,0.38);

            font-size: 10px;
            font-weight: 700;

            text-transform: uppercase;

            padding: 11px 10px 7px;

            white-space: nowrap;

            overflow: hidden;

            transition:
                opacity 0.2s ease,
                height 0.35s ease,
                padding 0.35s ease;
        }


        .menu-item {
            width: 100%;

            height: 42px;

            display: flex;
            align-items: center;

            gap: 13px;

            padding: 0 12px;

            margin-bottom: 3px;

            color: rgba(255,255,255,0.72);

            text-decoration: none;

            border-radius: 8px;

            font-size: 13px;

            white-space: nowrap;

            overflow: hidden;

            transition:
                background 0.2s ease,
                color 0.2s ease,
                padding 0.35s cubic-bezier(0.4, 0, 0.2, 1),
                gap 0.35s cubic-bezier(0.4, 0, 0.2, 1);
        }


        .menu-item i {
            width: 20px;
            min-width: 20px;

            text-align: center;

            font-size: 16px;

            transition:
                transform 0.3s ease;
        }


        .menu-item span {
            overflow: hidden;

            transition:
                opacity 0.22s ease,
                max-width 0.35s ease;
        }


        .menu-item:hover {
            color: white;

            background: rgba(255,255,255,0.08);
        }


        .menu-item.active {
            background: var(--yellow);

            color: var(--navy);

            font-weight: 600;
        }


        /* =====================================================
           COLLAPSED SIDEBAR
        ===================================================== */

        body.sidebar-collapsed .sidebar {
            width: var(--sidebar-collapsed);
        }


        body.sidebar-collapsed .sidebar-header {
            padding: 0 20px;

            justify-content: center;
        }


        body.sidebar-collapsed .brand {
            width: 0;

            opacity: 0;

            transform: translateX(-10px);

            pointer-events: none;
        }


        body.sidebar-collapsed .sidebar-toggle {
            margin-left: 0;
        }


        body.sidebar-collapsed .welcome {
            min-height: 35px;

            padding: 8px 0;

            display: flex;
            justify-content: center;
        }


        body.sidebar-collapsed .welcome small,
        body.sidebar-collapsed .welcome strong {
            opacity: 0;

            transform: translateX(-10px);

            position: absolute;

            pointer-events: none;
        }


        body.sidebar-collapsed .sidebar-menu {
            padding-left: 10px;
            padding-right: 10px;
        }


        body.sidebar-collapsed .menu-title {
            height: 0;

            padding-top: 0;
            padding-bottom: 0;

            opacity: 0;
        }


        body.sidebar-collapsed .menu-item {
            justify-content: center;

            padding-left: 0;
            padding-right: 0;

            gap: 0;
        }


        body.sidebar-collapsed .menu-item span {
            max-width: 0;

            opacity: 0;

            pointer-events: none;
        }


        body.sidebar-collapsed .menu-item i {
            transform: scale(1.02);
        }


        /* =====================================================
           MAIN CONTENT
        ===================================================== */

        .main-content {
            margin-left: var(--sidebar-width);

            min-height: 100vh;

            transition:
                margin-left 0.35s cubic-bezier(0.4, 0, 0.2, 1);
        }


        body.sidebar-collapsed .main-content {
            margin-left: var(--sidebar-collapsed);
        }


        /* =====================================================
           TOPBAR
        ===================================================== */

        .topbar {
        height: 76px;

        background: var(--white);

        border-bottom: 1px solid var(--border);

        display: flex;
        align-items: center;

        justify-content: space-between;

        padding: 0 30px;
        }


        .topbar-left {
            color: var(--navy);
            font-size: 17px;
            font-weight: 700;
        }

        .topbar-left span {
            color: var(--muted);
            font-size: 12px;
            font-weight: 400;
            margin-left: 8px;
        }


        .topbar-right {
            display: flex;
            align-items: center;
            gap: 18px;
        }

        /* =========================
        DATE
        ========================= */
        .date-wrapper {
            display: flex;
            align-items: center;
            gap: 8px;
        }


        .date-wrapper i {
            color: var(--navy);
            font-size: 17px;
        }

        .date-input {
            height: 40px;

            border: 1px solid var(--border);

            border-radius: 8px;

            background: white;

            color: var(--text);

            font-size: 13px;

            padding: 0 11px;

            outline: none;

            cursor: pointer;

            transition:
                border-color 0.2s ease,
                box-shadow 0.2s ease;
        }


        .date-input:hover {
            border-color: #c7ced8;
        }


        .date-input:focus {
            border-color: var(--navy);

            box-shadow:
                0 0 0 3px rgba(16,35,63,0.08);
        }


        /* =========================
           LOGOUT
        ========================= */

        .logout-btn {
            height: 40px;

            padding: 0 14px;

            border: 1px solid #eadfbd;

            border-radius: 8px;

            background: var(--yellow-soft);

            color: #806600;

            text-decoration: none;

            display: flex;
            align-items: center;

            gap: 7px;

            font-size: 13px;

            font-weight: 600;

            transition:
                background 0.2s ease,
                color 0.2s ease,
                border-color 0.2s ease;
        }


        .logout-btn:hover {
            background: var(--yellow);

            border-color: var(--yellow);

            color: var(--navy);
        }


        /* =====================================================
           CONTENT
        ===================================================== */

        .content {
            padding: 30px;
        }


        .page-title {
            margin-bottom: 25px;
        }


        .page-title h4 {
            margin: 0;

            color: var(--navy);

            font-size: 23px;

            font-weight: 700;
        }


        .page-title p {
            margin: 6px 0 0;

            color: var(--muted);

            font-size: 13px;
        }


        /* =====================================================
           INSTANSI GRID
        ===================================================== */

        .instansi-grid {
            display: grid;

            grid-template-columns:
                repeat(4, minmax(0, 1fr));

            gap: 16px;
        }


        /* =====================================================
           INSTANSI CARD
        ===================================================== */

        .instansi-card {
            min-height: 145px;

            background: var(--white);

            border: 1px solid var(--border);

            border-radius: 12px;

            padding: 18px 19px;

            display: flex;

            flex-direction: column;

            justify-content: space-between;

            transition:
                transform 0.2s ease,
                box-shadow 0.2s ease,
                border-color 0.2s ease;
        }


        .instansi-card:hover {
            transform: translateY(-2px);

            border-color: #d6dce4;

            box-shadow:
                0 6px 18px rgba(16,35,63,0.06);
        }


        .instansi-name {
            color: var(--navy);

            font-size: 15px;

            font-weight: 700;

            line-height: 1.4;
        }


        /* Jumlah antrean */

        .queue-info {
            margin-top: 9px;
        }


        .queue-number {
            color: var(--text);

            font-size: 25px;

            line-height: 1;

            font-weight: 700;
        }


        .queue-label {
            color: var(--muted);

            font-size: 11px;

            margin-top: 5px;
        }


        /* =========================
           STATUS
        ========================= */

        .instansi-status {
            display: flex;

            align-items: center;

            justify-content: space-between;

            margin-top: 16px;

            padding-top: 12px;

            border-top: 1px solid #eef0f3;
        }


        .status-text {
            font-size: 11px;

            font-weight: 600;
        }


        .status-text.on {
            color: var(--green);
        }


        .status-text.off {
            color: var(--red);
        }


        /* =====================================================
           SWITCH
        ===================================================== */

        .switch {
            position: relative;

            display: inline-block;

            width: 42px;

            height: 22px;
        }


        .switch input {
            opacity: 0;

            width: 0;
            height: 0;
        }


        .slider {
            position: absolute;

            inset: 0;

            background: #cdd3da;

            border-radius: 30px;

            cursor: pointer;

            transition:
                background 0.25s ease;
        }


        .slider:before {
            content: "";

            position: absolute;

            width: 16px;
            height: 16px;

            left: 3px;
            top: 3px;

            background: white;

            border-radius: 50%;

            box-shadow:
                0 1px 3px rgba(0,0,0,0.18);

            transition:
                transform 0.25s cubic-bezier(0.4, 0, 0.2, 1);
        }


        .switch input:checked + .slider {
            background: var(--green);
        }


        .switch input:checked + .slider:before {
            transform: translateX(20px);
        }


        /* =====================================================
           RESPONSIVE
        ===================================================== */

        @media (max-width: 1200px) {

            .instansi-grid {
                grid-template-columns:
                    repeat(3, minmax(0, 1fr));
            }

        }


        @media (max-width: 900px) {

            .instansi-grid {
                grid-template-columns:
                    repeat(2, minmax(0, 1fr));
            }

            .content {
                padding: 24px;
            }

        }


        @media (max-width: 700px) {

            .sidebar {
                width: var(--sidebar-width);

                transform: translateX(-100%);

                box-shadow:
                    5px 0 25px rgba(0,0,0,0.15);
            }


            body.mobile-sidebar-open .sidebar {
                transform: translateX(0);
            }


            .main-content,
            body.sidebar-collapsed .main-content {
                margin-left: 0;
            }


            .topbar {
                height: auto;

                min-height: 76px;

                padding: 14px 18px;

                gap: 10px;
            }


            .date-input {
                width: 140px;
            }


            .content {
                padding: 20px;
            }


            .instansi-grid {
                grid-template-columns: 1fr;
            }

        }


        @media (max-width: 430px) {

            .topbar {
                justify-content: space-between;
            }


            .logout-btn span {
                display: none;
            }


            .logout-btn {
                width: 40px;

                padding: 0;

                justify-content: center;
            }


            .date-input {
                width: 135px;
            }

        }

    </style>
</head>

<body>


    <!-- =====================================================
         SIDEBAR
    ===================================================== -->

    <aside class="sidebar">

        <!-- Logo + Garis Tiga -->
        <div class="sidebar-header">

            <div class="brand">

                <div class="brand-logo">
                    <img src="<?= base_url('assets/images/logokota.png') ?>" alt="logokota">
                </div>

                <div class="brand-text">
                    MPP Kota Tangerang
                </div>

            </div>


            <!-- GARIS TIGA -->
            <button
                type="button"
                class="sidebar-toggle"
                id="sidebarToggle"
                title="Buka / Tutup Sidebar"
            >
                <i class="bi bi-list"></i>
            </button>

        </div>


        <!-- Welcome -->
        <div class="welcome">

            <small>Welcome,</small>

            <strong>Admin MPP</strong>

        </div>


        <!-- Menu -->
        <nav class="sidebar-menu">

            <div class="menu-title">
                Menu Utama
            </div>


            <a
                href="<?= base_url('admin') ?>"
                class="menu-item active"
            >
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>


            <a href="<?= site_url('admin/laporan-proses-antrean') ?>" class="menu-item">
                <i class="bi bi-hourglass-split"></i>
                <span>Laporan Proses Antrean</span>
            </a>


            <a href="<?= base_url('admin/laporan-ringkasan-antrean') ?>" class="menu-item">
                <i class="bi bi-bar-chart"></i>
                <span>Laporan Ringkasan Antrean</span>
            </a>


            <div class="menu-title">
                Master Data
            </div>


            <a href="<?= base_url('admin/instansi') ?>" class="menu-item">
                <i class="bi bi-building"></i>
                <span>Instansi</span>
            </a>


            <a href="<?= base_url('admin/petugas') ?>" class="menu-item">
                <i class="bi bi-person"></i>
                <span>Petugas</span>
            </a>


            <div class="menu-title">
                Pengaturan
            </div>


            <a href="<?= base_url('admin/pengaturan-kelompok') ?>" class="menu-item">
                <i class="bi bi-people"></i>
                <span>Pengaturan Kelompok</span>
            </a>


            <a href="<?= base_url('admin/pengaturan-layar') ?>" class="menu-item">
                <i class="bi bi-display"></i>
                <span>Pengaturan Layar</span>
            </a>


            <a href="<?= base_url('admin/pengaturan-hari-libur') ?>" class="menu-item">
                <i class="bi bi-calendar-x"></i>
                <span>Pengaturan Hari Libur</span>
            </a>


            <a href="<?= site_url('admin/log-user-login') ?>" class="menu-item">
                <i class="bi bi-clock-history"></i>
                <span>Log User Login</span>
            </a>


            <a href="<?= site_url('admin/absensi-petugas') ?>" class="menu-item">
                <i class="bi bi-person-check"></i>
                <span>Absensi Petugas</span>
            </a>

        </nav>

    </aside>



    <!-- =====================================================
         MAIN CONTENT
    ===================================================== -->

    <main class="main-content">

    <!-- =========================
         TOP BAR
    ========================= -->
    <header class="topbar">

        <!-- KIRI -->
        <div class="topbar-left">
            Admin
            <span>Monitoring layanan MPP Kota Tangerang</span>
        </div>

        <!-- KANAN -->
        <div class="topbar-right">

            <!-- PILIH TANGGAL -->
            <div class="date-wrapper">
                <i class="bi bi-calendar3"></i>

                <input
                    type="date"
                    id="tanggal"
                    class="date-input"
                    value="<?= date('Y-m-d') ?>"
                >
            </div>

            <!-- LOGOUT -->
            <a href="#" class="logout-btn">
                <i class="bi bi-box-arrow-right"></i>
                <span>Logout</span>
            </a>

        </div>

    </header>

        <!-- =========================
             CONTENT
        ========================= -->

        <section class="content">


            <div class="page-title">

                <h4>Dashboard</h4>

                <p>
                    Pantau layanan dan jumlah antrean setiap instansi.
                </p>

            </div>



            <!-- =================================================
                 28 INSTANSI
            ================================================= -->

            <div class="instansi-grid">


                <!-- 1 -->
                <div class="instansi-card">

                    <div>
                        <div class="instansi-name">
                            SAMSAT
                        </div>

                        <div class="queue-info">

                            <div class="queue-number">
                                32
                            </div>

                            <div class="queue-label">
                                antrean berhasil dilayani
                            </div>

                        </div>
                    </div>


                    <div class="instansi-status">

                        <span class="status-text on">
                            Aktif
                        </span>

                        <label class="switch">

                            <input
                                type="checkbox"
                                checked
                                onchange="ubahStatus(this)"
                            >

                            <span class="slider"></span>

                        </label>

                    </div>

                </div>



                <!-- 2 -->
                <div class="instansi-card">

                    <div>

                        <div class="instansi-name">
                            BAPENDA
                        </div>

                        <div class="queue-info">

                            <div class="queue-number">
                                25
                            </div>

                            <div class="queue-label">
                                antrean berhasil dilayani
                            </div>

                        </div>

                    </div>


                    <div class="instansi-status">

                        <span class="status-text on">
                            Aktif
                        </span>

                        <label class="switch">

                            <input
                                type="checkbox"
                                checked
                                onchange="ubahStatus(this)"
                            >

                            <span class="slider"></span>

                        </label>

                    </div>

                </div>



                <!-- 3 -->
                <div class="instansi-card">

                    <div>

                        <div class="instansi-name">
                            DUKCAPIL
                        </div>

                        <div class="queue-info">

                            <div class="queue-number">
                                18
                            </div>

                            <div class="queue-label">
                                antrean berhasil dilayani
                            </div>

                        </div>

                    </div>


                    <div class="instansi-status">

                        <span class="status-text off">
                            Nonaktif
                        </span>

                        <label class="switch">

                            <input
                                type="checkbox"
                                onchange="ubahStatus(this)"
                            >

                            <span class="slider"></span>

                        </label>

                    </div>

                </div>



                <!-- 4 -->
                <div class="instansi-card">

                    <div>

                        <div class="instansi-name">
                            BPJS Kesehatan
                        </div>

                        <div class="queue-info">

                            <div class="queue-number">
                                12
                            </div>

                            <div class="queue-label">
                                antrean berhasil dilayani
                            </div>

                        </div>

                    </div>


                    <div class="instansi-status">

                        <span class="status-text on">
                            Aktif
                        </span>

                        <label class="switch">

                            <input
                                type="checkbox"
                                checked
                                onchange="ubahStatus(this)"
                            >

                            <span class="slider"></span>

                        </label>

                    </div>

                </div>



                <!-- 5 -->
                <div class="instansi-card">

                    <div>

                        <div class="instansi-name">
                            BPJS Ketenagakerjaan
                        </div>

                        <div class="queue-info">

                            <div class="queue-number">
                                21
                            </div>

                            <div class="queue-label">
                                antrean berhasil dilayani
                            </div>

                        </div>

                    </div>


                    <div class="instansi-status">

                        <span class="status-text on">
                            Aktif
                        </span>

                        <label class="switch">
                            <input type="checkbox" checked onchange="ubahStatus(this)">
                            <span class="slider"></span>
                        </label>

                    </div>

                </div>



                <!-- 6 -->
                <div class="instansi-card">

                    <div>

                        <div class="instansi-name">
                            Dinas Kesehatan
                        </div>

                        <div class="queue-info">

                            <div class="queue-number">
                                17
                            </div>

                            <div class="queue-label">
                                antrean berhasil dilayani
                            </div>

                        </div>

                    </div>


                    <div class="instansi-status">

                        <span class="status-text on">
                            Aktif
                        </span>

                        <label class="switch">
                            <input type="checkbox" checked onchange="ubahStatus(this)">
                            <span class="slider"></span>
                        </label>

                    </div>

                </div>



                <!-- 7 -->
                <div class="instansi-card">

                    <div>

                        <div class="instansi-name">
                            Dinas Sosial
                        </div>

                        <div class="queue-info">

                            <div class="queue-number">
                                14
                            </div>

                            <div class="queue-label">
                                antrean berhasil dilayani
                            </div>

                        </div>

                    </div>


                    <div class="instansi-status">

                        <span class="status-text on">
                            Aktif
                        </span>

                        <label class="switch">
                            <input type="checkbox" checked onchange="ubahStatus(this)">
                            <span class="slider"></span>
                        </label>

                    </div>

                </div>



                <!-- 8 -->
                <div class="instansi-card">

                    <div>

                        <div class="instansi-name">
                            Dinas Tenaga Kerja
                        </div>

                        <div class="queue-info">

                            <div class="queue-number">
                                19
                            </div>

                            <div class="queue-label">
                                antrean berhasil dilayani
                            </div>

                        </div>

                    </div>


                    <div class="instansi-status">

                        <span class="status-text on">
                            Aktif
                        </span>

                        <label class="switch">
                            <input type="checkbox" checked onchange="ubahStatus(this)">
                            <span class="slider"></span>
                        </label>

                    </div>

                </div>



                <!-- 9 -->
                <div class="instansi-card">

                    <div>
                        <div class="instansi-name">
                            Dinas Pendidikan
                        </div>

                        <div class="queue-info">
                            <div class="queue-number">
                                16
                            </div>
                            <div class="queue-label">
                                antrean berhasil dilayani
                            </div>
                        </div>
                    </div>

                    <div class="instansi-status">
                        <span class="status-text on">Aktif</span>

                        <label class="switch">
                            <input type="checkbox" checked onchange="ubahStatus(this)">
                            <span class="slider"></span>
                        </label>
                    </div>

                </div>



                <!-- 10 -->
                <div class="instansi-card">

                    <div>
                        <div class="instansi-name">
                            DPMPTSP
                        </div>

                        <div class="queue-info">
                            <div class="queue-number">
                                28
                            </div>
                            <div class="queue-label">
                                antrean berhasil dilayani
                            </div>
                        </div>
                    </div>

                    <div class="instansi-status">
                        <span class="status-text on">Aktif</span>

                        <label class="switch">
                            <input type="checkbox" checked onchange="ubahStatus(this)">
                            <span class="slider"></span>
                        </label>
                    </div>

                </div>



                <!-- 11 -->
                <div class="instansi-card">

                    <div>
                        <div class="instansi-name">
                            Pengadilan Negeri
                        </div>

                        <div class="queue-info">
                            <div class="queue-number">
                                11
                            </div>
                            <div class="queue-label">
                                antrean berhasil dilayani
                            </div>
                        </div>
                    </div>

                    <div class="instansi-status">
                        <span class="status-text on">Aktif</span>

                        <label class="switch">
                            <input type="checkbox" checked onchange="ubahStatus(this)">
                            <span class="slider"></span>
                        </label>
                    </div>

                </div>



                <!-- 12 -->
                <div class="instansi-card">

                    <div>
                        <div class="instansi-name">
                            Kejaksaan Negeri
                        </div>

                        <div class="queue-info">
                            <div class="queue-number">
                                13
                            </div>
                            <div class="queue-label">
                                antrean berhasil dilayani
                            </div>
                        </div>
                    </div>

                    <div class="instansi-status">
                        <span class="status-text on">Aktif</span>

                        <label class="switch">
                            <input type="checkbox" checked onchange="ubahStatus(this)">
                            <span class="slider"></span>
                        </label>
                    </div>

                </div>



                <!-- 13 -->
                <div class="instansi-card">

                    <div>
                        <div class="instansi-name">
                            Kepolisian
                        </div>

                        <div class="queue-info">
                            <div class="queue-number">
                                20
                            </div>
                            <div class="queue-label">
                                antrean berhasil dilayani
                            </div>
                        </div>
                    </div>

                    <div class="instansi-status">
                        <span class="status-text on">Aktif</span>

                        <label class="switch">
                            <input type="checkbox" checked onchange="ubahStatus(this)">
                            <span class="slider"></span>
                        </label>
                    </div>

                </div>



                <!-- 14 -->
                <div class="instansi-card">

                    <div>
                        <div class="instansi-name">
                            Imigrasi
                        </div>

                        <div class="queue-info">
                            <div class="queue-number">
                                9
                            </div>
                            <div class="queue-label">
                                antrean berhasil dilayani
                            </div>
                        </div>
                    </div>

                    <div class="instansi-status">
                        <span class="status-text on">Aktif</span>

                        <label class="switch">
                            <input type="checkbox" checked onchange="ubahStatus(this)">
                            <span class="slider"></span>
                        </label>
                    </div>

                </div>



                <!-- 15 -->
                <div class="instansi-card">

                    <div>
                        <div class="instansi-name">
                            Kementerian Agama
                        </div>

                        <div class="queue-info">
                            <div class="queue-number">
                                8
                            </div>
                            <div class="queue-label">
                                antrean berhasil dilayani
                            </div>
                        </div>
                    </div>

                    <div class="instansi-status">
                        <span class="status-text on">Aktif</span>

                        <label class="switch">
                            <input type="checkbox" checked onchange="ubahStatus(this)">
                            <span class="slider"></span>
                        </label>
                    </div>

                </div>



                <!-- 16 -->
                <div class="instansi-card">

                    <div>
                        <div class="instansi-name">
                            PLN
                        </div>

                        <div class="queue-info">
                            <div class="queue-number">
                                15
                            </div>
                            <div class="queue-label">
                                antrean berhasil dilayani
                            </div>
                        </div>
                    </div>

                    <div class="instansi-status">
                        <span class="status-text on">Aktif</span>

                        <label class="switch">
                            <input type="checkbox" checked onchange="ubahStatus(this)">
                            <span class="slider"></span>
                        </label>
                    </div>

                </div>



                <!-- 17 -->
                <div class="instansi-card">

                    <div>
                        <div class="instansi-name">
                            PDAM Tirta Benteng
                        </div>

                        <div class="queue-info">
                            <div class="queue-number">
                                10
                            </div>
                            <div class="queue-label">
                                antrean berhasil dilayani
                            </div>
                        </div>
                    </div>

                    <div class="instansi-status">
                        <span class="status-text on">Aktif</span>

                        <label class="switch">
                            <input type="checkbox" checked onchange="ubahStatus(this)">
                            <span class="slider"></span>
                        </label>
                    </div>

                </div>



                <!-- 18 -->
                <div class="instansi-card">

                    <div>
                        <div class="instansi-name">
                            BPHTB
                        </div>

                        <div class="queue-info">
                            <div class="queue-number">
                                7
                            </div>
                            <div class="queue-label">
                                antrean berhasil dilayani
                            </div>
                        </div>
                    </div>

                    <div class="instansi-status">
                        <span class="status-text on">Aktif</span>

                        <label class="switch">
                            <input type="checkbox" checked onchange="ubahStatus(this)">
                            <span class="slider"></span>
                        </label>
                    </div>

                </div>



                <!-- 19 -->
                <div class="instansi-card">

                    <div>
                        <div class="instansi-name">
                            Kantor Pos
                        </div>

                        <div class="queue-info">
                            <div class="queue-number">
                                12
                            </div>
                            <div class="queue-label">
                                antrean berhasil dilayani
                            </div>
                        </div>
                    </div>

                    <div class="instansi-status">
                        <span class="status-text on">Aktif</span>

                        <label class="switch">
                            <input type="checkbox" checked onchange="ubahStatus(this)">
                            <span class="slider"></span>
                        </label>
                    </div>

                </div>



                <!-- 20 -->
                <div class="instansi-card">

                    <div>
                        <div class="instansi-name">
                            Pegadaian
                        </div>

                        <div class="queue-info">
                            <div class="queue-number">
                                18
                            </div>
                            <div class="queue-label">
                                antrean berhasil dilayani
                            </div>
                        </div>
                    </div>

                    <div class="instansi-status">
                        <span class="status-text on">Aktif</span>

                        <label class="switch">
                            <input type="checkbox" checked onchange="ubahStatus(this)">
                            <span class="slider"></span>
                        </label>
                    </div>

                </div>



                <!-- 21 -->
                <div class="instansi-card">

                    <div>
                        <div class="instansi-name">
                            Bank BJB
                        </div>

                        <div class="queue-info">
                            <div class="queue-number">
                                16
                            </div>
                            <div class="queue-label">
                                antrean berhasil dilayani
                            </div>
                        </div>
                    </div>

                    <div class="instansi-status">
                        <span class="status-text on">Aktif</span>

                        <label class="switch">
                            <input type="checkbox" checked onchange="ubahStatus(this)">
                            <span class="slider"></span>
                        </label>
                    </div>

                </div>



                <!-- 22 -->
                <div class="instansi-card">

                    <div>
                        <div class="instansi-name">
                            BPOM
                        </div>

                        <div class="queue-info">
                            <div class="queue-number">
                                6
                            </div>
                            <div class="queue-label">
                                antrean berhasil dilayani
                            </div>
                        </div>
                    </div>

                    <div class="instansi-status">
                        <span class="status-text on">Aktif</span>

                        <label class="switch">
                            <input type="checkbox" checked onchange="ubahStatus(this)">
                            <span class="slider"></span>
                        </label>
                    </div>

                </div>



                <!-- 23 -->
                <div class="instansi-card">

                    <div>
                        <div class="instansi-name">
                            Ketenagakerjaan
                        </div>

                        <div class="queue-info">
                            <div class="queue-number">
                                9
                            </div>
                            <div class="queue-label">
                                antrean berhasil dilayani
                            </div>
                        </div>
                    </div>

                    <div class="instansi-status">
                        <span class="status-text on">Aktif</span>

                        <label class="switch">
                            <input type="checkbox" checked onchange="ubahStatus(this)">
                            <span class="slider"></span>
                        </label>
                    </div>

                </div>



                <!-- 24 -->
                <div class="instansi-card">

                    <div>
                        <div class="instansi-name">
                            KUA
                        </div>

                        <div class="queue-info">
                            <div class="queue-number">
                                8
                            </div>
                            <div class="queue-label">
                                antrean berhasil dilayani
                            </div>
                        </div>
                    </div>

                    <div class="instansi-status">
                        <span class="status-text on">Aktif</span>

                        <label class="switch">
                            <input type="checkbox" checked onchange="ubahStatus(this)">
                            <span class="slider"></span>
                        </label>
                    </div>

                </div>



                <!-- 25 -->
                <div class="instansi-card">

                    <div>
                        <div class="instansi-name">
                            Dinas Perhubungan
                        </div>

                        <div class="queue-info">
                            <div class="queue-number">
                                14
                            </div>
                            <div class="queue-label">
                                antrean berhasil dilayani
                            </div>
                        </div>
                    </div>

                    <div class="instansi-status">
                        <span class="status-text on">Aktif</span>

                        <label class="switch">
                            <input type="checkbox" checked onchange="ubahStatus(this)">
                            <span class="slider"></span>
                        </label>
                    </div>

                </div>



                <!-- 26 -->
                <div class="instansi-card">

                    <div>
                        <div class="instansi-name">
                            Dinas Perumahan
                        </div>

                        <div class="queue-info">
                            <div class="queue-number">
                                11
                            </div>
                            <div class="queue-label">
                                antrean berhasil dilayani
                            </div>
                        </div>
                    </div>

                    <div class="instansi-status">
                        <span class="status-text on">Aktif</span>

                        <label class="switch">
                            <input type="checkbox" checked onchange="ubahStatus(this)">
                            <span class="slider"></span>
                        </label>
                    </div>

                </div>



                <!-- 27 -->
                <div class="instansi-card">

                    <div>
                        <div class="instansi-name">
                            Dinas Lingkungan Hidup
                        </div>

                        <div class="queue-info">
                            <div class="queue-number">
                                13
                            </div>
                            <div class="queue-label">
                                antrean berhasil dilayani
                            </div>
                        </div>
                    </div>

                    <div class="instansi-status">
                        <span class="status-text on">Aktif</span>

                        <label class="switch">
                            <input type="checkbox" checked onchange="ubahStatus(this)">
                            <span class="slider"></span>
                        </label>
                    </div>

                </div>



                <!-- 28 -->
                <div class="instansi-card">

                    <div>
                        <div class="instansi-name">
                            Dinas Ketahanan Pangan
                        </div>

                        <div class="queue-info">
                            <div class="queue-number">
                                10
                            </div>
                            <div class="queue-label">
                                antrean berhasil dilayani
                            </div>
                        </div>
                    </div>

                    <div class="instansi-status">
                        <span class="status-text on">Aktif</span>

                        <label class="switch">
                            <input type="checkbox" checked onchange="ubahStatus(this)">
                            <span class="slider"></span>
                        </label>
                    </div>

                </div>

            </div>

        </section>

    </main>



    <!-- =====================================================
         JAVASCRIPT
    ===================================================== -->

    <script>

        /* =================================================
           SIDEBAR
        ================================================= */

        const sidebarToggle =
            document.getElementById('sidebarToggle');

        sidebarToggle.addEventListener('click', function () {

            if (window.innerWidth <= 700) {

                document.body.classList.toggle(
                    'mobile-sidebar-open'
                );

            } else {

                document.body.classList.toggle(
                    'sidebar-collapsed'
                );

            }

        });


        document.querySelector('.logout-btn').addEventListener('click', function (event) {

            if (!window.confirm('Apakah Anda yakin ingin logout?')) {
                event.preventDefault();
            }

        });



        /* =================================================
           TOGGLE STATUS INSTANSI
        ================================================= */

        function ubahStatus(input) {

            const card =
                input.closest('.instansi-card');

            const status =
                card.querySelector('.status-text');

            const namaInstansi =
                card.querySelector('.instansi-name').textContent.trim();

            const statusBaru = input.checked ? 'Aktif' : 'Nonaktif';

            if (!window.confirm(
                `Apakah Anda yakin ingin mengubah status ${namaInstansi} menjadi ${statusBaru}?`
            )) {
                input.checked = !input.checked;
                return;
            }

            if (input.checked) {

                status.textContent = 'Aktif';

                status.classList.remove('off');

                status.classList.add('on');

            } else {

                status.textContent = 'Nonaktif';

                status.classList.remove('on');

                status.classList.add('off');

            }

        }



        /* =================================================
           DATE FILTER
        ================================================= */

        const tanggal =
            document.getElementById('tanggal');

        tanggal.addEventListener('change', function () {

            console.log(
                'Tanggal yang dipilih:',
                this.value
            );

            /*
             * NANTI DI SINI BISA DIHUBUNGKAN KE DATABASE.
             *
             * Contoh:
             *
             * window.location.href =
             *     "<?= base_url('admin') ?>?tanggal="
             *     + this.value;
             *
             * Dengan begitu jumlah antrean setiap
             * instansi bisa berubah sesuai tanggal.
             */

        });



        /* =================================================
           MOBILE SIDEBAR
        ================================================= */

        document.addEventListener('click', function (event) {

            if (window.innerWidth > 700) {
                return;
            }


            const sidebar =
                document.querySelector('.sidebar');


            const toggle =
                document.getElementById('sidebarToggle');


            if (
                document.body.classList.contains(
                    'mobile-sidebar-open'
                ) &&
                !sidebar.contains(event.target)
            ) {

                document.body.classList.remove(
                    'mobile-sidebar-open'
                );

            }

        });

    </script>

</body>
</html>