@props(['profile'])

<section id="home" class="min-h-0 md:min-h-screen flex items-start md:items-center justify-center gradient-bg relative overflow-hidden">
    <div class="absolute inset-0 opacity-10 hidden md:block">
        <div class="absolute top-20 right-20 w-72 h-72 bg-white rounded-full blur-3xl"></div>
        <div class="absolute bottom-20 left-20 w-96 h-96 bg-white rounded-full blur-3xl"></div>
    </div>
    
    <div class="container mx-auto px-4 relative z-10 py-4 md:py-20">
        <div class="grid md:grid-cols-2 gap-0 md:gap-12 items-center">
            <!-- Text Content -->
            <div class="text-white text-center md:text-right fade-in-up">
                <h1 class="text-4xl sm:text-5xl md:text-6xl font-black mb-4 leading-tight">
                    مرحباً، أنا <br>
                    <span class="text-primary">{{ $profile['name'] }}</span>
                </h1>
                <p class="text-xl sm:text-2xl md:text-3xl mb-3 text-white font-bold">
                    {{ $profile['title'] }}
                </p>
                <p class="text-base sm:text-lg mb-2 text-primary font-semibold">
                    {{ $profile['subtitle'] }}
                </p>
                <p class="text-sm sm:text-base mb-8 text-gray-300 leading-relaxed max-w-xl mx-auto md:mx-0">
                    {{ $profile['bio'] }}
                </p>
                
                <div class="flex flex-col sm:flex-row gap-3 sm:gap-4 justify-center md:justify-start">
                    <a href="#projects" class="bg-primary hover:bg-primary-dark text-white px-6 sm:px-8 py-3 sm:py-4 rounded-lg font-bold hover:shadow-2xl transition transform hover:scale-105 shadow-lg text-sm sm:text-base">
                        استعرض أعمالي
                    </a>
                    <a href="#contact" class="bg-transparent border-2 border-white text-white px-6 sm:px-8 py-3 sm:py-4 rounded-lg font-bold hover:bg-white hover:text-black transition text-sm sm:text-base">
                        تواصل معي
                    </a>
                </div>
            </div>
            
            <!-- Image/Illustration -->
            <div class="hidden md:flex justify-center mt-8 md:mt-0">
                <div class="relative">
                    <div class="w-56 h-56 sm:w-72 sm:h-72 md:w-96 md:h-96 float-animation">
                        <div class="w-full h-full rounded-full bg-black/80 shadow-2xl border-4 border-primary flex items-center justify-center p-8">
                            <div class="text-center space-y-3">
                                <div class="text-primary font-black text-3xl md:text-4xl">Full Stack</div>
                                <div class="text-white font-bold text-xl md:text-2xl">Laravel & Flutter</div>
                                <div class="text-gray-300 text-base md:text-lg">Developer</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2 animate-bounce hidden md:block">
            <a href="#about" class="text-white hover:text-primary transition">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/>
                </svg>
            </a>
        </div>
    </div>
</section>
