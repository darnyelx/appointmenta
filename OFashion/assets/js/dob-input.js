
  // date of birth input
  const input = document.getElementById("dob");
  const label = document.querySelector(".dob-label");

  input.addEventListener("focus", show);
  function show(e) {
    // e.preventDefault();
    label.innerHTML = input.value + " Date of Birth:";
    label.style.opacity= 1;
  }
