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
  <section id="services" class="py-16 bg-white">
      <div class="container mx-auto px-6 max-w-5xl">
        <header class="text-center mb-12">
          <h2 class="font-poppins font-semibold text-4xl text-hijautua">Our Services</h2>
          <p class="font-light text-base text-gray-700 max-w-3xl mx-auto mt-4">
            "At Merta Buana Abadi, we are committed to providing comprehensive services that empower farmers, ensure premium-quality cacao production, and strengthen connections between producers and markets."
          </p>
        </header>
    
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

          <div class="p-6 bg-gray-100 shadow-md rounded-lg text-center">
            <img src="img/service1.jpg" alt="Training and Education" class="w-20 h-20 mx-auto mb-4">
            <h3 class="font-poppins font-semibold text-xl text-hijautua mb-2">Training and Education</h3>
            <p class="font-poppins text-base text-gray-700">
              We provide workshops and hands-on training to farmers, focusing on sustainable farming techniques, pest control, and high-quality cacao cultivation.
            </p>
          </div>

          <div class="p-6 bg-gray-100 shadow-md rounded-lg text-center">
            <img src="img/service2.jpg" alt="Access to Resources" class="w-20 h-20 mx-auto mb-4">
            <h3 class="font-poppins font-semibold text-xl text-hijautua mb-2">Access to Resources</h3>
            <p class="font-poppins text-base text-gray-700">
              Members gain access to essential farming resources, such as organic fertilizers, advanced farming tools, and technical support to enhance productivity.
            </p>
          </div>
    
          <div class="p-6 bg-gray-100 shadow-md rounded-lg text-center">
            <img src="img/service3.jpg" alt="Market Connection" class="w-20 h-20 mx-auto mb-4">
            <h3 class="font-poppins font-semibold text-xl text-hijautua mb-2">Market Connection</h3>
            <p class="font-poppins text-base text-gray-700">
              We connect farmers with local and international markets, ensuring fair trade practices and competitive pricing for their cacao products.
            </p>
          </div>
    
          <div class="p-6 bg-gray-100 shadow-md rounded-lg text-center">
            <img src="img/service4.jpg" alt="Sustainability Initiatives" class="w-20 h-20 mx-auto mb-4">
            <h3 class="font-poppins font-semibold text-xl text-hijautua mb-2">Sustainability Initiatives</h3>
            <p class="font-poppins text-base text-gray-700">
              Promoting eco-friendly practices, we help farmers reduce environmental impact through sustainable farming methods and waste management programs.
            </p>
          </div>
    
          <div class="p-6 bg-gray-100 shadow-md rounded-lg text-center">
            <img src="img/service5.jpg" alt="Certification Assistance" class="w-20 h-20 mx-auto mb-4">
            <h3 class="font-poppins font-semibold text-xl text-hijautua mb-2">Certification Assistance</h3>
            <p class="font-poppins text-base text-gray-700">
              We support farmers in obtaining certifications like organic and fair trade, increasing their credibility and access to premium markets.
            </p>
          </div>
    
          <div class="p-6 bg-gray-100 shadow-md rounded-lg text-center">
            <img src="img/service6.jpg" alt="Community Support" class="w-20 h-20 mx-auto mb-4">
            <h3 class="font-poppins font-semibold text-xl text-hijautua mb-2">Community Support</h3>
            <p class="font-poppins text-base text-gray-700">
              Through various programs, we strengthen the community by encouraging collaboration, resource-sharing, and collective problem-solving.
            </p>
          </div>
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