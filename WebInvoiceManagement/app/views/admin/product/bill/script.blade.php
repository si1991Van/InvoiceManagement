<script>
    (function($){
        
    })(jQuery);

    $(document).ready(function () {
        searchName();
    });
    function searchName() {
        var user =[
                    @foreach($data as $value)
                        {{ "'".$value."'"."," }}
                    @endforeach
                ];
        $('#name_id').autocomplete({
            source: user,
            minLength: 0,
            scroll: true
        }).focus(function () {
            $(this).autocomplete("search", "");
        });
    }

    function ImportBill()
    {
        var importBillKey = $('input[name=importBillKey]').val();
        if(!importBillKey) {
            importBillKey = 0;
        }
        $.ajax(
        {
            type : 'post',
            url : '{{ url("admin/product/bill/assignImportBill") }}',
            data : {
                'importBillKey' : importBillKey,
            },
            beforeSend: function() {
                $('.assignBtn').html('Đang load...');
            },
            success: function(responseText)
            {
                $('.assignBtn').html('Thêm SP');
                console.log(responseText);
                $('#table').append(responseText);
                importBillKey++;
                $('input[name=importBillKey]').val(importBillKey);
            }
        });
    }
    function removeAssignImportBill(projectUserkey)
    {
        $('#table'+projectUserkey).remove();
    }

    
</script>