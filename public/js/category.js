$(document).ready(function () {
    $('.delete-category').on('click', function () {
        $('.form-delete').attr("action", '/settings/category/'+$(this).data('id')+'/delete')
    })
});
