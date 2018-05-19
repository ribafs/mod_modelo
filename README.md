# Pequeno módulo para Joomla 3 para exibir portfólio

Este portfolio aparece acima do conteúdo, logo no início da página.

Atribuir Menu
Este módulo deve ser configurado para exibir apenas num único item de menu, como por exemplo, Livros.

Assim quando se clicar em uma imagem, ela desaparece e o respectivo artigo será aberto.

As imagens devem ter 300x300 px e de boa qualidade e ser copiadas manualmente para a pasta:

images/portfolio

## Quanto à construção do módulo:

Em seu XML deve conter um campo 'categoria'

Efetuar uma consulta à tabela #__ribafs_portfolio procurando apenas os registros da 'categoria' configurada.

Os registros retornados devem ser mostrados no módulo, mas apenas imagem e descricao.

Este módulo usa o Bootstrap 2, portanto o Template precisa usar esta versão do BS.

## Após instalar este módulo uma vez e quizer ele em outro item de menu:
- Crie um nóvo módulo do tipo mod_ribafs_portfolio
- E configure para outra categoria.

## Temos até 5 categorias.

Lembrar de usar o seguinte formato caso não esteja usando URLs amigáveis:

index.php/um,index.php/dois,index.php/tres,index.php/etc

## Se usando URL Amigáveis:
um,dois,tres,quatro,cinco

Se existirem 5 registros na categoria selecionada então precisará adicionar também obrigatoriamente 5 aliases no módulo.

## Licença

GPL 3
