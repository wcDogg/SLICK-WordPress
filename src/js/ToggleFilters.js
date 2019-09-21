/*!
 * Toggle Review Filters
 *
 * @this /js/ToggleFilters.js
 * @requires /sass/componenets/_ToggleFilters.scss
 * @requires /sass/globals/_animate.scss
 *
 */ 

function ToggleFilters() {

    let wrap = document.getElementById('filters');
    let toggle = document.getElementById('filters-toggle');
    let content = document.getElementById('filters-content');

    let toggle_text_show = '<span>Show Filters</span> <i class="fas fa-angle-down"></i>';
    let toggle_text_hide = '<span>Hide Filters</span> <i class="fas fa-angle-up"></i>';

    // Make the Filters section visible
    wrap.style.display = 'block';
    // Set initial toggle
    toggle.innerHTML = toggle_text_show;
    toggle.setAttribute('aria-expanded', 'false');
    toggle.setAttribute('aria-label', 'Show Filters');
    // Set initial content
    content.setAttribute('aria-hidden', 'true');


    // Close handler
    function toggleClose() {

        // Change these right away
        toggle.innerHTML = toggle_text_show;
        toggle.setAttribute('aria-expanded', 'false');
        toggle.setAttribute('aria-label', 'Show Filters');
        content.setAttribute('aria-hidden', 'true');

        // Return focus to the main toggle
        toggle.focus();

        // Wait for animation to change these
        setTimeout(() => {
            content.style.display = 'none';
        }, 300);

    }; // 

    // Open handler
    function toggleOpen() {

        // Change these right away
        toggle.innerHTML = toggle_text_hide;       
        toggle.setAttribute('aria-expanded', 'true');
        toggle.setAttribute('aria-label', 'Hide Filters');
        content.setAttribute('aria-hidden', 'false');
        content.style.display = 'block';

        // Wait for animation to change these
        setTimeout(() => {

        }, 300);

    }; //


    // Click event 
    toggle.addEventListener('click', function (event) {
        event.stopPropagation();
        event.preventDefault();
        if (toggle.getAttribute('aria-expanded') == null) {
            toggleOpen();
        } else if (toggle.getAttribute('aria-expanded') == 'false') {
            toggleOpen();
        } else {
            toggleClose();
        }
    });

}; // FiltersJS


//
// ToggleFilters.init(); 
//

ToggleFilters.init = function () {

    console.log('ToggleFilters init');

    var wrap = document.getElementById('filters');

    if ( wrap == null ) {
        return;
    } 
    else {
        return new ToggleFilters();
    }

}; 