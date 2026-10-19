
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Display Antrean - MPP Kota Tangerang</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        :root {
            --navy: #102b58;
            --navy-dark: #0a1d40;
            --blue: #2454a4;
            --blue-light: #eaf1ff;
            --yellow: #ffc928;
            --background: #f3f6fc;
            --text: #20304a;
            --muted: #77849a;
            --border: #dfe6f1;
            --green: #19a974;
        }

        * {
            box-sizing: border-box;
        }

        html,
        body {
            width: 100%;
            min-height: 100%;
            margin: 0;
        }

        body {
            overflow: hidden;
            background: var(--background);
            color: var(--text);
            font-family: Arial, Helvetica, sans-serif;
        }

        /* HEADER */
        .display-header {
            height: 86px;
            padding: 10px 25px;
            display: grid;
            grid-template-columns: 1fr 2fr 1fr;
            align-items: center;
            gap: 15px;
            color: white;
            background:
                radial-gradient(circle at 15% 120%, #3769bd 0, transparent 35%),
                linear-gradient(110deg, #173a82, #244da1 55%, #163777);
            border-bottom: 4px solid var(--yellow);
        }

        .header-logos {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 12px;
            min-width: 0;
        }

        .header-logo {
            width: 43px;
            height: 48px;
            object-fit: contain;
        }

        .header-logo.wide {
            width: 80px;
        }

        .header-title {
            text-align: center;
            font-size: clamp(13px, 1.35vw, 22px);
            font-weight: 800;
            letter-spacing: 5px;
            line-height: 1.45;
        }

        .header-title span {
            display: block;
            color: var(--yellow);
        }

        /* BADGE KELOMPOK */
        .header-right {
            justify-content: flex-end;
            gap: 12px;
        }

        .group-badge {
            display: flex;
            align-items: center;
            gap: 10px;
            min-width: 155px;
            padding: 9px 13px;
            border: 1px solid rgba(255, 255, 255, .25);
            border-radius: 12px;
            background: rgba(8, 26, 65, .42);
            box-shadow: 0 4px 12px rgba(0, 0, 0, .12);
            color: #fff;
        }

        .group-badge-icon {
            width: 36px;
            height: 36px;
            flex-shrink: 0;
            display: grid;
            place-items: center;
            border-radius: 10px;
            background: var(--yellow);
            color: var(--navy);
            font-size: 18px;
        }

        .group-badge-text {
            display: flex;
            flex-direction: column;
            gap: 3px;
        }

        .group-badge-text span {
            color: #cbd9f5;
            font-size: 9px;
            font-weight: 700;
            letter-spacing: 1.2px;
        }

        .group-badge-text strong {
            color: var(--yellow);
            font-size: 14px;
            font-weight: 800;
            white-space: nowrap;
        }

        .group-badge-dot {
            width: 8px;
            height: 8px;
            margin-left: auto;
            flex-shrink: 0;
            border-radius: 50%;
            background: #36d399;
            box-shadow: 0 0 0 4px rgba(54, 211, 153, .12);
        }

        /* KONTEN UTAMA */
        .display-main {
            height: calc(100vh - 120px);
            padding: 15px;
            display: grid;
            grid-template-columns: minmax(280px, 29%) minmax(0, 1fr);
            gap: 15px;
            min-height: 0;
        }

        .left-column,
        .right-column {
            display: flex;
            flex-direction: column;
            gap: 12px;
            min-width: 0;
            min-height: 0;
        }

        /* JAM DIGITAL */
        .info-card {
            position: relative;
            overflow: hidden;
            padding: 15px 17px;
            border-radius: 13px;
            color: white;
            background: linear-gradient(130deg, #2eaff5, #24d2e6);
            box-shadow: 0 5px 15px #1b8db51c;
        }

        .info-card::after {
            content: "";
            position: absolute;
            width: 125px;
            height: 125px;
            right: -35px;
            bottom: -70px;
            border: 18px solid #ffffff1b;
            border-radius: 50%;
        }

        .city-label {
            font-size: 11px;
            opacity: .95;
        }

        .digital-clock {
            margin: 3px 0;
            font-size: clamp(23px, 2.1vw, 32px);
            font-weight: 800;
            line-height: 1.15;
            font-variant-numeric: tabular-nums;
        }

        .digital-date {
            font-size: 11px;
        }

        /* STATUS DISPLAY */
        .group-card {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 10px;
            padding: 12px 14px;
            border: 1px solid #d9e3f3;
            border-radius: 12px;
            background: white;
            box-shadow: 0 4px 12px #102b5809;
        }

        .group-card-left {
            display: flex;
            align-items: center;
            gap: 11px;
            min-width: 0;
        }

        .group-icon {
            width: 42px;
            height: 42px;
            flex-shrink: 0;
            display: grid;
            place-items: center;
            border-radius: 11px;
            background: var(--blue-light);
            color: var(--blue);
            font-size: 20px;
        }

        .group-caption {
            color: var(--muted);
            font-size: 10px;
            margin-bottom: 4px;
        }

        .group-name {
            color: var(--navy);
            font-size: 14px;
            font-weight: 800;
        }

        .group-value {
            display: inline-flex;
            align-items: center;
            gap: 5px;
            padding: 7px 9px;
            border-radius: 7px;
            background: #fff5d1;
            color: #745300;
            font-size: 11px;
            font-weight: 800;
            white-space: nowrap;
        }

        /* KARTU INSTANSI */
        .agency-list {
            flex: 1;
            display: grid;
            grid-template-rows: repeat(4, minmax(0, 1fr));
            gap: 9px;
            min-height: 0;
        }

        .agency-card {
            display: grid;
            grid-template-columns: 58px minmax(0, 1fr) auto;
            align-items: center;
            gap: 12px;
            padding: 10px 13px;
            border: 1px solid var(--border);
            border-radius: 12px;
            background: white;
            box-shadow: 0 3px 10px #102b5808;
        }

        .agency-logo-box {
            width: 54px;
            height: 54px;
            display: grid;
            place-items: center;
            padding: 5px;
            border-radius: 10px;
            background: #f3f6fc;
        }

        .agency-logo-box img {
            max-width: 100%;
            max-height: 100%;
            object-fit: contain;
        }

        .agency-placeholder {
            font-size: 23px;
            color: var(--blue);
        }

        .agency-name {
            margin-bottom: 5px;
            color: var(--muted);
            font-size: 10px;
        }

        .agency-number {
            color: var(--navy);
            font-size: clamp(20px, 2vw, 29px);
            font-weight: 800;
            line-height: 1;
        }

        .live-indicator {
            width: 10px;
            height: 10px;
            flex-shrink: 0;
            border-radius: 50%;
            background: var(--green);
            box-shadow: 0 0 0 4px #19a97418;
        }

        /* DAFTAR ANTREAN */
        .queue-panel {
            flex: 1;
            display: flex;
            flex-direction: column;
            min-height: 0;
            overflow: hidden;
            border: 1px solid #bdcdee;
            border-radius: 14px;
            background: white;
            box-shadow: 0 5px 18px #102b5809;
        }

        .queue-heading {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 12px;
            padding: 15px 17px;
            border-bottom: 1px solid var(--border);
        }

        .queue-title {
            display: flex;
            align-items: center;
            gap: 9px;
            color: var(--navy);
            font-size: 15px;
            font-weight: 800;
        }

        .queue-title-icon {
            width: 34px;
            height: 34px;
            display: grid;
            place-items: center;
            border-radius: 9px;
            background: #fff4cb;
            color: #8c6800;
            font-size: 17px;
        }

        .queue-subtitle {
            margin-top: 3px;
            color: var(--muted);
            font-size: 10px;
            font-weight: normal;
        }

        .queue-count {
            padding: 7px 11px;
            border-radius: 8px;
            background: #e9f1ff;
            color: var(--blue);
            font-size: 11px;
            font-weight: 800;
            white-space: nowrap;
        }

        .queue-columns {
            flex: 1;
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 12px;
            padding: 12px;
            min-height: 0;
            background: #f7f9fd;
        }

        .queue-table-wrap {
            min-width: 0;
            overflow: hidden;
            border: 1px solid #dfe7f5;
            border-radius: 9px;
            background: white;
        }

        .queue-table {
            width: 100%;
            border-collapse: collapse;
            table-layout: fixed;
        }

        .queue-table thead {
            background: var(--navy);
            color: white;
        }

        .queue-table th {
            padding: 12px 6px;
            color: white;
            font-size: 11px;
            font-weight: 700;
            text-align: center;
        }

        .queue-table td {
            padding: 11px 6px;
            border-bottom: 1px solid #edf1f7;
            color: #33435e;
            font-size: 11px;
            text-align: center;
            overflow-wrap: anywhere;
        }

        .queue-table tbody tr:nth-child(even) {
            background: #f2f6fd;
        }

        .queue-table tbody tr:last-child td {
            border-bottom: none;
        }

        .queue-number {
            color: var(--blue);
            font-weight: 800;
        }

        .queue-empty {
            padding: 25px 10px !important;
            color: var(--muted) !important;
            text-align: center;
        }

        /* RINGKASAN ANTREAN */
        .summary-panel {
            flex-shrink: 0;
            padding: 14px;
            border: 1px solid #f0dfbd;
            border-radius: 12px;
            background: #fff7e9;
        }

        .summary-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 8px;
            margin-bottom: 10px;
        }

        .summary-title {
            color: #66491b;
            font-size: 12px;
            font-weight: 800;
        }

        .summary-updated {
            color: #967b4f;
            font-size: 10px;
        }

        .summary-grid {
            display: grid;
            grid-template-columns: repeat(4, minmax(0, 1fr));
            gap: 9px;
        }

        .summary-item {
            overflow: hidden;
            border: 1px solid #e7d8b7;
            border-radius: 9px;
            background: white;
            text-align: center;
        }

        .summary-agency {
            padding: 9px 4px;
            background: #f4c735;
            color: #483600;
            font-size: 10px;
            font-weight: 800;
        }

        .summary-data {
            display: grid;
            grid-template-columns: 1fr 1fr;
        }

        .summary-cell {
            padding: 8px 3px;
        }

        .summary-cell + .summary-cell {
            border-left: 1px solid #edf0f4;
        }

        .summary-cell-label {
            margin-bottom: 4px;
            color: var(--muted);
            font-size: 9px;
        }

        .summary-cell-value {
            color: var(--navy);
            font-size: 19px;
            font-weight: 800;
        }

        /* FOOTER */
        .display-footer {
            height: 34px;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 0 15px;
            overflow: hidden;
            background: var(--yellow);
            color: #382900;
            font-size: 11px;
            font-weight: 800;
            text-align: center;
            white-space: nowrap;
        }

        .footer-icon {
            margin-right: 8px;
        }

        /* RESPONSIVE */
        @media (max-width: 1000px) {
            body {
                overflow: auto;
            }

            .display-header {
                grid-template-columns: auto 1fr auto;
                padding: 10px;
            }

            .header-logo.wide {
                display: none;
            }

            .header-title {
                letter-spacing: 2px;
            }

            .display-main {
                height: auto;
                min-height: calc(100vh - 120px);
                grid-template-columns: 1fr;
            }

            .left-column {
                display: grid;
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }

            .agency-list {
                grid-column: 1 / -1;
                grid-template-columns: repeat(2, minmax(0, 1fr));
                grid-template-rows: none;
            }

            .agency-card {
                min-height: 90px;
            }

            .queue-panel {
                min-height: 450px;
            }

            .display-footer {
                min-height: 34px;
                height: auto;
                padding: 10px;
                white-space: normal;
            }
        }

        @media (max-width: 600px) {
            .display-header {
                height: 75px;
                grid-template-columns: auto 1fr;
            }

            .header-logos {
                gap: 4px;
            }

            .header-logo {
                width: 31px;
                height: 38px;
            }

            .header-title {
                font-size: 12px;
                letter-spacing: 1px;
            }

            .group-badge {
                min-width: 0;
                padding: 5px;
                gap: 5px;
            }

            .group-badge-icon {
                width: 28px;
                height: 28px;
                font-size: 14px;
            }

            .group-badge-text span {
                font-size: 7px;
            }

            .group-badge-text strong {
                font-size: 11px;
            }

            .group-badge-dot {
                display: none;
            }

            .display-main {
                padding: 9px;
                gap: 10px;
            }

            .left-column {
                display: flex;
            }

            .queue-columns {
                grid-template-columns: 1fr;
            }

            .queue-panel {
                min-height: 700px;
            }

            .summary-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }

            .agency-card {
                grid-template-columns: 44px minmax(0, 1fr) auto;
                padding: 8px;
                gap: 7px;
            }

            .agency-logo-box {
                width: 42px;
                height: 42px;
            }

            .display-footer {
                font-size: 9px;
            }
        }
    </style>
</head>

<body>

<?php
    $daftarAntrean = isset($antrean) && is_array($antrean)
        ? $antrean
        : [];

    $jumlahKiri = (int) ceil(count($daftarAntrean) / 2);

    $antreanKiri = array_slice($daftarAntrean, 0, $jumlahKiri);
    $antreanKanan = array_slice($daftarAntrean, $jumlahKiri);

    $totalAntrean = count($daftarAntrean);

    $kelompokAktif = isset($kelompok) && $kelompok !== ''
        ? $kelompok
        : 'Kelompok 1';

    $daftarInstansi = isset($instansi) && is_array($instansi)
        ? $instansi
        : [];
?>

<header class="display-header">

    <div class="header-logos">
        <img
            class="header-logo"
            src="<?= base_url('assets/images/logokota.png') ?>"
            alt="Logo Kota Tangerang"
        >

        <img
            class="header-logo"
            src="<?= base_url('assets/images/mpp2.png') ?>"
            alt="Logo MPP"
        >
    </div>

    <div class="header-title">
        MAL PELAYANAN PUBLIK
        <span>KOTA TANGERANG</span>
    </div>

    <div class="header-logos header-right">
        <div class="group-badge">
            <div class="group-badge-icon">
                <i class="bi bi-people-fill"></i>
            </div>

            <div class="group-badge-text">
                <span>DISPLAY AKTIF</span>
                <strong><?= esc($kelompokAktif) ?></strong>
            </div>

            <span class="group-badge-dot"></span>
        </div>
    </div>

</header>

<main class="display-main">

    <!-- KOLOM KIRI -->
    <section class="left-column">

        <div class="info-card">
            <div class="city-label">
                <i class="bi bi-geo-alt-fill"></i>
                Kota Tangerang
            </div>

            <div class="digital-clock" id="digitalClock">
                00:00:00 WIB
            </div>

            <div class="digital-date" id="digitalDate">
                Memuat tanggal...
            </div>
        </div>

        <div class="group-card">
            <div class="group-card-left">
                <div class="group-icon">
                    <i class="bi bi-display"></i>
                </div>

                <div>
                    <div class="group-caption">
                        LAYAR DISPLAY AKTIF
                    </div>

                    <div class="group-name">
                        Informasi Antrean
                    </div>
                </div>
            </div>

            <span class="group-value">
                <i class="bi bi-broadcast"></i>
                LIVE
            </span>
        </div>

        <div class="agency-list">
            <?php foreach ($daftarInstansi as $item): ?>
                <?php
                    $namaItem = $item['nama'] ?? 'Instansi';
                    $logoItem = $item['logo'] ?? '';
                    $nomorItem = $item['nomor'] ?? '-';
                    $statusItem = $item['status'] ?? 'Menunggu';

                    $logoPath = FCPATH . 'assets/images/' . $logoItem;

                    $logoExists = $logoItem !== ''
                        && is_file($logoPath);
                ?>

                <article class="agency-card">
                    <div class="agency-logo-box">
                        <?php if ($logoExists): ?>
                            <img
                                src="<?= base_url('assets/images/' . $logoItem) ?>"
                                alt="<?= esc($namaItem) ?>"
                            >
                        <?php else: ?>
                            <i class="bi bi-building agency-placeholder"></i>
                        <?php endif; ?>
                    </div>

                    <div>
                        <div class="agency-name">
                            <?= esc($namaItem) ?>
                        </div>

                        <div class="agency-number">
                            <?= esc($nomorItem) ?>
                        </div>
                    </div>

                    <span
                        class="live-indicator"
                        title="<?= esc($statusItem) ?>"
                    ></span>
                </article>
            <?php endforeach; ?>
        </div>

    </section>

    <!-- KOLOM KANAN -->
    <section class="right-column">

        <section class="queue-panel">
            <div class="queue-heading">
                <div class="queue-title">
                    <div class="queue-title-icon">
                        <i class="bi bi-list-ol"></i>
                    </div>

                    <div>
                        Daftar Antrean

                        <div class="queue-subtitle">
                            Informasi antrean layanan hari ini
                        </div>
                    </div>
                </div>

                <div class="queue-count">
                    <i class="bi bi-people-fill"></i>
                    <?= $totalAntrean ?> antrean
                </div>
            </div>

            <div class="queue-columns">

                <!-- TABEL KIRI -->
                <div class="queue-table-wrap">
                    <table class="queue-table">
                        <thead>
                            <tr>
                                <th style="width: 29%;">Nomor</th>
                                <th style="width: 25%;">Jam</th>
                                <th>Instansi / Loket</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php if (!empty($antreanKiri)): ?>
                                <?php foreach ($antreanKiri as $row): ?>
                                    <tr>
                                        <td class="queue-number">
                                            <?= esc($row['nomor'] ?? '-') ?>
                                        </td>

                                        <td>
                                            <?= esc($row['jam'] ?? '-') ?>
                                        </td>

                                        <td>
                                            <?= esc($row['loket'] ?? '-') ?>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <tr>
                                    <td colspan="3" class="queue-empty">
                                        Belum ada antrean
                                    </td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>

                <!-- TABEL KANAN -->
                <div class="queue-table-wrap">
                    <table class="queue-table">
                        <thead>
                            <tr>
                                <th style="width: 29%;">Nomor</th>
                                <th style="width: 25%;">Jam</th>
                                <th>Instansi / Loket</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php if (!empty($antreanKanan)): ?>
                                <?php foreach ($antreanKanan as $row): ?>
                                    <tr>
                                        <td class="queue-number">
                                            <?= esc($row['nomor'] ?? '-') ?>
                                        </td>

                                        <td>
                                            <?= esc($row['jam'] ?? '-') ?>
                                        </td>

                                        <td>
                                            <?= esc($row['loket'] ?? '-') ?>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <tr>
                                    <td colspan="3" class="queue-empty">
                                        Tidak ada antrean tambahan
                                    </td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>

            </div>
        </section>

        <!-- RINGKASAN ANTREAN -->
        <section class="summary-panel">
            <div class="summary-header">
                <div class="summary-title">
                    <i class="bi bi-bar-chart-fill"></i>
                    Ringkasan Antrean Instansi
                </div>

                <div class="summary-updated">
                    <i class="bi bi-clock"></i>
                    Waktu berjalan
                </div>
            </div>

            <div class="summary-grid">
                <?php foreach ($daftarInstansi as $item): ?>
                    <?php
                        $namaInstansi = strtoupper($item['nama'] ?? '');

                        $jumlahMenunggu = 0;
                        $jumlahTotal = 0;

                        foreach ($daftarAntrean as $row) {
                            $namaLoket = strtoupper($row['loket'] ?? '');

                            if ($namaLoket === $namaInstansi) {
                                $jumlahMenunggu++;
                                $jumlahTotal++;
                            }
                        }
                    ?>

                    <div class="summary-item">
                        <div class="summary-agency">
                            <?= esc($item['nama'] ?? 'Instansi') ?>
                        </div>

                        <div class="summary-data">
                            <div class="summary-cell">
                                <div class="summary-cell-label">
                                    Menunggu
                                </div>

                                <div class="summary-cell-value">
                                    <?= $jumlahMenunggu ?>
                                </div>
                            </div>

                            <div class="summary-cell">
                                <div class="summary-cell-label">
                                    Total
                                </div>

                                <div class="summary-cell-value">
                                    <?= $jumlahTotal ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>

    </section>

</main>

<footer class="display-footer">
    <i class="bi bi-megaphone-fill footer-icon"></i>

    SELAMAT DATANG DI MAL PELAYANAN PUBLIK KOTA TANGERANG
    &nbsp; | &nbsp;
    PELAYANAN AKTIF PUKUL 08.00–15.00 WIB
    &nbsp; | &nbsp;
    MOHON MENUNGGU NOMOR ANTREAN ANDA DIPANGGIL
</footer>

<script>
    function updateClock() {
        const now = new Date();

        const timeOptions = {
            timeZone: 'Asia/Jakarta',
            hour: '2-digit',
            minute: '2-digit',
            second: '2-digit',
            hour12: false
        };

        const dateOptions = {
            timeZone: 'Asia/Jakarta',
            weekday: 'long',
            day: '2-digit',
            month: 'long',
            year: 'numeric'
        };

        const timeText = new Intl.DateTimeFormat(
            'id-ID',
            timeOptions
        ).format(now);

        const dateText = new Intl.DateTimeFormat(
            'id-ID',
            dateOptions
        ).format(now);

        document.getElementById('digitalClock').textContent =
            timeText + ' WIB';

        document.getElementById('digitalDate').textContent =
            dateText;
    }

    updateClock();
    setInterval(updateClock, 1000);
</script>

</body>
</html>
