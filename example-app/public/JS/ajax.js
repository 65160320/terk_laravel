function clickDeleteBtn(id) {
    Swal.fire({
        title: "Are you sure?",
        text: "You won't be able to revert this!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, delete it!"
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                method:"POST",
                url:"/friends/" + id,
                data: {
                    _token: $('meta[name="csrf-token"]').attr("content"),
                    _method: "DELETE",
                },
            }).done(function () {
                Swal.fire({
                    title: "Deleted!",
                    text: "Your file has been deleted.",
                    icon: "success",
                });
                callData()
            });
        }
    });
}

function callData() {
    let show_tbody = "";
    $.ajax({
        method: "GET",
        url: "api/friends/",
    }).done(function (data) {
        data.forEach((val, index) => {
            show_tbody += "<tr>"; 
            show_tbody +=   `<td>${index + 1}</td>`;
            show_tbody +=   `<td>${val.f_name}</td>`;
            show_tbody +=   `<td>${val.f_age}</td>`;
            show_tbody += "<td>";
            show_tbody +=   `<a href="/friends/${val.f_id}" class="view" title="View"><i class="material-icons">&#xE417;</i></a>`;
            show_tbody +=   `<a href="/friends/${val.f_id}/edit" class="edit" title="Edit"><i class="material-icons">&#xE254;</i></a>`;
            show_tbody +=   `<button type="button" class="delete delete-btn"  title="Delete" onclick="clickDeleteBtn(${val.f_id})"><i class="material-icons">&#xE872;</i></button>`;
            show_tbody += "</td>";
            show_tbody += "</tr>";
        });
        $("#show-table-body").html(show_tbody);
    });
};

callData();