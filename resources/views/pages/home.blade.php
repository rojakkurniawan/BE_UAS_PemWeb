<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Wallpaper App | UAS Project | FE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="{{ asset('assets/css/stylehome.css') }}" />
</head>
<body>
    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand " href="#home">Wallpaper APP</a>          
            </div>
        </div>
    </nav>
    {{-- END Navbar --}}
    {{-- Home --}}
    <section class="home-card" id="home">
        <div class="container">
            <div class="row landing-mobile">
                <div class="col-md-6">
                    <div class="home-text slideright">WallApp,<div>Everything you'll need.</div>
                    </div>
                    <p class="text">We provide a variety of wallpapers that you can choose from.</p>
                    <div class="ms">Download Now:</div>
                    <div class="button">
                        <a href="https://github.com/kilyfa/FE_WallpaperApp_UAS" class="btn-outline-secondary mt-2"><img
                                class=" download-img" src="{{ asset('assets/image/get-it-on-github.png') }}"
                                alt="download"> </a>
                    </div>

                </div>
                <div class="col-md-6 landing-phone">
                    <div>
                        <img src="assets/image/home-phone.png" alt="home" class="img-card mt-5">
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- End Home --}}
    {{-- Testimoni --}}
    <section class="testimoni">
        <div class="container">
            <div class="row">
                <div class="testimoni-card">
                    <div class="testimoni-text-h">Features</div>
                    <div class="carousel-container">
                        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active" data-bs-interval="10000">
                                    <div>We try to provide Wallpapers with full HD resolution that can amaze the eyes.</div>
                                    <div class="carousel-user-testi">
                                        High Resolution
                                    </div>
                                </div>
                                <div class="carousel-item" data-bs-interval="2000">
                                    <div>Get an easy and fast downloading experience with our app.</div>
                                    <div class="carousel-user-testi">
                                        Easy to download
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div>Our app provides an uninterrupted, ad-free experience.</div>
                                    <div class="carousel-user-testi">
                                        No ads
                                    </div>
                                </div>
                            </div>
                            <div class="landing-carousel">
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0"
                                        class="active" aria-current="true" aria-label="Slide 1"></button>
                                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                                        aria-label="Slide 2"></button>
                                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                                        aria-label="Slide 3"></button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- category --}}
    <section class="category">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="home-text">
                        Explore various themes and styles with the latest wallpaper app.
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="img-ctgr"><img src="assets/image/category.png" alt="home" class="img-category"></div>
                </div>
            </div>
        </div>
    </section>
    {{-- Footer --}}
    <section class="footer">
        <div class="row justify-content-evenly">
            <div class="col-md-3"></div>
            <div class="col-md-2 mt-5">
                <div class="title">Get our app</div>
                <div class=""> <a class="link" href="https://github.com/kilyfa/FE_WallpaperApp_UAS" style="text-decoration: underline;">Github</a></div>
            </div>
            <div class="col-md-2 mt-5">
                <div class="title">Our Github</div>
                <div class="">
                    <div><a class="link" href="https://github.com/kilyfa/FE_WallpaperApp_UAS" style="text-decoration: underline;">Front End Github</a></div>
                    <div><a class="link" href="https://github.com/rojakkurniawan/BE_WallpaperApp_UAS" style="text-decoration: underline;">Back End Github</a></div>
                </div>
            </div>
            <div class="col-md-2 mt-5">
                <div class="title">Our Teams</div>
                <div class="text-team">
                    <div>Abdul Aziz</div>
                    <div>Rojak Kurniawan</div>
                    <div>Ahmad Rafi Kannajmi</div>
                    <div>Muhammad Rizqi Fadhillah</div>
                    <div>Dicky Saputra</div>
                    <div>Devin Wijaya</div>
                    <div>Muhammad Damar Firdaus</div>
                    <div>Ilham Ambia</div>
                    <div>Aditya Sastraatmaja</div>
                    <div>Muhammad Rifqi Arrasyid</div>
                    <div>Daffa Dzaky Syahbani</div>
                    <div>Muhammad Alviansyah</div>
                </div>
            </div>

            <div class="col-md-3"></div>
        </div>
        <div>
            <hr>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="footer-trademark">
                    <div>Wallpaper App</div>
                    <div>© 2023 All Rights Reserved.</div>
                    <div>Github Logo are trademarks of Github Inc.</div>
                </div>

            </div>
        </div>
    </section>
    {{-- End Footer --}}
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
</body>

</html>