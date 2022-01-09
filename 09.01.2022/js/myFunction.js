function fetch_select(val){
    $.ajax({
        type: 'post',
        url: 'print_database.php',
        datatype:'json',
        data: {option:val},
        success: function (response) {
            $('#print-ajax').html(response);//This will print you result
    
        }
    })
}