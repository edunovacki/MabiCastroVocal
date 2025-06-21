<?php include 'header.php'; ?>
  <main>
    <section class="container my-5 formulario" data-aos="zoom-in" data-aos-duration="2500">
      <h2 class="text-center mb-4">Formulário Cadastral</h2>
      <form id="form">
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="nome" class="form-label">Nome:</label>
            <input type="text" class="form-control" id="nome" name="nome" required />
          </div>
          <div class="col-md-6 mb-3">
            <label for="sobrenome" class="form-label">Sobrenome:</label>
            <input type="text" class="form-control" id="sobrenome" name="sobrenome" required />
          </div>
        </div>

        <div class="mb-3">
          <label for="email" class="form-label">E-mail:</label>
          <input type="text" class="form-control" id="email" name="email" required />
        </div>

        <div class="mb-3">
          <label for="telefone" class="form-label">Telefone:</label>
          <input type="text" class="form-control" id="telefone" name="telefone" maxlength="11" required />
        </div>

        <div class="mb-3">
          <label for="endereco" class="form-label">Endereço:</label>
          <input type="text" class="form-control" id="endereco" name="endereco" required />
        </div>

        <div class="mb-3">
          <label for="mensagem" class="form-label">Mensagem:</label>
          <textarea class="form-control" id="mensagem" name="mensagem" rows="4"
            placeholder="Digite sua mensagem"></textarea>
        </div>

        <button type="button" id="botao" class="btn btn-success form-btn-enviar">Enviar</button>
      </form>
    </section>

    <script>
      document.getElementById('telefone').addEventListener('input', function () {
        this.value = this.value.replace(/\D/g, '');
      });
      document.getElementById('botao').onclick = function () {
        var nome = document.getElementById('nome').value.trim();
        var sobrenome = document.getElementById('sobrenome').value.trim();
        var email = document.getElementById('email').value.trim();
        var telefone = document.getElementById('telefone').value.trim();
        var endereco = document.getElementById('endereco').value.trim();
        var mensagem = document.getElementById('mensagem').value.trim();

        const dominiosValidos = [
          "gmail.com",
          "hotmail.com",
          "outlook.com",
          "yahoo.com",
          "icloud.com",
          "live.com"
        ];

        let erro = false;

        if (!nome && !sobrenome && !email && !telefone && !endereco && !mensagem) {
          alert("Preencha todos os campos.");
          return;
        }

        if (!nome) {
          alert("Informe o nome.");
          erro = true;
        }

        if (!sobrenome) {
          alert("Informe o sobrenome.");
          erro = true;
        }

        if (!email) {
          alert("Informe o email.");
          erro = true;
        } else if (!email.includes("@")) {
          alert("O email deve conter '@'.");
          erro = true;
        } else {
          let partesEmail = email.split("@");
          if (partesEmail.length !== 2 || !dominiosValidos.includes(partesEmail[1])) {
            alert("O email deve terminar com um domínio válido (ex: gmail.com, outlook.com...).");
            erro = true;
          }
        }

        let telefoneNumerico = telefone.replace(/\D/g, "");
        if (!telefoneNumerico) {
          alert("Informe o telefone.");
          erro = true;
        } else if (!/^\d+$/.test(telefoneNumerico)) {
          alert("O telefone deve conter apenas números.");
          erro = true;
        } else if (telefoneNumerico.length !== 11) {
          alert("O telefone deve conter exatamente 11 dígitos (ex: DDD + 9 + número).");
          erro = true;
        } else {
          let ddd = telefoneNumerico.slice(0, 2);
          let primeiroDigito = telefoneNumerico.slice(2, 3);
          let primeiraParte = telefoneNumerico.slice(3, 7);
          let segundaParte = telefoneNumerico.slice(7);
          let telefoneFormatado = `(${ddd}) ${primeiroDigito} ${primeiraParte}-${segundaParte}`;
          document.getElementById('telefone').value = telefoneFormatado;
        }

        if (!endereco) {
          alert("Informe o endereço.");
          erro = true;
        }

        if (!mensagem || mensagem.length < 5) {
          alert("A mensagem deve ter pelo menos 5 caracteres.");
          erro = true;
        }

        if (!erro) {
          alert("Formulário enviado com sucesso!");
        }
      };
    </script>

  </main>
  <?php include 'footer.php'; ?>