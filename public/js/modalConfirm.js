var btnModalConfirm = document.getElementById("button-modal-confirm");

if (btnModalConfirm) {
    btnModalConfirm.addEventListener("click", function(event) {
        event.preventDefault(); // Impede o envio do formulário padrão
        var form = this.closest("form"); // Encontra o formulário mais próximo
        if (form) {
            var confirmDelete = confirm("Você tem certeza que deseja excluir este produto?");
            if (confirmDelete) {
                form.submit(); // Envia o formulário se o usuário confirmar
            }
        } else {
            console.error("Nenhum formulário encontrado para o botão.");
        }
    });
} else {
    console.error("Botão com ID 'button-modal-confirm' não encontrado.");
}