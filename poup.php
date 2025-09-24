<div class="modal fade" id="exitIntentModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content border-0 shadow-lg overflow-hidden">
      <div class="row g-0">
        <div class="col-lg-5 bg-light p-4 d-flex flex-column justify-content-between">
          <div>
            <h3 class="fw-bold mb-2 text-primary">Ficou com alguma dúvida?</h3>
            <p class="text-secondary mb-3">
              Preencha as informações ao lado que em breve entraremos em contato com você.
            </p>
          </div>
          <div class="rounded-4 overflow-hidden border mt-3">
            <img src="assets/images/contador.png"
                 alt="Atendimento"
                 class="img-fluid">
          </div>
        </div>
        <div class="col-lg-7 p-4">
          <div class="d-flex justify-content-between align-items-start mb-2">
            <h5 class="mb-0">Fale com um especialista</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
          </div>

          <form id="exitForm" class="needs-validation" novalidate>
            <div class="row g-3">
              <div class="col-md-6">
                <label class="form-label">Nome</label>
                <input type="text" class="form-control" placeholder="Nome completo" required>
                <div class="invalid-feedback">Informe seu nome.</div>
              </div>
              <div class="col-md-6">
                <label class="form-label">Celular</label>
                <input type="tel" class="form-control" placeholder="(DDD) 00000-0000" required>
                <div class="invalid-feedback">Informe um telefone válido.</div>
              </div>

              <div class="col-12">
                <label class="form-label">Qual é o seu e-mail?</label>
                <input type="email" class="form-control" placeholder="seu_email@mail.com.br" required>
                <div class="invalid-feedback">Informe um e-mail válido.</div>
              </div>

              <div class="col-12">
                <label class="form-label">Em qual cidade sua empresa está situada?</label>
                <input type="text" class="form-control" placeholder="Ex: São Paulo">
              </div>

              <div class="col-12">
                <label class="form-label">Descrição da atividade</label>
                <input type="text" class="form-control" placeholder="Ex.: programador, consultor de marketing">
              </div>

              <div class="col-12">
                <label class="form-label">Como prefere o contato?</label>
                <div class="d-flex gap-2 flex-wrap">
                  <label class="btn btn-outline-success flex-grow-1">
                    <input type="radio" name="contato" class="btn-check" checked> <i class="fa-brands fa-whatsapp"></i> Via WhatsApp
                  </label>
                  <label class="btn btn-outline-primary flex-grow-1">
                    <input type="radio" name="contato" class="btn-check"> <i class="fa-solid fa-phone"></i> Via ligação
                  </label>
                </div>
              </div>

              <div class="col-12 d-grid">
                <button class="btn btn-primary btn-lg" type="submit">
                  <i class="fa-solid fa-paper-plane me-2"></i>Enviar
                </button>
              </div>
            </div>
          </form>

          <small class="text-muted d-block mt-3">
            Usamos seus dados apenas para retorno comercial. Você pode solicitar a exclusão a qualquer momento.
          </small>
        </div>
      </div>
    </div>
  </div>
</div>