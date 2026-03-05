<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>CraftyAutomations - AI Automation Agency</title>
  <link rel="icon" type="image/png" href="Logo.png" />
  <script src="https://cdn.tailwindcss.com"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
  <style>
    :root {
      --vivid-purple: #9a2efe;
      --light-blue: #4fc3f7;
      --dark-purple: #4a148c;
      --global-bg: linear-gradient(135deg, #0f051d, #2c2f65, #b36ca5);
    }

    .gradient-text {
      background: linear-gradient(135deg,
          var(--vivid-purple),
          var(--light-blue));
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
    }

    .robot-float {
      animation: float 6s ease-in-out infinite;
    }

    @keyframes float {

      0%,
      100% {
        transform: translateY(0) rotate(0deg);
      }

      25% {
        transform: translateY(-15px) rotate(2deg);
      }

      75% {
        transform: translateY(15px) rotate(-2deg);
      }
    }

    .robot-glow {
      animation: glow 3s ease-in-out infinite;
    }

    @keyframes glow {

      0%,
      100% {
        filter: drop-shadow(0 0 5px rgba(154, 46, 254, 0.3));
      }

      50% {
        filter: drop-shadow(0 0 20px rgba(154, 46, 254, 0.6));
      }
    }

    .faq-item {
      transition: all 0.3s ease;
    }

    .faq-content {
      max-height: 0;
      overflow: hidden;
      opacity: 0;
      padding-bottom: 0;
      transition: max-height 0.5s ease-out, opacity 0.3s ease,
        padding 0.3s ease;
    }

    .faq-content.active {
      max-height: 500px;
      /* adjust if needed */
      opacity: 1;
      padding-bottom: 1rem;
      /* restores bottom padding when open */
    }

    .faq-icon {
      transition: transform 0.3s ease;
    }

    .faq-icon.active {
      transform: rotate(45deg);
    }

    .form-input {
      transition: all 0.3s ease;
    }

    .form-input:focus {
      transform: translateY(-2px);
      box-shadow: 0 4px 12px rgba(154, 46, 254, 0.1);
    }

    .success-message {
      animation: slideIn 0.5s ease-out;
    }

    @keyframes slideIn {
      from {
        transform: translateY(-20px);
        opacity: 0;
      }

      to {
        transform: translateY(0);
        opacity: 1;
      }
    }

    .section-fade {
      opacity: 0;
      transform: translateY(20px);
      transition: all 0.8s ease;
    }

    .section-fade.active {
      opacity: 1;
      transform: translateY(0);
    }

    .hover-scale {
      transition: transform 0.3s ease;
    }

    .hover-scale:hover {
      transform: scale(1.05);
    }

    .nav-link {
      position: relative;
      transition: color 0.3s ease;
    }

    .nav-link::after {
      content: "";
      position: absolute;
      width: 0;
      height: 2px;
      bottom: -4px;
      left: 0;
      background: linear-gradient(135deg,
          var(--vivid-purple),
          var(--light-blue));
      transition: width 0.3s ease;
    }

    .nav-link:hover::after {
      width: 100%;
    }

    .service-card {
      transition: all 0.3s ease;
      border: 1px solid transparent;
    }

    .service-card:hover {
      transform: translateY(-10px);
      border-color: var(--vivid-purple);
      box-shadow: 0 10px 30px rgba(154, 46, 254, 0.1);
    }

    .scroll-progress {
      position: fixed;
      top: 0;
      left: 0;
      width: 0%;
      height: 3px;
      background: linear-gradient(135deg,
          var(--vivid-purple),
          var(--light-blue));
      z-index: 1000;
      transition: width 0.1s ease;
    }

    /* Mobile Menu Styles */
    .mobile-menu {
      position: fixed;
      top: 0;
      right: -100%;
      width: 80%;
      max-width: 400px;
      height: 100vh;
      background: #0e1424;
      transition: right 0.3s ease-in-out;
      z-index: 1000;
      padding: 2rem;
    }

    .mobile-menu.active {
      right: 0;
    }

    .mobile-menu-overlay {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.5);
      opacity: 0;
      visibility: hidden;
      transition: all 0.3s ease;
      z-index: 999;
    }

    .mobile-menu-overlay.active {
      opacity: 1;
      visibility: visible;
    }

    /* Hero Image Animation */
    .hero-image-container {
      position: relative;
    }

    .hero-image {
      animation: float 6s ease-in-out infinite;
    }

    @keyframes float {

      0%,
      100% {
        transform: translateY(0) rotate(0deg);
      }

      25% {
        transform: translateY(-15px) rotate(2deg);
      }

      75% {
        transform: translateY(15px) rotate(-2deg);
      }
    }

    .hero-image-glow {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      width: 100%;
      height: 100%;
      background: radial-gradient(circle,
          rgba(154, 46, 254, 0.2) 0%,
          rgba(154, 46, 254, 0) 70%);
      animation: glow 3s ease-in-out infinite;
      pointer-events: none;
    }

    @keyframes glow {

      0%,
      100% {
        opacity: 0.5;
        transform: translate(-50%, -50%) scale(1);
      }

      50% {
        opacity: 0.8;
        transform: translate(-50%, -50%) scale(1.1);
      }
    }

    @media (max-width: 640px) {

      html,
      body {
        max-width: 100vw !important;
        overflow-x: hidden !important;
        box-sizing: border-box !important;
      }

      .max-w-7xl,
      .max-w-6xl,
      .hero-image-container,
      .hero-image-glow,
      section#home,
      .main-content,
      .flex-1,
      .w-full,
      .px-4,
      .md\:px-8 {
        max-width: 100vw !important;
        width: 100vw !important;
        margin-left: 0 !important;
        margin-right: 0 !important;
        padding-left: 1rem !important;
        padding-right: 1.5rem !important;
        box-sizing: border-box !important;
      }

      header {
        max-width: 100vw !important;
        width: 100vw !important;
        margin-left: 0 !important;
        margin-right: 0 !important;
        padding-left: 1rem !important;
        padding-right: 1.5rem !important;
        box-sizing: border-box !important;
      }

      h1,
      .text-4xl,
      .text-5xl {
        font-size: 2rem !important;
        line-height: 2.3rem !important;
      }

      .flex-1 {
        min-width: 0 !important;
      }

      iframe {
        max-width: 100% !important;
        width: 100% !important;
        box-sizing: border-box !important;
      }

      /* Portfolio section fix */
      #portfolio .grid {
        display: flex !important;
        flex-direction: column !important;
        align-items: center !important;
        gap: 1.5rem !important;
      }

      #portfolio .bg-gray-100 {
        width: 100% !important;
        max-width: 400px !important;
        margin: 0 auto !important;
        box-sizing: border-box !important;
      }

      #portfolio .aspect-video {
        width: 100% !important;
        max-width: 100% !important;
        margin: 0 auto !important;
        box-sizing: border-box !important;
        position: relative !important;
        padding-bottom: 56.25% !important;
        /* 16:9 aspect ratio */
        height: 0 !important;
      }

      #portfolio .aspect-video iframe {
        position: absolute !important;
        top: 0 !important;
        left: 0 !important;
        width: 100% !important;
        height: 100% !important;
        display: block !important;
        border-radius: 0.75rem !important;
      }

      /* Contact section fix */
      #contact .bg-white,
      #contact .rounded-xl {
        width: 100% !important;
        max-width: 400px !important;
        margin-left: auto !important;
        margin-right: auto !important;
        box-sizing: border-box !important;
        padding-left: 1rem !important;
        padding-right: 1rem !important;
      }

      #contact input,
      #contact textarea {
        width: 100% !important;
        max-width: 100% !important;
        box-sizing: border-box !important;
        margin-left: 0 !important;
        margin-right: 0 !important;
      }

      #contact button,
      #contact input[type="submit"] {
        width: 100% !important;
        max-width: 100% !important;
        margin-left: 0 !important;
        margin-right: 0 !important;
        margin-top: 1rem !important;
        display: block !important;
      }

      section.bg-\[\#0e1424\] {
        padding-left: 1rem !important;
        padding-right: 1rem !important;
      }

      section.bg-\[\#0e1424\] .grid {
        display: flex !important;
        flex-direction: column !important;
        gap: 2rem !important;
        align-items: center !important;
      }

      section.bg-\[\#0e1424\] h2,
      section.bg-\[\#0e1424\] p {
        text-align: center !important;
      }

      section.bg-\[\#0e1424\] form {
        flex-direction: column !important;
        gap: 1rem !important;
        align-items: stretch !important;
      }

      section.bg-\[\#0e1424\] input[type=email],
      section.bg-\[\#0e1424\] button[type=submit] {
        width: 100% !important;
        min-width: 0 !important;
        box-sizing: border-box !important;
      }

      section.bg-\[\#0e1424\] img {
        width: 180px !important;
        height: 180px !important;
        margin: 0 auto !important;
        display: block !important;
      }
    }
  </style>
</head>

<body class="text-gray-900 font-sans"
  style="background-image: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('IMG.png'); background-size: cover; background-position: center; background-attachment: fixed; background-repeat: no-repeat;">


  <!-- Your Main Content (Keep content wrapped in relative z-10 so it stays above overlay) -->
  <div class="relative z-10">
    <!-- Mobile Menu Overlay -->
    <div class=" mobile-menu-overlay" onclick="toggleMenu()">
    </div>

    <!-- Mobile Menu -->
    <div class="mobile-menu bg-[linear-gradient(90deg,_#A24FFF,_#F45EE5,_#27D3DF)]">
      <div class="flex justify-between items-center mb-8">
        <img src="Logo.png" alt="CraftyAutomations Logo" class="h-10" />
        <button onclick="toggleMenu()" class="text-white text-2xl">×</button>
      </div>
      <nav class="flex flex-col space-y-4">
        <a href="#home" class="text-white hover:text-gray-200 transition-colors" onclick="toggleMenu()">Home</a>
        <a href="#services" class="text-white hover:text-gray-200 transition-colors" onclick="toggleMenu()">Services</a>
        <a href="#process" class="text-white hover:text-gray-200 transition-colors" onclick="toggleMenu()">Process</a>
        <a href="#testimonials" class="text-white hover:text-gray-200 transition-colors"
          onclick="toggleMenu()">Reviews</a>
        <a href="#faq" class="text-white hover:text-gray-200 transition-colors" onclick="toggleMenu()">FAQ</a>
        <a href="#contact" class="text-white hover:text-gray-200 transition-colors" onclick="toggleMenu()">Contact</a>
        <a href="https://calendly.com/craftyautomation/30min" target="_blank" rel="noopener noreferrer"
          class="mt-6 px-6 py-3 rounded-full bg-[var(--vivid-purple)] text-white font-medium hover:bg-[var(--dark-purple)] transition-all hover-scale text-center">
          Schedule Discovery Call
        </a>
      </nav>
    </div>

    <!-- Scroll Progress Bar -->
    <div class="scroll-progress"></div>

    <!-- Header -->
    <header
      class="w-full py-6 px-4 shadow-md fixed top-0 z-50 transition-all duration-300 bg-[linear-gradient(90deg,_#A24FFF,_#F45EE5,_#27D3DF)]">
      <div class="max-w-7xl mx-auto flex justify-between items-center w-full">
        <a href="#home" class="hover-scale">
          <img src="Logo.png" alt="CraftyAutomations Logo" class="h-12 md:h-12" />
        </a>
        <div class="flex items-center space-x-6">
          <nav class="hidden md:flex space-x-6 text-sm font-semibold">
            <a href="#home" class="nav-link text-white">Home</a>
            <a href="#services" class="nav-link text-white">Services</a>
            <a href="#process" class="nav-link text-white">Process</a>
            <a href="#testimonials" class="nav-link text-white">Reviews</a>
            <a href="#faq" class="nav-link text-white">FAQ</a>
            <a href="#contact" class="nav-link text-white">Contact</a>
          </nav>
          <a href="https://calendly.com/craftyautomation/30min" target="_blank" rel="noopener noreferrer"
            class="hidden md:inline-block px-6 py-2 rounded-full bg-[#F45EE5] text-white font-medium hover:bg-[var(--dark-purple)] transition-all hover-scale">
            Schedule Discovery Call
          </a>
        </div>
        <!-- Mobile Menu Button -->
        <button class="md:hidden text-white text-2xl" onclick="toggleMenu()">
          ☰
        </button>
      </div>
    </header>

    <!-- Hero Section -->
    <section class="min-h-screen flex items-center pt-20 mt-10" id="home">
      <div class="max-w-7xl mx-auto px-4 md:px-8 flex flex-col md:flex-row items-center justify-between gap-12">
        <div class="flex-1 text-center md:text-left" data-aos="fade-right">
          <h1 class="text-4xl text-white md:text-5xl font-bold leading-tight mb-4">
            Transform Your Business with
            <span class="bg-gradient-to-r from-[#A24FFF] to-[#F45EE5] bg-clip-text text-transparent">AI
              Automation</span>
          </h1>
          <p class="text-lg text-white mb-6 max-w-xl">
            AI Voice & Text Agents that reduce costs by 10x and book 20+ calls
            per month. Save 40+ hours weekly with our cutting-edge automation
            solutions.
          </p>

          <div class="flex flex-wrap justify-center md:justify-start gap-8 mb-8">
            <div class="text-center hover-scale" data-aos="fade-up" data-aos-delay="100">
              <div class="text-3xl font-bold text-[#F45EE5]">
                40+
              </div>
              <div class="text-white">Hours Saved/Week</div>
            </div>
            <div class="text-center hover-scale" data-aos="fade-up" data-aos-delay="200">
              <div class="text-3xl font-bold text-[#F45EE5]">
                $120K
              </div>
              <div class="text-white">Saved/Year</div>
            </div>
            <div class="text-center hover-scale" data-aos="fade-up" data-aos-delay="300">
              <div class="text-3xl font-bold text-[#F45EE5]">
                10x
              </div>
              <div class="text-white">Cost Reduction</div>
            </div>
          </div>

          <div class="flex flex-col sm:flex-row gap-4 justify-center md:justify-start">
            <a href="https://calendly.com/craftyautomation/30min" target="_blank" rel="noopener noreferrer"
              class="px-6 py-3 rounded-full bg-[#F45EE5] text-white font-medium hover:bg-[var(--dark-purple)] transition-all hover-scale">
              Schedule Discovery Call
            </a>
            <a href="#services"
              class="px-6 py-3 rounded-full border border-[#F45EE5] text-white font-medium hover:bg-[var(--vivid-purple)] hover:text-white transition-all hover-scale">
              Learn More
            </a>
          </div>
        </div>

        <!-- Updated Hero Image -->
        <div class="flex-1 flex justify-center hero-image-container" data-aos="fade-left">
          <div class="w-full max-w-2xl aspect-video rounded overflow-hidden shadow-lg">
            <iframe class="w-full h-full" src="https://www.youtube.com/embed/VonVmg5em08" title="AI Voice Agent"
              frameborder="0" allowfullscreen></iframe>
          </div>
          <div class="hero-image-glow"></div>
        </div>
      </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-20">
      <div class="max-w-6xl mx-auto px-4">
        <h2
          class="text-3xl font-bold text-center mb-4 bg-gradient-to-r from-white via-pink-400 to-blue-400 text-transparent bg-clip-text"
          data-aos="fade-up">
          OUR SERVICES
        </h2>
        <p class="text-center text-white mb-12" data-aos="fade-up" data-aos-delay="100">
          Comprehensive automation solutions to transform your business
          operations
        </p>
        <div class="grid md:grid-cols-3 gap-8">
          <div class="service-card p-6 rounded-xl shadow-md border-t-4 border-[var(--vivid-purple)]"
            style="background: rgba(20,20,40,0.7);" data-aos="fade-up" data-aos-delay="200">
            <h3 class="text-xl font-semibold mb-2 text-white">AI Voice Agents</h3>
            <p class="text-gray-300">
              AI-powered voice agents to increase the conversion rate by 2.5x and
              to automate calls, handle inquiries, and enhance customer
              interaction.
            </p>
          </div>
          <div class="service-card p-6 rounded-xl shadow-md border-t-4 border-[var(--light-blue)]"
            style="background: rgba(20,20,40,0.7);" data-aos="fade-up" data-aos-delay="300">
            <h3 class="text-xl font-semibold mb-2 text-white">AI Text Agents</h3>
            <p class="text-gray-300">
              AI omni-channel text agents engage with clients within 5 minutes
              and increase conversion rates up to 30%. One bot can save up to 40
              hours per week.
            </p>
          </div>
          <div class="service-card p-6 rounded-xl shadow-md border-t-4 border-[var(--dark-purple)]"
            style="background: rgba(20,20,40,0.7);" data-aos="fade-up" data-aos-delay="400">
            <h3 class="text-xl font-semibold mb-2 text-white">
              AI Social Media Automation
            </h3>
            <p class="text-gray-300">
              AI-powered automation that scrapes top content creators and
              repurposes their content — all while you're making a coffee.
            </p>
          </div>
          <div class="service-card p-6 rounded-xl shadow-md border-t-4 border-[var(--vivid-purple)]"
            style="background: rgba(20,20,40,0.7);" data-aos="fade-up" data-aos-delay="500">
            <h3 class="text-xl font-semibold mb-2 text-white">AI Automations</h3>
            <p class="text-gray-300">
              Automate email workflows, meeting scheduling, and repetitive
              tasks. One smart bot can save 40+ hours per week.
            </p>
          </div>
          <div class="service-card p-6 rounded-xl shadow-md border-t-4 border-[var(--light-blue)]"
            style="background: rgba(20,20,40,0.7);" data-aos="fade-up" data-aos-delay="600">
            <h3 class="text-xl font-semibold mb-2 text-white">AI Powered Dashboards</h3>
            <p class="text-gray-300">
              Build analytics dashboards and ChatGPT-style interfaces for
              real-time interaction with your AI agents.
            </p>
          </div>
          <div class="service-card p-6 rounded-xl shadow-md border-t-4 border-[var(--dark-purple)]"
            style="background: rgba(20,20,40,0.7);" data-aos="fade-up" data-aos-delay="700">
            <h3 class="text-xl font-semibold mb-2 text-white">AI Full Stack Apps</h3>
            <p class="text-gray-300">
              Complete AI-driven SaaS solutions for industries like real estate
              and healthcare, with smart analytics and one-click automation
              tools.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Process Section -->
    <section id="process" class="min-h-screen flex items-center justify-center text-white py-20">
      <div class="max-w-6xl mx-auto px-4 text-center">
        <h2 class="text-4xl font-bold mb-2" data-aos="fade-up">
          <span class="bg-gradient-to-r from-white via-pink-400 to-blue-400 text-transparent bg-clip-text">OUR
            PROCESS</span>
        </h2>
        <p class="text-gray-300 mb-16" data-aos="fade-up" data-aos-delay="100">
          Simple steps to transform your business with AI automation
        </p>
        <div class="grid md:grid-cols-3 gap-12">
          <div data-aos="fade-up" data-aos-delay="200">
            <div
              class="w-16 h-16 mx-auto rounded-full bg-gradient-to-br from-purple-400 to-pink-500 flex items-center justify-center text-2xl font-bold mb-4 shadow-lg hover-scale">
              1
            </div>
            <h3 class="text-xl font-semibold mb-2 text-white">Branded Lead Magnets</h3>
            <p class="text-gray-300">
              Turn website visitors into high-quality leads with fully
              customized, 24/7 lead magnets. Unlimited usage ensures your brand
              captures potential customers effortlessly.
            </p>
          </div>
          <div data-aos="fade-up" data-aos-delay="300">
            <div
              class="w-16 h-16 mx-auto rounded-full bg-gradient-to-br from-purple-400 to-pink-500 flex items-center justify-center text-2xl font-bold mb-4 shadow-lg hover-scale">
              2
            </div>
            <h3 class="text-xl font-semibold mb-2 text-white">Email Automation</h3>
            <p class="text-gray-300">
              Send lead magnet content and automated follow-ups directly from
              your branded email accounts. Maintain a polished, on-brand
              presence in every interaction.
            </p>
          </div>
          <div data-aos="fade-up" data-aos-delay="400">
            <div
              class="w-16 h-16 mx-auto rounded-full bg-gradient-to-br from-purple-400 to-pink-500 flex items-center justify-center text-2xl font-bold mb-4 shadow-lg hover-scale">
              3
            </div>
            <h3 class="text-xl font-semibold mb-2 text-white">CRM Integration</h3>
            <p class="text-gray-300">
              Keep your leads organized with our built-in CRM or integrate with
              your existing system. Track interactions, manage follow-ups, and
              gain actionable insights.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Portfolio -->
    <section id="portfolio" class="py-20">
      <div class="max-w-6xl mx-auto px-4">
        <h2
          class="text-3xl font-bold text-center mb-4 bg-gradient-to-r from-white via-pink-400 to-blue-400 text-transparent bg-clip-text">
          PORTFOLIO
        </h2>
        <div class="grid md:grid-cols-2 gap-6">
          <div class="bg-gray-100 p-4 rounded-xl shadow">
            <div class="aspect-video mb-2">
              <iframe class="w-full h-full rounded" src="https://www.youtube.com/embed/muX0bQLEe1A"
                title="n8n AI Email Assistant" frameborder="0" allowfullscreen></iframe>
            </div>
            <h4 class="text-lg font-semibold text-black">n8n AI Email Assistant</h4>
          </div>
          <div class="bg-gray-100 p-4 rounded-xl shadow">
            <div class="aspect-video mb-2">
              <iframe class="w-full h-full rounded" src="https://www.youtube.com/embed/EACkunRY3JI"
                title="AI Blog Assistant" frameborder="0" allowfullscreen></iframe>
            </div>
            <h4 class="text-lg font-semibold text-black">AI Blog Assistant</h4>
          </div>
          <div class="bg-gray-100 p-4 rounded-xl shadow">
            <div class="aspect-video mb-2">
              <iframe class="w-full h-full rounded" src="https://youtube.com/embed/peusiqsJq5g"
                title="AI Real Estate App" frameborder="0" allowfullscreen></iframe>
            </div>
          
            <h4 class="text-lg font-semibold text-black">AI Omnichannel Agent</h4>
          </div>
          <div class="bg-gray-100 p-4 rounded-xl shadow">
            <div class="aspect-video mb-2">
              <iframe class="w-full h-full rounded" src="https://youtube.com/embed/qwS2inobBrk"
                title="AI Real Estate App" frameborder="0" allowfullscreen></iframe>
            </div>
            <h4 class="text-lg font-semibold text-black">AI Voice Agent</h4>
          </div>
        </div>
      </div>
    </section>

    <!-- Testimonials -->
    <section id="testimonials" class="py-20 text-white">
      <div class="max-w-6xl mx-auto px-4">
        <div class="text-center mb-12">
          <h2 class="text-3xl font-bold mb-2 text-white">
            WHAT OUR <span
              class="bg-gradient-to-r from-white via-pink-400 to-blue-400 text-transparent bg-clip-text">CLIENTS
              SAY!</span>
          </h2>
          <p class="text-white">
            Real results from businesses that transformed with our AI solutions
          </p>
        </div>

        <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
          <!-- Testimonial 1 -->
          <div class="bg-gray-50 p-6 rounded-xl shadow-md">
            <p class="text-gray-700 mb-4">
              "As a content manager, I needed a tool to streamline our blog
              creation process. The AI Blog Assistant not only generates
              high-quality drafts but also adapts to our brand's voice
              seamlessly. It's increased our content output by 50% without
              compromising on quality."
            </p>
            <div class="text-sm font-semibold text-gray-900">Michael Smith</div>
            <div class="text-xs text-gray-500">
              Content Manager at Creative Solutions
            </div>
          </div>

          <!-- Testimonial 2 -->
          <div class="bg-gray-50 p-6 rounded-xl shadow-md">
            <p class="text-gray-700 mb-4">
              "Before working with CraftyAutomation, all our leads came from referrals, and we were spending over
              $3,000/month on appointment setters with inconsistent results. They built us an automated cold email
              outreach system for under $100 that now brings in additional 10-20 qualified calls every month—completely on autopilot.
              The ROI is unbelievable."
            </p>
            <div class="text-sm font-semibold text-gray-900">David Golub</div>
            <div class="text-xs text-gray-500">
             Founder of Medlines Mtb</div>
          </div>

          <!-- Testimonial 3 -->
          <div class="bg-gray-50 p-6 rounded-xl shadow-md">
            <p class="text-gray-700 mb-4">
              "We needed a full-stack AI app to handle patient data and
              predictive diagnostics. The solution reduced diagnostic errors by
              30%, and we now have more than 10,000 daily users."
            </p>
            <div class="text-sm font-semibold text-gray-900">Chris Lee</div>
            <div class="text-xs text-gray-500">
              Product Lead at Innovatech Industries
            </div>
          </div>
        </div>

        <!-- Video Section -->
        <div class="mt-16" style="max-width: 100%; max-height: 100%">
          <div style="
              position: relative;
              padding-bottom: 56.25%;
              height: 0;
              overflow: hidden;
              border-radius: 12px;
              box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            ">
            <iframe src="https://www.youtube.com/embed/F_oVprjg4AQ"
              title="Client Testimonial on Social Media Video Automation" frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
              referrerpolicy="strict-origin-when-cross-origin" allowfullscreen style="
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                border-radius: 12px;
              "></iframe>
          </div>
        </div>
      </div>
    </section>

    <!-- FAQ Section -->
    <section id="faq" class="py-20">
      <div class="max-w-4xl mx-auto px-4">
        <h2
          class="text-3xl font-bold text-center mb-4 bg-gradient-to-r from-white via-pink-400 to-blue-400 text-transparent bg-clip-text"
          data-aos="fade-up">
          Frequently Asked Questions
        </h2>
        <p class="text-center text-white mb-10" data-aos="fade-up" data-aos-delay="100">
          Everything you need to know about our AI automation services
        </p>

        <div class="space-y-4">
          <div class="faq-item border border-gray-200 rounded-lg overflow-hidden" data-aos="fade-up"
            data-aos-delay="200">
            <button
              class="w-full text-left p-4 flex justify-between items-center font-medium text-white hover:bg-pink-400 transition-colors"
              onclick="toggleFAQ(this)">
              What types of businesses can benefit from your AI automation
              solutions?
              <span class="faq-icon text-xl">+</span>
            </button>
            <div class="faq-content px-4 pb-4 text-white">
              Our solutions are ideal for service-based businesses, agencies,
              real estate, healthcare, e-commerce, and any business looking to
              streamline operations, increase engagement, and reduce manual
              workload using AI automation tools.
            </div>
          </div>

          <div class="faq-item border border-gray-200 rounded-lg overflow-hidden" data-aos="fade-up"
            data-aos-delay="300">
            <button
              class="w-full text-left p-4 flex justify-between items-center font-medium text-white hover:bg-pink-400 transition-colors"
              onclick="toggleFAQ(this)">
              What is AI Social Media Automation?
              <span class="faq-icon text-xl">+</span>
            </button>
            <div class="faq-content px-4 pb-4 text-white">
              AI Social Media Automation uses advanced AI agents to generate,
              schedule, and post content across multiple platforms (Instagram,
              LinkedIn, Facebook, etc.), respond to DMs, and analyze performance
              metrics to grow your social presence—without lifting a finger.
            </div>
          </div>

          <div class="faq-item border border-gray-200 rounded-lg overflow-hidden" data-aos="fade-up"
            data-aos-delay="400">
            <button
              class="w-full text-left p-4 flex justify-between items-center font-medium text-white hover:bg-pink-400 transition-colors"
              onclick="toggleFAQ(this)">
              How fast can your AI Text Agents respond to clients?
              <span class="faq-icon text-xl">+</span>
            </button>
            <div class="faq-content px-4 pb-4 text-white">
              Our AI omni-channel text agents respond within 5 minutes or less,
              dramatically improving customer engagement and increasing
              conversion rates by up to 30%.
            </div>
          </div>

          <div class="faq-item border border-gray-200 rounded-lg overflow-hidden" data-aos="fade-up"
            data-aos-delay="500">
            <button
              class="w-full text-left p-4 flex justify-between items-center font-medium text-white hover:bg-pink-400 transition-colors"
              onclick="toggleFAQ(this)">
              What can your AI Chatbots do?
              <span class="faq-icon text-xl">+</span>
            </button>
            <div class="faq-content px-4 pb-4 text-white">
              Our chatbots offer 24/7 customer support, process inquiries,
              provide product recommendations, and assist with
              bookings/payments. All hosted securely with SSL encryption, live
              support, and flexible payment options.
            </div>
          </div>

          <div class="faq-item border border-gray-200 rounded-lg overflow-hidden" data-aos="fade-up"
            data-aos-delay="600">
            <button
              class="w-full text-left p-4 flex justify-between items-center font-medium text-white hover:bg-pink-400 transition-colors"
              onclick="toggleFAQ(this)">
              How do AI Dashboards help my business?
              <span class="faq-icon text-xl">+</span>
            </button>
            <div class="faq-content px-4 pb-4 text-white">
              Our AI-powered dashboards built using Power BI, Make, and
              ChatGPT-style interfaces allow you to interact with data through
              natural language. Instantly gain insights, spot trends, and make
              data-driven decisions in real time.
            </div>
          </div>

          <div class="faq-item border border-gray-200 rounded-lg overflow-hidden" data-aos="fade-up"
            data-aos-delay="700">
            <button
              class="w-full text-left p-4 flex justify-between items-center font-medium text-white hover:bg-pink-400 transition-colors"
              onclick="toggleFAQ(this)">
              Can I see examples of how one AI bot saves 40+ hours per week?
              <span class="faq-icon text-xl">+</span>
            </button>
            <div class="faq-content px-4 pb-4 text-white">
              Yes! Our automation case studies show how one agent can handle
              tasks like lead qualification, appointment booking, customer
              support, and email follow-ups—saving over 40 hours weekly per
              employee.
            </div>
          </div>

          <div class="faq-item border border-gray-200 rounded-lg overflow-hidden" data-aos="fade-up"
            data-aos-delay="800">
            <button
              class="w-full text-left p-4 flex justify-between items-center font-medium text-white hover:bg-pink-400 transition-colors"
              onclick="toggleFAQ(this)">
              What is included in your Full Stack AI App solutions?
              <span class="faq-icon text-xl">+</span>
            </button>
            <div class="faq-content px-4 pb-4 text-white">
              We provide end-to-end AI SaaS development tailored for industries
              like real estate and healthcare. Features include AI-powered
              dashboards, secure hosting, and one-click automations, all
              integrated into your workflow.
            </div>
          </div>

          <div class="faq-item border border-gray-200 rounded-lg overflow-hidden" data-aos="fade-up"
            data-aos-delay="900">
            <button
              class="w-full text-left p-4 flex justify-between items-center font-medium text-white hover:bg-pink-400 transition-colors"
              onclick="toggleFAQ(this)">
              Can I integrate your tools with my current CRM or email system?
              <span class="faq-icon text-xl">+</span>
            </button>
            <div class="faq-content px-4 pb-4 text-white">
              Absolutely. We support integrations with GoHighLevel, HubSpot,
              Mailchimp, ActiveCampaign, Salesforce, and more. Our solutions are
              built to adapt to your current tech stack.
            </div>
          </div>

          <div class="faq-item border border-gray-200 rounded-lg overflow-hidden" data-aos="fade-up"
            data-aos-delay="1000">
            <button
              class="w-full text-left p-4 flex justify-between items-center font-medium text-white hover:bg-pink-400 transition-colors"
              onclick="toggleFAQ(this)">
              Do you offer custom automation solutions?
              <span class="faq-icon text-xl">+</span>
            </button>
            <div class="faq-content px-4 pb-4 text-white">
              Yes, every business is unique. We tailor automation workflows to
              your specific operations—from customer onboarding to internal task
              scheduling—using AI, APIs, and automation platforms like Make.
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Privacy Policy -->


    <!-- Contact -->
    <section id="contact" class="py-20">
      <div class="max-w-6xl mx-auto px-4">
        <h2
          class="text-3xl font-bold text-center mb-4 bg-gradient-to-r from-white via-pink-400 to-blue-400 text-transparent bg-clip-text"
          data-aos="fade-up">
          GET IN TOUCH
        </h2>
        <p class="text-center text-white mb-12" data-aos="fade-up" data-aos-delay="100">
          Ready to transform your business? Let's discuss your AI automation
          needs.
        </p>

        <div class="grid md:grid-cols-2 gap-10">
          <!-- Contact Info -->
          <div class="bg-white p-8 rounded-xl shadow-md space-y-6" data-aos="fade-right">
            <h3 class="text-xl font-semibold text-black">Contact Information</h3>

            <div class="flex items-start gap-4">
              <svg class="w-6 h-6 text-[var(--vivid-purple)] mt-1" fill="white" viewBox="0 0 24 24">
                <path
                  d="M20 4H4a2 2 0 00-2 2v1.6l10 6 10-6V6a2 2 0 00-2-2zM2 8.8v9.2a2 2 0 002 2h16a2 2 0 002-2V8.8l-10 6-10-6z" />
              </svg>
              <div>
                <h4 class="font-semibold text-black">Email</h4>
                <p class="text-gray-600">info@craftyautomation.com</p>
              </div>
            </div>

            <div class="flex items-start gap-4">
              <svg class="w-6 h-6 text-[var(--vivid-purple)] mt-1" fill="white" viewBox="0 0 24 24">
                <path
                  d="M6.62 10.79a15.053 15.053 0 006.59 6.59l2.2-2.2a1.003 1.003 0 011.05-.24 11.72 11.72 0 003.68.59c.55 0 1 .45 1 1V20c0 .55-.45 1-1 1C10.61 21 3 13.39 3 4c0-.55.45-1 1-1h3.01c.55 0 1 .45 1 1 0 1.27.2 2.5.59 3.68a1.003 1.003 0 01-.24 1.05l-2.2 2.2z" />
              </svg>
              <div>
                <h4 class="font-semibold text-black">Phone</h4>
                <p class="text-gray-600">+1 332 378 3100</p>
              </div>
            </div>

            <div class="flex items-start gap-4">
              <svg class="w-6 h-6 text-[var(--vivid-purple)] mt-1" fill="white" viewBox="0 0 24 24">
                <path d="M12 8v5h4v-2h-2V8h-2zm0-6C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.42 
              0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8z" />
              </svg>
              <div>
                <h4 class="font-semibold text-black">Business Hours</h4>
                <p class="text-gray-600">24/7</p>
              </div>
            </div>
          </div>



          <!-- Contact Form -->
          <form class="space-y-6 bg-white p-8 rounded-xl shadow-md" onsubmit="handleSubmit(event)" id="contactForm"
            data-aos="fade-left">
            <div>
              <label for="name" class="block font-semibold mb-2 text-black">Full Name *</label>
              <input type="text" id="name" name="name"
                class="w-full border border-gray-300 p-3 rounded-lg form-input focus:border-[var(--vivid-purple)] focus:outline-none"
                required />
            </div>
            <div>
              <label for="email" class="block font-semibold mb-2 text-black">Email Address *</label>
              <input type="email" id="email" name="email"
                class="w-full border border-gray-300 p-3 rounded-lg form-input focus:border-[var(--vivid-purple)] focus:outline-none"
                required />
            </div>
            <div>
              <label for="phone" class="block font-semibold mb-2 text-black">Phone Number</label>
              <input type="tel" id="phone" name="phone"
                class="w-full border border-gray-300 p-3 rounded-lg form-input focus:border-[var(--vivid-purple)] focus:outline-none" />
            </div>
            <div>
              <label for="description" class="block font-semibold mb-2 text-black">Project Description *</label>
              <textarea id="description" name="description" rows="5"
                class="w-full border border-gray-300 p-3 rounded-lg form-input focus:border-[var(--vivid-purple)] focus:outline-none"
                placeholder="Tell us about your automation needs, current challenges, and goals..." required></textarea>
            </div>
            <button type="submit"
              class="bg-[#F45EE5] text-white px-6 py-3 rounded-lg hover:bg-[var(--dark-purple)] transition-all hover:scale-[1.02] w-full">
              Send Message
            </button>
          </form>
        </div>
      </div>
    </section>

    <footer class="text-gray-400 py-10 border-t text-sm bg-[linear-gradient(90deg,_#A24FFF,_#F45EE5,_#27D3DF)] ">
      <div class="max-w-6xl mx-auto px-6 space-y-6 text-center">
        <h2 class="text-white text-2xl font-semibold">CraftyAutomation</h2>

        <p class="text-white max-w-2xl mx-auto">
          Transform your business with cutting-edge AI automation solutions.
          Save time, reduce costs, and scale effortlessly.
        </p>

        <div class="flex justify-center gap-6">
          <!-- LinkedIn -->
          <a href="https://www.linkedin.com/in/noman-ishfaq-5750b4238/" target="_blank" title="LinkedIn"
            class="hover:text-white transition">
            <svg class="w-6 h-6" fill="white" viewBox="0 0 24 24">
              <path
                d="M4.98 3.5C4.98 4.88 3.87 6 2.5 6S0 4.88 0 3.5 1.12 1 2.5 1 4.98 2.12 4.98 3.5zM.5 8h4V24h-4V8zm7.5 0h3.7v2.2h.1c.5-.9 1.7-2.2 3.7-2.2 4 0 4.7 2.7 4.7 6.2V24h-4v-8.6c0-2.1-.04-4.9-3-4.9-3 0-3.5 2.3-3.5 4.8V24h-4V8z" />
            </svg>
          </a>

          <!-- Twitter -->
          <a href="#" title="Twitter" class="hover:text-white transition">
            <svg class="w-6 h-6" fill="white" viewBox="0 0 24 24">
              <path
                d="M24 4.557a9.9 9.9 0 01-2.828.775 4.932 4.932 0 002.165-2.724 9.864 9.864 0 01-3.127 1.195 4.916 4.916 0 00-8.379 4.482A13.946 13.946 0 011.671 3.15a4.922 4.922 0 001.523 6.574A4.897 4.897 0 01.96 9.1v.062a4.919 4.919 0 003.946 4.827 4.996 4.996 0 01-2.212.084 4.922 4.922 0 004.6 3.417A9.867 9.867 0 010 19.54 13.945 13.945 0 007.548 22c9.057 0 14.009-7.506 14.009-14.009 0-.213-.004-.426-.014-.637A10.012 10.012 0 0024 4.557z" />
            </svg>
          </a>

          <!-- Email -->
          <a href="mailto:info@craftyautomation.com" title="Email" class="hover:text-white transition">
            <svg class="w-6 h-6" fill="white" viewBox="0 0 24 24">
              <path
                d="M20 4H4a2 2 0 00-2 2v1.6l10 6 10-6V6a2 2 0 00-2-2zM2 8.8v9.2a2 2 0 002 2h16a2 2 0 002-2V8.8l-10 6-10-6z" />
            </svg>
          </a>

          <!-- Phone -->
          <a href="tel:+13323783100" title="Phone" class="hover:text-white transition">
            <svg class="w-6 h-6" fill="white" viewBox="0 0 24 24">
              <path
                d="M6.62 10.79a15.053 15.053 0 006.59 6.59l2.2-2.2a1.003 1.003 0 011.05-.24 11.72 11.72 0 003.68.59c.55 0 1 .45 1 1V20c0 .55-.45 1-1 1C10.61 21 3 13.39 3 4c0-.55.45-1 1-1h3.01c.55 0 1 .45 1 1 0 1.27.2 2.5.59 3.68a1.003 1.003 0 01-.24 1.05l-2.2 2.2z" />
            </svg>
          </a>
        </div>

        <p class="text-xs text-white">
          &copy; 2025 CraftyAutomation. All rights reserved.
        </p>
      </div>
    </footer>

    <script>
      // Initialize AOS
      AOS.init({
        duration: 1000,
        once: true,
        offset: 100,
      });

      function toggleFAQ(element) {
        const content = element.nextElementSibling;
        const icon = element.querySelector(".faq-icon");

        // Close all other FAQs
        document.querySelectorAll(".faq-content").forEach((item) => {
          if (item !== content && item.classList.contains("active")) {
            item.classList.remove("active");
            item.previousElementSibling
              .querySelector(".faq-icon")
              .classList.remove("active");
            item.previousElementSibling.querySelector(".faq-icon").textContent =
              "+";
          }
        });

        // Toggle current FAQ
        content.classList.toggle("active");
        icon.classList.toggle("active");
        icon.textContent = content.classList.contains("active") ? "−" : "+";
      }

      // Enhanced form submission
      async function handleSubmit(event) {
        event.preventDefault();
        const form = event.target;
        const submitButton = form.querySelector('button[type="submit"]');
        const formData = new FormData(form);
        const data = Object.fromEntries(formData);

        submitButton.disabled = true;
        submitButton.innerHTML =
          '<span class="inline-block animate-spin mr-2">⟳</span> Sending...';

        try {
          // 🔗 Replace this with your actual webhook URL (GHL directly or via n8n)
          const webhookUrl = "https://auto.robogrowthpartners.com/webhook/9e8ef33d-25ec-4fe6-952f-b55949d614fd";

          const response = await fetch(webhookUrl, {
            method: "POST",
            headers: {
              "Content-Type": "application/json",
            },
            body: JSON.stringify(data),
          });

          if (!response.ok) throw new Error("Webhook failed");

          // Success feedback
          const successMsg = document.createElement("div");
          successMsg.className = "success-message text-green-600 mb-4 font-semibold";
          successMsg.textContent =
            "Thank you! Your message has been sent. We will get back to you within next 2 mins.";
          form.insertBefore(successMsg, form.firstChild);
          form.reset();

          setTimeout(() => {
            successMsg.style.opacity = "0";
            setTimeout(() => successMsg.remove(), 500);
          }, 5000);
        } catch (error) {
          const errorMsg = document.createElement("div");
          errorMsg.className = "text-red-600 mb-4 font-semibold";
          errorMsg.textContent =
            "Sorry, there was an error sending your message. Please try again.";
          form.insertBefore(errorMsg, form.firstChild);

          setTimeout(() => errorMsg.remove(), 5000);
        } finally {
          submitButton.disabled = false;
          submitButton.innerHTML = "Send Message";
        }
      }

      // Scroll Progress Bar
      window.addEventListener("scroll", () => {
        const scrollProgress = document.querySelector(".scroll-progress");
        const scrollable =
          document.documentElement.scrollHeight - window.innerHeight;
        const scrolled = window.scrollY;
        const progress = (scrolled / scrollable) * 100;
        scrollProgress.style.width = progress + "%";
      });

      // Navbar scroll effect
      window.addEventListener("scroll", () => {
        const header = document.querySelector("header");
        if (window.scrollY > 50) {
          header.classList.add("bg-opacity-90", "backdrop-blur-sm");
        } else {
          header.classList.remove("bg-opacity-90", "backdrop-blur-sm");
        }
      });

      // Mobile Menu Toggle
      function toggleMenu() {
        const menu = document.querySelector(".mobile-menu");
        const overlay = document.querySelector(".mobile-menu-overlay");
        const body = document.body;

        menu.classList.toggle("active");
        overlay.classList.toggle("active");
        body.style.overflow = menu.classList.contains("active") ? "hidden" : "";
      }

      // Close mobile menu on window resize
      window.addEventListener("resize", () => {
        if (window.innerWidth >= 768) {
          const menu = document.querySelector(".mobile-menu");
          const overlay = document.querySelector(".mobile-menu-overlay");
          const body = document.body;

          menu.classList.remove("active");
          overlay.classList.remove("active");
          body.style.overflow = "";
        }
      });
    </script>
</body>

</html>