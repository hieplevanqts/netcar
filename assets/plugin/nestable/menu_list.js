$(document).ready(function () {
    var base_url = $("#base_url").val();
    var updateOutput = function (e) {
        var list = e.length ? e : $(e.target), output = list.data('output');

        $.ajax({
            method: "POST",
            url: base_url+"vnadmin/menu/savelist",
            data: {
                list: list.nestable('serialize')
            }
        }).fail(function(jqXHR, textStatus, errorThrown){
            alert("Unable to save new list order: " + errorThrown);
        });
    };
    $('#nestable-menu').on('click', function(e)
    {
        var target = $(e.target),
            action = target.data('action');
        if (action === 'expand-all') {
            $('.dd').nestable('expandAll');
        }
        if (action === 'collapse-all') {
            $('.dd').nestable('collapseAll');
        }
    });

    // activate Nestable for list 1
    $('#nestable').nestable({
        group: 1
    }).on('change', updateOutput);
    // output initial serialised data
    updateOutput($('#nestable').data('output', $('#nestable-output-main')));

    /*begin show_menu*/
                            // activate Nestable for list top

                            $('#nestable_top').nestable({

                                group: 1

                            }).on('change', updateOutput);

                            // output initial serialised data top

                            updateOutput($('#nestable_top').data('output', $('#nestable-output-top')));

                            // activate Nestable for list bottom

                            $('#nestable_bottom').nestable({

                                group: 1

                            }).on('change', updateOutput);

                            // output initial serialised data bottom

                            updateOutput($('#nestable_bottom').data('output', $('#nestable-output-bottom')));

                            // activate Nestable for list bottom_2

                            $('#nestable_bottom_2').nestable({

                                group: 1

                            }).on('change', updateOutput);

                            // output initial serialised data bottom_2

                            updateOutput($('#nestable_bottom_2').data('output', $('#nestable-output-bottom_2')));
/*end show_menu*/
});

function active_tab(id) {
	$.ajax({
		url: "<?php echo site_url('admin/menu/active_tab'); ?>",
		type: 'POST',
		dataType: 'json',
		data: {id:id},
		success: function (msg) {

		}
	});
}