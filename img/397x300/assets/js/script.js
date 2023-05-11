function add(id) {
  display(id, 0);

  $.get("assets/php/add_item.php", { codigo: id })
    .done(function (data) {
      document.getElementById('carrinho').innerHTML = data;
      load_qtd(id);
    });

}

function remove(id) {
  $.get("assets/php/remove_item.php", { codigo: id })
    .done(function (data) {
      document.getElementById('carrinho').innerHTML = data;
      load_qtd(id);
      if (document.getElementById('qtd' + id).innerText == '1') {
        display(id, 1);
      }
    });
}

function display(id, q) {
  if (q == 1) {
    document.getElementById('controle' + id).style.display = 'none';
    document.getElementById('action' + id).style.display = 'block';
  } else {
    document.getElementById('action' + id).style.display = 'none';
    document.getElementById('controle' + id).style.display = 'table';

  }
}

function limpa_sessao() {
  if (confirm("Deseja esvaziar o carrinho?")) {
    $.get('assets/php/limpa_carrinho.php');
    location.reload();
  }
}

function load_qtd(id) {
  $.get("assets/php/qtd_item.php", { codigo: id })
    .done(function (data) {
      document.getElementById('qtd' + id).innerHTML = data;
    });
}

$(function () {
  $("#txt_consulta").change(function () {
    var _pesquisa = $(this).val();

    if (_pesquisa != '') {
      $.get('assets/php/pesquisa.php', { pesquisa: _pesquisa })
        .done(function (data) {
          $(".container").html(data);
        });
    } else { location.reload(); }
  });
});

$(document).scroll(function () {
  var y = $(this).scrollTop();

  if (y > 50) {
    $('#bottom-header').css({ 'box-shadow': '0px 0px 0px #ff007f' });
  } else { $('#bottom-header').css({ 'box-shadow': '0px 2px 5px #ff007f' }); }
});