<div class="symbol"></div>

<div class="corpus">

    <p>Entre 2012 e 2016 enquanto professor do Centro Universitário Senac / São Paulo, colaborei com o Laboratório de Interação e Usabilidade (LIU), e fui pesquisador do Laboratório de Pesquisa em Ambientes Interativos (LPAI), ambos da própria instituição. Foi no LPAI que as primeiras ferramentas e modelos que adoto até hoje começaram a ser desenolvidas.
    </p>

    <p>Em meados de 2013 eu precisava de uma forma simples e facilmente atualizável de entregar aos estudantes relações de leituras recomendadas, referências bibliográficas, e links de referência que seriam importantes para suas formações. Foi nesse momento que iniciei o desenvolvimento da ferramenta AMS (Assets Management System) para catalogar os materiais e mantê-los sempre atualizados.</p>

    <p>A ferramenta era originalmente constituída de um <i>script</i> para o Google Docs, capaz de varrer os dados registrados em uma planilha, e devolver um conjunto de informações selecionadas e pertinentes ao tópicos desejado. Estes dados seriam recebidos por uma diversidade de interfaces capazes de apresentá-los ou filtrá-los, já organizados em uma estrutura padrão.</p>

    <!--
    <p>A idéia era boa e funcionou bem durante um tempo, até que os dados catalogados se tornaram extensos, e o tempo de resposta para este modelo de funcionamento começou a deixar muito a desejar.</p> -->

    <p>Para melhorar a performance da ferramenta, desenvolvi um novo modelo de operação, com uma ferramenta criada para fazer um espelhamento dos dados presentes na planilha em um banco de dados MySQL, e outra ferramenta para realizar o mesmo processo de varredura e seleção das informações pertinentes, agora dentro de um banco de dados. Esta solução resolveu o tempo de resposta da ferramenta, mas incluiu a necessidade de se compilar os dados atualizados, antes que pudessem ser disponibilizados.</p>

    <p>O site da <a target='_blank' href='https://www.projetao.com.br'>Metodologia Projetão</a> funciona até hoje em cima do AMS. Ela foi a base para dispor dados em tudo que foi construído em seguida, e o início de um laboratório dedicado a prover soluções para os problemas e necessidades de ensino.</p>

    <p>Durante minha passagem pelo LPAI, um dos projetos sustentados pelo AMS foi o levantamento <a target='_blank' href='https://alemdosandbox.vercel.app'>Além do Sandbox</a> (esta já é uma versão atualizada sem o AMS) que mapeava experiências e tecnologias criativas, como parte da pesquisa em andamento.</p>

</div>

<h2>ACME | Laboratório de Artefatos Computacionais e Materiais de Ensino</h2>

<div class="corpus">
    <p>Este laboratório já passou por diversos nomes anteriormente, que foram mudando por motivos diversos até chegar no acrônimo atual, que sim, faz referência direta às famosas indústras de geringonças utilizadas por <i>Wile E. Coyote</i> em sua eterna caça ao Papa-Léguas. A verdade é que toda vez que algo novo é desenvolvido, tenho a impressão que passarei pelas mesmas experiências do colega coiote.
    </p>

    <p>Os dois projetos iniciais que foram desenvolidos, já com o laboratório instituído, foram o <a target='_blank' href='https://github.com/ranoya/referenceDocs'>ReferenceDocs</a> e o <a target='_blank' href='https://github.com/ranoya/Playground'>Playground</a>, ambos com o intuito de dar suporte às atividades do projeto de ensino <a target=' _blank' href='https://www.ranoya.com/pt/futuro'>Futuro do Design</a>.</p>

    <p>O <a target='_blank' href='https://github.com/ranoya/referenceDocs'>ReferenceDocs</a> foi a construção da documentação técnica em português das linguagens de programação adotadas nas disciplinas, com o intuito de disponibilizar referências básicas para os estudantes.</p>

    <p>Já o <a target='_blank' href='https://github.com/ranoya/Playground'>Playground</a> foi a construção de um ambiente livecode online para Processing (posteriormente ampliado para P5, HTML, Javascript e Markdown), viabilizando uma ferramenta/contexto de programação que não precisaria ser instalada nos computadores para ser usada. Este ambiente era necessário para o ensino de Processing em laboratórios onde não era possível instalar novos softwares, assim como para facilitar e aproximar os estudantes da programação, sem que fossem iniciamente expostos às complicações inerentes da instalação de uma IDE e de um ambiente de runtime de programação.</p>

</div>

<div class="quatrocolunas">
    <div style="background-repeat: no-repeat; background-size: cover; background-position: top center; aspect-ratio: 4 / 2.5; width: 100%; background-image: url(https://www.ranoya.com/Assets/portfolio/htmlref3.gif)"></div>
    <div style="background-repeat: no-repeat; background-size: cover; background-position: top center; aspect-ratio: 4 / 2.5; width: 100%; background-image: url(https://www.ranoya.com/Assets/portfolio/playground.gif)"></div>

    <div style="background-repeat: no-repeat; background-size: cover; background-position: top center; aspect-ratio: 4 / 2.5; width: 100%; background-image: url(https://www.ranoya.com/Assets/portfolio/new-media-12_25246722149_o.png)"></div>

    <div style="background-repeat: no-repeat; background-size: cover; background-position: top center; aspect-ratio: 4 / 2.5; width: 100%; background-image: url(https://www.ranoya.com/Assets/portfolio/referenceparallax.gif)"></div>

    <span class="legendas">ReferenceDocs, Playground, e dois formatos diferentes do Bookmarker</span>
</div>



<div class="corpus">




    <p>Os dois projetos trabalhavam de forma integrada.</p>

    <p>Uma <a target='_blank' href='https://github.com/ranoya/multiProcessing'>variação do Playground</a> permitindo que vários contextos pudessem ser incluídos simultaneamente em um mesmo documento também foi desenvolvido para ser inicialmente incluído no <a target='_blank' href='https://github.com/ranoya/referenceDocs'>ReferenceDocs</a>. Essa inovaçao provocou a necessidade de produzir algo mais flexível como plataforma para a documentação, que culminou em outros projeto, o <a target='_blank' href='https://github.com/ranoya/sumarion'>Sumarion</a> (que por sinal, é o suporte deste próprio documento).</p>


    <p>Na sequência, e aproveitando já as bases existentes nas outras soluções, tentei providenciar <a target='_blank' href='https://www.ranoya.com/pt/garagem/#Bookmarker'>listagens de referências</a> bibliográficas, de websites, e de links pertinentes. Esta ferramenta foi batizada de <b>Bookmarker</b>, e também já passou por diversas versões e atualizações, sempre integrada aos materiais de ensino produzidos.</p>

    <p>Outros pequenos projetos e ferramentas foram desenvolvidos para complementar recursos, como uma ferramenta simples para construção de <a target=' _blank' href='https://github.com/ranoya/Scrollytelling'>ScrollyTellings</a>, para reproduzir em tela aquilo que é enviado para o <a target='_blank' href='https://github.com/ranoya/ScreenConsole'>Console</a> de um navegador (para auxiliar observar erros em ferramentas de livecode), e estilos padrões para a implementação de código <a target='_blank' href='https://github.com/ranoya/markdown-css'>Markdown</a>.</p>

    <p>Diversas visualizações foram criadas para o departamento de design da UFPE, sendo a mais importante delas a visualização dinâmica das <a target='_blank' href='https://ddesign-ufpe.vercel.app/grade'>grades de oferta</a> de 2019 a 2022 (a última versão já amparada pela ferramenta que sucedeu o AMS).</p>

</div>

<div class="symbol"></div>

<div class="corpus">

    <p>Após trabalhar com a plataforma de programação literária <a target='_blank' href='https://www.observablehq.com'>Observable</a>, pareceu necessário repensar a ferramenta AMS que funcionava como infra-estrutura para alimentação dos dados utilizados em todas as soluções. Sua substituição aconteceu com o desenvolvimento da biblioteca <a target='_blank' href='https://datat.vercel.app/'>DataT</a>, elaborada para trabalhar melhor com dados obtidos diretamente de planilhas online, como funcionava originalmente o próprio AMS.</p>

    <p>A infra-estrutura do <a target='_blank' href='https://datat.vercel.app/'>DataT</a> permitiu maior flexibilidade às soluções desenvolvidas, e boa parte das ferramentas que já existiam acabaram sendo migradas para versões mais modernas. Neste próprio processo, o <b>Bookmarker</b> foi adaptado para a exibição de <a target='_blank' href='https://www.ranoya.com/pt/garagem/#Pinboard'>paineis de imagens e vídeos</a>, constituíndo uma nova solução chamda de <a target="_blank" href="https://omniboards.vercel.app/">Pinboard</a>.</p>

    <p>A profusão de documentos e instrumentos direcionados à cada atividade específica cresceu exponencialmente, ao ponto que se fez necessário também a criação de uma nova ferramenta para organizar toda a produção. Foi desta urgência que surgiu a plataforma <a target=' _blank' href='https://poepalette.vercel.app/'>POE</a>, capaz de ser customizada e utilizada no seu próprio domínio, instalada em outros locais como uma versão independente, ou implementada como um componente junto a outros sites ou ferramentas. Por conta de sua flexibilidade e a possibilidade de extensão através de plugins, ela passou a ser um recurso integrado em todas as novas soluções em desenvolvimento.</p>

</div>

<div class="quatrocolunas">
    <div style="background-repeat: no-repeat; background-size: cover; background-position: top left; aspect-ratio: 4 / 2.5; width: 100%; background-image: url(https://www.ranoya.com/Assets/portfolio/poe-default2.gif)"></div>
    <div style="background-repeat: no-repeat; background-size: cover; background-position: top right; aspect-ratio: 4 / 2.5; width: 100%; background-image: url(https://www.ranoya.com/Assets/portfolio/bookmarker-datat.png)"></div>

    <div style="background-repeat: no-repeat; background-size: cover; background-position: top right; aspect-ratio: 4 / 2.5; width: 100%; background-image: url(https://www.ranoya.com/Assets/portfolio/pinboard-datat.png)"></div>

    <div style="background-repeat: no-repeat; background-size: cover; background-position: top right; aspect-ratio: 4 / 2.5; width: 100%; background-image: url(https://www.ranoya.com/Assets/portfolio/pinboard-portfolio-datat.png)"></div>

    <span class="legendas">POE, e versões novas do Bookmarker, do Pinboard, e do Portifolio utilizando o Pinboard, todos com base no DataT</span>
</div>

<div class="corpus">

    <p>Aproveitando a revisão de todas as soluções com as novas possibilidades oferecidas pelo <a target='_blank' href='https://poepalette.vercel.app/'>POE</a> e pelo <a target='_blank' href='https://datat.vercel.app/'>DataT</a>, iniciei uma revisão da ferramenta de <a target='_blank' href='https://github.com/ranoya/Playground'>Playground</a>, mais completa, capaz de rodar códigos na forma de livecode ou de execução controlada, e com uma gama muito maior de customizações possíveis para lhe permitir ser integrada a qualquer material. Esta nova solução se tornou o <a target='_blank' href='https://omnicode.vercel.app/'>Omnicode</a>, cuja <a target='_blank' href='https://github.com/ranoya/omnicode'>documentação</a> disponibiliza exemplos e parâmetros para que seja adaptado para contextos diferentes, ou tenha suas opções de menu modificadas através da customização do próprio <a target='_blank' href='https://poepalette.vercel.app/'>POE</a> integrado.</p>

    <p>Ainda que muitos do que eu fazia já estivesse catalogado e organizado através do <a target='_blank' href='https://poepalette.vercel.app/'>POE</a>, havia a necessidade de acessar rapidamente o conteúdo de vários dos materiais de ensino que eu elaborava. Cada um deles contava com uma forma de menu e navegação diferente, e a exemplo do menu do próprio <a target='_blank' href='https://omnicode.vercel.app/'>Omnicode</a>, pareceu uma boa idea integrá-lo como mecanismo de navegação nos diversos materiais de ensino. Para esta iniciativa de reformulá-los, construí o <a target="_blank" href="https://omnidocs.vercel.app">Omnidocs</a> que compilaria todas as informações dos inúmeros materiais de ensino, e funcionaria também para cada um deles como mecanismo de navegação, de forma particular e independente.</p>

    <p>
    <div style="background-repeat: no-repeat; background-size: contain; background-position: top left; aspect-ratio: 4 / 2.5; width: 100%; background-image: url(https://www.ranoya.com/Assets/portfolio/omnicode-poe-dgen.gif);"></div>

    <span class="legenda">Omnicode (contendo uma versão embutida do POE Instance) integrado ao material de ensino de Design Generativo, já com a navegação estruturada através do POE.</span>
    </p>


</div>

<div class="symbol"></div>

<div class="corpus">
    <p>Outro problema que foi trabalhado dentro do laboratório foi uma ferramenta para os próprios materiais de ensino, em decorrência de algumas limitações presentes nas ferramentas online disponíveis para construção de slides, no geral relacionadas às dificuldades em construir algo como uma linha do tempo, estabelecer uma relação mais orgânica de navegação através dos slides, ou de manter uma estrutura de tópicos sempre presentes (outline) nos documentos.</p>

    <p>Para esta questão, foi desenvolvido o <a target='_blank' href='https://github.com/ranoya/slidelines'>Slidelines</a>, ferramenta na qual <a target='_blank' href='https://www.ranoya.com/pt/garagem/#Slidelines'>diversos materiais</a> estão apoiados.</p>
</div>

<h2>VISSE | Laboratório de Visualização e Sentidos</h2>

<div class=" corpus">
    <p>O VISSE foi uma iniciativa para aproximar pesquisadores de Comunicação Visual e Design da Informação da região nordeste, interessados no problema da visualização de dados e visualização da informação. Tratava-se inicialmente de um laboratório multi-institucional, mas que acabou vinculado apenas a UFPE.
    </p>

    <p>O laboratório herdou alguns projetos em andamento para lhes dar continuidade. O primeiro deles foi o trabalho de revisão sistemática da literatura nacional em visualização de dados, realizado pelo Prof. Rodrigo Medeiros (IFPB), para qual elaborei uma <a target='_blank' href='https://visse.vercel.app/producaonacional'>interface</a>, permitindo visualizar a produção de autores mais relevantes, os índices regionais, e, claro, acessar facilmente as publicações. Este mapeamento inicial continuou sendo atualizado na medida em que novas publicações foram apresentadas em congressos, livros ou periódicos.</p>

    <p>Da mesma forma, dei continuidade ao levantamento inicial do Prof. Ricardo Cunha Lima sobre infografia e artefatos de visualização da informação, atualizando esta base de dados com novos artefatos que passariam a ser consultados através de uma <a target='_blank' href='https://visse.vercel.app/mapeamentoartefatos/'>interface de pesquisa</a> própria, e um conjunto novo de categorias para as diversas formas que começaram a surgir neste contexto.</p>

    <p>Por fim, trouxe meu próprio mapeamento de artefatos de <a target='_blank' href='https://narrativas.ranoya.com/pointnclick2/'><i>Point & Click Adventures</i></a>, com a hipótese de serem os primeiros artefatos narrativos elaborados na mídia computacional, para que ele fosse ampliado e detalhado, produzindo algumas visualizações com estes dados. Utilizei estes artefatos como objeto de estudo cerca das dificuldades projetuais presentes na construção de visualizações, e mais especificamente na construção de linhas do tempo capazes de demonstrar as origens e raízes do formato midiático em questão.</p>

</div>

<div class="quatrocolunas">
    <a target='_blank' href='https://www.ranoya.com/Assets/portfolio/visse_bibliografia.png'>
        <div style="background-repeat: no-repeat; background-size: cover; background-position: bottom right; aspect-ratio: 4 / 2.5; width: 100%; background-image: url(https://www.ranoya.com/Assets/portfolio/visse_bibliografia.png)"></div>
    </a>
    <a target='_blank' href='https://www.ranoya.com/Assets/portfolio/VisualizacaotextualdereferenciabibliograficadoVISSE2.png'>
        <div style="background-repeat: no-repeat; background-size: cover; background-position: bottom right; aspect-ratio: 4 / 2.5; width: 100%; background-image: url(https://www.ranoya.com/Assets/portfolio/VisualizacaotextualdereferenciabibliograficadoVISSE2.png)"></div>
    </a>

    <a target='_blank' href='https://www.ranoya.com/Assets/portfolio/visse_artefatos.png'>
        <div style="background-repeat: no-repeat; background-size: cover; background-position: bottom left; aspect-ratio: 4 / 2.5; width: 100%; background-image: url(https://www.ranoya.com/Assets/portfolio/visse_artefatos.png)"></div>
    </a>

    <a target='_blank' href='https://www.ranoya.com/Assets/portfolio/pnc2-component.png'>
        <div style="background-repeat: no-repeat; background-size: cover; background-position: bottom right; aspect-ratio: 4 / 2.5; width: 100%; background-image: url(https://www.ranoya.com/Assets/portfolio/pnc2-component.png)"></div>
    </a>

    <span class="legendas">Produção nacional em visualização, artefatos de visualização e <i>Point & Click Adventures</i></span>
</div>



<div class="corpus">

    <p>Dois projetos inteligados se sucederam como necessidade da própria linha de pesquisa em Design da Informação da UFPE: o primeiro foi apelidado de "álbum de família", e continha o mapeamento de todas as pessoas formadas (ou em formação) pela linha, permitindo que tivéssemos um entendimento mais preciso da própria história do Design da Informação em Recife. O segundo foi a transposição para o formato digital do manual oferecido para candidatos ao programa, contendo um detalhamento do escopo e atuação de cada orientador pertencente a linha, já conectado com as informações levantadas no "álbum de família", apresentando justamente a produção dos orientandos e ex-orientandos de cada orientador para que os candidatos a pós-graduandos pudessem compreender a aderencia de seus projetos junto aos docentes.</p>

    <p>Como uma evolução do próprio levantamento de <a target='_blank' href='https://narrativas.ranoya.com/pointnclick2/'><i>Point & Click Adventures</i></a>, iniciei outro projeto de visualização voltado à <a target='_blank' href='https://visse.vercel.app/mapeamentolinguageminteracao'>linguagem gráfica de artefatos interativos</a>, buscando identificar tecnicamente o comportamento gráfico/visual nos jogos eletrônicos, artefatos onde encontramos uma interatividade intensa, e por isso tratados como "artefatos de alta interação". Neste mapeamento tracei tanto as questões estilísticas (a expressão gráfica), quando o mecanismo geral pelo qual o jogo operava, e seu comportamento (ou transfromação) visual decorrente da manipulação dos usuários-jogadores.</p>

    <p>Outro pequeno projeto desenvolvido no laboratório foi um mecanismo geral através do qual as <a target='_blank' href='https://visse.vercel.app/aulasretorica'>grades das disciplinas</a> oferecidas pudessem ser apresentadas no próprio site do laboratório, já incorporando materiais, recursos e bibliografias necessárias nas atividades aula-a-aula. Esta era uma necessidade operacional para facilitar a documentação das disciplinas. Em uma perspectiva mais ampla, a documentação das atividades de ensino, nos mesmos parâmetros dos outros artefatos mapeados, permitiria uma análise das práticas aplicadas, algo potencilamente útil para a pesquisa de <a href='javascript:openMeta(' pesquisacsa');'>formação do designer de informação para a elaboração de artefatos de visualização</a>.</p>

</div>




<style>
    input {

        font-size: 14px;
        line-height: 22px !important;
        ;
        padding: 5px;
        color: var(--highlight-super, #f44292) !important;
        width: 280px !important;
        border: 3px solid #aaaaaa !important;
        border-radius: 3px;
        margin-right: 20px;
    }

    ::placeholder {
        color: var(--bg-color-t, rgba(98, 3, 132, 0.6));
    }

    #observablehq-viewof-filtros-d0982dcc {
        display: inline;
    }

    #observablehq-viewof-filtros-d0982dcc div {
        display: inline;
    }

    #observablehq-viewof-filtros-d0982dcc form {
        display: inline;
    }

    .blocoposts {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr 1fr;
        gap: 15px 15px;
        width: 100%;
    }

    .blocointeiro {
        width: 100%;
        font-size: 12px;
        line-height: 13px;
        margin-bottom: -25px;
    }

    .imagem,
    a.imagem {
        width: calc(100% - 15px);
        padding-top: calc(100% - 15px);
        background-repeat: no-repeat;
        background-position: center center;
        background-size: cover;
        border: 8px solid var(--ultra-detail-link);
        -webkit-transition: all .3s ease-in-out;
        -moz-transition: all .3s ease-in-out;
        -o-transition: all .3s ease-in-out;
    }

    a:hover .imagem {
        border: 8px solid var(--text-link);
        -webkit-transition: all .3s ease-in-out;
        -moz-transition: all .3s ease-in-out;
        -o-transition: all .3s ease-in-out;
    }

    .singlepost {
        width: 100%;

        font-family: Helvetica, Arial, sans-serif;
        font-size: 16px !important;
        line-height: 19px !important;
        display: inline-block;
        padding-left: 15px;
        padding-right: 15px;
        padding-top: 15px;
        padding-bottom: 15px;
        margin-left: -15px;
        margin-right: -15px;

        -webkit-transition: all .3s ease-in-out;
        -moz-transition: all .3s ease-in-out;
        -o-transition: all .3s ease-in-out;



        text-decoration: none;
        color: var(--ultra-detail-link);

    }

    a.singlepost:hover,
    .singlepost:hover {

        -webkit-transition: all .6s ease-in-out;
        -moz-transition: all .6s ease-in-out;
        -o-transition: all .6s ease-in-out;


        color: var(--text-link);

    }

    .autoria {
        font-size: 12px;
        line-height: 13px;
    }

    .logopinboard {
        width: 37px;
        height: 37px;
        margin-right: 15px;
        float: left;
        vertical-align: top;
        border-radius: 3px;
    }

    .logopinboard path {
        fill: var(--text-link, #ac229d);
    }

    .quantitativos {
        font-weight: bold;
    }

    .simplepeoplethumb {
        width: 100%;
        padding-top: 100%;
        background-position: top center;
        background-repeat: no-repeat;
        background-size: cover;
        border-radius: 50%;
        margin-bottom: 14px;
    }
</style>

<style>
    .quatrocolunas {
        display: grid;
        grid-template-columns: [inicio] 1fr 1fr 1fr 1fr [fim];
        gap: 20px 40px;
        width: calc(100% - 15px);
        margin-bottom: 5vw;
    }

    .quatrocolunas .legendas {
        grid-column: inicio / fim;
        text-align: right;

        font-size: 12px;

    }

    .duascolunas {
        display: grid;
        grid-template-columns: [inicio] 1fr 1fr [fim];
        gap: 20px 40px;
        width: calc(100% - 15px);
        margin-bottom: 5vw;
    }

    .imagemquadrada {
        width: 100%;
        padding: 0 !important;
        margin: 0 !important;
        padding-top: 100% !important;
        border: 10px solid var(--bg-color-t, rgba(98, 3, 132, 0.6));
        background-repeat: no-repeat;
        background-position: center center;
        background-size: cover;
    }

    .imagemquadrada:hover {
        border: 10px solid var(--iconhighlight, #f44292);
    }

    .linksmallobs {
        font-family: Montserrat, Helvetica, Arial, sans-serif;
        color: var(--text-link, #ac229d);
        gap: 0 40px;
        font-size: 16px;
        line-height: 20px;
        text-align: left;
    }

    .linksmallobs div {
        gap: 0 40px;
    }

    .linksmallobs a {
        border: 1px solid transparent;
        transition: all 0.4s ease-in;
        -webkit-transition: all 0.4s ease-in;
        -moz-transition: all 0.4s ease-in;
        -o-transition: all 0.4s ease-in;
        text-decoration: none;
        margin-top: 4px;
        margin-bottom: 4px;
        font-size: 16px;
        line-height: 20px;
        text-align: left;
    }

    .linksmallobs a:hover {
        border: 1px solid var(--text-link, #ac229d);
    }

    .bloca a {
        display: block;
    }
</style>