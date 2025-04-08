@extends('_layouts.main')
@section('title', 'Contact - SMP')
@section('body')
    @include('_layouts.partials.after-nav', [
        'title' => 'Contact Us',
        'subtitle' =>
            'Have questions or ready to start your project? Get in touch with our team for personalized assistance.',
    ])

    @php

        $faqData = [
            [
                'title' => 'What is the minimum order quantity?',
                'description' =>
                    'Our minimum order quantities vary by product type. Please contact our sales team for specific information about your desired packaging solution.',
            ],
            [
                'title' => 'How long does production take?',
                'description' =>
                    'Production timelines depend on the complexity and quantity of your order. Typical lead times range from 2-4 weeks after design approval.',
            ],
            [
                'title' => 'Do you offer design services?',
                'description' =>
                    'Yes, our in-house design team can help create custom packaging designs or optimize your existing designs for production.',
            ],
            [
                'title' => 'Do you ship internationally?',
                'description' =>
                    'Yes, we ship worldwide. International shipping costs and timelines will be included in your quote.',
            ],
            [
                'title' => 'Can I request samples before placing a large order?',
                'description' =>
                    "Absolutely. We offer sample production services to ensure you're completely satisfied with the quality and design before proceeding with a full order.",
            ],
            [
                'title' => 'What sustainable packaging options do you offer?',
                'description' =>
                    'We offer a variety of eco-friendly options including recycled materials, biodegradable packaging, and designs that minimize material usage.',
            ],
        ];

    @endphp

{{-- contact form --}}

<section class="py-20 bg-white">
    <div class="container-custom">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            {{-- Contact Form --}}
            <div class="bg-smp-light-gray p-8 rounded-lg shadow-md" data-aos="fade-right">
                <h2 class="text-2xl md:text-3xl font-bold text-smp-navy mb-6">
                    Send Us a Message
                </h2>
                <form id="contactForm" class="space-y-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="space-y-2">
                            <label for="name" class="font-medium text-smp-navy">Full Name *</label>
                            <input type="text" id="name" name="name" placeholder="Your name" required class="border-gray-300 focus:border-smp-teal focus:ring-smp-teal w-full" />
                        </div>
                        <div class="space-y-2">
                            <label for="email" class="font-medium text-smp-navy">Email Address *</label>
                            <input type="email" id="email" name="email" placeholder="Your email" required class="border-gray-300 focus:border-smp-teal focus:ring-smp-teal w-full" />
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="space-y-2">
                            <label for="phone" class="font-medium text-smp-navy">Phone Number</label>
                            <input type="text" id="phone" name="phone" placeholder="Your phone number" class="border-gray-300 focus:border-smp-teal focus:ring-smp-teal w-full" />
                        </div>
                        <div class="space-y-2">
                            <label for="company" class="font-medium text-smp-navy">Subject</label>
                            <input type="text" id="subject" name="subject" placeholder="Subject" class="border-gray-300 focus:border-smp-teal focus:ring-smp-teal w-full" />
                        </div>
                    </div>

                    <div class="space-y-2">
                        <label for="message" class="font-medium text-smp-navy">Message *</label>
                        <textarea id="message" name="message" placeholder="Tell us about your project or inquiry" required rows="6" class="border-gray-300 focus:border-smp-teal focus:ring-smp-teal w-full"></textarea>
                    </div>

                    <button type="submit" id="submitBtn" class="bg-smp-teal hover:bg-smp-teal/90 text-white w-full py-6 transition duration-200">
                        Send Message
                    </button>
                </form>
            </div>

            <div class="space-y-8" data-aos="fade-left">
                <div>
                    <h2 class="text-2xl md:text-3xl font-bold text-smp-navy mb-6">
                        Contact Information
                    </h2>
                    <p class="text-lg text-smp-dark-gray/80 mb-8">
                        Our team is ready to answer your questions and help you find the perfect packaging solution for your business.
                    </p>
                </div>

                <div class="space-y-6">
                    <div class="flex items-start">
                        <div class="bg-smp-teal p-3 rounded-full text-white mr-4">
                            {{-- Icon placeholder --}}
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M..." />
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-semibold text-smp-navy text-lg mb-1">Our Location</h3>
                            <p class="text-smp-dark-gray/80">
                                123 Packaging Lane, Suite 100<br />
                                Print City, PC 12345
                            </p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="bg-smp-teal p-3 rounded-full text-white mr-4">
                            {{-- Icon placeholder --}}
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M..." />
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-semibold text-smp-navy text-lg mb-1">Email Us</h3>
                            <p class="text-smp-dark-gray/80">
                                <a href="mailto:info@smpprint.com" class="hover:text-smp-teal transition-colors">
                                    info@smpprint.com
                                </a>
                            </p>
                            <p class="text-smp-dark-gray/80">
                                <a href="mailto:sales@smpprint.com" class="hover:text-smp-teal transition-colors">
                                    sales@smpprint.com
                                </a>
                            </p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="bg-smp-teal p-3 rounded-full text-white mr-4">
                            {{-- Icon placeholder --}}
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M..." />
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-semibold text-smp-navy text-lg mb-1">Call Us</h3>
                            <p class="text-smp-dark-gray/80">
                                <a href="tel:+11234567890" class="hover:text-smp-teal transition-colors">
                                    +1 (123) 456-7890
                                </a>
                            </p>
                            <p class="text-smp-dark-gray/80">
                                <a href="tel:+11234567891" class="hover:text-smp-teal transition-colors">
                                    +1 (123) 456-7891
                                </a>
                            </p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="bg-smp-teal p-3 rounded-full text-white mr-4">
                            {{-- Icon placeholder --}}
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M..." />
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-semibold text-smp-navy text-lg mb-1">Business Hours</h3>
                            <p class="text-smp-dark-gray/80">
                                Monday - Friday: 9:00 AM - 6:00 PM<br />
                                Saturday: 10:00 AM - 2:00 PM<br />
                                Sunday: Closed
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    {{-- find us --}}
    <section class="py-20 bg-gray-100">
        <div class="container-custom">
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="text-3xl md:text-4xl font-bold text-smp-navy mb-4">
                    Find Us
                </h2>
                <p class="text-lg text-smp-dark-gray/80 max-w-3xl mx-auto">
                    Visit our facility to see our operations firsthand and discuss your project in person.
                </p>
            </div>

            <div class="rounded-lg overflow-hidden shadow-lg" data-aos="zoom-in">

                <div class="aspect-w-16 aspect-h-9 h-96 bg-gray-300 flex items-center justify-center">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7170.70290318609!2d72.83848824120982!3d19.020330428691228!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7cedbbd95e807%3A0x7aaab7a7d886e8ec!2sDadar%20Railway%20Station%2C%20Dadar%2C%20Mumbai%2C%20Maharashtra!5e1!3m2!1sen!2sin!4v1744120095046!5m2!1sen!2sin"
                        width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>

    {{-- f&q --}}

    <section class="py-20 bg-white">
        <div class="container-custom">
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="text-3xl md:text-4xl font-bold text-smp-navy mb-4">
                    Frequently Asked Questions
                </h2>
                <p class="text-lg text-smp-dark-gray/80 max-w-3xl mx-auto">
                    Find quick answers to common questions about our services.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                @for ($col = 0; $col < 2; $col++)
                    <div class="space-y-6" data-aos="fade-up" data-aos-delay="{{ $col === 0 ? '100' : '200' }}">
                        @foreach ($faqData as $index => $faq)
                            @if ($index % 2 === $col)
                                <details class="bg-gray-100 p-4 rounded-lg">
                                    <summary class="text-xl font-semibold text-smp-navy">
                                        {{ $faq['title'] }}
                                    </summary>
                                    <p class="text-gray-800/80">
                                        {{ $faq['description'] }}
                                    </p>
                                </details>
                            @endif
                        @endforeach
                    </div>
                @endfor
            </div>
        </div>
    </section>




@endsection
