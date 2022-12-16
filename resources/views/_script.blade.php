<script>
    $(document).ready(function() {
        $(".show_modal").click(function() {
            let id = $(this).data("id")
            let token = $("input[name=_token]").val();

            $.ajax({
                type: "GET",
                url: "commodities/json/" + id,
                data: {
                    id: id,
                    _token: token
                },
                success: function(data) {
                    console.log(data)
                    $("#modalLabel").html(data.data.name)
                    $("#item_code").val(data.data.item_code)
                    $("#commodity_location_id").html(data.data.commodity_location_id)
                    $("#name").html(data.data.name)
                    $("#brand").val(data.data.brand)
                    $("#school_operational_assistance_id").html(data.data.school_operational_assistance_id)
                    $("#quantity").val(data.data.quantity)
                    $("#unit").val(data.data.unit)
                    $("#vendor").html(data.data.vendor)
                    $("#note").html(data.data.note)
                }
            })
        })
    })
</script>