@extends('Web/template')
@section('content')
    <div>
        <section id="hero">
            <div class="heroCarousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <!-- Slide 1 -->
                    <div class="carousel-item active">
                        <div class="overlay"></div> <!-- Layer transparan -->
                        <img src="{{ asset('frontend/assets/img/slider/slider.jpg') }}" class="d-block w-100" alt="Slide 1"
                            style="width: 100%;
       height: 50%;">
                        <div class="carousel-caption d-none d-md-block">
                            <h1>Welcome to STAI Al-Mujtahadah</h1>
                            <p>Discover our outstanding programs in Islamic and social sciences.</p>

                        </div>
                    </div>
                    <!-- Slide 2 -->
                    <div class="carousel-item">
                        <div class="overlay"></div> <!-- Layer transparan -->
                        <img src="{{ asset('frontend/assets/img/slider/slide2.jpg') }}" class="d-block w-100"
                            alt="Slide 2">
                        <div class="carousel-caption d-none d-md-block">
                            <h1>Penerimaan Mahasiswa Baru</h1>
                            <p>Segera daftar dengan biaya kuliah termurah se-indonesia</p>
                            <a href="#" class="btn btn-primary">Get Started</a>
                        </div>
                    </div>
                    <!-- Slide 3 -->
                    <div class="carousel-item">
                        <div class="overlay"></div> <!-- Layer transparan -->
                        <img src="{{ asset('frontend/assets/img/slider/slide2.png') }}" class="d-block w-100"
                            alt="Slide 3">
                        <div class="carousel-caption d-none d-md-block">
                            <h1>Join Our Community</h1>
                            <p>Become part of a diverse and vibrant student body.</p>
                            <a href="#" class="btn btn-primary">Apply Now</a>
                        </div>
                    </div>
                </div>
                <!-- Controls -->
                <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>
        <!-- ======= Cliens Section ======= -->
        <section id="cliens" class="cliens" style="background:ghostwhite">
            <div class="container">
                <div class="row" data-aos="zoom-in">
                    <div class="col-lg-12 col-md-8 col-sm-6 d-flex align-items-center justify-content-center">
                        <a href=""> <img src="{{ asset('frontend/assets/img/lms.png') }}" class="img-fluid"
                                alt="" width="100px" height="100px"></a>
                    </div>
                </div>
            </div>
        </section><!-- End Cliens Section -->
        <!-- ======= Why Us Section ======= -->
        <section id="why-us" class="why-us section-bg">
            <div class="container-fluid" data-aos="fade-up">

                <div class="row">

                    <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

                        <div class="content">
                            <h3>Sambutan Ketua <br><strong>Selamat Datang di STAI Al-Mujtahadah</strong></h3>
                            <p>
                                Assalamualaikum Warahmatullahi Wabarakatuh

                                Puji syukur atas rahmat dan kasih sayang Allah SWT atas indahnya pengetahuan dan teknologi
                                yang kita rasakan saat ini. Saya sangat bangga memperkenalkan STAI Al-Mujtahadah (STAIAM)
                                secara singkat kepada seluruh pembaca.
                                STAIAM menyediakan disiplin ilmu yang beragam. dengan 3 program studi yang dapat dipilih
                                oleh mahasiswa sesuai dengan minatnya.
                                Program studi di STAIAM telah terakreditasi dari BAN-PT.


                                Informasi lebih lanjut dan lebih terbarukan tentang STAIAM dapat
                                diakses melalui website kami ini. Selamat berselancar di satiam.ac.id!

                                Kami senang bisa bertemu Anda di kampus STAIAM.

                                Waalaikumsalam Warahmatullahi Wabarakatuh
                            </p>
                        </div>



                    </div>

                    <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img"
                        style='background-image: url("{{ asset('frontend/assets/img/wage.jpeg') }}");' data-aos="zoom-in"
                        data-aos-delay="150">&nbsp;</div>
                </div>

            </div>
        </section><!-- End Why Us Section -->

        <!-- ======= About Us Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h3 style="font-family: Atocha;color: #055b42;font-size: xxx-large;">PROFIL </h3>
                    <h2>STAI Al-MUJTAHADAH</h2>
                </div>

                <div class="row content">
                    <div class="col-lg-6">
                        <p>
                            Sekolah Tinggi Agama Islam (STAI) Al-Mujtahadah didirikan sebagai respons terhadap kebutuhan
                            akan pendidikan tinggi Islam yang berkualitas di tengah masyarakat. Berdiri pada [tahun
                            berdiri], STAI Al-Mujtahadah lahir dari semangat untuk mencetak generasi Muslim yang tidak hanya
                            memahami ilmu agama secara mendalam tetapi juga mampu berkontribusi dalam perkembangan ilmu
                            pengetahuan dan teknologi.
                        </p>
                        <p>
                            Awalnya, STAI Al-Mujtahadah dimulai sebagai lembaga pendidikan kecil yang menawarkan
                            program-program dasar dalam studi Islam. Seiring dengan berjalannya waktu, lembaga ini terus
                            berkembang dan mendapatkan pengakuan dari berbagai kalangan. Pada [tahun akreditasi], STAI
                            Al-Mujtahadah resmi memperoleh akreditasi dari Kementerian Agama Republik Indonesia, yang
                            semakin mengokohkan posisinya sebagai salah satu perguruan tinggi Islam terkemuka di wilayahnya.
                        </p>
                        <p>
                            STAI Al-Mujtahadah juga dikenal dengan dedikasinya dalam mengembangkan kurikulum yang relevan
                            dengan perkembangan zaman, tanpa mengabaikan nilai-nilai Islami. Lembaga ini terus berupaya
                            menciptakan lingkungan akademis yang kondusif bagi pengembangan intelektual dan spiritual para
                            mahasiswa.
                        </p>

                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0">

                        <p>
                            STAI Al-Mujtahadah menawarkan berbagai program studi yang berfokus pada ilmu agama dan ilmu
                            sosial. Beberapa program unggulan yang ditawarkan meliputi:
                        </p>
                        <ol>
                            <li>
                                <strong>Program Studi Pendidikan Agama Islam (PAI)</strong><br>
                                Program ini dirancang untuk mempersiapkan lulusan yang kompeten dalam mengajar dan mendidik
                                di bidang agama Islam, baik di sekolah formal maupun non-formal.
                            </li>
                            <li>
                                <strong>Program Studi Hukum Keluarga Islam (Ahwal al-Syakhshiyyah)</strong><br>
                                Program ini memberikan pemahaman mendalam tentang hukum keluarga dalam Islam, serta
                                bagaimana menerapkannya dalam konteks modern.
                            </li>
                            <li>
                                <strong>Program Studi Ekonomi Syariah</strong><br>
                                Program ini memadukan prinsip-prinsip ekonomi dengan ajaran Islam, bertujuan untuk mencetak
                                ahli ekonomi yang beretika dan berwawasan Islami.
                            </li>
                        </ol>

                    </div>
                </div>

            </div>
        </section><!-- End About Us Section -->

        <!-- ======= Cta Section ======= -->
        <section id="ps" class="cta">
            <div class="container" data-aos="zoom-in">

                <div class="row">
                    <div class="col-lg-4 text-lg-start">
                        <h3 class="text-center">Pendidikan Bahasa Arab</h3>
                        <img src="{{ asset('frontend/assets/img/prodi/pba.png') }}" alt="" width="150px"
                            height="100px" class="mx-auto d-block">
                    </div>
                    <div class="col-lg-4 text-center text-lg-start">
                        <h3 class="text-center">Hukum Ekonomi Syariah</h3>
                        <img src="{{ asset('frontend/assets/img/prodi/esy.webp') }}" alt="" width="150px"
                            height="80px" class="mx-auto d-block">

                    </div>
                    <div class="col-lg-4 text-center text-lg-start">
                        <h3 class="text-center">Hukum Keluarga Islam</h3>
                        <img src="{{ asset('frontend/assets/img/prodi/hki.png') }}" alt="" width="150px"
                            height="80px" class="mx-auto d-block">
                    </div>

                </div>

            </div>
        </section><!-- End Cta Section -->

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Berita Kampus</h2>
                    <p></p>
                </div>


                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
                    @foreach ($berita as $b)
                        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                            <div class="card shadow p-2" style="width: 25rem;">
                                <a href="#">
                                    <img src="{{ asset('uploads/berita/' . $b->gambar) }}" height="150px"
                                        class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <p class="card-title text-start" style="text-align: center">{{ $b->judul }}
                                        </p>
                                    </div>
                                </a>
                                <div class="card-footer text-muted mt-auto">
                                    <a href="#">Baca Detail</a>
                                </div>

                            </div>
                        </div>
                    @endforeach
                </div>

                <button class="btn btn-sm btn-behance text-center">Berita Lainnya</button>
            </div>
        </section><!-- End Portfolio Section -->




    </div>
@endsection
