<?php
require_once '../../includes/auth.php';
require_once '../../includes/database.php';
require_once '../includes/header.php';

$auth->redirectIfNotLoggedIn();

$db = new Database();
$conn = $db->getConnection();

$errors = [];
$project = [
    'title' => '',
    'slug' => '',
    'description' => '',
    'features' => '',
    'technologies' => '',
    'image_path' => ''
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validate and sanitize inputs
    $project['title'] = trim($_POST['title']);
    $project['slug'] = trim($_POST['slug']);
    $project['description'] = trim($_POST['description']);
    $project['features'] = trim($_POST['features']);
    $project['technologies'] = trim($_POST['technologies']);
    
    // Basic validation
    if (empty($project['title'])) $errors[] = 'Title is required';
    if (empty($project['slug'])) $errors[] = 'Slug is required';
    if (empty($project['description'])) $errors[] = 'Description is required';
    
    // Handle file upload
    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $uploadDir = '../../assets/images/projects/';
        $fileName = basename($_FILES['image']['name']);
        $targetPath = $uploadDir . $fileName;
        
        // Check file type
        $imageFileType = strtolower(pathinfo($targetPath, PATHINFO_EXTENSION));
        $allowedTypes = ['jpg', 'jpeg', 'png', 'gif'];
        
        if (in_array($imageFileType, $allowedTypes)) {
            if (move_uploaded_file($_FILES['image']['tmp_name'], $targetPath)) {
                $project['image_path'] = 'assets/images/projects/' . $fileName;
            } else {
                $errors[] = 'Failed to upload image';
            }
        } else {
            $errors[] = 'Only JPG, JPEG, PNG & GIF files are allowed';
        }
    }
    
    // If no errors, save to database
    if (empty($errors)) {
        $stmt = $conn->prepare("INSERT INTO projects (title, slug, description, features, technologies, image_path) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssss", 
            $project['title'],
            $project['slug'],
            $project['description'],
            $project['features'],
            $project['technologies'],
            $project['image_path']
        );
        
        if ($stmt->execute()) {
            header("Location: index.php?success=added");
            exit();
        } else {
            $errors[] = "Failed to save project: " . $conn->error;
        }
    }
}
?>

<div class="dashboard-container">
    <?php include '../includes/header.php'; ?>
    
    <main class="dashboard-content">
        <div class="dashboard-header">
            <h1>Add New Project</h1>
            <a href="index.php" class="btn btn-secondary">
                <i class="fas fa-arrow-left"></i> Back to Projects
            </a>
        </div>
        
        <?php if (!empty($errors)): ?>
            <div class="alert alert-danger">
                <ul>
                    <?php foreach ($errors as $error): ?>
                        <li><?php echo $error; ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>
        
        <form action="add.php" method="POST" enctype="multipart/form-data" class="form-container">
            <div class="form-group">
                <label for="title">Project Title</label>
                <input type="text" id="title" name="title" value="<?php echo htmlspecialchars($project['title']); ?>" required>
            </div>
            
            <div class="form-group">
                <label for="slug">URL Slug</label>
                <input type="text" id="slug" name="slug" value="<?php echo htmlspecialchars($project['slug']); ?>" required>
                <small class="form-text">Used in URLs (e.g., "hotel-management-system")</small>
            </div>
            
            <div class="form-group">
                <label for="description">Description</label>
                <textarea id="description" name="description" rows="5" required><?php echo htmlspecialchars($project['description']); ?></textarea>
            </div>
            
            <div class="form-group">
                <label for="features">Features (One per line)</label>
                <textarea id="features" name="features" rows="5"><?php echo htmlspecialchars($project['features']); ?></textarea>
            </div>
            
            <div class="form-group">
                <label for="technologies">Technologies (Comma separated)</label>
                <input type="text" id="technologies" name="technologies" value="<?php echo htmlspecialchars($project['technologies']); ?>">
                <small class="form-text">e.g., PHP, MySQL, JavaScript</small>
            </div>
            
            <div class="form-group">
                <label for="image">Project Image</label>
                <input type="file" id="image" name="image">
            </div>
            
            <div class="form-actions">
                <button type="submit" class="btn btn-primary">Save Project</button>
                <button type="reset" class="btn btn-secondary">Reset</button>
            </div>
        </form>
    </main>
</div>

<?php include '../includes/footer.php'; ?>