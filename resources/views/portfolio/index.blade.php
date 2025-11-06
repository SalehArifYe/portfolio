@extends('layouts.app')

@section('title', 'صالح عارف - Full Stack Developer | Saleh Arif')
@section('meta_description', 'مطور Full Stack متخصص في Flutter و Laravel. خبرة في بناء تطبيقات حديثة مع واجهات Responsive وAnimations سلسة.')

@section('content')
    <!-- Hero Section -->
    <x-sections.hero :profile="$profile" />
    
    <!-- About Section -->
    <x-sections.about :profile="$profile" />
    
    <!-- Skills Section -->
    <x-sections.skills :skills="$skills" />
    
    <!-- Projects Section -->
    <x-sections.projects :projects="$projects" />
    
    <!-- Contact Section -->
    <x-sections.contact :profile="$profile" />
@endsection

@push('scripts')
<script>
    // Smooth scroll behavior
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
    
    // Active navigation highlighting
    window.addEventListener('scroll', () => {
        const sections = document.querySelectorAll('section[id]');
        const navLinks = document.querySelectorAll('.nav-link');
        
        let current = '';
        sections.forEach(section => {
            const sectionTop = section.offsetTop;
            const sectionHeight = section.clientHeight;
            if (scrollY >= (sectionTop - 200)) {
                current = section.getAttribute('id');
            }
        });
        
        navLinks.forEach(link => {
            link.classList.remove('text-primary', 'font-black');
            const underline = link.querySelector('span');
            if (underline) {
                underline.style.width = '0';
            }
            
            if (link.getAttribute('href') === `#${current}`) {
                link.classList.add('text-primary', 'font-black');
                if (underline) {
                    underline.style.width = '100%';
                }
            }
        });
    });
</script>
@endpush
