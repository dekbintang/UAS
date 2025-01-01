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
<section id="membership" class="py-16 bg-gray-50">
    <div class="container mx-auto px-6 max-w-5xl">
      <header class="text-center mb-12">
        <h2 class="font-poppins font-semibold text-4xl text-hijautua">Membership</h2>
        <p class="font-light text-base text-gray-700 max-w-3xl mx-auto mt-4">
          "Join Merta Buana Abadi and become a part of a growing community of cacao farmers dedicated to sustainability, innovation, and mutual success. Together, we build a brighter future for Bali’s cacao industry."
        </p>
      </header>
  
<div class="grid grid-cols-1 md:grid-cols-2 gap-8">

  <div class="p-6 bg-white shadow-md rounded-lg">
    <h3 class="font-poppins font-semibold text-2xl text-hijautua mb-4">Membership Benefits</h3>
    <ul class="font-poppins text-base text-gray-700 list-disc list-inside">
      <li>Access to training programs and workshops.</li>
      <li>Discounted rates on farming tools and supplies.</li>
      <li>Priority access to certification assistance programs.</li>
      <li>Connections to local and international markets.</li>
      <li>Support in adopting sustainable farming practices.</li>
      <li>Opportunities for community collaboration and resource sharing.</li>
    </ul>
  </div>

  <div class="p-6 bg-white shadow-md rounded-lg">
    <h3 class="font-poppins font-semibold text-2xl text-hijautua mb-4">How to Join</h3>
    <p class="font-poppins text-base text-gray-700 mb-4">
      Becoming a member of Merta Buana Abadi is simple. Follow these steps to start your journey with us:
    </p>
    <ol class="font-poppins text-base text-gray-700 list-decimal list-inside">
      <li>Fill out the membership application form.</li>
      <li>Provide proof of active cacao farming activity.</li>
      <li>Attend an introductory workshop or orientation session.</li>
      <li>Pay the annual membership fee.</li>
      <li>Start enjoying the full range of membership benefits.</li>
    </ol>
    <div class="mt-6 text-center">
      <a href="daftar_member.php" class="bg-hijautua text-white py-2 px-6 rounded-lg hover:bg-green-700 transition">
        Become a Member
      </a>
    </div>
  </div>
  </div>

  <div class="mt-12">
    <h3 class="font-poppins font-semibold text-2xl text-hijautua text-center mb-8">Membership Tiers</h3>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

      <div class="p-6 bg-gray-100 shadow-md rounded-lg text-center">
        <h4 class="font-poppins font-semibold text-xl text-hijautua mb-4">Basic Member</h4>
        <p class="font-poppins text-base text-gray-700 mb-6">
          Enjoy access to basic training programs, discounted tools, and local market opportunities.
        </p>
        <span class="font-poppins text-lg font-semibold text-gray-800 block mb-4">Annual Fee: $50</span>
        <a href="daftar_member.php" class="bg-hijautua text-white py-2 px-6 rounded-lg hover:bg-green-700 transition">
          Join Now
        </a>
      </div>

      <div class="p-6 bg-gray-100 shadow-md rounded-lg text-center">
        <h4 class="font-poppins font-semibold text-xl text-hijautua mb-4">Premium Member</h4>
        <p class="font-poppins text-base text-gray-700 mb-6">
          Includes advanced workshops, certification assistance, and broader market connections.
        </p>
        <span class="font-poppins text-lg font-semibold text-gray-800 block mb-4">Annual Fee: $100</span>
        <a href="daftar_member.php" class="bg-hijautua text-white py-2 px-6 rounded-lg hover:bg-green-700 transition">
          Join Now
        </a>
      </div>

      <div class="p-6 bg-gray-100 shadow-md rounded-lg text-center">
        <h4 class="font-poppins font-semibold text-xl text-hijautua mb-4">Elite Member</h4>
        <p class="font-poppins text-base text-gray-700 mb-6">
          Full benefits including personalized support, leadership opportunities, and premium market access.
        </p>
        <span class="font-poppins text-lg font-semibold text-gray-800 block mb-4">Annual Fee: $200</span>
        <a href="daftar_member.php" class="bg-hijautua text-white py-2 px-6 rounded-lg hover:bg-green-700 transition">
          Join Now
        </a>
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