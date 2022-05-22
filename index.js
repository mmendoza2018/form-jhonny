const guardarRegistroParcial = (idElementoGeneral, idLlegadaTBody) => {
  const d = document;
  let listaCampos = d.querySelectorAll(
    `#${idElementoGeneral} input,#${idElementoGeneral} select`
  );
  let objetoTemporal = {};
  let arrayFinal = [];
  listaCampos.forEach((e) => {
    objetoTemporal[e.getAttribute("name")] = e.value;
  });
  if (localStorage.getItem("dataprincipalesF")) {
    let dataLocalStorage = JSON.parse(localStorage.getItem("dataprincipalesF"));
    dataLocalStorage.push(objetoTemporal);
    localStorage.setItem("dataprincipalesF", JSON.stringify(dataLocalStorage));
  } else {
    arrayFinal.push(objetoTemporal);
    localStorage.setItem("dataprincipalesF", JSON.stringify(arrayFinal));
  }
  listaCampos.forEach((e) => (e.value = ""));
  verListaRegistroParcial(idLlegadaTBody);
};
document.addEventListener("DOMContentLoaded", () => {
  verListaRegistroParcial("principalesF_tbody");
});

const verListaRegistroParcial = (idLlegadaTBody) => {
  let dataLocalStorage = localStorage.getItem("dataprincipalesF");
  if (!dataLocalStorage) return;
  let tBody = document.getElementById(idLlegadaTBody);
  let html = "";
  dataLocalStorage = JSON.parse(dataLocalStorage);
  dataLocalStorage.forEach((element) => {
    html += `  <tr>
              <td>${element.principalesF_nombre}</td>
              <td>${element.principalesF_curp}</td>
              <td>
                <button class="btn btn-sm btn-info float-end" data-id="${element.principalesF_curp}" onclick="removeRegistroParcial(this)" data-tbody="${idLlegadaTBody}">Quitar</button>
              </td>
            </tr>`;
  });
  tBody.innerHTML = html;
};

const removeRegistroParcial = (element) => {
  const curp = element.dataset.id;
  let newData = [];
  let data = JSON.parse(localStorage.getItem("dataprincipalesF"));
  for (let i of data) {
    if (i.principalesF_curp===curp) {
      continue;
    } else {
      newData.push(i);
    }
  }
  localStorage.setItem("dataprincipalesF", JSON.stringify(newData));
  verListaRegistroParcial(element.dataset.tbody);
};
