class Popup extends HTMLElement {
  constructor() {
    super();
  }

  connectedCallback() {
    let template = document.querySelector('#my-popup');
    let tmplNode = template.content;
    let shadowRoot = this.attachShadow({mode: "open"});
    shadowRoot.appendChild(tmplNode);
  }
}

function setupComponent() {
  fetch("my_popup.php")
    .then((response) => {
      return response.text();
    }).then((text) => {
      let bodyHtml = document.body.innerHTML;
      document.body.innerHTML = text + bodyHtml;
      window.customElements.define("my-popup", Popup);
    }).catch((err) => {
      console.log("Sorry, something bad happened: " + err);
    })
}

setupComponent();
