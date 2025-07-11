<?php
require_once 'includes/auth.php';
require_once '../../includes/database.php';
require_once 'includes/header.php';

$auth->redirectIfNotLoggedIn();

$db = new Database();
$conn = $db->getConnection();

if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    header("Location: messages.php");
    exit();
}

$id = $_GET['id'];

// Get message details
$stmt = $conn->prepare("SELECT * FROM messages WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$message = $result->fetch_assoc();

if (!$message) {
    header("Location: messages.php");
    exit();
}

// Mark as read
if (!$message['is_read']) {
    $update = $conn->prepare("UPDATE messages SET is_read = TRUE WHERE id = ?");
    $update->bind_param("i", $id);
    $update->execute();
    $message['is_read'] = true;
}
?>

<div class="dashboard-container">
    <?php include 'includes/header.php'; ?>
    
    <main class="dashboard-content">
        <div class="dashboard-header">
            <h1>Message Details</h1>
            <a href="messages.php" class="btn btn-secondary">
                <i class="fas fa-arrow-left"></i> Back to Messages
            </a>
        </div>
        
        <div class="message-details">
            <div class="message-header">
                <h2><?php echo htmlspecialchars($message['subject']); ?></h2>
                <div class="message-meta">
                    <span><strong>From:</strong> <?php echo htmlspecialchars($message['name']); ?> &lt;<?php echo htmlspecialchars($message['email']); ?>&gt;</span>
                    <span><strong>Date:</strong> <?php echo date('F j, Y, g:i a', strtotime($message['created_at'])); ?></span>
                </div>
            </div>
            
            <div class="message-body">
                <p><?php echo nl2br(htmlspecialchars($message['message'])); ?></p>
            </div>
            
            <div class="message-actions">
                <a href="mailto:<?php echo htmlspecialchars($message['email']); ?>?subject=Re: <?php echo htmlspecialchars($message['subject']); ?>" class="btn btn-primary">
                    <i class="fas fa-reply"></i> Reply
                </a>
                <a href="messages.php?delete=<?php echo $message['id']; ?>" class="btn btn-delete" onclick="return confirm('Are you sure?')">
                    <i class="fas fa-trash"></i> Delete
                </a>
            </div>
        </div>
    </main>
</div>

<?php include 'includes/footer.php'; ?>