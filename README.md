# Páginas instáveis

Esta é uma estrutura simples para experiências de navegação aleatória. O site está alojado em http://koizo.org/paginas-instaveis.


## TODO

* Juntar CSS skeleton




## Como usar

Para **criar um novo texto**, é seguir para o diretório `textos/` e selecionar _New file_. 

Para **editar um texto existente**, é preciso abrir o ficheiro no Github e fazer _Edit_.

Depois de fazer modificações, é preciso seguir o [link para atualizar o site](http://koizo.org/paginas-instaveis/reload.php).

E para ver uma página específica sem ter de fazer refresh continuamente, é acrescentar a porção `?titulo=xxx` ao URL. Por exemplo, para ver o texto `erro.md`, seguiríamos o url http://koizo.org/paginas-instaveis/pages.php?titulo=erro.

## Formato do texto

Os textos estão expressos na norma Markdown, que tem algumas particularidades -- a mais relevante mencionar é que é necessário usar uma quebra de linha dupla para separar as linhas no resultado final, assim:

    Neste exemplo, estas linhas
    vão aparecer como
    uma única

Com uma quebra de linha dupla:

    Esta frase será uma linha

    Esta será outra

    E esta
    será
    uma outra.
