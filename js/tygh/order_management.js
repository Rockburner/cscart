(function(_, $) {

    $.ceEvent('on', 'ce.change_select_list', function(object) {
        if (object.price) {
            if (object.image_url) {
                object.context = '<table class="table-select2"><tr><td class="table-select2-collumn-image"><img src="' + object.image_url + '" alt="' + object.text + '" /></td>' + '<td class="truncate-product-name table-select2-collumn-name">' + object.text + '</td><td class="table-select2-collumn-price">' + object.price + '</td></tr></table>';
            } else {
                object.context = '<table class="table-select2"><tr><td class="no-image table-select2-no-images"><i class="glyph-image"></i></td>' + '<td class="truncate-product-name table-select2-collumn-name">' + object.text + '</td><td class="table-select2-collumn-price">' + object.price + '</td></tr></table>';
            }

            if (object.image_url) {
                delete object.image_url;
            }
        }
    });

    $(document).ready(function(){
        $(_.doc).on('change', '.cm-om-totals input:visible, .cm-om-totals select:visible, .cm-om-totals textarea:visible', function(){
            var is_changed = $('.cm-om-totals').formIsChanged();
            $('.cm-om-totals-price').toggleBy(is_changed);
            $('.cm-om-totals-recalculate').toggleBy(!is_changed);

            if ($(this).hasClass('cm-object-selector')) {

            }
        });

        $(_.doc).on('change', '.cm-object-selector', function () {
            $('input.select2-search__field').addClass('hidden');

            var product_id = $(this).val();

            var url = fn_url('order_management.add');

            url += '&product_id=' + product_id;

            url += '&product_data[' + product_id + '][amount]=' + 1;

            $.ceAjax('request', url, {
                method: 'post',
                result_ids: 'button_trash_products,om_ajax_update_totals,om_ajax_update_payment,om_ajax_update_shipping',
                full_render: true
            });
        });

        $(_.doc).on('keypress', 'form[name=om_cart_form] input[type=text]', function(e) {
            if(e.keyCode == 13) {
                $(this).blur();
                return false;
            }
        });
    });

}(Tygh, Tygh.$));
