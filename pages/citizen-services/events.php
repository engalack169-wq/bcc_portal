<?php
/**
 * Bamenda City Council E-Governance Platform
 * City Events Page
 */

// Set page metadata
$page_title = 'City Events | Bamenda City Council';
$page_description = 'Stay updated with upcoming events, festivals, and community activities in Bamenda.';
$page_keywords = 'city events, community events, festivals, Bamenda events, cultural activities';

// Set breadcrumbs
$breadcrumbs = [
    ['title' => 'Services', 'url' => 'services.php'],
    ['title' => 'City Events', 'url' => '#']
];

// Include header
require_once __DIR__ . '/../../includes/header.php';
?>

<!-- Hero Section -->
<section class="hero events-hero">
    <div class="hero-background">
        <img src="../../assets/images/bamenda-government-building.jpg">
    </div>
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="hero-content">
            <span class="badge badge-secondary">City Events</span>
            <h1 class="hero-title">Bamenda City Events</h1>
            <p class="hero-subtitle">
                Discover and participate in exciting community events, cultural festivals, and civic activities throughout Bamenda.
            </p>
            <div class="hero-actions">
                <a href="#upcoming-events" class="btn btn-lg btn-secondary">
                    <span class="material-symbols-outlined">event</span>
                    View Events
                </a>
                <a href="#event-calendar" class="btn btn-lg btn-outline">
                    <span class="material-symbols-outlined">calendar_month</span>
                    Calendar View
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Featured Events -->
<section class="featured-events-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Featured Events</h2>
            <p class="section-subtitle">Don't miss these upcoming highlights</p>
        </div>

        <div class="featured-events-grid">
            <div class="featured-event-card">
                <div class="event-image">
                    <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuC6qk2nD4J7f8L9m3p5oR6sT7uV8wX9yZ0a1b2c3d4e5f6g7h8i9j0k1l2m3n4o5p6q7r8s9t0u1v2w3x4y5z6" 
                         alt="Bamenda Cultural Festival celebration with traditional dancers and musicians">
                </div>
                <div class="event-content">
                    <div class="event-badge">Featured</div>
                    <h3 class="event-title">Bamenda Cultural Festival 2024</h3>
                    <p class="event-description">Annual celebration of Bamenda's rich cultural heritage with traditional music, dance, food, and crafts.</p>
                    <div class="event-details">
                        <div class="event-detail">
                            <span class="material-symbols-outlined">event</span>
                            <span>March 25-27, 2024</span>
                        </div>
                        <div class="event-detail">
                            <span class="material-symbols-outlined">location_on</span>
                            <span>Bamenda City Stadium</span>
                        </div>
                        <div class="event-detail">
                            <span class="material-symbols-outlined">groups</span>
                            <span>5,000+ Expected</span>
                        </div>
                    </div>
                    <div class="event-actions">
                        <button class="btn btn-primary">Register Now</button>
                        <button class="btn btn-outline">Learn More</button>
                    </div>
                </div>
            </div>

            <div class="featured-event-card">
                <div class="event-image">
                    <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuC6qk2nD4J7f8L9m3p5oR6sT7uV8wX9yZ0a1b2c3d4e5f6g7h8i9j0k1l2m3n4o5p6q7r8s9t0u1v2w3x4y5z6" 
                         alt="Youth entrepreneurship summit with young business owners and mentors">
                </div>
                <div class="event-content">
                    <div class="event-badge">Popular</div>
                    <h3 class="event-title">Youth Entrepreneurship Summit</h3>
                    <p class="event-description">Empowering young entrepreneurs with workshops, networking, and funding opportunities.</p>
                    <div class="event-details">
                        <div class="event-detail">
                            <span class="material-symbols-outlined">event</span>
                            <span>April 5, 2024</span>
                        </div>
                        <div class="event-detail">
                            <span class="material-symbols-outlined">location_on</span>
                            <span>City Conference Hall</span>
                        </div>
                        <div class="event-detail">
                            <span class="material-symbols-outlined">groups</span>
                            <span>300 Participants</span>
                        </div>
                    </div>
                    <div class="event-actions">
                        <button class="btn btn-primary">Register Now</button>
                        <button class="btn btn-outline">Learn More</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Event Calendar -->
<section class="event-calendar-section" id="event-calendar">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Event Calendar</h2>
            <p class="section-subtitle">Browse events by date and category</p>
        </div>

        <div class="calendar-controls">
            <div class="calendar-nav">
                <button class="btn btn-outline" onclick="changeMonth(-1)">
                    <span class="material-symbols-outlined">chevron_left</span>
                </button>
                <h3 class="calendar-month">March 2024</h3>
                <button class="btn btn-outline" onclick="changeMonth(1)">
                    <span class="material-symbols-outlined">chevron_right</span>
                </button>
            </div>
            <div class="calendar-filters">
                <select class="form-select" id="eventCategoryFilter">
                    <option value="">All Categories</option>
                    <option value="cultural">Cultural</option>
                    <option value="sports">Sports</option>
                    <option value="educational">Educational</option>
                    <option value="community">Community</option>
                    <option value="business">Business</option>
                </select>
                <select class="form-select" id="eventLocationFilter">
                    <option value="">All Locations</option>
                    <option value="city-center">City Center</option>
                    <option value="nkwen">Nkwen</option>
                    <option value="mankon">Mankon</option>
                    <option value="bambili">Bambili</option>
                </select>
            </div>
        </div>

        <div class="calendar-grid">
            <div class="calendar-weekdays">
                <div class="weekday">Sun</div>
                <div class="weekday">Mon</div>
                <div class="weekday">Tue</div>
                <div class="weekday">Wed</div>
                <div class="weekday">Thu</div>
                <div class="weekday">Fri</div>
                <div class="weekday">Sat</div>
            </div>
            <div class="calendar-days">
                <!-- Calendar days with events -->
                <div class="calendar-day empty"></div>
                <div class="calendar-day empty"></div>
                <div class="calendar-day empty"></div>
                <div class="calendar-day empty"></div>
                <div class="calendar-day">
                    <span class="day-number">1</span>
                </div>
                <div class="calendar-day">
                    <span class="day-number">2</span>
                </div>
                <div class="calendar-day">
                    <span class="day-number">3</span>
                    <div class="event-dots">
                        <span class="event-dot cultural"></span>
                    </div>
                </div>
                <div class="calendar-day">
                    <span class="day-number">4</span>
                </div>
                <div class="calendar-day">
                    <span class="day-number">5</span>
                    <div class="event-dots">
                        <span class="event-dot business"></span>
                    </div>
                </div>
                <div class="calendar-day">
                    <span class="day-number">6</span>
                </div>
                <div class="calendar-day">
                    <span class="day-number">7</span>
                </div>
                <div class="calendar-day">
                    <span class="day-number">8</span>
                </div>
                <div class="calendar-day">
                    <span class="day-number">9</span>
                </div>
                <div class="calendar-day">
                    <span class="day-number">10</span>
                    <div class="event-dots">
                        <span class="event-dot sports"></span>
                    </div>
                </div>
                <div class="calendar-day">
                    <span class="day-number">11</span>
                </div>
                <div class="calendar-day">
                    <span class="day-number">12</span>
                </div>
                <div class="calendar-day">
                    <span class="day-number">13</span>
                </div>
                <div class="calendar-day">
                    <span class="day-number">14</span>
                </div>
                <div class="calendar-day">
                    <span class="day-number">15</span>
                    <div class="event-dots">
                        <span class="event-dot community"></span>
                    </div>
                </div>
                <div class="calendar-day">
                    <span class="day-number">16</span>
                </div>
                <div class="calendar-day">
                    <span class="day-number">17</span>
                </div>
                <div class="calendar-day">
                    <span class="day-number">18</span>
                </div>
                <div class="calendar-day">
                    <span class="day-number">19</span>
                </div>
                <div class="calendar-day">
                    <span class="day-number">20</span>
                </div>
                <div class="calendar-day">
                    <span class="day-number">21</span>
                </div>
                <div class="calendar-day">
                    <span class="day-number">22</span>
                </div>
                <div class="calendar-day">
                    <span class="day-number">23</span>
                </div>
                <div class="calendar-day">
                    <span class="day-number">24</span>
                </div>
                <div class="calendar-day today">
                    <span class="day-number">25</span>
                    <div class="event-dots">
                        <span class="event-dot cultural"></span>
                        <span class="event-dot cultural"></span>
                    </div>
                </div>
                <div class="calendar-day">
                    <span class="day-number">26</span>
                    <div class="event-dots">
                        <span class="event-dot cultural"></span>
                    </div>
                </div>
                <div class="calendar-day">
                    <span class="day-number">27</span>
                    <div class="event-dots">
                        <span class="event-dot cultural"></span>
                    </div>
                </div>
                <div class="calendar-day">
                    <span class="day-number">28</span>
                </div>
                <div class="calendar-day">
                    <span class="day-number">29</span>
                </div>
                <div class="calendar-day">
                    <span class="day-number">30</span>
                </div>
                <div class="calendar-day">
                    <span class="day-number">31</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Upcoming Events -->
<section class="upcoming-events-section" id="upcoming-events">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Upcoming Events</h2>
            <p class="section-subtitle">Events happening soon in Bamenda</p>
        </div>

        <div class="events-list">
            <div class="event-item">
                <div class="event-date">
                    <div class="date-day">25</div>
                    <div class="date-month">MAR</div>
                </div>
                <div class="event-info">
                    <h3 class="event-title">Bamenda Cultural Festival 2024</h3>
                    <p class="event-description">Annual celebration of our rich cultural heritage with traditional music, dance, food, and crafts.</p>
                    <div class="event-meta">
                        <span class="event-category cultural">Cultural</span>
                        <span class="event-location">
                            <span class="material-symbols-outlined">location_on</span>
                            Bamenda City Stadium
                        </span>
                        <span class="event-time">
                            <span class="material-symbols-outlined">schedule</span>
                            9:00 AM - 6:00 PM
                        </span>
                    </div>
                </div>
                <div class="event-actions">
                    <button class="btn btn-primary">Register</button>
                    <button class="btn btn-outline">Details</button>
                </div>
            </div>

            <div class="event-item">
                <div class="event-date">
                    <div class="date-day">05</div>
                    <div class="date-month">APR</div>
                </div>
                <div class="event-info">
                    <h3 class="event-title">Youth Entrepreneurship Summit</h3>
                    <p class="event-description">Empowering young entrepreneurs with workshops, networking, and funding opportunities.</p>
                    <div class="event-meta">
                        <span class="event-category business">Business</span>
                        <span class="event-location">
                            <span class="material-symbols-outlined">location_on</span>
                            City Conference Hall
                        </span>
                        <span class="event-time">
                            <span class="material-symbols-outlined">schedule</span>
                            8:00 AM - 5:00 PM
                        </span>
                    </div>
                </div>
                <div class="event-actions">
                    <button class="btn btn-primary">Register</button>
                    <button class="btn btn-outline">Details</button>
                </div>
            </div>

            <div class="event-item">
                <div class="event-date">
                    <div class="date-day">10</div>
                    <div class="date-month">APR</div>
                </div>
                <div class="event-info">
                    <h3 class="event-title">Community Health Fair</h3>
                    <p class="event-description">Free health screenings, vaccinations, and health education for all residents.</p>
                    <div class="event-meta">
                        <span class="event-category community">Community</span>
                        <span class="event-location">
                            <span class="material-symbols-outlined">location_on</span>
                            Nkwen Community Center
                        </span>
                        <span class="event-time">
                            <span class="material-symbols-outlined">schedule</span>
                            10:00 AM - 4:00 PM
                        </span>
                    </div>
                </div>
                <div class="event-actions">
                    <button class="btn btn-primary">Register</button>
                    <button class="btn btn-outline">Details</button>
                </div>
            </div>

            <div class="event-item">
                <div class="event-date">
                    <div class="date-day">15</div>
                    <div class="date-month">APR</div>
                </div>
                <div class="event-info">
                    <h3 class="event-title">Sports Tournament Finals</h3>
                    <p class="event-description">Championship finals for the inter-community sports tournament.</p>
                    <div class="event-meta">
                        <span class="event-category sports">Sports</span>
                        <span class="event-location">
                            <span class="material-symbols-outlined">location_on</span>
                            Bamenda Sports Complex
                        </span>
                        <span class="event-time">
                            <span class="material-symbols-outlined">schedule</span>
                            2:00 PM - 6:00 PM
                        </span>
                    </div>
                </div>
                <div class="event-actions">
                    <button class="btn btn-primary">Register</button>
                    <button class="btn btn-outline">Details</button>
                </div>
            </div>

            <div class="event-item">
                <div class="event-date">
                    <div class="date-day">20</div>
                    <div class="date-month">APR</div>
                </div>
                <div class="event-info">
                    <h3 class="event-title">Environmental Clean-up Day</h3>
                    <p class="event-description">Community-wide environmental awareness and clean-up campaign.</p>
                    <div class="event-meta">
                        <span class="event-category community">Community</span>
                        <span class="event-location">
                            <span class="material-symbols-outlined">location_on</span>
                            Various Locations
                        </span>
                        <span class="event-time">
                            <span class="material-symbols-outlined">schedule</span>
                            7:00 AM - 12:00 PM
                        </span>
                    </div>
                </div>
                <div class="event-actions">
                    <button class="btn btn-primary">Register</button>
                    <button class="btn btn-outline">Details</button>
                </div>
            </div>
        </div>

        <div class="load-more-container">
            <button class="btn btn-outline" onclick="loadMoreEvents()">Load More Events</button>
        </div>
    </div>
</section>

<!-- Event Categories -->
<section class="event-categories-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Browse by Category</h2>
            <p class="section-subtitle">Find events that match your interests</p>
        </div>

        <div class="categories-grid">
            <div class="category-card" onclick="filterByCategory('cultural')">
                <div class="category-icon cultural">
                    <span class="material-symbols-outlined">music_note</span>
                </div>
                <h3 class="category-title">Cultural Events</h3>
                <p class="category-description">Festivals, music, dance, and cultural celebrations</p>
                <div class="category-stats">
                    <span class="event-count">12 Events</span>
                    <span class="next-event">Next: Mar 25</span>
                </div>
            </div>

            <div class="category-card" onclick="filterByCategory('sports')">
                <div class="category-icon sports">
                    <span class="material-symbols-outlined">sports_soccer</span>
                </div>
                <h3 class="category-title">Sports</h3>
                <p class="category-description">Tournaments, fitness activities, and sports competitions</p>
                <div class="category-stats">
                    <span class="event-count">8 Events</span>
                    <span class="next-event">Next: Apr 15</span>
                </div>
            </div>

            <div class="category-card" onclick="filterByCategory('educational')">
                <div class="category-icon educational">
                    <span class="material-symbols-outlined">school</span>
                </div>
                <h3 class="category-title">Educational</h3>
                <p class="category-description">Workshops, seminars, and learning opportunities</p>
                <div class="category-stats">
                    <span class="event-count">15 Events</span>
                    <span class="next-event">Next: Apr 8</span>
                </div>
            </div>

            <div class="category-card" onclick="filterByCategory('community')">
                <div class="category-icon community">
                    <span class="material-symbols-outlined">diversity_3</span>
                </div>
                <h3 class="category-title">Community</h3>
                <p class="category-description">Community meetings, volunteer activities, and social events</p>
                <div class="category-stats">
                    <span class="event-count">20 Events</span>
                    <span class="next-event">Next: Apr 10</span>
                </div>
            </div>

            <div class="category-card" onclick="filterByCategory('business')">
                <div class="category-icon business">
                    <span class="material-symbols-outlined">business_center</span>
                </div>
                <h3 class="category-title">Business</h3>
                <p class="category-description">Networking, conferences, and business development</p>
                <div class="category-stats">
                    <span class="event-count">10 Events</span>
                    <span class="next-event">Next: Apr 5</span>
                </div>
            </div>

            <div class="category-card" onclick="filterByCategory('health')">
                <div class="category-icon health">
                    <span class="material-symbols-outlined">medical_services</span>
                </div>
                <h3 class="category-title">Health</h3>
                <p class="category-description">Health fairs, medical camps, and wellness activities</p>
                <div class="category-stats">
                    <span class="event-count">6 Events</span>
                    <span class="next-event">Next: Apr 10</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Event Registration -->
<section class="event-registration-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Event Registration</h2>
            <p class="section-subtitle">Register for events and manage your registrations</p>
        </div>

        <div class="registration-stats">
            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">event_available</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">71</div>
                    <div class="stat-label">Upcoming Events</div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">how_to_reg</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">3</div>
                    <div class="stat-label">Your Registrations</div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">groups</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">2,456</div>
                    <div class="stat-label">Total Participants</div>
                </div>
            </div>
        </div>

        <div class="registration-form">
            <h3>Quick Event Registration</h3>
            <form id="eventRegistrationForm">
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Select Event *</label>
                        <select class="form-select" required>
                            <option value="">Choose an event</option>
                            <option value="cultural-festival">Bamenda Cultural Festival 2024</option>
                            <option value="youth-summit">Youth Entrepreneurship Summit</option>
                            <option value="health-fair">Community Health Fair</option>
                            <option value="sports-finals">Sports Tournament Finals</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Number of Participants *</label>
                        <input type="number" class="form-input" min="1" max="10" value="1" required>
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label">Special Requirements</label>
                    <textarea class="form-textarea" rows="3" placeholder="Any special requirements or accessibility needs"></textarea>
                </div>

                <div class="form-actions">
                    <button type="reset" class="btn btn-outline">Clear</button>
                    <button type="submit" class="btn btn-primary">Register Now</button>
                </div>
            </form>
        </div>
    </div>
</section>

<?php
// Include footer
require_once __DIR__ . '/../../includes/footer.php';
?>

<style>
/* Events Page Styles */
.events-hero {
    background: linear-gradient(135deg, var(--primary) 0%, var(--primary-container) 100%);
}

/* Featured Events Section */
.featured-events-section {
    padding: var(--spacing-3xl) 0;
    background-color: var(--surface-container-low);
}

.featured-events-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
    gap: var(--spacing-xl);
}

.featured-event-card {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    overflow: hidden;
    border: 1px solid var(--outline-variant);
    transition: all 0.3s ease;
}

.featured-event-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
}

.event-image {
    position: relative;
    height: 200px;
    overflow: hidden;
}

.event-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.event-content {
    padding: var(--spacing-lg);
    position: relative;
}

.event-badge {
    position: absolute;
    top: -20px;
    right: var(--spacing-lg);
    background-color: var(--secondary);
    color: var(--on-secondary);
    padding: var(--spacing-xs) var(--spacing-sm);
    border-radius: var(--radius-full);
    font-size: 0.75rem;
    font-weight: 600;
    text-transform: uppercase;
}

.event-title {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-md);
}

.event-description {
    color: var(--on-surface-variant);
    line-height: 1.6;
    margin-bottom: var(--spacing-lg);
}

.event-details {
    display: flex;
    flex-direction: column;
    gap: var(--spacing-sm);
    margin-bottom: var(--spacing-lg);
}

.event-detail {
    display: flex;
    align-items: center;
    gap: var(--spacing-sm);
    color: var(--on-surface-variant);
    font-size: 0.875rem;
}

.event-detail .material-symbols-outlined {
    font-size: 1.25rem;
    color: var(--primary);
}

.event-actions {
    display: flex;
    gap: var(--spacing-sm);
}

/* Calendar Section */
.event-calendar-section {
    padding: var(--spacing-3xl) 0;
}

.calendar-controls {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: var(--spacing-lg);
    flex-wrap: wrap;
    gap: var(--spacing-lg);
}

.calendar-nav {
    display: flex;
    align-items: center;
    gap: var(--spacing-lg);
}

.calendar-month {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--primary);
    margin: 0;
}

.calendar-filters {
    display: flex;
    gap: var(--spacing-md);
}

.calendar-grid {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-lg);
    border: 1px solid var(--outline-variant);
}

.calendar-weekdays {
    display: grid;
    grid-template-columns: repeat(7, 1fr);
    gap: var(--spacing-xs);
    margin-bottom: var(--spacing-sm);
}

.weekday {
    text-align: center;
    font-weight: 600;
    color: var(--on-surface-variant);
    font-size: 0.875rem;
    padding: var(--spacing-sm);
}

.calendar-days {
    display: grid;
    grid-template-columns: repeat(7, 1fr);
    gap: var(--spacing-xs);
}

.calendar-day {
    aspect-ratio: 1;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    border-radius: var(--radius-md);
    position: relative;
    cursor: pointer;
    transition: all 0.2s ease;
}

.calendar-day:hover {
    background-color: var(--surface-container);
}

.calendar-day.today {
    background-color: var(--primary);
    color: var(--on-primary);
}

.calendar-day.empty {
    cursor: default;
}

.day-number {
    font-weight: 500;
    font-size: 0.875rem;
}

.event-dots {
    display: flex;
    gap: 2px;
    margin-top: 2px;
}

.event-dot {
    width: 6px;
    height: 6px;
    border-radius: 50%;
}

.event-dot.cultural {
    background-color: var(--secondary);
}

.event-dot.sports {
    background-color: var(--tertiary);
}

.event-dot.business {
    background-color: var(--primary);
}

.event-dot.community {
    background-color: var(--error);
}

/* Upcoming Events Section */
.upcoming-events-section {
    padding: var(--spacing-3xl) 0;
    background-color: var(--surface-container-low);
}

.events-list {
    display: flex;
    flex-direction: column;
    gap: var(--spacing-lg);
}

.event-item {
    display: grid;
    grid-template-columns: auto 1fr auto;
    gap: var(--spacing-lg);
    align-items: center;
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-lg);
    border: 1px solid var(--outline-variant);
    transition: all 0.3s ease;
}

.event-item:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
}

.event-date {
    background-color: var(--primary);
    color: var(--on-primary);
    border-radius: var(--radius-md);
    padding: var(--spacing-md);
    text-align: center;
    min-width: 60px;
}

.date-day {
    font-size: 1.5rem;
    font-weight: 800;
    line-height: 1;
}

.date-month {
    font-size: 0.75rem;
    font-weight: 600;
    text-transform: uppercase;
}

.event-info {
    flex: 1;
}

.event-meta {
    display: flex;
    flex-wrap: wrap;
    gap: var(--spacing-md);
    margin-top: var(--spacing-sm);
}

.event-category {
    padding: var(--spacing-xs) var(--spacing-sm);
    border-radius: var(--radius-full);
    font-size: 0.75rem;
    font-weight: 600;
    text-transform: uppercase;
}

.event-category.cultural {
    background-color: var(--secondary-container);
    color: var(--on-secondary-container);
}

.event-category.business {
    background-color: var(--primary-container);
    color: var(--on-primary-container);
}

.event-category.sports {
    background-color: var(--tertiary-container);
    color: var(--on-tertiary-container);
}

.event-category.community {
    background-color: var(--error-container);
    color: var(--on-error-container);
}

.event-location,
.event-time {
    display: flex;
    align-items: center;
    gap: var(--spacing-xs);
    color: var(--on-surface-variant);
    font-size: 0.875rem;
}

.event-location .material-symbols-outlined,
.event-time .material-symbols-outlined {
    font-size: 1rem;
    color: var(--primary);
}

.event-actions {
    display: flex;
    gap: var(--spacing-sm);
}

.load-more-container {
    text-align: center;
    margin-top: var(--spacing-xl);
}

/* Event Categories Section */
.event-categories-section {
    padding: var(--spacing-3xl) 0;
}

.categories-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: var(--spacing-xl);
}

.category-card {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-xl);
    border: 1px solid var(--outline-variant);
    text-align: center;
    cursor: pointer;
    transition: all 0.3s ease;
}

.category-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
}

.category-icon {
    width: 4rem;
    height: 4rem;
    border-radius: var(--radius-lg);
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto var(--spacing-lg);
}

.category-icon.cultural {
    background-color: var(--secondary);
    color: var(--on-secondary);
}

.category-icon.sports {
    background-color: var(--tertiary);
    color: var(--on-tertiary);
}

.category-icon.educational {
    background-color: var(--primary);
    color: var(--on-primary);
}

.category-icon.community {
    background-color: var(--error);
    color: var(--on-error);
}

.category-icon.business {
    background-color: var(--primary-container);
    color: var(--on-primary-container);
}

.category-icon.health {
    background-color: var(--tertiary-container);
    color: var(--on-tertiary-container);
}

.category-icon .material-symbols-outlined {
    font-size: 2rem;
}

.category-title {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-md);
}

.category-description {
    color: var(--on-surface-variant);
    line-height: 1.6;
    margin-bottom: var(--spacing-lg);
}

.category-stats {
    display: flex;
    justify-content: space-between;
    align-items: center;
    font-size: 0.875rem;
}

.event-count {
    color: var(--primary);
    font-weight: 600;
}

.next-event {
    color: var(--on-surface-variant);
}

/* Event Registration Section */
.event-registration-section {
    padding: var(--spacing-3xl) 0;
    background-color: var(--surface-container-low);
}

.registration-stats {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: var(--spacing-lg);
    margin-bottom: var(--spacing-xl);
}

.stat-card {
    display: grid;
    grid-template-columns: auto 1fr;
    gap: var(--spacing-lg);
    align-items: center;
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-lg);
    border: 1px solid var(--outline-variant);
}

.stat-icon {
    width: 3rem;
    height: 3rem;
    background-color: var(--primary);
    color: var(--on-primary);
    border-radius: var(--radius-lg);
    display: flex;
    align-items: center;
    justify-content: center;
}

.stat-icon .material-symbols-outlined {
    font-size: 1.5rem;
}

.stat-content {
    flex: 1;
}

.stat-number {
    font-size: 1.5rem;
    font-weight: 800;
    color: var(--primary);
    margin-bottom: var(--spacing-xs);
    line-height: 1;
}

.stat-label {
    font-size: 0.875rem;
    color: var(--on-surface-variant);
    font-weight: 500;
}

.registration-form {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-xl);
    border: 1px solid var(--outline-variant);
    max-width: 600px;
    margin: 0 auto;
}

.registration-form h3 {
    color: var(--primary);
    margin-bottom: var(--spacing-lg);
    text-align: center;
}

.form-actions {
    display: flex;
    gap: var(--spacing-lg);
    justify-content: center;
    margin-top: var(--spacing-lg);
}

/* Responsive Design */
@media (max-width: 768px) {
    .featured-events-grid {
        grid-template-columns: 1fr;
        gap: var(--spacing-lg);
    }
    
    .calendar-controls {
        flex-direction: column;
        align-items: center;
        gap: var(--spacing-lg);
    }
    
    .calendar-filters {
        flex-direction: column;
        width: 100%;
    }
    
    .calendar-filters .form-select {
        width: 100%;
    }
    
    .event-item {
        grid-template-columns: auto 1fr;
        gap: var(--spacing-md);
    }
    
    .event-actions {
        grid-column: 1 / -1;
        justify-content: center;
    }
    
    .categories-grid {
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: var(--spacing-lg);
    }
    
    .registration-stats {
        grid-template-columns: 1fr;
        gap: var(--spacing-md);
    }
    
    .form-row {
        grid-template-columns: 1fr;
        gap: var(--spacing-md);
    }
    
    .form-actions {
        flex-direction: column;
        align-items: center;
    }
    
    .form-actions .btn {
        width: 100%;
        max-width: 300px;
    }
}

@media (max-width: 480px) {
    .featured-event-card {
        margin: 0 -var(--spacing-md);
        border-radius: 0;
    }
    
    .event-item {
        padding: var(--spacing-md);
    }
    
    .event-date {
        min-width: 50px;
        padding: var(--spacing-sm);
    }
    
    .date-day {
        font-size: 1.25rem;
    }
    
    .category-card {
        padding: var(--spacing-lg);
    }
    
    .category-icon {
        width: 3rem;
        height: 3rem;
    }
    
    .category-icon .material-symbols-outlined {
        font-size: 1.5rem;
    }
    
    .registration-form {
        padding: var(--spacing-lg);
    }
}
</style>

<script>
// Calendar navigation
function changeMonth(direction) {
    const monthElement = document.querySelector('.calendar-month');
    const months = ['January', 'February', 'March', 'April', 'May', 'June'];
    let currentMonth = months.indexOf(monthElement.textContent.split(' ')[0]);
    
    currentMonth += direction;
    if (currentMonth < 0) currentMonth = 11;
    if (currentMonth > 11) currentMonth = 0;
    
    monthElement.textContent = `${months[currentMonth]} 2024`;
}

// Filter by category
function filterByCategory(category) {
    document.getElementById('eventCategoryFilter').value = category;
    filterEvents();
}

// Filter events
function filterEvents() {
    const category = document.getElementById('eventCategoryFilter').value;
    const location = document.getElementById('eventLocationFilter').value;
    
    // In production, this would filter the events
    alert(`Filtering events by: ${category || 'All Categories'}, ${location || 'All Locations'}`);
}

// Load more events
function loadMoreEvents() {
    // In production, this would load more events from the server
    alert('Loading more events...');
}

// Event registration
document.getElementById('eventRegistrationForm').addEventListener('submit', function(e) {
    e.preventDefault();
    alert('Event registration successful! You will receive a confirmation email shortly.');
    // In production, this would submit the registration
});

// Calendar day click
document.querySelectorAll('.calendar-day:not(.empty)').forEach(day => {
    day.addEventListener('click', function() {
        const dayNumber = this.querySelector('.day-number').textContent;
        alert(`Events for day ${dayNumber} would be shown here`);
    });
});

// Event actions
document.querySelectorAll('.event-actions .btn-primary').forEach(button => {
    if (button.textContent.includes('Register')) {
        button.addEventListener('click', function() {
            const eventTitle = this.closest('.event-item').querySelector('.event-title').textContent;
            alert(`Registration for "${eventTitle}" would open here`);
        });
    }
});

document.querySelectorAll('.event-actions .btn-outline').forEach(button => {
    if (button.textContent.includes('Details')) {
        button.addEventListener('click', function() {
            const eventTitle = this.closest('.event-item').querySelector('.event-title').textContent;
            alert(`Detailed view for "${eventTitle}" would open here`);
        });
    }
});
</script>
