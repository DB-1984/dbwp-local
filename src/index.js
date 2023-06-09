import "../css/style.scss" // scss for gulp
import AOS from 'aos'; // animate on scroll package
import 'aos/dist/aos.css'; // AOS CSS
import toggler from './modules/toggler.js'; // Burger animation
import stickyHeader from "./modules/stickyHeader"; // Duh...
import searchOverlay from "./modules/searchOverlay"; // Duh...
import searchAPI from "./modules/searchAPI"; // Duh...
import showPopup from "./modules/storageCookie";

toggler();
stickyHeader();
AOS.init();
searchOverlay();
searchAPI();
showPopup();