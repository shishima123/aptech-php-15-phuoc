var i = 0;
$("#btn").click(function() {
  console.log(i);
  if (i === 0) {
    $("#header-toggle").show();
    i = 1;
  } else {
    $("#header-toggle").hide();
    i = 0;
  }
});
