<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TheBukuPink</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="bg-pink-100 text-color-white tracking-wider">
    <header>
        <nav class="container flex justify-between items-center">
            <div class=" py-5 text-black font-bold text-3xl">
                <a href="home">
                    <span class="text-white">Light</span>Code.
                </a>
            </div>
            <div>
                <ul class=" hidden lg:flex items-center  space-x-6">
                    <li><a href="#home" class="hover:text-red-600 ease-in duration-200">Home</a></li>
                    <li><a href="#features" class="hover:text-red-600 ease-in duration-200">Features</a></li>
                    <li><a href="#testimonial" class="hover:text-red-600 ease-in duration-200">testimonial</a></li>
                    <li><a href="#pricing" class="hover:text-red-600 ease-in duration-200">Pricing</a></li>
                    <li><a href="#contact" class="hover:text-red-600 ease-in duration-200">Contact</a></li>

                    <li><button class="bg-red-500 px-9 py-3 rounded-md capitalize font-bold hover:opacity-80 ease-in duration-200">free trial</button></li>
                </ul>
            </div>

            <!--MOBILE VIEW-->
            <div id="hamburger" class="lg:hidden cursor-pointer z-50">
                <i class="fa-solid fa-bars"></i>
            </div>

            <div id="menu" class=" hidden bg-white h-[100vh] absolute inset-0">
                <ul class="h-full grid place-items-center py-20">
                    <li><a id="hlink" href="" class="hover:text-red-600 ease-in duration-200">Home</a></li>
                    <li><a id="hlink" href="#features" class="hover:text-red-600 ease-in duration-200">Features</a></li>
                    <li><a id="hlink" href="#testimonial" class="hover:text-red-600 ease-in duration-200">testimonial</a></li>
                    <li><a id="hlink" href="#pricing" class="hover:text-red-600 ease-in duration-200">Pricing</a></li>
                    <li><a id="hlink" href="#contact" class="hover:text-red-600 ease-in duration-200">Contact</a></li>

                    <li><button class="btn">free trial</button></li>
                </ul>
            </div>
        </nav>
    </header>

    <main> 
        <section id="home" class="relative">

        <div class="w-80 h-80 bg-red-500 absolute top-0 -left-5 -z-10 blur-2xl opacity-30 overflow-hidden rounded-full"></div>
        <div class="w-80 h-80 bg-green-500 absolute bottom-10 -right-0 -z-10 blur-2xl opacity-30 overflow-hidden rounded-full"></div>
    
        <div class="container py-20">
                <div class="flex flex-col items-center z-20 md:flex-row"> 
                    <div class="text-justify mb-12 md:text-left md:w-1/2 md:pr-10">
                        <h1 class="text-3xl md:text-4xl font-bold leading-snug mb-4">Your Pregnancy Journey</h1>
                        <p class="leading-relaxed mb-10">Track your pregnancy, book doctor appointments, and get expert guidance, all in one place.</p>
                        <button class="btn">Get Started</button></li>
                    </div>

                    <div class="md:w-1/2">
                        <img src="{{ asset('images/mother.png') }}" alt="">
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script>
        //mobiile menu 
        const hamburger = document.querySelector('#hamburger');
        const menu = document.querySelector('#menu');
        const hlink = document.querySelector('#hlink');
        const fasolid = document.querySelector(".fa-solid");

        hamburger.addEventListener("click", () => {
            menu.classList.toggle('hidden');
            fasolid.classList.toggle('fa-xmark');
            fasolid.classList.toggle('fa-times');
        })
    </script>
</body>
</html>