function toggleInput(checkbox, target) {
  if ($(checkbox).is(":checked")) {
    $('input[type="text"],input[type="number"]').addClass("invisible");
    $("small").hide();
    $("select").addClass("invisible");
    $(target).val("").removeClass("invisible");
  }

  $("#result_text").text("");
}

$("#strtoupper_input").on("keypress keydown keyup", function (e) {
  sendRequest([
    $("#strtoupper_input").val(),
    $("#strtoupper_input").attr("name"),
  ]);
});
$("#strtolower_input").on("keypress keydown keyup", function (e) {
  sendRequest([
    $("#strtolower_input").val(),
    $("#strtolower_input").attr("name"),
  ]);
});
$("#substr_init,#substr_length,#substr_text").on(
  "keypress keydown keyup",
  function (e) {
    if (!$("#substr_init").val() || !$("#substr_text").val()) {
      $("#substr_small").show();
    } else {
      $("#substr_small").hide();
      sendRequest([
        $("#substr_text").val(),
        "substr",
        parseInt($("#substr_init").val()),
        $("#substr_length").val()
          ? parseInt($("#substr_length").val())
          : undefined,
      ]);
    }
  }
);

$("#str_replace_subject").on("keypress keydown keyup", function (e) {
  sendRequest([
    $("#str_replace_text").val(),
    "str_replace",
    $("#str_replace_search").val(),
    $("#str_replace_subject").val(),
  ]);
});

$("#strpos_text,#strpos_find").on("keypress keydown keyup", function (e) {
  if (!$("#strpos_text").val() || !$("#strpos_find").val()) {
    $("#strpos_small").show();
  } else {
    $("#strpos_small").hide();
    sendRequest([$("#strpos_text").val(), "strpos", $("#strpos_find").val()]);
  }
});

function sendRequest(params) {
  $.ajax({
    url: "./functions.php",
    type: "POST",
    data: {
      params,
    },
    success: function (response) {
      $("#result_text").text(response);
    },
  });
}
