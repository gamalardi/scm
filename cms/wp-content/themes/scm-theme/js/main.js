/*
 * Custom JS
 */

// if the child menu is hovered, the parent should be highlighted as well
function highlightParent() {
    // $('.dropdown-menu').hover(function() {
    //     $(this).parent().addClass('active');
    // })
    $('.dropdown-menu').hover(
    	function() {
    		$(this).parent().addClass('active');
    }, function() {
    		$(this).parent().removeClass('active');
    });
}

$(document).ready(function() {

    highlightParent();

});
