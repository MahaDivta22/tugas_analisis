<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Landing Page Penjualan</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="/assets/dist/css/style2.css" />
  </head>
  <body>
    <header>
      <div class="container">
        <h1>Nama Produk Anda</h1>
        <nav>
          <ul>
            <li><a href="#features">Fitur</a></li>
            <li><a href="#testimonials">Testimoni</a></li>
            <li><a href="#contact" class="me-3">Kontak</a></li>
            <a href="<?= base_url('login'); ?>" class="btn btn-success btn-sm" role="button">ADMIN</a>
          </ul>
        </nav>
      </div>
    </header>

    <section class="jumbotron">
      <img
        src="https://th.bing.com/th/id/R.8b77629d68ef27fffd83d6b3207a6dc9?rik=%2fljSb8WkG1TTjA&riu=http%3a%2f%2fbisnissulawesi.com%2fwp-content%2fuploads%2f2020%2f05%2fElektronik-Sepi.jpg&ehk=30cP1EIh3bB4Iek1sUPjBoWVyYQuJM0gl5mn4HQvNeM%3d&risl=&pid=ImgRaw&r=0"
        alt="Produk Terbaik"
      />
      <div class="jumbotron-text">
        <h2>Produk Terbaik Untuk Kebutuhan Anda</h2>
        <p>Temukan produk berkualitas dengan harga terbaik hanya di sini!</p>
        <a href="#card" class="cta-button">Belanja Sekarang</a>
      </div>
    </section>

    <!-- CARD -->
    <div class="container mb-5 mt-5" id="card">
      <div class="row justify-content-center">
        <div class="col-md-4 d-flex justify-content-center pt-3 text-center">
          <div class="card" style="width: 18rem">
            <img
              src="https://www.bhinneka.com/blog/wp-content/uploads/2021/08/Laptop-terbaik-2022-Apple-MacBook.jpg"
              class="card-img-top"
              alt="Macbok Air"
              width="200px"
              height="200px"
            />
            <div class="card-body">
              <h5 class="card-title">Apple MacBook Air (M2)</h5>
              <p class="card-text">
                MacBook Air terbaru dengan prosesor M2 Apple adalah rekomendasi
                terbaik untuk semua kebutuhan. Chip terbaru M2 memiliki 8 core
                dan GPU 8 core serta memori 8GB. Meskipun tidak sekuat chip M1
                Pro atau M1 Max, namun Anda masih bisa mengandalkan MacBook Air
                untuk kerja kantor yang berat atau multitasking yang intens.
              </p>
              <a href="<?= base_url('pemesan') ?>" class="btn btn-primary">Baca Selengkapnya</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 d-flex justify-content-center pt-3 text-center">
          <div class="card" style="width: 18rem">
            <img
              src="https://www.bhinneka.com/blog/wp-content/uploads/2021/08/Laptop-terbaik-2022-Asus.jpg"
              class="card-img-top"
              alt="..."
              width="200px"
              height="200px"
            />
            <div class="card-body">
              <h5 class="card-title">Asus ROG Zephyrus G15 (2022)</h5>
              <p class="card-text">
                Asus ROG Zephyrus G15 adalah laptop gaming 15 inci paling ringan
                yang pernah ada. Meskipun ringan, Anda tetap bisa memainkan game
                AAA terberat pada resolusi QHD. Laptop ini ditenagai prosesor
                AMD Ryzen 6000 Series terbaru dan VGA diskrit NVIDIA GeForce
                seri RTX 30. Laptop ini dibekali MUX Switch untuk hadirkan
                performa maksimal saat gaming.
              </p>
              <a href="<?= base_url('pemesan') ?>" class="btn btn-primary">Baca Selengkapnya</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 d-flex justify-content-center pt-3 text-center">
          <div class="card" style="width: 18rem">
            <img
              src="https://www.bhinneka.com/blog/wp-content/uploads/2022/08/Laptop-Terbaik-Lenovo-IdeaPad-Flex-5i-Chromebook.jpg"
              class="card-img-top"
              alt="..."
              width="200px"
              height="200px"
            />
            <div class="card-body">
              <h5 class="card-title">Lenovo IdeaPad Flex 5i Chromebook</h5>
              <p class="card-text">
                Meskipun bodinya tipis, Lenovo IdeaPad Flex 5i Chromebook adalah
                salah satu laptop terbaik untuk multimedia. Laptop dengan layar
                14 inci ini memiliki soundbar di engsel putarnya. Ini berarti
                Anda bisa mendengar suara dengan jelas dari berbagai mode
                laptop. Laptop 2 in 1 terbaik dari Lenovo ini dapat Anda gunakan
                dalam mode laptop, tent, stand, atau tablet.
              </p>
              <a href="<?= base_url('pemesan') ?>" class="btn btn-primary">Baca Selengkapnya</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 d-flex justify-content-center pt-3 text-center">
          <div class="card" style="width: 18rem">
            <img
              src="https://media.pricebook.co.id/article/6583b03db42c2e491d74d275/6583b03db42c2e491d74d275_1710994143.webp"
              class="card-img-top"
              alt="..."
              width="200px"
              height="200px"
            />
            <div class="card-body">
              <h5 class="card-title">ROG Phone 8 Pro Edition</h5>
              <p class="card-text">
                ROG Phone 8 Pro Edition menjadi rekomendasi hp gaming terbaik
                pertama yang bisa kamu pertimbangkan. Betapa tidak, hp khusus
                gaming ini ditenagai prosesor Snapdragon 8 Gen 3 yang paling
                bertenaga saat ini.
              </p>
              <a href="<?= base_url('pemesan') ?>" class="btn btn-primary">Baca Selengkapnya</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 d-flex justify-content-center pt-3 text-center">
          <div class="card" style="width: 18rem">
            <img
              src="https://media.pricebook.co.id/article/5b5b049b16312e9c156716b6/5b5b049b16312e9c156716b6_1711601692.webp"
              class="card-img-top"
              alt="..."
              width="200px"
              height="200px"
            />
            <div class="card-body">
              <h5 class="card-title">Xiaomi 14</h5>
              <p class="card-text">
                Xiaomi 14 ditenagai prosesor Snapdragon 8 Gen 3. Bedanya, hp
                Xiaomi terbaru yang rilis di 2024 ini mendapat sokongan dari
                memori RAM 12 GB dan penyimpanan internal 256 GB.
              </p>
              <a href="<?= base_url('pemesan') ?>" class="btn btn-primary">Baca Selengkapnya</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 d-flex justify-content-center pt-3 text-center">
          <div class="card" style="width: 18rem">
            <img
              src="https://media.pricebook.co.id/article/5ae0013916312ec213a74844/5ae0013916312ec213a74844_1702887000.webp"
              class="card-img-top"
              alt="..."
              width="200px"
              height="200px"
            />
            <div class="card-body">
              <h5 class="card-title">iQOO 12</h5>
              <p class="card-text">
                Kekuatan gaming di iQOO 12 ada di prosesor Snapdragon 8 Gen 3 yang diproduksi dengan teknologi terbaru 4nm. Prosesor ini dipadukan dengan GPU Adreno 750 untuk grafis maksimal.
              </p>
              <a href="<?= base_url('pemesan') ?>" class="btn btn-primary">Baca Selengkapnya</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 d-flex justify-content-center pt-3 text-center">
          <div class="card" style="width: 18rem">
            <img
              src="https://images.tokopedia.net/img/JFrBQq/2023/12/7/7e64b446-6f06-4347-be10-4072803c3207.jpg"
              class="card-img-top"
              alt="..."
              width="200px"
              height="200px"
            />
            <div class="card-body">
              <h5 class="card-title">Mesin Cuci Electrolux</h5>
              <p class="card-text">
                Electrolux merupakan salah satu produsen mesin cuci yang tak pelu diragukan lagi kualitasnya.
              </p>
              <a href="<?= base_url('pemesan') ?>" class="btn btn-primary">Baca Selengkapnya</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 d-flex justify-content-center pt-3 text-center">
          <div class="card" style="width: 18rem">
            <img
              src="https://images.tokopedia.net/img/JFrBQq/2022/7/25/d7cf6c64-9ffd-4e9b-94fd-e260056d5ca3.jpg"
              class="card-img-top"
              alt="..."
              width="200px"
              height="200px"
            />
            <div class="card-body">
              <h5 class="card-title">Mesin Cuci Hisense</h5>
              <p class="card-text">
                Mesin cuci terbaik selanjutnya datang dari merk Hisense. Merk ini hanya memiliki dua jenis mesin cuci, yakni top load dan twin tub (2 tabung). 
              </p>
              <a href="<?= base_url('pemesan') ?>" class="btn btn-primary">Baca Selengkapnya</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 d-flex justify-content-center pt-3 text-center">
          <div class="card" style="width: 18rem">
            <img
              src="https://images.tokopedia.net/img/JFrBQq/2022/7/25/6a5a8ec0-6d29-4b12-b705-0f27ea3bc7d6.jpg"
              class="card-img-top"
              alt="..."
              width="200px"
              height="200px"
            />
            <div class="card-body">
              <h5 class="card-title"> Mesin Cuci AQUA</h5>
              <p class="card-text">
                Mesin cuci Aqua merupakan salah satu merk mesin cuci terbaik di kelasnya. Mesin cuci ini telah dilengkapi dengan fitur yang canggih untuk pengalaman mencuci baju yang mudah dan nyaman.
              </p>
              <a href="<?= base_url('pemesan') ?>" class="btn btn-primary">Baca Selengkapnya</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- END CARD -->

    <section id="testimonials" class="testimonials">
      <div class="container">
        <h2>Testimoni Pelanggan</h2>
        <div class="testimonial-item">
          <p>
            "Produk ini sangat luar biasa! Saya sangat puas dengan kualitasnya."
          </p>
          <span>- Pelanggan A</span>
        </div>
        <div class="testimonial-item">
          <p>"Pelayanan yang cepat dan produk yang sangat berguna."</p>
          <span>- Pelanggan B</span>
        </div>
        <div class="testimonial-item">
          <p>"Harga yang sangat terjangkau untuk kualitas yang diberikan."</p>
          <span>- Pelanggan C</span>
        </div>
      </div>
    </section>

    <!-- Kontak Person -->
    <section id="contact" class="contact">
      <div class="container">
        <h2>Kontak Kami</h2>
        <form>
          <div class="form-group">
            <label for="name">Nama</label>
            <input type="text" id="name" name="name" required />
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required />
          </div>
          <div class="form-group">
            <label for="message">Pesan</label>
            <textarea id="message" name="message" required></textarea>
          </div>
          <button type="submit">Kirim</button>
        </form>
      </div>
    </section>
    <!-- end kontak person -->

    <footer>
      <div class="container">
        <p>&copy; copyright 2024. elektronik city</p>
      </div>
    </footer>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
