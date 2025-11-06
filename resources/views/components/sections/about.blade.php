@props(['profile'])

<section id="about" class="py-12 md:py-20 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12 md:mb-16">
            <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold mb-4">
                <span class="gradient-text">عن المطور</span>
            </h2>
            <p class="text-gray-600 text-base sm:text-lg max-w-2xl mx-auto">
            </p>
        </div>
        
        <!-- Stats Section -->
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 md:gap-8 mb-12 md:mb-16 max-w-3xl mx-auto">
            <div class="text-center p-6 sm:p-8 bg-white rounded-2xl card-hover border-t-4 border-primary shadow-lg">
                <div class="text-4xl sm:text-5xl font-black text-primary mb-2">{{ $profile['age'] }}</div>
                <p class="text-black font-bold text-sm sm:text-base">سنة</p>
            </div>
            <div class="text-center p-6 sm:p-8 bg-black rounded-2xl card-hover border-t-4 border-primary shadow-lg">
                <div class="text-4xl sm:text-5xl font-black text-primary mb-2">{{ $profile['projectsCompleted'] }}</div>
                <p class="text-white font-bold text-sm sm:text-base">مشروع منجز</p>
            </div>
        </div>
        
        <div class="grid md:grid-cols-2 gap-8 md:gap-12 items-center max-w-6xl mx-auto">
            <!-- Image -->
            <div class="order-2 md:order-1">
                <div class="relative">
                    <img src="https://placehold.co/600x700/1a1a1a/ff6b00?text=Full+Stack+Developer" 
                         alt="About Me" 
                         class="rounded-2xl shadow-2xl w-full border-2 sm:border-4 border-primary">
                </div>
            </div>
            
            <!-- Content -->
            <div class="order-1 md:order-2">
                <h3 class="text-2xl sm:text-3xl font-bold mb-4 sm:mb-6 text-gray-800">
                    مطور Full Stack محترف
                </h3>
                <div class="mb-6">
                    <h4 class="text-lg font-bold text-primary mb-2">الملخص</h4>
                    <p class="text-sm sm:text-base text-gray-600 leading-relaxed">
                        {{ $profile['bio'] }}
                    </p>
                </div>
                
                <div class="mb-6">
                    <h4 class="text-lg font-bold text-primary mb-2">الهدف الوظيفي</h4>
                    <p class="text-sm sm:text-base text-gray-600 leading-relaxed">
                        {{ $profile['goal'] }}
                    </p>
                </div>
                
                <div class="space-y-3 sm:space-y-4 mb-6 sm:mb-8">
                    <div class="flex items-center gap-3 sm:gap-4">
                        <div class="w-10 h-10 sm:w-12 sm:h-12 bg-primary/10 rounded-lg flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5 sm:w-6 sm:h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                        </div>
                        <div>
                            <p class="text-xs sm:text-sm text-gray-500">البريد الإلكتروني</p>
                            <p class="font-bold text-black text-sm sm:text-base">{{ $profile['email'] }}</p>
                        </div>
                    </div>
                    
                    <div class="flex items-center gap-3 sm:gap-4">
                        <div class="w-10 h-10 sm:w-12 sm:h-12 bg-black rounded-lg flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5 sm:w-6 sm:h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                            </svg>
                        </div>
                        <div>
                            <p class="text-xs sm:text-sm text-gray-500">رقم الجوال</p>
                            <p class="font-bold text-black text-sm sm:text-base text-right" dir="ltr">{{ $profile['phone'] }}</p>
                        </div>
                    </div>
                    
                    <div class="flex items-center gap-3 sm:gap-4">
                        <div class="w-10 h-10 sm:w-12 sm:h-12 bg-primary/10 rounded-lg flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5 sm:w-6 sm:h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                        </div>
                        <div>
                            <p class="text-xs sm:text-sm text-gray-500">الموقع</p>
                            <p class="font-bold text-black text-sm sm:text-base">{{ $profile['location'] }}</p>
                        </div>
                    </div>
                    
                    <div class="flex items-center gap-3 sm:gap-4">
                        <div class="w-10 h-10 sm:w-12 sm:h-12 bg-black rounded-lg flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5 sm:w-6 sm:h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"/>
                            </svg>
                        </div>
                        <div>
                            <p class="text-xs sm:text-sm text-gray-500">التعليم</p>
                            <p class="font-bold text-black text-xs sm:text-sm leading-tight">{{ $profile['education'] }}</p>
                        </div>
                    </div>
                    
                    <div class="flex items-center gap-3 sm:gap-4">
                        <div class="w-10 h-10 sm:w-12 sm:h-12 bg-primary/10 rounded-lg flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5 sm:w-6 sm:h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5h12M9 3v2m1.048 9.5A18.022 18.022 0 016.412 9m6.088 9h7M11 21l5-10 5 10M12.751 5C11.783 10.77 8.07 15.61 3 18.129"/>
                            </svg>
                        </div>
                        <div>
                            <p class="text-xs sm:text-sm text-gray-500">اللغات</p>
                            <p class="font-bold text-black text-xs sm:text-sm leading-tight">{{ $profile['languages'] }}</p>
                        </div>
                    </div>
                </div>
                
                <a href="#contact" class="inline-block w-full sm:w-auto text-center bg-primary hover:bg-primary-dark text-white px-6 sm:px-8 py-3 rounded-lg font-bold hover:shadow-xl transition transform hover:scale-105 text-sm sm:text-base">
                    تواصل معي الآن
                </a>
            </div>
        </div>
    </div>
</section>
