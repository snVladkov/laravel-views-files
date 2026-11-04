<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechVolt Electronics</title>
    {{-- Vite --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 text-gray-800 flex flex-col min-h-screen">
    <!-- Navigation Header -->
    <header class="bg-slate-900 text-white shadow-md">
        <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
            <a href="#" class="flex items-center gap-3">
                <img src="{{ asset('images/logo.png') }}" alt="TechVolt Electronics Logo" class="h-10 w-auto object-contain">
            </a>
            
            <nav class="flex space-x-6">
                <a href="#" class="hover:text-blue-400 font-medium transition text-blue-400 underline underline-offset-4">
                   Home
                </a>
                <a href="#" class="hover:text-blue-400 font-medium transition">
                   Products
                </a>
                <a href="#" class="hover:text-blue-400 font-medium transition">
                   Contacts
                </a>
            </nav>

            <div class="flex items-center gap-4">
                <a href="#" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg font-medium text-sm transition">
                    Cart (0)
                </a>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="flex-grow">
        <div class="max-w-5xl mx-auto px-4 py-12">
            <div class="text-center max-w-xl mx-auto mb-10">
                <h1 class="text-3xl font-bold text-gray-900">Get in Touch</h1>
                <p class="text-gray-600 mt-2">Have a question about a product or order? Drop us a line and our tech team will respond promptly.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Contact Information Info Cards -->
                <div class="space-y-4 md:col-span-1">
                    <div class="bg-white p-5 rounded-xl border border-gray-200">
                        <h3 class="font-bold text-gray-800 text-sm uppercase tracking-wide">📍 Location</h3>
                        <p class="text-gray-600 text-sm mt-1">100 Tech Park Way, Suite 400<br>Silicon Valley, CA 94025</p>
                    </div>
                    
                    <div class="bg-white p-5 rounded-xl border border-gray-200">
                        <h3 class="font-bold text-gray-800 text-sm uppercase tracking-wide">📞 Phone</h3>
                        <p class="text-gray-600 text-sm mt-1">+1 (800) 555-TECH</p>
                    </div>

                    <div class="bg-white p-5 rounded-xl border border-gray-200">
                        <h3 class="font-bold text-gray-800 text-sm uppercase tracking-wide">✉️ Email Support</h3>
                        <p class="text-gray-600 text-sm mt-1">support@techvolt.demo</p>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="bg-white p-8 rounded-xl border border-gray-200 shadow-sm md:col-span-2">
                    <form action="#" method="POST" class="space-y-5">
                        <!-- Demonstration of Blade CSRF Directive -->
                        @csrf

                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Full Name</label>
                            <input type="text" id="name" name="name" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition" placeholder="John Doe">
                        </div>

                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
                            <input type="email" id="email" name="email" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition" placeholder="john@example.com">
                        </div>

                        <div>
                            <label for="subject" class="block text-sm font-medium text-gray-700 mb-1">Subject</label>
                            <select id="subject" name="subject" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition">
                                <option value="general">General Inquiry</option>
                                <option value="support">Technical Support</option>
                                <option value="returns">Returns & Refunds</option>
                            </select>
                        </div>

                        <div>
                            <label for="message" class="block text-sm font-medium text-gray-700 mb-1">Message</label>
                            <textarea id="message" name="message" rows="4" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition" placeholder="Write your message here..."></textarea>
                        </div>

                        <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded-lg transition shadow-md">
                            Send Message
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-slate-900 text-gray-400 py-8 border-t border-slate-800 mt-12">
        <div class="max-w-7xl mx-auto px-4 text-center space-y-3">
            <p class="text-lg font-semibold text-white">TechVolt Electronics</p>
            <p class="text-sm">Providing next-gen gadgets and components since 2026.</p>
            <p class="text-xs text-gray-500">&copy; {{ date('Y') }} TechVolt Inc. All rights reserved.</p>
        </div>
    </footer>

</body>
</html>
