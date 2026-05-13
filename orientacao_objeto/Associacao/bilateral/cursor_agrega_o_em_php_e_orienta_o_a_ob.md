Segue o mesmo estilo de explicação, agora para **`Associacao/bilateral`**.

## O que essa pasta quer mostrar

Aqui o foco é **associação bilateral**: duas classes se **relacionam nos dois sentidos**.

- Um **`Fornecedor`** “tem” vários **`Produto`** (lista em memória).
- Um **`Produto`** também pode “ter” vários **`Fornecedor`** (outra lista).

Ou seja, o **modelo** das classes prevê os **dois lados** da relação (cada lado guarda referências ao outro). Na prática de projeto, isso serve para, por exemplo, do fornecedor listar produtos **e** do produto listar fornecedores — desde que o código **preencha os dois lados** quando fizer sentido.

---

## `Produto.class.php`

Define **`Produto`** com:

- **`$nome`** e **`$preco`** — dados básicos do produto.
- **`$fornecedores`** — **array** pensado para guardar objetos **`Fornecedor`** (lado “produto conhece fornecedores”).

Há getters e setters para tudo, inclusive **`getFornecedores()`** e **`setFornecedores()`**, que **substituem** o array inteiro quando você chama o setter (não é “append” como no exemplo de agregação com `[]`).

---

## `Fornecedor.class.php`

Define **`Fornecedor`** com:

- **`$razaoSocial`** e **`$cnpj`** — identificação do fornecedor.
- **`$produtos`** — **array** de objetos **`Produto`** (lado “fornecedor conhece produtos”).

De novo: getters/setters; **`setProdutos()`** troca a lista inteira de produtos associados àquele fornecedor.

---

## `index.php` — o que o roteiro faz e como os arquivos se encaixam

1. **`require_once`** carrega as duas classes antes de usar `new`.

2. Cria **dois produtos** só com nome e preço (o terceiro parâmetro do construtor de `Produto` — o array de fornecedores — fica **vazio por padrão**).

3. Cria **um fornecedor** passando razão social, CNPJ e **um array com os dois produtos**:

```11:11:/Applications/XAMPP/xamppfiles/htdocs/fatec/tec1/orientacao_objeto/Associacao/bilateral/index.php
$fornecedor = new Fornecedor("Empresa 1", "1234567890", array($produto1, $produto2));
```

Assim, **dentro do objeto `$fornecedor`**, a propriedade `$produtos` já aponta para `$produto1` e `$produto2`.

4. A saída na tela usa **só o lado fornecedor → produtos**: imprime razão social, CNPJ e um **`foreach`** em **`$fornecedor->getProdutos()`**, e para cada produto chama **`getNome()`** e **`getPreco()`**.

Ou seja: neste **`index.php`**, a relação que você **vê funcionando** é **“fornecedor tem produtos”**. O array **`$fornecedores`** dentro de cada **`Produto`** **não é preenchido** nesse script — as classes estão **preparadas** para a bilateralidade, mas este exemplo **demonstra apenas um sentido** da navegação (do fornecedor para os produtos).

---

## Relação entre os três arquivos (resumo)

| Arquivo | Papel |
|--------|--------|
| **`Produto.class.php`** | Molde do produto; inclui o atributo **`$fornecedores`** para o sentido produto → fornecedores. |
| **`Fornecedor.class.php`** | Molde do fornecedor; inclui **`$produtos`** para o sentido fornecedor → produtos. |
| **`index.php`** | Cria objetos, **liga** produtos ao fornecedor **no construtor do fornecedor**, e **lista** produtos a partir do fornecedor. |

Conceito útil para fixar: **associação bilateral** = **os dois tipos** podem guardar referência um ao outro; **consistência** (os dois lados baterem com a mesma “história”) depende da regra que você implementar ao associar/desassociar (por exemplo, ao adicionar um produto a um fornecedor, também adicionar esse fornecedor ao produto — isso não aparece neste `index.php`, mas é o próximo passo natural em um exercício mais completo).

Se quiser, no próximo passo podemos escrever **duas ou três linhas** em `index.php` que preencham também **`setFornecedores`** nos produtos, para o exemplo ficar **realmente bilateral** na execução, não só no desenho das classes.

