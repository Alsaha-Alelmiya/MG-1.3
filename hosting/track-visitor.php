// Open or create a text file to store the visitor count
$visitors_file = 'visitors.txt';
if (!file_exists($visitors_file)) {
  file_put_contents($visitors_file, '0');
}

// Increment the visitor count and write it to the text file
$visitors = file_get_contents($visitors_file);
$visitors++;
file_put_contents($visitors_file, $visitors);

// Send an email notification with the current visitor count
$to = 'fakeemail.p.once@gmail.com';
$subject = 'New visitor to your website';
$message = 'You have a new visitor to your website. Total visitors: ' . $visitors;
$headers = 'From: webmaster@example.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);