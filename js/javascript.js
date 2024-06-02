document.querySelector('.minus-btn').addEventListener('click', function() {
    document.querySelector('.quantity input').value -= 1;
  });
  document.querySelector('.plus-btn').addEventListener('click', function() {
    document.querySelector('.quantity input').value += 1;
  });