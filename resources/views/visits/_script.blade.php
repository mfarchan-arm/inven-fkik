<script>
    $(document).ready(function() {
        $(".show_modal").click(function() {
            let id = $(this).data("id")
            let token = $("input[name=_token]").val();

            $.ajax({
                type: "GET",
                url: "kunjungan/json/" + id,
                data: {
                    id: id,
                    _token: token
                },
                success: function(data) {
                    $("#modalLabel").html(data.data.name)
                    $("#name").html(data.data.name)
                    $("#npm").html(data.data.npm)
                    $("#description").html(data.data.description)
                    $("#time_in").html(data.data.time_in)
                    $("#created_at").html(data.data.time_in)
                }
            })
        })

        // $(".swal-edit-button").click(function() {
        //     let id = $(this).data("id");
        //     let token = $("input[name=_token]").val();

        //     // Injecting an id with relevant data on click for updating on #swal-update-button
        //     $("#swal-update-button").attr("data-id", id);

        //     $.ajax({
        //         url: "kunjungan/json/" + id + "/edit",
        //         type: "GET",
        //         data: {
        //             id: id,
        //             _token: token
        //         },
        //         success: function(data) {
        //             $("#modalLabel").val(data.data.name)
        //             $("#name").val(data.data.name)
        //             $("#npm").val(data.data.npm)
        //             $("#description").val(data.data.description)
        //             $("#time_in").val(data.data.time_in)
        //             $("#created_at").val(data.data.created_at)
        //         },
        //         error: function(data) {
        //             Swal.fire("Gagal!", "Tidak dapat melihat info kategori buku.",
        //                 "warning");
        //         }
        //     });
        // });

        // $("#swal-update-button").click(function(e) {
        //     e.preventDefault();
        //     // Get id injected by .swal-edit-button
        //     let id = $("#swal-update-button").attr("data-id");
        //     let token = $("input[name=_token]").val();

        //     let name = $("#name_edit").val();
        //     let npm = $("#npm_edit").val();
        //     let description = $("#description_edit").val();
        //     let time_in = $("#time_in_edit").val();
        //     let created_at = $("#created_at_edit").val();

        //     $.ajax({
        //         url: "kunjungan/json/" + id,
        //         type: "PUT",
        //         data: {
        //             _token: token,
        //             name = $("#name_edit").val();
        //             npm = $("#npm_edit").val();
        //             description = $("#description_edit").val();
        //             time_in = $("#time_in_edit").val();
        //             created_at = $("#created_at_edit").val();
        //         },
        //         success: function(data) {
        //             Swal.fire({
        //                 title: "Berhasil",
        //                 text: "Data berhasil diubah.",
        //                 icon: "success",
        //                 timerProgressBar: true,
        //                 onBeforeOpen: () => {
        //                     Swal.showLoading();
        //                     timerInterval = setInterval(() => {
        //                         const content = Swal.getContent();
        //                         if (content) {
        //                             const b = content.querySelector(
        //                                 "b");
        //                             if (b) {
        //                                 b.textContent = Swal
        //                                     .getTimerLeft();
        //                             }
        //                         }
        //                     }, 100);
        //                 },
        //                 showConfirmButton: false
        //             });
        //             setTimeout(function() {
        //                 location.reload();
        //             }, 800)
        //         },
        //         error: function(data) {
        //             Swal.fire("Gagal!", "Tidak dapat mengubah data.", "warning");
        //         }
        //     });
        // });

        $(".swal-delete-button").click(function() {
            Swal.fire({
                title: "Hapus?",
                text: "Data tidak akan bisa dikembalikan.",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Ya",
                cancelButtonText: "Batal"
            }).then(result => {
                if (result.value) {
                    let id = $(this).data("id");
                    let token = $("input[name=_token]").val();
                    $.ajax({
                        url: "kunjungan/json/" + id,
                        type: "DELETE",
                        data: {
                            id: id,
                            _token: token
                        },
                        success: function(data) {
                            Swal.fire({
                                title: "Berhasil",
                                text: "Data berhasil dihapus.",
                                icon: "success",
                                timerProgressBar: true,
                                onBeforeOpen: () => {
                                    Swal.showLoading();
                                    timerInterval = setInterval(() => {
                                        const content = Swal
                                            .getContent();
                                        if (content) {
                                            const b = content
                                                .querySelector(
                                                    "b");
                                            if (b) {
                                                b.textContent =
                                                    Swal
                                                    .getTimerLeft();
                                            }
                                        }
                                    }, 100);
                                },
                                showConfirmButton: false
                            });

                            setTimeout(function() {
                                location.reload();
                            }, 500);
                        },
                        error: function(data) {
                            Swal.fire("Gagal!", "Data gagal dihapus.", "warning");
                        }
                    });
                }
            });
        });
    });
</script>
