<nav class="bg-white shadow-md sticky top-0 z-50" x-data="{ mobileMenuOpen: false }">
    <div class="container mx-auto px-4">
        <div class="flex justify-between items-center h-20">
            <!-- Logo -->
            <a href="#home" class="text-2xl font-black">
                <span class="text-black">Saleh</span><span class="text-primary">.dev</span>
            </a>
            
            <!-- Desktop Menu -->
            <div class="hidden md:flex space-x-reverse space-x-8 items-center">
                <a href="#home" class="nav-link text-gray-700 hover:text-primary transition-all font-semibold relative group">
                    الرئيسية
                    <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-primary group-hover:w-full transition-all"></span>
                </a>
                <a href="#about" class="nav-link text-gray-700 hover:text-primary transition-all font-semibold relative group">
                    عني
                    <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-primary group-hover:w-full transition-all"></span>
                </a>
                <a href="#skills" class="nav-link text-gray-700 hover:text-primary transition-all font-semibold relative group">
                    المهارات
                    <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-primary group-hover:w-full transition-all"></span>
                </a>
                <a href="#projects" class="nav-link text-gray-700 hover:text-primary transition-all font-semibold relative group">
                    الأعمال
                    <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-primary group-hover:w-full transition-all"></span>
                </a>
                <a href="#contact" class="nav-link text-gray-700 hover:text-primary transition-all font-semibold relative group">
                    تواصل معي
                    <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-primary group-hover:w-full transition-all"></span>
                </a>
            </div>
            
            <!-- CTA Button -->
            <a href="#contact" class="hidden md:block bg-primary hover:bg-primary-dark text-white px-6 py-3 rounded-lg font-bold transition-all transform hover:scale-105 hover:shadow-lg">
                ابدأ مشروعك
            </a>
            
            <!-- Mobile Menu Button -->
            <button @click="mobileMenuOpen = !mobileMenuOpen" class="md:hidden text-black focus:outline-none">
                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path x-show="!mobileMenuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    <path x-show="mobileMenuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>
        
        <!-- Mobile Menu -->
        <div x-show="mobileMenuOpen" x-transition class="md:hidden pb-4 space-y-2">
            <a href="#home" @click="mobileMenuOpen = false" class="block py-3 text-gray-700 hover:text-primary transition font-semibold border-b border-gray-100">الرئيسية</a>
            <a href="#about" @click="mobileMenuOpen = false" class="block py-3 text-gray-700 hover:text-primary transition font-semibold border-b border-gray-100">عني</a>
            <a href="#skills" @click="mobileMenuOpen = false" class="block py-3 text-gray-700 hover:text-primary transition font-semibold border-b border-gray-100">المهارات</a>
            <a href="#projects" @click="mobileMenuOpen = false" class="block py-3 text-gray-700 hover:text-primary transition font-semibold border-b border-gray-100">الأعمال</a>
            <a href="#contact" @click="mobileMenuOpen = false" class="block py-3 text-gray-700 hover:text-primary transition font-semibold border-b border-gray-100">تواصل معي</a>
            <a href="#contact" @click="mobileMenuOpen = false" class="block mt-4 bg-primary hover:bg-primary-dark text-white px-6 py-3 rounded-lg text-center font-bold transition">
                ابدأ مشروعك
            </a>
        </div>
    </div>
</nav>
