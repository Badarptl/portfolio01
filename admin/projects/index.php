<?php
require_once '../../includes/auth.php';
require_once '../../includes/database.php';
require_once '../includes/header.php';

$auth->redirectIfNotLoggedIn();

$db = new Database();
$conn = $db->getConnection();

// Get all projects
$projects = [];
$result = $conn->query("SELECT * FROM projects ORDER BY created_at DESC");
if ($result) {
    $projects = $result->fetch_all(MYSQLI_ASSOC);
}
?>

<div class="dashboard-container">
    <?php include '../includes/header.php'; ?>
    
    <main class="dashboard-content">
        <div class="dashboard-header">
            <h1>Projects</h1>
            <div class="header-actions">
                <a href="add.php" class="btn btn-primary">
                    <i class="fas fa-plus"></i> Add Project
                </a>
            </div>
        </div>
        
        <?php if (isset($_GET['success'])): ?>
            <div class="alert alert-success">Project <?php echo $_GET['success']; ?> successfully!</div>
        <?php endif; ?>
        
        <div class="table-responsive">
            <table class="data-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Technologies</th>
                        <th>Created</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($projects as $project): ?>
                    <tr>
                        <td><?php echo $project['id']; ?></td>
                        <td><?php echo htmlspecialchars($project['title']); ?></td>
                        <td><?php echo htmlspecialchars($project['technologies']); ?></td>
                        <td><?php echo date('M d, Y', strtotime($project['created_at'])); ?></td>
                        <td class="actions">
                            <a href="edit.php?id=<?php echo $project['id']; ?>" class="btn btn-sm btn-edit">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form action="delete.php" method="POST" class="inline-form">
                                <input type="hidden" name="id" value="<?php echo $project['id']; ?>">
                                <button type="submit" class="btn btn-sm btn-delete" onclick="return confirm('Are you sure?')">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </main>
</div>

<?php include '../includes/footer.php'; ?>