
/**
 * Created by charlietyn on 01/06/2016.
 */
$("#gridselection_usuario").kendoTooltip({
    filter: "img",
    content: kendo.template($("#template").html()),
    width: 140,
    height: 150,
    position: "bottom"
});