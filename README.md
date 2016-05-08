# Páginas instáveis

Esta é uma estrutura simples para experiências de navegação aleatória. O site está alojado em http://koizo.org/paginas-instaveis. O processo é extremamente simples, com um link no final de cada página para nos levar a outra à sorte. A edição dos textos pode ser feita usando apenas o interface do GitLab, e basta aceder a um link para atualizar o site.

## Como editar

Podemos usar o Github para criar e editar os nossos textos, e fazê-los aparecer rapidamente no nosso site.

Para **criar um novo texto**, é seguir para o diretório `textos/` (ali acima) e selecionar _New file_. 

Para **editar um texto existente**, é selecionar o ficheiro dentro de `textos/` e fazer _Edit_ (ícone do lápis).

## Ver o resultado

Depois de fazer modificações, é preciso seguir o [link para atualizar o site](http://koizo.org/paginas-instaveis/reload.php).

E para ver uma página específica sem ter de fazer refresh continuamente, acrescentamos a porção `?titulo=xxx` ao URL. Por exemplo, para ver o texto `erro.md` é em http://koizo.org/paginas-instaveis/pages.php?titulo=erro .

## Formato do texto

Os textos estão expressos na norma [Markdown](https://en.wikipedia.org/wiki/Markdown), uma forma simples de escrever texto para obter HTML agradável. Este mesmo documento está escrito em Markdown ([ver aqui](https://github.com/ManufacturaInd/unstable-pages/raw/master/README.md)). Assim não precisamos de nos preocupar com `<tags>` deselegantes durante o processo de escrita e edição.

### Quebras de linha

É necessário usar uma quebra de linha dupla para separar os parágrafos no resultado final, assim:

    Neste exemplo, estas linhas
    vão aparecer como
    uma única

E com uma quebra de linha dupla:

    Esta frase será uma linha

    Esta será outra

    E esta
    será
    uma outra.

Para fazer uma quebra de linha simples sem separação de parágrafos (como em versos), usamos dois espaços no fim da linha:

    Esta linha termina em dois espaços  
    por isso esta será outra.
    
    E esta estará num novo parágrafo.
    
### Títulos

O texto pode ou não começar com um título:

    # Bolão
    
O número de `#` faz cabeçalhos cada vez mais discretos:

    # Grande
    ## Assim médio
    ### Médio
    #### Mais pequeno
    ##### Sub-pequeno
    ###### Sub-sub-pequeno
    
Os exemplos da página da Wikipedia sobre Markdown [explicam o resto](https://en.wikipedia.org/wiki/Markdown) do que podemos meter nos textos, como links ou imagens.
