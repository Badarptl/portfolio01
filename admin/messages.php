<?php
require_once 'includes/auth.php';
require_once '../../includes/database.php';
require_once 'includes/header.php';

$auth->redirectIfNotLoggedIn();

$db = new Database();
$conn = $db->getConnection();

// Get all messages
$messages = [];
$result = $conn->query("SELECT * FROM messages ORDER BY created_at DESC");
if ($result) {
    $messages = $result->fetch_all(MYSQLI_ASSOC);
}

// Mark message as read
if (isset($_GET['mark_read']) && is_numeric($_GET['mark_read'])) {
    $id = $_GET['mark_read'];
    $stmt = $conn->prepare("UPDATE messages SET is_read = TRUE WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    header("Location: messages.php");
    exit();
}

// Delete message
if (isset($_GET['delete']) && is_numeric($_GET['delete'])) {
    $id = $_GET['delete'];
    $stmt = $conn->prepare("DELETE FROM messages WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    header("Location: messages.php?deleted=1");
    exit();
}
?>

<div class="dashboard-container">
    <?php include 'includes/header.php'; ?>
    
    <main class="dashboard-content">
        <div class="dashboard-header">
            <h1>Messages</h1>
        </div>
        
        <?php if (isset($_GET['deleted'])): ?>
            <div class="alert alert-success">Message deleted successfully!</div>
        <?php endif; ?>
        
        <div class="table-responsive">
            <table class="data-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Subject</th>
                        <th>Date</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($messages as $message): ?>
                    <tr class="<?php echo $message['is_read'] ? '' : 'unread'; ?>">
                        <td><?php echo $message['id']; ?></td>
                        <td><?php echo htmlspecialchars($message['name']); ?></td>
                        <td><?php echo htmlspecialchars($message['email']); ?></td>
                        <td><?php echo htmlspecialchars($message['subject']); ?></td>
                        <td><?php echo date('M d, Y', strtotime($message['created_at'])); ?></td>
                        <td>
                            <?php if ($message['is_read']): ?>
                                <span class="badge badge-read">Read</span>
                            <?php else: ?>
                                <span class="badge badge-unread">Unread</span>
                            <?php endif; ?>
                        </td>
                        <td class="actions">
                            <a href="message_view.php?id=<?php echo $message['id']; ?>" class="btn btn-sm btn-edit">
                                <i class="fas fa-eye"></i>
                            </a>
                            <a href="messages.php?mark_read=<?php echo $message['id']; ?>" class="btn btn-sm btn-primary">
                                <i class="fas fa-check"></i>
                            </a>
                            <a href="messages.php?delete=<?php echo $message['id']; ?>" class="btn btn-sm btn-delete" onclick="return confirm('Are you sure?')">
                                <i class="fas fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </main>
</div>

<?php include 'includes/footer.php'; ?>