function atualizarBarraProgresso(numeroAcertos, totalPerguntas) {
    var progresso = (numeroAcertos / totalPerguntas) * 100;
    var barraProgresso = document.querySelector('.progress');
    var progressoTexto = document.querySelector('.progress-texto');
    
    barraProgresso.style.width = progresso + '%';
    progressoTexto.textContent = numeroAcertos + '/' + totalPerguntas;
  }
  