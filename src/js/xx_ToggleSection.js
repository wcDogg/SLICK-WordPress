// 
// Toggle Section - For filters and such
// 
// @this /js/ToggleSection.js
// @requires /sass/components/__ToggleSection.scss
// 

function ToggleSection() {


    // Get array of all sections   
    let sections = Array.from(
        document.querySelectorAll('.toggle')
    );

    // Iterate sections
    sections.forEach(function (section, index) {

        // Variables
        let sectionLink = section.querySelector('.toggle__link');
        let sectionLinkClose = section.querySelector('.toggle__link-close');
        let sectionContent = section.querySelector('.toggle__content');

        // Close handler
        function sectionClose() {

            // Change these right away
            section.setAttribute('data-toggle-section', 'false');
            sectionLink.setAttribute('aria-expanded', 'false');
            sectionLink.setAttribute('aria-label', 'Expand filters below');
            sectionContent.setAttribute('aria-hidden', 'true');

            sectionLink.focus();

            // Wait for animation to change these
            setTimeout(() => {
                sectionContent.style.display = 'none';
            }, 300);     

        }; // 

        // Open handler
        function sectionOpen() {

            // Change these right away
            section.setAttribute('data-toggle-section', 'true');
            sectionLink.setAttribute('aria-expanded', 'true');
            sectionLink.setAttribute('aria-label', 'Collapse Filters');
            sectionContent.setAttribute('aria-hidden', 'false');
            sectionContent.style.display = 'block';  

            // Wait for animation to change these
            setTimeout(() => {

            }, 300); 

        }; //


        // Load event
        sectionClose();

        // Click event 
        sectionLink.addEventListener('click', function (event) {
            event.stopPropagation();
            event.preventDefault();
            if (sectionLink.getAttribute('aria-expanded') == 'false') {
                sectionOpen();
            } else {
                sectionClose();
            }
        });   



        // Click event for optional second close link
        if (sectionLinkClose) {

            sectionLinkClose.addEventListener('click', function (event) {
                event.stopPropagation();
                event.preventDefault();
                sectionClose();
            });  

        };

        // Log each section
        console.log('ToggleSection', index, section);

    }); //  forEach  

}; // Toggle Section


//
// ToggleSection.init(); 
//

ToggleSection.init = function() {

    console.log('ToggleSection init');

    return new ToggleSection();

}; 

