<?php
/**
 * Bamenda City Council E-Governance Platform
 * Civic Engagement Archives Page
 */

// Set page metadata
$page_title = 'Council Archives | Bamenda City Council';
$page_description = 'Access historical council records, meeting minutes, decisions, and public documents from the Bamenda City Council archives.';
$page_keywords = 'council archives, meeting minutes, public records, civic engagement, Bamenda council history';

// Set breadcrumbs
$breadcrumbs = [
    ['title' => 'Civic Engagement', 'url' => '../index.php'],
    ['title' => 'Council Archives', 'url' => '#']
];

// Include header
require_once __DIR__ . '/../../includes/header.php';
?>

<!-- Hero Section -->
<section class="hero civic-archives-hero">
    <div class="hero-background">
        <img src="../../assets/images/bamenda-civic-engagement.jpg">
    </div>
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="hero-content">
            <span class="badge badge-secondary">Civic Archives</span>
            <h1 class="hero-title">Council Archives & Records</h1>
            <p class="hero-subtitle">
                Comprehensive archive of council meetings, decisions, public documents, and historical records providing transparency and access to civic governance information.
            </p>
            <div class="hero-actions">
                <a href="#archive-search" class="btn btn-lg btn-secondary">
                    <span class="material-symbols-outlined">search</span>
                    Search Archives
                </a>
                <a href="#recent-archives" class="btn btn-lg btn-outline">
                    <span class="material-symbols-outlined">history</span>
                    Recent Records
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Quick Actions -->
<section class="quick-actions-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Archive Actions</h2>
            <p class="section-subtitle">Quick access to archived records</p>
        </div>

        <div class="actions-grid">
            <div class="action-card" onclick="openMeetingArchives()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">groups</span>
                </div>
                <h3 class="action-title">Meeting Archives</h3>
                <p class="action-description">Council meetings</p>
            </div>

            <div class="action-card" onclick="openDecisionArchives()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">gavel</span>
                </div>
                <h3 class="action-title">Decision Archives</h3>
                <p class="action-description">Council decisions</p>
            </div>

            <div class="action-card" onclick="openDocumentArchives()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">description</span>
                </div>
                <h3 class="action-title">Document Archives</h3>
                <p class="action-description">Public documents</p>
            </div>

            <div class="action-card" onclick="openFinancialArchives()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">receipt_long</span>
                </div>
                <h3 class="action-title">Financial Archives</h3>
                <p class="action-description">Budget records</p>
            </div>

            <div class="action-card" onclick="openProjectArchives()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">engineering</span>
                </div>
                <h3 class="action-title">Project Archives</h3>
                <p class="action-description">Project records</p>
            </div>

            <div class="action-card" onclick="openMediaArchives()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">photo_library</span>
                </div>
                <h3 class="action-title">Media Archives</h3>
                <p class="action-description">Photos & videos</p>
            </div>
        </div>
    </div>
</section>

<!-- Archive Statistics -->
<section class="archive-stats-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Archive Overview</h2>
            <p class="section-subtitle">Real-time archive statistics</p>
        </div>

        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">folder</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">12,345</div>
                    <div class="stat-label">Total Documents</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+234 this month</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">groups</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">3,456</div>
                    <div class="stat-label">Meeting Records</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+89 meetings</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">gavel</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">2,345</div>
                    <div class="stat-label">Council Decisions</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+67 decisions</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">photo_library</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">8,234</div>
                    <div class="stat-label">Media Files</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+156 files</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">schedule</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">15 years</div>
                    <div class="stat-label">Archive Period</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>2009 - 2024</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">visibility</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">45,678</div>
                    <div class="stat-label">Monthly Views</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+12% increase</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Archive Search -->
<section class="archive-search-section" id="archive-search">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Search Archives</h2>
            <p class="section-subtitle">Find specific records and documents</p>
        </div>

        <div class="search-content">
            <div class="search-form">
                <form id="archiveSearchForm">
                    <div class="search-row">
                        <div class="form-group">
                            <label class="form-label">Search Keywords</label>
                            <input type="text" class="form-input" placeholder="Enter keywords to search archives">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Document Type</label>
                            <select class="form-select">
                                <option value="">All Types</option>
                                <option value="meeting-minutes">Meeting Minutes</option>
                                <option value="council-decisions">Council Decisions</option>
                                <option value="public-documents">Public Documents</option>
                                <option value="financial-records">Financial Records</option>
                                <option value="project-reports">Project Reports</option>
                                <option value="media-files">Media Files</option>
                            </select>
                        </div>
                    </div>

                    <div class="search-row">
                        <div class="form-group">
                            <label class="form-label">Date Range</label>
                            <div class="date-range">
                                <input type="date" class="form-input" placeholder="Start date">
                                <span>to</span>
                                <input type="date" class="form-input" placeholder="End date">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Department</label>
                            <select class="form-select">
                                <option value="">All Departments</option>
                                <option value="executive">Executive Office</option>
                                <option value="finance">Finance Department</option>
                                <option value="planning">Planning Department</option>
                                <option value="public-works">Public Works</option>
                                <option value="health">Health Department</option>
                                <option value="education">Education Department</option>
                                <option value="youth">Youth Department</option>
                            </select>
                        </div>
                    </div>

                    <div class="search-actions">
                        <button type="reset" class="btn btn-outline">Clear</button>
                        <button type="submit" class="btn btn-primary">
                            <span class="material-symbols-outlined">search</span>
                            Search Archives
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Recent Archives -->
<section class="recent-archives-section" id="recent-archives">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Recent Archives</h2>
            <p class="section-subtitle">Latest additions to the council archives</p>
        </div>

        <div class="archives-grid">
            <!-- Meeting Minutes -->
            <div class="archive-card">
                <div class="archive-header">
                    <div class="archive-icon">
                        <span class="material-symbols-outlined">groups</span>
                    </div>
                    <div class="archive-badge meeting">Meeting</div>
                </div>
                <div class="archive-content">
                    <h3 class="archive-title">Council Meeting Minutes</h3>
                    <p class="archive-description">Regular council meeting discussing urban development projects, budget allocation, and community initiatives.</p>
                    <div class="archive-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">calendar_today</span>
                            <span>December 15, 2024</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>2:00 PM - 5:30 PM</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">location_on</span>
                            <span>Council Chambers</span>
                        </div>
                    </div>
                    <div class="archive-actions">
                        <button class="btn btn-sm btn-primary">View Document</button>
                        <button class="btn btn-sm btn-outline">Download</button>
                    </div>
                </div>
            </div>

            <!-- Council Decision -->
            <div class="archive-card">
                <div class="archive-header">
                    <div class="archive-icon">
                        <span class="material-symbols-outlined">gavel</span>
                    </div>
                    <div class="archive-badge decision">Decision</div>
                </div>
                <div class="archive-content">
                    <h3 class="archive-title">Infrastructure Development Decision</h3>
                    <p class="archive-description">Council approval for new road construction project in Nkwen area with budget allocation and timeline.</p>
                    <div class="archive-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">calendar_today</span>
                            <span>December 14, 2024</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">account_balance</span>
                            <span>Finance Department</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">priority_high</span>
                            <span>High Priority</span>
                        </div>
                    </div>
                    <div class="archive-actions">
                        <button class="btn btn-sm btn-primary">View Document</button>
                        <button class="btn btn-sm btn-outline">Download</button>
                    </div>
                </div>
            </div>

            <!-- Public Document -->
            <div class="archive-card">
                <div class="archive-header">
                    <div class="archive-icon">
                        <span class="material-symbols-outlined">description</span>
                    </div>
                    <div class="archive-badge document">Document</div>
                </div>
                <div class="archive-content">
                    <h3 class="archive-title">Annual Budget Report 2024</h3>
                    <p class="archive-description">Comprehensive annual budget report including revenue, expenditures, and financial projections for 2024.</p>
                    <div class="archive-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">calendar_today</span>
                            <span>December 13, 2024</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">account_balance</span>
                            <span>Finance Department</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">insert_drive_file</span>
                            <span>PDF - 45 pages</span>
                        </div>
                    </div>
                    <div class="archive-actions">
                        <button class="btn btn-sm btn-primary">View Document</button>
                        <button class="btn btn-sm btn-outline">Download</button>
                    </div>
                </div>
            </div>

            <!-- Project Report -->
            <div class="archive-card">
                <div class="archive-header">
                    <div class="archive-icon">
                        <span class="material-symbols-outlined">engineering</span>
                    </div>
                    <div class="archive-badge project">Project</div>
                </div>
                <div class="archive-content">
                    <h3 class="archive-title">Water Supply Project Report</h3>
                    <p class="archive-description">Detailed report on water supply infrastructure improvements and service expansion in Bamenda.</p>
                    <div class="archive-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">calendar_today</span>
                            <span>December 12, 2024</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">engineering</span>
                            <span>Public Works</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">water_drop</span>
                            <span>Water Supply</span>
                        </div>
                    </div>
                    <div class="archive-actions">
                        <button class="btn btn-sm btn-primary">View Document</button>
                        <button class="btn btn-sm btn-outline">Download</button>
                    </div>
                </div>
            </div>

            <!-- Media Archive -->
            <div class="archive-card">
                <div class="archive-header">
                    <div class="archive-icon">
                        <span class="material-symbols-outlined">photo_library</span>
                    </div>
                    <div class="archive-badge media">Media</div>
                </div>
                <div class="archive-content">
                    <h3 class="archive-title">Youth Council Inauguration Photos</h3>
                    <p class="archive-description">Photo gallery from the inauguration ceremony of the new Youth Council members and leadership team.</p>
                    <div class="archive-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">calendar_today</span>
                            <span>December 11, 2024</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">groups</span>
                            <span>Youth Department</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">image</span>
                            <span>45 Photos</span>
                        </div>
                    </div>
                    <div class="archive-actions">
                        <button class="btn btn-sm btn-primary">View Gallery</button>
                        <button class="btn btn-sm btn-outline">Download</button>
                    </div>
                </div>
            </div>

            <!-- Financial Record -->
            <div class="archive-card">
                <div class="archive-header">
                    <div class="archive-icon">
                        <span class="material-symbols-outlined">receipt_long</span>
                    </div>
                    <div class="archive-badge financial">Financial</div>
                </div>
                <div class="archive-content">
                    <h3 class="archive-title">Quarterly Financial Statement</h3>
                    <p class="archive-description">Q4 2024 financial statement including revenue, expenses, and budget performance analysis.</p>
                    <div class="archive-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">calendar_today</span>
                            <span>December 10, 2024</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">account_balance</span>
                            <span>Finance Department</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">insert_drive_file</span>
                            <span>Excel - 12 sheets</span>
                        </div>
                    </div>
                    <div class="archive-actions">
                        <button class="btn btn-sm btn-primary">View Document</button>
                        <button class="btn btn-sm btn-outline">Download</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="load-more">
            <button class="btn btn-outline">Load More Archives</button>
        </div>
    </div>
</section>

<!-- Archive Categories -->
<section class="archive-categories-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Archive Categories</h2>
            <p class="section-subtitle">Browse archives by category</p>
        </div>

        <div class="categories-grid">
            <!-- Meeting Archives -->
            <div class="category-card">
                <div class="category-header">
                    <div class="category-icon">
                        <span class="material-symbols-outlined">groups</span>
                    </div>
                    <h3 class="category-title">Meeting Archives</h3>
                </div>
                <div class="category-content">
                    <p class="category-description">Complete archive of council meetings including regular sessions, special meetings, and public hearings.</p>
                    <div class="category-stats">
                        <div class="stat-item">
                            <span class="stat-number">1,234</span>
                            <span class="stat-label">Meeting Records</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">892</span>
                            <span class="stat-label">Minutes Available</span>
                        </div>
                    </div>
                    <div class="category-features">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Full meeting minutes</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Attendance records</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Video recordings</span>
                        </div>
                    </div>
                    <div class="category-actions">
                        <button class="btn btn-sm btn-primary">Browse Meetings</button>
                    </div>
                </div>
            </div>

            <!-- Decision Archives -->
            <div class="category-card">
                <div class="category-header">
                    <div class="category-icon">
                        <span class="material-symbols-outlined">gavel</span>
                    </div>
                    <h3 class="category-title">Decision Archives</h3>
                </div>
                <div class="category-content">
                    <p class="category-description">Archive of all council decisions, resolutions, and official positions on various matters.</p>
                    <div class="category-stats">
                        <div class="stat-item">
                            <span class="stat-number">2,345</span>
                            <span class="stat-label">Council Decisions</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">456</span>
                            <span class="stat-label">Resolutions</span>
                        </div>
                    </div>
                    <div class="category-features">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Decision summaries</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Voting records</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Implementation status</span>
                        </div>
                    </div>
                    <div class="category-actions">
                        <button class="btn btn-sm btn-primary">Browse Decisions</button>
                    </div>
                </div>
            </div>

            <!-- Document Archives -->
            <div class="category-card">
                <div class="category-header">
                    <div class="category-icon">
                        <span class="material-symbols-outlined">description</span>
                    </div>
                    <h3 class="category-title">Document Archives</h3>
                </div>
                <div class="category-content">
                    <p class="category-description">Public documents, reports, policies, and administrative records from various departments.</p>
                    <div class="category-stats">
                        <div class="stat-item">
                            <span class="stat-number">5,678</span>
                            <span class="stat-label">Public Documents</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">234</span>
                            <span class="stat-label">Policy Documents</span>
                        </div>
                    </div>
                    <div class="category-features">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Policy documents</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Administrative records</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Public notices</span>
                        </div>
                    </div>
                    <div class="category-actions">
                        <button class="btn btn-sm btn-primary">Browse Documents</button>
                    </div>
                </div>
            </div>

            <!-- Financial Archives -->
            <div class="category-card">
                <div class="category-header">
                    <div class="category-icon">
                        <span class="material-symbols-outlined">receipt_long</span>
                    </div>
                    <h3 class="category-title">Financial Archives</h3>
                </div>
                <div class="category-content">
                    <p class="category-description">Budget records, financial statements, audit reports, and expenditure documentation.</p>
                    <div class="category-stats">
                        <div class="stat-item">
                            <span class="stat-number">1,890</span>
                            <span class="stat-label">Financial Records</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">123</span>
                            <span class="stat-label">Audit Reports</span>
                        </div>
                    </div>
                    <div class="category-features">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Budget documents</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Financial statements</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Audit reports</span>
                        </div>
                    </div>
                    <div class="category-actions">
                        <button class="btn btn-sm btn-primary">Browse Financial</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="faq-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Frequently Asked Questions</h2>
            <p class="section-subtitle">Common questions about council archives</p>
        </div>

        <div class="faq-list">
            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>How far back do the archives go?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>The council archives contain records dating back to 2009, with ongoing digitization efforts to include older historical records. Some specialized archives may have different coverage periods.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>How can I search for specific documents?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Use the advanced search function to filter by keywords, document type, date range, and department. You can also browse by category or use the alphabetical index for specific document types.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>Are all documents available for public viewing?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Most council documents are publicly available. Some sensitive information may be redacted or restricted according to privacy laws and council policies. Restricted documents require special authorization.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>How often are new documents added to the archives?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>New documents are typically added within 7-14 days after council meetings or document approval. Meeting minutes are usually available within 48 hours, while complex reports may take longer.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>Can I request copies of archived documents?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Yes, you can download digital copies of most documents directly from the archive. For certified copies or documents not available digitally, you can submit a formal request to the records department.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>What formats are available for archived documents?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Most documents are available in PDF format. Some financial data may also be available in Excel format. Media archives include JPEG images and MP4 video files. Historical documents may be scanned images.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
// Include footer
require_once __DIR__ . '/../../includes/footer.php';
?>

<style>
/* Civic Archives Page Styles */
.civic-archives-hero {
    background: linear-gradient(135deg, var(--primary) 0%, var(--primary-container) 100%);
}

/* Quick Actions Section */
.quick-actions-section {
    padding: var(--spacing-3xl) 0;
    background-color: var(--surface-container-low);
}

.actions-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: var(--spacing-xl);
}

.action-card {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-xl);
    border: 1px solid var(--outline-variant);
    text-align: center;
    cursor: pointer;
    transition: all 0.3s ease;
}

.action-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
}

.action-icon {
    width: 4rem;
    height: 4rem;
    background-color: var(--primary);
    color: var(--on-primary);
    border-radius: var(--radius-lg);
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto var(--spacing-lg);
}

.action-icon .material-symbols-outlined {
    font-size: 2rem;
}

.action-title {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-md);
}

.action-description {
    color: var(--on-surface-variant);
    line-height: 1.6;
}

/* Archive Statistics Section */
.archive-stats-section {
    padding: var(--spacing-3xl) 0;
}

.stats-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: var(--spacing-lg);
}

.stat-card {
    display: grid;
    grid-template-columns: auto 1fr;
    gap: var(--spacing-lg);
    align-items: center;
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-xl);
    border: 1px solid var(--outline-variant);
    transition: all 0.3s ease;
}

.stat-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
}

.stat-icon {
    width: 3.5rem;
    height: 3.5rem;
    background-color: var(--primary);
    color: var(--on-primary);
    border-radius: var(--radius-lg);
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}

.stat-icon .material-symbols-outlined {
    font-size: 2rem;
}

.stat-content {
    flex: 1;
}

.stat-number {
    font-size: 2rem;
    font-weight: 800;
    color: var(--primary);
    margin-bottom: var(--spacing-xs);
    line-height: 1;
}

.stat-label {
    font-size: 1rem;
    color: var(--on-surface-variant);
    font-weight: 500;
    margin-bottom: var(--spacing-sm);
}

.stat-change {
    display: flex;
    align-items: center;
    gap: var(--spacing-xs);
    font-size: 0.75rem;
    font-weight: 600;
}

.stat-change.positive {
    color: var(--tertiary);
}

.stat-change.negative {
    color: var(--error);
}

.stat-change .material-symbols-outlined {
    font-size: 1rem;
}

/* Archive Search Section */
.archive-search-section {
    padding: var(--spacing-3xl) 0;
    background-color: var(--surface-container-low);
}

.search-content {
    display: flex;
    justify-content: center;
}

.search-form {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-2xl);
    border: 1px solid var(--outline-variant);
    max-width: 800px;
    width: 100%;
}

.search-row {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: var(--spacing-lg);
    margin-bottom: var(--spacing-lg);
}

.form-group {
    margin-bottom: var(--spacing-lg);
}

.form-label {
    display: block;
    font-size: 0.875rem;
    font-weight: 600;
    color: var(--on-surface);
    margin-bottom: var(--spacing-sm);
}

.form-input,
.form-select {
    width: 100%;
    padding: var(--spacing-sm) var(--spacing-md);
    border: 1px solid var(--outline-variant);
    border-radius: var(--radius-md);
    background-color: var(--surface-container-lowest);
    color: var(--on-surface);
    font-size: 0.875rem;
    transition: all 0.2s ease;
}

.form-input:focus,
.form-select:focus {
    outline: none;
    border-color: var(--primary);
    box-shadow: 0 0 0 2px var(--primary-container);
}

.date-range {
    display: flex;
    align-items: center;
    gap: var(--spacing-md);
}

.date-range span {
    color: var(--on-surface-variant);
    font-weight: 500;
}

.search-actions {
    display: flex;
    gap: var(--spacing-lg);
    justify-content: center;
}

/* Recent Archives Section */
.recent-archives-section {
    padding: var(--spacing-3xl) 0;
}

.archives-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: var(--spacing-xl);
}

.archive-card {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    border: 1px solid var(--outline-variant);
    transition: all 0.3s ease;
}

.archive-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
}

.archive-header {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    padding: var(--spacing-lg);
    background-color: var(--surface-container);
    border-bottom: 1px solid var(--outline-variant);
}

.archive-icon {
    width: 3.5rem;
    height: 3.5rem;
    background-color: var(--primary);
    color: var(--on-primary);
    border-radius: var(--radius-lg);
    display: flex;
    align-items: center;
    justify-content: center;
}

.archive-icon .material-symbols-outlined {
    font-size: 2rem;
}

.archive-badge {
    padding: var(--spacing-xs) var(--spacing-sm);
    border-radius: var(--radius-full);
    font-size: 0.75rem;
    font-weight: 600;
    text-transform: uppercase;
}

.archive-badge.meeting {
    background-color: var(--secondary);
    color: var(--on-secondary);
}

.archive-badge.decision {
    background-color: var(--tertiary);
    color: var(--on-tertiary);
}

.archive-badge.document {
    background-color: var(--primary);
    color: var(--on-primary);
}

.archive-badge.project {
    background-color: var(--tertiary);
    color: var(--on-tertiary);
}

.archive-badge.media {
    background-color: var(--secondary);
    color: var(--on-secondary);
}

.archive-badge.financial {
    background-color: var(--primary);
    color: var(--on-primary);
}

.archive-content {
    padding: var(--spacing-lg);
}

.archive-title {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-md);
}

.archive-description {
    color: var(--on-surface-variant);
    line-height: 1.6;
    margin-bottom: var(--spacing-lg);
}

.archive-details {
    display: flex;
    flex-direction: column;
    gap: var(--spacing-sm);
    margin-bottom: var(--spacing-lg);
}

.detail-item {
    display: flex;
    align-items: center;
    gap: var(--spacing-sm);
    font-size: 0.875rem;
    color: var(--on-surface-variant);
}

.detail-item .material-symbols-outlined {
    font-size: 1.25rem;
    color: var(--primary);
}

.archive-actions {
    display: flex;
    gap: var(--spacing-sm);
}

.load-more {
    text-align: center;
    margin-top: var(--spacing-xl);
}

/* Archive Categories Section */
.archive-categories-section {
    padding: var(--spacing-3xl) 0;
    background-color: var(--surface-container-low);
}

.categories-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: var(--spacing-xl);
}

.category-card {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    border: 1px solid var(--outline-variant);
    transition: all 0.3s ease;
}

.category-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
}

.category-header {
    display: flex;
    align-items: center;
    gap: var(--spacing-lg);
    padding: var(--spacing-lg);
    background-color: var(--surface-container);
    border-bottom: 1px solid var(--outline-variant);
}

.category-icon {
    width: 3.5rem;
    height: 3.5rem;
    background-color: var(--primary);
    color: var(--on-primary);
    border-radius: var(--radius-lg);
    display: flex;
    align-items: center;
    justify-content: center;
}

.category-icon .material-symbols-outlined {
    font-size: 2rem;
}

.category-title {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--primary);
}

.category-content {
    padding: var(--spacing-lg);
}

.category-description {
    color: var(--on-surface-variant);
    line-height: 1.6;
    margin-bottom: var(--spacing-lg);
}

.category-stats {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: var(--spacing-lg);
    margin-bottom: var(--spacing-lg);
    padding: var(--spacing-md);
    background-color: var(--surface-container);
    border-radius: var(--radius-md);
}

.stat-item {
    text-align: center;
}

.stat-item .stat-number {
    font-size: 1.5rem;
    font-weight: 700;
    color: var(--primary);
    display: block;
    margin-bottom: var(--spacing-xs);
}

.stat-item .stat-label {
    font-size: 0.75rem;
    color: var(--on-surface-variant);
    text-transform: uppercase;
}

.category-features {
    display: flex;
    flex-direction: column;
    gap: var(--spacing-sm);
    margin-bottom: var(--spacing-lg);
}

.feature-item {
    display: flex;
    align-items: center;
    gap: var(--spacing-sm);
    font-size: 0.875rem;
    color: var(--on-surface-variant);
}

.feature-item .material-symbols-outlined {
    font-size: 1rem;
    color: var(--primary);
}

.category-actions {
    text-align: center;
}

/* FAQ Section */
.faq-section {
    padding: var(--spacing-3xl) 0;
}

.faq-list {
    max-width: 800px;
    margin: 0 auto;
}

.faq-item {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    border: 1px solid var(--outline-variant);
    margin-bottom: var(--spacing-md);
    overflow: hidden;
}

.faq-question {
    display: flex;
    justify-content: space-between;
    align-items: center;
    cursor: pointer;
    padding: var(--spacing-lg);
    font-weight: 600;
    color: var(--primary);
    transition: background-color 0.2s ease;
}

.faq-question:hover {
    background-color: var(--surface-container);
}

.faq-toggle {
    font-size: 1.25rem;
    transition: transform 0.2s ease;
}

.faq-item.active .faq-toggle {
    transform: rotate(45deg);
}

.faq-answer {
    display: none;
    padding: 0 var(--spacing-lg) var(--spacing-lg);
    color: var(--on-surface-variant);
    line-height: 1.6;
}

.faq-item.active .faq-answer {
    display: block;
}

/* Responsive Design */
@media (max-width: 768px) {
    .actions-grid {
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: var(--spacing-lg);
    }
    
    .stats-grid {
        grid-template-columns: repeat(2, 1fr);
        gap: var(--spacing-md);
    }
    
    .search-row {
        grid-template-columns: 1fr;
        gap: var(--spacing-md);
    }
    
    .archives-grid {
        grid-template-columns: 1fr;
        gap: var(--spacing-lg);
    }
    
    .categories-grid {
        grid-template-columns: 1fr;
        gap: var(--spacing-lg);
    }
    
    .search-actions {
        flex-direction: column;
        align-items: center;
    }
    
    .search-actions .btn {
        width: 100%;
        max-width: 300px;
    }
}

@media (max-width: 480px) {
    .action-card {
        padding: var(--spacing-lg);
    }
    
    .action-icon {
        width: 3rem;
        height: 3rem;
    }
    
    .action-icon .material-symbols-outlined {
        font-size: 1.5rem;
    }
    
    .archive-card {
        margin: 0 -var(--spacing-md);
        border-radius: 0;
    }
    
    .category-card {
        margin: 0 -var(--spacing-md);
        border-radius: 0;
    }
    
    .search-form {
        padding: var(--spacing-lg);
    }
    
    .date-range {
        flex-direction: column;
        align-items: stretch;
    }
    
    .date-range span {
        text-align: center;
        margin: var(--spacing-sm) 0;
    }
    
    .stats-grid {
        grid-template-columns: 1fr;
        gap: var(--spacing-md);
    }
    
    .stat-card {
        grid-template-columns: 1fr;
        text-align: center;
        gap: var(--spacing-md);
    }
    
    .archive-actions {
        flex-direction: column;
        gap: var(--spacing-sm);
    }
    
    .archive-actions .btn {
        width: 100%;
    }
    
    .category-stats {
        grid-template-columns: 1fr;
        gap: var(--spacing-md);
    }
}
</style>

<script>
// Quick action functions
function openMeetingArchives() {
    alert('Meeting archives portal would open here. In production, this would show council meeting minutes, attendance records, and video recordings.');
}

function openDecisionArchives() {
    alert('Decision archives portal would open here. In production, this would show council decisions, resolutions, and voting records.');
}

function openDocumentArchives() {
    alert('Document archives portal would open here. In production, this would show public documents, policies, and administrative records.');
}

function openFinancialArchives() {
    alert('Financial archives portal would open here. In production, this would show budget records, financial statements, and audit reports.');
}

function openProjectArchives() {
    alert('Project archives portal would open here. In production, this would show project reports, implementation records, and completion documents.');
}

function openMediaArchives() {
    alert('Media archives portal would open here. In production, this would show photos, videos, and multimedia content from council events.');
}

// Archive search form submission
document.getElementById('archiveSearchForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    const keywords = document.querySelector('input[placeholder*="keywords"]').value;
    const documentType = document.querySelector('select').value;
    const startDate = document.querySelectorAll('input[type="date"]')[0].value;
    const endDate = document.querySelectorAll('input[type="date"]')[1].value;
    const department = document.querySelectorAll('select')[1].value;
    
    if (!keywords && !documentType && !startDate && !endDate && !department) {
        alert('Please enter at least one search criteria.');
        return;
    }
    
    alert(`Searching archives with criteria:\nKeywords: ${keywords || 'All'}\nDocument Type: ${documentType || 'All'}\nDate Range: ${startDate || 'Any'} to ${endDate || 'Any'}\nDepartment: ${department || 'All'}`);
    // In production, this would perform the archive search
});

// Archive actions
document.querySelectorAll('.archive-actions .btn-primary').forEach(button => {
    if (button.textContent.includes('View')) {
        button.addEventListener('click', function() {
            const archiveTitle = this.closest('.archive-card').querySelector('.archive-title').textContent;
            alert(`Viewing: "${archiveTitle}"`);
        });
    }
});

document.querySelectorAll('.archive-actions .btn-outline').forEach(button => {
    if (button.textContent.includes('Download')) {
        button.addEventListener('click', function() {
            const archiveTitle = this.closest('.archive-card').querySelector('.archive-title').textContent;
            alert(`Downloading: "${archiveTitle}"`);
        });
    }
});

// Category actions
document.querySelectorAll('.category-actions .btn-primary').forEach(button => {
    if (button.textContent.includes('Browse')) {
        button.addEventListener('click', function() {
            const categoryTitle = this.closest('.category-card').querySelector('.category-title').textContent;
            alert(`Browsing: "${categoryTitle}"`);
        });
    }
});

// Load more archives
document.querySelector('.load-more .btn').addEventListener('click', function() {
    alert('Loading more archives... In production, this would load additional archive records from the database.');
});

// FAQ toggle function
function toggleFAQ(element) {
    const faqItem = element.parentElement;
    faqItem.classList.toggle('active');
}

// Progress animation on scroll
window.addEventListener('scroll', function() {
    const statCards = document.querySelectorAll('.stat-card');
    statCards.forEach(card => {
        const rect = card.getBoundingClientRect();
        const isVisible = rect.top < window.innerHeight && rect.bottom > 0;
        if (isVisible) {
            card.style.opacity = '0';
            card.style.transform = 'translateY(20px)';
            setTimeout(() => {
                card.style.opacity = '1';
                card.style.transform = 'translateY(0)';
            }, 100);
        }
    });
});

// Auto-refresh archive statistics
function refreshArchiveStats() {
    // In production, this would fetch real-time archive statistics
    console.log('Refreshing council archive statistics...');
    
    // Simulate document count updates
    const documentElement = document.querySelector('.stat-number');
    if (documentElement && documentElement.textContent.includes(',')) {
        // Simulate real-time document additions
        const currentCount = parseInt(documentElement.textContent.replace(',', ''));
        const increment = Math.floor(Math.random() * 5) + 1;
        const newCount = currentCount + increment;
        documentElement.textContent = newCount.toLocaleString();
    }
}

// Refresh statistics every 60 seconds
setInterval(refreshArchiveStats, 60000);
</script>
