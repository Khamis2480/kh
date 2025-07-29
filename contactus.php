<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Contact Us - ZanVarsity</title>
  <link rel="stylesheet" href="style.css">

  <link rel="icon" href="favicon.jpeg">
  <link rel="stylesheet" href="divstyle.css"> 
  <link rel="stylesheet" href="headcss.css"> 
  <link rel="stylesheet" href="navbar.css"> 
  <link rel="stylesheet" href="sidebardesign.css"> 

  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f8f9fa;
      margin: 0;
      padding: 0;
    }

    .contact-container {
      max-width: 1000px;
      margin: auto;
      padding: 40px 20px;
      background: white;
    }

    .contact-header {
      text-align: center;
      margin-bottom: 40px;
    }

    .contact-grid {
      display: flex;
      flex-wrap: wrap;
      gap: 40px;
      justify-content: space-between;
    }

    .contact-info, .contact-form {
      flex: 1;
      min-width: 300px;
    }

    .contact-info h3, .contact-form h3 {
      margin-bottom: 15px;
      color: #003366;
    }

    .contact-info p {
      margin: 8px 0;
    }

    .social-icons img {
      width: 30px;
      margin: 10px 10px 0 0;
      vertical-align: middle;
    }

    form input, form textarea {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    form button {
      background: #003366;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    form button:hover {
      background: #0055a5;
    }

    .map {
      margin-top: 40px;
    }

    iframe {
      width: 100%;
      height: 300px;
      border: none;
    }
  </style>
</head>
<body>
<div class="header">
    <img src="favicon.jpeg" class="logo">
    <h1>Zanzibar University</h1>
  </div>

  <div class="nav">
    <nav>
      <a href="index.php">Home</a>
      <a href="#">Download</a>
      <a href="#">Academic</a>
      <a class="active" href="#">Contact Us</a>
      <a href="">Login</a>
    </nav>
  </div>
  <div class="layout">
  
  <div class="sidebar">
          <h3> Spring of Knowledge and Virtue || For more enquiries e-mail us on:  
            <a href="mailto:info@zanvarsity.ac.tz">
            <img src="mail.jpeg" alt="Mail" class="icon"> </a>
           </h3>
  </div>
  <div class="contact-container">
    <div class="contact-header">
      <h2>Contact Us</h2>
      <p>We’re here to help you connect with ZanVarsity.</p>
    </div>

    <div class="contact-grid">
      <!-- Contact Info -->
      <div class="contact-info">
        <h3>University Contact Info</h3>
        <p><strong>Address:</strong> Zanzibar, Tanzania</p>
        <p><strong>Phone:</strong> +255 712 345 678</p>
        <p><strong>Email:</strong> <a href="mailto:info@zanvarsity.ac.tz">info@zanvarsity.ac.tz</a></p>

        <h3>Follow Us</h3>
        <div class="social-icons">
          <a href="https://facebook.com" target="_blank"><img src="facebook.jpeg" alt="Facebook"></a>
          <a href="https://wa.me/255712345678" target="_blank"><img src="whatsapp.jpeg" alt="WhatsApp"></a>
          <a href="mailto:info@zanvarsity.ac.tz"><img src="mail.jpeg" alt="Email"></a>
        </div>       
    <!-- Google Map -->
      <div class="map">
      <h3>Our Location</h3>
      <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.2957200478627!2d39.30983247499049!3d-6.224684393763397!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x185cd8987a1467ff%3A0xcb0dbea770558349!2sZanzibar%20University!5e0!3m2!1sen!2stz!4v1746648870064!5m2!1sen!2stz" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" title="Zanzibar University Tunguu" referrerpolicy="no-referrer-when-downgrade ">
      </div>
  </div>
  </div>

</body>
</html>