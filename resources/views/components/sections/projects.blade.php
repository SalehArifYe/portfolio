@props(['projects'])

<section id="projects" class="py-12 md:py-20 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12 md:mb-16">
            <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold mb-4">
                <span class="gradient-text">أعمالي المميزة</span>
            </h2>
            <p class="text-gray-600 text-sm sm:text-base md:text-lg max-w-2xl mx-auto px-4">
                مجموعة من أفضل المشاريع التي قمت بتطويرها باستخدام Flutter و Laravel
            </p>
        </div>
        
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 gap-6 md:gap-8 max-w-7xl mx-auto">
            @foreach($projects as $project)
                <div class="bg-white rounded-2xl overflow-hidden shadow-lg card-hover border-2 border-gray-100 hover:border-primary flex flex-col h-full">
                    <!-- Project Image -->
                    <div class="relative h-44 sm:h-48 overflow-hidden bg-gradient-to-br from-gray-100 to-gray-200 flex-shrink-0">
                        <img src="{{ $project['image'] }}" 
                             alt="{{ $project['title'] }}" 
                             class="w-full h-full object-cover hover:scale-110 transition duration-500">
                    </div>
                    
                    <!-- Project Content -->
                    <div class="p-4 sm:p-6 flex flex-col flex-grow">
                        <h3 class="text-lg sm:text-xl font-black text-black mb-2 sm:mb-3">{{ $project['title'] }}</h3>
                        <p class="text-gray-600 mb-3 sm:mb-4 leading-relaxed text-sm sm:text-base flex-grow">{{ $project['description'] }}</p>
                        
                        <!-- Tags -->
                        <div class="flex flex-wrap gap-2 mb-4">
                            @foreach($project['tags'] as $tag)
                                <span class="bg-primary/10 text-primary px-3 py-1 rounded-lg text-xs font-bold">
                                    {{ $tag }}
                                </span>
                            @endforeach
                        </div>
                        
                        <!-- View Project Button -->
                        <a href="{{ route('project.show', $project['id']) }}" 
                           class="w-full bg-primary hover:bg-primary-dark text-white px-6 py-3 rounded-lg font-bold hover:shadow-xl transition transform hover:scale-105 text-center text-sm sm:text-base flex items-center justify-center gap-2 group">
                            <span>عرض التفاصيل</span>
                            <svg class="w-5 h-5 transform group-hover:-translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                            </svg>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
