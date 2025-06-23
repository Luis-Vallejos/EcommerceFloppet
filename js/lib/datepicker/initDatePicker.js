export function initDatepicker(selector) {
  $(selector).datepicker({
    format: "yyyy-mm-dd",
    autoclose: true,
    clearBtn: true,
  });
}
