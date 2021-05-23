<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="styles/style.css" />
    <link
      rel="shortcut icon"
      type="image/x-icon"
      href="assets/kahfiart/kahfiart.png"
    />
    <title>Iklima & Derry | Kahfiart</title>
  </head>
  <body id="body">
    <div class="audio" id="audio-btn">
      <audio
        src="assets/audio/Di Sepertiga Malam Rey Mbayang saxophone cover by Yohanes Arsadewa.mp3"
        loop
        id="audio"
      ></audio>
      <i class="fas fa-music" id="audio-icon"></i>
    </div>
    <div id="loader">
      <div class="col">
        <img src="assets/elem/Loading_Roket.gif" />
      </div>
    </div>
    <div id="landing">
      <div class="col">
        <div class="letter">
          <p>
            Kepada Yth,
            <span id="guest">Tamu Undangan</span>
          </p>
          <p>
            Kami mengundang anda untuk menghadiri momen spesial kami.<br />
            Silahkan tekan tombol di bawah ini.
          </p>
        </div>
        <div id="open">Buka Undangan</div>
        <div class="coverName">
          <div class="bride">Iklima</div>
          <div class="groom">Derry</div>
        </div>
      </div>
    </div>
    <div id="space"></div>
    <div id="content">
      <nav id="navigator">
        <ul id="navbar">
          <li data-target="cover">
            <div class="navList cover">
              <div class="icon coverI"></div>
              <div class="desc">Cover</div>
            </div>
          </li>
          <li data-target="couple">
            <div class="navList couple">
              <div class="icon coupleI"></div>
              <div class="desc">Couple</div>
            </div>
          </li>
          <li data-target="text">
            <div class="navList event">
              <div class="icon eventI"></div>
              <div class="desc">Event</div>
            </div>
          </li>
          <li data-target="healthProtocols" class="health">
            <div class="navList health">
              <div class="icon healthI"></div>
              <div class="desc">Health<span>Protocols</span></div>
            </div>
          </li>
          <li data-target="gallery">
            <div class="navList gallery">
              <div class="icon galleryI"></div>
              <div class="desc">Gallery</div>
            </div>
          </li>
          <li data-target="wish">
            <div class="navList wish">
              <div class="icon wishI"></div>
              <div class="desc">Wish</div>
            </div>
          </li>
        </ul>
      </nav>
      <div id="cover">
        <div class="col">
          <div class="headCover">
            The Wedding Of
            <div class="coverName">
              <div class="bride">Iklima</div>
              <div class="groom">Derry</div>
            </div>
          </div>
          <div class="footCover">
            <div class="date">28 Mei 2021</div>
            <a
              href="http://bit.ly/KalenderIklimaDerry"
              target="_blank"
              class="saveDate"
              >Save The Date</a
            >
            <div data-target="couple" class="scroll"></div>
          </div>
        </div>
      </div>
      <div id="couple">
        <div class="row">
          <div class="profile" id="bride">
            <div class="photo">
              <img src="assets/img/bride.png" alt="Iqlima Dwi Palupi's Photo" />
            </div>
            <div class="name">Iklima<br />Dwi Palupi</div>
            <div class="parents">
              <hr />
              Putri Kedua dari Bapak Ponimin Kharis S<br />dan Ibu Endang Setyowati
            </div>
          </div>
          <div class="and">&</div>
          <div class="profile" id="groom">
            <div class="photo">
              <img src="assets/img/groom.png" alt="Derry Faizal's Photo" />
            </div>
            <div class="name">Derry<br />Faizal</div>
            <div class="parents">
              <hr />
              Putra Kedua dari Bapak Salam<br />dan Ibu Siti Widarti
            </div>
          </div>
        </div>
      </div>
      <div id="text">
        <div class="row">
          <div class="letterText">
            <div class="textTitle">Bismillahirohmanirohim</div>
            <p>
              Maha Suci Allah Subhanahu Wata'ala yang telah menciptakan makhluk-Nya
              berpasang-pasangan. Ya Allah, Perkenankanlah kami untuk menikahkan
              putra-putri kami. Untuk melakukan syariat agama-Mu & mengikuti
              sunnah Nabi Muhammad SAW dalam membentuk keluarga yang Sakinah Ma
              Waddah Wa Rahmah.<br /><br />
              Perkenankanlah kami untuk mengundang Bapak/Ibu dan keluarga pada
              acara pernikahan putra-putri kami yang akan dilaksanakan pada
              tanggal berikut
            </p>
          </div>
          <div class="hero">
            <img id="imgHero" src="./assets/img/hero.png" />
          </div>
        </div>
      </div>
      <div id="date">
        <div class="row">
          <div class="akad">
            <div class="akadCard">
              <div class="header">
                <div class="icon akadIcon"></div>
                <div class="headTitle">Akad</div>
              </div>
              <div class="body">
                <div class="dateIcons">
                  <div class="dateIcon dateI">
                    <div class="desc">Jumat, 28 Mei 2021</div>
                  </div>
                  <div class="dateIcon timeI">
                    <div class="desc">08:00 - Selesai</div>
                  </div>
                  <div class="dateIcon locI">
                    <div class="desc">
                      Cilongkrang Selatan, RT.03 RW.07, Desa Cilongkrang, Kec.
                      Wanareja, Kab. Cilacap
                    </div>
                  </div>
                </div>
                <div class="buttons">
                  <a href="#location" class="findLocation">Find The Location</a>
                </div>
              </div>
            </div>
          </div>
          <div class="resepsi">
            <div class="resepsiCard">
              <div class="header">
                <div class="icon resepsiIcon"></div>
                <div class="headTitle">Resepsi</div>
              </div>
              <div class="body">
                <div class="dateIcons">
                  <div class="dateIcon dateI">
                    <div class="desc">Jumat, 28 Mei 2021</div>
                  </div>
                  <div class="dateIcon timeI">
                    <div class="desc">10:00 - Selesai</div>
                  </div>
                  <div class="dateIcon locI">
                    <div class="desc">
                      Cilongkrang Selatan, RT.03 RW.07, Desa Cilongkrang, Kec.
                      Wanareja, Kab. Cilacap
                    </div>
                  </div>
                </div>
                <div class="buttons">
                  <a href="#location" class="findLocation">Find The Location</a>
                </div>
              </div>
            </div>
          </div>
          <div class="countDown">
            <div class="countTitle">Countdown</div>
            <div class="countTimer">
              <div class="countBox">
                <span class="countNumber day">00</span>
                <span class="countVar">Days</span>
              </div>
              <div class="countBox">
                <span class="countNumber hour">00</span>
                <span class="countVar">Hours</span>
              </div>
              <div class="countBox">
                <span class="countNumber minute">00</span>
                <span class="countVar">Minutes</span>
              </div>
              <div class="countBox">
                <span class="countNumber second">00</span>
                <span class="countVar">Seconds</span>
              </div>
            </div>
            <div class="buttons">
              <a
                href="http://bit.ly/KalenderIklimaDerry"
                target="_blank"
                class="saveDate"
                >Save The Date</a
              >
            </div>
          </div>
        </div>
      </div>
      <div id="location">
        <div class="col">
          <div class="loc">
            <div class="locTitle">Location</div>
            <a
              href="http://bit.ly/LokasiIklimaDerry"
              target="_blank"
              class="locNav"
              >Click here for bigger Maps</a
            >
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d16289.360210620138!2d108.71698974897446!3d-7.419956653479629!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0!2zN8KwMjUnMTQuNyJTIDEwOMKwNDMnMTguMCJF!5e0!3m2!1sen!2skr!4v1619842271672!5m2!1sen!2skr"
              allowfullscreen=""
              loading="lazy"
            ></iframe>
          </div>
        </div>
      </div>
      <div id="healthProtocols">
        <div class="col">
          <div class="health">
            <div class="healthCard">
              <div class="healthTitle">Health Protocols</div>
              <div class="healthText">
                <hr />
                Tanpa mengurangi rasa hormat, kami menghimbau kepada para tamu
                undangan untuk mematuhi protokol kesehatan dengan baik saat
                berada di lokasi acara. Hal-hal yang perlu diperhatikan sebagai
                berikut:
              </div>
              <div class="healthIcons">
                <div class="row">
                  <div class="col">
                    <img
                      src="./assets/elem/Freepik/044-medical mask.png"
                      class="freepik"
                    /><span>Gunakan Masker</span>
                  </div>
                  <div class="col">
                    <img
                      src="./assets/elem/Freepik/002-handwash.png"
                      class="freepik"
                    /><span>Cuci Tangan</span>
                  </div>
                  <div class="col">
                    <img
                      src="./assets/elem/Freepik/012-thermometer.png"
                      class="freepik"
                    /><span>Cek Suhu Tubuh</span>
                  </div>
                  <div class="col">
                    <img
                      src="./assets/elem/Freepik/024-physical.png"
                      class="freepik"
                    /><span>Jaga Jarak</span>
                  </div>
                  <div class="col">
                    <img
                      src="./assets/elem/Freepik/017-do not touch.png"
                      class="freepik"
                    /><span>Tidak Bersentuhan</span>
                  </div>
                  <div class="col">
                    <img
                      src="./assets/elem/Freepik/047-cough.png"
                      class="freepik"
                    /><span>Bersin/Batuk Pada Tempatnya</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div id="gallery">
        <div class="col">
          <div class="galleryTitle">Gallery</div>
          <div class="photos">
            <hr />
            <img src="./assets/img/VIS00566.JPG" alt="Gallery image 1" />
            <img src="./assets/img/VIS00547.JPG" alt="Gallery image 2" />
            <img src="./assets/img/VIS00485.JPG" alt="Gallery image 3" />
            <img src="./assets/img/VIS00505.JPG" alt="Gallery image 4" />
            <img src="./assets/img/VIS00568.JPG" alt="Gallery image 5" />
            <img src="./assets/img/VIS00448.JPG" alt="Gallery image 6" />
            <img src="./assets/img/VIS00445.JPG" alt="Gallery image 7" />
            <img src="./assets/img/VIS00470.JPG" alt="Gallery image 8" />
          </div>
        </div>
      </div>
      <div id="wish">
        <div class="col">
          <div class="pray">
            <div class="prayTitle">Our Pray</div>
            <div class="prayContent">
              "Dan di antara ayat-ayat-Nya ialah Dia menciptakan untukmu
              istri-istri dari jenismu sendiri, supaya kamu merasa nyaman
              kepadanya, dan dijadikan-Nya di antaramu mawadah dan rahmah.
              Sesungguhnya pada yang demikian itu benar-benar terdapat
              tanda-tanda bagi kaum yang berpikir."<br />
              (Q.S Ar-Rum:21)
            </div>
          </div>
          <div class="wishes">
            <div class="wishCard">
              <div class="wishTitle">Wish and Pray</div>
              <form
                id="wish-form"
                class="wish-form needs-validation"
                method="post"
                novalidate
              >
                <div class="formGroup">
                  <label for="name">Nama</label>
                  <input
                    type="text"
                    name="name"
                    id="name"
                    placeholder="Tuliskan nama anda"
                    required
                  />
                </div>
                <div class="formGroup">
                  <label for="wish">Pesan</label>
                  <textarea
                    name="wish"
                    id="wish"
                    rows="5"
                    placeholder="Tuliskan doa dan harapan anda"
                    required
                  ></textarea>
                </div>
                <button type="submit" id="btn-send">Send</button>
              </form>
            </div>
          </div>
          <div class="thankyou">
            Terima Kasih
            <div class="couple">- Iklima & Derry -</div>
          </div>
        </div>
      </div>
      <div id="footer">
        <div>Design By Kahfiart</div>
        <a target="_blank" href="https://kahfiart.online"
          ><img src="./assets/kahfiart/kahfiart.png" alt="Kahfi Art"
        /></a>
      </div>
    </div>
  </body>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/ScrollToPlugin.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/CSSRulePlugin.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/ScrollTrigger.min.js"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.min.js"></script>
  <script src="./js/ajax.js"></script>
  <script src="./js/app.js"></script>
</html>
