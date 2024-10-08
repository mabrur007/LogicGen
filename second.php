<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LogicZen.ai - Transforming Complexity into Clarity with AI</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/feather-icons"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap');
        
        body {
            font-family: 'Poppins', sans-serif;
        }

        .gradient-bg {
            background: linear-gradient(135deg, #6366F1, #8B5CF6);
        }

        .btn-primary {
            background: linear-gradient(135deg, #6366F1, #8B5CF6);
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            opacity: 0.9;
            transform: translateY(-2px);
        }

        .section-heading {
            @apply text-3xl font-bold text-center mb-12 text-gray-800;
        }

        .card {
            @apply bg-white p-6 rounded-lg shadow-lg transition-all duration-300 hover:shadow-xl;
        }

        /* Animations */
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes slideIn {
            from { transform: translateY(20px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }

        .animate-fadeIn {
            animation: fadeIn 1s ease-out;
        }

        .animate-slideIn {
            animation: slideIn 0.5s ease-out;
        }

        .delay-100 { animation-delay: 100ms; }
        .delay-200 { animation-delay: 200ms; }
        .delay-300 { animation-delay: 300ms; }

        /* Smooth scroll behavior */
        html {
            scroll-behavior: smooth;
        }
    </style>
</head>
<body class="bg-gray-50 text-gray-800">
    <header class="bg-white shadow-sm sticky top-0 z-50">
        <nav class="container mx-auto px-6 py-4">
            <div class="flex justify-between items-center">
                <div class="text-2xl font-bold text-gray-800">Logic<span class="text-indigo-600">Zen</span><span class="text-purple-600">.ai</span></div>
                <div class="hidden md:flex space-x-6">
                    <a href="#solutions" class="text-gray-600 hover:text-indigo-600 transition duration-300">Solutions</a>
                    <a href="#technology" class="text-gray-600 hover:text-indigo-600 transition duration-300">Technology</a>
                    <a href="#use-cases" class="text-gray-600 hover:text-indigo-600 transition duration-300">Use Cases</a>
                    <a href="#about" class="text-gray-600 hover:text-indigo-600 transition duration-300">About Us</a>
                </div>
                <a href="#contact" class="btn-primary text-white px-6 py-2 rounded-full hover:shadow-lg transition duration-300">Contact Us</a>
            </div>
        </nav>
    </header>

    <main>
        <!-- Hero Section -->
        <section class="gradient-bg text-white py-24 md:py-32">
            <div class="container mx-auto px-6 text-center">
                <h1 class="text-4xl md:text-6xl font-bold mb-6 leading-tight animate-fadeIn">Transforming Complexity into Clarity with AI and DS</h1>
                <p class="text-xl mb-10 max-w-2xl mx-auto animate-fadeIn delay-100">Empower your business with innovative AI-powered solutions that simplify complex challenges and drive growth.</p>
                <a href="#" class="btn-primary text-white font-bold py-3 px-8 rounded-full text-lg shadow-lg hover:shadow-xl transition duration-300 inline-block animate-fadeIn delay-200">Get Started</a>
            </div>
        </section>

        <!-- Solutions Overview -->
        <section id="solutions" class="py-20 bg-white">
            <div class="container mx-auto px-6">
                <h2 class="section-heading">Our AI Solutions</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                    <div class="card animate-slideIn">
                        <i data-feather="cpu" class="w-12 h-12 text-indigo-600 mb-4"></i>
                        <h3 class="text-xl font-semibold mb-4">Generative AI</h3>
                        <p class="text-gray-600">Create content, code, and more with our advanced generative AI models.</p>
                    </div>
                    <div class="card animate-slideIn delay-100">
                        <i data-feather="users" class="w-12 h-12 text-indigo-600 mb-4"></i>
                        <h3 class="text-xl font-semibold mb-4">AI Agents</h3>
                        <p class="text-gray-600">Automate complex tasks with intelligent AI agents tailored to your needs.</p>
                    </div>
                    <div class="card animate-slideIn delay-200">
                        <i data-feather="eye" class="w-12 h-12 text-indigo-600 mb-4"></i>
                        <h3 class="text-xl font-semibold mb-4">Computer Vision</h3>
                        <p class="text-gray-600">Process and analyze visual data with state-of-the-art computer vision algorithms.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Technology and Innovation -->
        <section id="technology" class="py-20 bg-gray-100">
            <div class="container mx-auto px-6">
                <h2 class="section-heading">Our Technology</h2>
                <div class="flex flex-wrap items-center">
                    <div class="w-full lg:w-1/2 mb-10 lg:mb-0">
                        <img src="https://img.freepik.com/free-photo/ai-technology-microchip-background-digital-transformation-concept_53876-124669.jpg?t=st=1724828311~exp=1724831911~hmac=d936c0d24d8ad82737665a39aea92d359072c816e258c3b1510f647097ead08c&w=740" alt="AI Technology Diagram" class="rounded-lg shadow-xl animate-fadeIn"/>
                    </div>
                    <div class="w-full lg:w-1/2 lg:pl-16">
                        <h3 class="text-2xl font-semibold mb-6 animate-slideIn">How It Works</h3>
                        <p class="mb-6 text-gray-600 animate-slideIn delay-100">Our AI solutions leverage cutting-edge machine learning models and advanced data processing capabilities to deliver unparalleled results.</p>
                        <ul class="space-y-4 mb-8">
                            <li class="flex items-center animate-slideIn delay-200">
                                <i data-feather="check-circle" class="w-6 h-6 text-green-500 mr-2"></i>
                                <span>Natural Language Processing</span>
                            </li>
                            <li class="flex items-center animate-slideIn delay-300">
                                <i data-feather="check-circle" class="w-6 h-6 text-green-500 mr-2"></i>
                                <span>Predictive Analytics</span>
                            </li>
                            <li class="flex items-center animate-slideIn delay-300">
                                <i data-feather="check-circle" class="w-6 h-6 text-green-500 mr-2"></i>
                                <span>Deep Learning Algorithms</span>
                            </li>
                        </ul>
                        <a href="#" class="text-indigo-600 hover:text-indigo-800 font-semibold flex items-center animate-slideIn delay-300">
                            Learn More About Our Tech Stack
                            <i data-feather="arrow-right" class="w-4 h-4 ml-2"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Use Cases and Applications -->
        <section id="use-cases" class="py-20 bg-white">
            <div class="container mx-auto px-6">
                <h2 class="section-heading">Industry Solutions</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
                    <div class="card animate-slideIn">
                        <i data-feather="heart" class="w-12 h-12 text-indigo-600 mb-4"></i>
                        <h3 class="text-xl font-semibold mb-4">Healthcare</h3>
                        <p class="text-gray-600">Improve patient outcomes with AI-powered diagnostics and treatment recommendations.</p>
                    </div>
                    <div class="card animate-slideIn delay-100">
                        <i data-feather="trending-up" class="w-12 h-12 text-indigo-600 mb-4"></i>
                        <h3 class="text-xl font-semibold mb-4">Finance</h3>
                        <p class="text-gray-600">Enhance risk assessment and fraud detection with our advanced AI models.</p>
                    </div>
                    <div class="card animate-slideIn delay-200">
                        <i data-feather="shopping-bag" class="w-12 h-12 text-indigo-600 mb-4"></i>
                        <h3 class="text-xl font-semibold mb-4">E-commerce</h3>
                        <p class="text-gray-600">Personalize customer experiences and optimize inventory management using AI.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Testimonials -->
        <section class="py-20 bg-gray-100">
            <div class="container mx-auto px-6">
                <h2 class="section-heading">What Our Clients Say</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                    <div class="card animate-slideIn">
                        <div class="flex items-center mb-4">
                            <img src="https://img.freepik.com/free-photo/portrait-white-man-isolated_53876-40306.jpg?t=st=1724829065~exp=1724832665~hmac=c979b77ffe4c792429f91a6537b865713852d8a9150ced9b2ef5e26e0446b63b&w=740" alt="Jane Doe" class="w-16 h-16 rounded-full mr-4"/>
                            <div>
                                <p class="font-semibold">Jane Doe</p>
                                <p class="text-gray-600">CTO at TechCorp</p>
                            </div>
                        </div>
                        <p class="text-gray-600 italic">"LogicZen.ai's solutions have revolutionized our data analysis process, saving us countless hours and providing invaluable insights."</p>
                    </div>
                    <div class="card animate-slideIn delay-100">
                        <div class="flex items-center mb-4">
                            <img src="https://img.freepik.com/free-photo/portrait-white-man-isolated_53876-40306.jpg?t=st=1724829065~exp=1724832665~hmac=c979b77ffe4c792429f91a6537b865713852d8a9150ced9b2ef5e26e0446b63b&w=740" alt="John Smith" class="w-16 h-16 rounded-full mr-4"/>
                            <div>
                                <p class="font-semibold">John Smith</p>
                                <p class="text-gray-600">CEO of ServicePro</p>
                            </div>
                        </div>
                        <p class="text-gray-600 italic">"The AI agents developed by LogicZen.ai have dramatically improved our customer service efficiency and satisfaction rates."</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- About Us -->
        <section id="about" class="py-20 bg-white">
            <div class="container mx-auto px-6">
                <h2 class="section-heading">About LogicZen.ai</h2>
                <div class="flex flex-wrap items-center">
                    <div class="w-full lg:w-1/2 mb-10 lg:mb-0">
                        <h3 class="text-2xl font-semibold mb-6 animate-slideIn">Our Mission</h3>
                        <p class="mb-6 text-gray-600 animate-slideIn delay-100">At LogicZen.ai, we're dedicated to simplifying complex problems through innovative AI solutions. Our goal is to empower businesses with clarity and efficiency in decision-making processes.</p>
                        <p class="text-gray-600 animate-slideIn delay-200">Our team of expert data scientists and AI engineers are committed to pushing the boundaries of what's possible with artificial intelligence.</p>
                    </div>
                    <div class="w-full lg:w-1/2 lg:pl-16">
                        <img src="https://img.freepik.com/free-photo/millennial-asia-businessmen-businesswomen-meeting-brainstorming-ideas-about-new-paperwork-project-colleagues-working-together-planning-success-strategy-enjoy-teamwork-small-modern-night-office_7861-2386.jpg?t=st=1724828677~exp=1724832277~hmac=ef1366a3ed1e3e957dbba35b42cd700992a9c49c1f0fa0f969b3769bb48ea47d&w=826" alt="LogicZen.ai Team" class="rounded-lg shadow-xl mx-auto animate-fadeIn"/>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Form -->
        <section id="contact" class="py-20 bg-gray-100">
            <div class="container mx-auto px-6">
                <h2 class="section-heading">Get in Touch</h2>
                <div class="max-w-lg mx-auto">
                    <form class="space-y-6" action="https://api.web3forms.com/submit" method="POST">

                        <input type="hidden" name="access_key" value="YOUR_ACCESS_KEY_HERE">
                        
                        <div class="animate-slideIn">
                            <label for="name" class="block mb-2 font-semibold">Name</label>
                            <input type="text" id="name" name="name" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
                        </div>
                        <div class="animate-slideIn delay-100">
                            <label for="email" class="block mb-2 font-semibold">Email</label>
                            <input type="email" id="email" name="email" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
                        </div>
                        <div class="animate-slideIn delay-200">
                            <label for="message" class="block mb-2 font-semibold">Message</label>
                            <textarea id="message" name="message" rows="4" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" required></textarea>
                        </div>
                        <button type="submit" name="submit" class="btn-primary text-white font-bold py-3 px-6 rounded-full w-full animate-slideIn delay-300">Send Message</button>
                    </form>
                </div>
            </div>
        </section>
    </main>

    <footer class="bg-gray-800 text-white py-12">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-10">
                <div>
                    <h3 class="text-2xl font-bold mb-4">LogicZen.ai</h3>
                    <p class="text-gray-400">Transforming Complexity into Clarity with AI</p>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Quick Links</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Home</a></li>
                        <li><a href="#solutions" class="text-gray-400 hover:text-white transition duration-300">Solutions</a></li>
                        <li><a href="#technology" class="text-gray-400 hover:text-white transition duration-300">Technology</a></li>
                        <li><a href="#about" class="text-gray-400 hover:text-white transition duration-300">About Us</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Connect</h4>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white transition duration-300">
                            <i data-feather="facebook" class="w-6 h-6"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition duration-300">
                            <i data-feather="twitter" class="w-6 h-6"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition duration-300">
                            <i data-feather="linkedin" class="w-6 h-6"></i>
                        </a>
                    </div>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Newsletter</h4>
                    <form class="flex">
                        <input type="email" placeholder="Your email" class="p-2 rounded-l-lg focus:outline-none focus:ring-2 focus:ring-indigo-500">
                        <button type="submit" class="bg-indigo-600 text-white p-2 rounded-r-lg hover:bg-indigo-700 transition duration-300">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
    </footer>

    <script>
        feather.replace();

        // Add animation classes to elements
        document.addEventListener('DOMContentLoaded', function() {
            const animatedElements = document.querySelectorAll('.card, .section-heading, .btn-primary');
            animatedElements.forEach((el, index) => {
                el.classList.add('animate-slideIn', `delay-${(index % 3 + 1) * 100}`);
            });
        });
    </script>
</body>
</html>