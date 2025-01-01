<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Merta Buana Abadi</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>

  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            yellow: '#ffe75e',
            orange: '#feb72b',
            hijaumuda: '#899857',
            hijautua: '#527318',
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
<body id="Home" class="font-poppins bg-slate-100">


  <header class="navbar bg-slate-100-300 py-4 top-0 left-0 right-0 z-50 transition-transform transform sticky">
    <nav class="flex items-center justify-between px-6">
      <div class="flex items-center space-x-6">
        <a href="#" class="font-semibold text-3xl text-hijautua mr-32 hover:text-hijaumuda animate-fadeIn">Buana Merta Abadi🌿</a>

        <ul class="flex space-x-6 text-hijautua ml-auto animate-fadeIn">
          <li><a href="Home.php" class="hover:text-hijaumuda">Home</a></li>
          <li><a href="About.php" class="hover:text-hijaumuda">About</a></li>
          <li><a href="service.php" class="hover:text-hijaumuda">Services</a></li>
          <li><a href="member.php" class="hover:text-hijaumuda">Membership</a></li>
          <li><a href="product.php" class="hover:text-hijaumuda">Products</a></li>
          <li><a href="news.php" class="hover:text-hijaumuda">News</a></li>
          <li><a href="contact.php" class="hover:text-hijaumuda">Contact Us</a></li>
        </ul>
      </div>

      <div class="flex space-x-4">
        <button class="bg-hijautua text-black px-6 py-2 rounded-lg hover:bg-hijaumuda"> <a href="register.php">Daftar</a></button>
      </div>
    </nav>
  </header>


  <section class="relative w-full h-screen">
    <video class="absolute top-0 left-0 w-full h-full object-cover" autoplay muted loop>
      <source src="video/background (2).mp4" type="video/mp4">
    </video>
    <div class="absolute top-0 left-0 w-full h-full bg-black opacity-60"></div>

    <div class="relative z-10 flex items-center justify-start w-full h-full text-left text-white px-6">
      <div class="max-w-4xl animate-fadeIn">
        <h1 class="text-4xl md:text-5xl font-semibold mb-8 leading-tight tracking-wide">Welcome to Merta Buana Abadi</h1>
        <p class="text-lg md:text-xl mb-6 max-w-3xl font-light italic tracking-wide">
          A place where members collaborate for mutual benefit. Together, we grow stronger.
        </p>
        <p class="text-sm md:text-base mb-8 max-w-3xl font-thin opacity-90 text-white">
          We provide opportunities for growth, community engagement, and mutual prosperity. With a focus on sustainability and collaboration, Merta Buana Abadi empowers its members to create a better future together. Join us in this journey towards success!
        </p>
        <a href="register.php" class="mt-4 inline-block bg-hijautua text-white px-6 py-2 rounded-lg hover:bg-hijaumuda">
          Join Us Today
      </a>

      </div>
    </div>
  </section>

  <section id="history" class="animate-fadeIn">
  <header class="font-poppins font-semibold my-32 text-4xl text-center text-hijautua">
    <h2>Our Journey: The Story of Merta Buana Abadi</h2>
    <p class="font-light text-base text-center max-w-4xl mx-auto my-3">
      "From humble beginnings to a pioneering cooperative, Merta Buana Abadi stands as a testament to the power of collaboration and vision. Dedicated to sustainable cacao farming in Bali, we continue to nurture a legacy of excellence, community, and innovation."
    </p>
  </header>

  <section class="border-4 border-black rounded-lg shadow-md p-6 mb-12">
    <div class="mb-8">
      <h3 class="font-poppins text-xl text-center text-hijautua">1. Planting the Seeds of Unity</h3>
    </div>
    <div class="flex items-center mx-auto max-w-5xl">
      <p class="font-poppins text-left ml-4 mr-8 max-w-2xl text-base">
        Merta Buana Abadi began with a handful of passionate cacao farmers in Bali. Driven by a shared dream to elevate their farming practices and overcome challenges, they joined forces. Through dedication and innovation, their hard work bore fruit, marking the start of a transformative journey.
      </p>
      <img src="img/cacao3.jpg" alt="Cacao Farm" class="w-8/12 rounded-lg shadow-md">
    </div>
  </section>

  <section class="border-4 border-black rounded-lg shadow-md p-6 mb-12">
    <div class="mb-8">
      <h3 class="font-poppins text-xl text-center text-hijautua">2. Embracing Growth and Opportunities</h3>
    </div>
    <div class="flex items-center mx-auto max-w-5xl">
      <p class="font-poppins text-left ml-4 mr-8 max-w-2xl text-base">
        As the cacao fields flourished, so did the aspirations of our farmers. The increasing demand for premium cacao opened doors to new markets and partnerships. To meet these opportunities, Merta Buana Abadi evolved into a cooperative, uniting farmers under a shared vision of prosperity and progress.
      </p>
      <img src="img/Growth and Opportunity.jpg" alt="Growth and Opportunity" class="w-8/12 rounded-lg shadow-md">
    </div>
  </section>

  <section class="border-4 border-black rounded-lg shadow-md p-6 mb-12">
    <div class="mb-8">
      <h3 class="font-poppins text-xl text-center text-hijautua">3. Building Bridges for Collaboration</h3>
    </div>
    <div class="flex items-center mx-auto max-w-5xl">
      <p class="font-poppins text-left ml-4 mr-8 max-w-2xl text-base">
        The formation of Koperasi Buana Merta Abadi marked a new chapter. Acting as a unified platform, the cooperative brought together farmers, markets, and the community. By fostering collaboration and ensuring fair trade, it laid the foundation for a thriving, inclusive cacao industry.
      </p>
      <img src="img/deal.jpg" alt="Creating a Unified Platform" class="w-8/12 rounded-lg shadow-md">
    </div>
  </section>

  <section class="border-4 border-black rounded-lg shadow-md p-6">
    <div class="mb-8">
      <h3 class="font-poppins text-xl text-center text-hijautua">4. A Vision Rooted in Sustainability</h3>
    </div>
    <div class="flex items-center mx-auto max-w-5xl">
      <p class="font-poppins text-left ml-4 mr-8 max-w-2xl text-base">
        Looking ahead, Merta Buana Abadi is steadfast in its commitment to sustainability and innovation. By providing training, resources, and market access, we empower our members to excel. Together, we aim to uplift the cacao industry in Bali, nurturing a legacy of resilience and excellence for generations to come.
      </p>
      <img src="img/gedung.jpg" alt="Achievements" class="w-8/12 rounded-lg shadow-md">
    </div>
  </section>
</section>


   <footer class="bg-gradient-to-r from-hijautua to-hijaumuda text-light py-10 flex justify-center">
        <div class="container mx-auto px-6 text-center">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6">

                <div>
                    <h3 class="text-xl font-bold mb-4 text-white">About</h3>
                    <p class="text-sm text-light/70">
                      "Merta Buana Abadi is more than a cooperative; its a movement dedicated to empowering farmers, fostering sustainable cacao farming, and enhancing Bali’s reputation as a producer of world-class cacao. With collaboration at its core, we bring together communities to cultivate excellence."
                    </p>
                </div>

                <div>
                    <h3 class="text-xl font-bold mb-4 text-white">Quick Links</h3>
                    <ul class="space-y-2 text-sm">
                      <li><a href="Home.php" class="hover:text-hijaumuda">Home</a></li>
                      <li><a href="About.php" class="hover:text-hijaumuda">About</a></li>
                      <li><a href="service.php" class="hover:text-hijaumuda">Services</a></li>
                      <li><a href="member.php" class="hover:text-hijaumuda">Membership</a></li>
                      <li><a href="product.php" class="hover:text-hijaumuda">Products</a></li>
                      <li><a href="news.php" class="hover:text-hijaumuda">News</a></li>
                      <li><a href="contact.php" class="hover:text-hijaumuda">Contact Us</a></li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-xl font-bold mb-4 text-white">Contact</h3>
                    <ul class="space-y-2 text-sm">
                        <li><span class="font-semibold">Email:</span> MertaAbadi@gmail.com</li>
                        <li><span class="font-semibold">Phone:</span> +62 858-4791-9627</li>
                        <li><span class="font-semibold">Address:</span> Jembrana, Bali, Indonesia</li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-xl font-bold mb-4 text-white">Follow Me</h3>
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
                &copy; 2024 Buana Merta Abadi. All rights reserved.
            </div>
        </div>
    </footer>
</body>
</html>
