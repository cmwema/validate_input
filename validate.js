const form = document.getElementById("validate-form");
const phoneInput = document.getElementById("phone_no");
const message = document.getElementById("message");

phoneInput.addEventListener("input", function () {
  const cleanedValue = this.value.replace(/\D/g, "");
  const formattedValue = "254" + cleanedValue.slice(3);
  this.value = formattedValue;
});

form.addEventListener("submit", (e) => {
  e.preventDefault();
  const phone_no = phoneInput.value.trim();
  const regex = /^254[71]\d{8}$/;

  if (regex.test(phone_no)) {
    message.textContent = "Valid phone number!";
    message.style.color = "green";
    form.submit();
  } else {
    message.textContent = "Invalid phone number. Please enter a valid number.";
    message.style.color = "red";
  }
});
