
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Display Antrean - MPP Kota Tangerang</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

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
            width: 56px;
            height: 60px;
            object-fit: contain;
        }

        .header-logo.wide {
            width: 96px;
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
            gap: 10px;
        }

        .header-actions {
            display: flex;
            align-items: center;
            justify-content: flex-end;
            gap: 10px;
            min-width: 0;
        }

        .logout-button {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 7px;
            padding: 10px 13px;
            border: 1px solid rgba(255, 255, 255, .28);
            border-radius: 10px;
            background: var(--yellow);
            color: var(--navy-dark);
            font: inherit;
            font-size: 12px;
            font-weight: 800;
            text-decoration: none;
            white-space: nowrap;
            transition: transform .2s ease, background .2s ease;
        }

        .logout-button:hover {
            background: #ffdb61;
            color: var(--navy-dark);
            transform: translateY(-1px);
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
            padding: 14px;
            display: grid;
            grid-template-columns: minmax(265px, 29%) minmax(0, 1fr);
            gap: 14px;
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

        /* KOTAK STATUS DISPLAY AKTIF — ringkas dan sederhana */
        .group-card {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 10px;
            min-height: 54px;
            padding: 9px 12px;
            border: 1px solid var(--border);
            border-left: 3px solid var(--yellow);
            border-radius: 7px;
            background: #ffffff;
            box-shadow: none;
        }

        .group-card-left {
            display: flex;
            align-items: center;
            min-width: 0;
        }

        .group-caption {
            color: var(--muted);
            font-size: 9px;
            font-weight: 700;
            letter-spacing: .5px;
            line-height: 1.2;
            margin-bottom: 4px;
        }

        .group-name {
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            gap: 6px;
            color: var(--text);
            font-size: 12px;
            font-weight: 600;
            line-height: 1.2;
        }

        .group-number {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 3px 7px;
            border-radius: 4px;
            background: var(--yellow-soft);
            color: var(--navy);
            font-size: 11px;
            font-weight: 700;
            line-height: 1.2;
        }

        .group-value {
            display: inline-flex;
            align-items: center;
            gap: 5px;
            color: var(--green);
            font-size: 9px;
            font-weight: 700;
            white-space: nowrap;
        }

        .group-value::before {
            content: "";
            width: 6px;
            height: 6px;
            border-radius: 50%;
            background: var(--green);
        }

        /* KARTU INSTANSI: NOMOR ANTREAN YANG SEDANG DIPANGGIL */
        /* AREA KARTU NOMOR PANGGILAN: lebih besar dan scroll otomatis */
        .agency-list {
            flex: 1;
            min-height: 0;
            overflow: hidden;
            position: relative;
            padding: 2px 3px 2px 0;
            border-radius: 14px;
            mask-image: linear-gradient(to bottom, transparent 0, #000 3%, #000 97%, transparent 100%);
        }

        .agency-track {
            display: flex;
            flex-direction: column;
            gap: 12px;
            will-change: transform;
            animation: agencyScroll 42s linear infinite;
        }

        .agency-list:hover .agency-track {
            animation-play-state: paused;
        }

        .agency-list.is-static .agency-track {
            animation: none;
        }

        @keyframes agencyScroll {
            from { transform: translateY(0); }
            to { transform: translateY(-50%); }
        }

        .agency-card {
            position: relative;
            display: grid;
            grid-template-columns: 84px minmax(0, 1fr) 12px;
            align-items: center;
            gap: 16px;
            min-height: 136px;
            padding: 17px 18px;
            overflow: hidden;
            border: 1px solid var(--border);
            border-left: 4px solid #d7e0ee;
            border-radius: 13px;
            background: white;
            box-shadow: 0 3px 10px #102b5808;
        }

        .agency-card.is-active {
            border-color: #bfe8d7;
            border-left-color: var(--green);
            background: linear-gradient(110deg, #f0fff8 0%, #ffffff 70%);
        }

        .agency-card.is-waiting {
            border-left-color: #f0ad21;
        }

        .agency-info {
            min-width: 0;
        }

        .agency-topline {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 7px;
            margin-bottom: 6px;
        }

        .agency-name {
            min-width: 0;
            margin: 0;
            color: var(--muted);
            font-size: 12px;
            font-weight: 800;
            letter-spacing: .35px;
            overflow-wrap: anywhere;
        }

        .agency-status {
            display: inline-flex;
            align-items: center;
            gap: 4px;
            flex-shrink: 0;
            padding: 4px 6px;
            border-radius: 20px;
            background: #edf1f6;
            color: #68758a;
            font-size: 10px;
            font-weight: 800;
            white-space: nowrap;
        }

        .agency-status.active {
            background: #d9f8e9;
            color: #08784d;
        }

        .agency-status.waiting {
            background: #fff2cc;
            color: #8a6100;
        }

        .agency-call-label {
            margin-bottom: 2px;
            color: #718096;
            font-size: 10px;
            font-weight: 700;
            letter-spacing: .8px;
        }

        .agency-number {
            color: var(--navy);
            font-size: clamp(28px, 2.5vw, 38px);
            font-weight: 900;
            line-height: 1.05;
            letter-spacing: .5px;
            overflow-wrap: anywhere;
        }

        .agency-card.is-active .agency-number {
            color: #08784d;
        }

        .agency-card.is-active .agency-status.active::before {
            content: "";
            width: 6px;
            height: 6px;
            border-radius: 50%;
            background: #19a974;
            animation: statusPulse 1.8s ease-in-out infinite;
        }

        @keyframes statusPulse {
            0%, 100% { opacity: 1; transform: scale(1); }
            50% { opacity: .45; transform: scale(.8); }
        }

        .agency-logo-box {
            width: 84px;
            height: 84px;
            display: grid;
            place-items: center;
            padding: 5px;
            border-radius: 13px;
            background: #f3f6fc;
            border: 1px solid #e3eaf5;
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

        .live-indicator {
            width: 12px;
            height: 12px;
            flex-shrink: 0;
            border-radius: 50%;
            background: var(--green);
            box-shadow: 0 0 0 4px #19a97418;
        }

        .live-indicator.waiting {
            background: #f0ad21;
            box-shadow: 0 0 0 4px #f0ad211f;
        }

        .live-indicator.inactive {
            background: #a5afbf;
            box-shadow: 0 0 0 4px #a5afbf24;
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

        .queue-subtitle {
            margin-top: 3px;
            color: var(--muted);
            font-size: 10px;
            font-weight: normal;
        }

        .queue-count {
            display: flex;
            align-items: baseline;
            gap: 5px;
            padding: 0 0 0 12px;
            border-left: 2px solid var(--yellow);
            color: var(--muted);
            font-size: 11px;
            font-weight: 500;
            white-space: nowrap;
        }

        .queue-count strong {
            color: var(--navy);
            font-size: 17px;
            font-weight: 700;
            line-height: 1;
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

        /* RESPONSIVE */
        @media (max-width: 1000px) {
            body {
                overflow: auto;
            }

            .display-header {
                grid-template-columns: auto 1fr auto;
                padding: 10px;
                gap: 8px;
            }

            .header-actions {
                gap: 6px;
            }

            .group-badge {
                min-width: 0;
                padding: 7px;
                gap: 6px;
            }

            .logout-button {
                padding: 9px;
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
                min-height: 300px;
                max-height: 430px;
            }

            .agency-card {
                min-height: 136px;
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
                height: auto;
                min-height: 75px;
                grid-template-columns: auto 1fr;
                grid-template-rows: auto auto;
                padding: 8px;
            }

            .header-title {
                grid-column: 2;
                grid-row: 1;
            }

            .header-actions {
                grid-column: 1 / -1;
                grid-row: 2;
                justify-content: center;
            }

            .group-badge {
                padding: 5px 8px;
            }

            .logout-button {
                padding: 7px 10px;
                font-size: 11px;
            }

            .header-logos {
                gap: 4px;
            }

            .header-logo {
                width: 38px;
                height: 44px;
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
                grid-template-columns: 62px minmax(0, 1fr) 10px;
                min-height: 112px;
                padding: 11px;
                gap: 10px;
            }

            .agency-logo-box {
                width: 62px;
                height: 62px;
            }

            .agency-number {
                font-size: clamp(25px, 7vw, 32px);
            }

            .agency-name {
                font-size: 11px;
            }

            .agency-status {
                font-size: 8px;
            }

            .display-footer {
                font-size: 9px;
            }
        }


        /* REFINEMENT DISPLAY: clean, besar, dan mudah dibaca dari jauh */
        :root {
            --navy: #122b52;
            --navy-dark: #0b1d39;
            --blue: #2860b7;
            --blue-light: #edf3ff;
            --yellow: #f5c842;
            --background: #eef2f8;
            --text: #1b2c46;
            --muted: #748198;
            --border: #e0e7f0;
            --green: #159766;
        }

        .display-header {
            grid-template-columns: minmax(150px, 1fr) minmax(280px, 2fr) minmax(260px, 1fr);
            background: linear-gradient(115deg, #10264b 0%, #1c4485 58%, #163365 100%);
            box-shadow: 0 4px 16px rgba(14, 35, 70, .15);
        }

        .header-title {
            letter-spacing: 3px;
            line-height: 1.35;
        }

        .agency-list {
            padding: 3px 5px 3px 1px;
            border-radius: 16px;
            mask-image: linear-gradient(to bottom, transparent 0, #000 2%, #000 98%, transparent 100%);
        }

        .agency-track {
            gap: 14px;
            padding: 4px 3px 10px 1px;
            animation-duration: 34s;
        }

        .agency-card {
            grid-template-columns: 86px minmax(0, 1fr);
            gap: 17px;
            min-height: 148px;
            padding: 18px 20px;
            border: 1px solid #e0e7f0;
            border-left: 5px solid #d4dce8;
            border-radius: 17px;
            background: #fff;
            box-shadow: 0 5px 15px rgba(28, 51, 86, .055);
            transition: box-shadow .2s ease, transform .2s ease;
        }

        .agency-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 9px 22px rgba(28, 51, 86, .10);
        }

        .agency-card.is-active {
            border-color: #b9e7d2;
            border-left-color: #159766;
            background: linear-gradient(105deg, #f0fff7 0%, #ffffff 76%);
        }

        .agency-card.is-waiting {
            border-left-color: #edb53c;
        }

        .agency-logo-box {
            width: 86px;
            height: 86px;
            padding: 10px;
            border-radius: 15px;
            background: #f4f7fc;
            border: 1px solid #e8edf5;
        }

        .agency-info { min-width: 0; }

        .agency-topline {
            align-items: flex-start;
            margin-bottom: 12px;
        }

        .agency-name {
            color: #4a5b75;
            font-size: 12px;
            line-height: 1.35;
            letter-spacing: .7px;
        }

        .agency-status {
            padding: 6px 9px;
            font-size: 10px;
            border-radius: 999px;
        }

        .agency-status.active { background: #dff8eb; color: #08784d; }
        .agency-status.waiting { background: #fff4d6; color: #8a6100; }

        .agency-call-label {
            margin-bottom: 5px;
            color: #7b879a;
            font-size: 9px;
            letter-spacing: 1.1px;
        }

        .agency-number {
            font-size: clamp(32px, 2.6vw, 43px);
            line-height: 1;
            letter-spacing: .8px;
            font-variant-numeric: tabular-nums;
        }

        .agency-card.is-active .agency-number {
            color: #08784d;
        }

        /* JAM DAN TANGGAL: panel waktu dengan gaya berbeda dari kartu antrean */
        .info-card {
            position: relative;
            overflow: hidden;
            padding: 15px 17px 14px;
            border: 0;
            border-radius: 3px;
            color: #fff;
            background: var(--navy-dark);
            box-shadow: inset 0 -4px 0 var(--yellow);
        }

        .info-card::after {
            content: none;
        }

        .city-label {
            display: flex;
            align-items: center;
            gap: 6px;
            margin-bottom: 7px;
            color: #d6e0f1;
            font-size: 10px;
            font-weight: 700;
            letter-spacing: 1.3px;
            text-transform: uppercase;
            opacity: 1;
        }

        .city-label svg {
            width: 14px;
            height: 14px;
            flex: 0 0 14px;
            color: var(--yellow);
        }

        .digital-clock {
            margin: 0 0 7px;
            color: #fff;
            font-size: clamp(27px, 2.3vw, 35px);
            font-weight: 600;
            line-height: 1.1;
            letter-spacing: 1px;
            font-variant-numeric: tabular-nums;
        }

        .digital-date {
            padding-top: 7px;
            border-top: 1px solid rgba(255,255,255,.18);
            color: #d6e0f1;
            font-size: 11px;
            line-height: 1.4;
        }


        .queue-panel {
            border-color: #dfe6f0;
            border-radius: 17px;
            box-shadow: 0 6px 20px rgba(16, 43, 88, .055);
        }

        .queue-heading { padding: 17px 19px; }
        .queue-table th { padding: 14px 7px; }
        .queue-table td { padding: 13px 7px; }
        .summary-panel { border-radius: 15px; }

        @media (max-width: 1000px) {
            .display-header {
                grid-template-columns: auto minmax(0, 1fr) auto;
            }
            .agency-card { min-height: 140px; }
        }

        @media (max-width: 600px) {
            .display-header { grid-template-columns: auto minmax(0, 1fr); }
            .agency-card {
                grid-template-columns: 64px minmax(0, 1fr);
                min-height: 120px;
                padding: 13px;
                gap: 12px;
            }
            .agency-logo-box { width: 64px; height: 64px; padding: 7px; }
            .agency-topline { margin-bottom: 8px; }
            .agency-number { font-size: clamp(27px, 8vw, 35px); }
            .agency-status { font-size: 8px; padding: 5px 7px; }
            .agency-name { font-size: 10px; }
        }


        /* Kartu nomor antrean: sederhana dan mudah dibaca dari jauh */
        .agency-card {
            grid-template-columns: 68px minmax(0, 1fr);
            min-height: 116px;
            padding: 14px 17px;
            gap: 15px;
            border: 1px solid #dfe4eb;
            border-left: 4px solid #cbd3df;
            border-radius: 9px;
            background: #fff;
            box-shadow: 0 2px 5px rgba(16, 35, 63, .04);
            transition: none;
        }
        .agency-card:hover {
            transform: none;
            box-shadow: 0 2px 5px rgba(16, 35, 63, .04);
        }
        .agency-card.is-active,
        .agency-card.has-queue {
            border-color: #b9d9ca;
            border-left-color: #198754;
            background: #f7fcf8;
        }
        .agency-card.is-waiting { border-left-color: #d5dbe4; }
        .agency-logo-box {
            width: 68px;
            height: 68px;
            padding: 8px;
            border-radius: 7px;
            background: #f7f8fa;
            border: 1px solid #e7e9ed;
        }
        .agency-topline { margin-bottom: 7px; }
        .agency-name {
            color: #26364b;
            font-size: 13px;
            font-weight: 700;
            line-height: 1.35;
            letter-spacing: 0;
        }
        .agency-call-label {
            margin-bottom: 3px;
            color: #6b7280;
            font-size: 12px;
            font-weight: 400;
            letter-spacing: 0;
        }
        .agency-number {
            color: #10233f;
            font-size: clamp(29px, 2.4vw, 38px);
            font-weight: 800;
            line-height: 1.05;
            letter-spacing: .3px;
            font-variant-numeric: tabular-nums;
        }
        .agency-card.is-active .agency-number { color: #198754; }
        .agency-status { display: none !important; }
        @media (max-width: 600px) {
            .agency-card {
                grid-template-columns: 56px minmax(0, 1fr);
                min-height: 100px;
                padding: 12px;
                gap: 11px;
            }
            .agency-logo-box { width: 56px; height: 56px; padding: 6px; }
            .agency-name { font-size: 12px; }
            .agency-call-label { font-size: 11px; }
            .agency-number { font-size: clamp(27px, 7vw, 34px); }
        }

    
        /* Samakan warna nomor antrean untuk semua instansi yang memiliki nomor */
        .agency-card.is-active .agency-number,
        .agency-card.has-queue .agency-number {
            color: #198754 !important;
        }

        .agency-card.is-active,
        .agency-card.has-queue {
            border-color: #b9d9ca;
            border-left-color: #198754;
            background: #f7fcf8;
        }

        /* Samakan lebar kartu instansi dengan kotak LAYAR DISPLAY AKTIF */
        .agency-list {
            padding-left: 0 !important;
            padding-right: 0 !important;
        }
        .agency-track {
            padding-left: 0 !important;
            padding-right: 0 !important;
            box-sizing: border-box;
        }
        .agency-card {
            width: 100%;
            max-width: 100%;
            box-sizing: border-box;
        }

</style>
</head>

<body>

<?php
    $daftarAntrean = isset($antrean) && is_array($antrean)
        ? $antrean
        : [];

    // Bagi antrean menjadi dua tabel tanpa menghilangkan data.
    $jumlahKiri = (int) ceil(count($daftarAntrean) / 2);
    $antreanKiri = array_slice($daftarAntrean, 0, $jumlahKiri);
    $antreanKanan = array_slice($daftarAntrean, $jumlahKiri);
    $totalAntrean = count($daftarAntrean);

    // Samakan format nama agar perhitungan tetap cocok meskipun ada spasi/
    // perbedaan huruf besar-kecil pada nama instansi dan nama loket.
    $normalisasiNama = static function ($nama): string {
        $nama = strtoupper(trim((string) $nama));
        $nama = preg_replace('/\s+/', ' ', $nama);
        return $nama ?? '';
    };

    $kelompokAktif = isset($kelompok) && trim((string) $kelompok) !== ''
        ? trim((string) $kelompok)
        : 'Kelompok 2';

    // Badge di sebelah tombol Logout menggunakan istilah "Kelompok".
    $kelompokAktif = preg_replace('/^(kelompok|grup)\s*/i', 'Kelompok ', $kelompokAktif);
    if (preg_match('/^Kelompok\s*$/i', $kelompokAktif)) {
        $kelompokAktif = 'Kelompok 2';
    }

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

    <div class="header-actions">
        <div class="group-badge">
<div class="group-badge-text">
                <span>DISPLAY AKTIF</span>
                <strong><?= esc($kelompokAktif) ?></strong>
            </div>

            <span class="group-badge-dot"></span>
        </div>

        <form action="<?= site_url('logout') ?>" method="post" onsubmit="return confirm('Yakin ingin keluar dari akun?')">
            <?= csrf_field() ?>
            <button type="submit" class="logout-button" aria-label="Logout">
<span>Logout</span>
            </button>
        </form>
    </div>

</header>

<main class="display-main">

    <!-- KOLOM KIRI -->
    <section class="left-column">

        <div class="info-card">
            <div class="city-label">
                <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                    <path d="M20 10.2c0 5.1-8 11.1-8 11.1S4 15.3 4 10.2a8 8 0 1 1 16 0Z" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/>
                    <circle cx="12" cy="10" r="2.6" stroke="currentColor" stroke-width="1.8"/>
                </svg>
                <span>Kota Tangerang</span>
            </div>

            <div class="digital-clock" id="digitalClock">
                00:00:00
            </div>

            <div class="digital-date" id="digitalDate">
                Memuat tanggal...
            </div>
        </div>

        <div class="group-card">
            <div class="group-card-left">
                <div>
                    <div class="group-caption">LAYAR DISPLAY AKTIF</div>
                    <div class="group-name">
                        Grup Aktif <span class="group-number">Grup 2</span>
                    </div>
                </div>
            </div>

            <span class="group-value">LIVE</span>
        </div>

        <div class="agency-list" id="agencyList">
            <div class="agency-track" id="agencyTrack">
            <?php foreach ($daftarInstansi as $item): ?>
                <?php
                    $namaItem = $item['nama'] ?? 'Instansi';
                    $logoDatabase = trim((string) ($item['logo'] ?? ''));

                    // Cocokkan nama instansi dengan nama file logo yang benar di public/assets/images.
                    // Pemetaan nama instansi diprioritaskan agar nilai logo lama di database tidak menghalangi logo tampil.
                    $namaNormalLogo = strtoupper(trim((string) $namaItem));
                    $namaNormalLogo = preg_replace('/[^A-Z0-9]+/', ' ', $namaNormalLogo);
                    $petaLogoInstansi = [
                        'ATR BPN' => 'atr bpn.png',
                        'BANK BANTEN' => 'bank banten.png',
                        'BANK BJB' => 'bank bjb.png',
                        'BAPENDA' => 'bapenda.jpg',
                        'BAZNAS' => 'baznas.png',
                        'BNN' => 'BNN.jpg',
                        'BPJS KESEHATAN' => 'BPJS Kesehatan.png',
                        'BPJS KETENAGAKERJAAN' => 'BPJS Ketenagakerjaan.png',
                        'BPJS TK' => 'BPJS Ketenagakerjaan.png',
                        'BPJSTK' => 'BPJS Ketenagakerjaan.png',
                        'BPOM' => 'BPOM.png',
                        'DISNAKER' => 'disnaker.png',
                        'DITJEN AHU' => 'ditjen ahu.jpg',
                        'HUTKOTANG2' => 'hutkotang2.png',
                        'KEJARI' => 'kejari.png',
                        'PDAM' => 'PDAM.png',
                        'PENGADILAN AGAMA' => 'pengadilan agama.jpg',
                        'PLN' => 'PLN.png',
                        'POLRES' => 'polres.png',
                        'PT POS INDONESIA' => 'PT POS INDONESIA.jpg',
                        'SAMSAT' => 'samsat.png',
                        'TASPEN' => 'taspen.png',
                    ];

                    $logoItem = '';
                    foreach ($petaLogoInstansi as $kunciLogo => $namaFileLogo) {
                        if (strpos($namaNormalLogo, $kunciLogo) !== false) {
                            $logoItem = $namaFileLogo;
                            break;
                        }
                    }

                    // Jika nama instansi tidak ada di pemetaan, coba logo dari database.
                    if ($logoItem === '') {
                        $logoItem = $logoDatabase;
                    }

                    // Jika file logo pilihan tidak tersedia, gunakan logo Kota Tangerang sebagai fallback.
                    $logoPath = FCPATH . 'assets/images/' . $logoItem;
                    if ($logoItem === '' || !is_file($logoPath)) {
                        $logoItem = 'logokota.png';
                    }

                    // Ambil nomor antrean dari data antrean yang sama dengan tabel kanan.
                    // Jangan memakai nomor dummy khusus Bapenda, supaya semua instansi
                    // mendapatkan nomor sesuai data yang benar-benar tersedia.
                    $nomorItem = '';
                    $statusItem = trim((string) ($item['status'] ?? 'Menunggu'));
                    $namaInstansiNormal = $normalisasiNama($namaItem);

                    foreach ($daftarAntrean as $rowAntrean) {
                        $namaAntrean = $normalisasiNama($rowAntrean['instansi'] ?? '');
                        $namaLoketAntrean = $normalisasiNama($rowAntrean['loket'] ?? '');

                        // Cocokkan nama instansi secara langsung atau jika nama loket
                        // menyertakan nama instansi, misalnya "BAPENDA - LOKET 1".
                        $cocokInstansi = ($namaAntrean !== '' && (
                            $namaAntrean === $namaInstansiNormal ||
                            strpos($namaAntrean, $namaInstansiNormal) !== false ||
                            strpos($namaInstansiNormal, $namaAntrean) !== false
                        ));
                        $cocokLoket = ($namaLoketAntrean !== '' && (
                            $namaLoketAntrean === $namaInstansiNormal ||
                            strpos($namaLoketAntrean, $namaInstansiNormal) !== false ||
                            strpos($namaInstansiNormal, $namaLoketAntrean) !== false
                        ));

                        if ($cocokInstansi || $cocokLoket) {
                            $nomorDariAntrean = trim((string) ($rowAntrean['nomor'] ?? ''));
                            if ($nomorDariAntrean !== '' && $nomorDariAntrean !== '-') {
                                $nomorItem = $nomorDariAntrean;
                                $statusItem = trim((string) ($rowAntrean['status'] ?? $statusItem));
                                break;
                            }
                        }
                    }

                    // Fallback ke nomor dari data instansi hanya jika antrean tidak cocok.
                    if ($nomorItem === '') {
                        $nomorItem = trim((string) ($item['nomor'] ?? ''));
                    }

                    $statusNormal = strtolower($statusItem);
                    $isDipanggil = in_array($statusNormal, ['aktif', 'dipanggil', 'berlangsung', 'sedang dipanggil'], true)
                        && $nomorItem !== '' && $nomorItem !== '-';
                    $isMenunggu = in_array($statusNormal, ['menunggu', 'antri', 'antre'], true);
                    $statusClass = $isDipanggil ? 'active' : ($isMenunggu ? 'waiting' : 'inactive');
                    // Semua instansi yang memiliki nomor antrean diberi bingkai warna.
                    $punyaNomorAntrean = $nomorItem !== '' && $nomorItem !== '-';
                    $cardClass = $isDipanggil
                        ? 'is-active'
                        : ($punyaNomorAntrean ? 'has-queue' : ($isMenunggu ? 'is-waiting' : ''));
                    $labelNomor = 'Nomor antrean';
                    if (!$isDipanggil && ($nomorItem === '' || $nomorItem === '-')) {
                        $nomorItem = '—';
                    }

                    $logoPath = FCPATH . 'assets/images/' . $logoItem;
                    $logoExists = is_file($logoPath);
                ?>

                <article class="agency-card <?= esc($cardClass) ?>">
                    <div class="agency-logo-box">
                        <?php if ($logoExists): ?>
                            <img
                                src="<?= base_url('assets/images/' . $logoItem) ?>"
                                alt="<?= esc($namaItem) ?>"
                            >
                        <?php else: ?>
<?php endif; ?>
                    </div>

                    <div class="agency-info">
                        <div class="agency-topline">
                            <div class="agency-name"><?= esc($namaItem) ?></div>
                        </div>

                        <div class="agency-call-label"><?= esc($labelNomor) ?></div>
                        <div class="agency-number"><?= esc($nomorItem) ?></div>
                    </div>
                </article>
            <?php endforeach; ?>
            </div>
        </div>

    </section>

    <!-- KOLOM KANAN -->
    <section class="right-column">

        <section class="queue-panel">
            <div class="queue-heading">
                <div class="queue-title">
<div>
                        Daftar Antrean

                        <div class="queue-subtitle">
                            Informasi antrean layanan hari ini
                        </div>
                    </div>
                </div>

                <div class="queue-count">
                    <strong><?= $totalAntrean ?></strong>
                    <span>antrean</span>
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
Ringkasan Antrean Instansi
                </div>

            </div>

            <div class="summary-grid">
                <?php foreach ($daftarInstansi as $item): ?>
                    <?php
                        $namaInstansi = $normalisasiNama($item['nama'] ?? '');
                        $jumlahMenunggu = 0;
                        $jumlahTotal = 0;

                        foreach ($daftarAntrean as $row) {
                            $namaLoket = $normalisasiNama($row['loket'] ?? $row['instansi'] ?? '');

                            if ($namaLoket !== $namaInstansi) {
                                continue;
                            }

                            $jumlahTotal++;
                            $statusAntrean = strtolower(trim((string) ($row['status'] ?? '')));
                            if (in_array($statusAntrean, ['menunggu', 'antri', 'antre'], true)) {
                                $jumlahMenunggu++;
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
SELAMAT DATANG DI MAL PELAYANAN PUBLIK KOTA TANGERANG
    &nbsp; | &nbsp;
    PELAYANAN AKTIF PUKUL 08.00–15.00 WIB
    &nbsp; | &nbsp;
    MOHON MENUNGGU NOMOR ANTREAN ANDA DIPANGGIL
</footer>

<script>
    // Gandakan kartu sekali agar animasi scroll terus-menerus tanpa ruang kosong.
    (function setupAgencyScroll() {
        const list = document.getElementById('agencyList');
        const track = document.getElementById('agencyTrack');
        if (!list || !track) return;

        const originals = Array.from(track.children);
        if (originals.length <= 1) {
            list.classList.add('is-static');
            return;
        }

        originals.forEach((card) => {
            const clone = card.cloneNode(true);
            clone.setAttribute('aria-hidden', 'true');
            track.appendChild(clone);
        });

        // Kalau semua kartu muat sekaligus, tidak perlu animasi.
        requestAnimationFrame(() => {
            if (track.scrollHeight / 2 <= list.clientHeight + 8) {
                list.classList.add('is-static');
            }
        });
    })();

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

    // Gandakan kartu satu kali agar animasi scroll vertikal berjalan mulus.
    // Jika instansi sedikit, animasi dinonaktifkan supaya tidak terlihat kosong.
    (function setupAgencyScroll() {
        const viewport = document.getElementById('agencyList');
        const track = document.getElementById('agencyTrack');
        if (!viewport || !track) return;

        const cards = Array.from(track.children);
        if (cards.length < 3) {
            viewport.classList.add('is-static');
            return;
        }

        cards.forEach((card) => {
            const clone = card.cloneNode(true);
            clone.setAttribute('aria-hidden', 'true');
            track.appendChild(clone);
        });

        // Sedikit lebih lambat untuk daftar yang pendek, tetap nyaman dibaca.
        const duration = Math.max(32, cards.length * 10);
        track.style.animationDuration = duration + 's';
    })();
</script>

</body>
</html>
