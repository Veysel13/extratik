const ajaxEditForm = (context) => {

    const editModal = $('#default-modal');
    const editModalTitle = context.data('modal-title')?context.data('modal-title'):'';
    const section = context.data('section')?context.data('section'):'';

    $.ajax({
        url: context.prop('href'),
        method: context.prop('method') ? context.prop('method') : 'GET',
        data:{
            section:section
        },
        success: function (response) {
           if (response.status==true){
               $('.showModal').click()
               editModal.find('.modal-title').text(editModalTitle);
               editModal.find('.modal-body').html(response.content);
           }
        },
        error: function (xhr, status, error) {
            $('.showModal').click()
        }
    });
};

$(document).on('click', '.ajaxEditForm', function (event) {
    event.preventDefault();
    ajaxEditForm($(this));
});

$('#searchInput').on('input', function() {
    const filter = $(this).val().toUpperCase();
    $('#patientsTable tr').each(function() {
        const rowText = $(this).text().toUpperCase();
        if (rowText.indexOf(filter) > -1) {
            $(this).show();
        } else {
            $(this).hide();
        }
    });
});




