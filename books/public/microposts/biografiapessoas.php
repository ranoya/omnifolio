<div id="listadepessoas"></div>



<style>
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

    .tabelapessoas {
        display: grid;
        grid-template-columns: [inicio] 1fr 1fr 1fr 1fr [fim];
        gap: 8px 16px;
        margin-bottom: 24px;

    }

    .linhapessoas {

        grid-column: inicio/fim;
        font-size: 24px;
        line-height: 56px;
        margin-top: 20px;
    }

    .cvblocopessoa {
        display: grid;
        grid-template-columns: 58px 1fr;
        gap: 0 8px;

    }


    .pessoainformacaografica {
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .fotopessoa {
        width: 50px;
        height: 50px;
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center center;
        border-radius: 24px;
    }

    .pessoainformacaotextual {
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .nomepessoa {
        font-weight: bold;
        width: 100%;
        font-size: 14px;
        line-height: 16px;
        align-self: center;
        display: inline-block;
        vertical-align: middle;
    }

    .tipoformacao {
        font-weight: lighter;
        width: 100%;
        font-size: 12px;
        line-height: 12px;
        align-self: center;
        display: inline-block;
        vertical-align: middle;
    }

    .instituicaopessoa {
        color: grey;
        font-weight: lighter;
        width: 100%;
        font-size: 12px;
        line-height: 12px;
        align-self: center;
        display: inline-block;
        vertical-align: middle;
    }
</style>


<script>
    listatodasaspessoas = function(ppessoas, timeframe) {
        let code = `<div class="tabelapessoas">`;

        // 3.3 compila dados de pessoas

        let residencias = select(ppessoas, patterncheck, /residência/gi);
        let posgraduacao = select(ppessoas, patterncheck, /pós-graduação/gi);
        let graduacao = select(ppessoas, patterncheck, /(tcc|pibic|pibiti)/gi);
        let extensionistas = select(ppessoas, patterncheck, /Extensão/gi);
        let projetistas = select(ppessoas, patterncheck, /Estúdio/gi);
        let empreendedores = select(ppessoas, patterncheck, /Incubação/gi); // não usado
        let monitores = select(ppessoas, patterncheck, /monitoria/gi);

        code += `<div class='linhapessoas'>Orientandos de Pós-Graduação</div>`;

        for (let k = 0; k < posgraduacao.length; k++) {
            code += `<div class='cvblocopessoa'>
                  <div class='pessoainformacaografica'>
                   <div class='fotopessoa' style='background-image: url(${posgraduacao[k].FotoURL})'></div>
                  </div>
                  <div class='pessoainformacaotextual'>
                      <div class='nomepessoa'>${posgraduacao[k].Nome}</div>
                      <div class='tipoformacao'>${posgraduacao[k].Formacao}</div>
                      <div class='instituicaopessoa'>${posgraduacao[k].Instituicao}</div>
                  </div>
                  </div>`;
        }

        code += `<div class='linhapessoas'>Orientandos de Graduação</div>`;

        for (let k = 0; k < graduacao.length; k++) {
            code += `<div class='cvblocopessoa'>
                  <div class='pessoainformacaografica'>
                   <div class='fotopessoa' style='background-image: url(${graduacao[k].FotoURL})'></div>
                  </div>
                  <div class='pessoainformacaotextual'>
                      <div class='nomepessoa'>${graduacao[k].Nome}</div>
                      <div class='tipoformacao'>${graduacao[k].Formacao}</div>
                      <div class='instituicaopessoa'>${graduacao[k].Instituicao}</div>
                  </div>
                  </div>`;
        }

        code += `<div class='linhapessoas'>Supervisão de Residentes em Ensino de Inovação</div>`;

        for (let k = 0; k < residencias.length; k++) {
            code += `<div class='cvblocopessoa'>
                  <div class='pessoainformacaografica'>
                   <div class='fotopessoa' style='background-image: url(${residencias[k].FotoURL})'></div>
                  </div>
                  <div class='pessoainformacaotextual'>
                      <div class='nomepessoa'>${residencias[k].Nome}</div>
                      <div class='tipoformacao'>${residencias[k].Formacao}</div>
                      <div class='instituicaopessoa'>${residencias[k].Instituicao}</div>
                  </div>
                  </div>`;
        }

        code += `<div class='linhapessoas'>Monitores em disciplinas de graduação</div>`;

        for (let k = 0; k < monitores.length; k++) {
            code += `<div class='cvblocopessoa'>
                  <div class='pessoainformacaografica'>
                   <div class='fotopessoa' style='background-image: url(${monitores[k].FotoURL})'></div>
                  </div>
                  <div class='pessoainformacaotextual'>
                      <div class='nomepessoa'>${monitores[k].Nome}</div>
                      <div class='tipoformacao'>${monitores[k].Formacao}</div>
                      <div class='instituicaopessoa'>${monitores[k].Instituicao}</div>
                  </div>
                  </div>`;
        }

        code += `<div class='linhapessoas'>Orientação / Mentoria no Desenvolvimento de Projetos de Inovação</div>`;

        for (let k = 0; k < extensionistas.length; k++) {
            code += `<div class='cvblocopessoa'>
                  <div class='pessoainformacaografica'>
                   <div class='fotopessoa' style='background-image: url(${extensionistas[k].FotoURL})'></div>
                  </div>
                  <div class='pessoainformacaotextual'>
                      <div class='nomepessoa'>${extensionistas[k].Nome}</div>
                      <div class='tipoformacao'>${extensionistas[k].Formacao}</div>
                      <div class='instituicaopessoa'>${extensionistas[k].Instituicao}</div>
                  </div>
                  </div>`;
        }

        code += `<div class='linhapessoas'>Orientação / Mentoria no Estúdio de Design da Informação e da Comunicação Visual</div>`;

        for (let k = 0; k < projetistas.length; k++) {
            code += `<div class='cvblocopessoa'>
                  <div class='pessoainformacaografica'>
                   <div class='fotopessoa' style='background-image: url(${projetistas[k].FotoURL})'></div>
                  </div>
                  <div class='pessoainformacaotextual'>
                      <div class='nomepessoa'>${projetistas[k].Nome}</div>
                      <div class='tipoformacao'>${projetistas[k].Formacao}</div>
                      <div class='instituicaopessoa'>${projetistas[k].Instituicao}</div>
                  </div>
                  </div>`;
        }

        // Finaliza bloco

        code += `</div>`;

        return code;
    }

    fetch('https://opensheet.elk.sh/1ul736mIB-yRQ9SUy-e3s-D90AwdwMhVNDT2j41pMX9k/Pessoas').then(response => response.json()).then((dados) => {

        let genteformada = listatodasaspessoas(dados);

        document.getElementById("listadepessoas").innerHTML = genteformada;
    });
</script>