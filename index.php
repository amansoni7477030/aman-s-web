<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Aman's ecofriendly Products</title>
  </head>
  <body>
    <header class="header">
      <nav class="nav">
        <h1 class="logo">Aman's Web&nbsp&nbsp;</h1>
        <ul class="nav-links">
          <li><a href="#products">  Products</a></li>
          <li><a href="#about">  About</a></li>
          <li><a href="#contact">  Contact</a></li>
        </ul>
      </nav>                                                                                                                                                           
    </header>                                                                                                                                                      <section class="products section" id="products">
  <h2 class="section-title">Our Products</h2>
  <p class="section-subtitle">Eco-friendly and sustainable alternatives for everyday use</p>
 <div class="product-grid">
  <div class="product">
    <img src="https://via.placeholder.com/400x600" alt="Reusable Bag" onmouseover="this.src='https://via.placeholder.com/400x600?text=Bag'" onmouseout="this.src='https://via.placeholder.com/400x600'">
    <h3 class="product-title">Reusable Bag</h3>
  </div>
  <div class="product">
    <img src="https://via.placeholder.com/400x600" alt="Reusable Water Bottle" onmouseover="this.src='https://via.placeholder.com/400x600?text=Water+Bottle'" onmouseout="this.src='https://via.placeholder.com/400x600'">
    <h3 class="product-title">Reusable Water Bottle</h3>
  </div>
  <div class="product">
    <img src="https://via.placeholder.com/400x600" alt="Reusable Straw" onmouseover="this.src='https://via.placeholder.com/400x600?text=Straw'" onmouseout="this.src='https://via.placeholder.com/400x600'">
    <h3 class="product-title">Reusable Straw</h3>
  </div>
</div>
</section>

<section class="about section" id="about">
  <h2 class="section-title">About Us</h2>
  <p class="section-subtitle">Our mission is to reduce waste and promote sustainability</p>
  <p>Discover a world of positive change with us! 🌱 Embrace small steps for big impact through our eco-friendly goodies. Imagine reusable bags, trendy water bottles, and more, all designed to make your everyday awesome while saving the planet. Let's make sustainability your style! 🌍🛍️💧</p>
</section>

<section class="contact section" id="contact">
  <h2 class="section-title">Contact Us</h2>
  <p class="section-subtitle">Get in touch with us</p>

  <form action="#" method="post" class="contact-form" id="contact-form">
    <input type="text" name="name" id="name" placeholder="Name" required>
    <input type="email" name="email" id="email" placeholder="Email" required>
    <textarea name="message" id="message" rows="5" placeholder="Message" required></textarea>
    <button type="submit" class="submit-btn" name="submit">Submit</button>
  </form>
  
  <div id="thank-you-message"></div>
</section>
<script>
  document.getElementById("contact-form").addEventListener("submit", function(event) {
    event.preventDefault();
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var message = document.getElementById("message").value;

    if (name === "" || email === "" || message === "") {
      alert("Please fill in all the required fields.");
      return;
    }

    var formData = new FormData(this);

    // You can add additional form data here if needed

    var xhr = new XMLHttpRequest();
    xhr.open("POST", "submit_form.php", true); // Change the URL to your PHP script
    xhr.onreadystatechange = function() {
      if (xhr.readyState === 4 && xhr.status === 200) {
        document.getElementById("thank-you-message").innerHTML = "<p>Thank You we will get back to you</p>";
      }
    };
    xhr.send(formData);
  });
</script>

<footer class="footer">
  <p>&copy; 2023 Aman's Web</p>
</footer>
</body>
</html>
