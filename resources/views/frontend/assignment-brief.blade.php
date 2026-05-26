@extends('partials.app')
@section('title', 'Assignment Brief')
@section('content')
        <section class="assignment_brief_section">
            <div class="container">
                <div class="brief-container">
                    <h1 class="brief-title">Let’s Get Started With Your Assignment</h1>
                    <div class="brief-card">
                        <form id="assignment-form" onsubmit="handleFormSubmit(event);">
                            <div class="brief-upload-row">
                                <div class="brief-upload-box" id="brief-box" onclick="triggerFileInput('brief-file');"
                                    ondragover="handleDragOver(event);" ondragleave="handleDragLeave(event);"
                                    ondrop="handleDrop(event, 'brief-file', 'brief-box');">
                                    <div class="brief-upload-emoji">
                                        📄
                                    </div>
                                    <div class="brief-upload-title">Upload Assignment Brief</div>
                                    <div class="brief-upload-formats">PDF, DOC</div>
                                    <input type="file" id="brief-file" name="brief-file" accept=".pdf,.doc,.docx"
                                        style="display: none;" onchange="handleFileSelect(this, 'brief-box');" />
                                </div>

                                <!-- Upload Screenshot or Photo-->
                                <div class="brief-upload-box" id="screenshot-box"
                                    onclick="triggerFileInput('screenshot-file');" ondragover="handleDragOver(event);"
                                    ondragleave="handleDragLeave(event);"
                                    ondrop="handleDrop(event, 'screenshot-file', 'screenshot-box');">
                                    <div class="brief-upload-emoji">
                                        🖼️
                                    </div>
                                    <div class="brief-upload-title" style="line-height: 110%;">Upload Screenshot or
                                        Photo
                                    </div>
                                    <div class="brief-upload-formats">JPG, PNG</div>
                                    <input type="file" id="screenshot-file" name="screenshot-file"
                                        accept="image/jpeg,image/png" style="display: none;"
                                        onchange="handleFileSelect(this, 'screenshot-box');" />
                                </div>

                            </div>

                            <!-- Extra Instructions Textarea Field -->
                            <div class="brief-form-group">
                                <textarea class="brief-textarea" id="extra-instructions" name="extra-instructions"
                                    placeholder="Extra Instructions"></textarea>
                            </div>

                            <div class="brief-form-group" id="date-group" onclick="focusNativeDatePicker();">
                                <input type="text" class="brief-input" id="date-display" placeholder="Deadline"
                                    readonly />
                                <div class="brief-input-icon-right">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect x="3" y="5" width="18" height="16" rx="2" stroke="#737373"
                                            stroke-width="2" />
                                        <line x1="3" y1="10" x2="21" y2="10" stroke="#737373" stroke-width="2" />
                                        <line x1="8" y1="2" x2="8" y2="6" stroke="#737373" stroke-width="2"
                                            stroke-linecap="round" />
                                        <line x1="16" y1="2" x2="16" y2="6" stroke="#737373" stroke-width="2"
                                            stroke-linecap="round" />
                                        <circle cx="7" cy="14" r="1.2" fill="#737373" />
                                        <circle cx="12" cy="14" r="1.2" fill="#737373" />
                                        <circle cx="17" cy="14" r="1.2" fill="#737373" />
                                        <circle cx="7" cy="18" r="1.2" fill="#737373" />
                                        <circle cx="12" cy="18" r="1.2" fill="#737373" />
                                        <circle cx="17" cy="18" r="1.2" fill="#737373" />
                                    </svg>
                                </div>
                                <input type="date" class="brief-native-date" id="native-date" name="deadline"
                                    onchange="handleDateChange(this);" />
                            </div>

                            <!-- Select Subject Select Box-->
                            <div class="brief-form-group">
                                <div class="brief-select-wrapper" id="subject-select-wrapper">
                                    <div class="brief-select-trigger" onclick="toggleSubjectSelect(event);">
                                        <span id="selected-subject-label">Subject</span>
                                    </div>
                                    <div class="brief-input-icon-right">
                                        <svg width="14" height="8" viewBox="0 0 14 8" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 1L7 7L13 1" stroke="#737373" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                    <div class="brief-select-options">
                                        <div class="brief-select-option" data-value="mathematics"
                                            onclick="selectSubjectOption(this);">Mathematics</div>
                                        <div class="brief-select-option" data-value="physics"
                                            onclick="selectSubjectOption(this);">Physics</div>
                                        <div class="brief-select-option" data-value="chemistry"
                                            onclick="selectSubjectOption(this);">Chemistry</div>
                                        <div class="brief-select-option" data-value="biology"
                                            onclick="selectSubjectOption(this);">Biology</div>
                                        <div class="brief-select-option" data-value="computer_science"
                                            onclick="selectSubjectOption(this);">Computer Science</div>
                                        <div class="brief-select-option" data-value="literature"
                                            onclick="selectSubjectOption(this);">Literature</div>
                                        <div class="brief-select-option" data-value="history"
                                            onclick="selectSubjectOption(this);">History</div>
                                    </div>
                                </div>
                                <input type="hidden" id="selected-subject-value" name="subject" value="" />
                            </div>

                            <!-- Submit Button -->
                            <button type="submit" class="brief-submit-btn" id="submit-btn">
                                <span class="brief-spinner" id="submit-spinner"></span>
                                <span id="submit-btn-text">Submit Assignment Brief</span>
                            </button>

                            <!-- Success Banner-->
                            <div class="brief-success-banner" id="success-banner">
                                <div class="brief-success-icon">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M10 20C15.5229 20 20 15.5229 20 10C20 7.96289 19.3909 6.06804 18.3448 4.48768L10.3944 13.3214C9.62489 14.1766 8.32978 14.3029 7.40938 13.6126L3.77778 10.8889C3.28686 10.5207 3.18737 9.82422 3.55556 9.33333C3.92374 8.84244 4.62019 8.74289 5.11111 9.11111L8.74267 11.8348L16.9044 2.76617C15.1096 1.05241 12.6777 0 10 0C4.47716 0 0 4.47716 0 10C0 15.5229 4.47716 20 10 20Z"
                                            fill="#33CC42" />
                                    </svg>

                                </div>
                                <div class="brief-success-text">
                                    Your request has been submitted. We will get back to you shortly with a quote.
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </section>
    @endsection
    <script>
        function triggerFileInput(inputId) {
            document.getElementById(inputId).click();
        }
        function handleDragOver(e) {
            e.preventDefault();
            e.stopPropagation();
            e.currentTarget.classList.add('dragover');
        }

        function handleDragLeave(e) {
            e.preventDefault();
            e.stopPropagation();
            e.currentTarget.classList.remove('dragover');
        }

        function handleDrop(e, inputId, boxId) {
            e.preventDefault();
            e.stopPropagation();
            const box = document.getElementById(boxId);
            box.classList.remove('dragover');

            const files = e.dataTransfer.files;
            if (files.length > 0) {
                const fileInput = document.getElementById(inputId);
                fileInput.files = files;
                handleFileSelect(fileInput, boxId);
            }
        }

        function handleFileSelect(input, boxId) {
            const box = document.getElementById(boxId);
            if (input.files && input.files[0]) {
                const fileName = input.files[0].name;

                const existingBadge = box.querySelector('.brief-file-badge');
                if (existingBadge) {
                    existingBadge.remove();
                }
                const badge = document.createElement('div');
                badge.className = 'brief-file-badge';
                badge.innerHTML = `
                    <div class="brief-file-badge-icon">✓</div>
                    <div class="brief-file-badge-name" title="${fileName}">${fileName}</div>
                    <div class="brief-file-badge-remove" onclick="removeSelectedFile(event, '${input.id}', '${boxId}')">Change</div>
                `;

                box.appendChild(badge);
            }
        }

        // Remove file overlay selection
        function removeSelectedFile(e, inputId, boxId) {
            e.stopPropagation();
            const input = document.getElementById(inputId);
            input.value = '';

            const box = document.getElementById(boxId);
            const badge = box.querySelector('.brief-file-badge');
            if (badge) {
                badge.remove();
            }
        }

        // Date select native overlay trigger
        function focusNativeDatePicker() {
            const nativePicker = document.getElementById('native-date');
            nativePicker.focus();
            if (typeof nativePicker.showPicker === 'function') {
                nativePicker.showPicker();
            }
        }

        function handleDateChange(input) {
            const dateVal = input.value;
            if (dateVal) {
                const parts = dateVal.split('-');
                if (parts.length === 3) {
                    const formatted = `${parts[2]}-${parts[1]}-${parts[0].substring(2)}`;
                    const display = document.getElementById('date-display');
                    display.value = formatted;
                    display.style.color = '#000000';
                }
            }
        }

        // Custom Subject Dropdown Triggering

        function toggleSubjectSelect(e) {
            e.stopPropagation();

            const subjectWrapper = document.getElementById('subject-select-wrapper');

            if (subjectWrapper) {
                subjectWrapper.classList.toggle('open');
            }
        }

        function selectSubjectOption(option) {
            const subjectWrapper = document.getElementById('subject-select-wrapper'); // ← yeh line missing thi
            const label = document.getElementById('selected-subject-label');
            const hiddenInput = document.getElementById('selected-subject-value');
            const value = option.getAttribute('data-value');
            const text = option.textContent;

            const options = subjectWrapper.querySelectorAll('.brief-select-option');
            options.forEach(opt => opt.classList.remove('selected'));

            option.classList.add('selected');
            label.textContent = text;
            hiddenInput.value = value;
            subjectWrapper.classList.add('has-value');
            subjectWrapper.classList.remove('open');
        }

        // Close dropdown when clicking outside
        window.addEventListener('click', function (e) {
            const subjectWrapper = document.getElementById('subject-select-wrapper'); // ← yeh bhi fix hua
            if (!subjectWrapper.contains(e.target)) {
                subjectWrapper.classList.remove('open');
            }
        });

        // Form Submit Simulation logic
        function handleFormSubmit(e) {
            e.preventDefault();
            const spinner = document.getElementById('submit-spinner');
            const btnText = document.getElementById('submit-btn-text');
            const btn = document.getElementById('submit-btn');
            const successBanner = document.getElementById('success-banner');
            // Trigger submit animations
            spinner.style.display = 'inline-block';
            btnText.textContent = 'Submitting...';
            btn.disabled = true;
            successBanner.classList.remove('show');
            setTimeout(() => {
                spinner.style.display = 'none';
                btnText.textContent = 'Submit Assignment Brief';
                btn.disabled = false;
                successBanner.classList.add('show');
                setTimeout(() => {
                    successBanner.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
                }, 100);
            }, 1200);
        }
    </script>
