jQuery(document).ready(function ($) {
    var dropdownContent = $('.dropdown-content');

    // Set the initial state of the dropdown
    dropdownContent.addClass('close');

    // Click event for dropbtn
    $('.dropbtn').on('click', function (e) {
        e.preventDefault(); // Prevent the default behavior of the click event

        if (dropdownContent.hasClass('close')) {
            // If the dropdown is closed, open it
            dropdownContent.removeClass('close');
            // Add styles for opening the dropdown
            dropdownContent.css({
                'display': 'flex',
                'top': 0,
                'height': '11em',
                'flex-direction': 'column',
                'justify-content': 'flex-end',
                'align-items': 'flex-start',
                'margin-top': '-1em'
            });
        } else {
            // If the dropdown is open, close it
            dropdownContent.addClass('close');
            // Add styles for closing the dropdown
            dropdownContent.css({
                'display': 'none', // or any other closing styles
            });
        }
    });

    // Click event for the document to close the dropdown when clicking outside
    $(document).on('click', function (e) {
        if (!$(e.target).closest('.dropdown').length) {
            // If the click is outside the dropdown, close it
            dropdownContent.addClass('close');
            // Add styles for closing the dropdown
            dropdownContent.css({
                'display': 'none', // or any other closing styles
            });
        }
    });
});



