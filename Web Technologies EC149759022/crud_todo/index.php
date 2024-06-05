<?php
require_once 'db_connection.php';

// CRUD Operations

// Function to add a new todo
function addTodo($title, $description) {
    global $link;
    $sql = "INSERT INTO todos (title, description) VALUES ('$title', '$description')";
    if (mysqli_query($link, $sql)) {
        return true;
    } else {
        return false;
    }
}

// Function to delete a todo
function deleteTodo($id) {
    global $link;
    $sql = "DELETE FROM todos WHERE id='$id'";
    if (mysqli_query($link, $sql)) {
        return true;
    } else {
        return false;
    }
}

// Function to update the status of a todo
function updateStatus($id, $status) {
    global $link;
    $sql = "UPDATE todos SET status='$status' WHERE id='$id'";
    if (mysqli_query($link, $sql)) {
        return true;
    } else {
        return false;
    }
}

// Function to retrieve all todos
function getTodos() {
    global $link;
    $sql = "SELECT * FROM todos";
    $result = mysqli_query($link, $sql);
    $todos = [];
    if ($result && mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $todos[] = $row;
        }
    }
    return $todos;
}
 ob_start(); // Start output buffering
// Display list
$todos = getTodos();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .todo-item {
            padding: 10px;
            border-bottom: 1px solid #ccc;
        }
        .done {
            background-color: #d4edda;
        }
        .delete-btn {
            background-color: #dc3545;
            color: white;
            border: none;
            width: 150px;
            padding: 10px;
        }
        .update-btn {
            background-color: #198754;
            color: white;
            border: none;
            width: 150px;
            padding: 10px;
        }

    </style>
</head>
<body>
    <div class="container">
        <h1 class="mt-5 mb-3">Todo List</h1>
        <form action="" method="post" class="mb-3">
            <div class="row align-items-center">
                <div class="col-md-4">
                    <input type="text" name="title" class="form-control" placeholder="Enter title" required>
                </div>
                <div class="col-md-6">
                    <input type="text" name="description" class="form-control" placeholder="Enter description">
                </div>
                <div class="col-md-2 text-end">
                    <button type="submit" name="add" class="btn btn-light">Add Task</button>
                </div>
            </div>
        </form>
        <ul class="list-group">
            <?php if (!empty($todos)): ?>
                <?php foreach ($todos as $todo): ?>
                    <li class="list-group-item todo-item <?php echo $todo['status'] === 'done' ? 'done' : ''; ?>">
                        <strong><?php echo isset($todo['title']) ? $todo['title'] : ''; ?></strong>: <?php echo isset($todo['description']) ? $todo['description'] : ''; ?>
                        <form action="" method="post" class="float-end">
                            <input type="hidden" name="id" value="<?php echo $todo['id']; ?>">
                            <button type="submit" name="delete" class="btn btn-danger delete-btn">Delete</button>
                        </form>
                        <form action="" method="post" class="float-end me-2">
                            <input type="hidden" name="id" value="<?php echo $todo['id']; ?>">
                            <input type="hidden" name="status" value="<?php echo $todo['status'] === 'pending' ? 'done' : 'pending'; ?>">
                            <button type="submit" name="update" class="btn btn-success update-btn"><?php echo $todo['status'] === 'pending' ? 'Done' : 'Pending'; ?></button>
                        </form>
                    </li>
                <?php endforeach; ?>
            <?php else: ?>
                <li class="list-group-item">No items</li>
            <?php endif; ?>
        </ul>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <?php
    // Handle submissions
    if (isset($_POST['add'])) {
        $title = $_POST['title'];
        $description = $_POST['description'];
        if (!empty($title) && !empty($description)) {
            if (addTodo($title, $description)) {
                header("Location: index.php");
                exit();
            } else {
                echo "Error adding task.";
            }
        }
    }
    if (isset($_POST['delete'])) {
        $id = $_POST['id'];
        if (deleteTodo($id)) {
            header("Location: index.php");
            exit();
        } else {
            echo "Error deleting task.";
        }
    }
    if (isset($_POST['update'])) {
        $id = $_POST['id'];
        $status = $_POST['status'];
        if (updateStatus($id, $status)) {
            header("Location: index.php");
            exit();
        } else {
            echo "Error updating status.";
        }
    }
    ob_end_flush(); // Flush the output buffer
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


