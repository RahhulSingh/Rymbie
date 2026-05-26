@extends('partials.app')
@section('title', 'Services')
@section('content')
        <section class="svc-hero" aria-label="Academic services hero">
            <div class="svc-hero__inner container">
                <div class="svc-hero__text">
                    <h1 class="svc-hero__title">Expert Academic <br>Services You <br>Can Trust</h1>
                    <p class="svc-hero__subtitle">From essays to dissertations, our team delivers high-quality,
                        plagiarism-free, and timely academic writing help.</p>
                </div>
                <div class="svc-hero__img-wrap">
                    <img src="{{asset('assets/frontend/images/services-hero.png')}}?v=2" alt="Expert Academic Services Illustration"
                        class="svc-hero__img" />
                </div>
            </div>
        </section>

        <section class="svc-services" aria-labelledby="svc-services-heading">
            <div class="container">
                <h2 class="svc-section-title" id="svc-services-heading">Our Services</h2>

                <div class="svc-grid">

                    <article class="svc-card" id="svc-card-assignments">
                        <div class="svc-card__icon" aria-hidden="true">
                            <svg width="39" height="39" viewBox="0 0 39 39" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M21.125 4.875L22.274 3.72595C21.9694 3.42121 21.556 3.25 21.125 3.25V4.875ZM30.875 14.625H32.5C32.5 14.194 32.3287 13.7807 32.024 13.4759L30.875 14.625ZM16.25 21.125C16.25 20.2275 15.5225 19.5 14.625 19.5C13.7275 19.5 13 20.2275 13 21.125H16.25ZM13 26C13 26.8975 13.7275 27.625 14.625 27.625C15.5225 27.625 16.25 26.8975 16.25 26H13ZM13.8125 14.625C12.915 14.625 12.1875 15.3525 12.1875 16.25C12.1875 17.1475 12.915 17.875 13.8125 17.875V14.625ZM15.4375 17.875C16.335 17.875 17.0625 17.1475 17.0625 16.25C17.0625 15.3525 16.335 14.625 15.4375 14.625V17.875ZM13.8125 9.75C12.915 9.75 12.1875 10.4775 12.1875 11.375C12.1875 12.2725 12.915 13 13.8125 13V9.75ZM15.4375 13C16.335 13 17.0625 12.2725 17.0625 11.375C17.0625 10.4775 16.335 9.75 15.4375 9.75V13ZM19.5 4.875V12.025H22.75V4.875H19.5ZM23.725 16.25H30.875V13H23.725V16.25ZM19.5 12.025C19.5 12.4532 19.4987 12.8721 19.5275 13.2246C19.5579 13.5961 19.6295 14.0344 19.8543 14.4755L22.75 13C22.7976 13.0935 22.7807 13.1305 22.7667 12.96C22.7513 12.7705 22.75 12.5069 22.75 12.025H19.5ZM23.725 13C23.2432 13 22.9795 12.9987 22.79 12.9833C22.6195 12.9693 22.6566 12.9524 22.75 13L21.2745 15.8958C21.7155 16.1205 22.154 16.1921 22.5254 16.2225C22.8779 16.2513 23.2968 16.25 23.725 16.25V13ZM19.8543 14.4755C20.1658 15.087 20.663 15.5842 21.2745 15.8958L22.75 13L19.8543 14.4755ZM13 21.125V26H16.25V21.125H13ZM13.8125 17.875H15.4375V14.625H13.8125V17.875ZM13.8125 13H15.4375V9.75H13.8125V13ZM21.125 3.25H13.325V6.5H21.125V3.25ZM6.5 10.075V28.925H9.75V10.075H6.5ZM13.325 35.75H25.675V32.5H13.325V35.75ZM32.5 28.925V14.625H29.25V28.925H32.5ZM32.024 13.4759L22.274 3.72595L19.976 6.02406L29.726 15.7741L32.024 13.4759ZM25.675 35.75C26.5584 35.75 27.3185 35.7513 27.9419 35.7003C28.5844 35.6478 29.2234 35.5319 29.8383 35.2186L28.3628 32.3229C28.2823 32.3638 28.1187 32.4251 27.6773 32.4612C27.2168 32.4987 26.612 32.5 25.675 32.5V35.75ZM29.25 28.925C29.25 29.862 29.2487 30.4668 29.2112 30.9273C29.1751 31.3687 29.1138 31.5323 29.0729 31.6128L31.9686 33.0882C32.2819 32.4734 32.3978 31.8344 32.4503 31.1919C32.5013 30.5685 32.5 29.8083 32.5 28.925H29.25ZM29.8383 35.2186C30.7556 34.7513 31.5013 34.0056 31.9686 33.0882L29.0729 31.6128C28.917 31.9186 28.6686 32.167 28.3628 32.3229L29.8383 35.2186ZM6.5 28.925C6.5 29.8083 6.49874 30.5685 6.54968 31.1919C6.60217 31.8344 6.71806 32.4734 7.03135 33.0882L9.92711 31.6128C9.88618 31.5323 9.82495 31.3687 9.78889 30.9273C9.75127 30.4668 9.75 29.862 9.75 28.925H6.5ZM13.325 32.5C12.3881 32.5 11.7832 32.4987 11.3227 32.4612C10.8813 32.4251 10.7176 32.3638 10.6373 32.3229L9.1618 35.2186C9.77667 35.5319 10.4157 35.6478 11.0581 35.7003C11.6815 35.7513 12.4417 35.75 13.325 35.75V32.5ZM7.03135 33.0882C7.49873 34.0056 8.24451 34.7513 9.1618 35.2186L10.6373 32.3229C10.3315 32.167 10.0829 31.9186 9.92711 31.6128L7.03135 33.0882ZM13.325 3.25C12.4417 3.25 11.6815 3.24874 11.0581 3.29968C10.4157 3.35217 9.77667 3.46806 9.1618 3.78135L10.6373 6.67711C10.7176 6.63618 10.8813 6.57495 11.3227 6.53889C11.7832 6.50127 12.3881 6.5 13.325 6.5V3.25ZM9.75 10.075C9.75 9.13811 9.75127 8.53315 9.78889 8.07274C9.82495 7.63128 9.88618 7.46761 9.92711 7.38727L7.03135 5.9118C6.71806 6.52667 6.60217 7.16565 6.54968 7.80808C6.49874 8.43154 6.5 9.19173 6.5 10.075H9.75ZM9.1618 3.78135C8.24451 4.24873 7.49873 4.99451 7.03135 5.9118L9.92711 7.38727C10.0829 7.08151 10.3315 6.83292 10.6373 6.67711L9.1618 3.78135Z"
                                    fill="#0058c7" />
                            </svg>
                        </div>
                        <div class="svc-card__body">
                            <h3 class="svc-card__title">Custom-Written Assignments</h3>
                            <p class="svc-card__desc">Get tailored assignments-abased on your requirements ad dlines.
                            </p>
                        </div>
                    </article>

                    <article class="svc-card" id="svc-card-dissertation">
                        <div class="svc-card__icon" aria-hidden="true">
                            <svg width="39" height="39" viewBox="0 0 39 39" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_669_1414)">
                                    <path
                                        d="M36.7819 31.1756C37.3547 30.7247 37.7203 30.0324 37.7203 29.2524C37.7203 28.3798 37.2621 27.6144 36.5722 27.183L36.5625 12.9919L34.125 14.625V27.1781C33.4352 27.6169 32.9842 28.3774 32.9842 29.2427C32.9842 30.0129 33.3426 30.7003 33.9007 31.1488L32.9794 32.3724C32.1921 33.3718 31.7094 34.6418 31.6875 36.0238V39.0024H33.6619C33.6668 39.0024 33.6741 39.0024 33.6741 39.0024C34.6759 39.0024 35.5193 38.3151 35.7533 37.3839L36.5601 34.1274V39.0024H38.9976V36.0531C38.9756 34.6661 38.493 33.3962 37.6959 32.3846L36.7819 31.1756Z"
                                        fill="#0058c7" />
                                    <path d="M19.5 0L0 9.75L19.5 21.9375L39 9.75L19.5 0Z" fill="#0058c7" />
                                    <path
                                        d="M19.5 24.375L7.3125 16.2581V20.4262C7.3125 22.6444 14.4788 29.25 19.5 29.25C24.5212 29.25 31.6875 22.6444 31.6875 20.4262V16.2581L19.5 24.375Z"
                                        fill="#0058c7" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_669_1414">
                                        <rect width="39" height="39" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>
                        <div class="svc-card__body">
                            <h3 class="svc-card__title">Dissertation &amp; Thesis Help</h3>
                            <p class="svc-card__desc">Comprehensive guidancad writing and writing support for</p>
                        </div>
                    </article>

                    <article class="svc-card" id="svc-card-research">
                        <div class="svc-card__icon" aria-hidden="true">
                            <svg width="39" height="39" viewBox="0 0 39 39" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M11.9933 25.838H6.65527V33.845H11.9933V25.838Z" stroke="#0058c7"
                                    stroke-width="2.669" stroke-miterlimit="10" />
                                <path d="M33.3448 15.176H28.0068V33.845H33.3448V15.176Z" stroke="#0058c7"
                                    stroke-width="2.669" stroke-miterlimit="10" />
                                <path d="M22.669 20.5H17.3311V33.845H22.669V20.5Z" stroke="#0058c7" stroke-width="2.669"
                                    stroke-miterlimit="10" />
                                <path d="M4 33.845H36" stroke="#0058c7" stroke-width="2.669" stroke-miterlimit="10" />
                                <path
                                    d="M18.672 15.176C21.6201 15.176 24.01 12.7861 24.01 9.83799C24.01 6.8899 21.6201 4.5 18.672 4.5C15.7239 4.5 13.334 6.8899 13.334 9.83799C13.334 12.7861 15.7239 15.176 18.672 15.176Z"
                                    stroke="#0058c7" stroke-width="2.669" stroke-miterlimit="10" />
                                <path d="M9.32422 19.1725L14.6622 13.8345" stroke="#0058c7" stroke-width="2.669"
                                    stroke-miterlimit="10" />
                            </svg>
                        </div>
                        <div class="svc-card__body">
                            <h3 class="svc-card__title">Research Paper Assistance</h3>
                            <p class="svc-card__desc">Perfect your work with our detailed prooffcading free.</p>
                        </div>
                    </article>

                    <article class="svc-card" id="svc-card-plagiarism">
                        <div class="svc-card__icon" aria-hidden="true">
                            <svg width="39" height="39" viewBox="0 0 39 39" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M20 35.5C28.8366 35.5 36 28.3366 36 19.5C36 16.2406 35.0254 13.2089 33.3516 10.6803L20.6311 24.8143C19.3998 26.1825 17.3276 26.3846 15.855 25.2801L10.0444 20.9222C9.25897 20.3331 9.09979 19.2188 9.68889 18.4333C10.278 17.6479 11.3923 17.4886 12.1778 18.0778L17.9883 22.4356L31.0471 7.92587C28.1753 5.18386 24.2843 3.5 20 3.5C11.1634 3.5 4 10.6634 4 19.5C4 28.3366 11.1634 35.5 20 35.5Z"
                                    fill="#01a55c" />
                            </svg>
                        </div>
                        <div class="svc-card__body">
                            <h3 class="svc-card__title">Plagiarism-Free Guarantee</h3>
                            <p class="svc-card__desc">Original content craftefom strack with plagiarismchecks.</p>
                        </div>
                    </article>

                    <article class="svc-card" id="svc-card-turnaround">
                        <div class="svc-card__icon" aria-hidden="true">
                            <svg width="39" height="39" viewBox="0 0 39 39" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M20 28.3889V19.5L24.4444 16.8333M36 19.5C36 28.3366 28.8366 35.5 20 35.5C11.1634 35.5 4 28.3366 4 19.5C4 10.6634 11.1634 3.5 20 3.5C28.8366 3.5 36 10.6634 36 19.5Z"
                                    stroke="#0058c7" stroke-width="3.55556" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </div>
                        <div class="svc-card__body">
                            <h3 class="svc-card__title">Fast Turnaround</h3>
                            <p class="svc-card__desc">Urge-f lproyect with our detailed proofrading.</p>
                        </div>
                    </article>

                    <article class="svc-card" id="svc-card-turnaround-2">
                        <div class="svc-card__icon" aria-hidden="true">
                            <svg width="39" height="39" viewBox="0 0 39 39" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M22.3251 6.34326C15.9174 6.34326 10.5309 11.2575 9.75229 17.4609C10.5054 17.4864 11.2202 17.6141 11.8967 17.8183C12.4838 12.5594 16.8875 8.51315 22.3251 8.51315C28.1455 8.51315 32.8172 13.1977 32.83 19.0181C32.8429 24.8514 28.1583 29.5358 22.3378 29.5358C20.4998 29.5358 18.7894 29.0636 17.3087 28.2339C17.079 28.9359 16.7598 29.5741 16.3642 30.1613C18.1511 31.1441 20.1934 31.693 22.3378 31.693C29.256 31.693 35 25.9491 35 19.0181C35 12.0999 29.2432 6.34326 22.3251 6.34326ZM22.3123 13.2359C23.0016 13.2359 23.5632 12.6615 23.5632 11.985C23.5632 11.283 23.0016 10.7341 22.3123 10.7341C21.623 10.7341 21.0614 11.283 21.0614 11.985C21.0614 12.6615 21.623 13.2359 22.3123 13.2359ZM25.9884 14.3719C26.6777 14.3719 27.2392 13.7975 27.2392 13.1083C27.2392 12.419 26.6777 11.8446 25.9884 11.8446C25.2991 11.8446 24.7375 12.419 24.7375 13.1083C24.7375 13.7975 25.2991 14.3719 25.9884 14.3719ZM18.4703 14.3719C19.1851 14.3719 19.7211 13.8103 19.7211 13.1083C19.7211 12.419 19.1595 11.8574 18.4703 11.8574C17.781 11.8574 17.2194 12.419 17.2194 13.1083C17.2194 13.7975 17.781 14.3719 18.4703 14.3719ZM15.9557 17.0652C16.645 17.0652 17.2066 16.5036 17.2066 15.8143C17.2066 15.1123 16.645 14.5506 15.9557 14.5506C15.2664 14.5506 14.7048 15.1123 14.7048 15.8143C14.7048 16.5036 15.2664 17.0652 15.9557 17.0652ZM28.5029 17.0779C29.1922 17.0779 29.7537 16.5163 29.7537 15.8271C29.7537 15.125 29.1922 14.5634 28.5029 14.5634C27.8138 14.5634 27.252 15.125 27.252 15.8271C27.252 16.5163 27.8138 17.0779 28.5029 17.0779ZM22.3123 26.7788C23.4355 26.7788 24.3418 25.8725 24.3418 24.7365C24.3418 23.9196 23.8568 23.2175 23.1547 22.8985V16.9248C23.1547 16.4397 22.7718 16.0568 22.3123 16.0568C21.8528 16.0568 21.4698 16.4397 21.4698 16.9248V22.8985C20.7678 23.2175 20.2828 23.9196 20.2828 24.7365C20.2828 25.8725 21.1763 26.7788 22.3123 26.7788ZM9.48423 32.1781C13.0454 32.1781 15.9685 29.2678 15.9685 25.6938C15.9685 22.1454 13.0454 19.2096 9.48423 19.2096C5.93577 19.2096 3 22.1454 3 25.6938C3 29.2678 5.93577 32.1781 9.48423 32.1781ZM6.20383 26.4725C5.78257 26.4725 5.4252 26.1023 5.4252 25.6938C5.4252 25.2854 5.78257 24.9152 6.20383 24.9152H12.7646C13.1986 24.9152 13.5561 25.2854 13.5561 25.6938C13.5561 26.1023 13.1986 26.4725 12.7646 26.4725H6.20383Z"
                                    fill="#0058c7" />
                            </svg>
                        </div>
                        <div class="svc-card__body">
                            <h3 class="svc-card__title">Fast Turnaround</h3>
                            <p class="svc-card__desc">Urgent projects completed with exped and accuruacy.</p>
                        </div>
                    </article>

                </div>
            </div>
        </section>

        <section class="svc-how" aria-labelledby="svc-how-heading">
            <div class="container">
                <h2 class="svc-section-title" id="svc-how-heading">How It Works</h2>

                <div class="svc-steps">
                    <div class="svc-step" id="svc-step-1">
                        <div class="svc-step__badge">1</div>
                        <p class="svc-step__label">Submit Your Requirements</p>
                    </div>

                    <div class="svc-step" id="svc-step-2">
                        <div class="svc-step__badge">2</div>
                        <p class="svc-step__label">Get a Quote</p>
                    </div>

                    <div class="svc-step" id="svc-step-3">
                        <div class="svc-step__badge">3</div>
                        <p class="svc-step__label">Get a Quote</p>
                    </div>

                    <div class="svc-step" id="svc-step-4">
                        <div class="svc-step__badge">4</div>
                        <p class="svc-step__label">We Assign an Expert</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="svc-bottom-section">
            <div class="container">
                <h2 class="svc-bottom-title">Let’s start your academic <br>success journey today!</h2>
                <div class="svc-contact-box">
                    <span class="svc-contact-text">Ready to get started? Contact our team.</span>
                    <button class="svc-contact-btn" onclick="window.location.href='{{route('frontend.contact_us')}}'">Contact Us</button>
                </div>
            </div>
        </section>
@endsection
 