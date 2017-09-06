$(function() {
    $('#sidebar-menu').metisMenu();        
    $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {    
  	var target = $(this).attr('href');  
        $(target).css('right','-'+$(window).width()+'px');   
        var right = $(target).offset().right;
        $(target).css({left:right}).animate({"right":"0px"}, "10");
    })
});

//Loads the correct sidebar on window load,
//collapses the sidebar on window resize.
// Sets the min-height of #page-wrapper to window size
$(function() {
    var url = window.location;
    var element = $('ul .treeview a').filter(function() {
        return this.href == url || url.href.indexOf(this.href) == 0;
    }).addClass('active').parent().parent().addClass('in').parent();
    if (element.is('li')) {
        element.addClass('active');
    }
    
    
    // fadeout flash messages on click
    $('#content').click(function () {
        $(this).parent('div').fadeOut();
    });
    $('.close').click(function () {
        $(this).parent('div').fadeOut();
    });

    // fade out flash messages after 3 seconds
    $('.alert').animate({opacity: 1.0}, 5000).fadeOut();

    $('#checkAll').click(function () {
        $('input:checkbox').not(this).prop('checked', this.checked);
    });
    $("[id*=book_]").change(function () {
        if ($('input[id*=chk_][type=checkbox]:checked').length == $('input[id*=chk_][type=checkbox]').length) {
            $('#checkAll').prop('checked', true);
        } else {
            $('#checkAll').prop('checked', false);
        }
    });
});
function checkChecked(formname) {
    var anyBoxesChecked = false;
    $('#' + formname + ' input[type="checkbox"]').each(function () {
        if ($(this).is(":checked")) {
            anyBoxesChecked = true;
        }
    });

    if (anyBoxesChecked == false) {
        alert('Please select at least one checkbox');
        return false;
    }
    
}


function tab_redirect(next_prev)
{
    if(next_prev=="Next")
    {
        $('.nav-tabs > .active').next('li').find('a').trigger('click');
    }
    if(next_prev=="Previous")
    {
        $('.nav-tabs > .active').prev('li').find('a').trigger('click');
    }
}
function alertClose()
{
    $(".alert").fadeTo(3000, 1000).slideUp(500, function(){
        $(".alert").alert('close');
    });    
    $('html, body').animate({scrollTop: $(".content-wrapper").offset().top}, 1000);
}

function ajaxindicatorstart(text)
{
    if (jQuery('body').find('#resultLoading').attr('id') != 'resultLoading') {
        jQuery('body').append('<div id="resultLoading" style="display:none"><div><img src="'+BASE_URL+'images/ajax-loader.gif"><div>' + text + '</div></div><div class="bg"></div></div>');
    }

    jQuery('#resultLoading').css({
        'width': '100%',
        'height': '100%',
        'position': 'fixed',
        'z-index': '10000000',
        'top': '0',
        'left': '0',
        'right': '0',
        'bottom': '0',
        'margin': 'auto'
    });

    jQuery('#resultLoading .bg').css({
        'background': '#000000',
        'opacity': '0.7',
        'width': '100%',
        'height': '100%',
        'position': 'absolute',
        'top': '0'
    });

    jQuery('#resultLoading>div:first').css({
        'width': '250px',
        'height': '75px',
        'text-align': 'center',
        'position': 'fixed',
        'top': '0',
        'left': '0',
        'right': '0',
        'bottom': '0',
        'margin': 'auto',
        'font-size': '16px',
        'z-index': '10',
        'color': '#ffffff'

    });

    jQuery('#resultLoading .bg').height('100%');
    jQuery('#resultLoading').fadeIn(300);
    jQuery('body').css('cursor', 'wait');
}
function ajaxindicatorstop()
{
    jQuery('#resultLoading .bg').height('100%');
    jQuery('#resultLoading').fadeOut(300);
    jQuery('body').css('cursor', 'default');
}