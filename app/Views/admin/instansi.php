<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Instansi - MPP Kota Tangerang</title>

    <!-- Bootstrap -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

    <!-- Bootstrap Icons -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css"
        rel="stylesheet"
    >

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

            transition:
                width 0.35s cubic-bezier(0.4, 0, 0.2, 1);

        }


        /* =====================================================
           SIDEBAR HEADER
        ===================================================== */

        .sidebar-header {

            height: 76px;

            min-height: 76px;

            padding: 0 17px;

            display: flex;

            align-items: center;

            border-bottom: 1px solid rgba(255,255,255,0.08);

            position: relative;

            transition:
                padding 0.35s cubic-bezier(0.4, 0, 0.2, 1);

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


        /* =====================================================
           HAMBURGER
        ===================================================== */

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


        /* =====================================================
           WELCOME
        ===================================================== */

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


        /* =====================================================
           LOGOUT
        ===================================================== */

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
           INSTANSI
        ===================================================== */

        .instansi-content {

            padding: 28px 30px 40px;

        }


        .instansi-header {

            display: flex;

            align-items: center;

            gap: 10px;

            margin-bottom: 22px;

        }


        .instansi-header i {

            color: var(--navy);

            font-size: 23px;

        }


        .instansi-header h1 {

            margin: 0;

            color: var(--navy);

            font-size: 25px;

            font-weight: 700;

        }


        /* =====================================================
           STATISTIK
        ===================================================== */

        .instansi-stats {

            display: grid;

            grid-template-columns: repeat(3, 1fr);

            gap: 14px;

            margin-bottom: 20px;

        }


        .stat-card {

            background: var(--white);

            border: 1px solid var(--border);

            border-radius: 8px;

            min-height: 78px;

            padding: 14px 16px;

            display: flex;

            align-items: center;

            gap: 13px;

        }


        .stat-icon {

            width: 40px;

            height: 40px;

            min-width: 40px;

            border-radius: 8px;

            background: var(--yellow-soft);

            color: var(--navy);

            display: flex;

            align-items: center;

            justify-content: center;

            font-size: 18px;

        }


        .stat-info small {

            display: block;

            color: var(--muted);

            font-size: 11px;

            margin-bottom: 3px;

        }


        .stat-info strong {

            display: block;

            color: var(--navy);

            font-size: 18px;

            font-weight: 700;

        }


        /* =====================================================
           FILTER
        ===================================================== */

        .instansi-filter {

            display: flex;

            align-items: center;

            flex-wrap: wrap;

            gap: 12px;

            padding-bottom: 20px;

            border-bottom: 1px solid var(--border);

        }


        .filter-label {

            color: #6b7280;

            font-size: 13px;

            font-weight: 700;

            margin-right: 4px;

        }


        .search-wrapper {

            position: relative;

        }


        .search-wrapper i {

            position: absolute;

            left: 12px;

            top: 50%;

            transform: translateY(-50%);

            color: var(--muted);

            font-size: 14px;

        }


        .search-input {

            height: 38px;

            width: 260px;

            border: 1px solid var(--border);

            border-radius: 7px;

            background: var(--white);

            color: var(--text);

            font-size: 13px;

            padding: 0 10px 0 34px;

            outline: none;

        }


        .search-input:focus {

            border-color: var(--navy);

            box-shadow:
                0 0 0 3px rgba(16,35,63,0.08);

        }


        .group-select {

            height: 38px;

            width: 140px;

            border: 1px solid var(--border);

            border-radius: 7px;

            background: var(--white);

            color: var(--text);

            font-size: 13px;

            padding: 0 10px;

            outline: none;

        }


        .group-select:focus {

            border-color: var(--navy);

            box-shadow:
                0 0 0 3px rgba(16,35,63,0.08);

        }


        .btn-add {

            height: 38px;

            display: inline-flex;

            align-items: center;

            gap: 7px;

            padding: 0 16px;

            border: none;

            border-radius: 20px;

            background: var(--navy);

            color: white;

            font-size: 12px;

            font-weight: 600;

            cursor: pointer;

            transition: 0.2s ease;

            margin-left: auto;

        }


        .btn-add:hover {

            background: var(--navy-light);

            color: white;

        }


        /* =====================================================
           TABLE
        ===================================================== */

        .instansi-table-card {

            margin-top: 20px;

            background: var(--white);

            border: 1px solid var(--border);

            border-radius: 8px;

            overflow: hidden;

            box-shadow:
                0 4px 16px rgba(16,35,63,0.05);

        }


        .instansi-table-wrapper {

            overflow-x: auto;

        }


        .instansi-table {

            width: 100%;

            min-width: 850px;

            border-collapse: collapse;

            font-size: 13px;

        }


        .instansi-table thead th {

            height: 52px;

            padding: 0 14px;

            background: #fafafa;

            border-bottom: 1px solid var(--border);

            color: #64748b;

            text-align: left;

            font-size: 12px;

            font-weight: 600;

        }


        .instansi-table thead th:nth-child(1) {

            width: 25%;

        }


        .instansi-table thead th:nth-child(2) {

            width: 48%;

        }


        .instansi-table thead th:nth-child(3) {

            width: 12%;

        }


        .instansi-table thead th:nth-child(4) {

            width: 15%;

            text-align: center;

        }


        .instansi-table tbody td {

            padding: 14px;

            border-bottom: 1px solid #edf0f3;

            color: #64748b;

            vertical-align: top;

        }


        .instansi-table tbody tr:last-child td {

            border-bottom: none;

        }


        .instansi-table tbody tr:hover td {

            background: #fcfcfc;

        }


        /* =====================================================
           NAMA INSTANSI
        ===================================================== */

        .instansi-name {

            display: flex;

            align-items: flex-start;

            gap: 9px;

        }


        .instansi-info {

            min-width: 0;

        }


        .instansi-title {

            color: #64748b;

            font-weight: 700;

            font-size: 13px;

            margin-bottom: 5px;

        }


        .instansi-group {

            display: inline-block;

            color: #7b8798;

            background: #f1f3f5;

            border-radius: 5px;

            padding: 3px 7px;

            font-size: 10px;

        }


        /* =====================================================
           SOUND
        ===================================================== */

        .sound-btn {

            width: 32px;

            height: 32px;

            min-width: 32px;

            border: 1px solid #eadfbd;

            border-radius: 7px;

            background: var(--yellow-soft);

            color: #806600;

            display: inline-flex;

            align-items: center;

            justify-content: center;

            cursor: pointer;

            transition: 0.2s ease;

        }


        .sound-btn:hover {

            background: var(--yellow);

            color: var(--navy);

            border-color: var(--yellow);

        }


        .sound-btn.speaking {

            background: var(--yellow);

            color: var(--navy);

            border-color: var(--yellow);

        }


        /* =====================================================
           LAYANAN
        ===================================================== */

        .service-list {

            display: flex;

            flex-direction: column;

            gap: 6px;

        }


        .service-item {

            display: flex;

            align-items: flex-start;

            gap: 7px;

            color: #64748b;

            line-height: 1.4;

        }


        .service-item i {

            color: var(--green);

            font-size: 13px;

            margin-top: 2px;

        }


        .service-count-badge {

            display: inline-flex;

            align-items: center;

            justify-content: center;

            min-width: 88px;

            padding: 6px 10px;

            border-radius: 6px;

            background: #f1f3f5;

            color: var(--navy);

            font-size: 11px;

            font-weight: 700;

            white-space: nowrap;

        }


        /* =====================================================
           STATUS
        ===================================================== */

        .status-badge {

            display: inline-flex;

            align-items: center;

            gap: 6px;

            color: #198754;

            font-size: 11px;

            font-weight: 600;

        }


        .status-dot {

            width: 7px;

            height: 7px;

            border-radius: 50%;

            background: #198754;

        }


        /* =====================================================
           AKSI
        ===================================================== */

        .aksi {

            text-align: center;

        }


        .action-buttons {

            display: flex;

            align-items: center;

            justify-content: center;

            gap: 6px;

        }


        .btn-action {

            width: 32px;

            height: 32px;

            border: 1px solid var(--border);

            border-radius: 7px;

            background: white;

            display: inline-flex;

            align-items: center;

            justify-content: center;

            color: var(--navy);

            cursor: pointer;

            transition: 0.2s ease;

        }


        .btn-action:hover {

            background: var(--navy);

            border-color: var(--navy);

            color: white;

        }


        .btn-action.delete:hover {

            background: #fff1f0;

            border-color: #f0c5c2;

            color: var(--red);

        }


        /* =====================================================
           EMPTY
        ===================================================== */

        .empty-row {

            display: none;

        }


        .empty-content {

            text-align: center;

            padding: 45px 20px;

        }


        .empty-content i {

            display: block;

            font-size: 32px;

            color: #c5ccd5;

            margin-bottom: 10px;

        }


        .empty-content strong {

            display: block;

            color: #64748b;

            font-size: 13px;

            margin-bottom: 4px;

        }


        .empty-content span {

            color: var(--muted);

            font-size: 11px;

        }


        /* =====================================================
           MODAL
        ===================================================== */

        .modal-content {

            border: none;

            border-radius: 9px;

            overflow: hidden;

        }


        .modal-header {

            background: var(--navy);

            color: white;

            border-bottom: none;

        }


        .modal-title {

            font-size: 16px;

            font-weight: 700;

        }


        .modal-header .btn-close {

            filter: brightness(0) invert(1);

        }


        .modal-body {

            padding: 22px;

        }


        .form-label {

            color: #64748b;

            font-size: 12px;

            font-weight: 600;

        }


        .form-control,
        .form-select {

            font-size: 13px;

            border-color: var(--border);

            border-radius: 7px;

        }


        .form-control:focus,
        .form-select:focus {

            border-color: var(--navy);

            box-shadow:
                0 0 0 3px rgba(16,35,63,0.08);

        }


        .modal-footer {

            border-top: 1px solid var(--border);

        }


        .btn-modal-cancel {

            border: 1px solid var(--border);

            background: white;

            color: #64748b;

            border-radius: 7px;

            font-size: 12px;

        }


        .btn-modal-save {

            border: none;

            background: var(--navy);

            color: white;

            border-radius: 7px;

            font-size: 12px;

        }


        .btn-modal-save:hover {

            background: var(--navy-light);

            color: white;

        }


        /* =====================================================
           RESPONSIVE
        ===================================================== */

        @media (max-width: 1000px) {

            .instansi-stats {

                grid-template-columns: 1fr 1fr;

            }

        }


        @media (max-width: 900px) {

            .btn-add {

                width: 100%;

                justify-content: center;

                margin-left: 0;

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


            .topbar-right {

                gap: 10px;

            }


            .date-input {

                width: 140px;

            }


            .instansi-content {

                padding: 20px;

            }

        }


        @media (max-width: 600px) {

            .instansi-header h1 {

                font-size: 21px;

            }


            .instansi-stats {

                grid-template-columns: 1fr;

            }


            .instansi-filter {

                align-items: stretch;

                flex-direction: column;

            }


            .search-wrapper,
            .search-input,
            .group-select {

                width: 100%;

            }


            .btn-add {

                width: 100%;

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


        <div class="sidebar-header">


            <div class="brand">

                <div class="brand-logo">

                    <img
                        src="<?= base_url('assets/images/logokota.png') ?>"
                        alt="logokota"
                    >

                </div>


                <div class="brand-text">

                    MPP Kota Tangerang

                </div>

            </div>


            <button
                type="button"
                class="sidebar-toggle"
                id="sidebarToggle"
                title="Buka / Tutup Sidebar"
            >

                <i class="bi bi-list"></i>

            </button>


        </div>


        <div class="welcome">

            <small>
                Welcome,
            </small>

            <strong>
                Admin MPP
            </strong>

        </div>


        <nav class="sidebar-menu">


            <div class="menu-title">
                Menu Utama
            </div>


            <!-- DASHBOARD -->

            <a
                href="<?= base_url('admin') ?>"
                class="menu-item"
            >

                <i class="bi bi-grid"></i>

                <span>
                    Dashboard
                </span>

            </a>


            <!-- LAPORAN PROSES -->

            <a
                href="<?= site_url('admin/laporan-proses-antrean') ?>"
                class="menu-item"
            >

                <i class="bi bi-hourglass-split"></i>

                <span>
                    Laporan Proses Antrean
                </span>

            </a>


            <!-- LAPORAN RINGKASAN -->

            <a
                href="<?= site_url('admin/laporan-ringkasan-antrean') ?>"
                class="menu-item"
            >

                <i class="bi bi-bar-chart"></i>

                <span>
                    Laporan Ringkasan Antrean
                </span>

            </a>


            <div class="menu-title">
                Master Data
            </div>


            <!-- INSTANSI AKTIF -->

            <a
                href="<?= site_url('admin/instansi') ?>"
                class="menu-item active"
            >

                <i class="bi bi-building"></i>

                <span>
                    Instansi
                </span>

            </a>


            <!-- PETUGAS -->

            <a
                href="<?= site_url('admin/petugas') ?>"
                class="menu-item"
            >

                <i class="bi bi-person"></i>

                <span>
                    Petugas
                </span>

            </a>


            <div class="menu-title">
                Pengaturan
            </div>


            <a
                href="<?= site_url('admin/pengaturan-kelompok') ?>"
                class="menu-item"
            >

                <i class="bi bi-people"></i>

                <span>
                    Pengaturan Kelompok
                </span>

            </a>


            <a
                href="<?= base_url('admin/pengaturan-layar') ?>"
                class="menu-item"
                onclick="return false;"
            >

                <i class="bi bi-display"></i>

                <span>
                    Pengaturan Layar
                </span>

            </a>


            <a
                href="<?= base_url('admin/pengaturan-hari-libur') ?>"
                class="menu-item"
                onclick="return false;"
            >

                <i class="bi bi-calendar-x"></i>

                <span>
                    Pengaturan Hari Libur
                </span>

            </a>


            <a
                href="<?= site_url('admin/log-user-login') ?>"
                class="menu-item"
                onclick="return false;"
            >

                <i class="bi bi-clock-history"></i>

                <span>
                    Log User Login
                </span>

            </a>


            <a
                href="<?= site_url('admin/absensi-petugas') ?>"
                class="menu-item"
                onclick="return false;"
            >

                <i class="bi bi-person-check"></i>

                <span>
                    Absensi Petugas
                </span>

            </a>


        </nav>

    </aside>



    <!-- =====================================================
         MAIN CONTENT
    ===================================================== -->

    <main class="main-content">


        <!-- TOPBAR -->

        <header class="topbar">


            <div class="topbar-left">

                Admin

                <span>
                    Monitoring layanan MPP Kota Tangerang
                </span>

            </div>


            <div class="topbar-right">


                <div class="date-wrapper">

                    <i class="bi bi-calendar3"></i>

                    <input
                        type="date"
                        id="tanggal"
                        class="date-input"
                        value="<?= date('Y-m-d') ?>"
                    >

                </div>


                <a
                    href="#"
                    class="logout-btn"
                    id="logoutButton"
                >

                    <i class="bi bi-box-arrow-right"></i>

                    <span>
                        Logout
                    </span>

                </a>


            </div>

        </header>



        <!-- =====================================================
             HALAMAN INSTANSI
        ===================================================== -->

        <section class="instansi-content">


            <!-- HEADER -->

            <div class="instansi-header">

                <h1>
                    Instansi
                </h1>

            </div>



            <?php

                $instansi = [

                    [
                        'id' => 1,
                        'grup_id' => 1,
                        'nama_instansi' => 'SAMSAT',
                        'layanan' => [
                            'Perpanjangan STNK'
                        ]
                    ],

                    [
                        'id' => 2,
                        'grup_id' => 1,
                        'nama_instansi' => 'BPJS KESEHATAN',
                        'layanan' => [
                            'Layanan BPJS Kesehatan'
                        ]
                    ],

                    [
                        'id' => 3,
                        'grup_id' => 1,
                        'nama_instansi' => 'DISNAKER',
                        'layanan' => [
                            'Pembuatan Kartu Kuning (AK-1)',
                            'Informasi dan Konsultasi Lowongan Pekerjaan',
                            'Informasi dan Konsultasi Perekrutan Karyawan',
                            'Permohonan Tanda Daftar BKK',
                            'Pengajuan Rekom ID CPMI',
                            'Pendaftaran Pelatihan Kewirausahaan',
                            'Pendaftaran Pelatihan BLK'
                        ]
                    ],

                    [
                        'id' => 4,
                        'grup_id' => 1,
                        'nama_instansi' => 'ATR BPN',
                        'layanan' => [
                            'Layanan Peningkatan Hak',
                            'Roya BPN KKPR',
                            'Izin Berusaha BPN'
                        ]
                    ],

                    [
                        'id' => 5,
                        'grup_id' => 6,
                        'nama_instansi' => 'BPOM',
                        'layanan' => [
                            'Layanan BPOM'
                        ]
                    ],

                    [
                        'id' => 6,
                        'grup_id' => 6,
                        'nama_instansi' => 'DINAS LINGKUNGAN HIDUP',
                        'layanan' => [
                            'Penilaian AMDAL',
                            'Penilaian UKL UPL'
                        ]
                    ],

                    [
                        'id' => 7,
                        'grup_id' => 6,
                        'nama_instansi' => 'PTSP 1',
                        'layanan' => [
                            'Layanan PTSP 1'
                        ]
                    ],

                    [
                        'id' => 8,
                        'grup_id' => 6,
                        'nama_instansi' => 'PTSP 2',
                        'layanan' => [
                            'Layanan PTSP 2'
                        ]
                    ],

                    [
                        'id' => 9,
                        'grup_id' => 7,
                        'nama_instansi' => 'BANK BANTEN',
                        'layanan' => [
                            'Layanan Bank Banten'
                        ]
                    ],

                    [
                        'id' => 10,
                        'grup_id' => 8,
                        'nama_instansi' => 'BANK BJB',
                        'layanan' => [
                            'Layanan Bank BJB'
                        ]
                    ],

                    [
                        'id' => 11,
                        'grup_id' => 8,
                        'nama_instansi' => 'Baznas',
                        'layanan' => [
                            'Testing Baznas',
                            'Dua',
                            'Tiga'
                        ]
                    ],

                    [
                        'id' => 12,
                        'grup_id' => 2,
                        'nama_instansi' => 'BAPENDA',
                        'layanan' => [
                            'Pendaftaran SPPT PBB-P2 Objek Pajak Baru',
                            'Permohonan SPPT-PBB-P2 Mutasi Sebagian/Seluruhnya Objek dan Subjek',
                            'Permohonan Surat Keterangan NJOP',
                            'Permohonan Salinan SPPT PBB-P2',
                            'Permohonan Keterangan Lunas PBB-P2',
                            'Permohonan Penundaan Jatuh Tempo Pembayaran PBB-P2',
                            'Permohonan Pengurangan PBB-2',
                            'Permohonan Keberatan',
                            'Permohonan Pengembalian',
                            'Permohonan Pembatalan SPPT PBB-P2',
                            'Permohonan Pembetulan SPPT SPPT PBB-P2',
                            'Permohonan Pengurangan Sanksi Administrasi SPPT PBB-P2',
                            'Permohonan Pembayaran Angsuran Pajak',
                            'Permohonan Kompensasi',
                            'Permohonan Aktivasi NOPD',
                            'Pelayanan Permohonan penelitian/Validasi SSPD BPHTB',
                            'Pelayanan Permohonan Pengurangan BPHTB',
                            'Pelayanan Permohonan Resitusi/Pengembalian Pembayaran BPHTB'
                        ]
                    ],

                    [
                        'id' => 13,
                        'grup_id' => 2,
                        'nama_instansi' => 'BPKD',
                        'layanan' => [
                            'Informasi dan Konsultasi Pajak Reklame',
                            'Informasi dan Konsultasi Pajak Air Tanah',
                            'Informasi dan Konsultasi Pajak Barang dan Jasa Tertentu (PBJT) – Restoran',
                            'Informasi dan Konsultasi Pajak Penerangan jalan umum',
                            'Informasi dan Konsultasi Pajak Hotel',
                            'Informasi dan Konsultasi Pajak Parkir',
                            'Informasi dan Konsultasi Pajak Hiburan (reflexiologi,karaoke,mandi uap, spa, permainan ketangkasan, permainan anak2,dll)'
                        ]
                    ],

                    [
                        'id' => 14,
                        'grup_id' => 2,
                        'nama_instansi' => 'BPJS TK',
                        'layanan' => [
                            'Layanan BPJS Tenaga Kerja'
                        ]
                    ],

                    [
                        'id' => 15,
                        'grup_id' => 2,
                        'nama_instansi' => 'KEJARI',
                        'layanan' => [
                            'E-Tilang & Konsultasi Hukum'
                        ]
                    ],

                    [
                        'id' => 16,
                        'grup_id' => 3,
                        'nama_instansi' => 'DUKCAPIL',
                        'layanan' => [
                            'Akta Kelahiran',
                            'Akta Kematian',
                            'Kartu Keluarga',
                            'Pindah/Datang',
                            'Cetak KTP',
                            'Perekaman E-KTP',
                            'Kartu Identitas Anak (KIA)'
                        ]
                    ],

                    [
                        'id' => 17,
                        'grup_id' => 3,
                        'nama_instansi' => 'DITJEN AHU',
                        'layanan' => [
                            'Informasi AHU',
                            'Konsultasi AHU'
                        ]
                    ],

                    [
                        'id' => 18,
                        'grup_id' => 3,
                        'nama_instansi' => 'PENGADILAN AGAMA',
                        'layanan' => [
                            'Layanan Informasi P. Agama',
                            'Layanan Pengaduan P. Agama',
                            'Pendaftaran E-Court P. Agama',
                            'Pengambilan Produk Pengadilan P. Agama'
                        ]
                    ],

                    [
                        'id' => 19,
                        'grup_id' => 3,
                        'nama_instansi' => 'PELAYANAN PBG',
                        'layanan' => [
                            'Layanan PBG'
                        ]
                    ],

                    [
                        'id' => 20,
                        'grup_id' => 4,
                        'nama_instansi' => 'DPUPR',
                        'layanan' => [
                            'Informasi Umum Tata Ruang',
                            'Informasi Pengesahan Rencana Tapak',
                            'Informasi KKPR Non-berusaha',
                            'Informasi KKPR Berusaha OSS',
                            'Informasi Surat Keterangan Peruntukan Lahan',
                            'Informasi Surat Rekomendasi Teknis Peil Banjir',
                            'Informasi Surat Rekomendasi Teknis Utilitas',
                            'Informasi Surat Rekomendasi Penurunan Trotoar / Pembongkaran Trotoar',
                            'Informasi Surat Rekomendasi Pembangunan Jembatan',
                            'Infomasi terkait Pemeliharaan Jalan',
                            'Informasi terkait Pemeliharaan Drainase',
                            'Informasi pengujian kelayakan jalan'
                        ]
                    ],

                    [
                        'id' => 21,
                        'grup_id' => 4,
                        'nama_instansi' => 'PERKIM',
                        'layanan' => [
                            'Pelayanan Informasi PBG dan SLF',
                            'Pelayanan Informasi Air Minum Air Limbah'
                        ]
                    ],

                    [
                        'id' => 22,
                        'grup_id' => 4,
                        'nama_instansi' => 'DISHUB',
                        'layanan' => [
                            'Layanan DISHUB'
                        ]
                    ],

                    [
                        'id' => 23,
                        'grup_id' => 4,
                        'nama_instansi' => 'BNN',
                        'layanan' => [
                            'Pelayanan BNN'
                        ]
                    ],

                    [
                        'id' => 24,
                        'grup_id' => 5,
                        'nama_instansi' => 'POLRES',
                        'layanan' => [
                            'Perpanjangan SIM',
                            'Pembuatan SIM Baru',
                            'Layanan SKCK'
                        ]
                    ],

                    [
                        'id' => 25,
                        'grup_id' => 5,
                        'nama_instansi' => 'PT. POS INDONESIA',
                        'layanan' => [
                            'POS'
                        ]
                    ],

                    [
                        'id' => 26,
                        'grup_id' => 5,
                        'nama_instansi' => 'TASPEN',
                        'layanan' => [
                            'Pelayanan TASPEN'
                        ]
                    ],

                    [
                        'id' => 27,
                        'grup_id' => 5,
                        'nama_instansi' => 'PLN',
                        'layanan' => [
                            'Layanan Pasang Baru dan Tambah Daya'
                        ]
                    ],

                    [
                        'id' => 28,
                        'grup_id' => 5,
                        'nama_instansi' => 'PDAM',
                        'layanan' => [
                            'Pendaftaran PDAM'
                        ]
                    ]

                ];

                $totalInstansi = count($instansi);

                $totalLayanan = 0;
                $totalSuaraAktif = $totalInstansi;

                foreach ($instansi as $item) {

                    $totalLayanan += count($item['layanan']);

                }

            ?>



            <!-- =================================================
                 STATISTIK
            ================================================== -->

            <div class="instansi-stats">


                <div class="stat-card">

                    <div class="stat-icon">

                        <i class="bi bi-building"></i>

                    </div>

                    <div class="stat-info">

                        <small>
                            Total Instansi
                        </small>

                        <strong>
                            <?= $totalInstansi ?>
                        </strong>

                    </div>

                </div>


                <div class="stat-card">

                    <div class="stat-icon">

                        <i class="bi bi-list-check"></i>

                    </div>

                    <div class="stat-info">

                        <small>
                            Total Layanan
                        </small>

                        <strong>
                            <?= $totalLayanan ?>
                        </strong>

                    </div>

                </div>


                <div class="stat-card">

                    <div class="stat-icon">

                        <i class="bi bi-volume-up"></i>

                    </div>

                    <div class="stat-info">

                        <small>
                            Suara Aktif
                        </small>

                        <strong>
                            <?= $totalSuaraAktif ?> Instansi
                        </strong>

                    </div>

                </div>


            </div>



            <!-- =================================================
                 FILTER
            ================================================== -->

            <div class="instansi-filter">


                <span class="filter-label">
                    DATA INSTANSI:
                </span>


                <div class="search-wrapper">

                    <i class="bi bi-search"></i>

                    <input
                        type="text"
                        id="searchInstansi"
                        class="search-input"
                        placeholder="Cari instansi atau layanan..."
                    >

                </div>


                <select
                    id="filterGrup"
                    class="group-select"
                >

                    <option value="all">
                        Semua Grup
                    </option>

                    <?php for ($grup = 1; $grup <= 8; $grup++): ?>

                        <option value="<?= $grup ?>">
                            Grup <?= $grup ?>
                        </option>

                    <?php endfor; ?>

                </select>


                <button
                    type="button"
                    class="btn-add"
                    data-bs-toggle="modal"
                    data-bs-target="#modalTambah"
                >

                    <i class="bi bi-plus-lg"></i>

                    Tambah Instansi

                </button>


            </div>



            <!-- =================================================
                 TABLE
            ================================================== -->

            <div class="instansi-table-card">


                <div class="instansi-table-wrapper">


                    <table
                        class="instansi-table"
                        id="instansiTable"
                    >


                        <thead>

                            <tr>

                                <th>
                                    Nama Instansi
                                </th>

                                <th>
                                    Layanan
                                </th>

                                <th>
                                    Jumlah Layanan
                                </th>

                                <th>
                                    Status
                                </th>

                                <th>
                                    Aksi
                                </th>

                            </tr>

                        </thead>


                        <tbody>


                            <?php foreach ($instansi as $item): ?>

                                <tr
                                    class="instansi-row"
                                    data-grup="<?= esc($item['grup_id']) ?>"
                                    data-search="<?= esc(
                                        $item['nama_instansi'] . ' ' .
                                        implode(' ', $item['layanan'])
                                    ) ?>"
                                >


                                    <!-- NAMA -->

                                    <td>

                                        <div class="instansi-name">


                                            <!-- SUARA NAMA INSTANSI -->

                                            <button
                                                type="button"
                                                class="sound-btn"
                                                data-speech="<?= esc($item['nama_instansi']) ?>"
                                                title="Dengarkan nama instansi"
                                            >

                                                <i class="bi bi-volume-up-fill"></i>

                                            </button>


                                            <div class="instansi-info">

                                                <div class="instansi-title">

                                                    <?= esc($item['nama_instansi']) ?>

                                                </div>


                                                <span class="instansi-group">

                                                    Grup <?= esc($item['grup_id']) ?>

                                                </span>

                                            </div>


                                        </div>

                                    </td>



                                    <!-- LAYANAN -->

                                    <td>

                                        <div class="service-list">


                                            <?php foreach ($item['layanan'] as $layanan): ?>

                                                <div class="service-item">

                                                    <i class="bi bi-check2-circle"></i>

                                                    <span>
                                                        <?= esc($layanan) ?>
                                                    </span>


                                                </div>

                                            <?php endforeach; ?>


                                        </div>

                                    </td>



                                    <!-- JUMLAH LAYANAN -->

                                    <td>

                                        <span class="service-count-badge">
                                            <?= count($item['layanan']) ?> Layanan
                                        </span>

                                    </td>


                                    <!-- STATUS -->

                                    <td>

                                        <span class="status-badge">

                                            <span class="status-dot"></span>

                                            Aktif

                                        </span>

                                    </td>



                                    <!-- AKSI -->

                                    <td class="aksi">

                                        <div class="action-buttons">


                                            <button
                                                type="button"
                                                class="btn-action"
                                                title="Edit"
                                                onclick="editInstansi('<?= esc($item['nama_instansi'], 'js') ?>')"
                                            >

                                                <i class="bi bi-pencil"></i>

                                            </button>


                                            <button
                                                type="button"
                                                class="btn-action delete"
                                                title="Hapus"
                                                onclick="deleteInstansi('<?= esc($item['nama_instansi'], 'js') ?>')"
                                            >

                                                <i class="bi bi-trash3"></i>

                                            </button>


                                        </div>

                                    </td>


                                </tr>

                            <?php endforeach; ?>



                            <!-- EMPTY -->

                            <tr
                                id="emptyRow"
                                class="empty-row"
                            >

                                <td colspan="5">

                                    <div class="empty-content">

                                        <i class="bi bi-search"></i>

                                        <strong>
                                            Data tidak ditemukan
                                        </strong>

                                        <span>
                                            Coba gunakan kata kunci atau filter grup yang berbeda.
                                        </span>

                                    </div>

                                </td>

                            </tr>


                        </tbody>


                    </table>


                </div>


            </div>


        </section>


    </main>



    <!-- =====================================================
         MODAL TAMBAH INSTANSI
    ===================================================== -->

    <div
        class="modal fade"
        id="modalTambah"
        tabindex="-1"
        aria-hidden="true"
    >

        <div class="modal-dialog modal-dialog-centered">

            <div class="modal-content">


                <div class="modal-header">

                    <h5 class="modal-title">
                        Tambah Instansi
                    </h5>

                    <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                    ></button>

                </div>


                <div class="modal-body">


                    <form id="formTambahInstansi">


                        <div class="mb-3">

                            <label class="form-label">
                                Nama Instansi
                            </label>

                            <input
                                type="text"
                                id="namaInstansi"
                                class="form-control"
                                placeholder="Masukkan nama instansi"
                                required
                            >

                        </div>


                        <div class="mb-3">

                            <label class="form-label">
                                Grup
                            </label>

                            <select
                                id="grupInstansi"
                                class="form-select"
                                required
                            >

                                <option value="">
                                    Pilih grup
                                </option>

                                <?php for ($grup = 1; $grup <= 8; $grup++): ?>

                                    <option value="<?= $grup ?>">
                                        Grup <?= $grup ?>
                                    </option>

                                <?php endfor; ?>

                            </select>

                        </div>


                        <div class="mb-3">

                            <label class="form-label">
                                Layanan
                            </label>

                            <textarea
                                id="layananInstansi"
                                class="form-control"
                                rows="4"
                                placeholder="Satu layanan per baris"
                                required
                            ></textarea>

                        </div>


                    </form>


                </div>


                <div class="modal-footer">


                    <button
                        type="button"
                        class="btn btn-modal-cancel"
                        data-bs-dismiss="modal"
                    >

                        Batal

                    </button>


                    <button
                        type="button"
                        class="btn btn-modal-save"
                        id="btnSimpanInstansi"
                    >

                        Simpan

                    </button>


                </div>


            </div>

        </div>

    </div>



    <!-- Bootstrap JS -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>



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



        /* =================================================
           LOGOUT
        ================================================= */

        const logoutButton =
            document.getElementById('logoutButton');


        logoutButton.addEventListener('click', function (event) {

            if (!window.confirm(
                'Apakah Anda yakin ingin logout?'
            )) {

                event.preventDefault();

            }

        });



        /* =================================================
           DATE TOPBAR
        ================================================= */

        const tanggal =
            document.getElementById('tanggal');


        if (tanggal) {

            tanggal.addEventListener('change', function () {

                console.log(
                    'Tanggal yang dipilih:',
                    this.value
                );

            });

        }



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

                !sidebar.contains(event.target) &&

                !toggle.contains(event.target)
            ) {

                document.body.classList.remove(
                    'mobile-sidebar-open'
                );

            }

        });



        /* =================================================
           SEARCH + FILTER
        ================================================= */

        const searchInput =
            document.getElementById('searchInstansi');


        const filterGrup =
            document.getElementById('filterGrup');


        const rows =
            document.querySelectorAll('.instansi-row');


        const emptyRow =
            document.getElementById('emptyRow');


        function filterInstansi() {


            const keyword =
                searchInput.value
                    .toLowerCase()
                    .trim();


            const grup =
                filterGrup.value;


            let visible =
                0;


            rows.forEach(function (row) {


                const searchData =
                    row.dataset.search
                        .toLowerCase();


                const rowGrup =
                    row.dataset.grup;


                const cocokSearch =
                    keyword === '' ||
                    searchData.includes(keyword);


                const cocokGrup =
                    grup === 'all' ||
                    rowGrup === grup;


                if (
                    cocokSearch &&
                    cocokGrup
                ) {

                    row.style.display = '';

                    visible++;

                } else {

                    row.style.display = 'none';

                }

            });


            if (visible === 0) {

                emptyRow.style.display =
                    'table-row';

            } else {

                emptyRow.style.display =
                    'none';

            }

        }


        searchInput.addEventListener(
            'input',
            filterInstansi
        );


        filterGrup.addEventListener(
            'change',
            filterInstansi
        );



        /* =================================================
           TEXT TO SPEECH - INSTANSI
        ================================================= */

        const soundButtons =
            document.querySelectorAll('.instansi-name .sound-btn');


        soundButtons.forEach(function (button) {


            button.addEventListener('click', function () {


                const text =
                    this.dataset.speech;


                if (!('speechSynthesis' in window)) {

                    alert(
                        'Browser kamu belum mendukung fitur suara.'
                    );

                    return;

                }


                window.speechSynthesis.cancel();


                soundButtons.forEach(function (btn) {

                    btn.classList.remove(
                        'speaking'
                    );

                });


                const speech =
                    new SpeechSynthesisUtterance(
                        text
                    );


                speech.lang =
                    'id-ID';


                speech.rate =
                    0.9;


                speech.pitch =
                    1;


                const currentButton =
                    this;


                currentButton.classList.add(
                    'speaking'
                );


                speech.onend = function () {

                    currentButton.classList.remove(
                        'speaking'
                    );

                };


                speech.onerror = function () {

                    currentButton.classList.remove(
                        'speaking'
                    );

                };


                window.speechSynthesis.speak(
                    speech
                );


            });

        });



        /* =================================================
           EDIT
        ================================================= */

        function editInstansi(nama) {

            alert(
                'Fitur edit "' +
                nama +
                '" belum terhubung ke database.'
            );

        }



        /* =================================================
           DELETE
        ================================================= */

        function deleteInstansi(nama) {


            const yakin =
                window.confirm(
                    'Apakah Anda yakin ingin menghapus instansi "' +
                    nama +
                    '"?'
                );


            if (yakin) {

                alert(
                    'Data masih berupa data sementara dan belum terhubung ke database.'
                );

            }

        }



        /* =================================================
           TAMBAH
        ================================================= */

        const btnSimpan =
            document.getElementById(
                'btnSimpanInstansi'
            );


        btnSimpan.addEventListener(
            'click',
            function () {


                const form =
                    document.getElementById(
                        'formTambahInstansi'
                    );


                if (!form.checkValidity()) {

                    form.reportValidity();

                    return;

                }


                const nama =
                    document.getElementById(
                        'namaInstansi'
                    ).value;


                alert(
                    'Instansi "' +
                    nama +
                    '" sudah diisi, tetapi belum disimpan ke database.'
                );


                form.reset();


                const modalElement =
                    document.getElementById(
                        'modalTambah'
                    );


                const modal =
                    bootstrap.Modal.getInstance(
                        modalElement
                    );


                if (modal) {

                    modal.hide();

                }

            }
        );

    </script>


</body>

</html>
