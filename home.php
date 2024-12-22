<html>
 <head>
  <title>
   Photography Website
  </title>
  <script src="https://cdn.tailwindcss.com">
  </script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet"/>
  <style>
   body {
            font-family: 'Roboto', sans-serif;
        }
        .banner {
            position: relative;
            height: 600px;
            color: white;
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .banner img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -1;
        }
        .banner h1 {
            font-size: 4rem;
            font-weight: bold;
        }
        .banner p {
            font-size: 1.5rem;
        }
        .gallery img {
            width: 100%;
            height: auto;
        }
  </style>
 </head>
 <body>
  <nav class="bg-white shadow-md">
   <div class="container mx-auto px-4 py-2 flex justify-between items-center">
    <a class="text-2xl font-bold" href="#">
     PhotoSnap
    </a>
    <div class="space-x-4">
     <a class="text-gray-700 hover:text-gray-900" href="#">
      Home
     </a>
     <a class="text-gray-700 hover:text-gray-900" href="#">
      Gallery
     </a>
     <a class="text-gray-700 hover:text-gray-900" href="#">
      About
     </a>
     <a class="text-gray-700 hover:text-gray-900" href="#">
      Contact
     </a>
     <a class="text-gray-700 hover:text-gray-900" href="?page=login">
      Login
     </a>
     <a class="text-gray-700 hover:text-gray-900" data-bs-target="#signupModal" data-bs-toggle="modal" href="#">
      Sign Up
     </a>
    </div>
   </div>
  </nav>
  <div class="banner">
   <img alt="A beautiful banner image with a scenic view of mountains and a lake" height="600" src="https://storage.googleapis.com/a1aa/image/QbWy2ytRxAY6I9bkUDgWxdfNnRPYrweOG5VRnXWwi0ZWdI9TA.jpg" width="1920"/>
   <div>
    <h1>
     Capture the Moment
    </h1>
    <p>
     Explore the world through our lens
    </p>
   </div>
  </div>
  <div class="container mx-auto my-12">
   <h2 class="text-center text-3xl font-bold mb-8">
    Gallery
   </h2>
   <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
    <div>
     <img alt="A beautiful landscape with mountains and a lake" height="300" src="https://storage.googleapis.com/a1aa/image/ZfdzmAfrKnkbPkqtWMVuj8rZGtofUw1MFAXgVB5PvO826Q6nA.jpg" width="400"/>
    </div>
    <div>
     <img alt="A close-up shot of a colorful butterfly on a flower" height="300" src="https://storage.googleapis.com/a1aa/image/taGjqIYLKvJqJ1BJefe1ZJxKwQQAUOlS0VcOQXtvmWPw6Q6nA.jpg" width="400"/>
    </div>
    <div>
     <img alt="A cityscape at night with illuminated buildings" height="300" src="https://storage.googleapis.com/a1aa/image/2cUenfepChQR8JOkVteTWfesEoWcgJAbv3tkcKChksPWWHSfJA.jpg" width="400"/>
    </div>
    <div>
     <img alt="A serene beach with golden sand and blue water" height="300" src="https://storage.googleapis.com/a1aa/image/0381BD6wuJL8KZemRiCqbsqS4ZEfGWpiRhdjBU4lefP21h0PB.jpg" width="400"/>
    </div>
    <div>
     <img alt="A forest trail covered in autumn leaves" height="300" src="https://storage.googleapis.com/a1aa/image/esnFOyf0Nnsw1kyeRcRe4eAfngLkDcepsSBizSp614efo6Q6nA.jpg" width="400"/>
    </div>
    <div>
     <img alt="A portrait of a smiling woman with a blurred background" height="300" src="https://storage.googleapis.com/a1aa/image/aTeV00NViDXjV63mAyIUlvQZI55f91Rim8KvdD3uvEbSdI9TA.jpg" width="400"/>
    </div>
   </div>
  </div>
  <div class="container mx-auto my-12">
   <h2 class="text-center text-3xl font-bold mb-8">
    Latest News
   </h2>
   <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
    <div class="bg-white shadow-md rounded-lg overflow-hidden">
     <img alt="A camera on a tripod capturing a sunset" class="w-full h-48 object-cover" src="https://storage.googleapis.com/a1aa/image/2cUenfepChQR8JOkVteTWfesEoWcgJAbv3tkcKChksPWWHSfJA.jpg"/>
     <div class="p-4">
      <h3 class="text-xl font-bold mb-2">
       New Camera Gear Released
      </h3>
      <p class="text-gray-700">
       Discover the latest in camera technology with our new gear.
      </p>
     </div>
    </div>
    <div class="bg-white shadow-md rounded-lg overflow-hidden">
     <img alt="A photographer taking a picture of a model in a studio" class="w-full h-48 object-cover" src="https://storage.googleapis.com/a1aa/image/taGjqIYLKvJqJ1BJefe1ZJxKwQQAUOlS0VcOQXtvmWPw6Q6nA.jpg"/>
     <div class="p-4">
      <h3 class="text-xl font-bold mb-2">
       Photography Tips for Beginners
      </h3>
      <p class="text-gray-700">
       Learn the basics of photography with our comprehensive guide.
      </p>
     </div>
    </div>
    <div class="bg-white shadow-md rounded-lg overflow-hidden">
     <img alt="A group of photographers on a photo walk in a city" class="w-full h-48 object-cover" src="https://storage.googleapis.com/a1aa/image/ZfdzmAfrKnkbPkqtWMVuj8rZGtofUw1MFAXgVB5PvO826Q6nA.jpg"/>
     <div class="p-4">
      <h3 class="text-xl font-bold mb-2">
       Join Our Photo Walks
      </h3>
      <p class="text-gray-700">
       Explore the city and improve your photography skills with our guided photo walks.
      </p>
     </div>
    </div>
   </div>
  </div>
  <footer class="bg-gray-800 text-white py-8">
   <div class="container mx-auto text-center">
    <div class="mb-4">
     <a class="text-2xl font-bold" href="#">
      PhotoSnap
     </a>
    </div>
    <div class="mb-4">
     <a class="text-gray-400 hover:text-white mx-2" href="#">
      Home
     </a>
     <a class="text-gray-400 hover:text-white mx-2" href="#">
      Gallery
     </a>
     <a class="text-gray-400 hover:text-white mx-2" href="#">
      About
     </a>
     <a class="text-gray-400 hover:text-white mx-2" href="#">
      Contact
     </a>
    </div>
    <div class="mb-4">
     <a class="text-gray-400 hover:text-white mx-2" href="#">
      <i class="fab fa-facebook-f">
      </i>
     </a>
     <a class="text-gray-400 hover:text-white mx-2" href="#">
      <i class="fab fa-twitter">
      </i>
     </a>
     <a class="text-gray-400 hover:text-white mx-2" href="#">
      <i class="fab fa-instagram">
      </i>
     </a>
     <a class="text-gray-400 hover:text-white mx-2" href="#">
      <i class="fab fa-linkedin-in">
      </i>
     </a>
    </div>
    <div>
     <p class="text-gray-400">
      &copy; 2023 PhotoSnap. All rights reserved.
     </p>
    </div>
   </div>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js">
  </script>
 </body>
</html>