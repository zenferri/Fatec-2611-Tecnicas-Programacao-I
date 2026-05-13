## O que é essa pasta

O exemplo mostra **agregação**: um **produto** “tem” **categorias**, mas as categorias são objetos **separados** que você cria antes e **passa** para o produto. O produto não “inventa” a categoria sozinho; ele **recebe referências** a objetos `Categoria` já existentes. Em OO isso costuma ser descrito como: *Produto agrega Categoria* (relação “tem” / “compõe-se de”, no sentido de lista).

---

## `Categoria.class.php` — o que é

Define a classe **`Categoria`**, bem simples:

- Guarda um texto **`$descritivo`** (ex.: `"Material Escolar"`).
- O construtor recebe esse texto e grava na propriedade (PHP 8+ com propriedade promovida no construtor).
- **`getDescritivo()`** devolve o texto.
- **`setDescritivo()`** altera o texto depois, se precisar.

Ou seja: cada categoria é um **objeto** com um rótulo (`descritivo`).

---

## `Produto.class.php` — o que é e como liga com `Categoria`

Define a classe **`Produto`** com três dados principais:

| Propriedade   | Significado                          |
|---------------|--------------------------------------|
| `$nome`       | nome do produto                      |
| `$preco`      | preço (número decimal)               |
| `$categoria`  | **array** que deve guardar objetos `Categoria` |

Pontos importantes para a lógica:

1. **Construtor** — ao criar um `Produto`, você pode já passar um **array de categorias**, por exemplo `array($categoria1, $categoria2)`.

2. **`getCategoria()`** — devolve o **array inteiro** de categorias (para percorrer com `foreach` no `index.php`).

3. **`setCategoria($categoria)`** — **não substitui** a lista; **adiciona** mais uma categoria no final, por causa desta linha:

```30:33:/Applications/XAMPP/xamppfiles/htdocs/fatec/tec1/orientacao_objeto/Agregacao/Produto.class.php
    public function setCategoria($categoria)
    {
        $this->categoria[] = $categoria; // adiciona a categoria ao array
    }
```

Então, depois de criar o produto com duas categorias, se você chamar `setCategoria` de novo, o produto passa a ter **três** categorias (as antigas + a nova).

---

## `index.php` — como os arquivos se relacionam na prática

1. **`require_once`** — carrega as definições das classes antes de usar `new`:
   - `Produto.class.php` e `Categoria.class.php`.

2. **Cria categorias** — `new Categoria("...")` gera objetos independentes na memória.

3. **Cria produtos** — `new Produto(...)` passa nome, preço e **o array de objetos `Categoria`** que aquele produto vai usar.

4. **Alteração no meio do caminho** — para o primeiro produto:
   - Começa com duas categorias (Material Escolar e Material de Escritório).
   - Depois **`setCategoria($categoria3)`** **acrescenta** “Material de Desenho”.
   - Na tela, o produto 1 deve aparecer com **três** linhas de categoria.

5. **Exibição** — usa getters (`getNome`, `getPreco`, `getCategoria`) e, para cada categoria do array, chama `getDescritivo()`.

Fluxo mental:

```text
Categoria (objetos)  ──referência──►  array dentro de Produto
index.php            cria tudo e liga os objetos
```

---

## Resumo em uma frase

**`Categoria.class.php`** e **`Produto.class.php`** são os “molde” das coisas; **`index.php`** é o roteiro que **instancia** categorias e produtos, **liga** categorias aos produtos (agregação via array) e **mostra** os dados na página.

Se quiser, no próximo passo podemos desenhar no papel (ou em pseudocódigo) o estado do array de categorias do `produto1` linha a linha, para fixar o efeito do `setCategoria`.

