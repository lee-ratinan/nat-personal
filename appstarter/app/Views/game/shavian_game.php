<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shavian Game</title>
    <link href="<?= base_url('assets/img/favicon.png') ?>" rel="icon">
    <link href="<?= base_url('assets/img/apple-touch-icon.png') ?>" rel="apple-touch-icon">
    <!-- Tailwind CSS for modern responsive utility styling -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Inter Font and Noto Sans Shavian fallback for clear glyph rendering -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;800&family=Noto+Sans+Shavian&display=swap" rel="stylesheet">
    <!-- FontAwesome icons for UI aesthetics -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        body {
            font-family: 'Inter', 'Noto Sans Shavian', sans-serif;
        }
        .shavian-text {
            font-family: 'Noto Sans Shavian', 'Inter', sans-serif;
        }
        /* Custom animations */
        @keyframes popIn {
            0% { transform: scale(0.95); opacity: 0; }
            100% { transform: scale(1); opacity: 1; }
        }
        .animate-pop {
            animation: popIn 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275) forwards;
        }
        .glass-card {
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }
    </style>
</head>
<body class="bg-gradient-to-br from-indigo-900 via-purple-900 to-slate-900 min-h-screen text-slate-100 flex flex-col justify-between items-center p-4 sm:p-6 select-none">

<!-- Main Application Container -->
<div class="w-full max-w-2xl my-auto">

    <!-- ================= START SCREEN ================= -->
    <div id="start-screen" class="glass-card bg-slate-800/80 rounded-3xl p-6 sm:p-10 shadow-2xl border border-slate-700/50 text-center animate-pop">
        <div class="w-20 h-20 bg-indigo-600/30 text-indigo-400 rounded-2xl flex items-center justify-center mx-auto mb-6 border border-indigo-500/30 shadow-inner">
            <span class="shavian-text text-4xl font-bold">𐑖</span>
        </div>

        <h1 class="text-3xl sm:text-4xl font-extrabold tracking-tight text-white mb-2">Shavian Game</h1>
        <p class="text-indigo-300 font-medium text-sm sm:text-base mb-6">Master the phonetic alphabet designed for English</p>

        <div class="bg-slate-900/60 rounded-2xl p-4 sm:p-5 text-left mb-8 border border-slate-700/60 space-y-3">
            <div class="flex items-start gap-3">
                <i class="fa-solid fa-circle-info text-indigo-400 mt-1"></i>
                <p class="text-xs sm:text-sm text-slate-300 leading-relaxed">
                    Match the correct <strong>English word</strong> for the displayed <strong>Shavian script</strong> (𐑖𐑱𐑝𐑾𐑯), or translate English words into Shavian.
                </p>
            </div>
            <div class="flex items-center justify-between pt-2 border-t border-slate-800 text-xs sm:text-sm text-slate-400">
                <span><i class="fa-solid fa-list-check mr-1 text-indigo-400"></i> Questions: <strong id="start-q-count" class="text-white">15</strong></span>
                <span><i class="fa-solid fa-clock mr-1 text-indigo-400"></i> Speed counts!</span>
            </div>
        </div>

        <button onclick="startGame()" class="w-full py-4 px-8 bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 hover:from-indigo-600 hover:via-purple-600 hover:to-pink-600 text-white font-bold text-lg rounded-2xl shadow-lg shadow-indigo-500/25 transition-all duration-200 hover:scale-[1.02] active:scale-[0.98] flex items-center justify-center gap-2">
            <span>Start Game</span>
            <i class="fa-solid fa-play text-sm"></i>
        </button>

        <br/><br/>
        <a href="<?= base_url('game') ?>">Back to Game Center</a>
    </div>

    <!-- ================= QUIZ SCREEN ================= -->
    <div id="quiz-screen" class="hidden glass-card bg-slate-800/90 rounded-3xl p-6 sm:p-8 shadow-2xl border border-slate-700/50">
        <!-- Header: Progress Bar, Timer, Counter -->
        <div class="mb-6 space-y-3">
            <div class="flex justify-between items-center text-xs sm:text-sm font-semibold text-slate-300">
                    <span id="question-counter" class="bg-slate-700/60 px-3 py-1 rounded-full border border-slate-600/40">
                        Question 1 of 15
                    </span>
                <span id="timer-display" class="bg-indigo-950/80 text-indigo-300 px-3 py-1 rounded-full border border-indigo-800/50 font-mono flex items-center gap-1.5">
                        <i class="fa-solid fa-stopwatch text-indigo-400"></i> 00:00.0
                    </span>
            </div>

            <!-- Dynamic Progress Bar -->
            <div class="w-full bg-slate-700/50 h-2.5 rounded-full overflow-hidden p-0.5 border border-slate-600/30">
                <div id="progress-bar" class="bg-gradient-to-r from-indigo-500 to-pink-500 h-full rounded-full transition-all duration-300 ease-out" style="width: 0%"></div>
            </div>
        </div>

        <!-- Question Card -->
        <div class="bg-slate-900/80 rounded-2xl p-6 sm:p-10 text-center mb-6 border border-slate-700/60 shadow-inner flex flex-col justify-center min-h-[160px] relative overflow-hidden">
            <span class="text-xs font-semibold text-indigo-400 uppercase tracking-widest mb-2" id="question-hint">Translate to English</span>
            <h2 id="question-text" class="shavian-text text-3xl sm:text-5xl font-extrabold text-white tracking-wide leading-tight drop-shadow-md">
                𐑩𐑯𐑳𐑞𐑼
            </h2>
        </div>

        <!-- Choices Grid -->
        <div id="choices-container" class="grid grid-cols-1 sm:grid-cols-2 gap-3 sm:gap-4">
            <!-- Choice buttons injected via JavaScript -->
        </div>
    </div>

    <!-- ================= RESULTS SCREEN ================= -->
    <div id="results-screen" class="hidden glass-card bg-slate-800/90 rounded-3xl p-6 sm:p-8 shadow-2xl border border-slate-700/50 text-center animate-pop">
        <!-- Header Icon -->
        <div id="result-badge" class="w-20 h-20 bg-emerald-500/20 text-emerald-400 rounded-full flex items-center justify-center mx-auto mb-4 border border-emerald-500/30">
            <i class="fa-solid fa-trophy text-3xl"></i>
        </div>

        <h2 class="text-2xl sm:text-3xl font-extrabold text-white mb-1">Quiz Completed!</h2>
        <p id="result-rating" class="text-indigo-300 text-sm font-medium mb-6">Excellent performance!</p>

        <!-- Metrics Grid -->
        <div class="grid grid-cols-3 gap-3 mb-6">
            <div class="bg-slate-900/60 p-3 sm:p-4 rounded-2xl border border-slate-700/50">
                <p class="text-xs text-slate-400 mb-1">Score</p>
                <p id="final-score" class="text-lg sm:text-2xl font-bold text-white">0/0</p>
            </div>
            <div class="bg-slate-900/60 p-3 sm:p-4 rounded-2xl border border-slate-700/50">
                <p class="text-xs text-slate-400 mb-1">Accuracy</p>
                <p id="final-accuracy" class="text-lg sm:text-2xl font-bold text-emerald-400">0%</p>
            </div>
            <div class="bg-slate-900/60 p-3 sm:p-4 rounded-2xl border border-slate-700/50">
                <p class="text-xs text-slate-400 mb-1">Time Spent</p>
                <p id="final-time" class="text-lg sm:text-2xl font-bold text-amber-400">00:00</p>
            </div>
        </div>

        <!-- Actions -->
        <div class="space-y-3">
            <button onclick="startGame()" class="w-full py-3.5 px-6 bg-gradient-to-r from-indigo-500 to-purple-600 hover:from-indigo-600 hover:to-purple-700 text-white font-bold rounded-xl shadow-lg shadow-indigo-500/20 transition duration-200 flex items-center justify-center gap-2">
                <i class="fa-solid fa-rotate-right text-sm"></i>
                <span>Play Again</span>
            </button>

            <br/><br/>
            <a href="<?= base_url('game') ?>">Back to Game Center</a>
            <br/><br/>

            <button onclick="toggleBreakdown()" class="w-full py-3 px-6 bg-slate-700/60 hover:bg-slate-700 text-slate-200 font-semibold rounded-xl border border-slate-600/50 transition duration-200 flex items-center justify-center gap-2 text-sm">
                <i class="fa-solid fa-magnifying-glass text-xs"></i>
                <span id="breakdown-btn-text">View Answer Breakdown</span>
            </button>
        </div>

        <!-- Breakdown Accordion -->
        <div id="breakdown-container" class="hidden mt-6 text-left border-t border-slate-700/60 pt-4 max-h-60 overflow-y-auto pr-1 space-y-2">
            <!-- Injected breakdown list -->
        </div>
    </div>

</div>

<!-- Footer -->
<footer class="mt-8 text-center text-xs text-slate-500">
    Shavian Script Phonetic Practice • Powered by HTML & JavaScript
</footer>

<script>
    /**
     * JSON Dataset of Shavian Game Questions
     * Contains pairs of English <-> Shavian script words
     */
    const quizData = <?php echo json_encode($questions); ?>;
    // Web Audio API Synth Synthesizer for Audio Feedback without external dependencies
    const audioCtx = new (window.AudioContext || window.webkitAudioContext)();
    function playSound(type) {
        try {
            if (audioCtx.state === 'suspended') audioCtx.resume();
            const osc = audioCtx.createOscillator();
            const gain = audioCtx.createGain();
            osc.connect(gain);
            gain.connect(audioCtx.destination);

            if (type === 'correct') {
                osc.type = 'sine';
                osc.frequency.setValueAtTime(587.33, audioCtx.currentTime); // D5
                osc.frequency.exponentialRampToValueAtTime(880, audioCtx.currentTime + 0.15); // A5
                gain.gain.setValueAtTime(0.15, audioCtx.currentTime);
                gain.gain.exponentialRampToValueAtTime(0.01, audioCtx.currentTime + 0.15);
                osc.start();
                osc.stop(audioCtx.currentTime + 0.15);
            } else if (type === 'incorrect') {
                osc.type = 'sawtooth';
                osc.frequency.setValueAtTime(220, audioCtx.currentTime); // A3
                osc.frequency.exponentialRampToValueAtTime(130.81, audioCtx.currentTime + 0.2); // C4
                gain.gain.setValueAtTime(0.15, audioCtx.currentTime);
                gain.gain.exponentialRampToValueAtTime(0.01, audioCtx.currentTime + 0.2);
                osc.start();
                osc.stop(audioCtx.currentTime + 0.2);
            }
        } catch (e) {
            // Ignore audio restriction errors
        }
    }

    // Game State Variables
    let currentQuestions = [];
    let currentQuestionIndex = 0;
    let score = 0;
    let userAnswers = []; // Records { question, selected, correct, isCorrect }
    let timerInterval = null;
    let startTime = 0;
    let elapsedTime = 0;
    let isAnswering = false;

    // Initialize UI Elements on page load
    document.addEventListener("DOMContentLoaded", () => {
        document.getElementById("start-q-count").textContent = quizData.length;
    });

    // Helper to check if a string contains Shavian characters
    function isShavian(text) {
        return /[\u10450-\u1047F]/.test(text);
    }

    // Start / Reset Quiz Game
    function startGame() {
        // Reset State
        currentQuestions = JSON.parse(JSON.stringify(quizData));
        // Shuffle questions for replayability
        currentQuestions.sort(() => Math.random() - 0.5);

        currentQuestionIndex = 0;
        score = 0;
        userAnswers = [];
        elapsedTime = 0;
        isAnswering = false;

        // UI Screen Transitions
        document.getElementById("start-screen").classList.add("hidden");
        document.getElementById("results-screen").classList.add("hidden");
        document.getElementById("quiz-screen").classList.remove("hidden");
        document.getElementById("breakdown-container").classList.add("hidden");
        document.getElementById("breakdown-btn-text").textContent = "View Answer Breakdown";

        // Timer Setup
        startTime = Date.now();
        clearInterval(timerInterval);
        timerInterval = setInterval(updateTimer, 100);

        // Load First Question
        loadQuestion();
    }

    // Live Timer display logic
    function updateTimer() {
        elapsedTime = Date.now() - startTime;
        const totalSeconds = Math.floor(elapsedTime / 1000);
        const minutes = Math.floor(totalSeconds / 60);
        const seconds = totalSeconds % 60;
        const tenths = Math.floor((elapsedTime % 1000) / 100);

        const minStr = String(minutes).padStart(2, '0');
        const secStr = String(seconds).padStart(2, '0');

        document.getElementById("timer-display").innerHTML =
            `<i class="fa-solid fa-stopwatch text-indigo-400"></i> ${minStr}:${secStr}.${tenths}`;
    }

    // Format duration for Results display
    function formatFinalTime(ms) {
        const totalSeconds = Math.floor(ms / 1000);
        const minutes = Math.floor(totalSeconds / 60);
        const seconds = totalSeconds % 60;
        return `${String(minutes).padStart(2, '0')}:${String(seconds).padStart(2, '0')}`;
    }

    // Load current question onto the Quiz Screen
    function loadQuestion() {
        isAnswering = false;
        const q = currentQuestions[currentQuestionIndex];

        // Progress text & bar
        document.getElementById("question-counter").textContent =
            `Question ${currentQuestionIndex + 1} of ${currentQuestions.length}`;

        const progressPercent = ((currentQuestionIndex) / currentQuestions.length) * 100;
        document.getElementById("progress-bar").style.width = `${progressPercent}%`;

        // Question text & contextual hint
        const qTextEl = document.getElementById("question-text");
        const qHintEl = document.getElementById("question-hint");

        qTextEl.textContent = q.question;
        if (isShavian(q.question)) {
            qHintEl.textContent = "Select English Translation";
        } else {
            qHintEl.textContent = "Select Shavian Script";
        }

        // Shuffle choice options for variety
        const choices = [...q.choices].sort(() => Math.random() - 0.5);

        // Render Choice Buttons
        const choicesContainer = document.getElementById("choices-container");
        choicesContainer.innerHTML = "";

        choices.forEach(choice => {
            const btn = document.createElement("button");
            btn.className = "w-full p-4 bg-slate-700/50 hover:bg-slate-700 active:bg-indigo-600/40 text-slate-100 font-semibold rounded-2xl border border-slate-600/50 hover:border-indigo-500/50 transition-all duration-150 flex items-center justify-between text-base sm:text-lg shavian-text shadow-sm hover:shadow-indigo-500/10";

            btn.innerHTML = `
                    <span class="text-left">${choice}</span>
                    <i class="fa-regular fa-circle text-slate-500 text-sm"></i>
                `;

            btn.onclick = () => selectAnswer(choice, btn);
            choicesContainer.appendChild(btn);
        });
    }

    // User selects an answer choice
    function selectAnswer(selectedChoice, selectedBtn) {
        if (isAnswering) return; // Prevent double clicking
        isAnswering = true;

        const q = currentQuestions[currentQuestionIndex];
        const isCorrect = selectedChoice === q.answer;

        // Store result record
        userAnswers.push({
            question: q.question,
            selected: selectedChoice,
            correct: q.answer,
            isCorrect: isCorrect
        });

        // Disable all choice buttons and render visual feedback
        const buttons = document.querySelectorAll("#choices-container button");
        buttons.forEach(btn => {
            btn.disabled = true;
            btn.classList.remove("hover:bg-slate-700", "hover:border-indigo-500/50");

            const btnText = btn.querySelector("span").textContent.trim();
            const icon = btn.querySelector("i");

            if (btnText === q.answer) {
                // Highlight correct answer in green
                btn.className = "w-full p-4 bg-emerald-600/20 text-emerald-200 font-semibold rounded-2xl border-2 border-emerald-500 flex items-center justify-between text-base sm:text-lg shavian-text shadow-lg shadow-emerald-500/10";
                icon.className = "fa-solid fa-circle-check text-emerald-400 text-lg";
            } else if (btnText === selectedChoice && !isCorrect) {
                // Highlight incorrect choice in red
                btn.className = "w-full p-4 bg-rose-600/20 text-rose-200 font-semibold rounded-2xl border-2 border-rose-500 flex items-center justify-between text-base sm:text-lg shavian-text shadow-lg shadow-rose-500/10";
                icon.className = "fa-solid fa-circle-xmark text-rose-400 text-lg";
            } else {
                btn.classList.add("opacity-50");
            }
        });

        if (isCorrect) {
            score++;
            playSound('correct');
        } else {
            playSound('incorrect');
        }

        // Auto-advance to next question after short delay
        setTimeout(() => {
            currentQuestionIndex++;
            if (currentQuestionIndex < currentQuestions.length) {
                loadQuestion();
            } else {
                finishGame();
            }
        }, 1000);
    }

    // Conclude Quiz Game and display final statistics
    function finishGame() {
        clearInterval(timerInterval);

        // Hide quiz screen, display results
        document.getElementById("quiz-screen").classList.add("hidden");
        document.getElementById("results-screen").classList.remove("hidden");

        // Calculate accuracy percentage
        const accuracy = Math.round((score / currentQuestions.length) * 100);

        document.getElementById("final-score").textContent = `${score}/${currentQuestions.length}`;
        document.getElementById("final-accuracy").textContent = `${accuracy}%`;
        document.getElementById("final-time").textContent = formatFinalTime(elapsedTime);

        // Grade rating badges
        const badgeEl = document.getElementById("result-badge");
        const ratingEl = document.getElementById("result-rating");

        if (accuracy === 100) {
            badgeEl.className = "w-20 h-20 bg-amber-500/20 text-amber-400 rounded-full flex items-center justify-center mx-auto mb-4 border border-amber-500/30";
            badgeEl.innerHTML = `<i class="fa-solid fa-crown text-3xl"></i>`;
            ratingEl.textContent = "Flawless! You are a Shavian Script Master!";
        } else if (accuracy >= 80) {
            badgeEl.className = "w-20 h-20 bg-emerald-500/20 text-emerald-400 rounded-full flex items-center justify-center mx-auto mb-4 border border-emerald-500/30";
            badgeEl.innerHTML = `<i class="fa-solid fa-trophy text-3xl"></i>`;
            ratingEl.textContent = "Great job! Your reading skills are sharp.";
        } else if (accuracy >= 50) {
            badgeEl.className = "w-20 h-20 bg-indigo-500/20 text-indigo-400 rounded-full flex items-center justify-center mx-auto mb-4 border border-indigo-500/30";
            badgeEl.innerHTML = `<i class="fa-solid fa-thumbs-up text-3xl"></i>`;
            ratingEl.textContent = "Good effort! Practice makes perfect.";
        } else {
            badgeEl.className = "w-20 h-20 bg-rose-500/20 text-rose-400 rounded-full flex items-center justify-center mx-auto mb-4 border border-rose-500/30";
            badgeEl.innerHTML = `<i class="fa-solid fa-book-open text-3xl"></i>`;
            ratingEl.textContent = "Keep practicing Shavian letters and try again!";
        }

        // Build detailed breakdown list
        buildBreakdownList();
    }

    // Toggle question review accordion on results screen
    function toggleBreakdown() {
        const container = document.getElementById("breakdown-container");
        const btnText = document.getElementById("breakdown-btn-text");

        if (container.classList.contains("hidden")) {
            container.classList.remove("hidden");
            btnText.textContent = "Hide Answer Breakdown";
        } else {
            container.classList.add("hidden");
            btnText.textContent = "View Answer Breakdown";
        }
    }

    // Populate breakdown list DOM
    function buildBreakdownList() {
        const container = document.getElementById("breakdown-container");
        container.innerHTML = "";

        userAnswers.forEach((item, index) => {
            const row = document.createElement("div");
            row.className = `p-3 rounded-xl border text-xs sm:text-sm flex justify-between items-center ${
                item.isCorrect
                    ? 'bg-emerald-950/30 border-emerald-800/40 text-slate-200'
                    : 'bg-rose-950/30 border-rose-800/40 text-slate-200'
            }`;

            row.innerHTML = `
                    <div class="space-y-1">
                        <div class="font-bold flex items-center gap-2">
                            <span class="text-slate-400">#${index + 1}</span>
                            <span class="shavian-text text-base text-white">${item.question}</span>
                        </div>
                        <div class="text-xs text-slate-400">
                            Your answer: <span class="shavian-text ${item.isCorrect ? 'text-emerald-400 font-semibold' : 'text-rose-400 line-through'}">${item.selected}</span>
                            ${!item.isCorrect ? ` | Correct: <span class="shavian-text text-emerald-400 font-semibold">${item.correct}</span>` : ''}
                        </div>
                    </div>
                    <div>
                        ${item.isCorrect
                ? '<i class="fa-solid fa-circle-check text-emerald-400 text-lg"></i>'
                : '<i class="fa-solid fa-circle-xmark text-rose-400 text-lg"></i>'}
                    </div>
                `;

            container.appendChild(row);
        });
    }
</script>
</body>
</html>