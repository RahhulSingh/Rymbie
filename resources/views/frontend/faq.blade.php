@extends('partials.app')
@section('title', 'Faq')
@section('content')
        <div class="faq-hero-banner">
            <div class="container">
                <div class="faq-hero-row">
                    <div class="faq-hero-text">
                        <h1 class="faq-hero-title">We're Here to Help</h1>
                        <p class="faq-hero-subtitle">Find answers to common questions about our services, process, and
                            policies.</p>
                    </div>
                    <div class="faq-hero-img-wrapper">
                        <img src="{{asset('assets/frontend/images/faq.png')}}?v=2" alt="Frequently Asked Questions Illustration"
                            class="faq-hero-img" />
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <section class="faq-accordion-container">
                <div class="faq-row" onclick="toggleFaq(this)">
                    <div class="faq-header">
                        <h2 class="faq-question">What types of assignments do you handle?</h2>
                        <div class="faq-arrow-icon">
                            <svg width="18" height="9" viewBox="0 0 18 9" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M1.5 1.5L9 7.5L16.5 1.5" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                    </div>
                    <div class="faq-body">
                        <div class="faq-content">
                            We handle a comprehensive range of academic tasks including essays, dissertations, case
                            studies, finance reports, nursing presentations, business plans, and research papers
                            across
                            all subjects, academic levels, and majors.
                        </div>
                    </div>
                </div>

                <div class="faq-row" onclick="toggleFaq(this)">
                    <div class="faq-header">
                        <h2 class="faq-question">How do I place an order?</h2>
                        <div class="faq-arrow-icon">
                            <svg width="18" height="9" viewBox="0 0 18 9" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M1.5 1.5L9 7.5L16.5 1.5" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                    </div>
                    <div class="faq-body">
                        <div class="faq-content">
                            Placing an order is quick and straightforward! Navigate to our Assignment Brief page,
                            fill
                            out your specific homework parameters (subject, academic level, and target deadline),
                            upload
                            any supporting reference guidelines, and click submit.
                        </div>
                    </div>
                </div>

                <div class="faq-row" onclick="toggleFaq(this)">
                    <div class="faq-header">
                        <h2 class="faq-question">Do you guarantee plagiarism-free work?</h2>
                        <div class="faq-arrow-icon">
                            <svg width="18" height="9" viewBox="0 0 18 9" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M1.5 1.5L9 7.5L16.5 1.5" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                    </div>
                    <div class="faq-body">
                        <div class="faq-content">
                            Absolutely. All assignments are custom-written from scratch by our subject matter
                            experts.
                            Every completed paper goes through rigorous double-layer plagiarism scanning software,
                            and
                            we can provide free scan reports for your confidence.
                        </div>
                    </div>
                </div>

                <div class="faq-row" onclick="toggleFaq(this)">
                    <div class="faq-header">
                        <h2 class="faq-question">How do I make a payment?</h2>
                        <div class="faq-arrow-icon">
                            <svg width="18" height="9" viewBox="0 0 18 9" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M1.5 1.5L9 7.5L16.5 1.5" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                    </div>
                    <div class="faq-body">
                        <div class="faq-content">
                            We accept all major secure payment channels including credit cards, debit cards, and
                            secure
                            online transfers. Your checkout is protected under advanced end-to-end SSL encryption
                            standards to ensure total transaction confidentiality.
                        </div>
                    </div>
                </div>

                <div class="faq-row" onclick="toggleFaq(this)">
                    <div class="faq-header">
                        <h2 class="faq-question">What is your refund policy?</h2>
                        <div class="faq-arrow-icon">
                            <svg width="18" height="9" viewBox="0 0 18 9" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M1.5 1.5L9 7.5L16.5 1.5" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                    </div>
                    <div class="faq-body">
                        <div class="faq-content">
                            Your academic success is our main priority. We offer free unlimited revisions within 14
                            days
                            of delivery if any criteria from your initial brief are missed. If the paper fails to
                            meet
                            your academic standards, you can request a complete refund.
                        </div>
                    </div>
                </div>
            </section>

            <section class="faq-bottom-section">
                <h2 class="faq-bottom-title">Still Have Questions?</h2>
                <p class="faq-bottom-subtitle">Didn't find your answer? Contact our support team.</p>
                <div class="faq-contact-box">
                    <span class="faq-contact-text">Contact our support team.</span>
                    <button class="faq-contact-btn" onclick="window.location.href='{{route('frontend.contact_us')}}'">Contact Us</button>
                </div>
            </section>
        </div>
     @endsection
    <script>
        function toggleFaq(rowElement) {
            const allRows = document.querySelectorAll('.faq-row');

            allRows.forEach(row => {
                if (row !== rowElement) {
                    row.classList.remove('open');
                    row.querySelector('.faq-body').style.maxHeight = null;
                }
            });

            rowElement.classList.toggle('open');
            const bodyPanel = rowElement.querySelector('.faq-body');

            if (rowElement.classList.contains('open')) {
                bodyPanel.style.maxHeight = bodyPanel.scrollHeight + 'px';
            } else {
                bodyPanel.style.maxHeight = null;
            }
        }
    </script>
