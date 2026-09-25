<!DOCTYPE html>
<html lang="en" class="h-full bg-slate-950 text-slate-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scrum Test - Master the Scrum Framework</title>
    <!-- Favicons -->
    <link href="<?= base_url('assets/img/favicon.png') ?>" rel="icon">
    <link href="<?= base_url('assets/img/apple-touch-icon.png') ?>" rel="apple-touch-icon">
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Google Fonts: Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    },
                    colors: {
                        brand: {
                            50: '#f0f3ff',
                            100: '#e0e7ff',
                            500: '#6366f1',
                            600: '#4f46e5',
                            700: '#4338ca',
                            900: '#1e1b4b',
                        }
                    },
                    animation: {
                        'pulse-fast': 'pulse 1s cubic-bezier(0.4, 0, 0.6, 1) infinite',
                        'bounce-short': 'bounce 0.8s infinite',
                    }
                }
            }
        }
    </script>
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background: radial-gradient(circle at top center, #1e1b4b 0%, #0f172a 60%, #020617 100%);
            min-height: 100vh;
        }
        .glass-card {
            background: rgba(15, 23, 42, 0.8);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        .glass-input {
            background: rgba(30, 41, 59, 0.7);
            border: 1px solid rgba(255, 255, 255, 0.15);
            color: #f8fafc;
            transition: all 0.2s ease-in-out;
        }
        .glass-input:focus {
            background: rgba(30, 41, 59, 0.95);
            border-color: #6366f1;
            box-shadow: 0 0 0 3px rgba(99, 102, 241, 0.25);
            outline: none;
        }
        ::-webkit-scrollbar {
            width: 8px;
        }
        ::-webkit-scrollbar-track {
            background: #0f172a;
        }
        ::-webkit-scrollbar-thumb {
            background: #334155;
            border-radius: 4px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #475569;
        }
    </style>
</head>
<body class="flex flex-col min-h-screen text-slate-100 antialiased selection:bg-indigo-500 selection:text-white">

<!-- Header Banner -->
<header class="w-full border-b border-slate-800/80 bg-slate-900/60 backdrop-blur-md sticky top-0 z-40">
    <div class="max-w-5xl mx-auto px-4 py-3 flex justify-between items-center">
        <div class="flex items-center gap-3 cursor-pointer" onclick="goToLandingPage()">
            <div class="w-9 h-9 rounded-xl bg-gradient-to-tr from-indigo-600 to-violet-500 flex items-center justify-center shadow-lg shadow-indigo-500/30">
                <i class="fa-solid font-bold text-white text-lg fa-bolt"></i>
            </div>
            <div>
                <h1 class="font-extrabold text-xl tracking-tight bg-gradient-to-r from-white via-slate-200 to-indigo-200 bg-clip-text text-transparent">
                    Scrum Test
                </h1>
                <p class="text-xs text-indigo-300/70 hidden sm:block font-medium">Scrum Guide 2020 Knowledge Check</p>
            </div>
        </div>

        <!-- Controls -->
        <div class="flex items-center gap-3">
            <button id="soundToggleBtn" onclick="toggleAudio()" class="p-2.5 rounded-lg bg-slate-800/80 hover:bg-slate-700/80 text-slate-300 hover:text-white transition-all border border-slate-700/50" title="Toggle Sound Effects">
                <i id="soundIcon" class="fa-solid fa-volume-high text-sm"></i>
            </button>
        </div>
    </div>
</header>

<!-- Main Container -->
<main class="flex-grow max-w-5xl w-full mx-auto px-4 py-6 flex flex-col justify-center">

    <!-- PAGE 1: LANDING PAGE -->
    <section id="landingPage" class="w-full max-w-3xl mx-auto my-auto py-8">
        <div class="glass-card rounded-3xl p-6 sm:p-10 shadow-2xl relative overflow-hidden text-center border border-indigo-500/20">
            <!-- Glow accents -->
            <div class="absolute -top-24 -left-24 w-60 h-60 bg-indigo-600/20 rounded-full blur-3xl pointer-events-none"></div>
            <div class="absolute -bottom-24 -right-24 w-60 h-60 bg-violet-600/20 rounded-full blur-3xl pointer-events-none"></div>

            <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-indigo-500/10 border border-indigo-500/20 text-indigo-300 text-xs font-semibold mb-6">
                <i class="fa-solid fa-stopwatch text-indigo-400"></i>
                3-Minute Challenge
            </div>

            <h1 class="text-4xl sm:text-5xl font-black tracking-tight text-white mb-4">
                Test Your <span class="bg-gradient-to-r from-indigo-400 via-violet-300 to-purple-400 bg-clip-text text-transparent">Scrum Knowledge</span>
            </h1>

            <p class="text-slate-300 text-base sm:text-lg max-w-xl mx-auto mb-8 leading-relaxed">
                Fill in all the core components of the Scrum Framework: 3 Pillars, 5 Values, 3 Accountabilities, 5 Events (with participants & timeboxes), and 3 Artifacts with their commitments.
            </p>

            <!-- Rules/Stats grid -->
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 text-left mb-8">
                <div class="p-4 rounded-2xl bg-slate-900/60 border border-slate-800 flex items-start gap-3">
                    <div class="p-2.5 rounded-xl bg-indigo-500/20 text-indigo-400 font-bold">
                        <i class="fa-solid fa-clock"></i>
                    </div>
                    <div>
                        <h3 class="text-xs uppercase tracking-wider text-slate-400 font-bold mb-0.5">Time Limit</h3>
                        <p class="text-sm font-semibold text-slate-200">3 Minutes Max</p>
                    </div>
                </div>

                <div class="p-4 rounded-2xl bg-slate-900/60 border border-slate-800 flex items-start gap-3">
                    <div class="p-2.5 rounded-xl bg-emerald-500/20 text-emerald-400 font-bold">
                        <i class="fa-solid fa-list-check"></i>
                    </div>
                    <div>
                        <h3 class="text-xs uppercase tracking-wider text-slate-400 font-bold mb-0.5">Total Inputs</h3>
                        <p class="text-sm font-semibold text-slate-200">32 Blank Fields</p>
                    </div>
                </div>

                <div class="p-4 rounded-2xl bg-slate-900/60 border border-slate-800 flex items-start gap-3">
                    <div class="p-2.5 rounded-xl bg-amber-500/20 text-amber-400 font-bold">
                        <i class="fa-solid fa-spell-check"></i>
                    </div>
                    <div>
                        <h3 class="text-xs uppercase tracking-wider text-slate-400 font-bold mb-0.5">Evaluation</h3>
                        <p class="text-sm font-semibold text-slate-200">Exact Term (Any Order)</p>
                    </div>
                </div>
            </div>

            <!-- Start CTA Button -->
            <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                <button id="startTestBtn" onclick="startTest()" class="w-full sm:w-auto px-10 py-4 rounded-2xl bg-gradient-to-r from-indigo-600 via-indigo-500 to-violet-600 hover:from-indigo-500 hover:to-violet-500 text-white font-bold text-lg shadow-xl shadow-indigo-600/30 hover:shadow-indigo-500/50 hover:scale-[1.02] active:scale-[0.98] transition-all flex items-center justify-center gap-3 group">
                    <span>Start Test Now</span>
                    <i class="fa-solid fa-play text-sm group-hover:translate-x-1 transition-transform"></i>
                </button>
            </div>

            <p class="text-xs text-slate-500 mt-6">
                <i class="fa-solid fa-circle-info mr-1"></i> Based on the official Scrum Guide (2020). Fill in standard terms in any box.
            </p>
            <br/>
            <p><a href="<?= base_url('game') ?>">Back to Game Center</a></p>
        </div>
    </section>

    <!-- PAGE 2: GAME PAGE -->
    <section id="gamePage" class="hidden w-full flex-col gap-6 pb-12">

        <!-- Sticky Game Control Bar -->
        <div class="sticky top-16 z-30 glass-card rounded-2xl p-4 shadow-xl border border-indigo-500/30">
            <div class="flex flex-wrap items-center justify-between gap-4">

                <!-- Timer Display -->
                <div class="flex items-center gap-3">
                    <div id="timerIconBox" class="w-10 h-10 rounded-xl bg-indigo-500/20 text-indigo-400 flex items-center justify-center text-lg font-bold">
                        <i class="fa-solid fa-stopwatch"></i>
                    </div>
                    <div>
                        <div class="text-xs uppercase tracking-wider text-slate-400 font-bold">Time Remaining</div>
                        <div id="timerDisplay" class="text-2xl font-black text-white tracking-wider font-mono">03:00</div>
                    </div>
                </div>

                <!-- Progress info -->
                <div class="hidden sm:flex items-center gap-6">
                    <div>
                        <div class="text-xs uppercase tracking-wider text-slate-400 font-bold">Boxes Answered</div>
                        <div class="text-sm font-bold text-slate-200"><span id="answeredCount">0</span> / <span id="totalBoxCount">32</span></div>
                    </div>
                </div>

                <!-- Submit Button -->
                <button onclick="confirmSubmitEarly()" class="px-5 py-2.5 rounded-xl bg-gradient-to-r from-emerald-600 to-teal-600 hover:from-emerald-500 hover:to-teal-500 text-white font-bold text-sm shadow-lg shadow-emerald-600/20 hover:scale-[1.02] active:scale-[0.98] transition-all flex items-center gap-2">
                    <i class="fa-solid fa-check-double"></i>
                    <span>I'm Done</span>
                </button>
            </div>

            <!-- Timer Visual Bar -->
            <div class="w-full h-2 bg-slate-800 rounded-full mt-3 overflow-hidden">
                <div id="timerBar" class="h-full bg-gradient-to-r from-indigo-500 via-violet-500 to-emerald-400 transition-all duration-1000 ease-linear w-full"></div>
            </div>
        </div>

        <!-- Test Questions Form -->
        <form id="scrumTestForm" onsubmit="event.preventDefault(); submitTest();" class="space-y-6">

            <!-- Question 1: Pillars -->
            <div class="glass-card rounded-2xl p-6 sm:p-8 border border-slate-800">
                <div class="flex items-start gap-4 mb-4">
                    <span class="flex-shrink-0 w-8 h-8 rounded-lg bg-indigo-600/20 border border-indigo-500/30 text-indigo-400 font-black flex items-center justify-center text-sm">1</span>
                    <div>
                        <h2 class="text-lg sm:text-xl font-bold text-white">Fill in the 3 Scrum Pillars</h2>
                        <p class="text-xs sm:text-sm text-slate-400">List the three empirical pillars of Scrum (any order).</p>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-4">
                    <div>
                        <label class="block text-xs font-semibold text-slate-400 mb-1">Pillar 1</label>
                        <input type="text" data-q="q1" data-idx="0" placeholder="Type pillar..." class="w-full px-4 py-3 rounded-xl glass-input text-sm">
                    </div>
                    <div>
                        <label class="block text-xs font-semibold text-slate-400 mb-1">Pillar 2</label>
                        <input type="text" data-q="q1" data-idx="1" placeholder="Type pillar..." class="w-full px-4 py-3 rounded-xl glass-input text-sm">
                    </div>
                    <div>
                        <label class="block text-xs font-semibold text-slate-400 mb-1">Pillar 3</label>
                        <input type="text" data-q="q1" data-idx="2" placeholder="Type pillar..." class="w-full px-4 py-3 rounded-xl glass-input text-sm">
                    </div>
                </div>
            </div>

            <!-- Question 2: Values -->
            <div class="glass-card rounded-2xl p-6 sm:p-8 border border-slate-800">
                <div class="flex items-start gap-4 mb-4">
                    <span class="flex-shrink-0 w-8 h-8 rounded-lg bg-indigo-600/20 border border-indigo-500/30 text-indigo-400 font-black flex items-center justify-center text-sm">2</span>
                    <div>
                        <h2 class="text-lg sm:text-xl font-bold text-white">Fill in the 5 Scrum Values</h2>
                        <p class="text-xs sm:text-sm text-slate-400">List the five core values of Scrum (any order).</p>
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-5 gap-3 mt-4">
                    <div>
                        <label class="block text-xs font-semibold text-slate-400 mb-1">Value 1</label>
                        <input type="text" data-q="q2" data-idx="0" placeholder="Type value..." class="w-full px-3 py-2.5 rounded-xl glass-input text-sm">
                    </div>
                    <div>
                        <label class="block text-xs font-semibold text-slate-400 mb-1">Value 2</label>
                        <input type="text" data-q="q2" data-idx="1" placeholder="Type value..." class="w-full px-3 py-2.5 rounded-xl glass-input text-sm">
                    </div>
                    <div>
                        <label class="block text-xs font-semibold text-slate-400 mb-1">Value 3</label>
                        <input type="text" data-q="q2" data-idx="2" placeholder="Type value..." class="w-full px-3 py-2.5 rounded-xl glass-input text-sm">
                    </div>
                    <div>
                        <label class="block text-xs font-semibold text-slate-400 mb-1">Value 4</label>
                        <input type="text" data-q="q2" data-idx="3" placeholder="Type value..." class="w-full px-3 py-2.5 rounded-xl glass-input text-sm">
                    </div>
                    <div>
                        <label class="block text-xs font-semibold text-slate-400 mb-1">Value 5</label>
                        <input type="text" data-q="q2" data-idx="4" placeholder="Type value..." class="w-full px-3 py-2.5 rounded-xl glass-input text-sm">
                    </div>
                </div>
            </div>

            <!-- Question 3: Accountabilities -->
            <div class="glass-card rounded-2xl p-6 sm:p-8 border border-slate-800">
                <div class="flex items-start gap-4 mb-4">
                    <span class="flex-shrink-0 w-8 h-8 rounded-lg bg-indigo-600/20 border border-indigo-500/30 text-indigo-400 font-black flex items-center justify-center text-sm">3</span>
                    <div>
                        <h2 class="text-lg sm:text-xl font-bold text-white">Fill in the 3 Scrum Accountabilities</h2>
                        <p class="text-xs sm:text-sm text-slate-400">List the three roles/accountabilities within a Scrum Team (any order).</p>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-4">
                    <div>
                        <label class="block text-xs font-semibold text-slate-400 mb-1">Accountability 1</label>
                        <input type="text" data-q="q3" data-idx="0" placeholder="Type accountability..." class="w-full px-4 py-3 rounded-xl glass-input text-sm">
                    </div>
                    <div>
                        <label class="block text-xs font-semibold text-slate-400 mb-1">Accountability 2</label>
                        <input type="text" data-q="q3" data-idx="1" placeholder="Type accountability..." class="w-full px-4 py-3 rounded-xl glass-input text-sm">
                    </div>
                    <div>
                        <label class="block text-xs font-semibold text-slate-400 mb-1">Accountability 3</label>
                        <input type="text" data-q="q3" data-idx="2" placeholder="Type accountability..." class="w-full px-4 py-3 rounded-xl glass-input text-sm">
                    </div>
                </div>
            </div>

            <!-- Question 4: Events Table -->
            <div class="glass-card rounded-2xl p-6 sm:p-8 border border-slate-800">
                <div class="flex items-start gap-4 mb-4">
                    <span class="flex-shrink-0 w-8 h-8 rounded-lg bg-indigo-600/20 border border-indigo-500/30 text-indigo-400 font-black flex items-center justify-center text-sm">4</span>
                    <div>
                        <h2 class="text-lg sm:text-xl font-bold text-white">Fill in the Scrum Events Table</h2>
                        <p class="text-xs sm:text-sm text-slate-400">List the 5 formal Scrum Events, participants, and official timeboxes (rows can be in any order).</p>
                    </div>
                </div>

                <div class="overflow-x-auto mt-4 rounded-xl border border-slate-800">
                    <table class="w-full text-left text-sm text-slate-200 min-w-[600px]">
                        <thead class="bg-slate-900/90 text-xs uppercase text-indigo-300 font-bold border-b border-slate-800">
                        <tr>
                            <th class="p-3.5 w-1/3">Event Name</th>
                            <th class="p-3.5 w-1/3">Who Participates<br/>Scrum Team<br/>Stakeholders<br/>or any accountabilities?</th>
                            <th class="p-3.5 w-1/3">Timebox<br/>Use<br/>mo for months<br/>w for weeks<br/>h for hours<br/>m for minutes</th>
                        </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-800/60 bg-slate-900/40">
                        <!-- Row 1 -->
                        <tr>
                            <td class="p-2.5"><input type="text" data-q="q4" data-row="0" data-col="0" placeholder="Event name" class="w-full px-3 py-2 rounded-lg glass-input text-sm"></td>
                            <td class="p-2.5"><input type="text" data-q="q4" data-row="0" data-col="1" placeholder="Who participates?" class="w-full px-3 py-2 rounded-lg glass-input text-sm"></td>
                            <td class="p-2.5"><input type="text" data-q="q4" data-row="0" data-col="2" placeholder="Timebox" class="w-full px-3 py-2 rounded-lg glass-input text-sm"></td>
                        </tr>
                        <!-- Row 2 -->
                        <tr>
                            <td class="p-2.5"><input type="text" data-q="q4" data-row="1" data-col="0" placeholder="Event name" class="w-full px-3 py-2 rounded-lg glass-input text-sm"></td>
                            <td class="p-2.5"><input type="text" data-q="q4" data-row="1" data-col="1" placeholder="Who participates?" class="w-full px-3 py-2 rounded-lg glass-input text-sm"></td>
                            <td class="p-2.5"><input type="text" data-q="q4" data-row="1" data-col="2" placeholder="Timebox" class="w-full px-3 py-2 rounded-lg glass-input text-sm"></td>
                        </tr>
                        <!-- Row 3 -->
                        <tr>
                            <td class="p-2.5"><input type="text" data-q="q4" data-row="2" data-col="0" placeholder="Event name" class="w-full px-3 py-2 rounded-lg glass-input text-sm"></td>
                            <td class="p-2.5"><input type="text" data-q="q4" data-row="2" data-col="1" placeholder="Who participates?" class="w-full px-3 py-2 rounded-lg glass-input text-sm"></td>
                            <td class="p-2.5"><input type="text" data-q="q4" data-row="2" data-col="2" placeholder="Timebox" class="w-full px-3 py-2 rounded-lg glass-input text-sm"></td>
                        </tr>
                        <!-- Row 4 -->
                        <tr>
                            <td class="p-2.5"><input type="text" data-q="q4" data-row="3" data-col="0" placeholder="Event name" class="w-full px-3 py-2 rounded-lg glass-input text-sm"></td>
                            <td class="p-2.5"><input type="text" data-q="q4" data-row="3" data-col="1" placeholder="Who participates?" class="w-full px-3 py-2 rounded-lg glass-input text-sm"></td>
                            <td class="p-2.5"><input type="text" data-q="q4" data-row="3" data-col="2" placeholder="Timebox" class="w-full px-3 py-2 rounded-lg glass-input text-sm"></td>
                        </tr>
                        <!-- Row 5 -->
                        <tr>
                            <td class="p-2.5"><input type="text" data-q="q4" data-row="4" data-col="0" placeholder="Event name" class="w-full px-3 py-2 rounded-lg glass-input text-sm"></td>
                            <td class="p-2.5"><input type="text" data-q="q4" data-row="4" data-col="1" placeholder="Who participates?" class="w-full px-3 py-2 rounded-lg glass-input text-sm"></td>
                            <td class="p-2.5"><input type="text" data-q="q4" data-row="4" data-col="2" placeholder="Timebox" class="w-full px-3 py-2 rounded-lg glass-input text-sm"></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Question 5: Artifacts and Commitments -->
            <div class="glass-card rounded-2xl p-6 sm:p-8 border border-slate-800">
                <div class="flex items-start gap-4 mb-4">
                    <span class="flex-shrink-0 w-8 h-8 rounded-lg bg-indigo-600/20 border border-indigo-500/30 text-indigo-400 font-black flex items-center justify-center text-sm">5</span>
                    <div>
                        <h2 class="text-lg sm:text-xl font-bold text-white">Fill in the Scrum Artifacts and Their Commitments</h2>
                        <p class="text-xs sm:text-sm text-slate-400">Match each artifact to its corresponding commitment (pairs can be entered in any order).</p>
                    </div>
                </div>

                <div class="space-y-4 mt-4">
                    <!-- Pair 1 -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 p-4 rounded-xl bg-slate-900/50 border border-slate-800">
                        <div>
                            <label class="block text-xs font-semibold text-slate-400 mb-1">Artifact 1</label>
                            <input type="text" data-q="q5" data-pair="0" data-field="artifact" placeholder="Artifact name..." class="w-full px-4 py-2.5 rounded-xl glass-input text-sm">
                        </div>
                        <div>
                            <label class="block text-xs font-semibold text-slate-400 mb-1">Commitment 1</label>
                            <input type="text" data-q="q5" data-pair="0" data-field="commitment" placeholder="Corresponding commitment..." class="w-full px-4 py-2.5 rounded-xl glass-input text-sm">
                        </div>
                    </div>

                    <!-- Pair 2 -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 p-4 rounded-xl bg-slate-900/50 border border-slate-800">
                        <div>
                            <label class="block text-xs font-semibold text-slate-400 mb-1">Artifact 2</label>
                            <input type="text" data-q="q5" data-pair="1" data-field="artifact" placeholder="Artifact name..." class="w-full px-4 py-2.5 rounded-xl glass-input text-sm">
                        </div>
                        <div>
                            <label class="block text-xs font-semibold text-slate-400 mb-1">Commitment 2</label>
                            <input type="text" data-q="q5" data-pair="1" data-field="commitment" placeholder="Corresponding commitment..." class="w-full px-4 py-2.5 rounded-xl glass-input text-sm">
                        </div>
                    </div>

                    <!-- Pair 3 -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 p-4 rounded-xl bg-slate-900/50 border border-slate-800">
                        <div>
                            <label class="block text-xs font-semibold text-slate-400 mb-1">Artifact 3</label>
                            <input type="text" data-q="q5" data-pair="2" data-field="artifact" placeholder="Artifact name..." class="w-full px-4 py-2.5 rounded-xl glass-input text-sm">
                        </div>
                        <div>
                            <label class="block text-xs font-semibold text-slate-400 mb-1">Commitment 3</label>
                            <input type="text" data-q="q5" data-pair="2" data-field="commitment" placeholder="Corresponding commitment..." class="w-full px-4 py-2.5 rounded-xl glass-input text-sm">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Submit Bottom Bar -->
            <div class="flex justify-center pt-4">
                <button type="button" onclick="confirmSubmitEarly()" class="w-full sm:w-auto px-10 py-4 rounded-2xl bg-gradient-to-r from-emerald-600 via-teal-600 to-emerald-500 hover:from-emerald-500 hover:to-teal-500 text-white font-black text-lg shadow-xl shadow-emerald-600/30 hover:scale-[1.02] active:scale-[0.98] transition-all flex items-center justify-center gap-3">
                    <i class="fa-solid fa-paper-plane"></i>
                    <span>Submit Test ("I'm Done")</span>
                </button>
            </div>

        </form>
    </section>

    <!-- PAGE 3: RESULTS PAGE -->
    <section id="resultsPage" class="hidden w-full max-w-4xl mx-auto my-auto py-6 flex-col gap-8">

        <!-- SCORE & SUMMARY TOP CARD -->
        <div class="glass-card rounded-3xl p-6 sm:p-10 shadow-2xl border border-indigo-500/20 relative overflow-hidden text-center w-full">
            <!-- Glow background accent -->
            <div id="resultBgGlow" class="absolute -top-24 -left-24 w-64 h-64 bg-indigo-600/20 rounded-full blur-3xl pointer-events-none"></div>

            <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-slate-800 border border-slate-700 text-slate-300 text-xs font-semibold mb-6">
                <i class="fa-solid fa-square-poll-vertical text-indigo-400"></i>
                Official Test Summary
            </div>

            <!-- Score Circle & Metrics Top Row -->
            <div class="flex flex-col md:flex-row items-center justify-around gap-6 mb-8">

                <!-- Radial Score Gauge -->
                <div class="relative w-44 h-44 flex items-center justify-center flex-shrink-0">
                    <svg class="w-full h-full transform -rotate-90" viewBox="0 0 36 36">
                        <path class="text-slate-800" stroke-width="3.5" stroke="currentColor" fill="none" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" />
                        <path id="scoreSvgRing" class="text-indigo-500 transition-all duration-1000 ease-out" stroke-dasharray="0, 100" stroke-width="3.5" stroke-linecap="round" stroke="currentColor" fill="none" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" />
                    </svg>
                    <div class="absolute inset-0 flex flex-col items-center justify-center">
                        <span id="scorePercent" class="text-4xl font-black text-white tracking-tight">0%</span>
                        <span id="scoreFraction" class="text-xs font-semibold text-slate-400 mt-0.5">0 / 32 Points</span>
                    </div>
                </div>

                <!-- Evaluation Title & Badge -->
                <div class="text-center md:text-left max-w-md">
                    <div id="statusBadge" class="inline-block px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-wider bg-indigo-500/20 text-indigo-300 border border-indigo-500/30 mb-3">
                        Evaluating...
                    </div>
                    <h2 id="resultTitle" class="text-3xl font-black text-white mb-2">Evaluated</h2>
                    <p id="resultSummaryText" class="text-slate-300 text-sm leading-relaxed">
                        Summary description of performance.
                    </p>
                </div>
            </div>

            <!-- Quick Statistics Pill Grid -->
            <div class="grid grid-cols-2 sm:grid-cols-4 gap-3 max-w-2xl mx-auto mb-8 text-center text-xs">
                <div class="p-3.5 rounded-xl bg-slate-900/60 border border-slate-800">
                    <div class="text-slate-400 mb-1 font-semibold">Correct</div>
                    <div id="correctCountText" class="text-xl font-black text-emerald-400">0</div>
                </div>
                <div class="p-3.5 rounded-xl bg-slate-900/60 border border-slate-800">
                    <div class="text-slate-400 mb-1 font-semibold">Incorrect</div>
                    <div id="incorrectCountText" class="text-xl font-black text-rose-400">0</div>
                </div>
                <div class="p-3.5 rounded-xl bg-slate-900/60 border border-slate-800">
                    <div class="text-slate-400 mb-1 font-semibold">Time Used</div>
                    <div id="timeUsedText" class="text-xl font-black text-amber-400">0:00</div>
                </div>
                <div class="p-3.5 rounded-xl bg-slate-900/60 border border-slate-800">
                    <div class="text-slate-400 mb-1 font-semibold">Accuracy</div>
                    <div id="accuracyText" class="text-xl font-black text-indigo-400">0%</div>
                </div>
            </div>

            <!-- Retry Button -->
            <button onclick="restartTest()" class="px-8 py-3.5 rounded-xl bg-gradient-to-r from-indigo-600 to-violet-600 hover:from-indigo-500 hover:to-violet-500 text-white font-bold text-sm shadow-lg shadow-indigo-600/30 hover:scale-[1.02] active:scale-[0.98] transition-all inline-flex items-center gap-2">
                <i class="fa-solid fa-rotate-right"></i>
                <span>Try Again</span>
            </button>
            <br/>
            <br/>
            <br/>
            <p><a href="<?= base_url('game') ?>">Back to Game Center</a></p>
        </div>

        <!-- DETAILED REVIEW SECTION (STACKED BELOW TOP SCORE) -->
        <div class="space-y-6 w-full">
            <div class="flex items-center gap-3 border-b border-slate-800 pb-3">
                <div class="w-8 h-8 rounded-lg bg-indigo-500/20 text-indigo-400 flex items-center justify-center font-bold">
                    <i class="fa-solid fa-list-check"></i>
                </div>
                <div>
                    <h3 class="text-lg font-bold text-white">Detailed Answer Breakdown</h3>
                    <p class="text-xs text-slate-400">Review correct inputs (green) and incorrect inputs (red) against Scrum Guide standard terms.</p>
                </div>
            </div>

            <div id="detailedReviewContainer" class="space-y-6 w-full">
                <!-- Dynamic breakdown injected via JS -->
            </div>
        </div>
    </section>

</main>

<!-- Confirmation Modal for Early Submission -->
<div id="confirmModal" class="fixed inset-0 bg-slate-950/80 backdrop-blur-sm z-50 hidden flex items-center justify-center p-4">
    <div class="glass-card rounded-2xl p-6 max-w-md w-full border border-slate-800 text-center shadow-2xl">
        <div class="w-12 h-12 rounded-full bg-amber-500/20 text-amber-400 flex items-center justify-center text-xl font-bold mx-auto mb-4">
            <i class="fa-solid fa-triangle-exclamation"></i>
        </div>
        <h3 class="text-lg font-bold text-white mb-2">Submit Your Test?</h3>
        <p id="modalMessage" class="text-sm text-slate-300 mb-6">You still have unfilled questions. Are you sure you want to finish now?</p>
        <div class="flex gap-3 justify-center">
            <button onclick="closeModal()" class="px-5 py-2.5 rounded-xl bg-slate-800 hover:bg-slate-700 text-slate-300 font-semibold text-sm transition-all">
                Keep Editing
            </button>
            <button onclick="submitTest(); closeModal();" class="px-5 py-2.5 rounded-xl bg-emerald-600 hover:bg-emerald-500 text-white font-bold text-sm shadow-lg shadow-emerald-600/30 transition-all">
                Yes, Submit Test
            </button>
        </div>
    </div>
</div>

<!-- Footer -->
<footer class="w-full border-t border-slate-800/80 py-4 mt-auto">
    <div class="max-w-5xl mx-auto px-4 text-center text-xs text-slate-500">
        Scrum Test Game &bull; Scrum Guide 2020 Knowledge Check
    </div>
</footer>

<script>
    // --- APP STATE & CANONICAL DATA ---
    const TOTAL_TIME_SECONDS = 180; // 3 minutes max
    let timeRemaining = TOTAL_TIME_SECONDS;
    let timerInterval = null;
    let soundEnabled = true;
    let audioCtx = null;

    /*
     * STRICT CANONICAL DATA MATRIX
     * Single strict word-by-word standard options for exact matching (case-insensitive).
     */
    const CANONICAL_SCRUM = {
        q1_pillars: [
            { id: 'transparency', canonical: 'Transparency', exactWords: ['transparency'] },
            { id: 'inspection', canonical: 'Inspection', exactWords: ['inspection'] },
            { id: 'adaptation', canonical: 'Adaptation', exactWords: ['adaptation'] }
        ],
        q2_values: [
            { id: 'commitment', canonical: 'Commitment', exactWords: ['commitment'] },
            { id: 'focus', canonical: 'Focus', exactWords: ['focus'] },
            { id: 'openness', canonical: 'Openness', exactWords: ['openness'] },
            { id: 'respect', canonical: 'Respect', exactWords: ['respect'] },
            { id: 'courage', canonical: 'Courage', exactWords: ['courage'] }
        ],
        q3_accountabilities: [
            { id: 'developers', canonical: 'Developers', exactWords: ['developers'] },
            { id: 'product_owner', canonical: 'Product Owner', exactWords: ['product owner'] },
            { id: 'scrum_master', canonical: 'Scrum Master', exactWords: ['scrum master'] }
        ],
        q4_events: [
            {
                id: 'sprint',
                nameCanonical: 'Sprint',
                nameExact: ['sprint', 'the sprint'],
                whoCanonical: 'Scrum Team',
                whoExact: ['scrum team', 'the scrum team', 'developers, product owner, scrum master', 'product owner, scrum master, developers'],
                timeCanonical: '4W / 1MO',
                timeExact: ['4w', '4 w', '1mo', '1 mo']
            },
            {
                id: 'sprint_planning',
                nameCanonical: 'Sprint Planning',
                nameExact: ['sprint planning'],
                whoCanonical: 'Scrum Team',
                whoExact: ['scrum team', 'the scrum team', 'developers, product owner, scrum master', 'product owner, scrum master, developers'],
                timeCanonical: '8 hours',
                timeExact: ['8 h', '8h']
            },
            {
                id: 'daily_scrum',
                nameCanonical: 'Daily Scrum',
                nameExact: ['daily scrum'],
                whoCanonical: 'Developers',
                whoExact: ['developers'],
                timeCanonical: '15 minutes',
                timeExact: ['15 m', '15m']
            },
            {
                id: 'sprint_review',
                nameCanonical: 'Sprint Review',
                nameExact: ['sprint review'],
                whoCanonical: 'Scrum Team and Stakeholders',
                whoExact: [
                    'scrum team and stakeholders',
                    'scrum team & stakeholders',
                    'scrum team, stakeholders',
                    'stakeholders and scrum team'
                ],
                timeCanonical: '4 hours',
                timeExact: ['4 h', '4h']
            },
            {
                id: 'sprint_retrospective',
                nameCanonical: 'Sprint Retrospective',
                nameExact: ['sprint retrospective', 'sprint retro'],
                whoCanonical: 'Scrum Team',
                whoExact: ['scrum team', 'the scrum team', 'developers, product owner, scrum master', 'product owner, scrum master, developers'],
                timeCanonical: '3 hours',
                timeExact: ['3 h', '3h']
            }
        ],
        q5_artifacts: [
            {
                id: 'pb',
                artifactCanonical: 'Product Backlog',
                artifactExact: ['product backlog'],
                commitmentCanonical: 'Product Goal',
                commitmentExact: ['product goal']
            },
            {
                id: 'sb',
                artifactCanonical: 'Sprint Backlog',
                artifactExact: ['sprint backlog'],
                commitmentCanonical: 'Sprint Goal',
                commitmentExact: ['sprint goal']
            },
            {
                id: 'inc',
                artifactCanonical: 'Increment',
                artifactExact: ['increment', 'increments'],
                commitmentCanonical: 'Definition of Done',
                commitmentExact: ['definition of done', 'dod']
            }
        ]
    };

    // Sound FX generator
    function playBeep(freq = 440, type = 'sine', duration = 0.1, vol = 0.1) {
        if (!soundEnabled) return;
        try {
            if (!audioCtx) audioCtx = new (window.AudioContext || window.webkitAudioContext)();
            if (audioCtx.state === 'suspended') audioCtx.resume();

            const osc = audioCtx.createOscillator();
            const gain = audioCtx.createGain();
            osc.type = type;
            osc.frequency.value = freq;
            gain.gain.setValueAtTime(vol, audioCtx.currentTime);
            gain.gain.exponentialRampToValueAtTime(0.001, audioCtx.currentTime + duration);
            osc.connect(gain);
            gain.connect(audioCtx.destination);
            osc.start();
            osc.stop(audioCtx.currentTime + duration);
        } catch (e) {}
    }

    function toggleAudio() {
        soundEnabled = !soundEnabled;
        const icon = document.getElementById('soundIcon');
        if (soundEnabled) {
            icon.className = 'fa-solid fa-volume-high text-sm';
            playBeep(600, 'sine', 0.1, 0.1);
        } else {
            icon.className = 'fa-solid fa-volume-xmark text-sm text-rose-400';
        }
    }

    function showPage(pageId) {
        document.getElementById('landingPage').classList.add('hidden');
        document.getElementById('gamePage').classList.add('hidden');
        document.getElementById('resultsPage').classList.add('hidden');

        const target = document.getElementById(pageId);
        target.classList.remove('hidden');
        target.classList.add('flex');
        window.scrollTo({ top: 0, behavior: 'smooth' });
    }

    function goToLandingPage() {
        if (timerInterval) {
            clearInterval(timerInterval);
            timerInterval = null;
        }
        showPage('landingPage');
    }

    function updateAnsweredCount() {
        const inputs = document.querySelectorAll('#scrumTestForm input[type="text"]');
        let filled = 0;
        inputs.forEach(inp => {
            if (inp.value.trim().length > 0) filled++;
        });
        document.getElementById('answeredCount').textContent = filled;
    }

    document.addEventListener('DOMContentLoaded', () => {
        const inputs = document.querySelectorAll('#scrumTestForm input[type="text"]');
        inputs.forEach(input => {
            input.addEventListener('input', updateAnsweredCount);
        });
        updateAnsweredCount();
    });

    // --- GAME TIMER LOGIC ---
    function startTest() {
        const inputs = document.querySelectorAll('#scrumTestForm input[type="text"]');
        inputs.forEach(inp => {
            inp.value = '';
        });
        updateAnsweredCount();

        timeRemaining = TOTAL_TIME_SECONDS;
        updateTimerUI();

        showPage('gamePage');
        playBeep(523.25, 'sine', 0.15, 0.15);

        if (timerInterval) clearInterval(timerInterval);

        // Start 3-minute timer immediately
        timerInterval = setInterval(() => {
            timeRemaining--;
            updateTimerUI();

            if (timeRemaining <= 10 && timeRemaining > 0) {
                playBeep(880, 'square', 0.05, 0.05);
            }

            if (timeRemaining <= 0) {
                clearInterval(timerInterval);
                timerInterval = null;
                playBeep(220, 'sawtooth', 0.4, 0.2);
                submitTest(true);
            }
        }, 1000);
    }

    function updateTimerUI() {
        const mins = Math.floor(timeRemaining / 60);
        const secs = timeRemaining % 60;
        const displayStr = `${mins.toString().padStart(2, '0')}:${secs.toString().padStart(2, '0')}`;
        const timerDisplay = document.getElementById('timerDisplay');
        timerDisplay.textContent = displayStr;

        const pct = (timeRemaining / TOTAL_TIME_SECONDS) * 100;
        const bar = document.getElementById('timerBar');
        bar.style.width = `${pct}%`;

        const timerIconBox = document.getElementById('timerIconBox');

        if (timeRemaining <= 30) {
            timerDisplay.classList.add('text-rose-400', 'animate-pulse-fast');
            bar.className = 'h-full bg-rose-500 transition-all duration-1000 ease-linear w-full';
            timerIconBox.className = 'w-10 h-10 rounded-xl bg-rose-500/20 text-rose-400 flex items-center justify-center text-lg font-bold animate-bounce-short';
        } else {
            timerDisplay.classList.remove('text-rose-400', 'animate-pulse-fast');
            bar.className = 'h-full bg-gradient-to-r from-indigo-500 via-violet-500 to-emerald-400 transition-all duration-1000 ease-linear w-full';
            timerIconBox.className = 'w-10 h-10 rounded-xl bg-indigo-500/20 text-indigo-400 flex items-center justify-center text-lg font-bold';
        }
    }

    function confirmSubmitEarly() {
        const inputs = document.querySelectorAll('#scrumTestForm input[type="text"]');
        let emptyCount = 0;
        inputs.forEach(inp => {
            if (!inp.value.trim()) emptyCount++;
        });

        if (emptyCount > 0) {
            document.getElementById('modalMessage').textContent = `You still have ${emptyCount} unfilled box${emptyCount > 1 ? 'es' : ''}. Are you sure you want to finish now?`;
            document.getElementById('confirmModal').classList.remove('hidden');
        } else {
            submitTest();
        }
    }

    function closeModal() {
        document.getElementById('confirmModal').classList.add('hidden');
    }

    // --- STRICT EXACT WORD & CASE-INSENSITIVE MATCHING ---
    function normalizeInput(str) {
        if (!str) return '';
        return str.trim().toLowerCase().replace(/\s+/g, ' ');
    }

    function checkExactMatch(userInput, validExactArray) {
        const normalizedUser = normalizeInput(userInput);
        if (!normalizedUser) return false;

        return validExactArray.some(item => normalizeInput(item) === normalizedUser);
    }

    // --- SUBMISSION & SCORING EVALUATION ---
    function submitTest(timeExpired = false) {
        if (timerInterval) {
            clearInterval(timerInterval);
            timerInterval = null;
        }

        const timeUsedSeconds = TOTAL_TIME_SECONDS - timeRemaining;
        let totalPoints = 0;
        const maxPoints = 32;

        // Question 1: Pillars (3 points, any order, exact match, no duplicates)
        const q1Inputs = [
            document.querySelector('input[data-q="q1"][data-idx="0"]').value,
            document.querySelector('input[data-q="q1"][data-idx="1"]').value,
            document.querySelector('input[data-q="q1"][data-idx="2"]').value
        ];

        let availablePillars = [...CANONICAL_SCRUM.q1_pillars];
        const q1Results = q1Inputs.map(userVal => {
            const matchIdx = availablePillars.findIndex(p => checkExactMatch(userVal, p.exactWords));
            if (matchIdx !== -1) {
                const matchedItem = availablePillars[matchIdx];
                availablePillars.splice(matchIdx, 1); // remove to prevent duplicate scoring
                totalPoints++;
                return { value: userVal, isCorrect: true, canonical: matchedItem.canonical };
            }
            return { value: userVal, isCorrect: false, canonical: null };
        });

        // Question 2: Values (5 points, any order, exact match, no duplicates)
        const q2Inputs = [
            document.querySelector('input[data-q="q2"][data-idx="0"]').value,
            document.querySelector('input[data-q="q2"][data-idx="1"]').value,
            document.querySelector('input[data-q="q2"][data-idx="2"]').value,
            document.querySelector('input[data-q="q2"][data-idx="3"]').value,
            document.querySelector('input[data-q="q2"][data-idx="4"]').value
        ];

        let availableValues = [...CANONICAL_SCRUM.q2_values];
        const q2Results = q2Inputs.map(userVal => {
            const matchIdx = availableValues.findIndex(v => checkExactMatch(userVal, v.exactWords));
            if (matchIdx !== -1) {
                const matchedItem = availableValues[matchIdx];
                availableValues.splice(matchIdx, 1);
                totalPoints++;
                return { value: userVal, isCorrect: true, canonical: matchedItem.canonical };
            }
            return { value: userVal, isCorrect: false, canonical: null };
        });

        // Question 3: Accountabilities (3 points, any order, exact match, no duplicates)
        const q3Inputs = [
            document.querySelector('input[data-q="q3"][data-idx="0"]').value,
            document.querySelector('input[data-q="q3"][data-idx="1"]').value,
            document.querySelector('input[data-q="q3"][data-idx="2"]').value
        ];

        let availableAccountabilities = [...CANONICAL_SCRUM.q3_accountabilities];
        const q3Results = q3Inputs.map(userVal => {
            const matchIdx = availableAccountabilities.findIndex(a => checkExactMatch(userVal, a.exactWords));
            if (matchIdx !== -1) {
                const matchedItem = availableAccountabilities[matchIdx];
                availableAccountabilities.splice(matchIdx, 1);
                totalPoints++;
                return { value: userVal, isCorrect: true, canonical: matchedItem.canonical };
            }
            return { value: userVal, isCorrect: false, canonical: null };
        });

        // Question 4: Events Table (15 points: 5 rows * 3 cols; rows can be in any order)
        const q4Rows = [];
        for (let r = 0; r < 5; r++) {
            q4Rows.push({
                event: document.querySelector(`input[data-q="q4"][data-row="${r}"][data-col="0"]`).value,
                who: document.querySelector(`input[data-q="q4"][data-row="${r}"][data-col="1"]`).value,
                time: document.querySelector(`input[data-q="q4"][data-row="${r}"][data-col="2"]`).value
            });
        }

        let availableEvents = [...CANONICAL_SCRUM.q4_events];
        const q4Results = q4Rows.map((row, idx) => {
            // Find matching canonical event by row's event name input
            let matchedEvIndex = availableEvents.findIndex(e => checkExactMatch(row.event, e.nameExact));
            let targetEvent = null;

            if (matchedEvIndex !== -1) {
                targetEvent = availableEvents[matchedEvIndex];
                availableEvents.splice(matchedEvIndex, 1);
            } else {
                // Fallback reference for grading display
                targetEvent = CANONICAL_SCRUM.q4_events[idx] || CANONICAL_SCRUM.q4_events[0];
            }

            const isEventCorrect = checkExactMatch(row.event, targetEvent.nameExact);
            const isWhoCorrect = checkExactMatch(row.who, targetEvent.whoExact);
            const isTimeCorrect = checkExactMatch(row.time, targetEvent.timeExact);

            if (isEventCorrect) totalPoints++;
            if (isWhoCorrect) totalPoints++;
            if (isTimeCorrect) totalPoints++;

            return {
                userRow: row,
                targetEvent: targetEvent,
                isEventCorrect,
                isWhoCorrect,
                isTimeCorrect
            };
        });

        // Question 5: Artifacts & Commitments (6 points: 3 pairs * 2; pairs in any order)
        const q5Pairs = [];
        for (let p = 0; p < 3; p++) {
            q5Pairs.push({
                artifact: document.querySelector(`input[data-q="q5"][data-pair="${p}"][data-field="artifact"]`).value,
                commitment: document.querySelector(`input[data-q="q5"][data-pair="${p}"][data-field="commitment"]`).value
            });
        }

        let availableArtifacts = [...CANONICAL_SCRUM.q5_artifacts];
        const q5Results = q5Pairs.map((pair, idx) => {
            let matchedPairIdx = availableArtifacts.findIndex(a =>
                checkExactMatch(pair.artifact, a.artifactExact) || checkExactMatch(pair.commitment, a.commitmentExact)
            );

            let targetPair = null;
            if (matchedPairIdx !== -1) {
                targetPair = availableArtifacts[matchedPairIdx];
                availableArtifacts.splice(matchedPairIdx, 1);
            } else {
                targetPair = CANONICAL_SCRUM.q5_artifacts[idx] || CANONICAL_SCRUM.q5_artifacts[0];
            }

            const isArtifactCorrect = checkExactMatch(pair.artifact, targetPair.artifactExact);
            const isCommitmentCorrect = checkExactMatch(pair.commitment, targetPair.commitmentExact);

            if (isArtifactCorrect) totalPoints++;
            if (isCommitmentCorrect) totalPoints++;

            return {
                userPair: pair,
                targetPair: targetPair,
                isArtifactCorrect,
                isCommitmentCorrect
            };
        });

        // Render updated UI
        renderResultsPage({
            totalPoints,
            maxPoints,
            timeUsedSeconds,
            q1Results,
            q2Results,
            q3Results,
            q4Results,
            q5Results
        });
    }

    // --- RESULTS RENDERER (TOP-FIRST SCORE & STACKED DETAILS) ---
    function renderResultsPage(data) {
        const scorePct = Math.round((data.totalPoints / data.maxPoints) * 100);

        const ring = document.getElementById('scoreSvgRing');
        ring.setAttribute('stroke-dasharray', `${scorePct}, 100`);

        document.getElementById('scorePercent').textContent = `${scorePct}%`;
        document.getElementById('scoreFraction').textContent = `${data.totalPoints} / ${data.maxPoints} Points`;

        const minsUsed = Math.floor(data.timeUsedSeconds / 60);
        const secsUsed = data.timeUsedSeconds % 60;
        document.getElementById('timeUsedText').textContent = `${minsUsed}:${secsUsed.toString().padStart(2, '0')}`;

        document.getElementById('correctCountText').textContent = data.totalPoints;
        document.getElementById('incorrectCountText').textContent = data.maxPoints - data.totalPoints;
        document.getElementById('accuracyText').textContent = `${scorePct}%`;

        const statusBadge = document.getElementById('statusBadge');
        const resultTitle = document.getElementById('resultTitle');
        const resultSummaryText = document.getElementById('resultSummaryText');
        const bgGlow = document.getElementById('resultBgGlow');

        if (scorePct >= 90) {
            statusBadge.className = 'inline-block px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-wider bg-emerald-500/20 text-emerald-300 border border-emerald-500/30 mb-3';
            statusBadge.innerHTML = '<i class="fa-solid fa-award mr-1"></i> Certified Scrum Master Level';
            resultTitle.textContent = 'Mastery Achieved!';
            resultSummaryText.textContent = 'Excellent! You demonstrated accurate word-for-word knowledge of the official Scrum Guide (2020) framework.';
            bgGlow.className = 'absolute -top-24 -left-24 w-64 h-64 bg-emerald-600/20 rounded-full blur-3xl pointer-events-none';
            playBeep(880, 'sine', 0.2, 0.2);
        } else if (scorePct >= 70) {
            statusBadge.className = 'inline-block px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-wider bg-indigo-500/20 text-indigo-300 border border-indigo-500/30 mb-3';
            statusBadge.innerHTML = '<i class="fa-solid fa-graduation-cap mr-1"></i> Agile Practitioner';
            resultTitle.textContent = 'Solid Understanding!';
            resultSummaryText.textContent = 'Great effort! You know most of the core terms. Review the exact words for the remaining missed entries below.';
            bgGlow.className = 'absolute -top-24 -left-24 w-64 h-64 bg-indigo-600/20 rounded-full blur-3xl pointer-events-none';
            playBeep(659, 'sine', 0.2, 0.2);
        } else if (scorePct >= 50) {
            statusBadge.className = 'inline-block px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-wider bg-amber-500/20 text-amber-300 border border-amber-500/30 mb-3';
            statusBadge.innerHTML = '<i class="fa-solid fa-user-gear mr-1"></i> Scrum Practitioner';
            resultTitle.textContent = 'Fair Attempt!';
            resultSummaryText.textContent = 'You have good foundational knowledge. Remember that plural forms like "Developers" and official timeboxes are required.';
            bgGlow.className = 'absolute -top-24 -left-24 w-64 h-64 bg-amber-600/20 rounded-full blur-3xl pointer-events-none';
        } else {
            statusBadge.className = 'inline-block px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-wider bg-rose-500/20 text-rose-300 border border-rose-500/30 mb-3';
            statusBadge.innerHTML = '<i class="fa-solid fa-book-open mr-1"></i> Revision Needed';
            resultTitle.textContent = 'Keep Studying!';
            resultSummaryText.textContent = 'Review the official canonical Scrum terminology listed below and try the 3-minute sprint again!';
            bgGlow.className = 'absolute -top-24 -left-24 w-64 h-64 bg-rose-600/20 rounded-full blur-3xl pointer-events-none';
        }

        // Render Stacked Question Review Cards
        const reviewContainer = document.getElementById('detailedReviewContainer');
        reviewContainer.innerHTML = '';

        reviewContainer.appendChild(createListReviewCard(
            'Question 1: Scrum Pillars',
            data.q1Results,
            CANONICAL_SCRUM.q1_pillars.map(p => p.canonical)
        ));

        reviewContainer.appendChild(createListReviewCard(
            'Question 2: Scrum Values',
            data.q2Results,
            CANONICAL_SCRUM.q2_values.map(v => v.canonical)
        ));

        reviewContainer.appendChild(createListReviewCard(
            'Question 3: Scrum Accountabilities',
            data.q3Results,
            CANONICAL_SCRUM.q3_accountabilities.map(a => a.canonical)
        ));

        reviewContainer.appendChild(createTableReviewCard(data.q4Results));

        reviewContainer.appendChild(createArtifactsReviewCard(data.q5Results));

        showPage('resultsPage');
    }

    // Helper Card Generator for List Questions (Q1, Q2, Q3)
    function createListReviewCard(title, results, canonicalList) {
        const card = document.createElement('div');
        card.className = 'glass-card rounded-2xl p-6 border border-slate-800 w-full';

        let itemsHtml = results.map((res, i) => {
            const valText = res.value.trim() || '<i>(Unanswered)</i>';
            if (res.isCorrect) {
                return `
            <div class="p-3.5 rounded-xl bg-emerald-950/40 border border-emerald-500/30 text-emerald-200 text-sm flex items-center justify-between">
              <div>
                <span class="text-[10px] uppercase font-bold text-emerald-400 block tracking-wider">Your Input ${i+1}</span>
                <span class="font-semibold text-white">${escapeHtml(valText)}</span>
              </div>
              <i class="fa-solid fa-circle-check text-emerald-400 text-lg"></i>
            </div>
          `;
            } else {
                return `
            <div class="p-3.5 rounded-xl bg-rose-950/40 border border-rose-500/30 text-rose-200 text-sm flex items-center justify-between">
              <div>
                <span class="text-[10px] uppercase font-bold text-rose-400 block tracking-wider">Your Input ${i+1}</span>
                <span class="font-semibold line-through text-rose-300">${escapeHtml(valText)}</span>
              </div>
              <i class="fa-solid fa-circle-xmark text-rose-400 text-lg"></i>
            </div>
          `;
            }
        }).join('');

        card.innerHTML = `
        <h4 class="text-base font-bold text-white mb-4 flex items-center gap-2">
          <i class="fa-solid fa-chevron-right text-indigo-400 text-xs"></i>
          ${title}
        </h4>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-3 mb-4">
          ${itemsHtml}
        </div>
        <div class="p-3.5 rounded-xl bg-slate-900/90 border border-slate-800 text-xs text-slate-300 flex items-start gap-2">
          <i class="fa-solid fa-lightbulb text-amber-400 mt-0.5"></i>
          <div>
            <span class="font-bold text-white uppercase tracking-wider block mb-0.5">Canonical Standard Terms:</span>
            <span class="text-indigo-200 font-medium">${canonicalList.join(' &bull; ')}</span>
          </div>
        </div>
      `;
        return card;
    }

    // Helper Card Generator for Q4 Events Table
    function createTableReviewCard(results) {
        const card = document.createElement('div');
        card.className = 'glass-card rounded-2xl p-6 border border-slate-800 w-full';

        let rowsHtml = results.map((res, idx) => {
            const ev = res.userRow.event || '(Empty)';
            const who = res.userRow.who || '(Empty)';
            const time = res.userRow.time || '(Empty)';

            const target = res.targetEvent;

            return `
          <tr class="border-b border-slate-800/80 hover:bg-slate-900/30 transition-colors">
            <td class="p-3.5">
              <div class="text-sm font-medium ${res.isEventCorrect ? 'text-emerald-300' : 'text-rose-300'}">
                ${escapeHtml(ev)}
                ${res.isEventCorrect ? '<i class="fa-solid fa-check ml-1.5 text-emerald-400"></i>' : '<i class="fa-solid fa-xmark ml-1.5 text-rose-400"></i>'}
              </div>
              <div class="text-[11px] text-slate-400 mt-1">Standard: <strong class="text-indigo-300 font-semibold">${target.nameCanonical}</strong></div>
            </td>
            <td class="p-3.5">
              <div class="text-sm font-medium ${res.isWhoCorrect ? 'text-emerald-300' : 'text-rose-300'}">
                ${escapeHtml(who)}
                ${res.isWhoCorrect ? '<i class="fa-solid fa-check ml-1.5 text-emerald-400"></i>' : '<i class="fa-solid fa-xmark ml-1.5 text-rose-400"></i>'}
              </div>
              <div class="text-[11px] text-slate-400 mt-1">Standard: <strong class="text-indigo-300 font-semibold">${target.whoCanonical}</strong></div>
            </td>
            <td class="p-3.5">
              <div class="text-sm font-medium ${res.isTimeCorrect ? 'text-emerald-300' : 'text-rose-300'}">
                ${escapeHtml(time)}
                ${res.isTimeCorrect ? '<i class="fa-solid fa-check ml-1.5 text-emerald-400"></i>' : '<i class="fa-solid fa-xmark ml-1.5 text-rose-400"></i>'}
              </div>
              <div class="text-[11px] text-slate-400 mt-1">Standard: <strong class="text-indigo-300 font-semibold">${target.timeCanonical}</strong></div>
            </td>
          </tr>
        `;
        }).join('');

        card.innerHTML = `
        <h4 class="text-base font-bold text-white mb-4 flex items-center gap-2">
          <i class="fa-solid fa-chevron-right text-indigo-400 text-xs"></i>
          Question 4: Scrum Events Table
        </h4>
        <div class="overflow-x-auto rounded-xl border border-slate-800">
          <table class="w-full text-left text-sm text-slate-200 min-w-[620px]">
            <thead class="bg-slate-900 text-xs uppercase text-slate-400 font-bold border-b border-slate-800">
              <tr>
                <th class="p-3.5">Event Name</th>
                <th class="p-3.5">Participants</th>
                <th class="p-3.5">Timebox</th>
              </tr>
            </thead>
            <tbody class="divide-y divide-slate-800 bg-slate-900/40">
              ${rowsHtml}
            </tbody>
          </table>
        </div>
      `;
        return card;
    }

    // Helper Card Generator for Q5 Artifacts & Commitments
    function createArtifactsReviewCard(results) {
        const card = document.createElement('div');
        card.className = 'glass-card rounded-2xl p-6 border border-slate-800 w-full';

        let pairsHtml = results.map((res, i) => {
            const art = res.userPair.artifact || '(Empty)';
            const com = res.userPair.commitment || '(Empty)';
            const target = res.targetPair;

            return `
          <div class="p-4 rounded-xl bg-slate-900/60 border border-slate-800 grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
              <div class="text-[10px] uppercase font-bold text-slate-400 mb-1 tracking-wider">Artifact ${i+1} Input</div>
              <div class="text-sm font-medium ${res.isArtifactCorrect ? 'text-emerald-300' : 'text-rose-300'}">
                ${escapeHtml(art)}
                ${res.isArtifactCorrect ? '<i class="fa-solid fa-check ml-1.5 text-emerald-400"></i>' : '<i class="fa-solid fa-xmark ml-1.5 text-rose-400"></i>'}
              </div>
              <div class="text-[11px] text-slate-400 mt-1">Standard: <strong class="text-indigo-300 font-semibold">${target.artifactCanonical}</strong></div>
            </div>

            <div>
              <div class="text-[10px] uppercase font-bold text-slate-400 mb-1 tracking-wider">Commitment ${i+1} Input</div>
              <div class="text-sm font-medium ${res.isCommitmentCorrect ? 'text-emerald-300' : 'text-rose-300'}">
                ${escapeHtml(com)}
                ${res.isCommitmentCorrect ? '<i class="fa-solid fa-check ml-1.5 text-emerald-400"></i>' : '<i class="fa-solid fa-xmark ml-1.5 text-rose-400"></i>'}
              </div>
              <div class="text-[11px] text-slate-400 mt-1">Standard: <strong class="text-indigo-300 font-semibold">${target.commitmentCanonical}</strong></div>
            </div>
          </div>
        `;
        }).join('');

        card.innerHTML = `
        <h4 class="text-base font-bold text-white mb-4 flex items-center gap-2">
          <i class="fa-solid fa-chevron-right text-indigo-400 text-xs"></i>
          Question 5: Artifacts & Commitments
        </h4>
        <div class="space-y-3">
          ${pairsHtml}
        </div>
      `;
        return card;
    }

    function restartTest() {
        startTest();
    }

    function escapeHtml(str) {
        if (!str) return '';
        return str.replace(/&/g, "&amp;").replace(/</g, "&lt;").replace(/>/g, "&gt;").replace(/"/g, "&quot;").replace(/'/g, "&#039;");
    }
</script>
</body>
</html>