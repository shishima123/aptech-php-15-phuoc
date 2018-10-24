$("#btn").click(function(){
    $("#header-toggle").toggleClass("d-none")
    console.log($("#header-toggle").attr("class"))
})

{
  /* <script>
$("#btn").click(function () {
    a = $("#header-toggle").attr("class");
    if (a === ("container-fluid d-none")) {
        $("#header-toggle").attr("class", "container-fluid d-block");
    } else {
        $("#header-toggle").attr("class", "container-fluid d-none");
        console.log(a);
    }
})
</script> */
}

{
  /* <script>
$("#btn").click(function () {
    a = $("#header-toggle").attr("class");
    console.log(a);
    if (a === ("container d-none")) {
        $("#header-toggle").removeClass("d-none").addClass("d-block");
        console.log(a);
    } else {
        $("#header-toggle").removeClass("d-block").addClass("d-none");
        console.log(a);
    }
})
</script> */
}
