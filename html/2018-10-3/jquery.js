$(document).ready(function() {
  $("#btn").click(function() {
    if ($("#demo").attr("src") === "off.gif") {
      $("#demo").attr("src", "on.gif");
      $("#btn").html("Tắt đèn");
    } else {
      $("#demo").attr("src", "off.gif");
      $("#btn").html("Mở đèn");
    }
  });
});
