<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Responsinator</title>
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans:400,600" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/homepage/dist/css/style.css') }}">
    <script src="https://unpkg.com/animejs@3.0.1/lib/anime.min.js"></script>
    <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
</head>
<body class="is-boxed has-animations">
<div class="body-wrap">
    <header class="site-header">
        <div class="container">
            <div class="site-header-inner">
                <div class="brand header-brand">
                    <h1 class="m-0">
                        <a href="#">
                            <img class="header-logo-image" src="{{ asset('assets/homepage/dist/images/logo.svg') }}" alt="Logo">
                        </a>
                    </h1>
                </div>
            </div>
        </div>
    </header>

    <main>
        <section class="hero">
            <div class="container">
                <div class="hero-inner">
                    <div class="hero-copy">
                        <h1 class="hero-title mt-0">Create your API responses as easy as drink a water . . .</h1>
                        <p class="hero-paragraph">With Responsinator, you can have any API response according your needs, FREE and Unlimited . . .</p>
                        <div class="hero-cta"><a class="button button-primary" href="{{ route('login') }}">Get start</a></div>
                    </div>
                    <div class="hero-figure anime-element">
                        <svg class="placeholder" width="528" height="396" viewBox="0 0 528 396">
                            <rect width="528" height="396" style="fill:transparent;" />
                        </svg>
                        <div class="hero-figure-box hero-figure-box-01" data-rotation="45deg"></div>
                        <div class="hero-figure-box hero-figure-box-02" data-rotation="-45deg"></div>
                        <div class="hero-figure-box hero-figure-box-03" data-rotation="0deg"></div>
                        <div class="hero-figure-box hero-figure-box-04" data-rotation="-135deg"></div>
                        <div class="hero-figure-box hero-figure-box-05"></div>
                        <div class="hero-figure-box hero-figure-box-06"></div>
                        <div class="hero-figure-box hero-figure-box-07"></div>
                        <div class="hero-figure-box hero-figure-box-08" data-rotation="-22deg"></div>
                        <div class="hero-figure-box hero-figure-box-09" data-rotation="-52deg"></div>
                        <div class="hero-figure-box hero-figure-box-10" data-rotation="-50deg"></div>
                    </div>
                </div>
            </div>
        </section>

        <section class="features section">
            <div class="container">
                <div class="features-inner section-inner has-bottom-divider">
                    <div class="features-wrap">
                        <div class="feature text-center is-revealing">
                            <div class="feature-inner">
                                <div class="feature-icon">
                                    <img src="{{ asset('assets/homepage/dist/images/feature-icon-01.svg') }}" alt="Feature 01">
                                </div>
                                <h4 class="feature-title mt-24">Free and Unlimited</h4>
                                <p class="text-sm mb-0">Create infinite API instances and use your unlimited APIs without limits, absolutely <strong>FREE</strong>.</p>
                            </div>
                        </div>
                        <div class="feature text-center is-revealing">
                            <div class="feature-inner">
                                <div class="feature-icon">
                                    <img src="{{ asset('assets/homepage/dist/images/feature-icon-03.svg') }}" alt="Feature 03">
                                </div>
                                <h4 class="feature-title mt-24">Easy to use</h4>
                                <p class="text-sm mb-0">With <strong>Responsinator</strong> you can easily start to building your responses in minutes.</p>
                            </div>
                        </div>
                        <div class="feature text-center is-revealing">
                            <div class="feature-inner">
                                <div class="feature-icon">
                                    <img src="{{ asset('assets/homepage/dist/images/feature-icon-02.svg') }}" alt="Feature 02">
                                </div>
                                <h4 class="feature-title mt-24">Flexible</h4>
                                <p class="text-sm mb-0">Create the APIs you want exactly suitable for testing your apps, absolutely <strong>CUSTOMIZABLE</strong>.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="pricing section">
            <div class="container-sm">
                <div class="pricing-inner section-inner">
                    <div class="pricing-header text-center">
                        <h2 class="section-title mt-0">Management dashboard</h2>
                        <p class="section-paragraph mb-0">Manage your APIs and all related details in your dashboard.</p>
                    </div>
                    <img src="{{ asset('assets/homepage/dist/images/dashboard-1.jpeg') }}" alt="">
                </div>
            </div>
        </section>

        <section class="section">
            <div class="container-sm">
                <div class="section-inner">
                    <div class="text-center">
                        <h2 class="section-title mt-0">Sample APIs response</h2>
                    </div>

                    <details>
                        <summary>
                            <span class="faq-title">Users list</span>
                            <!-- Plus Icon -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-circle-plus expand-icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="#303651" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path>
                                <path d="M9 12l6 0"></path>
                                <path d="M12 9l0 6"></path>
                            </svg>
                            <!-- Minus Icon -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-circle-minus expand-icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="#303651" fill="none" stroke-linecap="round" stroke-linejoin="round" style="display: none;">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path>
                                <path d="M9 12l6 0"></path>
                            </svg>
                        </summary>
                        <div class="faq-content">
<pre class="no-select"><code class="no-select">{
    <span style="color:#f92672"><span>"data"</span></span>: [
        {
            <span style="color:#f92672"><span>"name"</span></span>: <span style="color:#e6db74"><span >"Jon Sullivan"</span></span>,
            <span style="color:#f92672"><span>"address"</span></span>: <span style="color:#e6db74"><span >"2492 Preston Rd"</span></span>,
            <span style="color:#f92672"><span>"email"</span></span>: <span style="color:#e6db74"><span >"jon.sullivan@example.com"</span></span>
        },
        {
            <span style="color:#f92672"><span>"name"</span></span>: <span style="color:#e6db74"><span >"Melinda Sanchez"</span></span>,
            <span style="color:#f92672"><span>"address"</span></span>: <span style="color:#e6db74"><span >"6874 Dane St"</span></span>,
            <span style="color:#f92672"><span>"email"</span></span>: <span style="color:#e6db74"><span >"melinda.sanchez@example.com"</span></span>
        },
        {
            <span style="color:#f92672"><span>"name"</span></span>: <span style="color:#e6db74"><span >"Brayden Bell"</span></span>,
            <span style="color:#f92672"><span>"address"</span></span>: <span style="color:#e6db74"><span >"909 Cherry St"</span></span>,
            <span style="color:#f92672"><span>"email"</span></span>: <span style="color:#e6db74"><span >"brayden.bell@example.com"</span></span>
        },
        {
            <span style="color:#f92672"><span>"name"</span></span>: <span style="color:#e6db74"><span >"Roberto Perez"</span></span>,
            <span style="color:#f92672"><span>"address"</span></span>: <span style="color:#e6db74"><span >"7965 Harrison Ct"</span></span>,
            <span style="color:#f92672"><span>"email"</span></span>: <span style="color:#e6db74"><span >"roberto.perez@example.com"</span></span>
        }
    ],
    <span style="color:#f92672"><span>"meta"</span></span>: {
        <span style="color:#f92672"><span>"results"</span></span>: <span style="color:#e6db74"><span >257</span></span>,
        <span style="color:#f92672"><span>"current_page"</span></span>: <span style="color:#e6db74"><span >15</span></span>,
        <span style="color:#f92672"><span>"per_page"</span></span>: <span style="color:#e6db74"><span >4</span></span>,
        <span style="color:#f92672"><span>"total_page"</span></span>: <span style="color:#e6db74"><span >65</span></span>
    }
}</code></pre>
                        </div>
                    </details>

                    <details>
                        <summary>
                            <span class="faq-title">Coffee shop menu</span>
                            <!-- Plus Icon -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-circle-plus expand-icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="#303651" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path>
                                <path d="M9 12l6 0"></path>
                                <path d="M12 9l0 6"></path>
                            </svg>
                            <!-- Minus Icon -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-circle-minus expand-icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="#303651" fill="none" stroke-linecap="round" stroke-linejoin="round" style="display: none;">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path>
                                <path d="M9 12l6 0"></path>
                            </svg>
                        </summary>
                        <div class="faq-content">
<pre class="no-select"><code class="no-select">[
    {
        <span style="color:#f92672"><span>"title"</span></span>: <span style="color:#e6db74"><span >"Iced Coffee"</span></span>,
        <span style="color:#f92672"><span>"description"</span></span>: <span style="color:#e6db74"><span >"A coffee with ice, typically served with a dash of milk, cream or sweetener—iced coffee is really as simple as that."</span></span>,
        <span style="color:#f92672"><span>"image"</span></span>: <span style="color:#e6db74"><span >"https://upload.wikimedia.org/wikipedia/commons/d/d8/Blue_Bottle%2C_Kyoto_Style_Ice_Coffee_%285909775445%29.jpg"</span></span>,
        <span style="color:#f92672"><span>"ingredients"</span></span>: [
            <span style="color:#e6db74"><span >"Coffee"</span></span>,
            <span style="color:#e6db74"><span >"Sugar"</span></span>,
            <span style="color:#e6db74"><span >"Iced"</span></span>,
            <span style="color:#e6db74"><span >"Cream"</span></span>
        ]
    },
    {
        <span style="color:#f92672"><span>"title"</span></span>: <span style="color:#e6db74"><span >"Iced Espresso"</span></span>,
        <span style="color:#f92672"><span>"description"</span></span>: <span style="color:#e6db74"><span >"Like an iced coffee, iced espresso can be served straight or with a dash of milk, cream or sweetener. You can also ice speciality espresso-based drinks like americanos, mochas, macchiatos, lattes and flat whites."</span></span>,
        <span style="color:#f92672"><span>"image"</span></span>: <span style="color:#e6db74"><span >"https://upload.wikimedia.org/wikipedia/commons/b/b0/Home_Made_Ice_Coffee.jpg"</span></span>,
        <span style="color:#f92672"><span>"ingredients"</span></span>: [
            <span style="color:#e6db74"><span >"Espresso"</span></span>,
            <span style="color:#e6db74"><span >"Sugar"</span></span>,
            <span style="color:#e6db74"><span >"Iced"</span></span>,
            <span style="color:#e6db74"><span >"Cream"</span></span>
        ]
    },
    {
        <span style="color:#f92672"><span>"title"</span></span>: <span style="color:#e6db74"><span >"Frappuccino"</span></span>,
        <span style="color:#f92672"><span>"description"</span></span>: <span style="color:#e6db74"><span >"Made famous by Starbucks, the Frappuccino is a blended iced coffee drink that’s topped with whipped cream and syrup."</span></span>,
        <span style="color:#f92672"><span>"image"</span></span>: <span style="color:#e6db74"><span >"https://upload.wikimedia.org/wikipedia/commons/2/2c/Strawberry_Delight_Frappuccino.JPG"</span></span>,
        <span style="color:#f92672"><span>"ingredients"</span></span>: [
            <span style="color:#e6db74"><span >"Espresso"</span></span>,
            <span style="color:#e6db74"><span >"Blended ice"</span></span>,
            <span style="color:#e6db74"><span >"Whip"</span></span>
        ]
    }
]</code></pre>
                        </div>
                    </details>

                    <details>
                        <summary>
                            <span class="faq-title">My favorites movies</span>
                            <!-- Plus Icon -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-circle-plus expand-icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="#303651" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path>
                                <path d="M9 12l6 0"></path>
                                <path d="M12 9l0 6"></path>
                            </svg>
                            <!-- Minus Icon -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-circle-minus expand-icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="#303651" fill="none" stroke-linecap="round" stroke-linejoin="round" style="display: none;">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path>
                                <path d="M9 12l6 0"></path>
                            </svg>
                        </summary>
                        <div class="faq-content">
<pre class="no-select"><code class="no-select">[
    {
        <span style="color:#f92672"><span>"imdbId"</span></span>: <span style="color:#e6db74"><span >"tt0032138"</span></span>,
        <span style="color:#f92672"><span>"title"</span></span>: <span style="color:#e6db74"><span >"The Wizard of Oz"</span></span>,
        <span style="color:#f92672"><span>"posterURL"</span></span>: <span style="color:#e6db74"><span >"https://m.media-amazon.com/images/M/MV5BNjUyMTc4MDExMV5BMl5BanBnXkFtZTgwNDg0NDIwMjE@._V1_FMjpg_UX1170_.jpg"</span></span>
    },
    {
        <span style="color:#f92672"><span>"imdbId"</span></span>: <span style="color:#e6db74"><span >"tt0266543"</span></span>,
        <span style="color:#f92672"><span>"title"</span></span>: <span style="color:#e6db74"><span >"Finding Nemo"</span></span>,
        <span style="color:#f92672"><span>"posterURL"</span></span>: <span style="color:#e6db74"><span >"https://m.media-amazon.com/images/M/MV5BZmYxZjg3OWEtNzg5Yi00M2YzLWI1YzYtYTQ0NTgwNzhjN2E1XkEyXkFqcGdeQXVyNDUyOTg3Njg@._V1_FMjpg_UX1013_.jpg"</span></span>
    },
    {
        <span style="color:#f92672"><span>"imdbId"</span></span>: <span style="color:#e6db74"><span >"tt0032910"</span></span>,
        <span style="color:#f92672"><span>"title"</span></span>: <span style="color:#e6db74"><span >"Pinocchio"</span></span>,
        <span style="color:#f92672"><span>"posterURL"</span></span>: <span style="color:#e6db74"><span >"https://m.media-amazon.com/images/M/MV5BMTU4Mzk3ODIyOF5BMl5BanBnXkFtZTgwODgyNzk2NjE@._V1_FMjpg_UX1002_.jpg"</span></span>
    }
]</code></pre>
                        </div>
                    </details>
                </div>
            </div>
        </section>

        <section class="cta section">
            <div class="container">
                <div class="cta-inner section-inner">
                    <h3 class="section-title mt-0">If you need a special feature, let us know...!</h3>
                    <div class="cta-cta">
                        <a class="button button-primary button-wide-mobile" href="mailto:majidheidari1997@gmail.com">Get in touch</a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="site-footer">
        <div class="container">
            <div class="site-footer-inner">
                <div class="brand footer-brand">
                    <a href="#">
                        <img class="header-logo-image" src="{{ asset('assets/homepage/dist/images/logo.svg') }}" alt="Logo">
                    </a>
                </div>
                <ul class="footer-links list-reset">
                    <li>
                        <a href="mailto:majidheidari1997@gmail.com">Contact</a>
                    </li>
                </ul>
                <ul class="footer-social-links list-reset">
                </ul>
                <div class="footer-copyright">
                    Developed by 🧡 with
                    <a style="margin-left: 5px" href="https://github.com/majid-gholamheidari"> Majid</a></div>
            </div>
        </div>
    </footer>
</div>

<script src="{{ asset('assets/homepage/dist/js/main.min.js') }}"></script>
</body>
</html>
