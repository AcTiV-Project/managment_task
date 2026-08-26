<!DOCTYPE html>
    <html lang="en">
    <head>
        @vite([
            'resources/css/app.css',
            'resources/css/reset.css'
        ])

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>TaskFlow | Dashboard</title>
    </head>

    <body>
        <div class="dashboard">

            <!-- SIDEBAR -->
            <aside class="sidebar">

                <div class="sidebar__logo">
                    <span class="sidebar__logo-icon">✓</span>
                    <span>TaskFlow</span>
                </div>

                <nav class="sidebar__nav">

                    <a href="#" class="sidebar__link sidebar__link--active">
                        <span>▣</span>
                        Dashboard
                    </a>

                    <a href="#" class="sidebar__link">
                        <span>✓</span>
                        My Tasks
                    </a>

                    <a href="{{ route('task') }}" class="sidebar__link">
                        <span>＋</span>
                        New Task
                    </a>

                </nav>

                <div class="sidebar__bottom">

                    <a href="#" class="sidebar__link">
                        <span>⚙</span>
                        Settings
                    </a>

                    <form action="{{ route('logout') }}" method="POST">
                        @csrf

                        <button type="submit" class="sidebar__logout">
                            <span>⇥</span>
                            Logout
                        </button>
                    </form>

                </div>

            </aside>


            <!-- MAIN -->
            <main class="main">
                <!-- TOPBAR -->
                <header class="topbar">

                    <div class="topbar__title">
                        <span class="topbar__mobile-menu">☰</span>
                        Dashboard
                    </div>

                    <div class="user">

                        <div class="user__avatar">
                            J
                        </div>

                        <div class="user__info">
                            <span class="user__name">{{ $user->name }}</span>
                            <span class="user__role">{{ $user->email }}</span>
                        </div>

                    </div>

                </header>


                <!-- CONTENT -->
                <section class="content">

                    <div class="welcome">

                        <div>
                            <h1>Good morning, {{ $user->name }} 👋</h1>

                            <p>
                                Here's what's happening with your tasks today.
                            </p>
                        </div>

                        <a href="{{ route('task') }}" class="button button--primary">
                            + New Task
                        </a>

                    </div>


                    <!-- STATISTICS -->
                    <section class="stats">

                        <article class="stat-card">

                            <div class="stat-card__icon">
                                ✓
                            </div>

                            <div>
                                <p>Total Tasks</p>
                                <h2>12</h2>
                            </div>

                        </article>


                        <article class="stat-card">

                            <div class="stat-card__icon stat-card__icon--pending">
                                ◷
                            </div>

                            <div>
                                <p>Pending</p>
                                <h2>5</h2>
                            </div>

                        </article>


                        <article class="stat-card">

                            <div class="stat-card__icon stat-card__icon--progress">
                                ↻
                            </div>

                            <div>
                                <p>In Progress</p>
                                <h2>3</h2>
                            </div>

                        </article>


                        <article class="stat-card">

                            <div class="stat-card__icon stat-card__icon--completed">
                                ✓
                            </div>

                            <div>
                                <p>Completed</p>
                                <h2>4</h2>
                            </div>

                        </article>

                    </section>


                    <!-- TASKS -->
                    <section class="tasks-section">

                        <div class="section-header">

                            <div>
                                <h2>Recent Tasks</h2>

                                <p>
                                    Keep track of your latest tasks.
                                </p>
                            </div>

                            <a href="#" class="view-all">
                                View all
                            </a>

                        </div>


                        <div class="tasks">

                            <!-- TASK -->
                            <article class="task">

                                <div class="task__check">
                                    <input type="checkbox">
                                </div>

                                <div class="task__content">

                                    <h3>
                                        Finish Laravel project
                                    </h3>

                                    <p>
                                        Complete the frontend of the task manager.
                                    </p>

                                    <span class="task__date">
                                        Today
                                    </span>

                                </div>

                                <span class="task__status task__status--progress">
                                    In Progress
                                </span>

                            </article>


                            <!-- TASK -->
                            <article class="task">

                                <div class="task__check">
                                    <input type="checkbox">
                                </div>

                                <div class="task__content">

                                    <h3>
                                        Create portfolio
                                    </h3>

                                    <p>
                                        Add the new Laravel project to portfolio.
                                    </p>

                                    <span class="task__date">
                                        Tomorrow
                                    </span>

                                </div>

                                <span class="task__status task__status--pending">
                                    Pending
                                </span>

                            </article>


                            <!-- TASK -->
                            <article class="task">

                                <div class="task__check">
                                    <input type="checkbox" checked>
                                </div>

                                <div class="task__content">

                                    <h3>
                                        Update documentation
                                    </h3>

                                    <p>
                                        Update the project documentation.
                                    </p>

                                    <span class="task__date">
                                        Aug 17, 2026
                                    </span>

                                </div>

                                <span class="task__status task__status--completed">
                                    Completed
                                </span>

                            </article>

                        </div>
                    </section>
                </section>
            </main>
        </div>
    </body>
</html>