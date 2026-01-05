<?php
$pageTitle = 'Contact Turbo Hills — Book Sikkim tours from Bagdogra';
$metaDescription = 'Contact Turbo Hills for Sikkim tours starting at Bagdogra. Fast quotes, custom itineraries and airport transfers.';
include __DIR__ . '/includes/header.php';

$errors = [];
$success = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $message = trim($_POST['message'] ?? '');

    if ($name === '') $errors[] = 'Name is required.';
    if ($email === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = 'A valid email is required.';
    if ($message === '') $errors[] = 'Please provide a short message or trip dates.';

    if (empty($errors)) {
        $to = 'info@turbohills.com';
        $subject = 'Website enquiry from ' . $name;
        $body = "Name: $name\nEmail: $email\n\nMessage:\n$message\n\nFrom: " . ($_SERVER['HTTP_REFERER'] ?? 'contact page');
        $headers = "From: $name <$email>\r\nReply-To: $email\r\n";
        // Try to send; in many local dev setups mail() may not be configured — we still attempt it.
        if (mail($to, $subject, $body, $headers)) {
            $success = 'Thank you — your message has been sent. We will reply within 24 hours.';
        } else {
            // Provide fallback so user knows how to reach
            $success = 'We could not send email automatically from this server. Please email us at info@turbohills.com with your enquiry. Your message is below:';
        }
    }
}
?>

<article>
  <h1>Contact Turbo Hills</h1>
  <p>Use the form to request a quote for Sikkim tours starting at Bagdogra Airport. Include travel dates and the number of travellers for the fastest response.</p>

  <?php if ($errors): ?>
    <div class="errors"><ul><?php foreach ($errors as $e) echo '<li>' . htmlspecialchars($e) . '</li>'; ?></ul></div>
  <?php endif; ?>

  <?php if ($success): ?>
    <div class="success"><?php echo nl2br(htmlspecialchars($success)); ?></div>
  <?php endif; ?>

  <form method="post" action="/contact.php" class="contact-form">
    <label>Name<br><input type="text" name="name" value="<?php echo htmlspecialchars($_POST['name'] ?? ''); ?>" required></label>
    <label>Email<br><input type="email" name="email" value="<?php echo htmlspecialchars($_POST['email'] ?? ''); ?>" required></label>
    <label>Message / Trip details<br><textarea name="message" rows="6" required><?php echo htmlspecialchars($_POST['message'] ?? ''); ?></textarea></label>
    <button type="submit">Send enquiry</button>
  </form>

  <h2>Other ways to reach us</h2>
  <p>Email: <a href="mailto:info@turbohills.com">info@turbohills.com</a><br>Phone: +91-00000-00000</p>
</article>

<?php include __DIR__ . '/includes/footer.php'; ?>
