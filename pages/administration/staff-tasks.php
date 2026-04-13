<?php
/**
 * Bamenda City Council E-Governance Platform
 * Administration Staff Tasks Page
 */

// Set page metadata
$page_title = 'Staff Tasks | Bamenda City Council';
$page_description = 'Comprehensive staff task management system for Bamenda City Council including task assignment, tracking, and performance monitoring.';
$page_keywords = 'staff tasks, task management, work assignments, performance tracking, Bamenda council administration';

// Set breadcrumbs
$breadcrumbs = [
    ['title' => 'Administration', 'url' => '../index.php'],
    ['title' => 'Staff Tasks', 'url' => '#']
];

// Include header
require_once __DIR__ . '/../../includes/header.php';
?>

<!-- Hero Section -->
<section class="hero staff-tasks-hero">
    <div class="hero-background">
        <img src="../../assets/images/bamenda-government-building.jpg">
    </div>
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="hero-content">
            <span class="badge badge-secondary">Staff Tasks</span>
            <h1 class="hero-title">Work Assignments & Tasks</h1>
            <p class="hero-subtitle">
                Comprehensive staff task management system including work assignments, task tracking, performance monitoring, deadline management, and collaborative workflow tools for Bamenda City Council employees.
            </p>
            <div class="hero-actions">
                <a href="#task-board" class="btn btn-lg btn-secondary">
                    <span class="material-symbols-outlined">assignment</span>
                    Task Board
                </a>
                <a href="#create-task" class="btn btn-lg btn-outline">
                    <span class="material-symbols-outlined">add_task</span>
                    Create Task
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Quick Actions -->
<section class="quick-actions-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Task Actions</h2>
            <p class="section-subtitle">Quick access to task management</p>
        </div>

        <div class="actions-grid">
            <div class="action-card" onclick="openTaskBoard()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">assignment</span>
                </div>
                <h3 class="action-title">Task Board</h3>
                <p class="action-description">View all tasks</p>
            </div>

            <div class="action-card" onclick="openMyTasks()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">person</span>
                </div>
                <h3 class="action-title">My Tasks</h3>
                <p class="action-description">Personal tasks</p>
            </div>

            <div class="action-card" onclick="openCreateTask()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">add_task</span>
                </div>
                <h3 class="action-title">Create Task</h3>
                <p class="action-description">New assignment</p>
            </div>

            <div class="action-card" onclick="openReports()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">assessment</span>
                </div>
                <h3 class="action-title">Progress Reports</h3>
                <p class="action-description">Task analytics</p>
            </div>

            <div class="action-card" onclick="openCalendar()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">calendar_month</span>
                </div>
                <h3 class="action-title">Task Calendar</h3>
                <p class="action-description">Schedule view</p>
            </div>

            <div class="action-card" onclick="openTemplates()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">content_paste</span>
                </div>
                <h3 class="action-title">Templates</h3>
                <p class="action-description">Task templates</p>
            </div>
        </div>
    </div>
</section>

<!-- Task Statistics -->
<section class="task-stats-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Task Overview</h2>
            <p class="section-subtitle">Real-time task statistics</p>
        </div>

        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">assignment</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">1,234</div>
                    <div class="stat-label">Total Tasks</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+234 new tasks</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">pending</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">456</div>
                    <div class="stat-label">Pending Tasks</div>
                    <div class="stat-change negative">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+45 pending</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">progress_activity</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">789</div>
                    <div class="stat-label">In Progress</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+123 active</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">task_alt</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">5,678</div>
                    <div class="stat-label">Completed</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+890 completed</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">schedule</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">92%</div>
                    <div class="stat-label">On-Time Completion</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+5% efficiency</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">groups</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">456</div>
                    <div class="stat-label">Staff Assigned</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+23 active staff</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Task Board -->
<section class="task-board-section" id="task-board">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Task Board</h2>
            <p class="section-subtitle">Kanban-style task management</p>
        </div>

        <div class="board-controls">
            <div class="filter-controls">
                <select class="filter-select">
                    <option value="">All Departments</option>
                    <option value="admin">Administration</option>
                    <option value="business">Business Services</option>
                    <option value="public">Public Services</option>
                    <option value="emergency">Emergency Services</option>
                    <option value="civic">Civic Engagement</option>
                    <option value="youth">Youth Services</option>
                </select>
                <select class="filter-select">
                    <option value="">All Priorities</option>
                    <option value="urgent">Urgent</option>
                    <option value="high">High</option>
                    <option value="medium">Medium</option>
                    <option value="low">Low</option>
                </select>
                <select class="filter-select">
                    <option value="">All Status</option>
                    <option value="pending">Pending</option>
                    <option value="progress">In Progress</option>
                    <option value="review">Under Review</option>
                    <option value="completed">Completed</option>
                </select>
            </div>
            <div class="view-controls">
                <button class="btn btn-sm btn-primary">Board View</button>
                <button class="btn btn-sm btn-outline">List View</button>
                <button class="btn btn-sm btn-outline">Calendar View</button>
            </div>
        </div>

        <div class="kanban-board">
            <!-- To Do Column -->
            <div class="kanban-column">
                <div class="column-header">
                    <h3 class="column-title">To Do</h3>
                    <span class="task-count">45 tasks</span>
                </div>
                <div class="column-content">
                    <div class="task-card" draggable="true">
                        <div class="task-header">
                            <div class="task-priority urgent">Urgent</div>
                            <div class="task-id">#TASK-1234</div>
                        </div>
                        <div class="task-content">
                            <h4 class="task-title">Prepare Monthly Report</h4>
                            <p class="task-description">Compile and analyze monthly administrative performance metrics for December 2024.</p>
                            <div class="task-meta">
                                <div class="task-assignee">
                                    <img src="/assets/images/user-avatar-placeholder.png" alt="Assignee">
                                    <span>John Doe</span>
                                </div>
                                <div class="task-deadline">
                                    <span class="material-symbols-outlined">event</span>
                                    <span>Dec 20, 2024</span>
                                </div>
                            </div>
                        </div>
                        <div class="task-footer">
                            <div class="task-tags">
                                <span class="tag">Reports</span>
                                <span class="tag">Administration</span>
                            </div>
                            <div class="task-actions">
                                <button class="btn-icon" title="Edit">
                                    <span class="material-symbols-outlined">edit</span>
                                </button>
                                <button class="btn-icon" title="View">
                                    <span class="material-symbols-outlined">visibility</span>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="task-card" draggable="true">
                        <div class="task-header">
                            <div class="task-priority high">High</div>
                            <div class="task-id">#TASK-1235</div>
                        </div>
                        <div class="task-content">
                            <h4 class="task-title">Update System Documentation</h4>
                            <p class="task-description">Review and update all system documentation with latest features and procedures.</p>
                            <div class="task-meta">
                                <div class="task-assignee">
                                    <img src="/assets/images/user-avatar-placeholder.png" alt="Assignee">
                                    <span>Jane Smith</span>
                                </div>
                                <div class="task-deadline">
                                    <span class="material-symbols-outlined">event</span>
                                    <span>Dec 22, 2024</span>
                                </div>
                            </div>
                        </div>
                        <div class="task-footer">
                            <div class="task-tags">
                                <span class="tag">Documentation</span>
                                <span class="tag">IT</span>
                            </div>
                            <div class="task-actions">
                                <button class="btn-icon" title="Edit">
                                    <span class="material-symbols-outlined">edit</span>
                                </button>
                                <button class="btn-icon" title="View">
                                    <span class="material-symbols-outlined">visibility</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- In Progress Column -->
            <div class="kanban-column">
                <div class="column-header">
                    <h3 class="column-title">In Progress</h3>
                    <span class="task-count">23 tasks</span>
                </div>
                <div class="column-content">
                    <div class="task-card" draggable="true">
                        <div class="task-header">
                            <div class="task-priority medium">Medium</div>
                            <div class="task-id">#TASK-1236</div>
                        </div>
                        <div class="task-content">
                            <h4 class="task-title">Staff Training Coordination</h4>
                            <p class="task-description">Organize and coordinate upcoming staff training sessions for Q1 2025.</p>
                            <div class="task-meta">
                                <div class="task-assignee">
                                    <img src="/assets/images/user-avatar-placeholder.png" alt="Assignee">
                                    <span>Michael Johnson</span>
                                </div>
                                <div class="task-deadline">
                                    <span class="material-symbols-outlined">event</span>
                                    <span>Dec 25, 2024</span>
                                </div>
                            </div>
                        </div>
                        <div class="task-footer">
                            <div class="task-tags">
                                <span class="tag">Training</span>
                                <span class="tag">HR</span>
                            </div>
                            <div class="task-actions">
                                <button class="btn-icon" title="Edit">
                                    <span class="material-symbols-outlined">edit</span>
                                </button>
                                <button class="btn-icon" title="View">
                                    <span class="material-symbols-outlined">visibility</span>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="task-card" draggable="true">
                        <div class="task-header">
                            <div class="task-priority low">Low</div>
                            <div class="task-id">#TASK-1237</div>
                        </div>
                        <div class="task-content">
                            <h4 class="task-title">Office Supplies Inventory</h4>
                            <p class="task-description">Conduct quarterly inventory check and restock office supplies.</p>
                            <div class="task-meta">
                                <div class="task-assignee">
                                    <img src="/assets/images/user-avatar-placeholder.png" alt="Assignee">
                                    <span>Sarah Williams</span>
                                </div>
                                <div class="task-deadline">
                                    <span class="material-symbols-outlined">event</span>
                                    <span>Dec 28, 2024</span>
                                </div>
                            </div>
                        </div>
                        <div class="task-footer">
                            <div class="task-tags">
                                <span class="tag">Inventory</span>
                                <span class="tag">Admin</span>
                            </div>
                            <div class="task-actions">
                                <button class="btn-icon" title="Edit">
                                    <span class="material-symbols-outlined">edit</span>
                                </button>
                                <button class="btn-icon" title="View">
                                    <span class="material-symbols-outlined">visibility</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Review Column -->
            <div class="kanban-column">
                <div class="column-header">
                    <h3 class="column-title">Under Review</h3>
                    <span class="task-count">12 tasks</span>
                </div>
                <div class="column-content">
                    <div class="task-card" draggable="true">
                        <div class="task-header">
                            <div class="task-priority high">High</div>
                            <div class="task-id">#TASK-1238</div>
                        </div>
                        <div class="task-content">
                            <h4 class="task-title">Budget Analysis Report</h4>
                            <p class="task-description">Complete comprehensive budget analysis for Q4 2024 financial performance.</p>
                            <div class="task-meta">
                                <div class="task-assignee">
                                    <img src="/assets/images/user-avatar-placeholder.png" alt="Assignee">
                                    <span>Robert Brown</span>
                                </div>
                                <div class="task-deadline">
                                    <span class="material-symbols-outlined">event</span>
                                    <span>Dec 18, 2024</span>
                                </div>
                            </div>
                        </div>
                        <div class="task-footer">
                            <div class="task-tags">
                                <span class="tag">Finance</span>
                                <span class="tag">Reports</span>
                            </div>
                            <div class="task-actions">
                                <button class="btn-icon" title="Edit">
                                    <span class="material-symbols-outlined">edit</span>
                                </button>
                                <button class="btn-icon" title="View">
                                    <span class="material-symbols-outlined">visibility</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Completed Column -->
            <div class="kanban-column">
                <div class="column-header">
                    <h3 class="column-title">Completed</h3>
                    <span class="task-count">156 tasks</span>
                </div>
                <div class="column-content">
                    <div class="task-card" draggable="true">
                        <div class="task-header">
                            <div class="task-priority medium">Medium</div>
                            <div class="task-id">#TASK-1239</div>
                        </div>
                        <div class="task-content">
                            <h4 class="task-title">System Security Update</h4>
                            <p class="task-description">Deploy latest security patches and update system protocols.</p>
                            <div class="task-meta">
                                <div class="task-assignee">
                                    <img src="/assets/images/user-avatar-placeholder.png" alt="Assignee">
                                    <span>Lisa Chen</span>
                                </div>
                                <div class="task-deadline">
                                    <span class="material-symbols-outlined">check_circle</span>
                                    <span>Completed: Dec 15, 2024</span>
                                </div>
                            </div>
                        </div>
                        <div class="task-footer">
                            <div class="task-tags">
                                <span class="tag">Security</span>
                                <span class="tag">IT</span>
                            </div>
                            <div class="task-actions">
                                <button class="btn-icon" title="View">
                                    <span class="material-symbols-outlined">visibility</span>
                                </button>
                                <button class="btn-icon" title="Archive">
                                    <span class="material-symbols-outlined">archive</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Create Task Form -->
<section class="create-task-section" id="create-task">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Create New Task</h2>
            <p class="section-subtitle">Assign work to staff members</p>
        </div>

        <div class="form-container">
            <form id="createTaskForm">
                <div class="form-section">
                    <h3 class="section-title">Task Details</h3>
                    
                    <div class="form-group">
                        <label class="form-label">Task Title *</label>
                        <input type="text" class="form-input" placeholder="Enter task title" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Task Description *</label>
                        <textarea class="form-textarea" rows="4" placeholder="Provide detailed task description and requirements" required></textarea>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label">Priority *</label>
                            <select class="form-select" required>
                                <option value="">Select priority</option>
                                <option value="urgent">Urgent</option>
                                <option value="high">High</option>
                                <option value="medium">Medium</option>
                                <option value="low">Low</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Category *</label>
                            <select class="form-select" required>
                                <option value="">Select category</option>
                                <option value="administrative">Administrative</option>
                                <option value="technical">Technical</option>
                                <option value="financial">Financial</option>
                                <option value="operational">Operational</option>
                                <option value="training">Training</option>
                                <option value="maintenance">Maintenance</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label">Department *</label>
                            <select class="form-select" required>
                                <option value="">Select department</option>
                                <option value="admin">Administration</option>
                                <option value="business">Business Services</option>
                                <option value="public">Public Services</option>
                                <option value="emergency">Emergency Services</option>
                                <option value="civic">Civic Engagement</option>
                                <option value="youth">Youth Services</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Estimated Hours</label>
                            <input type="number" class="form-input" placeholder="8" min="1" max="160">
                        </div>
                    </div>
                </div>

                <div class="form-section">
                    <h3 class="section-title">Assignment & Timeline</h3>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label">Assign To *</label>
                            <select class="form-select" required>
                                <option value="">Select staff member</option>
                                <option value="john">John Doe - Administration</option>
                                <option value="jane">Jane Smith - Business Services</option>
                                <option value="michael">Michael Johnson - Public Services</option>
                                <option value="sarah">Sarah Williams - Emergency Services</option>
                                <option value="robert">Robert Brown - Civic Engagement</option>
                                <option value="lisa">Lisa Chen - Youth Services</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Reviewer</label>
                            <select class="form-select">
                                <option value="">Select reviewer</option>
                                <option value="supervisor1">Department Supervisor</option>
                                <option value="supervisor2">Senior Manager</option>
                                <option value="supervisor3">Department Head</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label">Start Date *</label>
                            <input type="date" class="form-input" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Due Date *</label>
                            <input type="date" class="form-input" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Dependencies</label>
                        <input type="text" class="form-input" placeholder="Task IDs that must be completed first (e.g., #TASK-1234, #TASK-1235)">
                        <small class="form-help">Enter task IDs separated by commas if this task depends on other tasks</small>
                    </div>
                </div>

                <div class="form-section">
                    <h3 class="section-title">Resources & Attachments</h3>
                    
                    <div class="form-group">
                        <label class="form-label">Required Resources</label>
                        <textarea class="form-textarea" rows="3" placeholder="List any resources, equipment, or materials needed"></textarea>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Attachments</label>
                        <div class="file-upload">
                            <input type="file" id="taskFiles" multiple accept=".pdf,.doc,.docx,.xls,.xlsx,.png,.jpg,.jpeg">
                            <label for="taskFiles" class="file-label">
                                <span class="material-symbols-outlined">upload_file</span>
                                <span>Choose Files</span>
                            </label>
                            <div class="file-list" id="fileList">
                                <!-- Selected files will be listed here -->
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Tags</label>
                        <input type="text" class="form-input" placeholder="Enter tags separated by commas (e.g., urgent, reports, q4)">
                        <small class="form-help">Tags help organize and filter tasks</small>
                    </div>
                </div>

                <div class="form-section">
                    <h3 class="section-title">Notifications & Follow-up</h3>
                    
                    <div class="form-group">
                        <label class="form-label">Notification Settings</label>
                        <div class="checkbox-group">
                            <label class="checkbox-label">
                                <input type="checkbox" name="notifications" value="assignee" checked>
                                <span class="checkmark"></span>
                                <span>Notify assignee immediately</span>
                            </label>
                            <label class="checkbox-label">
                                <input type="checkbox" name="notifications" value="reviewer" checked>
                                <span class="checkmark"></span>
                                <span>Notify reviewer when ready</span>
                            </label>
                            <label class="checkbox-label">
                                <input type="checkbox" name="notifications" value="reminder" checked>
                                <span class="checkmark"></span>
                                <span>Send deadline reminders</span>
                            </label>
                            <label class="checkbox-label">
                                <input type="checkbox" name="notifications" value="progress">
                                <span class="checkmark"></span>
                                <span>Request progress updates</span>
                            </label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Follow-up Schedule</label>
                        <select class="form-select">
                            <option value="">No automatic follow-up</option>
                            <option value="daily">Daily check-ins</option>
                            <option value="weekly">Weekly updates</option>
                            <option value="milestone">Milestone-based</option>
                        </select>
                    </div>
                </div>

                <div class="form-actions">
                    <button type="reset" class="btn btn-outline">Reset</button>
                    <button type="submit" class="btn btn-primary">Create Task</button>
                </div>
            </form>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="faq-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Frequently Asked Questions</h2>
            <p class="section-subtitle">Common questions about staff tasks</p>
        </div>

        <div class="faq-list">
            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>How do I assign tasks to multiple staff?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>When creating a task, you can select multiple assignees from the staff list. Each assignee will receive individual notification and can collaborate on the task through comments and updates.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>Can I set up recurring tasks?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Yes, you can create recurring tasks for regular activities like weekly reports, monthly maintenance, or quarterly reviews. Set the frequency and end date, and the system will automatically generate tasks.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>How are task priorities determined?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Task priorities are set based on urgency, impact, and deadlines. Urgent tasks require immediate attention, high priority tasks affect critical operations, medium tasks are important but not urgent, and low priority tasks can be scheduled as time permits.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>Can staff members reassign tasks?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Staff can request task reassignment with valid reasons. The request is sent to the task creator or department manager for approval. Emergency reassignments may be made immediately with proper documentation.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>How are overdue tasks handled?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Overdue tasks are automatically flagged and notifications sent to assignee and supervisor. Tasks overdue by more than 3 days trigger escalation to department heads. Performance metrics track overdue completion rates.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>Can I export task data for reporting?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Yes, task data can be exported in various formats including Excel, CSV, and PDF. You can export by date range, department, assignee, or task status for comprehensive reporting and analysis.</p>
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
/* Staff Tasks Page Styles */
.staff-tasks-hero {
    background: linear-gradient(135deg, var(--secondary) 0%, var(--secondary-container) 100%);
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
    background-color: var(--secondary);
    color: var(--on-secondary);
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
    color: var(--secondary);
    margin-bottom: var(--spacing-md);
}

.action-description {
    color: var(--on-surface-variant);
    line-height: 1.6;
}

/* Task Statistics Section */
.task-stats-section {
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
    background-color: var(--secondary);
    color: var(--on-secondary);
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
    color: var(--secondary);
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

/* Task Board Section */
.task-board-section {
    padding: var(--spacing-3xl) 0;
    background-color: var(--surface-container-low);
}

.board-controls {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: var(--spacing-xl);
    flex-wrap: wrap;
    gap: var(--spacing-lg);
}

.filter-controls {
    display: flex;
    gap: var(--spacing-md);
    flex-wrap: wrap;
}

.filter-select {
    padding: var(--spacing-sm) var(--spacing-md);
    border: 1px solid var(--outline-variant);
    border-radius: var(--radius-md);
    background-color: var(--surface-container-lowest);
    color: var(--on-surface);
    font-size: 0.875rem;
}

.view-controls {
    display: flex;
    gap: var(--spacing-sm);
}

.kanban-board {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: var(--spacing-xl);
    margin-bottom: var(--spacing-xl);
}

.kanban-column {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    border: 1px solid var(--outline-variant);
    min-height: 400px;
}

.column-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: var(--spacing-lg);
    background-color: var(--surface-container);
    border-bottom: 1px solid var(--outline-variant);
    border-radius: var(--radius-lg) var(--radius-lg) 0 0;
}

.column-title {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--secondary);
}

.task-count {
    background-color: var(--secondary);
    color: var(--on-secondary);
    padding: var(--spacing-xs) var(--spacing-sm);
    border-radius: var(--radius-full);
    font-size: 0.75rem;
    font-weight: 600;
}

.column-content {
    padding: var(--spacing-lg);
    min-height: 300px;
}

/* Task Cards */
.task-card {
    background-color: var(--surface-container-lowest);
    border: 1px solid var(--outline-variant);
    border-radius: var(--radius-md);
    margin-bottom: var(--spacing-lg);
    cursor: move;
    transition: all 0.3s ease;
}

.task-card:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
}

.task-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: var(--spacing-md);
    background-color: var(--surface-container);
    border-bottom: 1px solid var(--outline-variant);
}

.task-priority {
    padding: var(--spacing-xs) var(--spacing-sm);
    border-radius: var(--radius-full);
    font-size: 0.75rem;
    font-weight: 600;
    text-transform: uppercase;
}

.task-priority.urgent {
    background-color: var(--error);
    color: var(--on-error);
}

.task-priority.high {
    background-color: var(--secondary);
    color: var(--on-secondary);
}

.task-priority.medium {
    background-color: var(--tertiary);
    color: var(--on-tertiary);
}

.task-priority.low {
    background-color: var(--primary);
    color: var(--on-primary);
}

.task-id {
    font-size: 0.75rem;
    color: var(--on-surface-variant);
    font-weight: 600;
}

.task-content {
    padding: var(--spacing-md);
}

.task-title {
    font-size: 1rem;
    font-weight: 600;
    color: var(--secondary);
    margin-bottom: var(--spacing-sm);
}

.task-description {
    font-size: 0.875rem;
    color: var(--on-surface-variant);
    line-height: 1.5;
    margin-bottom: var(--spacing-md);
}

.task-meta {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: var(--spacing-md);
}

.task-assignee {
    display: flex;
    align-items: center;
    gap: var(--spacing-sm);
    font-size: 0.875rem;
    color: var(--on-surface-variant);
}

.task-assignee img {
    width: 1.5rem;
    height: 1.5rem;
    border-radius: 50%;
    object-fit: cover;
}

.task-deadline {
    display: flex;
    align-items: center;
    gap: var(--spacing-xs);
    font-size: 0.75rem;
    color: var(--on-surface-variant);
}

.task-deadline .material-symbols-outlined {
    font-size: 1rem;
}

.task-footer {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: var(--spacing-md);
    background-color: var(--surface-container);
    border-top: 1px solid var(--outline-variant);
}

.task-tags {
    display: flex;
    gap: var(--spacing-xs);
    flex-wrap: wrap;
}

.tag {
    background-color: var(--surface-container-high);
    color: var(--on-surface-variant);
    padding: var(--spacing-xs) var(--spacing-sm);
    border-radius: var(--radius-full);
    font-size: 0.75rem;
    font-weight: 500;
}

.task-actions {
    display: flex;
    gap: var(--spacing-xs);
}

.btn-icon {
    width: 2rem;
    height: 2rem;
    border: none;
    background-color: var(--surface-container);
    border-radius: var(--radius-md);
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    transition: all 0.2s ease;
}

.btn-icon:hover {
    background-color: var(--surface-container-high);
}

.btn-icon .material-symbols-outlined {
    font-size: 1rem;
    color: var(--on-surface);
}

/* Create Task Form Section */
.create-task-section {
    padding: var(--spacing-3xl) 0;
}

.form-container {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    border: 1px solid var(--outline-variant);
    max-width: 800px;
    margin: 0 auto;
}

/* Form Styles */
.form-section {
    padding: var(--spacing-xl);
    border-bottom: 1px solid var(--outline-variant);
}

.form-section:last-child {
    border-bottom: none;
}

.section-title {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--secondary);
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
.form-textarea,
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
.form-textarea:focus,
.form-select:focus {
    outline: none;
    border-color: var(--secondary);
    box-shadow: 0 0 0 2px var(--secondary-container);
}

.form-textarea {
    resize: vertical;
    min-height: 100px;
}

.form-help {
    display: block;
    font-size: 0.75rem;
    color: var(--on-surface-variant);
    margin-top: var(--spacing-xs);
}

.form-row {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: var(--spacing-lg);
}

.checkbox-group {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: var(--spacing-sm);
}

.checkbox-label {
    display: flex;
    align-items: flex-start;
    gap: var(--spacing-sm);
    cursor: pointer;
    color: var(--on-surface);
    font-size: 0.875rem;
    line-height: 1.5;
}

.checkbox-label input[type="checkbox"] {
    display: none;
    margin-top: 2px;
}

.checkmark {
    width: 1.25rem;
    height: 1.25rem;
    border: 2px solid var(--outline-variant);
    border-radius: var(--radius-xs);
    position: relative;
    transition: all 0.2s ease;
    flex-shrink: 0;
    margin-top: 2px;
}

.checkbox-label input[type="checkbox"]:checked + .checkmark {
    background-color: var(--secondary);
    border-color: var(--secondary);
}

.checkbox-label input[type="checkbox"]:checked + .checkmark::after {
    content: '✓';
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: var(--on-secondary);
    font-size: 0.875rem;
    font-weight: 700;
}

.file-upload {
    border: 2px dashed var(--outline-variant);
    border-radius: var(--radius-md);
    padding: var(--spacing-lg);
    text-align: center;
    background-color: var(--surface-container);
}

.file-upload input[type="file"] {
    display: none;
}

.file-label {
    display: inline-flex;
    align-items: center;
    gap: var(--spacing-sm);
    padding: var(--spacing-sm) var(--spacing-md);
    background-color: var(--secondary);
    color: var(--on-secondary);
    border-radius: var(--radius-md);
    cursor: pointer;
    transition: all 0.2s ease;
}

.file-label:hover {
    background-color: var(--secondary-container);
}

.file-list {
    margin-top: var(--spacing-md);
    text-align: left;
}

.form-actions {
    display: flex;
    gap: var(--spacing-lg);
    justify-content: center;
    padding: var(--spacing-xl);
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
    color: var(--secondary);
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
    
    .board-controls {
        flex-direction: column;
        align-items: stretch;
        gap: var(--spacing-lg);
    }
    
    .filter-controls {
        flex-direction: column;
        gap: var(--spacing-sm);
    }
    
    .view-controls {
        justify-content: center;
    }
    
    .kanban-board {
        grid-template-columns: 1fr;
        gap: var(--spacing-lg);
    }
    
    .form-row {
        grid-template-columns: 1fr;
        gap: var(--spacing-md);
    }
    
    .checkbox-group {
        grid-template-columns: 1fr;
        gap: var(--spacing-sm);
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
    
    .kanban-column {
        margin: 0 -var(--spacing-md);
        border-radius: 0;
    }
    
    .form-container {
        margin: 0 -var(--spacing-md);
        border-radius: 0;
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
    
    .task-meta {
        flex-direction: column;
        align-items: flex-start;
        gap: var(--spacing-sm);
    }
    
    .task-footer {
        flex-direction: column;
        gap: var(--spacing-sm);
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
</style>

<script>
// Quick action functions
function openTaskBoard() {
    document.getElementById('task-board').scrollIntoView({ behavior: 'smooth' });
}

function openMyTasks() {
    alert('My tasks portal would open here. In production, this would show tasks assigned to the current user with filtering and sorting options.');
}

function openCreateTask() {
    document.getElementById('create-task').scrollIntoView({ behavior: 'smooth' });
}

function openReports() {
    alert('Progress reports portal would open here. In production, this would show task completion analytics, performance metrics, and productivity reports.');
}

function openCalendar() {
    alert('Task calendar view would open here. In production, this would show tasks in calendar format with drag-and-drop scheduling.');
}

function openTemplates() {
    alert('Task templates portal would open here. In production, this would show pre-defined task templates for quick creation.');
}

// Filter functionality
document.querySelectorAll('.filter-select').forEach(select => {
    select.addEventListener('change', function() {
        console.log('Filter changed:', this.value);
        // In production, this would filter the kanban board
    });
});

// Drag and drop functionality
let draggedElement = null;

document.querySelectorAll('.task-card').forEach(card => {
    card.addEventListener('dragstart', function(e) {
        draggedElement = this;
        this.style.opacity = '0.5';
    });
    
    card.addEventListener('dragend', function(e) {
        this.style.opacity = '';
        draggedElement = null;
    });
});

document.querySelectorAll('.column-content').forEach(column => {
    column.addEventListener('dragover', function(e) {
        e.preventDefault();
        this.style.backgroundColor = 'var(--surface-container)';
    });
    
    column.addEventListener('dragleave', function(e) {
        this.style.backgroundColor = '';
    });
    
    column.addEventListener('drop', function(e) {
        e.preventDefault();
        this.style.backgroundColor = '';
        if (draggedElement) {
            this.appendChild(draggedElement);
            console.log('Task moved to new column');
            // In production, this would update task status in database
        }
    });
});

// Task card actions
document.querySelectorAll('.task-actions .btn-icon').forEach(button => {
    button.addEventListener('click', function() {
        const action = this.getAttribute('title');
        const taskId = this.closest('.task-card').querySelector('.task-id').textContent;
        console.log(`${action} task: ${taskId}`);
        // In production, this would perform the respective action
    });
});

// File upload functionality
document.getElementById('taskFiles')?.addEventListener('change', function(e) {
    const files = e.target.files;
    const fileList = document.getElementById('fileList');
    fileList.innerHTML = '';
    
    Array.from(files).forEach(file => {
        const fileItem = document.createElement('div');
        fileItem.className = 'file-item';
        fileItem.innerHTML = `
            <span class="material-symbols-outlined">attach_file</span>
            <span>${file.name}</span>
            <span class="file-size">(${(file.size / 1024).toFixed(2)} KB)</span>
        `;
        fileList.appendChild(fileItem);
    });
});

// Create task form submission
document.getElementById('createTaskForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    // Validate required fields
    const title = document.querySelector('input[placeholder*="task title"]').value;
    const description = document.querySelector('textarea[placeholder*="task description"]').value;
    const priority = document.querySelector('select[required]').value;
    const category = document.querySelectorAll('select[required]')[1].value;
    const department = document.querySelectorAll('select[required]')[2].value;
    const assignee = document.querySelectorAll('select[required]')[3].value;
    const startDate = document.querySelectorAll('input[type="date"]')[0].value;
    const dueDate = document.querySelectorAll('input[type="date"]')[1].value;
    
    if (!title || !description || !priority || !category || !department || !assignee || !startDate || !dueDate) {
        alert('Please fill in all required fields.');
        return;
    }
    
    // Validate dates
    if (new Date(startDate) >= new Date(dueDate)) {
        alert('Due date must be after start date.');
        return;
    }
    
    alert(`Task "${title}" created successfully and assigned to ${assignee}! The assignee will receive notification immediately.`);
    // In production, this would submit the task creation request
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

// Auto-refresh task statistics
function refreshTaskStats() {
    // In production, this would fetch real-time task statistics
    console.log('Refreshing task statistics...');
    
    // Simulate task count updates
    const totalElement = document.querySelector('.stat-number');
    if (totalElement && totalElement.textContent.includes(',')) {
        const currentCount = parseInt(totalElement.textContent.replace(',', ''));
        const increment = Math.floor(Math.random() * 10) + 1;
        const newCount = currentCount + increment;
        totalElement.textContent = newCount.toLocaleString();
    }
}

// Refresh statistics every 60 seconds for real-time monitoring
setInterval(refreshTaskStats, 60000);
</script>
