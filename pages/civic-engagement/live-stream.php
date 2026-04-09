c<?php
/**
 * Bamenda City Council E-Governance Platform
 * Civic Engagement Live Stream Page
 */

$page_title = 'Live Meetings | Bamenda City Council';
$page_description = 'Watch live council meetings and civic engagement sessions for Bamenda City Council.';
$page_keywords = 'live meetings, council sessions, civic engagement, Bamenda council';

$breadcrumbs = [
    ['title' => 'Civic Engagement', 'url' => 'index.php'],
    ['title' => 'Live Meetings', 'url' => '#']
];

require_once __DIR__ . '/../../includes/header.php';
?>

<section class="hero live-stream-hero">
    <div class="hero-background">
        <img src="../../assets/images/bamenda-civic-engagement.jpg">
    </div>
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="hero-content">
            <span class="badge badge-secondary">Live Meetings</span>
            <h1 class="hero-title">Council Live Stream</h1>
            <p class="hero-subtitle">Watch live council meetings and civic engagement sessions with real-time participation.</p>
            <div class="hero-actions">
                <a href="#current-stream" class="btn btn-lg btn-secondary">
                    <span class="material-symbols-outlined">live_tv</span>
                    Watch Live
                </a>
                <a href="#schedule" class="btn btn-lg btn-outline">
                    <span class="material-symbols-outlined">schedule</span>
                    View Schedule
                </a>
            </div>
        </div>
    </div>
</section>

<section class="stream-status-section">
    <div class="container">
        <div class="status-card">
            <div class="status-indicator live"></div>
            <div class="status-content">
                <h3>Currently Live</h3>
                <p>City Council Monthly Meeting - December 2024</p>
            </div>
            <div class="viewers-count">
                <span class="material-symbols-outlined">visibility</span>
                <span>234 viewers</span>
            </div>
        </div>
    </div>
</section>

<section class="current-stream-section" id="current-stream">
    <div class="container">
        <div class="stream-container">
            <div class="video-placeholder">
                <div class="live-indicator">LIVE</div>
                <div class="video-content">
                    <span class="material-symbols-outlined">play_circle</span>
                    <p>Click to join live stream</p>
                </div>
            </div>
            <div class="stream-controls">
                <button class="btn btn-primary">Join Stream</button>
                <button class="btn btn-outline">Share</button>
            </div>
        </div>
    </div>
</section>

<section class="upcoming-section" id="schedule">
    <div class="container">
        <h2 class="section-title">Upcoming Meetings</h2>
        <div class="meetings-grid">
            <div class="meeting-card">
                <div class="meeting-date">Dec 20, 2024</div>
                <h3>Budget Committee Meeting</h3>
                <p>Discussion of Q1 2025 budget proposals</p>
                <button class="btn btn-sm btn-outline">Set Reminder</button>
            </div>
            <div class="meeting-card">
                <div class="meeting-date">Dec 22, 2024</div>
                <h3>Public Consultation</h3>
                <p>Urban development project feedback session</p>
                <button class="btn btn-sm btn-outline">Set Reminder</button>
            </div>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>

<style>
.live-stream-hero{background:linear-gradient(135deg,var(--error)0,var(--error-container)100%)}
.stream-status-section{padding:var(--spacing-2xl)0;background-color:var(--surface-container-low)}
.status-card{display:flex;align-items:center;gap:var(--spacing-lg);background-color:var(--surface-container-lowest);border-radius:var(--radius-lg);padding:var(--spacing-lg);border:1px solid var(--outline-variant)}
.status-indicator{width:1rem;height:1rem;border-radius:50%;background-color:var(--error);animation:pulse 2s infinite}
.status-indicator.live{background-color:var(--error)}
.status-content{flex:1}
.status-content h3{font-size:1.25rem;font-weight:700;color:var(--error);margin-bottom:var(--spacing-xs)}
.viewers-count{display:flex;align-items:center;gap:var(--spacing-sm);color:var(--on-surface-variant)}
.current-stream-section{padding:var(--spacing-3xl)0}
.stream-container{background-color:var(--surface-container-lowest);border-radius:var(--radius-lg);overflow:hidden}
.video-placeholder{position:relative;background-color:var(--surface-container);height:400px;display:flex;align-items:center;justify-content:center}
.live-indicator{position:absolute;top:var(--spacing-lg);left:var(--spacing-lg);background-color:var(--error);color:var(--on-error);padding:var(--spacing-xs) var(--spacing-sm);border-radius:var(--radius-full);font-size:.75rem;font-weight:600}
.video-content{text-align:center;color:var(--on-surface-variant)}
.video-content .material-symbols-outlined{font-size:4rem;margin-bottom:var(--spacing-md)}
.stream-controls{padding:var(--spacing-lg);display:flex;gap:var(--spacing-md);justify-content:center}
.upcoming-section{padding:var(--spacing-3xl)0;background-color:var(--surface-container-low)}
.meetings-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(300px,1fr));gap:var(--spacing-lg)}
.meeting-card{background-color:var(--surface-container-lowest);border-radius:var(--radius-lg);padding:var(--spacing-lg);border:1px solid var(--outline-variant)}
.meeting-date{color:var(--error);font-weight:600;margin-bottom:var(--spacing-sm)}
.meeting-card h3{font-size:1.25rem;font-weight:700;color:var(--primary);margin-bottom:var(--spacing-sm)}
@keyframes pulse{0%,100%{opacity:1}50%{opacity:.5}}
</style>

<script>
document.querySelector('.stream-controls .btn-primary')?.addEventListener('click',function(){alert('Joining live stream... In production, this would connect to the actual live stream.')});
</script>
