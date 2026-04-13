<?php
/**
 * Bamenda City Council E-Governance Platform
 * Applications Ledger
 */

// Include access control
require_once __DIR__ . '/../../core/access-control.php';
require_role('admin');

// Set page metadata
$page_title = 'Applications Ledger | Bamenda City Council';
$page_description = 'Multi-matrix ledger for service applications and CSV export.';

// Set breadcrumbs
$breadcrumbs = [
    ['title' => 'Administration', 'url' => '../index.php'],
    ['title' => 'Applications Ledger', 'url' => '#']
];

// Include header
require_once __DIR__ . '/../../includes/header.php';
require_once __DIR__ . '/../../config/app/config.php';
require_once __DIR__ . '/../../config/database/database.php';

$database = new Database();
$db = $database->getConnection();

// Fetch apps
$query = "SELECT sa.id, u.first_name, u.last_name, sa.service_type, sa.status, sa.priority, sa.created_at 
          FROM service_applications sa 
          JOIN users u ON sa.user_id = u.id 
          ORDER BY sa.created_at DESC LIMIT 100";
$apps = $db->query($query);
?>

<div class="admin-dashboard">
    <main class="container py-8">
        <h1 class="page-title mb-4">Service Applications Ledger</h1>
        <p class="text-gray-600 mb-8">View, filter, and export the unified matrix of citizen service applications.</p>
        
        <div class="card p-6 mb-8">
            <h2 class="text-xl font-bold mb-4">Export Matrix Filter</h2>
            <form action="/api/export-ledger.php" method="GET" class="flex items-end gap-4">
                <div class="form-group flex-1">
                    <label class="form-label block mb-2 font-medium">Application Status</label>
                    <select name="status" class="w-full p-2 border rounded">
                        <option value="">All Statuses</option>
                        <option value="pending">Pending</option>
                        <option value="processing">Processing</option>
                        <option value="approved">Approved</option>
                        <option value="rejected">Rejected</option>
                        <option value="completed">Completed</option>
                    </select>
                </div>
                <div class="form-group flex-1">
                    <label class="form-label block mb-2 font-medium">Start Date</label>
                    <input type="date" name="start_date" class="w-full p-2 border rounded">
                </div>
                <div class="form-group flex-1">
                    <label class="form-label block mb-2 font-medium">End Date</label>
                    <input type="date" name="end_date" class="w-full p-2 border rounded">
                </div>
                <button type="submit" class="btn btn-primary px-6 py-2 rounded h-11 flex items-center gap-2">
                    <span class="material-symbols-outlined">download</span> Export CSV
                </button>
            </form>
        </div>

        <div class="card bg-white shadow rounded overflow-hidden">
            <table class="w-full text-left border-collapse">
                <thead class="bg-gray-100 border-b">
                    <tr>
                        <th class="p-4 font-semibold text-gray-700">App ID</th>
                        <th class="p-4 font-semibold text-gray-700">Applicant</th>
                        <th class="p-4 font-semibold text-gray-700">Service Type</th>
                        <th class="p-4 font-semibold text-gray-700">Priority</th>
                        <th class="p-4 font-semibold text-gray-700">Status</th>
                        <th class="p-4 font-semibold text-gray-700">Date Submitted</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if ($apps && $apps->num_rows > 0): ?>
                        <?php while ($row = $apps->fetch_assoc()): ?>
                            <tr class="border-b hover:bg-gray-50">
                                <td class="p-4 text-gray-600">APP-<?= str_pad($row['id'], 5, '0', STR_PAD_LEFT) ?></td>
                                <td class="p-4 font-medium"><?= htmlspecialchars($row['first_name'] . ' ' . $row['last_name']) ?></td>
                                <td class="p-4"><?= htmlspecialchars(ucfirst(str_replace('_', ' ', $row['service_type']))) ?></td>
                                <td class="p-4">
                                    <span class="px-2 py-1 bg-yellow-100 text-yellow-800 rounded text-xs"><?= ucfirst($row['priority']) ?></span>
                                </td>
                                <td class="p-4">
                                    <?php
                                    $color = 'gray';
                                    if($row['status'] == 'completed') $color = 'green';
                                    if($row['status'] == 'rejected') $color = 'red';
                                    if($row['status'] == 'approved') $color = 'blue';
                                    ?>
                                    <span class="px-2 py-1 bg-<?= $color ?>-100 text-<?= $color ?>-800 rounded text-xs"><?= ucfirst($row['status']) ?></span>
                                </td>
                                <td class="p-4 text-gray-500 text-sm"><?= date('M d, Y H:i', strtotime($row['created_at'])) ?></td>
                            </tr>
                        <?php endwhile; ?>
                    <?php else: ?>
                        <tr><td colspan="6" class="p-8 text-center text-gray-500">No applications found in the system.</td></tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </main>
</div>

<style>
/* Utilities for rapid layout (Tailwind-like) */
.py-8 { padding-top: 2rem; padding-bottom: 2rem; }
.p-6 { padding: 1.5rem; }
.mb-4 { margin-bottom: 1rem; }
.mb-8 { margin-bottom: 2rem; }
.flex { display: flex; }
.items-end { align-items: flex-end; }
.items-center { align-items: center; }
.gap-4 { gap: 1rem; }
.gap-2 { gap: 0.5rem; }
.flex-1 { flex: 1; }
.w-full { width: 100%; }
.p-2 { padding: 0.5rem; }
.p-4 { padding: 1rem; }
.p-8 { padding: 2rem; }
.px-6 { padding-left: 1.5rem; padding-right: 1.5rem; }
.py-2 { padding-top: 0.5rem; padding-bottom: 0.5rem; }
.px-2 { padding-left: 0.5rem; padding-right: 0.5rem; }
.py-1 { padding-top: 0.25rem; padding-bottom: 0.25rem; }
.border { border: 1px solid var(--outline-variant); }
.border-b { border-bottom: 1px solid var(--outline-variant); }
.rounded { border-radius: 0.375rem; }
.shadow { box-shadow: 0 1px 3px rgba(0,0,0,0.1); }
.font-bold { font-weight: 700; }
.font-semibold { font-weight: 600; }
.font-medium { font-weight: 500; }
.text-xl { font-size: 1.25rem; }
.text-sm { font-size: 0.875rem; }
.text-xs { font-size: 0.75rem; }
.text-center { text-align: center; }
.bg-white { background-color: #fff; }
.bg-gray-100 { background-color: #f3f4f6; }
.text-gray-500 { color: #6b7280; }
.text-gray-600 { color: #4b5563; }
.text-gray-700 { color: #374151; }
.hover\:bg-gray-50:hover { background-color: #f9fafb; }
.bg-green-100 { background-color: #d1fae5; }
.text-green-800 { color: #065f46; }
.bg-red-100 { background-color: #fee2e2; }
.text-red-800 { color: #991b1b; }
.bg-blue-100 { background-color: #dbeafe; }
.text-blue-800 { color: #1e40af; }
.bg-yellow-100 { background-color: #fef3c7; }
.text-yellow-800 { color: #92400e; }
.bg-gray-100 { background-color: #f3f4f6; }
.text-gray-800 { color: #1f2937; }
</style>

<?php
// Include footer
require_once __DIR__ . '/../../includes/footer.php';
?>
