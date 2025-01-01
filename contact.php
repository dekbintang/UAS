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
    <section id="contact" class="py-16 bg-white">
        <div class="container mx-auto px-6 max-w-6xl">
          <header class="text-center mb-12">
            <h2 class="font-poppins font-semibold text-4xl text-hijautua">Contact Us</h2>
            <p class="font-light text-base text-gray-700 max-w-3xl mx-auto mt-4">
              "Have questions or want to get in touch? We're here to help. Reach out to us for inquiries, collaboration opportunities, or support."
            </p>
          </header>

          <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            
            <div class="bg-gray-100 p-8 rounded-lg shadow-md">
              <form action="#" method="POST">
                <div class="mb-6">
                  <label for="name" class="block font-poppins font-medium text-gray-700 mb-2">Full Name</label>
                  <input type="text" id="name" name="name" placeholder="Your Full Name" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-hijautua" required>
                </div>
                <div class="mb-6">
                  <label for="email" class="block font-poppins font-medium text-gray-700 mb-2">Email Address</label>
                  <input type="email" id="email" name="email" placeholder="Your Email Address" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-hijautua" required>
                </div>
                <div class="mb-6">
                  <label for="message" class="block font-poppins font-medium text-gray-700 mb-2">Message</label>
                  <textarea id="message" name="message" rows="5" placeholder="Your Message" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-hijautua" required></textarea>
                </div>
                <button type="submit" class="bg-hijautua text-white font-semibold py-3 px-6 rounded-lg hover:bg-green-700 transition">
                  Send Message
                </button>
              </form>
            </div>

            <div class="flex flex-col justify-center space-y-6">
              <div class="flex items-center">
                <i class="fas fa-map-marker-alt text-hijautua text-2xl mr-4"></i>
                <div>
                  <h4 class="font-poppins font-semibold text-lg text-gray-800">Our Address</h4>
                  <p class="font-light text-base text-gray-700"> Merta Buana Street, Jembrana, Bali, Indonesia</p>
                </div>
              </div>
              <div class="flex items-center">
                <i class="fas fa-envelope text-hijautua text-2xl mr-4"></i>
                <div>
                  <h4 class="font-poppins font-semibold text-lg text-gray-800">Email Us</h4>
                  <p class="font-light text-base text-gray-700">mertaAbadi@gmail.com</p>
                </div>
              </div>
              <div class="flex items-center">
                <i class="fas fa-phone-alt text-hijautua text-2xl mr-4"></i>
                <div>
                  <h4 class="font-poppins font-semibold text-lg text-gray-800">Call Us</h4>
                  <p class="font-light text-base text-gray-700">+62 858-4791-9627</p>
                </div>
              </div>
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