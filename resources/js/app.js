import './bootstrap';

import Alpine from 'alpinejs';
import focus from '@alpinejs/focus';

import './nav';
import './search';

window.Alpine = Alpine;

Alpine.plugin(focus);

Alpine.start();
