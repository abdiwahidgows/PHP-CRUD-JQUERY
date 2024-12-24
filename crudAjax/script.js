loadData();
$("#AddNew").click(() => {
  $("#studentModal").modal("show");
});
let btnAction = "Insert";
$("#studentForm").submit(function (event) {
  event.preventDefault();

  let formData = new FormData($("#studentForm")[0]);
  //   append kudaba kaqabo data fucntionka  regestredAll

  // insert Statements and update statements
  if (btnAction == "Insert") {
    formData.append("action", "regestredAll");
  } else {
    formData.append("action", "update");
  }

// Ajax Starting
  $.ajax({
    method: "POST",
    dataType: "JSON",
    url: "api.php",
    data: formData,
    processData: false,
    contentType: false,

    success: function (data) {
      let status = data.status;
      let datas = data.data;

      $("#studentForm")[0].reset();
      alert(datas);
      btnAction = "Insert";
      loadData();
      $("#studentModal").modal("hide");
    },
    failure: function (data) {},
  });
});

// Reading the data from the database 
function loadData() {
  $("table tbody").html("");

  let sendingData = {
    action: "readAll",
  };

  $.ajax({
    method: "POST",
    dataType: "JSON",
    url: "api.php",
    data: sendingData,

    success: function (data) {
      let tr;

      let status = data.status;
      let datas = data.data;

      if (status) {
        datas.forEach((data) => {
          tr += "<tr>";
          for (let i in data) {
            tr += `<td> ${data[i]} </td>`;
          }
          tr += `<td> <a class='btn btn-info update_info' update_id=${data["id"]}><i class ='fas fa-edit'></i></a> &nbsp; <a class='btn btn-danger delete_info' delete_id=${data["id"]}><i class ='fas fa-trash'></i> </a> </td>`;
          tr += "</tr>";
        });
        $(".table tbody").append(tr);
      }
    },
    error: {},
  });
}
// update and insert
function studentinfo(id) {
  let sendingData = {
    action: "read",
    id: id,
  };
  console.log(sendingData);

  $.ajax({
    method: "POST",
    dataType: "JSON",
    url: "api.php",
    data: sendingData,

    success: function (data) {
      let tr;

      let status = data.status;
      let response = data.data;
      // console.log(response)

      if (status) {
        $("#id").val(response[0].id);
        $("#name").val(response[0].name);
        $("#class").val(response[0].class);
        console.log(data);
        $("#studentModal").modal("show");
        btnAction = "Update";
      }
    },
    error: {},
  });
}
// Delete
function deleteinfo(id) {
  let sendingData = {
    action: "deletestudents",
    id: id,
  };
  console.log(sendingData);

  $.ajax({
    method: "POST",
    dataType: "JSON",
    url: "api.php",
    data: sendingData,

    success: function (data) {
      let tr;

      let status = data.status;
      let response = data.data;
      // console.log(response)

      if (status) {
        alert(response);
        loadData();
      }
    },
    error: {},
  });
}

$(".table").on("click", "a.update_info", function () {
  // console.log('clicked')


  let id = $(this).attr("update_id");
  // console.log(id);

  studentinfo(id);
});

$(".table").on("click", "a.delete_info", function () {
  // console.log('clicked')

  // Attribute of id inaan soo qbno weeye

  let id = $(this).attr("delete_id");
  // console.log(id);

  if (confirm("Are you Sure to delete")) {
    deleteinfo(id);
  }
});
