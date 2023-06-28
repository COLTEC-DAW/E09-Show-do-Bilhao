function resposta_correta() {
    var selectedOption = document.querySelector('input[name="answer"]:checked');
    var resultMessage = document.querySelector('.result-message');
  
    if (selectedOption) {
      selectedOption.parentNode.classList.add('correct');
      resultMessage.textContent = 'Resposta correta!';
      resultMessage.style.color = 'green';
    }
  }
  
  document.addEventListener('DOMContentLoaded', function() {
    var checkButton = document.querySelector('.check-button');
  
    checkButton.addEventListener('click', function(event) {
      event.preventDefault();
      resposta_correta();
    });
  });
  