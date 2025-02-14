fetch("http://localhost:8000/api/produtos")
    .then(response => response.json())
    .then(data => {
        console.log("Produtos recebidos:", data);
        let listaProdutos = document.getElementById("produtos-lista");

        listaProdutos.innerHTML = "";

        data.forEach(produto => {
            let item = document.createElement("li");
            item.textContent = `${produto.nome} - R$ ${produto.preco.toFixed(2)}`;
            listaProdutos.appendChild(item);
        });
    })
    .catch(error => console.error("Erro ao buscar produtos:", error));
