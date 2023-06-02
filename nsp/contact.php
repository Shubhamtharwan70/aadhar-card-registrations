<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact - Aadhaar Card Registration</title>
  <link rel="stylesheet" href="css\contact.css">
</head>
<body>
  <header>
    <nav>
      <ul>
        <li><a href="doc.php">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="loginpage.php">Login</a></li>
      </ul>
    </nav>
  </header>

  <main>
    <section class="container">
      <h1>Contact Us</h1>
      <form id="contact-form">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>

        <label for="message">Message</label>
        <textarea id="message" name="message" required></textarea>

        <button type="submit">Send Message</button>
      </form>
    </section>
  </main>

  <footer>
    <p>&copy; 2023 Aadhaar Card Registration. All rights reserved.</p>
  </footer>

  <script src="javascript\contact.js"></script>
</body>
</html>
