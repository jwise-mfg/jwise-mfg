<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jonathan Wise — Speaker Bio & Press Kit</title>
    <meta name="description" content="Speaker bio and downloadable press kit for Jonathan Wise — Chief Technology Architect, CESMII.">
    <meta name="robots" content="noindex, nofollow">

    <!-- Open Graph -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.jonathanwise.net/bio">
    <meta property="og:title" content="Jonathan Wise — Speaker Bio & Press Kit">
    <meta property="og:description" content="Speaker bio and downloadable headshots for event marketing teams.">
    <meta property="og:image" content="https://www.jonathanwise.net/og-image.png">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Jonathan Wise — Speaker Bio & Press Kit">
    <meta name="twitter:description" content="Speaker bio and downloadable headshots for event marketing teams.">
    <meta name="twitter:image" content="https://www.jonathanwise.net/og-image.png">

    <link rel="icon" type="image/x-icon" href="../favicon.ico">
    <link rel="icon" type="image/png" sizes="32x32" href="../favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../favicon-16x16.png">
    <link rel="apple-touch-icon" sizes="180x180" href="../apple-touch-icon.png">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
            background: linear-gradient(135deg, #0f172a 0%, #1e3a5f 50%, #0f172a 100%);
            color: #e2e8f0;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem 1rem;
        }

        .card {
            max-width: 640px;
            width: 100%;
            text-align: center;
        }

        @keyframes fadeUp {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes glow {
            0%, 100% { box-shadow: 0 0 20px rgba(59, 130, 246, 0.3); }
            50% { box-shadow: 0 0 40px rgba(59, 130, 246, 0.7), 0 0 60px rgba(59, 130, 246, 0.3); }
        }

        .avatar {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            object-fit: cover;
            object-position: center top;
            margin-bottom: 1.8rem;
            border: 3px solid #3b82f6;
            box-shadow: 0 0 20px rgba(59, 130, 246, 0.3);
            animation: glow 4s ease-in-out infinite;
        }

        h1 {
            font-size: 1.75rem;
            font-weight: 600;
            margin-bottom: 0.25rem;
            color: #fff;
        }

        .tagline {
            color: #64b5f6;
            font-size: 1rem;
            margin-bottom: 1.75rem;
        }

        .bio {
            line-height: 1.7;
            color: #94a3b8;
            margin-bottom: 0.85rem;
            font-size: 0.95rem;
            text-align: left;
        }

        .bio + .bio {
            margin-bottom: 2rem;
        }

        .section-label {
            font-size: 0.7rem;
            font-weight: 600;
            letter-spacing: 0.12em;
            text-transform: uppercase;
            color: #64b5f6;
            margin-bottom: 0.75rem;
            margin-top: 0.25rem;
        }

        .divider {
            border: none;
            border-top: 1px solid rgba(59, 130, 246, 0.2);
            margin: 1.75rem 0;
        }

        .downloads {
            display: flex;
            flex-direction: column;
            gap: 0.75rem;
            margin-bottom: 1.75rem;
        }

        .download-row {
            display: flex;
            align-items: center;
            gap: 1rem;
            padding: 0.75rem 1rem;
            border: 1px solid rgba(59, 130, 246, 0.3);
            border-radius: 8px;
            background: rgba(255, 255, 255, 0.05);
            text-decoration: none;
            color: #e2e8f0;
            font-size: 0.95rem;
            transition: background 0.15s, border-color 0.15s, transform 0.15s;
        }

        .download-row:hover {
            background: rgba(59, 130, 246, 0.15);
            border-color: #3b82f6;
            transform: translateY(-1px);
        }

        .download-icon {
            flex-shrink: 0;
            width: 36px;
            height: 36px;
            border-radius: 6px;
            overflow: hidden;
        }

        .download-icon img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center top;
        }

        .download-info {
            flex: 1;
            text-align: left;
        }

        .download-name {
            font-weight: 500;
            color: #e2e8f0;
            font-size: 0.9rem;
        }

        .download-meta {
            font-size: 0.78rem;
            color: #64748b;
            margin-top: 0.1rem;
        }

        .download-arrow {
            color: #3b82f6;
            font-size: 1rem;
            flex-shrink: 0;
        }

        .bio-download {
            display: flex;
            align-items: center;
            gap: 1rem;
            padding: 0.75rem 1rem;
            border: 1px solid rgba(59, 130, 246, 0.3);
            border-radius: 8px;
            background: rgba(255, 255, 255, 0.05);
            text-decoration: none;
            color: #e2e8f0;
            font-size: 0.95rem;
            transition: background 0.15s, border-color 0.15s, transform 0.15s;
        }

        .bio-download:hover {
            background: rgba(59, 130, 246, 0.15);
            border-color: #3b82f6;
            transform: translateY(-1px);
        }

        .bio-download-icon {
            flex-shrink: 0;
            width: 36px;
            height: 36px;
            border-radius: 6px;
            background: rgba(59, 130, 246, 0.15);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.1rem;
        }

        .back-link {
            display: inline-block;
            margin-top: 2rem;
            font-size: 0.85rem;
            color: #475569;
            text-decoration: none;
            transition: color 0.15s;
        }

        .back-link:hover {
            color: #64b5f6;
        }

        @supports (animation-fill-mode: both) {
            .avatar        { animation: fadeUp 0.6s ease both, glow 4s ease-in-out infinite; }
            h1             { animation: fadeUp 0.6s ease both 0.15s; }
            .tagline       { animation: fadeUp 0.6s ease both 0.25s; }
            .bio           { animation: fadeUp 0.6s ease both 0.35s; }
            .divider       { animation: fadeUp 0.6s ease both 0.4s; }
            .section-label { animation: fadeUp 0.6s ease both 0.45s; }
            .downloads     { animation: fadeUp 0.6s ease both 0.5s; }
            .bio-download  { animation: fadeUp 0.6s ease both 0.55s; }
            .back-link     { animation: fadeUp 0.6s ease both 0.6s; }
        }
    </style>
</head>
<body>
    <div class="card">
        <a href="../"><img class="avatar" src="../me.jpg" alt="Jonathan Wise" border="0" style="border: 0px"></a>
        <h1>Jonathan Wise</h1>
        <p class="tagline">Chief Technology Architect, CESMII</p>

<?php
        $bio = file_get_contents(__DIR__ . '/../bio.txt');
        $paragraphs = preg_split('/\R\s*\R/', trim($bio));
        foreach ($paragraphs as $paragraph) {
            $paragraph = trim($paragraph);
            if ($paragraph === '') {
                continue;
            }
            echo '        <p class="bio">' . htmlspecialchars($paragraph, ENT_QUOTES, 'UTF-8') . "</p>\n";
        }
?>

        <hr class="divider">

        <p class="section-label">Headshots</p>
        <div class="downloads">
            <a class="download-row" href="../Headshot-FullSize.jpg" download="JonathanWise-Headshot-FullSize.jpg">
                <div class="download-icon"><img src="../Headshot-FullSize.jpg" alt=""></div>
                <div class="download-info">
                    <div class="download-name">Full Size</div>
                    <div class="download-meta">1500 × 1500 px &mdash; JPG &mdash; recommended for print</div>
                </div>
                <span class="download-arrow">&#8595;</span>
            </a>
            <a class="download-row" href="../Headshot-Smaller.jpg" download="JonathanWise-Headshot-Smaller.jpg">
                <div class="download-icon"><img src="../Headshot-Smaller.jpg" alt=""></div>
                <div class="download-info">
                    <div class="download-name">Web Size</div>
                    <div class="download-meta">800 × 800 px &mdash; JPG &mdash; recommended for digital / web</div>
                </div>
                <span class="download-arrow">&#8595;</span>
            </a>
            <a class="download-row" href="../Headshot-TightCrop.png" download="JonathanWise-Headshot-TightCrop.png">
                <div class="download-icon"><img src="../Headshot-TightCrop.png" alt=""></div>
                <div class="download-info">
                    <div class="download-name">Tight Crop</div>
                    <div class="download-meta">327 × 295 px &mdash; PNG &mdash; profile pictures &amp; thumbnails</div>
                </div>
                <span class="download-arrow">&#8595;</span>
            </a>
        </div>

        <p class="section-label">Bio Text</p>
        <a class="bio-download" href="../bio.txt" download="JonathanWise-Bio.txt">
            <div class="bio-download-icon">&#128196;</div>
            <div class="download-info">
                <div class="download-name">Speaker Bio</div>
                <div class="download-meta">Plain text &mdash; ready to paste into event programs</div>
            </div>
            <span class="download-arrow">&#8595;</span>
        </a>

        <a class="back-link" href="/">&larr; jonathanwise.net</a>
    </div>
    <script>
        document.querySelectorAll('[download]').forEach(function(link) {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                var filename = this.getAttribute('download');
                fetch(this.href)
                    .then(function(r) { return r.blob(); })
                    .then(function(blob) {
                        var url = URL.createObjectURL(blob);
                        var a = document.createElement('a');
                        a.href = url;
                        a.download = filename;
                        document.body.appendChild(a);
                        a.click();
                        document.body.removeChild(a);
                        URL.revokeObjectURL(url);
                    });
            });
        });
    </script>
</body>
</html>
