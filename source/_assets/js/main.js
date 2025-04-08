import Swal from "sweetalert2";
import 'sweetalert2/dist/sweetalert2.css';
import AOS from 'aos';
import 'aos/dist/aos.css';
import emailjs from '@emailjs/browser';

// Initialize AOS
AOS.init({
  once: false, // animation happens every time you scroll up/down
  mirror: true,
  duration: 800,
});

window.Swal;

// Initialize EmailJS
(function() {
  emailjs.init("Xd72XTy4szDWk6lFz"); // <-- Replace with your actual EmailJS user ID
})();

// Form submission handler
document.getElementById("contactForm").addEventListener("submit", async function(event) {
  event.preventDefault();

  const form = event.target;
  const formData = new FormData(form);
  const data = Object.fromEntries(formData.entries());

  const submitBtn = document.getElementById("submitBtn");
  submitBtn.disabled = true;
  submitBtn.textContent = "Sending...";

  try {
    // Send to your API
    await fetch("https://nexbytes-backend.vercel.app/api/websites", {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
        "auth-key": "j95sENkKdGBrgERPfgbsgstrgsunilrthrthbdrh6tyyhhrtbyrb6ybrCdFmBRbjWKrWdB6PGnUIW5u1SKEEc2k7v"
      },
      body: JSON.stringify(data)
    });

    // Send via EmailJS
    await emailjs.send("service_l16qucc", "template_w31c0l8", data);

    Swal.fire({
      icon: 'success',
      title: 'Message Sent!',
      text: 'We have received your message and will get back to you shortly.',
      confirmButtonColor: '#3085d6',
    });

    form.reset();
  } catch (error) {
    console.error("Form submission error:", error);
    Swal.fire({
      icon: 'error',
      title: 'Oops...',
      text: 'Something went wrong! Please try again.',
      confirmButtonColor: '#d33',
    });
  } finally {
    submitBtn.disabled = false;
    submitBtn.textContent = "Send Message";
  }
});
