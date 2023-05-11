function add(id) {
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
    });
}

function load_qtd(id) {
  $.get("assets/php/qtd_item.php", { codigo: id })
    .done(function (data) {
      document.getElementById('qtd' + id).innerHTML = data;
    });
}

function removeItem(id) {
  $.get("assets/php/removeItem.php", { codigo: id})
    .done(function (data) {
      document.getElementById('carrinho').innerHTML = data;
      location.reload();
  });
}

