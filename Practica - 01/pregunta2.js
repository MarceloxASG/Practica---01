function validateAge() {
    var ageInput = document.getElementById('age');
    if (ageInput.value < 18) {
      alert('Debes tener al menos 18 años para poder registrarte.');
      return false;
    }
    return true;
}