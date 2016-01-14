/*
 * Custom JS
 */

// if the child menu is hovered, the parent should be highlighted as well
function highlightParent() {
    $('.dropdown-menu').hover(
    	function() {
    		$(this).parent().addClass('active');
    }, function() {
    		$(this).parent().removeClass('active');
    });
}

// if sidebar exists add .col-sm-9 on .user-content otherwise remove it
function scmSidebar() {
    var sidebar = $('.scm-sidebar');
    var userContent = $('.user-content');
    if (sidebar.length) {
        userContent.addClass('col-sm-9')
    } else {
        userContent.removeClass('col-sm-9')
    }
    getSidebar();
}
function getSidebar() {
    var target = $('.user-post > h2');
    var sidebar = $('.scm-sidebar');
    var sidebarMenu = [];
    // var text = target.text();
    target.each(function(index, element){
        // get the text
        var text = $(this).text();

        /* get the text => make it lowercase => replace space with - => replace & with and
        and wrap it in a variable called text */
        var modifiedText = $(this).text().toLowerCase().replace(/ /g, '-').replace(/&/i, 'and');

        // add each h2 with an id with its own modified text
        $(this).attr('id', modifiedText);
        // dynamically insert a sidebar menu based on h2 classes in user post
        sidebar.find('nav > ul').append('<li><a href="'+ modifiedText +'"> '+ text +'</a></li>');
    });
    
}

$(document).ready(function() {

    highlightParent();
    scmSidebar();

});
