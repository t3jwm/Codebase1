var ImageSketchapp = {
    renameImg: function ($imgId, $id) {
        bootbox.prompt("Type name for image", function (result) {
            if ((result === null) || (result == "")) {
                //Not do
            } else {
                $(".overlay").show();
                $.ajax({
                    url: "/renameImage",
                    type: "post",
                    data: {nameImage: result, imgId: $imgId, id: $id},
                    success: function (response) {
                        $(".overlay").hide();
                        $(".thumbnails").html(response);
                    },
                    error: function () {
                        $(".overlay").hide();
                        bootbox.alert("Rename error, please reload this page and try again.");
                    }
                });
            }
        });
    },
    deleteImg: function ($imgId, $id) {
        bootbox.confirm("Do you want to delete this image?", function (result) {
            if (result == true) {
                $(".overlay").show();
                $.ajax({
                    url: "/deleteImage",
                    type: "post",
                    data: {imgId: $imgId, id: $id},
                    success: function (response) {
                        $(".overlay").hide();
                        $(".thumbnails").html(response);
                    },
                    error: function () {
                        $(".overlay").hide();
                        bootbox.alert("Delete fail!");
                    }
                });
            }
        });
    },
    sendViaMail: function ($imgId, $filePath) {
        bootbox.prompt("Warning: Disclosure of your invention to a third-party can impact your patent rights. Contact our partner, Dunkiel Saunders, or your patent attorney for guidance:", function (result) {
            if ((result === null) || (result == "")) {
                //Not do
            } else {
                $(".overlay").show();
                $.ajax({
                    url: "/sendImage",
                    type: "post",
                    data: {email: result, imgId: $imgId},
                    success: function (response) {
                        $(".overlay").hide();
                        bootbox.alert("Send email success");
                    },
                    error: function () {
                        $(".overlay").hide();
                        bootbox.alert("Send email fail");
                    }
                });
            }
        });
    },
    attornyReview: function ($filePath) {
        bootbox.confirm('By clicking "OK", you will be directed to a patent firm/agent affiliated with Patent That who may be able to assist you with your invention', function (result) {
            if (result) {
      window.open("http://www.dunkielsaunders.com/patent-form/");
            }
        });
    },
    openImageOnSketchApp: function ($imgId) {
        window.location.replace("/apppage/" + $imgId);
    },
    showLargeImg: function ($imgId, $rscImg, $nameImg, $id, $filePath) {
        bootbox.dialog({
            message: '<img class="large-img" onclick="ImageSketchapp.openImageOnSketchApp(' + $imgId + ')" src="' + $rscImg + '" />',
            title: $nameImg,
            buttons: {
                rename_img: {
                    label: " Rename",
                    className: "btn btn-xs btn-default fa fa-pencil",
                    callback: function () {
                        ImageSketchapp.renameImg($imgId, $id);
                    }
                },
                send_email: {
                    label: " Send",
                    className: "btn btn-success btn-xs fa fa-envelope",
                    callback: function () {
                        ImageSketchapp.sendViaMail($imgId, $filePath);
                    }
                },
                delete_img: {
                    label: " Delete",
                    className: "btn btn-danger btn-xs fa fa-trash",
                    callback: function () {
                        ImageSketchapp.deleteImg($imgId, $id);
                    }
                },
                attorney_review: {
                    label: " Attorney Review",
                    className: "btn btn-warning btn-xs fa fa-legal",
                    callback: function () {
                        ImageSketchapp.attornyReview($filePath);
                    }
                },
                open_image_on_sketch_app: {
                    label: " Open in Sketchapp",
                    className: "btn btn-info btn-xs fa fa-paint-brush",
                    callback: function () {
                        ImageSketchapp.openImageOnSketchApp($imgId);
                    }
                }
            }
        });
    }
}