@props(['profile'])

<section id="contact" class="py-12 md:py-20 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12 md:mb-16">
            <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold mb-4">
                <span class="gradient-text">تواصل معي</span>
            </h2>
            <p class="text-gray-600 text-sm sm:text-base md:text-lg max-w-2xl mx-auto px-4">
                هل لديك مشروع في ذهنك؟ دعنا نتحدث ونحوله إلى واقع
            </p>
        </div>
        
        <div class="grid md:grid-cols-2 gap-8 md:gap-12 max-w-6xl mx-auto">
            <!-- Contact Info -->
            <div>
                <h3 class="text-xl sm:text-2xl font-bold text-gray-800 mb-4 sm:mb-6">معلومات التواصل</h3>
                <p class="text-gray-600 mb-6 sm:mb-8 leading-relaxed text-sm sm:text-base">
                    أنا متاح للعمل على مشاريع جديدة. سواء كنت تحتاج تطبيق موبايل، موقع ويب، أو API، يمكنني مساعدتك في تحقيق رؤيتك.
                </p>
                
                <div class="space-y-4 sm:space-y-6">
                    <!-- Email -->
                    <div class="flex items-start gap-3 sm:gap-4">
                        <div class="w-12 h-12 sm:w-14 sm:h-14 bg-primary/10 rounded-xl flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 sm:w-7 sm:h-7 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                        </div>
                        <div>
                            <p class="text-xs sm:text-sm text-gray-500 mb-1">البريد الإلكتروني</p>
                            <a href="mailto:{{ $profile['email'] }}" class="text-sm sm:text-base md:text-lg font-bold text-black hover:text-primary transition break-all">
                                {{ $profile['email'] }}
                            </a>
                        </div>
                    </div>
                    
                    <!-- Phone -->
                    <div class="flex items-start gap-3 sm:gap-4">
                        <div class="w-12 h-12 sm:w-14 sm:h-14 bg-black rounded-xl flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 sm:w-7 sm:h-7 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                            </svg>
                        </div>
                        <div>
                            <p class="text-xs sm:text-sm text-gray-500 mb-1">رقم الجوال</p>
                            <a href="tel:{{ $profile['phone'] }}" class="text-sm sm:text-base md:text-lg font-bold text-black hover:text-primary transition block text-right" dir="ltr">
                                {{ $profile['phone'] }}
                            </a>
                        </div>
                    </div>
                    
                    <!-- Location -->
                    <div class="flex items-start gap-3 sm:gap-4">
                        <div class="w-12 h-12 sm:w-14 sm:h-14 bg-primary/10 rounded-xl flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 sm:w-7 sm:h-7 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                        </div>
                        <div>
                            <p class="text-xs sm:text-sm text-gray-500 mb-1">الموقع</p>
                            <p class="text-sm sm:text-base md:text-lg font-bold text-black">{{ $profile['location'] }}</p>
                        </div>
                    </div>
                </div>
                
                <!-- Social Links -->
                <div class="mt-6 sm:mt-8">
                    <p class="text-xs sm:text-sm text-gray-500 mb-3 sm:mb-4">تابعني على</p>
                    <div class="flex gap-4 sm:gap-5 md:gap-6">
                        <a href="#" class="w-10 h-10 sm:w-12 sm:h-12 bg-black rounded-xl flex items-center justify-center hover:bg-primary transition text-white">
                            <svg class="w-5 h-5 sm:w-6 sm:h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                            </svg>
                        </a>
                        <a href="#" class="w-10 h-10 sm:w-12 sm:h-12 bg-black rounded-xl flex items-center justify-center hover:bg-primary transition text-white">
                            <svg class="w-5 h-5 sm:w-6 sm:h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                            </svg>
                        </a>
                        <a href="#" class="w-10 h-10 sm:w-12 sm:h-12 bg-black rounded-xl flex items-center justify-center hover:bg-primary transition text-white">
                            <svg class="w-5 h-5 sm:w-6 sm:h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Contact Form -->
            <div class="bg-white rounded-2xl p-6 sm:p-8 shadow-xl mt-8 md:mt-0">
                <h3 class="text-xl sm:text-2xl font-bold text-gray-800 mb-4 sm:mb-6">أرسل رسالة</h3>
                <form class="space-y-4 sm:space-y-6" x-data="contactForm()" @submit.prevent="submitForm">
                    <div>
                        <label class="block text-gray-700 font-bold mb-2 text-sm sm:text-base">الاسم الكامل</label>
                        <input type="text" 
                               class="w-full px-3 sm:px-4 py-2 sm:py-3 border-2 border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-primary transition text-sm sm:text-base"
                               placeholder="أدخل اسمك">
                    </div>
                    
                    <div>
                        <label class="block text-gray-700 font-bold mb-2 text-sm sm:text-base">البريد الإلكتروني</label>
                        <input type="email" 
                               class="w-full px-3 sm:px-4 py-2 sm:py-3 border-2 border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-primary transition text-sm sm:text-base"
                               placeholder="example@email.com">
                    </div>
                    
                    <div>
                        <label class="block text-gray-700 font-bold mb-2 text-sm sm:text-base">الموضوع</label>
                        <input type="text" 
                               class="w-full px-3 sm:px-4 py-2 sm:py-3 border-2 border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-primary transition text-sm sm:text-base"
                               placeholder="موضوع الرسالة">
                    </div>
                    
                    <div>
                        <label class="block text-gray-700 font-bold mb-2 text-sm sm:text-base">الرسالة</label>
                        <textarea rows="5" 
                                  class="w-full px-3 sm:px-4 py-2 sm:py-3 border-2 border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-primary transition resize-none text-sm sm:text-base"
                                  placeholder="اكتب رسالتك هنا..."></textarea>
                    </div>
                    
                    <button type="submit" 
                            class="w-full bg-primary hover:bg-primary-dark text-white px-6 py-3 rounded-lg font-bold hover:shadow-xl transition transform hover:scale-105 text-sm sm:text-base">
                        إرسال الرسالة
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

@push('scripts')
<script>
function contactForm() {
    return {
        submitForm() {
            alert('شكراً لتواصلك! سأرد عليك قريباً.');
        }
    }
}
</script>
@endpush
