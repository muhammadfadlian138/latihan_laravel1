console.log("Vite berfungsi!");

import './ollama.js';
import segitiga from '../images/image.png';

const img = document.createElement('img');
	  img.src = segitiga;

document.body.appendChild(img);