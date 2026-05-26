@extends('partials.app')
@section('title', 'Student Resources')
@section('content')
  <section class="get_in_touch_section">
    <div class="container">
      <div class="get_intuch_box text-center">
        <h1 class="">Boost Your Studies with<br> Free Resources</h1>
        <p>Download guides, access writing tips, and use smart tools – all at no cost.</p>
        <a href="ai-tools.html" class="btn btn-outline-success_button start_freevarjan">Start Using Free Tools</a>
      </div>
    </div>
  </section>
  <section class="student_resources_section">
    <div class="container">
      <div class="student_resources_title">
        <h2 class="contact_heading">Featured Free Guides</h2>
      </div>
      <div class="row justify-content-center">
        <div class="col-12">
          <div class="row">
            <div class="col-12 col-md-6 col-lg-4 col-xl-4">
              <div class="whatsapp_title mt-4">
                <span class="emoji"><img src="images/bools.png" alt=""></span>
                <h3>Ultimate Assignment Writing Guide</h3>
                <p>Free PDF</p>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 col-xl-4">
              <div class="whatsapp_title mt-4">
                <span class="emoji"><img src="images/bulb.png" alt=""></span>

                <h3>Top 10 Tips for Research Success</h3>
                <p>Blog / Article Link</p>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 col-xl-4">
              <div class="whatsapp_title mt-4">
                <span class="emoji"><img src="images/structure.png" alt=""></span>

                <h3>How to Structure a Dissertation</h3>
                <p>Downloadable Resource</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="Study_hacks_section">
    <div class="container">
      <div class="student_resources_title mb-3">
        <h2 class="contact_heading">Writing Tips & Study Hacks</h2>
      </div>

      <div class="row">
        <div class="col-12 col-md-6">
          <div class="management_tips_box mb-4">
            <h3>5 Ways to Stay Motivated While Writing</h3>

            <ul>
              <li>Keep to behavior mechanisms</li>
              <li>Manageable word count objectives</li>
            </ul>
          </div>
        </div>

        <div class="col-12 col-md-6">
          <div class="management_tips_box mb-4">
            <h3>Time Management for Students</h3>

            <ul>
              <li>Stick to scheduled intervals</li>
              <li>Time management for students</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="Study_hacks_section trueStudy_hacks_section">
    <div class="container">

      <div class="student_resources_title mb-4">
        <h2 class="contact_heading">Free Tools</h2>
      </div>

      <div class="row g-4">

        <div class="col-12 col-md-6">
          <div class="free_tools_box">

            <div class="tool_item">
              <div class="tool_icon">
                <i class="fa-solid fa-quote-right"></i>
              </div>

              <h4>Citation Generator</h4>
            </div>

            <div class="tool_item border-0 pb-0 mb-0">
              <div class="tool_icon">
                <i class="fa-solid fa-file-lines"></i>
              </div>

              <h4>Essay Outline Maker</h4>
            </div>

          </div>
        </div>

        <div class="col-12 col-md-6">
          <div class="free_tools_box">

            <div class="tool_item">
              <div class="tool_icon">
                <i class="fa-regular fa-message"></i>
              </div>

              <h4>Plagiarism Checker</h4>
            </div>

            <div class="tool_item border-0 pb-0 mb-0">
              <div class="tool_icon">
                <i class="fa-solid fa-bars-progress"></i>
              </div>

              <h4>Word Counter Tool</h4>
            </div>

          </div>
        </div>

      </div>
    </div>
  </section>

  <section class="frequently_questions_title">
    <div class="container">
      <div class="frequently_content_box">
        <div class="row justify-content-center">
          <div class="col-12 col-xl-9">
            <div class="frequently_card_Accordion">
              <h3>
                Frequently Asked Questions
              </h3>
              <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                      data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      What types of assignments do you handle?
                    </button>
                  </h2>
                  <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body accordion-body_box">
                      <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias minima nostrum maiores itaque
                        reiciendis aliquid, nobis consequatur eum perspiciatis ex dolorem quidem ab aperiam molestiae
                        harum,
                        esse porro praesentium nihil.</p>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                      data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      How do I place an order?
                    </button>
                  </h2>
                  <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body accordion-body_box">
                      <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias minima nostrum maiores itaque
                        reiciendis aliquid, nobis consequatur eum perspiciatis ex dolorem quidem ab aperiam molestiae
                        harum,
                        esse porro praesentium nihil.</p>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                      data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      Do you guarantee plagiarism-free work?
                    </button>
                  </h2>
                  <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body accordion-body_box">
                      <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias minima nostrum maiores itaque
                        reiciendis aliquid, nobis consequatur eum perspiciatis ex dolorem quidem ab aperiam molestiae
                        harum,
                        esse porro praesentium nihil.</p>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                      data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                      How do I make a payment?
                    </button>
                  </h2>
                  <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body accordion-body_box">
                      <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias minima nostrum maiores itaque
                        reiciendis aliquid, nobis consequatur eum perspiciatis ex dolorem quidem ab aperiam molestiae
                        harum,
                        esse porro praesentium nihil.</p>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingFive">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                      data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFour">
                      What is your refund policy?
                    </button>
                  </h2>
                  <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body accordion-body_box">
                      <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias minima nostrum maiores itaque
                        reiciendis aliquid, nobis consequatur eum perspiciatis ex dolorem quidem ab aperiam molestiae
                        harum,
                        esse porro praesentium nihil.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="related-linksing">
          <span class="title">Related links:</span>

          <a href="#">Blog</a>
          <span class="divider">|</span>

          <a href="#">AI Study Tools Page</a>
          <span class="divider">|</span>

          <a href="#">Services Page</a>
        </div>
      </div>
    </div>
  </section>
@endsection