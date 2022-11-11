"use strict";

if (window.location.pathname === "/addproduct") {
  function submitValidation() {
    const form = document.querySelector(".needs-validation");
    form.addEventListener(
      "submit",
      (event) => {
        if (!form.checkValidity()) {
          event.preventDefault();
          event.stopPropagation();
        }

        form.classList.add("was-validated");
      },
      false
    );
  }

  function singleInputValidation() {
    Array.from(document.querySelectorAll("[required]")).forEach((input) => {
      input.addEventListener(
        "focusout",
        (event) => {
          event.target.parentElement.classList.add("was-validated");
        },
        false
      );
    });
  }

  function typeSwitcher() {
    document
    .querySelector("#productType")
    .addEventListener("change", (event) => {
      document.querySelectorAll("#productDescription input").forEach((element) => {
        element.removeAttribute("required");
      });

      document
        .querySelectorAll("option:not(:first-child)")
        .forEach((option) => {
          document
            .querySelector("#" + option.value.toLowerCase() + "Description")
            .classList.add("d-none");
        });

      if (event.target.value) {
        const field = document.querySelector(
          "#" + event.target.value.toLowerCase() + "Description"
        );
        field.classList.remove("d-none");
        field.querySelectorAll("input").forEach((element) => {
          element.setAttribute("required", "");
        });
      }

      singleInputValidation();
    });

  }

  submitValidation();
  singleInputValidation();
  typeSwitcher();
}
