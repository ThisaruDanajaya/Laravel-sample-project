import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

window.$ = window.jQuery = Request('jquery');
window.Popper = require('popper.js').default;