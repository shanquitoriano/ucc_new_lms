<?php
// Database connection details
$host = "localhost";
$dbname = "db_ucc_lms";
$username = "root";
$password = "";

try {
   
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
        if (isset($_FILES["file"]) && $_FILES["file"]["error"] == 0) {
           
            $targetDir = "uploads/";
            
            if (!file_exists($targetDir)) {
                mkdir($targetDir, 0777, true);
            }

           
            $targetFile = $targetDir . uniqid() . "_" . basename($_FILES["file"]["name"]);

            
            if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFile)) {
               
                $stmt = $pdo->prepare("INSERT INTO classword_assignment_submission (file_name, file_path, classwork_assignment_id, student_id, grade) VALUES (:file_name, :file_path, '1', '1', '0')");
                $stmt->bindParam(':file_name', $_FILES["file"]["name"]);
                $stmt->bindParam(':file_path', $targetFile);
                $stmt->execute();

                echo "The file has been uploaded and information saved to the database.";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        } else {
            echo "Error: " . $_FILES["file"]["error"];
        }
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
