// 
// Toggle Section - For filters and such
// 
// @this /js/ToggleSection.js
// @requires /sass/components/__ToggleSection.scss
// 

function ReviewFilters() {

    // 
    // The Filters section that toggles
    // 

    let wrap = document.getElementById('filters');
    let wrapOpen = document.getElementById('filters-open');
    let wrapOpenText = document.getElementById('filters-open-text');
    let wrapContent = document.getElementById('filters-content');
    let wrapClose = document.getElementById('filters-close'); 
    let wrapCloseText = document.getElementById('filters-close-text');

    // Make the Filters section visible
    wrap.style.display = 'block';
    wrapOpen.style.display = 'block';

    // Set some initial attributes
    wrapOpen.setAttribute('aria-expanded', 'false');
    wrapOpen.setAttribute('aria-label', 'Expand filters below');
    wrapOpenText.textContent = 'Expand Filters'
    wrapContent.setAttribute('aria-hidden', 'true');
    wrapClose.style.display = 'none';


    // Close handler
    function wrapCloseHandler() {

        // Change these right away
        wrapOpen.setAttribute('aria-expanded', 'false');
        wrapOpen.setAttribute('aria-label', 'Expand filters below');
        wrapOpenText.textContent = 'Expand Filters'

        wrapContent.setAttribute('aria-hidden', 'true');

        wrapClose.style.display = 'none';
        // wrapClose.setAttribute('aria-expanded', 'false');
        // wrapClose.setAttribute('aria-label', 'Expand filters above');
        // wrapCloseText.textContent('Expand Filters');

        // Return focus to the main toggle
        wrapOpen.focus();

        // Wait for animation to change these
        setTimeout(() => {
            wrapContent.style.display = 'none';
        }, 300);

    }; // 

    // Open handler
    function wrapOpenHandler() {

        // Change these right away
        wrapOpen.setAttribute('aria-expanded', 'true');
        wrapOpen.setAttribute('aria-label', 'Collapse filters below');
        wrapOpenText.textContent = 'Collapse Filters';

        wrapContent.setAttribute('aria-hidden', 'false');

        wrapClose.setAttribute('aria-expanded', 'true');
        wrapClose.setAttribute('aria-label', 'Collapse filters above');
        wrapCloseText.textContent = 'Collapse Filters';

        wrapContent.style.display = 'block';
        wrapClose.style.display = 'block';
        // Wait for animation to change these
        setTimeout(() => {

        }, 300);

    }; //

    // Click event for openenr
    wrapOpen.addEventListener('click', function (event) {
        event.stopPropagation();
        event.preventDefault();
        if (wrapOpen.getAttribute('aria-expanded') == null) {
            wrapOpenHandler();         
        } else if (wrapOpen.getAttribute('aria-expanded') == 'false') {
            wrapOpenHandler();            
        } else {
            wrapCloseHandler();
        }
    });

    // Click event for closer
    wrapClose.addEventListener('click', function (event) {
        event.stopPropagation();
        event.preventDefault();
        wrapCloseHandler();
    });



    // 
    // The individual filters that toggle
    // 

    let filters = Array.from(
        document.querySelectorAll('.filter')
    );

    // Iterate sections
    filters.forEach(function (filter, index) {

        // Variables
        let filterToggle = filter.querySelector('.filter__toggle');
        let filterContent = filter.querySelector('.filter__content');

        // Close handler
        function filterCloseHandler() {

            // Change these right away
            filterToggle.setAttribute('aria-expanded', 'false');
            filterToggle.setAttribute('aria-label', 'Expand filter below');
            filterContent.setAttribute('aria-hidden', 'true');


            // Wait for animation to change these
            setTimeout(() => {
                filterContent.style.display = 'none';
            }, 300);     

        }; // 

        // Open handler
        function filterOpenHandler() {

            // Change these right away
            filterToggle.setAttribute('aria-expanded', 'true');
            filterToggle.setAttribute('aria-label', 'Collapse filter below');
            filterContent.setAttribute('aria-hidden', 'false');
            filterContent.style.display = 'block';  

            // Wait for animation to change these
            setTimeout(() => {

            }, 300); 

        }; //

        // Click event 
        filterToggle.addEventListener('click', function (event) {
            event.stopPropagation();
            event.preventDefault();
            if (filterToggle.getAttribute('aria-expanded') == null) {
                filterOpenHandler();
            } else if (filterToggle.getAttribute('aria-expanded') == 'false') {
                filterOpenHandler();
            } else {
                filterCloseHandler();
            }
        });   


        // Log each section
        console.log('Filter', index, filter);

    }); //  forEach  

}; // FiltersJS


//
// ToggleSection.init(); 
//

ReviewFilters.init = function() {

    console.log('ReviewFilters init');

    return new ReviewFilters();

}; 

