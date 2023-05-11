function finalization(){
  var _nome = document.getElementById('nome').value;
  var _email = document.getElementById('email').value;
  var _celular = document.getElementById('celular').value;

  var _rua = document.getElementById('rua').value;
  var _cep = document.getElementById('cep').value;
  var _observacao = document.getElementById('observacao').value;

  $.get('assets/php/finalizar.php', {nome: _nome, email: _email, celular: _celular, 
                                    rua: _rua, cep: _cep, observacao: _observacao})
    .done(function(data) {
      alert(data);
      $.get('assets/php/limpa_carrinho.php')
      location.href = 'index.php' ; 
      
    });

  
}