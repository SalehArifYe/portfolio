@props(['skills'])

<section id="skills" class="py-12 md:py-20 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12 md:mb-16">
            <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold mb-4">
                <span class="gradient-text">المهارات التقنية</span>
            </h2>
            <p class="text-gray-600 text-sm sm:text-base md:text-lg max-w-2xl mx-auto px-4">
                مجموعة واسعة من المهارات والتقنيات التي أتقنها في تطوير التطبيقات والمواقع
            </p>
        </div>
        
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 md:gap-8 max-w-7xl mx-auto">
            @foreach($skills as $skill)
                <div class="bg-white rounded-2xl p-6 sm:p-8 shadow-lg card-hover border-t-4 border-primary">
                    <div class="w-14 h-14 sm:w-16 sm:h-16 bg-primary/10 rounded-xl flex items-center justify-center mb-4 sm:mb-6">
                        <svg class="w-7 h-7 sm:w-8 sm:h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $skill['icon'] }}"/>
                        </svg>
                    </div>
                    
                    <h3 class="text-lg sm:text-xl font-black text-black mb-3 sm:mb-4">{{ $skill['category'] }}</h3>
                    
                    <div class="space-y-2">
                        @foreach($skill['items'] as $item)
                            <div class="flex items-center gap-2">
                                <div class="w-2 h-2 bg-primary rounded-full flex-shrink-0"></div>
                                <span class="text-gray-600 font-medium text-sm sm:text-base">{{ $item }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
        
        <!-- Additional Skills Info -->
        <div class="mt-12 md:mt-16 max-w-4xl mx-auto">
            <div class="bg-black rounded-2xl p-6 sm:p-8 md:p-12 text-white text-center shadow-2xl">
                <h3 class="text-2xl sm:text-3xl font-black mb-3 sm:mb-4">هل لديك مشروع في ذهنك؟</h3>
                <p class="text-gray-300 mb-4 sm:mb-6 text-sm sm:text-base md:text-lg px-4">
                    أقوم بتطوير حلول متكاملة من الفكرة إلى التنفيذ باستخدام أحدث التقنيات
                </p>
                <a href="#contact" class="inline-block w-full sm:w-auto bg-primary hover:bg-primary-dark text-white px-6 sm:px-8 py-3 rounded-lg font-bold hover:shadow-2xl transition transform hover:scale-105 text-sm sm:text-base">
                    ابدأ مشروعك الآن
                </a>
            </div>
        </div>
    </div>
</section>
