function abrirModal() {
  document.querySelector(".modal").style.display = "flex";
  document.body.classList.add("modal-open");
}

function fecharModal() {
  document.querySelector(".modalC").style.display = "none";
  document.body.classList.remove("modal-open");
}

function abrirModal1(id) {
  const modal = document.querySelector(".modalV" + id);

  if (modal) {
    modal.style.display = "flex";
    document.body.classList.add("modal-open");
  }
}
function abrirModalEx(id) {
  console.log("executou ");
  const modal = document.querySelector(".modalEX" + id); 
  
  if (modal) {
    modal.style.display = "flex";
    document.body.classList.add("modal-open");

   
  }
}
function abrirModalME(id) {
  console.log("executou ");
  const modal = document.querySelector(".modalMenE" + id); 

  if (modal) {
    modal.style.display = "flex";
    document.body.classList.add("modal-open");
  }
}

function fecharModalME(id) {
  console.log("executou ");
  const modal = document.querySelector(".modalMenE" + id);

  if (modal) {
    modal.style.display = "none";
    document.body.classList.remove("modal-open");
  }
}


function fecharModalEx(id) {
  console.log("executou ");
  const modal = document.querySelector(".modalEX" + id);  
  
  if (modal) {
    modal.style.display = "none";
    document.body.classList.remove("modal-open");

    
  }
}

function fecharModal2(id) {
  const modal = document.querySelector(".modalEX" + id);
  if (modal) {
    modal.style.display = "none";
    document.body.classList.remove("modal-open");
  }
}

function fecharModal1(id) {
  const modal = document.querySelector(".modalV" + id);

  if (modal) {
    modal.style.display = "none";
    document.body.classList.remove("modal-open");
  }
}
function escumungar(id) { 
  const modal = document.querySelector(".modalB" + id);

 
  if (modal) {
    modal.style.display = "none";
    document.body.classList.remove("modal-open");
  }

 
  fetch('deletar.php', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/x-www-form-urlencoded',
    },
    body: 'id=' + encodeURIComponent(id)
  })
  .then(response => response.text())
  .then(data => {
    console.log("Evento excluído:", data);

    
    fecharModalEx(id);

    
    abrirModalME(id);

   
    setTimeout(() => {
      fecharModalME(id);
      window.location.href = "galeria.php";
    }, 2000);

  })
  .catch(error => {
    console.error('Erro ao deletar:', error);
    alert("Erro ao excluir o evento.");
  });
}


function abrirModal2(id) {
  const modal = document.querySelector(".modalB" + id);

  if (modal) {
    modal.style.display = "flex";
    document.body.classList.add("modal-open");
  }
}

function fecharModal2(id) {
  const modal = document.querySelector(".modalB" + id);

  if (modal) {
    modal.style.display = "none";
    document.body.classList.remove("modal-open");
  }
}

function previewImagem() {
  const input = document.getElementById('inputImagem');
  const uploadTrigger = document.querySelector(".uploadTrigger");

  const file = input.files[0];
  if (file) {
    const reader = new FileReader();

    reader.onload = function (e) {
      uploadTrigger.src = e.target.result;
    }

    reader.readAsDataURL(file);
  }
}

function previewImagemE(id) {
  const input = document.getElementById('inputImagemE' + id);
  const uploadTrigger = document.querySelector(".uploadTriggerE" + id);

  const file = input.files[0];
  if (file) {
    const reader = new FileReader();

    reader.onload = function (e) {
      uploadTrigger.src = e.target.result;
    }

    reader.readAsDataURL(file);
  }
}

function validarFormulario() {
  const aviso = document.querySelector(".aviso")
  const input = document.getElementById('inputImagem');
  const titulo = document.querySelector(".titulo");
  const local = document.querySelector(".local");
  const data = document.querySelector(".data");
  const desc = document.querySelector(".texto");

  if (input.files.length === 0) {
    aviso.innerHTML = "O campo de imagem é obrigatório";
    return false;
  }

  if (titulo.value.trim() == "") {
    aviso.innerHTML = "O campo do titulo é obrigatório";
    return false;
  }

  if (local.value.trim() == "") {
    aviso.innerHTML = "O campo de local é obrigatório";
    return false;
  }

  if (data.value.trim() == "") {
    aviso.innerHTML = "O campo de data é obrigatório";
    return false;
  }

  if (desc.value.trim() == "") {
    aviso.innerHTML = "O campo de descrição é obrigatório";
    return false;
  }

  return true;
}

const truncateText = (str, maxLength) => {
  if (str.length > maxLength) {
    return str.substring(0, maxLength) + '...';
  }
  return str;
}

const cards = document.querySelectorAll(".cards");

cards.forEach(card => {
  const textoCard = card.querySelector(".textoCard");
  const textoCompleto = card.querySelector(".textoCompleto");
  const textoTitulo = card.querySelector(".titulo");
  const tilCompleto = card.querySelector(".tilCompleto");

  const textoOriginal = textoCard.innerText;
  const textoEditado = truncateText(textoOriginal, 100);
  textoCard.innerText = textoEditado;

  const textoTOriginal = textoTitulo.innerText;
  const textoTEditado = truncateText(textoTOriginal, 10);
  textoTitulo.innerText = textoTEditado;

  if (textoEditado.endsWith('...')) {
    const textoSemPontos = textoEditado.substring(0, textoEditado.length - 3);
    const link = document.createElement("a");
    link.className = "pontos";
    link.innerText = "...";
    textoCard.innerHTML = textoSemPontos;
    textoCard.appendChild(link);

    link.addEventListener("mouseover", () => {
      textoCompleto.innerText = textoOriginal;
      textoCompleto.style.display = "inline-block";
    });

    link.addEventListener("mouseout", () => {
      textoCompleto.style.display = "none";
    });
  }

  if (textoTEditado.endsWith('...')) {
    const textoSemPontos = textoTEditado.substring(0, textoTEditado.length - 3);
    const link = document.createElement("a");
    link.className = "pontos2";
    link.innerText = "...";
    textoTitulo.innerHTML = textoSemPontos;
    textoTitulo.appendChild(link);

    link.addEventListener("mouseover", () => {
      tilCompleto.innerText = textoTOriginal;
      tilCompleto.style.display = "inline-block";
    });

    link.addEventListener("mouseout", () => {
      tilCompleto.style.display = "none";
    });
  }
});