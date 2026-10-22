<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Speed Quiz Challenge</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- FontAwesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Plus Jakarta Sans', 'sans-serif'],
                    },
                    animation: {
                        'pulse-fast': 'pulse 0.8s cubic-bezier(0.4, 0, 0.6, 1) infinite',
                        'bounce-short': 'bounce 0.5s ease-in-out 1',
                        'fade-in': 'fadeIn 0.3s ease-out forwards',
                    },
                    keyframes: {
                        fadeIn: {
                            '0%': { opacity: '0', transform: 'translateY(8px)' },
                            '100%': { opacity: '1', transform: 'translateY(0)' },
                        }
                    }
                }
            }
        }
    </script>
    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background: linear-gradient(135deg, #0f172a 0%, #1e1b4b 50%, #311042 100%);
            min-height: 100vh;
        }
        .glass-card {
            background: rgba(255, 255, 255, 0.07);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border: 1px solid rgba(255, 255, 255, 0.12);
        }
        .glass-button {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(8px);
            border: 1px solid rgba(255, 255, 255, 0.15);
            transition: all 0.2s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .glass-button:hover:not(:disabled) {
            background: rgba(255, 255, 255, 0.2);
            border-color: rgba(255, 255, 255, 0.3);
            transform: translateY(-2px);
        }
        .glass-button:active:not(:disabled) {
            transform: translateY(0);
        }
        /* Custom scrollbar for summary section */
        ::-webkit-scrollbar {
            width: 8px;
        }
        ::-webkit-scrollbar-track {
            background: rgba(15, 23, 42, 0.6);
            border-radius: 8px;
        }
        ::-webkit-scrollbar-thumb {
            background: rgba(255, 255, 255, 0.2);
            border-radius: 8px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: rgba(255, 255, 255, 0.35);
        }
    </style>
</head>
<body class="text-slate-100 flex items-center justify-center p-4 sm:p-6 min-h-screen">

<main class="w-full max-w-3xl">

    <!-- SCREEN 1: INSTRUCTIONS SCREEN -->
    <section id="screen-start" class="glass-card rounded-3xl p-6 sm:p-10 shadow-2xl transition-all duration-300 animate-fade-in">
        <div class="text-center mb-8">
            <div class="inline-flex items-center justify-center w-20 h-20 rounded-2xl bg-gradient-to-tr from-indigo-500 to-purple-500 text-white shadow-lg mb-4 text-3xl">
                <i class="fa-solid fa-bolt"></i>
            </div>
            <h1 class="text-3xl sm:text-4xl font-extrabold tracking-tight bg-gradient-to-r from-white via-slate-200 to-indigo-200 bg-clip-text text-transparent">
                <?= $title ?>
            </h1>
            <p class="text-slate-400 mt-2 text-base sm:text-lg">Test your knowledge under time pressure!</p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-8">
            <div class="bg-slate-900/50 border border-slate-800 p-4 rounded-2xl flex items-center gap-4">
                <div class="w-12 h-12 rounded-xl bg-indigo-500/20 text-indigo-400 flex items-center justify-center text-xl font-bold">
                    <i class="fa-solid fa-circle-question"></i>
                </div>
                <div>
                    <div class="text-xs text-slate-400 uppercase font-semibold tracking-wider">Total Questions</div>
                    <div id="info-questions-count" class="text-xl font-bold text-white">0 Questions</div>
                </div>
            </div>

            <div class="bg-slate-900/50 border border-slate-800 p-4 rounded-2xl flex items-center gap-4">
                <div class="w-12 h-12 rounded-xl bg-amber-500/20 text-amber-400 flex items-center justify-center text-xl font-bold">
                    <i class="fa-solid fa-clock"></i>
                </div>
                <div>
                    <div class="text-xs text-slate-400 uppercase font-semibold tracking-wider">Time Limit</div>
                    <div id="info-time-limit" class="text-xl font-bold text-white">0 Seconds</div>
                </div>
            </div>
        </div>

        <div class="bg-indigo-950/40 border border-indigo-800/40 rounded-2xl p-5 mb-8">
            <h2 class="font-bold text-indigo-300 text-sm uppercase tracking-wider mb-2 flex items-center gap-2">
                <i class="fa-solid fa-circle-info"></i> How to Play
            </h2>
            <ul class="text-slate-300 text-sm space-y-2 list-disc list-inside">
                <li>Select the correct choice for each question before the timer expires.</li>
                <li>You are allotted <strong class="text-amber-300"><span id="second_per_question"></span> seconds per question</strong> (Total time limit).</li>
                <li>Selecting an answer immediately advances you to the next question.</li>
                <li>The game ends when all questions are answered or when time runs out!</li>
            </ul>
        </div>

        <button id="btn-start" onclick="quizApp.startGame()" class="w-full py-4 px-6 rounded-2xl font-bold text-lg bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 text-white shadow-xl hover:shadow-indigo-500/25 hover:scale-[1.01] active:scale-[0.99] transition-all duration-200 flex items-center justify-center gap-3">
            <span>Start Challenge</span>
            <i class="fa-solid fa-arrow-right"></i>
        </button>

        <p class="mt-4 text-center">
            <?= $back_btn ?>
        </p>
    </section>

    <!-- SCREEN 2: ACTIVE GAMEPLAY SCREEN -->
    <section id="screen-game" class="hidden glass-card rounded-3xl p-6 sm:p-10 shadow-2xl relative overflow-hidden">
        <!-- Header / Stats Bar -->
        <div class="flex items-center justify-between mb-6 pb-4 border-b border-slate-700/50">
            <div>
                <span class="text-xs text-slate-400 font-semibold uppercase tracking-wider block mb-1">Progress</span>
                <span id="game-progress-text" class="text-lg font-bold text-slate-200">Question 1 of 10</span>
            </div>

            <!-- Dynamic Timer Badge -->
            <div id="timer-badge" class="px-4 py-2 rounded-xl bg-slate-900/80 border border-slate-700 flex items-center gap-2 font-mono font-bold text-xl text-amber-400">
                <i class="fa-solid fa-stopwatch text-base"></i>
                <span id="game-timer">00s</span>
            </div>
        </div>

        <!-- Progress Bar -->
        <div class="w-full bg-slate-800/80 h-2.5 rounded-full mb-8 overflow-hidden">
            <div id="game-progress-bar" class="h-full bg-gradient-to-r from-indigo-500 to-pink-500 transition-all duration-300 w-0"></div>
        </div>

        <!-- Question Text -->
        <div class="mb-8 min-h-[80px] flex items-center">
            <h2 id="question-text" class="text-xl sm:text-2xl font-bold text-white leading-relaxed">
                Loading Question...
            </h2>
        </div>

        <!-- Choices Grid -->
        <div id="choices-container" class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-6">
            <!-- Choices will be injected dynamically -->
        </div>
    </section>

    <!-- SCREEN 3: SUMMARY / RESULTS SCREEN -->
    <section id="screen-summary" class="hidden glass-card rounded-3xl p-6 sm:p-10 shadow-2xl animate-fade-in">
        <div class="text-center mb-8">
            <div id="summary-badge-icon" class="inline-flex items-center justify-center w-20 h-20 rounded-2xl bg-emerald-500/20 text-emerald-400 border border-emerald-500/30 text-4xl mb-4">
                <i class="fa-solid fa-trophy"></i>
            </div>
            <h2 id="summary-title" class="text-3xl sm:text-4xl font-extrabold text-white">Challenge Completed!</h2>
            <p id="summary-subtitle" class="text-slate-400 mt-1">Here is a breakdown of your performance</p>
        </div>

        <!-- Score & Time Highlights -->
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-8">
            <div class="bg-slate-900/60 border border-slate-800 rounded-2xl p-5 text-center">
                <span class="text-xs font-semibold uppercase tracking-wider text-slate-400">Final Score</span>
                <div class="text-3xl sm:text-4xl font-extrabold text-indigo-400 mt-1" id="summary-score-text">0 / 0</div>
                <div class="text-xs text-slate-400 mt-1" id="summary-percentage">0% Accuracy</div>
            </div>

            <div class="bg-slate-900/60 border border-slate-800 rounded-2xl p-5 text-center">
                <span class="text-xs font-semibold uppercase tracking-wider text-slate-400">Time Spent</span>
                <div class="text-3xl sm:text-4xl font-extrabold text-amber-400 mt-1" id="summary-time-text">0s</div>
                <div class="text-xs text-slate-400 mt-1" id="summary-time-limit-text">out of 0s limit</div>
            </div>
        </div>

        <!-- Review Section Title -->
        <div class="flex items-center justify-between mb-4">
            <h3 class="text-lg font-bold text-slate-200 flex items-center gap-2">
                <i class="fa-solid fa-list-check text-indigo-400"></i> Review Questions
            </h3>
            <span class="text-xs text-slate-400">Detailed Breakdown</span>
        </div>

        <!-- Review List Container -->
        <div id="review-container" class="space-y-4 max-h-[380px] overflow-y-auto pr-2 mb-8">
            <!-- Review items dynamically injected -->
        </div>

        <!-- Action Buttons -->
        <button onclick="quizApp.restartGame()" class="w-full py-4 px-6 rounded-2xl font-bold text-lg bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 text-white shadow-xl hover:shadow-indigo-500/25 hover:scale-[1.01] active:scale-[0.99] transition-all duration-200 flex items-center justify-center gap-3">
            <i class="fa-solid fa-rotate-right"></i>
            <span>Play Again</span>
        </button>
        <p class="mt-4 text-center">
            <?= $back_btn ?>
        </p>
    </section>

</main>

<!-- JAVASCRIPT GAME ENGINE -->
<script>
    // -------------------------------------------------------------
    // QUESTION SET INJECTION
    // This allows PHP to seamlessly output:
    let question_set = <?= json_encode($questions) ?>;
    // -------------------------------------------------------------
    // QUIZ GAME ENGINE OBJECT
    // -------------------------------------------------------------
    const quizApp = {
        questions: [],
        currentIndex: 0,
        userAnswers: [],
        timerInterval: null,
        totalTimeLimit: 0,
        timeRemaining: 0,
        startTime: 0,
        elapsedTime: 0,
        isGameOver: false,

        // Audio Synthesizer via Web Audio API (No external sound files required)
        playTone(freq, duration, type = 'sine') {
            try {
                const ctx = new (window.AudioContext || window.webkitAudioContext)();
                const osc = ctx.createOscillator();
                const gain = ctx.createGain();
                osc.type = type;
                osc.frequency.setValueAtTime(freq, ctx.currentTime);
                gain.gain.setValueAtTime(0.1, ctx.currentTime);
                gain.gain.exponentialRampToValueAtTime(0.0001, ctx.currentTime + duration);
                osc.connect(gain);
                gain.connect(ctx.destination);
                osc.start();
                osc.stop(ctx.currentTime + duration);
            } catch (e) {
                // Silent fallback if audio context fails
            }
        },

        init() {
            const second_per_question = 3;
            // Validate and load questions safely
            if (typeof question_set !== 'undefined' && Array.isArray(question_set) && question_set.length > 0) {
                this.questions = question_set;
            } else {
                this.questions = [];
            }
            document.getElementById('second_per_question').textContent = second_per_question;

            this.totalTimeLimit = this.questions.length * second_per_question; // Time limit rule: second_per_question * questions seconds

            // Populate Start Screen
            document.getElementById('info-questions-count').textContent = `${this.questions.length} Questions`;
            document.getElementById('info-time-limit').textContent = `${this.totalTimeLimit} Seconds`;

            // Switch to Start Screen
            this.showScreen('screen-start');
        },

        showScreen(screenId) {
            ['screen-start', 'screen-game', 'screen-summary'].forEach(id => {
                const el = document.getElementById(id);
                if (id === screenId) {
                    el.classList.remove('hidden');
                } else {
                    el.classList.add('hidden');
                }
            });
        },

        startGame() {
            if (!this.questions || this.questions.length === 0) {
                alert('No questions available to play!');
                return;
            }

            this.currentIndex = 0;
            this.userAnswers = new Array(this.questions.length).fill(null);
            this.timeRemaining = this.totalTimeLimit;
            this.isGameOver = false;
            this.startTime = Date.now();

            this.showScreen('screen-game');
            this.renderQuestion();
            this.startTimer();
        },

        startTimer() {
            clearInterval(this.timerInterval);
            this.updateTimerDisplay();

            this.timerInterval = setInterval(() => {
                this.timeRemaining--;
                this.updateTimerDisplay();

                if (this.timeRemaining <= 0) {
                    clearInterval(this.timerInterval);
                    this.endGame('timeup');
                }
            }, 1000);
        },

        updateTimerDisplay() {
            const timerEl = document.getElementById('game-timer');
            const badgeEl = document.getElementById('timer-badge');

            timerEl.textContent = `${this.timeRemaining}s`;

            // Warning styles when time is low (under 5s or under 20% total time)
            if (this.timeRemaining <= Math.max(5, Math.floor(this.totalTimeLimit * 0.2))) {
                badgeEl.classList.remove('text-amber-400', 'border-slate-700');
                badgeEl.classList.add('text-rose-400', 'border-rose-500/50', 'animate-pulse-fast');
                this.playTone(440, 0.08, 'sawtooth'); // Tick sound
            } else {
                badgeEl.classList.remove('text-rose-400', 'border-rose-500/50', 'animate-pulse-fast');
                badgeEl.classList.add('text-amber-400', 'border-slate-700');
            }
        },

        renderQuestion() {
            const currentQ = this.questions[this.currentIndex];

            // Progress text & bar
            document.getElementById('game-progress-text').textContent = `Question ${this.currentIndex + 1} of ${this.questions.length}`;
            const pct = ((this.currentIndex) / this.questions.length) * 100;
            document.getElementById('game-progress-bar').style.width = `${pct}%`;

            // Question text
            document.getElementById('question-text').textContent = currentQ.question;

            // Choices
            const container = document.getElementById('choices-container');
            container.innerHTML = '';

            const letters = ['A', 'B', 'C', 'D', 'E', 'F'];

            currentQ.choices.forEach((choice, idx) => {
                const btn = document.createElement('button');
                btn.className = `glass-button w-full p-4 rounded-2xl text-left flex items-center gap-3 group text-slate-200 hover:text-white transition-all`;
                btn.onclick = () => this.selectAnswer(choice);

                const letterBadge = document.createElement('span');
                letterBadge.className = `w-8 h-8 rounded-xl bg-white/10 group-hover:bg-indigo-500 group-hover:text-white flex items-center justify-center font-bold text-sm text-slate-300 transition-colors shrink-0`;
                letterBadge.textContent = letters[idx] || (idx + 1);

                const choiceText = document.createElement('span');
                choiceText.className = `font-medium text-base sm:text-lg flex-1 break-words`;
                choiceText.textContent = choice;

                btn.appendChild(letterBadge);
                btn.appendChild(choiceText);
                container.appendChild(btn);
            });
        },

        selectAnswer(selectedChoice) {
            if (this.isGameOver) return;

            // Sound effect
            this.playTone(600, 0.1, 'sine');

            // Store answer
            this.userAnswers[this.currentIndex] = selectedChoice;

            // Advance to next question or complete game
            if (this.currentIndex < this.questions.length - 1) {
                this.currentIndex++;
                this.renderQuestion();
            } else {
                this.endGame('completed');
            }
        },

        endGame(reason) {
            this.isGameOver = true;
            clearInterval(this.timerInterval);

            // Calculate time spent
            this.elapsedTime = Math.min(
                this.totalTimeLimit,
                Math.round((Date.now() - this.startTime) / 1000)
            );

            // Calculate Score
            let score = 0;
            this.questions.forEach((q, index) => {
                if (this.userAnswers[index] === q.answer) {
                    score++;
                }
            });

            // Setup Summary View
            const scoreText = document.getElementById('summary-score-text');
            const percentageText = document.getElementById('summary-percentage');
            const timeText = document.getElementById('summary-time-text');
            const timeLimitText = document.getElementById('summary-time-limit-text');
            const titleEl = document.getElementById('summary-title');
            const badgeIconEl = document.getElementById('summary-badge-icon');

            const percentage = Math.round((score / this.questions.length) * 100);

            scoreText.textContent = `${score} / ${this.questions.length}`;
            percentageText.textContent = `${percentage}% Accuracy`;
            timeText.textContent = `${this.elapsedTime}s`;
            timeLimitText.textContent = `out of ${this.totalTimeLimit}s limit`;

            if (reason === 'timeup') {
                titleEl.textContent = "Time's Up!";
                titleEl.className = "text-3xl sm:text-4xl font-extrabold text-amber-400";
                badgeIconEl.className = "inline-flex items-center justify-center w-20 h-20 rounded-2xl bg-amber-500/20 text-amber-400 border border-amber-500/30 text-4xl mb-4";
                badgeIconEl.innerHTML = `<i class="fa-solid fa-hourglass-end"></i>`;
                this.playTone(250, 0.3, 'sawtooth');
            } else {
                titleEl.textContent = "Challenge Completed!";
                titleEl.className = "text-3xl sm:text-4xl font-extrabold text-white";
                badgeIconEl.className = "inline-flex items-center justify-center w-20 h-20 rounded-2xl bg-emerald-500/20 text-emerald-400 border border-emerald-500/30 text-4xl mb-4";
                badgeIconEl.innerHTML = `<i class="fa-solid fa-trophy"></i>`;
                this.playTone(800, 0.2, 'sine');
            }

            // Render detailed questions breakdown
            this.renderReviewList();

            // Display Summary Screen
            this.showScreen('screen-summary');
        },

        renderReviewList() {
            const reviewContainer = document.getElementById('review-container');
            reviewContainer.innerHTML = '';

            this.questions.forEach((q, idx) => {
                const userAns = this.userAnswers[idx];
                const isCorrect = userAns === q.answer;
                const isUnanswered = userAns === null || userAns === undefined;

                const card = document.createElement('div');
                card.className = `p-4 rounded-2xl border ${
                    isCorrect
                        ? 'bg-emerald-950/20 border-emerald-500/30'
                        : 'bg-rose-950/20 border-rose-500/30'
                }`;

                let statusBadge = '';
                if (isCorrect) {
                    statusBadge = `<span class="px-2.5 py-1 rounded-lg text-xs font-bold bg-emerald-500/20 text-emerald-300 border border-emerald-500/30 flex items-center gap-1 shrink-0"><i class="fa-solid fa-check"></i> Correct</span>`;
                } else if (isUnanswered) {
                    statusBadge = `<span class="px-2.5 py-1 rounded-lg text-xs font-bold bg-amber-500/20 text-amber-300 border border-amber-500/30 flex items-center gap-1 shrink-0"><i class="fa-solid fa-clock"></i> Unanswered</span>`;
                } else {
                    statusBadge = `<span class="px-2.5 py-1 rounded-lg text-xs font-bold bg-rose-500/20 text-rose-300 border border-rose-500/30 flex items-center gap-1 shrink-0"><i class="fa-solid fa-xmark"></i> Incorrect</span>`;
                }

                card.innerHTML = `
            <div class="flex items-start justify-between gap-3 mb-2">
              <span class="text-sm font-semibold text-slate-300">Q${idx + 1}. ${escapeHTML(q.question)}</span>
              ${statusBadge}
            </div>
            <div class="space-y-1 text-xs sm:text-sm mt-3 pt-2 border-t border-slate-800/80">
              <div class="${isCorrect ? 'text-emerald-400 font-semibold' : 'text-slate-400'}">
                <span class="text-slate-500">Your Answer:</span> ${isUnanswered ? '<i class="text-slate-500 font-italic">Time expired before answering</i>' : escapeHTML(userAns)}
              </div>
              ${!isCorrect ? `
                <div class="text-emerald-400 font-semibold">
                  <span class="text-slate-500">Correct Answer:</span> ${escapeHTML(q.answer)}
                </div>
              ` : ''}
            </div>
          `;

                reviewContainer.appendChild(card);
            });
        },

        restartGame() {
            this.init();
        }
    };

    // Helper utility to safely escape HTML string content
    function escapeHTML(str) {
        if (typeof str !== 'string') return str;
        return str
            .replace(/&/g, "&amp;")
            .replace(/</g, "&lt;")
            .replace(/>/g, "&gt;")
            .replace(/"/g, "&quot;")
            .replace(/'/g, "&#039;");
    }

    // Initialize the quiz app on page load
    window.onload = function() {
        quizApp.init();
    };
</script>
</body>
</html>