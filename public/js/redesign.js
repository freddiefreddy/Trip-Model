{/* <script type="text/javascript">
    $(document).ready(function()
    {
        $('#submit').on('click', function (e)
        {
            e.preventDefault();
            $.ajaxSetup({headers: { 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content') }});
        
        var shippingcodedd = $("#code").val();
            if (shippingcodedd) {
                $.ajax({
                    url: '{{ url('shippingcode') }}/'+encodeURI(shippingcodedd),
                    type: "GET",
                    dataType: "json",
                    success: function (data) {
                        $('div#results').empty();
                        var summar = data.data.summary;
                        $('div#results').append('Data prints here!');
                    }
                });
            }else{
                $('div#results').empty();
                $('div#results').append('Sorry there is no info regarding to your tracking code in our system!');
            }
       });
    });
</script> */}

// {/* <script> */}
//     $(".trip").click(function() {
//         window.location = $(this).data("tripdetails");
//         return false;
//     });
    
// {/* </script> */}

$(document).ready(function () {
    var status = [];
    //Listen for 'change' event, so this triggers when the user clicks on the checkbox 
    ('input[name="vehicle[]"]').on('change', function (e) {
        e.preventDefault();
        status = [];//reset

        $('input[name="vehicle[]"]:checked').each(function () {
            status.push($(this).val());
        });
        $.get('/searchresults', { status: CANCELED }, function (markup) {
            $('#search-results').html(markup);
            // var count = $('#count').val(); // vacancies count, from hidden input   
            // $(".page-title").html("(" + count + ")");            
        });
    
    });
    
});

$(".trip").click(function() {
    // window.location = $(this).data("tripdetails");
    // window.location = $(this).data("tripdetails");
    window.location.href = "tripdetails/{id}";
    // return false;
});
{/* <script>
   
$(".trip").click(function() {
    window.location = $(this).data("tripdetails");
    return false;
}); 
</script> */}
