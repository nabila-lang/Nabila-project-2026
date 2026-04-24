<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Kontak Nabila - Yuk Temenan!</title>
    <style>
        body { font-family: 'Segoe UI', sans-serif; background-color: #ffeef8; margin: 0; padding-top: 100px; display: flex; flex-direction: column; align-items: center; }
        nav { background: #ffb6c1; width: 100%; padding: 15px 0; position: fixed; top: 0; text-align: center; box-shadow: 0 4px 6px rgba(0,0,0,0.1); }
        nav a { text-decoration: none; color: #7d3c98; margin: 0 15px; font-weight: bold; font-size: 1.1rem; }
        .container { background: white; width: 85%; max-width: 500px; padding: 40px; border-radius: 20px; box-shadow: 0 10px 20px rgba(255,105,180,0.15); border: 2px solid #ffb6c1; }
        h2 { color: #ff1493; text-align: center; margin-top: 0; }
        p.intro { text-align: center; color: #7f8c8d; margin-bottom: 25px; }
        input, textarea { width: 100%; padding: 12px; margin: 10px 0; border: 2px solid #ffe4e1; border-radius: 10px; box-sizing: border-box; font-size: 1rem; transition: 0.3s; }
        input:focus, textarea:focus { border-color: #ff69b4; outline: none; background-color: #fffaf0; }
        button { background: #ff1493; color: white; border: none; padding: 12px 25px; border-radius: 10px; cursor: pointer; width: 100%; font-size: 1.1rem; font-weight: bold; transition: 0.3s; margin-top: 10px; }
        button:hover { background: #c71585; transform: scale(1.02); }
        .socials { margin-top: 30px; text-align: center; border-top: 2px solid #ffe4e1; padding-top: 20px; }
        .socials p { color: #8e44ad; font-weight: bold; margin-bottom: 10px; }
        .socials a { color: #ff69b4; text-decoration: none; margin: 0 12px; font-size: 0.95rem; }
        .socials a:hover { text-decoration: underline; color: #c71585; }
    </style>
</head>
<body>
    <nav>
        <a href="/">🏠 Home</a>
        <a href="/profil">🌸 Profil</a>
        <a href="/kontak">💌 Kontak</a>
    </nav>

    <div class="container">
        <h2>Kirim Pesan  <span class="emoji">📩</span></h2>
        <p class="intro">Punya pertanyaan atau mau sapa Nabila? Isi di sini ya!</p>
        <form>
            <input type="text" placeholder="Nama Panggilan Kamu">
            <input type="email" placeholder="Email Aktif Kamu">
            <textarea rows="4" placeholder="Tulis pesan lucumu di sini..."></textarea>
            <button type="button">Kirim Sekarang 💖</button>
        </form>

        <div class="socials">
            <p>Atau mampir ke medsos Nabila:</p>
            <a href="#">📸 Instagram: @nbyyylaa_</a>
            <a href="#">💻 GitHub: nabila-lang</a>
        </div>
    </div>
</body>
</html>