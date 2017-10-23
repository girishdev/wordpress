function fetch() {
    $.post('/wordpress/wp-admin/admin-ajax.php', {'action':'my_action'}, function (response) {
        $('#datafetch').append(response);
    });
}