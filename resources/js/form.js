const showButtons = document.querySelectorAll('.editar');
const favDialog = document.getElementById('favDialog');
const cerramos = document.getElementById('cerrar');

showButtons.forEach(showButton => {
  showButton.addEventListener('click', () => {
    favDialog.showModal();
  });
});

cerramos.addEventListener('click', () => {
  favDialog.close();
});
