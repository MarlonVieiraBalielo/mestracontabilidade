<?php
$title = 'Empresa';
?>
<?php include('header.php'); ?>
<div class="container-abas">
    <div class="container py-7 position-relative">
        <h1 class="fw-bolder text-white text-uppercase"><i class="fas fa-building me-2"></i><?= $title; ?></h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb text-white">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item" aria-current="page"><?= $title; ?></li>
            </ol>
        </nav>
    </div>
</div>

<div class="container py-10 text-dark">
    <div class="row align-items-center mb-5">
        <div class="col-auto">
            <div class="bg-primary text-white rounded-circle p-3">
                <i class="fas fa-scroll fa-2x"></i>
            </div>
        </div>
        <div class="col">
            <h2 class="fw-bold mb-0">Nossa História</h2>
            <p class="text-muted">Uma trajetória de mais de 25 anos no mercado contábil mato-grossense, com foco na excelência e acessibilidade.</p>
        </div>
    </div>

    <div class="lh-lg">
        <p>O escritório <strong>Mestra Contabilidade</strong> foi fundado no ano <strong>2000</strong> pelo sócio <strong>Edegar Marcos Pasuch</strong>. Com mais de <strong>25 anos de experiência</strong> no mercado contábil mato-grossense, a Mestra Contabilidade se tornou referência em serviços contábeis de qualidade.</p>
        <p>Com um escritório físico localizado em <strong>Alta Floresta – MT</strong>, atendemos com dedicação mais de <strong>17 municípios</strong> no estado, sempre com a missão de contribuir para o sucesso empresarial de nossos clientes.</p>
        <p>A missão da nossa empresa é clara: oferecer serviços contábeis com <strong>qualidade, excelência e acessibilidade</strong>, focando nas necessidades de cada cliente e proporcionando um atendimento diferenciado.</p>
        <p>Ao longo dos anos, evoluímos com o mercado, ampliando a nossa expertise. Trabalhamos com foco em <strong>planejamento tributário</strong>, <strong>consultoria estratégica</strong> e <strong>atendimento personalizado</strong>, sempre com base em ética e compromisso com os resultados.</p>
        <p>Nosso propósito vai além da contabilidade. Estamos aqui para <strong>ajudar o empreendedor a realizar seus sonhos</strong>, com <strong>responsabilidade</strong>, <strong>conhecimento técnico</strong> e <strong>dedicação ao sucesso</strong> de nossos clientes.</p>
    </div>
    <div class="row mt-5">
        <div class="col-6 mb-4">
            <h3 class="fw-bold">O que nos diferencia</h3>
            <p class="text-muted">Comprometidos em oferecer uma contabilidade moderna e estratégica para nossos clientes.</p>
        </div>
        <div class="col-6 col-md-6">
            <ul class="list-unstyled">
                <li><i class="fas fa-check-circle text-primary me-2"></i><strong>Equipe altamente treinada e especializada</strong></li>
                <li><i class="fas fa-check-circle text-primary me-2"></i><strong>Atendimento consultivo com foco no cliente</strong></li>
                <li><i class="fas fa-check-circle text-primary me-2"></i><strong>Estratégia tributária eficiente para economia fiscal</strong></li>
                <li><i class="fas fa-check-circle text-primary me-2"></i><strong>Monitoramento constante da legislação</strong></li>
            </ul>
        </div>
        <div class="col-12 mt-4">
            <p>Temos como missão gerar uma experiência diferente aos clientes, trazendo uma contabilidade mais próxima ao dia a dia da empresa, sendo um escritório de fácil acesso e atendimento rápido.</p>
            <p>Somos especialistas em <strong>planejamento tributário</strong> e, por isso, realizamos constantemente análises tributárias aos clientes, sempre focando na <strong>segurança fiscal</strong> e <strong>redução de tributos</strong>.</p>
        </div>
    </div>
</div>

<?php include('footer.php'); ?>