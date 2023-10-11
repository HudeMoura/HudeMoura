
new DataTable('#example');

$ (document).ready(function() {
    $('#userList').DataTable() {
        processing: true,
        serverSide: true,
        ajax: {
            url: 'proc_pesq_user.php',
            type: 'POST',
        },
    };
});