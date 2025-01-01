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
<body>
  <section id="news" class="py-16 bg-gray-50">
    <div class="container mx-auto px-6 max-w-6xl">
      <header class="text-center mb-12">
        <h2 class="font-poppins font-semibold text-4xl text-hijautua">Latest News</h2>
        <p class="font-light text-base text-gray-700 max-w-3xl mx-auto mt-4">
          "Stay updated with the latest news, achievements, and insights from Merta Buana Abadi. Discover how we’re transforming the cacao industry in Bali and beyond."
        </p>
      </header>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
          <img src="img/news1.jpg" alt="News Article 1" class="w-full h-48 object-cover">
          <div class="p-6">
            <h3 class="font-poppins font-semibold text-xl text-hijautua mb-3">Merta Buana Abadi Wins Sustainability Award</h3>
            <p class="font-poppins text-base text-gray-700 mb-4">
              We are proud to announce that our cooperative has been recognized for its commitment to sustainable cacao farming practices. This achievement reflects our dedication to environmental stewardship and community empowerment.
            </p>
            <a href="#news-1" class="text-hijautua font-semibold hover:underline">Read More</a>
          </div>
        </div>

        <div class="bg-white shadow-md rounded-lg overflow-hidden">
          <img src="img/news-2.jpg" alt="News Article 2" class="w-full h-48 object-cover">
          <div class="p-6">
            <h3 class="font-poppins font-semibold text-xl text-hijautua mb-3">New Training Program for Farmers</h3>
            <p class="font-poppins text-base text-gray-700 mb-4">
              Our latest training program equips farmers with advanced techniques in cacao cultivation, ensuring higher yields and better quality. Join us in this journey towards excellence.
            </p>
            <a href="#news-2" class="text-hijautua font-semibold hover:underline">Read More</a>
          </div>
        </div>

        <div class="bg-white shadow-md rounded-lg overflow-hidden">
          <img src="img/news-3.jpg" alt="News Article 3" class="w-full h-48 object-cover">
          <div class="p-6">
            <h3 class="font-poppins font-semibold text-xl text-hijautua mb-3">Expanding Our Market Reach</h3>
            <p class="font-poppins text-base text-gray-700 mb-4">
              Merta Buana Abadi is excited to announce new partnerships that will bring our high-quality cacao to international markets, showcasing Bali's finest to the world.
            </p>
            <a href="#news-3" class="text-hijautua font-semibold hover:underline">Read More</a>
          </div>
        </div>
      </div>

      <div class="text-center mt-12">
        <a href="#allnews" class="bg-hijautua text-white py-3 px-6 rounded-lg hover:bg-green-700 transition">
          View All News
        </a>
      </div>
    </div>
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