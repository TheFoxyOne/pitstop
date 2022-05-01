<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="PIT STOP">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href='/dist/css/style.css'>
<title>PIT STOP</title>

<?php 
// Read the JSON files
$json_data = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/dist/localization/en.json');
$json_events = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/dist/localization/events.json');
$json_faqs = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/dist/localization/faqs.json');
  
// Decode the JSON files
$data = json_decode($json_data,true);
$events = json_decode($json_events,true);
$faqs = json_decode($json_faqs,true);
?>