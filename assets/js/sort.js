(function () {
  let field = document.querySelector(".card");
  let li = Array.from(field.children);

  function SortProduct() {
    let select = document.getElementById("select");
    let ar = [];
    for (let i of li) {
      const last = i.lastElementChild;
      const x = last.textContent.trim();
      const y = Number(x.substring(1));
      i.setAttribute("card-price", y);
      ar.push(i);
    }
    this.run = () => {
      addevent();
    };
    function addevent() {
      select.onchange = sortingValue;
    }
    function sortingValue() {
      if (this.value === "Default") {
        while (field.firstChild) {
          field.removeChild(field.firstChild);
        }
        field.append(...ar);
      }
      if (this.value === "LowToHigh") {
        SortElem(field, li, true);
      }
      if (this.value === "HighToLow") {
        SortElem(field, li, false);
      }
    }
    function SortElem(field, li, asc) {
      let dm, sortli;
      dm = asc ? 1 : -1;
      sortli = li.sort((a, b) => {
        const ax = a.getAttribute("card-price");
        const bx = b.getAttribute("card-price");
        return ax > bx ? 1 * dm : -1 * dm;
      });
      while (field.firstChild) {
        field.removeChild(field.firstChild);
      }
      field.append(...sortli);
    }
  }

  new FilterProduct().run();
  new SortProduct().run();
})();
