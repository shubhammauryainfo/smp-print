import Swal from "sweetalert2";
import 'sweetalert2/dist/sweetalert2.css';
import AOS from 'aos';
import 'aos/dist/aos.css';

AOS.init(
    {
        once: false, // animation happens every time you scroll up/down
        mirror: true,
      duration: 800,
    }
  );

window.Swal;