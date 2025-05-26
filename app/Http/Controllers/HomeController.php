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
                'icon' => 'ti-download',
                'step' => 'Step 1',
                'title' => 'Download our App',
                'description' => 'There are many variations of pass for ages of oremsum.'
            ],
            [
                'icon' => 'ti-user',
                'step' => 'Step 2',
                'title' => 'Create a free Account',
                'description' => 'There are many variations of pass for ages of oremsum.'
            ],
            [
                'icon' => 'ti-gift',
                'step' => 'Step 3',
                'title' => 'Now Start your Journey',
                'description' => 'There are many variations of pass for ages of oremsum.'
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

    private function getPricingPlans()
    {
        return [
            [
                'name' => 'Personal',
                'price' => 0,
                'period' => 'Free',
                'description' => 'For individuals looking for a simple CRM solution',
                'features' => [
                    'Basic CRM features',
                    'Unlimited Personal Pipelines',
                    'Email Power Tools'
                ],
                'popular' => false
            ],
            [
                'name' => 'Professional',
                'price' => 49,
                'period' => 'Monthly',
                'description' => 'For individuals looking for a simple CRM solution',
                'features' => [
                    'Basic CRM features',
                    'Unlimited Personal Pipelines',
                    'Email Power Tools',
                    'Unlimited Shared Pipelines'
                ],
                'popular' => true
            ],
            [
                'name' => 'Enterprise',
                'price' => 99,
                'period' => 'Monthly',
                'description' => 'For individuals looking for a simple CRM solution',
                'features' => [
                    'Basic CRM features',
                    'Unlimited Personal Pipelines',
                    'Email Power Tools',
                    'Unlimited Shared Pipelines',
                    'Full API Access'
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
