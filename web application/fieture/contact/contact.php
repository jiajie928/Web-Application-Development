<!DOCTYPE html>
<head>
  <title>Contact Us</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
      background-color: #f8f8f8;
    }

    #contact {
      width: 100%;
      padding: 50px 0;
    }

    .section-header {
      text-align: center;
      margin-bottom: 40px;
      font-size: 36px;
      color: #333;
    }

    .contact-wrapper {
      display: flex;
      flex-direction: row;
      justify-content: center;
      align-items: center;
    }

    .form-wrapper {
      max-width: 500px;
      padding: 20px;
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .form-group {
      margin-bottom: 20px;
    }

    .form-control {
      width: 100%;
      padding: 0;
      border: 1px solid #ccc;
      border-radius: 5px;
      font-size: 16px;
    }

    textarea.form-control {
      width: 100%;
      padding: 0;
      border: 1px solid #ccc;
      border-radius: 5px;
      font-size: 16px;
      resize: none;
    }

    .send-button {
      width: 100%;
      padding: 10px;
      background-color: #4CAF50;
      border: none;
      border-radius: 5px;
      color: #fff;
      font-size: 18px;
      cursor: pointer;
      transition: background-color 0.3s;
    }

    .send-button:hover {
      background-color: #45a049;
    }

    .contact-info {
      max-width: 500px;
      margin-left: 50px;
      text-align: center;
    }

    .contact-info h3 {
      font-size: 24px;
      color: #333;
    }

    .contact-info p {
      margin-bottom: 10px;
      color: #666;
    }

    .social-media-list {
      list-style: none;
      padding: 0;
    }

    .social-media-list li {
      display: inline-block;
      margin: 0 10px;
    }

    .social-media-list li a {
      color: #4CAF50;
      font-size: 24px;
      transition: color 0.3s;
    }

    .social-media-list li a:hover {
      color: #45a049;
    }
  </style>
</head>
<body>
	<?php include('../header/header.php'); ?>
	
<section id="contact">
  <div class="container">
    <h1 class="section-header">Contact Us</h1>

    <div class="contact-wrapper">

        
        <div class="form-wrapper">
        <form id="contact-form" method="post" action="contact.php">
            <div class="form-group">
              <input type="text" class="form-control" id="name" placeholder="Your Name" name="name" required>
            </div>
    
            <div class="form-group">
              <input type="email" class="form-control" id="email" placeholder="Your Email" name="email" required>
            </div>
    
            <div class="form-group">
              <textarea class="form-control" rows="5" placeholder="Message Here" name="message" required></textarea>
            </div>
    
            <button class="send-button" id="submit" type="submit">Send Message</button>
          </form>
        </div>
        
      <div class="contact-info">
        <h3>Company Address</h3>
        <p>10-04, Wisma Central, 147, Jalan Ampang,</p>
        <p>50450 Kuala Lumpur</p>
        

        <h3>Contact Info</h3>
        <p>Email: fieture21@gmail.com</p>
        <p>Phone: +012-9186013</p>

        <ul class="social-media-list">
          <li><a href="https://www.instagram.com/fieture21/" target="_blank" class="contact-icon"><i class="fa fa-instagram"></i></a></li>
          <li><a href="#" target="_blank" class="contact-icon"><i class="fa fa-facebook"></i></a></li>
          <li><a href="https://www.google.com/maps/dir//10.04,+Level+10,+Wisma+Central,+Jln+Ampang,+Kuala+Lumpur,+50450+Kuala+Lumpur,+Wilayah+Persekutuan+Kuala+Lumpur/@3.1694039,101.6880464,13.75z/data=!4m8!4m7!1m0!1m5!1m1!1s0x31cc4b598495307f:0x96635e1d6f1808d4!2m2!1d101.71448!2d3.1587907?entry=ttu" target="_blank" class="contact-icon"><i class="fa fa-map"></i></a></li>
        </ul>
      </div>

    </div>
  </div>
</section>

<script>
  document.querySelector('#contact-form').addEventListener('submit', (e) => {
    e.preventDefault();
    e.target.elements.name.value = '';
    e.target.elements.email.value = '';
    e.target.elements.message.value = '';
  });
</script>

<script>
document.getElementById("contact-form").addEventListener("submit", function(event) {
    event.preventDefault();
    
    var formData = new FormData(this);

    fetch("contact.php", {
        method: "POST",
        body: formData
    })
    .then(response => {
        if (response.ok) {
            alert("Thank you for your submission! We will get back to you as soon as possible.");
            document.getElementById("contact-form").reset();
        } else {
            throw new Error("Network response was not ok.");
        }
    })
    .catch(error => {
        console.error("There was a problem with your fetch operation:", error);
    });
});
</script>


<?php include('../footer/footer.php'); ?>
</body>
</html>
