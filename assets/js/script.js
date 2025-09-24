$(document).ready(function () {
    var SPMaskBehavior = function (val) {
        return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
    },
        spOptions = {
            onKeyPress: function (val, e, field, options) {
                field.mask(SPMaskBehavior.apply({}, arguments), options);
            }
        };
    $('.celular-mask').mask(SPMaskBehavior, spOptions);
});

$loading = $.dialog({
    content: "Enviando sua mensagem",
    title: false,
    type: "green",
    theme: "modern",
    lazyOpen: true,
    closeIcon: false,
    icon: "fas fa-circle-notch fa-spin",
    buttons: false,
});

$('#formcontato').on('submit', function (e) {
    e.preventDefault();
    var dados = $(this).serialize();

    $.ajax({
        type: "POST",
        url: "enviar.php",
        data: dados,
        dataType: 'json',
        beforeSend: function () {
            $loading.open();
        },
        success: function (resposta) {
            if (resposta.tipo == "green") {
                $icone = "far fa-check-circle";
            } else {
                $icone = "fas fa-times";
            }
            $.alert({
                content: resposta.mensagem,
                title: false,
                type: resposta.tipo,
                theme: "modern",
                closeIcon: false,
                icon: $icone,
                buttons: {
                    ok: function (okButton) {
                        if (resposta.tipo == "green") {
                            location.href = "https://dominiocliente.com.br"
                        }
                    }
                }
            });
        },
        error: function (resposta) {
            $.alert({
                content: "Um erro desconhecido aconteceu e sua mensagem não pode ser enviada",
                title: false,
                type: "red",
                theme: "modern",
                closeIcon: true,
                icon: "fas fa-times",
                buttons: {
                    ok: function () {
                    }
                }
            });
        },
        complete: function () {
            $loading.close()
        }
    });
    return false;
});


const tabs = document.querySelectorAll('.process .btn-pill');

const swiper = new Swiper('.process-swiper', {
speed: 350,
autoHeight: true,
allowTouchMove: true,
on: {
    slideChange: () => {
    tabs.forEach(b => b.classList.remove('active'));
    const btn = document.querySelector(`.btn-pill[data-tab="${swiper.activeIndex}"]`);
    if (btn) btn.classList.add('active');
    }
}
});

tabs.forEach(btn => {
btn.addEventListener('click', () => {
    const i = Number(btn.getAttribute('data-tab'));
    swiper.slideTo(i);
});
});


//POUP

(function () {
    const MODAL_ID = 'exitIntentModal';
    const SHOWN_KEY = 'exit_intent_shown_at';
    const SHOW_INTERVAL_MIN = 60 * 12; // mostra de novo só após 12h

    const isMobile = () => matchMedia('(pointer: coarse)').matches;

    function canShowAgain() {
      try {
        const last = Number(localStorage.getItem(SHOWN_KEY) || 0);
        const now = Date.now();
        return (now - last) > SHOW_INTERVAL_MIN * 60 * 1000;
      } catch { return true; }
    }

    function markShown() {
      try { localStorage.setItem(SHOWN_KEY, String(Date.now())); } catch {}
    }

    const modal = new bootstrap.Modal(document.getElementById(MODAL_ID), { backdrop: 'static' });

    function showModalOnce() {
      if (!canShowAgain()) return;
      modal.show();
      markShown();
      // remove listeners depois de abrir, para não reabrir
      removeListeners();
    }

    // —— Desktop: mouse sai pelo topo
    function onMouseOut(e) {
      if (e.clientY <= 0) showModalOnce();
    }

    // —— Fallback Mobile: inatividade (20s) e/ou voltar para o topo
    let idleTimer;
    function resetIdleTimer() {
      clearTimeout(idleTimer);
      idleTimer = setTimeout(() => showModalOnce(), 20000);
    }

    // —— Também quando a aba perde foco (usuário vai embora)
    function onVisibilityChange() {
      if (document.visibilityState === 'hidden') showModalOnce();
    }

    function addListeners() {
      if (!isMobile()) {
        document.addEventListener('mouseout', onMouseOut);
      } else {
        ['touchstart','scroll'].forEach(evt => document.addEventListener(evt, resetIdleTimer, { passive: true }));
        resetIdleTimer();
      }
      document.addEventListener('visibilitychange', onVisibilityChange);
    }

    function removeListeners() {
      document.removeEventListener('mouseout', onMouseOut);
      ['touchstart','scroll'].forEach(evt => document.removeEventListener(evt, resetIdleTimer));
      document.removeEventListener('visibilitychange', onVisibilityChange);
      clearTimeout(idleTimer);
    }

    // Não mostrar imediatamente; dar 3s para o usuário ver a página
    window.addEventListener('load', () => {
      setTimeout(() => {
        if (canShowAgain()) addListeners();
      }, 3000);
    });

    // Validação simples do formulário
    const form = document.getElementById('exitForm');
    if (form) {
      form.addEventListener('submit', (e) => {
        if (!form.checkValidity()) {
          e.preventDefault();
          e.stopPropagation();
        } else {
          // TODO: enviar via fetch/XHR para sua API/CRM
          // e.g., fetch('/api/contato', {method:'POST', body:new FormData(form)})
          modal.hide();
        }
        form.classList.add('was-validated');
      });
    }
  })();