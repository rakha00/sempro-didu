<!doctype html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
</head>

<body class="font-poppins bg-white">
    <div class="navbar fixed z-50 bg-[#2563EA] shadow-sm">
        <div class="navbar-start">
            <a class="ml-2 text-xl font-semibold" href="#">GRAND MORTAR</a>
        </div>
        <div class="navbar-center hidden lg:flex">
            <ul class="menu menu-horizontal px-1">
                <li><a href="/home">Home</a></li>
                <li>
                    <a href="/about" class="bg-white/30">About Us</a>
                </li>
                <li><a href="/product-user">Our Product</a></li>
                <li><a href="/contact">Contact Us</a></li>
            </ul>
        </div>
        <div class="navbar-end">
            <a class="mr-2" href="">Hi, {{ Auth::user()->name }}</a>
        </div>
    </div>
    <section class="relative flex min-h-screen w-full flex-col justify-center">
        <video autoplay muted loop playsinline class="absolute left-0 top-0 h-full w-full object-cover"
            title="Metri Background Video - Brand Transformation">
            <source src="{{ asset('assets/video-semen.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>

        <div class="absolute left-0 top-0 h-full w-full bg-black/40"></div>

        <div class="relative flex justify-center">
            <div class="mx-6 flex h-fit w-fit flex-col items-center justify-center md:w-3/4">
                <h1 class="mb-2 self-stretch text-center text-2xl font-normal text-white md:text-4xl lg:text-5xl">
                    Hello, we are GRAND MORTAR
                </h1>
                <div class="lg:w-2/4">
                    <p class="block text-center text-[10px] font-light text-white md:text-base lg:text-lg">
                        With a strong commitment to quality and service, we provide top-grade cement solutions to help
                        you build with confidence—every step of the way.
                    </p>
                </div>
            </div>
        </div>

        <div class="absolute bottom-6 left-1/2 flex -translate-x-1/2 flex-col items-center gap-2">
            <span class="font-ibm animate-bounce text-[10px] font-medium text-white md:text-xs lg:text-xl">
                SCROLL
            </span>
            <div data-svg-wrapper class="relative">
                <svg width="24" class="md:h-12 md:w-12" height="24" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg" aria-label="Scroll Down Indicator">
                    <path
                        d="M6 9C6 7.4087 6.63214 5.88258 7.75736 4.75736C8.88258 3.63214 10.4087 3 12 3C13.5913 3 15.1174 3.63214 16.2426 4.75736C17.3679 5.88258 18 7.4087 18 9V15C18 16.5913 17.3679 18.1174 16.2426 19.2426C15.1174 20.3679 13.5913 21 12 21C10.4087 21 8.88258 20.3679 7.75736 19.2426C6.63214 18.1174 6 16.5913 6 15V9Z"
                        stroke="white" stroke-width="2" stroke-linejoin="round" />
                    <path d="M12 7V11" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </div>
        </div>
    </section>

    <section class="container mx-auto h-full py-20">
        <div class="border-b border-black pb-4">
            <h2 class="text-6xl text-black">Who Are We?</h2>
        </div>

        {{-- <p class="text-black text-justify py-10">At GRAND MORTAR, we believe that every great construction
            project starts with a solid foundation — and that foundation begins with high-quality materials. As a
            trusted cement supplier, we are proud to serve contractors, builders, developers, and homeowners with
            reliable, durable, and cost-effective cement solutions tailored to meet various construction needs.

            Founded on principles of integrity, quality, and commitment, our company has grown to become a dependable
            partner in the building materials industry. With years of experience behind us, we understand the challenges
            and demands of construction projects — whether it's a small-scale residential build or a complex commercial
            development. That’s why we’ve made it our mission to deliver not just products, but peace of mind.

            We specialize in supplying premium-grade cement that meets national and international standards. Our cement
            is suitable for a wide range of applications including foundations, walls, pavements, structures, and more.
            We work closely with reputable manufacturers to ensure consistency in quality and supply, so our clients can
            rely on us without compromise.

            Beyond providing cement, we aim to offer a complete service experience. From the moment you reach out to us,
            our team is ready to assist — whether you need help choosing the right product, getting a quote, or
            arranging timely delivery. Our logistics network is designed to ensure fast, secure, and on-time delivery to
            your project location, wherever it may be.

            What sets us apart is not just the materials we deliver, but the relationships we build. We value long-term
            partnerships with our clients and are committed to supporting them at every stage of their projects. We
            listen, we respond, and we take action — because we understand that your time and goals matter.

            Sustainability and safety are also important to us. We continuously look for ways to reduce waste, optimize
            transportation, and contribute positively to the communities we serve. We believe that responsible business
            practices go hand in hand with growth and long-term success.

            Whether you’re breaking ground on a new home, expanding a business facility, or managing a large
            infrastructure project, GRAND MORTAR is here to support you with the right products, exceptional
            service, and a team that genuinely cares about your success.

            Let’s build something strong together — from the ground up.</p> --}}

        <p class="py-2 text-justify text-black">
            At <strong>GRAND MORTAR</strong>, we believe that every great construction project starts with a solid
            foundation — and that foundation begins with high-quality materials. As a trusted cement supplier, we are
            proud to serve contractors, builders, developers, and homeowners with reliable, durable, and cost-effective
            cement solutions tailored to meet various construction needs.
        </p>

        <p class="text-justify text-black">
            Founded on principles of integrity, quality, and commitment, our company has grown to become a dependable
            partner in the building materials industry. With years of experience behind us, we understand the challenges
            and demands of construction projects — whether it's a small-scale residential build or a complex commercial
            development. That’s why we’ve made it our mission to deliver not just products, but peace of mind.
        </p>

        <p class="pt-2 text-justify text-black">
            We specialize in supplying premium-grade cement that meets national and international standards. Our cement
            is suitable for a wide range of applications including foundations, walls, pavements, structures, and more.
            We work closely with reputable manufacturers to ensure consistency in quality and supply, so our clients can
            rely on us without compromise.
        </p>

        <p class="pt-4 text-justify text-black">
            Beyond providing cement, we aim to offer a complete service experience. From the moment you reach out to us,
            our team is ready to assist — whether you need help choosing the right product, getting a quote, or
            arranging timely delivery. Our logistics network is designed to ensure fast, secure, and on-time delivery to
            your project location, wherever it may be.
        </p>

        <p class="pt-4 text-justify text-black">
            What sets us apart is not just the materials we deliver, but the relationships we build. We value long-term
            partnerships with our clients and are committed to supporting them at every stage of their projects. We
            listen, we respond, and we take action — because we understand that your time and goals matter.
        </p>

        <p class="pt-4 text-justify text-black">
            Sustainability and safety are also important to us. We continuously look for ways to reduce waste, optimize
            transportation, and contribute positively to the communities we serve. We believe that responsible business
            practices go hand in hand with growth and long-term success.
        </p>

        <p class="pt-4 text-justify text-black">
            Whether you’re breaking ground on a new home, expanding a business facility, or managing a large
            infrastructure project, <strong>GRAND MORTAR</strong> is here to support you with the right products,
            exceptional service, and a team that genuinely cares about your success.
        </p>

        <p class="pt-4 text-justify text-black">
            Let’s build something strong together — from the ground up.
        </p>















    </section>

    <footer class="footer sm:footer-horizontal footer-center text-base-content bg-[#2563EA] p-4">
        <aside>
            <p>Copyright ©2025 - All right reserved by GRAND MORTAR</p>
        </aside>
    </footer>
</body>

</html>
