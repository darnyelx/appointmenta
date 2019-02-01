// star rating
$(document).ready(() => {
    $("#s1").click(() => {
        $("#s1").css("color", "yellow");
    })
    $("#s2").click(() => {
        $("#s1,#s2").css("color", "yellow");
    })
    $("#s3").click(() => {
        $("#s1,#s2,#s3").css("color", "yellow");
    })
    $("#s4").click(() => {
        $("#s1,#s2,#s3,#s4").css("color", "yellow");
    })
    $("#s5").click(() => {
        $(".fa-star").css("color", "yellow");
    })

  })
