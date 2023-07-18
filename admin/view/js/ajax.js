$(function () {
    data();
});

function data() {
    $("#send")
        .off("click")
        .on("click", function (event) {
            var donnee = $("#myForm").serialize();
            donnee += "&submit=true";
            
            var controller = this.name;

            alert(donnee);

            $.ajax({
                type: "POST",
                url: this.name,
                data: donnee,
                success: function (response) {
                    alert(response);
                },
            });
        });
}

$("#category").ready(function (event) {
    $.ajax({
        type: "POST",
        url: "../controller/category-reply.php",
        data: {
            save: true,
        },
        success: function (response) {
            $("#category").append(response);
        },
    });
});

$("#tableCat").ready(function (event) {
    $.ajax({
        type: "POST",
        url: "../controller/category-reply.php",
        data: {
            category: true
        },
        success: function (response) {
            $("#tableCat").append(response);
        },
    });
});

$("#table").ready(function (event) {
    $.ajax({
        type: "POST",
        url: "../controller/admin-reply.php",
        data: {
            save: true,
        },
        success: function (response) {
            $("#table").append(response);
        },
    });
});

$("#tableFood").ready(function (event) {
    $.ajax({
        type: "POST",
        url: "../controller/food-reply.php",
        data: {
            food: true,
        },
        success: function (response) {
            $("#tableFood").append(response);
            //alert(response);
        },
    });
});

function DeleteAdmin(id) {
    var tr = document.getElementById(id);
    $.ajax({
        type: "POST",
        url: "../controller/admin-delete.php",
        data: {
            delete: id,
            submit: true,
        },
        success: function (response) {
            //$("#tableCat").append(response);
            tr.style.display = "none";
        },
    });
}

function DeleteCategory(id) {

    var tr = document.getElementById(id);
    $.ajax({
        type: "POST",
        url: "../controller/category-delete.php",
        data: {
            delete: id,
            submit: true,
        },
        success: function (response) {
            //$("#tableCat").append(response);
            tr.style.display = "none";
        },
    });
}
