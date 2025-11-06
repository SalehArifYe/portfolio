@extends('layouts.app')

@section('title', $project['title'] . ' - صالح عارف')
@section('meta_description', $project['description'])

@section('content')
<!-- Hero Section -->
<section class="py-16 md:py-24 gradient-bg relative overflow-hidden">
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-20 right-20 w-72 h-72 bg-white rounded-full blur-3xl"></div>
        <div class="absolute bottom-20 left-20 w-96 h-96 bg-white rounded-full blur-3xl"></div>
    </div>
    
    <div class="container mx-auto px-4 relative z-10">
        <!-- Back Button -->
        <a href="{{ route('portfolio.index') }}#projects" class="inline-flex items-center gap-2 text-white hover:text-primary transition mb-8">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19l7-7-7-7"/>
            </svg>
            <span class="font-bold">رجوع للأعمال</span>
        </a>
        
        <div class="max-w-4xl mx-auto text-center text-white">
            <span class="bg-primary text-white px-4 py-2 rounded-full text-sm font-bold mb-4 inline-block">
                {{ $project['type'] }}
            </span>
            <h1 class="text-3xl sm:text-4xl md:text-5xl font-black mb-4">{{ $project['title'] }}</h1>
            <p class="text-lg sm:text-xl text-gray-200">{{ $project['description'] }}</p>
        </div>
    </div>
</section>

<!-- Project Details -->
<section class="py-12 md:py-20 bg-white">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto">
            <!-- Description -->
            <div class="mb-12">
                <h2 class="text-2xl sm:text-3xl font-black text-black mb-6 flex items-center gap-3">
                    <div class="w-2 h-8 bg-primary rounded"></div>
                    وصف المشروع
                </h2>
                <p class="text-gray-700 text-base sm:text-lg leading-relaxed">
                    {{ $project['full_description'] }}
                </p>
            </div>

            <!-- Technologies -->
            <div class="mb-12">
                <h2 class="text-2xl sm:text-3xl font-black text-black mb-6 flex items-center gap-3">
                    <div class="w-2 h-8 bg-primary rounded"></div>
                    التقنيات المستخدمة
                </h2>
                <div class="flex flex-wrap gap-3">
                    @foreach($project['tags'] as $tag)
                        <span class="bg-primary/10 text-primary px-5 py-3 rounded-xl text-sm sm:text-base font-bold border-2 border-primary/20 hover:bg-primary hover:text-white transition">
                            {{ $tag }}
                        </span>
                    @endforeach
                </div>
            </div>

            <!-- Screenshots Section (Optional) -->
            <div class="mb-12">
                <h2 class="text-2xl sm:text-3xl font-black text-black mb-6 flex items-center gap-3">
                    <div class="w-2 h-8 bg-primary rounded"></div>
                    لقطات من المشروع
                </h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <img src="{{ $project['image'] }}" alt="Screenshot 1" class="w-full h-64 object-cover rounded-xl shadow-lg">
                    <img src="{{ $project['image'] }}" alt="Screenshot 2" class="w-full h-64 object-cover rounded-xl shadow-lg">
                </div>
            </div>

            <!-- CTA Section -->
            <div class="bg-black rounded-2xl p-8 md:p-12 text-center text-white">
                <h3 class="text-2xl sm:text-3xl font-black mb-4">هل لديك مشروع مشابه؟</h3>
                <p class="text-gray-300 mb-6 text-sm sm:text-base">
                    أنا جاهز لمساعدتك في تحويل فكرتك إلى واقع باستخدام أحدث التقنيات
                </p>
                <a href="{{ route('portfolio.index') }}#contact" class="inline-block bg-primary hover:bg-primary-dark text-white px-8 py-4 rounded-lg font-bold hover:shadow-2xl transition transform hover:scale-105">
                    تواصل معي الآن
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
