

document.getElementById("phoneNumber").addEventListener("input", function() {

    let value = this.value;
    console.log(value);
    value = value.replace(/\s/g, "");
    let spacedValue = "";
    for (let i = 0; i < value.length; i++) {
      spacedValue += value[i];
      if (i % 2 === 1 && i !== value.length - 1) {
        spacedValue += " ";
      }
    }
    this.value = spacedValue;

});