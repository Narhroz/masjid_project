
<?php $__env->startSection('con'); ?>
    
        <!-- Jumbotron -->
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <p class="p-the-where">
                    <span class="the-where"><i class="fa-solid fa-location-dot"></i> Masjid At-Taqwa, Cibinong city, Bogor</span>
                </p>
                <h1>
                    A Relialble islamic <span>center</span><br />
                    to follow quran & sunnah
                </h1>
                <p>The Salat is the time when the meeting with allah and <br />the ascension (Mi'raj) Of the believer takes places</p>
                <a href="" class="btn btn-success tombol">Tour</a>
            </div>
        </div>
        <!-- akhir jumbotron -->

        <!-- jadwal salat -->
        <div class="jadwal-salat">
            <div class="container">
                <div class="pre-jadwal-salat">
                    <div class="left-pre-jadwal-salat">
                        <h1>Al-Furqon Masjid's Daily Prayers Time</h1>
                    </div>
                    <div class="right-pre-jadwal-salat">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa animi, iusto pariatur veritatis, soluta ea nesciunt fuga id ratione minima ipsum illum inventore sed perferendis veniam totam. Doloribus, corporis
                            libero.
                        </p>
                    </div>
                </div>
                <div class="jadwal-salat-main mt-3 mb-5">
                    <div class="left-jadwal-salat-main">
                        <img src="img/person-salat.jpg" alt="" />
                    </div>
                    <div class="right-jadwal-salat-main border border-secondary p-3 mb-5">
                        <div class="pre-jadwal">
                            <h5 class="pl-3">Salah</h5>
                            <h5 class="pr-3">Begins</h5>
                        </div>
                        <div class="jadwal p-3 border border-secondary">
                            <div class="j">
                                <h5><i class="fa-solid fa-clock mr-3"></i>Fajr</h5>
                                <h5>4:21 AM</h5>
                            </div>
                            <div class="j">
                                <h5><i class="fa-solid fa-clock mr-3"></i>Dhuhr</h5>
                                <h5>11:49 AM</h5>
                            </div>
                            <div class="j">
                                <h5><i class="fa-solid fa-clock mr-3"></i>Asr</h5>
                                <h5>3:17 PM</h5>
                            </div>
                            <div class="j">
                                <h5><i class="fa-solid fa-clock mr-3"></i>Maghrib</h5>
                                <h5>6:00 PM</h5>
                            </div>
                            <div class="j">
                                <h5><i class="fa-solid fa-clock mr-3"></i>isha</h5>
                                <h5>7:17 PM</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- akhir jadwal salat -->

        <!-- our programs -->
        <div class="our-programs">
            <div class="container">
                <h2>Programs from masjid Al-Furqon</h2>
                <div class="our-programs-main">
                    <div class="program">
                        <a href="/tentang">
                            <i class="fa-solid fa-users my-2"></i>
                            <h4>Tentang Kami</h4>
                        </a>
                    </div>
                    <div class="program">
                        <a href="">
                            <i class="fa-solid fa-house my-2"></i>
                            <h4>Kegiatan & Fasilitas</h4>
                        </a>
                    </div>
                    <div class="program">
                        <a href="">
                            <i class="fa-solid fa-newspaper my-2"></i>
                            <h4>Artikel</h4>
                        </a>
                    </div>
                    <div class="program">
                        <a href="">
                            <i class="fa-solid fa-hand-holding-dollar my-2"></i>
                            <h4>Donasi</h4>
                        </a>
                    </div>
                    <div class="program">
                        <a href="">
                            <i class="fa-solid fa-file-lines my-2"></i>
                            <h4>Laporan</h4>
                        </a>
                    </div>
                    <div class="program">
                        <a href="">
                            <i class="fa-solid fa-phone my-2"></i>
                            <h4>Kontak Kami</h4>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- akhir our programs -->

        <!-- donate us -->
        <div class="donate-us mb-5">
            <div class="container donate-us-main">
                <h2>
                    Be A Monthly Donation <br />
                    Mamber of Our Comunity
                </h2>
                <button>Donate</button>
            </div>
        </div>
        <!-- akhir donate us -->

       </body>
</html>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laravel\masjid\resources\views/index.blade.php ENDPATH**/ ?>