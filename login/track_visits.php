<?php
// Get the current page's URL
$pageURL = $_SERVER['REQUEST_URI'];

// Get the title of the webpage
$pageTitle = $_POST['pageTitle']; // Sent as a POST parameter

// Define the path to the JSON file
$jsonFilePath = '../Database/visits.json';

// Read the JSON file contents
$jsonData = file_get_contents($jsonFilePath);

// Convert the JSON data to an associative array
$visitsData = json_decode($jsonData, true);

// Check if the page URL already exists in the data
if (!isset($visitsData[$pageURL])) {
  // Set the visit count to 1 for a new page
  $visitsData[$pageURL] = array(
    'count' => 1,
    'pageTitle' => $pageTitle
  );
} else {
  // Increment the visit count for an existing page
  $visitsData[$pageURL]['count']++;
}

// Convert the updated data back to JSON
$updatedJsonData = json_encode($visitsData);

// Write the updated JSON data back to the file
file_put_contents($jsonFilePath, $updatedJsonData);

// Respond with the updated visit count
$response = array('count' => $visitsData[$pageURL]['count']);
echo json_encode($response);
?>
