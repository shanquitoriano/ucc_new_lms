<?php
require_once('tcpdf/tcpdf.php');

// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$database = "db_ucc_lms";

// Create a new TCPDF object
$pdf = new TCPDF();

// Set document information
$pdf->SetCreator('Your Name');
$pdf->SetAuthor('Your Name');
$pdf->SetTitle('Table to PDF Example');
$pdf->SetSubject('Table to PDF Example');
$pdf->SetKeywords('TCPDF, PDF, example, test, table');

// Add a page
$pdf->AddPage();

$pdf->SetFont('helvetica', 'B', 14);
$pdf->Cell(0, 10, 'STUDENT REPORT', 0, 1, 'C'); // Adjust the title as needed
$pdf->Ln(10);

// Connect to the database
$mysqli = new mysqli($servername, $username, $password, $database);

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Fetch data from the database
$query = "SELECT * FROM student_info";
$result = $mysqli->query($query);

// Check if there are rows in the result
if ($result->num_rows > 0) {
    // Start the HTML table
    $htmlTable = '<table border="1" cellpadding="5" cellspacing="0">
                     <tr style="background-color: $rowColor; text-align: center;">
                      <th width="30">ID</th>
                      <th width="300">Name</th>
                      <th width="200">Email</th>
                    </tr>';
                    

        

    // Fetch and display each row
    while ($row = $result->fetch_assoc()) {
        $htmlTable .= "<tr>
        <td>{$row['id']}</td>
        <td>{$row['fullname']}</td>
        <td>{$row['email_address']}</td>
      </tr>";

    }

    // Close the HTML table
    $htmlTable .= '</table>';

    // Write the HTML table to the PDF
    $pdf->writeHTML($htmlTable, true, false, true, false, '');
} else {
    // No data in the table
    $pdf->Cell(0, 10, 'No data found in the table.', 0, 1, 'C');
}

// Close the database connection
$mysqli->close();

// Output the PDF to the browser
$pdf->Output('example.pdf', 'I');
?>
