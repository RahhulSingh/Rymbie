@extends('partials.app')
@section('title', 'Live Chat')
@section('content')
    <section class="anytime_contact_section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-9">
                    <div class="get_intuch_box text-left anywhere_title">
                        <h1 class="text-start">We're Here to Help —<br>Anytime, Anywhere</h1>
                        <p class="text-start">Chat live with our academic support team and get your questions answered
                            in
                            real-time.</p>
                    </div>
                </div>
                <div class="col-3">
                    <div class="chatimg">
                        <img src="{{asset('assets/frontend/images/chat-removebg-preview.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="chat_section">
        <div class="container">
            <div class="chat_container">
                <div class="chat-column">
                    <div class="chat-box">

                        <div class="chat-messages" id="chatMessages">
                            <div class="message agent">
                                Hello! How can we assist you today?
                            </div>
                            <div class="message user">
                                Hello! I need some help regarding my dissertation submission.
                            </div>
                        </div>

                        <div class="chat-input-container">
                            <input type="text" id="messageInput" placeholder="Start typing your message...">
                            <button id="sendBtn" title="Send Message">
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="send_icon">
                                    <path d="M22 2L11 13"></path>
                                    <path d="M22 2L15 22L11 13L2 9L22 2Z"></path>
                                </svg>
                            </button>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="sidebar-column">
                    <div class="card">
                        <h3>Quick Help Options</h3>
                        <div class="help-options">
                            <button class="option-btn"><img src="{{asset('assets/frontend/images/assignment_help.svg')}}" width="25px"
                                    alt="assignment_help.svg">
                                Assignment Help</button>
                            <button class="option-btn"><img src="{{asset('assets/frontend/images/dissertation.svg')}}" width="25px"
                                    alt="dissertation.svg">
                                Dissertation Queries</button>
                            <button class="option-btn"><img src="{{asset('assets/frontend/images/tools.svg')}}" width="25px" alt="dissertation.svg">
                                AI
                                Tools Support</button>
                            <button class="option-btn"><img src="{{asset('assets/frontend/images/pament.svg')}}" width="25px" alt="dissertation.svg">
                                Payment & Refund Support</button>
                        </div>
                    </div>

                    <div class="card">
                        <h3>Our Support Hours</h3>
                        <div class="status-online">
                            <span
                                style="height: 14px; width: 14px; background-color: #28a745; border-radius: 50%; display: inline-block;"></span>
                            Currently Online
                        </div>

                    </div>


                </div>
                <div>
                    <div class="card contact-info support_box">
                        <h3>Our Support Hours</h3>
                        <p><img src="{{asset('assets/frontend/images/clokce.svg')}}" alt=""> Currently Online</p>
                        <p>We're available 24/7 to support students across ds the globe.</p>

                    </div>




                </div>


                <div class="top_contact_bar">
                    <a href="mailto:support@rymbie.com" class="contact_item">
                        <img src="{{asset('assets/frontend/images/typeingmsg.png')}}" width="25px" alt="">
                        support@rymbie.com
                    </a>
                    <a href="tel:+180001234567" class="contact_item">
                        <img src="{{asset('assets/frontend/images/callsing.png')}}" width="25px" alt="">
                        +1 (8000) 123-4567
                    </a>

                </div>
                <div class="action-area">
                    <button class="start-chat-btn" id="startLiveChatBtn">Start Live Chat Now</button>
                </div>
            </div>

        </div>
    </section>
   @endsection
   <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
            $(document).ready(function () {

        const messageInput = document.getElementById('messageInput');
        const sendBtn = document.getElementById('sendBtn');
        const chatMessages = document.getElementById('chatMessages');
        const startLiveChatBtn = document.getElementById('startLiveChatBtn');
        function sendMessage() {
            const text = messageInput.value.trim();
            if (text !== "") {
                const msgDiv = document.createElement('div');
                msgDiv.className = 'message user';
                msgDiv.innerText = text;
                chatMessages.appendChild(msgDiv);
                messageInput.value = "";
                chatMessages.scrollTop = chatMessages.scrollHeight;
                setTimeout(() => {
                    const replyDiv = document.createElement('div');
                    replyDiv.className = 'message agent';
                    replyDiv.innerText = "Thank you for reaching out! A support member will guide you shortly.";
                    chatMessages.appendChild(replyDiv);
                    chatMessages.scrollTop = chatMessages.scrollHeight;
                }, 1000);
            }
        }
        sendBtn.addEventListener('click', sendMessage);
        messageInput.addEventListener('keypress', function (e) {
            if (e.key === 'Enter') {
                sendMessage();
            }
        });
        startLiveChatBtn.addEventListener('click', function () {
            messageInput.focus();

            alert("Live chat initiated! Please type your query in the chat box.");
        });
        });
    </script>
