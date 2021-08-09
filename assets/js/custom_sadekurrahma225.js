window.onload = function () {
  //code for set defult date
  var today = new Date();

  //checkin start date calculator
  var date =
    today.getDate() + "/" + (today.getMonth() + 1) + "/" + today.getFullYear();

  //checkout end date calculator
  var enddate =
    today.getDate() +
    1 +
    "/" +
    (today.getMonth() + 1) +
    "/" +
    today.getFullYear();

  document.getElementById("checkInDate").value = date;
  document.getElementById("checkOutDate").value = enddate;

  //code for search from form
  const form = document.forms.order;

  function handleSubmit(event) {
    event.preventDefault();
    let formData = new FormData(event.target);

    let data = [...formData.entries()];

    const asString = data
      .map((x) => `${encodeURIComponent(x[0])}=${encodeURIComponent(x[1])}`)
      .join("&");

    let url =
      "https://book-directonline.com/properties/theottohotellhngkongdirect?" +
      asString +
      "&locale=en&currency=HKD&items[0][adults]=2&items[0][children]=0&items[0][infants]=0&skin=1";

    //Open in new tab function defined
    function NewTab() {
      window.open(url, "_blank");
    }

    //Open in new tab function calling
    NewTab();
  }

  form.addEventListener("submit", handleSubmit);

  //Jquery for Bootstrap

  jQuery(document).ready(function ($) {
    $("#checkInDate").datepicker({
      format: "dd/mm/yyyy",
      autoclose: true,
      todayHighlight: true,
      showOtherMonths: true,
      selectOtherMonths: true,
      autoclose: true,
      changeMonth: true,
      changeYear: true,
      orientation: "button",
    });

    $("#checkOutDate").datepicker({
      format: "dd/mm/yyyy",
      autoclose: true,
      todayHighlight: true,
      showOtherMonths: true,
      selectOtherMonths: true,
      autoclose: true,
      changeMonth: true,
      changeYear: true,
      orientation: "button",
    });
  });
};
