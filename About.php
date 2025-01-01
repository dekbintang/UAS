<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="description" content="Personal portfolio of I Kadek Bintang Adi Bimantara, showcasing a journey in IT and technology exploration."/>
    <title>Bintang Adi Bimantara</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;900&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>

    <script>
        tailwind.config = {
          theme: {
            extend: {
              colors: {
                yellow: '#FFE75E',
                orange: '#FEB72B',
                hijaumuda: '#899857',
                hijautua: '#527318',
                dark: '#1E293B',
                light: '#F8FAFC',
              },
              fontFamily: {
                poppins: 'Poppins',
              },
              animation: {
                fadeIn: 'fadeIn 1.5s ease-in-out',
              },
              keyframes: {
                fadeIn: {
                  '0%': { opacity: '0' },
                  '100%': { opacity: '1' },
                },
              },
            }
          }
        }
      </script>
</head>

<body class="text-light font-poppins">
    <!-- Header -->
    <header class="bg-gradient-to-r from-hijautua to-hijaumuda py-6 shadow-md sticky top-0 z-50">
        <div class="container mx-auto flex justify-between items-center px-6">
            <a href="#" class="text-3xl font-bold bg-gradient-to-r from-white to-hijaumuda bg-clip-text text-transparent hover:text-light transition duration-300">
                Profil
            </a>
            <nav class="hidden md:flex space-x-6 text-white">
                <a href="Home.php" class="hover:text-yellow transition">Home</a>
            </nav>
            <button class="md:hidden text-light focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                </svg>
            </button>
        </div>
    </header>

    <section id="hero" class="flex flex-col-reverse md:flex-row items-center justify-center px-6 py-20 bg-hijautua">

        <div class="text-center md:text-left md:w-1/2 animate-fadeIn pl-20">
            <h3 class="text-xl font-semibold pb-2 text-yellow">Perkenalkan Nama Saya</h3>
            <h1 class="text-4xl md:text-5xl font-extrabold text-white">I Kadek Bintang Adi <span class="text-yellow">Bimantara</span></h1>
            <h2 class="font-poppins text-3xl font-semibold">2405551049</h2>
        </div>

        <div class="md:w-1/2 flex justify-center">
            <img src="img/profil.jpeg" alt="Bintang Adi Bimantara" class="rounded-full w-6/12 h-96 animate-fadeIn border-8 border-yellow">
        </div>
    </section>

    <footer class="bg-gradient-to-r from-hijautua to-hijaumuda text-light py-10 flex justify-center">
        <div class="container mx-auto px-6 text-center">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
    
                <div>
                    <h3 class="text-xl font-bold mb-4 text-yellow">About Me</h3>
                    <p class="text-sm text-light/70">
                        Seorang penggemar IT yang didorong oleh rasa ingin tahu dan semangat untuk berkembang. Dengan setiap langkah, saya berusaha untuk lebih memahami dunia teknologi yang terus berkembang.
                    </p>
                </div>

                <div>
                    <h3 class="text-xl font-bold mb-4 text-yellow">Quick Links</h3>
                    <ul class="space-y-2 text-sm">
                        <li><a href="Home.php" class="hover:underline">Home</a></li>
                        <li><a href="About.php" class="hover:underline">About</a></li>
                        <li><a href="Home.php" class="hover:underline">Projects</a></li>
                        <li><a href="contact.php" class="hover:underline">Contact</a></li>
                    </ul>
                </div>
    
                <div>
                    <h3 class="text-xl font-bold mb-4 text-yellow">Contact Me</h3>
                    <ul class="space-y-2 text-sm">
                        <li><span class="font-semibold">Email:</span> bintang@gmail.com</li>
                        <li><span class="font-semibold">Phone:</span> +62 858-4791-9627</li>
                        <li><span class="font-semibold">Address:</span> Jembrana, Bali, Indonesia</li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-xl font-bold mb-4 text-yellow">Follow Me</h3>
                    <div class="flex justify-center space-x-4">
                        <a href="https://www.instagram.com/ikadek_bintang" target="_blank" class="hover:text-yellow">
                            <img src="img/instagram.svg" alt="" class="w-7 h-7">
                        </a>
                        <a href="https://www.facebook.com/kadek.bintang" target="_blank" class="hover:text-yellow">
                            <img src="img/facebook.svg" alt="" class="w-7 h-7">
                        </a>
                        <a href="https://github.com/dekbintang" target="_blank" class="hover:text-yellow">
                           <img src="img/github.svg" alt="" class="w-7 h-7">
                        </a>
                    </div>
                </div>
            </div>
    
            <div class="mt-10 text-center text-sm text-light/70 border-t border-light/20 pt-4">
                &copy; 2024 I Kadek Bintang Adi Bimantara. All rights reserved.
            </div>
        </div>
    </footer>
    
    
                    

</body>
</html>
