<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class PortfolioController extends Controller
{
    /**
     * Display the portfolio home page.
     */
    public function index(): View
    {
        $data = [
            'profile' => $this->getProfileData(),
            'skills' => $this->getSkills(),
            'projects' => $this->getProjects(),
        ];

        return view('portfolio.index', $data);
    }

    /**
     * Display project details.
     */
    public function showProject($id): View
    {
        $projects = $this->getProjects();
        $project = collect($projects)->firstWhere('id', (int)$id);
        
        if (!$project) {
            abort(404);
        }

        return view('portfolio.project', ['project' => $project]);
    }

    /**
     * Get profile data.
     */
    private function getProfileData(): array
    {
        return [
            'name' => 'صالح عارف',
            'name_en' => 'Saleh Aref',
            'title' => 'Full Stack Developer',
            'subtitle' => 'Flutter • Laravel • API Development',
            'bio' => 'مطور Full Stack متخصص في Flutter و Laravel. خبرة في بناء تطبيقات حديثة مع واجهات Responsive وAnimations سلسة. أطور RESTful APIs آمنة باستخدام Laravel و MySQL، وأدير الحالة بكفاءة باستخدام Cubit و Provider. ملتزم بكتابة Clean Code وفق مبادئ Clean Architecture و MVVM.',
            'email' => 'saleharif733727@gmail.com',
            'phone' => '+967 781976893',
            'location' => 'عدن، اليمن',
            'age' => '21',
            'education' => 'بكالوريوس في نظم المعلومات - السنة الثالثة، جامعة عدن',
            'github' => 'github.com/saleh',
            'linkedin' => 'linkedin.com/in/saleh',
            'projectsCompleted' => '4',
            'happyClients' => '5+',
            'languages' => 'العربية (اللغة الأم)، الإنجليزية (جيد)',
            'goal' => 'السعي لتطوير تطبيقات احترافية وحديثة تجمع بين واجهات Flutter الجذابة وقوة Laravel في تطوير الـ Backend، مع الالتزام بتقديم كود نظيف وسهل الصيانة، ومواكبة أحدث التقنيات لإنشاء حلول برمجية متقدمة وفعالة، واكتساب الخبرة العملية لتعزيز مهاراتي المهنية في مجال تطوير البرمجيات.',
        ];
    }

    /**
     * Get skills data.
     */
    private function getSkills(): array
    {
        return [
            [
                'category' => 'Flutter Development',
                'icon' => 'M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z',
                'color' => 'purple',
                'items' => ['Responsive UI Development', 'Smooth Animations', 'Dio for APIs', 'State Management (Bloc, Cubit, Provider)']
            ],
            [
                'category' => 'Laravel Development',
                'icon' => 'M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zM9 17H7v-7h2v7zm4 0h-2V7h2v10zm4 0h-2v-4h2v4z',
                'color' => 'blue',
                'items' => ['Secure RESTful APIs', 'JWT & Sanctum Auth', 'MySQL Database', 'Real-time WebSocket']
            ],
            [
                'category' => 'Local Database',
                'icon' => 'M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4',
                'color' => 'green',
                'items' => ['SQLite', 'Hive', 'Shared Preferences', 'Flutter Secure Storage']
            ],
            [
                'category' => 'Code Principles',
                'icon' => 'M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5',
                'color' => 'red',
                'items' => ['Clean Code', 'Clean Architecture', 'MVVM Pattern', 'Scalable & Maintainable']
            ],
        ];
    }

    /**
     * Get projects data.
     */
    private function getProjects(): array
    {
        return [
            [
                'id' => 1,
                'title' => 'Book App - تطبيق كتب',
                'description' => 'تطبيق Flutter يعرض بيانات الكتب من Google Books API باستخدام Dio، مع تخزين محلي عبر Hive',
                'full_description' => 'تطبيق Flutter يعرض بيانات الكتب من Google Books API باستخدام Dio، مع تخزين محلي عبر Hive. يتميز بتصميم جذاب، وخيارات بحث وتصفية وAnimations سلسة. يمكن للمستخدمين النقر على "More" لفتح صفحة الكتاب على Google للمزيد من التفاصيل. تتم إدارة الحالة باستخدام Cubit مع اتباع نمط MVVM',
                'image' => asset('images/projects/google_books.png'),
                'tags' => ['Flutter', 'Dio', 'Google Books API', 'Hive', 'Cubit', 'MVVM'],
                'type' => 'Mobile App',
                'link' => '#',
            ],
            [
                'id' => 2,
                'title' => 'My Wallet - محفظتي وديوني',
                'description' => 'تطبيق Flutter متكامل لإدارة المحافظ، والديون، والمعاملات، مع لوحة تحكم مدمجة',
                'full_description' => 'تطبيق Flutter متكامل لإدارة المحافظ، والديون، والمعاملات، مع لوحة تحكم مدمجة داخل التطبيق توفر رؤى لحظية وسجل المعاملات. يمكن للمستخدمين إضافة عدة محافظ وديون وربطها بكفاءة لتتبع مالي واضح. يدعم تسجيل المستخدمين ومصادقة آمنة عبر Laravel RESTful API متصلة بقاعدة بيانات MySQL. تتم إدارة الحالة باستخدام Cubit، والتواصل مع الـ backend عبر Dio، وتخزين البيانات المحلية باستخدام Shared Preferences لتحسين الأداء. تم بناؤه وفق مبادئ Clean Architecture لضمان سهولة الصيانة والتوسع.',
                'image' => asset('images/projects/my_wallet.png'),
                'tags' => ['Flutter', 'Laravel', 'MySQL', 'Cubit', 'Dio', 'Shared Preferences', 'Clean Architecture'],
                'type' => 'Full Stack',
                'link' => '#',
            ],
            [
                'id' => 3,
                'title' => 'Tawssela - توصيلة',
                'description' => 'تطبيق كامل للطعام والتوصيل يتكون من تطبيق للعميل، وتطبيق للسائق، ولوحة تحكم للمسؤول',
                'full_description' => 'تطبيق كامل للطعام والتوصيل يتكون من تطبيق للعميل، وتطبيق للسائق، ولوحة تحكم للمسؤول مبنية باستخدام Laravel Blade. يوفر تطبيق العميل واجهة مستخدم حديثة وبديهية لتصفح القوائم وتقديم الطلبات، بينما يدير تطبيق السائق تخصيص الطلبات وتتبعها في الوقت الفعلي. تدمج لوحة التحكم تقنية WebSocket لتمكين التفاعل اللحظي وتحديث حالة الطلبات فوراً. تم بناء تطبيقات الجوال باستخدام Flutter، مع إدارة الحالة عبر Cubit، وتخزين التوكنات بشكل آمن باستخدام Flutter Secure Storage، ونظام مصادقة كامل. تم تصميم المشروع وفق مبادئ Clean Architecture لضمان أداء عالي وسهولة الصيانة وقابلية التوسع المستقبلية.',
                'image' => asset('images/projects/tawseela.png'),
                'tags' => ['Flutter', 'Laravel', 'WebSocket', 'Cubit', 'Flutter Secure Storage', 'Clean Architecture'],
                'type' => 'Full Stack',
                'link' => '#',
            ],
            [
                'id' => 4,
                'title' => 'Dashboard Website - موقع داشبورد',
                'description' => 'موقع داشبورد إداري متكامل مبني باستخدام Laravel Blade وTailwind CSS',
                'full_description' => 'موقع داشبورد إداري متكامل مبني باستخدام Laravel Blade وTailwind CSS. يوفر واجهة إدارة قوية لإدارة المستخدمين، المحتوى، والتقارير. يتميز بتصميم عصري وسريع الاستجابة، مع لوحات تحكم تفاعلية وإحصائيات لحظية. تم بناؤه باستخدام Laravel للـ Backend مع MySQL لقاعدة البيانات، ونظام مصادقة آمن. الموقع responsive ويعمل بكفاءة على جميع الأجهزة.',
                'image' => 'https://placehold.co/800x600/8b5cf6/ffffff?text=Dashboard',
                'tags' => ['Laravel', 'Blade', 'Tailwind CSS', 'MySQL', 'Responsive', 'Admin Panel'],
                'type' => 'Web',
                'link' => '#',
            ],
        ];
    }
}
