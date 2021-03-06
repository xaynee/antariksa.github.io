<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xaynee</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</head>
<body>
<header class="navbar">
    <nav>
        <h3>
            Xaynee 
        </h3>
        <ul>
            <li>
                <a href="">HOME</a>
            </li>
            <li>
                <a href="">ABOUT</a>
            </li>
            <li>
                <a href="">PROJECT</a>
            </li>
            <li>
                <a href="">PORTOFOLIO</a>
            </li>
            <li>
                <a href=""> SEVICE </a>
            </li>
            <li>
                <a href="">CONTACT</a>
            </li>
        </ul>
        <ul>
            <li>
                <a href=""><ion-icon name="logo-facebook"></ion-icon>
                </a>
                </li>
                    <li>
                        <a href=""><ion-icon name="logo-instagram"></ion-icon>
                        </a>
                    </li>
            <li>
                <a href=""><ion-icon name="logo-youtube"></ion-icon>
                </a>
            </li>
        </ul>
    </nav>
</header>
    <header class="hero">
        <div>
        <h1>  Happy  BirthDay  <span> <?php echo $_POST["ultname"];?> </span></h1>
        <p> Spesial Untukmu ( ＾◡＾)っ ♡ yang ber-ulang tahun pada <?php echo $_POST["ulttgl"];?></p>
        <ul>
            <li>
                <a href=""><ion-icon name="logo-facebook"></ion-icon>
                </a>
                </li>
                    <li>
                        <a href=""><ion-icon name="logo-instagram"></ion-icon>
                        </a>
                    </li>
            <li>
                <a href=""><ion-icon name="logo-youtube"></ion-icon>
                </a>
            </li>
        </ul>
    </div>
    <div class="mouse">
        <ion-icon name="heart-outline"></ion-icon>
    </div>
   
    </header>
    <main>
        <section class="section_1">
            <div class="text">
                <div class="container">
                    <h2>Ceritanya ucapan</h2>
                <p> <?php echo $_POST["ultucp"];?></p>
                <p> Aku merilis website ini bertepatan dengan ulang tahunmu. Hari ini adalah hari yang spesial untukmu,
                    ketika umurmu bertambah,ketika kamu tidak lagi seorang anak kecil, ketika kamu mulai harus menentukan
                    kemana kamu akan berjalan. Mungkin hal ini tidak akan mudah bagi beberapa orang, namun percayalah 
                    kemanapun kamu melangkah, aku akan selalu berada dibelakangmu. Hingga nanti kita bisa menggapai impian
                    bersama - sama. kata terakhirku untukmu "apapun yang terjadi tetaplah bernafas,dan ingat bahwa apa
                    yang dikatakan orang lain itu benar:)"
                </p>
                </div>
                <img src="ttd.jpeg" alt="">
            </div>
            <div class="BEM"></div>
        </section>
        <section class="section_2">
            <div class="text_2">
                <div class="container">
                    <h2>Doaku Untukmu</h2>
                <p> Sebelum section ini menjadi section doa, sebelumnya ingin kuisi dengan satu foto aibmu
                    tapi tak ada yang sesuai dengan keinginanku dan aku memutuskan untuk mengubahnya menjadi 
                    setion doa. </p>
                <p> <?php echo $_POST["ultdoa"];?> ʕ •ᴥ•ʔ   </p>
                <div>
                    <div class="bar_container">
                        <p class="title">Sisa Hidup </p>               
                        <div class="bar">
                            <div class="bar_front" style="width: 85%">
                                <P class="percentace">+85%</P>
                            </div>
                            <div class="bar_back"></div>
                        </div>
                    </div>
                    <div class="bar_container">
                        <p class="title">Pertambahan umur </p>
                        <div class="bar">
                            <div class="bar_front" style="width:40%">
                                <P class="percentace">+40%</P>
                            </div>
                            <div class="bar_back"></div>
                        </div>
                    </div>
                    <div class="bar_container">
                        <p class="title">Nambah Cantik </p>
                        <div class="bar">
                            <div class="bar_front" style=" width: 70%">
                                <P class="percentace">+70%</P>
                            </div>
                            <div class="bar_back"></div>
                        </div>
                    </div>
                </div>
            </div>
                </div>
            <div class="BEM_2"></div>
        </section>
        <section class="section_features">
            <div class="features">
                <ion-icon name="alarm-outline"></ion-icon>
                <h3> Sisa Hidup </h3>
                <p> hari ini, kamu berusia 16 tahun. Umurmu masih sangat muda, sisa hidupmu mungkin masih lama.
                    aku membuat section bar ini karna aku bingung mau nambahin apa lagi, otak ku sudah tidak bisa
                    menalar semua codingan html, css dan javaScript yang kubuat untukmu.
                </p>
            </div>
            <div class="features">
                <ion-icon name="podium-outline"></ion-icon>
                <h3> Pertambahan Umur </h3>
                <p> umurmu bertambah 1 tahun, semoga di umur kamu yang sekarang kamu bisa menjalankan
                    apa yang kamu inginkan(kalimat berulang) </p>
            </div>
            <div class="features">
                <ion-icon name="trending-up-outline"></ion-icon>
                <h3> Nambah Cantik </h3>
                <p> section bar yang ini tidak usah diragukan lagi, kamu nambah cantik, glow up dan yg pasti
                    jadi idaman seluruh warga planet bumi, woahhh ( ＾◡＾)っ ♡.
                </p>
            </div>
        </section>
        <section class="brands">
            <img class="brand" src="http://paul-themes.com/html/selena/demo/img/partners/1.png" alt="gambar">
            <img class="brand" src="http://paul-themes.com/html/selena/demo/img/partners/2.png" alt="gambar">
            <img class="brand" src="http://paul-themes.com/html/selena/demo/img/partners/1.png" alt="gambar">
            <img class="brand" src="http://paul-themes.com/html/selena/demo/img/partners/2.png" alt="gambar">
        </section>
        <section class="contact">
            <form class="contact-form" action="">
                <input class="input input_01" type="text" placeholder="Name">
                <input class="input input_01" type="mail" placeholder="Email *">
                <textarea class="input" placeholder="Message" cols="30" rows="4"></textarea>
                <button type="submit"> contact me</button>
            </form>
        </section>
    </main>
    <footer>
        <section class="footer_1">
            <div class="footer_1__head">
                <h3> Xaynee web</h3>
                <p> I made this website for me to learn coding</p>
            </div>
            <div class="footer_1__body">
                <a href="tel: 085 735 683 470" style="margin-bottom: 15px;">085 735 683 470</a>
                <a href="mailto:suryagus80@gmail.com">suryagus80@gmail.com</a>
            </div>
            <div class="footer_1__foot">
                <p> subscribe to our newslatter</p>
                <input type="email" placeholder="Email">
            </div>
        </section>
        <section class="footer_2">
            <p> thanks to visit my web :)</p>
        </section>
    </footer>
    
</body>
</html>