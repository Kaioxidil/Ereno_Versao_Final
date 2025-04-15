<?php

class HomeController extends Controller {
    public function index() {
        ?>
        <section class="section__container features__container" id="features">
            <p class="section__subheader">FUNCIONALIDADES</p>
            <h2 class="section__header">Descubra o Poder do Ereno ERP</h2>
            <div class="features__grid">
                <div class="feature__card">
                    <i class="fa-solid fa-layer-group"></i>
                    <h4>Gestão de Estoque</h4>
                    <p>Controle total do seu inventário para otimizar suas operações.</p>
                </div>
                <div class="feature__card">
                    <i class="ri-file-chart-line"></i>
                    <h4>Relatórios Detalhados</h4>
                    <p>Análise de dados precisa para decisões estratégicas.</p>
                </div>
                <div class="feature__card">
                    <i class="ri-money-dollar-circle-line"></i>
                    <h4>Gestão Financeira</h4>
                    <p>Controle de fluxo de caixa e finanças da sua empresa.</p>
                </div>
                <div class="feature__card">
                    <i class="ri-user-settings-line"></i>
                    <h4>CRM Integrado</h4>
                    <p>Gerencie seus clientes e melhore o relacionamento com eles.</p>
                </div>
            </div>
        </section>

        <section class="section__container paravoce__container" id="paravoce">
            <p class="section__subheader">O ERENO ERP É PRA VOCÊ!</p>
            <h2 class="section__header">Para quem é o Ereno ERP?</h2>
            <div class="paravoce__grid">
                <div class="paravoce__card">
                    <ul>
                        <li><i class="fa-solid fa-check"></i> Lojas de Vestuários</li>
                        <li><i class="fa-solid fa-check"></i> Lojas de Calçados</li>
                        <li><i class="fa-solid fa-check"></i> Lojas de Móveis</li>
                        <li><i class="fa-solid fa-check"></i> Lojas de Eletrodomésticos</li>
                        <li><i class="fa-solid fa-check"></i> Materiais de Construção</li>
                        <li><i class="fa-solid fa-check"></i> Auto Peças</li>
                    </ul>
                    <button class="btn" onclick="location.href='/contato'">Solicite uma demonstração!</button>
                </div>
                <div class="paravoce__card">
                    <ul>
                        <li><i class="fa-solid fa-check"></i> Auto Elétricas</li>
                        <li><i class="fa-solid fa-check"></i> Agropecuárias</li>
                        <li><i class="fa-solid fa-check"></i> Mercados e Mercearias</li>
                        <li><i class="fa-solid fa-check"></i> Panificadoras</li>
                        <li><i class="fa-solid fa-check"></i> Armarinhos</li>
                        <li><i class="fa-solid fa-check"></i> Frutarias</li>
                    </ul>
                    <button class="btn" onclick="location.href='/contato'">Solicite uma demonstração!</button>
                </div>
                <div class="paravoce__card">
                    <ul>
                        <li><i class="fa-solid fa-check"></i> Relojoarias</li>
                        <li><i class="fa-solid fa-check"></i> Lojas de Informática</li>
                        <li><i class="fa-solid fa-check"></i> Bares e Restaurantes</li>
                        <li><i class="fa-solid fa-check"></i> Papelaria</li>
                        <li><i class="fa-solid fa-check"></i> Salão de Beleza</li>
                        <li><i class="fa-solid fa-check"></i> Outros</li>
                    </ul>
                    <button class="btn" onclick="location.href='/contato'">Solicite uma demonstração!</button>
                </div>
            </div>
        </section>

        <section class="section__container testimonials__container" id="testimonials">
            <p class="section__subheader">DEPOIMENTOS</p>
            <div class="testimonials__content">
                <h2 class="section__header">O que nossos clientes dizem?</h2>
                <div class="testimonials__carousel">
                    <div class="testimonial__card">
                        <div class="testimonial__header">
                            <img src="src/lib/img/Jair-Tintas.jpg" alt="Jair Tintas" class="testimonial__image">
                            <p class="testimonial__name">Jair Tintas</p>
                        </div>
                        <p class="testimonial__text">Prestam um serviço muito bom. Qualquer problema solucionam rapidamente.</p>
                    </div>
                    <div class="testimonial__card">
                        <div class="testimonial__header">
                            <img src="src/lib/img/Gabriel.jpg" alt="Gabriel Ferreira" class="testimonial__image">
                            <p class="testimonial__name">Gabriel Ferreira</p>
                        </div>
                        <p class="testimonial__text">Ótimo atendimento, sistema empresarial e suporte excelente! Top demais!</p>
                    </div>
                    <div class="testimonial__card">
                        <div class="testimonial__header">
                            <img src="src/lib/img/edimar.jpg" alt="Edimar Zantrilli" class="testimonial__image">
                            <p class="testimonial__name">Edimar Zantrilli</p>
                        </div>
                        <p class="testimonial__text">Ótimo atendimento de toda a equipe! Recomendo!!!</p>
                    </div>
                </div>
                <div class="carousel__nav">
                    <button class="carousel__prev"><i class="ri-arrow-left-s-line"></i></button>
                    <button class="carousel__next"><i class="ri-arrow-right-s-line"></i></button>
                </div>
            </div>
        </section>
        <?php
    }
}

?>