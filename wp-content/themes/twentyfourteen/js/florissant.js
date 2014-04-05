(function($) {

    toggleMobileNav = function() {
        $('.mobile-nav').toggle();
    }

    toggleSearchForm = function() {
        $('.header-row').toggle();
        $('.search-form-container').toggle();
    }

    $('#biblio-form input[type="submit"]').click(function() {
        biblioValidate();
        return false;
    });

    biblioValidate = function() {

        var form = "#biblio-form";
        var formFields = [];

        // form field sanitization to come ...

        try {
            $.ajax({
                type: "POST",
                url: siteurl + "?action=biblio-search",
                data: $(form).serialize(),
                success: function(data, textStaus, jqXHR) {

                    var obj = jQuery.parseJSON(data);
                    if(false === obj.error) {

                        $('<div style="border: 1px solid #ddd;">' + obj.html + '</div>').insertAfter('#biblio-form');
                    }

                }
            }); 
        } catch (err) {
            alert(err);
        }
    }

    formValidate = function(formFields) {
    
        var empty = false;
        var errors = [];

        // clear errors
        $('.error-msg').remove();
        $('.input-error').removeClass('input-error');

        $(formFields).each(function(idx, obj) {
        
            if('' === obj.value) {
                empty = true;
                errors.push(obj.msg);
                $(obj.selector).addClass('input-error');
            }

        });

        return { empty: empty, errors: errors};
    }

})(jQuery);
