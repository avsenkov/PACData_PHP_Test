import './bootstrap';
import { createPopper } from '@popperjs/core';

document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('.filament-dropdown-trigger').forEach(trigger => {
        const panel = trigger.nextElementSibling;
        if (panel) {
            createPopper(trigger, panel, {
                placement: 'bottom-end',
                modifiers: [
                    { name: 'preventOverflow', options: { boundary: 'viewport' } },
                    { name: 'flip', options: { fallbackPlacements: ['bottom', 'top'] } }
                ],
            });
        }
    });
});