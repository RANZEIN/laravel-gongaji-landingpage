<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'services' => $this->getServices(),
            'portfolioFeatures' => $this->getPortfolioFeatures(),
            'pricingPlans' => $this->getPricingPlans(),
            'faqs' => $this->getFaqs(),
            'testimonials' => $this->getTestimonials(),
            'trustedCompanies' => $this->getTrustedCompanies()
        ];

        return view('home', $data);
    }

    public function contact(Request $request)
    {
        $request->validate([
            'full_name' => 'required|string|max:255',
            'username' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'password' => 'required|string|min:6',
        ]);

        // Here you can save to database or send email
        // Example: Contact::create($request->all());

        return redirect()->back()->with('success', 'Thank you for contacting us! We will get back to you soon.');
    }

    public function subscribe(Request $request)
    {
        $request->validate([
            'email' => 'required|email|max:255',
        ]);

        // Save subscription email
        // Example: Subscription::create(['email' => $request->email]);

        return redirect()->back()->with('success', 'Thank you for subscribing!');
    }

   private function getServices()
    {
        return [
            [
                'icon' => 'ti-book',
                'step' => '',
                'title' => 'Mushaf Lengkap',
                'description' => 'Akses berbagai mushaf terpercaya dengan tajwid dan terjemahan lengkap.'
            ],
            [
                'icon' => 'ti-user-check',
                'step' => '',
                'title' => 'Ustadz Profesional',
                'description' => 'Pembelajaran privat atau kelompok, online maupun offline, dengan guru ahli.'
            ],
            [
                'icon' => 'ti-mouse',
                'step' => '',
                'title' => 'Pembelajaran Interaktif',
                'description' => 'Menggunakan teknologi Virtual Reality untuk pengalaman belajar inovatif.'
            ]
        ];
    }

    private function getPortfolioFeatures()
    {
        return [
            [
                'icon' => 'ti-brand-github',
                'title' => 'Github Sync',
                'description' => 'Contrary to popular belief, Lorem Ipsum is not simply random text.'
            ],
            [
                'icon' => 'ti-crown',
                'title' => 'Branding',
                'description' => 'Contrary to popular belief, Lorem Ipsum is not simply random text.'
            ],
            [
                'icon' => 'ti-message-circle-2',
                'title' => 'Comments',
                'description' => 'Contrary to popular belief, Lorem Ipsum is not simply random text.'
            ]
        ];
    }

   public function showPricing()
{
    $plans = $this->getPricingPlans();
    return view('pricing', compact('plans'));
}

private function getPricingPlans()
{
    return [
        [
            'name' => 'Claim Voucher',
            'price' => 0,
            'yearly_price' => 0,
            'period' => 'Gratis',
            'description' => 'Punya Mushaf Syaamil Qur\'an?',
            'features' => [
                'Konten Islami eksklusif',
                'Akses fitur Qur\'an Library',
            ],
            'popular' => false
        ],
        [
            'name' => 'Premium',
            'price' => 64000,
            'yearly_price' => 649000,
            'period' => 'Bulanan',
            'description' => 'Langganan Akses Premium',
            'features' => [
                'Konten Islami Eksklusif',
                'Akses fitur Qur\'an Library',
            ],
            'popular' => true
        ],
        [
            'name' => 'Claim Voucher',
            'price' => 0,
            'yearly_price' => 0,
            'period' => 'Gratis',
            'description' => 'Punya Mushaf Syaamil Haji dan Umrah?',
            'features' => [
                'Konten Islami Eksklusif',
                'Akses fitur Qur\'an Library',
                'Akses Virtual Reality Haji Umrah Selamanya',
            ],
            'popular' => false
        ]
    ];
}
    private function getFaqs()
    {
        return [
            [
                'question' => 'Letraset sheets containing sum passages ?',
                'answer' => 'Seamlessly see the tasks that need your attention, check when your next meeting is coming up, and keep up with your progress.',
                'show' => true
            ],
            [
                'question' => 'There are many variations ?',
                'answer' => 'Seamlessly see the tasks that need your attention, check when your next meeting is coming up, and keep up with your progress.',
                'show' => false
            ],
            [
                'question' => 'Lorem Ipsum generators on the Internet tend ?',
                'answer' => 'Seamlessly see the tasks that need your attention, check when your next meeting is coming up, and keep up with your progress.',
                'show' => false
            ],
            [
                'question' => 'Various versions have evolved over the ?',
                'answer' => 'Seamlessly see the tasks that need your attention, check when your next meeting is coming up, and keep up with your progress.',
                'show' => false
            ],
            [
                'question' => 'Finibus bonorum et malorum ?',
                'answer' => 'Seamlessly see the tasks that need your attention, check when your next meeting is coming up, and keep up with your progress.',
                'show' => false
            ],
            [
                'question' => 'Many desktop publishing packages ?',
                'answer' => 'Seamlessly see the tasks that need your attention, check when your next meeting is coming up, and keep up with your progress.',
                'show' => false
            ]
        ];
    }

    private function getTestimonials()
    {
        return [
            [
                'text' => 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece',
                'name' => 'Merky Lester',
                'position' => 'Manager',
                'image' => 'testimonial-image.png'
            ],
            [
                'text' => 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece',
                'name' => 'John Doe',
                'position' => 'CEO',
                'image' => 'testimonial-image.png'
            ]
        ];
    }

    private function getTrustedCompanies()
    {
        return [
            ['name' => 'Google', 'logo' => 'google.svg'],
            ['name' => 'Microsoft', 'logo' => 'microsoft.svg'],
            ['name' => 'Amazon', 'logo' => 'amazon.svg'],
            ['name' => 'Unique', 'logo' => 'unique.svg']
        ];
    }
}
