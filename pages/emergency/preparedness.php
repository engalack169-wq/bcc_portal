<?php
/**
 * Bamenda City Council E-Governance Platform
 * Emergency Preparedness Page
 */

// Set page metadata
$page_title = 'Emergency Preparedness | Bamenda City Council';
$page_description = 'Access emergency preparedness resources, safety guidelines, disaster planning, and community resilience programs for Bamenda residents.';
$page_keywords = 'emergency preparedness, disaster planning, safety guidelines, community resilience, Bamenda emergency management';

// Set breadcrumbs
$breadcrumbs = [
    ['title' => 'Emergency', 'url' => '../index.php'],
    ['title' => 'Preparedness', 'url' => '#']
];

// Include header
require_once __DIR__ . '/../../includes/header.php';
?>

<!-- Hero Section -->
<section class="hero emergency-preparedness-hero">
    <div class="hero-background">
        <img src="../../assets/images/bamenda-emergency-services.jpg">
    </div>
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="hero-content">
            <span class="badge badge-secondary">Emergency Preparedness</span>
            <h1 class="hero-title">Emergency Preparedness & Safety</h1>
            <p class="hero-subtitle">
                Comprehensive emergency preparedness resources including safety guidelines, disaster planning, evacuation routes, and community resilience programs to help Bamenda residents prepare for and respond to emergencies effectively.
            </p>
            <div class="hero-actions">
                <a href="#safety-guidelines" class="btn btn-lg btn-secondary">
                    <span class="material-symbols-outlined">safety_check</span>
                    Safety Guidelines
                </a>
                <a href="#emergency-plans" class="btn btn-lg btn-outline">
                    <span class="material-symbols-outlined">assignment</span>
                    Emergency Plans
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Quick Actions -->
<section class="quick-actions-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Preparedness Actions</h2>
            <p class="section-subtitle">Quick access to emergency preparedness resources</p>
        </div>

        <div class="actions-grid">
            <div class="action-card" onclick="openSafetyGuidelines()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">safety_check</span>
                </div>
                <h3 class="action-title">Safety Guidelines</h3>
                <p class="action-description">Access safety protocols and procedures</p>
            </div>

            <div class="action-card" onclick="openEmergencyPlans()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">assignment</span>
                </div>
                <h3 class="action-title">Emergency Plans</h3>
                <p class="action-description">Create and review emergency plans</p>
            </div>

            <div class="action-card" onclick="openEvacuationRoutes()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">map</span>
                </div>
                <h3 class="action-title">Evacuation Routes</h3>
                <p class="action-description">View evacuation maps and routes</p>
            </div>

            <div class="action-card" onclick="openEmergencyKits()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">medical_services</span>
                </div>
                <h3 class="action-title">Emergency Kits</h3>
                <p class="action-description">Build emergency supply kits</p>
            </div>

            <div class="action-card" onclick="openTraining()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">school</span>
                </div>
                <h3 class="action-title">Training Programs</h3>
                <p class="action-description">Join emergency training programs</p>
            </div>

            <div class="action-card" onclick="openAlerts()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">notifications</span>
                </div>
                <h3 class="action-title">Emergency Alerts</h3>
                <p class="action-description">Sign up for emergency notifications</p>
            </div>
        </div>
    </div>
</section>

<!-- Preparedness Statistics -->
<section class="preparedness-stats-section">
    <div class="container">
        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">people</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">12,456</div>
                    <div class="stat-label">Residents Trained</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+1,234 this month</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">map</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">45</div>
                    <div class="stat-label">Evacuation Routes</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+8 new routes</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">school</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">156</div>
                    <div class="stat-label">Training Sessions</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+23 sessions</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">verified</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">92%</div>
                    <div class="stat-label">Community Readiness</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+15% improvement</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Safety Guidelines -->
<section class="safety-guidelines-section" id="safety-guidelines">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Safety Guidelines</h2>
            <p class="section-subtitle">Comprehensive safety protocols for different emergency scenarios</p>
        </div>

        <div class="guidelines-grid">
            <!-- Fire Safety -->
            <div class="guideline-card">
                <div class="guideline-header">
                    <div class="guideline-icon">
                        <span class="material-symbols-outlined">local_fire_department</span>
                    </div>
                    <div class="guideline-badge critical">Critical</div>
                </div>
                <div class="guideline-content">
                    <h3 class="guideline-title">Fire Safety Guidelines</h3>
                    <p class="guideline-description">Essential fire safety procedures including prevention, detection, evacuation, and response protocols.</p>
                    <div class="guideline-steps">
                        <div class="step-item">
                            <span class="step-number">1</span>
                            <div class="step-content">
                                <h4 class="step-title">Prevention</h4>
                                <p class="step-description">Install smoke detectors, keep fire extinguishers accessible, avoid overloading electrical circuits.</p>
                            </div>
                        </div>
                        <div class="step-item">
                            <span class="step-number">2</span>
                            <div class="step-content">
                                <h4 class="step-title">Detection</h4>
                                <p class="step-description">Test smoke detectors monthly, know the sound of your alarm, have multiple escape routes planned.</p>
                            </div>
                        </div>
                        <div class="step-item">
                            <span class="step-number">3</span>
                            <div class="step-content">
                                <h4 class="step-title">Evacuation</h4>
                                <p class="step-description">Stay low to avoid smoke, feel doors before opening, evacuate immediately, never use elevators.</p>
                            </div>
                        </div>
                        <div class="step-item">
                            <span class="step-number">4</span>
                            <div class="step-content">
                                <h4 class="step-title">Response</h4>
                                <p class="step-description">Call emergency services, go to designated meeting point, account for all family members.</p>
                            </div>
                        </div>
                    </div>
                    <div class="guideline-actions">
                        <button class="btn btn-sm btn-primary">Download Guide</button>
                        <button class="btn btn-sm btn-outline">Watch Video</button>
                    </div>
                </div>
            </div>

            <!-- Flood Safety -->
            <div class="guideline-card">
                <div class="guideline-header">
                    <div class="guideline-icon">
                        <span class="material-symbols-outlined">flood</span>
                    </div>
                    <div class="guideline-badge warning">Warning</div>
                </div>
                <div class="guideline-content">
                    <h3 class="guideline-title">Flood Safety Guidelines</h3>
                    <p class="guideline-description">Flood preparedness and response guidelines for before, during, and after flooding events.</p>
                    <div class="guideline-steps">
                        <div class="step-item">
                            <span class="step-number">1</span>
                            <div class="step-content">
                                <h4 class="step-title">Before Flood</h4>
                                <p class="step-description">Monitor weather alerts, prepare emergency kit, know evacuation routes, secure important documents.</p>
                            </div>
                        </div>
                        <div class="step-item">
                            <span class="step-number">2</span>
                            <div class="step-content">
                                <h4 class="step-title">During Flood</h4>
                                <p class="step-description">Move to higher ground, avoid walking/driving through flood water, turn off utilities, stay informed.</p>
                            </div>
                        </div>
                        <div class="step-item">
                            <span class="step-number">3</span>
                            <div class="step-content">
                                <h4 class="step-title">After Flood</h4>
                                <p class="step-description">Wait for official clearance, check for damage, avoid contaminated water, document damage.</p>
                            </div>
                        </div>
                        <div class="step-item">
                            <span class="step-number">4</span>
                            <div class="step-content">
                                <h4 class="step-title">Recovery</h4>
                                <p class="step-description">Contact insurance, clean and disinfect, repair structural damage, seek assistance if needed.</p>
                            </div>
                        </div>
                    </div>
                    <div class="guideline-actions">
                        <button class="btn btn-sm btn-primary">Download Guide</button>
                        <button class="btn btn-sm btn-outline">Watch Video</button>
                    </div>
                </div>
            </div>

            <!-- Earthquake Safety -->
            <div class="guideline-card">
                <div class="guideline-header">
                    <div class="guideline-icon">
                        <span class="material-symbols-outlined">vibration</span>
                    </div>
                    <div class="guideline-badge info">Info</div>
                </div>
                <div class="guideline-content">
                    <h3 class="guideline-title">Earthquake Safety Guidelines</h3>
                    <p class="guideline-description">Earthquake safety procedures including drop, cover, and hold on protocols.</p>
                    <div class="guideline-steps">
                        <div class="step-item">
                            <span class="step-number">1</span>
                            <div class="step-content">
                                <h4 class="step-title">Preparation</h4>
                                <p class="step-description">Secure heavy furniture, identify safe spots, prepare emergency kit, practice drop, cover, hold on.</p>
                            </div>
                        </div>
                        <div class="step-item">
                            <span class="step-number">2</span>
                            <div class="step-content">
                                <h4 class="step-title">During Quake</h4>
                                <p class="step-description">Drop to hands and knees, take cover under table/desk, hold on until shaking stops.</p>
                            </div>
                        </div>
                        <div class="step-item">
                            <span class="step-number">3</span>
                            <div class="step-content">
                                <h4 class="step-title">After Quake</h4>
                                <p class="step-description">Check for injuries, evacuate if necessary, stay away from damaged buildings, be prepared for aftershocks.</p>
                            </div>
                        </div>
                        <div class="step-item">
                            <span class="step-number">4</span>
                            <div class="step-content">
                                <h4 class="step-title">Safety Check</h4>
                                <p class="step-description">Check utilities for damage, inspect home for structural issues, listen for emergency instructions.</p>
                            </div>
                        </div>
                    </div>
                    <div class="guideline-actions">
                        <button class="btn btn-sm btn-primary">Download Guide</button>
                        <button class="btn btn-sm btn-outline">Watch Video</button>
                    </div>
                </div>
            </div>

            <!-- Medical Emergency -->
            <div class="guideline-card">
                <div class="guideline-header">
                    <div class="guideline-icon">
                        <span class="material-symbols-outlined">medical_services</span>
                    </div>
                    <div class="guideline-badge critical">Critical</div>
                </div>
                <div class="guideline-content">
                    <h3 class="guideline-title">Medical Emergency Guidelines</h3>
                    <p class="guideline-description">First aid procedures and medical emergency response guidelines.</p>
                    <div class="guideline-steps">
                        <div class="step-item">
                            <span class="step-number">1</span>
                            <div class="step-content">
                                <h4 class="step-title">Assessment</h4>
                                <p class="step-description">Check scene safety, assess victim's condition, call emergency services, provide basic life support.</p>
                            </div>
                        </div>
                        <div class="step-item">
                            <span class="step-number">2</span>
                            <div class="step-content">
                                <h4 class="step-title">CPR</h4>
                                <p class="step-description">Check breathing, begin chest compressions, provide rescue breaths, continue until help arrives.</p>
                            </div>
                        </div>
                        <div class="step-item">
                            <span class="step-number">3</span>
                            <div class="step-content">
                                <h4 class="step-title">Bleeding Control</h4>
                                <p class="step-description">Apply direct pressure, elevate injured limb, use tourniquet only if necessary, keep victim warm.</p>
                            </div>
                        </div>
                        <div class="step-item">
                            <span class="step-number">4</span>
                            <div class="step-content">
                                <h4 class="step-title">Medical History</h4>
                                <p class="step-description">Gather medical information, note medications, inform responders of allergies, stay with victim.</p>
                            </div>
                        </div>
                    </div>
                    <div class="guideline-actions">
                        <button class="btn btn-sm btn-primary">Download Guide</button>
                        <button class="btn btn-sm btn-outline">Watch Video</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Emergency Plans -->
<section class="emergency-plans-section" id="emergency-plans">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Emergency Planning</h2>
            <p class="section-subtitle">Create and customize emergency plans for your family and business</p>
        </div>

        <div class="plans-grid">
            <!-- Family Emergency Plan -->
            <div class="plan-card">
                <div class="plan-header">
                    <div class="plan-icon">
                        <span class="material-symbols-outlined">family_restroom</span>
                    </div>
                    <div class="plan-badge essential">Essential</div>
                </div>
                <div class="plan-content">
                    <h3 class="plan-title">Family Emergency Plan</h3>
                    <p class="plan-description">Create a comprehensive family emergency plan including communication strategies, meeting points, and special considerations.</p>
                    <div class="plan-components">
                        <div class="component-item">
                            <span class="material-symbols-outlined">phone</span>
                            <div class="component-content">
                                <h4 class="component-title">Communication Plan</h4>
                                <p class="component-description">Emergency contacts, out-of-area contacts, communication methods.</p>
                            </div>
                        </div>
                        <div class="component-item">
                            <span class="material-symbols-outlined">location_on</span>
                            <div class="component-content">
                                <h4 class="component-title">Meeting Points</h4>
                                <p class="component-description">Primary and secondary meeting locations, evacuation routes.</p>
                            </div>
                        </div>
                        <div class="component-item">
                            <span class="material-symbols-outlined">medical_services</span>
                            <div class="component-content">
                                <h4 class="component-title">Medical Information</h4>
                                <p class="component-description">Medical conditions, medications, allergies, doctors' contacts.</p>
                            </div>
                        </div>
                        <div class="component-item">
                            <span class="material-symbols-outlined">pets</span>
                            <div class="component-content">
                                <h4 class="component-title">Pet Care</h4>
                                <p class="component-description">Pet emergency kit, vaccination records, pet-friendly shelters.</p>
                            </div>
                        </div>
                    </div>
                    <div class="plan-actions">
                        <button class="btn btn-sm btn-primary">Create Plan</button>
                        <button class="btn btn-sm btn-outline">Download Template</button>
                    </div>
                </div>
            </div>

            <!-- Business Emergency Plan -->
            <div class="plan-card">
                <div class="plan-header">
                    <div class="plan-icon">
                        <span class="material-symbols-outlined">business</span>
                    </div>
                    <div class="plan-badge essential">Essential</div>
                </div>
                <div class="plan-content">
                    <h3 class="plan-title">Business Emergency Plan</h3>
                    <p class="plan-description">Develop a business continuity and emergency response plan for your organization.</p>
                    <div class="plan-components">
                        <div class="component-item">
                            <span class="material-symbols-outlined">groups</span>
                            <div class="component-content">
                                <h4 class="component-title">Employee Safety</h4>
                                <p class="component-description">Employee contact list, emergency roles, training requirements.</p>
                            </div>
                        </div>
                        <div class="component-item">
                            <span class="material-symbols-outlined">inventory</span>
                            <div class="component-content">
                                <h4 class="component-title">Asset Protection</h4>
                                <p class="component-description">Critical equipment, data backup, insurance coverage.</p>
                            </div>
                        </div>
                        <div class="component-item">
                            <span class="material-symbols-outlined">support_agent</span>
                            <div class="component-content">
                                <h4 class="component-title">Continuity Plan</h4>
                                <p class="component-description">Alternative operations, remote work, supply chain backup.</p>
                            </div>
                        </div>
                        <div class="component-item">
                            <span class="material-symbols-outlined">campaign</span>
                            <div class="component-content">
                                <h4 class="component-title">Communication</h4>
                                <p class="component-description">Customer notifications, media relations, stakeholder updates.</p>
                            </div>
                        </div>
                    </div>
                    <div class="plan-actions">
                        <button class="btn btn-sm btn-primary">Create Plan</button>
                        <button class="btn btn-sm btn-outline">Download Template</button>
                    </div>
                </div>
            </div>

            <!-- School Emergency Plan -->
            <div class="plan-card">
                <div class="plan-header">
                    <div class="plan-icon">
                        <span class="material-symbols-outlined">school</span>
                    </div>
                    <div class="plan-badge important">Important</div>
                </div>
                <div class="plan-content">
                    <h3 class="plan-title">School Emergency Plan</h3>
                    <p class="plan-description">Comprehensive emergency planning for educational institutions including student safety and parent communication.</p>
                    <div class="plan-components">
                        <div class="component-item">
                            <span class="material-symbols-outlined">security</span>
                            <div class="component-content">
                                <h4 class="component-title">Security Protocols</h4>
                                <p class="component-description">Lockdown procedures, visitor management, threat assessment.</p>
                            </div>
                        </div>
                        <div class="component-item">
                            <span class="material-symbols-outlined">directions_run</span>
                            <div class="component-content">
                                <h4 class="component-title">Evacuation Plans</h4>
                                <p class="component-description">Classroom evacuation, assembly points, student accounting.</p>
                            </div>
                        </div>
                        <div class="component-item">
                            <span class="material-symbols-outlined">phone_in_talk</span>
                            <div class="component-content">
                                <h4 class="component-title">Parent Communication</h4>
                                <p class="component-description">Emergency notification system, reunion procedures, media protocols.</p>
                            </div>
                        </div>
                        <div class="component-item">
                            <span class="material-symbols-outlined">psychology</span>
                            <div class="component-content">
                                <h4 class="component-title">Crisis Counseling</h4>
                                <p class="component-description">Student support services, trauma response, mental health resources.</p>
                            </div>
                        </div>
                    </div>
                    <div class="plan-actions">
                        <button class="btn btn-sm btn-primary">Create Plan</button>
                        <button class="btn btn-sm btn-outline">Download Template</button>
                    </div>
                </div>
            </div>

            <!-- Community Emergency Plan -->
            <div class="plan-card">
                <div class="plan-header">
                    <div class="plan-icon">
                        <span class="material-symbols-outlined">apartment</span>
                    </div>
                    <div class="plan-badge important">Important</div>
                </div>
                <div class="plan-content">
                    <h3 class="plan-title">Community Emergency Plan</h3>
                    <p class="plan-description">Neighborhood and community emergency planning for collective response and mutual aid.</p>
                    <div class="plan-components">
                        <div class="component-item">
                            <span class="material-symbols-outlined">diversity_3</span>
                            <div class="component-content">
                                <h4 class="component-title">Vulnerable Residents</h4>
                                <p class="component-description">Elderly, disabled, children, special needs residents assistance plan.</p>
                            </div>
                        </div>
                        <div class="component-item">
                            <span class="material-symbols-outlined">volunteer_activism</span>
                            <div class="component-content">
                                <h4 class="component-title">Volunteer Network</h4>
                                <p class="component-description">Community volunteers, skills inventory, response teams.</p>
                            </div>
                        </div>
                        <div class="component-item">
                            <span class="material-symbols-outlined">warehouse</span>
                            <div class="component-content">
                                <h4 class="component-title">Resource Sharing</h4>
                                <p class="component-description">Shared equipment, supplies, shelters, communication tools.</p>
                            </div>
                        </div>
                        <div class="component-item">
                            <span class="material-symbols-outlined">campaign</span>
                            <div class="component-content">
                                <h4 class="component-title">Information Network</h4>
                                <p class="component-description">Community alerts, information sharing, coordination systems.</p>
                            </div>
                        </div>
                    </div>
                    <div class="plan-actions">
                        <button class="btn btn-sm btn-primary">Create Plan</button>
                        <button class="btn btn-sm btn-outline">Download Template</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Emergency Kits -->
<section class="emergency-kits-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Emergency Supply Kits</h2>
            <p class="section-subtitle">Build and maintain emergency supply kits for different scenarios</p>
        </div>

        <div class="kits-grid">
            <!-- Basic Emergency Kit -->
            <div class="kit-card">
                <div class="kit-header">
                    <div class="kit-icon">
                        <span class="material-symbols-outlined">backpack</span>
                    </div>
                    <div class="kit-badge basic">Basic</div>
                </div>
                <div class="kit-content">
                    <h3 class="kit-title">Basic Emergency Kit</h3>
                    <p class="kit-description">Essential supplies for 72-hour emergency preparedness for home or vehicle.</p>
                    <div class="kit-items">
                        <div class="item-category">
                            <h4 class="category-title">Water & Food</h4>
                            <ul class="item-list">
                                <li>Water (1 gallon/person/day)</li>
                                <li>Non-perishable food (3-day supply)</li>
                                <li>Manual can opener</li>
                                <li>Paper cups, plates, utensils</li>
                            </ul>
                        </div>
                        <div class="item-category">
                            <h4 class="category-title">Safety & Tools</h4>
                            <ul class="item-list">
                                <li>First aid kit</li>
                                <li>Flashlight and batteries</li>
                                <li>Multi-tool or knife</li>
                                <li>Whistle for signaling</li>
                            </ul>
                        </div>
                        <div class="item-category">
                            <h4 class="category-title">Health & Sanitation</h4>
                            <ul class="item-list">
                                <li>Prescription medications</li>
                                <li>Basic medical supplies</li>
                                <li>Hygiene items</li>
                                <li>Face masks</li>
                            </ul>
                        </div>
                    </div>
                    <div class="kit-actions">
                        <button class="btn btn-sm btn-primary">View Full List</button>
                        <button class="btn btn-sm btn-outline">Print Checklist</button>
                    </div>
                </div>
            </div>

            <!-- Advanced Emergency Kit -->
            <div class="kit-card">
                <div class="kit-header">
                    <div class="kit-icon">
                        <span class="material-symbols-outlined">emergency</span>
                    </div>
                    <div class="kit-badge advanced">Advanced</div>
                </div>
                <div class="kit-content">
                    <h3 class="kit-title">Advanced Emergency Kit</h3>
                    <p class="kit-description">Comprehensive emergency supplies for extended emergencies and special needs.</p>
                    <div class="kit-items">
                        <div class="item-category">
                            <h4 class="category-title">Extended Supplies</h4>
                            <ul class="item-list">
                                <li>Water (2-week supply)</li>
                                <li>Food (2-week supply)</li>
                                <li>Water purification tablets</li>
                                <li>Camp stove and fuel</li>
                            </ul>
                        </div>
                        <div class="item-category">
                            <h4 class="category-title">Communication</h4>
                            <ul class="item-list">
                                <li>Battery-powered radio</li>
                                <li>Solar phone charger</li>
                                <li>Emergency weather radio</li>
                                <li>Signal flares</li>
                            </ul>
                        </div>
                        <div class="item-category">
                            <h4 class="category-title">Special Equipment</h4>
                            <ul class="item-list">
                                <li>Generator and fuel</li>
                                <li>Emergency shelter</li>
                                <li>Sleeping bags</li>
                                <li>Emergency tools</li>
                            </ul>
                        </div>
                    </div>
                    <div class="kit-actions">
                        <button class="btn btn-sm btn-primary">View Full List</button>
                        <button class="btn btn-sm btn-outline">Print Checklist</button>
                    </div>
                </div>
            </div>

            <!-- Pet Emergency Kit -->
            <div class="kit-card">
                <div class="kit-header">
                    <div class="kit-icon">
                        <span class="material-symbols-outlined">pets</span>
                    </div>
                    <div class="kit-badge pet">Pet</div>
                </div>
                <div class="kit-content">
                    <h3 class="kit-title">Pet Emergency Kit</h3>
                    <p class="kit-description">Essential supplies to care for your pets during emergencies.</p>
                    <div class="kit-items">
                        <div class="item-category">
                            <h4 class="category-title">Food & Water</h4>
                            <ul class="item-list">
                                <li>Pet food (3-day supply)</li>
                                <li>Water (3-day supply)</li>
                                <li>Food and water bowls</li>
                                <li>Manual can opener</li>
                            </ul>
                        </div>
                        <div class="item-category">
                            <h4 class="category-title">Health & Safety</h4>
                            <ul class="item-list">
                                <li>Pet first aid kit</li>
                                <li>Medications</li>
                                <li>Medical records</li>
                                <li>Leash and harness</li>
                            </ul>
                        </div>
                        <div class="item-category">
                            <h4 class="category-title">Comfort & Care</h4>
                            <ul class="item-list">
                                <li>Blankets or towels</li>
                                <li>Toys and treats</li>
                                <li>Pet carrier</li>
                                <li>Waste bags</li>
                            </ul>
                        </div>
                    </div>
                    <div class="kit-actions">
                        <button class="btn btn-sm btn-primary">View Full List</button>
                        <button class="btn btn-sm btn-outline">Print Checklist</button>
                    </div>
                </div>
            </div>

            <!-- Vehicle Emergency Kit -->
            <div class="kit-card">
                <div class="kit-header">
                    <div class="kit-icon">
                        <span class="material-symbols-outlined">directions_car</span>
                    </div>
                    <div class="kit-badge vehicle">Vehicle</div>
                </div>
                <div class="kit-content">
                    <h3 class="kit-title">Vehicle Emergency Kit</h3>
                    <p class="kit-description">Essential supplies for vehicle emergencies and roadside assistance.</p>
                    <div class="kit-items">
                        <div class="item-category">
                            <h4 class="category-title">Basic Supplies</h4>
                            <ul class="item-list">
                                <li>Jumper cables</li>
                                <li>Spare tire and jack</li>
                                <li>Basic tool kit</li>
                                <li>Tire pressure gauge</li>
                            </ul>
                        </div>
                        <div class="item-category">
                            <h4 class="category-title">Safety Items</h4>
                            <ul class="item-list">
                                <li>First aid kit</li>
                                <li>Emergency flares</span>
                                <li>Reflective triangles</li>
                                <li>Fire extinguisher</li>
                            </ul>
                        </div>
                        <div class="item-category">
                            <h4 class="category-title">Weather Protection</h4>
                            <ul class="item-list">
                                <li>Ice scraper</li>
                                <li>Blanket</li>
                                <li>Water and snacks</li>
                                <li>Emergency phone charger</li>
                            </ul>
                        </div>
                    </div>
                    <div class="kit-actions">
                        <button class="btn btn-sm btn-primary">View Full List</button>
                        <button class="btn btn-sm btn-outline">Print Checklist</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Training Programs -->
<section class="training-programs-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Emergency Training Programs</h2>
            <p class="section-subtitle">Join training programs to build emergency response skills</p>
        </div>

        <div class="training-grid">
            <!-- First Aid Training -->
            <div class="training-card">
                <div class="training-header">
                    <div class="training-icon">
                        <span class="material-symbols-outlined">healing</span>
                    </div>
                    <div class="training-badge popular">Popular</div>
                </div>
                <div class="training-content">
                    <h3 class="training-title">First Aid & CPR Training</h3>
                    <p class="training-description">Comprehensive first aid and CPR training certification program for emergency medical response.</p>
                    <div class="training-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>Duration: 2 days (16 hours)</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">payments</span>
                            <span>Cost: ₣5,000</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">verified</span>
                            <span>Certification: Yes</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">groups</span>
                            <span>Class Size: 20 participants</span>
                        </div>
                    </div>
                    <div class="training-topics">
                        <h4 class="topics-title">Topics Covered:</h4>
                        <div class="topics-list">
                            <div class="topic-item">Basic life support</div>
                            <div class="topic-item">CPR for adults and children</div>
                            <div class="topic-item">Bleeding control</div>
                            <div class="topic-item">Fracture management</div>
                            <div class="topic-item">Medical emergency response</div>
                        </div>
                    </div>
                    <div class="training-actions">
                        <button class="btn btn-sm btn-primary">Enroll Now</button>
                        <button class="btn btn-sm btn-outline">View Schedule</button>
                    </div>
                </div>
            </div>

            <!-- Fire Safety Training -->
            <div class="training-card">
                <div class="training-header">
                    <div class="training-icon">
                        <span class="material-symbols-outlined">local_fire_department</span>
                    </div>
                    <div class="training-badge active">Active</div>
                </div>
                <div class="training-content">
                    <h3 class="training-title">Fire Safety & Prevention</h3>
                    <p class="training-description">Fire safety training covering prevention, detection, evacuation, and fire extinguisher use.</p>
                    <div class="training-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>Duration: 1 day (8 hours)</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">payments</span>
                            <span>Cost: ₣3,000</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">verified</span>
                            <span>Certification: Yes</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">groups</span>
                            <span>Class Size: 25 participants</span>
                        </div>
                    </div>
                    <div class="training-topics">
                        <h4 class="topics-title">Topics Covered:</h4>
                        <div class="topics-list">
                            <div class="topic-item">Fire chemistry and behavior</div>
                            <div class="topic-item">Fire prevention strategies</div>
                            <div class="topic-item">Evacuation planning</div>
                            <div class="topic-item">Fire extinguisher use</div>
                            <div class="topic-item">Emergency response</div>
                        </div>
                    </div>
                    <div class="training-actions">
                        <button class="btn btn-sm btn-primary">Enroll Now</button>
                        <button class="btn btn-sm btn-outline">View Schedule</button>
                    </div>
                </div>
            </div>

            <!-- Community Response Team -->
            <div class="training-card">
                <div class="training-header">
                    <div class="training-icon">
                        <span class="material-symbols-outlined">groups</span>
                    </div>
                    <div class="training-badge advanced">Advanced</div>
                </div>
                <div class="training-content">
                    <h3 class="training-title">Community Emergency Response Team (CERT)</h3>
                    <p class="training-description">Advanced training for community emergency response team members.</p>
                    <div class="training-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>Duration: 3 days (24 hours)</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">payments</span>
                            <span>Cost: ₣8,000</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">verified</span>
                            <span>Certification: Yes</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">groups</span>
                            <span>Class Size: 15 participants</span>
                        </div>
                    </div>
                    <div class="training-topics">
                        <h4 class="topics-title">Topics Covered:</h4>
                        <div class="topics-list">
                            <div class="topic-item">Disaster psychology</div>
                            <div class="topic-item">Search and rescue basics</div>
                            <div class="topic-item">Damage assessment</div>
                            <div class="topic-item">Team organization</div>
                            <div class="topic-item">Disaster operations</div>
                        </div>
                    </div>
                    <div class="training-actions">
                        <button class="btn btn-sm btn-primary">Enroll Now</button>
                        <button class="btn btn-sm btn-outline">View Schedule</button>
                    </div>
                </div>
            </div>

            <!-- Youth Emergency Preparedness -->
            <div class="training-card">
                <div class="training-header">
                    <div class="training-icon">
                        <span class="material-symbols-outlined">child_care</span>
                    </div>
                    <div class="training-badge youth">Youth</div>
                </div>
                <div class="training-content">
                    <h3 class="training-title">Youth Emergency Preparedness</h3>
                    <p class="training-description">Age-appropriate emergency preparedness training for children and teenagers.</p>
                    <div class="training-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>Duration: 4 hours</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">payments</span>
                            <span>Cost: Free</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">verified</span>
                            <span>Certification: Certificate</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">groups</span>
                            <span>Age Groups: 8-17 years</span>
                        </div>
                    </div>
                    <div class="training-topics">
                        <h4 class="topics-title">Topics Covered:</h4>
                        <div class="topics-list">
                            <div class="topic-item">Basic emergency awareness</div>
                            <div class="topic-item">Calling for help</div>
                            <div class="topic-item">Family communication plans</div>
                            <div class="topic-item">Basic first aid</div>
                            <div class="topic-item">Fire safety basics</div>
                        </div>
                    </div>
                    <div class="training-actions">
                        <button class="btn btn-sm btn-primary">Register Child</button>
                        <button class="btn btn-sm btn-outline">View Schedule</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Emergency Alerts -->
<section class="emergency-alerts-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Emergency Alert System</h2>
            <p class="section-subtitle">Sign up for emergency notifications and stay informed</p>
        </div>

        <div class="alerts-content">
            <div class="alerts-overview">
                <h3 class="overview-title">Stay Informed, Stay Safe</h3>
                <p class="overview-description">
                    Receive real-time emergency alerts and updates through multiple channels including SMS, email, mobile app, and social media. Be the first to know about emergencies, evacuation orders, and safety instructions.
                </p>
            </div>

            <div class="alert-options">
                <!-- SMS Alerts -->
                <div class="alert-option-card">
                    <div class="alert-icon">
                        <span class="material-symbols-outlined">sms</span>
                    </div>
                    <h3 class="alert-title">SMS Alerts</h3>
                    <p class="alert-description">Receive emergency text messages directly on your mobile phone.</p>
                    <div class="alert-features">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Instant notifications</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>No app required</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Works without internet</span>
                        </div>
                    </div>
                    <button class="btn btn-primary">Sign Up for SMS</button>
                </div>

                <!-- Email Alerts -->
                <div class="alert-option-card">
                    <div class="alert-icon">
                        <span class="material-symbols-outlined">email</span>
                    </div>
                    <h3 class="alert-title">Email Alerts</h3>
                    <p class="alert-description">Get detailed emergency information and updates via email.</p>
                    <div class="alert-features">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Detailed information</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Attachments and maps</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Follow-up updates</span>
                        </div>
                    </div>
                    <button class="btn btn-primary">Sign Up for Email</button>
                </div>

                <!-- Mobile App -->
                <div class="alert-option-card">
                    <div class="alert-icon">
                        <span class="material-symbols-outlined">smartphone</span>
                    </div>
                    <h3 class="alert-title">Mobile App</h3>
                    <p class="alert-description">Download our emergency alert mobile app for comprehensive features.</p>
                    <div class="alert-features">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Push notifications</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Interactive maps</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Resource directory</span>
                        </div>
                    </div>
                    <button class="btn btn-primary">Download App</button>
                </div>

                <!-- Social Media -->
                <div class="alert-option-card">
                    <div class="alert-icon">
                        <span class="material-symbols-outlined">share</span>
                    </div>
                    <h3 class="alert-title">Social Media</h3>
                    <p class="alert-description">Follow our social media channels for emergency updates and information.</p>
                    <div class="alert-features">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Real-time updates</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Community engagement</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Share with others</span>
                        </div>
                    </div>
                    <button class="btn btn-primary">Follow Channels</button>
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
            <p class="section-subtitle">Common questions about emergency preparedness</p>
        </div>

        <div class="faq-list">
            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>How do I create an emergency plan?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Start by identifying potential emergencies in your area, create communication plans with family members, establish meeting points, prepare emergency kits, and practice your plan regularly. Use our templates to guide you through the process.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>What should be in an emergency kit?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>A basic emergency kit should include water (1 gallon per person per day), non-perishable food, flashlight, batteries, first aid supplies, medications, important documents, cash, and emergency contact information. Check and refresh your kit every 6 months.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>How often should I practice emergency drills?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Practice emergency drills at least twice a year. Conduct fire drills monthly, review your family emergency plan quarterly, and update contact information and supplies annually. Regular practice ensures everyone knows what to do during an actual emergency.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>Where can I get emergency training?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>We offer various emergency training programs including first aid, CPR, fire safety, and CERT training. Check our training schedule for upcoming sessions. Many programs are free or low-cost, and certification is available for most courses.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>How do I sign up for emergency alerts?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>You can sign up for emergency alerts through SMS, email, mobile app, or social media. Visit our alert system registration page to choose your preferred notification methods. Make sure to keep your contact information updated.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>What should I do during different types of emergencies?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Response varies by emergency type. For fires, evacuate immediately and call emergency services. For floods, move to higher ground. For earthquakes, drop, cover, and hold on. For medical emergencies, call for help and provide first aid if trained. Review our specific safety guidelines for detailed procedures.</p>
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
/* Emergency Preparedness Page Styles */
.emergency-preparedness-hero {
    background: linear-gradient(135deg, var(--error) 0%, var(--error-container) 100%);
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
    background-color: var(--error);
    color: var(--on-error);
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
    color: var(--error);
    margin-bottom: var(--spacing-md);
}

.action-description {
    color: var(--on-surface-variant);
    line-height: 1.6;
}

/* Preparedness Statistics Section */
.preparedness-stats-section {
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
    background-color: var(--error);
    color: var(--on-error);
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
    color: var(--error);
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

/* Safety Guidelines Section */
.safety-guidelines-section {
    padding: var(--spacing-3xl) 0;
    background-color: var(--surface-container-low);
}

.guidelines-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: var(--spacing-xl);
}

.guideline-card {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    border: 1px solid var(--outline-variant);
    transition: all 0.3s ease;
}

.guideline-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
}

.guideline-header {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    padding: var(--spacing-lg);
    background-color: var(--surface-container);
    border-bottom: 1px solid var(--outline-variant);
}

.guideline-icon {
    width: 3.5rem;
    height: 3.5rem;
    background-color: var(--error);
    color: var(--on-error);
    border-radius: var(--radius-lg);
    display: flex;
    align-items: center;
    justify-content: center;
}

.guideline-icon .material-symbols-outlined {
    font-size: 2rem;
}

.guideline-badge {
    padding: var(--spacing-xs) var(--spacing-sm);
    border-radius: var(--radius-full);
    font-size: 0.75rem;
    font-weight: 600;
    text-transform: uppercase;
}

.guideline-badge.critical {
    background-color: var(--error);
    color: var(--on-error);
}

.guideline-badge.warning {
    background-color: var(--tertiary);
    color: var(--on-tertiary);
}

.guideline-badge.info {
    background-color: var(--primary);
    color: var(--on-primary);
}

.guideline-content {
    padding: var(--spacing-lg);
}

.guideline-title {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--error);
    margin-bottom: var(--spacing-md);
}

.guideline-description {
    color: var(--on-surface-variant);
    line-height: 1.6;
    margin-bottom: var(--spacing-lg);
}

.guideline-steps {
    display: flex;
    flex-direction: column;
    gap: var(--spacing-lg);
    margin-bottom: var(--spacing-lg);
}

.step-item {
    display: flex;
    gap: var(--spacing-lg);
    align-items: flex-start;
}

.step-number {
    width: 2rem;
    height: 2rem;
    background-color: var(--error);
    color: var(--on-error);
    border-radius: var(--radius-full);
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: 700;
    flex-shrink: 0;
}

.step-content {
    flex: 1;
}

.step-title {
    font-size: 1rem;
    font-weight: 600;
    color: var(--primary);
    margin-bottom: var(--spacing-xs);
}

.step-description {
    color: var(--on-surface-variant);
    line-height: 1.5;
}

.guideline-actions {
    display: flex;
    gap: var(--spacing-sm);
}

/* Emergency Plans Section */
.emergency-plans-section {
    padding: var(--spacing-3xl) 0;
}

.plans-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: var(--spacing-xl);
}

.plan-card {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    border: 1px solid var(--outline-variant);
    transition: all 0.3s ease;
}

.plan-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
}

.plan-header {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    padding: var(--spacing-lg);
    background-color: var(--surface-container);
    border-bottom: 1px solid var(--outline-variant);
}

.plan-icon {
    width: 3.5rem;
    height: 3.5rem;
    background-color: var(--error);
    color: var(--on-error);
    border-radius: var(--radius-lg);
    display: flex;
    align-items: center;
    justify-content: center;
}

.plan-icon .material-symbols-outlined {
    font-size: 2rem;
}

.plan-badge {
    padding: var(--spacing-xs) var(--spacing-sm);
    border-radius: var(--radius-full);
    font-size: 0.75rem;
    font-weight: 600;
    text-transform: uppercase;
}

.plan-badge.essential {
    background-color: var(--error);
    color: var(--on-error);
}

.plan-badge.important {
    background-color: var(--tertiary);
    color: var(--on-tertiary);
}

.plan-content {
    padding: var(--spacing-lg);
}

.plan-title {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--error);
    margin-bottom: var(--spacing-md);
}

.plan-description {
    color: var(--on-surface-variant);
    line-height: 1.6;
    margin-bottom: var(--spacing-lg);
}

.plan-components {
    display: flex;
    flex-direction: column;
    gap: var(--spacing-lg);
    margin-bottom: var(--spacing-lg);
}

.component-item {
    display: flex;
    gap: var(--spacing-md);
    align-items: flex-start;
}

.component-item .material-symbols-outlined {
    font-size: 1.5rem;
    color: var(--error);
    flex-shrink: 0;
}

.component-content {
    flex: 1;
}

.component-title {
    font-size: 1rem;
    font-weight: 600;
    color: var(--primary);
    margin-bottom: var(--spacing-xs);
}

.component-description {
    color: var(--on-surface-variant);
    line-height: 1.5;
}

.plan-actions {
    display: flex;
    gap: var(--spacing-sm);
}

/* Emergency Kits Section */
.emergency-kits-section {
    padding: var(--spacing-3xl) 0;
    background-color: var(--surface-container-low);
}

.kits-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: var(--spacing-xl);
}

.kit-card {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    border: 1px solid var(--outline-variant);
    transition: all 0.3s ease;
}

.kit-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
}

.kit-header {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    padding: var(--spacing-lg);
    background-color: var(--surface-container);
    border-bottom: 1px solid var(--outline-variant);
}

.kit-icon {
    width: 3.5rem;
    height: 3.5rem;
    background-color: var(--error);
    color: var(--on-error);
    border-radius: var(--radius-lg);
    display: flex;
    align-items: center;
    justify-content: center;
}

.kit-icon .material-symbols-outlined {
    font-size: 2rem;
}

.kit-badge {
    padding: var(--spacing-xs) var(--spacing-sm);
    border-radius: var(--radius-full);
    font-size: 0.75rem;
    font-weight: 600;
    text-transform: uppercase;
}

.kit-badge.basic {
    background-color: var(--primary);
    color: var(--on-primary);
}

.kit-badge.advanced {
    background-color: var(--tertiary);
    color: var(--on-tertiary);
}

.kit-badge.pet {
    background-color: var(--secondary);
    color: var(--on-secondary);
}

.kit-badge.vehicle {
    background-color: var(--surface-variant);
    color: var(--on-surface-variant);
}

.kit-content {
    padding: var(--spacing-lg);
}

.kit-title {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--error);
    margin-bottom: var(--spacing-md);
}

.kit-description {
    color: var(--on-surface-variant);
    line-height: 1.6;
    margin-bottom: var(--spacing-lg);
}

.kit-items {
    display: flex;
    flex-direction: column;
    gap: var(--spacing-lg);
    margin-bottom: var(--spacing-lg);
}

.item-category {
    margin-bottom: var(--spacing-md);
}

.category-title {
    font-size: 1rem;
    font-weight: 600;
    color: var(--primary);
    margin-bottom: var(--spacing-sm);
}

.item-list {
    list-style: none;
    padding: 0;
    margin: 0;
}

.item-list li {
    padding: var(--spacing-xs) 0;
    color: var(--on-surface-variant);
    position: relative;
    padding-left: var(--spacing-lg);
    line-height: 1.5;
}

.item-list li::before {
    content: '•';
    position: absolute;
    left: 0;
    color: var(--error);
    font-weight: 700;
}

.kit-actions {
    display: flex;
    gap: var(--spacing-sm);
}

/* Training Programs Section */
.training-programs-section {
    padding: var(--spacing-3xl) 0;
}

.training-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: var(--spacing-xl);
}

.training-card {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    border: 1px solid var(--outline-variant);
    transition: all 0.3s ease;
}

.training-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
}

.training-header {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    padding: var(--spacing-lg);
    background-color: var(--surface-container);
    border-bottom: 1px solid var(--outline-variant);
}

.training-icon {
    width: 3.5rem;
    height: 3.5rem;
    background-color: var(--error);
    color: var(--on-error);
    border-radius: var(--radius-lg);
    display: flex;
    align-items: center;
    justify-content: center;
}

.training-icon .material-symbols-outlined {
    font-size: 2rem;
}

.training-badge {
    padding: var(--spacing-xs) var(--spacing-sm);
    border-radius: var(--radius-full);
    font-size: 0.75rem;
    font-weight: 600;
    text-transform: uppercase;
}

.training-badge.popular {
    background-color: var(--secondary);
    color: var(--on-secondary);
}

.training-badge.active {
    background-color: var(--tertiary);
    color: var(--on-tertiary);
}

.training-badge.advanced {
    background-color: var(--primary);
    color: var(--on-primary);
}

.training-badge.youth {
    background-color: var(--error);
    color: var(--on-error);
}

.training-content {
    padding: var(--spacing-lg);
}

.training-title {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--error);
    margin-bottom: var(--spacing-md);
}

.training-description {
    color: var(--on-surface-variant);
    line-height: 1.6;
    margin-bottom: var(--spacing-lg);
}

.training-details {
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
    color: var(--error);
}

.training-topics {
    margin-bottom: var(--spacing-lg);
}

.topics-title {
    font-size: 1rem;
    font-weight: 600;
    color: var(--primary);
    margin-bottom: var(--spacing-sm);
}

.topics-list {
    display: flex;
    flex-wrap: wrap;
    gap: var(--spacing-sm);
}

.topic-item {
    padding: var(--spacing-xs) var(--spacing-sm);
    background-color: var(--surface-container);
    border-radius: var(--radius-md);
    font-size: 0.75rem;
    color: var(--on-surface-variant);
}

.training-actions {
    display: flex;
    gap: var(--spacing-sm);
}

/* Emergency Alerts Section */
.emergency-alerts-section {
    padding: var(--spacing-3xl) 0;
    background-color: var(--surface-container-low);
}

.alerts-content {
    display: flex;
    flex-direction: column;
    gap: var(--spacing-xl);
}

.alerts-overview {
    text-align: center;
    max-width: 800px;
    margin: 0 auto;
}

.overview-title {
    font-size: 2rem;
    font-weight: 700;
    color: var(--error);
    margin-bottom: var(--spacing-lg);
}

.overview-description {
    font-size: 1.125rem;
    color: var(--on-surface-variant);
    line-height: 1.8;
}

.alert-options {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: var(--spacing-xl);
}

.alert-option-card {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-lg);
    border: 1px solid var(--outline-variant);
    text-align: center;
    transition: all 0.3s ease;
}

.alert-option-card:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
}

.alert-icon {
    width: 3rem;
    height: 3rem;
    background-color: var(--error);
    color: var(--on-error);
    border-radius: var(--radius-lg);
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto var(--spacing-md);
}

.alert-icon .material-symbols-outlined {
    font-size: 1.5rem;
}

.alert-title {
    font-size: 1.125rem;
    font-weight: 700;
    color: var(--error);
    margin-bottom: var(--spacing-sm);
}

.alert-description {
    color: var(--on-surface-variant);
    line-height: 1.6;
    margin-bottom: var(--spacing-lg);
}

.alert-features {
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
    justify-content: center;
}

.feature-item .material-symbols-outlined {
    font-size: 1rem;
    color: var(--tertiary);
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
    color: var(--error);
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
    
    .guidelines-grid {
        grid-template-columns: 1fr;
        gap: var(--spacing-lg);
    }
    
    .plans-grid {
        grid-template-columns: 1fr;
        gap: var(--spacing-lg);
    }
    
    .kits-grid {
        grid-template-columns: 1fr;
        gap: var(--spacing-lg);
    }
    
    .training-grid {
        grid-template-columns: 1fr;
        gap: var(--spacing-lg);
    }
    
    .alert-options {
        grid-template-columns: 1fr;
        gap: var(--spacing-lg);
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
    
    .guideline-card {
        margin: 0 -var(--spacing-md);
        border-radius: 0;
    }
    
    .plan-card {
        margin: 0 -var(--spacing-md);
        border-radius: 0;
    }
    
    .kit-card {
        margin: 0 -var(--spacing-md);
        border-radius: 0;
    }
    
    .training-card {
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
    
    .guideline-actions {
        flex-direction: column;
        gap: var(--spacing-sm);
    }
    
    .guideline-actions .btn {
        width: 100%;
    }
    
    .plan-actions {
        flex-direction: column;
        gap: var(--spacing-sm);
    }
    
    .plan-actions .btn {
        width: 100%;
    }
    
    .kit-actions {
        flex-direction: column;
        gap: var(--spacing-sm);
    }
    
    .kit-actions .btn {
        width: 100%;
    }
    
    .training-actions {
        flex-direction: column;
        gap: var(--spacing-sm);
    }
    
    .training-actions .btn {
        width: 100%;
    }
}
</style>

<script>
// Quick action functions
function openSafetyGuidelines() {
    document.getElementById('safety-guidelines').scrollIntoView({ behavior: 'smooth' });
}

function openEmergencyPlans() {
    document.getElementById('emergency-plans').scrollIntoView({ behavior: 'smooth' });
}

function openEvacuationRoutes() {
    alert('Evacuation routes portal would open here. In production, this would show interactive maps, evacuation routes, assembly points, and route planning tools.');
}

function openEmergencyKits() {
    document.querySelector('.emergency-kits-section').scrollIntoView({ behavior: 'smooth' });
}

function openTraining() {
    document.querySelector('.training-programs-section').scrollIntoView({ behavior: 'smooth' });
}

function openAlerts() {
    document.querySelector('.emergency-alerts-section').scrollIntoView({ behavior: 'smooth' });
}

// Guideline actions
document.querySelectorAll('.guideline-actions .btn-primary').forEach(button => {
    if (button.textContent.includes('Download')) {
        button.addEventListener('click', function() {
            const guidelineTitle = this.closest('.guideline-card').querySelector('.guideline-title').textContent;
            alert(`Downloading guide: "${guidelineTitle}"`);
        });
    }
});

document.querySelectorAll('.guideline-actions .btn-outline').forEach(button => {
    if (button.textContent.includes('Watch')) {
        button.addEventListener('click', function() {
            const guidelineTitle = this.closest('.guideline-card').querySelector('.guideline-title').textContent;
            alert(`Opening video for: "${guidelineTitle}"`);
        });
    }
});

// Plan actions
document.querySelectorAll('.plan-actions .btn-primary').forEach(button => {
    if (button.textContent.includes('Create')) {
        button.addEventListener('click', function() {
            const planTitle = this.closest('.plan-card').querySelector('.plan-title').textContent;
            alert(`Creating: "${planTitle}"`);
        });
    }
});

document.querySelectorAll('.plan-actions .btn-outline').forEach(button => {
    if (button.textContent.includes('Download')) {
        button.addEventListener('click', function() {
            const planTitle = this.closest('.plan-card').querySelector('.plan-title').textContent;
            alert(`Downloading template for: "${planTitle}"`);
        });
    }
});

// Kit actions
document.querySelectorAll('.kit-actions .btn-primary').forEach(button => {
    if (button.textContent.includes('View')) {
        button.addEventListener('click', function() {
            const kitTitle = this.closest('.kit-card').querySelector('.kit-title').textContent;
            alert(`Viewing full list for: "${kitTitle}"`);
        });
    }
});

document.querySelectorAll('.kit-actions .btn-outline').forEach(button => {
    if (button.textContent.includes('Print')) {
        button.addEventListener('click', function() {
            const kitTitle = this.closest('.kit-card').querySelector('.kit-title').textContent;
            alert(`Printing checklist for: "${kitTitle}"`);
        });
    }
});

// Training actions
document.querySelectorAll('.training-actions .btn-primary').forEach(button => {
    if (button.textContent.includes('Enroll')) {
        button.addEventListener('click', function() {
            const trainingTitle = this.closest('.training-card').querySelector('.training-title').textContent;
            alert(`Enrolling in: "${trainingTitle}"`);
        });
    }
    
    if (button.textContent.includes('Register')) {
        button.addEventListener('click', function() {
            const trainingTitle = this.closest('.training-card').querySelector('.training-title').textContent;
            alert(`Registering for: "${trainingTitle}"`);
        });
    }
});

document.querySelectorAll('.training-actions .btn-outline').forEach(button => {
    if (button.textContent.includes('View')) {
        button.addEventListener('click', function() {
            const trainingTitle = this.closest('.training-card').querySelector('.training-title').textContent;
            alert(`Viewing schedule for: "${trainingTitle}"`);
        });
    }
});

// Alert option actions
document.querySelectorAll('.alert-option-card .btn-primary').forEach(button => {
    if (button.textContent.includes('Sign Up')) {
        button.addEventListener('click', function() {
            const alertTitle = this.closest('.alert-option-card').querySelector('.alert-title').textContent;
            alert(`Signing up for: "${alertTitle}"`);
        });
    }
    
    if (button.textContent.includes('Download')) {
        button.addEventListener('click', function() {
            alert('Mobile app download would start here. In production, this would redirect to app stores.');
        });
    }
    
    if (button.textContent.includes('Follow')) {
        button.addEventListener('click', function() {
            alert('Social media channels would open here. In production, this would show links to Facebook, Twitter, Instagram, etc.');
        });
    }
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

// Auto-refresh preparedness statistics
function refreshPreparednessStats() {
    // In production, this would fetch real-time preparedness statistics
    console.log('Refreshing emergency preparedness statistics...');
    
    // Simulate resident count updates
    const residentCountElement = document.querySelector('.stat-number');
    if (residentCountElement && residentCountElement.textContent.includes(',')) {
        // Simulate real-time training
        const currentCount = parseInt(residentCountElement.textContent.replace(',', ''));
        const increment = Math.floor(Math.random() * 5) + 1;
        const newCount = currentCount + increment;
        residentCountElement.textContent = newCount.toLocaleString();
    }
}

// Refresh statistics every 45 seconds
setInterval(refreshPreparednessStats, 45000);
</script>
