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

function DeleteFood(id) {

    var tr = document.getElementById(id);
    $.ajax({
        type: "POST",
        url: "../controller/food-delete.php",
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

$("#admins").ready(function(event){
    $.ajax({
        type: "POST",
        url: "../controller/admin-reply.php",
        data: {
            number: true,
        },
        success: function (response) {
            $("#admins").append(response);
        },
    })
});

$("#cat").ready(function(event){
    $.ajax({
        type: "POST",
        url: "../controller/category-reply.php",
        data: {
            number: true,
        },
        success: function (response) {
            $("#cat").append(response);
        },
    })
});

$("#plats").ready(function(event){
    $.ajax({
        type: "POST",
        url: "../controller/food-reply.php",
        data: {
            number: true,
        },
        success: function (response) {
            $("#plats").append(response);
        },
    })
});

$("#commandes").ready(function(event){
    $.ajax({
        type: "POST",
        url: "../controller/order-reply.php",
        data: {
            number: true,
        },
        success: function (response) {
            $("#commandes").append(response);
        },
    })
});


$("#foods").ready(function(event){
    $.ajax({
        type: "POST",
        url: "../controller/category-reply.php",
        data: {
            homepage: true,
        },
        success: function (response) {
            $("#foods").append(response);
            //alert(response);
        }
    })
});

$("#Dish").ready(function(event){
    var Textnode = $("#TextNode").text();
    
    $.ajax({
        type: "POST",
        url: "../controller/food-reply.php",
        data: {
            Catepage: true,
            cate: Textnode,
        },
        success: function (response) {
            $("#Dish").append(response);
            
        }
    })
});

$("#Cate_Yes").ready(function(event){
    $.ajax({
        type: "POST",
        url: "../controller/category-reply.php",
        data: {
            CatepageYes: true,
        },
        success: function (response) {
            $("#Cate_Yes").append(response);
            //alert(response);
        }
    })
});

$("#Food_Yes").ready(function(event){
    $.ajax({
        type: "POST",
        url: "../controller/food-reply.php",
        data: {
            FoodpageYes: true,
        },
        success: function (response) {
            $("#Food_Yes").append(response);
            //alert(response);
        }
    })
});