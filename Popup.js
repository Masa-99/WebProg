customElements.define('my-popup',
  class extends HTMLElement {
    constructor() {
      super();

      const template = document.getElementById('my-popup');
      const templateContent = template.content;

      this.attachShadow({mode: 'open'}).appendChild(
        templateContent.cloneNode(true)
      );
    }
  }
);
