<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suara Merdeka Generation</title>

    {{-- Font Awesome & Bootstrap --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/a276ee0ae6.js" crossorigin="anonymous"></script>

    <style>
        body {
            background-color: #d9eaff;
            font-family: Arial, sans-serif;
            margin: 0; padding: 0;
        }
        .newsletter-form {
            display: flex;
            align-items: center;
            gap: 5px;
            margin-bottom: 15px;
        }
        .newsletter-form input[type=email] {
            flex: 1;
            padding: 8px 12px;
            border-radius: 6px;
            border: none;
            font-size: 14px;
        }
        .newsletter-form button {
            background-color: #333;
            color: white;
            border: none;
            padding: 8px 12px;
            border-radius: 6px;
            cursor: pointer;
            transition: background 0.3s;
        }
        .newsletter-form button:hover {
            background-color: #555;
        }
        header {
            background-color: #333;
            color: white;
            padding: 10px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 14px;
        }
        header .logo {
            font-weight: 700;
            font-size: 18px;
        }
        header nav a {
            color: white;
            text-decoration: none;
            margin-left: 20px;
        }
        header nav a.user-icon {
            font-size: 16px;
        }
        .platform-section {
            position: relative;
            text-align: center;
            padding: 70px 0 120px;
        }
        .platform-section h1 {
            font-weight: 700;
            margin-bottom: 50px;
        }
        .laptop-img {
            width: 310px;
            max-width: 100%;
            filter: drop-shadow(2px 4px 6px rgba(0,0,0,0.1));
        }
        .info-left, .info-right {
            position: absolute;
            color: black;
            font-size: 14px;
            width: 150px;
            top: 60%;
            font-weight: 500;
            line-height: 1.4;
        }
        .info-left {
            left: 7%;
            text-align: center;
            white-space: nowrap;
        }
        .info-right {
            right: 7%;
            text-align: center;
            white-space: nowrap;
        }
        .platform-section p {
            margin-top: 40px;
            margin-bottom: 18px;
            font-size: 14px;
            color: black;
        }
        .circle-icons {
            margin: 0 auto;
            margin-top: 20px;
            display: flex;
            justify-content: center;
            gap: 20px;
        }
        .circle-icon {
            background-color: white;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            box-shadow: 0 0 4px rgba(0,0,0,0.12);
            transition: background-color 0.3s ease;
        }
        .circle-icon i, .circle-icon img {
            color: black;
            font-size: 20px;
            user-select: none;
        }
        .circle-icon:hover {
            background-color: #c0d9ba;
        }
        footer {
            background: #946ec7;
            color: white;
            padding: 40px 50px 60px 50px;
            font-size: 14px;
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 25px;
            min-height: 250px;
            position: relative;
            z-index: 1;
        }
        footer .footer-left {
            max-width: 320px;
            font-weight: 500;
        }
        footer .footer-left strong {
            display: block;
            margin-bottom: 15px;
            font-weight: 700;
        }
        .footer-logo {
            max-width: 180px;
            margin-bottom: 15px;
        }
        footer .footer-links {
            font-weight: 500;
            min-width: 130px;
        }
        footer .footer-links div {
            margin-bottom: 10px;
            font-weight: 700;
        }
        footer .footer-links a {
            display: block;
            color: white;
            text-decoration: none;
            margin-bottom: 8px;
        }
        footer .footer-links a:hover {
            text-decoration: underline;
        }
        footer .newsletter {
            min-width: 220px;
            font-weight: 500;
        }
        footer .newsletter div {
            margin-bottom: 10px;
            font-weight: 700;
        }
        .footer-bottom {
            background: #946ec7;
            text-align: center;
            font-size: 13px;
            padding: 15px 0 20px;
            color: white;
            opacity: 0.75;
            font-weight: 400;
            margin-top: 0;
        }
        @media (max-width: 768px) {
            footer {
                flex-direction: column;
                align-items: center;
                font-size: 13px;
            }
            footer .footer-links,
            footer .newsletter {
                min-width: 100%;
                text-align: center;
                margin-bottom: 20px;
            }
            .info-left,
            .info-right {
                position: static;
                width: auto;
                margin: 15px 0;
            }
            .platform-section p {
                margin-bottom: 25px;
            }
        }
    </style>
</head>

<body>
    <div class="info-left">Ketahui Lebih Banyak<br />Tentang Kami</div>
    <div class="info-right">Jangkau Informasi<br />Lebih Banyak</div>
    
<header>
    <img src="{{ asset('images/logosmgen.png') }}" alt="Suara Merdeka Generation" class="logo" style="height:50px; width:auto;" />
    <nav>
        <a href="#">Exit</a>
        <a href="#">About</a>
        <a href="#">Service</a>
        <a href="#">Portfolio</a>
        <a href="#">Our Team</a>
        <a href="#">Contact Us</a>
        <a href="#" class="user-icon"><i class="fa fa-user"></i></a>
    </nav>
</header>

{{-- Konten utama setiap halaman --}}
@yield('content')

<footer>
    <div class="footer-left">
        <img src="{{ asset('images/smn.png') }}" alt="Suara Merdeka Generation Logo" class="footer-logo" />
        <strong>PT. Suara Merdeka Generation</strong>
        <div>Jl. Pandanaran No.30, Pekunden, Kec. Semarang Tengah, Kota Semarang, Jawa Tengah 50134 (Manara Suara Merdeka)</div>
        <div style="margin:8px 0;"><i class="fa-solid fa-phone" style="margin-right:8px;"></i> +628976853328</div>
        <div style="margin:8px 0;"><i class="fa-solid fa-envelope" style="margin-right:8px;"></i> youth@smsgpm.id</div>
        <div style="background-color: #c3e6cb; padding: 15px; border-radius: 10px; display: flex; align-items: center; width: fit-content; max-width: 400px;">
            <svg xmlns="http://www.w3.org/2000/svg" fill="green" viewBox="0 0 24 24" width="40px" height="40px" style="margin-right: 15px; flex-shrink: 0;">
                <path d="M12 0C5.373 0 0 5.373 0 12c0 6.627 5.373 12 12 12s12-5.373 12-12C24 5.373 18.627 0 12 0zm-2 17.414-4.707-4.707 1.414-1.414L10 14.586l7.293-7.293 1.414 1.414L10 17.414z"/>
            </svg>
            <p style="margin: 0; font-size: 14px; line-height: 1.4;">
                Suara Merdeka <br>
                Telah diverifikasi oleh Dewan Pers <br>
                Sertifikat Nomor 247/D- <br>
                Verifikasi/KIV/2018
            </p>
        </div>
    </div>

    <div class="footer-links">
        <div>Links</div>
        <ul style="list-style-type: disc; padding-left: 20px; line-height: 1.8;">
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Portofolio</a></li>
            <li><a href="#">Platform</a></li>
            <li><a href="#">Our Team</a></li>
            <li><a href="#">Contact Us</a></li>
        </ul>
    </div>

    <div class="newsletter">
        <div>Newsletter</div>
        <form action="#" class="newsletter-form">
            <input type="email" placeholder="Enter Your Email ID" required />
            <button type="submit"><i class="fa-solid fa-arrow-right"></i></button>
        </form>

        <div class="circle-icons">
            <a href="#" class="circle-icon"><img src="{{ asset('images/facebook.png') }}" alt="Facebook" style="width:18px; height:18px;" /></a>
            <a href="#" class="circle-icon"><img src="{{ asset('images/youtube.png') }}" alt="YouTube" style="width:18px; height:18px;" /></a>
            <a href="#" class="circle-icon"><img src="{{ asset('images/twitter.png') }}" alt="X Twitter" style="width:18px; height:18px;" /></a>
            <a href="#" class="circle-icon"><img src="{{ asset('images/instagram.png') }}" alt="Instagram" style="width:18px; height:18px;" /></a>
            <a href="#" class="circle-icon"><img src="{{ asset('images/tiktok.png') }}" alt="TikTok" style="width:18px; height:18px;" /></a>
        </div>
    </div>
</footer>

<div class="footer-bottom">
    Suara Merdeka Generation © {{ date('Y') }} <br />this website design and powered by Nazal
</div>

</body>
</html>
