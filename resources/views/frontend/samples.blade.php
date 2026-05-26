@extends('partials.app')
@section('title', 'Samples')
@section('content')
        <section class="samples_section">
            <div class="container">
                <div class="samples-container">
                    <div class="samples-header-row">
                        <h1 class="samples-title">View Our Work</h1>
                        <p class="samples-subtitle">Browse sample assignments, dissertations, and reports to see our
                            quality
                            before you order.</p>

                        <div class="samples-filter-wrapper" id="filter-wrapper">
                            <button class="samples-filter-trigger" onclick="toggleFilterMenu(event)">
                                <span class="samples-filter-text" id="active-filter-text">All</span>
                                <svg width="12" height="8" viewBox="0 0 12 8" fill="none"
                                    xmlns="http://www.w3.org/2000/svg" class="samples-filter-icon">
                                    <path d="M1 1.5L6 6.5L11 1.5" stroke="#000000" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </button>

                            <div class="samples-filter-menu" id="filter-menu">
                                <div class="samples-filter-item active" onclick="filterSamples('All', this)">All</div>
                                <div class="samples-filter-item" onclick="filterSamples('MBA Assignment', this)">MBA
                                    Assignment
                                </div>
                                <div class="samples-filter-item"
                                    onclick="filterSamples('Management Dissertation', this)">
                                    Management Dissertation</div>
                                <div class="samples-filter-item" onclick="filterSamples('Finance Report', this)">Finance
                                    Report
                                </div>
                                <div class="samples-filter-item" onclick="filterSamples('Nursing Presentation', this)">
                                    Nursing
                                    Presentation</div>
                            </div>
                        </div>
                    </div>

                    <div class="samples-grid" id="samples-grid">
                        <div class="samples-card" data-category="MBA Assignment" id="card-1">
                            <div class="samples-card-content">
                                <div class="samples-card-icon">
                                    <svg width="53" height="53" viewBox="0 0 53 53" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M23.1875 0H6.625V53H46.375V23.1875H23.1875V0Z" fill="#B1B1B1" />
                                        <path d="M29.8125 0V16.5625H46.375L29.8125 0Z" fill="#B1B1B1" />
                                    </svg>

                                </div>
                                <h2 class="samples-card-title">Marketing Strategy Report</h2>
                                <p class="samples-card-category">MBA Assignment</p>

                            </div>
                            <div class="samples-card-bottom-data">
                                <p class="samples-card-details">18 Pages</p>
                                <button class="samples-card-btn"
                                    onclick="openSampleModal('Marketing Strategy Report', 'MBA Assignment', '18 Pages', 'MBA Marketing Plan.pdf')">View
                                    Sample</button>
                            </div>
                        </div>

                        <div class="samples-card" data-category="Management Dissertation" id="card-2">
                            <div class="samples-card-content">
                                <div class="samples-card-icon">
                                    <svg width="53" height="53" viewBox="0 0 53 53" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M23.1875 0H6.625V53H46.375V23.1875H23.1875V0Z" fill="#B1B1B1" />
                                        <path d="M29.8125 0V16.5625H46.375L29.8125 0Z" fill="#B1B1B1" />
                                    </svg>

                                </div>
                                <h2 class="samples-card-title">Businesstalan Dissertation</h2>
                                <p class="samples-card-category">Management Dissertation</p>
                            </div>
                            <div class="samples-card-bottom-data">
                                <p class="samples-card-details">75 Pages</p>
                                <button class="samples-card-btn"
                                    onclick="openSampleModal('Businesstalan Dissertation', 'Management Dissertation', '75 Pages', 'Management Dissertation.pdf')">View
                                    Sample</button>

                            </div>
                        </div>

                        <div class="samples-card" data-category="Finance Report" id="card-3">
                            <div class="samples-card-content">
                                <div class="samples-card-icon">
                                    <svg width="53" height="53" viewBox="0 0 53 53" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M23.1875 0H6.625V53H46.375V23.1875H23.1875V0Z" fill="#B1B1B1" />
                                        <path d="M29.8125 0V16.5625H46.375L29.8125 0Z" fill="#B1B1B1" />
                                    </svg>

                                </div>
                                <h2 class="samples-card-title">Financial Analysis Report</h2>
                                <p class="samples-card-category">Finance Report</p>

                            </div>
                            <div class="samples-card-bottom-data">
                                <p class="samples-card-details">22 Pages</p>
                                <button class="samples-card-btn"
                                    onclick="openSampleModal('Financial Analysis Report', 'Finance Report', '22 Pages', 'Corporate Finance Report.pdf')">View
                                    Sample</button>
                            </div>
                        </div>

                        <div class="samples-card" data-category="Nursing Presentation" id="card-4">
                            <div class="samples-card-content">
                                <div class="samples-card-icon">
                                    <svg width="53" height="53" viewBox="0 0 53 53" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M23.1875 0H6.625V53H46.375V23.1875H23.1875V0Z" fill="#B1B1B1" />
                                        <path d="M29.8125 0V16.5625H46.375L29.8125 0Z" fill="#B1B1B1" />
                                    </svg>

                                </div>
                                <h2 class="samples-card-title">Nursing Care Presentation</h2>
                                <p class="samples-card-category">Nursing Presentation</p>

                            </div>
                            <div class="samples-card-bottom-data">
                                <p class="samples-card-details">12 Slides</p>
                                <button class="samples-card-btn"
                                    onclick="openSampleModal('Nursing Care Presentation', 'Nursing Presentation', '12 Slides', 'Nursing Presentation.pdf')">View
                                    Sample</button>
                            </div>
                        </div>

                    </div>

                    <div class="samples-cta-block">
                        <h2 class="samples-cta-title">Like what you see?</h2>
                        <p class="samples-cta-subtitle">Get your own custom-written assignment today.</p>
                        <button class="samples-cta-btn" onclick="window.location.href='{{route('frontend.faq')}}'">Get Help
                            Now</button>
                    </div>

                </div>
            </div>
        </section>
        <div class="samples-modal" id="preview-modal" onclick="closeSampleModal(event)">
            <div class="samples-modal-content" onclick="event.stopPropagation()">
                <div class="samples-modal-header">
                    <span class="samples-modal-title" id="modal-doc-title">Document Preview</span>
                    <button class="samples-modal-close" onclick="closeSampleModal(event)">&times;</button>
                </div>
                <div class="samples-modal-body">
                    <div class="samples-mock-doc">
                        <h3 style="margin-bottom: 20px; color: #005EAE; text-align: center;" id="modal-inner-title">
                            Marketing Strategy Report</h3>
                        <p style="font-weight: bold; color: #4A4A4A; border-bottom: 2px solid #E5E5E5; padding-bottom: 10px;"
                            id="modal-inner-category">MBA Assignment | Preview Mode</p>

                        <div style="margin-top: 25px; line-height: 1.6; color: #333333;">
                            <h4 style="color: #000000; font-size: 18px; margin-bottom: 10px;">Executive Summary</h4>
                            <p style="margin-bottom: 20px;">This sample analysis outlines a detailed strategic expansion
                                roadmap and marketing model targeting high-value growth categories. By leveraging modern
                                consumer demographics and targeted distribution channels, the organization achieves
                                optimized brand awareness metrics and robust competitive advantage.</p>

                            <h4 style="color: #000000; font-size: 18px; margin-bottom: 10px;">Table of Contents</h4>
                            <ul style="padding-left: 20px; margin-bottom: 25px;">
                                <li>Section 1: Market Assessment & Trends Analysis</li>
                                <li>Section 2: Competitive Positioning Strategy</li>
                                <li>Section 3: Demographic Segment Optimization</li>
                                <li>Section 4: Budget Allocation & Forecast Metrics</li>
                            </ul>

                            <h4 style="color: #000000; font-size: 18px; margin-bottom: 10px;">Methodology</h4>
                            <p style="margin-bottom: 20px;">Primary quantitative tracking combined with secondary
                                literature
                                reviews were utilized to establish precise model correlations. The findings indicate a
                                direct relationship between user engagement rates and long-term brand equity.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
    <script>
        // Toggle Category Filter dropdown
        function toggleFilterMenu(e) {
            e.stopPropagation();
            const wrapper = document.getElementById('filter-wrapper');
            wrapper.classList.toggle('open');
        }

        // Close dropdown when clicking outside
        document.addEventListener('click', function () {
            document.getElementById('filter-wrapper').classList.remove('open');
        });

        // Filter cards matching category
        function filterSamples(category, element) {
            // Update active menu highlight
            const items = document.querySelectorAll('.samples-filter-item');
            items.forEach(item => item.classList.remove('active'));
            element.classList.add('active');

            // Update active text trigger
            document.getElementById('active-filter-text').textContent = category;

            // Filter cards with nice fade effect
            const cards = document.querySelectorAll('.samples-card');
            cards.forEach(card => {
                const cardCat = card.getAttribute('data-category');
                if (category === 'All' || cardCat === category) {
                    card.style.display = 'flex';
                    setTimeout(() => {
                        card.style.opacity = '1';
                        card.style.transform = 'translateY(0)';
                    }, 50);
                } else {
                    card.style.opacity = '0';
                    card.style.transform = 'translateY(10px)';
                    setTimeout(() => {
                        card.style.display = 'none';
                    }, 250);
                }
            });
        }

        // Open custom Preview Modal
        function openSampleModal(title, category, pages, fileName) {
            document.getElementById('modal-doc-title').textContent = fileName;
            document.getElementById('modal-inner-title').textContent = title;
            document.getElementById('modal-inner-category').textContent = `${category} | Preview Mode (${pages})`;

            const modal = document.getElementById('preview-modal');
            modal.classList.add('show');
        }

        // Close Preview Modal
        function closeSampleModal(e) {
            const modal = document.getElementById('preview-modal');
            modal.classList.remove('show');
        }
    </script>
