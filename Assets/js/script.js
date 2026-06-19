alert("JS LOADED");

/* ==================================== */
/* GLOBAL */
/* ==================================== */

document.addEventListener("DOMContentLoaded", () => {

    if (typeof lucide !== "undefined") {

        lucide.createIcons();

    }

});

/* ==================================== */
/* LIVE CLOCK */
/* ==================================== */

function updateClock() {

    const clock =
        document.getElementById("live-clock");

    if (!clock) return;

    const now = new Date();

    const hours =
        String(now.getHours()).padStart(2, "0");

    const minutes =
        String(now.getMinutes()).padStart(2, "0");

    const seconds =
        String(now.getSeconds()).padStart(2, "0");

    clock.textContent =
        `${hours}:${minutes}:${seconds}`;

}

setInterval(updateClock, 1000);

updateClock();

/* ==================================== */
/* DARK MODE */
/* ==================================== */

const themeButton =
    document.getElementById("theme-toggle");

if (themeButton) {

    themeButton.addEventListener(
        "click",
        () => {

            document.body.classList.toggle(
                "light-mode"
            );

            themeButton.textContent =
                document.body.classList.contains(
                    "light-mode"
                )
                ? "☀️"
                : "🌙";

        }
    );

}

/* ==================================== */
/* DAILY QUOTE */
/* ==================================== */

const quotes = [

    "Setiap tugas yang selesai adalah langkah menuju masa depan yang lebih baik.",

    "Belajar hari ini adalah investasi masa depan.",

    "Konsistensi mengalahkan motivasi sesaat.",

    "Progress kecil setiap hari menghasilkan hasil besar.",

    "Fokus pada proses, hasil akan mengikuti."

];

document.addEventListener(
    "DOMContentLoaded",
    () => {

        const quote =
            document.getElementById(
                "daily-quote"
            );

        if (!quote) return;

        const random =
            Math.floor(
                Math.random() * quotes.length
            );

        quote.textContent =
            `"${quotes[random]}"`;

    }
);

/* ==================================== */
/* FAQ */
/* ==================================== */

function toggleFaq(button) {

    const answer =
        button.parentElement.querySelector(
            ".faq-answer"
        );

    const icon =
        button.querySelector(
            "[data-lucide]"
        );

    answer.classList.toggle(
        "hidden"
    );

    if (icon) {

        icon.classList.toggle(
            "rotate-180"
        );

    }

}

/* ==================================== */
/* FEATURES */
/* ==================================== */

document.addEventListener(
    "DOMContentLoaded",
    () => {

        const featureCards =
            document.querySelectorAll(
                ".card-hover"
            );

        const observer =
            new IntersectionObserver(

                entries => {

                    entries.forEach(
                        entry => {

                            if (
                                entry.isIntersecting
                            ) {

                                entry.target.classList.add(
                                    "show"
                                );

                            }

                        }
                    );

                },

                {
                    threshold: 0.1
                }

            );

        featureCards.forEach(
            card => {

                card.classList.add(
                    "feature-fade"
                );

                observer.observe(card);

            }
        );

    }
);

/* ==================================== */
/* DASHBOARD */
/* ==================================== */

document.addEventListener(
    "DOMContentLoaded",
    () => {

        initializeDashboard();

    }
);

function initializeDashboard() {

    const addTaskBtn =
        document.getElementById(
            "add-task-btn"
        );

    const cancelTaskBtn =
        document.getElementById(
            "cancel-task"
        );

    const taskFormBox =
        document.getElementById(
            "add-task-form"
        );

    const taskForm =
        document.getElementById(
            "task-form"
        );

    const taskList =
        document.getElementById(
            "task-list"
        );

    const emptyTasks =
        document.getElementById(
            "empty-tasks"
        );

    if (!taskList) return;

    let tasks = [];

    updateTaskState();

    addTaskBtn?.addEventListener(
        "click",
        () => {

            taskFormBox.classList.remove(
                "hidden"
            );

        }
    );

    cancelTaskBtn?.addEventListener(
        "click",
        () => {

            taskFormBox.classList.add(
                "hidden"
            );

        }
    );

    taskForm?.addEventListener(
        "submit",
        e => {

            e.preventDefault();

            const title =
                document.getElementById(
                    "task-title"
                ).value;

            const priority =
                document.getElementById(
                    "task-priority"
                ).value;

            const due =
                document.getElementById(
                    "task-due"
                ).value;

            const xp =
                priority === "high"
                    ? 50
                    : priority === "medium"
                    ? 25
                    : 10;

            tasks.push({

                title,
                priority,
                due,
                xp,
                completed:false

            });

            renderTasks();

            taskForm.reset();

            taskFormBox.classList.add(
                "hidden"
            );

        }
    );

    function renderTasks() {

        taskList.innerHTML = "";

        tasks.forEach(
            (task,index) => {

                const div =
                    document.createElement(
                        "div"
                    );

                div.className =
                    "task-item";

                div.innerHTML = `

                    <div class="task-left">

                        <input
                            type="checkbox"
                            class="task-complete"
                            data-index="${index}"
                        >

                        <div>

                            <p class="${task.completed ? 'task-done':''}">
                                ${task.title}
                            </p>

                            <small class="priority-${task.priority}">
                                +${task.xp} XP
                            </small>

                        </div>

                    </div>

                    <small>
                        ${task.due || '-'}
                    </small>

                `;

                taskList.appendChild(
                    div
                );

            }
        );

        document
            .querySelectorAll(
                ".task-complete"
            )
            .forEach(
                checkbox => {

                    checkbox.addEventListener(
                        "change",
                        function() {

                            const idx =
                                this.dataset.index;

                            tasks[idx].completed =
                                this.checked;

                            renderTasks();

                        }
                    );

                }
            );

        updateTaskState();

    }

    function updateTaskState() {

        if(tasks.length===0){

            emptyTasks.classList.remove(
                "hidden"
            );

        } else {

            emptyTasks.classList.add(
                "hidden"
            );

        }

    }

}

/* ==================================== */
/* LEADERBOARD */
/* ==================================== */

document.addEventListener(
    "DOMContentLoaded",
    () => {

        initializeLeaderboard();

    }
);

function initializeLeaderboard(){

    const leaderboard =
        document.getElementById(
            "leaderboard-list"
        );

    if(!leaderboard) return;

    const heroes = [

        {
            rank:4,
            name:"Ahmad Fauzi",
            xp:7340,
            level:28
        },

        {
            rank:5,
            name:"Siti Nurhaliza",
            xp:6890,
            level:27
        },

        {
            rank:6,
            name:"Rizky Pratama",
            xp:6510,
            level:26
        },

        {
            rank:7,
            name:"Nabila Putri",
            xp:6200,
            level:25
        },

        {
            rank:8,
            name:"Andi Wijaya",
            xp:5980,
            level:24
        },

        {
            rank:9,
            name:"Kevin Saputra",
            xp:5620,
            level:23
        },

        {
            rank:10,
            name:"Putri Maharani",
            xp:5310,
            level:22
        }

    ];

    heroes.forEach(hero => {

        const row =
            document.createElement(
                "div"
            );

        row.className =
            "rank-row";

        row.innerHTML = `

            <div class="col-span-1 font-bold">
                #${hero.rank}
            </div>

            <div class="col-span-5 flex items-center gap-3">

                <div class="hero-avatar">
                    ${hero.name.charAt(0)}
                </div>

                <span>
                    ${hero.name}
                </span>

            </div>

            <div class="col-span-3 text-cyan-400 font-bold">
                ${hero.xp.toLocaleString()} XP
            </div>

            <div class="col-span-3">

                <span class="level-badge">
                    Lv.${hero.level}
                </span>

            </div>

        `;

        leaderboard.appendChild(
            row
        );

    });

}

/* ==================================== */
/* TOURNAMENTS */
/* ==================================== */

document.addEventListener(
    "DOMContentLoaded",
    () => {

        initializeTournament();

    }
);

function initializeTournament(){

    const timer =
        document.getElementById(
            "tournament-timer-1"
        );

    if(!timer) return;

    let totalSeconds =

        (1 * 3600) +
        (24 * 60) +
        30;

    setInterval(() => {

        if(totalSeconds <= 0){

            timer.innerHTML =
                "ENDED";

            return;

        }

        totalSeconds--;

        const hours =
            String(
                Math.floor(
                    totalSeconds / 3600
                )
            ).padStart(2,"0");

        const minutes =
            String(
                Math.floor(
                    (totalSeconds % 3600) / 60
                )
            ).padStart(2,"0");

        const seconds =
            String(
                totalSeconds % 60
            ).padStart(2,"0");

        timer.innerHTML =
            `${hours}:${minutes}:${seconds}`;

    },1000);

}

/* ==================================
   STUDY ROOM PAGE
================================== */

const roomButtons = document.querySelectorAll(
    "#page-study-room button"
);

roomButtons.forEach(button => {

    button.addEventListener("click", () => {

        const roomCard =
            button.closest(".glass");

        if(button.innerText.includes("Enter")){

            button.innerText = "Joined ✓";

            button.classList.remove(
                "btn-primary",
                "btn-secondary"
            );

            button.classList.add(
                "bg-green-500",
                "text-white"
            );

            roomCard.classList.add(
                "room-joined"
            );

            alert("Successfully joined study room!");
        }

        if(button.innerText.includes("Request")){

            alert(
                "Access request sent to teacher."
            );
        }

    });

});

/* Create Room */

const createRoomCard =
document.querySelector(
"#page-study-room .create-room-card"
);

if(createRoomCard){

    createRoomCard.addEventListener(
        "click",
        () => {

            const roomName = prompt(
                "Enter room name:"
            );

            if(roomName){

                alert(
                    `Room "${roomName}" created successfully!`
                );
            }

        }
    );

}

/* ==================================
   POMODORO TIMER
================================== */

const pomoPage = document.querySelector("#page-pomodoro");

if (pomoPage) {

    const timeDisplay =
        document.getElementById("pomo-time");

    const label =
        document.getElementById("pomo-label");

    const ring =
        document.getElementById("pomo-ring");

    const startBtn =
        document.getElementById("pomo-start");

    const pauseBtn =
        document.getElementById("pomo-pause");

    const resetBtn =
        document.getElementById("pomo-reset");

    const modeButtons =
        document.querySelectorAll(".pomo-mode");

    const sessionsEl =
        document.getElementById("pomo-sessions");

    const xpEl =
        document.getElementById("pomo-xp-earned");

    const minutesEl =
        document.getElementById("pomo-total-min");

    let currentMode = "focus";
    let duration = 25 * 60;
    let timeLeft = duration;
    let timer = null;

    let sessions = 0;
    let xp = 0;
    let totalMinutes = 0;

    const circumference = 283;

    function updateDisplay() {

        const min =
            Math.floor(timeLeft / 60);

        const sec =
            timeLeft % 60;

        timeDisplay.textContent =
            `${String(min).padStart(2,"0")}:${String(sec).padStart(2,"0")}`;

        const progress =
            timeLeft / duration;

        ring.style.strokeDashoffset =
            circumference * (1 - progress);
    }

    function startPomodoro() {

        if(timer) return;

        document.body.classList.add(
            "pomodoro-running"
        );

        startBtn.classList.add("hidden");
        pauseBtn.classList.remove("hidden");

        timer = setInterval(() => {

            timeLeft--;

            updateDisplay();

            if(timeLeft <= 0){

                clearInterval(timer);
                timer = null;

                document.body.classList.remove(
                    "pomodoro-running"
                );

                startBtn.classList.remove("hidden");
                pauseBtn.classList.add("hidden");

                sessions++;

                if(currentMode === "focus"){

                    xp += 50;

                    totalMinutes +=
                        duration / 60;
                }

                sessionsEl.textContent =
                    sessions;

                xpEl.textContent =
                    xp;

                minutesEl.textContent =
                    totalMinutes;

                timeDisplay.classList.add(
                    "timer-finished"
                );

                setTimeout(() => {
                    timeDisplay.classList.remove(
                        "timer-finished"
                    );
                },3000);

                alert(
                    "🎉 Session Completed!"
                );

            }

        },1000);
    }

    function pausePomodoro() {

        clearInterval(timer);

        timer = null;

        document.body.classList.remove(
            "pomodoro-running"
        );

        pauseBtn.classList.add("hidden");
        startBtn.classList.remove("hidden");
    }

    function resetPomodoro() {

        pausePomodoro();

        timeLeft = duration;

        updateDisplay();
    }

    startBtn?.addEventListener(
        "click",
        startPomodoro
    );

    pauseBtn?.addEventListener(
        "click",
        pausePomodoro
    );

    resetBtn?.addEventListener(
        "click",
        resetPomodoro
    );

    modeButtons.forEach(btn => {

        btn.addEventListener("click", () => {

            modeButtons.forEach(
                b => b.classList.remove("active")
            );

            btn.classList.add("active");

            currentMode =
                btn.dataset.mode;

            duration =
                parseInt(btn.dataset.time) * 60;

            timeLeft = duration;

            if(currentMode === "focus"){
                label.textContent =
                    "Focus Time";
            }

            if(currentMode === "short"){
                label.textContent =
                    "Short Break";
            }

            if(currentMode === "long"){
                label.textContent =
                    "Long Break";
            }

            resetPomodoro();
        });

    });

    updateDisplay();
}

/* ==================================
   PRICING PAGE
================================== */

const pricingButtons = document.querySelectorAll(
    "#page-pricing button"
);

pricingButtons.forEach(button => {

    button.addEventListener("click", () => {

        const plan = button.closest(".glass")
            ?.querySelector("h3")
            ?.textContent || "Plan";

        if (button.textContent.includes("Get Started")) {

            alert(`Welcome to ${plan}!`);

        }

        else if (button.textContent.includes("Upgrade")) {

            alert(`Redirecting to payment for ${plan}`);

        }

        else if (button.textContent.includes("Contact")) {

            alert(`Sales team will contact you soon!`);

        }

    });

});

/* ==================================
   ABOUT PAGE
================================== */

const teamCards = document.querySelectorAll(
    "#page-about .card-hover"
);

teamCards.forEach(card => {

    card.addEventListener("mouseenter", () => {

        const role = card.querySelector("p");

        if (role) {
            role.style.transform = "scale(1.05)";
        }

    });

    card.addEventListener("mouseleave", () => {

        const role = card.querySelector("p");

        if (role) {
            role.style.transform = "scale(1)";
        }

    });

});

/* Vision & Mission Animation */

const aboutSection = document.querySelector(
    "#page-about .about-section"
);

if (aboutSection) {

    aboutSection.addEventListener("mouseenter", () => {

        aboutSection.style.boxShadow =
            "0 0 40px rgba(0,212,255,.15)";

    });

    aboutSection.addEventListener("mouseleave", () => {

        aboutSection.style.boxShadow = "none";

    });

}

/* ==================================
   LOGIN PAGE
================================== */

const loginForm = document.getElementById("login-form");

if (loginForm) {

    loginForm.addEventListener("submit", (e) => {

        e.preventDefault();

        const email =
            document.getElementById("login-email");

        const password =
            document.getElementById("login-pass");

        let valid = true;

        if (!email.value.trim()) {
            email.classList.add("auth-error");
            valid = false;
        } else {
            email.classList.remove("auth-error");
            email.classList.add("auth-success");
        }

        if (!password.value.trim()) {
            password.classList.add("auth-error");
            valid = false;
        } else {
            password.classList.remove("auth-error");
            password.classList.add("auth-success");
        }

        if (valid) {

            alert(
                `Welcome back, Hero!\n\nEmail: ${email.value}`
            );

            // nanti bisa redirect:
            // window.location.href = "dashboard.html";

        }

    });

}

/* ==================================
   PASSWORD TOGGLE
================================== */

document
    .querySelectorAll(".toggle-pass")
    .forEach(button => {

        button.addEventListener("click", () => {

            const input =
                button.parentElement.querySelector(
                    "input"
                );

            if (!input) return;

            input.type =
                input.type === "password"
                    ? "text"
                    : "password";

            button.innerHTML =
                input.type === "password"
                    ? '<i data-lucide="eye" class="w-4 h-4"></i>'
                    : '<i data-lucide="eye-off" class="w-4 h-4"></i>';

            if (window.lucide) {
                lucide.createIcons();
            }

        });

    });

/* ========================================
   LIVE CLOCK
======================================== */

const liveClock = document.getElementById("live-clock");

if (liveClock) {

    function updateClock() {

        const now = new Date();

        const h = String(
            now.getHours()
        ).padStart(2, "0");

        const m = String(
            now.getMinutes()
        ).padStart(2, "0");

        const s = String(
            now.getSeconds()
        ).padStart(2, "0");

        liveClock.textContent =
            `${h}:${m}:${s}`;
    }

    updateClock();

    setInterval(updateClock, 1000);
}

if (typeof lucide !== "undefined") {
    lucide.createIcons();
}

/* ==================================
   TOURNAMENTS PAGE
================================== */

document.addEventListener("DOMContentLoaded", () => {

    /* ===== LIVE TOURNAMENT TIMER ===== */

    const timerElement =
        document.getElementById("tournament-timer-1");

    if (timerElement) {

        let seconds =
            (1 * 3600) +
            (24 * 60) +
            30;

        const updateTournamentTimer = () => {

            const hrs =
                String(Math.floor(seconds / 3600))
                .padStart(2, "0");

            const mins =
                String(Math.floor((seconds % 3600) / 60))
                .padStart(2, "0");

            const secs =
                String(seconds % 60)
                .padStart(2, "0");

            timerElement.textContent =
                `${hrs}:${mins}:${secs}`;

            if (seconds > 0) {
                seconds--;
            }
        };

        updateTournamentTimer();

        setInterval(updateTournamentTimer, 1000);
    }

    /* ===== JOIN TOURNAMENT ===== */

    const joinButtons =
        document.querySelectorAll(
            "#page-tournaments .btn-primary, #page-tournaments .btn-secondary"
        );

    joinButtons.forEach(button => {

        button.addEventListener("click", () => {

            showTournamentAchievement(
                "Tournament Registered!"
            );

        });

    });

});


/* ==================================
   ACHIEVEMENT POPUP
================================== */

function showTournamentAchievement(text) {

    const notif =
        document.getElementById(
            "achievement-notif"
        );

    const label =
        document.getElementById(
            "achievement-text"
        );

    if (!notif || !label) return;

    label.textContent = text;

    notif.classList.remove("hidden");

    setTimeout(() => {

        notif.classList.add("hidden");

    }, 3000);
}

/* ========================================
   MOBILE NAVIGATION
======================================== */

const mobileNav =
    document.getElementById("mobile-nav");

const mobileOpen =
    document.getElementById("mobile-menu-btn");

const mobileClose =
    document.getElementById("mobile-close");

if (mobileOpen && mobileNav) {

    mobileOpen.addEventListener("click", () => {

        mobileNav.classList.add("active");

    });

}

if (mobileClose && mobileNav) {

    mobileClose.addEventListener("click", () => {

        mobileNav.classList.remove("active");

    });

}

/* ========================================
   HEADER SCROLL EFFECT
======================================== */

const header =
    document.querySelector("header");

window.addEventListener("scroll", () => {

    if (!header) return;

    if (window.scrollY > 20) {

        header.classList.add("scrolled");

    } else {

        header.classList.remove("scrolled");

    }

});

/* ========================================
   ACHIEVEMENT NOTIFICATION
======================================== */

function showAchievement(text) {

    const notif =
        document.getElementById("achievement-notif");

    const content =
        document.getElementById("achievement-text");

    if (!notif || !content) return;

    content.textContent = text;

    notif.classList.remove("hidden");

    setTimeout(() => {

        notif.classList.add("hidden");

    }, 4000);

}

if (window.lucide) {
    lucide.createIcons();
}