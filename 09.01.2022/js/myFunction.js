function fetch_select(val){
                $.ajax({
                    type: 'post',
                    url: 'ajax.php',
                    datatype:'json',
                    data: {option:val},
                    success: function (response) {
                        $('#print-ajax').html(response);//This will print you result
                    }
                });
            }